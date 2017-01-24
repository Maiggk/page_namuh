<?php

defined('BASEPATH') OR exit('No direct script access allowed');
//error_reporting( E_WARNING);
class Transferencias extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('Grocery_CRUD');

        $this->load->library('session');
        $this->load->library('Openpay/Openpay.php');
        $this->load->helper('url');
        $this->load->helper('utility_helper');
        $this->load->model('Transferencias_models');
    }

  private function _manejoDeErroresOpenPay1()
  {
      echo 1;
  }
 private function manejoDeErroresOpenPay2()
  {
      echo 2;
  }
    private function __manejoDeErroresOpenPay3()
  {
      echo 3;
  }
    public function routesFormaPago()
    {
        $opcionPago=$this->input->post('opcionPago');
        if(is_numeric($opcionPago))
        {
            if($opcionPago==1) $this->pagosTiendas();
            if($opcionPago==2) $this->pagosBancos();
            if($opcionPago==3) $this->pagos1();
        }else
        {

        }
    }
    public function cargarProcesoPago()
    {
          $productos=$this->Transferencias_models->regresaProductos();
        $nuevos_datos_recibo = Array();
        $montoTotal=0;
        foreach($productos as $producto)
        {
            $Total=2*$producto->precio;
            $nuevos_datos_recibo[] = array(
                'id_producto' =>$producto->id_producto,
                'codigo' =>$producto->codigo,
                'nombre' =>$producto->nombre,
                'descripcion' =>$producto->descripcion,
                'precio' =>$producto->precio,
                'estado_promocion' =>$producto->estado_promocion,
                'nuevo_precio' =>$producto->nuevo_precio,
                'cantidad' =>2,
                'total' =>$Total

            );
            $montoTotal=$producto->precio;
        }
        $data['productos']=$nuevos_datos_recibo;
        $data['montoTotal']=$montoTotal;
        $this->session->set_userdata('productosCarrito',$nuevos_datos_recibo);
         vista_ecommersFrame('ecommers/proceso_pago_view',$data);
    }
    public function seleccionarTipoPago()
    {
        /*
        $productos=$this->Transferencias_models->regresaProductos();
        $nuevos_datos_recibo = Array();
        $montoTotal=0;
        foreach($productos as $producto)
        {
            $Total=2*$producto->precio;
            $nuevos_datos_recibo[] = array(
                'id_producto' =>$producto->id_producto,
                'codigo' =>$producto->codigo,
                'nombre' =>$producto->nombre,
                'descripcion' =>$producto->descripcion,
                'precio' =>$producto->precio,
                'estado_promocion' =>$producto->estado_promocion,
                'nuevo_precio' =>$producto->nuevo_precio,
                'cantidad' =>2,
                'total' =>$Total

            );
            $montoTotal=$producto->precio;
        }
        $data['productos']=$nuevos_datos_recibo;
        $data['montoTotal']=$montoTotal;
        */
        vista_ecommers('ecommers/seleccionarTipoPago_view');
        //vista('ecommers/seleccionarTipoPago_view');
    }
    function eliminarProductoSesion()
    {
        $IdProducto=$this->input->post('id_producto');
        if(is_numeric($IdProducto))
        {
            if($IdProducto>=0)
            {
                $productosCarrito=$this->session->userdata('productosCarrito');
                unset($productosCarrito[$IdProducto]);
                $this->session->set_userdata('productosCarrito',$productosCarrito);
                $data['productos']=$productosCarrito;
                vista_vacia('ecommers/tabla_productos_view',$data);
            }
        }else
        {

        }
    }

    public function pagos1()
	{
        $mensaje=0;
        if($this->session->userdata('mensajeExito')==1)
        {
             $this->session->unset_userdata('mensajeExito');
             $mensaje=1;
        }
        $data['msj']=$mensaje;

        vista_vacia('ecommers/pagos_view1',$data);
       // vista_ecommers('ecommers/pagos_view1',$data);
       //vista_datos('ecommers/pagos_view1',$data);
       //vista('ecommers/pagos_view1');
	}

    public function openPayDate()
	{

        $descripcion='Compra de mesas';
        $monto_total=300.00;
        $consecutivo=$this->Transferencias_models->contarCompras(1);
        $consecutivo=$consecutivo+1;
        $order_id='NAMUHMEX-TARJETAS-'.$consecutivo;
        $form=array(
            'id_usuario'=>1,
            'descripcion'=> $descripcion,
            'monto_total'=> $monto_total,
            'tipo_pago'=> 1,
            'ruta_pdf'=>'',
            'cantidad_productos'=> 1,
            'estado_compra'=>1,
            'order_id'=>$order_id,
            'fecha_creacion'=> date('Y-m-d H:i:s'));

        try
        {
            $deviceIdHiddenFieldName=$this->input->post('deviceIdHiddenFieldName');
            $token_id=$this->input->post('token_id');
            $openpay = Openpay::getInstance('mdk69ifh7gkdr8czjl2o','sk_ed0e3f79120844769f6ca17959885783');

            $customer = array(
                'name' => 'Antonio',
                'last_name' => 'Ibarra',
                'phone_number' => '4421088190',
                'email' =>'reise234@hotmail.com');
            $chargeData = array(
                'method' => 'card',
                'source_id' => $token_id,
                'order_id' => $order_id,
                'amount' => (float)$monto_total,
                'description' => $descripcion,
                'use_card_points' => $_POST["use_card_points"], // Opcional, si estamos usando puntos
                'device_session_id' => $deviceIdHiddenFieldName,
                'customer' => $customer);

            $charge = $openpay->charges->create($chargeData);

            $id_compra=$this->Transferencias_models->guardaCompra($form);
            $this->session->set_userdata('mensajeExito',1);
            $this->pagos1();
        }
        catch (Exception $e)
        {
            $Error_general=$e->getTrace();
            $Error_semiEspecifico=$Error_general[0]['args'][0];
            $errorFinal=json_decode($Error_semiEspecifico);
            $error_code=$errorFinal->error_code;

            $msj=$this->_manejoDeErroresOpenPay($error_code);
            echo $msj;
           // $datos_verificacion=array("clave_notificacion"=>$e);
           //$id=$this->Transferencias_models->guardarClaveNotificacion($datos_verificacion);
        }
        /*
        echo '<script>
                    window.parent.location.href="'.base_url().'index.php/Metodo_tarjeta";
                </script>';*/
    }


    public function pagosTiendas()
    {
        try
        {

            $openpay = Openpay::getInstance('mdk69ifh7gkdr8czjl2o',
            'sk_ed0e3f79120844769f6ca17959885783');

            $consecutivo=$this->Transferencias_models->contarCompras(2);
            $consecutivo=$consecutivo+1;
            $order_id='NAMUHMEX-TIENDAS-'.$consecutivo;
            $descripcion='Cargo con tienda may';
            $monto_total=250;

            $chargeRequest = array(
            'method' => 'store',
            'amount' => $monto_total,
            'description' => $descripcion,
            'order_id' => $order_id);

            $customer = $openpay->customers->get('aika8ycygqij77py6apd');
            $charge = $customer->charges->create($chargeRequest);
            $rutaPdf=$charge->payment_method->reference;

            $form=array(
                        'id_usuario'=>1,
                         'descripcion'=> $descripcion,
                         'monto_total'=> $monto_total,
                         'tipo_pago'=> 2,
                         'ruta_pdf'=>$rutaPdf,
                         'cantidad_productos'=> 1,
                         'estado_compra'=>1,
                         'order_id'=> $order_id,
                         'fecha_creacion'=> date('Y-m-d H:i:s')
                        );
            $id_compra=$this->Transferencias_models->guardaCompra($form);
            $ruta='https://sandbox-dashboard.openpay.mx/paynet-pdf/mdk69ifh7gkdr8czjl2o/'.$rutaPdf;
            $data['regreso']=base_url().'index.php/metodoDePago';
            $data['archivo']=$ruta;
            $data['tituloPago']='Método de pago - Tiendas de conveniencia ';
            //vista_datos('ecommers/pagoTiendasBancos_view',$data);
            //vista_ecommers('ecommers/pagoTiendasBancos_view',$data);
            vista_vacia('ecommers/pagoTiendasBancos_view',$data);
        }
        catch (Exception $e)
        {
            $Error_general=$e->getTrace();
            $Error_semiEspecifico=$Error_general[0]['args'][0];
            $errorFinal=json_decode($Error_semiEspecifico);
            $error_code=$errorFinal->error_code;
            $msj=$this->_manejoDeErroresOpenPay($error_code);
            echo $msj;

           // $datos_verificacion=array("clave_notificacion"=>$e);
           //$id=$this->Transferencias_models->guardarClaveNotificacion($datos_verificacion);
        }
    }
    public function pagosBancos()
    {
        try
        {
            $openpay = Openpay::getInstance('mdk69ifh7gkdr8czjl2o',
            'sk_ed0e3f79120844769f6ca17959885783');
            $consecutivo=$this->Transferencias_models->contarCompras(3);
            $consecutivo=$consecutivo+1;
            $order_id='NAMUHMEX-BANCOS-'.$consecutivo;
            $descripcion='Cargo con tienda may';
            $monto_total=250;


            $chargeRequest = array(
            'method' => 'bank_account',
            'amount' => $monto_total,
            'description' => $descripcion,
            'order_id' => $order_id);

            $customer = $openpay->customers->get('aika8ycygqij77py6apd');
            $charge = $customer->charges->create($chargeRequest);


            $rutaPdf=$charge->id;

            $form=array(
                        'id_usuario'=>1,
                         'descripcion'=> $descripcion,
                         'monto_total'=> $monto_total,
                         'tipo_pago'=> 3,
                         'ruta_pdf'=>$rutaPdf,
                         'cantidad_productos'=> 1,
                         'estado_compra'=>1,
                         'order_id'=> $order_id,
                         'fecha_creacion'=> date('Y-m-d H:i:s')
                        );
            $id_compra=$this->Transferencias_models->guardaCompra($form);

            $ruta='https://sandbox-dashboard.openpay.mx/spei-pdf/mdk69ifh7gkdr8czjl2o/'.$rutaPdf;
            $data['archivo']=$ruta;
            $data['regreso']=base_url().'index.php/metodoDePago';
            $data['tituloPago']='Método de pago - Bancos ';
            //vista_datos('ecommers/pagoTiendasBancos_view',$data);
            //vista_ecommers('ecommers/pagoTiendasBancos_view',$data);
            vista_vacia('ecommers/pagoTiendasBancos_view',$data);

        }
        catch (Exception $e)
        {

            $Error_general=$e->getTrace();
            $Error_semiEspecifico=$Error_general[0]['args'][0];
            $errorFinal=json_decode($Error_semiEspecifico);
            if(isset($errorFinal->error_code))
            {
            $error_code=$errorFinal->error_code;
            $msj=$this->_manejoDeErroresOpenPay($error_code);
            echo $msj;
            }else
            {
                echo 'error';
            }
        }
    }
    /*
        funciones para visualizar historial y recibos individuales
    */
    function visualizarRecibos()
    {
        $this->session->unset_userdata('idArchivo');
        $idCliente=1;
        $data['recibos']=$this->Transferencias_models->regresaRecibos($idCliente);
        $data['tituloPago']='Historial de compras';
        //vista_datos('ecommers/recibosPdf_view',$data);
         vista_ecommers('ecommers/recibosPdf_view',$data);

    }
    function cargarIdRecibo()
    {
        $IdArchivo=$this->input->post('archivo');
        if(is_numeric($IdArchivo))
        {
            $this->session->unset_userdata('idArchivo');
             $this->session->set_userdata('idArchivo',$IdArchivo);
             echo '0';
        }else
        {
            echo '1';
        }
    }
    function visualizarRecibosEspecifico()
    {
        $idCompra=$this->session->userdata('idArchivo');
        if(is_numeric($idCompra))
        {
            $recibo=$this->Transferencias_models->regresaRecibo($idCompra);
            $rutaPdf=$recibo->ruta_pdf;
            $ruta='';
            if($recibo->tipo_pago==3)
            {
                 $ruta='https://sandbox-dashboard.openpay.mx/spei-pdf/mdk69ifh7gkdr8czjl2o/'.$rutaPdf;
                $data['tituloPago']='Método de pago - Bancos ';
            }
            if($recibo->tipo_pago==2)
            {
                $ruta='https://sandbox-dashboard.openpay.mx/paynet-pdf/mdk69ifh7gkdr8czjl2o/'.$rutaPdf;
                $data['tituloPago']='Método de pago - Tiendas de conveniencia ';

            }
            $data['regreso']=base_url().'index.php/recibos';
            $data['archivo']=$ruta;

           // vista_datos('ecommers/pagoTiendasBancos_view',$data);
            vista_ecommers('ecommers/pagoTiendasBancos_view',$data);
        }
    }

    /*
    funcion para recibir notificaciones!!
    */
    public function webhookNotificaciones()
    {
        $json = file_get_contents("php://input");
        $valor=json_decode($json);


       // $datos_verificacion=array("clave_notificacion"=>$json);
         //   $id=$this->Transferencias_models->guardarClaveNotificacion($datos_verificacion);
        /*


            $form=array(
                        'estado_compra'=>$json
			             //'fecha_creacion'=> date('Y-m-d H:i:s')
                        );
                    $this->Transferencias_models->updateEstadoCompra($order_id,$form);
        */
        if(strcmp($valor->type,'verification')==0)
        {
            $datos_verificacion=array("clave_notificacion"=>$valor->verification_code);
            $id=$this->Transferencias_models->guardarClaveNotificacion($datos_verificacion);
        }
        else
        {
             $order_id=$valor->transaction->order_id;
            //$valor->transaction->id;
            //$valor->transaction->status;
            $total=$this->Transferencias_models->buscarCompraCount($order_id);
            $mensaje='';
            if(is_numeric($total))
            {
                if($total>0)
                {
                    $tipo= $valor->type;
                    switch ($tipo)
                    {
                        case 'charge.refunded':
                                $mensaje="Informa cuando es reembolsado un cargo.";
                                break;
                        case 'charge.failed':
                                $mensaje="Informa cuando un cargo fallo y no se aplico.";
                                break;
                        case 'charge.cancelled':
                                $mensaje="Informa cuando un cargo es cancelado.";
                                break;
                        case 'charge.created':
                                $mensaje="Informa cuando un cargo es programado.";
                                break;
                        case 'charge.succeeded':
                                $mensaje="Informa cuando un cargo es aplicado.";
                                break;
                        case 'charge.rescored.to.decline':
                                $mensaje="Informa cuando a un cargo le es recalculado su score y es declinado.";
                                break;
                        case 'subscription.charge.failed':
                                $mensaje="Informa cuando el cargo de una suscripción fallo.";
                                break;
                        case 'payout.created':
                                $mensaje="Informa cuando un pago fue programado para el siguiente día.";
                                break;
                        case 'payout.succeeded':
                                $mensaje= "Informa cuando un pago programado se ha aplicado.";
                                break;
                        case 'payout.failed':
                                $mensaje= "Informa cuando un pago fallo.";
                                break;
                        case 'transfer.succeeded':
                                $mensaje= "Informa cuando se realiza una transferencia entre dos cuentas Openpay.";
                                break;
                        case 'fee.succeeded':
                                $mensaje= "Informa cuando se cobra un Fee a un Customer.";
                                break;
                        case 'fee.refund.succeeded':
                                $mensaje= "Informa cuando se reembolsa un Fee a un Customer.";
                                break;
                        case 'spei.received':
                                $mensaje= "Informa cuando se recibe un pago por SPEI para agregar fondos a la cuenta.";
                                break;
                        case 'chargeback.created':
                                $mensaje= "Informa cuando se recibió un chargeback de una transacción y se esta iniciando la investigación.";
                                break;
                        case 'chargeback.rejected':
                                $mensaje= "Informa cuando un contracargo fue rechazado.";
                                break;
                        case 'chargeback.accepted':
                                $mensaje= "Informa cuando un contracargo fue aceptado.";
                                break;
                        case 'order.created':
                                $mensaje= "Informa cuando una orden es creada y programada.";
                                break;
                        case 'order.activated':
                                $mensaje= "Informa cuando una orden es activada.";
                                break;
                        case 'order.payment.received':
                                $mensaje= "Informa cuando el pago de una orden es recibido.";
                                break;
                        case 'order.completed':
                                $mensaje= "Informa cuando una orden es completada.";
                                break;
                        case 'order.expired':
                                $mensaje= "Informa cuando una orden ha expirado.";
                                break;
                        case 'order.cancelled':
                                $mensaje= "Informa cuando una orden es cancelada.";
                                break;
                        case 'order.payment.cancelled':
                                $mensaje= "Informa cuando el pago de una orden es cancelado.";
                                break;
                    }

                     $form=array(
                        'estado_compra'=>$mensaje,
                        'estatus_compra'=>$valor->transaction->status
			             //'fecha_creacion'=> date('Y-m-d H:i:s')
                        );
                    $this->Transferencias_models->updateEstadoCompra($order_id,$form);
                }else
                {

                }

            }else
            {

            }

        }
    }

    /*
        Funcion para el manejo de errores de openPay
    */
    private function _manejoDeErroresOpenPay($Error_code)
    {
        $msj='';
        switch ($Error_code)
        {
            case 1000:
                $msj= "Ocurrió un error interno en el servidor de Openpay";
                break;
            case 1001:
                $msj= "El formato de la petición no es JSON, los campos no tienen el formato correcto, o la petición no tiene campos que son requeridos.";
                break;
            case 1002:
                $msj= "La llamada no esta autenticada o la autenticación es incorrecta.";
                break;
            case 1003:
                $msj= "La operación no se pudo completar por que el valor de uno o más de los parametros no es correcto.";
                break;
            case 1004:
                $msj= "Un servicio necesario para el procesamiento de la transacción no se encuentra disponible.";
                break;
            case 1005:
                $msj= "Uno de los recursos requeridos no existe.";
                break;
            case 1006:
                $msj= "Ya existe una transacción con el mismo ID de orden.";
                break;
            case 1007:
                $msj= "La transferencia de fondos entre una cuenta de banco o tarjeta y la cuenta de Openpay no fue aceptada.";
                break;
            case 1008:
                $msj= "Una de las cuentas requeridas en la petición se encuentra desactivada.";
                break;
            case 1009:
                $msj= "El cuerpo de la petición es demasiado grande.";
                break;
            case 1010:
                $msj= "Se esta utilizando la llave pública para hacer una llamada que requiere la llave privada, o bien, se esta usando la llave privada desde JavaScript.";
                break;
            case 2001:
                $msj= "La cuenta de banco con esta CLABE ya se encuentra registrada en el cliente.";
                break;
            case 2002:
                $msj= "La tarjeta con este número ya se encuentra registrada en el cliente.";
                break;
            case 2003:
                $msj= "El cliente con este identificador externo (External ID) ya existe.";
                break;
            case 2004:
                $msj= "El dígito verificador del número de tarjeta es inválido de acuerdo al algoritmo Luhn.";
                break;
            case 2005:
                $msj= "La fecha de expiración de la tarjeta es anterior a la fecha actual.";
                break;
            case 2006:
                $msj= "El código de seguridad de la tarjeta (CVV2) no fue proporcionado.";
                break;
            case 2007:
                $msj= "El número de tarjeta es de prueba, solamente puede usarse en Sandbox.";
                break;
            case 2008:
                $msj= "La tarjeta consultada no es valida para puntos.";
                break;
            case 3001:
                $msj= "La tarjeta fue declinada.";
                break;
            case 3002:
                $msj= "La tarjeta ha expirado.";
                break;
            case 3003:
                $msj= "La tarjeta no tiene fondos suficientes.";
                break;
            case 3004:
                $msj= "La tarjeta ha sido identificada como una tarjeta robada.";
                break;
            case 3005:
                $msj= "La tarjeta ha sido identificada como una tarjeta fraudulenta.";
                break;
            case 3006:
                $msj= "La operación no esta permitida para este cliente o esta transacción.";
                break;
            case 3008:
                $msj= "La tarjeta no es soportada en transacciones en linea.";
                break;
            case 3009:
                $msj= "La tarjeta fue reportada como perdida.";
                break;
            case 3010:
                $msj= "El banco ha restringido la tarjeta.";
                break;
            case 3011:
                $msj= "El banco ha solicitado que la tarjeta sea retenida. Contacte al banco.";
                break;
            case 3012:
                $msj= "Se requiere solicitar al banco autorización para realizar este pago.";
                break;
            case 4001:
                $msj= "La cuenta de Openpay no tiene fondos suficientes.";
                break;
            case 4002:
                $msj= "La operación no puede ser completada hasta que sean pagadas las comisiones pendientes.";
                break;
            case 5001:
                $msj= "La orden con este identificador externo (external_order_id) ya existe.";
                break;
            case 6001:
                $msj= "El webhook ya ha sido procesado.";
                break;
            case 6002:
                $msj= "No se ha podido conectar con el servicio de webhook.";
                break;
            case 6003:
                $msj= "El servicio respondio con errores.";
                break;
        }
        return $msj;

    }

    /*
    funcion para registrar clientes!!!
    */
    public function agregarCliente()
    {
        $openpay = Openpay::getInstance('mdk69ifh7gkdr8czjl2o',
        'sk_ed0e3f79120844769f6ca17959885783');

        $customerData = array(
        'external_id' => '',
        'name' => 'customer name',
        'last_name' => '',
        'email' => 'customer_email@me.com',
        'requires_account' => false,
        'phone_number' => '44209087654',
        'address' => array(
            'line1' => 'Calle 10',
            'line2' => 'col. san pablo',
            'line3' => 'entre la calle 1 y la 2',
            'state' => 'Queretaro',
            'city' => 'Queretaro',
            'postal_code' => '76000',
            'country_code' => 'MX'
            )
        );

        $customer = $openpay->customers->add($customerData);
        var_dump($customer);
    }

    /*
    Pagos a meses sin intereses
    */
    public function pagosMeses()
	{
       //vista_completa('pagosMeses_view');
       vista_admin('pagosMeses_view');
	}

    public function openPayDateMeses()
	{
          try {
        $deviceIdHiddenFieldName=$this->input->post('deviceIdHiddenFieldName');
        $token_id=$this->input->post('token_id');


       $precio=300.00;
        // vista_completa('pagos_view1');

        $openpay = Openpay::getInstance('mdk69ifh7gkdr8czjl2o',
        'sk_ed0e3f79120844769f6ca17959885783');
        // var_dump($openpay);

        $customer = array(
            'name' => 'Antonio',
            'last_name' => 'Ibarra',
            'phone_number' => '4421088190',
            'email' =>'reise234@hotmail.com');
           $pagos = array(
            'payments' => "6"
           );
$pag="";
        $chargeData = array(
            'method' => 'card',
            'source_id' => $token_id,
            'amount' => (float)$precio,
            'description' => 'Compra de mesas',
            'device_session_id' => $deviceIdHiddenFieldName,
            'order_id' => 'oid-00051',
            'customer' => $customer,
             "payment_plan"=>$pagos
        );

        $charge = $openpay->charges->create($chargeData);
          }catch(Exception $e)
          {
              var_dump($e);
          }



	}


}
?>

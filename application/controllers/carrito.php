<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrito extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('Grocery_CRUD');
    
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('utility_helper');
        $this->load->model('Transferencias_models');
    }
    
    
    
	public function index()
	{
	vista('shop-cart');
	}
    public function carritoConProductos()
    {
        //$this->output->enable_profiler(TRUE);
        $productosSesion=$this->session->userdata('pr0ductosV3nta');
        $nuevos_datos_recibo = Array();
        $montoTotal=0;
        foreach($productosSesion as $producto)
        {
            $idProducto=$producto['id_producto']*1;
            $productoBase=$this->Transferencias_models->regresaP($idProducto);
            if(count($productoBase)>0)
            {
            $Total=0;
            if($productoBase->estado_promocion==0)
            {
               $Total= $producto['cantidad']*$productoBase->precio;
            }else
            {
               $Total= $producto['cantidad']*$productoBase->nuevo_precio;
            }
            $nuevos_datos_recibo[] = array(
                'id_producto' =>$productoBase->id_producto,
                'codigo' =>$productoBase->codigo,
                'nombre' =>$productoBase->nombre,
                'imagen' =>base_url().'assets/uploads/productos_baja_resolucion/'.$productoBase->imagen,
                'descripcion' =>$productoBase->descripcion,
                'precio' =>$productoBase->precio,
                'estado_promocion' =>$productoBase->estado_promocion,
                'nuevo_precio' =>$productoBase->nuevo_precio,
                'cantidad' =>$producto['cantidad'],
                'total' =>$Total

            );
            $montoTotal=$Total+$montoTotal;
            }
        }
        $data['productos']=$nuevos_datos_recibo;
        $data['montoTotal']=$montoTotal;
        $this->session->set_userdata('productosCarrito',$nuevos_datos_recibo);

        $this->session->set_userdata('T0t4lProductoC4rr1t0',count($productosSesion));
       // var_dump(count($productosSesion));
         vista_ecommers('ecommers/carrito_view',$data);
    }
}

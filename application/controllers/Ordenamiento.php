
<?php
error_reporting(E_ALL ^ E_WARNING);
defined('BASEPATH') OR exit('No direct script access allowed');

class Ordenamiento extends CI_Controller {

	    function __construct(){

        parent::__construct();

        /* Cargamos la base de datos */
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('utility_helper');
        $this->load->library('Grocery_CRUD');
        $this->load->library('session');
		$this->load->model('Ordenamiento_models');
    }


     function verificarBusquedaAddOrdenamiento()
    {

        $cadena=$this->input->post('TextBuscar');
        $splitComas=explode(",",$cadena);
        $where='';
        $indice=0;
            $splitEspacios=explode(" ",$cadena);
            foreach($splitEspacios as $valor)
            {
              ///verificar que no contenga el, la, los, las, ellos, cuando,por, una,un, en,es,para,cuándo, qué, porque,porqué,de
                if(strlen($valor)>0)
                {
                   $like=' codigo like "%'.$valor.'%" ';
                   $or=' or ';
                    if($indice==0)
                    {
                       $where=$where.' '.$like;
                        $indice=$indice+1;
                    }
                    else
                    {
                       $where=$where.' '.$or.' '.$like;
                    }
                }
            }
        if(strlen($where)>0)
        $results=$this->Ordenamiento_models->regresaBusquedaCount($where);
        else $results='0';
        echo $results;
    }


    function busquedaProductosAddOrdenamiento()
    {
        $cadena=$this->input->post('TextBuscar');
        $splitComas=explode(",",$cadena);
        $where='';
        $indice=0;
            $splitEspacios=explode(" ",$cadena);
            foreach($splitEspacios as $valor)
            {
              ///verificar que no contenga el, la, los, las, ellos, cuando,por, una,un, en,es,para,cuándo, qué, porque,porqué,de
                if(strlen($valor)>0)
                {
                   $like=' codigo like "%'.$valor.'%" ';
                   $or=' or ';
                    if($indice==0)
                    {
                       $where=$where.' '.$like;
                        $indice=$indice+1;
                    }
                    else
                    {
                       $where=$where.' '.$or.' '.$like;
                    }
                }
          }

        if(strlen($where)>0)
        $data['results']=$this->Ordenamiento_models->regresaBusqueda($where);
        else $data['results']='';
        vista_tabla('ordenamiento/tabla_ordenamiento_add_view',$data);
    }

    function crearFiltradoProductosOrdenamientoAdd()
    {
        $nuevos_datos_recibo = Array();
        foreach($this->input->post('productos') as $producto)
        {
            $productosFiltrados=$this->Ordenamiento_models->regresaProductosFiltrados($producto);
            $nuevos_datos_recibo[] = array(
                'id_producto' =>$productosFiltrados->id_producto,
                'codigo' =>$productosFiltrados->codigo,
                'nombre' =>$productosFiltrados->nombre,
                'descripcion' =>$productosFiltrados->descripcion,
                'precio' =>$productosFiltrados->precio

            );
        }
         $this->session->set_userdata('productoFiltro',$nuevos_datos_recibo);
        $data['ProductosFiltrados'] = $nuevos_datos_recibo;
       vista_crud_admin_https('ordenamiento/productosOrdenamiento_view',$data);
    }

    function PromocionVaciarSesion()
    {
       	 $this->session->unset_userdata('productoFiltro');
        // redirect('Admin/agregarProductos/'.$this->session->userdata('Id_0rd3n4'));
        $id=$this->session->userdata('Id_0rd3n4_hijo_final');
          $this->session->unset_userdata('Id_0rd3n4_hijo_final');
          echo '<script>
            window.parent.location.href="'.base_url().'index.php/Admin/agregarProductos/'.$id.'";
            </script>';
    }
    function guardarCambiosProductos()
    {

       // $Porcentaje1=$this->input->post('porcentaje');
        //$Porcentaje=$Porcentaje1/100;

         foreach($this->session->userdata('productoFiltro') as $producto)
        {
             //$nuevoPrecio=$producto['precio']-($producto['precio']*$Porcentaje);

             $actualizarDatos=array(
                'id_aparicion' =>$this->session->userdata('num3ro_padre_0rd3n'),
                'id_sub_aparicion' =>$this->session->userdata('Id_0rd3n4_hijo_final')

            );
             $this->Ordenamiento_models->updateProductosPromocion($producto['id_producto'],$actualizarDatos);

        }
         $this->session->unset_userdata('productoFiltro');
        // $this->session->unset_userdata('Id_0rd3n4');
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    function verificarBusquedaQuitOrdenamiento()
    {

        $cadena=$this->input->post('TextBuscar');

        $splitComas=explode(",",$cadena);

        $where='';
        $indice=0;

            $splitEspacios=explode(" ",$cadena);

            foreach($splitEspacios as $valor)
            {
              ///verificar que no contenga el, la, los, las, ellos, cuando,por, una,un, en,es,para,cuándo, qué, porque,porqué,de
                if(strlen($valor)>0)
                {
                   $like=' codigo like "%'.$valor.'%" ';
                   $or=' or ';
                    if($indice==0)
                    {
                       $where=$where.' '.$like;
                        $indice=$indice+1;
                    }
                    else
                    {
                       $where=$where.' '.$or.' '.$like;
                    }
                }

          }
        if(strlen($where)>0)
        $results=$this->Ordenamiento_models->regresaBusquedaCountDesactivar($where);
        else $results='0';
        echo $results;

    }
      function busquedaQuitOrdenamiento()
    {
        $cadena=$this->input->post('TextBuscar');

        $splitComas=explode(",",$cadena);

        $where='';
        $indice=0;

            $splitEspacios=explode(" ",$cadena);

            foreach($splitEspacios as $valor)
            {
              ///verificar que no contenga el, la, los, las, ellos, cuando,por, una,un, en,es,para,cuándo, qué, porque,porqué,de
                if(strlen($valor)>0)
                {
                   $like=' codigo like "%'.$valor.'%" ';
                   $or=' or ';
                    if($indice==0)
                    {
                       $where=$where.' '.$like;
                        $indice=$indice+1;
                    }
                    else
                    {
                       $where=$where.' '.$or.' '.$like;
                    }
                }
          }

        if(strlen($where)>0)
        $data['results']=$this->Ordenamiento_models->regresaBusquedaDesactivar($where);
        else $data['results']='';
        vista_tabla('ordenamiento/tabla_ordenamiento_quit_view',$data);
    }

      function crearFiltradoProductosQuitOrdenamiento()
    {
        $nuevos_datos_recibo = Array();
        foreach($this->input->post('productos') as $producto)
        {
            $productosFiltrados=$this->Ordenamiento_models->regresaProductosFiltrados($producto);
            $nuevos_datos_recibo[] = array(
                'id_producto' =>$productosFiltrados->id_producto,
                'codigo' =>$productosFiltrados->codigo,
                'nombre' =>$productosFiltrados->nombre,
                'descripcion' =>$productosFiltrados->descripcion,
                'precio' =>$productosFiltrados->precio,
                'nuevo_precio' =>$productosFiltrados->nuevo_precio,
                'porcentaje' =>$productosFiltrados->porcentaje
            );
        }
         $this->session->set_userdata('productoFiltro1',$nuevos_datos_recibo);
        $data['ProductosFiltrados'] = $nuevos_datos_recibo;
       vista_crud_admin_https('ordenamiento/productosOrdenamientoQuit_view',$data);
    }

  function PromocionVaciarSesionDesactivar()
    {
       	 $this->session->unset_userdata('productoFiltro1');
          //redirect('Admin/agregarProductos/'.$this->session->userdata('Id_0rd3n4'));
     // $id=$this->session->userdata('Id_0rd3n4');
    //   $this->session->unset_userdata('Id_0rd3n4');
       echo '<script>
            window.parent.location.href="'.base_url().'index.php/Admin/quitarProductos";
            </script>';
    }
    function guardarCambiosProductosQuitOrdenamiento()
    {

        //$Porcentaje1=$this->input->post('porcentaje');
       // $Porcentaje=0;
        //$estadoPromocion=0;
         foreach($this->session->userdata('productoFiltro1') as $producto)
        {
              $actualizarDatos=array(
                'id_aparicion' =>0,
                'id_sub_aparicion' =>0

            );
             $this->Ordenamiento_models->updateProductosPromocion($producto['id_producto'],$actualizarDatos);

        }
         $this->session->unset_userdata('productoFiltro1');
    }








}

?>

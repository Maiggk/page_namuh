<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promociones extends CI_Controller {

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
		$this->load->model('Promociones_models');
    }

    function Promocion()
    {
       vista_admin('busqueda_view');
    }

     function verificarBusqueda()
    {
   //  $this->output->enable_profiler(TRUE);
        $cadena=$this->input->post('TextBuscar');

        $splitComas=explode(",",$cadena);

        $where='';
        $indice=0;

            $splitEspacios=explode(" ",$cadena);

            foreach($splitEspacios as $valor)
            {
              ///verificar que no contenga el, la, los, las, ellos, cuando,por, una,un, en,es,para,cuándo, qué, porque,porqué,de

                if(strlen($valor)>0)
                { /*
                if(strcasecmp ($valor, 'el' )!=0 &&
                   strcasecmp ($valor, 'la' )!=0 &&
                   strcasecmp ($valor, 'los' )!=0 &&
                   strcasecmp ($valor, 'las' )!=0 &&
                   strcasecmp ($valor, 'ellos' )!=0 &&
                   strcasecmp ($valor, 'cuando' )!=0 &&
                   strcasecmp ($valor, 'por' )!=0 &&
                   strcasecmp ($valor, 'una' )!=0 &&
                   strcasecmp ($valor, 'un' )!=0 &&
                   strcasecmp ($valor, 'en' )!=0 &&
                   strcasecmp ($valor, 'es' )!=0 &&
                   strcasecmp ($valor, 'para' )!=0 &&
                   strcasecmp ($valor, 'cuándo' )!=0 &&
                   strcasecmp ($valor, 'qué' )!=0 &&
                   strcasecmp ($valor, 'porque' )!=0 &&
                   strcasecmp ($valor, 'de' )!=0 &&
                   strcasecmp ($valor, 'y' )!=0 &&
                   strcasecmp ($valor, 'porqué' )!=0
                  )
                {*/
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
             //   }
                }

          }
        /*}*/
        if(strlen($where)>0)
        $results=$this->Promociones_models->regresaBusquedaCount($where);
        else $results='0';
echo $results;

    }


        function busquedaProductos()
    {
    //        $this->output->enable_profiler(TRUE);
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
                if(strcasecmp ($valor, 'el' )!=0 &&
                   strcasecmp ($valor, 'la' )!=0 &&
                   strcasecmp ($valor, 'los' )!=0 &&
                   strcasecmp ($valor, 'las' )!=0 &&
                   strcasecmp ($valor, 'ellos' )!=0 &&
                   strcasecmp ($valor, 'cuando' )!=0 &&
                   strcasecmp ($valor, 'por' )!=0 &&
                   strcasecmp ($valor, 'una' )!=0 &&
                   strcasecmp ($valor, 'un' )!=0 &&
                   strcasecmp ($valor, 'en' )!=0 &&
                   strcasecmp ($valor, 'es' )!=0 &&
                   strcasecmp ($valor, 'para' )!=0 &&
                   strcasecmp ($valor, 'cuándo' )!=0 &&
                   strcasecmp ($valor, 'qué' )!=0 &&
                   strcasecmp ($valor, 'porque' )!=0 &&
                   strcasecmp ($valor, 'de' )!=0 &&
                   strcasecmp ($valor, 'y' )!=0 &&
                   strcasecmp ($valor, 'porqué' )!=0
                  )
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

          }

        if(strlen($where)>0)
        $data['results']=$this->Promociones_models->regresaBusqueda($where);
        else $data['results']='';

        vista_tabla('tabla_promociones_detalle_view',$data);
    }

    function crearFiltradoProductos()
    {
        $nuevos_datos_recibo = Array();
        foreach($this->input->post('productos') as $producto)
        {
            $productosFiltrados=$this->Promociones_models->regresaProductosFiltrados($producto);
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
        vista_crud_admin('ProductosFiltrados_view',$data);
    }

    function PromocionVaciarSesion()
    {
       	 $this->session->unset_userdata('productoFiltro');
         redirect('Promociones/Promocion');
    }
    function guardarCambiosProductos()
    {

        $Porcentaje1=$this->input->post('porcentaje');
        $Porcentaje=$Porcentaje1/100;
        $estadoPromocion=1;
         foreach($this->session->userdata('productoFiltro') as $producto)
        {
             $nuevoPrecio=$producto['precio']-($producto['precio']*$Porcentaje);

             $actualizarDatos=array(
                'nuevo_precio' =>$nuevoPrecio,
                'porcentaje' =>$Porcentaje1,
                'estado_promocion' =>$estadoPromocion

            );
             $this->Promociones_models->updateProductosPromocion($producto['id_producto'],$actualizarDatos);

        }
         $this->session->unset_userdata('productoFiltro');
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

      function desactivarPromocion()
    {
       vista_admin('desactivarBusqueda_view');
    }

       function verificarBusquedaDesactivar()
    {

        //$cadena=$this->input->post('TextBuscar');

        $splitComas=explode(",",$cadena);

        $where='';
        $indice=0;

            $splitEspacios=explode(" ",$cadena);

            foreach($splitEspacios as $valor)
            {
              ///verificar que no contenga el, la, los, las, ellos, cuando,por, una,un, en,es,para,cuándo, qué, porque,porqué,de
                if(strlen($valor)>0)
                {
                if(strcasecmp ($valor, 'el' )!=0 &&
                   strcasecmp ($valor, 'la' )!=0 &&
                   strcasecmp ($valor, 'los' )!=0 &&
                   strcasecmp ($valor, 'las' )!=0 &&
                   strcasecmp ($valor, 'ellos' )!=0 &&
                   strcasecmp ($valor, 'cuando' )!=0 &&
                   strcasecmp ($valor, 'por' )!=0 &&
                   strcasecmp ($valor, 'una' )!=0 &&
                   strcasecmp ($valor, 'un' )!=0 &&
                   strcasecmp ($valor, 'en' )!=0 &&
                   strcasecmp ($valor, 'es' )!=0 &&
                   strcasecmp ($valor, 'para' )!=0 &&
                   strcasecmp ($valor, 'cuándo' )!=0 &&
                   strcasecmp ($valor, 'qué' )!=0 &&
                   strcasecmp ($valor, 'porque' )!=0 &&
                   strcasecmp ($valor, 'de' )!=0 &&
                   strcasecmp ($valor, 'y' )!=0 &&
                   strcasecmp ($valor, 'porqué' )!=0
                  )
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

          }
        /*}*/
        if(strlen($where)>0)
        $results=$this->Promociones_models->regresaBusquedaCountDesactivar($where);
        else $results='0';
echo $results;

    }
      function busquedaDesactivar()
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
                    /*
                if(strcasecmp ($valor, 'el' )!=0 &&
                   strcasecmp ($valor, 'la' )!=0 &&
                   strcasecmp ($valor, 'los' )!=0 &&
                   strcasecmp ($valor, 'las' )!=0 &&
                   strcasecmp ($valor, 'ellos' )!=0 &&
                   strcasecmp ($valor, 'cuando' )!=0 &&
                   strcasecmp ($valor, 'por' )!=0 &&
                   strcasecmp ($valor, 'una' )!=0 &&
                   strcasecmp ($valor, 'un' )!=0 &&
                   strcasecmp ($valor, 'en' )!=0 &&
                   strcasecmp ($valor, 'es' )!=0 &&
                   strcasecmp ($valor, 'para' )!=0 &&
                   strcasecmp ($valor, 'cuándo' )!=0 &&
                   strcasecmp ($valor, 'qué' )!=0 &&
                   strcasecmp ($valor, 'porque' )!=0 &&
                   strcasecmp ($valor, 'de' )!=0 &&
                   strcasecmp ($valor, 'y' )!=0 &&
                   strcasecmp ($valor, 'porqué' )!=0
                  )
                {*/
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
              //  }
                }

          }

        if(strlen($where)>0)
        $data['results']=$this->Promociones_models->regresaBusquedaDesactivar($where);
        else $data['results']='';

        vista_tabla('desactivar_promociones_view',$data);
    }

      function crearFiltradoProductosDesactivar()
    {
        $nuevos_datos_recibo = Array();
        foreach($this->input->post('productos') as $producto)
        {
            $productosFiltrados=$this->Promociones_models->regresaProductosFiltrados($producto);
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
        vista_crud_admin('ProductosFiltrados_desactivar_view',$data);
    }

  function PromocionVaciarSesionDesactivar()
    {
       	 $this->session->unset_userdata('productoFiltro1');
         redirect('Promociones/desactivarPromocion');
    }
    function guardarCambiosProductosDesactivar()
    {

        //$Porcentaje1=$this->input->post('porcentaje');
        $Porcentaje=0;
        $estadoPromocion=0;
         foreach($this->session->userdata('productoFiltro1') as $producto)
        {
             $nuevoPrecio=0;

             $actualizarDatos=array(
                'nuevo_precio' =>$nuevoPrecio,
                'porcentaje' =>$Porcentaje1,
                'estado_promocion' =>$estadoPromocion

            );
             $this->Promociones_models->updateProductosPromocion($producto['id_producto'],$actualizarDatos);

        }
         $this->session->unset_userdata('productoFiltro1');
    }








}

?>

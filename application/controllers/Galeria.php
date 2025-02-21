<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria extends CI_Controller {

	 function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->library('Grocery_CRUD');
    
      $this->load->library('session');
    $this->load->helper('url');
      $this->load->helper('utility_helper');	
         		$this->load->model('Admin_models');
  }
    
    
    
	 function index()
	{
        // $this->output->enable_profiler(TRUE);
        $data['imagenes']=$this->Admin_models->galeriaInicial();
        $data['fotos_carrusel']=$this->Admin_models->fotos_carrusel();
        $menuFinal=array();
        $categorias[]=array();
        $consultaCategorias=$this->Admin_models->consultaCategorias();
         
         $i=0;
         for($i=0;$i<count($consultaCategorias);$i++)
         {
             $categorias=$consultaCategorias[$i];
            // print();
            
             $consultarGrupos=$this->Admin_models->consultaGrupos1($consultaCategorias[$i]->id_categorias);
           
             $grupos=array();
             $j=0;
             
              for($j=0;$j<count($consultarGrupos);$j++)
              {
                  $grupo=$consultarGrupos[$j];
                  $consultaTipo=$this->Admin_models->consultaTipos($categorias->id_categorias,$grupo->id_grupo);
                 
                  $grupos[$j]['tipos']=$consultaTipo;
                  $grupos[$j]['nombreGrupo']=$grupo->grupo;
                 //$grupos[$j]['IDCATEGORIA']=$categorias->id_categorias;
                  $grupos[$j]['ID_GRUPO']=$grupo->id_grupo;
                  
              }
          // print_r($grupos);
             $menuFinal[$i]['grupos']=$grupos;
             $menuFinal[$i]['nombreCategoria']=$categorias->categoria;
             $menuFinal[$i]['ID_CATEGORIA']=$categorias->id_categorias;
         }
         $data['categorias']=$menuFinal;
	    //vista('galeria_view');
	   vista_datosGaleria('galeria_view',$data);
	}
    function filtroCategorias()
    {

         $categorias=$this->input->post('categoria');

        $this->session->unset_userdata('operacion');
        $this->session->unset_userdata('caregoria');
         $this->session->unset_userdata('grupo');
         $this->session->unset_userdata('tipo');

        $this->session->set_userdata('operacion',1);
         $this->session->set_userdata('caregoria',$categorias);



         $data['IMG']=$this->Admin_models->consultaImgCategorias($categorias);
     vista_datosGaleria('galeriaIMG_view',$data);
    }
      function filtroGrupos()
    {
         $grupo=$this->input->post('grupo');
         $categoria=$this->input->post('categoria');

        $this->session->unset_userdata('operacion');
        $this->session->unset_userdata('caregoria');
         $this->session->unset_userdata('grupo');
         $this->session->unset_userdata('tipo');

           $this->session->set_userdata('operacion',2);
         $this->session->set_userdata('caregoria',$categoria);
         $this->session->set_userdata('grupo',$grupo);


         $data['IMG']=$this->Admin_models->consultaImgGrupo($categoria,$grupo);
          vista_datosGaleria('galeriaIMG_view',$data);
         
    }  
    function filtroNinguno()
    {
              $this->session->unset_userdata('operacion');
        $this->session->unset_userdata('caregoria');
         $this->session->unset_userdata('grupo');
         $this->session->unset_userdata('tipo');



           $this->session->set_userdata('operacion',3);
         $data['IMG']=$this->Admin_models->galeriaInicial();
          vista_datosGaleria('galeriaIMG_view',$data);
         
    } 
    function filtroTipo()
    {

         $tipo=$this->input->post('tipo');
         $grupo=$this->input->post('grupo');
         $categoria=$this->input->post('categoria');

             $this->session->set_userdata('operacion',4);
             $this->session->set_userdata('caregoria',$categoria);
             $this->session->set_userdata('grupo',$grupo);
             $this->session->set_userdata('tipo',$tipo);

         $data['IMG']=$this->Admin_models->consultaImgTipo($tipo,$grupo,$categoria);
          vista_datosGaleria('galeriaIMG_view',$data);
         
    }
    /////////////////////
     function vfiltroCategorias()
    {
         $categorias=$this->input->post('categoria');
         $resp=$this->Admin_models->countConsultaImgCategorias($categorias);
    // vista_datos('galeriaIMG_msj_view',$data);
          echo $resp;
    }
      function vfiltroGrupos()
    {
         $grupo=$this->input->post('grupo');
         $categoria=$this->input->post('categoria');
        $resp=$this->Admin_models->countConsultaImgGrupo($categoria,$grupo);
         // vista_datos('galeriaIMG_msj_view',$data);
         echo $resp; 
    }  
     function vfiltroTipo()
    {

         $tipo=$this->input->post('tipo');
         $grupo=$this->input->post('grupo');
         $categoria=$this->input->post('categoria');
        $resp=$this->Admin_models->countConsultaImgTipo($tipo,$grupo,$categoria);
         echo $resp;
          //vista_datos('galeriaIMG_msj_view',$data);
         
    }
    
    ///////////////////////////////////////////7777
    function imgDetalle($id)
    {
        //$tipo=$this->input->get('tipo');
        $data['Foto']=$this->Admin_models->consultaImgProducto($id);
         vista_datosGaleria('galeriaIMG_fancy_view',$data);
    }


    function detalleProducto()
    {
         $id_producto=$this->input->get('id');

        if($id_producto!=''){
         $valor=$this->Admin_models->verificarExistenciaProductos($id_producto);
         $data['datosProducto']=$this->Admin_models->producto_insertado($id_producto);
         $data['detallesProducto']=$this->Admin_models->consultaProductoDetalles($id_producto);
            if($valor>0)
            {

                 $this->session->unset_userdata('produc');
                 $this->session->set_userdata('produc',$id_producto);

            //    $this->session->unset_userdata('proceso');
              //   $this->session->set_userdata('proceso',1);
                 vista_datosGaleria('detalle_producto_view',$data);

            }else
            {
              redirect('Galeria');
            }
        }else
        {
                redirect('Galeria');
        }
    }
    function  verificarDatos()
    {
        var_dump($this->session->userdata('pr0ductosV3nta'));
        //$this->session->unset_userdata('pr0ductosV3nta');
    }
    function cargarProductosAlcarrito()
    {
        $idProducto=$this->session->userdata('produc');
        $cantidadProductos=$this->input->post('cantidadProductos');
        if(is_numeric($idProducto) && is_numeric($cantidadProductos))
        {
          if($idProducto>0 && $cantidadProductos>0)
          {
              ///agregar producto y su cantidad al carrito, verificar si tiene descuento
              //SKU, ID, precio, precio con descuento, foto,descripcion,
              //consultar El sku
               $datosProducto= array(
                'id_producto' =>$idProducto,
                'cantidad' =>$cantidadProductos

               );

            $listaProductos = Array();
            $productosCarrito=$this->session->userdata('pr0ductosV3nta');
            $productoYaEnlista=0;
            $posicion=0;
              $total=0;
            if(count($productosCarrito,1)>0)
            {
                foreach($productosCarrito as $producto)
                {
                    if($producto['id_producto']==$idProducto)
                    {
                        $total=$producto['cantidad']+$cantidadProductos;
                        $productoYaEnlista=1;
                        unset($productosCarrito[$posicion]);
                    }
                   $posicion=$posicion+1;
                }

                if($productoYaEnlista==0)
                {
                    array_push($productosCarrito,$datosProducto);
                }else
                {
                   $datosProducto= array(
                    'id_producto' =>$idProducto,
                    'cantidad' =>$total
                    );
                   array_push($productosCarrito,$datosProducto);
                }

                $this->session->set_userdata('pr0ductosV3nta',array_values( $productosCarrito));

            }else
            {
              array_push($listaProductos,$datosProducto);
                $this->session->set_userdata('pr0ductosV3nta',$listaProductos);
            }
              $this->session->set_userdata('T0t4lProductoC4rr1t0',count($listaProductos));
              /*
            if(count($productosCarrito,1)>0)
            {
                array_push($productosCarrito,$datosProducto);
                // $this->session->set_userdata('productosFiltradosFinal',$datos);
            }else
            {
                $listaProductos[] = $producto;
            }
            */
          echo '0';
          }else{
             // redirect('Galeria');
              echo '1';
          }
        }else
        {
            redirect('Galeria');
        }
    }






}

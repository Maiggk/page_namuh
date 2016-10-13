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
     //    $this->output->enable_profiler(TRUE);
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
         $data['IMG']=$this->Admin_models->consultaImgCategorias($categorias);
     vista_datosGaleria('galeriaIMG_view',$data);
    }
      function filtroGrupos()
    {
         $grupo=$this->input->post('grupo');
         $categoria=$this->input->post('categoria');
         $data['IMG']=$this->Admin_models->consultaImgGrupo($categoria,$grupo);
          vista_datosGaleria('galeriaIMG_view',$data);
         
    }  
    function filtroNinguno()
    {

         $data['IMG']=$this->Admin_models->galeriaInicial();
          vista_datosGaleria('galeriaIMG_view',$data);
         
    } 
    function filtroTipo()
    {

         $tipo=$this->input->post('tipo');
         $grupo=$this->input->post('grupo');
         $categoria=$this->input->post('categoria');
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
            if($valor>0){
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






}

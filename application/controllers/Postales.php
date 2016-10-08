<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postales extends CI_Controller {

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
    
    
    
	public function index()
	{
        /*
        $datos['albums']=$this->Admin_models->trae_albums();
	vista_datos('postales_view',$datos);*/
        echo '<script>
            window.parent.location.href="'.base_url().'";
            </script>';
	}
	public function album()
	{
         
      //  $idAlbum=0;
        if($this->uri->segment(3)==NULL){
         echo '<script>
            window.parent.location.href="'.base_url().'#postales";
            </script>';
        }else{
            $idAlbum=$this->uri->segment(3);
            $datos['imagenes_postal']=$this->Admin_models->trae_postales($idAlbum);
            $datos['nombre_album']=$this->Admin_models->trae_nombre_album($idAlbum);
            vista_datos('postal_imagen_view',$datos);
        }
          /*  $idAlbum=$this->uri->segment(3);
           */
       /* }else{
               
        }*/
        
	}
}

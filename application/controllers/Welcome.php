<?php

defined('BASEPATH') OR exit('No direct script access allowed');
//error_reporting( E_WARNING);
class Welcome extends CI_Controller {

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

        $data['albums']=$this->Admin_models->trae_albums();
         $data['slides']= $this->Admin_models->traeSlides();
         $data['slidesInteriorismo']= $this->Admin_models->traeSlidesInteriorismo();

		vista_datos('principal',$data);

	}
}
?>

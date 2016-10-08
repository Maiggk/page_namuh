<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pruebas extends CI_Controller {

	 function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->library('Grocery_CRUD');
    
      $this->load->library('session');
    $this->load->helper('url');
      $this->load->helper('utility_helper');	
     // $this->load->helper('ssl_helper');	
  }
    
    
    
	public function index()
	{
    
		//vista_https_webcam('webcam');
	}
	
}

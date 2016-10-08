<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nosotros extends CI_Controller {

	 function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->library('Grocery_CRUD');
    
      $this->load->library('session');
    $this->load->helper('url');
      $this->load->helper('utility_helper');	
  }
    
    
    
	public function index()
	{
	vista('nosotros_view');
	}
}

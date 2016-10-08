<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	    function __construct(){

        parent::__construct();

        /* Cargamos la base de datos */
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->helper('form');
        $this->load->helper('url');
      
        $this->load->library('Grocery_CRUD');
        $this->load->library('session');
		 
    }
    
    
    
	public function index()
	{
		$this->load->view('welcome_message');
	}
}

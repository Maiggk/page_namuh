<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	 function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->library('Grocery_CRUD');
    
      $this->load->library('session');
    $this->load->helper('url');
      $this->load->helper('utility_helper');	
      $this->load->model('Login/Login_model');	
  }
    
    
    
	public function index()
	{
       echo '<script>
            window.parent.location.href="'.base_url().'";
            </script>';
    /*
		$crud = new grocery_CRUD();
		
		$crud->set_language("spanish");
		$crud->set_theme('bootstrap');
		
		$crud->set_table('namuhdb_usuarios');
		$crud->set_subject('Usuarios');
		
		$crud->display_as('idprueba','ID prueba');
		$crud->display_as('prueba','prueba');
		
        $output = $crud->render();
		vista_crud('example',$output);
        */
	}
    
    function inicio(){
       $userpass='';
        $u_mail=$this->input->post('uzer');                                  //valor de user de la vista principal (login)
        $p=$this->input->post('pazz');//valor de password de la vista principal (login)
       /* if($u_mail=="" || $p==""){
                 echo '<script>
            window.parent.location.href="'.base_url().'";
            </script>';
        }else{*/
            
        
            $id_uzer=$this->Login_model->trae_usuarios($u_mail);                 //busca usuario en la BD
            if($id_uzer>0){                                                 //valida si exisite se consulta
                $userdata=$this->Login_model->trae_datos_usuario($u_mail);       //consulta de datos de usuario
                $contra=hash('sha256', $p);                                 //encripta texto plano
                if($userdata->password==$contra){                                     //compara cadenas
                  echo 1;
                      $this->session->set_userdata('usser_var',$userdata->id_usuario);  
                    $this->session->set_userdata('nameUser',$userdata->nombre.' '.$userdata->ap_paterno);      //acceso  
                    if($userdata->id_usuario==1){
                    $this->session->set_userdata('admin_var',$userdata->id_usuario);      //carga de variable admin     
                    $this->session->set_userdata('us3r_cl1ent_v4r',$userdata->tipo_usuario);      //carga de variable admin   
                    }else{
                      $this->session->set_userdata('us3r_cl1ent_v4r',$userdata->tipo_usuario);      //carga de variable admin            
                    }
                    $this->session->set_flashdata('mensaje', 1);
                }else{
                echo 0;                                                     //de retache gallo
                }    
            }else{
                echo 0;                                                     //peleichon exception
            }
       // }
        
    }
    function cierra(){
        $this->session->unset_userdata('nameUser');
        $this->session->unset_userdata('admin_var');
        $this->session->unset_userdata('us3r_cl1ent_v4r');
         echo '<script>
            window.parent.location.href="'.base_url().'";
            </script>';
    }
    
}

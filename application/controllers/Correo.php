<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Correo extends CI_Controller {

  function __construct()
  {
    parent::__construct();
   
	$this->load->helper('url');
    $this->load->helper('utility_helper');
      
  }

function index(){
           echo '<script>
            window.parent.location.href="'.base_url().'";
            </script>';
    }
    
/*  azu@namuhmex.com */
function send_mail(){
    
    $nombre=$this->input->post('Nombre');
    $correo=$this->input->post('Dcorreo');
    $telefono=$this->input->post('Telefono');
    $asunto="Contacto desde página fecha: ".date('d-m-Y');
    $message=$this->input->post('Mensaje');
    if($nombre=="" || $correo=="" || $telefono =="" || $asunto=="" || $message==""){ //validacion de seguridad para no enviar spam
        echo '<script>
            window.parent.location.href="'.base_url().'";
            </script>';
    }else{
    $config = array(
                'protocol' 	=> 'smtp',
                'smtp_host' => 'a2plcpnl0536.prod.iad2.secureserver.net',
                'smtp_port' => 465,
                'smtp_user' => 'info@namuhmex.com',
                'smtp_pass' => 'Ventas_15',
                'smtp_crypto'   => 'ssl',
                'mailtype'  	=> 'html', 
                'charset'   	=> 'utf-8',
                'crlf' 		  	=> "\r\n",
                'newline'   	=> "\r\n",
            );  
    
/*    $config = array(
                'protocol' 	=> 'smtp',
                'smtp_host' => 'm55.siteground.biz',
                'smtp_port' => 465,
                'smtp_user' => 'info@namuhmex.com',
                'smtp_pass' => 'Ventas_15',
                'smtp_crypto'   => 'ssl',
                'mailtype'  	=> 'html', 
                'charset'   	=> 'utf-8',
                'crlf' 		  	=> "\r\n",
                'newline'   	=> "\r\n",
            );*/
                $this->load->library('email', $config);

                $this->email->to('info@namuhmex.com','Namuh Mail Test');
                $this->email->from($correo);

                $this->email->subject($asunto);
                $this->email->message($message.'<br>'.$nombre.', Tel:'.$telefono);	
                //$this->email->attach("assets/pedidos.pdf");

                if($this->email->send())
             {
              echo 'enviado';
                   // var_dump($this->email->print_debugger());
             }
             else
            {
                echo 'error';
                 //var_dump($this->email->print_debugger());
            }
        }
    }
}
?>
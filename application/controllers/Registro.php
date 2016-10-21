<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

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
		$this->load->model('Admin_models');
    }
    
    
     function verificarCamposRecivery()
    {	
       // $this->output->enable_profiler(TRUE);
        $user=$this->input->post('user');  
        $pass=$this->input->post('pass');  
        $pass1=$this->input->post('passtemp');  
        $codigo=$this->input->post('codigo');  
        
        $result=0;
        $result1=0;
        $result2=0;
        $result3=0;
        
        ///verificar si los pass no son iguales
        if(strcmp($pass,$pass1)!=0){$result1=1;}
        
        ///verificar si existe el usuairo
         $total=$this->Admin_models->verificarExistenciaUsuarioCodigo($user);
        if($total==0){$result2=1;}
        ///vericar que exite el codigo 
         $total1=$this->Admin_models->verificarExistenciaUsuarioCodigo1($codigo,$user);
        if($total1==0) $result3=1;
        
       
       if($result1==1 || $result2==1|| $result3==1)$result=1;
        
        /*
        echo $total;
        echo '<br/>';
            echo $total1;
        echo '<br/>';
        echo strcmp($pass,$pass1).'- '.$total.'-'.$total1.'-'.$result;
        */
        //echo $result1.'-'.$result2.'-'.$result3.'-'.$result;
       echo $result;
        // 0 exitoso
        // 1 los pass no son iguales
        // 2 no se encontro el usuario
        // 3 no se encontro el usuario y los passwords no son iguales
        
    }
    function actualizarPassRecovery()
    {
       // $this->output->enable_profiler(TRUE);
        $user=$this->input->post('user');  
        $pass=$this->input->post('pass');  
        $pass1=$this->input->post('passTemp');  
        $codigo=$this->input->post('codigo');  
        
         $data=array('password'=>hash("sha256",$pass),
                    'passwordTemp'=>''
                    );
            $this->Admin_models->actualizarUserPass($user,$data);
    }
    
    
     function recoveryLogin()
    {
        // vista('recovery_login_view');
         vista('recovery_login_view');
         //$this->load->view('recovery_login_view');
    }
     function recovery()
    {
        vista('recordar_login_view');
    }
    
        function verificarDatosrecivery()
    {
       $email=$this->input->post('email');  
         $total=$this->Admin_models->verificarExistenciaUsuarioEmail($email);
        $result=0;
        if($total>0)$result=1;
        
        echo $result;
    }
    function enviarCorreoRecovery()
    {
       // $this->output->enable_profiler(TRUE);
         $email=$this->input->post('email'); 
        $datos=$this->Admin_models->regresaUsuarioEmail($email);
        $userName=$datos->username;
        $Id=$datos->id_usuario;
        
        
        $MD5=date('d-m-Y').'Cerbero';
        $passTemp= md5($MD5);
        $formD=array(
			'passwordTemp'	=>$passTemp
		);
        $this->Admin_models->insertarPassTemp($Id,$formD);
             ///mandar correo
    $asunto="namuhmex.com Restablecimiento de contraseña ".date('d-m-Y');
    $message="
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
	<html xmlns='http://www.w3.org/1999/xhtml'>
		<head>
			<link rel='shortcut icon' href='' />
			<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
			<title></title>
		</head>
		<body> 
			<div style='font-family: Arial, Helvetica, sans-serif;font-weight: bold;'>
                <center>
			<table width='900px'  cellpadding='0' cellspacing='0' style='border-top-left-radius:15px; border-top-right-radius:15px; border: 1px solid #ffffff; border-bottom-left-radius:15px; border-bottom-right-radius:15px; text-align:center'>
				<tr>
					<td width='200' height='15' bgcolor='#000000' align='center' valign='middle' style=';'>
						&nbsp;
					</td>
				</tr>
				<tr>
					<td width='200' height='15' bgcolor='#000000' align='center' valign='middle'>
						<img src='https://66.media.tumblr.com/8666f2283beb65c914ce6bc8358c3910/tumblr_oc4mheyzkj1rzih5io1_500.png'  align='center' width='15%'  style='padding-left: 15px;'/>
						<!--<img src='<?php echo base_url(); ?>assets/img/logo_Main.png' width='15%'  align='center' />-->
					</td>
				</tr>
				<tr>
					<td width='200' height='15' bgcolor='#000000' align='center' valign='middle' >
						&nbsp;
					</td>
				</tr>
				<!--tabla donde lleva la informacionCorrespondiente-->
				<!--tabla donde lleva la informacionCorrespondiente-->
				<!--tabla donde lleva la informacionCorrespondiente-->
				<tr >
					<td>
						<!--tabla interna/*****************************************************************************************-->
						<!--tabla interna/*****************************************************************************************-->
						<!--tabla interna/*****************************************************************************************-->
						<div id='tablaSecundaria' style='width=100%;  border-top: solid #EFEFEF 1px;'>
							<table style='width=100%; ' >
								<thead>	
								</thead>
								<tbody>
									
									<tr style='color: #000000;'>
										<th width='1000' style='text-align:center'>
										<br/>
                                       
	                               <h4 style='text-align : left;'>
                                   Estimado ".$datos->nombre.' '.$datos->ap_paterno.' '.$datos->ap_materno.", se le ha proporcionado un código temporal (el cual debe ser ingresado en el formulario del paso 2) para poder restaurar su contraseña.</h4>
                                            <h2>Código:".$passTemp."</h2>
                                            <h5>Para continuar de click en el siguiente enlace</h5>
                                           
										</th>
									</tr>
									<tr style='color: #000000;'>
										<th width='200' align='center' >
											<div id='boton' style='width:140px;'>
                                            
                                                <a style='color: #020202; border: 2px solid #a1a1a1;  background:#000000; padding: 15%;color:#ffffff; font-size:18px; text-decoration:none;display:block;text-align:center;'  
                                                   href='".base_url().'index.php/Registro/recoveryLogin'.''."'>
													Continuar
                                                </a>
											</div>
											<br/>
										</th>
									</tr>
								</tbody>
							</table>
						</div>
						<!--Fin tabla interna/*****************************************************************************************-->
						<!--Fin tabla interna/*****************************************************************************************-->
						<!--Fin tabla interna/*****************************************************************************************-->
					</td>
				</tr>
				<!--fin tabla donde lleva la informacionCorrespondiente < ?php echo base_url().''.base64_encode-->
				
				<!--footer de la tabla/////////////////////////////////////////////////////////////////////////////////////////////-->
				<!--footer de la tabla/////////////////////////////////////////////////////////////////////////////////////////////-->
				<!--footer de la tabla/////////////////////////////////////////////////////////////////////////////////////////////-->
				<tr>
					<td colspan='6' bgcolor='#bebaba'  style=' text-align:Center; padding-left:15px;font-size:13px'>
						<br/>
						AVISO DE PRIVACIDAD
						<br/>
						<br/>
					</td> 
				</tr>
				<tr>
					<td width='200'  bgcolor='#bebaba' height='15' align='center' valign='middle'
					style='padding: 0px 20px 20px; font-weight: 100;text-align:justify;font-size:12px'  >
					De acuerdo a lo Previsto en la “Ley Federal de Protección de Datos Personales”, declara NAMUH  S.A. de C.V., ser una empresa legalmente constituida de conformidad con las leyes mexicanas, con domicilio en Camino Alcocer  KM 2.2 s/n, C.P. 37760 ciudad San Miguel de Allende, Guanajuato.; y como responsable del tratamiento de sus datos personales, hace de su conocimiento que la información de nuestros clientes es tratada de forma estrictamente confidencial al proporcionar sus datos personales.
					</td>
				</tr>
                <br>
				<!--fin footer de la tabla/////////////////////////////////////////////////////////////////////////////////////////////-->
				<!--fin footer de la tabla/////////////////////////////////////////////////////////////////////////////////////////////-->
				<!--fin footer de la tabla/////////////////////////////////////////////////////////////////////////////////////////////-->
			</table>
                    </center>
			</div>
	</body>
	</html>";
    
          $config = array(
                'protocol' 	=> 'smtp',
                'smtp_host' => 'a2plcpnl0536.prod.iad2.secureserver.net',
                'smtp_port' => 465,
                'smtp_user' => 'paginacontacto@namuhmex.com',
                'smtp_pass' => 'N4MUHM3X.',
                'smtp_crypto'   => 'ssl',
                'mailtype'  	=> 'html', 
                'charset'   	=> 'utf-8',
                'crlf' 		  	=> "\r\n",
                'newline'   	=> "\r\n",
            );
                $this->load->library('email', $config);

                   $this->email->to($email,'namuhmex Mail Test');
                $this->email->from('paginacontacto@namuhmex.com');

                $this->email->subject($asunto);
                $this->email->message($message);	
                //$this->email->attach("assets/pedidos.pdf");

                if($this->email->send())
             {
                     //$this->session->set_userdata('error_envio',2);//2 exitoso
              echo '0';
                    //var_dump($this->email->print_debugger());
             }
             else
            {
                 echo '1';
                  //$this->session->set_userdata('error_envio',1);//1 error
                //echo 'error';
                 //var_dump($this->email->print_debugger());
            }
    }
    
	public function index()
	{
		vista('registrar_view');
	}
    
    function guardarDatos ()
    {
       //  $this->output->enable_profiler(TRUE);            
        $nombre=$this->input->post('nombre');
        $Username=$this->input->post('user');
        $apPaterno=$this->input->post('apPaterno');
        $apMaterno=$this->input->post('apMaterno');
        $telefono=$this->input->post('telefono');
        $correo=$this->input->post('correo');
        $pass=$this->input->post('pass');
        
        
        if($nombre==""  || 
           $Username==""||
          $apPaterno==""||
          $apMaterno==""||
          $telefono==""||
          $correo==""||
          $pass==""){
            echo '<script>
            window.parent.location.href="'.base_url().'";
            </script>';
        }else{
       	$pass1=hash("sha256",$pass);
        $date=date('Y-m-d');
        $form=array(
            
            'correo'=>$correo,
            'password'=>$pass1,
            'username'=>$Username,
            'estado_usuario'=>0,
            'nombre'=>$nombre,
            'ap_paterno'=>$apPaterno,
            'ap_materno'=>$apMaterno,
            'telefono'=>$telefono,
            'tipo_usuario'=>2,
            'fecha'=>$date
                   );
         
      //  print_r($this->catalogos_models->sha('cer'));
        $id_usuario= $this->Admin_models->saveUsers($form); 
        
        
        
        ////enviar correo para confirmacion 
        //////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////
                ///mandar correo
    $asunto="namuhmex.com confirmación cuenta";
    $message="
	<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
	<html xmlns='http://www.w3.org/1999/xhtml'>
		<head>
			<link rel='shortcut icon' href='' />
			<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
			<title></title>
		</head>
		<body> 
			<div style='font-family: Arial, Helvetica, sans-serif;font-weight: bold;'>
                <center>
			<table width='900px'  cellpadding='0' cellspacing='0' style='border-top-left-radius:15px; border-top-right-radius:15px; border: 1px solid #ffffff; border-bottom-left-radius:15px; border-bottom-right-radius:15px; text-align:center'>
				<tr>
					<td width='200' height='15' bgcolor='#000000' align='center' valign='middle' style=';'>
						&nbsp;
					</td>
				</tr>
				<tr>
					<td width='200' height='15' bgcolor='#000000' align='center' valign='middle'>
						<img src='https://66.media.tumblr.com/8666f2283beb65c914ce6bc8358c3910/tumblr_oc4mheyzkj1rzih5io1_500.png'  align='center' width='15%'  style='padding-left: 15px;'/>
<!--						<img src='<?php echo base_url(); ?>assets/img/logo_Main.png' width='15%'  align='center' />-->
					</td>
				</tr>
				<tr>
					<td width='200' height='15' bgcolor='#000000' align='center' valign='middle' >
						&nbsp;
					</td>
				</tr>
				<!--tabla donde lleva la informacionCorrespondiente-->
				<!--tabla donde lleva la informacionCorrespondiente-->
				<!--tabla donde lleva la informacionCorrespondiente-->
				<tr >
					<td>
						<!--tabla interna/*****************************************************************************************-->
						<!--tabla interna/*****************************************************************************************-->
						<!--tabla interna/*****************************************************************************************-->
						<div id='tablaSecundaria' style='width=100%;  border-top: solid #EFEFEF 1px;'>
							<table style='width=100%; ' >
								<thead>	
								</thead>
								<tbody>
									
									<tr style='color: #000000;'>
										<th width='1000' style='text-align:center'>
										<br/>
										Estimado ".$nombre.' '.$apPaterno." confirme su registro dando click en el siguiente boton
										</th>
									</tr>
									<tr style='color: #000000;'>
										<th width='200' align='center' >
											<div id='boton' style='width:140px;'>
                                                <br>
												<a style='color: #020202; border: 2px solid #a1a1a1; background:#000000; padding: 15%; 
													color:#ffffff; font-size:18px; text-decoration:none;display:block; 
													text-align:center;'  
													href='".base_url().'index.php/Registro/confirmacionLogin?'.base64_encode('idUser='.$id_usuario)."'>
													Confirmar</a>
											</div>
											<br/>
										</th>
									</tr>
								</tbody>
							</table>
						</div>
						<!--Fin tabla interna/*****************************************************************************************-->
						<!--Fin tabla interna/*****************************************************************************************-->
						<!--Fin tabla interna/*****************************************************************************************-->
					</td>
				</tr>
				<!--fin tabla donde lleva la informacionCorrespondiente < ?php echo base_url().''.base64_encode-->
				
				<!--footer de la tabla/////////////////////////////////////////////////////////////////////////////////////////////-->
				<!--footer de la tabla/////////////////////////////////////////////////////////////////////////////////////////////-->
				<!--footer de la tabla/////////////////////////////////////////////////////////////////////////////////////////////-->
				<tr>
					<td colspan='6' bgcolor='#bebaba'  style=' text-align:Center; padding-left:15px;font-size:13px'>
						<br/>
						AVISO DE PRIVACIDAD
						<br/>
						<br/>
					</td> 
				</tr>
				<tr>
					<td width='200'  bgcolor='#bebaba' height='15' align='center' valign='middle'
					style='padding: 0px 20px 20px; font-weight: 100;text-align:justify;font-size:12px'  >
					De acuerdo a lo Previsto en la “Ley Federal de Protección de Datos Personales”, declara NAMUH  S.A. de C.V., ser una empresa legalmente constituida de conformidad con las leyes mexicanas, con domicilio en Camino Alcocer  KM 2.2 s/n, C.P. 37760 ciudad San Miguel de Allende, Guanajuato.; y como responsable del tratamiento de sus datos personales, hace de su conocimiento que la información de nuestros clientes es tratada de forma estrictamente confidencial al proporcionar sus datos personales.
					</td>
				</tr>
                <br>
				<!--fin footer de la tabla/////////////////////////////////////////////////////////////////////////////////////////////-->
				<!--fin footer de la tabla/////////////////////////////////////////////////////////////////////////////////////////////-->
				<!--fin footer de la tabla/////////////////////////////////////////////////////////////////////////////////////////////-->
			</table>
                    </center>
			</div>
	</body>
	</html>";
    
    $config = array(
                'protocol' 	=> 'smtp',
                'smtp_host' => 'a2plcpnl0536.prod.iad2.secureserver.net',
                'smtp_port' => 465,
                'smtp_user' => 'paginacontacto@namuhmex.com',
                'smtp_pass' => 'N4MUHM3X.',
                'smtp_crypto'   => 'ssl',
                'mailtype'  	=> 'html', 
                'charset'   	=> 'utf-8',
                'crlf' 		  	=> "\r\n",
                'newline'   	=> "\r\n",
            );
                $this->load->library('email', $config);

                   $this->email->to($correo,'namuhmex Mail Test');
                $this->email->from('paginacontacto@namuhmex.com');

                $this->email->subject($asunto);
                $this->email->message($message);	
                //$this->email->attach("assets/pedidos.pdf");

                if($this->email->send())
             {
                     //$this->session->set_userdata('error_envio',2);//2 exitoso
              echo '1';
                 
                    //var_dump($this->email->print_debugger());
             }
             else
            {
                  //$this->session->set_userdata('error_envio',1);//1 error
                echo '0';
                
                 //var_dump($this->email->print_debugger());
            }
            
        }
        ///////////////////////////////////////////////////////////////////////////////
        
        
        
        //////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////
        
        
        
        
    }

      function verificarCorreo()
    {
          $correo=$this->input->post('correo');
          $resp='';
        $resp= $this->Admin_models->countCorreos($correo);
        echo $resp;
    }
    function confirmacionLogin()
    {
        //base64_encode('idUser='.$id_usuario)
        $url=$_SERVER['REQUEST_URI'];
        $valores=explode("?",$url);
        $id='0';
        if(count($valores)>1)
        {
            $pasoDos=explode("=",base64_decode($valores[1]));
                             $id=''.$pasoDos[1];
        }
        
        
        //$this->input->get('id', TRUE)
        
        $idUsuario=$id;
        $Existe=0;
        //verificar si el usuario existe
        $total=$this->Admin_models->consultarUsuario($idUsuario);
        ///actualizar usuario
        $correo="";
        if($total>0)
        {
            $data=array('estado_usuario'=>'1');
            $this->Admin_models->actualizarUser($idUsuario,$data);
            $this->enviarCorreoBienvenida($idCliente);
           // $datosContacto=$this->User_models->consultarCorreoUsuario($idUsuario);
        //    $correo=$datosContacto->correo;
          //  $Existe=1;
        }
        
   
         echo "<script type='text/javascript'>
      window.parent.location='".base_url()."'
      </script>";
    }
    
    function enviarCorreoBienvenida($idCliente)
    {

             $config = array(
                'protocol' 	=> 'smtp',
                'smtp_host' => 'a2plcpnl0536.prod.iad2.secureserver.net',
                'smtp_port' => 465,
                'smtp_user' => 'paginacontacto@namuhmex.com',
                'smtp_pass' => 'N4MUHM3X.',
                'smtp_crypto'   => 'ssl',
                'mailtype'  	=> 'html',
                'charset'   	=> 'utf-8',
                'crlf' 		  	=> "\r\n",
                'newline'   	=> "\r\n",
            );
                ///mandar correo
            $this->load->library('email', $config);


            $filename =base_url().'assets/img/correoBienvenida/CORREO_BIENVENIDA _9.jpg';

           $sa= $this->email->attach($filename);
              /* */
            $cid = $this->email->attachment_cid($filename);

        $datos=$this->Admin_models->consultarUsuarioDatosGeneral($idCliente);

        $asunto="namuhmex.com Estimado ".$datos->nombre." ".$datos->ap_paterno." Gracias por su registro ";
        $message="<a href='https://namuhmex.com/index.php'><img src='cid:".$cid."' align='center'/></a>";

                $this->email->to($datos->correo,'namuhmex Mail Test');
                $this->email->from('paginacontacto@namuhmex.com');

                $this->email->subject($asunto);
                $this->email->message($message);

                if($this->email->send())
             {
                     //$this->session->set_userdata('error_envio',2);//2 exitoso
              //echo '1';

                    //var_dump($this->email->print_debugger());
             }
             else
            {
                  //$this->session->set_userdata('error_envio',1);//1 error
                //echo '0';

                 //var_dump($this->email->print_debugger());
            }

    }


}

?>

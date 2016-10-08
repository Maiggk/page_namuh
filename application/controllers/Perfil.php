<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {

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
		$this->load->model('Perfiles_models');
    }
    
    
    
    
	public function editPerfil()
	{
        $idUsuario=$this->session->userdata('usser_var');
        if($idUsuario!=''){
        $datos['userInfo']=$this->Perfiles_models->consultarUsuario($idUsuario); 
        vista_datos('Perfiles/edit_perfil_view',$datos);
        
          }else{
         echo '<script>
            window.parent.location.href="'.base_url().'";
            </script>';
     }
	}
    function buscarPassword()
    {
          $idUsuario=$this->session->userdata('usser_var');
          if($idUsuario!=''){
      
        $pass=$this->input->post('pass');
        $pass1=hash("sha256",$pass);
        $oldPass= $this->Perfiles_models->consultarPassword($idUsuario); 
        if(strcasecmp ($oldPass, $pass1 )==0)
        {
           echo 1; 
        }else
        {
            echo 0; 
        }
                }else{
         echo '<script>
            window.parent.location.href="'.base_url().'";
            </script>';
     }
    }
    function actualizarPass()
    {
         $idUsuario=$this->session->userdata('usser_var');
         if($idUsuario!=''){
        $pass=$this->input->post('pass');
         $pass1=hash("sha256",$pass);
         $form=array('password'=>$pass1);
        $this->Perfiles_models->updatePassword($idUsuario,$form); 
                      }else{
         echo '<script>
            window.parent.location.href="'.base_url().'";
            </script>';
     }
    }
    function actualizarUsuario()
    {
          $idUsuario=$this->session->userdata('usser_var');
        if($idUsuario!=''){
         $nombre=$this->input->post('nombre');
         $ap_paterno=$this->input->post('ap_paterno');
         $ap_materno=$this->input->post('ap_materno');
         $userName=$this->input->post('userName');
         $correo=$this->input->post('correo');
         $telefono=$this->input->post('telefono');
         $direccion=$this->input->post('direccion');
        $form=array(
                    'nombre'=>$nombre,
                    'ap_paterno'=>$ap_paterno,
                    'ap_materno'=>$ap_materno,
                    'username'=>$userName,
                    'correo'=>$correo,
                    'telefono'=>$telefono,
                    'direccion'=>$direccion
                   );
       
         $this->Perfiles_models->updatePassword($idUsuario,$form);
        $this->session->set_userdata('msj_exito',1);//2 exitoso
        echo '<script>parent.location="'.base_url().'index.php/Perfil/editPerfil";</script>';
                          }else{
         echo '<script>
            window.parent.location.href="'.base_url().'";
            </script>';
     }
    }

    function consultarNuevaFotodePerfil()
    {
          $idUsuario=$this->session->userdata('usser_var');
         if($idUsuario!=''){
           $nombreFoto=$this->Perfiles_models->consultarFotoPerfil($idUsuario);
             if($nombreFoto!='')
             echo base_url(). "assets/uploads/fotosPerfil/".$nombreFoto;
                 else
                     echo '';
         }else
         {
              echo '<script>
            window.parent.location.href="'.base_url().'";
            </script>';
         }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
     function imagen()
    {
        $imgUrl = $_POST['imgUrl'];
        // echo '<script>alert('.$imgUrl.');</script>';
// original sizes
$imgInitW = $_POST['imgInitW'];
$imgInitH = $_POST['imgInitH'];
// resized sizes
$imgW = $_POST['imgW'];
$imgH = $_POST['imgH'];
// offsets
$imgY1 = $_POST['imgY1'];
$imgX1 = $_POST['imgX1'];
// crop box
$cropW = $_POST['cropW'];
$cropH = $_POST['cropH'];
// rotation angle
$angle = $_POST['rotation'];

$jpeg_quality = 100;
$nombre="croppedImg_".rand();
$output_filename = "assets/uploads/fotosPerfil/".$nombre;

// uncomment line below to save the cropped image in the same location as the original image.
//$output_filename = dirname($imgUrl). "/croppedImg_".rand();

$what = getimagesize($imgUrl);

switch(strtolower($what['mime']))
{
    case 'image/png':
        $img_r = imagecreatefrompng($imgUrl);
		$source_image = imagecreatefrompng($imgUrl);
		$type = '.png';
        break;
    case 'image/jpeg':
        $img_r = imagecreatefromjpeg($imgUrl);
		$source_image = imagecreatefromjpeg($imgUrl);
		error_log("jpg");
		$type = '.jpeg';
        break;
    case 'image/gif':
        $img_r = imagecreatefromgif($imgUrl);
		$source_image = imagecreatefromgif($imgUrl);
		$type = '.gif';
        break;
    default: die('image type not supported');
}


//Check write Access to Directory

if(!is_writable(dirname($output_filename))){
	$response = Array(
	    "status" => 'error',
	    "message" => 'Can`t write cropped File'
    );	
}else{

    // resize the original image to size of editor
    $resizedImage = imagecreatetruecolor($imgW, $imgH);
	imagecopyresampled($resizedImage, $source_image, 0, 0, 0, 0, $imgW, $imgH, $imgInitW, $imgInitH);
    // rotate the rezized image
    $rotated_image = imagerotate($resizedImage, -$angle, 0);
    // find new width & height of rotated image
    $rotated_width = imagesx($rotated_image);
    $rotated_height = imagesy($rotated_image);
    // diff between rotated & original sizes
    $dx = $rotated_width - $imgW;
    $dy = $rotated_height - $imgH;
    // crop rotated image to fit into original rezized rectangle
	$cropped_rotated_image = imagecreatetruecolor($imgW, $imgH);
	imagecolortransparent($cropped_rotated_image, imagecolorallocate($cropped_rotated_image, 0, 0, 0));
	imagecopyresampled($cropped_rotated_image, $rotated_image, 0, 0, $dx / 2, $dy / 2, $imgW, $imgH, $imgW, $imgH);
	// crop image into selected area
	$final_image = imagecreatetruecolor($cropW, $cropH);
	imagecolortransparent($final_image, imagecolorallocate($final_image, 0, 0, 0));
	imagecopyresampled($final_image, $cropped_rotated_image, 0, 0, $imgX1, $imgY1, $cropW, $cropH, $cropW, $cropH);
	// finally output png image
	//imagepng($final_image, $output_filename.$type, $png_quality);
	imagejpeg($final_image, $output_filename.$type, $jpeg_quality);
   $nombreArchivoFinal=$nombre.''.$type;
    
    
    ///guardar el la base de datos
     $form=array(
                    'foto_perfil'=>$nombreArchivoFinal
                   );
         $idUsuario=$this->session->userdata('usser_var');
         $this->Perfiles_models->updatePassword($idUsuario,$form);
    
    $output_filename1 = base_url().''.$output_filename.''.$type;
	$response = Array(
	    "status" => 'success',
	    "url" => $output_filename1
    );
}
print json_encode($response);
    }
    function gurdarInagenPerfil()
    {
        
    $imagePath = "assets/uploads/fotosPerfil/";

	$allowedExts = array("gif", "jpeg", "jpg", "png", "GIF", "JPEG", "JPG", "PNG");
	$temp = explode(".", $_FILES["img"]["name"]);
	$extension = end($temp);
	
	//Check write Access to Directory
/*
	if(!is_writable($imagePath)){
		$response = Array(
			"status" => 'error',
			"message" => 'Can`t upload File; no write Access'
		);
		print json_encode($response);
		return;
	}
	
	if ( in_array($extension, $allowedExts))
	  {
	  if ($_FILES["img"]["error"] > 0)
		{
			 $response = array(
				"status" => 'error',
				"message" => 'ERROR Return Code: '. $_FILES["img"]["error"],
			);			
		}
	  else
		{
			*/
	      $filename = $_FILES["img"]["tmp_name"];
		  list($width, $height) = getimagesize( $filename );
$file1=str_replace(' ', '_', $filename);
$file2=str_replace(' ', '_',  $_FILES["img"]["name"]);
		  move_uploaded_file($file1,  $imagePath .$file2);
            ///guardar el la base de datos $_FILES["img"]["name"]
     $form=array(
                    'foto_perfil'=>$file2 
                   );
         $idUsuario=$this->session->userdata('usser_var');
         $this->Perfiles_models->updatePassword($idUsuario,$form);
			$imagePath=base_url()."assets/uploads/fotosPerfil/";
        
        //$_FILES["img"]["name"]
		  $response = array(
			"status" => 'success',
			"url" => $imagePath.$file2,
			"width" => $width,
			"height" => $height
		  );
		  
	/*	}
	  }
	else
	  {
	   $response = array(
			"status" => 'error',
			"message" => 'something went wrong, most likely file is to large for upload. check upload_max_filesize, post_max_size and memory_limit in you php.ini',
		);
	  }
	  */
	  print json_encode($response);
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  

   
}

?>
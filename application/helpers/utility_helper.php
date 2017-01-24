<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('force_ssl'))
{
   function force_ssl()
    {
        $CI =& get_instance();
        $CI->config->config['base_url'] = str_replace('http://', 'https://', $CI->config->config['base_url']);
        if ($_SERVER['SERVER_PORT'] != 443)
        {
            redirect($CI->uri->uri_string());
        }
    }
}

function remove_ssl()
{
    $CI =& get_instance();
    $CI->config->config['base_url'] =
                  str_replace('https://', 'http://',
                  $CI->config->config['base_url']);
    if ($_SERVER['SERVER_PORT'] != 80)
    {
        redirect($CI->uri->uri_string());
    }
}
function vista_crud($vista, $output){
    force_ssl();
    $CI = &get_instance();

  //  $CI->load->view('headerCSS');
    $CI->load->view($vista, $output);
//$CI->load->view('footerJS');
}


function vista($vista){
    force_ssl();
    $CI = &get_instance();

    $CI->load->view('headerCSS');
    $CI->load->view('menu_principal');
    $CI->load->view($vista);
$CI->load->view('footer_principal');
$CI->load->view('footerJS');
}
function vista_tabla($vista, $output){
 //remove_ssl();
        force_ssl();
    $CI = &get_instance();

   // $CI->load->view('headerCSS');
   // $CI->load->view('menu_principal');
    $CI->load->view($vista, $output);
//$CI->load->view('footer_principal');
//$CI->load->view('footerJS');
}

function vista_https($vista){
    force_ssl();
    $CI = &get_instance();

    $CI->load->view('headerCSS_https');
    $CI->load->view('menu_principal_https');
    $CI->load->view($vista);
$CI->load->view('footer_principal_https');
$CI->load->view('footerJS_https');
}
function url_https($base_url)
{
    return str_replace('http://', 'https://', $base_url);
}


function vista_datos($vista,$output){
    force_ssl();
    $CI = &get_instance();
    $CI->load->view('headerCSS');
    $CI->load->view('menu_principal');
    $CI->load->view($vista, $output);
    $CI->load->view('footer_principal');
    $CI->load->view('footerJS');
}

function vista_ecommers($vista, $datos=TRUE)
{
    force_ssl();
    $CI = &get_instance();
 if($CI->session->userdata('admin_var') == 1 || $CI->session->userdata('us3r_cl1ent_v4r') >=1){
    $CI->load->view('headerCSS');
    $CI->load->view('menu_principal');
    $CI->load->view($vista, $datos);
    $CI->load->view('footer_principal');
    $CI->load->view('footerJS');
     }else{
         echo '<script>
            window.parent.location.href="'.base_url().'";
            </script>';
     }
}
function vista_ecommersFrame($vista, $datos=TRUE)
{
    force_ssl();
    $CI = &get_instance();
    if($CI->session->userdata('admin_var') == 1 || $CI->session->userdata('us3r_cl1ent_v4r') >=1){
        $CI->load->view('headerCSS');
        $CI->load->view($vista, $datos);
        $CI->load->view('footerJS');
    }else{
         echo '<script>
            window.parent.location.href="'.base_url().'";
            </script>';
     }
}
function vista_vacia($vista, $datos=TRUE){
    force_ssl();
    $CI = &get_instance();

    if($CI->session->userdata('admin_var') == 1 || $CI->session->userdata('us3r_cl1ent_v4r') >=1){
        $CI->load->view($vista,$datos);

      }else{
         echo '<script>
            window.parent.location.href="'.base_url().'";
            </script>';
     }
}





function vista_datosGaleria($vista,$output){
     force_ssl();
    $CI = &get_instance();
    $CI->load->library('session');
     if($CI->session->userdata('admin_var') == 1 || $CI->session->userdata('us3r_cl1ent_v4r') >=1){
            $CI->load->view($vista, $output);
        }else{
  //  $CI->load->view('headerCSS_galeria');

         echo '<script>
            window.parent.location.href="'.base_url().'";
            </script>';
  //  $CI->load->view('footerJS_galeria');
     }
}

function decimales_ceros($n, $n_decimals) //Funcion de transformacion a formato de pesos "$190.50"
    {
    force_ssl();
        $CI = &get_instance();
        $CI->load->library('session');

          //validacion para redirección a la pantalla de loggeo si la variable de sesion se termina


        return ((floor($n) == round($n, $n_decimals)) ? number_format($n,$n_decimals) : number_format($n, $n_decimals));

    }

function vista_crud_admin($vista, $output){
remove_ssl();
//       force_ssl();
    $CI = &get_instance();
    $CI->load->library('session');

   if( $CI->session->userdata('admin_var') == ''){
            echo '<script>
            window.parent.location.href="'.base_url().'";
            </script>';
        }else{

    $CI->load->view('headerCSS_admin');
    $CI->load->view('menu');
    $CI->load->view($vista, $output);
    $CI->load->view('footerJS_admin');
    }
}
function vista_admin($vista){
 remove_ssl();
//        force_ssl();
    $CI = &get_instance();
    $CI->load->library('session');


    if($CI->session->userdata('admin_var') == ''){
            echo '<script>
            window.parent.location.href="'.base_url().'";
            </script>';
        }else{

    $CI->load->view('headerCSS_admin');
    $CI->load->view('menu');
    $CI->load->view($vista);
    $CI->load->view('footerJS_admin');
    }
}
function vista_admin_https($vista){

      force_ssl();
    $CI = &get_instance();
    $CI->load->library('session');


    if($CI->session->userdata('admin_var') == ''){
            echo '<script>
            window.parent.location.href="'.base_url().'";
            </script>';
        }else{

    $CI->load->view('headerCSS_admin');
    $CI->load->view('menu');
    $CI->load->view($vista);
    $CI->load->view('footerJS_admin');
    }
}
function vista_crud_admin_https($vista, $output){
//remove_ssl();
       force_ssl();
    $CI = &get_instance();
    $CI->load->library('session');

   if( $CI->session->userdata('admin_var') == ''){
            echo '<script>
            window.parent.location.href="'.base_url().'";
            </script>';
        }else{

    $CI->load->view('headerCSS_admin');
    $CI->load->view('menu');
    $CI->load->view($vista, $output);
    $CI->load->view('footerJS_admin');
    }
}
function vista_https_webcam($vista){
    force_ssl();
    $CI = &get_instance();

   // $CI->load->view('headerCSS_https');
   // $CI->load->view('menu_principal_https');
    $CI->load->view($vista);
//$CI->load->view('footer_principal_https');
//$CI->load->view('footerJS_https');
}

function vista_simple($vista){
    force_ssl();
    $CI = &get_instance();

   $CI->load->view('headerCSS');
   $CI->load->view('menu_principal');
    $CI->load->view($vista);
	$CI->load->view('footer_principal');
	$CI->load->view('footerJS');
}

?>

<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('force_ssl'))
{
    function force_ssl()
    {
        $CI =& get_instance();
        $CI->config->config['base_url'] =
                 str_replace('http://', 'https://',
                 $CI->config->config['base_url']);
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
function vista($vista){
    $CI = &get_instance();

    $CI->load->view('headerCSS');
    $CI->load->view('menu_principal');
    $CI->load->view($vista);
$CI->load->view('footer_principal');
$CI->load->view('footerJS');
}

function vista_https($vista){
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
/* End of file ssl_helper.php */
/* Location: ./application/helpers/ssl_helper.php *////

<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Open_pay
{
 private $CI;

 public function __construct()
 {
 $this->CI = get_instance();
 }

 public function OpenPayInicio()
 {

     require('Openpay/Openpay.php');
 //$this->CI->load->view('ajax/ajaxSimple_view',

 }
}

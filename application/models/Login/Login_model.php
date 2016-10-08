<?php
class Login_model extends CI_Model
{
      public function __construct() 
	{
        parent::__construct();
        $this->load->library('session');
      //  $this->load->model('catalogos/Catalogos_models');
    }
	
    
    function trae_usuarios($UzerCorreo) /*funcion para traer el id del usuario que inteneta ingresar*/
 {
        $this->db->select('count(*) as total');
        $this->db->from('namuhdb_usuarios');
        $this->db->where('correo',$UzerCorreo);
        $this->db->where('estado_usuario',1);
      //  $this->db->limit(1);
         $q = $this->db->get();
        $resultado = $q->row()->total;
        return $resultado;
        
 } 
    function trae_datos_usuario($UzerCorreo) /* validacion de datos */
 {
        
        $this->db->from('namuhdb_usuarios');
        $this->db->where('correo',$UzerCorreo);
        $this->db->limit(1);
        $resultado = $this->db->get()->row();
        return $resultado;
        
 }

	
}
?>
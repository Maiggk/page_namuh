<?php
class Perfiles_models extends CI_Model
{
      public function __construct() 
	{
        parent::__construct();
        $this->load->library('session');
      //  $this->load->model('catalogos/Catalogos_models');
    }
	
    function consultarPassword($usuario)
    {
        $this->db->select('*');
	    $this->db->from('namuhdb_usuarios');
	    $this->db->where('id_usuario',$usuario);
        $q = $this->db->get();
        $resultado = $q->row()->password;
        return $resultado;
    }
    function consultarUsuario($usuario)
    {
        $this->db->select('*');
	    $this->db->from('namuhdb_usuarios');
	    $this->db->where('id_usuario',$usuario);
        $q = $this->db->get();
        $resultado = $q->row();
        return $resultado;
    }
    function updatePassword($usuario,$formD)
    {
        $this->db->where('id_usuario',$usuario);
        $this->db->update('namuhdb_usuarios',$formD);  
    }
  function consultarFotoPerfil($usuario)
    {
        $this->db->select('foto_perfil');
	    $this->db->from('namuhdb_usuarios');
	    $this->db->where('id_usuario',$usuario);
        $q = $this->db->get();
        $resultado = $q->row()->foto_perfil;
        return $resultado;
    }

    
  
    
    
    
}
?>
<?php
class Divulgacion_models extends CI_Model
{
      public function __construct() 
	{
        parent::__construct();
        $this->load->library('session');
      //  $this->load->model('catalogos/Catalogos_models');
    }
	
    //funcion para consultar todos los artistas
    function consultaArtistas() 
    {
        $this->db->from('artistas');
      //  $this->db->where('id_grupo',$grupo);
      //  $this->db->limit(1);
         $q = $this->db->get();
        $resultado = $q->result();
        return $resultado;
        
    }  
    function consultaGaleriaArtista($id)
    {
        $this->db->from('galeria_artistas');
        $this->db->where('id_artista',$id);
      //  $this->db->limit(1);
        $q = $this->db->get();
        $resultado = $q->result();
        return $resultado;
    }
  
    function obtener_promociones()
 {
	 $this->db->from('productos');
	 $this->db->where('estado_promocion',1);
	 $this->db->where('estado',2);
	 $query=$this->db->get();
	 $filas=$query->result();
	 return $filas;
 }
    
}
?>


<?php
class Ordenamiento_models extends CI_Model
{
      public function __construct()
	{
        parent::__construct();
        $this->load->library('session');
    }

 function regresaBusquedaCount($where)
 {

	   $this->db->select('count(*) as total');
	   $this->db->from('productos');
	   $this->db->where($where);
	   $this->db->where('id_aparicion',0);
     $this->db->where('estado',2);


        $q = $this->db->get();
        $resultado = $q->row()->total;
        return $resultado;
 }
    function regresaBusqueda($where)
 {

	   $this->db->select('*');
	   $this->db->from('productos');
	   $this->db->where($where);
        $this->db->where('id_aparicion',0);
        $this->db->where('estado',2);
	   //$this->db->limit(1);

        $q = $this->db->get();
        $resultado = $q->result();
        return $resultado;
 }
function regresaProductosFiltrados($value) {
         $this->db->select('*');
         $this->db->from('productos');
         $this->db->where('id_producto',$value);
    $this->db->where('estado',2);
         $query = $this->db->get()->row();
         return $query;

    }
function updateProductosPromocion($id,$form)
 {
         $this->db->where('id_producto',$id);

        $this->db->update('productos',$form);

 }



     function regresaBusquedaCountDesactivar($where)
 {

	   $this->db->select('count(*) as total');
	   $this->db->from('productos');
	   $this->db->where($where);
	   $this->db->where('id_aparicion !=',0);
	   $this->db->where('estado',2);
	   //$this->db->limit(1);

        $q = $this->db->get();
        $resultado = $q->row()->total;
        return $resultado;
 }
    function regresaBusquedaDesactivar($where)
 {

	   $this->db->select('*');
	   $this->db->from('productos');
	   $this->db->where($where);
        $this->db->where('id_aparicion !=',0);
        $this->db->where('estado',2);
	   //$this->db->limit(1);

        $q = $this->db->get();
        $resultado = $q->result();
        return $resultado;
 }

}
?>

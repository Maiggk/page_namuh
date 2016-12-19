<?php
class OrdenProductos_models extends CI_Model
{
      public function __construct()
	{
        parent::__construct();
        $this->load->library('session');
    }

    function regresaDatosOrdenPadre($idOrden)
    {

	    $this->db->select('*');
	    $this->db->from('orden_apariciones');
	    $this->db->where('id_orden_aparicion',$idOrden);
        $q = $this->db->get();
        $resultado = $q->row();
        return $resultado;
    }
    function countVerificarValorOrdenamientoPadre($numOrdenamiento)
    {
        $this->db->select('count(*) as total ');
        $this->db->from('orden_apariciones');
        $this->db->where('numero_aparicion',$numOrdenamiento);
        $q = $this->db->get();
        $resultado = $q->row()->total;
        return $resultado;
    }
    function regresaRowOrdenamientoPadreRepetido($numOrdenamiento)
    {
        $where="numero_aparicion >=".$numOrdenamiento;
        $this->db->select('*');
        $this->db->from('orden_apariciones');
        $this->db->where($where);
        $q = $this->db->get();
        $resultado = $q->result();
        return $resultado;
    }
    function updateOrdenamientoPadre($id,$form)
    {
        $this->db->where('id_orden_aparicion',$id);
        $this->db->update('orden_apariciones',$form);

    }
    function updateOrdenamientoPadreProductos($id,$form)
    {
        $this->db->where('id_aparicion',$id);
        $this->db->update('productos',$form);

    }
      function saveNuevoOrdenamientoPadre($form)
    {
        $this->db->insert('orden_apariciones',$form);
	    return $this->db->insert_id();
    }
    //************************************************************Editar
    function consultarOrdenamiento($id)
    {
        $this->db->select('*');
        $this->db->from('orden_apariciones');
        $this->db->where('id_orden_aparicion',$id);

        $q = $this->db->get();
        $resultado = $q->row();
        return $resultado;
    }
    function countVerificarValorOrdenamientoEditPadre($numOrdenamiento,$id_ordenamientoPadre)
    {
         $this->db->select('count(*) as total ');
         $this->db->from('orden_apariciones');
         $this->db->where('numero_aparicion',$numOrdenamiento);
         $this->db->where('id_orden_aparicion !=',$id_ordenamientoPadre);
         $q = $this->db->get();
         $resultado = $q->row()->total;
         return $resultado;
    }
    function regresaRowOrdenamientoPadreRepetidoEdit($ordenAparicion,$idor)
    {
        $where="numero_aparicion >=".$ordenAparicion;
        $this->db->select('*');
        $this->db->from('orden_apariciones');
        $this->db->where($where);
        $this->db->where('id_orden_aparicion !=',$idor);
        $q = $this->db->get();
        $resultado = $q->result();
        return $resultado;
    }
    function updateOrdenamientoPadreEditar($form,$idor)
    {
             $this->db->where('id_orden_aparicion',$idor);
        $this->db->update('orden_apariciones',$form);
    }
    function updateOrdenamientoProductosPadreEditar($form,$idor)
    {
             $this->db->where('id_aparicion',$idor);
        $this->db->update('productos',$form);
    }
//*******************************************************************************************************************************
//*******************************************************************************************************************************
//*******************************************************************************************************************************
//*******************************************************************************************************************************
//*******************************************************************************************************************************
//***************************************Funciones para subordenamiento**********************************************************
   function consultarOrdenamientoHijo($id)
    {
        $this->db->select('*');
        $this->db->from('c3rb3r0_sub_orden_apariciones');
        $this->db->where('id_sub_orden_aparicion',$id);

        $q = $this->db->get();
        $resultado = $q->row();
        return $resultado;
    }
    function countVerificarValorOrdenamientoHijo($numOrdenamiento,$id_padre)
    {
        $this->db->select('count(*) as total ');
        $this->db->from('c3rb3r0_sub_orden_apariciones');
       $this->db->where('numero_aparicion',$numOrdenamiento);
       $this->db->where('id_orden_aparicion',$id_padre);
         $q = $this->db->get();
        $resultado = $q->row()->total;
        return $resultado;
    }
    function saveNuevoOrdenamientoHijo($form)
    {
        $this->db->insert('c3rb3r0_sub_orden_apariciones',$form);
	    return $this->db->insert_id();
    }
    function regresaRowOrdenamientoHijoRepetido($numOrdenamiento,$id_padre)
    {
        $where="numero_aparicion >=".$numOrdenamiento;
        $this->db->select('*');
        $this->db->from('c3rb3r0_sub_orden_apariciones');
        $this->db->where($where);
        $this->db->where('id_orden_aparicion',$id_padre);
        $q = $this->db->get();
        $resultado = $q->result();
        return $resultado;
    }
     function updateOrdenamientoHijo($id,$form)
    {
        $this->db->where('id_sub_orden_aparicion',$id);
        $this->db->update('c3rb3r0_sub_orden_apariciones',$form);

    }
    function updateOrdenamientoHijoProductos($id,$form)
    {
        $this->db->where('id_sub_aparicion',$id);
        $this->db->update('productos',$form);

    }
     function countVerificarValorOrdenamientoEditHijo($numOrdenamiento,$id_ordenamientoPadre,$id_padre)
    {
         $this->db->select('count(*) as total ');
         $this->db->from('c3rb3r0_sub_orden_apariciones');
         $this->db->where('numero_aparicion',$numOrdenamiento);
         $this->db->where('id_orden_aparicion',$id_padre);
         $this->db->where('id_sub_orden_aparicion !=',$id_ordenamientoPadre);
         $q = $this->db->get();
         $resultado = $q->row()->total;
         return $resultado;
    }
    function regresaRowOrdenamientoHijoRepetidoEdit($ordenAparicion,$idor,$id_padre)
    {
        $where="numero_aparicion >=".$ordenAparicion;
        $this->db->select('*');
        $this->db->from('c3rb3r0_sub_orden_apariciones');
        $this->db->where($where);
              $this->db->where('id_orden_aparicion',$id_padre);
        $this->db->where('id_sub_orden_aparicion !=',$idor);
        $q = $this->db->get();
        $resultado = $q->result();
        return $resultado;
    }
    function regresaProductosOrdenados($ordenAparicion,$id_padre)
    {

        $this->db->select('*');
        $this->db->from('productos');
        $this->db->where('id_aparicion',$id_padre);
        $this->db->where('id_sub_aparicion',$ordenAparicion);
        $q = $this->db->get();
        $resultado = $q->result();
        return $resultado;
    }
    function regresaProductosOrdenadosPadre($id_padre)
    {

        $this->db->select('*');
        $this->db->from('productos');
        $this->db->where('id_aparicion',$id_padre);
       // $this->db->where('id_sub_aparicion',$ordenAparicion);
        $q = $this->db->get();
        $resultado = $q->result();
        return $resultado;
    }

    function updateOrdenamientoProductos($idProducto,$form)
    {
        $this->db->where('id_producto',$idProducto);
        $this->db->update('productos',$form);
    }

    function regresarowOrdenados($idor)
    {
        $this->db->select('*');
        $this->db->from('c3rb3r0_sub_orden_apariciones');
        $this->db->where('id_sub_orden_aparicion',$idor);
        $q = $this->db->get();
        $resultado = $q->row();
        return $resultado;
    }




}
?>

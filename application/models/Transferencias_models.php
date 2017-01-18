<?php
class Transferencias_models extends CI_Model
{
    public function __construct()
	{
        parent::__construct();
        $this->load->library('session');
    }
    function updateEstadoCompra($order_id,$form)
    {
        $this->db->where('order_id',$order_id);
        $this->db->update('c3rb3r0_compras',$form);
    }
    function guardarClaveNotificacion($form_datos)
    {
        $this->db->insert('c3rb3r0_config',$form_datos);
	    return $this->db->insert_id();
    }
    function guardaCompra($form_datos)
    {
        $this->db->insert('c3rb3r0_compras',$form_datos);
	    return $this->db->insert_id();
    }
    function contarCompras($id)
    {
        $this->db->select('count(*) as total');
        $this->db->from('c3rb3r0_compras');

        $this->db->where('tipo_pago',$id);

        $q = $this->db->get();
        $resultado = $q->row()->total;
        return $resultado;
    }
    function buscarCompraCount($id)
    {
        $this->db->select('count(*) as total');
        $this->db->from('c3rb3r0_compras');

        $this->db->where('order_id',$id);

        $q = $this->db->get();
        $resultado = $q->row()->total;
        return $resultado;
    }
    function regresaRecibos($idCliente)
    {
        $this->db->select('*, DATE_FORMAT(c.fecha_creacion,"%d/%m/%Y") AS fecha');
        $this->db->from('c3rb3r0_compras c');
        $this->db->join('c3rb3r0_tipos_pagos tp', 'tp.id_tipo_pago=c.tipo_pago');
        $this->db->where('c.id_usuario',$idCliente);
        //$this->db->order_by('c.id_compra', 'DESC');
        $this->db->order_by('c.fecha_creacion', 'DESC');
        $q = $this->db->get();
        $resultado = $q->result();
        return $resultado;
    }
    function regresaRecibo($idArchivo)
    {
        $this->db->select('*');
        $this->db->from('c3rb3r0_compras');
        $this->db->where('id_compra',$idArchivo);
	   //$this->db->limit(1);

        $q = $this->db->get();
        $resultado = $q->row();
        return $resultado;
    }


}
?>

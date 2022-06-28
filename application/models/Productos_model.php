<?php 

/**
 * 
 */
class Productos_model extends CI_Model
{
	public function getProductos(){
		$this->db->select('*');
		$this->db->from('productos');
		$query = $this->db->get();
		return $query->result();
	}
}
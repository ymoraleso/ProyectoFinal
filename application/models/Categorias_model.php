<?php 

/**
 * 
 */
class Categorias_model extends CI_Model
{
    public function getCategorias(){
        $this->db->select('*');
        $this->db->from('categorias');
        $query = $this->db->get();
        return $query->result();
    }

    public function getCategoriaById($id){
        $this->db->select('*');
        $this->db->from('categorias');
        $this->db->where('idcategorias', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function postCategoria($data){
        if($this->db->insert('categorias', $data)){
            return true;
        }else{
            return false;
        }
    }
}
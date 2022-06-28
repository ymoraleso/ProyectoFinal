<?php 
use chriskacerguis\RestServer\RestController;
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class Restserver extends RestController
{
	
    function __construct()
    {
        parent::__construct();
        $model = array('productos_model', 'categorias_model');
        $this->load->model($model);
    }

    public function productos_get()
    {
        $productos = $this->productos_model->getProductos();
        $this->response($productos,200);
    }

    public function categorias_get()
    {
        $categorias = $this->categorias_model->getCategorias();
        $this->response($categorias,200);
    }

    public function categoriaById_get($id)
    {
        $categoria = $this->categorias_model->getCategoriaById($id);
        $this->response($categoria,200);
    }

    public function categorias_post()
    {
        $nombre = $this->post('nombre');
        $data = array('nombre' => $nombre);
        $result = $this->categorias_model->postCategoria($data);
        if($result == true){
            $this->response("Categoria creada",200);
        }else{
            $this->response("Categoria no creada", 406);
        } 
    }
}
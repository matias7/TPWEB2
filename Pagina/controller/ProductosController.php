<?php

require_once "./view/ProductosView.php";
require_once "./model/ProductoModel.php";
require_once "./model/CategoriasModel.php";
require_once  "SecuredController.php";

class ProductosController extends SecuredController
{
  private $view;
  private $model;
  private $modelv;
  private $Titulo;

  function __construct()
  {
    parent::__construct();

    $this->model = new ProductoModel();
    $this->modelv = new CategoriasModel();
    $this->view = new ProductosView();
    $this->Titulo = "Lista de Productos";
  }

  function Home($message = ''){
      $Categorias = $this->modelv->GetCategorias();
      $Productos = $this->model->GetProductos();
      $this->view->View($message, $this->Titulo, $Categorias, $Productos);
  }
  function InsertCategoria(){
    $titulo = $_POST["nombreCategoria"];
    $this->modelv->InsertarCategoria($titulo);
    header(ADMIN);
  }
  function EditarCategoria($param){
      $id_Categoria = $param[0];
      $Categoria = $this->modelv->GetCategoria($id_Categoria);
      $this->view->ViewEditCategorias("Editar Categoria", $Categoria);
  }
  function guardarEditarCategoria(){
    $id_categoria= $_POST["idForm"];
    $titulo = $_POST["NombreCategoria"];
    $this->modelv->guardarEditarCategoria($titulo, $id_categoria);
    header(ADMIN);
  }
  function InsertProductos(){
    $nombre = $_POST["nombreForm"];
    $precio = $_POST["precioForm"];
    $unidades = $_POST["unidadesForm"];
    $categorias = $_POST["nombre_categorias"];
    if(isset($nombre,$precio,$unidades,$categorias)){
      $this ->model ->InsertarProducto($nombre, $precio, $unidades, $categorias);
      header(ADMIN);
      }
      else{
      $this->Home("Complete todo por favor");
      }
    }
    function EditarProducto($param){
        $id_producto = $param[0];
        $Producto = $this->model->GetProducto($id_producto);
        $Categorias = $this->modelv->GetCategorias();
        $this->view->ViewEditProductos("Editar Producto", $Producto, $Categorias);
      }
  function GuardarEditarProducto(){
    $id_producto = $_POST["idForm"];
    $nombre = $_POST["nombreForm"];
    $precio = $_POST["precioForm"];
    $unidades = $_POST["unidadesForm"];
    $categorias = $_POST["nombre_categorias"];
    $this->model->GuardarEditarProducto($nombre, $precio, $unidades, $categorias, $id_producto);
    header(ADMIN);
  }
  function BorrarProducto($param){
    $this->model->BorrarProducto($param[0]);
    header(ADMIN);
  }
  function BorrarCategoria($param){
    $this->modelv->BorrarCategoria($param[0]);
    header(ADMIN);
  }
  function ViewEditProductos($param){
      $id_Producto = $param[0];
      $Producto = $this->model->GetProductos($id_Producto);
      $this->view->ViewEditProductos("Editar Producto", $Producto);
  }
}
?>

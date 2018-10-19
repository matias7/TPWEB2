<?php

require_once "./view/ProductoView.php";
require_once "./model/ProductoModel.php";
require_once "./model/CategoriasModel.php";
require_once  "SecuredController.php";

class TareasController extends SecuredController
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
    $this->view = new ProductoView();
    $this->Titulo = "Lista de Productos";
  }

  function Home($message = ''){
      $Categorias = $this->modelv->getCategorias();
      $Productos = $this->model->getProductos();
      $this->view->Mostrar($message, $this->Titulo, $Categorias, $Productos);
  }
  function InsertCategoria(){
    $titulo = $_POST["tituloForm"];
    $this->modelv->InsertarCategoria($titulo);
    header(Administrador);
  }
  function InsertProductos(){
    $nombre = $_POST["nombreForm"];
    $precio = $_POST["tipoForm"];
    $unidades = $_POST["edadForm"];
    if(isset($nombre,$precio,$unidades)){
      $this ->model ->insertarProductos($nombre, $precio, $unidades);
      header(ADMIN);
      }
      else{
      $this->Home("Complete todo por favor");
      }
  }
  function BorrarProducto($param){
    $this->model->BorrarProducto($param[0]);
    header(Administrador);
  }
  function BorrarCategoria($param){
    $this->modelv->BorrarCategoria($param[0]);
    header(Administrador);
  }
  function EditarCategoria($param){
      $id_Categoria = $param[0];
      $Categoria = $this->modelv->getCategorias($id_Categoria);
      $this->view->MostrarEditarCategoria("Editar Categoria", $Categoria);
  }
  function EditarProducto($param){
      $id_Producto = $param[0];
      $Producto = $this->model->getProductos($id_Producto);
      $this->view->MostrarEditarProducto("Editar Producto", $Producto);
  }

}

 ?>

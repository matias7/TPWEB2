<?php

require_once "./view/ProductosView.php";
require_once "./view/AdministradorView.php";
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
    $this->modelAdmin = new AdministradorModel();
    $this->view = new ProductosView();
    $this->viewAdmin = new AdministradorView();
    $this->Titulo = "Lista de Productos";
  }

  function HomeBase($message = ''){
      $Categorias = $this->modelv->GetCategorias();
      $Productos = $this->model->GetProductos();
      $this->view->ViewBase($message, $this->Titulo, $Categorias, $Productos);
  }
  function HomeAdmin($message = ''){
    $Categorias = $this->modelv->GetCategorias();
    $Productos = $this->model->GetProductos();
    $Usuarios = $this->modelAdmin->GetUsuarios();
    $this->viewAdmin->ViewAdmin($message, $this->Titulo, $Categorias, $Productos, $Usuarios);
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
    $id_categoria = $_POST["idForm"];
    $titulo = $_POST["NombreCategoria"];
    $this->modelv->guardarEditarCategoria($titulo, $id_categoria);
    header(ADMIN);
  }
  function VerMas(){
    $Imagenes = ($this->model->GetImagenes());
    foreach ($Imagenes as $imagen){
      $aux[]=base64_decode($imagen{'contenido'});
    }
    $Comentarios = $this->model->GetComentarios();
    $this->viewAdmin->ViewAdmin($aux,$Comentarios);
  }
  function InsertProducto(){
    $nombre = $_POST["NombreProducto"];
    $precio = $_POST["Precio"];
    $unidades = $_POST["Unidades"];
    $categorias = $_POST["nombreCategoria"];
    if(isset($nombre,$precio,$unidades,$categorias)){
      $this ->model ->InsertarProducto($nombre, $precio, $unidades, $categorias);
      header(ADMIN);
      }
      else{
      $this->Home("Complete todo por favor");
      }
    }
    function InsertarImagen(){
      $imagen = $_POST["idImagen"];
      $producto = $_POST["id_Producto"];
      $data = base64_encode($_POST["idImagen"]);
      $this->model->InsertarImagen($producto,$imagen);
      header(ADMIN);
    }
    function BorrarImagen($param){
      $this->model->BorrarImagen($param[0]);
      header(ADMIN);
    }
    function BorrarComentario($param){
      $this->model->BorrarComentario($param[0]);
      header(ADMIN);
    }
    function InsertarComentario(){
      $Comentario = $_POST["id_comentarios"];
      $producto = $_POST["id_Producto"];
      $this->model->InsertarImagen($producto,$Comentario);
    }
    function EditarProducto($param){
        $id_producto = $param[0];
        $Producto = $this->model->GetProducto($id_producto);
        $Categorias = $this->modelv->GetCategorias();
        $this->view->ViewEditProducto("Editar Producto", $Producto, $Categorias);
      }
    function guardarEditarProducto(){
      $id_producto = $_POST["idEditado"];
      $nombre = $_POST["NombreNuevo"];
      $precio = $_POST["PrecioNuevo"];
      $unidades = $_POST["UnidadesNuevo"];
      $categorias = $_POST["nombreCategoriaNuevo"];
      $this->model->GuardarProductoEditado($nombre, $precio, $unidades, $categorias, $id_producto);
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
        header(ADMIN);
    }

    function filtrarProductos(){
      $Categ = $_POST["nombreCategoria"];
      $Categorias = $this->modelv->GetCategorias();
      if($Categ == "todos"){
      $Producto =  $this->model->GetProductos();
      }
      else{
      $Producto = $this->model->getFiltrarProductos($Categ);
      }
      $this ->view->ViewAdmin("", $this->Titulo, $Categorias, $Producto);
      header(ADMIN);
    }
}
?>

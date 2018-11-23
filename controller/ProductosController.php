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
  private $controllerAdmin;

  function __construct()
  {
    parent::__construct();

    $this->model = new ProductoModel();
    $this->modelv = new CategoriasModel();
    $this->modelAdmin = new AdministradorModel();

    $this->Titulo = "Lista de Productos";
    $usuario = $this->modelAdmin->GetUser($_SESSION["User"]);
    $Admin = $usuario["tipo_usuario"];
    $ActiveSession = isset($_SESSION["User"]);
    $this->view = new ProductosView($ActiveSession, $Admin);
    $this->viewAdmin = new AdministradorView($ActiveSession, $Admin);
    $this->Titulo = "ProductosDisponibles";
  }
 //Todo lo relacionado a Home
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
  function filtrarProductos(){
    $Categ = $_POST["nombreCategoria"];
    $Categorias = $this->modelv->GetCategorias();
    if($Categ == "todos"){
    $Producto =  $this->model->GetProductos();
    }
    else{
    $Producto = $this->model->getFiltrarProductos($Categ);
    }
    $Usuarios = $this->modelAdmin->GetUsuarios();
    $this->viewAdmin->ViewAdmin("", $this->Titulo, $Categorias, $Producto,$Usuarios);
    header(ADMIN);
    }

  //Todo lo relacionado a categorias
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
  function BorrarCategoria($param){
    $this->modelv->BorrarCategoria($param[0]);
    header(ADMIN);
  }
  //Todo lo relacionado a productos
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

    //Tdolo lo relacionado a imagenes
  function InsertarImagen($params){
      $imagenes = $_FILES['imagenes']['tmp_name'];
      $id_producto = $params[0];
      $this->model->AgregarImagenes($imagenes,$id_producto);
      $this->VerMasAdmin($params);
  }
  function BorrarImagen($params){
    $id_productoo = $params[1];
    $imagen = $params[0];
    $id_producto = array($id_productoo);
    $this->model->BorrarImagen($imagen);
    $this->VerMasAdmin($id_producto);
  }
  function VerMasAdmin($param){
    $id_producto = $param[0];
    $id = $_SESSION["Id"];
    $producto = $this->model->GetProducto($id_producto);
    $Imagen =  $this->model->GetImagen($id_producto);
    $Comentarios = $this->model->GetComentarios($id_producto);
    $this->viewAdmin->VerMasAdmin("Producto",$producto,$Imagen,$id,$Comentarios);
  }



}
?>

<?php
  require_once "./view/ProductosView.php";
  require_once "./view/AdministradorView.php";
  require_once "./model/ProductoModel.php";
  require_once "./model/AdministradorModel.php";
  require_once "./model/CategoriasModel.php";

  class controller {
    private $vista;
    private $model;
    private $modelv;
    private $view;
    private $Titulo;
    private $login;

    function __construct(){
      $this->model = new ProductoModel();
      $this->modelv = new CategoriasModel();
      $this->view = new ProductosView();
      $this->Titulo = "Un Menu Para Cada Momento Del Dia";
    }
    public function iniciar(){
      $Categorias = $this->modelv->GetCategorias();
      $Productos = $this->model->GetProductos();
      $this ->view->PublicView($this->Titulo, $Categorias, $Productos);
    }

    function filtroPublico(){
    $Categ = $_POST["nombreCategoria"];
    $Categorias = $this->modelv->GetCategorias();
    if($Categ == "todos"){
      $Producto =  $this->model->GetProductos();
    }
    else{
      $Producto = $this->model->getFiltrarProductos($Categ);
    }
    $this ->view->ViewBase("", $this->Titulo, $Categorias, $Producto);
    }

}
?>

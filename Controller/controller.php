<?php
  require_once "./view/home_view.php";
  require_once "./view/ProductoView.php";
  require_once "./model/ProductoModel.php";
  require_once "./model/CategoriasModel.php";

  class HomeController {
    private $vista;
    private $model;
    private $modelv;
    private $view;
    private $Titulo;

    function __construct(){
      $this->vista = new HomeView();
      $this->model = new ProductoModel();
      $this->modelv = new CategoriasModel();
      $this->view = new ProductoView();
      $this->Titulo = "Un Menu Para Cada Momento Del Dia";
    }
    public function iniciar(){
      $Categorias = $this->modelv->getCategorias();
      $Productos = $this->model->getProductos();
      $this ->view->PublicoMostrar($this->Titulo, $Categorias, $Productos);
      $this->vista->show();
    }
  }
?>

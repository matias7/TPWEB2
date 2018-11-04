<?php
  require_once "./view/ProductosView.php";
  require_once "./model/ProductoModel.php";
  require_once "./model/CategoriasModel.php";

  class controller {
    private $vista;
    private $model;
    private $modelv;
    private $view;
    private $Titulo;

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
  }
?>

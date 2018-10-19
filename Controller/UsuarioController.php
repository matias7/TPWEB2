<?php
require_once  "./view/AdministradorView.php";
require_once  "./model/UsuarioModel.php";

class UsuarioController extends SecuredController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    parent::__construct();

    $this->view = new AdministradorView();
    $this->model = new UsuarioModel();
    $this->Titulo = "Lista de Usuario";
  }

  function MostrarUsuario(){
      $Usuarios = $this->model->GetUsuario();
      $this->view->Mostrar($this->Titulo, $Usuarios);
  }

  function InsertUsuario(){
    $nombre = $_POST["nombre"];
    $pass = $_POST["pass"];
    $this->model->InsertarUsuario($nombre,$pass);
    header(Administrador);
  }

}

 ?>

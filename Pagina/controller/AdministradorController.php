<?php
require_once  "./view/AdministradorView.php";
require_once  "./model/AdministradorModel.php";

class AdministradorController extends SecuredController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    parent::__construct();

    $this->view = new AdministradorView();
    $this->model = new AdministradorModel();
    $this->Titulo = "Lista de Administradores";
  }

  function MostrarAdministrador(){
      $Usuarios = $this->model->GetAdministrador();
      $this->view->View($this->Titulo, $Usuarios);
  }

  function InsertAdministrador(){
    $nombre = $_POST["nombre_usuario"];
    $pass = $_POST["contraseña_usuario"];
    $this->model->InsertarAdministrador($nombre,$pass);
    header(ADMIN);
  }

}

 ?>

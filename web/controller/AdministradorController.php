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

  function CrearUsuario(){
      $this->view->ViewCrearUsuario();
  }

  function InsertarUsuario(){
    $Usuario = $_POST["inputUsuario"];
    $Contraseña = $_POST["inputContraseña"];
    $hash = password_hash($Contraseña, PASSWORD_DEFAULT);
    $this->model->InsertarAdministrador($Usuario,$hash);
  }

}

 ?>

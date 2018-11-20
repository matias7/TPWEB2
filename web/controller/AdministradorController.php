<?php
require_once  "./view/AdministradorView.php";
require_once  "./view/LoginView.php";
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
    $this->viewer = new LoginView();
    $this->Titulo = "Lista de Usuarios";
  }

  function EditarUsuario($param){
    if ($param[1]=="Administrador"){
      $tipo="base";
    }else{
      $tipo="Administrador";
    }
    $this->model->EditarUsuario($tipo,$param[0]);
    header(ADMIN);
  }
  function BorrarUsuario($param){
    $this->model->BorrarUsuario($param[0]);
    header(ADMIN);
  }
}

?>

<?php
require_once  "./view/AdministradorView.php";
require_once  "./view/LoginView.php";
require_once  "./model/AdministradorModel.php";
require_once "./model/ProductoModel.php";
require_once "SecuredController.php";

class AdministradorController extends SecuredController
{
  private $view;
  private $model;
  private $Titulo;


  function __construct()
  {
    parent::__construct();

    $this->model = new AdministradorModel();
    $this->viewer = new LoginView();
    $this->Titulo = "Lista de Usuarios";
    $usuario = $this->model->GetUser($_SESSION["User"]);
    $Admin  = $usuario["tipo_usuario"];
    $ActiveSession = isset($_SESSION["User"]);
    $this->view = new AdministradorView($ActiveSession, $Admin);
  }

  function EditarUsuario($param){
    if ($param[1]==1){
      $tipo=0;
    }else{
      $tipo=1;
    }
    $this->model->EditarUsuario($tipo,$param[0]);
    header(ADMIN);
  }

  function BorrarUsuario($param){
    VAR_DUMP ($param);
    $this->model->BorrarUsuario($param[0]);
    header(ADMIN);
  }

}

?>

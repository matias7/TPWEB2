<?php

require_once  "./view/LoginView.php";
require_once  "./model/AdministradorModel.php";


class LoginController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    $this->view = new LoginView();
    $this->model = new AdministradorModel();
    $this->Titulo = "Login";
  }

  function login(){

    $this->view->mostrarLogin();

  }

  function logout(){
    session_start();
    session_destroy();
    header(LOGIN);
  }

  function verificarLogin(){
      $user = $_POST["usuarioId"];
      $pass = $_POST["passwordId"];
      $dbUser = $this->model->GetUser($user);
      if(isset($dbUser)){
          if ($pass == $dbUser[0]['contraseña_usuario']){
              session_start();
              $_SESSION["User"] = $user;
              header(ADMIN);
          }else{
            $this->view->mostrarLogin("Contraseña incorrecta");
          }
      }else{
        $this->view->mostrarLogin("No existe el usuario");
      }
  }

  function CrearUsuario(){

  }

}

 ?>

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
    session_start();
    $ActiveSession = isset($_SESSION["User"]);
    $this->view = new LoginView($ActiveSession);
    $this->ViewAdmin = new AdministradorView();
    $this->model = new AdministradorModel();
    $this->Titulo = "Login";
  }

  function login(){

    $this->view->mostrarLogin();

  }

  function logout(){
    session_start();
    session_destroy();
    header('Location: '.login);
  }
    function verificarLogin(){
        $user = $_POST["usuarioId"];
        $pass = $_POST["passwordId"];
        $dbUser = $this->model->GetUser($user);
        if(isset($dbUser)){
                if (password_verify($pass, $dbUser['contraseña_usuario'])){
                  session_start();
                  $_SESSION["User"] = $user;
                  $_SESSION["Id"] = $dbUser['id_usuario'];
                  header(ADMIN);
                  }else{
                  $this->view->mostrarLogin("Contraseña incorrecta ");
                  }
        }else{
          $this->view->mostrarLogin("No existe el usuario");
        }
    }
    function CrearCuenta(){
        $this->ViewAdmin->ViewCrearUsuario();
    }
    function signup(){
    $this->view->mostrarSignup();
    }
    function InsertarUsuario(){
        $Usuarioo = $_POST["usuarioId"];
        $Contraseña = $_POST["passwordId"];
        $hash = password_hash($Contraseña, PASSWORD_DEFAULT);
        $usuario = $this->model->GetUser($Usuarioo);
        if(isset($usuario["nombre_usuario"])){
        $this->ViewAdmin->ViewCrearUsuario("El Usuario existente, por favor modifique el nombre de usuario");
        }else{
        $this->model->InsertarUsuario($Usuarioo,$hash);
        session_start();
        $_SESSION["User"] = $Usuarioo;
        header('Location: '.base);
        }
    }
}
?>

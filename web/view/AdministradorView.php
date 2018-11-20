<?php
require_once('libs/Smarty.class.php');

class AdministradorView
{

  function __construct(){
    $this->smarty = new Smarty();
  }

  function ViewAdmin($message = '',$Titulo, $Categorias, $Productos,$Imagenes,$Comentarios, $Usuarios){
    $this->smarty->assign('Message',$message);
    $this->smarty->assign('Titulo',$Titulo);
    $this->smarty->assign('Categorias',$Categorias);
    $this->smarty->assign('Productos',$Productos);
    $this->smarty->assign('Imagenes',$Imagenes);
    $this->smarty->assign('Comentarios',$Comentarios);
    $this->smarty->assign('Usuarios',$Usuarios);
    $this->smarty->display('templates/HomeAdministrador.tpl');
  }
  function View($Titulo, $Administrador){
    $this->smarty->assign('Titulo',$Titulo);
    $this->smarty->assign('Administradores',$Administrador);
    $this->smarty->display('templates/MostrarAdministrador.tpl');
  }
  function ViewCrearUsuario($message = ''){
    $this->smarty->assign('Message',$message);
    $this->smarty->assign('Titulo',"Crear Cuenta");
    $this->smarty->display('templates/CrearUsuario.tpl');
  }
}

 ?>

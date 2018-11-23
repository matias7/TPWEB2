<?php
require_once('libs/Smarty.class.php');

class AdministradorView
{
  function __construct($ActiveSession = false,$Admin = 0){
    $this->smarty = new Smarty();
    $this->smarty->assign('administrador', $Admin);
    $this->smarty->assign('SesionActiva',$ActiveSession);
  }

  function ViewAdmin($message = '',$Titulo, $Categorias, $Productos,$Usuarios){
    $this->smarty->assign('Message',$message);
    $this->smarty->assign('Titulo',$Titulo);
    $this->smarty->assign('Categorias',$Categorias);
    $this->smarty->assign('Productos',$Productos);
    $this->smarty->assign('Usuarios',$Usuarios);
    $this->smarty->display('templates/HomeAdministrador.tpl');
  }
  function View($Titulo, $Administrador){
    $this->smarty->assign('Titulo',$Titulo);
    $this->smarty->assign('administrador',$Administrador);
    $this->smarty->display('templates/MostrarAdministrador.tpl');
  }
  function ViewCrearUsuario($message = ''){
    $this->smarty->assign('Message',$message);
    $this->smarty->assign('Titulo',"Crear Cuenta");
    $this->smarty->display('templates/CrearUsuario.tpl');
  }
  function VerMasAdmin($Titulo,$producto,$Imagen,$id,$Comentarios){
    $this->smarty->assign('id_usuario',$id);
    $this->smarty->assign('Imagenes',$Imagen);
    $this->smarty->assign('producto',$producto);
    $this->smarty->assign('Titulo',$Titulo);
    $this->smarty->assign('Comentarios',$Comentarios);
    $this->smarty->display('templates/vermasADMIN.tpl');
  }
}

 ?>

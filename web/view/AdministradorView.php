<?php
require_once('libs/Smarty.class.php');
/**
 *
 */
class AdministradorView
{
  function View($Titulo, $Administrador){
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo);
    $smarty->assign('Administradores',$Administrador);
    $smarty->display('templates/MostrarAdministrador.tpl');
  }

  function ViewCrearUsuario(){
      $smarty = new Smarty();
      $smarty->display('templates/CrearUsuario.tpl');
  }
}

 ?>

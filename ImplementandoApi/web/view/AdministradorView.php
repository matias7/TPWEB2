<?php
require_once('libs/Smarty.class.php');
/**
 *
 */
class AministradorView
{

  function View($Titulo, $Administrador){
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo);
    $smarty->assign('Administradores',$Administrador);
    $smarty->display('templates/MostrarAdministrador.tpl');
  }
}

 ?>

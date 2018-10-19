<?php
require_once ('libs/Smarty.class.php');
/**
 *
 */
class UsuarioView
{

  function Mostrar($Titulo, $Administradores){
    $smarty = new Smarty();
    $smarty->assign('Titulo',$Titulo);
    $smarty->assign('Usuarios',$Administrador);
    $smarty->display('templates/MostrarAdministradores.tpl');
  }
}

 ?>

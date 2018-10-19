<?php
require_once('libs/Smarty.class.php');

class ProductosView
{

    private  $smarty;

    function __construct(){
      $this->smarty = new Smarty();
    }

    function View($message = '', $Titulo, $Categorias, $Productos){
      $this->smarty->assign('Message',$message);
      $this->smarty->assign('Titulo',$Titulo);
      $this->smarty->assign('Categorias',$Categorias);
      $this->smarty->assign('Productos',$Productos);
      $this->smarty->display('templates/home.tpl');
    }
    function PublicView($Titulo,  $Categorias, $Productos){
      $this->smarty->assign('Titulo',$Titulo);
      $this->smarty->assign('Categorias',$Categorias);
      $this->smarty->assign('Productos',$Productos);
      $this->smarty->display('templates/homePublico.tpl');
    }
    function ViewEditProductos($Titulo, $Productos, $Categorias){
      $this->smarty->assign('Titulo',$Titulo);
      $this->smarty->assign('Productos',$Productos);
      $this->smarty->assign('Categorias',$Categorias);
      $this->smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
      $this->smarty->display('templates/ViewEditProductos.tpl');
    }
    function ViewEditCategorias($Titulo, $Categorias){
      $this->smarty->assign('Titulo',$Titulo);
      $this->smarty->assign('Categorias',$Categorias);
      $this->smarty->assign('home',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
      $this->smarty->display('templates/ViewEditCategorias.tpl');
    }

    function ViewFilterProductos($message = '', $Titulo, $Categorias, $Productos){
      $this->smarty->assign('Titulo',$Titulo);
      $this->smarty->assign('Categorias',$Categorias);
      $this->smarty->assign('Productos',$Productos);
      $this->smarty->assign('Message',$message);
      $this->smarty->display('templates/home.tpl');
    }

}


?>

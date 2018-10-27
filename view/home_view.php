<?php
  include_once 'lib/Smarty.class.php';
  class HomeView {
    private $smarty;
    function __construct(){
      $this->smarty = new Smarty;
    }
    public function show(){
      $this->smarty->display('templates/index.tpl');
    }
  }
 ?>
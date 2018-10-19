<?php

class LoginView
{
  private $Smarty;

  function __construct()
  {
    $this->Smarty = new Smarty();
  }


  function ViewLogin($message = ''){

    $this->Smarty->assign('Titulo',"Inicie sesión");
    $this->Smarty->assign('Message',$message);
    $this->Smarty->display('templates/login.tpl');
  }
}

 ?>

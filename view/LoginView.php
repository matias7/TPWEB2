<?php

class LoginView
{
  private $Smarty;

  function __construct($ActiveSession = false)
  {
    $this->Smarty = new Smarty();
    $this->Smarty->assign('EstaLogueado',$ActiveSession);
  }
  function mostrarLogin($message = ''){
    $this->Smarty->assign('Titulo',"Inicie sesión");
    $this->Smarty->assign('Message',$message);
    $this->Smarty->display('templates/Login.tpl');
  }
  function mostrarSignup($message = ''){

  $this->Smarty->assign('Titulo',"Registrate");
  $this->Smarty->assign('Message',$message);
  $this->Smarty->display('templates/signup.tpl');
}
}

 ?>

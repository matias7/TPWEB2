<?php
require_once  "./phpconfig/ConfigApp.php";

class SecuredController
{

  function __construct(){
    session_start();
      if (!header(CrearCuenta)){
        if(isset($_SESSION["User"])){
          if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 5000)) {
            $this->logout(); // destruye la sesión, y vuelve al login
          }
            $_SESSION['LAST_ACTIVITY'] = time(); // actualiza el último instante de actividad
          }else{
            header(LOGIN);
          }
      }else{
        header(USER);
      }
  }


  function logout(){
    session_start();
    session_destroy();
    header(LOGIN);
  }

}

 ?>

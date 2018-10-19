<?php
  require_once ('phpconfig/ConfigApp.php');
  require_once ('controller/controller.php');
  
  function parseUrl($url){
    $arr_datos = explode("/",$url);
    $arr_return[ConfigApp::$ACTION] = $arr_datos[0];

    $arrayReturn[ConfigApp::$PARAMS] = isset($arr_datos[1]) ? array_slice($arr_data, 1) : null;
    return $arrayReturn;
  }
   if(isset($_GET['action'])){
		$urlData = parseURL($_GET['action']);
		$action = $urlData[ConfigApp::$ACTION];
		if(array_key_exists($action,ConfigApp::$ACTIONS)){
			$params = $urlData[ConfigApp::$PARAMS];
			$action = explode('#',ConfigApp::$ACTIONS[$action]);
			$controller =  new $action[0]();
			$metodo = $action[1];
			if(isset($params) &&  $params != null){
				echo $controller->$metodo($params);
			}
        else{
            echo $controller->$metodo();
			}
		}
   } else {
		$controller = new HomeController();
		$controller->iniciar();
	}
 ?>

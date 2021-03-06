<?php
define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
define('ADMIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/ADMIN');
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/login');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logout');
class ConfigApp{
  public static $ACTION = "action";
  public static $PARAMS = "params";
  public static $ACTIONS = [
    'home' => 'controller#iniciar',
    ''=> 'controller#iniciar',
        'ADMIN'=> 'ProductosController#Home',
        'agregar'=> 'ProductosController#InsertCategoria',
        'editar' => 'ProductosController#EditarCategoria',
        'guardarEditar'=> 'ProductosController#guardarEditarCategoria',
        'borrar'=> 'ProductosController#BorrarCategoria',
        'agregarProducto'=> 'ProductosController#InsertProducto',
        'FiltrarProductos' => 'ProductosController#filtrarProductos',
        'editarProducto'=> 'ProductosController#EditarProducto',
        'borrarProducto'=> 'ProductosController#BorrarProducto',
        'guardarEditarProducto'=> 'ProductosController#guardarEditarProducto',
        'mostrarAdministrador'=> 'AdministradorController#MostrarAdministrador',
        'login'=> 'LoginController#login',
        'logout'=> 'LoginController#logout',
        'verificarLogin' => 'LoginController#verificarLogin',
        'CrearCuenta'=> 'LoginController#CrearUsuario'

  ];
};

?>

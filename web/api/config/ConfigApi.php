<?php
class ConfigApi
{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
      'produto#GET'=> 'ProductoApiController#GetProductos',
      'producto#DELETE'=> 'ProductoApiController#BorrarProducto',
      'producto#POST'=> 'ProductoApiController#InsertarProducto',
      'producto#PUT'=> 'ProductoApiController#ModificarProducto',
      'comentarios#GET'=> 'ProductoApiController#GetComentarios',
      'comentarios#DELETE'=> 'ProductoApiController#BorrarComentario',
      'comentarios#POST'=> 'ProductoApiController#InsertarComentario'
    ];

}

 ?>

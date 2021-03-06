<?php

class ProductoModel
{
  private $db;

  function __construct()
  {
    $this->db = $this->Connect();
  }

  function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=mercaderia;charset=utf8'
    , 'root', '');
  }

  function GetProductos(){

      $sentencia = $this->db->prepare( "select * from productos");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetProducto($id){

      $sentencia = $this->db->prepare( "select * from productos where id_producto=?");
      $sentencia->execute(array($id));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function InsertarProducto($producto,$precio,$unidades,$categoria){

    $sentencia = $this->db->prepare("INSERT INTO productos(Nombre, Precio, Unidades, nombre_categoria) VALUES(?,?,?,?)");
    $sentencia->execute(array($producto,$precio,$unidades,$categoria));
    $LastId = $this->db->lastInsertId();
    return $this->GetProducto($LastId);
  }

  function BorrarProducto($id_producto){
    $Producto = $this->GetProducto($id_producto);
    if(isset($Producto)){
      $sentencia = $this->db->prepare( "delete from productos where id_producto=?");
      $sentencia->execute(array($id_producto));
      return $Producto;
    }
  }

  function GuardarProductoEditado($id_producto,$nombre,$precio,$unidades,$nombre_categoria){
    $sentencia = $this->db->prepare( "update productos set Nombre = ?, Precio = ?, Unidades = ?, nombre_categoria = ? where id_producto=?");
    $sentencia->execute(array($id_producto,$nombre,$precio,$unidades,$nombre_categoria));
  }

  function getFiltrarProductos($categoria){
    $sentencia = $this->db->prepare( "select * from productos where nombre_categoria=?");
    $sentencia->execute(array($categoria));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
}


 ?>

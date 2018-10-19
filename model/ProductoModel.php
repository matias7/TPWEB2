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

  function getProductos(){

      $sentencia = $this->db->prepare( "select * from productos");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetProducto($id){

      $sentencia = $this->db->prepare( "select * from productos where id=?");
      $sentencia->execute(array($id));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function InsertarProducto($producto,$precio,$unidades,$categoria){

    $sentencia = $this->db->prepare("INSERT INTO productos(producto, precio, unidades) VALUES(?,?,?)");
    $sentencia->execute(array($producto,$precio,$unidades));
  }

  function BorrarProducto($id_producto){

    $sentencia = $this->db->prepare( "delete from productos where id=?");
    $sentencia->execute(array($id_producto));
  }

  function GuardarProductoEditado($producto,$precio,$unidades,$categoria,$id){
    $sentencia = $this->db->prepare( "update productos set producto = ?, precio = ?, completada = ? where id=?");
    $sentencia->execute(array($producto,$precio,$unidades,$categoria,$id));
  }

  function getFiltrarProductos($categoria){
    $sentencia = $this->db->prepare( "select * from productos where id_nombre=?");
    $sentencia->execute(array($categoria));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
}


 ?>

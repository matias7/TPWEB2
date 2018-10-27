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

    $sentencia = $this->db->prepare("INSERT INTO productos(nombre, precio, unidades, id_categoria) VALUES(?,?,?,?)");
    $sentencia->execute(array($producto,$precio,$unidades,$categoria));
  }

  function BorrarProducto($id_producto){

    $sentencia = $this->db->prepare( "delete from productos where id_producto=?");
    $sentencia->execute(array($id_producto));
  }

  function GuardarProductoEditado($producto,$precio,$unidades,$categoria,$id){
    $sentencia = $this->db->prepare( "update productos set nombre = ?, precio = ?, unidades = ? where id_producto=?");
    $sentencia->execute(array($producto,$precio,$unidades,$categoria,$id));
  }

  function getFiltrarProductos($categoria){
    $sentencia = $this->db->prepare( "select * from productos where id_nombre=?");
    $sentencia->execute(array($categoria));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
}


 ?>

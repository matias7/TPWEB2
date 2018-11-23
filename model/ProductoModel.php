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
  function GetImagen($id_producto){
      $sentencia = $this->db->prepare( "select * from imagenes where id_producto=?");
      $sentencia->execute(array($id_producto));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function InsertarImagen($producto,$imagen){
    $sentencia = $this->db->prepare("INSERT INTO imagenes(id_producto,contenido) VALUES(?,?)");
    $sentencia->execute(array($producto,$imagen));
  }
  function AgregarImagenes($imagens, $id_producto){
      for($i = 0; $i<count($imagens); $i++){
          $imagen = $this->subirImagen($imagens[$i]);
          $this->asignarImagenes($id_producto,$imagen);
        }
  }
  function subirImagen($imagen){
  $url = 'imagenes/'.uniqid().'.jpg';
  move_uploaded_file($imagen, $url);
  return $url;
  }
  function asignarImagenes($id_producto,$imagen){
    $sentencia = $this->db->prepare("INSERT INTO imagenes(id_producto, contenido) VALUES(?,?)");
    $sentencia->execute(array($id_producto,$imagen));
  }
  function BorrarImagen($id_imagen){
      $sentencia = $this->db->prepare( "delete from imagenes where id_imagen=?");
      $sentencia->execute(array($id_imagen));
    }
  function BorrarProducto($id_producto){
      $sentencia = $this->db->prepare( "delete from productos where id_producto=?");
      $sentencia->execute(array($id_producto));
  }
  function GetComentarios($id_producto){
      $sentencia = $this->db->prepare( "select * from comentarios where id_producto=?");
      $sentencia->execute(array($id_producto));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function GuardarProductoEditado($nombre,$precio,$unidades,$nombre_categoria,$id_producto){
    $sentencia = $this->db->prepare( "update productos set Nombre = ?, Precio = ?, Unidades = ?, nombre_categoria = ? where id_producto=?");
    $sentencia->execute(array($nombre,$precio,$unidades,$nombre_categoria,$id_producto));
  }

  function getFiltrarProductos($categoria){
    $sentencia = $this->db->prepare( "select * from productos where nombre_categoria=?");
    $sentencia->execute(array($categoria));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
}


 ?>

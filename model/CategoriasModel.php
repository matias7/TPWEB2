<?php
/**
 *
 */
class CategoriasModel
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

  function GetCategorias(){

      $sentencia = $this->db->prepare( "select * from categorias");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertarCategoria($nombre){

    $sentencia = $this->db->prepare("INSERT INTO categoria(nombre) VALUES(?)");
    $sentencia->execute(array($nombre));
  }

  function GetCategoria($categ){

      $sentencia = $this->db->prepare( "select * from categoria where nombre=? limit 1");
      $sentencia->execute(array($categ));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

}
 ?>

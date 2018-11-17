<?php

class AdministradorModel
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

  function GetAdministradores($tipo){

      $sentencia = $this->db->prepare( "select * from usuarios where tipo_usuario=?");
      $sentencia->execute(array($tipo));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertarAdministrador($usuario, $contraseña,$Tipo){
    $sentencia = $this->db->prepare("INSERT INTO usuarios(nombre_usuario, contraseña_usuario, tipo_usuario) VALUES(?,?,?)");
    $sentencia->execute(array($usuario, $contraseña,$Tipo));
  }

  function GetUser($user){
      $sentencia = $this->db->prepare( "select * from usuarios where nombre_usuario=? limit 1");
      $sentencia->execute(array($user));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  }


  ?>

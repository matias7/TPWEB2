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

  function GetUsuarios(){
      $sentencia = $this->db->prepare( "select * from usuarios");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function GetUser($user){
      $sentencia = $this->db->prepare( "select * from usuarios where nombre_usuario=? limit 1");
      $sentencia->execute(array($user));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function InsertarUsuario($usuario, $contraseña){
    $sentencia = $this->db->prepare("INSERT INTO usuarios(nombre_usuario, contraseña_usuario) VALUES(?,?)");
    $sentencia->execute(array($usuario, $contraseña));
  }

  function EditarUsuario($tipo,$id_user){
    $sentencia = $this->db->prepare( "update usuarios set tipo_usuario = ? where id_usuario=?");
    $sentencia->execute(array($tipo,$id_user));
  }

  function BorrarUsuario($idUsuario){
    $sentencia = $this->db->prepare( "delete from usuarios where id_usuario=?");
    $sentencia->execute(array($idUsuario));
  }

  }


  ?>

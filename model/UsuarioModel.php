<?php

class UsuarioModel
{
 private $db;

  function __construct()
  {
    $this->db = $this->Connect();
  }
  function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=tareas;charset=utf8'
    , 'root', '');
  }

  function GetAdministradores(){

      $sentencia = $this->db->prepare( "select * from Administradores");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertarAdministrador($nombre, $pass){

    $sentencia = $this->db->prepare("INSERT INTO Administrador(nombre, pass) VALUES(?,?)");
    $sentencia->execute(array($nombre, $pass));
  }

  function GetAdministrador($user){

      $sentencia = $this->db->prepare( "select * from Administrador where nombre=? limit 1");
      $sentencia->execute(array($user));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  }


  ?>

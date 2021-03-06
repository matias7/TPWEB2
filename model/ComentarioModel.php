<?php
class ComentarioModel {
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

  function getComentarios(){
    $sentencia = $this->db ->prepare( "select * from comentarios ");
    $sentencia->execute();
    return $sentencia -> fetchAll(PDO::FETCH_ASSOC);
  }

  function getComentario($id_comentario){
    $sentencia = $this->db ->prepare( "select * from comentarios where id_comentario = ?");
    $sentencia->execute(array($id_comentario));
    return $sentencia -> fetch(PDO::FETCH_ASSOC);
  }


  function DeleteComentario($id_comentario){
    $comentario = $this->db->GetComentario($id_comentario);
      if(isset($comentario)){
        $sentencia = $this->db->prepare( "delete from comentarios where id_comentario=?");
        $sentencia->execute(array($id_comentario));
      }
  }

  function insertarComentario($id_producto,$comentario,$id_usuario,$puntuacion)
  {
    $sentencia = $this->db ->prepare("INSERT INTO comentarios(id_producto, comentario, nombre_usuario, valoracion) VALUES(?,?,?,?)");
    $sentencia->execute(array($id_producto,$comentario,$id_usuario,$puntuacion));
    $lastId =  $this->db->lastInsertId();
    return $this->getComentario($lastId);
  }


}

 ?>

<?php

require_once "Api.php";
require_once "./../model/ProductoModel.php";
require_once "./../model/ComentariosModel.php";

class ProductoApiController extends Api{

  private $model;
  function __construct(){
    parent::__construct();

    $this->model = new ProductoModel();
    $this->modelc = new ComentariosModel();
  }

  function GetProductos($param = null){
    if(isset($param)){
        $id_mascota = $param[0];
        $array = $this->model->GetProductos($id_producto);
        $dat = $array;
    }else{
      $dat = $this->model->getProductos();
    }
      if(isset($dat)){
        return $this->json_response($dat, 200);
      }else{
        return $this->json_response(null, 404);
      }
  }
  function BorrarProducto($param = null){
    if(count($param) == 1){
        $id_producto = $param[0];
        $resp =  $this->model->deleteProducto($id_producto);
        if($resp == false){
          return $this->json_response($resp, 300);
        }

        return $this->json_response($resp, 200);
    }else{
      return  $this->json_response("No especificó un producto", 300);
    }
  }

  function InsertarProducto($param = null){
    $oJson = $this->getJSONData();
    $resp = $this->model->insertProducto($oJson->nombre, $oJson->precio, $oJson->unidades, $oJson->nombre_categoria, $oJson->id_producto);

    return $this->json_response($resp, 200);
  }
  function ModificarProducto($param = null){
    if(count($param) == 1){
      $id_producto = $param[0];
      $oJson = $this->getJSONData();
      $resp = $this->model->GuardarProductoEditado($oJson->nombre, $oJson->precio, $oJson->unidades, $oJson->nombre_categoria, $oJson->id_producto);
      return $this->json_response($resp, 200);

    }else{
      return  $this->json_response("No especificó un producto", 300);
    }

  }

  function GetComentarios($param){
      $id_producto = $_GET['id_producto'];
      $dat = $this->modelc->GetComentarios($id_producto);
      if(isset($dat)){
        return $this->json_response($dat, 200);
      }else{
        return $this->json_response(null, 404);
      }
  }

  function BorrarComentario($param = null){
    if(count($param) == 1){
        $id_comentario = $param[0];
        $resp =  $this->modelc->DeleteComentario($id_comentario);
        if($resp == false){
          return $this->json_response($resp, 300);
        }

        return $this->json_response($resp, 200);
    }else{
      return  $this->json_response("Algo ha salido mal, :C", 300);
    }
  }

  function InsertarComentario($param = null){
    $oJson = $this->getJSONData();
    $resp = $this->modelc->insertarComentario($oJson->comentario, $oJson->valoracion, $oJson->id_producto, $oJson->id_user);
    return $this->json_response($resp, 200);
  }

}
 ?>

{include file="header.tpl"}
{include file="NavBarLogeadoAdmin.tpl"}

<input type="hidden" id="id_producto" value="{$producto['id_producto']}">
<input type="hidden" id="id_user" value="{$id_usuario}">
<input type="hidden" id="admin" value="{$administrador}">

<div class="contenedor Cosas" value="{$producto["id_producto"]}">
  <div>
    <h4>Imagenes</h4>
    <ul class="list-group">
      {foreach from=$Imagenes item=imagen}
        <img src="{$imagen['contenido']}" alt="" class="img-thumbnail">
        <a href="borrarImagen/{$imagen['id_imagen']}/{$producto['id_producto']}"><button  type="button"  class="btn btn-warning">Borrar</button></a>
      {/foreach}
    </ul>
  </div>
  <h3>Ingresar Imagen</h3>
  <div class="contenedor ingresar">
      <form method="post" action="agregarImagen/{$producto["id_producto"]}" enctype="multipart/form-data">
        <div class="form-group">
          <input required type="file" id="imagenes" name="imagenes[]">
        </div>
        <button type="submit" class="btn btn-primary">AGREGAR IMAGENES</button>
      </form>
  </div>
  <div>
    <form method="post">
        <h3>Ingresar Comentario</h3>
        <div class="form-group">
          <label for="comentario">Ingresar Comentario</label>
          <textarea type="text" class="form-control coment" rows="3"></textarea>
        </div>
        <label for="inlineRadio1">Ingrese Valoracion</label>
        <div class="form-group">
          <div class="form-check form-check-inline">
            <input class="form-check-input valoracion" type="radio" name="valoracion" value="1">
            <label class="form-check-label" for="inlineRadio1">1</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input valoracion" type="radio" name="valoracion" value="2">
            <label class="form-check-label" for="inlineRadio1">2</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input valoracion" type="radio" name="valoracion" value="3">
            <label class="form-check-label" for="inlineRadio1">3</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input valoracion" type="radio" name="valoracion" value="4">
            <label class="form-check-label" for="inlineRadio1">4</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input valoracion" type="radio" name="valoracion" value="5">
            <label class="form-check-label" for="inlineRadio1">5</label>
          </div>
        </div>
        <input type="submit" class="btn btn-success js-create" name="subirComentario" value="EnviarComentario"/>
    </form>

        </div>
    </form>
    <div id="ComentariosDiv">
      <h1>Cargando...</h1>
    </div>
  </div>
{include file="footer.tpl"}

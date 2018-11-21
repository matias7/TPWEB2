{include file="header.tpl"}
{include file="NavBarLogeadoAdmin.tpl"}
<div class="contenedor">
  <form>
    <h3></h3>
    <div class="form-group">
      <label for="comentario">Ingresar Comentario</label>
      <textarea type="text" class="form-control" id="comentario" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="valoracion">Valoracion de Producto</label>
      <select class="form-control" id="valoracion">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
  </form>
  <h3>Ingresar Imagen</h3>
  <li class="list-group-item">
    <form method="post" action="{$home}/agregarImagen" >
      <div class="form-group">
        <label for="idImagen">Seleccionar Imagen</label>
        <input type="file" class="form-control-file" name="idImagen" >
        <input type="submit" name="subir" value="Subir Imagen"/>
      </div>
    </form>
  </li>
  <label for="basic-url">Ingresar URL de la Imagen</label>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
    </div>
    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
  </div>
</div>
{include file="footer.tpl"}

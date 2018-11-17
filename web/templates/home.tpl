{include file="header.tpl"}
{include file="NavBarLogeado.tpl"}

<div class="medio">
  <h1>{$Titulo}</h1>
  <div class="container">
    <h4>Categorias</h4>
    <ul class="list-group">
      {foreach from=$Categorias item=categoria}
      <li class="list-group-item">{$categoria['nombre_categoria']}<a href="editar/{$categoria['id_categoria']}"><button  type="button"  class="btn btn-warning">Editar</button></a><a href="borrar/{$categoria['id_categoria']}"><button type="button" class="btn btn-danger">Borrar</button></a></li>
      {/foreach}
    </ul>
    <h4>Productos Disponibles</h4>
    <ul class="list-group">
      {foreach from=$Productos item=producto}
      <li class="list-group-item"> Producto: {$producto['Nombre']} - Valor: $ {$producto['Precio']} - Cantidad: {$producto['Unidades']} - Tipo: {$producto['nombre_categoria']}<a href="editarProducto/{$producto['id_producto']}"> <button  type="button"  class="btn btn-warning">Editar</button></a> <a href="borrarProducto/{$producto['id_producto']}"><button type="button" class="btn btn-danger">Borrar</button></a></li>
      {/foreach}
    </ul>
  </div>

  <div class="container filtro">
    <form method="post" action="FiltrarProductos">
      <h5>Filtrar</h5>
      <div class="form-group">
        <select class="custom-select" name="nombreCategoria">
          <option selected value="todos">Categorias</option>
          {foreach from=$Categorias item=categoria}
          <option value="{$categoria['nombre_categoria']}">{$categoria['nombre_categoria']}</option>
          {/foreach}
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Filtrar Productos</button>
    </form>
  </div>


  <div class="container">
    <h4>Nueva Categoria</h4>
    <form method="post" action="agregar">
      <div class="form-group">
        <label for="nombreCategoria">NombreCategoria</label>
        <input type="text" class="form-control" name="nombreCategoria">
      </div>
      <button type="submit" class="btn btn-primary">Crear</button>
    </form>
  </div>

  <div class="container">
    <h4>Ingresar Producto</h4>
    <form method="post" action="agregarProducto">
      <div class="form-group">
        <label for="NombreProducto">NombreProducto</label>
        <input type="text" class="form-control" name="NombreProducto">
      </div>
      <div class="form-group">
        <label for="Precio">Precio</label>
        <input type="number" class="form-control" name="Precio">
      </div>
      <div class="form-group">
        <label for="Unidades">Unidades</label>
        <input type="number" class="form-control" name="Unidades">
      </div>
      <div class="form-group">
        <select class="custom-select" name="nombreCategoria">
          <option selected value="todas">Categorias</option>
          {foreach from=$Categorias item=categoria}
          <option value="{$categoria['nombre_categoria']}">{$categoria['nombre_categoria']}</option>
          {/foreach}
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Crear producto</button>
    </form>
  </div>

</div>
{include file="footer.tpl"}

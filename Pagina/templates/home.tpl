{include file="header.tpl"}
  <div class="Inicio">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
      <a class="navbar-brand" href="">CafeVanDyke</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="home">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link active" href="logout">Logout</a>
        </div>
      </div>
    </nav>
    </div>

  <div class="medio">
    <h1>{$Titulo}</h1>
      <div class="container">
        <h4>Categorias</h4>
        <ul class="list-group">
            {foreach from=$Categorias item=categoria}
              <li class="list-group-item">{$categoria['nombre_categoria']}<a href="editar/{$categoria['id_categoria']}">EDITAR</a><a href="borrar/{$categoria['id_categoria']}">BORRAR</a></li>
            {/foreach}
        </ul>
        <h4>Productos Disponibles</h4>
        <ul class="list-group">
            {foreach from=$Productos item=producto}
              <li class="list-group-item">Producto: {$producto['Nombre']} - Valor: $ {$producto['Precio']} - Cantidad: {$producto['Unidades']} - Tipo: {$producto['id_categoria']} <a href="editarProducto/{$producto['id_producto']}">EDITAR</a><a href="borrarProducto/{$producto['id_producto']}">BORRAR</a></li>
            {/foreach}
        </ul>
      </div>

      <div class="container filtro">
            <form method="post" action="FiltrarProductos">
              <h5>Filtrar</h5>
           <div class="form-group">
             <select class="custom-select" name="nombreCategoria">
               <option selected value="todas">Categorias</option>

                 {foreach from=$Categorias item=categoria}
                   <option value="{$categoria['nombre_categoria']}">{$categoria['nombre_categoria']}</option>
                   {/foreach}
             </select>
             </div>
             <button type="submit" class="btn btn-primary">Submit</button>

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
        <form method="post" action="agregar">
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

{include file="header.tpl"}
{include file="NavBarLogeado.tpl"}
    <h1>{$Titulo}</h1>
    <div class="container">
      <h2>Formulario</h2>
        <form method="post" action="{$home}/GuardarEditarProducto">
          <input type="hidden" class="form-control" id="idForm" name="idForm" value="{$producto["id_producto"]}">
          <div class="form-group">
            <label for="nombreForm"></label>
            <input type="text" class="form-control"  name="nombreForm" placeholder="Nombre" value="{$producto["Nombre"]}">
          </div>
        <div class="form-group">
            <label for="precioForm"></label>
            <input type="number" class="form-control"  name="precioForm" placeholder="Precio" value="{$producto["Precio"]}">
          </div>
          <div class="form-group">
            <label for="unidadesForm"></label>
            <input type="number" class="form-control"  name="unidadesForm" placeholder="Unidades" value="{$producto["Unidades"]}">
          </div>
          <div class="form-group">
            <select class="custom-select" name="nombreCategoria">
              <option selected value="todas">Categorias</option>
                {foreach from=$Categorias item=categoria}
                  <option value="{$categoria['nombre_categoria']}">{$categoria['nombre_categoria']}</option>
                {/foreach}
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Editar Producto</button>
        </form>

    </div>

{include file="footer.tpl"}

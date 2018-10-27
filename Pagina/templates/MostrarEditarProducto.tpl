{include file="header.tpl"}
    <div class="Inicio">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">CafeVanDyke</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="admininstrador">Home<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link active" href="logout">Logout</a>
          </div>
        </div>
      </nav>
    </div>

    <h1>{$Titulo}</h1>
    <div class="container">
      <h2>Formulario</h2>
        <form method="post" action="{$home}/GuardarEditarProducto">
          <input type="hidden" class="form-control" id="idForm" name="idForm" value="{$Producto["id_producto"]}">
          <div class="form-group">
            <label for="nombreForm">Nombre</label>
            <input type="text" class="form-control"  name="nombreForm" value="{$Producto["Nombre"]}">
          </div>
        <div class="form-group">
            <label for="precioForm">Precio</label>
            <input type="number" class="form-control"  name="precioForm" value="{$Producto["Precio"]}">
          </div>
          <div class="form-group">
            <label for="unidadesForm">Unidades</label>
            <input type="number" class="form-control"  name="unidadesForm" value="{$Producto["Unidades"]}">
          </div>
          <div class="form-group">
           <select class="custom-select" name="nombreCategoria">
             <option selected>Categorias</option>
               {foreach from=$mercaderia item=categoria}
                <option value="{$mercaderia['id_nombre']}">{$mercaderia['id_nombre']}</option>
               {/foreach}
           </select>
          </div>
          <button type="submit" class="btn btn-primary">Editar Producto</button>
        </form>

    </div>

{include file="footer.tpl"}

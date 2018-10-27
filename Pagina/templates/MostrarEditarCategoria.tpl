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
        <form method="post" action="{$home}/guardarEditarCategoria">
          <input type="hidden" class="form-control" id="idForm" name="idForm" value="{$Categorias["id_categoria"]}">
          <div class="form-group">
            <label for="NombreCategoria">Nombre</label>
            <input type="text" class="form-control"  name="NombreCategoria" value="{$Categorias["nombre_categoria"]}">
          </div>
          <button type="submit" class="btn btn-primary">Editar Categoria</button>
        </form>
    </div>
{include file="footer.tpl"}

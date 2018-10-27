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
      <ul class="list-group">
            {foreach from=$Usuarios item=usuario}
            <li class="list-group-item">{$usuario['nombre_usuario']} ----- {$usuario['contraseña_usuario']}<a href="borrar/{$usuario['id']}">BORRAR</a> </li>
        {/foreach}
      </ul>
    </div>


{include file="footer.tpl"}

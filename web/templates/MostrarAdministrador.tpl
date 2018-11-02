{include file="header.tpl"}
{include file="NavBarLogeado.tpl"}
    <h1>{$Titulo}</h1>

    <div class="container">
      <ul class="list-group">
            {foreach from=$usuarios item=usuario}
            <li class="list-group-item">{$usuario['nombre_usuario']} ----- {$usuario['contraseña_usuario']}<a href="borrar/{$usuario['id']}">BORRAR</a> </li>
        {/foreach}
      </ul>
    </div>


{include file="footer.tpl"}

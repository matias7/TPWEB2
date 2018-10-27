{include file="header.tpl"}
    <div class="container barranav">
        <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" href=home>HOME</a>
        </li>
      </ul>
    </div>
    <h1>{$Titulo}</h1>
    <form method="post" action="verificarLogin">
      <div class="modal-body">
             <div class="form-group">
              <label for="exampleInputEmail1">Usuario</label>
              <input type="input" class="form-control" name="usuarioId" id="usuarioId" aria-describedby="usuarioId" placeholder="Usuario">
              </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" name="passwordId" id="passwordId" placeholder="Contraseña">
            </div>
      <div class="">
        {$Message}
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
    </div>

{include file="footer.tpl"}

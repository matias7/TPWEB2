{include file="header.tpl"}



        <h1>{$Titulo}</h1>
    <div class="container">

        <form method="post" action="guardarRegistro">
          <div class="form-group">
            <label for="exampleInputEmail1">Ingrese nombre de usuario</label>
            <input type="input" class="form-control " name="usuarioId" id="usuarioId" aria-describedby="usuarioId" placeholder="Nombre" >
            </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Ingrese contraseña</label>
            <input type="password" class="form-control " name="passwordId" id="passwordId" placeholder="Password">
          </div>
          <div class="">

            {$Message}


          </div>
          <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </div>


{include file="footer.tpl"}

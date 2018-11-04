<?php
/* Smarty version 3.1.33, created on 2018-11-04 02:22:39
  from 'C:\xampp\htdocs\web\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bde49df04ef23_16823151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cc85ced0192540a21cd72ce473209412fd224c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\templates\\login.tpl',
      1 => 1541294550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:NavBar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bde49df04ef23_16823151 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:NavBar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h3><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h3>
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
        <?php echo $_smarty_tpl->tpl_vars['Message']->value;?>

      </div>
      <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </form>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

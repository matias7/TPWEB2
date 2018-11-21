<?php
/* Smarty version 3.1.33, created on 2018-11-21 17:52:58
  from 'C:\xampp\htdocs\web\templates\vermasADMIN.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf58d6ace0a69_46330773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9febe26c0177210dd9147d70b01c64eda241d18b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\templates\\vermasADMIN.tpl',
      1 => 1542819173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:NavBarLogeadoAdmin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf58d6ace0a69_46330773 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:NavBarLogeadoAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="contenedor">
  <form>
    <h3></h3>
    <div class="form-group">
      <label for="comentario">Ingresar Comentario</label>
      <textarea type="text" class="form-control" id="comentario" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="valoracion">Valoracion de Producto</label>
      <select class="form-control" id="valoracion">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
  </form>
  <h3>Ingresar Imagen</h3>
  <li class="list-group-item">
    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/agregarImagen" >
      <div class="form-group">
        <label for="idImagen">Seleccionar Imagen</label>
        <input type="file" class="form-control-file" name="idImagen" >
        <input type="submit" name="subir" value="Subir Imagen"/>
      </div>
    </form>
  </li>
  <label for="basic-url">Ingresar URL de la Imagen</label>
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
    </div>
    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

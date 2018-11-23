<?php
/* Smarty version 3.1.33, created on 2018-11-23 18:30:37
  from 'C:\xampp\htdocs\TPWEB2\web\templates\vermasADMIN.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf8393dbec8f3_96136030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5992a34624c79d0e04a6ac4753953735376eb49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPWEB2\\web\\templates\\vermasADMIN.tpl',
      1 => 1542994171,
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
function content_5bf8393dbec8f3_96136030 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:NavBarLogeadoAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<input type="hidden" id="id_producto" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
">
<input type="hidden" id="id_user" value="<?php echo $_smarty_tpl->tpl_vars['id_usuario']->value;?>
">
<input type="hidden" id="admin" value="<?php echo $_smarty_tpl->tpl_vars['administrador']->value;?>
">

<div class="contenedor Cosas" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value["id_producto"];?>
">
  <div>
    <h4>Imagenes</h4>
    <ul class="list-group">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Imagenes']->value, 'imagen');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['contenido'];?>
" alt="" class="img-thumbnail">
        <a href="borrarImagen/<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_imagen'];?>
/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
"><button  type="button"  class="btn btn-warning">Borrar</button></a>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
  <h3>Ingresar Imagen</h3>
  <div class="contenedor ingresar">
      <form method="post" action="agregarImagen/<?php echo $_smarty_tpl->tpl_vars['producto']->value["id_producto"];?>
" enctype="multipart/form-data">
        <div class="form-group">
          <input required type="file" id="imagenes" name="imagenes[]">
        </div>
        <button type="submit" class="btn btn-primary">AGREGAR IMAGENES</button>
      </form>
  </div>
  <div>
    <form method="post">
        <h3>Ingresar Comentario</h3>
        <div class="form-group">
          <label for="comentario">Ingresar Comentario</label>
          <textarea type="text" class="form-control coment" rows="3"></textarea>
        </div>
        <label for="inlineRadio1">Ingrese Valoracion</label>
        <div class="form-group">
          <div class="form-check form-check-inline">
            <input class="form-check-input valoracion" type="radio" name="valoracion" value="1">
            <label class="form-check-label" for="inlineRadio1">1</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input valoracion" type="radio" name="valoracion" value="2">
            <label class="form-check-label" for="inlineRadio1">2</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input valoracion" type="radio" name="valoracion" value="3">
            <label class="form-check-label" for="inlineRadio1">3</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input valoracion" type="radio" name="valoracion" value="4">
            <label class="form-check-label" for="inlineRadio1">4</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input valoracion" type="radio" name="valoracion" value="5">
            <label class="form-check-label" for="inlineRadio1">5</label>
          </div>
        </div>
        <input type="submit" class="btn btn-success js-create" name="subirComentario" value="EnviarComentario"/>
    </form>

        </div>
    </form>
    <div id="ComentariosDiv">
      <h1>Cargando...</h1>
    </div>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

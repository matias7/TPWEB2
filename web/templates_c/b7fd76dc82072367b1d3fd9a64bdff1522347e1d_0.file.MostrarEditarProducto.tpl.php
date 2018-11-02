<?php
/* Smarty version 3.1.33, created on 2018-11-02 23:52:40
  from 'C:\xampp\htdocs\web\templates\MostrarEditarProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bdcd538211f85_97763455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7fd76dc82072367b1d3fd9a64bdff1522347e1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\templates\\MostrarEditarProducto.tpl',
      1 => 1541199158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:NavBarLogeado.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bdcd538211f85_97763455 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:NavBarLogeado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
    <div class="container">
      <h2>Formulario</h2>
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/GuardarEditarProducto">
          <input type="hidden" class="form-control" id="idForm" name="idForm" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value["id_producto"];?>
">
          <div class="form-group">
            <label for="nombreForm"></label>
            <input type="text" class="form-control"  name="nombreForm" placeholder="Nombre" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value["Nombre"];?>
">
          </div>
        <div class="form-group">
            <label for="precioForm"></label>
            <input type="number" class="form-control"  name="precioForm" placeholder="Precio" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value["Precio"];?>
">
          </div>
          <div class="form-group">
            <label for="unidadesForm"></label>
            <input type="number" class="form-control"  name="unidadesForm" placeholder="Unidades" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value["Unidades"];?>
">
          </div>
          <div class="form-group">
            <select class="custom-select" name="nombreCategoria">
              <option selected value="todas">Categorias</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre_categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre_categoria'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Editar Producto</button>
        </form>

    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

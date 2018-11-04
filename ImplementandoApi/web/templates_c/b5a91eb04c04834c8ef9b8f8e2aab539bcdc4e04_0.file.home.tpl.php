<?php
/* Smarty version 3.1.33, created on 2018-11-04 04:01:54
  from 'C:\xampp\htdocs\web\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bde61223a03f6_20790873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5a91eb04c04834c8ef9b8f8e2aab539bcdc4e04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\templates\\home.tpl',
      1 => 1541294680,
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
function content_5bde61223a03f6_20790873 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:NavBarLogeado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="medio">
  <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
  <div class="container">
    <h4>Categorias</h4>
    <ul class="list-group">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
      <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre_categoria'];?>
<a href="editar/<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
"><button  type="button"  class="btn btn-warning">Editar</button></a><a href="borrar/<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
"><button type="button" class="btn btn-danger">Borrar</button></a></li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <h4>Productos Disponibles</h4>
    <ul class="list-group">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
      <li class="list-group-item"> Producto: <?php echo $_smarty_tpl->tpl_vars['producto']->value['Nombre'];?>
 - Valor: $ <?php echo $_smarty_tpl->tpl_vars['producto']->value['Precio'];?>
 - Cantidad: <?php echo $_smarty_tpl->tpl_vars['producto']->value['Unidades'];?>
 - Tipo: <?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre_categoria'];?>
<a href="editarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
"> <button  type="button"  class="btn btn-warning">Editar</button></a> <a href="borrarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
"><button type="button" class="btn btn-danger">Borrar</button></a></li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>

  <div class="container filtro">
    <form method="post" action="FiltrarProductos">
      <h5>Filtrar</h5>
      <div class="form-group">
        <select class="custom-select" name="nombreCategoria">
          <option selected value="todos">Categorias</option>
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
      <button type="submit" class="btn btn-primary">Filtrar Productos</button>
    </form>
  </div>


  <div class="container">
    <h4>Nueva Categoria</h4>
    <form method="post" action="agregar">
      <div class="form-group">
        <label for="nombreCategoria">NombreCategoria</label>
        <input type="text" class="form-control" name="nombreCategoria">
      </div>
      <button type="submit" class="btn btn-primary">Crear</button>
    </form>
  </div>

  <div class="container">
    <h4>Ingresar Producto</h4>
    <form method="post" action="agregarProducto">
      <div class="form-group">
        <label for="NombreProducto">NombreProducto</label>
        <input type="text" class="form-control" name="NombreProducto">
      </div>
      <div class="form-group">
        <label for="Precio">Precio</label>
        <input type="number" class="form-control" name="Precio">
      </div>
      <div class="form-group">
        <label for="Unidades">Unidades</label>
        <input type="number" class="form-control" name="Unidades">
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
      <button type="submit" class="btn btn-primary">Crear producto</button>
    </form>
  </div>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

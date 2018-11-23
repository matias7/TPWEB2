<?php
/* Smarty version 3.1.33, created on 2018-11-23 15:57:38
  from 'C:\xampp\htdocs\TPWEB2\web\templates\HomeAdministrador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf81562599bd7_40316429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83452967239286176fd2a3dc0c68a3266ae71a75' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPWEB2\\web\\templates\\HomeAdministrador.tpl',
      1 => 1542979336,
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
function content_5bf81562599bd7_40316429 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:NavBarLogeadoAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
"><button type="button" class="btn btn-danger">Eliminar</button></a></li>

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
        
         <a href="vermasAdmin/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
"><button type="button" class="btn btn-light">Ver Mas</button></a>
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
  <div>
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
    <div class="container">
      <?php if ($_smarty_tpl->tpl_vars['administrador']->value == 1) {?>
      <h4>Usuarios</h4>
      <ul class="list-group">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Usuarios']->value, 'usuario');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
?>
          <li class="list-group-item">Nombre Usuario: <?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre_usuario'];?>
 TipoUsuario: <?php echo $_smarty_tpl->tpl_vars['usuario']->value['tipo_usuario'];?>
<a href="editarUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['tipo_usuario'];?>
"><button  type="button" class="btn btn-warning">Editar</button></a><a href="borrarUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
"><button type="button" class="btn btn-danger">Borrar</button></a> </li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
      <?php }?>
    </div>

  </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

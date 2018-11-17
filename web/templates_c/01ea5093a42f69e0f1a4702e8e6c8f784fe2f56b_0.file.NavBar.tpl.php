<?php
/* Smarty version 3.1.33, created on 2018-11-08 00:37:22
  from 'C:\xampp\htdocs\web\templates\NavBar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be377323448f3_56227903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01ea5093a42f69e0f1a4702e8e6c8f784fe2f56b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\templates\\NavBar.tpl',
      1 => 1541633779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be377323448f3_56227903 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Bienvenidos a Van Dyke</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav navbar-center">
            <li class="nav-item active">
              <a class="nav-item nav-link active" href="home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link active" href="CrearCuenta">CrearCuenta</a>
            </li>
            <li class="nav-item">
              <a class="nav-item nav-link active" href="login">Login</a>
            </li>
          </ul>
        </div>
      </nav>
<?php }
}

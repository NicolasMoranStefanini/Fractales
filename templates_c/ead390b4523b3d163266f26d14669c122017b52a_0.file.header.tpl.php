<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-06 06:05:52
  from 'C:\xampp\htdocs\proyectos\TPE\TPE1-WEBII\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7bed200f23a8_20157365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ead390b4523b3d163266f26d14669c122017b52a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE\\TPE1-WEBII\\templates\\header.tpl',
      1 => 1601957146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7bed200f23a8_20157365 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Store</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark">
            <a class="navbar-brand" href="home"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav d-flex w-100">
                <li class="nav-item active">
                  <a class="nav-link" href="home">Products<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="categorys">Categorys<span class="sr-only">(current)</span></a>
                </li>
                <?php if ((isset($_SESSION['EMAIL_USER']))) {?>
                <li class="nav-item ml-auto">
                  <a class="nav-link" href="logout"><?php echo $_SESSION['EMAIL_USER'];?>
 (LOGOUT)</a>
                </li>
                <?php }?>
              </ul>
            </div>
        </nav>
    </header>
    <main class="container"> <!-- inicio del contenido pricipal --><?php }
}

<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-07 09:07:29
  from 'C:\xampp\htdocs\proyectos\TPE\TPE1-WEBII\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7d69317a7538_47590389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ead390b4523b3d163266f26d14669c122017b52a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE\\TPE1-WEBII\\templates\\header.tpl',
      1 => 1602054443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7d69317a7538_47590389 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Store</title>
    <link rel="stylesheet" href="<?php echo BASE_URL;?>
/css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="home"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="home">Products <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="categorys">Categorys</a>
            </li>
          </ul>
          <ul class="navbar-nav">
              <?php if ((isset($_SESSION['EMAIL_USER']))) {?>
                <li class="nav-item">
                  <a class="nav-link" href="logout"><?php echo $_SESSION['EMAIL_USER'];?>
</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout">Log out</a>
                </li>
              <?php } else { ?>
                <li class="nav-item">
                  <a class="nav-link active" href="login">Log In</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="register">Register</a>
                </li>
              <?php }?>
          </ul>
        </div>
      </nav>          
    </header>
    <main w-50 m-auto mt-5>
  <?php }
}

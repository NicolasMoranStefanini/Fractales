<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-06 05:38:21
  from 'C:\xampp\htdocs\proyectos\TPE\TPE1-WEBII\templates\itemDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7be6ada73979_70361563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83145a8df1195e92486404a0cdc4c9d12ad35cfd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE\\TPE1-WEBII\\templates\\itemDetail.tpl',
      1 => 1601955457,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7be6ada73979_70361563 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <main class="container"> <!-- inicio del contenido pricipal -->

        <h1><?php echo $_smarty_tpl->tpl_vars['item']->value->brand;?>
</h1>
        <h3><?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>

        <p> Description: <?php echo $_smarty_tpl->tpl_vars['item']->value->details;?>
</p>  
     

    </main>

    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

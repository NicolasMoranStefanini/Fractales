<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-01 07:12:04
  from 'C:\xampp\htdocs\proyectos\TPE\TPE1-WEBII\templates\itemDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc5deb4ed8688_58769856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83145a8df1195e92486404a0cdc4c9d12ad35cfd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE\\TPE1-WEBII\\templates\\itemDetail.tpl',
      1 => 1606803123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
    'file:header.tpl' => 1,
    'file:newComment.tpl' => 2,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fc5deb4ed8688_58769856 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_SESSION['EMAIL_USER'])) && $_SESSION['ADMIN'] == '1') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:headerAdmin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }?>
    <main class="container"> <!-- inicio del contenido pricipal -->
            <h1><?php echo $_smarty_tpl->tpl_vars['item']->value->brand;?>
</h1>
            <h3><?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>
</h3>
            <p><?php echo $_smarty_tpl->tpl_vars['item']->value->details;?>
</p>  
    </main>
    <aside class="container bg-white"> <!-- inicio comentarios -->
      <?php if ((isset($_SESSION['EMAIL_USER']))) {?>
        <?php if ($_SESSION['ADMIN'] == '1') {?>
          <div class='comments'></div>
          <<?php $_smarty_tpl->_subTemplateRender('file:newComment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php } else { ?>
          <div class='comments'></div>
          <?php $_smarty_tpl->_subTemplateRender('file:newComment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php }?>
        <?php } else { ?>
          <div class='comments'></div>
          <h6>Only users can comment this item.</h6>
          <p class="m-2">Already a user? <a href="login"> Log In </a> or <a href="register">Create account</a>.</p>

      <?php }?>
    </aside>
    <?php echo '<script'; ?>
 src="<?php echo BASE_URL;?>
js/comments.js"><?php echo '</script'; ?>
>
    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

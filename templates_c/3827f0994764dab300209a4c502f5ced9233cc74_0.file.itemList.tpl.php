<?php
/* Smarty version 3.1.34-dev-7, created on 2021-09-16 22:18:05
  from 'C:\xampp\htdocs\proyectos\TPE\TPE1-WEBII\templates\itemList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6143a67d83d591_32733574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3827f0994764dab300209a4c502f5ced9233cc74' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE\\TPE1-WEBII\\templates\\itemList.tpl',
      1 => 1631823475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:headerAdmin.tpl' => 1,
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6143a67d83d591_32733574 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_SESSION['EMAIL_USER'])) && $_SESSION['ADMIN'] == '1') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:headerAdmin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>



        <h1 class="text-white w-50 m-auto">Productos</h1>

        <ul class='list-group w-50 m-auto'>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <li class='btn btn-dark list-group-item d-flex justify-content-between'>
                <div class='info text-muted'>
                    <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->brand;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>

                </div>
                
                 <div class='actions'>
                    <a class='btn btn-info btn-sm' href="watch/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
">MORE INFORMATION</a>

                </div> 
            </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>


    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

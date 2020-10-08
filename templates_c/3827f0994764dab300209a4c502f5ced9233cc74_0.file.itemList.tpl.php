<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-08 11:09:42
  from 'C:\xampp\htdocs\proyectos\TPE\TPE1-WEBII\templates\itemList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7ed75660e0e9_27390791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3827f0994764dab300209a4c502f5ced9233cc74' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE\\TPE1-WEBII\\templates\\itemList.tpl',
      1 => 1602148181,
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
function content_5f7ed75660e0e9_27390791 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_SESSION['EMAIL_USER'])) && $_SESSION['ADMIN'] == '1') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:headerAdmin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
        <ul class='list-group w-50 m-auto'>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <li class='list-group-item d-flex justify-content-between'>
                <div class='info'>
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

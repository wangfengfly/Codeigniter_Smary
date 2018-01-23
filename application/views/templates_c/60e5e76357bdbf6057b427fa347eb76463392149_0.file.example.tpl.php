<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-23 10:29:48
  from '/search/nginx/html/CodeIgniter/application/views/templates/example.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a669e1c817d87_29923120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60e5e76357bdbf6057b427fa347eb76463392149' => 
    array (
      0 => '/search/nginx/html/CodeIgniter/application/views/templates/example.tpl',
      1 => 1516674511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a669e1c817d87_29923120 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['test']->value, 'result');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
?>
    <p><?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['result']->value['username'];?>
</p>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</body>
</html><?php }
}

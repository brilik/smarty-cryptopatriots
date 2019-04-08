<?php
/* Smarty version 3.1.33, created on 2019-04-08 12:39:16
  from 'C:\OSPanel\domains\cryptopatriots.loc\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cab16c45d5569_78003301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '217eb490939e0607470bc86b682a067ad8015316' => 
    array (
      0 => 'C:\\OSPanel\\domains\\cryptopatriots.loc\\templates\\index.tpl',
      1 => 1554712410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:pages/main.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5cab16c45d5569_78003301 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '8511944195cab16c459bb21_67009411';
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'Сryptopatriots'), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:pages/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

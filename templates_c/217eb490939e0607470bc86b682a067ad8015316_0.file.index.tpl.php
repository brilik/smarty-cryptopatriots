<?php
/* Smarty version 3.1.33, created on 2019-04-08 16:45:22
  from 'C:\OSPanel\domains\cryptopatriots.loc\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cab50726e74f4_04023230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '217eb490939e0607470bc86b682a067ad8015316' => 
    array (
      0 => 'C:\\OSPanel\\domains\\cryptopatriots.loc\\templates\\index.tpl',
      1 => 1554730969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5cab50726e74f4_04023230 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "page.conf", $_smarty_tpl->tpl_vars['url']->value, 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if (isset($_smarty_tpl->tpl_vars['url']->value) && $_smarty_tpl->tpl_vars['url']->value === '/') {?>
    <?php $_smarty_tpl->_assignInScope('template', "pages/home.tpl");?>

<?php } elseif (isset($_smarty_tpl->tpl_vars['url']->value) && $_smarty_tpl->tpl_vars['url']->value === '/about/') {?>
    <?php $_smarty_tpl->_assignInScope('template', "pages/about.tpl");?>

<?php } elseif (isset($_smarty_tpl->tpl_vars['url']->value) && $_smarty_tpl->tpl_vars['url']->value === '/contact/') {?>
    <?php $_smarty_tpl->_assignInScope('template', "pages/contact.tpl");?>

<?php } elseif (isset($_smarty_tpl->tpl_vars['url']->value) && $_smarty_tpl->tpl_vars['url']->value === '/help-center/') {?>
    <?php $_smarty_tpl->_assignInScope('template', "pages/help-center.tpl");?>

<?php } elseif (isset($_smarty_tpl->tpl_vars['url']->value) && $_smarty_tpl->tpl_vars['url']->value === '/payment-proofs/') {?>
    <?php $_smarty_tpl->_assignInScope('template', "pages/payment-proofs.tpl");?>

<?php } elseif (isset($_smarty_tpl->tpl_vars['url']->value) && $_smarty_tpl->tpl_vars['url']->value === '/referral-program/') {?>
    <?php $_smarty_tpl->_assignInScope('template', "pages/referral-program.tpl");?>

<?php } else { ?>
    <?php $_smarty_tpl->_assignInScope('template', "pages/home.tpl");?>

<?php }?>

<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['template']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 3.1.33, created on 2019-04-08 17:26:33
  from 'C:\OSPanel\domains\cryptopatriots.loc\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cab5a19ca97c7_84835559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ef7a5ecdc433fbd055b709d9936b82b1c077d05' => 
    array (
      0 => 'C:\\OSPanel\\domains\\cryptopatriots.loc\\templates\\header.tpl',
      1 => 1554733538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cab5a19ca97c7_84835559 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\cryptopatriots.loc\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="viewport" content="width=1230">
    <meta name="HandheldFriendly" content="true">
    <title><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'menu_name');?>
 - <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'title');?>
</title>
    <meta name="Description" content="">
    <meta name="Keywords" content="">
    <style>
        .loaded .wrapper, .loaded footer {
            visibility: hidden;
        }

        .icon-load {
            background: url("../img/loading.svg?ver1.2") no-repeat;
            background-size: 100%;
            width: 50px;
            height: 50px;
            position: fixed;
            left: 50%;
            top: 50%;
            margin-left: -25px;
            margin-top: -25px;
            display: none;
        }

        .loaded .icon-load {
            display: block;
        }
    </style>
</head>

<body class="loaded">

<div class="icon-load"></div>

<div class="wrapper">

    <header>
        <div class="header-top">
            <div class="container">
                <div class="row wow bounceInLeft">
                    <div class="col-xs-pull-5 pull-left">
                        <span class="registr"><strong>Cryptopatriots Limited</strong> is <a href="#">registered in the UK #<strong>12312334</strong></a></span>
                    </div>
                    <?php if (isset($_smarty_tpl->tpl_vars['social']->value)) {?>
                        <div class="col-xs-pull-4 pull-left">
                            <div class="socials">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['social']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
"></a>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    <?php }?>
                    <div class="col-xs-pull-4 pull-right">
                        <span class="syster">Our syster are: <strong><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['yesterday']->value,"%b %e, %Y %I:%M %p");?>
</strong></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="row wow bounceInRight">
                    <a href="#" class="logo pull-left"><img src="/img/logo.png?ver1.2" alt=""></a>
                    <?php if (isset($_smarty_tpl->tpl_vars['menu']->value)) {?>
                        <ul class="nav pull-left">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['src'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['url']->value === $_smarty_tpl->tpl_vars['item']->value['src']) {?>active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                                </li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    <?php }?>
                    <?php if (!$_smarty_tpl->tpl_vars['login']->value) {?>
                        <button type="button" class="btn-sm btn-login pull-right">Log in</button>
                        <button type="button" class="btn-sm btn-sign pull-right">Sign in</button>
                    <?php } else { ?>
                        <a href="#" class="logout"></a>
                        <a href="#" class="account">Your account</a>
                    <?php }?>
                </div>
            </div>
        </div>
    </header><?php }
}

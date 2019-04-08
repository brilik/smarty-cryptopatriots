<?php
/* Smarty version 3.1.33, created on 2019-04-08 12:39:16
  from 'C:\OSPanel\domains\cryptopatriots.loc\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cab16c45fef77_48084895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ef7a5ecdc433fbd055b709d9936b82b1c077d05' => 
    array (
      0 => 'C:\\OSPanel\\domains\\cryptopatriots.loc\\templates\\header.tpl',
      1 => 1554714379,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cab16c45fef77_48084895 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '5343814385cab16c45efd72_39979568';
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
	<meta name = "format-detection" content = "telephone=no" />
	<meta name="viewport" content="width=1230">
	<meta name="HandheldFriendly" content="true">
	<title><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
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
					<div class="col-xs-pull-4 pull-left">
						<div class="socials">
							<a href="#" class="tw"></a>
							<a href="#" class="telegram"></a>
							<a href="#" class="yt"></a>
						</div>
					</div>
					<div class="col-xs-pull-4 pull-right">
						<span class="syster">Our syster are: <strong>Aug 25, 201802:05PM</strong></span>
					</div>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<div class="row wow bounceInRight">
					<a href="#" class="logo pull-left"><img src="../img/logo.png?ver1.2" alt=""></a>
					<ul class="nav pull-left">
						<?php if (isset($_smarty_tpl->tpl_vars['page_name']->value)) {?>
							{}
							<li><a href="#" class="active">Home</a></li>
						<?php }?>
																																									</ul>
					<button type="button" class="btn-sm btn-login pull-right">Log in</button>
					<button type="button" class="btn-sm btn-sign pull-right">Sign in</button>
				</div>
			</div>
		</div>
	</header><?php }
}

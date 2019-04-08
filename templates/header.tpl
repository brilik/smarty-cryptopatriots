<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="viewport" content="width=1230">
    <meta name="HandheldFriendly" content="true">
    <title>{#menu_name#} - {#title#}</title>
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
                    {if isset($social)}
                        <div class="col-xs-pull-4 pull-left">
                            <div class="socials">
                                {foreach $social as $item}
                                    <a href="{$item.url}" class="{$item.class}"></a>
                                {/foreach}
                            </div>
                        </div>
                    {/if}
                    <div class="col-xs-pull-4 pull-right">
                        <span class="syster">Our syster are: <strong>{$yesterday|date_format:"%b %e, %Y %I:%M %p"}</strong></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="row wow bounceInRight">
                    <a href="#" class="logo pull-left"><img src="/img/logo.png?ver1.2" alt=""></a>
                    {if isset($menu)}
                        <ul class="nav pull-left">
                            {foreach $menu as $item }
                                <li><a href="{$item.src}" class="{if $url === $item.src}active{/if}">{$item.name}</a>
                                </li>
                            {/foreach}
                        </ul>
                    {/if}
                    {if !$login}
                        <button type="button" class="btn-sm btn-login pull-right">Log in</button>
                        <button type="button" class="btn-sm btn-sign pull-right">Sign in</button>
                    {else}
                        <a href="#" class="logout"></a>
                        <a href="#" class="account">Your account</a>
                    {/if}
                </div>
            </div>
        </div>
    </header>
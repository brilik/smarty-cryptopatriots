<?php
require 'smarty/libs/Smarty.class.php';
$smarty = new Smarty;
//$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;

// controller menu
$smarty->assign("menu", array(
    array(
        "name" => "Home",
        "src" => "/",
        "tpl" => "pages/home.tpl"
    ), array(
        "name" => "About Us",
        "src" => "/about/",
        "tpl" => "pages/about.tpl"
    ), array(
        "name" => "Help Center",
        "src" => "/help-center/",
        "tpl" => "pages/help-center.tpl"
    ), array(
        "name" => "Payment Proofs",
        "src" => "/payment-proofs/",
        "tpl" => "pages/payment-proofs.tpl"
    ), array(
        "name" => "Referral Program",
        "src" => "/referral-program/",
        "tpl" => "pages/referral-program.tpl"
    ), array(
        "name" => "Contact Us",
        "src" => "/contact/",
        "tpl" => "pages/contact.tpl"
    )
));

// controller socials
$smarty->assign("social", array(
    array(
        "class" => "tw",
        "url" => "https://twiiter.com"
    ), array(
        "class" => "telegram",
        "url" => "https://tg.com"
    ), array(
        "class" => "yt",
        "url" => "https://youtube.com"
    )
));

// controller protection section
$smarty->assign("protection", array(
    array(
        "src" => "/img/symantec.png",
        "alt" => "protection",
        "url" => "#"
    ), array(
        "src" => "/img/ddos-guard.png",
        "alt" => "protection",
        "url" => "#"
    ), array(
        "src" => "/img/bitcoin1.png",
        "alt" => "protection",
        "url" => "#"
    ), array(
        "src" => "/img/bitcoin2.png",
        "alt" => "protection",
        "url" => "#"
    )
));

$smarty->assign('url', $_SERVER['REQUEST_URI']);

// Check on logged in
$login = FALSE;
$smarty->assign('login', $login);

$smarty->display('index.tpl');
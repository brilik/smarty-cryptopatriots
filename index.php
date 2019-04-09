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

// controller questions section
$smarty->assign("questions", array(
    array(
        "title" => "Questions about the company",
        "qa"    => array(
            array(
                "question" => "This is my first time on your website. What kind of service do you offer?",
                "answer" => "It's easy to check registration information. To do this, you have to use the search function on the Companies House website, the official register of companies in England and of Wales. You can use company name - Adamant Investment Limited - or its registration number - 09881952. Direct link to the company page there is https://beta.companieshouse.gov.uk/company/09881952."
            ), array(
                "question" => "What is the Gold Mining Investments Limited?",
                "answer" => "It's easy to check registration information. To do this, you have to use the search function on the Companies House website, the official register of companies in England and of Wales. You can use company name - Adamant Investment Limited - or its registration number - 09881952. Direct link to the company page there is https://beta.companieshouse.gov.uk/company/09881952."
            ), array(
                "question" => "Is Gold Mining Investments Limited officially registered?",
                "answer" => "It's easy to check registration information. To do this, you have to use the search function on the Companies House website, the official register of companies in England and of Wales. You can use company name - Adamant Investment Limited - or its registration number - 09881952. Direct link to the company page there is https://beta.companieshouse.gov.uk/company/09881952."
            ), array(
                "question" => "How can I check the company registration?",
                "answer" => "It's easy to check registration information. To do this, you have to use the search function on the Companies House website, the official register of companies in England and of Wales. You can use company name - Adamant Investment Limited - or its registration number - 09881952. Direct link to the company page there is https://beta.companieshouse.gov.uk/company/09881952."
            ), array(
                "question" => "How real your business is? What proofs can you provide your investors?",
                "answer" => "It's easy to check registration information. To do this, you have to use the search function on the Companies House website, the official register of companies in England and of Wales. You can use company name - Adamant Investment Limited - or its registration number - 09881952. Direct link to the company page there is https://beta.companieshouse.gov.uk/company/09881952."
            ), array(
                "question" => "Can I lose my money investing with Gold Mining Investments Limited?",
                "answer" => "It's easy to check registration information. To do this, you have to use the search function on the Companies House website, the official register of companies in England and of Wales. You can use company name - Adamant Investment Limited - or its registration number - 09881952. Direct link to the company page there is https://beta.companieshouse.gov.uk/company/09881952."
            ), array(
                "question" => "How do you protect our investment?",
                "answer" => "It's easy to check registration information. To do this, you have to use the search function on the Companies House website, the official register of companies in England and of Wales. You can use company name - Adamant Investment Limited - or its registration number - 09881952. Direct link to the company page there is https://beta.companieshouse.gov.uk/company/09881952."
            ), array(
                "question" => "Can I visit your office for detailed information on your business?",
                "answer" => "It's easy to check registration information. To do this, you have to use the search function on the Companies House website, the official register of companies in England and of Wales. You can use company name - Adamant Investment Limited - or its registration number - 09881952. Direct link to the company page there is https://beta.companieshouse.gov.uk/company/09881952."
            ), array(
                "question" => "How long do you plan to work?",
                "answer" => ""
            )
        )
    ), array(
        "title" => "Questions about account",
        "qa"    => array(
            array(
                "question" => "This is my first time on your website. What kind of service do you offer?",
                "answer" => "It's easy to check registration information. To do this, you have to use the search function on the Companies House website, the official register of companies in England and of Wales. You can use company name - Adamant Investment Limited - or its registration number - 09881952. Direct link to the company page there is https://beta.companieshouse.gov.uk/company/09881952."
            ), array(
                "question" => "What is the Gold Mining Investments Limited?",
                "answer" => "It's easy to check registration information. To do this, you have to use the search function on the Companies House website, the official register of companies in England and of Wales. You can use company name - Adamant Investment Limited - or its registration number - 09881952. Direct link to the company page there is https://beta.companieshouse.gov.uk/company/09881952."
            ), array(
                "question" => "Is Gold Mining Investments Limited officially registered?",
                "answer" => "It's easy to check registration information. To do this, you have to use the search function on the Companies House website, the official register of companies in England and of Wales. You can use company name - Adamant Investment Limited - or its registration number - 09881952. Direct link to the company page there is https://beta.companieshouse.gov.uk/company/09881952."
            ), array(
                "question" => "How real your business is? What proofs can you provide your investors?",
                "answer" => "It's easy to check registration information. To do this, you have to use the search function on the Companies House website, the official register of companies in England and of Wales. You can use company name - Adamant Investment Limited - or its registration number - 09881952. Direct link to the company page there is https://beta.companieshouse.gov.uk/company/09881952."
            ), array(
                "question" => "Can I lose my money investing with Gold Mining Investments Limited?",
                "answer" => "It's easy to check registration information. To do this, you have to use the search function on the Companies House website, the official register of companies in England and of Wales. You can use company name - Adamant Investment Limited - or its registration number - 09881952. Direct link to the company page there is https://beta.companieshouse.gov.uk/company/09881952."
            ), array(
                "question" => "How do you protect our investment?",
                "answer" => "It's easy to check registration information. To do this, you have to use the search function on the Companies House website, the official register of companies in England and of Wales. You can use company name - Adamant Investment Limited - or its registration number - 09881952. Direct link to the company page there is https://beta.companieshouse.gov.uk/company/09881952."
            )
        )
    )
));

$smarty->assign('url', $_SERVER['REQUEST_URI']);

// Check on logged in
$login = FALSE;
$smarty->assign('login', $login);

$smarty->display('index.tpl');
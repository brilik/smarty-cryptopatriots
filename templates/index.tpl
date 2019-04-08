{config_load file="page.conf" section=$url}
{include file="header.tpl"}


{* See template for page *}
{if isset($url) && $url === '/'}
    {$template="pages/home.tpl"}

{elseif isset($url) && $url === '/about/'}
    {$template="pages/about.tpl"}

{elseif isset($url) && $url === '/contact/'}
    {$template="pages/contact.tpl"}

{elseif isset($url) && $url === '/help-center/'}
    {$template="pages/help-center.tpl"}

{elseif isset($url) && $url === '/payment-proofs/'}
    {$template="pages/payment-proofs.tpl"}

{elseif isset($url) && $url === '/referral-program/'}
    {$template="pages/referral-program.tpl"}

{else}
    {$template="pages/home.tpl"}

{/if}

{include file=$template}

{include file="footer.tpl"}
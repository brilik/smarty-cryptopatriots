<?php
/* Smarty version 3.1.33, created on 2019-04-09 09:56:38
  from 'C:\OSPanel\domains\cryptopatriots.loc\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cac4226bb4714_17375579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9249ccb1d974abae43722f61b39b48404ec6ff71' => 
    array (
      0 => 'C:\\OSPanel\\domains\\cryptopatriots.loc\\templates\\footer.tpl',
      1 => 1554792993,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cac4226bb4714_17375579 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\cryptopatriots.loc\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if ($_smarty_tpl->tpl_vars['url']->value === '/about/') {
$_smarty_tpl->_assignInScope('class', 'protection-in');
}
if ($_smarty_tpl->tpl_vars['url']->value === '/referral-program/') {
$_smarty_tpl->_assignInScope('class', 'protection-in-2 protection-in-3');
}
if ($_smarty_tpl->tpl_vars['url']->value === '/payment-proofs/' || $_smarty_tpl->tpl_vars['url']->value === '/help-center/') {
$_smarty_tpl->_assignInScope('class', 'protection-in-2');
}
if ($_smarty_tpl->tpl_vars['url']->value === '/contact/') {
$_smarty_tpl->_assignInScope('class', 'protection-in-2');?>
    <div class="map-bg">
        <div class="map" id="map"></div>
        <div class="map_label"><span>COMPANY ADDRESS:</span> 35 Piccadilly, London, United Kingdom, W1J 0DW</div>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['protection']->value) {
$_smarty_tpl->_assignInScope('count', 0);?>
    <div class="protection <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
        <div class="container">
            <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['protection']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <div class="col-sm-3">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" class="protection1 wow zoomIn"
                           <?php if ($_smarty_tpl->tpl_vars['count']->value !== 0) {?>data-wow-delay="0.<?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
s"<?php }?>>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['src'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['altz'];?>
">
                        </a>
                    </div>
                    <?php $_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);
$_smarty_tpl->_assignInScope('sum', $_smarty_tpl->tpl_vars['sum']->value+2);?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>
<?php }?>

<div class="push"></div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-5 wow bounceInLeft">
                <a href="#" class="logo"><img src="img/logo.png?ver1.2" alt=""></a>
                <span class="copy"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'copyright');?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['yesterday']->value,"%Y")+1;?>
</span>
            </div>
            <div class="col-sm-7 pull-right wow bounceInRight">
                <?php if (isset($_smarty_tpl->tpl_vars['menu']->value)) {?>
                    <ul class="nav pull-right">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['src'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['url']->value === $_smarty_tpl->tpl_vars['item']->value['src']) {?>active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['social']->value)) {?>
                    <div class="socials pull-right">
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
                <?php }?>
            </div>
        </div>
    </div>
</footer>

<div class="modal" id="loginModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <a href="#" class="bClose"></a>
            <div class="modal-header">
                <h3>Login</h3>
            </div>
            <div class="modal-body">
                <form action="#" method="post" class="modal_form" id="login_form">
                    <fieldset>
                        <div class="input-box input-username">
                            <input type="text" class="input-sm" name="username" placeholder="Username" id="username">
                        </div>
                        <div class="input-box input-password">
                            <input type="password" class="input-sm" name="password" placeholder="Password"
                                   id="password">
                        </div>
                        <div class="btn-group">
                            <button class="btn-default btn-big btn-blue"><span>Login</span></button>
                            <button class="btn-default btn-big link_forgot">Forgot your password?</button>
                        </div>
                        <div class="error_message"></div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="forgotPassModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <a href="#" class="bClose"></a>
            <div class="modal-header">
                <h3>Forgot password</h3>
            </div>
            <div class="modal-body">
                <form action="#" method="post" class="modal_form forgot_pass_form" id="forgot_pass_form">
                    <fieldset>
                        <div class="input-box input-email">
                            <input type="text" class="input-sm" name="forgot_email" placeholder="Your e-Mail">
                        </div>
                        <div class="btn-group">
                            <button class="btn-default btn-big btn-blue">sEND</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="newPassModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <a href="#" class="bClose"></a>
            <div class="modal-header">
                <h3>Forgot password</h3>
            </div>
            <div class="modal-body">
                <p class="new-pass-message">Your new password was successfully sanded on your e-mail address</p>
                <div class="btn-group">
                    <button type="button" class="btn-default btn-big btn-ok bClose">OK</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="signupModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <a href="#" class="bClose"></a>
            <div class="modal-header">
                <h3>Registration</h3>
            </div>
            <div class="modal-body">
                <form action="#" method="post" class="modal_form signup_form" id="signup_form">
                    <fieldset>
                        <div class="form-col pull-left">
                            <div class="form_headline form_headline_account">Account information</div>

                            <div class="input-box input-no-icon">
                                <input type="text" class="input-sm" name="full_name" placeholder="Your Full Name">
                            </div>

                            <div class="input-box input-no-icon">
                                <input type="text" class="input-sm" name="sign_username" placeholder="Your Username">
                            </div>

                            <div class="input-box input-no-icon">
                                <input type="password" class="input-sm" name="sign_pass" placeholder="Define Password"
                                       id="sign_password">
                            </div>

                            <div class="input-box input-no-icon">
                                <input type="password" class="input-sm" name="sign_pass_retype"
                                       placeholder="Retype Password">
                            </div>

                            <div class="input-box input-no-icon">
                                <input type="text" class="input-sm" name="sign_email" placeholder="Your E-mail"
                                       id="sign_email">
                            </div>

                            <div class="input-box input-no-icon">
                                <input type="text" class="input-sm" name="sign_email_retype"
                                       placeholder="Retype E-mail">
                            </div>
                        </div>
                        <div class="form-col pull-right">

                            <div class="form_headline form_headline_payment">Payment systems</div>

                            <div class="input-box input-no-icon">
                                <input type="text" class="input-sm" name="system_address" placeholder="System Adress">
                            </div>

                            <div class="form_headline form_headline_security">Security</div>

                            <div class="input-box input-no-icon">
                                <input type="text" class="input-sm" name="secret_question"
                                       placeholder="Secret question">
                            </div>

                            <div class="input-box input-no-icon">
                                <input type="text" class="input-sm" name="secret_answer" placeholder="Secret answer">
                            </div>

                            <div class="input-box input-no-icon">
                                <input type="text" class="input-sm" name="secret_answer"
                                       placeholder="Your upline: You have no upline.">
                            </div>

                            <div class="input_box input_checkbox">
                                <input type="checkbox" id="terms_agree" class="checkbox" name="terms_agree">
                                <label for="terms_agree" class="terms_agree">I agree with <a href="#">Terms and
                                        conditions</a></label>
                            </div>

                        </div>
                        <div class="clear"></div>

                        <div class="btn-group">
                            <button class="btn-default btn-big btn-blue">SignIn</button>
                            <button class="btn-default btn-big btn-modal-login">Login</button>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>


<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext"
      rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext"
      rel="stylesheet">
<?php if ($_smarty_tpl->tpl_vars['url']->value === '/about/') {?>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:700&amp;subset=cyrillic,cyrillic-ext,latin-ext"
          rel="stylesheet">
<?php }?>
<link rel="stylesheet" type="text/css" href="/css/main.min.css?ver1.2"/>

<?php echo '<script'; ?>
 src="/js/scripts.min.js?ver1.2"><?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['url']->value === "/contact/") {?>
    <?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNrKyVraHQ-kgSzNmDteyZ87bdmE2p9AU"><?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
 src="/js/custom.js?ver1.2"><?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['url']->value === '/home/') {?>
    <?php echo '<script'; ?>
 src="https://s3.tradingview.com/tv.js?ver1.2"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        new TradingView.widget(
            {
                "width": 1143,
                "height": 510,
                "symbol": "NASDAQ:AAPL",
                "interval": "D",
                "timezone": "Etc/UTC",
                "theme": "Light",
                "style": "1",
                "locale": "ru",
                "toolbar_bg": "#a9a9a9",
                "enable_publishing": false,
                "hide_top_toolbar": true,
                "save_image": false,
                "container_id": "chart"
            }
        );
    <?php echo '</script'; ?>
>
<?php }?>

</body>
</html><?php }
}

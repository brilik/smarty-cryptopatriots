<?php
/* Smarty version 3.1.33, created on 2019-04-08 11:08:41
  from 'C:\OSPanel\domains\cryptopatriots.loc\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cab018944db96_18261586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9249ccb1d974abae43722f61b39b48404ec6ff71' => 
    array (
      0 => 'C:\\OSPanel\\domains\\cryptopatriots.loc\\templates\\footer.tpl',
      1 => 1554710918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cab018944db96_18261586 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '8061807665cab0189422633_94000746';
?>
	<div class="push"></div>
</div>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-5 wow bounceInLeft">
				<a href="#" class="logo"><img src="img/logo.png?ver1.2" alt=""></a>
				<span class="copy">Copyright @ Cryptopatriots Ltd 2018 All rights reserved 2020</span>
			</div>
			<div class="col-sm-7 pull-right wow bounceInRight">
				<ul class="nav pull-right">
					<li><a href="#" class="active">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Help Center</a></li>
					<li><a href="#">Payment Proofs</a></li>
					<li><a href="#">Referral Program</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
				<div class="socials pull-right">
					<a href="#" class="tw"></a>
					<a href="#" class="telegram"></a>
					<a href="#" class="yt"></a>
				</div>
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
                            <input type="password" class="input-sm" name="password" placeholder="Password" id="password">
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
                                <input type="password" class="input-sm" name="sign_pass" placeholder="Define Password" id="sign_password">
                            </div>

                            <div class="input-box input-no-icon">
                                <input type="password" class="input-sm" name="sign_pass_retype" placeholder="Retype Password">
                            </div>

                            <div class="input-box input-no-icon">
                                <input type="text" class="input-sm" name="sign_email" placeholder="Your E-mail" id="sign_email">
                            </div>

                            <div class="input-box input-no-icon">
                                <input type="text" class="input-sm" name="sign_email_retype" placeholder="Retype E-mail">
                            </div>
                        </div>
                        <div class="form-col pull-right">

                            <div class="form_headline form_headline_payment">Payment systems</div>

                            <div class="input-box input-no-icon">
                                <input type="text" class="input-sm" name="system_address" placeholder="System Adress">
                            </div>

                            <div class="form_headline form_headline_security">Security</div>

                            <div class="input-box input-no-icon">
                                <input type="text" class="input-sm" name="secret_question" placeholder="Secret question">
                            </div>

                            <div class="input-box input-no-icon">
                                <input type="text" class="input-sm" name="secret_answer" placeholder="Secret answer">
                            </div>

                            <div class="input-box input-no-icon">
                                <input type="text" class="input-sm" name="secret_answer" placeholder="Your upline: You have no upline.">
                            </div>

                            <div class="input_box input_checkbox">
                                <input type="checkbox" id="terms_agree" class="checkbox" name="terms_agree">
                                <label for="terms_agree" class="terms_agree">I agree with <a href="#">Terms and conditions</a></label>
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


<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/main.min.css?ver1.2" />

<?php echo '<script'; ?>
 src="../js/scripts.min.js?ver1.2"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../js/custom.js?ver1.2"><?php echo '</script'; ?>
>
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

</body>
</html><?php }
}

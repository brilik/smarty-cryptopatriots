
var hourly_profit, daily_profit, monthly_profit, plan, amount;

var $login_form = $('#login_form'),
    $signup_form = $('#signup_form'),
    $forgot_pass_form = $('#forgot_pass_form'),
    $newPassModal = $('#newPassModal'),
    $amount_input = $('#amount'),
    $bannerSlider = $('#top-banner'),
    $newsSlider = $('#news-slider'),
    $confirm_form = $('#confirm_form'),
    $contact_form = $('#contact_form'),
    $edit_form = $('#edit_form');

isTouchDevice = !!navigator.userAgent.match(/(iPhone|iPod|iPad|Android|playbook|silk|BlackBerry|BB10|Windows Phone|Tizen|Bada|webOS|IEMobile|Opera Mini)/);

$(window).on('load', function() {
    $('body').removeClass('loaded');

    /* css animations */
    if(!isTouchDevice){new WOW().init();}
    //--
});

$(document).ready(function() {

    /* banner slider */
    if ($bannerSlider.length > 0) {
        $bannerSlider.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            fade: true,
            infinite: false,
            autoplay: false
        });
    }

    /* news slider */
    if ($newsSlider.length > 0) {
        $newsSlider.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            fade: true,
            infinite: false,
            autoplay: false
        });
    }

    /* tooltip */
    $('.features-text').hover(function () {
        $(this).find('.tooltip').stop(true, true).fadeIn(100);
    }, function () {
        $(this).find('.tooltip').stop(true, true).fadeOut();
    });

    /* input focus */
    $('.input-sm').focus(function () {
        $(this).parent().addClass('focused');
    }).blur(function () {
        $(this).parent().removeClass('focused');
    });
    $('.terms_agree').on('mousedown', function () {
       $(this).addClass('focused');
    }).on('mouseup', function () {
        $(this).removeClass('focused');
    });


    /* terms accordeon */
    $('.help-question').on('click', function () {
       $(this).toggleClass('opened').next('.help-answer').slideToggle();
    });


    /* modals */
    // var modalOptions = {
    //     modalColor: '#000',
    //     opacity: 0.5,
    //     transition: 'slideDown',
    //     speed: 300,
    //     follow: [false, false],
    // };

    $('.btn-login, .btn-modal-login').bind('click', function(e) { //log in
        e.preventDefault();
        $('#loginModal').bPopup({
            modalColor: '#000',
            opacity: 0.5,
            transition: 'slideDown',
            speed: 300,
            follow: [false, false],
            onOpen: function() {
                var bPopup = $('#signupModal').bPopup();
                bPopup.close();
            }
        })

    });

    $('.btn-sign').bind('click', function(e) { // sign up
        e.preventDefault();
        $('#signupModal').bPopup({
            modalColor: '#000',
            opacity: 0.5,
            transition: 'slideDown',
            speed: 300,
            follow: [false, false],
            onClose: function () {
                $('body').removeClass('show_modal');
            }
        });

    });

    $('.link_forgot').bind('click', function(e) { // forgot password

        $('body').removeClass('show_modal');
        $('.modal_content_wrap').css('opacity', '0');

        e.preventDefault();

        $('#forgotPassModal').bPopup({
            modalColor: '#000',
            opacity: 0.5,
            transition: 'slideDown',
            speed: 300,
            follow: [false, false],
            onOpen: function() { // close #loginModal
                var bPopup = $('#loginModal').bPopup();
                bPopup.close();
            },
            onClose: function () {
                $('body').removeClass('show_modal');
            }
        });

    });

    $('.btn-confirm').bind('click', function (e) {
        e.preventDefault();

        $('#confirmModal').bPopup({
            modalColor: '#000',
            opacity: 0.5,
            transition: 'slideDown',
            speed: 300,
            follow: [false, false],
            onOpen: function() { // close #loginModal
                var bPopup = $('#loginModal').bPopup();
                bPopup.close();
                setTimeout(function () {
                    $('body').addClass('show_modal');
                }, 400);
                setTimeout(function () {
                    $('.modal_content_wrap').css('opacity', '1');
                }, 800);
            },
            onClose: function () {
                $('body').removeClass('show_modal');
                $('.modal_content_wrap').css('opacity', '0');
            }
        });
    });
    /* modals end */


    /* calculator init */
    if($('.plans').length > 0 || $('.make_deposit_content').length > 0) {
        plan = 1;
        var amount_1 = 0.00100000;
        var amount_2 = 0.50100000;
        var amount_3 = 0.50100000;

        $amount_input.val(amount_1);

        calculator(plan, amount_1);

        $('.plan_radio').change(function () { // on change plan

            plan = $(this).attr('value');
            switch (plan) {
                case '1':
                    amount = amount_1;
                    break;

                case '2':
                    amount = amount_2;
                    break;

                case '3':
                    amount = amount_3;
                    break;

                default:
                    amount = amount_1;
            }
            calculator(plan, amount);

            $amount_input.val(amount);


            // if($('#count')[0]) {
            //     $("html, body").animate({
            //         scrollTop: $('#count').offset().top
            //     }, 500);
            // }
            // if($('#count2')[0]){
            //     $("html, body").animate({
            //         scrollTop: $('#count2').offset().top
            //     }, 500);
            // }

            return false;
        });

        $amount_input.keyup(function () { // on change value
            calculator(plan, $amount_input.val(), 1);
        });
    }
    /* calculator end */


    /* statistic animation */
    if($('.statistic').length > 0){
        var show = true;
        var countbox = ".statistic";

        $(window).on("scroll load resize", function(){

            if(!show) return false;                   // cancel animation

            var w_top = $(window).scrollTop();        // scroll position
            var e_top = $(countbox).offset().top;     // counters position from the top of the page

            var w_height = $(window).height();        // window height
            var d_height = $(document).height();      // document height

            var e_height = $(countbox).outerHeight(); // counters height

            // final values
            var days_online = 12;
            var last_deposit = 0.53;
            var total_investors = 857;
            var last_withdrawal = 0.34;
            var total_deposited = 25;
            var members_online = 58;
            var total_withdrawal = 15;

            if(w_top + (w_height-500) >= e_top || w_height + w_top == d_height || e_height + e_top < w_height){

                var options = {
                    useEasing : true,
                    useGrouping : true,
                    separator : '',
                    decimal : '.',
                    prefix : '',
                    suffix : ''
                };

                // days online
                var numAnim = new CountUp("num-1", 0, days_online, 0, 3, options);
                numAnim.start();

                // last deposit
                var numAnim2 = new CountUp("num-2", 0, last_deposit, 2, 3, options);
                numAnim2.start();

                // total investors
                var numAnim3 = new CountUp("num-3", 0, total_investors, 0, 1, options);
                numAnim3.start();

                // last withdrawal
                var numAnim4 = new CountUp("num-4", 0, last_withdrawal, 0, 3, options);
                numAnim4.start();

                // total deposited
                var numAnim5 = new CountUp("num-5", 0, total_deposited, 0, 3, options);
                numAnim5.start();

                // members online
                var numAnim6 = new CountUp("num-6", 0, members_online, 0, 3, options);
                numAnim6.start();

                // total withdrawal
                var numAnim7 = new CountUp("num-7", 0, total_withdrawal, 0, 3, options);
                numAnim7.start();

                show = false;
            }
        });

    }
    /* statistic animation end */


    // login form
    if($login_form[0]){
        $login_form.validate({

            errorClass: "error",
            validClass: "success",

            errorPlacement: function(error, element) {},

            highlight: function(element, errorClass, validClass) {

                $(element).addClass(errorClass).removeClass(validClass); // add error class

                if($('#username').hasClass('error') || $('#password').hasClass('error')) {
                    $login_form.find(".error_message").html('<span class="error_top_message">Your login or password is wrong</span><span class="error_bottom_message">Please check this information</span> '); // show error message
                }

            },

            unhighlight: function(element, errorClass, validClass) {

                $(element).removeClass(errorClass).addClass(validClass); // add success class

                if($('#username').hasClass('success') && $('#password').hasClass('success')) { // hide error message
                    $login_form.find(".error_message").html('');
                }

            },

            rules: {

                username: {
                    required: true
                },

                password: {
                    required: true
                }

            }


        });
    }
    // login form end


    // signup form
    if($signup_form[0]){
        $signup_form.validate({

            errorClass: "error",
            validClass: "success",

            errorPlacement: function(error, element) {
                error.appendTo(element.parent()) // place for error message
            },

            highlight: function(element, errorClass, validClass) {

                $(element).addClass(errorClass).removeClass(validClass); // add error class

            },

            unhighlight: function(element, errorClass, validClass) {

                $(element).removeClass(errorClass).addClass(validClass); // add success class

            },

            rules: {

                sign_username: {
                    required: false
                },

                sign_pass: {
                    required: true
                },

                sign_pass_retype: {
                    required: true,
                    equalTo: "#sign_password"
                },

                sign_email: {
                    required: true,
                    email: true
                },

                sign_email_retype: {
                    required: true,
                    email: true,
                    equalTo: "#sign_email"
                },

                terms_agree: {
                    required: true
                }

            },

            messages: {

                sign_username: {
                    required: ''
                },

                sign_pass: {
                    required: 'Please enter your password'
                },

                sign_pass_retype: {
                    required: 'Please enter your password againe',
                    equalTo: 'Please enter the same password'
                },

                sign_email: {
                    required: 'Please input your e-mail address',
                    email: 'Please input correct e-mail'
                },

                sign_email_retype: {
                    required: 'Please retype e-mail address',
                    email: 'Please input correct e-mail',
                    equalTo: 'Please enter the same e-mail'
                },

                terms_agree: {
                    required: 'Please agree with the rules and conditions'
                }

            }

        });
    }
    // signup form end


    // forgot password form
    if($forgot_pass_form[0]){
        $forgot_pass_form.validate({

            errorClass: "error",
            validClass: "success",

            errorPlacement: function(error, element) {
                error.appendTo(element.parent()) // place for error message
            },

            highlight: function(element, errorClass, validClass) {

                $(element).addClass(errorClass).removeClass(validClass); // add error class

            },

            unhighlight: function(element, errorClass, validClass) {

                $(element).removeClass(errorClass).addClass(validClass); // add success class

            },

            rules: {

                forgot_email: {
                    required: true,
                    email: true
                }

            },

            messages: {

                forgot_email: {
                    required: 'Please input your e-mail',
                    email: 'Please input correct e-mail'
                }

            },

            submitHandler: function() {

                $("#newPassModal").bPopup({
                    modalColor: '#000',
                    opacity: 0.5,
                    transition: 'slideDown',
                    speed: 300,
                    follow: [false, false],
                    onOpen: function () {
                        $('#forgotPassModal').bPopup().close();
                    }
                });

            }

        });
    }
    // forgot password form end


    // contact form
    if($contact_form[0]){
        $contact_form.validate({

            errorClass: "error",
            validClass: "success",

            errorPlacement: function(error, element) {},

            highlight: function(element, errorClass, validClass) {

                $(element).addClass(errorClass).removeClass(validClass); // add error class

            },

            unhighlight: function(element, errorClass, validClass) {

                $(element).removeClass(errorClass).addClass(validClass); // add success class

            },

            rules: {

                contacts_name: {
                    required: true
                },

                contacts_email: {
                    required: true,
                    email: true
                },

                contacts_message: {
                    required: true
                }

            },

            messages: {

                contacts_name: {
                    required: ''
                },

                contacts_email: {
                    required: ''
                },

                contacts_message: {
                    required: ''
                }

            }

        });
    }
    // contact form end


    // confirm edit form
    if($confirm_form[0]){
        $confirm_form.validate({

            errorClass: "error",
            validClass: "success",

            errorPlacement: function(error, element) {
                error.appendTo(element.parent()) // place for error message
            },

            highlight: function(element, errorClass, validClass) {

                $(element).addClass(errorClass).removeClass(validClass); // add error class

            },

            unhighlight: function(element, errorClass, validClass) {

                $(element).removeClass(errorClass).addClass(validClass); // add success class

            },

            rules: {

                confirm_code: {
                    required: true
                }

            },

            messages: {

                confirm_code: {
                    required: 'You entered an incorrect code, please check the correct entry and try again.'
                }

            }

        });
    }
    // confirm edit form end


    // edit form
    if($edit_form[0]){
        $edit_form.validate({

            errorClass: "error",
            validClass: "success",

            errorPlacement: function(error, element) {
                error.appendTo(element.parent()) // place for error message
            },

            highlight: function(element, errorClass, validClass) {

                $(element).addClass(errorClass).removeClass(validClass); // add error class
                $(element).parent().addClass('has-error');

            },

            unhighlight: function(element, errorClass, validClass) {

                $(element).removeClass(errorClass).addClass(validClass); // add success class
                $(element).parent().removeClass('has-error');

            },

            rules: {

                edit_name: {
                    required: true
                },

                edit_password: {
                    required: true
                },

                edit_passord_retype: {
                    required: true,
                    equalTo: "#edit_password"
                },

                edit_email: {
                    required: true,
                    email: true
                }

            },

            messages: {

                edit_name: {
                    required: 'Please enter fullname'
                },

                edit_password: {
                    required: 'Please enter password'
                },

                edit_passord_retype: {
                    required: 'Please enter password',
                    equalTo: "The password does not match"
                },

                edit_email: {
                    required: 'Please enter e-mail',
                    email: 'Please enter correct e-mail'
                }

            }

        });
    }
    // edit form end

    /* form validation end */


    /* custom select */
    $('body').addClass('hasJS');

    $("select.custom").each(function() {

        var sb = new SelectBox({
            selectbox: $(this),
            customScrollbar: false,
            height: 163,
            changeCallback: function(val) {
                $(this)[0].selectbox.change();
            }
        });

    });
    //--


    /* google map */
    if($('#map')[0]){

        google.maps.event.addDomListener(window, 'load', init);
        google.maps.event.addDomListener(window, "resize", init);

        var markerSize = { x: 86, y: 80 };

        google.maps.Marker.prototype.setLabel = function(label){
            this.label = new MarkerLabel({
                map: this.map,
                marker: this,
                text: label
            });
            this.label.bindTo('position', this, 'position');
        };

        var MarkerLabel = function(options) {
            this.setValues(options);
            this.span = document.createElement('span');
            this.span.className = 'map_label';
        };

        MarkerLabel.prototype = $.extend(new google.maps.OverlayView(), {
            onAdd: function() {
                this.getPanes().overlayImage.appendChild(this.span);
                var self = this;
                this.listeners = [
                    google.maps.event.addListener(this, 'position_changed', function() { self.draw();    })];
            },
            draw: function() {
                var text = String(this.get('text'));
                var position = this.getProjection().fromLatLngToDivPixel(this.get('position'));
                this.span.innerHTML = text;
                this.span.style.left = (position.x - (markerSize.x/2)) - (text.length) + 'px';
                this.span.style.top = (position.y - markerSize.y) + 'px';
            }
        });

        function init() {
            var mapOptions = {
                zoom: 16,
                scrollwheel: false,
                center: new google.maps.LatLng(51.51064668020140, -0.1372520),
                disableDefaultUI: true
            };
            var mapElement = document.getElementById('map');
            var map = new google.maps.Map(mapElement, mapOptions);
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(51.51033468020140, -0.1371420),
                map: map,
                icon: 'img/marker.svg',
                label: ''
            });

        }

    }
    //--



});


/* calculator */
function calculator(plan, amount, input_disabled){

    if(plan == 1){
        hourly_profit = (amount/10)/24;
        daily_profit = amount/10;
        monthly_profit = (amount/10)*31;
    }
    else if(plan == 2){
        hourly_profit = ((amount/100)*11)/24;
        daily_profit = (amount/100)*11;
        monthly_profit = (amount/100)*11*31;
    }
    else if(plan == 3){
        hourly_profit = ((amount/100)*12)/24;
        daily_profit = (amount/100)*12;
        monthly_profit = (amount/100)*12*31;
    }

    var calc_options = {
        useEasing : true,
        useGrouping : true,
        separator : '',
        decimal : '.',
        prefix : '',
        suffix : ''
    };

    var hourly_profit_value = parseFloat(hourly_profit.toPrecision(8)).toFixed(8);
    var daily_profit_value = parseFloat(daily_profit.toPrecision(8)).toFixed(8);
    var monthly_profit_value = parseFloat(monthly_profit.toPrecision(8)).toFixed(8);
    var amount_value = amount;


    var hourly = new CountUp("hourly_profit", 0, hourly_profit_value, 8, 1, calc_options);
    hourly.start();

    var daily = new CountUp("daily_profit", 0, daily_profit_value, 8, 1, calc_options);
    daily.start();

    var monthly = new CountUp("monthly_profit", 0, monthly_profit_value, 8, 1, calc_options);
    monthly.start();

}
//--


// Detection function to tell what kind of browser is used
function getBrowser(){
    var userAgent = navigator.userAgent.toLowerCase();
    $.browser.chrome = /chrome/.test(userAgent);
    $.browser.safari= /webkit/.test(userAgent);
    $.browser.opera=/opera/.test(userAgent);
    $.browser.msie=/msie/.test( userAgent ) && !/opera/.test( userAgent );
    $.browser.mozilla= /mozilla/.test( userAgent ) && !/(compatible|webkit)/.test( userAgent ) || /firefox/.test(userAgent);

    if($.browser.chrome) return "chrome";
    if($.browser.mozilla) return "mozilla";
    if($.browser.opera) return "opera";
    if($.browser.safari) return "safari";
    if($.browser.msie) return "ie";
};

if(getBrowser()=='ie'){
    $('body').addClass('ie');
}

function getInternetExplorerVersion(){
    var rv = -1;
    if (navigator.appName == 'Microsoft Internet Explorer'){
        var ua = navigator.userAgent;
        var re  = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
        if (re.exec(ua) != null)
            rv = parseFloat( RegExp.$1 );
    }
    else if (navigator.appName == 'Netscape'){
        var ua = navigator.userAgent;
        var re  = new RegExp("Trident/.*rv:([0-9]{1,}[\.0-9]{0,})");
        if (re.exec(ua) != null)
            rv = parseFloat( RegExp.$1 );
    }
    return rv;
};

if (getInternetExplorerVersion() >= 10){
    $('body').addClass('ie11');
};


// Grayscale images only on browsers IE10+ since they removed support for CSS grayscale filter
if (getInternetExplorerVersion() >= 10){
    $('.protection a img').each(function(){
        var el = $(this);
        el.css({"position":"absolute"}).wrap("<div class='img_wrapper' style='display: inline-block'>").clone().addClass('img_grayscale').css({"position":"absolute","z-index":"5","opacity":"0"}).insertBefore(el).queue(function(){
            var el = $(this);
            el.parent().css({"width":this.width,"height":this.height});
            el.dequeue();
        });
        this.src = grayscaleIE10(this.src);
    });

    // Quick animation on IE10+
    $('.protection a img').hover(function () {
            $(this).parent().find('img:first').stop().animate({opacity:1}, 200);
        },
        function () {
            $('.img_grayscale').stop().animate({opacity:0}, 200);
        }
    );

    function grayscaleIE10(src){
        var canvas = document.createElement('canvas');
        var ctx = canvas.getContext('2d');
        var imgObj = new Image();
        imgObj.src = src;
        canvas.width = imgObj.width;
        canvas.height = imgObj.height;
        ctx.drawImage(imgObj, 0, 0);
        var imgPixels = ctx.getImageData(0, 0, canvas.width, canvas.height);
        for(var y = 0; y < imgPixels.height; y++){
            for(var x = 0; x < imgPixels.width; x++){
                var i = (y * 4) * imgPixels.width + x * 4;
                var avg = (imgPixels.data[i] + imgPixels.data[i + 1] + imgPixels.data[i + 2]) / 3;
                imgPixels.data[i] = avg;
                imgPixels.data[i + 1] = avg;
                imgPixels.data[i + 2] = avg;
            }
        }
        ctx.putImageData(imgPixels, 0, 0, 0, 0, imgPixels.width, imgPixels.height);
        return canvas.toDataURL();
    };
};
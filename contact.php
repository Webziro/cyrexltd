<?php 

session_start();
include "include/init.php";
include "property.php"; 
?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?= $siteName ?> </title>
<meta name="description" content="Building the future, one code at a Time">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="manifest" href="site.php">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/flaticon.css">
<link rel="stylesheet" href="assets/css/slicknav.css">
<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/magnific-popup.css">
<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
<link rel="stylesheet" href="assets/css/themify-icons.css">
<link rel="stylesheet" href="assets/css/slick.css">
<link rel="stylesheet" href="assets/css/nice-select.css">
<link rel="stylesheet" href="assets/css/styles.css">
<script nonce="6eb0dfd4-476c-436c-92eb-58bb7c3bb4c9">(function(w,d){!function(bv,bw,bx,by){bv[bx]=bv[bx]||{};bv[bx].executed=[];bv.zaraz={deferred:[],listeners:[]};bv.zaraz.q=[];bv.zaraz._f=function(bz){return function(){var bA=Array.prototype.slice.call(arguments);bv.zaraz.q.push({m:bz,a:bA})}};for(const bB of["track","set","debug"])bv.zaraz[bB]=bv.zaraz._f(bB);bv.zaraz.init=()=>{var bC=bw.getElementsByTagName(by)[0],bD=bw.createElement(by),bE=bw.getElementsByTagName("title")[0];bE&&(bv[bx].t=bw.getElementsByTagName("title")[0].text);bv[bx].x=Math.random();bv[bx].w=bv.screen.width;bv[bx].h=bv.screen.height;bv[bx].j=bv.innerHeight;bv[bx].e=bv.innerWidth;bv[bx].l=bv.location.href;bv[bx].r=bw.referrer;bv[bx].k=bv.screen.colorDepth;bv[bx].n=bw.characterSet;bv[bx].o=(new Date).getTimezoneOffset();if(bv.dataLayer)for(const bI of Object.entries(Object.entries(dataLayer).reduce(((bJ,bK)=>({...bJ[1],...bK[1]})))))zaraz.set(bI[0],bI[1],{scope:"page"});bv[bx].q=[];for(;bv.zaraz.q.length;){const bL=bv.zaraz.q.shift();bv[bx].q.push(bL)}bD.defer=!0;for(const bM of[localStorage,sessionStorage])Object.keys(bM||{}).filter((bO=>bO.startsWith("_zaraz_"))).forEach((bN=>{try{bv[bx]["z_"+bN.slice(7)]=JSON.parse(bM.getItem(bN))}catch{bv[bx]["z_"+bN.slice(7)]=bM.getItem(bN)}}));bD.referrerPolicy="origin";bD.src="https://preview.colorlib.com/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(bv[bx])));bC.parentNode.insertBefore(bD,bC)};["complete","interactive"].includes(bw.readyState)?zaraz.init():bv.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body>

<div id="preloader-active">
<div class="preloader d-flex align-items-center justify-content-center">
<div class="preloader-inner position-relative">
<div class="preloader-circle"></div>
<div class="preloader-img pere-text">
<img src="assets/img/logo/logo.png" alt="">
</div>
</div>
</div>
</div>


<!--Header starts here-->
<?php include "header.php"; ?>
<!--Header ends here-->

<div class="services-area">
<div class="container">

<div class="row d-flex justify-content-center">
<div class="col-lg-8">
<div class="section-tittle text-center mb-80">
<h2>Contact Us​</h2>
</div>
</div>
</div>
</div>
</div>


<section class="contact-section">
<div class="container">
<div class="d-none d-sm-block mb-5 pb-4">

    <script>
                        function initMap() {
                            var uluru = {
                                lat: -25.363,
                                lng: 131.044
                            };
                            var grayStyles = [{
                                    featureType: "all",
                                    stylers: [{
                                            saturation: -90
                                        },
                                        {
                                            lightness: 50
                                        }
                                    ]
                                },
                                {
                                    elementType: 'labels.text.fill',
                                    stylers: [{
                                        color: '#ccdee9'
                                    }]
                                }
                            ];
                            var map = new google.maps.Map(document.getElementById('map'), {
                                center: {
                                    lat: -31.197,
                                    lng: 150.744
                                },
                                zoom: 9,
                                styles: grayStyles,
                                scrollwheel: false
                            });
                        }
                    </script>
    <script src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.740777594249!2d7.462282714786411!3d8.995983693543788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0ce925510ced%3A0x6674526e88dd7021!2s10%20Democracy%20Cres%2C%20900110%2C%20Abuja%2C%20Federal%20Capital%20Territory!5e0!3m2!1sen!2sng!4v1679411780869!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </script>
    </div>

<div class="row">
<div class="col-12">
<h2 class="contact-title">Let's Talk</h2>
</div>

        <?php 
            if(isset($_SESSION['msg'])){
                echo($_SESSION['msg']);
                unset($_SESSION['msg']);
            }
        ?>
<div class="col-lg-8">
<form class="form-contact contact_form" action="process/contact_process.php" method="POST" id="contactForm" novalidate="novalidate">
<div class="row">
<div class="col-12">
<div class="form-group">
<textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
</div>
</div>
<div class="col-12">
<div class="form-group">
<input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
</div>
</div>
</div>
<div class="form-group mt-3">
<button type="submit" class="button button-contactForm boxed-btn">Send</button>
</div>
</form>
</div>
<div class="col-lg-3 offset-lg-1">
<div class="media contact-info">
<span class="contact-info__icon"><i class="ti-home"></i></span>
<div class="media-body">
<h3><?= $address ?></h3>
<p><?= $address1 ?></p>
</div>
</div>
<div class="media contact-info">
<span class="contact-info__icon"><i class="ti-tablet"></i></span>
<div class="media-body">
<h3><?= $contactNum ?></h3>
<p>Mon to Fri 9am to 6pm</p>
</div>
</div>
<div class="media contact-info">
<span class="contact-info__icon"><i class="ti-email"></i></span>
<div class="media-body">
<h3><a href="help@cyrtexltd.com" class="__cf_email__" data-cfemail="a0d3d5d0d0cfd2d4e0c3cfcccfd2ccc9c28ec3cfcd">[email&#160;protected]</a></h3>
<p>Send us your query anytime!</p>
</div>
</div>
</div>
</div>
</div>
</section>

<!--Header starts here-->
<?php include "footer.php"; ?>
<!--Header ends here-->


<script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>

<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/jquery.slicknav.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/slick.min.js"></script>

<script src="assets/js/wow.min.js"></script>
<script src="assets/js/animated.headline.js"></script>

<script src="assets/js/jquery.scrollUp.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jquery.sticky.js"></script>
<script src="assets/js/jquery.magnific-popup.js"></script>

<script src="assets/js/contact.js"></script>
<script src="assets/js/jquery.form.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/mail-script.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7aad5a9e3a650a6b","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.2.0","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/appco/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2023 10:45:54 GMT -->
</html>
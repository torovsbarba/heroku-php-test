
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">

<title>TORO Enterprise Application Cloud - Toro Commerce</title>

<meta name="author" content="">
<meta name="description" content="">
<meta name="keywords" content="">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">


<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700">

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">


<style>
    .input-group-addon {
        cursor: pointer
    }
</style>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style type="text/css">@font-face{font-family:'Open Sans';font-style:normal;font-weight:300;src:local('Open Sans Light'),local('OpenSans-Light'),url(http://fonts.gstatic.com/s/opensans/v13/DXI1ORHCpsQm3Vp6mXoaTYnF5uFdDttMLvmWuJdhhgs.ttf) format('truetype')}@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans'),local('OpenSans'),url(http://fonts.gstatic.com/s/opensans/v13/cJZKeOuBrn4kERxqtaUH3aCWcynf_cDxXwCLxiixG1c.ttf) format('truetype')}@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;src:local('Open Sans Semibold'),local('OpenSans-Semibold'),url(http://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSonF5uFdDttMLvmWuJdhhgs.ttf) format('truetype')}@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'),local('OpenSans-Bold'),url(http://fonts.gstatic.com/s/opensans/v13/k3k702ZOKiLJc3WVjuplzInF5uFdDttMLvmWuJdhhgs.ttf) format('truetype')}body{font-family:'Open Sans',sans-serif;font-size:18px;line-height:1.42857143;background-color:#fff;font-weight:300}h1,p{-moz-transition:all .5s ease-in-out;-o-transition:all .5s ease-in-out;-webkit-transition:all .5s ease-in-out;transition:all .5s ease-in-out}p{font-size:16px;font-weight:300;color:#333}p.p-300{font-weight:600;-webkit-font-smoothing:antialiased;zztext-shadow:1px 1px 1px #000}h1.main{font-size:36px;font-weight:300;color:#333;-webkit-font-smoothing:antialiased}h1.sub{font-size:32px;font-weight:300;color:#333}.for-30px{font-size:20px;font-weight:300;color:#333}.give-me-shadow{text-shadow:1px 1px 1px #000}@media (min-width:768px){p{font-size:17px;font-weight:300;color:#333}p.p-300{font-weight:600;-webkit-font-smoothing:antialiased;zztext-shadow:1px 1px 1px #000}h1.main{font-size:48px;font-weight:300;color:#333}h1.sub{font-size:36px;font-weight:300;color:#333}.for-30px{font-size:24px;font-weight:300;color:#333}}@media (min-width:992px){p{font-size:18px;font-weight:300;color:#333}p.p-300{font-weight:600;-webkit-font-smoothing:antialiased;zztext-shadow:1px 1px 1px #000}h1.main{font-size:66px;font-weight:300;color:#333}h1.main-sub{font-size:40px;font-weight:300;color:#333}h1.sub{font-size:50px;font-weight:300;color:#333}.for-30px{font-size:26px;font-weight:300;color:#333}}nav.hiddenMainNav{margin-top:-54px}nav.hiddenMainNav .main-nav{opacity:0}.navbar-default{margin-bottom:-50px;background-color:#000;border-color:#000;font-size:12px}.navbar-main{border-radius:0}.navbar{-moz-transition:all .5s ease-in-out;-o-transition:all .5s ease-in-out;-webkit-transition:all .5s ease-in-out;transition:all .5s ease-in-out}.navbar-default .navbar-collapse,.navbar-default .navbar-form{border-color:#1c1b1e}.navbar-toggle{margin-top:5px;margin-right:5px;margin-bottom:0}.navbar-default .navbar-toggle{border-color:transparent}.navbar-default .navbar-toggle:focus,.navbar-default .navbar-toggle:hover{background-color:transparent}.navbar-toggle .fa-bars{font-size:20px;color:#fff}.navbar-nav{width:100%}@media (min-width:768px){.main-list{margin-left:29px}.main-menu>li>a{padding:18px 15px}}.navbar-nav li .navbar-brand img{margin-left:-15px;height:25px}.navbar>.container .navbar-brand,.navbar>.container-fluid .navbar-brand{margin-left:0}.navbar .img-Brand-logo img{margin-left:-15px;height:25px}.navbar-default .navbar-nav>li>a:focus,.navbar-default .navbar-nav>li>a:hover{color:#00a4db;background-color:none}.product-sub-nav{color:#fff;background-color:#312f33;text-transform:uppercase}.product-sub-nav ul{width:100%;text-align:center}.product-sub-nav ul li{cursor:pointer}.product-sub-nav ul li a{padding:4px 0;color:#fff}.nav>li>a:focus,.product-sub-nav ul li a:hover,a:focus{color:#00a4db;background:0 0}.product-sub-nav ul .first-item-logo{margin-left:-10px;margin-right:35px;width:130px;height:31px;background-image:url(/cmsstatic/toro-integrate-wt.png);background-position:center bottom;background-repeat:no-repeat;background-size:130px;-moz-transition:opacity .3s ease-in-out;-o-transition:opacity .3s ease-in-out;-webkit-transition:opacity .3s ease-in-out;transition:all .5s ease-in-out;opacity:1;left:5px}.product-sub-nav .product-logo img{height:30px}@media (min-width:768px){.navbar>.container .navbar-brand,.navbar>.container-fluid .navbar-brand{margin-left:-5px}.product-sub-nav ul li{padding:5px 20px 5px 14px;cursor:pointer}.product-sub-nav ul li:nth-child(2){padding-left:0}}@media (max-width:767px){.navbar-brand{display:inline-block;margin:0 5px}.product-sub-nav .product-logo img{margin-top:14px;height:20px}.product-sub-nav .product-logo{padding:10px 0 10px 15px;text-align:left}.product-sub-nav .nav-justified>li>a{text-align:left}.navbar-default .navbar-nav .open .dropdown-menu>li>a{color:#fff}.navbar-default .navbar-nav .open .dropdown-menu>li>a:hover{color:#00a4db}}.btn{padding:5px 10px;text-transform:uppercase;font-size:14px;font-weight:300;border-radius:3px}.navbar-default .navbar-nav>li>a{color:#fff;text-transform:uppercase}.free-trial-link .btn.btn-free-trial{padding:2px 10px;margin-top:-5px;margin-bottom:-6px}.btn i{padding-right:10px}.btn-info{color:#fff;background-color:#00a4db}.btn-warning{color:#fff;background-color:#ffb31d;transition:all .3s ease-in-out}.btn-warning:hover{color:#000;background-color:#f3ab1d}@media (max-width:767px){.navbar-brand{display:inline-block;margin:0 5px}.navbar .img-Brand-logo img{margin-left:0;height:25px}.product-sub-nav .product-logo img{margin-top:14px;height:20px}.product-sub-nav .product-logo{padding:10px 0 10px 15px;text-align:left}.product-sub-nav .nav-justified>li>a{text-align:left}}.navbar-default .navbar-nav>.open>a,.navbar-default .navbar-nav>.open>a:focus,.navbar-default .navbar-nav>.open>a:hover{background-color:#000;color:#00a4db}nav .dropdown-menu{text-transform:uppercase;background-color:#000}nav .dropdown-menu li>a{padding:5px 20px;color:#fff;font-size:12px;font-weight:100}nav .dropdown-menu li>a:hover{background:0 0;color:#00a4db}.text-above{vertical-align:center}header{margin-top:50px;height:350px;color:#000;background-attachment:scroll;background-position:right center;-webkit-background-size:cover;-moz-background-size:cover;background-size:cover}header.products-header .product-header p{margin-bottom:50px}header.products-header .product-header .product-logo{margin-top:40px;margin-bottom:10px;max-height:40px;-moz-transition:all 1s ease-in-out;-o-transition:all 1s ease-in-out;-webkit-transition:all 1s ease-in-out;transition:all 1s ease-in-out}header.products-header .product-banner-img{margin:60px auto 0}header.products-header{text-align:center}@media (min-width:768px) and (max-width:991px){header.products-header .product-header{margin-top:20px;text-align:left}header.products-header .product-header .product-logo{max-height:50px}}@media (min-width:992px) and (max-width:1199px){header{height:485px}header.products-header .product-header{margin-top:60px;text-align:left}}@media (min-width:1200px){header{margin-top:50px;height:570px}header.products-header .product-header{margin-top:10px;text-align:left}}.btn{padding:7px 10px;text-transform:uppercase;font-size:14px;font-weight:100;border-radius:3px}.btn i{padding-right:10px}.btn-warning{color:#fff;background-color:#ffb31d;border-color:#ffb31d}.btn-danger{color:#fff;background-color:#f50f43;border-color:#f50f43}.pull-bottom{display:inline-block;vertical-align:bottom;float:none}.display-table{display:table;height:100%}.display-table>.display-table-inner{display:table-cell;height:100%}@media (max-width:767px){header{background-position:center center}.display-table>.display-table-inner{vertical-align:middle}}.btn {
  padding: 7px 10px;
  text-transform: uppercase;
  font-size: 14px;
  font-weight: 300;
  border-radius: 3px;
}

.btn i {
  padding-right: 10px;
}

.products {
  margin: 50px 0 30px 0;
  text-align: center;
}

.products .prod-container {
  padding: 20px 10px;
  margin-bottom: 15px;
  background-color: #EEE;
  -webkit-border-radius: 3px;
  -webkit-background-clip: padding-box;
  -moz-border-radius: 3px;
  -moz-background-clip: padding;
  border-radius: 3px;
  background-clip: padding-box;
  -moz-box-shadow: 0 0 5px #BFBFBF;
  -webkit-box-shadow: 0 0 5px #BFBFBF;
  box-shadow: 0 0 5px #BFBFBF;
}

.products .prod-container a {
  color: #fff;
}

.products .prod-container a:hover {
  text-decoration: none;
}

.products .prod-container .product .product-logo {
  display: inline-block;
  padding: 10px 0;
  list-style: none;
}

.products .prod-container .product .product-logo li {
  float: left;
}

.products .prod-container .product .product-logo li > img {
  height: 45px;
}

.products .prod-container .product .product-logo li:first-child {
  margin-right: 5px;
}

.products .prod-container .product .product-logo .toro {
  display: block;
  margin-bottom: -14px;
  font-weight: 300;
  font-size: 18px;
}

.products .prod-container .product .product-logo .product-title {
  text-transform: uppercase;
  font-weight: 500;
  font-size: 28px;
}

.products .prod-container .product-content {
  margin-bottom: 10px;
  font-size: 15px;
  font-weight: 300;
}.simple-testimonial {
  text-align: center;
  background-color: #00aeef;
  color: #fff;
}
.simple-testimonial p {
  color: #fff;
}
.simple-testimonial .testimonial-content {
  padding: 35px 10px;
}

.simple-testimonial .testimonial-content .testimonial-from {
  margin-top: 10px;
  font-size: 14px;
}

.simple-testimonial .testimonial-content .testimonial-from .sub-title {
  display: block;
  font-size: 12px;
}

.simple-testimonial .testimonial-content .testimonial-from img {
  max-width: 30px;
}

@media (min-width: 768px) and (max-width: 991px) {
  .simple-testimonial {
    font-size: 22px;
  }
  
  .simple-testimonial .testimonial-content .testimonial-from {
    text-align: center;
    font-size: 18px;
  }
  
  .simple-testimonial .testimonial-content .testimonial-from .sub-title {
    display: initial;
  }
  
  .simple-testimonial .testimonial-content .testimonial-from img {
    max-width: 40px;
  }
}

@media (min-width: 992px) {
  .simple-testimonial {
    font-size: 28px;
  }
  
  .simple-testimonial .testimonial-content .testimonial-from {
    text-align: center;
    font-size: 20px;
  }
  
  .simple-testimonial .testimonial-content .testimonial-from .sub-title {
    display: initial;
    font-size: 16px;
  }
  
  .simple-testimonial .testimonial-content .testimonial-from img {
    max-width: 50px;
  }
}.btn i{padding-right:10px}footer{padding:20px 0 10px;background:#312f33;text-align:center;font-size:16px;border-bottom:5px solid #ffb31d;-moz-transition:all 1s ease-in-out;-o-transition:all 1s ease-in-out;-webkit-transition:all 1s ease-in-out;transition:all 1s ease-in-out}footer h3{margin:10px 0;padding:0;color:#fff;font-weight:100}footer ul{margin-bottom:30px;padding:0;list-style:none;color:#fff}footer ul li{color:#858585;font-weight:300}footer ul li a{color:#858585;text-decoration:none;cursor:pointer}footer ul li a:hover{text-decoration:none;color:#00aeef}footer ul li.no-hover:hover{cursor:default;color:#858585}footer ul li .newsletter{font-size:12px}footer ul .social-media-links{margin:0}footer ul .social-media-links li{display:inline-block;padding:5px 5px 5px 0}footer ul .social-media-links li a{font-size:35px;color:#858585}footer ul .social-media-links li a:hover{color:#00aeef}footer .merchant-accounts{margin:0}footer .merchant-accounts li{display:inline-block;padding-right:5px}footer .merchant-accounts li a{color:#afafaf;font-size:20px}footer .legal-stuffs{margin-bottom:10px}footer .legal-stuffs li{margin:0 5px;display:inline-block;font-size:11px;font-weight:400;color:#fff;text-transform:uppercase}footer hr{margin:15px 0;border-top:1px solid #3b3a3b}footer .copyright{color:#fff;font-size:12px}footer img{max-height:25px}footer .mailing_list{color:#858585}@media (min-width:992px){footer{text-align:left;font-size:14px}}@media (max-width:768px){.img-powered{text-align:center}}#mc-embedded-subscribe-form{margin:0}.mc-field-group label{font-weight:300}.mc-field-group .form-control{display:inline-block;margin-bottom:10px;padding:1px 10px;width:auto;height:30px}#toroRegModal .modal-footer,#toroRegModal .modal-header{background-color:#333}#toroRegModal .modal-body{margin:10px auto}#toroRegModal .modal-body .heading{margin-bottom:20px}#toroRegModal .modal-body .heading h1{font-weight:300;color:#333}#toroRegModal .img-logo{padding:15px 10px}#toroRegModal .modal-footer{border-bottom:2px solid #ffb31d;width:100%;text-align:center}#toroRegModal .signIn{font-size:14px;font-weight:300;color:#fff}@media (max-width:991px){#toroRegModal .img-logo-visible-smallDevice{padding:100px;margin:-120px auto}#toroRegModal .heading{margin-top:-25px}#toroRegModal .heading h1.title{font-size:26px}#toroRegModal .heading p.content{font-size:14px}#toroRegModal .sign-in-small{position:absolute;top:40px;right:10px;font-size:14px;color:#fff}}@media (max-width:767px){#toroRegModal .img-logo-visible-smallDevice{padding:135px;margin:-150px auto}}@media (max-width:600px){#toroRegModal .img-logo-visible-smallDevice{padding:100px;margin:-120px auto}}@media (max-width:568px){#toroRegModal .img-logo-visible-smallDevice{padding:90px;margin:-110px auto}}@media (max-width:480px){#toroRegModal .img-logo-visible-smallDevice{padding:70px;margin:-90px auto}#toroRegModal .heading h1.title{font-size:24px}#toroRegModal .sign-in-small{top:35px;right:5px}}@media (max-width:400px){#toroRegModal .img-logo-visible-smallDevice{padding:50px;margin:-70px auto}}@media (max-width:360px){#toroRegModal .img-logo-visible-smallDevice{padding:40px;margin:-60px auto}#toroRegModal .heading h1.title{font-size:24px}#toroRegModal .sign-in-small{top:40px;right:5px}}#toroRegModal button.close{position:absolute;top:1px;right:5px}</style>
<meta name="author" content="TORO.IO"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="keywords" content="key, words, to get, your, visibility, on, the, web, super"/>
<meta name="description" content="This is a homepage template."/>
<meta name="apple-mobile-web-app-status-bar-style" content="black"/><meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<link rel="canonical" href="http://translate.google.com/?tl=de">
<link href="/cmsstatic/favicon.ico" rel="shortcut icon" type="image/x-icon" />

</head>
<body>
<div id="main" class="connect main" data-section="main">
<p></p>
<!-- start - toro-main-nav -->
<nav class="navbar navbar-default navbar-fixed-top clearfix" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span><i class="fa fa-bars"></i></span>
      </button>
      <a class="navbar-brand visible-xs img-Brand-logo" href="/"><img src="/cmsstatic/toro-log.png"></a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav main-menu">
        <li class="clearfix hidden-xs"><a class="navbar-brand" href="/"><img src="/cmsstatic/toro-log.png" class="img-responsive"></a></li>
        <li class="main-list">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Products</a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/toro-commerce">TORO Commerce</a></li>
            <li><a href="/toro-integrate">TORO Integrate</a></li>
            <li><a href="/toro-coder">TORO Coder</a></li>
                                  </ul>
        </li>
        <li><a href="/pricing">Pricing</a></li>
        <li><a href="https://my.toro.io/marketplace/applications">Marketplace</a></li>
        <li><a href="/company">Company</a></li>
        <li><a href="/blog">Blog</a></li>
        <li><a href="/support">Support</a></li>
        <li><a href="https://my.toro.io/login">Login</a></li>
        <li class="pull-right text-above hidden-sm">
                                                                                                                <a class="free-trial-link">
              <button class="btn btn-xs btn-warning btn-free-trial" data-toggle="modal" data-target="#toroRegModal">Get Started, It&#39;s Free</button>
            </a>
                  </li>
                                                      </ul>
    </div><!--/.nav-collapse -->
  </div>
  
    
</nav>
<div class="clear"></div>
<!-- end - toro-main-nav -->
<!-- start - cover-photo-home -->

<header class="products-header" style="background-image: url('/cmsstatic/homepage.png');">
  <div class="container display-table">
    <div class="display-table-inner">
      <div class="row">
      
                  <div class="col-xs-12 col-sm-6 col-md-offset-2 col-md-8 product-header give-me-shadow">
              
          <h1 class="main text-center" style="color: #fff;">Accessible <br> enterprise software</h1>
          <p class="text-center p-300" style="color: #fff;">Enterprise class software that is dramatically easier to <br> use, manage and deploy.</p>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- end - cover-photo-home -->
<div class="products">
  <div class="container">
    <div class-"row"="">
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="prod-container">
          <div class="product">
            <ul class="product-logo">
              <li>
                <img src="/cmsstatic/toro-commerce-dk.png">
              </li>
                                                                                  </ul>
          </div>
          <div class="product-content">
            "You've never had this level of control over your e-commerce website before."
          </div>
          <div class="btn btn-warning">
            <a href="/toro-commerce"><i class="fa fa-chevron-right"></i>Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="prod-container">
          <div class="product">
            <ul class="product-logo">
              <li>
                <img src="/cmsstatic/toro-integrate-dk.png">
              </li>
                                                                    </ul>
          </div>
          <div class="product-content">
            "Rapid application integration and orchestration without limits."
          </div>
          <div class="btn btn-warning">
            <a href="/toro-integrate"><i class="fa fa-chevron-right"></i>Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-0 col-md-4">
        <div class="prod-container">
          <div class="product">
            <ul class="product-logo">
              <li>
                <img src="/cmsstatic/toro-coder-dk.png">
              </li>
                                                                    </ul>
          </div>
          <div class="product-content">
            "Revolutionary Cloud Development Environment for accelerated development."
          </div>
          <div class="btn btn-warning">
            <a href="/toro-coder"><i class="fa fa-chevron-right"></i>Learn More</a>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>
<div class="simple-testimonial clearfix">

  <div class="col-xs-offset-1 col-xs-10 col-md-offset-2 col-md-8 testimonial-content">
    <p>“High growth and mid-sized companies need software that is customizable, scalable, and can be integrated with legacy or cloud based applications. Enterprise class solutions have traditionally come at a massive cost in terms of time, money and resources to implement and manage. TORO is changing this model. What Salesforce did for SaaS, TORO is doing for on-premise and cloud based deployments.”</p>
    <div class="testimonial-from">
      <img src="/cmsstatic/david.png"/>
      - David Brown, <span class="sub-title">Founder & CEO, TORO Limited</span>
    </div>
  </div>
  
</div>
<footer class="clearfix">
  <div class="container">
    <div class="col-xs-12 col-sm-4 col-md-2">
      <h3>Product</h3>
      <ul>
        <li><a href="/toro-commerce">TORO Commerce</a></li>
        <li><a href="/toro-integrate">TORO Integrate</a></li>
        <li><a href="/toro-coder">TORO Coder</a></li>
                              </ul>
    </div>
    
    <div class="col-xs-12 col-sm-4 col-md-2">
      <h3>TORO</h3>
      <ul>
        <li><a href="https://my.toro.io/marketplace/applications">Marketplace</a></li>
        <li><a href="/company">Company</a></li>
        <li><a href="/blog">Blog</a></li>
                                      </ul>
    </div>
    
    <div class="col-xs-12 col-sm-4 col-md-2">
      <h3>Support</h3>
      <ul>
                <li><a href="/support">Get Support</a></li>
                              </ul>
    </div>
    <div class="col-xs-12 col-md-6">
      <h3>Connect</h3>
      <ul>
        <li class="no-hover">
          <!-- Begin MailChimp Signup Form -->
          <div id="mc_embed_signup">
            <form action="//toro.us9.list-manage.com/subscribe/post?u=a11bd4e3c5fc964d031fb63af&amp;id=070bd5ecf6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <div id="mc_embed_signup_scroll">
                <p class="mailing_list">Subscribe to our mailing list</p>
                <div class="mc-field-group">
                  <input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL" placeholder="Email Address"><span class="asterisk">
                </div>
                <div class="mc-field-group">
                  <input type="text" value="" name="FNAME" class="form-control" id="mce-FNAME" placeholder="First Name">
                </div>
                <div class="mc-field-group">
                  <input type="text" value="" name="LNAME" class="form-control" id="mce-LNAME" placeholder="Last Name">
                </div>
                <div id="mce-responses" class="clear">
                  <div class="response" id="mce-error-response" style="display:none"></div>
                  <div class="response" id="mce-success-response" style="display:none"></div>
                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;"><input type="text" name="b_a11bd4e3c5fc964d031fb63af_070bd5ecf6" tabindex="-1" value=""></div>
                <div class="clear">
                  <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-info">
                </div>
              </div>
            </form>
          </div>
          
          <!--End mc_embed_signup-->
        </li>
        <li>
          <ul class="social-media-links">
                                    <li><a target="_blank" href="https://plus.google.com/u/0/b/100726648216145292079/"><i class="fa fa-google-plus-square"></i></a></li>
            <li><a target="_blank" href="https://www.linkedin.com/company/toroio"><i class="fa fa-linkedin-square"></i></a></li>
            <li><a target="_blank" href="https://www.youtube.com/channel/UCBHJRYEgETP1XW5rTs_7tLw"><i class="fa fa-youtube-square"></i></a></li>
          </ul>
        </li>
      </ul>
    </div>
    
    <div class="col-xs-offset-1 col-xs-10 col-md-offset-0 col-md-12"><hr></div>
    
    <div class="col-xs-12">
      <div class="row">
        <div class="col-xs-12 col-sm-2">
          <a href="/"><img src="/cmsstatic/toro-horns.png"></a>
        </div>
        <div class="col-xs-12 col-sm-4 text-center">
          <div class="copyright">©2014-15 TORO Limited. All rights reserved.</div>
        </div>
        <div class="col-xs-12 col-sm-2 text-center">
          <ul class="merchant-accounts">
            <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
            <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
            <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-2 text-center">
          <ul class="legal-stuffs">
                        <li><a href="/legal">Legal Terms</a></li>
                      </ul>
        </div>
        <div class="col-xs-12 col-sm-2 text-right img-powered">
          <img src="/cmsstatic/poweredBy.png">
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- Register Modal -->
<div id="toroRegModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header clearfix">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <a class="sign-in-small visible-xs visible-sm hidden-md hidden-lg" href="https://my.toro.io/signup"><span>Sign In</span></a>
        <div class="col-xs-offset-3 col-xs-6 col-md-offset-3 col-md-6 img-logo text-center">
          <img src="/cmsstatic/toro-2.png" class="img-responsive hidden-xs hidden-sm visible-md visible-lg center-block">
          <img src="/cmsstatic/toro-horns.png" class="visible-xs visible-sm hidden-md hidden-lg img-responsive img-logo-visible-smallDevice center-block">
        </div>
      </div>
      <div class="modal-body clearfix">
        <div class="col-sm-12 col-md-offset-1 col-md-10">
          <form id="sandbox" role="form" action="https://my.toro.io/sandbox/register" method="post" autocomplete="false">
            <input type="hidden" name="hash" value="c2VydmVySWQ9MSZoPTJkNTQ0NDlhYTM4YjNmNWM0ZjQxYTE0MTEwMjUxNDkw">
            <div class="row">
            
              <!-- SELECT INSTANCE -->
                                                        
              <div class="col-xs-12 heading text-center">
                <h1 class="title">Get started. It's Free</h1>
                <p class="content">Create a free TORO account and receive free access to TORO Coder plus two development sandboxes for TORO Commerce & TORO Integrate with 180 runtime hours p/mth. Absolutely free.</p>
              </div>
              
              <div class="col-xs-12 col-md-offset-1 col-md-10">
                <div class="form-group">  
                  <select id="appId" name="appId" class="form-control input-sm" required>
                    <option value="0">Select a Sandbox</option>
                    <option value="1">TORO Integrate</option>
                    <option value="4">TORO Commerce</option>
                  </select>
                </div>  
              </div>
              
              <!-- NEW or EXISTING Account -->
                                              <input id="existing1" name="existing" class="account"  type="hidden" value="0">
                                                            <!-- Organisation Name and Code -->
                                                        <div class="col-xs-12 col-md-offset-1 col-md-10 hide-existing">
                <div class="form-group">
                  <input type="text" name="organisationName" id="organisationName" class="form-control input-sm" placeholder="Enter company or brand name" size="100"required>
                </div>
              </div>
                                                        <div class="col-xs-12 col-md-offset-1 col-md-10">
                <div class="form-group">
                  <input type="text" name="organisationCode" id="organisationCode" class="form-control input-sm" placeholder="Organisation Code" size="100" required>
                </div>
              </div>
              
              <!-- Email -->
                                                        <div class="col-xs-12 col-md-offset-1 col-md-10">
                <div class="form-group">
                  <input type="email" name="organisationContactEmail" id="organisationContactEmail" class="form-control input-sm" placeholder="Email Address" size="100" required pattern="^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$" title="example@mail.com">
                </div>
              </div>
              
              <!-- Password -->
                                                        <div class="col-xs-12 col-md-offset-1 col-md-10">
                <div class="form-group">
                  <input type="password" name="newPassword" id="newPassword" class="form-control input-sm" placeholder="Password" required>
                </div>
              </div>
              
            </div>
            
            <div class="row">
              <div class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-6 col-md-offset-1 col-md-10 show">
                <input type="submit" value="Create free TORO account" class="btn btn-sm btn-info btn-block btn-submit-form" disabled>
              </div>
            </div>
            
          </form>
        </div>
      </div>
      <div class="modal-footer clearfix text-center">
        <a class="signIn hidden-xs hidden-sm visible-md visible-lg" href="https://my.toro.io/signup">or Sign in</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Register Modal -->


</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script><script type="text/javascript">$(document).ready(function(){
   movebutton();
  $(window).resize(function(){
   movebutton();
  });
  
  function movebutton() {
    if ($(window).width() <= 767 ) {
      $('.text-above, .text-above li').removeClass('pull-right');
    } else {
      $('.text-above, .text-above li').addClass('pull-right');
    }
  }
  
});// Tracking

$(window).load(function(){

  (function(){
      var analytics = window.analytics = window.analytics || [];
  
      if (analytics.invoked) {
        if (window.console && console.error) {
          console.error('Segment snippet included twice.');
        }
        return;
      }
  
      analytics.invoked = true;
      analytics.methods = [
        'trackSubmit',
        'trackClick',
        'trackLink',
        'trackForm',
        'pageview',
        'identify',
        'group',
        'track',
        'ready',
        'alias',
        'page',
        'once',
        'off',
        'on'
      ];
  
      analytics.factory = function(method){
        return function(){
          var args = Array.prototype.slice.call(arguments);
          args.unshift(method);
          analytics.push(args);
          return analytics;
        };
      };
  
      for (var i = 0; i < analytics.methods.length; i++) {
        var key = analytics.methods[i];
        analytics[key] = analytics.factory(key);
      }
  
      analytics.load = function(key){
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.async = true;
        script.src = ('https:' === document.location.protocol
          ? 'https://' : 'http://')
          + 'cdn.segment.com/analytics.js/v1/'
          + key + '/analytics.min.js';
  
        var first = document.getElementsByTagName('script')[0];
        first.parentNode.insertBefore(script, first);
      };
  
      analytics.SNIPPET_VERSION = '3.0.0';
      analytics.load("o2QTyNoAbb5Ra2GGgAKueBPMk7OGXrNx")
      analytics.page();
  
    })();
  
});$(document).ready(function(){
  $('#appId').on('change', function(){
    if($(this).val() !== 0) {
      $('.btn-submit-form').removeAttr('disabled');
    } else {
      $('.btn-submit-form').attr('disabled','disabled');
    }
  });
  
  $("#organisationName").keyup( function(event){
		var result = $(this).val().trim();
		if( result.split(" ").length > 1 ) {
			result = result.replace(/(\w)\w*\W*/g, function (_, i) {
				return i.toUpperCase();
			});
		} else
			result = result.substring(0,3).toUpperCase();

		$("#organisationCode").val(result);
	});
});

  $('#toroRegModal').on('hidden.bs.modal', function () {
    $('.btn-submit-form').attr('disabled','disabled');
    $("#sandbox").trigger('reset');
  });


// (function() {
    
//   	var $email = $('#toroRegModal .input-email'),
//   	$checkbox = $('#toroRegModal #MSA-checkbox'),
//   	$submitButton = $('#toroRegModal #btn-get'),
//   	$errormsg = $('#toroRegModal .errormsg');
//   	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  	
//   	$errormsg.slideUp();
  	
//     $email.keyup(function(){
//       if(!filter.test($email.val()) || $email.val() === ""){
//         $checkbox.prop('disabled', true);
//         $checkbox.prop('checked',false);
//         $submitButton.prop('disabled', true);
//         $errormsg.fadeIn('slow');
//       } else {
//         $checkbox.prop("disabled", false);   
//         $errormsg.fadeOut('slow');
//       }
//     });
    
// 		$checkbox.click(function(){
// 		  if(!filter.test($email.val()) || $email.val() === "" ){
//   		  $errormsg.fadeIn('slow');
//   		} else {
//   		  if ( $(this).is(':checked') ) {
//             $submitButton.prop("disabled", false);   
//         } else {
//             $submitButton.prop('disabled', true);
//         }
//         $errormsg.fadeOut('slow');
  		
//   		} //end else of !filter.test($email))
		  
//     });
    
//     $('#toroRegModal').on('hidden.bs.modal', function () {
//       $email.val('');
//       $errormsg.slideUp();
//     });
	
// })();</script>
</body>
</html>
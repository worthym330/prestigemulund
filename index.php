<?php
session_start();

// Function to get the current full URL with query parameters
function getCurrentFullURL() {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'];
    $uri = $_SERVER['REQUEST_URI'];
    return $protocol . "://" . $host . $uri;
}

// Check if UTM parameters are present in the current URL
if(isset($_GET['utm_source'])) {
    $_SESSION['utm_source'] = $_GET['utm_source'];
}
if(isset($_GET['utm_medium'])) {
    $_SESSION['utm_medium'] = $_GET['utm_medium'];
}
if(isset($_GET['utm_campaign'])) {
    $_SESSION['utm_campaign'] = $_GET['utm_campaign'];
}

// Fetch the current full URL with query parameters
$_SESSION['current_url'] = getCurrentFullURL();
?>


<!doctype html>
<html lang="en">

<head>
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="google-site-verification" content="VQ8hnqQZymE7JFuJADKEMDt0qF6V0JmKj_svvsWAfds" />
<link rel="shortcut icon" href="assets/img/comman/favicon.ico" type="image/vnd.microsoft.icon" />

<meta name="theme-color" content="#ffffff">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="icon" href="assets/img/comman/favicon.ico" sizes="16x16">
	  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <!-- Bootstrap CSS (if you're using Bootstrap) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Lazyload Plugin (if you're using lazyloading) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.2.2/lazysizes.min.js"></script>
    <!-- jQuery (required for Fancybox) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Fancybox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <!-- Bootstrap JS (if you're using Bootstrap) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Lodha Corinthia Bhandup West LBS Marg | 2 & 3 BHK ₹2.07 Cr*</title>
	        <meta name="description" content="Lodha Corinthia Bhandup West New Project Launch At Bhandup LBS Road. 2 & 3 BHK Premium Homes Starting from ₹2.07 Cr* Onwards"/>

        <meta name="keywords" content="Lodha Corinthia Bhandup West"/>

<style type="text/css">:root{--colorPrimary:#673914;--colorSecondary:#e3ab34;--colorBtn:#ffffff}#loader{width:100vw;height:100vh;background-color:rgba(255,255,255,1);position:fixed;top:0;left:0;z-index:1040}.loader-text{display:block;text-align:center;color:#d7d7d7;font-family:Arial,sans-serif;position:absolute;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);-o-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.loading{height:0;width:0;padding:4vw;border:.8vw solid #ccc;border-right-color:#888;border-radius:6vw;-webkit-animation:rotate 1s infinite linear}@keyframes loader{0%{filter:grayscale(0)}50%{filter:grayscale(100%)}100%{filter:grayscale(0)}}.loader-logo{width:300px;-webkit-animation:loader 1.3s infinite linear;-moz-animation:loader 1.3s infinite linear;-ms-animation:loader 1.3s infinite linear;-o-animation:loader 1.3s infinite linear;animation:loader 1.3s infinite linear}.pload{display:none}</style>      <link rel="preload" href="assets/css/style.css" as="style">
      <link rel="preload" href="assets/js/app.js" as="script">
      <link rel="preload" as="font" href="assets/fonts/AndadaPro-Regular.ttf" type="font/ttf" crossorigin="anonymous">
      <link rel="preload" as="font" href="assets/fonts/AndadaPro-Medium.ttf" type="font/ttf" crossorigin="anonymous">
      <link rel="preload" as="font" href="assets/fonts/AndadaPro-SemiBold.ttf" type="font/ttf" crossorigin="anonymous">
      <link rel="preload" as="font" href="assets/fonts/AndadaPro-ExtraBold.ttf" type="font/ttf" crossorigin="anonymous">
      <link rel="dns-prefetch" href="http://google-analytics.com/" crossorigin>
      <link rel="dns-prefetch" href="http://googletagmanager.com/" crossorigin>
      <link rel="dns-prefetch" href="http://www.googleadservices.com/" crossorigin>
      <link rel="dns-prefetch" href="http://googleads.g.doubleclick.net/" crossorigin>
      <link rel="dns-prefetch" href="http://zopim.com/" crossorigin>
      <link rel="dns-prefetch" href="http://ipinfo.io/" crossorigin>
      <link rel="dns-prefetch" href="http://cdn.jsdelivr.net/" crossorigin>
      <link rel="stylesheet" href="assets/css/style.css">
      <script src="assets/js/app.js" defer></script> <script async src='https://www.googletagmanager.com/gtag/js?id=UA-219129062-1'></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'UA-219129062-1'); </script>
   </head>
   <body data-spy="scroll" data-target="#navbarNav">

      <style> /*.more-cont{ display: inline; } .more{ display: none; } @media only screen and (max-width: 992px){ */ .more-cont{ display: none; } .more{ display: inline-block; } /*}*/ .btn-sm.more{ color: #000; text-decoration: underline; padding-left: 0; } #ami-3 .item-wrp img{ height: auto; } </style>
      <style> @media only screen and (min-width: 992px){ .info-box{ width: 27vw; top: 8px; left: 10px; background-color: #fff; color: #000; text-align: center; border-radius: 8px; font-weight: 400; padding-bottom: 10px; } .pro-status{ display: block; text-shadow: none; color: #fff; background-color: --colorPrimary:#255E1A; padding: .6vw 2.5vw .3vw 2vw; font-weight: 400; } .pro-title, .pro-add, .pro-dev, ul.pro-spec, .info-box span.heading, .pro-tag-line, .pro-price, .pro-rera{ text-shadow: none; color: #000; font-weight: 400; } .pro-title{ padding: .5vw .8vw .3vw; } .pro-title, .pro-add, .pro-price{ font-weight: 500; } ul.pro-spec{ background-color: transparent; margin-bottom: 0; } .info-box span.list-icon{ display: none; } .pro-rera{ font-size: .8vw; } } .offer{ display: block; padding: 8px; font-size: 13px; font-weight: 700; } .offer-top{ background: var(--colorPrimary);; border-radius: 8px 8px 0px 0px; } .offer-bottom{ background: #D6EBCA; border-radius: 0px 0px 8px 8px; } .offer-bg-animation{ color: #ffffff; display: block; background: linear-gradient(-45deg, #A07A1A, #6D5125 ,#A07A1A,#6D5125); background-size: 400% 400%; -webkit-animation: Gradient 3s ease infinite; -moz-animation: Gradient 3s ease infinite; animation: Gradient 3s ease infinite; } </style>
      <div id="loader"><span class="loader-text"><img src="assets/img/comman/logo.png" class="loader-logo"></span></div>
      <header class="micro-nav fixed-top pload">
         <nav class="navbar navbar-expand-lg navbar-light bg-white micro-navbar">
            <a class="navbar-brand" href="#" onclick="return false"><img src="assets/img/comman/logo.png" class="logo"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button> 
            <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav nav-fill">
                  <li class="nav-item"><a class="nav-link" href="#home"><i class="mi mi-home nav-icon"></i><span class="d-sm-inline d-md-none"> Home</span></a></li>
                  <li class="nav-item"><a class="nav-link" href="#pricing"><i class="mi mi-price nav-icon"></i> Price</a></li>
                  <li class="nav-item"><a class="nav-link" href="#sitefloorplan"><i class="mi mi-siteplan nav-icon"></i>   Floor Plan</a></li>
                  <li class="nav-item"><a class="nav-link" href="#amenities"><i class="mi mi-ami nav-icon"></i> Amenities</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#pricing"><i class="mi mi-price nav-icon"></i> Gallery</a></li>

                  <li class="nav-item"><a class="nav-link" href="#location"><i class="mi mi-location nav-icon"></i> Location</a></li>
                  <li class="nav-item"><a class="nav-link" href="#sitevisit"><i class="mi mi-sitevisit nav-icon"></i> Virtual  Tour</a></li>
                  
				  <li class="nav-item overflow-hidden"><a class="nav-link enqModal" href="#" data-form="md" data-title="Download brochure" data-btn="Download now" data-enquiry="Ebook Download" data-redirect="enquiry" data-redirect-file="brochure.pdf" data-toggle="modal" data-target="#enqModal"><i class="mi mi-download nav-icon d-inline-block animated slideInDown infinite"></i>Brochure</a></li>
              
			   </ul>
			  
            </div>
         </nav>
      </header>
      <main class="pload">
         <div id="home" class="carousel slide micro-main-slider" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#home" data-slide-to="0" class="active"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <picture>
                              <img src="assets/img/full/banner1.webp"> 
                        </picture>
                    </div>
                   
                </div>
				        <span class="ai ai-main">Artistic impression</span>


            </div>

		
		<div class="info-box overflow-hidden">
        <span class="pro-status">New Launch
</span> <span class="pro-title">Lodha Corinthia Bhandup West
</span> 
        
        <div style="flex-wrap: wrap; display: inline-flex;padding-bottom: 10px;">
            <span class="pro-add"><br>By Lodha Group</span>
            <span class="pro-dev"> </span>
        </div>

       
       <div class="card-d card-d-custom">
         
        <div>
            <span class="heading2"><left>Total Towers</left></span><br>
            <span class="heading1"><center>4</center></span>
        </div>
           

        <div>
            <span class="heading2"><center>Total Floors</center></span>
            <span class="heading1"><center>P2+31</center></span>
        </div>   
          
        
        <!-- <div>
            <span class="heading2">Possession </span><br>
            <span class="heading1">Dec 2027</span>
        </div>    -->
            
       </div>
	     
        <!--<ul class="pro-spec">-->
        <!--    <li><span class="list-icon">&rtrif;</span> <span class="heading1">3.5 Acres</span> : 2 Towers, 27 Storeys</li>-->
        <!--</ul>-->
        <span class="d-block mb-1 text-capitalize " style="font-size: 15px; width: 95%;  margin-left: auto !important;
    margin-right: auto !important;  background: transparent;font-weight: bold; text-align: center;color: #fff; "> 
        <span style=" color: #fff;display: block; background-color:var(--colorPrimary); background-size: 400% 400%; -webkit-animation: Gradient 3s ease infinite; -moz-animation: Gradient 3s ease infinite; animation: Gradient 3s ease infinite; font-size:15px; padding: 5px;"> Express Your Interest For Best Offers</span> 
        <span class="offer-bottom" style="color:#171717; display: block;  padding: 15px 10px; background-color:#eee">
             <span class="blink-soft" style="animation-duration: 3s;display: block;font-size: 16px!important; "> 
               <h6>‣ Offers on Spot Booking<br><br>‣ Limited Inventory Available</h6>
 </span>
             </span> 
             </span>
        <span class="d-block" style="font-size: 14px; width: 100%; background: transparent; font-weight: bold; text-align: center; color: #fff;">
        </span>
        <span class="pro-tag-line">Luxurious 2 & 3 BHK Homes<b></b> Starts from</span> <span class="pro-price"><h3>₹1.91 Cr*</h3><small style="font-size:16px;"</span>
            <button class="btn btn-info micro-form-btn enqModal effetMoveGradient effectScale" data-form="lg" data-title="Download Brochure" data-btn="Download Now" data-enquiry="Download Brochure Left Panel" data-redirect="enquiry" data-toggle="modal" data-target="#enqModal">
            Download Brochure
        </button>
<span class="animated bounceIn infinite" style="animation-duration: 3s;display: block;font-size: 16px!important; "> 
MahaRERA No.: Coming Soon
 </span>
             </span>     </div>
		
         <div class="mob-form d-sm-block d-md-none d-lg-none">
            <span class="d-block form-heading font-weight-bold">Register Here And Avail The Best Offers!!</span> 
            <form action="thankyou.php" method="POST" >
                <div class="form-group"> <input type="text" name="name" pattern="[a-zA-Z ]+" class="form-control rounded-0 micro-form-field" required placeholder="Name"> </div>
                <div class="form-group"> <input type="hidden" name="phone" value=""> 
                <input type="tel" id="intTelInput-mob" pattern="[789][0-9]{9}" name="mobile" class="intTelInput form-control rounded-0 micro-form-field" required placeholder="Mobile No"> 
                <input type="hidden" name="utm_source" value="<?php echo isset($_GET['utm_source']) ? htmlspecialchars($_GET['utm_source']) : ''; ?>">
     <input type="hidden" name="utm_medium" value="<?php echo isset($_GET['utm_medium']) ? htmlspecialchars($_GET['utm_medium']) : ''; ?>">
         <input type="hidden" name="current_url" value="<?php echo $_SESSION['current_url']; ?>">
 
                </div>
                <button type="submit" name="enq_formBtn" class="btn btn-info micro-form-btn effetMoveGradient" onclick="setCookie('redirectCookie', 'enquire');">Pre-Register Now</button> 
             
             </form>
         </div>
		 
		 		<!-- Overview Section -->		<!-- Overview Section --> 	<!-- Overview Section -->  	<!-- Overview Section -->


         <section class="section shadow-sm lazyload" id="overview">
            <span class="head text-capitalize d-none d-md-block">Overview</span> 
			<h1 class="d-block section-heading color-primary text-capitalize">Welcome to Lodha Corinthia Bhandup West
</h1> 
			<!--<span class="d-block section-heading-sub color-primary text-capitalize">At Balkum Thane </span> -->
            <p>
<br>
<b>Lodha Corinthia Bhandup West</b>, a prestigious residential development by the renowned Lodha Group, is poised to redefine luxury living in the heart of Bhandup, Mumbai. <b>Lodha Corinthia Bhandup West</b> project offers a harmonious blend of modern architecture, world-class amenities, and unparalleled comfort.
<br><br>
The thoughtfully designed apartments at <a href="https://lodhacorinthialbs.com/" target="_blank">Lodha Corinthia Bhandup West</a>
 boast spacious interiors, abundant natural light, and breathtaking views of the surrounding cityscape.Residents of Lodha Corinthia Bhandup West can indulge in a plethora of amenities designed to enhance their quality of life. <b>Lodha Corinthia Bhandup West</b> Provides swimming pool and well-equipped fitness center to lush landscaped gardens and a vibrant clubhouse, the project offers something for everyone.
            </p>
			<style>
    .whybuy li:before {
        content: '';
        height: 8px;
        width: 8px;
        background: var(--colorPrimary);
        position: absolute;
        left: 16px;
        top: 20px;
        border-radius: 50%;
        z-index: 2;
    }

    .whybuy li::after {
        content: '';
        position: absolute;
        height: 100%;
        left: 0;
        width: 0;
        background: var(--colorPrimary);
        top: 0;
        z-index: 1;
        transition: ease all 0.5s;
    }

    .whybuy li {
        background: #eaeaea;
        margin-bottom: 15px;
        padding: 15px 10px 15px 30px;
        position: relative;
        list-style: none;
    }

    .whybuy {
        content: '';
        padding-left: 0;
    }

    .whybuy li:hover::after {
        width: 100%;
        transition: ease all 0.5s;
    }

    .whybuy li:hover:before {
        background: var(--colorBtn);
        transition: ease all 0.5s;
    }

    .whybuy li:hover {
        color: var(--colorBtn);
        transition: ease all 0.5s;
    }

    .whybuy li span {
        position: relative;
        z-index: 2;
    }
    </style>
    <center>
        <h2 class="mt-3" style="color:var(--colorPrimary)"><b>Lodha Corinthia Bhandup West Project Highlights</b></h2>
    </center>
    <div class="row mr0 aos-init aos-animate mt-2" data-aos="fade-up" data-aos-delay="600" data-aos-duration="3000">
        <div class="col-md-6">
            <ul class="whybuy">

                <li><span>Growth Center 

 </span></li>
                <li><span>Township Living 

</span></li>
                <li><span>Community Living

 </span></li>
                <li><span>Excellent Connectivity

 </span></li>

            </ul>
        </div>
        <div class="col-md-6">
            <ul class="whybuy">

                <li><span>Enhanced Lifestyle
 </span></li>
                <li><span>40+ Amenities


                <li><span>Glorious Future

                <li><span>Enhanced Accessibility

 </span></li>

            </ul>
        </div>
    </div>
    </section>
		<!-- Pricing Section -->   <!-- Pricing Section -->  <!-- Pricing Section -->    <!-- Pricing Section -->
	
		
        <section class="section shadow-sm lazyload">
    <span class="section-link" id="pricing"></span>
<h3 class="mt-3" style="color:var(--colorPrimary)"><b>Lodha Corinthia Bhandup West Pricing</b></h3>
    <div class="row">
        <div class="col-md-8">
                           
                    <table class="table table-striped table-borderless border micro-price-table table-pricing">
                        <thead>
                            <tr>
                                <th scope="col" class="border border-bottom-0 mb-w">Unit</th>
                                <th scope="col" class="border border-bottom-0 mb-w">Carpet Area</th>
                                <th scope="col" class="border border-bottom-0 border-right-0">
                                    Price</th>
                                <th scope="col"></th>                            </tr>
                        </thead>
                        <tbody>
										<tr>
                                          
                                <td class="border border-left-0 border-top-0 border-bottom-0 price-carpet">
                                                     2 BHK </td>
                                <td class="border border-left-0 border-top-0 border-bottom-0 price-carpet">
                                     796-832 sq.ft. </td>
                                <td class="price-amt">
                                    <i class="mi mi-rs-light info-icon"></i>1.91 Cr*
                           </td>
                                <td><button
                                        class="btn btn-sm btn-info effetGradient effectScale enqModal" data-form="lg"
                                        data-title="Request For Price Breakup" data-btn="Request Price Breakup"
                                        data-enquiry="Request Price" data-redirect="floorplan" data-toggle="modal"
                                        data-target="#enqModal">Request For Price Breakup</button></td>
                                    </tr>
                                
                                        <td class="border border-left-0 border-top-0 border-bottom-0 price-carpet">
                                             3 BHK</td>
                                <td class="border border-left-0 border-top-0 border-bottom-0 price-carpet">
                                    1045-1266 sq. ft.</td>
                                <td class="price-amt">
                                    <i class="mi mi-rs-light info-icon"></i>2.69 Cr*
                     </td>
                                <td><button
                                        class="btn btn-sm btn-info effetGradient effectScale enqModal" data-form="lg"
                                        data-title="Request For Price Breakup" data-btn="Request Price Breakup"
                                        data-enquiry="Request Price" data-redirect="floorplan" data-toggle="modal"
                                        data-target="#enqModal">Request For Price Breakup</button></td>
                                        <!-- <tr>

                                            <td class="border border-left-0 border-top-0 border-bottom-0 price-carpet">
                                                                 4 BHK </td>
                                            <td class="border border-left-0 border-top-0 border-bottom-0 price-carpet">
                                                  1485 sq.ft. </td>
                                            <td class="price-amt">
                                                <i class="mi mi-rs-light info-icon"></i>2.15 Cr*
                                       </td>
                                       <td><button
                                        class="btn btn-sm btn-info effetGradient effectScale enqModal" data-form="lg"
                                        data-title="Request For Price Breakup" data-btn="Request Price Breakup"
                                        data-enquiry="Request Price" data-redirect="floorplan" data-toggle="modal"
                                        data-target="#enqModal">Request For Price Breakup</button></td> -->
                    </table>
                                                            </div>
        <div class="col-md-4">
            <a href="#" class="text-decoration-none">
                <div class="at-property-item shadow-sm border border-grey mt-1">
                    <div class="at-property-img">
                        <picture>
                            <source class="lazyload w-100"
                                data-srcset="./assets/img/comman/sample/costing-details-320w.webp"
                                type="image/webp">
                            <img data-sizes="auto" class="lazyload w-100"
                                data-srcset="assets/img/comman/sample/costing-details-320w.jpg"
                                alt="Lodha Corinthia Bhandup West Costing Details" width="100%" height="100%">
                        </picture>
                        <!-- <div class="at-property-overlayer"></div>
                        <span class="btn btn-default at-property-btn">Enquire Now</span> -->
                    </div>
                    <div class="at-property-dis effetGradient enqModal" data-form="lg" data-title="Request Complete Costing Details"
                data-btn="Request Costing Details"data-redirect="enquiry" data-enquiry="Costing Details" data-toggle="modal" data-target="#enqModal"><span>Request Complete Costing Details</span></div>
                </div>
            </a>
        </div>
    </div>
</section>


<!-- Floor Plan Section -->   <!-- Floor Plan Section -->   <!-- Floor Plan Section -->   <!-- Floor Plan Section -->  <!-- Floor Plan Section -->

         <section class="section shadow-sm lazyload" data-script="./assets/plugins/fancybox/jquery.fancybox.min.js" data-link="../cdn.jsdelivr.net/gh/fancyapps/fancybox%403.5.7/dist/jquery.fancybox.min.css">
            <div class="col-12 col-md-12">
                <span class="section-link" id="sitefloorplan"></span>
<h3 class="mt-3" style="color:var(--colorPrimary)"><b>Lodha Corinthia Bhandup West Floor Plan</b></h3>
                  <div class="row row-cols-1 row-cols-md-2">
				  
                     <div class="col">
                        <a href="#" class="text-decoration-none enqModal" data-form="lg" data-title="Send me plan details" data-btn="Send now" data-enquiry="Floor Plan" data-redirect="enquiry" data-toggle="modal" data-target="#enqModal">
                           <div class="at-property-item shadow-sm border border-grey mt-1">
                              <div class="at-property-img lazyloaded" data-expand="-1">
                                 <picture>
                                    <source class=" floor-plan-img blur lazyloading" data-srcset="assets/img/webp/masterplan1.webp" type="image/jpg" srcset="assets/img/2bhk.jpg" sizes="309px">
                                    <img data-sizes="auto" class="floor-plan-img blur lazyautosizes ls-is-cached lazyloaded ls-inview" data-srcset="assets/img/masterplan.jpg" sizes="309px" srcset="assets/img/masterplan.jpg"> 
                                 </picture>
                                 <div class="at-property-overlayer"></div>
                                 <span class="btn btn-default at-property-btn" role="button">Enquire Now</span> 
                              </div>
                              <div class="at-property-dis effetGradient">
                                 <h5>2 BHK</h5>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col">
                        <a href="#" class="text-decoration-none enqModal" data-form="lg" data-title="Send me plan details" data-btn="Send now" data-enquiry="Floor Plan" data-redirect="enquiry" data-toggle="modal" data-target="#enqModal">
                           <div class="at-property-item shadow-sm border border-grey mt-1">
                              <div class="at-property-img lazyloaded" data-expand="-1">
                                 <picture>
                                    <source class=" floor-plan-img blur lazyloading" data-srcset="assets/img/webp/masterplan1.webp" type="image/jpg" srcset="assets/img/2bhk.jpg" sizes="309px">
                                    <img data-sizes="auto" class="floor-plan-img blur lazyautosizes ls-is-cached lazyloaded ls-inview" data-srcset="assets/img/masterplan.jpg" sizes="309px" srcset="assets/img/masterplan.jpg"> 
                                 </picture>
                                 <div class="at-property-overlayer"></div>
                                 <span class="btn btn-default at-property-btn" role="button">Enquire Now</span> 
                              </div>
                              <div class="at-property-dis effetGradient">
                                 <h5>3 BHK</h5>
                              </div>
                           </div>
                        </a>
                     </div>
                     <!-- <div class="col">
                        <a href="#" class="text-decoration-none enqModal" data-form="lg" data-title="Send me plan details" data-btn="Send now" data-enquiry="Floor Plan" data-redirect="enquiry" data-toggle="modal" data-target="#enqModal">
                           <div class="at-property-item shadow-sm border border-grey mt-1">
                              <div class="at-property-img lazyloaded" data-expand="-1">
                                 <picture>
                                    <source class=" floor-plan-img blur lazyloading" data-srcset="assets/img/webp/2BHK-693.webp" type="image/jpg" srcset="assets/img/3bhk.jpg" sizes="309px">
                                    <img data-sizes="auto" class="floor-plan-img blur lazyautosizes ls-is-cached lazyloaded ls-inview" data-srcset="assets/img/plan.jpg" sizes="309px" srcset="assets/img/plan.jpg"> 
                                 </picture>
                                 <div class="at-property-overlayer"></div>
                                 <span class="btn btn-default at-property-btn" role="button">Enquire Now</span> 
                              </div>
                              <div class="at-property-dis effetGradient">
                                 <h5>4 BHK</h5>
                              </div>
                           </div>
                        </a>
                     </div> -->
                  </div>
               </div>
         </section>
		 
		 <!-- Amenities Section -->   <!-- Amenities Section -->   <!-- Amenities Section -->  <!-- Amenities Section -->  <!-- Amenities Section -->
		 
   <section class="section shadow-sm lazyload" >

    <span class="section-link" ></span> 
    <span class="section-link" id="amenities"></span>
	
	<h3 class="mt-3" style="color:var(--colorPrimary)"><b>Lodha Corinthia Bhandup West Amenities</b></h3>


    <div id="ami-3" class="ami-3 owl-carousel owl-theme">

        <div class="item-wrp">

            <div>

                <img data-src="assets/img/1.png"  class="lazyload" />

                <p>Swimming Pool</p>

            </div>

            <div>

               <img data-src="assets/img/gym.png" loading="lazy" class="lazyload" />

               <p>Gym</p>

            </div>

            <div>

               <img data-src="assets/img/kids.png" loading="lazy" class="lazyload" />

               <p>Kids Play Area</p>

            </div>

        </div>

        <div class="item-wrp">

            <div>

                <img data-src="assets/img/senior.png" loading="lazy" class="lazyload" />

                <p>Senior Citizen Cove</p>

            </div>

            <div>

                <img data-src="assets/img/security.png" loading="lazy" class="lazyload" />

                <p>Security System</p>

            </div>

            <div>

                <img data-src="assets/img/yoga.png" loading="lazy" class="lazyload" />

                <p>Yoga</p>

            </div>

        </div>

        <div class="item-wrp">

            <div>

               <img data-src="assets/img/club.png" loading="lazy" class="lazyload" />

               <p>Club House</p>

            </div>

            <div>

                <img data-src="assets/img/sport.png" loading="lazy" class="lazyload" />

                <p>Sport Court</p>

            </div>

            <div>

               <img data-src="assets/img/ampi.png" loading="lazy" class="lazyload" />

               <p>Ampitheatre</p>
			   

            </div>

            

        </div>
  

        </div>
               

        </div>

    </div>

</section>

<!-- Gallery Section -->  <!-- Gallery Section -->  <!-- Gallery Section -->  <!-- Gallery Section -->  <!-- Gallery Section -->  <!-- Gallery Section -->

  <section class="section shadow-sm" id="gallery">
<h3 class="mt-3" style="color:var(--colorPrimary)"><b>Lodha Corinthia Bhandup West Gallery</b></h3>
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-2">
            <a data-fancybox="gallery" href="assets/img/full/g1.webp">
                <img data-src="assets/img/full/g1.webp" class="lazyload gallery-thumb" />  
				        <span class="ai ai-main">Artistic impression</span>
				
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-2">
            <a data-fancybox="gallery" href="assets/img/full/g2.webp">
				<img data-src="assets/img/full/g2.webp" class="lazyload gallery-thumb" />
            				        <span class="ai ai-main">Artistic impression</span>
			</a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-2">
            <a data-fancybox="gallery" href="assets/img/full/g3.webp">
                
				<img data-src="assets/img/full/g3.webp" class="lazyload gallery-thumb" />
            				        <span class="ai ai-main">Artistic impression</span>

			</a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-2">
            <a data-fancybox="gallery" href="assets/img/full/g4.webp">
                
				<img data-src="assets/img/full/g4.webp" class="lazyload gallery-thumb" />
            				        <span class="ai ai-main">Artistic impression</span>

			</a>
        </div>
        <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-2">
            <a data-fancybox="gallery" href="assets/img/full/g5.webp">
                
				<img data-src="assets/img/full/g5.webp" class="lazyload gallery-thumb" />
            				        <span class="ai ai-main">Artistic impression</span>

			</a>
        </div> -->
    </div>
</section>


		 
	<!-- Location Map Section -->	<!-- Location Map Section -->	  <!-- Location Map Section -->	  <!-- Location Map Section -->	  

    <section class="section shadow-sm lazyload"
    data-script="assets/plugins/fancybox/jquery.fancybox.min.js"
    data-link="cdn.jsdelivr.net/gh/fancyapps/fancybox%403.5.7/dist/jquery.fancybox.min.html">

    
    <span class="section-link" id="location"></span>
    <div class="row mb-3">
                <div class="col-md-7 col-sm-12 text-center">
            <span class="d-block section-heading-sub text-capitalize">Lodha Corinthia Bhandup West Map View</span>
            <iframe frameborder="0" class="lazyload lmap mb-2"
            allowfullscreen="" sandbox="allow-scripts allow-same-origin" title="Google map of Lodha Corinthia Bhandup West" data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30152.630449715052!2d72.91116047039239!3d19.1480273977619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b87a44f8447b%3A0xa699c98b692d3c18!2sBhandup%20West%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1724492299543!5m2!1sen!2sin" style=""></iframe>			<button class="btn btn-sm btn-outline-info sectio-bro-btn overflow-hidden enqModal mt-0" data-form="md" data-title="Know More About Location" data-btn="Location Details" data-enquiry="Ebook Download" data-redirect="enquiry" data-toggle="modal" data-target="#enqModal" data-form-highlight-hide="true">Know More About Location</button>
        </div>
                        <div class="col-md-5 col-sm-12 lmap-div text-center">
            <span class="d-block section-heading-sub text-capitalize text-center">Lodha Corinthia Bhandup West Location Map</span>
           <a href="#" class="text-decoration-none enqModal" data-form="lg" data-title="Request For Location Map"
                data-btn="Request For Location Map" data-enquiry="Plan Details" data-toggle="modal" data-target="#enqModal"
                aria-label="Enquire Now">
		
		 		<a  href="#"
                data-srcset="./assets/img/lp-768w.jpg 800w,./assets/img/lp-1400w.jpg"
                aria-label="Location Plan of Lodha Corinthia Bhandup West"> 
	      <div class="at-property-item shadow-sm border border-grey mt-1">
          <div class="at-property-img">
              <picture>
                <source class="lazyload w-100" data-title="Know More About Location" data-btn="Location Details" data-enquiry="Ebook Download" data-redirect="enquiry" data-toggle="modal" data-target="#enqModal" data-form-highlight-hide="true"data-srcset="./assets/img/comman/sample/costing-details-320w.webp" type="image/webp">
                
        <picture>
          <source data-srcset="./assets/img/webp/lp-320w.webp"type="image/webp">
          <img data-sizes="auto" data-title="Know More About Location" data-btn="Location Details" data-enquiry="Ebook Download" data-redirect="enquiry" data-toggle="modal" data-target="#enqModal" data-form-highlight-hide="true"class="lazyload lmap shadow-sm border border-grey" data-srcset="./assets/img/webp/lp-320w.webp" alt="Location Plan of Lodha Corinthia Bhandup West"  width="100%" height="100%" />        </picture>


                  </picture>
             <!-- <div class="at-property-overlayer"></div> -->
              <!-- <span class="btn btn-default at-property-btn">Click To View</span>  -->
          </div>
          <div data-title="Know More About Location" data-btn="Location Details" data-enquiry="Ebook Download" data-redirect="enquiry" data-toggle="modal" data-target="#enqModal" data-form-highlight-hide="true"class="at-property-dis effetGradient"><span>View Location Map</span></div>
	      </div>
      </a>
			
           <!-- <a data-fancybox="location-map" href="./assets/img/lp.jpg"
                data-srcset="./assets/img/lp-768w.jpg 800w,./assets/img/lp-1400w.jpg"
                aria-label="Location Plan of Godrej Reserve">
                <div class="at-property-item mb-2">
                    <div class="at-property-img master-plan">
                        
        <picture>
          <source data-srcset="./assets/img/webp/lp-320w.webp"type="image/webp">
          <img data-sizes="auto" class="lazyload shadow-sm border border-grey" data-srcset="./assets/img/lp-320w.jpg" alt="Location Plan of Lodha Corinthia Bhandup West"  width="100%" height="100%" />        </picture>

                            <div class="at-property-overlayer"></div>
                        <span class="at-property-btn">View Location Map</span>
                    </div>
                </div>
            </a>  -->
        </div>
		
            </div>

                    <p></p> 
                    <!-- connectivity  -->
      <ul class="nav nav-pills mt-4 mb-3" id="pills-tabconn">
        <li class="nav-item loc-tab-link">
          <a class="nav-link text-uppercase ami-tab" id="pills-loc-0" data-toggle="pill" href="#loc-0" role="tab"
            aria-controls="loc-0" aria-selected="true">Education</a>
        </li>
        <li class="nav-item loc-tab-link">
          <a class="nav-link text-uppercase ami-tab" id="pills-loc-1" data-toggle="pill" href="#loc-1" role="tab"
            aria-controls="loc-1" aria-selected="true">Health & Wellbeing</a>
        </li>
        <li class="nav-item loc-tab-link">
          <a class="nav-link text-uppercase ami-tab" id="pills-loc-2" data-toggle="pill" href="#loc-2" role="tab"
            aria-controls="loc-2" aria-selected="true">Malls & Shopping Center</a>
        </li>
        <li class="nav-item loc-tab-link">
          <a class="nav-link text-uppercase ami-tab" id="pills-loc-3" data-toggle="pill" href="#loc-3" role="tab"
            aria-controls="loc-3" aria-selected="true">Nearby Locations</a>
        </li>
    </ul>
      <div class="tab-content" id="pills-tabconnContent">
        <div class="tab-pane fade" id="loc-0" role="tabpanel" aria-labelledby="pills-loc-0">
          <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2">





            <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i>St. Xaviers High School - 5 Min</div>
            <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i>I.D.U.B.S High School - 10 Min
</div>
            <!-- <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i>Arise International School
</div> -->
            <!-- <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i>Adhira International School
</div> -->
</div>

        </div>
        <div class="tab-pane fade" id="loc-1" role="tabpanel" aria-labelledby="pills-loc-1">
          <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2">

            <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i>Bhandup Criticare Hospital - 5 Min
</div>

<div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i>M.S Hospital - 10 Min
</div>
<div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i>Fortis Hospital - 15 Min
</div>
<!-- <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i>Pulse Multispeciality Hospital
</div> -->
          </div>

        </div>
        <div class="tab-pane fade" id="loc-2" role="tabpanel" aria-labelledby="pills-loc-2">
          <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2">

            <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i>Neptune Mall - 5 Min


</div>
<div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i>Dmart - 10 Min
</div>
<div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i>R Mall - 15 Min
</div>
<!-- <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i>Elpro City Square Mall
</div>
<div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i>City One Mall
</div> -->
         </div>

        </div>
        <div class="tab-pane fade" id="loc-3" role="tabpanel" aria-labelledby="pills-loc-3">
          <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2">
            
			<div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i>Chhatrapati Shivaji Maharaj Talao - 5 Min


</div>
<div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i>Kalimata Mandir - 5 Min



</div>
<div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i>BMC Park - 10 Min


</div>
<div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i>Bhandupeshwar Mandir - 10 Min
</div>
<div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i>Japanese Garden - 15 Min
</div>
          </div>

        </div>
  
    </section>
				 
				  
            <section class="section shadow-sm lazyload">
			<h3 class="mt-3" style="color:var(--colorPrimary)"><b>Lodha Corinthia Bhandup West Sample Flat</b></h3>
    <span class="section-link" id="sitevisit"></span>
    <a href="#" class="enqModal" 
       data-form="lg" 
       data-title="Virtual Site Visit" 
       data-btn="Start Tour" 
       data-enquiry="Virtual Site Tour" 
       data-redirect="virtualtour" 
       data-toggle="modal" 
       data-target="#enqModal">
        <div class="at-property-item my-2 pt-md-0">
            <div class="at-property-img vsv-img">
                <picture>
                    <source class="lazyload w-100" media="(max-width: 750px)" data-srcset="assets/img/full/banner1.webp" type="image/webp" />
                    <source class="lazyload w-100" media="(min-width: 751px)" data-srcset="assets/img/full/banner1.webp" type="image/webp" />
                    <img data-sizes="auto" class="lazyload w-100" data-srcset="assets/img/full/banner1.webp" />
                </picture>
                <div class="vsv-text-bk">
                    <div class="vsv-text-bg">
                        <div class="vsv-icon lazyload" style="text-align: center; margin-top: 20px;"> <!-- Inline CSS for centering -->
                            <img src="assets/img/youtube-logo-png-3563.png" alt="Lodha Corinthia Bhandup West Youtube Icon" style="width: 100px; height: 100px; display: inline-block;">
                        </div>
                        
						<span class="text-uppercase h1 font-weight-bold mb-0 d-none d-lg-block">Lodha Corinthia Bhandup West Sample Flat</span>
						
                    </div>
                </div>
								        <span class="ai ai-main">Artistic impression</span>

            </div>
			
        </div>
    </a>
</section>
<section class="section shadow-sm lazyload">
    <span class="section-link pro-title"  id="faq"></span>
    <h2> FAQs - of Lodha Corinthia, Bhandup</h2>
    <span class="head text-capitalize">FAQ</span>
    <br>
             <div class="row" itemscope="" itemtype="#">
                <div class="col-sm-12">  
                       <ul class="list-group rk-list">
                        <li class="list-group-item" itemscope="" itemprop="mainEntity" itemtype="#">
                        <div itemprop="name">
                        <p><span class="q">Q.</span> What is Lodha Corinthia?</p></div>
                                              <div itemscope="" itemprop="acceptedAnswer" itemtype="#">
                        <p itemprop="text"><strong>Ans:</strong>Lodha Corinthia is a luxurious residential project offering modern amenities and a high standard of living in the heart of Mumbai. It features spacious apartments with world-class facilities.</p>
                         </div>
                        
                        </li>
                         <li class="list-group-item" itemscope="" itemprop="mainEntity" itemtype="#">
                         <div itemprop="name">
                        <p><span class="q">Q.</span> Will/Is Lodha Corinthia RERA registered?</p></div>
                        <div itemscope="" itemprop="acceptedAnswer" itemtype="#">
                        <p itemprop="text"><strong>Ans:</strong> 
                            Yes, Lodha Corinthia will be / is RERA approved project.                    </p></div>
                        </li>
                        <li class="list-group-item" itemscope="" itemprop="mainEntity" itemtype="#">
                        <div itemprop="name">
                        <p><span class="q">Q.</span> Where is Lodha Corinthia project located?</p></div>
                        <div itemscope="" itemprop="acceptedAnswer" itemtype="#">
                                            <p itemprop="text"><strong>Ans:</strong>The project is located in Bhandup, Mumbai, a prime area offering easy access to various parts of the city and essential services.</p>
                        </div>
                        </li>
                        <li class="list-group-item" itemscope="" itemprop="mainEntity" itemtype="#">
                        <div itemprop="name">
                        <p><span class="q">Q.</span> What amenities are available in Lodha Corinthia?</p></div>
                        <div itemscope="" itemprop="acceptedAnswer" itemtype="#">
                                            <p itemprop="text"><strong>Ans:</strong>Residents can enjoy amenities such as a swimming pool, fitness center, landscaped gardens, children's play area, and more, designed to enhance the quality of life.</p>
                        </div>
                        </li>
                       <li class="list-group-item" itemscope="" itemprop="mainEntity" itemtype="#">
                        <div itemprop="name">
                        <p><span class="q">Q.</span> How can I book an apartment in Lodha Corinthia?</p></div>
                        
                          <div itemscope="" itemprop="acceptedAnswer" itemtype="#">
                        <p itemprop="text"><strong>Ans:</strong>You can book an apartment by contacting our sales team through the contact form on our website or visiting our sales office directly. Our team will guide you through the process.</p> </div>
                        
                        </li>
                        
                        
                       
                      </ul>
                    </div>
                    </div> 
    
    
    </section>
    
            
			
			
			<!-- <section class="section shadow-sm lazyloaded" id="sitevisit"> <span class="section-link" ></span> <span class="head text-capitalize">Virtual Tour Request</span> 
<a href="#" class="enqModal" data-form="lg" data-title="Virtual Site Visit" data-btn="Start Tour" data-enquiry="Virtual Tour Request" data-redirect="virtualtour" data-toggle="modal" data-target="#enqModal"> <div class="at-property-item my-2 pt-md-0"> 
<div class="at-property-img vsv-img lazyloaded" data-expand="-1"> 
<picture> <source class=" w-100 lazyloading" media="(max-width: 750px)" data-srcset="https://d1zdkpwby52v4t.cloudfront.net/kalptparamoun/assets/img/Bannermob.webp" type="image/webp" sizes="730px" srcset="https://d1zdkpwby52v4t.cloudfront.net/kalptparamoun/assets/img/Bannermob.webp"> <source class=" w-100 lazyloading" media="(min-width: 751px)" data-srcset="https://d1zdkpwby52v4t.cloudfront.net/kalptparamoun/assets/img/webp/Bannermob.webp" type="image/webp" sizes="730px" srcset="https://d1zdkpwby52v4t.cloudfront.net/kalptparamoun/assets/img/Bannernew.webp"> <img data-sizes="auto" loading="lazy" class="w-100 lazyautosizes ls-is-cached lazyloaded ls-inview" data-srcset="https://d1zdkpwby52v4t.cloudfront.net/kalptparamoun/assets/img/b1-768w.jpg 750w,https://d1zdkpwby52v4t.cloudfront.net/kalptparamoun/assets/img/b1-1400w.jpg" sizes="730px" srcset="https://d1zdkpwby52v4t.cloudfront.net/kalptparamoun/assets/img/b1-768w.jpg 750w,https://d1zdkpwby52v4t.cloudfront.net/kalptparamoun/assets/img/b1-1400w.jpg"> </picture> <div class="vsv-text-bk"> <div class="vsv-text-bg"> <div class="vsv-icon lazyloaded"></div> <span class="text-uppercase h1 font-weight-bold mb-0 d-none d-lg-block">Virtual Tour</span> <span class="text-capitalize text-center d-none d-lg-block">Kalpataru Paramount Thane West</span> </div> </div> </div></div> </a> </section> -->
     
			
			<!-- <section id="address_section" class="section shadow-sm lazyloaded"> </section>    <section class="section shadow-sm lazyload" id="gallery">
    <span class="section-link" ></span> <h2 class="head text-capitalize">Gallery </h2>
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-2">
            <a data-fancybox="gallery-0" href="https://d1zdkpwby52v4t.cloudfront.net/kalptparamoun/assets/img/gallery/1.webp"> <img data-src="https://d1zdkpwby52v4t.cloudfront.net/kalptparamoun/assets/img/gallery/1.webp" loading="lazy" class="lazyload gallery-thumb" /> </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-2">
            <a data-fancybox="gallery-0" href="https://d1zdkpwby52v4t.cloudfront.net/kalptparamoun/assets/img/gallery/2.webp"> <img data-src="https://d1zdkpwby52v4t.cloudfront.net/kalptparamoun/assets/img/gallery/2.webp" loading="lazy" class="lazyload gallery-thumb" /> </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-2">
            <a data-fancybox="gallery-0" href="https://d1zdkpwby52v4t.cloudfront.net/kalptparamoun/assets/img/gallery/3.webp"> <img data-src="https://d1zdkpwby52v4t.cloudfront.net/kalptparamoun/assets/img/gallery/3.webp" loading="lazy" class="lazyload gallery-thumb" /> </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-2">
            <a data-fancybox="gallery-0" href="https://d1zdkpwby52v4t.cloudfront.net/kalptparamoun/assets/img/gallery/4.webp"> <img data-src="https://d1zdkpwby52v4t.cloudfront.net/kalptparamoun/assets/img/gallery/4.webp" loading="lazy" class="lazyload gallery-thumb" /> </a>
        </div>
    </div>
</section> -->
         
        <section class="section shadow-sm lazyload" id="developer">
    

    
   <!--<span class="pro-RERA"><span class="heading">RERA No</span> : P51800026860</span>-->
   <span class="d-block section-heading-sub1 text-capitalize">MahaRERA Information</span>
    <div class="row">
</div>
<div class="col-md-3 col-6">
    <div class="rera-box">
        <!-- <div class="rera-img">
            <img src="./assets/img/qrcode/qr.webp"  loading="lazy" style="max-width: 100%; height: 100px; display: inline-block;" />
        </div> -->
        <!-- <div class="rera-details">
        <p><b>Coming Soon</b></p>
        </div> -->
    </div>
</div>
</div>
   <span class="pro-rera text-center-mob"><a href="http://lodhacorinthialbs.com/">Lodha Corinthia Bhandup West</a>
 has been registered via MahaRERA registration number and is available on the website <a href="https://maharera.maharashtra.gov.in/">maharera.maharashtra.gov.in</a> under registered projects.
  <br>
   <li>Project Registered under Government of India RERA Act 2016</li>
<li>MahaRERA Project Registration No.: Coming Soon</li>

<li>Government RERA Authorised Advertiser’s: Propweb Realty Private Limited, Registration No A52000019540, CIN :-U74999MH2017PTC294216 .</li>

   </span>
</section>
         <div class="micro-side text-center">
            <div class="og-section pb-2">
               <ul class="nav nav-fill og-block">
                  <li class="nav-item enqModal" data-form="lg" data-title="Organize Site Visit" data-btn="Request Site Visit" data-enquiry="Organize Site Visit" data-toggle="modal" data<li class="nav-item" onclick="window.open('https://api.whatsapp.com/send?phone=+917738051005 &text=Hi!%20I%27m%20Interested%20In%20Lodha%20Corinthia,%20Bhandup.%20Please%20Share%20Details.');"><span class="mi mi-whatsapp action-icon"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span> +917738051005 </li>
               </ul>
               <button class="btn btn-sm btn-info micro-form-btn-sm effetGradient effectScale enqModal mt-1" data-form="sm" data-title="Immediate Call Back" data-btn="Request Call Now" data-enquiry="Immediate Call Back" data-toggle="modal" data-target="#enqModal"><span class="mi mi-call action-icon"></span> Request Call Back</button> 
            </div>
            <span class="d-block form-heading font-weight-bold my-2">Register Here And Avail The Best Offers!!</span> 
            <form action="thankyou.php" method="POST" class="form-side">
                <div class="form-group"> <input type="text" name="name" pattern="[a-zA-Z ]+" class="form-control rounded-0 micro-form-field" placeholder="Name" required> </div>
                <div class="form-group"> <input type="hidden" name="phone" value=""> <input type="tel" id="intTelInput-side" pattern="[789][0-9]{9}" name="mobile" class="intTelInput form-control rounded-0 micro-form-field w-100" placeholder="Mobile No" required> </div>
                    <input type="hidden" name="current_url" value="<?php echo $_SESSION['current_url']; ?>">
 
             <div class="form-group">
                 <div class="flex-container" style="font-size:  13px">
                     <input type="checkbox" id="dropEnquiry_CheckBox" name="" checked=""
                                                         style="float: left; width:auto;margin-top:1.6%; margin-right: 2%">
                     <div style="margin-left: 0% ;    color: #878787;float: left;">
             
                         I give my consent for the <a style="color: #2874f0 " href="policy.php" target="_blank">privacy policy</a> to
                         apply to the processing of the provided data
                     </div>
                 </div>
             </div>
             <input type="hidden" id="enquireName" value="Enquire Now">
             <button type="submit" name="enq_formBtn" class="btn btn-info micro-form-btn effetGradient effectScale">Get Instant Call Back</button>
             </form> 
		
	
         </div>
         <ul class="mob-action nav nav-fill d-sm-block d-lg-none">
            <li class="nav-item" onclick="javascript:location.href='tel:+917738051005 '"><span class="mi mi-call action-icon"></span> Call</li>
            <li class="nav-item enqModal" data-form="lg" data-title="Mail me pricing details" data-btn="Send now" data-enquiry="Enquire Now" data-redirect="enquiry" data-toggle="modal" data-target="#enqModal"><span class="mi mi-enquire action-icon"></span> Enquire</li>
            <li class="nav-item" onclick="window.open('https://api.whatsapp.com/send?phone=+917738051005 &text=I%20am%20Interested%20in%20Lodha%20Corinthia%20Project.%20Kindly%20share%20details', '_blank');"><span class="mi mi-whatsapp action-icon"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span> WhatsApp</li>
         </ul>
         <div class="modal fade" id="enqModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered enq-modal" role="document">
               <div class="modal-content">
                  <div class="modal-body text-center">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> 
                     <div class="modal-head d-none"><span class="modal-title">Title</span></div>
                     <div class="d-flex">
                        <div class="flex-fill align-self-center flex-shrink-1 modal-highlight-bg d-none d-lg-block">
                           <span class="modal-highlight-title">We Promise</span> 
                           <ul class="modal-highlight">
                              <li><i class="mi mi-support-call"></i><span>Instant Call Back</span></li>
                              <li><i class="mi mi-support-visit"></i><span>Free Site Visit</span></li>
                              <li><i class="mi mi-support-price"></i><span>Unmatched Price</span></li>
                           </ul>
                        </div>
                        <div class="flex-fill align-self-center">
                           <img src="assets/img/comman/logo.png" class="loader-logo"> <span class="modal-title-secondary">Register for <span class="text-danger">Best Offers!!</span></span> 
                           <form action="thankyou.php" method="POST" class="form-modal">
                            <div class="form-group"> <input type="text" name="name" pattern="[a-zA-Z ]+" class="form-control rounded-0 micro-form-field" required placeholder="Name"> </div>
             <div class="form-group"> <input type="hidden" name="phone" value=""> <input type="tel" id="intTelInput-mob" pattern="[789][0-9]{9}" name="mobile" class="intTelInput form-control rounded-0 micro-form-field" required placeholder="Mobile No"> </div>
                              <input type="hidden" name="current_url" value="<?php echo $_SESSION['current_url']; ?>">

                           <div class="form-group">
                                  <div class="flex-container" style="font-size:  13px">
                                      <input type="checkbox" id="dropEnquiry_CheckBox" name="" checked=""
                                          style="float: left; width:auto;margin-top:1.6%; margin-right: 2%">
                                      <div style="margin-left: 0% ;    color: #878787;float: left;">
                                         
                                          I give my consent for the <a style="color: #2874f0 "
                                              href="policy.php" target="_blank">privacy policy</a> to apply to the processing of the provided data
                                      </div>
                                  </div>
                              </div>
                            <input type="hidden" id="enquireName" value="Enquire Now"> <button type="submit" name="enq_formBtn" class="btn btn-info micro-form-btn effetGradient effectScale">Get Instant Call Back</button> 
                         </form>
                        </div>
                     </div>
                     <a href="tel:+917738051005 " class="modal-call-btn"><i class="mi mi-call"></i> +917738051005 </a> 
                  </div>
               </div>
            </div>
         </div>
      </main>
	  
	  
	  
<footer class="disclaimer pload"><b>
Disclaimer :</b>The information provided on this website is intended exclusively for informational purposes and should not be construed as an offer of services. This site is managed by a MahaRERA authorized real estate agent namely Propweb Realty Private Limited. The pricing information presented on this website is subject to alteration without advance notification, and the assurance of property availability cannot be guaranteed. The images showcased on this website are for representational purposes only and may not accurately reflect the actual properties. We may share your data with Maharashtra Real Estate Regulatory Authority (MahaRERA) registered Developers for further processing as necessary.</a><a href="policy.php">Privacy Policy</a>&nbsp; | &nbsp;<a href="terms.php">Terms & Condition</a>&nbsp; | &nbsp;<a href="disclaimer.html">Disclaimer</a>
	  </footer>
<div id="sticky-footer" class="gradient-effect flex-container justify-content-center align-items-start">
    <a href="tel:+917738051005 ">
        <img src="assets/img/call.svg" alt="Lodha Corinthia Bhandup West contact number" width="16" height="16">
        <span>&nbsp;Call Us</span>
    </a>
    <a class="class="btn btn-info micro-form-btn enqModal effetMoveGradient effectScale" data-form="lg" data-title="Mail me pricing details" data-btn="Send now" data-enquiry="Enquire Now" data-redirect="enquiry" data-toggle="modal" data-target="#enqModal"">
        <img src="assets/img/envelope.svg" heght="16" alt="Lodha Corinthia Bhandup West" width="16">
        <span>&nbsp;Enquire</span>
    </a>
    <a href="https://api.whatsapp.com/send?phone=+917738051005 &text=I%20am%20Interested%20in%20Lodha%20Corinthia%20Project.%20Kindly%20share%20details" target="_blank" ">
        <img src="assets/img/whatsapp.svg" alt="Lodha Corinthia Bhandup West Contact us on whatsapp" width="16" height="16">
        <span>&nbsp;Whatsapp</span>
    </a>
</div>
      <script>document.addEventListener("DOMContentLoaded", function(event){document.getElementById("loader").remove();document.querySelector('header').classList.remove('pload');document.querySelector('main').classList.remove('pload');document.querySelector('footer').classList.remove('pload')});var sitePrimaryColor='#A07A1A';</script> 
   </body>

</html>


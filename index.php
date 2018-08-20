<?php session_start();?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
    	<!-- meta character set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Alicktish- Get a quote</title>
		<!-- Meta Description -->
        <meta name="description" content="Alicktish is a web designer/web developer based in Lagos, Nigeria">
        <meta name="keywords" content="alicktish, web development, digital marketing, one page, webpages, web design, responsive, web designer, creative, website design, html5, website designer, css3 animation">
        <meta name="author" content="Alicktish">

		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

       <!-- BASE CSS -->
    	<link href="css/animate.min.css" rel="stylesheet">
    	<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/fontawesome-all.css">
      <link rel="stylesheet" type="text/css" href="css/form.css">
    	<link href="css/menu.css" rel="stylesheet">
    	<link href="css/style.css" rel="stylesheet">
    	<link href="css/responsive.css" rel="stylesheet">
    	<link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
    	<link href="css/skins/square/grey.css" rel="stylesheet">

    	<!-- COLOR CSS -->
    	<link href="css/color_3.css" rel="stylesheet">

    	<!-- BASE CSS -->
    	<link href="css/date_time_picker.css" rel="stylesheet">

    	<!-- YOUR CUSTOM CSS -->
    	<link href="css/custom.css" rel="stylesheet">
		<link rel="stylesheet" href="css/form.css">

    	<script src="js/modernizr.js"></script>
    	<!-- Modernizr -->


		<!-- CSS -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700">

		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <!-- Ion Icons Font -->
        <link rel="stylesheet" href="css/ionicons.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/slit-slider.css">
        <link rel="shortcut icon" href="http://wiseandwellness.com/alicktish/img/favicon.png" />
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="css/main.css">
		<style>
header {
    /* background-image: url('images/main.jpg'); */
	background-position: center center;
	background-size: cover;
    position: relative;
}
#navigation {
	position: fixed;
	background-color: rgb(28, 15, 28);

}
#navigation ul {
    text-align: right;
    list-style: none;
    padding: 0;
    margin: 0;
}
#navigation li {
    padding: 0 10px;
    display: inline-block;
}
#navigation li:last-child {
    border-right: none;
}
#navigation li a {
    padding: 10px;
    color: white;
    display: block;
    text-decoration: none;


    text-transform: uppercase;
    -webkit-font-smoothing: antialiased;
}
#navigation li a:hover {
    background-color: rgba(40, 40, 40, 0.5);
    -moz-transition: all .3s ease;
    -o-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -transition: all .3s ease;
    -webkit-transition: all .3s ease;
    -webkit-font-smoothing: antialiased;
}

	 	</style>
    <!-- recaptcha -->
<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>

    </head>

    <body id="body">

		<!-- preloader -->
		 <!-- <div id="preloader">
            <div class="loder-box">
            	<div class="battery"></div>
            </div>
		</div> -->
		<!-- end preloader -->

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
			<div class="container">
				<div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->

					<!-- logo -->
					<h1 class="navbar-brand">

						<a href="index.html">
							<img src="img/logo3.png" alt="" width="257" height="73" style="margin-top:-20px;">
						</a>
					</h1>
					<!-- /logo -->
                </div>

				<!-- main nav -->
				<?php if(!empty($_SESSION['name'])) {?>
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
				
						<ul id="nav" class="nav navbar-nav menu">
							<li><a href="index.html"><span>Welcome, <?php echo $_SESSION['name'];?></span></a></li>
							<li><a href="index.html#service"><span>Services</span></a></li>
							<li><a href="index.html#portfolio"><span>portfolio</span></a></li>
							<li><a href="index.html#price"><span>pricing</span></a></li>
							<li><a href="index.html#contact"><span>Contact</span></a></li>
							<li><a href="logout"><span>Logout</span></a></li>
						</ul>
				
				
				<!-- /main nav -->
				</nav>
				<?php }else{ ?>
					<nav class="collapse navbar-collapse navbar-right" role="navigation">
					<ul id="nav" class="nav navbar-nav menu">
							<li><a href="index.html"><span>Home</span></a></li>
							<li><a href="index.html#service"><span>Services</span></a></li>
							<li><a href="index.html#portfolio"><span>portfolio</span></a></li>
							<li><a href="index.html#price"><span>pricing</span></a></li>
							<li><a href="index.html#contact"><span>Contact</span></a></li>
						</ul>
						</nav>

					<?php }?>
				<!-- /main nav -->

			</div>

		</header>


        <!--
        End Fixed Navigation
        ==================================== -->

		<main class="site-content" role="main">

		<div class="sticky"></div>

		<!-- Contact section -->
			<section id="getaquote" class="form1">
				<div class="container">
					<div class="row">

						<div class="section-title text-center">
							<br>
							<br>
							<h2>GET A QUOTE</h2>
							<p> Get Started With Us Today<br></p>
						</div>

                        <main >
                    		<div id="form_container" >
                    			<div class="row">
                    				<div class="col-lg-5">
                    					<div id="left_form">
                    						<figure style="margin-top: -40px"><img src="img/registration_bg.svg" alt=""></figure>
                    						<h1 style="font-family: Montserrat; color: #ffffff">INSTANT <br>QUOTE</h1>
                    						<strong><p style="font-family: Montserrat; font-size: 17px; margin-top: 130px; margin-buttom: 20px">Get an instant quote!</p></strong>
                    					</div>
                    				</div>
                    				<div class="col-lg-7">

                    					<div id="wizard_container">
                    						<div id="top-wizard">
                    							<div id="progressbar"></div>
                    						</div>
                    						<!-- /top-wizard -->
                    						<form name="example-1" id="wrapped" method="POST" class="example1">
                    							<input id="website" name="website" type="text" value="">
                    							<!-- Leave for security protection, read docs for details -->
                    							<div id="middle-wizard">


                                                    <div class="step" style="margin-top: -40px">
                    									<h4 class="main_question" style="color: #800080; font-size: 24px"><strong>What is your time frame and budget?</strong></h4><br>
                                                        <div class="row">
                    										<div class="col-md-6">
                    											<label>Your budget</label><div class="form-group">
                    												<select name="budget_decision" id="budget_decision" class="form-control required"><option value="" selected>Select</option>
                                                                        <option value="N30,000 - N50,000">N30,000 - N50,000</option>
                                                                              <option value="N50,000 - N100,000">N50,000 - N100,000</option>
                                                                              <option value="N100,000 - N250,000">N100,000 - N250,000</option>
                                                                              <option value="N250,000 and above">N250,000 and above</option>
                                                                          </select>
                    											</div>
                    										</div>
                    										<div class="col-md-6">
                    											<label>Development time frame</label><div class="form-group">
                                                                    <select name="timeframe_decision" id="timeframe_decision" class="form-control required"><option value="" selected>Select</option>
                                                                        <option value="2 to 4 weeks">2 to 4 weeks</option>
                                                                              <option value="4 to 8 weeks">4 to 8 weeks</option>
                                                                              <option value="3 to 6 months">3 to 6 months</option>
                                                                              <option value="6 months and more">6 months and more</option>
                                                                          </select>
                    											</div>
                    										</div>
                    									</div>
                    									<!-- /row -->
                                                        <div class="row">
                    										<div class="col-md-6">
                    											<label>How many pages will your website have?</label><div class="form-group">
                    												<select name="pages_decision" id="pages_decision" class="form-control required">
																	<option value="" selected>Select</option>
                                                                        <option value="4 to 6 pages">4 to 6 pages</option>
                                                                              <option value="6 to 8 pages">6 to 8 pages</option>
                                                                              <option value="8 to 12 pages">8 to 12 pages</option>
                                                                              <option value="12 pages and above">12 pages and above</option>
                                                                          </select>
                    											</div>
                    										</div>
                                                            <div class="col-md-6">
                    											<label>Do you have brochures, CDs, pictures, video and/or flyers for your business?</label><div class="form-group">
                    												<select name="brochures_decision" id="brochures_decision" class="form-control required">
																	<option value="" selected>Select</option>
                                                                        <option value="Yes">Yes</option>
                                                                              <option value="No">No</option>
                                                                          </select>
                    											</div>
                    										</div>
                    									</div>
                    									<!-- /row -->
                                                        <div class="row">
                                                            <div class="col-md-6">
                    											<label>Do you want us to write your website content?</label><div class="form-group">
                                                                    <select name="webcontent_decision" id="webcontent_decision" class="form-control required"><option value="" selected>Select</option>
                                                                              <option value="Yes">Yes</option>
                                                                              <option value="No">No</option>
                                                                          </select>
                    											</div>
                    										</div>
                    									</div>
                    									<!-- /row -->

                                                    </div>
                                                    <!-- /step -->

                                                    <div class="submit step" style="margin-top: -40px">
                                                        <h4 class="main_question" style="color: #800080; font-size: 24px"><strong>Which dynamic functions do you need?</strong></h4><br>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group radio_input">
                                                                    <label><input type="checkbox" value="content_management" name="question_3[]" class="icheck required">Content management</label>
                                                                </div>
                                                                <div class="form-group radio_input">
                                                                    <label><input type="checkbox" value="e_commerce" name="question_3[]" class="icheck required">E-Commerce</label>
                                                                </div>
                                                                <div class="form-group radio_input">
                                                                    <label><input type="checkbox" value="online forum" name="question_3[]" class="icheck required">Online forum</label>
                                                                </div>
                                                                <div class="form-group radio_input">
                                                                    <label><input type="checkbox" value="photo gallery" name="question_3[]" class="icheck required">Photo gallery</label>
                                                                </div>
                                                                <div class="form-group radio_input">
                                                                    <label><input type="checkbox" value="automatic_emails" name="question_3[]" class="icheck required">Automatic e-mails</label>
                                                                </div>
                                                                <div class="form-group radio_input">
                                                                    <label><input type="checkbox" value="chat_room" name="question_3[]" class="icheck required">Chat room</label>
                                                                </div>
                                                                <div class="form-group radio_input">
                                                                    <label><input type="checkbox" value="registration/booking" name="question_3[]" class="icheck required">Registration/Booking</label>
                                                                </div>
                                                                <div class="form-group radio_input">
                                                                    <label><input type="checkbox" value="static_site" name="question_3[]" class="icheck required">Static Website</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group radio_input">
                                                                    <label><input type="checkbox" value="guestbook" name="question_3[]" class="icheck required">Guestbook</label>
                                                                </div>
                                                                <div class="form-group radio_input">
                                                                    <label><input type="checkbox" value="password_protected_area" name="question_3[]" class="icheck required">Password protected area</label>
                                                                </div>
                                                                <div class="form-group radio_input">
                                                                    <label><input type="checkbox" value="video_audio_streaming" name="question_3[]" class="icheck required">Video/Audio Streaming</label>
                                                                </div>
                                                                <div class="form-group radio_input">
                                                                    <label><input type="checkbox" value="event_promotion" name="question_3[]" class="icheck required">Event/Promotion page</label>
                                                                </div>
                                                                <div class="form-group radio_input">
                                                                    <label><input type="checkbox" value="tracking_system" name="question_3[]" class="icheck required">Tracking system</label>
                                                                </div>
                                                                <div class="form-group radio_input">
                                                                    <label><input type="checkbox" value="news_feeds" name="question_3[]" class="icheck required">News feeds (RSS)</label>
                                                                </div>
                                                                <div class="form-group radio_input">
                                                                    <label><input type="checkbox" value="email_newsletter" name="question_3[]" class="icheck required">E-mail newsletter</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /row -->
                                                    </div>
                                                    <!-- /step -->
                                                    

                    							</div>
                    							<!-- /middle-wizard -->
                    							<div id="bottom-wizard">
                    								<button type="button" name="backward" class="backward">Previous</button>
                    								<button type="button" name="forward" class="forward">Next</button>
                    								<button type="submit" name="process" id="btnsubmit" class="submit">Submit</button>
                    							</div>
                    							<!-- /bottom-wizard -->
                    						</form>
                    					</div>
                    					<!-- /Wizard container -->
                    				</div>
                    			</div><!-- /Row -->
							</div><!-- /Form_container -->
							
                    	</main>

						

					</div>
				</div>
			</section>
			<!-- end Contact section -->
			<!-- second tab -->
			<?php include("checkoutpage.php"); ?>
			

		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h4>Our Services</h4>
						<ul>
							<li><a href="#">Web Development</a></li>
							<li><a href="#">Digital Marketing</a></li>
							<li><a href="#">E-commerce</a></li>
							<li><a href="#">Graphics Design</a></li>
						</ul>
					</div>
					<div class="col-md-4">
						<h4>Quick Links</h4>
						<ul>
							<li><a href="about.html">About Us</a></li>
							<li><a href="sitemap.html">Site Map</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="terms.html">Terms And Conditions</a></li>
						</ul>
					</div>
					<div class="col-md-4">
						<h4>newsletter signup</h4>
							<p style="margin-buttom: 20px">You will be among the first to know about hot new products and great deals on stuff to enhance and promote your business</p>
						<form action="#" method="post" class="subscribe-form wow animated fadeInUp">
							<div class="input-field" style="margin-top: 102px">
								<input type="email" name="email" class="subscribe form-control" placeholder="Enter Your Email..." style="margin-top: 123px">
								<button type="submit" class="submit-icon">
									<i class="fa fa-paper-plane"></i>
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</footer>
		<section id="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<p>
							COPYRIGHT &copy; 2018 , ALICKTISH LIMITED | WEB DEVELOPMENT AND DIGITAL MARKETING
						</p>
					</div>
					<div class="col-md-6 text-right">
						<p>
							Designed and Developed By <a href="#" id="sege">ALICKTISH WEB DESIGNS</a>
						</p>
					</div>
				</div>
			</div>
		</section>

        <!-- php inclusion -->
		<?php        	
				
					// echo $_SESSION['name'];
					include_once("loginmodal.php");
					include_once("signupmodal.php");
				
				 
				 ?>

	

		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
    	<script src="js/jquery.min.js"></script>

			<script src="js/bootstrap.min.js"></script>
		<!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
		<!-- Google Map API -->
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<!-- Owl Carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- jquery easing -->
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <!-- Fullscreen slider -->
        <script src="js/jquery.slitslider.js"></script>
        <script src="js/jquery.ba-cond.min.js"></script>
		<!-- onscroll animation -->
        <script src="js/wow.min.js"></script>
		<!-- Custom Functions -->
        <script src="js/jquery.form.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
		<!-- <script src="js/main.js"></script> -->
       
       



    	<!-- Common script -->
    	<script src="js/common_scripts.js"></script>
    	<!-- Wizard script -->
    	<script src="js/questionare_wizard_func.js"></script>
    	<!-- Menu script -->
    	<script src="js/velocity.min.js"></script>
    	<script src="js/mains.js"></script>
    	<!-- Theme script -->
    	<script src="js/functions.js"></script>

	 <!-- custom js -->
	 <?php 
		if(empty($_SESSION['name'])) {
			echo '<script src="js/modal.js"></script>';
		}	 
	 ?>
		
		<script src="js/login.js"></script>
		<script src="js/signup.js"></script>
		<script src="js/form_handler.js"></script>
		<script src="js/cancel_handler.js"></script>
		<script src="js/checkout.js"></script>
		




    </body>
</html>
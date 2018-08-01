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
			</div>

		</header>


        <!--
        End Fixed Navigation
        ==================================== -->

		<main class="site-content" role="main">

		<div class="sticky"></div>

		<!-- Contact section -->
			<section id="contact" >
				<div class="container">
					<div class="row">

						<div class="section-title text-center">
							<br>
							<br>
							<h2>GET A QUOTE</h2>
							<p> Get Started With Us Today<br></p>
						</div>

                        <main>
                    		<div id="form_container">
                    			<div class="row">
                    				<div class="col-lg-5">
                    					<div id="left_form">
                    						<figure style="margin-top: -40px"><img src="img/registration_bg.svg" alt=""></figure>
                    						<h1 style="font-family: Montserrat; color: #ffffff">REQUEST <br>A <br>QUOTE</h1>
                    						<strong><p style="color: #baefee; font-family: Montserrat">Simply fill in the questionnaire! <br> Because we know your time is precious we've kept it short and precise.</p></strong><br>
                    						<strong><p style="font-family: Montserrat; font-size: 17px; margin-top: -15px; margin-buttom: 50px">It will only take a minute or two!</p></strong>
                    					</div>
                    				</div>
                    				<div class="col-lg-7">

                    					<div id="wizard_container">
                    						<div id="top-wizard">
                    							<div id="progressbar"></div>
                    						</div>
                    						<!-- /top-wizard -->
                    						<form name="example-1" id="wrapped" method="POST">
                    							<input id="website" name="website" type="text" value="">
                    							<!-- Leave for security protection, read docs for details -->
                    							<div id="middle-wizard">

                                                    <div class="step" style="margin-top: -40px">
                    									<h4 class="main_question" style="color: #800080; font-size: 24px"><strong>Tell us about your business</strong></h4><br>
                                                        <div class="row">
                    										<div class="col-md-6">
                    											<label>Business name</label><div class="form-group">
                    												<input type="text" name="bizname" class="form-control required" placeholder="E.g: MyBusiness LTD...">
                    											</div>
                    										</div>
                    										<div class="col-md-6">
                    											<label>Product/Service Line</label><div class="form-group">
                    												<input type="text" name="product" class="form-control required" placeholder="E.g: Consultancy...">
                    											</div>
                    										</div>
                    									</div>
                    									<!-- /row -->
                                                        <div class="row">
                    										<div class="col-md-12">
                    											<label>Your target customer(s)</label><div class="form-group">
                    												<input type="text" name="target" class="form-control required" placeholder="E.g: Business owners, Churches...">
                    											</div>
                    										</div>
                    									</div>
                    									<!-- /row -->
                                                        <div class="row">
                    										<div class="col-md-6">
                                                                <label>Do you have your business logo designed?</label><div class="form-group">
                                                                    <select name="logo_decision" class="form-control required">
																				<option value="" selected>Y/N</option>
																				<option value="yes">Yes</option>
                                                                              <option value="no">No</option>
                                                                          </select>
                                                                </div>
                    										</div>
                    										<div class="col-md-6">
                    											<label>Your current website address if you have</label><div class="form-group">
                    												<input type="text" name="product" class="form-control">
                    											</div>
                    										</div>
                    									</div>
                    									<!-- /row -->

                    									<!-- /row -->
                    								</div>
                    								<!-- /step -->
                                                    <div class="step" style="margin-top: -40px">
                    									<h4 class="main_question" style="color: #800080; font-size: 24px"><strong>What is your time frame and budget?</strong></h4><br>
                                                        <div class="row">
                    										<div class="col-md-6">
                    											<label>Your budget</label><div class="form-group">
                    												<select name="budget_decision" class="form-control required">
																			<option value="" selected>Select</option>
																			  <option value="30,000-50,000">N30,000 - N50,000</option>
                                                                              <option value="50,000-100,000">N50,000 - N100,000</option>
                                                                              <option value="100,000-250,000">N100,000 - N250,000</option>
                                                                              <optionb value="250,000 and above">N250,000 and above</option>
                                                                          </select>
                    											</div>
                    										</div>
                    										<div class="col-md-6">
                    											<label>Development time frame</label><div class="form-group">
                                                                    <select name="timeframe_decision" class="form-control required">
																			 <option value="" selected>Select</option>
																			  <option value="2 to 4">2 to 4 weeks</option>
                                                                              <option value="4 to 8">4 to 8 weeks</option>
                                                                              <option value="8 to 12">8 to 12 weeks</option>
                                                                              <option value="3 to 6">3 to 6 months</option>
                                                                          </select>
                    											</div>
                    										</div>
                    									</div>
                    									<!-- /row -->
                                                        <div class="row">
                    										<div class="col-md-6">
                    											<label>How many pages will your website have?</label><div class="form-group">
                    												<select name="pages_decision" class="form-control required">
																			<option value="" selected>Select</option>
																			<option value="4 to 6pages">4 to 6 pages</option>
                                                                              <option value="6 to 8pages">6 to 8 pages</option>
                                                                              <option value="8 to 12pages">8 to 12 pages</option>
                                                                              <option value="12pages and above">12 pages and above</option>
                                                                          </select>
                    											</div>
                    										</div>
                                                            <div class="col-md-6">
                    											<label>Do you want us to register your domain name for you?</label><div class="form-group">
                    												<select name="domain_decision" class="form-control required">
																			<option value="" selected>Y/N</option>
																			<option value="yes">Yes</option>
                                                                              <option value="no">No</option>
                                                                          </select>
                    											</div>
                    										</div>
                    									</div>
                    									<!-- /row -->
                                                        <div class="row">
                                                            <div class="col-md-6">
                    											<label>Choose your web hosting plan</label><div class="form-group">
                                                                    <select name="hosting_decision" class="form-control required">
																			<option value="" selected>Select</option>
																			<option value="SS for 1yr">Shared server for 1 year</option>
                                                                              <option value="SS for 2yrs">Shared server for 2 years</option>
                                                                              <option value="SS for more then 2yrs">Shared server for more than 2 years</option>
                                                                              <option value="DD for 1yr">Dedicated server for 1 year</option>
                                                                            	<option value="DD for 2yrs">Dedicated server for 2 years</option>
                                                                                <option value="DD for more than 2yrs">Dedicated server for more than 2 years</option>
                                                                          </select>
                    											</div>
                    										</div>
                    									</div>
                    									<!-- /row -->

                                                    </div>
                                                    <!-- /step -->


                                                                    <div class="step" style="margin-top: -40px">
                                    									<h4 class="main_question" style="color: #800080; font-size: 24px"><strong>What is the purpose of your potential website? </strong></h4><br>
                                    									<div class="row">
                                    										<div class="col-md-6">
                                    											<div class="form-group radio_input">
                                    												<label><input type="checkbox" value="bring new client" name="question_2[]" id="new_client" class="icheck required">Bring in New Clients</label>
                                    											</div>
                                    											<div class="form-group radio_input">
                                    												<label><input type="checkbox" value="E-Commerce" name="question_2[]" id="e_commerce" class="icheck required">E-Commerce</label>
                                    											</div>
                                    											<div class="form-group radio_input">
                                    												<label><input type="checkbox" value="Educational/Training" name="question_2[]" id="edu/training" class="icheck required">Educational/Training</label>
                                    											</div>
                                                                                <div class="form-group radio_input">
                                    												<label><input type="checkbox" value="Enterainment" name="question_2[]" id="entertainment" class="icheck required">Entertainment</label>
                                    											</div>
                                                                                <div class="form-group radio_input">
                                    												<label><input type="checkbox" value="Blog" name="question_2[]" id="blog" class="icheck required">Blog</label>
                                    											</div>
                                    										</div>
                                    										<div class="col-md-6">
                                    											<div class="form-group radio_input">
                                    												<label><input type="checkbox" value="extend marketing reach" id="marketing reach" name="question_2[]" class="icheck required">Extend Marketing Reach</label>
                                    											</div>
                                    											<div class="form-group radio_input">
                                    												<label><input type="checkbox" value="information" id="information" name="question_2[]" class="icheck required">To offer information </label>
                                    											</div>
                                    											<div class="form-group radio_input">
                                    												<label><input type="checkbox" value="online presence" id="online_presence" name="question_2[]" class="icheck required">Online Presence</label>
                                    											</div>
                                                                                <div class="form-group radio_input">
                                    												<label><input type="checkbox" value="service-based" id="service_based" name="question_2[]" class="icheck required">Service-based</label>
                                    											</div>
                                                                                <div class="form-group radio_input">
                                    												<label><input type="checkbox" value="advertisement" id="advert" name="question_2[]" class="icheck required">Advertisement</label>
                                    											</div>
                                    										</div>
                                    									</div>
                                    									<!-- /row -->
                                                                        <div class="row">
                                                                             <div class="col-md-12">
                                                                                 <label>Other reasons? Please explain below</label><div class="form-group">
                                                                                     <textarea class="form-control"  style="height: 30px" name="target" id="other_reasons"></textarea>
                                                                                 </div>
                                                                             </div>
                                                                         </div>
                                                                             <!-- /row -->
                                    								</div>
                                    								<!-- /step -->

                                                    <div class="step" style="margin-top: -40px">
                                                        <h4 class="main_question" style="color: #800080; font-size: 24px"><strong>Which dynamic functions do you need?</strong></h4><br>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group radio_input">
                                                                    <label><input type="checkbox" value="Professional" name="question_3[]" class="icheck required">Content management</label>
                                                                </div>
                                                                <div class="form-group radio_input">
                                                                    <label><input type="checkbox" value="Graduated" name="question_3[]" class="icheck required">Online store</label>
                                                                </div>
                                                                <div class="form-group radio_input">
                                                                    <label><input type="checkbox" value="Not graduated" name="question_3[]" class="icheck required">Online forum</label>
                                                                </div>
                                                                <div class="form-group radio_input">
                                                                    <label><input type="checkbox" value="Emphatic" name="question_3[]" class="icheck required">Photo gallery</label>
                                                                </div>
                                                                <div class="form-group radio_input">
                                                                    <label><input type="checkbox" value="Motivated" name="question_3[]" class="icheck required">Automatic e-mails</label>
                                                                </div>
                                                                <div class="form-group radio_input">
                                                                    <label><input type="checkbox" value="Passionate" name="question_3[]" class="icheck required">Chat room</label>
                                                                </div>
                                                                <div class="form-group radio_input">
                                                                    <label><input type="checkbox" value="Passionate" name="question_3[]" class="icheck required">Registration/Booking</label>
                                                                </div>
                                                                <div class="form-group radio_input">
                                                                    <label><input type="checkbox" value="Passionate" name="question_3[]" class="icheck required">Others</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group radio_input">
                                                                    <label><input type="checkbox" value="Passionate" name="question_3[]" class="icheck required">Guestbook</label>
                                                                </div>
                                                                <div class="form-group radio_input">
                                                                    <label><input type="checkbox" value="Passionate" name="question_3[]" class="icheck required">Password protected area</label>
                                                                </div>
                                                                <div class="form-group radio_input">
                                                                    <label><input type="checkbox" value="Passionate" name="question_3[]" class="icheck required">Video/Audio Streaming</label>
                                                                </div>
                                                                <div class="form-group radio_input">
                                                                    <label><input type="checkbox" value="Passionate" name="question_3[]" class="icheck required">Event/Promotion page</label>
                                                                </div>
                                                                <div class="form-group radio_input">
                                                                    <label><input type="checkbox" value="Passionate" name="question_3[]" class="icheck required">Tracking system</label>
                                                                </div>
                                                                <div class="form-group radio_input">
                                                                    <label><input type="checkbox" value="Passionate" name="question_3[]" class="icheck required">News feeds (RSS)</label>
                                                                </div>
                                                                <div class="form-group radio_input">
                                                                    <label><input type="checkbox" value="Passionate" name="question_3[]" class="icheck required">E-mail newsletter</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /row -->
                                                    </div>
                                                    <!-- /step -->
                                                    <div class="submit step" style="margin-top: -40px">
                                                        <h4 class="main_question" style="color: #800080; font-size: 24px"><strong>Elements provision and optional services</strong></h4><br>
                    									<div class="row">
                                                            <div class="col-md-6">
                                                                <label>Will you supply photos for scanning?</label><div class="form-group">
                                                                    <select name="photo_decision" class="form-control required">
																			<option value="" selected>Y/N</option>
																			<option value="yes">Yes</option>
                                                                            <option value="no">No</option>
                                                                          </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Do you have brochures, CDs, video and/or flyers for your business?</label><div class="form-group">
                                                                    <select name="brochures_decision" class="form-control required">
																			<option value="" selected>Y/N</option>
																			<option value="yes">Yes</option>
                                                                            <option value="no">No</option>
                                                                          </select>
                                                                </div>
                                                            </div>
                    									</div>
                    									<!-- /row -->

                    									<div class="row">
                                                            <div class="col-md-6">
                                                                <label>Do you want us to write your website content?</label><div class="form-group">
                                                                    <select name="webcontent_decision" class="form-control required">
																			<option value="" selected>Y/N</option>
																			<option value="yes">Yes</option>
                                                                            <option value="no">No</option>
                                                                          </select>
                                                                </div>
                                                            </div>
                    									</div>
                    									<!-- /row -->
                    								</div>
                    								<!-- /step-->
                    							</div>
                    							<!-- /middle-wizard -->
                    							<div id="bottom-wizard">
                    								<button type="button" name="backward" class="backward">Previous</button>
                    								<button type="button" name="forward" class="forward">Next</button>
                    								<button type="submit" name="process" class="submit">Submit</button>
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




    </body>
</html>
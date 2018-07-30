<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="MAVIA - Register, Reservation, Questionare, Reviews form wizard">
	<meta name="author" content="Ansonika">
	<title>Alickitish - Your No. 1 Web Development Company</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="css/animate.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
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

	<script src="js/modernizr.js"></script>
	<!-- Modernizr -->

</head>

<body>
	
	<!-- <div id="preloader">
		<div data-loader="circle-side"></div>
	</div>/Preload -->
	
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

	<header>
		<div class="container-fluid">
		    <div class="row">
                <div class="col-3">
				<img src="img/alicktishlogo.png" alt="" width="257" height="73" style="margin-top:-20px">
				<?php
				if(isset($_SESSION['name'])){
					echo $_SESSION['name'];

				}
				 
				 ?>
                    <!-- <div id="logo_home">
                        <h1><a href="index.html">MAVIA | Register, Reservation, Questionare, Reviews form wizard</a></h1>
                    </div> -->
                </div>
               
            </div>
		</div>
		<!-- container -->
	</header>
	<!-- End Header -->

	<main>
		<div id="form_container">
			<div class="row">
				<div class="col-lg-5">
					<div id="left_form">
						<figure><img src="img/registration_bg.svg" alt=""></figure>
						<h2>Questionaire</h2>
						<p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel.</p>
						<a href="#0" id="more_info" data-toggle="modal" data-target="#more-info"><i class="pe-7s-info"></i></a>
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
								
								<div class="step">
									<h3 class="main_question"><strong>1/3</strong>How do you describe your overall satisfaction?</h3>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group radio_input">
												<label><input type="radio" value="Satisfied" name="satisfaction" class="icheck required">I am very satisfied</label>
											</div>
											<div class="form-group radio_input">
												<label><input type="radio" value="Somewhat satisfied" name="satisfaction" class="icheck required">I am somewhat satisfied</label>
											</div>
											<div class="form-group radio_input">
												<label><input type="radio" value="Neutral" name="satisfaction" class="icheck required">Neutral</label>
											</div>
											<div class="form-group radio_input">
												<label><input type="radio" value="Somewhat dissatisfied" name="satisfaction" class="icheck required">I am somewhat dissatisfied</label>
											</div>
											<div class="form-group radio_input">
												<label><input type="radio" value="Very dissatisfied" name="satisfaction" class="icheck required">I am very dissatisfied</label>
											</div>
										</div>
									</div>
									<!-- /row -->
								</div>
								<!-- /step -->
								
								<div class="step">
									<h3 class="main_question"><strong>2/3</strong>How do you describe your carrer or profile?</h3>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group radio_input">
												<label><input type="checkbox" value="Professional" name="question_2[]" class="icheck required">Professional</label>
											</div>
											<div class="form-group radio_input">
												<label><input type="checkbox" value="Graduated" name="question_2[]" class="icheck required">Graduated</label>
											</div>
											<div class="form-group radio_input">
												<label><input type="checkbox" value="Not graduated" name="question_2[]" class="icheck required">Not graduated</label>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group radio_input">
												<label><input type="checkbox" value="Emphatic" name="question_2[]" class="icheck required">Emphatic</label>
											</div>
											<div class="form-group radio_input">
												<label><input type="checkbox" value="Motivated" name="question_2[]" class="icheck required">Motivated</label>
											</div>
											<div class="form-group radio_input">
												<label><input type="checkbox" value="Passionate" name="question_2[]" class="icheck required">Passionate</label>
											</div>
										</div>
									</div>
									<!-- /row -->
								</div>
								<!-- /step -->

								<div class="submit step">
									<h3 class="main_question"><strong>3/3</strong>Please fill with your details</h3>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" name="firstname" class="form-control required" placeholder="First name">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" name="lastname" class="form-control required" placeholder="Last name">
											</div>
										</div>
									</div>
									<!-- /row -->

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input type="email" name="email" class="form-control required" placeholder="Your Email">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" name="telephone" class="form-control" placeholder="Your Telephone">
											</div>
										</div>
									</div>
									<!-- /row -->
									<br>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group terms">
												<input name="terms" type="checkbox" class="icheck required" value="yes">
												<label>Please accept <a href="#" data-toggle="modal" data-target="#terms-txt">terms and conditions</a> ?</label>
											</div>
										</div>
									</div>
								</div>
								<!-- /step-->
							</div>
							<!-- /middle-wizard -->
							<div id="bottom-wizard">
								<button type="button" name="backward" class="backward">Backward </button>
								<button type="button" name="forward" class="forward">Forward</button>
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
	
	<footer id="home" class="clearfix">
		<p>© 2018 Mavia</p>
		<ul>
			<li><a href="#" class="animated_link">Home</a></li>
			<li><a href="#0" class="animated_link">Terms and conditions</a></li>
			<li><a href="#0" class="animated_link">Contacts</a></li>
		</ul>
	</footer>
	<!-- end footer-->

	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- cd-overlay-content -->

	<!-- <a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a> -->

	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<!-- Modal info -->
	<div class="modal fade" id="more-info" tabindex="-1" role="dialog" aria-labelledby="more-infoLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="more-infoLabel">Frequently asked questions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<?php
				if(!isset($_SESSION['name'])){
					// echo $_SESSION['name'];
					include_once("loginmodal.php");
					include_once("signupmodal.php");
				}
				 
				 ?>

	
	<!-- SCRIPTS -->
	<!-- Jquery-->
	<script src="js/jquery-3.2.1.min.js"></script>

	<script src="js/bootstrap.min.js"></script>
	<!-- Common script -->
	<script src="js/common_scripts.js"></script>
	<!-- Wizard script -->
	<script src="js/questionare_wizard_func.js"></script>
	<!-- Menu script -->
	<script src="js/velocity.min.js"></script>
	<script src="js/main.js"></script>
	<!-- Theme script -->
	<script src="js/functions.js"></script>

	<!-- custom js -->
	<script src="js/script.js"></script>
	<script src="js/login.js"></script>
	<script src="js/signup.js"></script>
	

</body>


</html>
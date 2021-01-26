<?php
session_start();
if(isset($_SESSION['name']))
{
    
include('assets/res/header.php');

?>

	<!--w3l-banner-slider-->
	<section class="w3l-banner-main">

		<!--/banner-content-->
		<div class="bannerhny-content text-center">
			<h3 data-aos="fade-up">Hello! <span><?php echo $_SESSION['name']?></span> 
				<br>Make  <span>College Life </span> more enjoyable.</h3>
			
			<div class="banner-button" data-aos="fade-down">
				<a href="up.php" class="btn">Updates</a>
			</div>
		</div>
		<!--//banner-content-->
	</section>
	<!-- //w3l-banner-slider-->

	<section class="w3l-content-12-main">
		<!-- /content-6-section -->
		<div class="content-12 text-left py-5">
			<div class="container pt-lg-3">

				<h3 class="hny-title text-center">
					How it Works </h3>
				<div class="content-info-tabs mt-4">
					<div class="tab-main mx-auto text-md-center">

						<input id="tab1" type="radio" name="tabs" checked>
						<label for="tab1"><span class="fa fa-lock" aria-hidden="true"></span> Create Account</label>

						<input id="tab2" type="radio" name="tabs">
						<label for="tab2"><span class="fa fa-credit-card" aria-hidden="true"></span> Register Request</label>

						<input id="tab3" type="radio" name="tabs">
						<label for="tab3"><span class="fa fa-smile-o" aria-hidden="true"></span> Enjoy College</label>
						<input id="tab4" type="radio" name="tabs">
						
						<section id="content1" data-aos="zoom-in">
							<img src="assets/images/screen-1.png" class="img-fluid" alt="mobile-image">
						</section>

						<section id="content2" data-aos="zoom-in">
							<img src="assets/images/screen-2.png" class="img-fluid" alt="mobile-image">
						</section>

						<section id="content3" data-aos="zoom-in">
							<img src="assets/images/screen-3.png" class="img-fluid" alt="mobile-image">
						</section>
						
				</div>
			</div>
		</div>
	</section>
	

	<section class="w3l-content-w-photo-6">
		<!-- /content-grids-->
		<div class="content-photo-info py-5">
			<div class="container py-lg-3">
				<h3 class="hny-title text-center">
					Features</h3>
				<!-- /row-->
				<div class="content-photo-grids row mt-lg-5 mt-4 px-lg-5">
					<div class="photo-6-inf-left col-lg-6 pr-lg-4" data-aos="fade-up">
						<img src="assets/images/2.png" class="img-fluid" alt="">
					</div>
					<div class="photo-6-inf-right col-lg-6 text-left pl-lg-5" data-aos="fade-down">

						<h4>Easy to Access and user Friendly !
						</h4>
						<p>This app will help you to access various type of service of college.It is easy to use and
						easy to access from various Devices.It will make your college life more easy.our technical support will always there for you.</p>
					</div>
				</div>
				<!-- //row-->
				

			</div>
		</div>
	</section>
	<!-- /macbook--->
	<section class="w3l-macbook-content-6">
		<div class="macbook-infohny">
			<!-- /macbook-infohny-->
			<div class="container-fuild">
				<div class="row macbook-infohny-inn mx-lg-0">
					<div class="col-lg-6 macbook-left mt-lg-0 mt-5 px-lg-0" data-aos="fade-up">
						<img src="assets/images/macbook-1.png" class="img-fluid" alt="">
					</div>
					<div class="col-lg-6 macbook-right my-lg-5 py-lg-5 py-4" data-aos="fade-down">
						<h3 class="hny-title mb-lg-5">
							Provide even better customer service.</h3>
						<div class="row macbook-right-grids mb-lg-5 mb-4">
							<div class="col-md-2 macbook-right-icon">
								<div class="macbook-icon">
									<span class="fa fa-clock-o"></span>
								</div>
							</div>
							<div class="col-md-10 macbook-right-info">
								<h6>Time is Money</h6>
								<p>Our app will help you in various services in college.Which help you to invest your time in various creative work.</p>
							</div>

						</div>
						<div class="row macbook-right-grids mb-5 mt-lg-0 mt-5">
							<div class="col-md-2 macbook-right-icon">
								<div class="macbook-icon">
									<span class="fa fa-podcast"></span>
								</div>
							</div>
							<div class="col-md-10 macbook-right-info">
								<h6>Easy User Interface</h6>
								<p>This is a web app which open a new way to access services.just login with any devices and start using services.</p>
							</div>

						</div>
						<div class="row macbook-right-grids mb-lg-0 mb-4">
							<div class="col-md-2 macbook-right-icon">
								<div class="macbook-icon">
									<span class="fa fa-database"></span>
								</div>
							</div>
							<div class="col-md-10 macbook-right-info">
								<h6>Quick Access</h6>
								<p>This webapp is easy to use and easy to access from various Devices.just login to your account and you are good to go.</p>
							</div>

						</div>
					</div>

				</div>
			</div>
			<!-- //macbook-infohny-->
		</div>
	</section>
	

	<?php include('assets/res/footer.php');
    }
    else
    {header("location:Login.php");}
?>

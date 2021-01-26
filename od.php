<?php
session_start();
if(isset($_SESSION['name']))
{

include('assets/res/header.php');

?>
      <section class="w3l-inner-page-main">
    <div class="breadcrumb2-infhny">
      <div class="container">
        <nav aria-label="breadcrumb">
          <h2 class="hny-title text-center">CANTEEN</h2>
        </nav>
      </div>
    </div>
  </section>




<section class="features-4">
	<div class="features4-block py-5">
		<div class="container py-lg-5">
			<h6 style="padding-top: 2px;">We have The best</h6>
			<h3 class="hny-title text-center" data-aos="fade-down">Canteen Services</h3>
			
			
		</div>
	</div>
</section>
<!-- features-4 -->
<section class="w3l-services-6-main">
	<div class="services-6 py-5">
		<div class="container ">
			<div class="row serv_sec_info">
				<div class="col-md-6 banner_bottom_grid help" data-aos="fade-down">
					<img src="assets/images/5.png" alt=" " class="img-fluid">
				</div>

				<div class="col-md-6 banner_bottom_left pl-lg-4" data-aos="fade-up">
					<section class="w3l-contact-main">
    <div class="contact-infhny py-5">
      <div class="container py-lg-3">
        <div class="top-map">
          <div class="map-content-9">
            <form action="can.php" method="post">
              <div class="form-top1">
                <h3 class="hny-title text-center mb-lg-5 mb-4" data-aos="fade-down">ORDER DONE</h3>
                </div>
            </form>
          </div>
 

  </section>

				</div>
				
			</div>
			
		</div>
	</div>
</section>

	<?php include('assets/res/footer.php');
    }
    else
    {header("location:Login.php");}
?>
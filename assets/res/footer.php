
	<footer class="w3l-footer-16">
		<div class="footer-content py-lg-5 py-4 text-center">
			<div class="container">
				<div class="copy-right">
					<h6><a href="ac.php">Account Settings</a> </h6>
					<ul>
						<p class="footer-text m-0">
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | RELDOR </p>
					</ul>
				</div>
				<button onclick="topFunction()" id="movetop" title="Go to top">
					<span class="fa fa-angle-up"></span>
				</button>
			</div>
		</div>

		<!-- move top -->
		<script>
		
			window.onscroll = function () {
				scrollFunction()
			};

			function scrollFunction() {
				if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
					document.getElementById("movetop").style.display = "block";
				} else {
					document.getElementById("movetop").style.display = "none";
				}
			}

			
			function topFunction() {
				document.body.scrollTop = 0;
				document.documentElement.scrollTop = 0;
			}
		</script>
		<!-- //move top -->
		<script>
			$(function () {
				$('.navbar-toggler').click(function () {
					$('body').toggleClass('noscroll');
				})
			});
		</script>
	</footer>
</body>

</html>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- disable body scroll which navbar is in active -->

<!--//-->
<script>
	$(function () {
		$('.navbar-toggler').click(function () {
			$('body').toggleClass('noscroll');
		})
	});
</script>
<!--/MENU-JS-->
<script>
	$(window).on("scroll", function () {
		var scroll = $(window).scrollTop();

		if (scroll >= 80) {
			$("#site-header").addClass("nav-fixed");
		} else {
			$("#site-header").removeClass("nav-fixed");
		}
	});

	//Main navigation Active Class Add Remove
	$(".navbar-toggler").on("click", function () {
		$("header").toggleClass("active");
	});
	$(document).on("ready", function () {
		if ($(window).width() > 991) {
			$("header").removeClass("active");
		}
		$(window).on("resize", function () {
			if ($(window).width() > 991) {
				$("header").removeClass("active");
			}
		});
	});
</script>
<!--//MENU-JS-->
<!-- /aos -->
<script src="assets/js/aos.js"></script>
<script src="assets/js/aosindex.js"></script>
<!-- //aos -->

<script src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/sweetalert.min.js"></script> 
<?php
if(isset($_SESSION['done']))
{ 
?>
    <script>
        swal({
          title: "<?php echo $_SESSION['done']?>",
          icon: "success",
          button: "OK",
        });
    </script>
<?php 
unset($_SESSION['done']);

} ?>
<!DOCTYPE HTML>
<html>
<head>
<?php  include "meta.php"; ?>
<!-- //css -->
<script src="js/jquery-1.11.1.min.js"> </script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<!-- header -->
    <?php include "header.php"; ?>
		<!-- banner-grids -->
    <?php include "banner.php"; ?>
		<!-- //banner-grids -->
	</div>
	<!-- banner -->
	<!-- welcome -->
  <?php include "welcome.php"; ?>
	<!-- welcome -->
	<!-- work -->
	<div class="work">
		<!-- container -->
		<div class="container">
			<div class="work-info">
				<h3>Popular Wines</h3>
			</div>
			<div class="work-grids">
				<div class="work-grids-top">
					<div class="col-md-4 work-grid-left">
						<h5>Nunc molestie</h5>
						<p>non suscipit leo fringilla non suscipit leo fringilla molestie</p>
						<a href="single.html">more</a>
					</div>
					<div class="col-md-4 work-grid-middle">
						<img src="images/6.jpg" alt="">
					</div>
					<div class="col-md-4 work-grid-left">
						<h5>Nunc molestie</h5>
						<p>non suscipit leo fringilla non suscipit leo fringilla molestie</p>
						<a href="single.html">more</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="work-grids-top">
					<div class="col-md-4 work-grid-middle">
						<img src="images/5.jpg" alt="">
					</div>
					<div class="col-md-4 work-grid-left">
						<h5>Nunc molestie</h5>
						<p>non suscipit leo fringilla non suscipit leo fringilla molestie</p>
						<a href="single.html">more</a>
					</div>
					<div class="col-md-4 work-grid-middle">
						<img src="images/7.jpg" alt="">
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="work-grids-top">
					<div class="col-md-4 work-grid-left">
						<h5>Nunc molestie</h5>
						<p>non suscipit leo fringilla non suscipit leo fringilla molestie</p>
						<a href="single.html">more</a>
					</div>
					<div class="col-md-4 work-grid-middle">
						<img src="images/6.jpg" alt="">
					</div>
					<div class="col-md-4 work-grid-left">
						<h5>Nunc molestie</h5>
						<p>non suscipit leo fringilla non suscipit leo fringilla molestie</p>
						<a href="single.html">more</a>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //work -->
	<!-- news -->
  <?php include "news.php"; ?>
	<!-- //news -->
	<!-- footer -->
  <?php include "footer.php";?>
	<!-- //footer -->
	<!-- footer-bottom -->

	<!-- footer-bottom -->
	<script type="text/javascript">
									$(document).ready(function() {
										$().UItoTop({ easingType: 'easeOutQuart' });
									});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- content-Get-in-touch -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
</body>
</html>

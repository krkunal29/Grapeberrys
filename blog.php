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
	<div class="banner banner-bg">
		<!-- header -->
 	<?php include "header.php"; ?>
	</div>
	<!-- banner -->
	<!-- blog -->
	<?php include "innerblog.php"; ?>
	<!-- //blog -->
	<!-- footer -->
	  <?php include "footer.php";?>
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

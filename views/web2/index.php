<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Punch a Sports Category Bootstrap responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Punch Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<base href="<?=BASE?>">
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Arvo:400,400i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner jarallax">
		<div class="header">
			<div class="container">
				<div class="header-left">
					<div class="w3layouts-logo">
						<h1>
							<a href="/">Punch</a>
						</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="w3-header-bottom">
			<div class="agileinfo-phone">
				<p><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +1 234 567 8901</p>
			</div>
			<div class="top-nav">
						<nav class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li class="first-list"><a class="active" href="/">Home</a></li>
									<li><a href="/?view=about">About</a></li>
									<li><a href="/?view=gallery">Gallery</a></li>
									<li class="dropdown">
										<a href="/?view=codes" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Pages <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="/?view=icons">Icons</a></li>
											<li><a href="/?view=single">Short Codes</a></li>
										</ul>
									</li>
									<li><a href="/?view=contact">Contact</a></li>
								</ul>	
								<div class="clearfix"> </div>
							</div>	
						</nav>		
			</div>
			<div class="agileinfo-social-grids">
				<ul>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-rss"></i></a></li>
					<li><a href="#"><i class="fa fa-vk"></i></a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="banner-info">
			<div class="container">
				<div class="w3-banner-info">
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider4">
								<li>
									<div class="w3layouts-banner-info">
										<h3>Vivamus</h3>
										<p>Lorem ipsum dolor sit amet</p>
										<div class="w3ls-button">
											<a href="single.html">Read More</a>
										</div>
									</div>
								</li>
								<li>
									<div class="w3layouts-banner-info">
										<h3>Donec</h3>
										<p>Fusce varius id lectus at</p>
										<div class="w3ls-button">
											<a href="single.html">Read More</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
									<script>
										// You can also use "$(window).load(function() {"
										$(function () {
										  // Slideshow 4
										  $("#slider4").responsiveSlides({
											auto: true,
											pager:true,
											nav:false,
											speed: 400,
											namespace: "callbacks",
											before: function () {
											  $('.events').append("<li>before event fired.</li>");
											},
											after: function () {
											  $('.events').append("<li>after event fired.</li>");
											}
										  });
									
										});
									 </script>
									<!--banner Slider starts Here-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	
	
	
	
	<?php
require_once $inc;
?>
	
	
	
	
	<!-- footer -->
	<footer>
			<div class="w3ls-footer-grids">
				<div class="container">
					<div class="col-md-3 w3l-footer one">
						<h3>Punch</h3>
						<p> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of Latin at Hampden-Sydney College in Virginia from a Lorem Ipsum passage, undoubtable source.</p>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-3 w3l-footer agileinfo_footer_grid">
						<h3>Navigation</h3>					
						<div class="nav-w3-l">
							<ul>
								<li><a href="index.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Home</a></li>
								<li><a href="about.html"><i class="fa fa-angle-right" aria-hidden="true"></i> About Us</a></li>
								<li><a href="gallery.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Gallery</a></li>
								<li><a href="icons.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Icons</a></li>
								<li><a href="codes.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Short Codes</a></li>
								<li><a href="contact.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 w3l-footer two">
						<h3>Keep Connected</h3>
						<ul>
							<li><a class="fb" href="#"><i class="fa fa-facebook"></i>Like us on Facebook</a></li>
							<li><a class="fb1" href="#"><i class="fa fa-twitter"></i>Follow us on Twitter</a></li>
							<li><a class="fb2" href="#"><i class="fa fa-google-plus"></i>Add us on Google Plus</a></li>
							<li><a class="fb3" href="#"><i class="fa fa-dribbble"></i>Follow us on Dribbble</a></li>
							<li><a class="fb4" href="#"><i class="fa fa-pinterest-p"></i>Follow us on Pinterest</a></li>
						</ul>
					</div>
					<div class="col-md-3 w3l-footer three">
						<h3>Address</h3>
						<ul>
							<li><i class="fa fa-map-marker"></i><p>The company name <span>Lorem ipsum dolor,</span>New York,Morris Park. </p><div class="clearfix"></div> </li>
							<li><i class="fa fa-phone"></i><p>1234567890</p> <div class="clearfix"></div> </li>
							<li><i class="fa fa-envelope-o"></i><a href="mailto:info@example.com">mail@example.com</a> <div class="clearfix"></div></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="copy-right-grids">
				<div class="container">
					<div class="copy-left">
						<p class="footer-gd">© 2017 Punch. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts</a></p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
	</footer>
	<!-- //footer -->
	<script src="js/responsiveslides.min.js"></script>
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>

	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
</body>	
</html>
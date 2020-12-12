 <!-- about breadcrumb -->
   <section class="w3l-about-breadcrumb position-relative text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-lg-5 py-3">
        <h2 class="title">Services</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-angle-double-right mx-2" aria-hidden="true"></span> Services </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
	<!--/services-sec-->
	<div class="w3-services py-5">
		<div class="container py-lg-4">
			<div class="title-content text-left mb-lg-5 mb-4">
				<h6 class="sub-title">Our Services</h6>
				<h3 class="hny-title">Great Services</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit hic odio.</p>

			</div>
			<div class="row w3-services-grids">
				<div class="col-lg-4 col-md-6 causes-grid">
					<div class="causes-grid-info">
						<a href="blog-single.html"><img src="assets/images/ab1.jpg" class="img-fuild" alt=""></a>
						<a href="#" class="cause-title-wrap">
							<h4 class="cause-title">Electrical system
							</h4>
						</a>
						<p class="card-text mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit hic odio. 
						</p>

						<a href="services.html" class="btn btn-style btn-primary mt-4">Read More</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 causes-grid">
					<div class="causes-grid-info">
						<a href="blog-single.html"><img src="assets/images/ab2.jpg" class="img-fuild" alt=""></a>
						<a href="#" class="cause-title-wrap">
							<h4 class="cause-title">System service
							</h4>
						</a>
						<p class="card-text mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit hic odio. 
						</p>

						<a href="services.html" class="btn btn-style btn-primary mt-4">Read More</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 causes-grid">
					<div class="causes-grid-info">
						<a href="blog-single.html"><img src="assets/images/ab3.jpg" class="img-fuild" alt=""></a>
						<a href="#" class="cause-title-wrap">
							<h4 class="cause-title">Tire and wheel
							</h4>
						</a>
						<p class="card-text mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit hic odio. 
						</p>

						<a href="services.html" class="btn btn-style btn-primary mt-4">Read More</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 causes-grid">
					<div class="causes-grid-info">
						<a href="blog-single.html"><img src="assets/images/ab4.jpg" class="img-fuild" alt=""></a>
						<a href="#" class="cause-title-wrap">
							<h4 class="cause-title">Automotive filters
							</h4>
						</a>
						<p class="card-text mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit hic odio. 
						</p>
  
            
						<a href="services.html" class="btn btn-style btn-primary mt-4">Read More</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 causes-grid">
					<div class="causes-grid-info">
						<a href="blog-single.html"><img src="assets/images/ab5.jpg" class="img-fuild" alt=""></a>
						<a href="#" class="cause-title-wrap">
							<h4 class="cause-title">Engine diagnostics
							</h4>
						</a>
						<p class="card-text mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit hic odio. 
						</p>
	
						<a href="services.html" class="btn btn-style btn-primary mt-4">Read More</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 causes-grid">
					<div class="causes-grid-info">
						<a href="blog-single.html"><img src="assets/images/ab6.jpg" class="img-fuild" alt=""></a>
						<a href="#" class="cause-title-wrap">
							<h4 class="cause-title">Drivability problems
							</h4>
						</a>
						<p class="card-text mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit hic odio. 
						</p>
	
						<a href="services.html" class="btn btn-style btn-primary mt-4">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//services-sec-->
 
  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->
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

  <script src="assets/js/bootstrap.min.js"></script>


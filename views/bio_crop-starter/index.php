
<!--
   Author: W3layouts
   Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Bio Crop a Agriculture  Category Responsive Web Template | Home :: W3layouts</title>

    <!-- Template CSS -->
    <base href="<?=BASE?>">
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">
</head>
<body id="home">

<section class=" w3l-header-4 header-sticky">
    <header class="absolute-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <h1><a class="navbar-brand" href="/"> <span class="fa fa-pagelines" aria-hidden="true"></span>
                        Bio Crop
                    </a></h1>
                <button class="navbar-toggler bg-gradient collapsed" type="button" data-toggle="collapse"
                        data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="fa icon-expand fa-bars"></span>
                    <span class="fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav  ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/?view=about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/?view=services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/?view=contact">Contact</a>
                        </li>
                    </ul>
                    <a href="#" class="ml-lg-3 mt-lg-0 mt-3 book btn btn-style">Get started</a>
                </div>
        </div>

        </nav>
        </div>
    </header>
</section>

<script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
<!--bootstrap working-->
<script src="assets/js/bootstrap.min.js"></script>
<!-- //bootstrap working-->
<!-- disable body scroll which navbar is in active -->
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- disable body scroll which navbar is in active -->
<?php
require_once $inc;
?>

<section class="w3l-footer-29-main">
    <div class="footer-29 py-5">
        <div class="container">
            <div class="row footer-top-29">
                <div class="col-lg-5 col-md-5 col-sm-6 footer-list-29 footer-1">
                    <div class="left-side">
                        <h2><a href="index.html" class="footer-logo">Bio Crop</a></h2>
                        <p class="para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe qui repellat nam vero consectetur dicta eos suscipit. Numquam at minus architecto asperiores cupiditate. At molestias laborum voluptatibus numquam aperiam in.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 footer-list-29 footer-2 ">

                    <ul>
                        <h6 class="footer-title-29">Useful Links</h6>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="contact.html">Contact us</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 footer-list-29 footer-3">
                    <h6 class="footer-title-29">Latest from blog</h6>
                    <div class="footer-post mb-3">
                        <a href="#page">
                            <img src="assets/images/f1.jpg" class="img-responsive" alt=""></a>
                        <div>
                            <a href="#page">How to Eat Organic Foods</a>
                            <p class="small"><span class="fa fa-clock-o"></span> March 9, 2020</p>
                        </div>
                    </div>
                    <div class="footer-post">
                        <a href="#page">
                            <img src="assets/images/f2.jpg" class="img-responsive" alt="">
                        </a>
                        <div>
                            <a href="#page">How to Eat Organic Foods</a>
                            <p class="small"><span class="fa fa-clock-o"></span> March 9, 2020</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section class="w3l-footer-29-main w3l-copyright">
    <div class="container">
        <div class=" bottom-copies text-center">
            <p class="copy-footer-29">© 2020 Bio Crop. All rights reserved | Designed by <a href="https://w3layouts.com">W3layouts</a></p>
        </div>
    </div>
</section>
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-long-arrow-up"></span>
</button>
<script>
    // When the user scrolls down 20px from the top of the document, show the button
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

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<!-- /move top -->
</body>

</html>

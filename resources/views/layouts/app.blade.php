<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>{{$title??config('app.name')}}</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/lightbox/simpleLightbox.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/nice-select/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/animate-css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/jquery-ui/jquery-ui.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>

<body>

<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.html">
                    <img src="assets/img/logo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-center mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="category.html">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="archive.html">Archive</a>
                        </li>
                        <li class="nav-item submenu dropdown active">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="elements.html">Elements</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="single-blog.html">Post Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav ml-auto search">
                        <li class="nav-item d-flex align-items-center mr-10">
                            <div class="menu-form">
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search here">
                                    </div>
                                </form>
                            </div>
                            <button type="submit" class="search-icon">
                                <i class="lnr lnr-magnifier"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================ Header Menu Area =================-->

<!--================ Banner Area =================-->
<section class="home_banner_area banner_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-7">
                <div class="blog_text_slider">
                    <div class="blog_text">
                        <img class="img-fluid" src="{{asset('assets/img/banner/category-img.png')}}" alt="">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Banner Area =================-->

<!--================Category Area =================-->
<section class="category_area section-gap">
    <div class="container">
        <div class="row">

            @if (count($errors) > 0)
                <div class="col-12">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{!! $error !!}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            @if (session('status'))
                <div class="col-12">
                    <div class="alert alert-success" role="alert">
                        {!! session('status') !!}
                    </div>
                </div>
            @endif

            @yield('content')

            @include('layouts.sidebar')

        </div>
    </div>
</section>
<!--================Category Area =================-->

<!--================ start footer Area  =================-->
<footer class="footer-area section-gap">
    <div class="container">
        <div class="single-footer-widget footer_middle">
            <img src="{{asset('assets/img/logo.png')}}" alt="">
            <p class="mt-50">Stay updated with our latest trends</p>
            <div id="mc_embed_signup">
                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                      method="get" class="subscribe_form relative">
                    <div class="input-group d-flex flex-row">
                        <input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
                               required="" type="email">
                        <button class="btn sub-btn">
                            <span class="lnr lnr-arrow-right"></span>
                        </button>
                    </div>
                    <div class="mt-10 info"></div>
                </form>
            </div>
        </div>
        <div class="footer-bottom footer_copy">
            <div class="footer-social">
                <a href="#">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="#">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fa fa-dribbble"></i>
                </a>
                <a href="#">
                    <i class="fa fa-behance"></i>
                </a>
            </div>

            <p class="col-lg-12 footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
    </div>
</footer>
<!--================ End footer Area  =================-->

<!-- ####################### Start Scroll to Top Area ####################### -->
<div id="back-top">
    <a title="Go to Top" href="#">
        <i class="fa fa-angle-up"></i>
    </a>
</div>
<!-- ####################### End Scroll to Top Area ####################### -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/popper.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/stellar.js')}}"></script>
<script src="{{asset('assets/vendors/lightbox/simpleLightbox.min.js')}}"></script>
<script src="{{asset('assets/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('assets/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendors/isotope/isotope-min.js')}}"></script>
<script src="{{asset('assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/vendors/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>

</body>

</html>

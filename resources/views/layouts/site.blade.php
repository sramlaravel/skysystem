<!DOCTYPE html>
  <html lang="ar" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>شركة سكاي للانظمه وتقنيه المعلومات</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700;900&amp;display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('assets//img/favicon.png')}}">
    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <!-- IcoFont Min CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/icofont.min.css')}}">
    <!-- IcoMoon Min CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/icomoon.min.css')}}">
    <!-- Font Awesome Min CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
    <!-- Mran Menu CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">
    <!-- Magnific Popup Min CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <!-- flickity CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/flickity.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flickity-fade.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>

<body>



<!-- fixed-top-->

<!-- begin header -->
@include('front.includes.header')
<!-- end header -->
@yield('content')



<!-- begin footer html -->
@include('front.includes.footer')

<!-- end footer -->
<!-- Start Go Top Section -->
<div class="go-top">
    <i class="fas fa-chevron-up"></i>
    <i class="fas fa-chevron-up"></i>
</div>
<!-- End Go Top Section -->
<!-- jQuery Min JS -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!-- Popper Min JS -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- Bootstrap Min JS -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- MeanMenu JS  -->
<script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
<!-- Appear Min JS -->
<script src="{{asset('assets/js/jquery.appear.min.js')}}"></script>
<!-- Waypoints Min JS -->
<script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
<!-- CounterUp Min JS -->
<script src="{{asset('assets/js/jquery.counterup.js')}}"></script>
<!-- Owl Carousel Min JS -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- Magnific Popup Min JS -->
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Isotope Min JS -->
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<!-- Scroll To Fixed JS -->
<script src="{{asset('assets/js/jquery-scrolltofixed.js')}}"></script>
<!-- flickity JS -->
<script src="{{asset('assets/js/flickity.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/bg-lazyload.js')}}"></script>
<script src="{{asset('assets/js/flickity-fade.js')}}"></script>
<!-- WOW Min JS -->
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>

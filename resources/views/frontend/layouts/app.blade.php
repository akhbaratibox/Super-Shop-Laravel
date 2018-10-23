<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="robots" content="index, follow">
<meta name="description" content="Boomerang is a responsive website template based on the well known Bootstrap framework. It's very well structured with lots of features and demos ready to be used.">
<meta name="keywords" content="bootstrap, responsive, template, website, html, theme, ux, ui, web, design, developer, support, business, corporate, real estate, education, medical, school, education, demo, css, framework">
<meta name="author" content="Webpixels">

<title>Active Shop</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" type="text/css">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

<!-- Plugins -->
<link rel="stylesheet" href="{{ asset('frontend/vendor/swiper/css/swiper.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/vendor/hamburgers/hamburgers.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('frontend/vendor/animate/animate.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('frontend/vendor/fancybox/css/jquery.fancybox.min.css') }}">

<!-- Icons -->
<link rel="stylesheet" href="{{ asset('frontend/fonts/font-awesome/css/font-awesome.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('frontend/fonts/ionicons/css/ionicons.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('frontend/fonts/line-icons/line-icons.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('frontend/fonts/line-icons-pro/line-icons-pro.css') }}" type="text/css">

<!-- Linea Icons -->
<link rel="stylesheet" href="{{ asset('frontend/fonts/linea/arrows/linea-icons.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('frontend/fonts/linea/basic/linea-icons.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('frontend/fonts/linea/ecommerce/linea-icons.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('frontend/fonts/linea/software/linea-icons.css') }}" type="text/css">

<link type="text/css" href="{{ asset('frontend/css/bootstrap-tagsinput.css') }}" rel="stylesheet">
<link type="text/css" href="{{ asset('frontend/css/summernote.min.css') }}" rel="stylesheet">

<!-- Global style (main) -->
<link id="stylesheet" type="text/css" href="{{ asset('frontend/css/boomerang.min.css') }}" rel="stylesheet" media="screen">

<!-- Custom style - Remove if not necessary -->
<link type="text/css" href="{{ asset('frontend/css/custom-style.css') }}" rel="stylesheet">

<!-- Favicon -->
<link href="{{ asset('frontend/images/favicon.png') }}" rel="icon" type="image/png">
<!-- jQuery -->
<script src="{{ asset('frontend/vendor/jquery/jquery.min.js') }}"></script>

</head>
<body>


<!-- MAIN WRAPPER -->
<div class="body-wrap shop-default shop-cards shop-tech">

    <!-- Header -->
    @include('frontend.inc.nav')

    @yield('content')

    @include('frontend.inc.footer')

</div><!-- END: body-wrap -->

<!-- SCRIPTS -->
<a href="#" class="back-to-top btn-back-to-top"></a>

<!-- Core -->
<script src="{{ asset('frontend/vendor/popper/popper.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/slidebar/slidebar.js') }}"></script>
<script src="{{ asset('frontend/js/classie.js') }}"></script>

<!-- Bootstrap Extensions -->
<script src="{{ asset('frontend/vendor/bootstrap-notify/bootstrap-growl.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/scrollpos-styler/scrollpos-styler.js') }}"></script>

<!-- Plugins: Sorted A-Z -->
<script src="{{ asset('frontend/vendor/adaptive-backgrounds/adaptive-backgrounds.js') }}"></script>
<script src="{{ asset('frontend/vendor/countdown/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/dropzone/dropzone.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/fancybox/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/flip/flip.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/footer-reveal/footer-reveal.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/gradientify/jquery.gradientify.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/headroom/headroom.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/headroom/jquery.headroom.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/input-mask/input-mask.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/instafeed/instafeed.js') }}"></script>
<script src="{{ asset('frontend/vendor/milestone-counter/jquery.countTo.js') }}"></script>
<script src="{{ asset('frontend/vendor/nouislider/js/nouislider.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/paraxify/paraxify.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/sticky-kit/sticky-kit.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/swiper/js/swiper.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/textarea-autosize/autosize.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/typeahead/typeahead.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/typed/typed.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/vide/vide.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/viewport-checker/viewportchecker.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/wow/wow.min.js') }}"></script>

<!-- Isotope -->
<script src="{{ asset('frontend/vendor/isotope/isotope.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>

<!-- Deso Slide -->
<script src="{{ asset('frontend/vendor/deso-slide/js/jquery.desoslide.min.js') }}"></script>
<script>
    $('#slideshow').desoSlide({
        thumbs: $('#slideshow_thumbs .swiper-slide > a'),
        thumbEvent: 'click',
        first: 0,
        effect: 'none',
        overlay: 'none',
        controls: {
            show: false,
            keys: false
        },
    });
</script>

<script src="{{ asset('frontend/js/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ asset('frontend/js/summernote.min.js') }}"></script>

<!-- App JS -->
<script src="{{ asset('frontend/js/boomerang.min.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>

@yield('script')

</body>
</html>

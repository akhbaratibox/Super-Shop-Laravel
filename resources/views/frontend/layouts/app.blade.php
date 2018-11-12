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

<link type="text/css" href="{{ asset('frontend/css/sweetalert2.min.css') }}" rel="stylesheet">

<link type="text/css" href="{{ asset('frontend/css/slick.css') }}" rel="stylesheet">

<!-- Global style (main) -->
<link id="stylesheet" type="text/css" href="{{ asset('frontend/css/boomerang.min.css') }}" rel="stylesheet" media="screen">

<!--Spectrum Stylesheet [ REQUIRED ]-->
<link href="{{ asset('css/spectrum.css')}}" rel="stylesheet">

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

    @include('frontend.partials.modal')

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

<!--Spectrum JavaScript [ REQUIRED ]-->
<script src="{{ asset('js/spectrum.js')}}"></script>

<!-- Deso Slide -->
<script src="{{ asset('frontend/vendor/deso-slide/js/jquery.desoslide.min.js') }}"></script>

<script src="{{ asset('frontend/js/sweetalert2.min.js') }}"></script>
<script src="{{ asset('frontend/js/slick.min.js') }}"></script>

<script type="text/javascript">
    function showFrontendAlert(type, message){
        swal({
            position: 'top-end',
            type: type,
            title: message,
            showConfirmButton: false,
            timer: 1500
        });
    }
</script>

@foreach (session('flash_notification', collect())->toArray() as $message)
    <script type="text/javascript">
        showFrontendAlert('{{ $message['level'] }}', '{{ $message['message'] }}');
    </script>
@endforeach

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

    function updateNavCart(){
        $.post('{{ route('cart.nav_cart') }}', {_token:'{{ csrf_token() }}'}, function(data){
            $('#cart_items').html(data);
        });
    }

    function removeFromCart(key){
        $.post('{{ route('cart.removeFromCart') }}', {_token:'{{ csrf_token() }}', key:key}, function(data){
            updateNavCart();
            $('#cart-summary').html(data);
            showFrontendAlert('success', 'Item has been removed from cart');
        });
    }

    function addToCompare(id){
        $.post('{{ route('compare.addToCompare') }}', {_token:'{{ csrf_token() }}', id:id}, function(data){
            $('#compare').html(data);
            showFrontendAlert('success', 'Item has been added to compare list');
        });
    }

    function addToWishList(id){
        if('{{ Auth::check() }}'){
            $.post('{{ route('wishlists.store') }}', {_token:'{{ csrf_token() }}', id:id}, function(data){
                $('#wishlist').html(data);
                showFrontendAlert('success', 'Item has been added to wishlist');
            });
        }
        else{
            showFrontendAlert('warning: ', 'Please login first');
        }
    }

    function cartQuantityInitialize(){
        $('.btn-number').click(function(e) {
            e.preventDefault();

            fieldName = $(this).attr('data-field');
            type = $(this).attr('data-type');
            var input = $("input[name='" + fieldName + "']");
            var currentVal = parseInt(input.val());

            if (!isNaN(currentVal)) {
                if (type == 'minus') {

                    if (currentVal > input.attr('min')) {
                        input.val(currentVal - 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('min')) {
                        $(this).attr('disabled', true);
                    }

                } else if (type == 'plus') {

                    if (currentVal < input.attr('max')) {
                        input.val(currentVal + 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('max')) {
                        $(this).attr('disabled', true);
                    }

                }
            } else {
                input.val(0);
            }
        });

        $('.input-number').focusin(function() {
            $(this).data('oldValue', $(this).val());
        });

        $('.input-number').change(function() {

            minValue = parseInt($(this).attr('min'));
            maxValue = parseInt($(this).attr('max'));
            valueCurrent = parseInt($(this).val());

            name = $(this).attr('name');
            if (valueCurrent >= minValue) {
                $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the minimum value was reached');
                $(this).val($(this).data('oldValue'));
            }
            if (valueCurrent <= maxValue) {
                $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the maximum value was reached');
                $(this).val($(this).data('oldValue'));
            }


        });
        $(".input-number").keydown(function(e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) ||
                // Allow: home, end, left, right
                (e.keyCode >= 35 && e.keyCode <= 39)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
    }

</script>

<script src="{{ asset('frontend/js/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ asset('frontend/js/summernote.min.js') }}"></script>

<!-- App JS -->
<script src="{{ asset('frontend/js/boomerang.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>

@yield('script')

</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>OneTech</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap4/bootstrap.min.css') }}">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/slick-1.8.0/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/responsive.css') }}">

</head>

<body>

    <div class="super_container">

        <!-- Header -->

        @include('user.header')
        
        <!-- Banner -->

        @yield('user.content')

        {{-- @include('user.newsletter') --}}
        <!-- Footer -->
        @include('user.footer')
        <!-- Copyright -->

    </div>

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('styles/bootstrap4/popper.js') }}"></script>
    <script src="{{ asset('styles/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/greensock/TweenMax.min.js') }}"></script>
    <script src="{{ asset('plugins/greensock/TimelineMax.min.js') }}"></script>
    <script src="{{ asset('plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
    <script src="{{ asset('plugins/greensock/animation.gsap.min.js') }}"></script>
    <script src="{{ asset('plugins/greensock/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ asset('plugins/slick-1.8.0/slick.js') }}"></script>
    <script src="{{ asset('plugins/easing/easing.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script>

        $(document).ready(function () {
            $('#subscribe_submit').click(function (e) {
                e.preventDefault();
                var email = $('#email_subscribe').val();
                if (email == '') {
                    toastr.error('Please Enter Your Email');
                } else {
                    $.ajax({
                        url: "{{ url('/subscribe-us') }}",
                        type: "POST",
                        data: {
                            "email": email,
                            "_token": "{{csrf_token()}}"
                        },
                        success: function ({message, status: code}, status) {
                            if (status === 'success') {
                                if (code == 202) {
                                    toastr.error('You Have Already Subscribed');
                                    return false;
                                }
                                $.ajax({
                                    url: "{{ url('/check-subscribe-mail') }}",
                                    type: "POST",
                                    data: {
                                        "email": email,
                                        "_token": "{{csrf_token()}}"
                                    },
                                    success: function (data) {
                                        toastr.success('You Are Subscribed');
                                    },
                                });
                            }
                        },
                    });
                }
            });
        })
    </script>
</body>

</html>

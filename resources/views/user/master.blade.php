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

    <style>
        .billing-details {
  margin-bottom: 30px;
}

.shiping-details {
  margin-bottom: 30px;
}

.order-details {
  position: relative;
  padding: 0px 30px 30px;
  border-right: 1px solid #E4E7ED;
  border-left: 1px solid #E4E7ED;
  border-bottom: 1px solid #E4E7ED;
}

.order-details:before {
  content: "";
  position: absolute;
  left: -1px;
  right: -1px;
  top: -15px;
  height: 30px;
  border-top: 1px solid #E4E7ED;
  border-left: 1px solid #E4E7ED;
  border-right: 1px solid #E4E7ED;
}

.order-summary {
  margin: 15px 0px;
}

.order-summary .order-col {
  display: table;
  width: 100%;
}

.order-summary .order-col:after {
  content: "";
  display: block;
  clear: both;
}

.order-summary .order-col>div {
  display: table-cell;
  padding: 10px 0px;
}

.order-summary .order-col>div:first-child {
  width: calc(100% - 150px);
}

.order-summary .order-col>div:last-child {
  width: 150px;
  text-align: right;
}

.order-summary .order-col .order-total {
  font-size: 24px;
  color: #D10024;
}

.order-details .payment-method {
  margin: 30px 0px;
}

.order-details .order-submit {
  display: block;
  margin-top: 30px;
}

    </style>
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
      <script>
        $(document).ready(function(){

          $("#billtoship").click(function(){

            if(this.checked){
              $("#ship_name").val($("#bill_name").val());
              $("#ship_email").val($("#bill_email").val());
              $("#ship_phone").val($("#bill_phone").val());
              $("#ship_add").val($("#bill_add").val());
              $("#ship_city").val($("#bill_city").val());
              $("#ship_district").val($("#bill_district").val());
              $("#ship_zip").val($("#bill_zip").val());
            }else{
              $("#ship_name").val('');
              $("#ship_email").val('');
              $("#ship_phone").val('');
              $("#ship_add").val('');
              $("#ship_city").val('');
              $("#ship_district").val('');
              $("#ship_zip").val('');
            }
          });

        });
      </script>
</body>

</html>

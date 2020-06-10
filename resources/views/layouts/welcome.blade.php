<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>
  <link href="img/favicon.png" rel="shortcut icon">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="{{ asset('template') }}/fonts/cloudicon/cloudicon.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
  <link href="{{ asset('template') }}/fonts/fontawesome/css/all.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
  <link href="{{ asset('template') }}/fonts/opensans/opensans.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
  <!-- CSS styles -->
  <link href="{{ asset('template') }}/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('template') }}/css/magnific-popup.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
  <link href="{{ asset('template') }}/css/owl.carousel.min.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
  <link href="{{ asset('template') }}/css/swiper.min.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
  <link href="{{ asset('template') }}/css/animate.min.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">

    <link href="{{ asset('template') }}/css/nouislider.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
    {{-- <link href="{{ asset('template') }}/css/filter.css" rel="stylesheet"> --}}
    <link href="{{ asset('template') }}/css/mixitup.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
    <link href="{{ asset('template') }}/css/slick.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
  <link href="{{ asset('template') }}/css/style.min.css" rel="stylesheet">
  <!-- Custom color styles -->
  <link href="{{ asset('template') }}/css/colors/green.css" rel="stylesheet" title="green" media="none" onload="if(media!='all')media='all'" />
  <link href="{{ asset('template') }}/css/colors/pink.css" rel="stylesheet" title="pink" media="none" onload="if(media!='all')media='all'" />
  <link href="{{ asset('template') }}/css/colors/blue.css" rel="stylesheet" title="blue" media="none" onload="if(media!='all')media='all'" />

</head>

<body>
  <!-- ***** LOADING PAGE ****** -->
  <div id="spinner-area">
    <div class="spinner">
      <div class="double-bounce1"></div>
      <div class="double-bounce2"></div>
      <div class="spinner-txt">กำลังโหลด...</div>
    </div>
  </div>
  <!-- BEGIN: Header-->
    @include('_includes.header.header_welcome')

    @yield('content')

  <!-- BEGIN: Header-->
    @include('_includes.footer.footer_welcome')
  <!-- ***** BUTTON GO TOP ***** -->
  <a href="#0" class="cd-top"> <i class="fas fa-angle-up"></i> </a>
  <!-- Scripts -->
  @yield('scripts')
  <script src="{{ asset('template') }}/js/jquery.min.js"></script>
  <script src="{{ asset('template') }}/js/typed.js"></script>
  <script defer src="{{ asset('template') }}/js/popper.min.js"></script>
  <script defer src="{{ asset('template') }}/js/bootstrap.min.js"></script>
  <script defer src="{{ asset('template') }}/js/jquery.countdown.js"></script>
  <script defer src="{{ asset('template') }}/js/jquery.magnific-popup.min.js"></script>
  <script defer src="{{ asset('template') }}/js/slick.min.js"></script>
  <script defer src="{{ asset('template') }}/js/owl.carousel.min.js"></script>
  <script defer src="{{ asset('template') }}/js/nouislider.js"></script>
  <script defer src="{{ asset('template') }}/js/mixitup.min.js"></script>
  <script defer src="{{ asset('template') }}/js/mixitup.multifilter.min.js"></script>
  {{-- <script defer src="{{ asset('template') }}/js/mixevents.js"></script> --}}
  {{-- <script defer src="{{ asset('template') }}/js/filter.js"></script> --}}
  <script defer src="{{ asset('template') }}/js/isotope.min.js"></script>
  <script defer src="{{ asset('template') }}/js/jquery.scrollme.min.js"></script>
  <script defer src="{{ asset('template') }}/js/swiper.min.js"></script>
  <script async src="{{ asset('template') }}/js/lazysizes.min.js"></script>
  <script src="{{ asset('template') }}/js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  {{-- <script defer src="{{ asset('template') }}/js/variables.js"></script> --}}
 <script defer src="{{ asset('template') }}/js/scripts.js"></script>
  <script>
    var typed3 = new Typed('#typed3', {
      strings: ["Premium hardware.", "Large performance.", "Fully dedicated."],
      typeSpeed: 50,
      backSpeed: 20,
      smartBackspace: true,
      loop: true
    });
  </script>
  <script>
$("#nav-toggle").click(function(){
$(".menu-wrap.mobile, .menu-toggle").toggleClass("active");
});
</script>

<script defer src="{{ asset('template') }}/js/scripts.min.js"></script>
<script src="{{ asset('template') }}/js/gdpr-cookie.js"></script>
  <script>
    $.gdprcookie.init({});
    $(document.body)
    .on("gdpr:show", function() {
    console.log("Cookie dialog is shown");
    })
    .on("gdpr:accept", function() {
    var preferences = $.gdprcookie.preference();
    console.log("Preferences saved:", preferences);
    })
    .on("gdpr:advanced", function() {
    console.log("Advanced button was pressed");
    });
    if ($.gdprcookie.preference("marketing") === true) {
    console.log("This should run because marketing is accepted.");
    }
    </script>


</body>

</html>

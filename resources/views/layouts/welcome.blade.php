<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="full-screen" content="yes">
  <meta name="theme-color" content="#269bef">

  <title>{{ config('app.name', 'Laravel') }}</title>
  <link href="{{ asset('template') }}/img/favicon.png" rel="shortcut icon">

  <link rel="stylesheet" type="text/css" href="{{ asset('web') }}/assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('web') }}/assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('web') }}/assets/fonts/font/flaticon.css">
  <!---------favicon--------------->
  <link rel="icon" type="image/png" href="{{ asset('web') }}/assets/image/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="{{ asset('web') }}/assets/image/favicon-16x16.png" sizes="16x16">
  <!---------favicon--------------->
</head>

<body class="home_page_one">

  <div class="page_wapper">
          <!--Start Preloader-->
          <div class="preloader">
            <div class="preloader_box">
               <div class="loader">
                  <div class="circle item0"></div>
                  <div class="circle item1"></div>
                  <div class="circle item2"></div>
               </div>
            </div>
         </div>
         <!--End Preloader -->
         <!--Header-->
         @include('_includes.header.header_welcome')
         <!--Header-->

        <main class="main-content">

          @yield('content')

          @include('_includes.footer.footer_welcome')

        </main>

      <!--Scroll to top-->
      <a href="#" id="scroll" class="default-bg" style="display: inline;"><span class="fa fa-angle-up"></span></a>
      <!---------mbile-navbar----->
      <div class="bsnav-mobile">
         <div class="bsnav-mobile-overlay"></div>
         <div class="navbar">
            <button class="navbar-toggler toggler-spring mobile-toggler"><span class="fa fa-close"></span></button>
         </div>
      </div>
      <!---------mbile-navbar----->
      <!-- /.side-menu__block -->
      <div class="side-menu__block">
         <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
         </div>
         <!-- /.side-menu__block-overlay -->
         <div class="side-menu__block-inner">
            <div class="row">
               <div class="col-lg-12">
                  <div class="logo_site">
                     <a href="index.html"><img src="{{ asset('web') }}/assets/image/home-1-logo.png" alt="logo" /></a>
                  </div>
                  <div class="side-menu__block-contact">
                     <h2>เข้าสู่ระบบ</h2>
                     <div class="form_outer">
                        {{-- <form>
                          <div class="from_group">
                              <input type="text" name="name" placeholder="Name" />
                           </div> 
                           <div class="from_group">
                              <input type="email" name="email" placeholder="Email" />
                           </div>
                           <div class="from_group">
                              <input type="text" name="phone" placeholder="Phone" />
                           </div> 
                           <div class="from_group">
                              <textarea rows="4" placeholder="Share Your Thoughts"></textarea>
                           </div> 
                           <div class="from_group">
                              <button  class="theme_btn tp_two" type="submit">เข้าสู่ระบบ</button>
                           </div>
                        </form> --}}
                        <form role="form" method="POST" action="{{ url('/login') }}">
                         {{ csrf_field() }}
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control" name="email" placeholder="อีเมล์" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" class="form-control" placeholder="รหัสผ่าน" name="password" required>
                                </div>
                                <div class="form-group">
                                    <a href="{{route('register')}}" class="">สร้างบัญชี </a>
                                    <b> | </b>
                                    <a class="btn btn-link" href="{{ route('password.request') }}"> ลืมรหัสผ่าน ?</a>
                                </div>
                                <div class="from_group">
                                    <button type="submit"  class="theme_btn tp_one"><i class="fas fa-sign-in-alt"></i> ล็อกอิน !</button></li>
                                </div>
                        </form>
                     </div>
                  </div>
                  <!-- /.side-menu__block-contact -->
                  {{-- <div class="side-menu__block-contact">
                     <h3 class="side-menu__block__title">Contact Us</h3>
                     <!-- /.side-menu__block__title -->
                     <ul class="side-menu__block-contact__list">
                        <li class="side-menu__block-contact__list-item">
                           <i class="fa fa-map-marker"></i> Rock St 12, Newyork City, USA
                        </li>
                        <!-- /.side-menu__block-contact__list-item -->
                        <li class="side-menu__block-contact__list-item">
                           <i class="fa fa-phone"></i>
                           <a href="tel:526-236-895-4732">(526) 236-895-4732</a>
                        </li>
                        <!-- /.side-menu__block-contact__list-item -->
                        <li class="side-menu__block-contact__list-item">
                           <i class="fa fa-envelope"></i>
                           <a href="mailto:example@mail.com">example@mail.com</a>
                        </li>
                        <!-- /.side-menu__block-contact__list-item -->
                        <li class="side-menu__block-contact__list-item">
                           <i class="fa fa-clock-o"></i> Week Days: 09.00 to 18.00 Sunday: Closed
                        </li>
                        <!-- /.side-menu__block-contact__list-item -->
                     </ul>
                     <!-- /.side-menu__block-contact__list -->
                  </div> --}}
                  <!-- /.side-menu__block-contact -->
                  <p class="side-menu__block__text site-footer__copy-text"><a href="#">FORT KRIT SIWARA HOSPITAL</a> <i class="fa fa-copyright"></i> 2020 All Right Reserved</p>
               </div>
            </div>
            <!-- /.side-menu__block-inner -->
         </div>
      </div>
      <!-- /.side-menu__block -->
      <!-- /.search-popup -->
      <div class="search-popup">
         <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
         </div>
         <!-- /.search-popup__overlay -->
         <div class="search-popup__inner">
            <form action="#" class="search-popup__form">
               <input type="text" name="search" placeholder="Type here to Search....">
               <button type="submit"><i class="flaticon-magnifying-glass"></i></button>
            </form>
         </div>
         <!-- /.search-popup__inner -->
      </div>
      <!-- /.search-popup -->

   @yield('scripts')

   <script src="{{ asset('web') }}/assets/js/jquery.js"></script>
   <script src="{{ asset('web') }}/assets/js/popper.min.js"></script>
   <script src="{{ asset('web') }}/assets/js/bootstrap.min.js"></script>
   <script src="{{ asset('web') }}/assets/js/bsnav.min.js"></script>
   <script src="{{ asset('web') }}/assets/js/jquery-ui.js"></script>

   <script src="{{ asset('web') }}/assets/js/owl.js"></script>
   <script src="{{ asset('web') }}/assets/js/wow.js"></script>
   <script src="{{ asset('web') }}/assets/js/jquery.fancybox.js"></script>
   <script src="{{ asset('web') }}/assets/js/TweenMax.min.js"></script>
   <script src="{{ asset('web') }}/assets/js/validator.min.js"></script>
   <script src="{{ asset('web') }}/assets/js/appear.js"></script>
   <script src="{{ asset('web') }}/assets/js/moment.js"></script>
   <script src="{{ asset('web') }}/assets/js/jquery.flexslider-min.js"></script>
   <script src="{{ asset('web') }}/assets/js/pagenav.js"></script>
   <script src="{{ asset('web') }}/assets/js/custom.js"></script>


   </body>

</html>

<!doctype html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="apple-touch-icon" href="{{ asset('app-assets') }}/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images') }}/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/components.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/core/colors/palette-gradient.css">

    <!-- END: Page CSS-->

    @yield('styles')

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/style.css">
    <!-- END: Custom CSS-->



    {{-- <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="horizontal-layout horizontal-menu 2-columns navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">
{{-- <body class="horizontal-layout horizontal-menu dark-layout 2-columns  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns" data-layout="dark-layout"> --}}
 <!-- BEGIN: Header-->
 <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-fixed navbar-brand-center">
    <div class="navbar-header d-xl-block d-none">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item"><a class="navbar-brand" href="{{ route('home') }}">
                    <div class="brand-logo"></div>
                </a></li>
        </ul>
    </div>
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                    </ul>

                </div>
                <ul class="nav navbar-nav float-right">
                    {{-- <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
                    </li> --}}
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
                    <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon feather icon-search"></i></a>
                        <div class="search-input">
                            <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                            <input class="input" type="text" placeholder="ค้นหา..." tabindex="-1" data-search="template-list">
                            <div class="search-input-close"><i class="feather icon-x"></i></div>
                            <ul class="search-list search-list-main"></ul>
                        </div>
                    </li>

                    {{-- <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">John Doe</span><span class="user-status">Available</span></div><span><img class="round" src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="page-user-profile.html"><i class="feather icon-user"></i> Edit Profile</a><a class="dropdown-item" href="app-email.html"><i class="feather icon-mail"></i> My Inbox</a><a class="dropdown-item" href="app-todo.html"><i class="feather icon-check-square"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="feather icon-message-square"></i> Chats</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="auth-login.html"><i class="feather icon-power"></i> Logout</a>
                        </div>
                    </li> --}}
                    @if(\Auth::check())
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">{{Auth::user()->title_name->name}}{{ Auth::user()->name }}</span>

                                    <span class="user-status">ออนไลน์</span></div><span><img class="round" src="{{ asset('images') }}/{{ Auth::user()->pic }}" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                {{-- <a class="dropdown-item" href="{{ route('profile.show', Auth::user()->id) }}"><i class="feather icon-user"></i> แก้ไขข้อมูลส่วนตัว</a> --}}
                                <a class="dropdown-item" href="#"><i class="feather icon-user"></i> แก้ไขข้อมูลส่วนตัว</a>
                                {{-- <a class="dropdown-item" href="app-email.html"><i class="feather icon-mail"></i> My Inbox</a>
                                <a class="dropdown-item" href="app-todo.html"><i class="feather icon-check-square"></i> Task</a>
                                <a class="dropdown-item" href="app-chat.html"><i class="feather icon-message-square"></i> Chats</a> --}}
                                <div class="dropdown-divider"></div>
                                     <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="feather icon-power"></i> ออกจากระบบ
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                            </div>
                        </li>
                        @endif
                </ul>
            </div>
        </div>
    </div>
</nav>

<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100 py-50">
            <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span><span>No results found.</span></div>
        </a></li>
</ul>
<!-- END: Header-->

       <!-- BEGIN: Main Menu-->
       <div class="horizontal-menu-wrapper">
        <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-dark navbar-without-dd-arrow navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('home') }}">
                            <div class="brand-logo"></div>
                            <h2 class="brand-text mb-0">KSVR</h2>
                        </a></li>
                    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
                </ul>
            </div>
            <!-- Horizontal menu content-->
            <div class="navbar-container main-menu-content" data-menu="menu-container">
                <!-- include ../../../includes/mixins-->
                <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                    {{-- <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="{{ route('home') }}" data-toggle="dropdown"><i class="feather icon-home"></i><span data-i18n="Dashboard">หน้าหลัก</span></a>
                        <ul class="dropdown-menu">
                            <li {{ Request::is('home/profile*') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('profile.show', Auth::user()->id) }}" data-toggle="dropdown" data-i18n="Profile"><i class="feather icon-user"></i>ข้อมูลส่วนตัว</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="dashboard-ecommerce.html" data-toggle="dropdown" data-i18n="eCommerce"><i class="feather icon-shopping-cart"></i>eCommerce</a>
                            </li>
                        </ul>
                    </li> --}}
                    <li {{ Request::is('home') ? 'class=active' : '' }} data-menu=""><a class="dropdown-item" href="{{ route('home') }}" data-i18n="Dashboard"><i class="feather icon-home"></i>หน้าหลัก</a>
                    </li>


                    <li data-menu=""><a class="nav-link" href="#"><i class="feather icon-help-circle"></i><span data-i18n="Help">ช่วยเหลือ</span></a>

                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!-- END: Main Menu-->


    <!-- BEGIN: Content-->
    @yield('content')
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    @include('_includes.footer.footer_home')
    <!-- END: Footer-->
<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('app-assets') }}/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->



    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets') }}/js/core/app-menu.js"></script>
    <script src="{{ asset('app-assets') }}/js/core/app.js"></script>
    <script src="{{ asset('app-assets') }}/js/scripts/components.js"></script>
    <script src="{{ asset('app-assets') }}/js/scripts/tooltip/tooltip.js"></script>
    <!-- END: Theme JS-->



    @yield('scripts')

</body>
</html>

@extends('layouts.home')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/knowledge-base.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/dashboard-analytics.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/card-analytics.css">
@endsection
@section('content')

<div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
             <div class="content-body">
                <!-- Knowledge base Jumbotron -->
                {{-- <section id="knowledge-base-search">
                    <div class="row">
                        <div class="col-12">
                            <div class="card knowledge-base-bg white">
                                <div class="card-content">
                                    <div class="card-body p-sm-4 p-2">
                                        <h1 class="white">Dedicated Source Used on Website</h1>
                                        <p class="card-text mb-2">
                                            Bonbon sesame snaps lemon drops marshmallow ice cream carrot cake croissant wafer.
                                        </p>
                                        <form>
                                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                                <input type="text" class="form-control form-control-lg" id="searchbar" placeholder="Search Topic or Keyword">
                                                <div class="form-control-position">
                                                    <i class="feather icon-search px-1"></i>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}
                <!-- Knowledge base Jumbotron ends -->
                <section id="dashboard-analytics">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card bg-analytics text-white">
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('app-assets') }}/images/elements/decore-left.png" class="img-left" alt="
            card-img-left">
                                        <img src="{{ asset('app-assets') }}/images/elements/decore-right.png" class="img-right" alt="
            card-img-right">
                                        <div class="avatar avatar-xl bg-primary shadow mt-0">
                                            <div class="avatar-content">
                                                <i class="feather icon-award white font-large-1"></i>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <h1 class="mb-2 text-white">ยินดีต้อนรับ !!!</h1>
                                            <p class="m-auto w-75">ระบบ <strong>โรงพยาบาลค่ายกฤษณ์สีวะรา</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Knowledge base -->
                <section id="knowledge-base-content">
                    <div class="row search-content-info">
                        @if (Auth::user()->hasRole(['superadministrator', 'administrator', 'schedule-stock']))
                        <div class="col-md-4 col-sm-6 col-12 search-content">
                            <a href="{{ route('dashboard_stock') }}">
                            <div class="card">
                                <div class="card-body text-center">

                                        <img src="{{ asset('app-assets') }}/images/pages/graphic-1.png" class="mx-auto mb-2" width="180" alt="knowledge-base-image">
                                        <h4>ระบบบันทึกข้อมูลครุภัณฑ์<br>(Equipment Information)</h4>


                                </div>
                            </div>
                            </a>
                        </div>
                        @endif

                        <div class="col-md-4 col-sm-6 col-12 search-content">
                            @if (Auth::user()->hasRole(['superadministrator', 'administrator']))
                                <a href="{{ route('repair-admin.index') }}">
                            @else
                                <a href="{{ route('repair.index') }}">
                            @endif
                            <div class="card">
                                <div class="card-body text-center">

                                        <img src="{{ asset('app-assets') }}/images/pages/graphic-2.png" class="mx-auto mb-2" width="180" alt="knowledge-base-image">
                                        <h4>ระบบแจ้งดำเนินงาน<br>แผนกศูนย์คอมพิวเตอร์</h4>


                                </div>
                            </div>
                            </a>
                        </div>
                        @if (Auth::user()->hasRole(['superadministrator', 'administrator', 'operating_room']))

                        <div class="col-md-4 col-sm-6 col-12 search-content">
                            <a href="{{ route('check_up.index') }}">
                            <div class="card">
                                <div class="card-body text-center">

                                        <img src="{{ asset('app-assets') }}/images/pages/graphic-3.png" class="mx-auto mb-2" width="180" alt="knowledge-base-image">
                                        <h4>ระบบรายงานตรวจสุขภาพประจำปี<br>(Ksvr Check Up)</h4>


                                </div>
                            </div>
                            </a>
                        </div>

                        @endif
                        {{-- <div class="col-md-4 col-sm-6 col-12 search-content">
                            <div class="card">
                                <div class="card-body text-center">
                                    <a href="#">
                                        <img src="{{ asset('app-assets') }}/images/pages/graphic-4.png" class="mx-auto mb-2" width="180" alt="knowledge-base-image">
                                        <h4>ระบบยืม/คืน อุปกรณ์คอมพิวเตอร์</h4>

                                    </a>
                                </div>
                            </div>
                        </div> --}}

                        @if (Auth::user()->hasRole(['superadministrator', 'administrator', 'clerical', 'tender']))
                            <div class="col-md-4 col-sm-6 col-12 search-content">
                                @if(Auth::user()->hasRole(['superadministrator', 'administrator', 'tender']))
                                    <a href="{{ route('tender.index') }}">
                                @elseif(Auth::user()->hasRole(['superadministrator', 'administrator', 'clerical']))
                                    <a href="{{ route('publicizes.index') }}">
                                @endif
                                <div class="card">
                                    <div class="card-body text-center">

                                            <img src="{{ asset('app-assets') }}/images/pages/graphic-6.png" class="mx-auto mb-2" width="180" alt="knowledge-base-image">
                                            <h4>ระบบเว็บไซต์</h4>
                                            {{-- <small class="text-dark">Dragée jelly beans candy canes pudding cake wafer. Muffin croissant.</small> --}}

                                    </div>
                                </div>
                                </a>
                            </div>
                        @endif
                        @if (Auth::user()->hasRole(['superadministrator', 'administrator', 'Community_Health_Center']))
                        <div class="col-md-4 col-sm-6 col-12 search-content">
                            <a href="{{ route('report_ques_his_covid.index') }}">
                            <div class="card">
                                <div class="card-body text-center">

                                        <img src="{{ asset('app-assets') }}/images/pages/graphic-5.png" class="mx-auto mb-2" width="180" alt="knowledge-base-image">
                                        <h4>Covid-19</h4>


                                </div>
                            </div>
                            </a>
                        </div>
                        @endif
                    </div>

                </section>

                <!-- Knowledge base ends -->

            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets') }}/vendors/js/charts/apexcharts.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/extensions/tether.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/extensions/shepherd.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets') }}/js/scripts/pages/faq-kb.js"></script>
    <!-- END: Page JS-->
@endsection

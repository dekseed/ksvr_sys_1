@extends('layouts.home')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/knowledge-base.css">
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
                <!-- Knowledge base -->
                <section id="knowledge-base-content">
                    <div class="row search-content-info">
                        <div class="col-md-4 col-sm-6 col-12 search-content">
                            <div class="card">
                                <div class="card-body text-center">
                                    <a href="{{ route('dashboard_stock') }}">
                                        <img src="../../../app-assets/images/pages/graphic-1.png" class="mx-auto mb-2" width="180" alt="knowledge-base-image">
                                        <h4>ระบบบันทึกข้อมูลครุภัณฑ์<br>(Equipment Information)</h4>
                                        {{-- <small class="text-dark">Muffin lemon drops chocolate carrot cake chocolate bar sweet roll.</small> --}}
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12 search-content">
                            <div class="card">
                                <div class="card-body text-center">
                                    <a href="#">
                                        <img src="../../../app-assets/images/pages/graphic-2.png" class="mx-auto mb-2" width="180" alt="knowledge-base-image">
                                        <h4>ระบบแจ้งซ่อมอุปกรณ์<br>(Repair)</h4>
                                        {{-- <small class="text-dark">Gingerbread sesame snaps wafer soufflé. Macaroon brownie ice cream</small> --}}
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12 search-content">
                            <div class="card">
                                <div class="card-body text-center">
                                    <a href="#">
                                        <img src="../../../app-assets/images/pages/graphic-3.png" class="mx-auto mb-2" width="180" alt="knowledge-base-image">
                                        <h4>ระบบรายงานตรวจสุขภาพประจำปี<br>(Ksvr Check Up)</h4>
                                        {{-- <small class="text-dark">cotton candy caramels danish chocolate cake pie candy. Lemon drops tart.</small> --}}
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-4 col-sm-6 col-12 search-content">
                            <div class="card">
                                <div class="card-body text-center">
                                    <a href="page-kb-category.html">
                                        <img src="../../../app-assets/images/pages/graphic-4.png" class="mx-auto mb-2" width="180" alt="knowledge-base-image">
                                        <h4>PERSONALIZATION</h4>
                                        <small class="text-dark">Pudding oat cake carrot cake lemon drops gummies marshmallow.</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12 search-content">
                            <div class="card">
                                <div class="card-body text-center">
                                    <a href="page-kb-category.html">
                                        <img src="../../../app-assets/images/pages/graphic-5.png" class="mx-auto mb-2" width="180" alt="knowledge-base-image">
                                        <h4>EMAIL MARKETING</h4>
                                        <small class="text-dark">Gummi bears pudding icing sweet caramels chocolate.Muffin croissant</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12 search-content">
                            <div class="card">
                                <div class="card-body text-center">
                                    <a href="page-kb-category.html">
                                        <img src="../../../app-assets/images/pages/graphic-6.png" class="mx-auto mb-2" width="180" alt="knowledge-base-image">
                                        <h4>DEMAND GENERATION</h4>
                                        <small class="text-dark">Dragée jelly beans candy canes pudding cake wafer. Muffin croissant.</small>
                                    </a>
                                </div>
                            </div>
                        </div> --}}
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

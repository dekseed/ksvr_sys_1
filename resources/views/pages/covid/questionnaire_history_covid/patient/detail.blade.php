@extends('layouts.covid')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/forms/wizard.css">
@endsection
@section('content')

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header text-center">
                <div class="col-md-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title mb-0">รายละเอียดการเดินทาง (เขียนแจกแจงรายวันโดยละเอียด)</h2>
                            {{-- <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Forms</a>
                                    </li>
                                    <li class="breadcrumb-item active">Form Wizard
                                    </li>
                                </ol>
                            </div> --}}
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">


            </div>
        </div>
    </div>

@endsection
@section('scripts')


       <!-- BEGIN: Page Vendor JS-->
       <script src="{{ asset('app-assets') }}/vendors/js/ui/jquery.sticky.js"></script>
       <script src="{{ asset('app-assets') }}/vendors/js/extensions/jquery.steps.min.js"></script>
       <script src="{{ asset('app-assets') }}/vendors/js/forms/validation/jquery.validate.min.js"></script>
       <script src="{{ asset('app-assets') }}/vendors/js/forms/select/select2.full.min.js"></script>
       <!-- END: Page Vendor JS-->

       <!-- BEGIN: Page JS-->
       <script src="{{ asset('app-assets') }}/js/scripts/forms/wizard-steps.js"></script>
       <script src="{{ asset('app-assets') }}/js/scripts/forms/select/form-select2.js"></script>

@endsection

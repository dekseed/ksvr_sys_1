@extends('layouts.covid')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/forms/wizard.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/forms/validation/form-validation.css">



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
                            <h2 class="content-header-title mb-0">แบบสำรวจการรับวัคซีนโควิด-19 <br>โรงพยาบาลค่ายกฤษณ์สีวะรา</h2>

                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row justify-content-md-center">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h1 class="text-center mb-1" style="color: red;">ส่งข้อมูลเรียบร้อย !!!</h1>
                                                </div>
                                                <div class="col-md-12">
                                                    <hr class="my-1 mb-1">
                                                </div>
                                                <div class="col-md-12 ">

                                                    <h1 class="text-center mt-5 mb-5">ขอบคุณที่ให้ความร่วมมือ</h1>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
@section('scripts')
<script src="{{ asset('app-assets') }}/vendors/js/pickers/pickadate/picker.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/pickers/pickadate/picker.date.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/pickers/pickadate/picker.time.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/pickers/pickadate/legacy.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/forms/select/select2.full.min.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/extensions/jquery.steps.min.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/forms/validation/jquery.validate.min.js"></script>

<script src="{{ asset('app-assets') }}/js/scripts/forms/wizard-steps.js"></script>
<script src="{{ asset('app-assets') }}/js/scripts/forms/select/form-select2.js"></script>
<!-- BEGIN: Page JS-->
<script src="{{ asset('app-assets') }}/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>
<!-- END: Page JS-->
<!-- BEGIN: Page JS-->

@endsection

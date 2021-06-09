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
                            <h2 class="content-header-title mb-0">แบบซักถามประวัติกรณีเดินทางมาจากจังหวัดที่มีรายงานการระบาดของโรคติดเชื้อไวรัสโคโรนา 2019 <br>
                                และกรณีที่ลากลับภูมิลำเนา หรือไปราชการ หรือฝึกนอกที่ตั้งข้ามจังหวัด<br>
                                โรงพยาบาลค่ายกฤษณ์สีวะรา</h2>
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
                <div class="content-body">
                    <!-- Form wizard with step validation section start -->
                    <section id="validation">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    {{-- <div class="card-header">
                                        <h4 class="card-title">Validation Example</h4>
                                    </div> --}}
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="container">
                                                <div class="row justify-content-md-center">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            @foreach ($report1 as $index => $cate_tender)
                                                                <h1 class="text-center mb-2 mt-2" style="color:{{ $cate_tender->surveillance_area_covid->color }};">" {{ $cate_tender->surveillance_area_covid->name_rating }} "</h1>
                                                                <h1 class="text-center mb-2 mt-2" style="color:{{ $cate_tender->surveillance_area_covid->color }};">{{ $cate_tender->surveillance_area_covid->detail }}</h1>
                                                            @endforeach
                                                            <h1 class="text-center mb-1" style="color: red;">ส่งข้อมูลเรียบร้อย !!!</h1>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <hr class="my-1 mb-1">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <h1 class="text-center mt-1">ขอบคุณที่ให้ความร่วมมือ</h1>
                                                            <br><br><br><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


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

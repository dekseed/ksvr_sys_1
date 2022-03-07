@extends('layouts.home')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/select/select2.min.css">

<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/invoice.css">

<style>
    table,
    th,
    thead,
    tbody,
    td {
        border: 1px solid black;
    }
</style>
@endsection
@section('content')

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header text-center">
            <h2 class="content-header-title mb-0">แบบสอบสวนผู้ป่วยเชื้อไวรัสโคโรน่า 2019</h2>
            <div class="col-md-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0"><i class="feather icon-clipboard"></i> ระบบแบบสอบสวนผู้ป่วยติดเชื้อ Covid 19</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">หน้าหลัก</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('inquiry-form-Covid.index') }}">ระบบแบบสอบสวนผู้ป่วยติดเชื้อ Covid 19</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('inquiry-form-Covid.index') }}">ระบบคลินิกผู้ป่วยติดเชื้อ Covid 19</a>
                                </li>
                                <li class="breadcrumb-item active">Print
                                </li>
                            </ol>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="content-body">
        <!-- invoice functionality start -->
        <section class="invoice-print mb-1">
            <div class="row">

                <fieldset class="col-12 col-md-5 mb-1 mb-md-0">
                    {{-- <div class="input-group">
                                <input type="text" class="form-control" placeholder="Email" aria-describedby="button-addon2">
                                <div class="input-group-append" id="button-addon2">
                                    <button class="btn btn-outline-primary" type="button">Send Invoice</button>
                                </div>
                            </div> --}}
                </fieldset>
                <div class="col-12 col-md-7 d-flex flex-column flex-md-row justify-content-end">
                    <a href="https://www.ksvrhospital.go.th/ksvr/users/report_ques_his_covid" class="btn btn-outline-warning mr-1 waves-effect waves-light">
                        <i class="fa fa-arrow-circle-left m-r-10"></i> กลับ</a>
                    <button class="btn btn-primary btn-print mb-1 mb-md-0"> <i class="feather icon-file-text"></i> Print</button>
                </div>
            </div>
        </section>

        <section class="card invoice-page">
            <div id="invoice-template" class="card-body">

                <!-- Invoice Company Details -->
                <div id="invoice-company-details" class="row">

                    <div class="col-12 text-center pt-1 mb-1">
                        <h4></h4>
                        {{-- <div class="invoice-details mt-2">
                                    <h6>INVOICE NO.</h6>
                                    <p>001/2019</p>
                                    <h6 class="mt-2">INVOICE DATE</h6>
                                    <p>10 Dec 2018</p>
                                </div> --}}
                    </div>
                </div>
            </div>
        </section>
        <div id="invoice-items-details" class="pt-1 invoice-items-table">

        <section class="card invoice-page">
        <div class="text-center">
                <h4> <strong>Code ............................................... </strong> <strong>แบบสอบสวนผู้ป่วยเชื้อไวรัสโคโรน่า 2019 </strong> <strong>Date</strong> ...............</h4>

                <div class="table-responsive col-12">
                    <table style="outline: 1.5px solid black;" class="table" width="100%">
                    </table>
                </div>    
                <div class="" >
                    <h4 class="text-left"><strong>1.ข้อมูลทั่วไป</strong><strong>เลขบัตรประชาชน...................................</strong></h4>
                </div>

                <div class="text-left" >
                    <h4>ชื่อ-นามสกุล......................................................
                    <bold>เลขบัตรประชาชน......................................</bold></h4>

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
            <!-- END: Page Vendor JS-->

            <!-- BEGIN: Page JS-->
            <script src="{{ asset('app-assets') }}/js/scripts/pages/invoice.js"></script>

            @endsection
<h6>ประวัติผู้ป่วยติดเชื้อ Covid 2019</h6>

@extends('layouts.home')

@section('styles')
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/tables/datatable/datatables.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/file-uploaders/dropzone.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css">
<!-- END: Vendor CSS-->

<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/file-uploaders/dropzone.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/data-list-view.css">
<!-- END: Page CSS-->

<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/data-list-view.css">

@endsection

@section('content')
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0"><i class="feather icon-clipboard"></i> ระบบแบบสอบสวนผู้ป่วยติดเชื้อ Covid 19</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">หน้าหลัก</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('InquiryFormCovid.index') }}">ระบบแบบสอบสวนผู้ป่วยติดเชื้อ Covid 19</a>
                                </li>
                                {{-- <li class="breadcrumb-item"><a href="{{ route('inquiry-form-Covid.index') }}">ระบบคลินิกผู้ป่วยติดเชื้อ Covid 19</a>
                                </li> --}}
                                <li class="breadcrumb-item active">ข้อมูลรายการผู้ป่วย
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section id="multiple-column-form">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card border-success p-1">
                            <div class="card-header">
                                <h3 class="text-center mb-2">
                                    <i class="feather icon-clipboard"></i>
                                    ข้อมูลรายการผู้ป่วยติดเชื้อ (สำหรับเจ้าหน้าที่)
                                </h3>
                            </div>
                            <form id="steps-validation" action="{{ route('clinic_covid.store') }}" class="steps-validation wizard-circle" method="POST">
                                    {{ csrf_field() }}
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="card border-success p-1">
                                                <div class="row">
                                                    <div class="col-md-12">

                                                        <div class="form-body mt-1 mb-1">
                                                            <h4 class="card-title"><i class="fa fa-comments-o"></i> ข้อมูลทั่วไป</h4>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-3 col-12 mb-1">
                                                                <fieldset>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">หมายเลขบัตรประชาชน</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Addon to Left" value="{{$data->user->number_id}}" aria-describedby="basic-addon1" disabled>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-3 col-12 mb-1">
                                                                <fieldset>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">ชื่อ - นามสกุล</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Addon to Left" value="{{$data->user->title_name->name}}{{$data->user->first_name}} {{$data->user->last_name}}" aria-describedby="basic-addon1" disabled>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-2 col-12 mb-1">
                                                                <fieldset>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">เพศ</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Addon to Left" value="@if($data->user->sex == '0') ชาย @else หญฺิง @endif" aria-describedby="basic-addon1" disabled>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-2 col-12 mb-1">
                                                                <fieldset>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">อายุ</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Addon to Left" value="{{$data->user->age}}" aria-describedby="basic-addon1" disabled>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-2 col-12 mb-1">
                                                                <fieldset>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">สัญชาติ</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Addon to Left" value="{{$data->user->nation}}" aria-describedby="basic-addon1" disabled>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                        <div class="container-sm">
                                                            <div class="row">
                                                                <div class="input-group col-sm">
                                                                    <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon3">สัญชาติ</span>
                                                                    <input type="text" class="form-control" style="color:rgb(0, 0, 0);background-color:rgb(255,250,250)" value="{{$data->user->nation}}" disabled name="nation" placeholder="สัญชาติ" id="basic-url" aria-describedby="basic-addon3">
                                                                </div>
                                                                <div class="input-group col-sm">
                                                                    <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon3">เบอร์โทรศัพท์ที่ติดต่อได้</span>
                                                                    <input type="text" class="form-control" style="color:rgb(0, 0, 0);background-color:rgb(255,250,250)" value="0{{$data->user->tel}}" disabled name="tel" placeholder="เบอร์โทรศัพท์ที่ติดต่อได้" id="basic-url" aria-describedby="basic-addon3">
                                                                </div>
                                                                <div class="input-group col-sm">
                                                                    <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon3">เบอร์โทรศัพท์ที่ใช้ลง แอปพลิเคชัน "หมอชนะ"</span>
                                                                    <input type="text" class="form-control" style="color:rgb(0, 0, 0);background-color:rgb(255,250,250)" value="0{{$data->user->telapp}}" disabled name="telapp" placeholder="เบอร์โทรศัพท์ที่ใช้ลงแอพ" id="basic-url" aria-describedby="basic-addon3">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <hr style="height:1px;border-width:0;color:rgb(3, 0, 26);background-color:rgb(3, 0, 26)">

                                                        <div class="form-body mt-1 mb-1">
                                                            <h4 class="card-title"><i class="feather icon-clipboard"></i> ข้อมูลการตรวจ</h4>
                                                        </div>
                                                        <div class="container-sm">
                                                            <div class="row">
                                                                <div class="col-4 text-right">
                                                                    <span>วันที่เริ่มป่วย (ว/ด/ป)</span>
                                                                    <input type="date" id="first-name-icon" class="form-control" name="datesick" placeholder="วันที่เริ่มป่วย">
                                                                </div>
                                                                <div class="col-4 text-right">
                                                                    <span>ชื่อสถานพยาบาลที่เข้ารับการรักษาครั้งแรก</span>
                                                                    <input type="text" id="first-name-icon" class="form-control" name="namehosbe" placeholder="ชื่อสถานพยาบาล">
                                                                </div>
                                                                <div class="col-3">
                                                                    <span>จังหวัด</span>
                                                                    <input type="text" id="first-name-icon" class="form-control" name="district_first" placeholder="จังหวัด">
                                                                </div>
                                                            </div>
                                                            <hr style="height: 0px;px;border-width:0;color:rgb(0, 0, 0);background-color:rgb(255, 255, 255)">
                                                        </div>
                                                        <div class="container-left">
                                                            <div class="row">
                                                                <div class="col-4 text-right">
                                                                    <span>วันที่เข้ารับการรักษาครั้งแรก (ว/ด/ป)</span>
                                                                    <input type="date" id="first-name-icon" class="form-control" name="first" placeholder="วันที่เข้ารับการรักษาครั้งแรก">
                                                                </div>
                                                                <div class="col-4 text-right">
                                                                    <span>ชื่อสถานพยาบาลที่เข้ารับการรักษาในปัจจุบัน</span>
                                                                    <input type="text" id="first-name-icon" class="form-control" name="namehosup" placeholder="ชื่อสถานพยาบาล">
                                                                </div>
                                                                <div class="col-4 text-right">
                                                                    <span>จังหวัด</span>
                                                                    <input type="text" id="first-name-icon" class="form-control" name="district" placeholder="จังหวัด">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="height:1px;border-width:0;color:rgb(3, 0, 26);background-color:rgb(3, 0, 26)">

                                                        <div class="form-body">
                                                            <h4 class="card-title"><i class="feather icon-clipboard"></i> อาการและอาการแสดง ในวันที่พบผู้ป่วย</h4>
                                                        </div>
                                                        <div class="container-sm">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <ul class="list-unstyled mb-0">
                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="vs-radio-con">
                                                                                    <input type="radio" name="fever" value="0">
                                                                                    <span class="vs-radio">
                                                                                        <span class="vs-radio--border"></span>
                                                                                        <span class="vs-radio--circle"></span>
                                                                                    </span>
                                                                                    <span class="">ไม่มีไข้</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="vs-radio-con vs-radio-success">
                                                                                    <input type="radio" name="fever" value="1">
                                                                                    <span class="vs-radio">
                                                                                        <span class="vs-radio--border"></span>
                                                                                        <span class="vs-radio--circle"></span>
                                                                                    </span>
                                                                                    <span class="">มีไข้</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="col-3 text-right ">
                                                                        <div>
                                                                            <span>อุณหภูมิแรกรับ
                                                                                <input name="fever_degree" placeholder="อุณหภูมิแรกรับ">
                                                                            </span><span> °C</span>
                                                                        </div>

                                                                        <hr style="height:1px;border-width:0;color:rgb(0, 0, 0);background-color:rgb(255, 255, 255)">

                                                                        <div>
                                                                            <span> O₂ Sat
                                                                                <input name="fever_oxygen" placeholder="ค่า O₂ Sat">
                                                                            </span><span> %</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="ventilator"  value="0" id="flexCheckDefault">
                                                                        <span class="mr-1">ใส่เครื่องช่วยหายใจ</span>
                                                                    </div>

                                                                    <div class="form-check">
                                                                        <input class="form-check-input" checked="Checked" type="checkbox" name="mascle" Disabled value="1" id="flexCheckDefault">
                                                                        <span class="mr-1">ปวดกล้ามเนื้อ</span>
                                                                    </div>

                                                                    <div class="form-check">
                                                                        <input class="form-check-input" checked="Checked" type="checkbox"  name="breathe" value="1" id="flexCheckDefault">
                                                                        <span class="mr-1">หายใจลำบาก</span>
                                                                    </div>

                                                                    <div class="form-check">
                                                                        <input class="form-check-input" checked="Checked" type="checkbox"  name="breathe" value="1" id="flexCheckDefault">
                                                                        <span class="mr-1">จมูกไม่ได้กลิ่น</span>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" checked="Checked" type="checkbox"  name="rash" value="1" id="flexCheckDefault">
                                                                        <span>ผื่น
                                                                            <span>ตำแหน่ง
                                                                        </span>
                                                                        <input class="mx-2" name="rash_details" placeholder="ไม่มีข้อมูล">
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="cough" value="1" id="flexCheckDefault">
                                                                        <span class="mr-1">ไอ</span>
                                                                    </div>

                                                                    <div class="form-check">
                                                                        <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="runny" value="1" id="flexCheckDefault">
                                                                        <span class="mr-1">มีน้ำมูก</span>
                                                                    </div>

                                                                    <div class="form-check">
                                                                        <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="headache" value="1" id="flexCheckDefault">
                                                                        <span class="mr-1">ปวดศรีษะ</span>
                                                                    </div>

                                                                    <div class="form-check">
                                                                        <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="tongue" value="1" id="flexCheckDefault">
                                                                        <span class="mr-1">ลิ้นไม่รับรส</span>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="other_fisrt" value="1" id="flexCheckDefault">
                                                                        <span>อื่นๆ
                                                                            <span>รายละเอียด
                                                                        </span>
                                                                        <input class="mx-2" name="other_details_fisrt" placeholder="ไม่มีข้อมูล">
                                                                        </span>
                                                                    </div>
                                                            </div>


                                                                                                    <div class="col-sm">

                                                                                                            <div class="form-check">
                                                                                                                <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="neck" value="1" id="flexCheckDefault">
                                                                                                                <span class="mr-1">เจ็บคอ</span>
                                                                                                            </div>

                                                                                                            <div class="form-check">
                                                                                                                <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="phlegm" value="1" id="flexCheckDefault">
                                                                                                                <span class="mr-1">มีเสมหะ</span>
                                                                                                            </div>

                                                                                                            <div class="form-check">
                                                                                                                <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="liquid" value="1" id="flexCheckDefault">
                                                                                                                <span class="mr-1">ถ่ายเหลว</span>
                                                                                                            </div>

                                                                                                            <div class="form-check">
                                                                                                                <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="eye" value="1" id="flexCheckDefault">
                                                                                                                <span class="mr-1">ตาแดง</span>
                                                                                                            </div>

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <hr style="height:1px;border-width:0;color:rgb(3, 0, 26);background-color:rgb(3, 0, 26)">

                                                                                            <div class="container-left">
                                                                                                <div class="row">
                                                                                                    <div class="col-1"></div>
                                                                                                    <h6><strong>เอกซเรย์ปอด (ครั้งแรก)</strong></h6>


                                                                                                        <div class="col-1">
                                                                                                            <div class="form-check">
                                                                                                                <input class="form-check-input" type="checkbox" checked="Checked" Disabled value="0" id="flexCheckDefault">
                                                                                                                <span class="mr-1">ทำ</span>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="col-1">
                                                                                                            <div class="form-check">
                                                                                                                <input class="form-check-input" type="checkbox" Disabled value="1" id="flexCheckDefault">
                                                                                                                <span class="mr-1">ไม่ได้ทำ</span>
                                                                                                            </div>
                                                                                                        </div>



                                                                                                    <div class="col-3">
                                                                                                        <span>เมื่อวันที่</span>
                                                                                                        <input type="date" id="first-name-icon" class="form-control-plaintext-sm" name="date_xrey" placeholder="วันที่">
                                                                                                    </div>
                                                                                                    <div class="col-3">
                                                                                                        <span>ระบุผล</span>
                                                                                                        <input type="text" id="first-name-icon" class="form-control-plaintext-auto" name="result_xrey" placeholder="ระบุผล">
                                                                                                    </div>
                                                                                                </div>

                                                                                                <hr style="height: 0px; border-width:0;color:rgb(0, 0, 0);background-color:rgb(255, 255, 255)">
                                                                                                <div class="row">
                                                                                                    <div class="col-1"></div>
                                                                                                    <h6><strong>CBC (ครั้งแรก)</strong></h6>

                                                                                                    <div class="col-2">
                                                                                                        <span>วันที่</span>
                                                                                                        <input type="date" id="first-name-icon" class="form-control-plaintext-sm" name="date_cbc" placeholder="วันที่ CBC">
                                                                                                    </div>
                                                                                                    <div class="col-3">
                                                                                                        <span>ผล Hb</span>
                                                                                                        <input type="text" id="first-name-icon" class="form-control-plaintext-sm"  name="hb" placeholder="ค่า HB">
                                                                                                        <span>g/dL</span>
                                                                                                    </div>
                                                                                                    <div class="col-2.5">
                                                                                                        <span>Hct</span>
                                                                                                        <input type="text" id="first-name-icon" class="form-control-plaintext-sm"  name="htc" placeholder="ค่า HTC">
                                                                                                        <span>%</span>
                                                                                                    </div>
                                                                                                    <div class="col-3">
                                                                                                        <span>Platelet count</span>
                                                                                                        <input type="text" id="first-name-icon" class="form-control-plaintext-auto" name="platelet" placeholder="Platelet count">
                                                                                                        <span>x10³</span>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <hr style="height: 0px;border-width:0;color:rgb(0, 0, 0);background-color:rgb(255, 255, 255)">

                                                                                                <div class="row">
                                                                                                    <div class="col-1"></div>

                                                                                                    <div class="col-2">
                                                                                                        <span>VBC</span>
                                                                                                        <input type="text" id="first-name-icon" class="form-control-plaintext-auto"  name="wbc" placeholder="ค่า VBC">
                                                                                                    </div>
                                                                                                    <div class="col-2">
                                                                                                        <span>(N</span>
                                                                                                        <input type="text" id="first-name-icon" class="form-control-plaintext-sm"  name="n" placeholder="ค่า N">
                                                                                                        <span>%</span>
                                                                                                    </div>
                                                                                                    <div class="col-2">
                                                                                                        <span>L</span>
                                                                                                        <input type="text" id="first-name-icon" class="form-control-plaintext-sm"  name="l" placeholder="ค่า L">
                                                                                                        <span>%</span>
                                                                                                    </div>
                                                                                                    <div class="col-2.5">
                                                                                                        <span>Atyp lymph</span>
                                                                                                        <input type="text" id="first-name-icon" class="form-control-plaintext-auto"  name="atyp" placeholder="ค่า ATYP">
                                                                                                        <span>%</span>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <hr style="height: 0px;border-width:0;color:rgb(0, 0, 0);background-color:rgb(255, 255, 255)">

                                                                                                <div class="row">
                                                                                                        <div class="col-1"></div>


                                                                                                        <div class="col-2 mx-1">
                                                                                                            <span>Mono</span>
                                                                                                            <input type="text" id="first-name-icon" class="form-control-plaintext-auto"  name="mono" placeholder="ค่า MONO">
                                                                                                        </div>

                                                                                                        <div class="col-3 mx-1">
                                                                                                            <span>อื่นๆ</span>
                                                                                                            <input type="text" id="first-name-icon" class="form-control-plaintext-auto"  name="other_details_cbc" placeholder="รายละเอียดอื่นๆ">
                                                                                                            <span>)</span>
                                                                                                        </div>
                                                                                                </div>

                                                                                            </div>
                                                                                            <div>
                                                                                                <hr style="height: 0px; border-width:0;color:rgb(0, 0, 0);background-color:rgb(255, 255, 255)">
                                                                                                <div class="row">
                                                                                                    <div class="col-1"></div>
                                                                                                    <h6><strong>ผลตรวจ influenza test</strong></h6>

                                                                                                    <div class="col-3">
                                                                                                        <span>วิธีการตรวจ</span>
                                                                                                        <input type="text" id="first-name-icon" class="form-control-plaintext-sm"  name="type_check_covid_id" placeholder="วิธีการตรวจ">
                                                                                                    </div>


                                                                                                            <div class="col-1.5">
                                                                                                                <div class="form-check">
                                                                                                                    <input class="form-check-input" checked="Checked" type="checkbox"   name="nagative" value="1" id="flexCheckDefault">
                                                                                                                    <span class="mr-1">Negative</span>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                            <div class="col-1">
                                                                                                                <div class="form-check">
                                                                                                                    <input class="form-check-input" checked="Checked" type="checkbox"  name="positive" value="1" id="flexCheckDefault">
                                                                                                                    <span class="mr-1">Positive</span>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                            <div class="col-1">
                                                                                                                <div class="form-check">
                                                                                                                    <input class="form-check-input" checked="Checked" type="checkbox"  name="flua" value="1" id="flexCheckDefault">
                                                                                                                    <span class="mr-1">Flu A</span>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                            <div class="col-1">
                                                                                                                <div class="form-check">
                                                                                                                    <input class="form-check-input" checked="Checked" type="checkbox"  name="flub" value="1" id="flexCheckDefault">
                                                                                                                    <span class="mr-1">Flu B</span>
                                                                                                                </div>
                                                                                                            </div>


                                                                                                </div>
                                                                                            </div>

                                                                                            <hr style="height:1px;border-width:0;color:rgb(0, 0, 0);background-color:rgb(255, 255, 255)">

                                                                                            <h4 class="text-left mb-1">
                                                                                                <i class="feather icon-clipboard"></i>
                                                                                                ผลการตรวจ SARS-CoV-2 PCR
                                                                                            </h4>
                                                                                            <hr style="height:1px;border-width:0;color:rgb(3, 0, 26);background-color:rgb(3, 0, 26)">

                                                                                            <div class="table-responsive">
                                                                                                <table class="table table-hover-animation table-striped zero-configuration text-center">
                                                                                                    <thead>
                                                                                                        <tr>
                                                                                                            <th class="col-1 text-center">ครั้งที่</th>
                                                                                                            <th class="text-center">วันที่เก็บ</th>
                                                                                                            <th class="text-center">ชนิดตัวอย่าง</th>
                                                                                                            <th class="text-center">สถานที่ส่งตรวจ</th>
                                                                                                            <th class="text-center">ผลตรวจ</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        {{-- @foreach ($data as $id)
                                                                                                        <tr>
                                                                                                            <td>{{$data->cli_cov_inquiries->pcr_test_inquiries->number}}</td>
                                                                                                            <td>{{$data->cli_cov_inquiries->pcr_test_inquiries->date}}</td>
                                                                                                            <td>{{$data->cli_cov_inquiries->pcr_test_inquiries->example}}</td>
                                                                                                            <td>{{$data->cli_cov_inquiries->pcr_test_inquiries->location}}</td>
                                                                                                            <td>
                                                                                                                @if (is_null($data->cli_cov_inquiries->pcr_test_inquiries->detected))
                                                                                                                <input class="form-check-input" type="checkbox" name="detected_pcr" value="{{$data->cli_cov_inquiries->pcr_test_inquiries->detected}}" disabled id="flexCheckDefault">
                                                                                                                <span >Detected</span>
                                                                                                                <span class="mx-1"></span>
                                                                                                                <input class="form-check-input" type="checkbox" name="n_detected_pcr" value="{{$data->cli_cov_inquiries->pcr_test_inquiries->n_detected}}" disabled id="flexCheckDefault">
                                                                                                                <span>Not Detected</span>

                                                                                                                @elseif ($data->cli_cov_inquiries->pcr_test_inquiries->detected == '0')
                                                                                                                <input class="form-check-input" type="checkbox" name="detected_pcr" value="{{$data->cli_cov_inquiries->pcr_test_inquiries->detected}}" disabled id="flexCheckDefault">
                                                                                                                <span >Detected</span>
                                                                                                                <span class="mx-1"></span>
                                                                                                                <input class="form-check-input" type="checkbox" name="n_detected_pcr" checked='checked' value="{{$data->cli_cov_inquiries->pcr_test_inquiries->n_detected}}" disabled id="flexCheckDefault">
                                                                                                                <span>Not Detected</span>

                                                                                                                @else
                                                                                                                <input class="form-check-input" type="checkbox" name="detected_pcr" checked='checked' value="{{$data->cli_cov_inquiries->pcr_test_inquiries->detected}}" disabled id="flexCheckDefault">
                                                                                                                <span >Detected</span>
                                                                                                                <span class="mx-1"></span>
                                                                                                                <input class="form-check-input" type="checkbox" name="n_detected_pcr" value="{{$data->cli_cov_inquiries->pcr_test_inquiries->n_detected}}" disabled id="flexCheckDefault">
                                                                                                                <span >Not Detected</span>

                                                                                                                @endif
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        @endforeach --}}
                                                                                                    </tbody>

                                                                                                    <tfoot>
                                                                                                        <tr>
                                                                                                            <th class="col-1 text-center">ครั้งที่</th>
                                                                                                            <th class="text-center">วันที่เก็บ</th>
                                                                                                            <th class="text-center">ชนิดตัวอย่าง</th>
                                                                                                            <th class="text-center">สถานที่ส่งตรวจ</th>
                                                                                                            <th class="text-center">ผลตรวจ</th>
                                                                                                        </tr>
                                                                                                    </tfoot>
                                                                                                </table>
                                                                                            </div>

                                                                                            <hr style="height:1px;border-width:0;color:rgb(0, 0, 0);background-color:rgb(255, 255, 255)">

                                                                                            <h4 class="text-left mb-1">
                                                                                                <i class="feather icon-clipboard"></i>
                                                                                                ผลการตรวจ SARS-CoV-2 Antibody
                                                                                            </h4>
                                                                                            <hr style="height:1px;border-width:0;color:rgb(3, 0, 26);background-color:rgb(3, 0, 26)">

                                                                                            <div class="table-responsive">
                                                                                                <table class="table table-hover-animation table-striped zero-configuration text-center">
                                                                                                    <thead>
                                                                                                        <tr>
                                                                                                            <th class="col-1 text-center">ครั้งที่</th>
                                                                                                            <th class="text-center">วันที่เก็บ</th>
                                                                                                            <th class="text-center">ชนิดตัวอย่าง</th>
                                                                                                            <th class="text-center">สถานที่ส่งตรวจ</th>
                                                                                                            <th class="text-center">ผลตรวจ</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        {{-- @foreach ($data as $id)
                                                                                                        <tr>
                                                                                                            <td>{{$data->cli_cov_inquiries->anti_in_inquiries->number}}</td>
                                                                                                            <td>{{$data->cli_cov_inquiries->anti_in_inquiries->date}}</td>
                                                                                                            <td>{{$data->cli_cov_inquiries->anti_in_inquiries->example}}</td>
                                                                                                            <td>{{$data->cli_cov_inquiries->anti_in_inquiries->location}}</td>
                                                                                                            <td>{{$data->cli_cov_inquiries->anti_in_inquiries->result}}</td>

                                                                                                            <td>

                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        @endforeach --}}
                                                                                                    </tbody>

                                                                                                    <tfoot>
                                                                                                        <tr>
                                                                                                            <th class="col-1 text-center">ครั้งที่</th>
                                                                                                            <th class="text-center">วันที่เก็บ</th>
                                                                                                            <th class="text-center">ชนิดตัวอย่าง</th>
                                                                                                            <th class="text-center">สถานที่ส่งตรวจ</th>
                                                                                                            <th class="text-center">ผลตรวจ</th>
                                                                                                        </tr>
                                                                                                    </tfoot>
                                                                                                </table>
                                                                                            </div>
                                                                                            <hr style="height:1px;border-width:0;color:rgb(3, 0, 26);background-color:rgb(3, 0, 26)">

                                                                                            <div class="container">
                                                                                                <div class="row">
                                                                                                    <h6><strong class="text-left">ประเภทผู้ป่วย</strong></h6>
                                                                                                    <div class="col-2 text-right"></div>


                                                                                                            <div class="col-1.5">
                                                                                                                <div class="form-check">
                                                                                                                    <input class="form-check-input" type="checkbox" Disabled name="patient" value="0" id="flexCheckDefault">
                                                                                                                    <span class="mr-1">ผู้ป่วยนอก</span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-1.5">
                                                                                                                <div class="form-check">
                                                                                                                    <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="patient" value="1" id="flexCheckDefault">
                                                                                                                    <span class="mr-1">ผู้ป่วยใน</span>
                                                                                                                </div>
                                                                                                            </div>


                                                                                                    <div class="col-2.5">
                                                                                                        <span class="ml-2">admit วันที่</span>
                                                                                                        <input type="date" id="first-name-icon" class="form-control-plaintext-sm" name="date_admit" placeholder="วันที่">
                                                                                                    </div>
                                                                                                    <div class="col-2.5">
                                                                                                        <span class="ml-4">การวินิจฉัยเบื้องต้น</span>
                                                                                                        <input type="text" id="first-name-icon" class="form-control-plaintext-auto" name="diagnoes_admit" placeholder="ผลวินิจฉัยเบื้องต้น">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <hr style="height:0px;border-width:0;color:rgb(0, 0, 0);background-color:rgb(255, 255, 255)">

                                                                                                <div class="row">
                                                                                                    <h6><strong class="text-right">การให้ยารักษาโรคติดเชื้อไวรัสโคโรน่า 2019</strong></h6>
                                                                                                    <div class="col-0.5"></div>


                                                                                                            <div class="ml-4">
                                                                                                                <div class="form-check">
                                                                                                                    <input class="form-check-input" type="checkbox" checked="Checked" disabled name="give" value="0" id="flexCheckDefault">
                                                                                                                    <span class="mr-1">ไม่ให้ยา</span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-4">
                                                                                                                <div class="form-check">
                                                                                                                    <input class="form-check-input" type="checkbox" disabled name="give" value="1" id="flexCheckDefault">
                                                                                                                    <span>ให้ยา
                                                                                                                    </span>
                                                                                                                </div>
                                                                                                            </div>


                                                                                                    <div class="col-sm">

                                                                                                            <div class="form-check">
                                                                                                                <input class="form-check-input" checked="Checked" type="checkbox"  name="remdesivir" value="1" id="flexCheckDefault">
                                                                                                                <span class="mr-1">Remdesivir</span>
                                                                                                            </div>

                                                                                                            <div class="form-check">
                                                                                                                <input class="form-check-input" checked="Checked" type="checkbox"  name="favipiravir" value="1" id="flexCheckDefault">
                                                                                                                <span class="mr-1">Favipiravir</span>
                                                                                                            </div>

                                                                                                            <div class="form-check">
                                                                                                                <input class="form-check-input" checked="Checked" type="checkbox"  name="lopinavir" value="1" id="flexCheckDefault">
                                                                                                                <span class="mr-1">Lopinavir/ritonavir</span>
                                                                                                            </div>

                                                                                                            <div class="form-check">
                                                                                                                <input class="form-check-input" checked="Checked" type="checkbox"  name="darunavir" value="1" id="flexCheckDefault">
                                                                                                                <span class="mr-1">Darunavir</span>
                                                                                                            </div>

                                                                                                            <div class="form-check">
                                                                                                                <input class="form-check-input" checked="Checked" type="checkbox"  name="ritonavir" value="1" id="flexCheckDefault">
                                                                                                                <span class="mr-1">Ritonavir</span>
                                                                                                            </div>

                                                                                                            <div class="form-check">
                                                                                                                <input class="form-check-input" checked="Checked" type="checkbox"  name="ch" value="1" id="flexCheckDefault">
                                                                                                                <span class="mr-1">Chloroquine/Hydroxychloroquine</span>
                                                                                                            </div>

                                                                                                                <div class="form-check">
                                                                                                                    <input class="form-check-input" checked="Checked" type="checkbox"  name="other_medic" value="1" id="flexCheckDefault">
                                                                                                                    <span>อื่นๆ
                                                                                                                        <span>ระบุ
                                                                                                                    </span>
                                                                                                                    <input class="mx-2" name="other_details_medic" name="other_details_medic" placeholder="ไม่มีข้อมูล">
                                                                                                                    </span>
                                                                                                                </div>


                                                                                                        <hr style="height:0px;border-width:0;color:rgb(0, 0, 0);background-color:rgb(255, 255, 255)">

                                                                                                    </div>

                                                                                                    <div class="row">

                                                                                                        <h6><strong class="text-left">สถานะผู้ป่วย</strong></h6>


                                                                                                            <div class="col-1.5 mx-1">
                                                                                                            <div class="form-check">
                                                                                                                <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="disappear" value="1" id="flexCheckDefault">
                                                                                                                <span class="mr-1">หาย</span>
                                                                                                            </div>
                                                                                                            </div>

                                                                                                            <div class="col-1.5 mx-1">
                                                                                                            <div class="form-check">
                                                                                                                <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="not" value="1" id="flexCheckDefault">
                                                                                                                <span class="mr-1">ยังรักษาอยู่</span>
                                                                                                            </div>
                                                                                                            </div>

                                                                                                            <div class="col-1.5 mx-1">
                                                                                                            <div class="form-check">
                                                                                                                <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="died" value="1" id="flexCheckDefault">
                                                                                                                <span class="mr-1">เสียชีวิต</span>
                                                                                                            </div>
                                                                                                            </div>

                                                                                                            <div class="col-1.5 mx-1">
                                                                                                            <div class="form-check">
                                                                                                                <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="send" value="1" id="flexCheckDefault">
                                                                                                                <span class="mr-1">ส่งตัวไป</span>
                                                                                                                <span class="">รพ.</span>
                                                                                                                <input type="text" id="first-name-icon" class="form-control-plaintext-auto" name="sendhos" placeholder="ไม่มีข้อมูล">
                                                                                                            </div>
                                                                                                            </div>

                                                                                                            <div class="col-1.5 mx-1">
                                                                                                            <div class="form-check">
                                                                                                                <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="other_status" value="1" id="flexCheckDefault">
                                                                                                                <span class="mr-1">อื่นๆ</span>
                                                                                                                <span class="">ระบุ</span>
                                                                                                                <input type="text" id="first-name-icon" class="form-control-plaintext-auto" name="other_details_status" placeholder="ไม่มีข้อมูล">
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

                                                    <!-- End Top Body -->

                                                </div>
                                                <div class="modal-footer">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-success mr-1 waves-effect waves-light mt-1"><i class="feather icon-edit"></i> เพิ่มข้อมูล</button>
                                                            {{-- <a class="btn btn-success mr-1 waves-effect waves-light mt-1" href="{{ route('clinic.store', $data->id) }}"><i class="feather icon-edit"></i> เพิ่มข้อมูล</a> --}}
                                                            <a class="btn btn-danger waves-effect waves-light mr-1 mt-1" href="{{ route('InquiryFormCovid.show', $data->id) }}"><i class="feather icon-arrow-left"></i> ย้อนกลับ</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>



                                </form>
                            </div>
                        </div>
            </section>
        </div>
    </div>
</div>


<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('app-assets') }}/vendors/js/ui/jquery.sticky.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/extensions/dropzone.min.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/datatables.min.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/dataTables.select.min.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Page JS-->
<script src="{{ asset('app-assets') }}/js/scripts/ui/data-list-view.js"></script>
<script src="{{ asset('app-assets') }}/js/scripts/datatables/datatable.js"></script>
<!-- END: Page JS-->
@endsection

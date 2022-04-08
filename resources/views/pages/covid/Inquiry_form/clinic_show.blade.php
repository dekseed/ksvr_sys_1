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

                    <div class="content-header-center col-12 mb-3 mt-1">
                        <h3 class="text-center mb-2">
                            <i class="feather icon-clipboard"></i>
                            ข้อมูลรายการผู้ป่วยติดเชื้อ (สำหรับเจ้าหน้าที่)
                        </h3>
                    </div>

                    <div class="row match-height">
                        <div class="col-md-6 col-12">
                            <div class="card border-success p-1">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="form-body mt-1 mb-1">
                                                    <h4 class="card-title"><i class="fa fa-comments-o"></i> ข้อมูลทั่วไป</h4>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 col-12 mb-1">
                                                        <fieldset>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">หมายเลขบัตรประชาชน</span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="Addon to Left" value="{{$data->user->number_id}}" aria-describedby="basic-addon1" disabled>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-6 col-12 mb-1">
                                                        <fieldset>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">ชื่อ - นามสกุล</span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="Addon to Left" value="{{$data->user->title_name->name}}{{$data->user->first_name}} {{$data->user->last_name}}" aria-describedby="basic-addon1" disabled>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <div class="row">
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
                                                    <div class="col-md-6 col-12 mb-1">
                                                        <fieldset>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">เบอร์โทรศัพท์ที่ติดต่อได้</span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="Addon to Left" value="+66 {{$data->user->tel}}" aria-describedby="basic-addon1" disabled>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-12 mb-1">
                                                        <fieldset>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">เบอร์โทรศัพท์ที่ใช้ลง แอปพลิเคชัน "หมอชนะ"
                                                                    </span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="Addon to Left" value="+66 {{$data->user->telapp}}" aria-describedby="basic-addon1" disabled>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 col-12 mb-1">
                                                        <fieldset>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">Code ID:
                                                                    </span>
                                                                </div>
                                                                <input type="number" class="form-control" placeholder="code" name="code" value="{{$data->code}}" aria-describedby="basic-addon1" disabled>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="card border-success p-1">

                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="form-body mt-1 mb-1">
                                                    <h4 class="card-title"><i class="feather icon-clipboard"></i> ข้อมูลการตรวจ</h4>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4 col-12 mb-1">
                                                        <span>วันที่เริ่มป่วย (ว/ด/ป)</span>
                                                        <input type="date" id="first-name-icon" class="form-control" name="datesick" placeholder="วันที่เริ่มป่วย" value="{{$data->clinic_cov->datesick}}" disabled>
                                                    </div>
                                                    <div class="col-md-4 col-12 mb-1">
                                                        <span>ชื่อสถานพยาบาลที่เข้ารับการรักษาครั้งแรก</span>
                                                        <input type="text" id="first-name-icon" class="form-control" name="namehosbe" placeholder="ชื่อสถานพยาบาล" value="{{$data->clinic_cov->namehosbe}}" disabled>
                                                    </div>
                                                    <div class="col-md-4 col-12 mb-1">
                                                        <span>จังหวัด</span>
                                                        <input type="text" id="first-name-icon" class="form-control" name="district_first" placeholder="จังหวัด" value="{{$data->clinic_cov->district_first}}" disabled>
                                                    </div>
                                                </div>
                                                <hr style="height:1px;border-width:0;color:rgb(3, 0, 26);background-color:rgb(3, 0, 26)">
                                                <div class="row">
                                                    <div class="col-md-4 col-12 mb-1">
                                                        <span>วันที่เข้ารับการรักษาครั้งแรก (ว/ด/ป)</span>
                                                        <input type="date" id="first-name-icon" class="form-control" name="first" placeholder="วันที่เข้ารับการรักษาครั้งแรก" value="{{$data->clinic_cov->first}}" disabled>
                                                    </div>
                                                    <div class="col-md-4 col-12 mb-1">
                                                        <span>ชื่อสถานพยาบาลที่เข้ารับการรักษาในปัจจุบัน</span>
                                                        <input type="text" id="first-name-icon" class="form-control" name="namehosup" placeholder="ชื่อสถานพยาบาล" value="{{$data->clinic_cov->namehosup}}" disabled>
                                                    </div>
                                                    <div class="col-md-4 col-12 mb-1">
                                                        <span>จังหวัด</span>
                                                        <input type="text" id="first-name-icon" class="form-control" name="district" placeholder="จังหวัด" value="{{$data->clinic_cov->district}}" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-md-6 col-12">
                            <div class="card border-success p-1">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-body mt-1 mb-1">
                                                    <h4 class="card-title"><i class="feather icon-clipboard"></i> อาการและอาการแสดง ในวันที่พบผู้ป่วย</h4>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-12 mb-1">
                                                        <div class="row">
                                                            <div class="col-md-3 mb-1">
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block mr-2">
                                                                        <fieldset>
                                                                            <div class="vs-radio-con">
                                                                                <input type="radio" name="fever" value="0" {{ $data->clinic_cov->patient_covid->fever == '0' ? 'checked' : '' }} onclick="womb1();" disabled>
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
                                                                                <input type="radio" name="fever" value="1" {{ $data->clinic_cov->patient_covid->fever == '1' ? 'checked' : '' }} onclick="womb0();" disabled>
                                                                                <span class="vs-radio">
                                                                                    <span class="vs-radio--border"></span>
                                                                                    <span class="vs-radio--circle"></span>
                                                                                </span>
                                                                                <span class="">มีไข้</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            @if($data->clinic_cov->patient_covid->fever == '1')
                                                            <div class="col-md-8 mb-1" id="hidden_womb" >
                                                                <div class="row">
                                                                    <div class="col-md-6 mb-1">
                                                                        <fieldset>
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">อุณหภูมิแรกรับ</span>
                                                                                </div>
                                                                                <input type="text" class="form-control" name="fever_degree" placeholder="อุณหภูมิแรกรับ" value="{{ $data->clinic_cov->patient_covid->fever_degree }}" aria-describedby="basic-addon1" disabled>
                                                                                <div class="input-group-append">
                                                                                    <span class="input-group-text">°C</span>
                                                                                </div>
                                                                            </div>
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="col-md-6 mb-1">
                                                                        <fieldset>
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">ค่า O₂ Sat</span>
                                                                                </div>
                                                                                <input type="text" class="form-control" name="fever_oxygen" placeholder="ค่า O₂ Sat" value="{{ $data->clinic_cov->patient_covid->fever_oxygen }}" aria-describedby="basic-addon1" disabled>
                                                                                <div class="input-group-append">
                                                                                    <span class="input-group-text">%</span>
                                                                                </div>
                                                                            </div>
                                                                        </fieldset>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endif
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 mb-1">
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block mr-2">
                                                                        <fieldset>
                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                <input type="checkbox" name="ventilator" value="1" {{ $data->clinic_cov->patient_covid->ventilator == '1' ? 'checked' : '' }} disabled>
                                                                                <span class="vs-checkbox">
                                                                                    <span class="vs-checkbox--check">
                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                    </span>
                                                                                </span>
                                                                                <span class="">ใส่เครื่องช่วยหายใจ</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block mr-2">
                                                                        <fieldset>
                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                <input type="checkbox" name="mascle" value="1" {{ $data->clinic_cov->patient_covid->mascle == '1' ? 'checked' : '' }} disabled>
                                                                                <span class="vs-checkbox">
                                                                                    <span class="vs-checkbox--check">
                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                    </span>
                                                                                </span>
                                                                                <span class="">ปวดกล้ามเนื้อ</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block mr-2">
                                                                        <fieldset>
                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                <input type="checkbox" name="breathe" value="1" {{ $data->clinic_cov->patient_covid->breathe == '1' ? 'checked' : '' }} disabled>
                                                                                <span class="vs-checkbox">
                                                                                    <span class="vs-checkbox--check">
                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                    </span>
                                                                                </span>
                                                                                <span class="">หายใจลำบาก</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block mr-2">
                                                                        <fieldset>
                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                <input type="checkbox" name="neck" value="1" {{ $data->clinic_cov->patient_covid->neck == '1' ? 'checked' : '' }} disabled>
                                                                                <span class="vs-checkbox">
                                                                                    <span class="vs-checkbox--check">
                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                    </span>
                                                                                </span>
                                                                                <span class="">เจ็บคอ</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block mr-2">
                                                                        <fieldset>
                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                <input type="checkbox" name="phlegm" value="1" {{ $data->clinic_cov->patient_covid->phlegm == '1' ? 'checked' : '' }} disabled>
                                                                                <span class="vs-checkbox">
                                                                                    <span class="vs-checkbox--check">
                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                    </span>
                                                                                </span>
                                                                                <span class="">มีเสมหะ</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block mr-2">
                                                                        <fieldset>
                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                <input type="checkbox" name="eye" value="1" {{ $data->clinic_cov->patient_covid->eye == '1' ? 'checked' : '' }} disabled>
                                                                                <span class="vs-checkbox">
                                                                                    <span class="vs-checkbox--check">
                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                    </span>
                                                                                </span>
                                                                                <span class="">ตาแดง</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block mr-2">
                                                                        <fieldset>
                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                <input type="checkbox" name="rash" value="1" id="cell" data-on="Yes" data-off="No" {{ $data->clinic_cov->patient_covid->rash == '1' ? 'checked' : '' }} disabled>
                                                                                <span class="vs-checkbox">
                                                                                    <span class="vs-checkbox--check">
                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                    </span>
                                                                                </span>
                                                                                <span class="">ผื่น</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                                @if($data->clinic_cov->patient_covid->rash == '1')
                                                                <div class="col-md-12 mb-1" id="divPhone">
                                                                    <fieldset>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">ตำแหน่ง</span>
                                                                            </div>
                                                                            <input type="text" class="form-control" name="rash_details" placeholder="ตำแหน่ง" aria-describedby="basic-addon1" value="{{ $data->clinic_cov->patient_covid->rash_details }}" disabled>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-6 mb-1">
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block mr-2">
                                                                        <fieldset>
                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                <input type="checkbox" name="liquid" value="1" {{ $data->clinic_cov->patient_covid->liquid == '1' ? 'checked' : '' }} disabled>
                                                                                <span class="vs-checkbox">
                                                                                    <span class="vs-checkbox--check">
                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                    </span>
                                                                                </span>
                                                                                <span class="">ถ่ายเหลว</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block mr-2">
                                                                        <fieldset>
                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                <input type="checkbox" name="cough" value="1" {{ $data->clinic_cov->patient_covid->cough == '1' ? 'checked' : '' }} disabled>
                                                                                <span class="vs-checkbox">
                                                                                    <span class="vs-checkbox--check">
                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                    </span>
                                                                                </span>
                                                                                <span class="">ไอ</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block mr-2">
                                                                        <fieldset>
                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                <input type="checkbox" name="runny" value="1" {{ $data->clinic_cov->patient_covid->runny == '1' ? 'checked' : '' }} disabled>
                                                                                <span class="vs-checkbox">
                                                                                    <span class="vs-checkbox--check">
                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                    </span>
                                                                                </span>
                                                                                <span class="">มีน้ำมูก</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block mr-2">
                                                                        <fieldset>
                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                <input type="checkbox" name="headache" value="1" {{ $data->clinic_cov->patient_covid->headache == '1' ? 'checked' : '' }} disabled>
                                                                                <span class="vs-checkbox">
                                                                                    <span class="vs-checkbox--check">
                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                    </span>
                                                                                </span>
                                                                                <span class="">ปวดศรีษะ</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block mr-2">
                                                                        <fieldset>
                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                <input type="checkbox" name="nose" value="1" {{ $data->clinic_cov->patient_covid->nose == '1' ? 'checked' : '' }} disabled>
                                                                                <span class="vs-checkbox">
                                                                                    <span class="vs-checkbox--check">
                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                    </span>
                                                                                </span>
                                                                                <span class="">จมูกไม่ได้กลิ่น</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block mr-2">
                                                                        <fieldset>
                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                <input type="checkbox" name="tongue" value="1" {{ $data->clinic_cov->patient_covid->tongue == '1' ? 'checked' : '' }} disabled>
                                                                                <span class="vs-checkbox">
                                                                                    <span class="vs-checkbox--check">
                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                    </span>
                                                                                </span>
                                                                                <span class="">ลิ้นไม่รับรส</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block mr-2">
                                                                        <fieldset>
                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                <input type="checkbox" name="other_fisrt" value="1" id="cell2" data-on="Yes" data-off="No" {{ $data->clinic_cov->patient_covid->other == '1' ? 'checked' : '' }} disabled>
                                                                                <span class="vs-checkbox">
                                                                                    <span class="vs-checkbox--check">
                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                    </span>
                                                                                </span>
                                                                                <span class="">อื่นๆ</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>

                                                                </ul>
                                                                @if($data->clinic_cov->patient_covid->other == '1')
                                                                <div class="col-md-12 mb-1" id="divPhone2">
                                                                    <fieldset>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">รายละเอียด</span>
                                                                            </div>
                                                                            <input type="text" class="form-control" name="other_details_fisrt" placeholder="รายละเอียด" value="{{ $data->clinic_cov->patient_covid->other_details }}" aria-describedby="basic-addon1" >
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                                @endif
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-body mt-1 mb-1">
                                                    <h4 class="card-title"><i class="feather icon-clipboard"></i> เอกซเรย์ปอด (ครั้งแรก)</h4>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-12 mb-1">
                                                        <div class="col-md-3 mb-1">
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="d-inline-block mr-2">
                                                                    <fieldset>
                                                                        <div class="vs-radio-con">
                                                                            <input type="radio" name="x_ray" value="0" onclick="x_ray1();" {{ $data->clinic_cov->xray_in_inquiry->checked == '0' ? 'checked' : '' }} disabled>
                                                                            <span class="vs-radio">
                                                                                <span class="vs-radio--border"></span>
                                                                                <span class="vs-radio--circle"></span>
                                                                            </span>
                                                                            <span class="">ไม่ได้ทำ</span>
                                                                        </div>
                                                                    </fieldset>
                                                                </li>
                                                                <li class="d-inline-block mr-2">
                                                                    <fieldset>
                                                                        <div class="vs-radio-con vs-radio-success">
                                                                            <input type="radio" name="x_ray" value="1" onclick="x_ray0();" {{ $data->clinic_cov->xray_in_inquiry->checked == '1' ? 'checked' : '' }} disabled>
                                                                            <span class="vs-radio">
                                                                                <span class="vs-radio--border"></span>
                                                                                <span class="vs-radio--circle"></span>
                                                                            </span>
                                                                            <span class="">ทำ</span>
                                                                        </div>
                                                                    </fieldset>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        @if($data->clinic_cov->xray_in_inquiry->checked == '1')
                                                        <div class="col-md-8 mb-1" id="hidden_x_ray">
                                                            <div class="row">
                                                                <div class="col-md-6 mb-1">
                                                                    <fieldset>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">วันที่</span>
                                                                            </div>
                                                                            <input type="date" class="form-control" name="date_xrey" value="{{ $data->clinic_cov->xray_in_inquiry->date }}" aria-describedby="basic-addon1" disabled>

                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                                <div class="col-md-6 mb-1">
                                                                    <fieldset>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">ระบุผล</span>
                                                                            </div>
                                                                            <input type="text" class="form-control" name="result_xrey" placeholder="ระบุผล" value="{{ $data->clinic_cov->xray_in_inquiry->result }}" aria-describedby="basic-addon1" disabled>

                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-body mt-1 mb-1">
                                                    <h4 class="card-title"><i class="feather icon-clipboard"></i> CBC (ครั้งแรก)</h4>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-12 mb-1">
                                                        <div class="row">
                                                            <div class="col-md-6 mb-1">
                                                                <fieldset>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">วันที่</span>
                                                                        </div>
                                                                        <input type="date" class="form-control" name="date_cbc" aria-describedby="basic-addon1" value="{{ $data->clinic_cov->cbc_in_inquiry->date }}" disabled>

                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-6 mb-1">
                                                                <fieldset>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">ผล Hb</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="ค่า Hb" name="hb" aria-describedby="basic-addon1" value="{{ $data->clinic_cov->cbc_in_inquiry->hb }}" disabled>
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text">g/dL</span>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 mb-1">
                                                                <fieldset>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">ผล Hct</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="ค่า Hct" name="hct" aria-describedby="basic-addon1" value="{{ $data->clinic_cov->cbc_in_inquiry->hct }}" disabled>
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text">%</span>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-6 mb-1">
                                                                <fieldset>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">Platelet count</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Platelet count" name="platelet" aria-describedby="basic-addon1" value="{{ $data->clinic_cov->cbc_in_inquiry->platelet }}" disabled>
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text">x10³</span>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4 mb-1">
                                                                <fieldset>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">WBC</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="ค่า Hct" name="wbc" aria-describedby="basic-addon1" value="{{ $data->clinic_cov->cbc_in_inquiry->wbc }}" disabled>

                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-4 mb-1">
                                                                <fieldset>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">N</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="n" name="n" aria-describedby="basic-addon1" value="{{ $data->clinic_cov->cbc_in_inquiry->n }}" disabled>
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text">%</span>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-4 mb-1">
                                                                <fieldset>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">L</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="L" name="l" aria-describedby="basic-addon1" value="{{ $data->clinic_cov->cbc_in_inquiry->l }}" disabled>
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text">%</span>
                                                                        </div>

                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4 mb-1">
                                                                <fieldset>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">Atyp lymph</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Atyp lymph" name="atyp" aria-describedby="basic-addon1" value="{{ $data->clinic_cov->cbc_in_inquiry->atyp }}" disabled>
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text">%</span>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-4 mb-1">
                                                                <fieldset>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">Mono</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="Mono" name="mono" aria-describedby="basic-addon1" value="{{ $data->clinic_cov->cbc_in_inquiry->mono }}" disabled>
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text">%</span>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-4 mb-1">
                                                                <fieldset>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">อื่นๆ</span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="อื่นๆ" name="other_details_cbc" aria-describedby="basic-addon1" value="{{ $data->clinic_cov->cbc_in_inquiry->other_details }}" disabled>
                                                                        <div class="input-group-append">
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-body mt-1 mb-1">
                                                    <h4 class="card-title"><i class="feather icon-clipboard"></i> ผลตรวจ influenza test</h4>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-1">
                                                        <fieldset>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">วิธีการตรวจ</span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="วิธีการตรวจ" name="type_check_covid_id"  aria-describedby="basic-addon1" value="{{ $data->clinic_cov->test_in_inquiry->type_check_covid_id }}" disabled>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-6 mb-1">
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" name="nagative" value="1" {{ $data->clinic_cov->test_in_inquiry->nagative == '1' ? 'checked' : '' }} disabled>
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">Negative</span>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" name="positive" value="1" {{ $data->clinic_cov->test_in_inquiry->positive == '1' ? 'checked' : '' }} disabled>
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">Positive</span>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" name="flua" value="1" {{ $data->clinic_cov->test_in_inquiry->flua == '1' ? 'checked' : '' }} disabled>
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">Flu A</span>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" name="flub" value="1" {{ $data->clinic_cov->test_in_inquiry->flub == '1' ? 'checked' : '' }} disabled>
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">Flu B</span>
                                                                    </div>
                                                                </fieldset>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="form-body mt-1 mb-1">
                                                    <h4 class="card-title"><i class="feather icon-clipboard"></i> ผลการตรวจ SARS-CoV-2 PCR</h4>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 col-12 mb-1">
                                                        <span>วันที่เก็บ (ว/ด/ป)</span>
                                                        <input type="date" id="first-name-icon" class="form-control" name="date_pcr" placeholder="วันที่เก็บ" value="{{ $data->clinic_cov->pcr_test_inquiry->date }}" disabled>
                                                    </div>
                                                    <div class="col-md-4 col-12 mb-1">
                                                        <span>ชนิดตัวอย่าง</span>
                                                        <input type="text" id="first-name-icon" class="form-control" name="example_pcr" placeholder="ชนิดตัวอย่าง" value="{{ $data->clinic_cov->pcr_test_inquiry->example }}" disabled>
                                                    </div>
                                                    <div class="col-md-4 col-12 mb-1">
                                                        <span>สถานที่ส่งตรวจ</span>
                                                        <input type="text" id="first-name-icon" class="form-control" name="location_pcr" placeholder="สถานที่ส่งตรวจ" value="{{ $data->clinic_cov->pcr_test_inquiry->location }}" disabled>
                                                    </div>
                                                </div>

                                                <div class="row mb-1">
                                                    <p class="ml-2 mr-1"><b>ผลตรวจ</b></p>
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="d-inline-block mr-2">
                                                            <fieldset>
                                                                <div class="vs-radio-con">
                                                                    <input type="radio" name="detected_pcr" value="0" {{ $data->clinic_cov->pcr_test_inquiry->detected == '0' ? 'checked' : '' }} disabled>
                                                                    <span class="vs-radio">
                                                                        <span class="vs-radio--border"></span>
                                                                        <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    <span class="">Detected</span>
                                                                </div>
                                                            </fieldset>
                                                        </li>
                                                        <li class="d-inline-block mr-2">
                                                            <fieldset>
                                                                <div class="vs-radio-con vs-radio-success">
                                                                    <input type="radio" name="detected_pcr" value="1" {{ $data->clinic_cov->pcr_test_inquiry->detected == '1' ? 'checked' : '' }} disabled>
                                                                    <span class="vs-radio">
                                                                        <span class="vs-radio--border"></span>
                                                                        <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    <span class="">Not detected</span>
                                                                </div>
                                                            </fieldset>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card border-success p-1">
                                <div class="card-content">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-body mt-1 mb-1">
                                                    <h4 class="card-title"><i class="feather icon-clipboard"></i> ผลการตรวจ SARS-CoV-2 Antibody</h4>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 col-12 mb-1">
                                                        <span>วันที่เก็บ (ว/ด/ป)</span>
                                                        <input type="date" id="first-name-icon" class="form-control" name="date_anti" placeholder="วันที่เก็บ" value="{{ $data->clinic_cov->anti_in_inquiry->date }}" disabled>
                                                    </div>
                                                    <div class="col-md-4 col-12 mb-1">
                                                        <span>ชนิดตัวอย่าง</span>
                                                        <input type="text" id="first-name-icon" class="form-control" name="example_anti" placeholder="ชนิดตัวอย่าง" value="{{ $data->clinic_cov->anti_in_inquiry->example }}" disabled>
                                                    </div>
                                                    <div class="col-md-4 col-12 mb-1">
                                                        <span>สถานที่ส่งตรวจ</span>
                                                        <input type="text" id="first-name-icon" class="form-control" name="location_anti" placeholder="สถานที่ส่งตรวจ" value="{{ $data->clinic_cov->anti_in_inquiry->location }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="row mb-1">
                                                    <div class="col-sm-6 col-12">
                                                        <label for="valid-state"><b>ผลตรวจ</b></label>
                                                        <input type="text" id="first-name-icon" class="form-control" name="result_anti" placeholder="ผลตรวจ" value="{{ $data->clinic_cov->anti_in_inquiry->result }}" disabled>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-body mt-1 mb-1">
                                                    <h4 class="card-title"><i class="feather icon-clipboard"></i> ประเภทผู้ป่วย</h4>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 mb-1">
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-radio-con">
                                                                        <input type="radio" name="patient" value="0" onclick="patient1();" {{ $data->clinic_cov->patient_type_in_inquiry->patient == '0' ? 'checked' : '' }} disabled>
                                                                        <span class="vs-radio">
                                                                            <span class="vs-radio--border"></span>
                                                                            <span class="vs-radio--circle"></span>
                                                                        </span>
                                                                        <span class="">ผู้ป่วยนอก</span>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-success">
                                                                        <input type="radio" name="patient" value="1" onclick="patient0();" {{ $data->clinic_cov->patient_type_in_inquiry->patient == '1' ? 'checked' : '' }} disabled>
                                                                        <span class="vs-radio">
                                                                            <span class="vs-radio--border"></span>
                                                                            <span class="vs-radio--circle"></span>
                                                                        </span>
                                                                        <span class="">ผู้ป่วยใน</span>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    @if($data->clinic_cov->patient_type_in_inquiry->patient == '1')
                                                    <div class="col-md-8 mb-1" id="hidden_patient">
                                                        <div class="row">
                                                            <div class="col-md-6 mb-1">
                                                                <fieldset>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">admit วันที่</span>
                                                                        </div>
                                                                        <input type="date" id="first-name-icon" class="form-control" name="date_admit" placeholder="วันที่" value="{{ $data->clinic_cov->patient_type_in_inquiry->date }}" disabled>
                                                                    </div>
                                                                </fieldset>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 mb-1">
                                                        <fieldset>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">การวินิจฉัยเบื้องต้น</span>
                                                                </div>
                                                                <input type="text" class="form-control" name="diagnoes_admit" placeholder="การวินิจฉัยเบื้องต้น" aria-describedby="basic-addon1" value="{{ $data->clinic_cov->patient_type_in_inquiry->diagnoes }}" disabled>

                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-body mt-1 mb-1">
                                                    <h4 class="card-title"><i class="feather icon-clipboard"></i> การให้ยารักษาโรคติดเชื้อไวรัสโคโรน่า 2019</h4>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 mb-1">
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-radio-con">
                                                                        <input type="radio" name="give" value="0" onclick="give1();" {{ $data->clinic_cov->medicine_in_inquiry->give == '0' ? 'checked' : '' }} disabled>
                                                                        <span class="vs-radio">
                                                                            <span class="vs-radio--border"></span>
                                                                            <span class="vs-radio--circle"></span>
                                                                        </span>
                                                                        <span class="">ไม่ให้ยา</span>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-success">
                                                                        <input type="radio" name="give" value="1" onclick="give0();" {{ $data->clinic_cov->medicine_in_inquiry->give == '1' ? 'checked' : '' }} disabled>
                                                                        <span class="vs-radio">
                                                                            <span class="vs-radio--border"></span>
                                                                            <span class="vs-radio--circle"></span>
                                                                        </span>
                                                                        <span class="">ให้ยา</span>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    @if($data->clinic_cov->medicine_in_inquiry->give == '1')
                                                    <div class="col-md-12 mb-1" id="hidden_give">
                                                        <div class="row">
                                                            <div class="col-md-12 mb-1">
                                                                <fieldset>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">วันที่รับยาโดสแรก</span>
                                                                        </div>
                                                                        <input type="date" id="first-name-icon" class="form-control" name="date_give" placeholder="วันที่" value="{{ $data->clinic_cov->medicine_in_inquiry->first_dose }}" disabled>
                                                                    </div>
                                                                </fieldset>
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 mb-1">
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block mr-2">
                                                                        <fieldset>
                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                <input type="checkbox" name="remdesivir" value="1" {{ $data->clinic_cov->medicine_in_inquiry->remdesivir == '1' ? 'checked' : '' }} disabled>
                                                                                <span class="vs-checkbox">
                                                                                    <span class="vs-checkbox--check">
                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                    </span>
                                                                                </span>
                                                                                <span class="">Remdesivir</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block mr-2">
                                                                        <fieldset>
                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                <input type="checkbox" name="favipiravir" value="1" {{ $data->clinic_cov->medicine_in_inquiry->favipiravir == '1' ? 'checked' : '' }} disabled>
                                                                                <span class="vs-checkbox">
                                                                                    <span class="vs-checkbox--check">
                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                    </span>
                                                                                </span>
                                                                                <span class="">Favipiravir</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block mr-2">
                                                                        <fieldset>
                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                <input type="checkbox" name="lopinavir" value="1" {{ $data->clinic_cov->medicine_in_inquiry->lopinavir == '1' ? 'checked' : '' }} disabled>
                                                                                <span class="vs-checkbox">
                                                                                    <span class="vs-checkbox--check">
                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                    </span>
                                                                                </span>
                                                                                <span class="">Lopinavir/ritonavir</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block mr-2">
                                                                        <fieldset>
                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                <input type="checkbox" name="darunavir" value="1" {{ $data->clinic_cov->medicine_in_inquiry->darunavir == '1' ? 'checked' : '' }} disabled>
                                                                                <span class="vs-checkbox">
                                                                                    <span class="vs-checkbox--check">
                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                    </span>
                                                                                </span>
                                                                                <span class="">Darunavir</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-6 mb-1">
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block mr-2">
                                                                        <fieldset>
                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                <input type="checkbox" name="ritonavir" value="1" {{ $data->clinic_cov->medicine_in_inquiry->ritonavir == '1' ? 'checked' : '' }} disabled>
                                                                                <span class="vs-checkbox">
                                                                                    <span class="vs-checkbox--check">
                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                    </span>
                                                                                </span>
                                                                                <span class="">Ritonavir</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block mr-2">
                                                                        <fieldset>
                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                <input type="checkbox" name="ch" value="1" {{ $data->clinic_cov->medicine_in_inquiry->ch == '1' ? 'checked' : '' }} disabled>
                                                                                <span class="vs-checkbox">
                                                                                    <span class="vs-checkbox--check">
                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                    </span>
                                                                                </span>
                                                                                <span class="">Chloroquine/Hydroxychloroquine</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block mr-2">
                                                                        <fieldset>
                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                <input type="checkbox" name="other_medic" value="1" id="other_medic" data-on="Yes" data-off="No" {{ $data->clinic_cov->medicine_in_inquiry->other == '1' ? 'checked' : '' }} disabled>
                                                                                <span class="vs-checkbox">
                                                                                    <span class="vs-checkbox--check">
                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                    </span>
                                                                                </span>
                                                                                <span class="">อื่นๆ</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                                @if($data->clinic_cov->medicine_in_inquiry->other == '1')
                                                                <div class="col-md-12 mb-1" id="divother_medic">
                                                                    <fieldset>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">อื่นๆ</span>
                                                                            </div>
                                                                            <input type="text" class="form-control" name="other_details_medic" placeholder="อื่นๆ" aria-describedby="basic-addon1" value="{{ $data->clinic_cov->medicine_in_inquiry->other_details }}" disabled>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-body mt-1 mb-1">
                                                    <h4 class="card-title"><i class="feather icon-clipboard"></i> สถานะผู้ป่วย</h4>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-1">
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" name="disappear" value="1" {{ $data->clinic_cov->status_in_inquiry->disappear == '1' ? 'checked' : '' }} disabled>
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">หาย</span>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                        </ul>
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" name="not" value="1" {{ $data->clinic_cov->status_in_inquiry->not == '1' ? 'checked' : '' }} disabled>
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">ยังรักษาอยู่</span>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                        </ul>
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" name="died" value="1" {{ $data->clinic_cov->status_in_inquiry->died == '1' ? 'checked' : '' }} disabled>
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">เสียชีวิต</span>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6 mb-1">
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" name="send" value="1" id="other_sendhos" data-on="Yes" data-off="No" {{ $data->clinic_cov->status_in_inquiry->send == '1' ? 'checked' : '' }} disabled>
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">ส่งตัวไป รพ.</span>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                        </ul>
                                                        @if($data->clinic_cov->status_in_inquiry->send == '1')
                                                        <div class="col-md-12 mb-1" id="divother_sendhos">
                                                            <fieldset>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">รพ.</span>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="sendhos" placeholder="รพ." aria-describedby="basic-addon1" value="{{ $data->clinic_cov->status_in_inquiry->sendhos }}" disabled>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        @endif
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" name="other_status" value="1" id="other_details_status" data-on="Yes" data-off="No" {{ $data->clinic_cov->status_in_inquiry->other == '1' ? 'checked' : '' }} disabled>
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">อื่นๆ</span>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                        </ul>
                                                        @if($data->clinic_cov->status_in_inquiry->other == '1')
                                                        <div class="col-md-12 mb-1" id="divother_details_status">
                                                            <fieldset>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon1">ระบุ</span>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="other_details_status" placeholder="ระบุ" aria-describedby="basic-addon1" value="{{ $data->clinic_cov->status_in_inquiry->other_details }}" disabled>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="row">
                                        <div class="col-12">
                                            <a class="btn btn-success mr-1 waves-effect waves-light mt-1" href="{{ route('clinic_covid.edit', $data->id) }}"><i class="feather icon-edit"></i> แก้ไขข้อมูล</a>
                                            <a class="btn btn-danger waves-effect waves-light mr-1 mt-1" href="{{ route('InquiryFormCovid.show', $data->id) }}"><i class="feather icon-arrow-left"></i> ย้อนกลับ</a>

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

<script type="text/javascript">
   var elem = document.getElementById('cell2');

    elem.addEventListener('click', function() {
        var divElem = document.getElementById('divPhone2');
        if( this.checked){
            divElem.style.display = 'block'  ;
        }
        else{
            divElem.style.display = 'none'  ;
        }
    });

    var elem = document.getElementById('cell');

    elem.addEventListener('click', function() {
        var divElem = document.getElementById('divPhone');
        if( this.checked){
            divElem.style.display = 'block'  ;
        }
        else{
            divElem.style.display = 'none'  ;
        }
    });

    var elem = document.getElementById('other_medic');

    elem.addEventListener('click', function() {
        var divElem = document.getElementById('divother_medic');
        if( this.checked){
            divElem.style.display = 'block'  ;
        }
        else{
            divElem.style.display = 'none'  ;
        }
    });


    var elem = document.getElementById('other_details_status');

    elem.addEventListener('click', function() {
        var divElem = document.getElementById('divother_details_status');
        if( this.checked){
            divElem.style.display = 'block'  ;
        }
        else{
            divElem.style.display = 'none'  ;
        }
    });

    var elem = document.getElementById('other_sendhos');

    elem.addEventListener('click', function() {
        var divElem = document.getElementById('divother_sendhos');
        if( this.checked){
            divElem.style.display = 'block'  ;
        }
        else{
            divElem.style.display = 'none'  ;
        }
    });

    function give0() {
            document.getElementById('hidden_give').style.display = 'block';
        }

    function give1() {
            document.getElementById('hidden_give').style.display = 'none';
        }

    function patient0() {
            document.getElementById('hidden_patient').style.display = 'block';
        }

    function patient1() {
            document.getElementById('hidden_patient').style.display = 'none';
        }
    function x_ray0() {
            document.getElementById('hidden_x_ray').style.display = 'block';
        }

    function x_ray1() {
            document.getElementById('hidden_x_ray').style.display = 'none';
        }

    function womb0() {
            document.getElementById('hidden_womb').style.display = 'block';
        }

    function womb1() {
            document.getElementById('hidden_womb').style.display = 'none';
        }
</script>
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

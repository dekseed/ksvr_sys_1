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
                                <li class="breadcrumb-item"><a href="{{ route('inquiry-form-Covid.index') }}">ระบบแบบสอบสวนผู้ป่วยติดเชื้อ Covid 19</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('inquiry-form-Covid.index') }}">ระบบคลินิกผู้ป่วยติดเชื้อ Covid 19</a>
                                </li>
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
                            <div class="card">
                                <div class="card-header">
                                </div>
                                <div class="content-body">
                                    <section id="multiple-column-form">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3 class="text-center mb-2">
                                                    <i class="feather icon-clipboard"></i>
                                                    ข้อมูลรายการผู้ป่วยติดเชื้อ (สำหรับผู้ดูแลระบบ)
                                                </h3>

                                                <!-- button -->
                                                <div class="modal-footer">
                                                    <div class="row">
                                                        <div class="col-12">

                                                            <a class="btn btn-success mr-1 waves-effect waves-light mt-1" href="{{ route('clinic.edit', $data->id) }}"><i class="feather icon-edit"></i> แก้ไขข้อมูล</a>
                                                            <a class="btn btn-danger waves-effect waves-light mr-1 mt-1" href="{{ route('inquiry-form-Covid.show', $data->id) }}"><i class="feather icon-arrow-left"></i> ย้อนกลับ</a>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End button -->

                                                <!-- Top Body -->

                                                            <div class="col-md-12 col-12">
                                                                <div class="card border-success p-1">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                        </div>
                                                                        <div class="content-body">
                                                                            <section id="multiple-column-form">
                                                                                <div class="row">
                                                                                    <div class="col-12">

                                                                                        <div class="form-body">
                                                                                            <h4 class="card-title"><i class="fa fa-comments-o"></i> ข้อมูลทั่วไป</h4>
                                                                                        </div>
                                                                                        <hr style="height:1px;border-width:0;color:rgb(3, 0, 26);background-color:rgb(3, 0, 26)">

                                                                                        <div class="container-sm">

                                                                                            <div class="row">
                                                                                                <div class="input-group col-3">
                                                                                                    <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon3">หมายเลขบัตรประชาชน</span>
                                                                                                    <input type="text" class="form-control" style="color:rgb(0, 0, 0);background-color:rgb(255,250,250)" value="{{$data->user_c_inquiries->number_id}}" disabled name="number_id" placeholder="หมายเลขบัตรประชาชน" id="basic-url" aria-describedby="basic-addon3">
                                                                                                </div>

                                                                                                <div class="input-group col-2">
                                                                                                    <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon3">คำนำหน้า</span>
                                                                                                    <input type="text" class="form-control" style="color:rgb(0, 0, 0);background-color:rgb(255,250,250)" value="{{$data->user_c_inquiries->title_name_inquiries->name}}" disabled name="title_name_id" placeholder="คำนำหน้า" id="basic-url" aria-describedby="basic-addon3">
                                                                                                </div>

                                                                                                <div class="input-group col-2">
                                                                                                    <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon3">ชื่อ</span>
                                                                                                    <input type="text" class="form-control" style="color:rgb(0, 0, 0);background-color:rgb(255,250,250)" value="{{$data->user_c_inquiries->first_name}}" disabled name="first_name" placeholder="ชื่อ" id="basic-url" aria-describedby="basic-addon3">
                                                                                                </div>

                                                                                                <div class="input-group col-3">
                                                                                                    <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon3">นามสกุล</span>
                                                                                                    <input type="text" class="form-control" style="color:rgb(0, 0, 0);background-color:rgb(255,250,250)" value="{{$data->user_c_inquiries->last_name}}" disabled name="last_name" placeholder="นามสกุล" placeholder="เพศ" id="basic-url" aria-describedby="basic-addon3">
                                                                                                </div>

                                                                                                <div class="input-group col-sm">
                                                                                                    <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon3">เพศ</span>
                                                                                                            <select type="text"  class="form-control" style="color:rgb(0, 0, 0);background-color:rgb(255,250,250)" value="{{$data->user_c_inquiries->sex}}" disabled name="sex" placeholder="เพศ">
                                                                                                                    @if($data->user_c_inquiries->sex == '0')
                                                                                                                    <option selected value="0">ชาย</option>
                                                                                                                    @else
                                                                                                                    <option selected value="1">หญิง</option>
                                                                                                                    @endif
                                                                                                            </select>
                                                                                                </div>

                                                                                                <div class="input-group col-sm">
                                                                                                    <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon3">อายุ</span>
                                                                                                    <input type="text" class="form-control" style="color:rgb(0, 0, 0);background-color:rgb(255,250,250)" value="{{$data->user_c_inquiries->age}}" disabled name="age" placeholder="อายุ" id="basic-url" aria-describedby="basic-addon3">
                                                                                                </div>
                                                                                            </div>

                                                                                            <hr style="height: 0px; border-width:0;color:rgb(0, 0, 0);background-color:rgb(255, 255, 255)">

                                                                                            <div class="row">

                                                                                                <div class="input-group col-sm">
                                                                                                    <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon3">สัญชาติ</span>
                                                                                                    <input type="text" class="form-control" style="color:rgb(0, 0, 0);background-color:rgb(255,250,250)" value="{{$data->user_c_inquiries->nation}}" disabled name="nation" placeholder="สัญชาติ" id="basic-url" aria-describedby="basic-addon3">
                                                                                                </div>

                                                                                                <div class="input-group col-sm">
                                                                                                    <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon3">เบอร์โทรศัพท์ที่ติดต่อได้</span>
                                                                                                    <input type="text" class="form-control" style="color:rgb(0, 0, 0);background-color:rgb(255,250,250)" value="0{{$data->user_c_inquiries->tel}}" disabled name="tel" placeholder="เบอร์โทรศัพท์ที่ติดต่อได้" id="basic-url" aria-describedby="basic-addon3">
                                                                                                </div>

                                                                                                <div class="input-group col-sm">
                                                                                                    <span class="input-group-text" style="background-color:rgb(230,230,250)" id="basic-addon3">เบอร์โทรศัพท์ที่ใช้ลง แอปพลิเคชัน "หมอชนะ"</span>
                                                                                                    <input type="text" class="form-control" style="color:rgb(0, 0, 0);background-color:rgb(255,250,250)" value="0{{$data->user_c_inquiries->telapp}}" disabled name="telapp" placeholder="เบอร์โทรศัพท์ที่ใช้ลงแอพ" id="basic-url" aria-describedby="basic-addon3">
                                                                                                </div>
                                                                                            </div>

                                                                                            <hr style="height:1px;border-width:0;color:rgb(0, 0, 0);background-color:rgb(255, 255, 255)">

                                                                                            <h3 class="text-left mb-2">
                                                                                                <i class="feather icon-clipboard"></i>
                                                                                                ข้อมูลการตรวจ
                                                                                            </h3>
                                                                                            <hr style="height:1px;border-width:0;color:rgb(3, 0, 26);background-color:rgb(3, 0, 26)">

                                                                                            <div class="container-left">
                                                                                                <div class="row">

                                                                                                    <tr>
                                                                                                        <div class="col-4 text-right">
                                                                                                            <span>วันที่เริ่มป่วย (ว/ด/ป)</span>
                                                                                                            <input type="date" id="first-name-icon" class="form-control-plaintext-auto" value="{{$data->cli_cov_inquiries->datesick}}" disabled name="datesick" placeholder="วันที่เริ่มป่วย">
                                                                                                        </div>


                                                                                                        <div class="col-4 text-right">
                                                                                                            <span>ชื่อสถานพยาบาลที่เข้ารับการรักษาครั้งแรก</span>
                                                                                                            <input type="text" id="first-name-icon" class="form-control-plaintext-auto" value="{{$data->cli_cov_inquiries->namehosbe}}" disabled name="namehosbe" placeholder="ชื่อสถานพยาบาล">
                                                                                                        </div>

                                                                                                        <div class="col-3">
                                                                                                            <span>จังหวัด</span>
                                                                                                            <input type="text" id="first-name-icon" class="form-control-plaintext-auto" value="{{$data->cli_cov_inquiries->district_id}}" disabled name="district_id" placeholder="จังหวัด">
                                                                                                        </div>
                                                                                                    </tr>
                                                                                                </div>
                                                                                                <hr style="height: 0px;px;border-width:0;color:rgb(0, 0, 0);background-color:rgb(255, 255, 255)">
                                                                                            </div>
                                                                                            <div class="container-left">
                                                                                                <div class="row">

                                                                                                    <tr>
                                                                                                        <div class="col-4 text-right">
                                                                                                            <span>วันที่เข้ารับการรักษาครั้งแรก (ว/ด/ป)</span>
                                                                                                            <input type="date" id="first-name-icon" class="form-control-plaintext-auto" value="{{$data->cli_cov_inquiries->first}}" disabled name="first" placeholder="วันที่เข้ารับการรักษาครั้งแรก">
                                                                                                        </div>


                                                                                                        <div class="col-4 text-right">
                                                                                                            <span>ชื่อสถานพยาบาลที่เข้ารับการรักษาในปัจจุบัน</span>
                                                                                                            <input type="text" id="first-name-icon" class="form-control-plaintext-auto" value="{{$data->cli_cov_inquiries->namehosup}}" disabled name="namehosup" placeholder="ชื่อสถานพยาบาล">
                                                                                                        </div>

                                                                                                        <div class="col-3">
                                                                                                            <span>จังหวัด</span>
                                                                                                            <input type="text" id="first-name-icon" class="form-control-plaintext-auto" value="{{$data->cli_cov_inquiries->district_id}}" disabled name="district_id" placeholder="จังหวัด">
                                                                                                        </div>

                                                                                                    </tr>
                                                                                                </div>
                                                                                            </div>


                                                                                        <hr style="height:1px;border-width:0;color:rgb(0, 0, 0);background-color:rgb(255, 255, 255)">

                                                                                        <h4 class="text-left mb-1">
                                                                                            <i class="feather icon-clipboard"></i>
                                                                                            อาการและอาการแสดง ในวันที่พบผู้ป่วย
                                                                                        </h4>
                                                                                        <hr style="height:1px;border-width:0;color:rgb(3, 0, 26);background-color:rgb(3, 0, 26)">

                                                                                        <div class="container-left">
                                                                                            <div class="row">

                                                                                                @if(is_null($data->patient_in_inquiries->fever))
                                                                                                    <div class="col-2 text-right">
                                                                                                        <div class="text-right form-check">
                                                                                                            <input class="form-check-input" checked="Checked" type="checkbox" name="fever" Disabled value="0" id="flexCheckDefault">
                                                                                                            <span class="mr-1">ไม่มีไข้</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="text-right">
                                                                                                        <div class="text-right form-check">
                                                                                                        <input class="form-check-input" type="checkbox" name="fever" Disabled value="1" id="flexCheckDefault">
                                                                                                        <span class="mr-1">มีไข้</span>
                                                                                                    </div>
                                                                                                </div>

                                                                                                @else
                                                                                                    <div class="col-2 text-right">
                                                                                                        <div class="text-right form-check">
                                                                                                            <input class="form-check-input" type="checkbox" name="fever" Disabled value="0" id="flexCheckDefault">
                                                                                                            <span class="mr-1">ไม่มีไข้</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="text-right">
                                                                                                        <div class="text-right form-check">
                                                                                                            <input class="form-check-input" checked="Checked" type="checkbox" name="fever" Disabled value="1" id="flexCheckDefault">
                                                                                                            <span class="mr-1">มีไข้</span>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                @endif

                                                                                                <div class="col-3 text-right ">
                                                                                                    <div>
                                                                                                        <span>อุณหภูมิแรกรับ
                                                                                                            <input value="{{$data->patient_in_inquiries->fever_degree}}" disabled name="fever_degree" placeholder="อุณหภูมิแรกรับ">
                                                                                                        </span><span> °C</span>
                                                                                                    </div>

                                                                                                    <hr style="height:1px;border-width:0;color:rgb(0, 0, 0);background-color:rgb(255, 255, 255)">

                                                                                                    <div>
                                                                                                        <span> O₂ Sat
                                                                                                            <input value="{{$data->patient_in_inquiries->fever_oxygen}}" disabled name="fever_oxygen" placeholder="ค่า O₂ Sat">
                                                                                                        </span><span> %</span>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-sm">
                                                                                                    @if(is_null($data->patient_in_inquiries->ventilator))
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" name="ventilator" Disabled value="0" id="flexCheckDefault">
                                                                                                            <span class="mr-1">ใส่เครื่องช่วยหายใจ</span>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" checked="Checked" type="checkbox" name="ventilator" Disabled value="1" id="flexCheckDefault">
                                                                                                            <span class="mr-1">ใส่เครื่องช่วยหายใจ</span>
                                                                                                        </div>
                                                                                                    @endif

                                                                                                    @if(is_null($data->patient_in_inquiries->mascle))
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" name="mascle" Disabled value="0" id="flexCheckDefault">
                                                                                                            <span class="mr-1">ปวดกล้ามเนื้อ</span>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" checked="Checked" type="checkbox" name="mascle" Disabled value="1" id="flexCheckDefault">
                                                                                                            <span class="mr-1">ปวดกล้ามเนื้อ</span>
                                                                                                        </div>
                                                                                                    @endif

                                                                                                    @if(is_null($data->patient_in_inquiries->breathe))
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" Disabled name="breathe" value="0" id="flexCheckDefault">
                                                                                                            <span class="mr-1">หายใจลำบาก</span>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="breathe" value="1" id="flexCheckDefault">
                                                                                                            <span class="mr-1">หายใจลำบาก</span>
                                                                                                        </div>
                                                                                                    @endif

                                                                                                    @if(is_null($data->patient_in_inquiries->nose))
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" Disabled name="breathe" value="0" id="flexCheckDefault">
                                                                                                            <span class="mr-1">จมูกไม่ได้กลิ่น</span>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="breathe" value="1" id="flexCheckDefault">
                                                                                                            <span class="mr-1">จมูกไม่ได้กลิ่น</span>
                                                                                                        </div>
                                                                                                    @endif

                                                                                                    @if(is_null($data->patient_in_inquiries->rash))
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" Disabled name="rash" value="0" id="flexCheckDefault">
                                                                                                            <span class="mr-1">ผื่น</span>
                                                                                                        </div>
                                                                                                    @else
                                                                                                    <div class="form-check">
                                                                                                        <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="rash" value="1" id="flexCheckDefault">
                                                                                                        <span>ผื่น
                                                                                                            <span>ตำแหน่ง
                                                                                                        </span>
                                                                                                        <input class="mx-2" value="{{$data->patient_in_inquiries->rash_details}}" disabled name="rash_details" placeholder="ไม่มีข้อมูล">
                                                                                                        </span>
                                                                                                    </div>
                                                                                                    @endif

                                                                                                </div>

                                                                                                <div class="col-sm">
                                                                                                    @if(is_null($data->patient_in_inquiries->cough))
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" Disabled name="cough" value="0" id="flexCheckDefault">
                                                                                                            <span class="mr-1">ไอ</span>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="cough" value="1" id="flexCheckDefault">
                                                                                                            <span class="mr-1">ไอ</span>
                                                                                                        </div>
                                                                                                    @endif

                                                                                                    @if(is_null($data->patient_in_inquiries->runny))
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" Disabled name="runny" value="0" id="flexCheckDefault">
                                                                                                            <span class="mr-1">มีน้ำมูก</span>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="runny" value="1" id="flexCheckDefault">
                                                                                                            <span class="mr-1">มีน้ำมูก</span>
                                                                                                        </div>
                                                                                                    @endif

                                                                                                    @if(is_null($data->patient_in_inquiries->headache))
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" Disabled name="headache" value="0" id="flexCheckDefault">
                                                                                                            <span class="mr-1">ปวดศรีษะ</span>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="headache" value="1" id="flexCheckDefault">
                                                                                                            <span class="mr-1">ปวดศรีษะ</span>
                                                                                                        </div>
                                                                                                    @endif

                                                                                                    @if(is_null($data->patient_in_inquiries->tongue))
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" Disabled name="tongue" value="0" id="flexCheckDefault">
                                                                                                            <span class="mr-1">ลิ้นไม่รับรส</span>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="tongue" value="1" id="flexCheckDefault">
                                                                                                            <span class="mr-1">ลิ้นไม่รับรส</span>
                                                                                                        </div>
                                                                                                    @endif

                                                                                                    @if(is_null($data->patient_in_inquiries->other))
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" Disabled name="other_fisrt" value="0" id="flexCheckDefault">
                                                                                                            <span class="mr-1">อื่นๆ</span>
                                                                                                        </div>
                                                                                                    @else
                                                                                                    <div class="form-check">
                                                                                                        <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="other_fisrt" value="1" id="flexCheckDefault">
                                                                                                        <span>อื่นๆ
                                                                                                            <span>รายละเอียด
                                                                                                        </span>
                                                                                                        <input class="mx-2" value="{{$data->patient_in_inquiries->other_details}}" disabled name="other_details_fisrt" placeholder="ไม่มีข้อมูล">
                                                                                                        </span>
                                                                                                    </div>
                                                                                                    @endif

                                                                                                </div>

                                                                                                <div class="col-sm">
                                                                                                    @if(is_null($data->patient_in_inquiries->neck))
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" Disabled name="neck" value="0" id="flexCheckDefault">
                                                                                                            <span class="mr-1">เจ็บคอ</span>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="neck" value="1" id="flexCheckDefault">
                                                                                                            <span class="mr-1">เจ็บคอ</span>
                                                                                                        </div>
                                                                                                    @endif

                                                                                                    @if(is_null($data->patient_in_inquiries->phlegm))
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" Disabled name="phlegm" value="0" id="flexCheckDefault">
                                                                                                            <span class="mr-1">มีเสมหะ</span>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="phlegm" value="1" id="flexCheckDefault">
                                                                                                            <span class="mr-1">มีเสมหะ</span>
                                                                                                        </div>
                                                                                                    @endif

                                                                                                    @if(is_null($data->patient_in_inquiries->liquid))
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" Disabled name="liquid" value="0" id="flexCheckDefault">
                                                                                                            <span class="mr-1">ถ่ายเหลว</span>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="liquid" value="1" id="flexCheckDefault">
                                                                                                            <span class="mr-1">ถ่ายเหลว</span>
                                                                                                        </div>
                                                                                                    @endif

                                                                                                    @if(is_null($data->patient_in_inquiries->eye))
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" Disabled name="eye" value="0" id="flexCheckDefault">
                                                                                                            <span class="mr-1">ตาแดง</span>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="eye" value="1" id="flexCheckDefault">
                                                                                                            <span class="mr-1">ตาแดง</span>
                                                                                                        </div>
                                                                                                    @endif

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <hr style="height:1px;border-width:0;color:rgb(3, 0, 26);background-color:rgb(3, 0, 26)">

                                                                                        <div class="container-left">
                                                                                            <div class="row">
                                                                                                <div class="col-1"></div>
                                                                                                <h6><strong>เอกซเรย์ปอด (ครั้งแรก)</strong></h6>

                                                                                                @if(is_null($data->cli_cov_inquiries->x_ray_id))
                                                                                                    <div class="col-1">
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" Disabled id="flexCheckDefault">
                                                                                                            <span class="mr-1">ทำ</span>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="col-1">
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" checked="Checked" Disabled id="flexCheckDefault">
                                                                                                            <span class="mr-1">ไม่ได้ทำ</span>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                @else

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

                                                                                                @endif

                                                                                                <div class="col-3">
                                                                                                    <span>เมื่อวันที่</span>
                                                                                                    <input type="date" id="first-name-icon" class="form-control-plaintext-sm" value="{{$data->cli_cov_inquiries->xray_in_inquiries->date}}" disabled name="date_xrey" placeholder="วันที่">
                                                                                                </div>
                                                                                                <div class="col-3">
                                                                                                    <span>ระบุผล</span>
                                                                                                    <input type="text" id="first-name-icon" class="form-control-plaintext-auto" value="{{$data->cli_cov_inquiries->xray_in_inquiries->result}}" disabled name="result_xrey" placeholder="ระบุผล">
                                                                                                </div>
                                                                                            </div>

                                                                                            <hr style="height: 0px; border-width:0;color:rgb(0, 0, 0);background-color:rgb(255, 255, 255)">
                                                                                            <div class="row">
                                                                                                <div class="col-1"></div>
                                                                                                <h6><strong>CBC (ครั้งแรก)</strong></h6>

                                                                                                <div class="col-2">
                                                                                                    <span>วันที่</span>
                                                                                                    <input type="date" id="first-name-icon" class="form-control-plaintext-sm" value="{{$data->cbc_in_inquiries->date}}" disabled name="date_cbc" placeholder="วันที่ CBC">
                                                                                                </div>
                                                                                                <div class="col-3">
                                                                                                    <span>ผล Hb</span>
                                                                                                    <input type="text" id="first-name-icon" class="form-control-plaintext-sm" value="{{$data->cbc_in_inquiries->hb}}" disabled name="hb" placeholder="ค่า HB">
                                                                                                    <span>g/dL</span>
                                                                                                </div>
                                                                                                <div class="col-2.5">
                                                                                                    <span>Hct</span>
                                                                                                    <input type="text" id="first-name-icon" class="form-control-plaintext-sm" value="{{$data->cbc_in_inquiries->htc}}" disabled name="htc" placeholder="ค่า HTC">
                                                                                                    <span>%</span>
                                                                                                </div>
                                                                                                <div class="col-3">
                                                                                                    <span>Platelet count</span>
                                                                                                    <input type="text" id="first-name-icon" class="form-control-plaintext-auto" value="{{$data->cbc_in_inquiries->platelet}}" disabled name="platelet" placeholder="Platelet count">
                                                                                                    <span>x10³</span>
                                                                                                </div>
                                                                                            </div>

                                                                                            <hr style="height: 0px;border-width:0;color:rgb(0, 0, 0);background-color:rgb(255, 255, 255)">

                                                                                            <div class="row">
                                                                                                <div class="col-1"></div>

                                                                                                <div class="col-2">
                                                                                                    <span>VBC</span>
                                                                                                    <input type="text" id="first-name-icon" class="form-control-plaintext-auto" value="{{$data->cbc_in_inquiries->wbc}}" disabled name="wbc" placeholder="ค่า VBC">
                                                                                                </div>
                                                                                                <div class="col-2">
                                                                                                    <span>(N</span>
                                                                                                    <input type="text" id="first-name-icon" class="form-control-plaintext-sm" value="{{$data->cbc_in_inquiries->n}}" disabled name="n" placeholder="ค่า N">
                                                                                                    <span>%</span>
                                                                                                </div>
                                                                                                <div class="col-2">
                                                                                                    <span>L</span>
                                                                                                    <input type="text" id="first-name-icon" class="form-control-plaintext-sm" value="{{$data->cbc_in_inquiries->l}}" disabled name="l" placeholder="ค่า L">
                                                                                                    <span>%</span>
                                                                                                </div>
                                                                                                <div class="col-2.5">
                                                                                                    <span>Atyp lymph</span>
                                                                                                    <input type="text" id="first-name-icon" class="form-control-plaintext-auto" value="{{$data->cbc_in_inquiries->atyp}}" disabled name="atyp" placeholder="ค่า ATYP">
                                                                                                    <span>%</span>
                                                                                                </div>
                                                                                            </div>

                                                                                            <hr style="height: 0px;border-width:0;color:rgb(0, 0, 0);background-color:rgb(255, 255, 255)">

                                                                                            <div class="row">
                                                                                                    <div class="col-1"></div>


                                                                                                    <div class="col-2 mx-1">
                                                                                                        <span>Mono</span>
                                                                                                        <input type="text" id="first-name-icon" class="form-control-plaintext-auto" value="{{$data->cbc_in_inquiries->mono}}" disabled name="mono" placeholder="ค่า MONO">
                                                                                                    </div>

                                                                                                    <div class="col-3 mx-1">
                                                                                                        <span>อื่นๆ</span>
                                                                                                        <input type="text" id="first-name-icon" class="form-control-plaintext-auto" value="{{$data->cbc_in_inquiries->other_details}}" disabled name="other_details_cbc" placeholder="รายละเอียดอื่นๆ">
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
                                                                                                    <input type="text" id="first-name-icon" class="form-control-plaintext-sm" value="{{$data->detail_his_inquiries->type_check_covid_id}}" disabled name="type_check_covid_id" placeholder="วิธีการตรวจ">
                                                                                                </div>

                                                                                                    @if(is_null($data->test_in_inquiries->nagative))
                                                                                                        <div class="col-1.5">
                                                                                                            <div class="form-check">
                                                                                                                <input class="form-check-input" type="checkbox" Disabled name="nagative" value="0" id="flexCheckDefault">
                                                                                                                <span class="mr-1">Negative</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div class="col-1.5">
                                                                                                            <div class="form-check">
                                                                                                                <input class="form-check-input" checked="Checked" type="checkbox"  Disabled name="nagative" value="1" id="flexCheckDefault">
                                                                                                                <span class="mr-1">Negative</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    @endif

                                                                                                    @if(is_null($data->test_in_inquiries->positive))
                                                                                                        <div class="col-1">
                                                                                                            <div class="form-check">
                                                                                                                <input class="form-check-input" type="checkbox" Disabled name="positive" value="0" id="flexCheckDefault">
                                                                                                                <span class="mr-1">Positive</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div class="col-1">
                                                                                                            <div class="form-check">
                                                                                                                <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="positive" value="1" id="flexCheckDefault">
                                                                                                                <span class="mr-1">Positive</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    @endif

                                                                                                    @if(is_null($data->test_in_inquiries->flua))
                                                                                                        <div class="col-1">
                                                                                                            <div class="form-check">
                                                                                                                <input class="form-check-input" type="checkbox" Disabled name="flua" value="0" id="flexCheckDefault">
                                                                                                                <span class="mr-1">Flu A</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div class="col-1">
                                                                                                            <div class="form-check">
                                                                                                                <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="flua" value="1" id="flexCheckDefault">
                                                                                                                <span class="mr-1">Flu A</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    @endif

                                                                                                    @if(is_null($data->test_in_inquiries->flub))
                                                                                                        <div class="col-1">
                                                                                                            <div class="form-check">
                                                                                                                <input class="form-check-input" type="checkbox" Disabled name="flub" value="0" id="flexCheckDefault">
                                                                                                                <span class="mr-1">Flu B</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div class="col-1">
                                                                                                            <div class="form-check">
                                                                                                                <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="flub" value="1" id="flexCheckDefault">
                                                                                                                <span class="mr-1">Flu B</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    @endif

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
                                                                                                    @foreach ($data as $id)
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
                                                                                                    @endforeach
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
                                                                                                    @foreach ($data as $id)
                                                                                                    <tr>
                                                                                                        <td>{{$data->cli_cov_inquiries->anti_in_inquiries->number}}</td>
                                                                                                        <td>{{$data->cli_cov_inquiries->anti_in_inquiries->date}}</td>
                                                                                                        <td>{{$data->cli_cov_inquiries->anti_in_inquiries->example}}</td>
                                                                                                        <td>{{$data->cli_cov_inquiries->anti_in_inquiries->location}}</td>
                                                                                                        <td>{{$data->cli_cov_inquiries->anti_in_inquiries->result}}</td>

                                                                                                        <td>

                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    @endforeach
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

                                                                                                    @if(is_null($data->patient_type_inquiries->patient))
                                                                                                        <div class="col-1.5">
                                                                                                            <div class="form-check">
                                                                                                                <input class="form-check-input" type="checkbox" Disabled name="patient" value="0" id="flexCheckDefault">
                                                                                                                <span class="mr-1">ผู้ป่วยนอก</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-1.5">
                                                                                                            <div class="form-check">
                                                                                                                <input class="form-check-input" type="checkbox" Disabled name="patient" value="1" id="flexCheckDefault">
                                                                                                                <span class="mr-1">ผู้ป่วยใน</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    @elseif(($data->patient_type_inquiries->patient) == '0')
                                                                                                        <div class="col-1.5">
                                                                                                            <div class="form-check">
                                                                                                                <input class="form-check-input" type="checkbox" checked="Checked" Disabled name="patient" value="0" id="flexCheckDefault">
                                                                                                                <span class="mr-1">ผู้ป่วยนอก</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-1.5">
                                                                                                            <div class="form-check">
                                                                                                                <input class="form-check-input" type="checkbox" Disabled name="patient" value="1" id="flexCheckDefault">
                                                                                                                <span class="mr-1">ผู้ป่วยใน</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    @else
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
                                                                                                    @endif

                                                                                                <div class="col-2.5">
                                                                                                    <span class="ml-2">admit วันที่</span>
                                                                                                    <input type="date" id="first-name-icon" class="form-control-plaintext-sm" value="{{$data->patient_type_inquiries->date}}" disabled name="date_admit" placeholder="วันที่">
                                                                                                </div>
                                                                                                <div class="col-2.5">
                                                                                                    <span class="ml-4">การวินิจฉัยเบื้องต้น</span>
                                                                                                    <input type="text" id="first-name-icon" class="form-control-plaintext-auto" value="{{$data->patient_type_inquiries->diagnoes}}" disabled name="diagnoes_admit" placeholder="ผลวินิจฉัยเบื้องต้น">
                                                                                                </div>
                                                                                            </div>
                                                                                            <hr style="height:0px;border-width:0;color:rgb(0, 0, 0);background-color:rgb(255, 255, 255)">

                                                                                            <div class="row">
                                                                                                <h6><strong class="text-right">การให้ยารักษาโรคติดเชื้อไวรัสโคโรน่า 2019</strong></h6>
                                                                                                <div class="col-0.5"></div>

                                                                                                @if(is_null($data->medic_in_inquiries->give))
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

                                                                                                    @elseif(($data->medic_in_inquiries->give) == 0)
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
                                                                                                    @else
                                                                                                        <div class="ml-4">
                                                                                                                <div class="form-check">
                                                                                                                    <input class="form-check-input" type="checkbox" disabled name="give" value="0" id="flexCheckDefault">
                                                                                                                    <span class="mr-1">ไม่ให้ยา</span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-4">
                                                                                                                <div class="form-check">
                                                                                                                    <input class="form-check-input" checked="Checked" type="checkbox" disabled name="give" value="1" id="flexCheckDefault">
                                                                                                                    <span>ให้ยา
                                                                                                                        <span class="mx-2">วันที่รับยาโดสแรก
                                                                                                                    </span>
                                                                                                                    <input class="mx-5" type="date" value="{{$data->medic_in_inquiries->first_dose}}" disabled name="first_dose" placeholder="ไม่มีข้อมูล">
                                                                                                                    </span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                    @endif

                                                                                                <div class="col-sm">
                                                                                                    @if(is_null($data->medic_in_inquiries->remdesivir))
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" Disabled name="remdesivir" value="0" id="flexCheckDefault">
                                                                                                            <span class="mr-1">Remdesivir</span>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="remdesivir" value="1" id="flexCheckDefault">
                                                                                                            <span class="mr-1">Remdesivir</span>
                                                                                                        </div>
                                                                                                    @endif

                                                                                                    @if(is_null($data->medic_in_inquiries->favipiravir))
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" Disabled name="favipiravir" value="0" id="flexCheckDefault">
                                                                                                            <span class="mr-1">Favipiravir</span>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="favipiravir" value="1" id="flexCheckDefault">
                                                                                                            <span class="mr-1">Favipiravir</span>
                                                                                                        </div>
                                                                                                    @endif

                                                                                                    @if(is_null($data->medic_in_inquiries->lopinavir))
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" Disabled name="lopinavir" value="0" id="flexCheckDefault">
                                                                                                            <span class="mr-1">Lopinavir/ritonavir</span>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="lopinavir" value="1" id="flexCheckDefault">
                                                                                                            <span class="mr-1">Lopinavir/ritonavir</span>
                                                                                                        </div>
                                                                                                    @endif

                                                                                                    @if(is_null($data->medic_in_inquiries->darunavir))
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" Disabled name="darunavir" value="0" id="flexCheckDefault">
                                                                                                            <span class="mr-1">Darunavir</span>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="darunavir" value="1" id="flexCheckDefault">
                                                                                                            <span class="mr-1">Darunavir</span>
                                                                                                        </div>
                                                                                                    @endif

                                                                                                    @if(is_null($data->medic_in_inquiries->ritonavir))
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" Disabled name="ritonavir" value="0" id="flexCheckDefault">
                                                                                                            <span class="mr-1">Ritonavir</span>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="ritonavir" value="1" id="flexCheckDefault">
                                                                                                            <span class="mr-1">Ritonavir</span>
                                                                                                        </div>
                                                                                                    @endif

                                                                                                    @if(is_null($data->medic_in_inquiries->ch))
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" Disabled name="ch" value="0" id="flexCheckDefault">
                                                                                                            <span class="mr-1">Chloroquine/Hydroxychloroquine</span>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="ch" value="1" id="flexCheckDefault">
                                                                                                            <span class="mr-1">Chloroquine/Hydroxychloroquine</span>
                                                                                                        </div>
                                                                                                    @endif

                                                                                                    @if(is_null($data->medic_in_inquiries->other))

                                                                                                            <div class="form-check">
                                                                                                                <input class="form-check-input" type="checkbox" Disabled name="other_medic" value="0" id="flexCheckDefault">
                                                                                                                <span class="mr-1">อื่นๆ</span>
                                                                                                            </div>
                                                                                                    @else
                                                                                                            <div class="form-check">
                                                                                                                <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="other_medic" value="1" id="flexCheckDefault">
                                                                                                                <span>อื่นๆ
                                                                                                                    <span>ระบุ
                                                                                                                </span>
                                                                                                                <input class="mx-2" value="{{$data->medic_in_inquiries->other_details}}" disabled name="other_details_medic" name="other_details_medic" placeholder="ไม่มีข้อมูล">
                                                                                                                </span>
                                                                                                            </div>
                                                                                                    @endif

                                                                                                    <hr style="height:0px;border-width:0;color:rgb(0, 0, 0);background-color:rgb(255, 255, 255)">

                                                                                                </div>

                                                                                                <div class="row">

                                                                                                    <h6><strong class="text-left">สถานะผู้ป่วย</strong></h6>

                                                                                                    @if(is_null($data->status_in_inquiries->disappear))
                                                                                                        <div class="col-1.5 mx-1">
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" Disabled name="disappear" value="0" id="flexCheckDefault">
                                                                                                            <span class="mr-1">หาย</span>
                                                                                                        </div>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div class="col-1.5 mx-1">
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="disappear" value="1" id="flexCheckDefault">
                                                                                                            <span class="mr-1">หาย</span>
                                                                                                        </div>
                                                                                                        </div>
                                                                                                    @endif

                                                                                                    @if(is_null($data->status_in_inquiries->not))
                                                                                                        <div class="col-1.5 mx-1">
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" Disabled name="not" value="0" id="flexCheckDefault">
                                                                                                            <span class="mr-1">ยังรักษาอยู่</span>
                                                                                                        </div>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div class="col-1.5 mx-1">
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="not" value="1" id="flexCheckDefault">
                                                                                                            <span class="mr-1">ยังรักษาอยู่</span>
                                                                                                        </div>
                                                                                                        </div>
                                                                                                    @endif

                                                                                                    @if(is_null($data->status_in_inquiries->died))
                                                                                                        <div class="col-1.5 mx-1">
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" Disabled name="died" value="0" id="flexCheckDefault">
                                                                                                            <span class="mr-1">เสียชีวิต</span>
                                                                                                        </div>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div class="col-1.5 mx-1">
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="died" value="1" id="flexCheckDefault">
                                                                                                            <span class="mr-1">เสียชีวิต</span>
                                                                                                        </div>
                                                                                                        </div>
                                                                                                    @endif

                                                                                                    @if(is_null($data->status_in_inquiries->send))
                                                                                                        <div class="col-1.5 mx-1">
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" Disabled name="send" value="0" id="flexCheckDefault">
                                                                                                            <span class="mr-1">ส่งตัวไป</span>
                                                                                                        </div>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div class="col-1.5 mx-1">
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="send" value="1" id="flexCheckDefault">
                                                                                                            <span class="mr-1">ส่งตัวไป</span>
                                                                                                            <span class="">รพ.</span>
                                                                                                            <input type="text" id="first-name-icon" class="form-control-plaintext-auto" value="{{$data->status_in_inquiries->sendhos}}" disabled name="sendhos" placeholder="ไม่มีข้อมูล">
                                                                                                        </div>
                                                                                                        </div>
                                                                                                    @endif

                                                                                                    @if(is_null($data->status_in_inquiries->other))
                                                                                                        <div class="col-1.5 mx-1">
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" type="checkbox" Disabled name="other_status" value="0" id="flexCheckDefault">
                                                                                                            <span class="mr-1">อื่นๆ</span>
                                                                                                        </div>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div class="col-1.5 mx-1">
                                                                                                        <div class="form-check">
                                                                                                            <input class="form-check-input" checked="Checked" type="checkbox" Disabled name="other_status" value="1" id="flexCheckDefault">
                                                                                                            <span class="mr-1">อื่นๆ</span>
                                                                                                            <span class="">ระบุ</span>
                                                                                                            <input type="text" id="first-name-icon" class="form-control-plaintext-auto" value="{{$data->status_in_inquiries->other_details}}" disabled name="other_details_status" placeholder="ไม่มีข้อมูล">
                                                                                                        </div>
                                                                                                        </div>
                                                                                                    @endif

                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </section>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                <!-- End Top Body -->


                                        </div>
                                    </section>
                                </div>

                                <!-- button -->

                                <div class="modal-footer">
                                    <div class="row">
                                        <div class="col-12">


                                        </div>
                                    </div>
                                </div>
                                <!-- End button -->

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

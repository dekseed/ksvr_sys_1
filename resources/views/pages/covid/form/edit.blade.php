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
                                <li class="breadcrumb-item active">แก้ไขข้อมูลรายการ
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
                    <div class="col-md-12 col-12">
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

                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4 class="card-title"><i class="feather icon-file-text"></i> [แก้ไขข้อมูลส่วนตัวผู้ป่วย]</h4>
                                                        </div>
                                                        <form class="form form-horizontal" id="update" action="{{ route('inquiry-form-Covid.update', $data->id)}}" method="POST" enctype="multipart/form-data" multiple>
                                                            {{ csrf_field() }}
                                                            {{ method_field('PUT') }}

                                                            <!-- button -->
                                                            <div class="modal-footer">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <a class="btn btn-danger waves-effect waves-light mt-1" href="{{ route('inquiry-form-Covid.show', $data->id)}}"><i class="feather icon-x"></i> ยกเลิก</a>
                                                                        <button type="submit" class="btn btn-success mr-1 waves-effect waves-light mt-1"><i class="feather icon-save"></i> บันทึก</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End button -->


 <!-- Body Left -->

 <div class="content-body">
                                                    <section id="multiple-column-form">
                                                        <div class="row match-height">
                                                            <div class="col-md-6 col-12">
                                                                <div class="card border-success p-1">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                        </div>
                                                                        <div class="content-body">
                                                                            <section id="multiple-column-form">
                                                                                <div class="row">
                                                                                    <div class="col-12">
                                                                                        <h3 class="text-left mb-2">
                                                                                            <i class="feather icon-clipboard"></i>
                                                                                            ข้อมูลทั่วไป
                                                                                        </h3>
                                                                                        <hr style="height:1px;border-width:0;color:rgb(3, 0, 26);background-color:rgb(3, 0, 26)">

                                                                                        <div class="my-1 form-body">
                                                                                            <div class="row">
                                                                                                <div class="col-12">
                                                                                                    <div class="form-group row">
                                                                                                        <div class="col-md-4">
                                                                                                            <span>หมายเลขบัตรประชาชน</span>
                                                                                                        </div>
                                                                                                        <div class="col-md-8">
                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                <div class="input-field">
                                                                                                                    <input type="number" id="number_id" class="form-control input1" placeholder="ค้นหาเลขบัตรประชาชน.." name="number">
                                                                                                                    <div class="form-control-position">
                                                                                                                        <i class="fa fa-id-card-o"></i>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-12">
                                                                                                    <div class="form-group row">
                                                                                                        <div class="col-md-4">
                                                                                                            <span>คำนำหน้า</span>
                                                                                                        </div>
                                                                                                        <div class="col-md-8">
                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                <select class="form-control select2-l-1" name="title_name_id" id="basicSelect">
                                                                                                                    <option value=""> --- กรุณาเลือก ---</option>

                                                                                                                    @foreach ($name_title as $roles)
                                                                                                                    <option value="{{ $roles->id }}">{{ $roles->name }}
                                                                                                                    </option>
                                                                                                                    @endforeach

                                                                                                                </select>
                                                                                                                <div class="form-control-position">
                                                                                                                    <i class="fa fa-id-card-o"></i>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-12">
                                                                                                    <div class="form-group row">
                                                                                                        <div class="col-md-4">
                                                                                                            <span>ชื่อ</span>
                                                                                                        </div>
                                                                                                        <div class="col-md-8">
                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                <input type="text" id="brand" class="form-control input1" placeholder="ชื่อ" name="first_name">
                                                                                                                <div class="form-control-position">
                                                                                                                    <i class="fa fa-user-circle-o"></i>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-12">
                                                                                                    <div class="form-group row">
                                                                                                        <div class="col-md-4">
                                                                                                            <span>นามสกุล</span>
                                                                                                        </div>
                                                                                                        <div class="col-md-8">
                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                <input type="text" id="model" class="form-control input1" placeholder="นามสกุล" name="last_name">
                                                                                                                <div class="form-control-position">
                                                                                                                    <i class="fa fa-user-circle-o"></i>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-12">
                                                                                                    <div class="form-group row">
                                                                                                        <div class="col-md-4">
                                                                                                            <span>เพศ</span>
                                                                                                        </div>
                                                                                                        <div class="col-md-8">
                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                <select class="form-control" id="basicSelect" name="sex_id" onchange="showDiv(this)">
                                                                                                                    <option>เพศ</option>
                                                                                                                    <option value="0">ชาย</option>
                                                                                                                    <option value="1">หญิง</option>
                                                                                                                </select>
                                                                                                                <div id="hidden_div" style="display:none;">
                                                                                                                    <div class="container-fluid">
                                                                                                                        <div class="row">
                                                                                                                            <div class="mt-1 col-sm-12">
                                                                                                                                <label style="color:rgb(53, 141, 141);font-size:14px" for="password-icon">กรณีเพศหญิง </label>
                                                                                                                                <fieldset>
                                                                                                                                    <div class="mt-1 vs-radio-con">
                                                                                                                                        <input type="radio" name="vueradio" value="false" onclick="womb0();">
                                                                                                                                        <span class="vs-radio">
                                                                                                                                            <span class="vs-radio--border"></span>
                                                                                                                                            <span class="vs-radio--circle"></span>
                                                                                                                                        </span>
                                                                                                                                        <span class="">ตั้งครรภ์</span>
                                                                                                                                    </div>
                                                                                                                                </fieldset>
                                                                                                                            </div>
                                                                                                                            <br /><br />
                                                                                                                            <div class=" col-sm-12">
                                                                                                                                <fieldset>
                                                                                                                                    <div class="vs-radio-con">
                                                                                                                                        <input type="radio" name="vueradio" value="false" onclick="womb1();">
                                                                                                                                        <span class="vs-radio">
                                                                                                                                            <span class="vs-radio--border"></span>
                                                                                                                                            <span class="vs-radio--circle"></span>
                                                                                                                                        </span>
                                                                                                                                        <span class="">ไม่ได้ตั้งครรภ์</span>
                                                                                                                                    </div>
                                                                                                                                </fieldset>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="form-control-position">
                                                                                                                    <i class="fa fa-venus-mars"></i>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <script type="text/javascript">
                                                                                                            function showDiv(select) {
                                                                                                                if (select.value == 1) {
                                                                                                                    document.getElementById('hidden_div').style.display = "block";
                                                                                                                } else {
                                                                                                                    document.getElementById('hidden_div').style.display = "none";
                                                                                                                }
                                                                                                            }
                                                                                                        </script>

                                                                                                        <script type="text/javascript">
                                                                                                            function womb0() {
                                                                                                                document.getElementById('hidden_womb').style.display = 'block';
                                                                                                            }

                                                                                                            function womb1() {
                                                                                                                document.getElementById('hidden_womb').style.display = 'none';
                                                                                                            }
                                                                                                        </script>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-12">
                                                                                                    <div class="form-group row">
                                                                                                        <div class="col-md-4">
                                                                                                            <span>อายุ</span>
                                                                                                        </div>
                                                                                                        <div class="col-md-8">
                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                <input type="number" id="expenditure" class="form-control input1" placeholder="อายุ" name="age">
                                                                                                                <div class="form-control-position">
                                                                                                                    <i class="fa fa-address-card-o"></i>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-12">
                                                                                                    <div class="form-group row">
                                                                                                        <div class="col-md-4">
                                                                                                            <span>สัญชาติ</span>
                                                                                                        </div>
                                                                                                        <div class="col-md-8">
                                                                                                            <div class="position-relative has-icon-left">

                                                                                                                <input type="text" id="year" class="form-control input1" name="nationnaloty" placeholder="สัญชาติ">
                                                                                                                <div class="form-control-position">
                                                                                                                    <i class="fa fa-flag-o"></i>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="form-body">
                                                                                            <h4 class="card-title"><i class="fa fa-comments-o"></i> ข้อมูลเพิ่มเติม</h4>
                                                                                        </div>
                                                                                        <hr style="height:1px;border-width:0;color:rgb(3, 0, 26);background-color:rgb(3, 0, 26)">

                                                                                        <div class="form-body">
                                                                                            <div class="row">
                                                                                                <div class="col-12">
                                                                                                    <div id="hidden_div" class="form-group row" style="display:block;">
                                                                                                        <div class="table-responsive border rounded px-1">

                                                                                                            <div class="form-group row">
                                                                                                                <div class="col-md-4">
                                                                                                                    <span>อาชีพ <br><em style="color:red;font-size:12px">(ระบุลักษณะงานอย่างละเอียด)</em></span>
                                                                                                                </div>
                                                                                                                <div class="col-md-8">
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="text-icon" class="form-control" name="occ" placeholder="อาชีพ">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-briefcase"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group row">
                                                                                                                <div class="col-md-4">
                                                                                                                    <span>สถานที่ทำงาน/สถานศึกษา</span>
                                                                                                                </div>
                                                                                                                <div class="col-md-8">
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="text-icon" class="form-control" name="location" placeholder="ชื่อสถานที่ทำงาน/สถานศึกษา">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-building-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group row">
                                                                                                                <div class="col-md-4">
                                                                                                                    <span>เบอร์โทรศัพท์ที่ติดต่อได้</span>
                                                                                                                </div>
                                                                                                                <div class="col-md-8">
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="number" id="number-icon" class="form-control" name="tel" placeholder="เบอร์โทรศัพท์ที่ติดต่อได้">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-tablet"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group row">
                                                                                                                <div class="col-md-4">
                                                                                                                    <span>เบอร์โทรศัพท์ที่ใช้ลง<br>แอปพลิเคชัน "หมอชนะ"</span>
                                                                                                                </div>
                                                                                                                <div class="col-md-8">
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="number" class="form-control" name="telapp" placeholder='เบอร์โทรศัพท์ที่ใช้ลงแอปพลิเคชัน "หมอชนะ"'>
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-tablet"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="table-responsive border rounded px-1">
                                                                                                            <div id="hidden_div_1" class="mt-2 form-group row">
                                                                                                                <div class="col-md-4">
                                                                                                                    <span>ที่อยู่ขณะป่วยในประเทศไทย</span>
                                                                                                                </div>
                                                                                                                <div class="col-md-8">
                                                                                                                    <div class="position-relative has-icon-left">

                                                                                                                        <select class="form-control select2-l-1" name="title_name_id" id="basicSelect">
                                                                                                                            <option value=""> --- กรุณาเลือก ---</option>

                                                                                                                            @foreach ($home_type as $roles)
                                                                                                                            <option value="{{ $roles->id }}">{{ $roles->name }}
                                                                                                                            </option>
                                                                                                                            @endforeach

                                                                                                                        </select>

                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-thumb-tack"></i>
                                                                                                                        </div>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                            <div id="hidden_div_1" class="mt-2 form-group row">
                                                                                                                <div class="col-md-4">
                                                                                                                    <span>โรคประจำตัว</span>
                                                                                                                </div>
                                                                                                                <div class="col-md-8">
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="text-icon" class="form-control" name="disease" placeholder="โรคประจำตัว">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-stethoscope"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group row">
                                                                                                                <div class="col-md-6 col-12" required>
                                                                                                                    <div class="form-group">
                                                                                                                        <span for="password-icon"><em>การสูบบุหรี่ </em></span>
                                                                                                                        <div class="col-sm-12">
                                                                                                                            <fieldset>
                                                                                                                                <div class="mt-1 vs-radio-con">
                                                                                                                                    <input type="radio" name="vueradio" value="0" onclick="();">
                                                                                                                                    <span class="vs-radio">
                                                                                                                                        <span class="vs-radio--border"></span>
                                                                                                                                        <span class="vs-radio--circle"></span>
                                                                                                                                    </span>
                                                                                                                                    <span class="">ไม่เคยสูบ</span>
                                                                                                                                </div>
                                                                                                                            </fieldset>

                                                                                                                            <fieldset>
                                                                                                                                <div class="vs-radio-con">
                                                                                                                                    <input type="radio" name="vueradio" value="1" onclick="();">
                                                                                                                                    <span class="vs-radio">
                                                                                                                                        <span class="vs-radio--border"></span>
                                                                                                                                        <span class="vs-radio--circle"></span>
                                                                                                                                    </span>
                                                                                                                                    <span class="">ยังคงสูบ</span>
                                                                                                                                </div>
                                                                                                                            </fieldset>
                                                                                                                            <fieldset>
                                                                                                                                <div class="vs-radio-con">
                                                                                                                                    <input type="radio" name="vueradio" value="2" onclick="();">
                                                                                                                                    <span class="vs-radio">
                                                                                                                                        <span class="vs-radio--border"></span>
                                                                                                                                        <span class="vs-radio--circle"></span>
                                                                                                                                    </span>
                                                                                                                                    <span class="">เคยสูบแต่เลิกแล้ว</span>
                                                                                                                                </div>
                                                                                                                            </fieldset>
                                                                                                                        </div>


                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="form-group">
                                                                                                                    <div class="col-12">
                                                                                                                        <label for="email-id-column">หมายเหตุ
                                                                                                                            <em style="color:red;font-size:12px">(ถ้ามี)</em></label>
                                                                                                                    </div>
                                                                                                                    <div class="col-12">
                                                                                                                        <div class="position-relative has-icon-left">
                                                                                                                            <input type="text" id="note" class="form-control" placeholder="หมายเหตุ (ถ้ามี)" name="note">
                                                                                                                            <div class="form-control-position">
                                                                                                                                <i class="feather icon-search"></i>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <div class="form-body">
                                                                                                        <h4 class="card-title"><i class="fa fa-comments-o"></i> การได้รับวัคซีน</h4>
                                                                                                    </div>
                                                                                                    <hr style="height:1px;border-width:0;color:rgb(3, 0, 26);background-color:rgb(3, 0, 26)">

                                                                                                    <div class="form-group row">
                                                                                                        <div class="col-md-4">
                                                                                                            <span>การได้รับวัคซีน</span>
                                                                                                        </div>
                                                                                                        <div class="col-md-8">
                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                <input type="text" id="text-icon" class="form-control" name="location" placeholder="เคยได้รับวัคซีนหรือไม่">
                                                                                                                <div class="form-control-position">
                                                                                                                    <i class="fa fa-building-o"></i>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="form-group row">
                                                                                                        <div class="col-md-4">
                                                                                                            <span>จำนวนวัคซีน <br><em style="color:red;font-size:12px">(จำนวนวัคซีนทีได้รับ)</em></span>
                                                                                                        </div>
                                                                                                        <div class="col-md-8">
                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                <input type="text" id="text-icon" class="form-control" name="occ" placeholder="จำนวนวัคซีน">
                                                                                                                <div class="form-control-position">
                                                                                                                    <i class="fa fa-briefcase"></i>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>


                                                                                                    <hr style="height:1px;border-width:0;color:#adb5bd;background-color:#adb5bd">
                                                                                                    <div class="form-group row">
                                                                                                        <div class="col-md-4">
                                                                                                            <span>ชื่อวัคซีน เข็มที่ 1</span>
                                                                                                        </div>
                                                                                                        <div class="col-md-8">
                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                <input type="text" id="text-icon" class="form-control" name="location" placeholder="ชื่อวัคซีน">
                                                                                                                <div class="form-control-position">
                                                                                                                    <i class="fa fa-building-o"></i>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="form-group row">
                                                                                                        <div class="col-md-4">
                                                                                                            <span>วันที่ได้รับวัคซีนเข็ม 1</span>
                                                                                                        </div>
                                                                                                        <div class="col-md-8">
                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                <input type="number" id="number-icon" class="form-control" name="tel" placeholder="วันที่ได้รับวัคซีน">
                                                                                                                <div class="form-control-position">
                                                                                                                    <i class="fa fa-tablet"></i>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="form-group row">
                                                                                                        <div class="col-md-4">
                                                                                                            <span>สถานที่รับวัคซีนเข็ม 1</span>
                                                                                                        </div>
                                                                                                        <div class="col-md-8">
                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                <input type="number" id="number-icon" class="form-control" name="tel" placeholder="สถานที่รับวัคซีน">
                                                                                                                <div class="form-control-position">
                                                                                                                    <i class="fa fa-tablet"></i>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <hr style="height:1px;border-width:0;color:#adb5bd;background-color:#adb5bd">
                                                                                                    <div class="form-group row">
                                                                                                        <div class="col-md-4">
                                                                                                            <span>ชื่อวัคซีน เข็มที่ 2</span>
                                                                                                        </div>
                                                                                                        <div class="col-md-8">
                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                <input type="text" id="text-icon" class="form-control" name="location" placeholder="ชื่อวัคซีน">
                                                                                                                <div class="form-control-position">
                                                                                                                    <i class="fa fa-building-o"></i>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="form-group row">
                                                                                                        <div class="col-md-4">
                                                                                                            <span>วันที่ได้รับวัคซีนเข็ม 2</span>
                                                                                                        </div>
                                                                                                        <div class="col-md-8">
                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                <input type="number" id="number-icon" class="form-control" name="tel" placeholder="วันที่ได้รับวัคซีน">
                                                                                                                <div class="form-control-position">
                                                                                                                    <i class="fa fa-tablet"></i>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="form-group row">
                                                                                                        <div class="col-md-4">
                                                                                                            <span>สถานที่รับวัคซีนเข็ม 2</span>
                                                                                                        </div>
                                                                                                        <div class="col-md-8">
                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                <input type="number" id="number-icon" class="form-control" name="tel" placeholder="สถานที่รับวัคซีน">
                                                                                                                <div class="form-control-position">
                                                                                                                    <i class="fa fa-tablet"></i>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <hr style="height:1px;border-width:0;color:#adb5bd;background-color:#adb5bd">
                                                                                                    <div class="form-group row">
                                                                                                        <div class="col-md-4">
                                                                                                            <span>ชื่อวัคซีน เข็มที่ 3</span>
                                                                                                        </div>
                                                                                                        <div class="col-md-8">
                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                <input type="text" id="text-icon" class="form-control" name="location" placeholder="ชื่อวัคซีน">
                                                                                                                <div class="form-control-position">
                                                                                                                    <i class="fa fa-building-o"></i>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="form-group row">
                                                                                                        <div class="col-md-4">
                                                                                                            <span>วันที่ได้รับวัคซีนเข็ม 3</span>
                                                                                                        </div>
                                                                                                        <div class="col-md-8">
                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                <input type="number" id="number-icon" class="form-control" name="tel" placeholder="วันที่ได้รับวัคซีน">
                                                                                                                <div class="form-control-position">
                                                                                                                    <i class="fa fa-tablet"></i>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="form-group row">
                                                                                                        <div class="col-md-4">
                                                                                                            <span>สถานที่รับวัคซีนเข็ม 3</span>
                                                                                                        </div>
                                                                                                        <div class="col-md-8">
                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                <input type="number" id="number-icon" class="form-control" name="tel" placeholder="สถานที่รับวัคซีน">
                                                                                                                <div class="form-control-position">
                                                                                                                    <i class="fa fa-tablet"></i>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <hr style="height:1px;border-width:0;color:#adb5bd;background-color:#adb5bd">
                                                                                                    <div class="form-group row">
                                                                                                        <div class="col-md-4">
                                                                                                            <span>ชื่อวัคซีน เข็มที่ 4</span>
                                                                                                        </div>
                                                                                                        <div class="col-md-8">
                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                <input type="text" id="text-icon" class="form-control" name="location" placeholder="ชื่อวัคซีน">
                                                                                                                <div class="form-control-position">
                                                                                                                    <i class="fa fa-building-o"></i>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="form-group row">
                                                                                                        <div class="col-md-4">
                                                                                                            <span>วันที่ได้รับวัคซีนเข็ม 4</span>
                                                                                                        </div>
                                                                                                        <div class="col-md-8">
                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                <input type="number" id="number-icon" class="form-control" name="tel" placeholder="วันที่ได้รับวัคซีน">
                                                                                                                <div class="form-control-position">
                                                                                                                    <i class="fa fa-tablet"></i>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group row">
                                                                                                        <div class="col-md-4">
                                                                                                            <span>สถานที่รับวัคซีนเข็ม 4</span>
                                                                                                        </div>

                                                                                                        <div class="col-md-8">
                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                <input type="number" id="number-icon" class="form-control" name="tel" placeholder="สถานที่รับวัคซีน">
                                                                                                                <div class="form-control-position">
                                                                                                                    <i class="fa fa-tablet"></i>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <hr style="height:1px;border-width:0;color:#adb5bd;background-color:#adb5bd">
                                                                                                    <div class="form-group row">
                                                                                                        <div class="col-md-4">
                                                                                                            <span>ชื่อวัคซีน เข็มที่ 5</span>
                                                                                                        </div>
                                                                                                        <div class="col-md-8">
                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                <input type="text" id="text-icon" class="form-control" name="location" placeholder="ชื่อวัคซีน">
                                                                                                                <div class="form-control-position">
                                                                                                                    <i class="fa fa-building-o"></i>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="form-group row">
                                                                                                        <div class="col-md-4">
                                                                                                            <span>วันที่ได้รับวัคซีนเข็ม 5</span>
                                                                                                        </div>
                                                                                                        <div class="col-md-8">
                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                <input type="number" id="number-icon" class="form-control" name="tel" placeholder="วันที่ได้รับวัคซีน">
                                                                                                                <div class="form-control-position">
                                                                                                                    <i class="fa fa-tablet"></i>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group row">
                                                                                                        <div class="col-md-4">
                                                                                                            <span>สถานที่รับวัคซีนเข็ม 5</span>
                                                                                                        </div>

                                                                                                        <div class="col-md-8">
                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                <input type="number" id="number-icon" class="form-control" name="tel" placeholder="สถานที่รับวัคซีน">
                                                                                                                <div class="form-control-position">
                                                                                                                    <i class="fa fa-tablet"></i>
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
                                                            </div>

                                                            <!-- End Body Left -->


                                                            <!-- Body Right -->

                                                            <div class="col-md-6 col-12">
                                                                <div class="card border-success p-1">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                        </div>
                                                                        <div class="content-body">
                                                                            <section id="multiple-column-form">
                                                                                <div class="row">
                                                                                    <div class="col-12">
                                                                                        <h3 class="text-left mb-2">
                                                                                            <i class="feather icon-clipboard"></i>
                                                                                            ประวัติความเสี่ยง
                                                                                        </h3>

                                                                                        <h4 class="text-bold">รายละเอียดเหตุการณ์ ประวัติเสี่ยงต่อการติดเชื้อ ก่อนเริ่มป่วย</h4>
                                                                                        <hr style="height:1px;border-width:0;color:rgb(3, 0, 26);background-color:rgb(3, 0, 26)">
                                                                                        <div class="card-content">
                                                                                            <div class="card-body">
                                                                                                <div class="col-12">
                                                                                                    <fieldset class="form-label-group">
                                                                                                        <textarea class="form-control" id="label-textarea" rows="3" placeholder="รายละเอียดเหตุการณ์"></textarea>
                                                                                                        <label for="label-textarea">รายละเอียดเหตุการณ์</label>
                                                                                                    </fieldset>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-12">
                                                                                                <div class="table-responsive border rounded px-1 ">
                                                                                                    <h6 class="border-bottom py-1 mx-1 mb-0 font-medium-2 text-center">
                                                                                                        <i class="feather icon-lock mr-50 "></i>
                                                                                                        ตารางกิจกรรมและการเดินทาง 14 วันหลังป่วย
                                                                                                    </h6>
                                                                                                    <table class="table table-borderless">
                                                                                                        <thead>
                                                                                                            <tr>
                                                                                                                <th class="text-center font-medium-2">วัน</th>
                                                                                                                <th class="text-center font-medium-2">วันที่</th>
                                                                                                                <th class="text-center font-medium-2">กิจกรรม/สถานที่</th>
                                                                                                                <th class="text-center font-medium-2">จำนวนผู้ร่วมกิจกรรม</th>

                                                                                                            </tr>
                                                                                                        </thead>
                                                                                                        <tbody>
                                                                                                            <tr class="border-bottom">
                                                                                                                <td>1</td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-center">
                                                                                                                        <input type="text" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false" aria-owns="P428173107_root" name="date">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-calendar-check-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>

                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="first-name-icon" class="form-control" name="location" placeholder="กิจกรรม/สถานที่">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-user-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="first-name-icon" class="form-control" name="person" placeholder="จำนวนผู้ร่วมกิจกรรม">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-user-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>

                                                                                                            <tr class="border-bottom">
                                                                                                                <td>2</td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-center">
                                                                                                                        <input type="text" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false" aria-owns="P428173107_root" name="date">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-calendar-check-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="first-name-icon" class="form-control" name="location" placeholder="กิจกรรม/สถานที่">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-user-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="first-name-icon" class="form-control" name="person" placeholder="จำนวนผู้ร่วมกิจกรรม">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-user-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr class="border-bottom">
                                                                                                                <td>3</td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-center">
                                                                                                                        <input type="text" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false" aria-owns="P428173107_root" name="date">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-calendar-check-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="first-name-icon" class="form-control" name="location" placeholder="กิจกรรม/สถานที่">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-user-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="first-name-icon" class="form-control" name="person" placeholder="จำนวนผู้ร่วมกิจกรรม">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-user-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr class="border-bottom">
                                                                                                                <td>4</td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-center">
                                                                                                                        <input type="text" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false" aria-owns="P428173107_root" name="date">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-calendar-check-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="first-name-icon" class="form-control" name="location" placeholder="กิจกรรม/สถานที่">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-user-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="first-name-icon" class="form-control" name="person" placeholder="จำนวนผู้ร่วมกิจกรรม">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-user-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr class="border-bottom">
                                                                                                                <td>5</td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-center">
                                                                                                                        <input type="text" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false" aria-owns="P428173107_root" name="date">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-calendar-check-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="first-name-icon" class="form-control" name="location" placeholder="กิจกรรม/สถานที่">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-user-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="first-name-icon" class="form-control" name="person" placeholder="จำนวนผู้ร่วมกิจกรรม">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-user-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr class="border-bottom">
                                                                                                                <td>6</td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-center">
                                                                                                                        <input type="text" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false" aria-owns="P428173107_root" name="date">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-calendar-check-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="first-name-icon" class="form-control" name="location" placeholder="กิจกรรม/สถานที่">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-user-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="first-name-icon" class="form-control" name="person" placeholder="จำนวนผู้ร่วมกิจกรรม">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-user-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr class="border-bottom">
                                                                                                                <td>7</td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-center">
                                                                                                                        <input type="text" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false" aria-owns="P428173107_root" name="date">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-calendar-check-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="first-name-icon" class="form-control" name="location" placeholder="กิจกรรม/สถานที่">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-user-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="first-name-icon" class="form-control" name="person" placeholder="จำนวนผู้ร่วมกิจกรรม">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-user-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr class="border-bottom">
                                                                                                                <td>8</td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-center">
                                                                                                                        <input type="text" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false" aria-owns="P428173107_root" name="date">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-calendar-check-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="first-name-icon" class="form-control" name="location" placeholder="กิจกรรม/สถานที่">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-user-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="first-name-icon" class="form-control" name="person" placeholder="จำนวนผู้ร่วมกิจกรรม">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-user-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr class="border-bottom">
                                                                                                                <td>9</td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-center">
                                                                                                                        <input type="text" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false" aria-owns="P428173107_root" name="date">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-calendar-check-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="first-name-icon" class="form-control" name="location" placeholder="กิจกรรม/สถานที่">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-user-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="first-name-icon" class="form-control" name="person" placeholder="จำนวนผู้ร่วมกิจกรรม">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-user-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr class="border-bottom">
                                                                                                                <td>10</td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-center">
                                                                                                                        <input type="text" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false" aria-owns="P428173107_root" name="date">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-calendar-check-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="first-name-icon" class="form-control" name="location" placeholder="กิจกรรม/สถานที่">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-user-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="first-name-icon" class="form-control" name="person" placeholder="จำนวนผู้ร่วมกิจกรรม">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-user-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr class="border-bottom">
                                                                                                                <td>11</td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-center">
                                                                                                                        <input type="text" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false" aria-owns="P428173107_root" name="date">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-calendar-check-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="first-name-icon" class="form-control" name="location" placeholder="กิจกรรม/สถานที่">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-user-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="first-name-icon" class="form-control" name="person" placeholder="จำนวนผู้ร่วมกิจกรรม">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-user-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr class="border-bottom">
                                                                                                                <td>12</td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-center">
                                                                                                                        <input type="text" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false" aria-owns="P428173107_root" name="date">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-calendar-check-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="first-name-icon" class="form-control" name="location" placeholder="กิจกรรม/สถานที่">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-user-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="first-name-icon" class="form-control" name="person" placeholder="จำนวนผู้ร่วมกิจกรรม">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-user-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr class="border-bottom">
                                                                                                                <td>13</td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-center">
                                                                                                                        <input type="text" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false" aria-owns="P428173107_root" name="date">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-calendar-check-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="first-name-icon" class="form-control" name="location" placeholder="กิจกรรม/สถานที่">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-user-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="first-name-icon" class="form-control" name="person" placeholder="จำนวนผู้ร่วมกิจกรรม">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-user-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr class="border-bottom">
                                                                                                                <td>14</td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-center">
                                                                                                                        <input type="text" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false" aria-owns="P428173107_root" name="date">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-calendar-check-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="first-name-icon" class="form-control" name="location" placeholder="กิจกรรม/สถานที่">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-user-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="first-name-icon" class="form-control" name="person" placeholder="จำนวนผู้ร่วมกิจกรรม">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-user-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <h4 class="text-bold">รายชื่อผู้เสี่ยง</h4>
                                                                                        <hr style="height:1px;border-width:0;color:rgb(3, 0, 26);background-color:rgb(3, 0, 26)">
                                                                                        <div class="card-content">
                                                                                            <div class="col-12">
                                                                                                <div class="form-group row">
                                                                                                    <div class="col-md-4">
                                                                                                        <span>ชื่อ-นามสกุล</span>

                                                                                                    </div>
                                                                                                    <div class="col-md-8">
                                                                                                        <div class="position-relative has-icon-left">
                                                                                                            <div class="input-field">
                                                                                                                <input type="text" class="form-control input1" placeholder="ชื่อ-นามสกุล" name="addmore[0][name]">
                                                                                                                <div class="form-control-position">
                                                                                                                    <i class="fa fa-id-card-o"></i>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-12">
                                                                                                <div class="form-group row">
                                                                                                    <div class="col-md-4">
                                                                                                        <span>เพศ</span>
                                                                                                    </div>
                                                                                                    <div class="col-md-8">
                                                                                                        <div class="position-relative has-icon-left">
                                                                                                            <select class="form-control" name="addmore[0][sex_id]">
                                                                                                                <option>เพศ</option>
                                                                                                                <option value="0">ชาย</option>
                                                                                                                <option value="1">หญิง</option>
                                                                                                            </select>
                                                                                                            <div class="form-control-position">
                                                                                                                <i class="fa fa-venus-mars"></i>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-12">
                                                                                                <div class="form-group row">
                                                                                                    <div class="col-md-4">
                                                                                                        <span>อายุ</span>
                                                                                                    </div>
                                                                                                    <div class="col-md-8">
                                                                                                        <div class="position-relative has-icon-left">
                                                                                                            <input type="number" id="expenditure" class="form-control input1" placeholder="อายุ" name="addmore[0][age]">
                                                                                                            <div class="form-control-position">
                                                                                                                <i class="fa fa-address-card-o"></i>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-12">
                                                                                                <div class="form-group row">
                                                                                                    <div class="col-md-4">
                                                                                                        <span>ที่อยู่</span>
                                                                                                    </div>
                                                                                                    <div class="col-md-8">
                                                                                                        <div class="position-relative has-icon-left">
                                                                                                            <input type="text" id="text-icon" class="form-control" name="addmore[0][add]" placeholder="ที่อยู่">
                                                                                                            <div class="form-control-position">
                                                                                                                <i class="fa fa-map-pin"></i>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-12">
                                                                                                <div class="form-group row">
                                                                                                    <div class="col-md-4">
                                                                                                        <span>เบอร์โทรศัพท์</span>
                                                                                                    </div>
                                                                                                    <div class="col-md-8">
                                                                                                        <div class="position-relative has-icon-left">
                                                                                                            <input type="number" id="model" class="form-control input1" placeholder="เบอร์โทรศัพท์ที่ติดต่อได้" name="addmore[0][tel]">
                                                                                                            <div class="form-control-position">
                                                                                                                <i class="fa fa-tablet"></i>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <hr style="height:1px;border-width:0;color:#adb5bd;background-color:#adb5bd">
                                                                                            <div class="col-12">
                                                                                                <div class="form-group row">
                                                                                                    <div class="col-md-4">
                                                                                                        <span>ชื่อ-นามสกุล</span>

                                                                                                    </div>
                                                                                                    <div class="col-md-8">
                                                                                                        <div class="position-relative has-icon-left">
                                                                                                            <div class="input-field">
                                                                                                                <input type="text" class="form-control input1" placeholder="ชื่อ-นามสกุล" name="addmore[0][name]">
                                                                                                                <div class="form-control-position">
                                                                                                                    <i class="fa fa-id-card-o"></i>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-12">
                                                                                                <div class="form-group row">
                                                                                                    <div class="col-md-4">
                                                                                                        <span>เพศ</span>
                                                                                                    </div>
                                                                                                    <div class="col-md-8">
                                                                                                        <div class="position-relative has-icon-left">
                                                                                                            <select class="form-control" name="addmore[0][sex_id]">
                                                                                                                <option>เพศ</option>
                                                                                                                <option value="0">ชาย</option>
                                                                                                                <option value="1">หญิง</option>
                                                                                                            </select>
                                                                                                            <div class="form-control-position">
                                                                                                                <i class="fa fa-venus-mars"></i>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-12">
                                                                                                <div class="form-group row">
                                                                                                    <div class="col-md-4">
                                                                                                        <span>อายุ</span>
                                                                                                    </div>
                                                                                                    <div class="col-md-8">
                                                                                                        <div class="position-relative has-icon-left">
                                                                                                            <input type="number" id="expenditure" class="form-control input1" placeholder="อายุ" name="addmore[0][age]">
                                                                                                            <div class="form-control-position">
                                                                                                                <i class="fa fa-address-card-o"></i>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-12">
                                                                                                <div class="form-group row">
                                                                                                    <div class="col-md-4">
                                                                                                        <span>ที่อยู่</span>
                                                                                                    </div>
                                                                                                    <div class="col-md-8">
                                                                                                        <div class="position-relative has-icon-left">
                                                                                                            <input type="text" id="text-icon" class="form-control" name="addmore[0][add]" placeholder="ที่อยู่">
                                                                                                            <div class="form-control-position">
                                                                                                                <i class="fa fa-map-pin"></i>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-12">
                                                                                                <div class="form-group row">
                                                                                                    <div class="col-md-4">
                                                                                                        <span>เบอร์โทรศัพท์</span>
                                                                                                    </div>
                                                                                                    <div class="col-md-8">
                                                                                                        <div class="position-relative has-icon-left">
                                                                                                            <input type="number" id="model" class="form-control input1" placeholder="เบอร์โทรศัพท์ที่ติดต่อได้" name="addmore[0][tel]">
                                                                                                            <div class="form-control-position">
                                                                                                                <i class="fa fa-tablet"></i>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <hr style="height:1px;border-width:0;color:#adb5bd;background-color:#adb5bd">
                                                                                            <div class="col-12">
                                                                                                <div class="form-group row">
                                                                                                    <div class="col-md-4">
                                                                                                        <span>ชื่อ-นามสกุล</span>

                                                                                                    </div>
                                                                                                    <div class="col-md-8">
                                                                                                        <div class="position-relative has-icon-left">
                                                                                                            <div class="input-field">
                                                                                                                <input type="text" class="form-control input1" placeholder="ชื่อ-นามสกุล" name="addmore[0][name]">
                                                                                                                <div class="form-control-position">
                                                                                                                    <i class="fa fa-id-card-o"></i>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-12">
                                                                                                <div class="form-group row">
                                                                                                    <div class="col-md-4">
                                                                                                        <span>เพศ</span>
                                                                                                    </div>
                                                                                                    <div class="col-md-8">
                                                                                                        <div class="position-relative has-icon-left">
                                                                                                            <select class="form-control" name="addmore[0][sex_id]">
                                                                                                                <option>เพศ</option>
                                                                                                                <option value="0">ชาย</option>
                                                                                                                <option value="1">หญิง</option>
                                                                                                            </select>
                                                                                                            <div class="form-control-position">
                                                                                                                <i class="fa fa-venus-mars"></i>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-12">
                                                                                                <div class="form-group row">
                                                                                                    <div class="col-md-4">
                                                                                                        <span>อายุ</span>
                                                                                                    </div>
                                                                                                    <div class="col-md-8">
                                                                                                        <div class="position-relative has-icon-left">
                                                                                                            <input type="number" id="expenditure" class="form-control input1" placeholder="อายุ" name="addmore[0][age]">
                                                                                                            <div class="form-control-position">
                                                                                                                <i class="fa fa-address-card-o"></i>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-12">
                                                                                                <div class="form-group row">
                                                                                                    <div class="col-md-4">
                                                                                                        <span>ที่อยู่</span>
                                                                                                    </div>
                                                                                                    <div class="col-md-8">
                                                                                                        <div class="position-relative has-icon-left">
                                                                                                            <input type="text" id="text-icon" class="form-control" name="addmore[0][add]" placeholder="ที่อยู่">
                                                                                                            <div class="form-control-position">
                                                                                                                <i class="fa fa-map-pin"></i>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-12">
                                                                                                <div class="form-group row">
                                                                                                    <div class="col-md-4">
                                                                                                        <span>เบอร์โทรศัพท์</span>
                                                                                                    </div>
                                                                                                    <div class="col-md-8">
                                                                                                        <div class="position-relative has-icon-left">
                                                                                                            <input type="number" id="model" class="form-control input1" placeholder="เบอร์โทรศัพท์ที่ติดต่อได้" name="addmore[0][tel]">
                                                                                                            <div class="form-control-position">
                                                                                                                <i class="fa fa-tablet"></i>
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
                                                            </div>

                                                            <!-- End Body right -->


                                                            <!-- button -->
                                                            <div>
                                                                <form class="form form-horizontal" id="update" action="{{ route('inquiry-form-Covid.update', $data->id)}}" method="POST" enctype="multipart/form-data" multiple>
                                                                    {{ csrf_field() }}
                                                                    {{ method_field('PUT') }}
                                                                        <div class="modal-footer">
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <a class="btn btn-danger waves-effect waves-light mt-1" href="{{ route('inquiry-form-Covid.show', $data->id)}}"><i class="feather icon-x"></i> ยกเลิก</a>
                                                                                    <button type="submit" class="btn btn-success mr-1 waves-effect waves-light mt-1"><i class="feather icon-save"></i> บันทึก</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                </form>
                                                            </div>
                                                            <!-- End button -->

                                                    </div>
                                            </div>
                                        </div>
                                    </section>
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
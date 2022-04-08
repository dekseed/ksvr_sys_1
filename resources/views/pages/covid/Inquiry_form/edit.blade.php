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
                                                    แก้ไขข้อมูลส่วนตัวผู้ป่วย (สำหรับผู้ดูแลระบบ)
                                                </h3>

                                                <div class="card">
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
                                                                                                <div class="form-body">
                                                                                                    <h4 class="card-title"><i class="fa fa-comments-o"></i> ข้อมูลทั่วไป</h4>
                                                                                                </div>
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
                                                                                                                            <input type="number" class="form-control input1" value="{{$data->user->number_id}}" name="number_id" placeholder="รหัสบัตรประชาชน" >
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
                                                                                                                        <select class="form-control select2-l-1"   name="title_name_id" id="basicSelect">
                                                                                                                            <option value=""> --- กรุณาเลือก ---</option>

                                                                                                                            @foreach ($name_title as $roles)
                                                                                                                            <option {{ $data->user->title_name_id == $roles->id ? 'selected' : ''}} value="{{ $roles->id }}">{{ $roles->name }}</option>
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
                                                                                                                        <input type="text" id="brand" class="form-control input1" placeholder="ชื่อ" value="{{$data->user->first_name}}"   name="first_name">
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
                                                                                                                        <input type="text" id="model" class="form-control input1" placeholder="นามสกุล" value="{{$data->user->last_name}}"   name="last_name">
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
                                                                                                                        <select class="form-control" id="basicSelect" name="sex" onchange="show_sex(this)">
                                                                                                                            <option {{ $data->user->sex == '0' ? 'selected' : ''}} value="0">ชาย</option>
                                                                                                                            <option {{ $data->user->sex == '1' ? 'selected' : ''}} value="1">หญิง</option>
                                                                                                                        </select>
                                                                                                                        @if($data->user->sex == '0')
                                                                                                                            <div id="hidden_sex_main" class="mt-1" style="display:none;">
                                                                                                                                    <div class="container">
                                                                                                                                        <div class="row">
                                                                                                                                            <div class="col-sm-12">
                                                                                                                                                <label style="color:rgb(53, 141, 141);font-size:14px">กรณีเพศหญิง</label>
                                                                                                                                                    <div class="vs-radio-con" value="-">
                                                                                                                                                        <input type="radio" value="-" name="womb" onclick="womb1();">
                                                                                                                                                        <span class="vs-radio">
                                                                                                                                                            <span class="vs-radio--border"></span>
                                                                                                                                                            <span class="vs-radio--circle"></span>
                                                                                                                                                        </span>
                                                                                                                                                        <span class="mr-2">ไม่มีครรภ์</span>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="vs-radio-con" value="0">
                                                                                                                                                        <input type="radio" name="womb" onclick="womb0();">
                                                                                                                                                        <span class="vs-radio">
                                                                                                                                                            <span class="vs-radio--border"></span>
                                                                                                                                                            <span class="vs-radio--circle"></span>
                                                                                                                                                        </span>
                                                                                                                                                        <span class="mr-2">มีครรภ์</span>
                                                                                                                                                    </div>


                                                                                                                                                    <div id="hidden_detail" class="mt-1" style="display:none;">
                                                                                                                                                            <div class="mt-1 col-sm-12">
                                                                                                                                                                <div class="form-group row">
                                                                                                                                                                    <div class="col-md-4">
                                                                                                                                                                        <span>ครรภ์ที่</span>
                                                                                                                                                                    </div>
                                                                                                                                                                    <div class="col-md-8">
                                                                                                                                                                        <div class="position-relative has-icon-left">
                                                                                                                                                                            <input type="text" class="form-control input1" placeholder="ครรภ์ที่" value="" value="-"  name="womb">
                                                                                                                                                                            <div class="form-control-position">
                                                                                                                                                                                <i class="fa fa-user-circle-o"></i>
                                                                                                                                                                            </div>
                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                            <div class="mt-1 col-sm-12">
                                                                                                                                                                <div class="form-group row">
                                                                                                                                                                    <div class="col-md-4">
                                                                                                                                                                        <span>อายุครรภ์</span>
                                                                                                                                                                    </div>
                                                                                                                                                                    <div class="col-md-8">
                                                                                                                                                                        <div class="position-relative has-icon-left">
                                                                                                                                                                            <input type="text" class="form-control input1" placeholder="อายุครรภ์ (เดือน)" value=""  name="womb_age">
                                                                                                                                                                            <div class="form-control-position">
                                                                                                                                                                                <i class="fa fa-user-circle-o"></i>
                                                                                                                                                                            </div>
                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                    </div>
                                                                                                                                                    <script type="text/javascript">
                                                                                                                                                        function womb1(checked) {
                                                                                                                                                            if ((select.value == '0')) {
                                                                                                                                                                document.getElementById('hidden_detail').style.display = "none";
                                                                                                                                                            } else {
                                                                                                                                                                document.getElementById('hidden_detail').style.display = "block";
                                                                                                                                                            }
                                                                                                                                                        }
                                                                                                                                                    </script>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <script type="text/javascript">
                                                                                                                                        function show_sex(select) {
                                                                                                                                            if ((select.value == '0')) {
                                                                                                                                            document.getElementById('hidden_sex_main').style.display = "none";
                                                                                                                                            }else {
                                                                                                                                            document.getElementById('hidden_sex_main').style.display = "block";
                                                                                                                                            }
                                                                                                                                        }
                                                                                                                                    </script>
                                                                                                                                    <script type="text/javascript">
                                                                                                                                        function womb0() {
                                                                                                                                                document.getElementById('hidden_detail').style.display = 'block';
                                                                                                                                            }

                                                                                                                                            function womb1() {
                                                                                                                                                document.getElementById('hidden_detail').style.display = 'none';
                                                                                                                                            }
                                                                                                                                    </script>
                                                                                                                            </div>
                                                                                                                        @else
                                                                                                                            <div id="hidden_sex_main" class="mt-1" style="display:block;">
                                                                                                                                <div class="container">
                                                                                                                                    <div class="row">
                                                                                                                                        <div class="col-sm-12">
                                                                                                                                            <label style="color:rgb(53, 141, 141);font-size:14px">กรณีเพศหญิง</label>
                                                                                                                                                <div class="vs-radio-con" value="0">
                                                                                                                                                    <input type="radio" value="0" {{ $data->user->sexes_inquir->womb == '0' ? 'Checked' : ''}} name="womb" onclick="womb1();">
                                                                                                                                                    <span class="vs-radio">
                                                                                                                                                        <span class="vs-radio--border"></span>
                                                                                                                                                        <span class="vs-radio--circle"></span>
                                                                                                                                                    </span>
                                                                                                                                                    <span class="mr-2">ไม่มีครรภ์</span>
                                                                                                                                                </div>
                                                                                                                                                <div class="vs-radio-con" value="1">
                                                                                                                                                    <input type="radio" name="womb" value="1"  {{ $data->user->sexes_inquir->womb > '0' ? 'Checked' : ''}} onclick="womb0();">
                                                                                                                                                    <span class="vs-radio">
                                                                                                                                                        <span class="vs-radio--border"></span>
                                                                                                                                                        <span class="vs-radio--circle"></span>
                                                                                                                                                    </span>
                                                                                                                                                    <span class="mr-2">มีครรภ์</span>
                                                                                                                                                </div>

                                                                                                                                                @if($data->user->sexes_inquir->womb > '0')
                                                                                                                                                <div id="hidden_detail" class="mt-1" style="display:block;">
                                                                                                                                                        <div class="mt-1 col-sm-12">
                                                                                                                                                            <div class="form-group row">
                                                                                                                                                                <div class="col-md-4">
                                                                                                                                                                    <span>ครรภ์ที่</span>
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-md-8">
                                                                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                                                                        <input type="text" class="form-control input1" placeholder="ครรภ์ที่" value="{{ $data->user->sexes_inquir->womb }}"  name="womb">
                                                                                                                                                                        <div class="form-control-position">
                                                                                                                                                                            <i class="fa fa-user-circle-o"></i>
                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="mt-1 col-sm-12">
                                                                                                                                                            <div class="form-group row">
                                                                                                                                                                <div class="col-md-4">
                                                                                                                                                                    <span>อายุครรภ์</span>
                                                                                                                                                                </div>
                                                                                                                                                                <div class="col-md-8">
                                                                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                                                                        <input type="text" class="form-control input1" placeholder="อายุครรภ์ (เดือน)" value="{{ $data->user->sexes_inquir->womb_age }}"  name="womb_age">
                                                                                                                                                                        <div class="form-control-position">
                                                                                                                                                                            <i class="fa fa-user-circle-o"></i>
                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                </div>
                                                                                                                                                @else
                                                                                                                                                <div id="hidden_detail" class="mt-1" style="display:none;">
                                                                                                                                                    <div class="mt-1 col-sm-12">
                                                                                                                                                        <div class="form-group row">
                                                                                                                                                            <div class="col-md-4">
                                                                                                                                                                <span>ครรภ์ที่</span>
                                                                                                                                                            </div>
                                                                                                                                                            <div class="col-md-8">
                                                                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                                                                    <input type="text" class="form-control input1" placeholder="ครรภ์ที่" value="" value="-"  name="womb">
                                                                                                                                                                    <div class="form-control-position">
                                                                                                                                                                        <i class="fa fa-user-circle-o"></i>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="mt-1 col-sm-12">
                                                                                                                                                        <div class="form-group row">
                                                                                                                                                            <div class="col-md-4">
                                                                                                                                                                <span>อายุครรภ์</span>
                                                                                                                                                            </div>
                                                                                                                                                            <div class="col-md-8">
                                                                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                                                                    <input type="text" class="form-control input1" placeholder="อายุครรภ์ (เดือน)" value=""  name="womb_age">
                                                                                                                                                                    <div class="form-control-position">
                                                                                                                                                                        <i class="fa fa-user-circle-o"></i>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                                @endif
                                                                                                                                                <script type="text/javascript">
                                                                                                                                                    function womb1(checked) {
                                                                                                                                                        if ((select.value == '0')) {
                                                                                                                                                            document.getElementById('hidden_detail').style.display = "none";
                                                                                                                                                        } else {
                                                                                                                                                            document.getElementById('hidden_detail').style.display = "block";
                                                                                                                                                        }
                                                                                                                                                    }
                                                                                                                                                </script>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <script type="text/javascript">
                                                                                                                                    function show_sex(select) {
                                                                                                                                        if ((select.value == '0')) {
                                                                                                                                        document.getElementById('hidden_sex_main').style.display = "none";
                                                                                                                                        }else {
                                                                                                                                        document.getElementById('hidden_sex_main').style.display = "block";
                                                                                                                                        }
                                                                                                                                    }
                                                                                                                                </script>
                                                                                                                                <script type="text/javascript">
                                                                                                                                    function womb0() {
                                                                                                                                            document.getElementById('hidden_detail').style.display = 'block';
                                                                                                                                        }

                                                                                                                                        function womb1() {
                                                                                                                                            document.getElementById('hidden_detail').style.display = 'none';
                                                                                                                                        }
                                                                                                                                </script>
                                                                                                                            </div>
                                                                                                                        @endif
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
                                                                                                                        <input type="number" id="expenditure" class="form-control" placeholder="อายุ" value="{{$data->user->age}}"  name="age">
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

                                                                                                                        <input type="text" id="year" class="form-control" value="{{$data->user->nation}}"  name="nation" placeholder="สัญชาติ">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-flag-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-12">
                                                                                                            <div class="form-group row">
                                                                                                                <div class="col-md-4">
                                                                                                                    <span>โรคประจำตัว</span>
                                                                                                                </div>
                                                                                                                <div class="col-md-8">
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="text-icon" class="form-control" value="{{$data->user->disease}}"  name="disease" placeholder="โรคประจำตัว">
                                                                                                                        <div class="form-control-position">
                                                                                                                            <i class="fa fa-flag-o"></i>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-12">
                                                                                                            <div class="form-group row">
                                                                                                                <div class="mx-4">
                                                                                                                    <div class="form-group">
                                                                                                                        <span for="password-icon"><em>การสูบบุหรี่ </em></span>
                                                                                                                        <div class="mx-2">
                                                                                                                            <fieldset>

                                                                                                                                <div class="vs-radio-con">
                                                                                                                                    <input type="radio"  name="smoking" value="0" {{ $data->user->smoking == '0' ? 'Checked': ''}}>
                                                                                                                                    <span class="vs-radio">
                                                                                                                                        <span class="vs-radio--border"></span>
                                                                                                                                        <span class="vs-radio--circle"></span>
                                                                                                                                    </span>
                                                                                                                                    <span class="mr-2">ไม่เคยสูบ</span>
                                                                                                                                </div>

                                                                                                                                <div class="vs-radio-con">
                                                                                                                                    <input type="radio"  name="smoking" value="1"  {{ $data->user->smoking == '1' ? 'Checked': '' }}>
                                                                                                                                    <span class="vs-radio">
                                                                                                                                        <span class="vs-radio--border"></span>
                                                                                                                                        <span class="vs-radio--circle"></span>
                                                                                                                                    </span>
                                                                                                                                    <span class="mr-2">ยังคงสูบ</span>
                                                                                                                                </div>

                                                                                                                                <div class="vs-radio-con">
                                                                                                                                    <input type="radio"  name="smoking" value="2"  {{ $data->user->smoking == '2' ? 'Checked': '' }}>
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
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="form-body">
                                                                                                    <h1 class="card-title"><i class="fa fa-comments-o"></i> การได้รับวัคซีน</h1>
                                                                                                </div>
                                                                                                <hr style="height:1px;border-width:0;color:rgb(3, 0, 26);background-color:rgb(3, 0, 26)">

                                                                                                <div class="form-group row">
                                                                                                    <div class="col-md-4">
                                                                                                        <span>การได้รับวัคซีน</span>
                                                                                                    </div>
                                                                                                    <div class="col-md-8">
                                                                                                        <div class="position-relative has-icon-left">
                                                                                                            <select class="form-control" id="basicSelect" name="vac_id" placeholder="เคยได้รับวัคซีนหรือไม่" onchange="showvac_1(this)">

                                                                                                                <option value="1" {{ $data_vac->number > '0' ? 'selected': '' }}>เคยได้รับ</option>
                                                                                                                <option {{ $data_vac->number == '0' ? 'selected': '' }} value="0">ไม่เคยได้รับ</option>

                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>


                                                                                                {{-- <fieldset>
                                                                                                    <div id="hidden_vac" class="mt-1" style="display:block;">

                                                                                                        <div class="form-group row">
                                                                                                            <div class="col-md-4">
                                                                                                                <span>จำนวนวัคซีน <br><em style="color:red;font-size:12px">(จำนวนวัคซีนทีได้รับ)</em></span>
                                                                                                            </div>
                                                                                                            <div class="col-md-8">
                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                    <input type="text" id="text-icon" class="form-control" value="{{$data->vaccine_cov_inquiries->num_vac}}"  name="num_vac" placeholder="จำนวนวัคซีน">
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

                                                                                                                    @if(is_null($data->vaccine_cov_inquiries->name_vaccine_id_1))

                                                                                                                    <select class="form-control select2-l-1" name="name_vaccine_id_1" id="basicSelect">
                                                                                                                        <option value=""> --- กรุณาเลือก ---</option>
                                                                                                                        @foreach ($name_vaccine as $roles)
                                                                                                                        <option value="{{ $roles->id }}">{{ $roles->name}}</option>
                                                                                                                        @endforeach
                                                                                                                    </select>

                                                                                                                    @else
                                                                                                                    <select type="text" id="basicSelect" class="form-control select2-l-1" value="{{$data->vaccine_cov_inquiries->name_vac1_inquiries->name}}"  name="name_vaccine_id_1" placeholder="ชื่อวัคซีน">
                                                                                                                        <option value="{{$data->vaccine_cov_inquiries->name_vaccine_id_1}}"> {{$data->vaccine_cov_inquiries->name_vac1_inquiries->name}} </option>
                                                                                                                        @foreach ($name_vaccine as $roles)
                                                                                                                        <option value="{{ $roles->id }}">{{ $roles->name}}</option>
                                                                                                                        @endforeach
                                                                                                                    </select>
                                                                                                                    @endif

                                                                                                                    </select>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="form-group row">
                                                                                                            <div class="col-md-4">
                                                                                                                <span>วันที่ได้รับวัคซีนเข็ม 1</span>
                                                                                                            </div>
                                                                                                            <div class="col-md-8">
                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                    <input type="date" id="calen-icon" class="form-control" value="{{$data->vaccine_cov_inquiries->date_1}}"  name="date_vac_1" placeholder="วันที่ได้รับวัคซีน">
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
                                                                                                                    <input type="text" id="info-icon" class="form-control" value="{{$data->vaccine_cov_inquiries->location_1}}"  name="location_vac_1" placeholder="สถานที่รับวัคซีน">
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

                                                                                                                    @if(is_null($data->vaccine_cov_inquiries->name_vaccine_id_2))

                                                                                                                    <select class="form-control select2-l-1" name="name_vaccine_id_2" id="basicSelect">
                                                                                                                        <option value=""> --- กรุณาเลือก ---</option>
                                                                                                                        @foreach ($name_vaccine as $roles)
                                                                                                                        <option value="{{ $roles->id }}">{{ $roles->name}}</option>
                                                                                                                        @endforeach
                                                                                                                    </select>

                                                                                                                    @else
                                                                                                                    <select type="text" id="basicSelect" class="form-control select2-l-2" value="{{$data->vaccine_cov_inquiries->name_vac2_inquiries->name}}"  name="name_vaccine_id_2" placeholder="ชื่อวัคซีน">
                                                                                                                        <option value="{{$data->vaccine_cov_inquiries->name_vaccine_id_2}}"> {{$data->vaccine_cov_inquiries->name_vac2_inquiries->name}} </option>
                                                                                                                        @foreach ($name_vaccine as $roles)
                                                                                                                        <option value="{{ $roles->id }}">{{ $roles->name}}</option>
                                                                                                                        @endforeach
                                                                                                                    </select>
                                                                                                                    @endif

                                                                                                                    </select>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="form-group row">
                                                                                                            <div class="col-md-4">
                                                                                                                <span>วันที่ได้รับวัคซีนเข็ม 2</span>
                                                                                                            </div>
                                                                                                            <div class="col-md-8">
                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                    <input type="date" id="number-icon" class="form-control" value="{{$data->vaccine_cov_inquiries->date_2}}"  name="date_vac_2" placeholder="วันที่ได้รับวัคซีน">
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
                                                                                                                    <input type="text" id="number-icon" class="form-control" value="{{$data->vaccine_cov_inquiries->location_2}}"  name="location_vac_2" placeholder="สถานที่รับวัคซีน">
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

                                                                                                                    @if(is_null($data->vaccine_cov_inquiries->name_vaccine_id_3))

                                                                                                                    <select class="form-control select2-l-1" name="name_vaccine_id_3" id="basicSelect">
                                                                                                                        <option value=""> --- กรุณาเลือก ---</option>
                                                                                                                        @foreach ($name_vaccine as $roles)
                                                                                                                        <option value="{{ $roles->id }}">{{ $roles->name}}</option>
                                                                                                                        @endforeach
                                                                                                                    </select>

                                                                                                                    @else
                                                                                                                    <select type="text" id="basicSelect" class="form-control select2-l-1" value="{{$data->vaccine_cov_inquiries->name_vac3_inquiries->name}}"  name="name_vaccine_id_3" placeholder="ชื่อวัคซีน">
                                                                                                                        <option value="{{$data->vaccine_cov_inquiries->name_vaccine_id_3}}"> {{$data->vaccine_cov_inquiries->name_vac3_inquiries->name}} </option>
                                                                                                                        @foreach ($name_vaccine as $roles)
                                                                                                                        <option value="{{ $roles->id }}">{{ $roles->name}}</option>
                                                                                                                        @endforeach
                                                                                                                    </select>
                                                                                                                    @endif
                                                                                                                    </select>

                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="form-group row">
                                                                                                            <div class="col-md-4">
                                                                                                                <span>วันที่ได้รับวัคซีนเข็ม 3</span>
                                                                                                            </div>
                                                                                                            <div class="col-md-8">
                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                    <input type="date" id="number-icon" class="form-control" value="{{$data->vaccine_cov_inquiries->date_3}}"  name="date_vac_3" placeholder="วันที่ได้รับวัคซีน">
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
                                                                                                                    <input type="text" id="number-icon" class="form-control" value="{{$data->vaccine_cov_inquiries->location_3}}"  name="location_vac_3" placeholder="สถานที่รับวัคซีน">
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

                                                                                                                    @if(is_null($data->vaccine_cov_inquiries->name_vaccine_id_4))
                                                                                                                    <select class="form-control select2-l-1" name="name_vaccine_id_4" id="basicSelect">
                                                                                                                        <option value=""> --- กรุณาเลือก ---</option>
                                                                                                                        @foreach ($name_vaccine as $roles)
                                                                                                                        <option value="{{ $roles->id }}">{{ $roles->name}}</option>
                                                                                                                        @endforeach
                                                                                                                    </select>
                                                                                                                    @else
                                                                                                                    <select type="text" id="" class="form-control" value="{{$data->vaccine_cov_inquiries->name_vac4_inquiries->name}}"  name="name_vaccine_id_4" placeholder="ชื่อวัคซีน">
                                                                                                                        <option value="{{$data->vaccine_cov_inquiries->name_vaccine_id_4}}"> {{$data->vaccine_cov_inquiries->name_vac4_inquiries->name}} </option>
                                                                                                                        @foreach ($name_vaccine as $roles)
                                                                                                                        <option value="{{ $roles->id }}">{{ $roles->name}}</option>
                                                                                                                        @endforeach
                                                                                                                    </select>
                                                                                                                    @endif

                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="form-group row">
                                                                                                            <div class="col-md-4">
                                                                                                                <span>วันที่ได้รับวัคซีนเข็ม 4</span>
                                                                                                            </div>
                                                                                                            <div class="col-md-8">
                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                    <input type="date" id="" class="form-control" value="{{$data->vaccine_cov_inquiries->date_4}}"  name="date_vac_4" placeholder="วันที่ได้รับวัคซีน">
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
                                                                                                                    <input type="text" id="" class="form-control" value="{{$data->vaccine_cov_inquiries->location_4}}"  name="location_vac_4" placeholder="สถานที่รับวัคซีน">
                                                                                                                    <div class="form-control-position">
                                                                                                                        <i class="fa fa-tablet"></i>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </fieldset>
                                                                                                <script type="text/javascript">
                                                                                                    function showvac_1(select) {
                                                                                                        if (select.value == 0) {
                                                                                                            document.getElementById('hidden_vac').style.display = "none";
                                                                                                        } else {
                                                                                                            document.getElementById('hidden_vac').style.display = "block";
                                                                                                        }
                                                                                                    }
                                                                                                </script> --}}

                                                                                            </div>
                                                                                        </div>
                                                                                    </section>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- End Body Left -->


                                                                    {{-- <!-- Body Right -->

                                                                    <div class="col-md-6 col-12">
                                                                        <div class="card border-success p-1">
                                                                            <div class="card">
                                                                                <div class="card-header">
                                                                                </div>
                                                                                <div class="content-body">
                                                                                    <section id="multiple-column-form">
                                                                                        <div class="row">
                                                                                            <div class="col-12">
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
                                                                                                                            <span>อาชีพ</span>
                                                                                                                        </div>
                                                                                                                        <div class="col-md-8">
                                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                                <input type="text" id="text-icon" class="form-control" value="{{$data->user->occ}}"  name="occ" placeholder="อาชีพ">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="form-group row">
                                                                                                                        <div class="col-md-4">
                                                                                                                            <span>สถานที่ทำงาน/สถานศึกษา</span>
                                                                                                                        </div>
                                                                                                                        <div class="col-md-8">
                                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                                <input type="text" id="text-icon" class="form-control" value="{{$data->user->location}}"  name="location" placeholder="ชื่อสถานที่ทำงาน/สถานศึกษา">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="form-group row">
                                                                                                                        <div class="col-md-4">
                                                                                                                            <span>เบอร์โทรศัพท์ที่ติดต่อได้</span>
                                                                                                                        </div>
                                                                                                                        <div class="col-md-8">
                                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                                <input type="number" id="number-icon" class="form-control" value="0{{$data->user->tel}}"  name="tel" placeholder="เบอร์โทรศัพท์ที่ติดต่อได้">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="form-group row">
                                                                                                                        <div class="col-md-4">
                                                                                                                            <span>เบอร์โทรศัพท์ที่ใช้ลง<br>แอปพลิเคชัน "หมอชนะ"</span>
                                                                                                                        </div>
                                                                                                                        <div class="col-md-8">
                                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                                <input type="number" class="form-control" value="0{{$data->user->telapp}}"  name="telapp" placeholder='เบอร์โทรศัพท์ที่ใช้ลงแอปพลิเคชัน "หมอชนะ"'>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <div class="text-left">
                                                                                                                        <span>ที่อยู่ขณะป่วยในประเทศไทย</span>
                                                                                                                    </div>

                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-4">
                                                                                                                            <div class="form-group">
                                                                                                                                <label for="home_id">
                                                                                                                                    บ้านเลขที่ *
                                                                                                                                </label>
                                                                                                                                <input  type="text" class="form-control " id="home_id" name="home_id" value="{{$data->user->home_id}}">
                                                                                                                            </div>
                                                                                                                        </div>

                                                                                                                        <div class="col-md-4">
                                                                                                                            <div class="form-group">
                                                                                                                                <label for="alley">
                                                                                                                                    ซอย
                                                                                                                                </label>
                                                                                                                                <input  type="text" class="form-control " id="alley" name="alley" value="{{$data->user->alley}}">
                                                                                                                            </div>
                                                                                                                        </div>

                                                                                                                        <div class="col-md-4">
                                                                                                                            <div class="form-group">
                                                                                                                                <label for="street">
                                                                                                                                    ถนน *
                                                                                                                                </label>
                                                                                                                                <input  type="text" class="form-control " id="street" name="street" value="{{$data->user->street}}">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                    <div class="row">
                                                                                                                        <div class="col-md-4">
                                                                                                                            <div class="form-group">
                                                                                                                                <label for="province">
                                                                                                                                    จังหวัด *
                                                                                                                                </label>
                                                                                                                                <select  id="province" name="province" class="select2 form-control" onchange="showAmphoes()">
                                                                                                                                    <option value="{{$data->user->province}}"></option>

                                                                                                                                </select>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="col-md-4">
                                                                                                                            <div class="form-group">
                                                                                                                                <label for="district">
                                                                                                                                    อำเภอ *
                                                                                                                                </label>
                                                                                                                                <select  id="amphoe" class="select2 form-control" name="district" onchange="showDistricts()">
                                                                                                                                    <option value="{{$data->user->district}}"></option>
                                                                                                                                </select>

                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="col-md-4">
                                                                                                                            <div class="form-group">
                                                                                                                                <label for="canton">
                                                                                                                                    ตำบล *
                                                                                                                                </label>
                                                                                                                                <select  id="district" name="canton" class="form-control select2 " onchange="showZipcode()">
                                                                                                                                    <option value="{{$data->user->canton}}"></option>
                                                                                                                                </select>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>






                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <h3 class="text-left mb-2">
                                                                                                        <i class="feather icon-clipboard"></i>
                                                                                                        ประวัติความเสี่ยง
                                                                                                    </h3>
                                                                                                    <hr style="height:1px;border-width:0;color:rgb(3, 0, 26);background-color:rgb(3, 0, 26)">

                                                                                                    <h4 class="text-center">รายละเอียดเหตุการณ์ ประวัติเสี่ยงต่อการติดเชื้อ ก่อนเริ่มป่วย</h4>
                                                                                                    <div class="card-content">
                                                                                                        <div class="card-body">
                                                                                                            <div class="col-12">
                                                                                                                <div class="col-md-12">
                                                                                                                    <div class="col-md-12">
                                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                                <input type="text" id="number-icon" class="form-control" value="{{$data->detail_cov_inquiries->details}}"  name="details_cov" placeholder="รายละเอียดเหตุการณ์">
                                                                                                                            </div>
                                                                                                                    </div>
                                                                                                                </div>
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
                                                                                                                                <div class="">
                                                                                                                                    <input type="date" class="form-control pickadate picker__input" value="{{$data->detail_his_inquiries->date_1}}"  name="date_1">
                                                                                                                                </div>
                                                                                                                            </td>

                                                                                                                            <td>
                                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                                    <input type="text" id="first-name-icon" class="form-control" value="{{$data->detail_his_inquiries->location_1}}"  name="location_1" placeholder="กิจกรรม/สถานที่">
                                                                                                                                    <div class="form-control-position">
                                                                                                                                        <i class="fa fa-user-o"></i>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                                    <input type="text" id="first-name-icon" class="form-control" value="{{$data->detail_his_inquiries->person_1}}"  name="person_1" placeholder="จำนวนผู้ร่วมกิจกรรม">
                                                                                                                                    <div class="form-control-position">
                                                                                                                                        <i class="fa fa-user-o"></i>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                        </tr>

                                                                                                                        <tr class="border-bottom">
                                                                                                                            <td>2</td>
                                                                                                                            <td>
                                                                                                                                <div class="">
                                                                                                                                    <input type="date" class="form-control pickadate picker__input" value="{{$data->detail_his_inquiries->date_2}}"  name="date_2">
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                                    <input type="text" id="first-name-icon" class="form-control" value="{{$data->detail_his_inquiries->location_2}}"  name="location_2" placeholder="กิจกรรม/สถานที่">
                                                                                                                                    <div class="form-control-position">
                                                                                                                                        <i class="fa fa-user-o"></i>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                                    <input type="text" id="first-name-icon" class="form-control" value="{{$data->detail_his_inquiries->person_2}}"  name="person_2" placeholder="จำนวนผู้ร่วมกิจกรรม">
                                                                                                                                    <div class="form-control-position">
                                                                                                                                        <i class="fa fa-user-o"></i>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                        </tr>
                                                                                                                        <tr class="border-bottom">
                                                                                                                            <td>3</td>
                                                                                                                            <td>
                                                                                                                                <div class="">
                                                                                                                                    <input type="date" class="form-control pickadate picker__input" value="{{$data->detail_his_inquiries->date_3}}"  name="date_3">
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                                    <input type="text" id="first-name-icon" class="form-control" value="{{$data->detail_his_inquiries->location_3}}"  name="location_3" placeholder="กิจกรรม/สถานที่">
                                                                                                                                    <div class="form-control-position">
                                                                                                                                        <i class="fa fa-user-o"></i>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                                    <input type="text" id="first-name-icon" class="form-control" value="{{$data->detail_his_inquiries->person_3}}"  name="person_3" placeholder="จำนวนผู้ร่วมกิจกรรม">
                                                                                                                                    <div class="form-control-position">
                                                                                                                                        <i class="fa fa-user-o"></i>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                        </tr>
                                                                                                                        <tr class="border-bottom">
                                                                                                                            <td>4</td>
                                                                                                                            <td>
                                                                                                                                <div class="">
                                                                                                                                    <input type="date" class="form-control pickadate picker__input" value="{{$data->detail_his_inquiries->date_4}}"  name="date_4">
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                                    <input type="text" id="first-name-icon" class="form-control" value="{{$data->detail_his_inquiries->location_4}}"  name="location_4" placeholder="กิจกรรม/สถานที่">
                                                                                                                                    <div class="form-control-position">
                                                                                                                                        <i class="fa fa-user-o"></i>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                                    <input type="text" id="first-name-icon" class="form-control" value="{{$data->detail_his_inquiries->person_4}}"  name="person_4" placeholder="จำนวนผู้ร่วมกิจกรรม">
                                                                                                                                    <div class="form-control-position">
                                                                                                                                        <i class="fa fa-user-o"></i>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                        </tr>
                                                                                                                        <tr class="border-bottom">
                                                                                                                            <td>5</td>
                                                                                                                            <td>
                                                                                                                                <div class="">
                                                                                                                                    <input type="date" class="form-control pickadate picker__input" value="{{$data->detail_his_inquiries->date_5}}"  name="date_5">
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                                    <input type="text" id="first-name-icon" class="form-control" value="{{$data->detail_his_inquiries->location_5}}"  name="location_5" placeholder="กิจกรรม/สถานที่">
                                                                                                                                    <div class="form-control-position">
                                                                                                                                        <i class="fa fa-user-o"></i>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                                    <input type="text" id="first-name-icon" class="form-control" value="{{$data->detail_his_inquiries->person_5}}"  name="person_5" placeholder="จำนวนผู้ร่วมกิจกรรม">
                                                                                                                                    <div class="form-control-position">
                                                                                                                                        <i class="fa fa-user-o"></i>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                        </tr>
                                                                                                                        <tr class="border-bottom">
                                                                                                                            <td>6</td>
                                                                                                                            <td>
                                                                                                                                <div class="">
                                                                                                                                    <input type="date" class="form-control pickadate picker__input" value="{{$data->detail_his_inquiries->date_6}}"  name="date_6">
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                                    <input type="text" id="first-name-icon" class="form-control" value="{{$data->detail_his_inquiries->location_6}}"  name="location_6" placeholder="กิจกรรม/สถานที่">
                                                                                                                                    <div class="form-control-position">
                                                                                                                                        <i class="fa fa-user-o"></i>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                                    <input type="text" id="first-name-icon" class="form-control" value="{{$data->detail_his_inquiries->person_6}}"  name="person_6" placeholder="จำนวนผู้ร่วมกิจกรรม">
                                                                                                                                    <div class="form-control-position">
                                                                                                                                        <i class="fa fa-user-o"></i>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                        </tr>
                                                                                                                        <tr class="border-bottom">
                                                                                                                            <td>7</td>
                                                                                                                            <td>
                                                                                                                                <div class="">
                                                                                                                                    <input type="date" class="form-control pickadate picker__input" value="{{$data->detail_his_inquiries->date_7}}"  name="date_7">
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                                    <input type="text" id="first-name-icon" class="form-control" value="{{$data->detail_his_inquiries->location_7}}"  name="location_7" placeholder="กิจกรรม/สถานที่">
                                                                                                                                    <div class="form-control-position">
                                                                                                                                        <i class="fa fa-user-o"></i>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                                    <input type="text" id="first-name-icon" class="form-control" value="{{$data->detail_his_inquiries->person_7}}"  name="person_7" placeholder="จำนวนผู้ร่วมกิจกรรม">
                                                                                                                                    <div class="form-control-position">
                                                                                                                                        <i class="fa fa-user-o"></i>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                        </tr>
                                                                                                                        <tr class="border-bottom">
                                                                                                                            <td>8</td>
                                                                                                                            <td>
                                                                                                                                <div class="">
                                                                                                                                    <input type="date" class="form-control pickadate picker__input" value="{{$data->detail_his_inquiries->date_8}}"  name="date_8">
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                                    <input type="text" id="first-name-icon" class="form-control" value="{{$data->detail_his_inquiries->location_8}}"  name="location_8" placeholder="กิจกรรม/สถานที่">
                                                                                                                                    <div class="form-control-position">
                                                                                                                                        <i class="fa fa-user-o"></i>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                                    <input type="text" id="first-name-icon" class="form-control" value="{{$data->detail_his_inquiries->person_8}}"  name="person_8" placeholder="จำนวนผู้ร่วมกิจกรรม">
                                                                                                                                    <div class="form-control-position">
                                                                                                                                        <i class="fa fa-user-o"></i>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                        </tr>
                                                                                                                        <tr class="border-bottom">
                                                                                                                            <td>9</td>
                                                                                                                            <td>
                                                                                                                                <div class="">
                                                                                                                                    <input type="date" class="form-control pickadate picker__input" value="{{$data->detail_his_inquiries->date_9}}"  name="date_9">
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                                    <input type="text" id="first-name-icon" class="form-control" value="{{$data->detail_his_inquiries->location_9}}"  name="location_9" placeholder="กิจกรรม/สถานที่">
                                                                                                                                    <div class="form-control-position">
                                                                                                                                        <i class="fa fa-user-o"></i>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                                    <input type="text" id="first-name-icon" class="form-control" value="{{$data->detail_his_inquiries->person_9}}"  name="person_9" placeholder="จำนวนผู้ร่วมกิจกรรม">
                                                                                                                                    <div class="form-control-position">
                                                                                                                                        <i class="fa fa-user-o"></i>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                        </tr>
                                                                                                                        <tr class="border-bottom">
                                                                                                                            <td>10</td>
                                                                                                                            <td>
                                                                                                                                <div class="">
                                                                                                                                    <input type="date" class="form-control pickadate picker__input" value="{{$data->detail_his_inquiries->date_10}}"  name="date_10">
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                                    <input type="text" id="first-name-icon" class="form-control" value="{{$data->detail_his_inquiries->location_10}}"  name="location_10" placeholder="กิจกรรม/สถานที่">
                                                                                                                                    <div class="form-control-position">
                                                                                                                                        <i class="fa fa-user-o"></i>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                                    <input type="text" id="first-name-icon" class="form-control" value="{{$data->detail_his_inquiries->person_10}}"  name="person_10" placeholder="จำนวนผู้ร่วมกิจกรรม">
                                                                                                                                    <div class="form-control-position">
                                                                                                                                        <i class="fa fa-user-o"></i>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                        </tr>
                                                                                                                        <tr class="border-bottom">
                                                                                                                            <td>11</td>
                                                                                                                            <td>
                                                                                                                                <div class="">
                                                                                                                                    <input type="date" class="form-control pickadate picker__input" value="{{$data->detail_his_inquiries->date_11}}"  name="date_11">
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                                    <input type="text" id="first-name-icon" class="form-control" value="{{$data->detail_his_inquiries->location_11}}"  name="location_11" placeholder="กิจกรรม/สถานที่">
                                                                                                                                    <div class="form-control-position">
                                                                                                                                        <i class="fa fa-user-o"></i>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                                    <input type="text" id="first-name-icon" class="form-control" value="{{$data->detail_his_inquiries->person_11}}"  name="person_11" placeholder="จำนวนผู้ร่วมกิจกรรม">
                                                                                                                                    <div class="form-control-position">
                                                                                                                                        <i class="fa fa-user-o"></i>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                        </tr>
                                                                                                                        <tr class="border-bottom">
                                                                                                                            <td>12</td>
                                                                                                                            <td>
                                                                                                                                <div class="">
                                                                                                                                    <input type="date" class="form-control pickadate picker__input" value="{{$data->detail_his_inquiries->date_12}}"  name="date_12">
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                                    <input type="text" id="first-name-icon" class="form-control" value="{{$data->detail_his_inquiries->location_12}}"  name="location_12" placeholder="กิจกรรม/สถานที่">
                                                                                                                                    <div class="form-control-position">
                                                                                                                                        <i class="fa fa-user-o"></i>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                                    <input type="text" id="first-name-icon" class="form-control" value="{{$data->detail_his_inquiries->person_12}}"  name="person_12" placeholder="จำนวนผู้ร่วมกิจกรรม">
                                                                                                                                    <div class="form-control-position">
                                                                                                                                        <i class="fa fa-user-o"></i>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                        </tr>
                                                                                                                        <tr class="border-bottom">
                                                                                                                            <td>13</td>
                                                                                                                            <td>
                                                                                                                                <div class="">
                                                                                                                                    <input type="date" class="form-control pickadate picker__input" value="{{$data->detail_his_inquiries->date_13}}"  name="date_13">
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                                    <input type="text" id="first-name-icon" class="form-control" value="{{$data->detail_his_inquiries->location_13}}"  name="location_13" placeholder="กิจกรรม/สถานที่">
                                                                                                                                    <div class="form-control-position">
                                                                                                                                        <i class="fa fa-user-o"></i>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                                    <input type="text" id="first-name-icon" class="form-control" value="{{$data->detail_his_inquiries->person_13}}"  name="person_13" placeholder="จำนวนผู้ร่วมกิจกรรม">
                                                                                                                                    <div class="form-control-position">
                                                                                                                                        <i class="fa fa-user-o"></i>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                        </tr>
                                                                                                                        <tr class="border-bottom">
                                                                                                                            <td>14</td>
                                                                                                                            <td>
                                                                                                                                <div class="">
                                                                                                                                    <input type="date" class="form-control pickadate picker__input" value="{{$data->detail_his_inquiries->date_14}}"  name="date_14">
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                                    <input type="text" id="first-name-icon" class="form-control" value="{{$data->detail_his_inquiries->location_14}}"  name="location_14" placeholder="กิจกรรม/สถานที่">
                                                                                                                                    <div class="form-control-position">
                                                                                                                                        <i class="fa fa-user-o"></i>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                                    <input type="text" id="first-name-icon" class="form-control" value="{{$data->detail_his_inquiries->person_14}}"  name="person_14" placeholder="จำนวนผู้ร่วมกิจกรรม">
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


                                                                                                </div>
                                                                                            </div>
                                                                                    </section>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- End Body right -->

                                                                    <!-- Low Body -->
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
                                                                                                    <h4 class="card-title"><i class="fa fa-comments-o"></i> รายชื่อผู้เสี่ยง</h4>
                                                                                                </div>

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
                                                                                                                        <input type="text" class="form-control input1" placeholder="ชื่อ-นามสกุล" value="{{$data->search_id_inquiries->name}}" name="name_search">
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
                                                                                                                    <select class="form-control" value="{{$data->search_id_inquiries->sex}}" name="sex_search">
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
                                                                                                                    <input type="number" id="expenditure" class="form-control input1" placeholder="อายุ" value="{{$data->search_id_inquiries->age}}" name="age_search">
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
                                                                                                                    <input type="text" id="text-icon" class="form-control" value="{{$data->search_id_inquiries->add}}" name="add_search" placeholder="ที่อยู่">
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
                                                                                                                    <input type="number" id="model" class="form-control input1" placeholder="เบอร์โทรศัพท์ที่ติดต่อได้" value="{{$data->search_id_inquiries->tel}}" name="tel_search">
                                                                                                                    <div class="form-control-position">
                                                                                                                        <i class="fa fa-tablet"></i>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-12">
                                                                                                        <div class="form-group row">
                                                                                                            <div class="col-md-4">
                                                                                                                <span>วันที่สัมผัส</span>
                                                                                                            </div>
                                                                                                            <div class="col-md-8">
                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                    <input type="date" id="model" class="form-control input1" placeholder="วันที่สัมผัส" value="{{$data->search_id_inquiries->datetush}}" name="datetush_search">
                                                                                                                    <div class="form-control-position">
                                                                                                                        <i class="fa fa-tablet"></i>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-12">
                                                                                                        <div class="form-group row">
                                                                                                            <div class="col-md-4">
                                                                                                                <span>ลักษณะการสัมผัส</span>
                                                                                                            </div>
                                                                                                            <div class="col-md-8">
                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                    <input type="text" id="model" class="form-control input1" placeholder="ลักษณะการสัมผัส" value="{{$data->search_id_inquiries->detailstuch}}" name="detailstuch_search">
                                                                                                                    <div class="form-control-position">
                                                                                                                        <i class="fa fa-tablet"></i>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-12">
                                                                                                        <div class="form-group row">
                                                                                                            <div class="col-md-4">
                                                                                                                <span>ป่วย/ไม่ป่วย</span>
                                                                                                            </div>
                                                                                                            <div class="col-md-8">
                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                    <input type="text" id="model" class="form-control input1" placeholder="ป่วย/ไม่ป่วย" value="{{$data->search_id_inquiries->sick}}" name="sick_search">
                                                                                                                    <div class="form-control-position">
                                                                                                                        <i class="fa fa-tablet"></i>
                                                                                                                    </div>
                                                                                                                    <div>
                                                                                                                        <em class="mx-2">(กรณีป่วย ระบุวันเริ่มป่วย และอาการ)</em>
                                                                                                                        <div class="position-relative has-icon-left col-4">
                                                                                                                            <input type="date" id="model" class="form-control input1" placeholder="ระบุวันเริ่มป่วย" value="{{$data->search_id_inquiries->sickdate}}" name="sickdate_search">
                                                                                                                            <div class="form-control-position">
                                                                                                                                <i class="fa fa-tablet"></i>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-12">
                                                                                                        <div class="form-group row">
                                                                                                            <div class="col-md-4">
                                                                                                                <span>การใส่อุปกรณ์ป้องกัน</span>
                                                                                                            </div>
                                                                                                            <div class="col-md-8">
                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                    <input type="text" id="model" class="form-control input1" placeholder="การใส่อุปกรณ์ป้องกัน" value="{{$data->search_id_inquiries->equipment}}" name="equipment_search">
                                                                                                                    <div class="form-control-position">
                                                                                                                        <i class="fa fa-tablet"></i>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-12">
                                                                                                        <div class="form-group row">
                                                                                                            <div class="col-md-4">
                                                                                                                <span>วันที่ได้รับวัคซีนครบตามเกณฑ์
                                                                                                                    </span>
                                                                                                            </div>
                                                                                                            <div class="col-md-8">
                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                    <input type="date" id="model" class="form-control input1" placeholder="วันที่ได้รับวัคซีนครบตามเกณฑ์" value="{{$data->search_id_inquiries->datevaccine}}" name="datevaccine_search">
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

                                                                    <!-- End Low Body --> --}}


                                                                    <!-- button -->
                                                                    <div>

                                                                    </div>
                                                                    <!-- End button -->

                                                                </div>
                                                        </div>
                                                    </form>
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

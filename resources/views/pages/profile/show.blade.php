@extends('layouts.home')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/forms/validation/form-validation.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/app-user.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/select/select2.min.css">

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
                            <h2 class="content-header-title float-left mb-0"><i class="feather icon-users"></i> ข้อมูลส่วนตัว</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">หน้าหลัก</a>
                                    </li>
                                    <li class="breadcrumb-item active">ข้อมูลส่วนตัว
                                    </li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- account setting page start -->
                <section id="page-account-settings">

                    <div class="row">
                        <!-- left menu section -->
                        <div class="col-md-3 mb-2 mb-md-0">
                            <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                                <li class="nav-item">
                                    <a class="nav-link d-flex py-75 active" id="account-pill-general" data-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                                        <i class="feather icon-globe mr-50 font-medium-3"></i>
                                        ข้อมูลทั่วไป
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex py-75" id="account-pill-password" data-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                                        <i class="feather icon-lock mr-50 font-medium-3"></i>
                                        เปลี่ยนรหัสผ่าน
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex py-75" id="account-pill-Report_check_up" data-toggle="pill" href="#account-vertical-Report_check_up" aria-expanded="false">
                                        <i class="feather icon-activity mr-50 font-medium-3"></i>
                                        ข้อมูลตรวจสุขภาพปี
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- right content section -->
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">
                                                @if(Session::has('message'))
                                                    <div class="col-12">
                                                        <div class="alert alert-warning alert-dismissible mb-2" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="text-bold-700 font-medium-3 mr-1"><i class="feather icon-check mr-1"></i> {{ Session::get('message') }}</span>

                                                        </div>
                                                    </div>
                                                @endif
                                                <div class="media">
                                                    <a href="javascript: void(0);">
                                                        <img src="{{ asset('images') }}/{{Auth::user()->pic}}" class="rounded mr-75" alt="profile image" height="64" width="64">
                                                    </a>
                                                    <div class="media-body mt-75">
                                                        <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                            <form action="{{ route('profile.upload', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                                                                {{ csrf_field() }}
                                                                {{ method_field('POST') }}
                                                            <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer" for="account-upload">เลือกรูป</label>
                                                            <input type="file" name="file" id="account-upload" hidden>
                                                            <button class="btn btn-sm btn-outline-warning ml-50" type="submit">อัพโหลดรูป</button>
                                                            </form>
                                                        </div>
                                                    @if(count($errors) > 0)
                                                        @foreach ($errors->all() as $error)
                                                            <p class="text-muted ml-75 mt-50"><small>{{$error}}</small></p>
                                                        @endforeach
                                                    @else
                                                        <p class="text-muted ml-75 mt-50"><small>อัพโหลดได้เฉพาะนามสกุล .jpeg, .png, .bmp เท่านั้น และขนาดไฟล์ไม่เกิน 2 MB (2048 KB)</small></p>
                                                    @endif
                                                    </div>
                                                </div>
                                                <hr>
                                                <form action="{{route('profile.update', Auth::user()->id)}}" method="POST" novalidate>
                                                    {{ csrf_field() }}
                                                    {{ method_field('PUT') }}
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-username">คำนำหน้า</label>
                                                                    <select class="select2 form-control" name="title_name">
                                                                @foreach ($titleNames as $titleNames)
                                                                    <option {{ Auth::user()->title_name_id == $titleNames->id ? 'selected' : '' }} value="{{$titleNames->id}}">{{$titleNames->name}}</option>

                                                                @endforeach
                                                                </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-name">ชื่อหน้า</label>
                                                                    <input type="text" class="form-control" name="first_name" value="{{Auth::user()->first_name}}" placeholder="Name" required data-validation-required-message="This name field is required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-name">นามสกุล</label>
                                                                    <input type="text" class="form-control" name="last_name" value="{{Auth::user()->last_name}}" placeholder="Name" required data-validation-required-message="This name field is required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-e-mail">อีเมล์</label>
                                                                    <input type="email" class="form-control" placeholder="อีเมล์" name="email" value="{{Auth::user()->email}}" required data-validation-required-message="This email field is required">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="account-company">แผนก</label>
                                                                <select class="select2 form-control" name="department">
                                                                @foreach ($department as $departments)
                                                                    <option {{ Auth::user()->department_id == $departments->id ? 'selected' : '' }} value="{{$departments->id}}">{{$departments->name}}</option>

                                                                @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="account-company">ตำแหน่ง</label>
                                                                <input type="text" id="position" class="form-control" placeholder="ตำแหน่ง" name="position" value="{{Auth::user()->position}}" required autocomplete="position" >
                                                            </div>
                                                        </div>
                                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                            {{-- <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">บันทึก</button> --}}
                                                            <button type="button" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0" data-toggle="modal" data-target="#default<?= Auth::user()->id ?>"><i class="feather icon-edit-1"></i> บันทึก</button>

                                                            <div class="modal fade text-left" id="default<?= Auth::user()->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                                                        aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title" id="myModalLabel1">ยืนยันการเปลี่ยนแปลงข้อมูล</h4>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <h5>กรุณาใส่รหัสผ่าน</h5>
                                                                                <input type="password" id="password" class="form-control"
                                                                                name="password" required>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn grey mr-1 mb-1 btn-outline-secondary" data-dismiss="modal">ยกเลิก</button>
                                                                                <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light"><i class="feather icon-edit-1"></i> เปลี่ยนแปลงข้อมูล</button>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- <button type="reset" class="btn btn-outline-warning">Cancel</button> --}}
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade " id="account-vertical-password" role="tabpanel" aria-labelledby="account-pill-password" aria-expanded="false">
                                                <form action="{{route('profile.update', Auth::user()->id)}}" method="POST" novalidate>
                                                    {{ csrf_field() }}
                                                    {{ method_field('PUT') }}
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-old-password">รหัสผ่านเดิม</label>
                                                                    <input type="password" name="oldpassword" class="form-control" id="account-old-password" required placeholder="ยืนยันรหัสผ่านเดิม" data-validation-required-message="ยืนยันรหัสผ่านเดิม">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-new-password">รหัสผ่านใหม่</label>
                                                                    <input type="password" name="password" id="account-new-password" class="form-control" placeholder="รหัสผ่านใหม่" required data-validation-required-message="รหัสผ่านใหม่" minlength="6">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-retype-new-password">ยืนยันรหัสผ่านใหม่</label>
                                                                    <input type="password" name="con-password" class="form-control" required id="account-retype-new-password" data-validation-match-match="password" placeholder="ยืนยันรหัสผ่านใหม่" data-validation-required-message="ต้องยืนยันพาสเวิร์ดใหม่" minlength="6">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                            <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0"><i class="feather icon-edit-1"></i> เปลี่ยนรหัสผ่าน</button>
                                                            {{-- <button type="reset" class="btn btn-outline-warning">Cancel</button> --}}
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade " id="account-vertical-Report_check_up" role="tabpanel" aria-labelledby="account-pill-Report_check_up" aria-expanded="false">
                                                <ul class="nav nav-pills justify-content-center">
                                                    @if($data3 == 'ไม่มีข้อมูล')
                                                    <p><h3 class="text-center">ไม่มีข้อมูลตรวจสุขภาพ</h3></p>
                                                    @else
                                                    @foreach ($data3 as $item)
                                                    <li class="nav-item">
                                                    <a class="nav-link" id="home{{$item->year}}-tab-fill" data-toggle="pill" href="#home{{$item->year}}-fill" aria-expanded="true">ปี {{ $item->year + 543 }}</a>
                                                    </li>
                                                    @endforeach
                                                    @endif
                                                </ul>
                                                <div class="tab-content">
                                                    @if($data3 == 'ไม่มีข้อมูล')

                                                    @elseif(count($data3))
                                                    @foreach ($data3 as $item)
                                                        <div role="tabpanel" class="tab-pane" id="home{{$item->year}}-fill" aria-labelledby="home{{$item->year}}-tab-fill" aria-expanded="true">
                                                            <hr>
                                                            <div class="col-12">
                                                                <h2 class="text-center mb-2"><i class="feather icon-clipboard"></i> ข้อมูลตรวจสุขภาพปี {{ $item->year + 543 }}</h2>
                                                            </div>
                                                            <div class="row match-height">
                                                                <div class="col-md-4 col-12">
                                                                    <div class="card-content">
                                                                        <div class="card-body">
                                                                            <div class="form-body">
                                                                                <div class="row">
                                                                                    <div class="table-responsive border rounded px-1 ">
                                                                                        <h6 class="border-bottom py-1 mx-1 mb-0 font-medium-2"><i class="feather icon-lock mr-50 "></i>สรุปผลตรวจสุขภาพ</h6>
                                                                                        <div class="row">
                                                                                            <div class="card-content">
                                                                                                <div class="card-body">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-6">
                                                                                                            <ul class="list-unstyled mb-0">
                                                                                                                <li class="d-inline-block mr-2">
                                                                                                                    <fieldset>
                                                                                                                        <div class="vs-checkbox-con vs-checkbox-danger">
                                                                                                                            <input type="checkbox"  value="false"

                                                                                                                            disabled>
                                                                                                                            <span class="vs-checkbox vs-checkbox-lg">
                                                                                                                                <span class="vs-checkbox--check">
                                                                                                                                    <i class="vs-icon feather icon-check"></i>
                                                                                                                                </span>
                                                                                                                            </span>
                                                                                                                            <span class="">ผลการตรวจปกติ</span>
                                                                                                                        </div>
                                                                                                                    </fieldset>
                                                                                                                </li>
                                                                                                                <li class="d-inline-block mr-2">
                                                                                                                    <fieldset>
                                                                                                                        <div class="vs-checkbox-con vs-checkbox-danger">
                                                                                                                            <input type="checkbox" value="false"
                                                                                                                            @if($item->report_check_up_main_detail_1->blood_glu >= '40' && $item->report_check_up_main_detail_1->blood_glu  <= '129')
                                                                                                                            @else
                                                                                                                            checked
                                                                                                                            @endif
                                                                                                                            disabled>
                                                                                                                            <span class="vs-checkbox vs-checkbox-lg">
                                                                                                                                <span class="vs-checkbox--check">
                                                                                                                                    <i class="vs-icon feather icon-check"></i>
                                                                                                                                </span>
                                                                                                                            </span>
                                                                                                                            <span class="">น้ำตาลในเลือดสูง</span>
                                                                                                                        </div>
                                                                                                                    </fieldset>
                                                                                                                </li>
                                                                                                                <li class="d-inline-block mr-2">
                                                                                                                    <fieldset>
                                                                                                                        <div class="vs-checkbox-con vs-checkbox-danger">
                                                                                                                            <input type="checkbox" value="false"
                                                                                                                            @if( $data->gender == '1')
                                                                                                                                @if($item->report_check_up_main_detail_1->blood_uric >= '3.4' && $item->report_check_up_main_detail_1->blood_uric <= '7.0')
                                                                                                                                @else
                                                                                                                                checked
                                                                                                                                @endif
                                                                                                                            @else
                                                                                                                                @if($item->report_check_up_main_detail_1->blood_uric >= '2.4' && $item->report_check_up_main_detail_1->blood_uric <= '5.7')
                                                                                                                                @else
                                                                                                                                checked
                                                                                                                                @endif
                                                                                                                            @endif
                                                                                                                            disabled>
                                                                                                                            <span class="vs-checkbox vs-checkbox-lg">
                                                                                                                                <span class="vs-checkbox--check">
                                                                                                                                    <i class="vs-icon feather icon-check"></i>
                                                                                                                                </span>
                                                                                                                            </span>
                                                                                                                            <span class="">กรดยูริคสูง</span>
                                                                                                                        </div>
                                                                                                                    </fieldset>
                                                                                                                </li>
                                                                                                                <li class="d-inline-block mr-2">
                                                                                                                    <fieldset>
                                                                                                                        <div class="vs-checkbox-con vs-checkbox-danger">
                                                                                                                            <input type="checkbox"  value="false"
                                                                                                                            @if( $data->gender == '1')
                                                                                                                                @if($item->report_check_up_main_detail_1->blood_ast >= '0' && $item->report_check_up_main_detail_1->blood_ast <= '50')
                                                                                                                                @elseif($item->report_check_up_main_detail_1->blood_alt >= '0' && $item->report_check_up_main_detail_1->blood_alt <= '50')
                                                                                                                                @else
                                                                                                                                checked
                                                                                                                                @endif
                                                                                                                            @else
                                                                                                                                @if($item->report_check_up_main_detail_1->blood_ast >= '0' && $item->report_check_up_main_detail_1->blood_ast <= '35')
                                                                                                                                @elseif($item->report_check_up_main_detail_1->blood_alt >= '0' && $item->report_check_up_main_detail_1->blood_alt <= '35')
                                                                                                                                @else
                                                                                                                                checked
                                                                                                                                @endif
                                                                                                                            @endif
                                                                                                                            disabled>
                                                                                                                            <span class="vs-checkbox vs-checkbox-lg">
                                                                                                                                <span class="vs-checkbox--check">
                                                                                                                                    <i class="vs-icon feather icon-check"></i>
                                                                                                                                </span>
                                                                                                                            </span>
                                                                                                                            <span class="">ตับผิดปกติ</span>
                                                                                                                        </div>
                                                                                                                    </fieldset>
                                                                                                                </li>
                                                                                                                <li class="d-inline-block mr-2">
                                                                                                                    <fieldset>
                                                                                                                        <div class="vs-checkbox-con vs-checkbox-danger">
                                                                                                                            <input type="checkbox" value="false"
                                                                                                                            @if($item->report_check_up_main_detail_1->blood_tg >= '150')
                                                                                                                            checked
                                                                                                                            @elseif($item->report_check_up_main_detail_1->blood_chol >= '200')
                                                                                                                            checked
                                                                                                                            @endif
                                                                                                                            disabled>
                                                                                                                            <span class="vs-checkbox vs-checkbox-lg">
                                                                                                                                <span class="vs-checkbox--check">
                                                                                                                                    <i class="vs-icon feather icon-check"></i>
                                                                                                                                </span>
                                                                                                                            </span>
                                                                                                                            <span class="">ไขมันในเลือดสูง</span>
                                                                                                                        </div>
                                                                                                                    </fieldset>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                        <div class="col-md-6">
                                                                                                            <ul class="list-unstyled mb-0">
                                                                                                                <li class="d-inline-block mr-2">
                                                                                                                    <fieldset>
                                                                                                                        <div class="vs-checkbox-con vs-checkbox-danger">
                                                                                                                            <input type="checkbox" value="false"
                                                                                                                            @if( $data->gender == '1')
                                                                                                                                @if($item->report_check_up_main_detail_1->blood_bun >= '6' && $item->report_check_up_main_detail_1->blood_bun <= '20')
                                                                                                                                @elseif($item->report_check_up_main_detail_1->blood_cr >= '0.67' && $item->report_check_up_main_detail_1->blood_cr <= '1.17')
                                                                                                                                @else
                                                                                                                                checked
                                                                                                                                @endif
                                                                                                                            @else
                                                                                                                                @if($item->report_check_up_main_detail_1->blood_bun >= '6' && $item->report_check_up_main_detail_1->blood_bun <= '20')
                                                                                                                                @elseif($item->report_check_up_main_detail_1->blood_cr >= '0.51' && $item->report_check_up_main_detail_1->blood_cr <= '0.95')
                                                                                                                                checked
                                                                                                                                @endif
                                                                                                                            @endif
                                                                                                                            disabled>
                                                                                                                            <span class="vs-checkbox vs-checkbox-lg">
                                                                                                                                <span class="vs-checkbox--check">
                                                                                                                                    <i class="vs-icon feather icon-check"></i>
                                                                                                                                </span>
                                                                                                                            </span>
                                                                                                                            <span class="">ไตผิดปกติ</span>
                                                                                                                        </div>
                                                                                                                    </fieldset>
                                                                                                                </li>
                                                                                                                <li class="d-inline-block mr-2">
                                                                                                                    <fieldset>
                                                                                                                        <div class="vs-checkbox-con vs-checkbox-danger">
                                                                                                                            <input type="checkbox" value="false"
                                                                                                                            @if($item->report_check_up_main_urine->urine_blood == '0')
                                                                                                                            @elseif($item->report_check_up_main_urine->urine_blood != 'Negative')
                                                                                                                            checked
                                                                                                                            @elseif($item->report_check_up_main_urine->urine_ketone != 'Negative')
                                                                                                                            checked
                                                                                                                            @elseif($item->report_check_up_main_urine->urine_sugar != 'Negative')
                                                                                                                            checked
                                                                                                                            @elseif($item->report_check_up_main_urine->urine_protein != 'Negative')
                                                                                                                            checked
                                                                                                                            @elseif($item->report_check_up_main_urine->urine_rbc != 'Negative')
                                                                                                                            checked
                                                                                                                            @elseif($item->report_check_up_main_urine->urine_wbc != 'Negative')
                                                                                                                            checked
                                                                                                                            @elseif($item->report_check_up_main_urine->urine_epi != 'Negative')
                                                                                                                            checked
                                                                                                                            @endif
                                                                                                                            disabled>
                                                                                                                            <span class="vs-checkbox vs-checkbox-lg">
                                                                                                                                <span class="vs-checkbox--check">
                                                                                                                                    <i class="vs-icon feather icon-check"></i>
                                                                                                                                </span>
                                                                                                                            </span>
                                                                                                                            <span class="">ปัสสาวะผิดปกติ</span>
                                                                                                                        </div>
                                                                                                                    </fieldset>
                                                                                                                </li>
                                                                                                                <li class="d-inline-block mr-2">
                                                                                                                    <fieldset>
                                                                                                                        <div class="vs-checkbox-con vs-checkbox-danger">
                                                                                                                            <input type="checkbox"

                                                                                                                            @if( $data->gender == '1')
                                                                                                                                @if($item->report_check_up_cbc->blood_hb >= '13' && $item->report_check_up_cbc->blood_hb  <= '18')
                                                                                                                                    @else
                                                                                                                                    checked
                                                                                                                                @endif
                                                                                                                            @else
                                                                                                                                @if($item->report_check_up_cbc->blood_hb >= '11' && $item->report_check_up_cbc->blood_hb  <= '16')
                                                                                                                                @else
                                                                                                                                checked
                                                                                                                                @endif
                                                                                                                            @endif

                                                                                                                            value="false" disabled>
                                                                                                                            <span class="vs-checkbox vs-checkbox-lg">
                                                                                                                                <span class="vs-checkbox--check">
                                                                                                                                    <i class="vs-icon feather icon-check"></i>
                                                                                                                                </span>
                                                                                                                            </span>
                                                                                                                            <span class="">โลหิตจาง</span>
                                                                                                                        </div>
                                                                                                                    </fieldset>
                                                                                                                </li>
                                                                                                                <li class="d-inline-block mr-2">
                                                                                                                    <fieldset>
                                                                                                                        <div class="vs-checkbox-con vs-checkbox-danger">
                                                                                                                            <input type="checkbox"

                                                                                                                            value="false" disabled>
                                                                                                                            <span class="vs-checkbox vs-checkbox-lg">
                                                                                                                                <span class="vs-checkbox--check">
                                                                                                                                    <i class="vs-icon feather icon-check"></i>
                                                                                                                                </span>
                                                                                                                            </span>
                                                                                                                            <span class="">อุจจาระผิดปกติ</span>
                                                                                                                        </div>
                                                                                                                    </fieldset>
                                                                                                                </li>
                                                                                                                <li class="d-inline-block mr-2">
                                                                                                                    <fieldset>
                                                                                                                        <div class="vs-checkbox-con vs-checkbox-danger">
                                                                                                                            <input type="checkbox" value="false"

                                                                                                                            disabled>
                                                                                                                            <span class="vs-checkbox vs-checkbox-lg">
                                                                                                                                <span class="vs-checkbox--check">
                                                                                                                                    <i class="vs-icon feather icon-check"></i>
                                                                                                                                </span>
                                                                                                                            </span>
                                                                                                                            <span class="">ความดันโลหิตสูง</span>
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
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5 col-12">
                                                                    <div class="card-content">
                                                                        <div class="card-body">
                                                                            <div class="form-body">
                                                                                <div class="row">
                                                                                    <div class="table-responsive border rounded px-1 ">
                                                                                        <h6 class="border-bottom py-1 mx-1 mb-0 font-medium-2"><i class="feather icon-lock mr-50 "></i>ข้อมูลทั่วไป</h6>

                                                                                            <div class="row">
                                                                                                <div class="col-md-6 col-12 mb-1">
                                                                                                    <label for="projectinput3">น้ำหนัก</label>
                                                                                                    <fieldset>
                                                                                                        <div class="input-group">
                                                                                                            <div class="input-group-prepend">
                                                                                                                <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                                                            </div>
                                                                                                            <input type="text" class="form-control" placeholder="น้ำหนัก" aria-label="น้ำหนัก" value="{{ $item->report_check_up_main_detail_1->weight }}"
                                                                                                                        name="weight" id='weight' disabled>
                                                                                                            <div class="input-group-append">
                                                                                                                <span class="input-group-text">ก.ก.</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </fieldset>
                                                                                                </div>
                                                                                                <div class="col-md-6 col-12 mb-1">
                                                                                                    <label for="projectinput3">ส่วนสูง</label>
                                                                                                    <fieldset>
                                                                                                        <div class="input-group">
                                                                                                            <div class="input-group-prepend">
                                                                                                                <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                                                            </div>
                                                                                                            <input type="text" class="form-control" placeholder="ส่วนสูง" aria-label="ส่วนสูง" value="{{ $item->report_check_up_main_detail_1->height }}"
                                                                                                                        name="height" id='height' disabled>
                                                                                                            <div class="input-group-append">
                                                                                                                <span class="input-group-text">ซ.ม.</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </fieldset>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-6 col-12 mb-1">
                                                                                                    <label for="projectinput3">เส้นรอบเอว (วัดผ่านสะดือ)</label>
                                                                                                    <fieldset>
                                                                                                        <div class="input-group">
                                                                                                            <div class="input-group-prepend">
                                                                                                                <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                                                            </div>
                                                                                                            <input type="text" class="form-control" placeholder="เส้นรอบเอว" aria-label="เส้นรอบเอว" value="{{ $item->report_check_up_main_detail_1->waist }}"
                                                                                                                        name="waist" id='waist' disabled>
                                                                                                            <div class="input-group-append">
                                                                                                                <span class="input-group-text">ซ.ม.</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </fieldset>
                                                                                                </div>
                                                                                                <div class="col-md-6 col-12 mb-1">
                                                                                                    <label for="bmi">BMI</label>
                                                                                                    <fieldset>
                                                                                                        <div class="input-group">
                                                                                                            <div class="input-group-prepend">
                                                                                                                <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                                                            </div>
                                                                                                            <input type="text" class="form-control" placeholder="BMI" aria-label="BMI" value="{{ $item->report_check_up_main_detail_1->bmi }}"
                                                                                                                        name="bmi" id='bmi' disabled>
                                                                                                        </div>
                                                                                                    </fieldset>
                                                                                                </div>

                                                                                            </div>

                                                                                            <div class="row">
                                                                                                <div class="col-md-6 col-12 mb-1">
                                                                                                    <label for="projectinput3">ความดันโลหิต</label>
                                                                                                    <fieldset>
                                                                                                        <div class="input-group">
                                                                                                            <div class="input-group-prepend">
                                                                                                                <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                                                            </div>
                                                                                                            <input type="number" class="form-control" placeholder="ความดันโลหิต" aria-label="ความดันโลหิต" value="{{ $item->report_check_up_main_detail_1->pressure_1 }}"
                                                                                                                        name="pressure_1" id='pressure_1' disabled>
                                                                                                            <div class="input-group-append">
                                                                                                                <span class="input-group-text">มม. ปรอท</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </fieldset>
                                                                                                </div>
                                                                                                {{-- <div class="col-md-3 col-12 mb-1">
                                                                                                    <label for="projectinput3">ความดันโลหิต (วัดครั้งที่ 2)</label>
                                                                                                    <fieldset>
                                                                                                        <div class="input-group">
                                                                                                            <div class="input-group-prepend">
                                                                                                                <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                                                            </div>
                                                                                                            <input type="number" class="form-control" placeholder="ความดันโลหิต" aria-label="ความดันโลหิต" value="{{ $item->report_check_up_main_detail_1->pressure_2 }}"
                                                                                                                        name="pressure_2" id='pressure_2' disabled>
                                                                                                            <div class="input-group-append">
                                                                                                                <span class="input-group-text">มม. ปรอท</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </fieldset>
                                                                                                </div> --}}
                                                                                                <div class="col-md-6 col-12 mb-1">
                                                                                                    <label for="projectinput3">ชีพจร</label>
                                                                                                    <fieldset>
                                                                                                        <div class="input-group">
                                                                                                            <div class="input-group-prepend">
                                                                                                                <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                                                            </div>
                                                                                                            <input type="number" class="form-control" placeholder="ชีพจร" aria-label="ชีพจร" value="{{ $item->report_check_up_main_detail_1->pulse_1 }}"
                                                                                                                        name="pulse_1" id='pulse_1' disabled>
                                                                                                            <div class="input-group-append">
                                                                                                                <span class="input-group-text">ครั้ง/นาที</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </fieldset>
                                                                                                </div>
                                                                                                {{-- <div class="col-md-3 col-12 mb-1">
                                                                                                    <label for="projectinput3">ชีพจร ครั้งที่ 2</label>
                                                                                                    <fieldset>
                                                                                                        <div class="input-group">
                                                                                                            <div class="input-group-prepend">
                                                                                                                <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                                                            </div>
                                                                                                            <input type="number" class="form-control" placeholder="ชีพจร" aria-label="ชีพจร" value="{{ $item->report_check_up_main_detail_1->pulse_2 }}"
                                                                                                                        name="pulse_2" id='pulse_2' disabled>
                                                                                                            <div class="input-group-append">
                                                                                                                <span class="input-group-text">ครั้ง/นาที</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </fieldset>
                                                                                                </div> --}}
                                                                                            </div>

                                                                                        <p>*กรณีที่วัดความดันโลหิตครั้งแรกผิดปกติ ให้วัดครั้งที่ 2 หากค่าที่ได้ 2 ครั้งแตกต่างกันไม่เกิน 10 มม.ปรอท ให้ใช้ค่าที่ใกล้เคียงกับค่าปกติมากที่สุด แต่หากแตกต่างกันเกิน 10 มม.ปรอท ให้ใช้ค่าเฉลี่ยจากการวัดทั้ง 2 ครั้ง</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="col-md-3 col-12">

                                                                    <div class="table-responsive border rounded px-1 mt-2 mb-2">
                                                                        <h6 class="border-bottom py-1 mx-1 mb-0 font-medium-2"><i class="feather icon-lock mr-50 "></i>X-Ray</h6>

                                                                        <div class="row">
                                                                            <div class="form-group col-md-12 mb-2">
                                                                                <div class="col-md-9">
                                                                                        <fieldset class="ml-1 mt-1">
                                                                                        <input type="radio" name="x_ray" value="0"  disabled
                                                                                        @if($item->report_check_up_main_detail_1->x_ray == "0") checked="checked" @endif >
                                                                                            <label for="input-radio-11">ไม่ได้ตรวจ</label>
                                                                                        </fieldset>
                                                                                        <fieldset class="ml-1">
                                                                                        <input type="radio" name="x_ray" value="1"  disabled
                                                                                        @if($item->report_check_up_main_detail_1->x_ray == "1") checked="checked" @endif >
                                                                                        <label for="input-radio-12">ปกติ</label>
                                                                                        </fieldset>
                                                                                        <fieldset class="ml-1">
                                                                                        <input type="radio" name="x_ray" value="2" disabled
                                                                                        @if($item->report_check_up_main_detail_1->x_ray == "2") checked="checked" @endif >
                                                                                        <label for="input-radio-12">ผิดปกติ</label>
                                                                                        </fieldset>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @if($data->gender == '2')
                                                                    <div class="table-responsive border rounded px-1 mt-2 mb-2">
                                                                        <h6 class="border-bottom py-1 mx-1 mb-0 font-medium-2"><i class="feather icon-lock mr-50 "></i>pap smear</h6>
                                                                        <div class="row">
                                                                            <div class="form-group col-md-6 mb-2">

                                                                                <div class="col-md-9">
                                                                                    <fieldset class="ml-1 mt-1">
                                                                                        <input type="radio" name="pap" value="0"  onclick="j10_2_2create();" disabled
                                                                                        @if($item->report_check_up_main_detail_1->pap  == "0") checked="checked" @endif >
                                                                                        <label for="input-radio-11">ไม่ได้ตรวจ</label>
                                                                                    </fieldset>
                                                                                    <fieldset class="ml-1">
                                                                                        <input type="radio" name="pap" value="1"  onclick="j10_2_2create();" disabled
                                                                                        @if($item->report_check_up_main_detail_1->pap == "1") checked="checked" @endif >
                                                                                        <label for="input-radio-12">ปกติ</label>
                                                                                    </fieldset>
                                                                                    <fieldset class="ml-1">
                                                                                        <input type="radio" name="pap" value="2" onclick="j10_2_1create();" disabled
                                                                                        @if($item->report_check_up_main_detail_1->pap  == "2") checked="checked" @endif >
                                                                                        <label for="input-radio-12">ผิดปกติ</label>
                                                                                        @if($item->pap  == "2")
                                                                                        <div id="div11create" style="margin-bottom: .5rem;">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <label for="projectinput3">(ระบุ)</label>
                                                                                                    <fieldset>
                                                                                                        <div class="input-group">
                                                                                                            <div class="input-group-prepend">
                                                                                                                <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                                                            </div>
                                                                                                            <input type="text" class="form-control" aria-label="" placeholder=""
                                                                                                            disabled   name="pap_d" id='pap_d' value="{{ $item->report_check_up_main_detail_1->pap_d  }}" >


                                                                                                        </div>
                                                                                                    </fieldset>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        @endif
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="row match-height">
                                                                <div class="col-md-4 col-12">
                                                                    <div class="card">
                                                                        <div class="card-content">
                                                                                <div class="form-body">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                            <div class="table-responsive border rounded px-1">
                                                                                                <h6 class="border-bottom py-1 mx-1 mb-0 font-medium-2"><i class="feather icon-lock mr-50 "></i>ผลตรวจความสมบูรณ์ของเม็ดเลือด (CBC)</h6>

                                                                                            {{-- <label class="mb-2" for="input-radio-12"><strong>ผลตรวจความสมบูรณ์ของเม็ดเลือด (CBC)</strong></label> --}}

                                                                                                @include('pages.check_up.v_2.admin.unit_army.include.show.show_import_cbc')

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @if($data->age >= '35')
                                                                <div class="col-md-4 col-12">
                                                                    <div class="card">
                                                                        <div class="card-content">
                                                                                <div class="form-body">
                                                                                    <div class="row">

                                                                                        <div class="col-md-12">
                                                                                            <div class="table-responsive border rounded px-1">
                                                                                                <h6 class="border-bottom py-1 mx-1 mb-0 font-medium-2"><i class="feather icon-lock mr-50 "></i>ผลตรวจเลือด (Blood Chemistry)</h6>

                                                                                                {{-- <label class="mb-2" for="input-radio-12"><strong>ผลตรวจเลือด (Blood Chemistry)</strong></label> --}}
                                                                                                @if($item->report_check_up_main_detail_1->blood_glu > '0')
                                                                                                @include('pages.check_up.v_2.admin.unit_army.include.show.show_import_BloodChemistry')
                                                                                                @else
                                                                                                <div class="text-bold-600 mt-1 mb-1">ไม่มีผลตรวจ</div>
                                                                                                @endif
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @endif
                                                                <div class="col-md-4 col-12">
                                                                    <div class="card">
                                                                        <div class="card-content">
                                                                                <div class="form-body">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                            <div class="table-responsive border rounded px-1">
                                                                                                <h6 class="border-bottom py-1 mb-0 font-medium-2"><i class="feather icon-lock mr-50 "></i>ผลตรวจปัสสาวะ (Urine Examination)</h6>

                                                                                                {{-- <label class="mb-2" for="input-radio-12"><strong>ผลตรวจปัสสาวะ (Urine Examination)</strong></label> --}}


                                                                                                @if($item->report_check_up_main_urine->urine_blood == '0')
                                                                                                <div class="text-bold-600 mt-1 mb-1">ไม่มีผลตรวจ</div>
                                                                                                @else
                                                                                                @include('pages.check_up.v_2.admin.unit_army.include.show.show_import_urine')

                                                                                                @endif
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    @endforeach
                                                    @else
                                                                <p><h3 class="text-center">ไม่มีข้อมูลตรวจสุขภาพ</h3></p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- account setting page end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
    var app = new Vue({
      el: '#app',
      data: {
        password_options: 'keep',
        rolesSelected: {!! Auth::user()->roles->pluck('id') !!}
      }
    });
</script>
 <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets') }}/js/scripts/pages/account-setting.js"></script>
    <!-- END: Page JS-->

<!-- BEGIN: Page Vendor JS-->

    <script src="{{ asset('app-assets') }}/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/extensions/dropzone.min.js"></script>
    <!-- END: Page Vendor JS-->
    <script src="{{ asset('app-assets') }}/js/scripts/forms/validation/form-validation.js"></script>

    <script src="{{ asset('app-assets') }}/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="{{ asset('app-assets') }}/js/scripts/forms/select/form-select2.js"></script>

@endsection

@extends('layouts.home')

@section('styles')
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/select/select2.min.css">
@endsection

@section('content')

 <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">KSVR Check Up</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">หน้าหลัก</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('check_up.army_2') }}">KSVR Check Up - V.2</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('check_up.army_2') }}">หน่วยงานทหาร</a>
                                    </li>
                                    <li class="breadcrumb-item active"><i class="feather icon-clipboard"></i> ข้อมูลตรวจสุขภาพปี
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">

                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center mb-2"><i class="feather icon-clipboard"></i> ข้อมูลตรวจสุขภาพปี</h2>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center"><i class="feather icon-user"></i> ข้อมูลส่วนตัว </h4> <span class="text-danger">อัพเดตล่าสุด วันที่ {{ DateThai3($data->updated_at) }}</span>
                                </div>
                                <div class="card-content">

                                    <div class="card-body">
                                            @if(Session::has('message_profile'))
                                                <div class="alert alert-primary">
                                                    <span class="text-bold-700 font-medium-3 mr-1"><i class="feather icon-check mr-1"></i>{{ Session::get('message_profile') }}</span>
                                                </div>

                                            @endif

                                        <div class="form-body mt-2">

                                            <div class="row">
                                                <div class="col-md-2 col-12">
                                                    <div class="form-label-group position-relative has-icon-left">

                                                        <select class="form-control" id="select2-array"
                                                        name="title_name" disabled>
                                                        <option value="">คำนำหน้า</option>
                                                            @foreach ($titlename as $roles)
                                                            <option {{ $data->title_name_id == $roles->id ? 'selected' : '' }}
                                                                    value="{{$roles->id}}">{{$roles->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        <div class="form-control-position">
                                                                <i class="feather icon-user"></i>
                                                            </div>
                                                        <label for="projectinput1">คำนำหน้า</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-5 col-12">
                                                    <div class="form-label-group position-relative has-icon-left">

                                                        <input type="text" id="projectinput1" class="form-control" value="{{ $data->first_name }}"
                                                            disabled name="first_name">
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                        <label for="projectinput1">ชื่อหน้า</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-5 col-12">
                                                    <div class="form-label-group position-relative has-icon-left">

                                                        <input type="text" id="projectinput2" class="form-control" value="{{ $data->last_name }}"
                                                            disabled name="last_name">
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                        <label for="projectinput2">นามสกุล</label>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-4 mb-2">
                                                    <div class="form-label-group position-relative has-icon-left">
                                                        <input type="text" id="projectinput3" class="form-control" value="{{ $data->cid }}" name="cid" disabled>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                        <label for="projectinput3">เลขที่บัตรประจำตัวประชาชน</label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-4 mb-2">
                                                    <div class="form-label-group position-relative has-icon-left">
                                                        <input type="text" id="projectinput3" class="form-control" value="{{ $data->hn }}" name="hn" disabled>
                                                        <div class="form-control-position">
                                                                <i class="feather icon-user"></i>
                                                            </div>
                                                        <label for="projectinput3">เลขที่ HN</label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-4 mb-2">
                                                    <div class="form-label-group position-relative has-icon-left">
                                                    <input type="text" id="projectinput4" class="form-control" value="{{ $data->age }}" name="age" disabled>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                        <label for="projectinput4">อายุ</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <button type="button" class="btn btn-warning mr-1 mt-1 waves-effect waves-light" data-toggle="modal" data-target="#default_report_1">
                                                            <i class="feather icon-package"></i> ข้อมูลสำรวจภาวะสุขภาพประจำปี
                                                        </button>
                                                        <a class="btn btn-primary mr-1 waves-effect waves-light mt-1" href="{{ route('check_up_army_2.edit', $data->id)}}"><i class="feather icon-edit"></i> แก้ไขข้อมูลส่วนตัว</a>
                                                         <button type="button" class="btn btn-danger mr-1 mt-1 waves-effect waves-light" data-toggle="modal" data-target="#default">
                                                                <i class="feather icon-trash-2"></i> ลบข้อมูล
                                                            </button>

                                                        <a class="btn btn-info waves-effect waves-light mt-1" href="{{ route('check_up.army_2')}}"><i class="feather icon-monitor"></i> กลับหน้าแรก</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade text-left" id="default_report_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                <div class="modal-dialog modal-xl" role="document">

                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="myModalLabel1">ข้อมูลสำรวจภาวะสุขภาพประจำปี</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <ul class="nav nav-pills justify-content-center">
                                                                    @foreach ($data2 as $item)
                                                                    <li class="nav-item">
                                                                    <a class="nav-link" id="report{{$item->year}}-tab-fill" data-toggle="pill" href="#report{{$item->year}}-fill" aria-expanded="true">ปี {{ $item->year + 543 }}</a>
                                                                    </li>
                                                                    @endforeach
                                                                </ul>
                                                                <div class="tab-content">

                                                                    @if(count($data2))
                                                                        @foreach ($data2 as $item)
                                                                            <div role="tabpanel" class="tab-pane" id="report{{$item->year}}-fill" aria-labelledby="report{{$item->year}}-tab-fill">
                                                                                <hr>
                                                                                <div class="col-12">
                                                                                    <h2 class="text-center mb-2"><i class="feather icon-clipboard"></i> ข้อมูลสำรวจภาวะสุขภาพประจำปี {{ $item->year + 543 }}</h2>
                                                                                </div>
                                                                                @include('pages.check_up.v_2.admin.unit_army.include.report_1')

                                                                            </div>
                                                                        @endforeach
                                                                    @else
                                                                                <p><h3 class="text-center">ไม่มีข้อมูลตรวจสุขภาพ</h3></p>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">

                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>

                                                            </div>

                                                        </div>


                                                </div>
                                            </div>
                                            <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable" role="document">

                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="myModalLabel1">ลบข้อมูล</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body text-center">
                                                                    คุณต้องการลบข้อมูล<b> "{{ $data->title_name->name }}{{ $data->first_name }} {{ $data->last_name }}" </b>ใช่หรือไม่
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form action="{{ route('check_up_army_2.destroy', $data->id) }}" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                                                    <button type="submit" class="btn btn-danger">ลบข้อมูล</button>
                                                                    </form>
                                                                </div>

                                                            </div>


                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"><i class="feather icon-save"></i> ข้อมูลตรวจสุขภาพ</h4>
                                    <div class="text-left">
                                        <a href="{{ route('check_up_army_2.create', $data->id) }}" class="mt-1 btn btn-info" data-toggle="modal" data-target="#import_his"><i class="feather icon-user-plus"></i> นำเข้าข้อมูลตรวจสุขภาพ (HIS)</a>
                                        <a href="{{ route('check_up_army_2.create', $data->id) }}" class="mt-1 btn btn-success" data-toggle="modal" data-target="#default1"><i class="feather icon-user-plus"></i> ข้อมูลตรวจสุขภาพ</a>
                                    </div>

                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                         @if(Session::has('message'))
                                                <div class="alert alert-primary">
                                                    <span class="text-bold-700 font-medium-3 mr-1"><i class="feather icon-check mr-1"></i>{{ Session::get('message') }}</span>
                                                </div>
                                        @elseif(Session::has('message_error'))
                                                <div class="alert alert-danger">
                                                    <span class="text-bold-700 font-medium-3 mr-1"><i class="feather icon-check mr-1"></i>{{ Session::get('message_error') }}</span>
                                                </div>
                                        @endif
                                        <ul class="nav nav-pills justify-content-center">
                                            @foreach ($data3 as $item)
                                            <li class="nav-item">
                                            <a class="nav-link" id="home{{$item->year}}-tab-fill" data-toggle="pill" href="#home{{$item->year}}-fill" aria-expanded="true">ปี {{ $item->year + 543 }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                        <div class="tab-content">
                                            @if(count($data3))
                                            @foreach ($data3 as $item)
                                                <div role="tabpanel" class="tab-pane" id="home{{$item->year}}-fill" aria-labelledby="home{{$item->year}}-tab-fill" aria-expanded="true">
                                                    <hr>
                                                    <div class="col-12">
                                                        <h2 class="text-center mb-2"><i class="feather icon-clipboard"></i> ข้อมูลตรวจสุขภาพปี {{ $item->year + 543 }}</h2>
                                                    </div>
                                                    <div class="row match-height">
                                                        @if($data->gender == '2')
                                                        <div class="col-md-6 col-12">
                                                        @else
                                                        <div class="col-md-9 col-12">
                                                        @endif
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
                                                                                            <div class="col-md-3 col-12 mb-1">
                                                                                                <label for="projectinput3">ความดันโลหิต (วัดครั้งที่ 1)</label>
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
                                                                                            <div class="col-md-3 col-12 mb-1">
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
                                                                                            </div>
                                                                                            <div class="col-md-3 col-12 mb-1">
                                                                                                <label for="projectinput3">ชีพจร ครั้งที่ 1</label>
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
                                                                                            <div class="col-md-3 col-12 mb-1">
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
                                                                                            </div>
                                                                                        </div>

                                                                                    <p>*กรณีที่วัดความดันโลหิตครั้งแรกผิดปกติ ให้วัดครั้งที่ 2 หากค่าที่ได้ 2 ครั้งแตกต่างกันไม่เกิน 10 มม.ปรอท ให้ใช้ค่าที่ใกล้เคียงกับค่าปกติมากที่สุด แต่หากแตกต่างกันเกิน 10 มม.ปรอท ให้ใช้ค่าเฉลี่ยจากการวัดทั้ง 2 ครั้ง</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="col-md-3 col-12">

                                                            <div class="table-responsive border rounded px-1 mt-2">
                                                                <h6 class="border-bottom py-1 mx-1 mb-0 font-medium-2"><i class="feather icon-lock mr-50 "></i>X-Ray</h6>

                                                                <div class="row">
                                                                    <div class="form-group col-md-6 mb-2">
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
                                                        </div>
                                                        @if($data->gender == '2')
                                                        <div class="col-md-3 col-12">
                                                            <div class="table-responsive border rounded px-1 mt-2">
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
                                                        </div>
                                                        @endif
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

                                                    <div class="modal-footer">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                {{-- <a class="btn btn-primary mr-1 waves-effect waves-light" href="{{ route('army.edit_year', $item->id)}}"><i class="feather icon-edit"></i> แก้ไขข้อมูลตรวจสุขภาพ</a> --}}
                                                                    <button type="button" class="btn btn-primary mr-1 waves-effect waves-light" data-toggle="modal" data-target="#EditYear{{$item->year}}">
                                                                        <i class="feather icon-edit"></i> แก้ไขข้อมูลตรวจสุขภาพ
                                                                    </button>

                                                                    <button type="button" class="btn btn-danger mr-1 waves-effect waves-light" data-toggle="modal" data-target="#DeleteYear{{$item->id}}">
                                                                        <i class="feather icon-trash-2"></i> ลบข้อมูลตรวจสุขภาพ
                                                                    </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        @include('pages.check_up.v_2.admin.unit_army.include.edit_year')
                                                        <div class="modal fade" id="DeleteYear{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="DeleteYear" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLongTitle">ลบข้อมูล</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body text-center">
                                                                                    คุณต้องการลบข้อมูลตรวจสุขภาพประจำปี <b>{{ $item->year + 543 }}</b> <br><b> "{{ $data->title_name->name }}{{ $data->first_name }} {{ $data->last_name }}" </b>ใช่หรือไม่
                                                                    </div>
                                                                    <div class="modal-footer text-center">
                                                                        <form id="DeleteYear{{$item->id}}" name="DeleteYear" action="{{ route('check_up_detail.destroy', $item->id) }}" method="POST">
                                                                                        @csrf
                                                                                        @method('DELETE')
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                                                            <button type="submit" class="btn btn-danger">ลบข้อมูล</button>
                                                                        </form>
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

                            @include('pages.check_up.v_2.admin.unit_army.include.create.create')
                            @include('pages.check_up.v_2.admin.unit_army.include.import_his')
                        </div>
                    </div>
                </section>
                <!-- Row grouping -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

@endsection
@section('scripts')
<script>
    function 	CBC1create(){
      document.getElementById('div1create').style.display = 'block';
    }
    function 	CBC2create(){
      document.getElementById('div1create').style.display = 'none';
    }
    function 	urine1create(){
      document.getElementById('div2create').style.display = 'block';
    }
    function 	urine2create(){
      document.getElementById('div2create').style.display = 'none';
    }
     function 	j10_2_1create(){
      document.getElementById('div11create').style.display = 'block';
    }
    function 	j10_2_2create(){
      document.getElementById('div11create').style.display = 'none';
    }

    function 	CBC1(){
      document.getElementById('div1').style.display = 'block';
    }
    function 	CBC2(){
      document.getElementById('div1').style.display = 'none';
    }
    function 	urine1(){
      document.getElementById('div2').style.display = 'block';
    }
    function 	urine2(){
      document.getElementById('div2').style.display = 'none';
    }
     function 	j10_2_1(){
      document.getElementById('div11').style.display = 'block';
    }
    function 	j10_2_2(){
      document.getElementById('div11').style.display = 'none';
    }


    function 	CBCEdit(){
      document.getElementById('div1_1').style.display = 'block';
    }
    function 	CBCEdit2(){
      document.getElementById('div1_1').style.display = 'none';
    }
    function 	urineedit1(){
      document.getElementById('div2_2').style.display = 'block';
    }
    function 	urineedit2(){
      document.getElementById('div2_2').style.display = 'none';
    }
     function 	j10_2_1edit(){
      document.getElementById('div1_11').style.display = 'block';
    }
    function 	j10_2_2edit(){
      document.getElementById('div1_11').style.display = 'none';
    }
</script>

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets') }}/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <!-- END: Page Vendor JS-->
     <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets') }}/js/scripts/forms/select/form-select2.js"></script>
    <!-- END: Page JS-->
@endsection

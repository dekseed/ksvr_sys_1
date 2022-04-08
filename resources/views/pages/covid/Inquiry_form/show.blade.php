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
                                                            @if($data->clinic_id)
                                                            <a class="btn btn-warning mr-1 waves-effect waves-light mt-1" href="{{ route('clinic_covid.show', $data->id) }}"><i class="feather icon-edit"></i> ข้อมูลการแพทย์</a>
                                                            @else
                                                            <a class="btn btn-danger mr-1 waves-effect waves-light mt-1" href="{{ route('clinic_covid.create', $data->id) }}"><i class="feather icon-edit"></i> ข้อมูลการแพทย์</a>
                                                            @endif
                                                            {{-- <a class="btn btn-primary mr-1 waves-effect waves-light mt-1" href="{{ route('inquiry-form-Covid.edit', $data->id) }}"><i class="feather icon-edit"></i> แก้ไขข้อมูลผู้ป่วย</a> --}}
                                                            {{-- <form method="POST" id="delete-form-{{$data->id}}" action="{{route('inquiry-form-Covid.destroy', [$data->id])}}">
                                                                {{csrf_field()}}
                                                                <input type="button" class="btn btn-danger mr-1 mt-1 waves-effect waves-light feather icon-trash-2" name="delete" value="ลบข้อมูล"></button>
                                                            </form> --}}
                                                            <a class="btn btn-danger waves-effect waves-light mr-1 mt-1" data-href="{{ route('InquiryFormCovid.destroy', $data->id)}}"
                                                                data-toggle="modal" data-target="#default<?= $data->id ?>"><i class="feather icon-trash"></i> ลบรายการ</a>
                                                            <a class="btn btn-info waves-effect waves-light mr-1 mt-1" href="{{ route('InquiryFormCovid.index')}}"><i class="feather icon-arrow-left"></i> กลับหน้าแรก</a>

                                                            <a class="btn btn-primary waves-effect waves-light mt-1" href="{{ route('inquiry-form-Covid.wordExport_covid', $data->id) }}"><i class="feather icon-printer"></i> Print</a>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="default<?= $data->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <form id="delete" name="delete" action="{{ route('InquiryFormCovid.destroy', $data->id)}}" method="POST">
                                                                {{ csrf_field() }}
                                                                {{ method_field('DELETE') }}
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel1">ลบข้อมูล</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5 class="text-center">คุณต้องการลบรายการ {{ $data->user->first_name }} {{  $data->user->last_name }}  ใช่หรือไม่?</h5>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey mr-1 mb-1 btn-outline-secondary ok_button" data-dismiss="modal"><i class="feather icon-arrow-left"></i> ยกเลิก</button>
                                                                    <button type="submit" class="btn danger mr-1 mb-1 waves-effect waves-light" ><i class="feather icon-trash"></i> ลบข้อมูล</button>
                                                                </div>
                                                            </form>
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
                                                                                                                    <input type="number" class="form-control input1" value="{{$data->user->number_id}}"  name="number_id" disabled placeholder="รหัสบัตรประชาชน" >
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
                                                                                                                <select class="form-control select2-l-1" disabled name="title_name_id" id="basicSelect">
                                                                                                                    <option value=""> --- กรุณาเลือก ---</option>

                                                                                                                    @foreach ($name_title as $roles)
                                                                                                                    <option {{ $data->user->title_name_id == $roles->id ? 'selected' : ''}} value="{{ $roles->id }}">{{ $roles->name }}
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
                                                                                                                <input type="text" id="brand" class="form-control input1" placeholder="ชื่อ" value="{{$data->user->first_name}}" disabled name="first_name">
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
                                                                                                                <input type="text" id="model" class="form-control input1" placeholder="นามสกุล" value="{{$data->user->last_name}}" disabled name="last_name">
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
                                                                                                                <select class="form-control" id="basicSelect" disabled name="sex" onchange="showDiv(this)">
                                                                                                                    <option>เพศ</option>
                                                                                                                    @if($data->user->sex == '0')
                                                                                                                    <option selected value="0">ชาย</option>
                                                                                                                    @else
                                                                                                                    <option selected value="1">หญิง</option>
                                                                                                                    @endif
                                                                                                                </select>
                                                                                                                @if($data->user->sex > '0')

                                                                                                                <div class="container">
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-sm-12">
                                                                                                                            <label style="color:rgb(53, 141, 141);font-size:14px">กรณีเพศหญิง </label>

                                                                                                                            @if(!is_null($data->user->sexes_inquir->womb))

                                                                                                                                <div class="vs-radio-con">
                                                                                                                                    <input type="radio" checked="Checked" disabled name="womb">
                                                                                                                                    <span class="vs-radio">
                                                                                                                                        <span class="vs-radio--border"></span>
                                                                                                                                        <span class="vs-radio--circle"></span>
                                                                                                                                    </span>
                                                                                                                                    <span class="mr-2">มีครรภ์</span>
                                                                                                                                </div>

                                                                                                                                <div class="vs-radio-con">
                                                                                                                                    <input type="radio" disabled value="-" name="womb">
                                                                                                                                    <span class="vs-radio">
                                                                                                                                        <span class="vs-radio--border"></span>
                                                                                                                                        <span class="vs-radio--circle"></span>
                                                                                                                                    </span>
                                                                                                                                    <span class="mr-2">ไม่มีครรภ์</span>
                                                                                                                                </div>

                                                                                                                                <fieldset>
                                                                                                                                    <div class="mt-1 col-sm-12">
                                                                                                                                        <div class="form-group row">
                                                                                                                                            <div class="col-md-4">
                                                                                                                                                <span>ครรภ์ที่</span>
                                                                                                                                            </div>
                                                                                                                                            <div class="col-md-8">
                                                                                                                                                <div class="position-relative has-icon-left">
                                                                                                                                                    <input type="text" class="form-control input1" placeholder="ครรภ์ที่" disabled value="{{$data->user->sexes_inquir->womb}}"  name="womb">
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
                                                                                                                                                    <input type="text" class="form-control input1" placeholder="อายุครรภ์ (เดือน)" disabled value="{{$data->user->sexes_inquir->womb_age}}"  name="womb_age">
                                                                                                                                                    <div class="form-control-position">
                                                                                                                                                        <i class="fa fa-user-circle-o"></i>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>

                                                                                                                            </fieldset>

                                                                                                                            @else

                                                                                                                                <div class="vs-radio-con">
                                                                                                                                    <input type="radio" disabled name="womb">
                                                                                                                                    <span class="vs-radio">
                                                                                                                                        <span class="vs-radio--border"></span>
                                                                                                                                        <span class="vs-radio--circle"></span>
                                                                                                                                    </span>
                                                                                                                                    <span class="mr-2">มีครรภ์</span>
                                                                                                                                </div>

                                                                                                                                <div class="vs-radio-con">
                                                                                                                                    <input type="radio" disabled checked="Checked" name="womb">
                                                                                                                                    <span class="vs-radio">
                                                                                                                                        <span class="vs-radio--border"></span>
                                                                                                                                        <span class="vs-radio--circle"></span>
                                                                                                                                    </span>
                                                                                                                                    <span class="mr-2">ไม่มีครรภ์</span>
                                                                                                                                </div>




                                                                                                                            @endif
                                                                                                                        </div>
                                                                                                                    </div>
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
                                                                                                                <input type="number" id="expenditure" class="form-control" placeholder="อายุ" value="{{$data->user->age}}" disabled name="age">
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

                                                                                                                <input type="text" id="year" class="form-control" value="{{$data->user->nation}}" disabled name="nation" placeholder="สัญชาติ">
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
                                                                                                                <input type="text" id="text-icon" class="form-control" value="{{$data->user->disease}}" disabled name="disease" placeholder="โรคประจำตัว">
                                                                                                                <div class="form-control-position">
                                                                                                                    <i class="fa fa-flag-o"></i>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                <div class="col-12">
                                                                                                    <div class="form-group row">
                                                                                                        <div class="col-md-4">
                                                                                                            <div class="form-group">
                                                                                                                <span for="password-icon"><em>การสูบบุหรี่ </em></span>
                                                                                                                <div class="col-md-12">
                                                                                                                    <fieldset>
                                                                                                                        <div class="vs-radio-con">
                                                                                                                            <input type="radio" disabled name="smoking" value="0" {{ $data->user->smoking == '0' ? '' : 'Checked' }} >
                                                                                                                            <span class="vs-radio">
                                                                                                                                <span class="vs-radio--border"></span>
                                                                                                                                <span class="vs-radio--circle"></span>
                                                                                                                            </span>
                                                                                                                            <span class="mr-2">ไม่เคยสูบ</span>
                                                                                                                        </div>

                                                                                                                        <div class="vs-radio-con">
                                                                                                                            <input type="radio" disabled name="smoking" value="1" {{ $data->user->smoking == '1' ? '' : 'Checked' }} >
                                                                                                                            <span class="vs-radio">
                                                                                                                                <span class="vs-radio--border"></span>
                                                                                                                                <span class="vs-radio--circle"></span>
                                                                                                                            </span>
                                                                                                                            <span class="mr-2">ยังคงสูบ</span>
                                                                                                                        </div>

                                                                                                                        <div class="vs-radio-con">
                                                                                                                            <input type="radio" disabled name="smoking" value="2" {{ $data->user->smoking == '2' ? '' : 'Checked' }} >
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
                                                                                                    <select class="form-control" id="basicSelect" disabled name="vac_id" placeholder="เคยได้รับวัคซีนหรือไม่" onchange="showDiv(this)">
                                                                                                        @if($data_vac->number > '0')
                                                                                                        <option selected value="0">เคยได้รับ</option>
                                                                                                        @else
                                                                                                        <option selected value="1">ไม่เคยได้รับ</option>
                                                                                                        @endif
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <fieldset>

                                                                                            @if($data_vac->number > '0')

                                                                                                <div class="form-group row">
                                                                                                    <div class="col-md-4">
                                                                                                        <span>จำนวนวัคซีน <br><em style="color:red;font-size:12px">(จำนวนวัคซีนทีได้รับ)</em></span>
                                                                                                    </div>
                                                                                                    <div class="col-md-8">
                                                                                                        <div class="position-relative has-icon-left">
                                                                                                            <input type="text" id="text-icon" class="form-control" value="{{$data_vac->number}}" disabled name="num_vac" placeholder="จำนวนวัคซีน">
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
                                                                                                            <select type="text" id="basicSelect" class="form-control select2-l-1" disabled name="name_vaccine_id_1" placeholder="ชื่อวัคซีน">
                                                                                                                @foreach ($name_vaccine as $roles)
                                                                                                                <option {{ $data_vac->name_vaccine_id_1 == $roles->id ? 'selected' : '' }} value="{{ $roles->id }}">{{ $roles->name}}</option>
                                                                                                                @endforeach
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
                                                                                                            <input type="text" id="calen-icon" class="form-control" value="{{$data_vac->date_1}}" disabled name="date_vac_1" placeholder="วันที่ได้รับวัคซีน">
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
                                                                                                            <input type="text" id="info-icon" class="form-control" value="{{$data_vac->location_1}}" name="location_vac_1" disabled placeholder="สถานที่รับวัคซีน">
                                                                                                            <div class="form-control-position">
                                                                                                                <i class="fa fa-tablet"></i>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                @if($data_vac->name_vaccine_id_2 > '0')
                                                                                                    <hr style="height:1px;border-width:0;color:#adb5bd;background-color:#adb5bd">

                                                                                                    <div class="form-group row">
                                                                                                        <div class="col-md-4">
                                                                                                            <span>ชื่อวัคซีน เข็มที่ 2</span>
                                                                                                        </div>
                                                                                                        <div class="col-md-8">
                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                <select type="text" id="basicSelect" class="form-control select2-l-1" disabled name="name_vaccine_id_1" placeholder="ชื่อวัคซีน">
                                                                                                                    @foreach ($name_vaccine as $roles)
                                                                                                                    <option {{ $data_vac->name_vaccine_id_2 == $roles->id ? 'selected' : '' }} value="{{ $roles->id }}">{{ $roles->name}}</option>
                                                                                                                    @endforeach
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
                                                                                                                <input type="text" id="calen-icon" class="form-control" value="{{$data_vac->date_2}}" disabled name="date_vac_1" placeholder="วันที่ได้รับวัคซีน">
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
                                                                                                                <input type="text" id="info-icon" class="form-control" value="{{$data_vac->location_2}}" name="location_vac_1" disabled placeholder="สถานที่รับวัคซีน">
                                                                                                                <div class="form-control-position">
                                                                                                                    <i class="fa fa-tablet"></i>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                @endif

                                                                                                @if($data_vac->name_vaccine_id_3 > '0')
                                                                                                    <hr style="height:1px;border-width:0;color:#adb5bd;background-color:#adb5bd">

                                                                                                    <div class="form-group row">
                                                                                                        <div class="col-md-4">
                                                                                                            <span>ชื่อวัคซีน เข็มที่ 3</span>
                                                                                                        </div>
                                                                                                        <div class="col-md-8">
                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                <select type="text" id="basicSelect" class="form-control select2-l-1" disabled name="name_vaccine_id_1" placeholder="ชื่อวัคซีน">
                                                                                                                    @foreach ($name_vaccine as $roles)
                                                                                                                    <option {{ $data_vac->name_vaccine_id_3 == $roles->id ? 'selected' : '' }} value="{{ $roles->id }}">{{ $roles->name}}</option>
                                                                                                                    @endforeach
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
                                                                                                                <input type="text" id="calen-icon" class="form-control" value="{{$data_vac->date_3}}" disabled name="date_vac_1" placeholder="วันที่ได้รับวัคซีน">
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
                                                                                                                <input type="text" id="info-icon" class="form-control" value="{{$data_vac->location_3}}" name="location_vac_1" disabled placeholder="สถานที่รับวัคซีน">
                                                                                                                <div class="form-control-position">
                                                                                                                    <i class="fa fa-tablet"></i>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                @endif

                                                                                                @if($data_vac->name_vaccine_id_4 > '0')
                                                                                                    <hr style="height:1px;border-width:0;color:#adb5bd;background-color:#adb5bd">

                                                                                                    <div class="form-group row">
                                                                                                        <div class="col-md-4">
                                                                                                            <span>ชื่อวัคซีน เข็มที่ 4</span>
                                                                                                        </div>
                                                                                                        <div class="col-md-8">
                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                <select type="text" id="basicSelect" class="form-control select2-l-1" disabled name="name_vaccine_id_1" placeholder="ชื่อวัคซีน">
                                                                                                                    @foreach ($name_vaccine as $roles)
                                                                                                                    <option {{ $data_vac->name_vaccine_id_4 == $roles->id ? 'selected' : '' }} value="{{ $roles->id }}">{{ $roles->name}}</option>
                                                                                                                    @endforeach
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="form-group row">
                                                                                                        <div class="col-md-4">
                                                                                                            <span>วันที่ได้รับวัคซีนเข็ม 4</span>
                                                                                                        </div>
                                                                                                        <div class="col-md-8">
                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                <input type="text" id="calen-icon" class="form-control" value="{{$data_vac->date_4}}" disabled name="date_vac_1" placeholder="วันที่ได้รับวัคซีน">
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
                                                                                                                <input type="text" id="info-icon" class="form-control" value="{{$data_vac->location_4}}" name="location_vac_1" disabled placeholder="สถานที่รับวัคซีน">
                                                                                                                <div class="form-control-position">
                                                                                                                    <i class="fa fa-tablet"></i>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                @endif
                                                                                            @endif

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
                                                                                                                        <input type="text" id="text-icon" class="form-control" value="{{$data->user->occ}}" disabled name="occ" placeholder="อาชีพ">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group row">
                                                                                                                <div class="col-md-4">
                                                                                                                    <span>สถานที่ทำงาน/สถานศึกษา</span>
                                                                                                                </div>
                                                                                                                <div class="col-md-8">
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="text" id="text-icon" class="form-control" value="{{$data->user->location}}" disabled name="location" placeholder="ชื่อสถานที่ทำงาน/สถานศึกษา">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group row">
                                                                                                                <div class="col-md-4">
                                                                                                                    <span>เบอร์โทรศัพท์ที่ติดต่อได้</span>
                                                                                                                </div>
                                                                                                                <div class="col-md-8">
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="number" id="number-icon" class="form-control" value="0{{$data->user->tel}}" disabled name="tel" placeholder="เบอร์โทรศัพท์ที่ติดต่อได้">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group row">
                                                                                                                <div class="col-md-4">
                                                                                                                    <span>เบอร์โทรศัพท์ที่ใช้ลง<br>แอปพลิเคชัน "หมอชนะ"</span>
                                                                                                                </div>
                                                                                                                <div class="col-md-8">
                                                                                                                    <div class="position-relative has-icon-left">
                                                                                                                        <input type="number" class="form-control" value="0{{$data->user->telapp}}" disabled name="telapp" placeholder='เบอร์โทรศัพท์ที่ใช้ลงแอปพลิเคชัน "หมอชนะ"'>
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
                                                                                                                        <input Disabled type="text" class="form-control " id="home_id" name="home_id" value="{{$data->user->home_id}}">
                                                                                                                    </div>
                                                                                                                </div>

                                                                                                                <div class="col-md-4">
                                                                                                                    <div class="form-group">
                                                                                                                        <label for="alley">
                                                                                                                            ซอย
                                                                                                                        </label>
                                                                                                                        <input Disabled type="text" class="form-control " id="alley" name="alley" value="{{$data->user->alley}}">
                                                                                                                    </div>
                                                                                                                </div>

                                                                                                                <div class="col-md-4">
                                                                                                                    <div class="form-group">
                                                                                                                        <label for="street">
                                                                                                                            ถนน *
                                                                                                                        </label>
                                                                                                                        <input Disabled type="text" class="form-control " id="street" name="street" value="{{$data->user->street}}">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                            <div class="row">
                                                                                                                <div class="col-md-4">
                                                                                                                    <div class="form-group">
                                                                                                                        <label for="province">
                                                                                                                            จังหวัด *
                                                                                                                        </label>
                                                                                                                        <select Disabled id="province" name="province" class="select2 form-control" onchange="showAmphoes()">
                                                                                                                            <option value="{{$data->user->district_covid->province}}">{{$data->user->district_covid->province}}</option>

                                                                                                                        </select>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="col-md-4">
                                                                                                                    <div class="form-group">
                                                                                                                        <label for="district">
                                                                                                                            อำเภอ *
                                                                                                                        </label>
                                                                                                                        <select Disabled id="amphoe" class="select2 form-control" name="district" onchange="showDistricts()">
                                                                                                                            <option value="{{$data->user->district_covid->amphoe}}">{{$data->user->district_covid->amphoe}}</option>
                                                                                                                        </select>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="col-md-4">
                                                                                                                    <div class="form-group">
                                                                                                                        <label for="canton">
                                                                                                                            ตำบล *
                                                                                                                        </label>
                                                                                                                        <select Disabled id="district" name="canton" class="form-control select2 " onchange="showZipcode()">
                                                                                                                            <option value="{{$data->user->district_covid->district}}">{{$data->user->district_covid->district}}</option>
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
                                                                                                            <div class="position-relative has-icon-left">
                                                                                                                <input type="text" id="number-icon" class="form-control" value="{{$data->histos_cov->details}}" disabled name="details_cov" placeholder="รายละเอียดเหตุการณ์">
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
                                                                                                                        <div class="position-relative has-icon-center">
                                                                                                                            <input type="date" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false" aria-owns="P428173107_root" value="{{$data->user->details_table_covid19_inquiry->date_1}}" disabled name="date_1">
                                                                                                                            <div class="form-control-position">
                                                                                                                                <i class="fa fa-calendar-check-o"></i>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>

                                                                                                                    <td>
                                                                                                                        <div class="position-relative has-icon-left">
                                                                                                                            <input type="text" id="first-name-icon" class="form-control" value="{{$data->user->details_table_covid19_inquiry->location_1}}" disabled name="location_1" placeholder="กิจกรรม/สถานที่">
                                                                                                                            <div class="form-control-position">
                                                                                                                                <i class="fa fa-user-o"></i>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div class="position-relative has-icon-left">
                                                                                                                            <input type="text" id="first-name-icon" class="form-control" value="{{$data->user->details_table_covid19_inquiry->person_1}}" disabled name="person_1" placeholder="จำนวนผู้ร่วมกิจกรรม">
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
                                                                                                                            <input type="date" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false" aria-owns="P428173107_root" value="{{$data->user->details_table_covid19_inquiry->date_2}}" disabled name="date_2">
                                                                                                                            <div class="form-control-position">
                                                                                                                                <i class="fa fa-calendar-check-o"></i>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div class="position-relative has-icon-left">
                                                                                                                            <input type="text" id="first-name-icon" class="form-control" value="{{$data->user->details_table_covid19_inquiry->location_2}}" disabled name="location_2" placeholder="กิจกรรม/สถานที่">
                                                                                                                            <div class="form-control-position">
                                                                                                                                <i class="fa fa-user-o"></i>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div class="position-relative has-icon-left">
                                                                                                                            <input type="text" id="first-name-icon" class="form-control" value="{{$data->user->details_table_covid19_inquiry->person_2}}" disabled name="person_2" placeholder="จำนวนผู้ร่วมกิจกรรม">
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
                                                                                                                            <input type="date" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false" aria-owns="P428173107_root" value="{{$data->user->details_table_covid19_inquiry->date_3}}" disabled name="date_3">
                                                                                                                            <div class="form-control-position">
                                                                                                                                <i class="fa fa-calendar-check-o"></i>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div class="position-relative has-icon-left">
                                                                                                                            <input type="text" id="first-name-icon" class="form-control" value="{{$data->user->details_table_covid19_inquiry->location_3}}" disabled name="location_3" placeholder="กิจกรรม/สถานที่">
                                                                                                                            <div class="form-control-position">
                                                                                                                                <i class="fa fa-user-o"></i>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div class="position-relative has-icon-left">
                                                                                                                            <input type="text" id="first-name-icon" class="form-control" value="{{$data->user->details_table_covid19_inquiry->person_3}}" disabled name="person_3" placeholder="จำนวนผู้ร่วมกิจกรรม">
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
                                                                                                                            <input type="date" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false" aria-owns="P428173107_root" value="{{$data->user->details_table_covid19_inquiry->date_4}}" disabled name="date_4">
                                                                                                                            <div class="form-control-position">
                                                                                                                                <i class="fa fa-calendar-check-o"></i>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div class="position-relative has-icon-left">
                                                                                                                            <input type="text" id="first-name-icon" class="form-control" value="{{$data->user->details_table_covid19_inquiry->location_4}}" disabled name="location_4" placeholder="กิจกรรม/สถานที่">
                                                                                                                            <div class="form-control-position">
                                                                                                                                <i class="fa fa-user-o"></i>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div class="position-relative has-icon-left">
                                                                                                                            <input type="text" id="first-name-icon" class="form-control" value="{{$data->user->details_table_covid19_inquiry->person_4}}" disabled name="person_4" placeholder="จำนวนผู้ร่วมกิจกรรม">
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
                                                                                                                            <input type="date" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false" aria-owns="P428173107_root" value="{{$data->user->details_table_covid19_inquiry->date_5}}" disabled name="date_5">
                                                                                                                            <div class="form-control-position">
                                                                                                                                <i class="fa fa-calendar-check-o"></i>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div class="position-relative has-icon-left">
                                                                                                                            <input type="text" id="first-name-icon" class="form-control" value="{{$data->user->details_table_covid19_inquiry->location_5}}" disabled name="location_5" placeholder="กิจกรรม/สถานที่">
                                                                                                                            <div class="form-control-position">
                                                                                                                                <i class="fa fa-user-o"></i>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div class="position-relative has-icon-left">
                                                                                                                            <input type="text" id="first-name-icon" class="form-control" value="{{$data->user->details_table_covid19_inquiry->person_5}}" disabled name="person_5" placeholder="จำนวนผู้ร่วมกิจกรรม">
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
                                                                                                                            <input type="date" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false" aria-owns="P428173107_root" value="{{$data->user->details_table_covid19_inquiry->date_6}}" disabled name="date_6">
                                                                                                                            <div class="form-control-position">
                                                                                                                                <i class="fa fa-calendar-check-o"></i>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div class="position-relative has-icon-left">
                                                                                                                            <input type="text" id="first-name-icon" class="form-control" value="{{$data->user->details_table_covid19_inquiry->location_6}}" disabled name="location_6" placeholder="กิจกรรม/สถานที่">
                                                                                                                            <div class="form-control-position">
                                                                                                                                <i class="fa fa-user-o"></i>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div class="position-relative has-icon-left">
                                                                                                                            <input type="text" id="first-name-icon" class="form-control" value="{{$data->user->details_table_covid19_inquiry->person_6}}" disabled name="person_6" placeholder="จำนวนผู้ร่วมกิจกรรม">
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
                                                                                                                            <input type="date" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false" aria-owns="P428173107_root" value="{{$data->user->details_table_covid19_inquiry->date_7}}" disabled name="date_7">
                                                                                                                            <div class="form-control-position">
                                                                                                                                <i class="fa fa-calendar-check-o"></i>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div class="position-relative has-icon-left">
                                                                                                                            <input type="text" id="first-name-icon" class="form-control" value="{{$data->user->details_table_covid19_inquiry->location_7}}" disabled name="location_7" placeholder="กิจกรรม/สถานที่">
                                                                                                                            <div class="form-control-position">
                                                                                                                                <i class="fa fa-user-o"></i>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div class="position-relative has-icon-left">
                                                                                                                            <input type="text" id="first-name-icon" class="form-control" value="{{$data->user->details_table_covid19_inquiry->person_7}}" disabled name="person_7" placeholder="จำนวนผู้ร่วมกิจกรรม">
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
                                                                                                                            <input type="date" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false" aria-owns="P428173107_root" value="{{$data->user->details_table_covid19_inquiry->date_8}}" disabled name="date_8">
                                                                                                                            <div class="form-control-position">
                                                                                                                                <i class="fa fa-calendar-check-o"></i>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div class="position-relative has-icon-left">
                                                                                                                            <input type="text" id="first-name-icon" class="form-control" value="{{$data->user->details_table_covid19_inquiry->location_8}}" disabled name="location_8" placeholder="กิจกรรม/สถานที่">
                                                                                                                            <div class="form-control-position">
                                                                                                                                <i class="fa fa-user-o"></i>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div class="position-relative has-icon-left">
                                                                                                                            <input type="text" id="first-name-icon" class="form-control" value="{{$data->user->details_table_covid19_inquiry->person_8}}" disabled name="person_8" placeholder="จำนวนผู้ร่วมกิจกรรม">
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
                                                                                                                            <input type="date" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false" aria-owns="P428173107_root" value="{{$data->user->details_table_covid19_inquiry->date_9}}" disabled name="date_9">
                                                                                                                            <div class="form-control-position">
                                                                                                                                <i class="fa fa-calendar-check-o"></i>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div class="position-relative has-icon-left">
                                                                                                                            <input type="text" id="first-name-icon" class="form-control" value="{{$data->user->details_table_covid19_inquiry->location_9}}" disabled name="location_9" placeholder="กิจกรรม/สถานที่">
                                                                                                                            <div class="form-control-position">
                                                                                                                                <i class="fa fa-user-o"></i>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div class="position-relative has-icon-left">
                                                                                                                            <input type="text" id="first-name-icon" class="form-control" value="{{$data->user->details_table_covid19_inquiry->person_9}}" disabled name="person_9" placeholder="จำนวนผู้ร่วมกิจกรรม">
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
                                                                                                                            <input type="date" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false" aria-owns="P428173107_root" value="{{$data->user->details_table_covid19_inquiry->date_10}}" disabled name="date_10">
                                                                                                                            <div class="form-control-position">
                                                                                                                                <i class="fa fa-calendar-check-o"></i>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div class="position-relative has-icon-left">
                                                                                                                            <input type="text" id="first-name-icon" class="form-control" value="{{$data->user->details_table_covid19_inquiry->location_10}}" disabled name="location_10" placeholder="กิจกรรม/สถานที่">
                                                                                                                            <div class="form-control-position">
                                                                                                                                <i class="fa fa-user-o"></i>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div class="position-relative has-icon-left">
                                                                                                                            <input type="text" id="first-name-icon" class="form-control" value="{{$data->user->details_table_covid19_inquiry->person_10}}" disabled name="person_10" placeholder="จำนวนผู้ร่วมกิจกรรม">
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
                                                                                                                            <input type="date" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false" aria-owns="P428173107_root" value="{{$data->user->details_table_covid19_inquiry->date_11}}" disabled name="date_11">
                                                                                                                            <div class="form-control-position">
                                                                                                                                <i class="fa fa-calendar-check-o"></i>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div class="position-relative has-icon-left">
                                                                                                                            <input type="text" id="first-name-icon" class="form-control" value="{{$data->user->details_table_covid19_inquiry->location_11}}" disabled name="location_11" placeholder="กิจกรรม/สถานที่">
                                                                                                                            <div class="form-control-position">
                                                                                                                                <i class="fa fa-user-o"></i>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div class="position-relative has-icon-left">
                                                                                                                            <input type="text" id="first-name-icon" class="form-control" value="{{$data->user->details_table_covid19_inquiry->person_11}}" disabled name="person_11" placeholder="จำนวนผู้ร่วมกิจกรรม">
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
                                                                                                                            <input type="date" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false" aria-owns="P428173107_root" value="{{$data->user->details_table_covid19_inquiry->date_12}}" disabled name="date_12">
                                                                                                                            <div class="form-control-position">
                                                                                                                                <i class="fa fa-calendar-check-o"></i>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div class="position-relative has-icon-left">
                                                                                                                            <input type="text" id="first-name-icon" class="form-control" value="{{$data->user->details_table_covid19_inquiry->location_12}}" disabled name="location_12" placeholder="กิจกรรม/สถานที่">
                                                                                                                            <div class="form-control-position">
                                                                                                                                <i class="fa fa-user-o"></i>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div class="position-relative has-icon-left">
                                                                                                                            <input type="text" id="first-name-icon" class="form-control" value="{{$data->user->details_table_covid19_inquiry->person_12}}" disabled name="person_12" placeholder="จำนวนผู้ร่วมกิจกรรม">
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
                                                                                                                            <input type="date" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false" aria-owns="P428173107_root" value="{{$data->user->details_table_covid19_inquiry->date_13}}" disabled name="date_13">
                                                                                                                            <div class="form-control-position">
                                                                                                                                <i class="fa fa-calendar-check-o"></i>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div class="position-relative has-icon-left">
                                                                                                                            <input type="text" id="first-name-icon" class="form-control" value="{{$data->user->details_table_covid19_inquiry->location_13}}" disabled name="location_13" placeholder="กิจกรรม/สถานที่">
                                                                                                                            <div class="form-control-position">
                                                                                                                                <i class="fa fa-user-o"></i>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div class="position-relative has-icon-left">
                                                                                                                            <input type="text" id="first-name-icon" class="form-control" value="{{$data->user->details_table_covid19_inquiry->person_13}}" disabled name="person_13" placeholder="จำนวนผู้ร่วมกิจกรรม">
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
                                                                                                                            <input type="date" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false" aria-owns="P428173107_root" value="{{$data->user->details_table_covid19_inquiry->date_14}}" disabled name="date_14">
                                                                                                                            <div class="form-control-position">
                                                                                                                                <i class="fa fa-calendar-check-o"></i>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div class="position-relative has-icon-left">
                                                                                                                            <input type="text" id="first-name-icon" class="form-control" value="{{$data->user->details_table_covid19_inquiry->location_14}}" disabled name="location_14" placeholder="กิจกรรม/สถานที่">
                                                                                                                            <div class="form-control-position">
                                                                                                                                <i class="fa fa-user-o"></i>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div class="position-relative has-icon-left">
                                                                                                                            <input type="text" id="first-name-icon" class="form-control" value="{{$data->user->details_table_covid19_inquiry->person_14}}" disabled name="person_14" placeholder="จำนวนผู้ร่วมกิจกรรม">
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

                                                            {{-- <!-- Low Body -->
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
                                                                                                                <input type="text" class="form-control input1" placeholder="ชื่อ-นามสกุล" value="{{$data->search_id_inquiries->name}}" disabled name="name_search">
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
                                                                                                            <select class="form-control" value="{{$data->search_id_inquiries->sex}}" disabled name="sex_search">
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
                                                                                                            <input type="number" id="expenditure" class="form-control input1" placeholder="อายุ" value="{{$data->search_id_inquiries->age}}" disabled name="age_search">
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
                                                                                                            <input type="text" id="text-icon" class="form-control" value="{{$data->search_id_inquiries->add}}" disabled name="add_search" placeholder="ที่อยู่">
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
                                                                                                            <input type="number" id="model" class="form-control input1" placeholder="เบอร์โทรศัพท์ที่ติดต่อได้" value="{{$data->search_id_inquiries->tel}}" disabled name="tel_search">
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
                                                                                                            <input type="date" id="model" class="form-control input1" placeholder="วันที่สัมผัส" value="{{$data->search_id_inquiries->datetush}}" disabled name="datetush_search">
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
                                                                                                            <input type="text" id="model" class="form-control input1" placeholder="ลักษณะการสัมผัส" value="{{$data->search_id_inquiries->detailstuch}}" disabled name="detailstuch_search">
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
                                                                                                            <input type="text" id="model" class="form-control input1" placeholder="ป่วย/ไม่ป่วย" value="{{$data->search_id_inquiries->sick}}" disabled name="sick_search">
                                                                                                            <div class="form-control-position">
                                                                                                                <i class="fa fa-tablet"></i>
                                                                                                            </div>
                                                                                                            <div>
                                                                                                                <em class="mx-2">(กรณีป่วย ระบุวันเริ่มป่วย และอาการ)</em>
                                                                                                                <div class="position-relative has-icon-left col-4">
                                                                                                                    <input type="date" id="model" class="form-control input1" placeholder="ระบุวันเริ่มป่วย" value="{{$data->search_id_inquiries->sickdate}}" disabled name="sickdate_search">
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
                                                                                                            <input type="text" id="model" class="form-control input1" placeholder="การใส่อุปกรณ์ป้องกัน" value="{{$data->search_id_inquiries->equipment}}" disabled name="equipment_search">
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
                                                                                                            <input type="date" id="model" class="form-control input1" placeholder="วันที่ได้รับวัคซีนครบตามเกณฑ์" value="{{$data->search_id_inquiries->datevaccine}}" disabled name="datevaccine_search">
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
                                                            <div class="modal-footer">
                                                                <div class="row">
                                                                    <div class="col-12">


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End button -->
                                                        </div>
                                                    </section>
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

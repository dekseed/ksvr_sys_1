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
                                    <li class="breadcrumb-item"><a href="{{ route('check_up.index') }}">KSVR Check Up - V.2</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('check_up.index') }}">หน่วยงานทหาร</a>
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
                {{-- <div class="row">
                    <div class="col-12">
                        <p>Read full documnetation <a href="https://datatables.net/" target="_blank">here</a></p>
                    </div>
                </div> --}}
                <!-- Row grouping -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center mb-2"><i class="feather icon-clipboard"></i> ข้อมูลตรวจสุขภาพปี</h2>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center"><i class="feather icon-user"></i> ข้อมูลส่วนตัว</h4>
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
                                                        {{ $data->title_name->name }}
                                                        {{-- <select class="form-control" id="select2-array"
                                                        name="title_name" disabled>
                                                        <option value="">คำนำหน้า</option>
                                                            @foreach ($titlename as $roles)
                                                            <option {{ $data->title_name == $roles->name ? 'selected' : '' }}
                                                                    value="{{$roles->id}}">{{$roles->name}}</option>
                                                            @endforeach
                                                        </select> --}}
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
                                                        <a class="btn btn-primary mr-1 waves-effect waves-light mt-1" href="{{ route('army.edit', $data->id)}}"><i class="feather icon-edit"></i> แก้ไขข้อมูลส่วนตัว</a>
                                                         <button type="button" class="btn btn-danger mr-1 mt-1 waves-effect waves-light" data-toggle="modal" data-target="#default">
                                                                <i class="feather icon-trash-2"></i> ลบข้อมูล
                                                            </button>

                                                        <a class="btn btn-info waves-effect waves-light mt-1" href="{{ route('check_up.army')}}"><i class="feather icon-monitor"></i> กลับหน้าแรก</a>
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
                                                                    คุณต้องการลบข้อมูล<b> "{{ $data->title_name }}{{ $data->first_name }} {{ $data->last_name }}" </b>ใช่หรือไม่
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form action="{{ route('army.destroy', $data->id) }}" method="POST">
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
                                    <a href="{{ route('check_up_army_2.create', $data->id) }}" class="mt-1 btn btn-success" data-toggle="modal" data-target="#default1"><i class="feather icon-user-plus"></i> ข้อมูลตรวจสุขภาพ</a>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                         @if(Session::has('message'))
                                                <div class="alert alert-primary">
                                                    <span class="text-bold-700 font-medium-3 mr-1"><i class="feather icon-check mr-1"></i>{{ Session::get('message') }}</span>
                                                </div>

                                        @endif
                                        <ul class="nav nav-pills justify-content-center">
                                            @foreach ($data2 as $item)
                                            <li class="nav-item">
                                            <a class="nav-link" id="home{{$item->year}}-tab-fill" data-toggle="pill" href="#home{{$item->year}}-fill" aria-expanded="true">ปี {{ $item->year }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                        <div class="tab-content">
                                            @if(count($data2))
                                            @foreach ($data2 as $item)
                                                <div role="tabpanel" class="tab-pane" id="home{{$item->year}}-fill" aria-labelledby="home{{$item->year}}-tab-fill" aria-expanded="true">
                                                    <hr>
                                                    <div class="col-12">
                                                        <h2 class="text-center mb-2"><i class="feather icon-clipboard"></i> ข้อมูลตรวจสุขภาพปี {{ $item->year }}</h2>
                                                    </div>
                                                    <div class="row match-height">
                                                        <div class="col-md-6 col-12">
                                                            <div class="card">

                                                                <div class="card-content">
                                                                    <div class="card-body">
                                                                            <div class="form-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-6 col-12 mb-1">
                                                                                        <label for="projectinput3">น้ำหนัก</label>
                                                                                        <fieldset>
                                                                                            <div class="input-group">
                                                                                                <div class="input-group-prepend">
                                                                                                    <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                                                </div>
                                                                                                <input type="text" class="form-control" placeholder="น้ำหนัก" aria-label="น้ำหนัก" value="{{ $item->weight }}"
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
                                                                                                <input type="text" class="form-control" placeholder="ส่วนสูง" aria-label="ส่วนสูง" value="{{ $item->height }}"
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
                                                                                                <input type="text" class="form-control" placeholder="เส้นรอบเอว" aria-label="เส้นรอบเอว" value="{{ $item->waist }}"
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
                                                                                                <input type="text" class="form-control" placeholder="BMI" aria-label="BMI" value="{{ $item->bmi }}"
                                                                                                            name="bmi" id='bmi' disabled>
                                                                                            </div>
                                                                                        </fieldset>
                                                                                    </div>

                                                                                </div>

                                                                                <hr>
                                                                                <div class="row">
                                                                                    <div class="col-md-3 col-12 mb-1">
                                                                                        <label for="projectinput3">ความดันโลหิต (วัดครั้งที่ 1)</label>
                                                                                        <fieldset>
                                                                                            <div class="input-group">
                                                                                                <div class="input-group-prepend">
                                                                                                    <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                                                </div>
                                                                                                <input type="number" class="form-control" placeholder="ความดันโลหิต" aria-label="ความดันโลหิต" value="{{ $item->pressure_1 }}"
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
                                                                                                <input type="number" class="form-control" placeholder="ความดันโลหิต" aria-label="ความดันโลหิต" value="{{ $item->pressure_2 }}"
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
                                                                                                <input type="number" class="form-control" placeholder="ชีพจร" aria-label="ชีพจร" value="{{ $item->pulse_1 }}"
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
                                                                                                <input type="number" class="form-control" placeholder="ชีพจร" aria-label="ชีพจร" value="{{ $item->pulse_2 }}"
                                                                                                            name="pulse_2" id='pulse_2' disabled>
                                                                                                <div class="input-group-append">
                                                                                                    <span class="input-group-text">ครั้ง/นาที</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </fieldset>
                                                                                    </div>
                                                                                </div>
                                                                                    <p>*กรณีที่วัดความดันโลหิตครั้งแรกผิดปกติ ให้วัดครั้งที่ 2 หากค่าที่ได้ 2 ครั้งแตกต่างกันไม่เกิน 10 มม.ปรอท ให้ใช้ค่าที่ใกล้เคียงกับค่าปกติมากที่สุด แต่หากแตกต่างกันเกิน 10 มม.ปรอท ให้ใช้ค่าเฉลี่ยจากการวัดทั้ง 2 ครั้ง</p>
                                                                                <hr>
                                                                                <div class="row">
                                                                                    <div class="form-group col-md-6 mb-2">
                                                                                        <label for="projectinput3"><strong>X-Ray</strong></label>
                                                                                        <div class="col-md-9">
                                                                                                <fieldset class="ml-1">
                                                                                                <input type="radio" name="x_ray" value="0"  disabled
                                                                                                @if($item->x_ray == "0") checked="checked" @endif >
                                                                                                    <label for="input-radio-11">ไม่ได้ตรวจ</label>
                                                                                                </fieldset>
                                                                                                <fieldset class="ml-1">
                                                                                                <input type="radio" name="x_ray" value="1"  disabled
                                                                                                @if($item->x_ray == "1") checked="checked" @endif >
                                                                                                <label for="input-radio-12">ปกติ</label>
                                                                                                </fieldset>
                                                                                                <fieldset class="ml-1">
                                                                                                <input type="radio" name="x_ray" value="2" disabled
                                                                                                @if($item->x_ray == "2") checked="checked" @endif >
                                                                                                <label for="input-radio-12">ผิดปกติ</label>
                                                                                                </fieldset>

                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="form-group col-md-6 mb-2">
                                                                                        <label for="projectinput3"><strong>Urine Examination</strong></label>
                                                                                        <div class="col-md-9">
                                                                                                <fieldset class="ml-1">
                                                                                                <input type="radio" name="urine" value="0" onclick="urine2();" disabled
                                                                                                @if($item->urine == "0") checked="checked" @endif >
                                                                                                    <label for="input-radio-11">ไม่ได้ตรวจ</label>
                                                                                                </fieldset>
                                                                                                <fieldset class="ml-1">
                                                                                                <input type="radio" name="urine" value="1" onclick="urine2();" disabled
                                                                                                @if($item->urine == "1") checked="checked" @endif >
                                                                                                <label for="input-radio-12">ปกติ</label>
                                                                                                </fieldset>
                                                                                                <fieldset class="ml-1">
                                                                                                <input type="radio" name="urine" value="2" onclick="urine1();" disabled
                                                                                                @if($item->urine == "2") checked="checked" @endif >
                                                                                                <label for="input-radio-12">ผิดปกติ</label>
                                                                                                @if($item->urine == "2")
                                                                                                <div id="div2" style="margin-bottom: .5rem;">
                                                                                                        <div class="form-group col-12 mb-2">
                                                                                                            <label for="projectinput3"><strong>Proteinurea > +1</strong></label>
                                                                                                            <div class="input-group">
                                                                                                            <fieldset class="ml-1">
                                                                                                                <input type="radio" name="urine_d1" value="0" disabled
                                                                                                                @if($item->urine_d1 == "0") checked="checked" @endif >
                                                                                                                <label for="input-radio-11">ไม่มี</label>
                                                                                                            </fieldset>
                                                                                                            <fieldset class="ml-1">
                                                                                                                <input type="radio" name="urine_d1" value="1" disabled
                                                                                                                @if($item->urine_d1 == "1") checked="checked" @endif >
                                                                                                                <label for="input-radio-12">มี</label>
                                                                                                            </fieldset>
                                                                                                            </div>
                                                                                                            <label for="projectinput3"><strong>Hematuria > +1</strong></label>
                                                                                                            <div class="input-group">
                                                                                                                <fieldset class="ml-1">
                                                                                                                <input type="radio" name="urine_d2" value="0" disabled
                                                                                                                @if($item->urine_d2 == "0") checked="checked" @endif >
                                                                                                                    <label for="input-radio-11">ไม่มี</label>
                                                                                                                </fieldset>
                                                                                                                <fieldset class="ml-1">
                                                                                                                <input type="radio" name="urine_d2" value="1" disabled
                                                                                                                @if($item->urine_d2  == "1") checked="checked" @endif >
                                                                                                                <label for="input-radio-12">มี</label>
                                                                                                                </fieldset>

                                                                                                            </div>
                                                                                                            <label for="projectinput3">ผิดปกติอื่นๆ</label>
                                                                                                                <fieldset>
                                                                                                                    <div class="input-group">
                                                                                                                        <div class="input-group-prepend">
                                                                                                                            <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                                                                        </div>
                                                                                                                        <input type="text" class="form-control" aria-label="" placeholder=""
                                                                                                                        disabled    name="urine_d" id='urine_d' value="{{ $item->urine_d }}" >

                                                                                                                    </div>
                                                                                                                </fieldset>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                    @endif
                                                                                                </fieldset>

                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="form-group col-md-6 mb-2">
                                                                                        <label for="projectinput3"><strong>CBC</strong></label>
                                                                                        <div class="col-md-9">
                                                                                            <fieldset class="ml-1">
                                                                                                <input type="radio" name="cbc" value="0" onclick="CBC2();" disabled
                                                                                                @if($item->cbc == "0") checked="checked" @endif >
                                                                                                <label for="input-radio-11">ไม่ได้ตรวจ</label>
                                                                                            </fieldset>
                                                                                            <fieldset class="ml-1">
                                                                                                <input type="radio" name="cbc" value="1" onclick="CBC2();" disabled
                                                                                                @if($item->cbc == "1") checked="checked" @endif >
                                                                                                <label for="input-radio-12">ปกติ</label>
                                                                                            </fieldset>
                                                                                            <fieldset class="ml-1">
                                                                                                <input type="radio" name="cbc" value="2" onclick="CBC2();" disabled
                                                                                                @if($item->cbc == "2") checked="checked" @endif >
                                                                                                <label for="input-radio-12">ผิดปกติ Hct < 40% และ Mcv < 78%</label>
                                                                                            </fieldset>
                                                                                            <fieldset class="ml-1">
                                                                                                <input type="radio" name="cbc" value="3" onclick="CBC1();" disabled
                                                                                                @if($item->cbc == "3") checked="checked" @endif >
                                                                                                <label for="input-radio-12">ผิดปกติ อื่นๆ</label>
                                                                                                @if($item->cbc == "3")
                                                                                                    <div id="div1" style="margin-bottom: .5rem;">
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-12">
                                                                                                                <label for="projectinput3">(ระบุ)</label>
                                                                                                                    <fieldset>
                                                                                                                        <div class="input-group">
                                                                                                                            <div class="input-group-prepend">
                                                                                                                                <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                                                                            </div>
                                                                                                                            <input type="text" class="form-control" aria-label="" placeholder=""
                                                                                                                            disabled    name="cbc_d" id='cbc_d' value="{{ $item->cbc_d  }}" >

                                                                                                                        </div>
                                                                                                                    </fieldset>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                @endif
                                                                                            </fieldset>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group col-md-6 mb-2">
                                                                                        <label for="projectinput3"><strong>pap smear</strong></label>
                                                                                        <div class="col-md-9">
                                                                                            <fieldset class="ml-1">
                                                                                                <input type="radio" name="pap" value="0"  onclick="j10_2_2();" disabled
                                                                                                @if($item->pap  == "0") checked="checked" @endif >
                                                                                                <label for="input-radio-11">ไม่ได้ตรวจ</label>
                                                                                            </fieldset>
                                                                                            <fieldset class="ml-1">
                                                                                                <input type="radio" name="pap" value="1"  onclick="j10_2_2();" disabled
                                                                                                @if($item->pap == "1") checked="checked" @endif >
                                                                                                <label for="input-radio-12">ปกติ</label>
                                                                                            </fieldset>
                                                                                            <fieldset class="ml-1">
                                                                                                <input type="radio" name="pap" value="2" onclick="j10_2_1();" disabled
                                                                                                @if($item->pap  == "2") checked="checked" @endif >
                                                                                                <label for="input-radio-12">ผิดปกติ</label>
                                                                                                @if($item->pap  == "2")
                                                                                                <div id="div11" style="margin-bottom: .5rem;">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12">
                                                                                                            <label for="projectinput3">(ระบุ)</label>
                                                                                                            <fieldset>
                                                                                                                <div class="input-group">
                                                                                                                    <div class="input-group-prepend">
                                                                                                                        <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                                                                    </div>
                                                                                                                    <input type="text" class="form-control" aria-label="" placeholder=""
                                                                                                                    disabled   name="pap_d" id='pap_d' value="{{ $item->pap_d  }}" >


                                                                                                                </div>
                                                                                                            </fieldset>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                @endif
                                                                                        </div>
                                                                                    </div>

                                                                                </div>

                                                                                <hr>
                                                                                <div class="row">
                                                                                    <div class="col-md-6 col-12 mb-1">
                                                                                        <p><strong>การสูบบุหรี่</strong></p>
                                                                                        <ul class="list-unstyled mb-0">
                                                                                            <li class="d-inline-block mr-2">
                                                                                                <fieldset>
                                                                                                    <div class="vs-radio-con">
                                                                                                        <input type="radio" name="m13_1" value="0"
                                                                                                        @if($data->m13_1 ==  "0") checked="checked" @endif disabled="disabled">
                                                                                                        <span class="vs-radio">
                                                                                                            <span class="vs-radio--border"></span>
                                                                                                            <span class="vs-radio--circle"></span>
                                                                                                        </span>
                                                                                                        <span class="">ไม่เคยสูบบุหรี่</span>
                                                                                                    </div>
                                                                                                </fieldset>
                                                                                            </li>
                                                                                            <li class="d-inline-block mr-2">
                                                                                                <fieldset>
                                                                                                    <div class="vs-radio-con">
                                                                                                        <input type="radio" name="m13_1" value="1"
                                                                                                        @if($data->m13_1 ==  "1") checked="checked" @endif disabled="disabled">
                                                                                                        <span class="vs-radio">
                                                                                                            <span class="vs-radio--border"></span>
                                                                                                            <span class="vs-radio--circle"></span>
                                                                                                        </span>
                                                                                                        <span class="">เคยสูบ แต่เลิกแล้ว</span>
                                                                                                    </div>
                                                                                                </fieldset>
                                                                                            </li>
                                                                                            <li class="d-inline-block mr-2">
                                                                                                <fieldset>
                                                                                                    <div class="vs-radio-con">
                                                                                                        <input type="radio" name="m13_1" value="2"
                                                                                                        @if($data->m13_1 ==  "2") checked="checked" @endif disabled="disabled">
                                                                                                        <span class="vs-radio">
                                                                                                            <span class="vs-radio--border"></span>
                                                                                                            <span class="vs-radio--circle"></span>
                                                                                                        </span>
                                                                                                        <span class="">สูบเป็นครั้งคราว</span>
                                                                                                    </div>
                                                                                                </fieldset>
                                                                                            </li>
                                                                                            <li class="d-inline-block">
                                                                                                <fieldset>
                                                                                                    <div class="vs-radio-con">
                                                                                                        <input type="radio" name="m13_1" value="3"
                                                                                                        @if($data->m13_1 ==  "3") checked="checked" @endif disabled="disabled">
                                                                                                        <span class="vs-radio">
                                                                                                            <span class="vs-radio--border"></span>
                                                                                                            <span class="vs-radio--circle"></span>
                                                                                                        </span>
                                                                                                        <span class="">สูบเป็นประจำ</span>
                                                                                                    </div>
                                                                                                </fieldset>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="col-md-6 col-12 mb-1">
                                                                                        <p><strong>การดื่มแอลกอฮอล์</strong></p>
                                                                                        <ul class="list-unstyled mb-0">
                                                                                            <li class="d-inline-block mr-2">
                                                                                                <fieldset>
                                                                                                    <div class="vs-radio-con">
                                                                                                        <input type="radio" name="m13_2" value="0"
                                                                                                        @if($data->m13_2 ==  "0") checked="checked" @endif disabled="disabled">
                                                                                                        <span class="vs-radio">
                                                                                                            <span class="vs-radio--border"></span>
                                                                                                            <span class="vs-radio--circle"></span>
                                                                                                        </span>
                                                                                                        <span class="">ไม่เคยดื่ม</span>
                                                                                                    </div>
                                                                                                </fieldset>
                                                                                            </li>
                                                                                            <li class="d-inline-block mr-2">
                                                                                                <fieldset>
                                                                                                    <div class="vs-radio-con">
                                                                                                        <input type="radio" name="m13_2" value="1"
                                                                                                        @if($data->m13_2 ==  "1") checked="checked" @endif disabled="disabled">
                                                                                                        <span class="vs-radio">
                                                                                                            <span class="vs-radio--border"></span>
                                                                                                            <span class="vs-radio--circle"></span>
                                                                                                        </span>
                                                                                                        <span class="">เคยดื่ม แต่เลิกแล้ว</span>
                                                                                                    </div>
                                                                                                </fieldset>
                                                                                            </li>
                                                                                            <li class="d-inline-block mr-2">
                                                                                                <fieldset>
                                                                                                    <div class="vs-radio-con">
                                                                                                        <input type="radio" name="m13_2" value="2"
                                                                                                        @if($data->m13_2 ==  "2") checked="checked" @endif disabled="disabled">
                                                                                                        <span class="vs-radio">
                                                                                                            <span class="vs-radio--border"></span>
                                                                                                            <span class="vs-radio--circle"></span>
                                                                                                        </span>
                                                                                                        <span class="">ดื่มเป็นครั้งคราว</span>
                                                                                                    </div>
                                                                                                </fieldset>
                                                                                            </li>
                                                                                            <li class="d-inline-block">
                                                                                                <fieldset>
                                                                                                    <div class="vs-radio-con">
                                                                                                        <input type="radio" name="m13_2" value="3"
                                                                                                        @if($data->m13_2 ==  "3") checked="checked" @endif disabled="disabled">
                                                                                                        <span class="vs-radio">
                                                                                                            <span class="vs-radio--border"></span>
                                                                                                            <span class="vs-radio--circle"></span>
                                                                                                        </span>
                                                                                                        <span class="">ดื่มเป็นประจำ</span>
                                                                                                    </div>
                                                                                                </fieldset>
                                                                                            </li>
                                                                                        </ul>


                                                                                    </div>
                                                                                    <div class="col-md-6 col-12 mb-1">
                                                                                        <p><strong>การออกกำลังกาย</strong></p>
                                                                                        <ul class="list-unstyled mb-0">
                                                                                            <li class="d-inline-block mr-2">
                                                                                                <fieldset>
                                                                                                    <div class="vs-radio-con">
                                                                                                        <input type="radio" name="m13_3" value="0"
                                                                                                        @if($data->m13_3 ==  "0") checked="checked" @endif disabled="disabled">
                                                                                                        <span class="vs-radio">
                                                                                                            <span class="vs-radio--border"></span>
                                                                                                            <span class="vs-radio--circle"></span>
                                                                                                        </span>
                                                                                                        <span class="">ไม่เคยออกกำลังกาย</span>
                                                                                                    </div>
                                                                                                </fieldset>
                                                                                            </li>
                                                                                            <li class="d-inline-block mr-2">
                                                                                                <fieldset>
                                                                                                    <div class="vs-radio-con">
                                                                                                        <input type="radio" name="m13_3" value="1"
                                                                                                        @if($data->m13_3 ==  "1") checked="checked" @endif disabled="disabled">
                                                                                                        <span class="vs-radio">
                                                                                                            <span class="vs-radio--border"></span>
                                                                                                            <span class="vs-radio--circle"></span>
                                                                                                        </span>
                                                                                                        <span class="">ออกกำลังกายต่ำกว่าเกณฑ์</span>
                                                                                                    </div>
                                                                                                </fieldset>
                                                                                            </li>
                                                                                            <li class="d-inline-block mr-2">
                                                                                                <fieldset>
                                                                                                    <div class="vs-radio-con">
                                                                                                        <input type="radio" name="m13_3" value="2"
                                                                                                        @if($data->m13_3 ==  "2") checked="checked" @endif disabled="disabled">
                                                                                                        <span class="vs-radio">
                                                                                                            <span class="vs-radio--border"></span>
                                                                                                            <span class="vs-radio--circle"></span>
                                                                                                        </span>
                                                                                                        <span class="">ออกกำลังกายตามเกณฑ์</span>
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
                                                            <div class="card">

                                                                <div class="card-content">
                                                                    <div class="card-body">
                                                                            <div class="form-body">
                                                                                <label class="mb-2" for="input-radio-12"><strong>ผลตรวจเลือด (Blood Chemistry)</strong></label>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-3 label-control" for="blood_glu">Glu (mg/dl)</label>
                                                                                    <div class="col-md-9">
                                                                                    <div class="position-relative has-icon-left controls">
                                                                                        <input type="text" id="name" class="form-control" placeholder="Glu (mg/dl)" name="blood_glu"
                                                                                        value="{{ $item->blood_glu }}"  disabled>
                                                                                        <div class="form-control-position">
                                                                                        <i class="feather icon-edit-1"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-3 label-control" for="blood_chol">Chol (mg/dl)</label>
                                                                                    <div class="col-md-9">
                                                                                    <div class="position-relative has-icon-left controls">
                                                                                        <input type="text" id="name" class="form-control" placeholder="Chol (mg/dl)" name="blood_chol"
                                                                                        value="{{ $item->blood_chol }}"  disabled>
                                                                                        <div class="form-control-position">
                                                                                        <i class="feather icon-edit-1"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-3 label-control" for="blood_tg">TG (mg/dl)</label>
                                                                                    <div class="col-md-9">
                                                                                    <div class="position-relative has-icon-left controls">
                                                                                        <input type="text" id="name" class="form-control" placeholder="TG (mg/dl)" name="blood_tg"
                                                                                        value="{{ $item->blood_tg }}"  disabled>
                                                                                        <div class="form-control-position">
                                                                                        <i class="feather icon-edit-1"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-3 label-control" for="blood_hdl">HDL-C (mg/dl)</label>
                                                                                    <div class="col-md-9">
                                                                                    <div class="position-relative has-icon-left controls">
                                                                                        <input type="text" id="name" class="form-control" placeholder="HDL-C (mg/dl)" name="blood_hdl"
                                                                                        value="{{ $item->blood_hdl }}" disabled>
                                                                                        <div class="form-control-position">
                                                                                        <i class="feather icon-edit-1"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-3 label-control" for="blood_ldl">LDL-C (mg/dl)</label>
                                                                                    <div class="col-md-9">
                                                                                    <div class="position-relative has-icon-left controls">
                                                                                        <input type="text" id="name" class="form-control" placeholder="LDL-C (mg/dl)" name="blood_ldl"
                                                                                        value="{{ $item->blood_ldl }}" disabled>
                                                                                        <div class="form-control-position">
                                                                                        <i class="feather icon-edit-1"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-3 label-control" for="blood_bun">BUN (mg/dl)</label>
                                                                                    <div class="col-md-9">
                                                                                    <div class="position-relative has-icon-left controls">
                                                                                        <input type="text" id="name" class="form-control" placeholder="BUN (mg/dl)" name="blood_bun"
                                                                                        value="{{ $item->blood_bun }}"  disabled>
                                                                                        <div class="form-control-position">
                                                                                        <i class="feather icon-edit-1"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-3 label-control" for="blood_cr">Cr (mg/dl)</label>
                                                                                    <div class="col-md-9">
                                                                                    <div class="position-relative has-icon-left controls">
                                                                                        <input type="text" id="name" class="form-control" placeholder="Cr (mg/dl)" name="blood_cr"
                                                                                        value="{{ $item->blood_cr }}"  disabled>
                                                                                        <div class="form-control-position">
                                                                                        <i class="feather icon-edit-1"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-3 label-control" for="blood_uric">Uric (mg/dl)</label>
                                                                                    <div class="col-md-9">
                                                                                    <div class="position-relative has-icon-left controls">
                                                                                        <input type="text" id="name" class="form-control" placeholder="Uric (mg/dl)" name="blood_uric"
                                                                                        value="{{ $item->blood_uric }}"  disabled>
                                                                                        <div class="form-control-position">
                                                                                        <i class="feather icon-edit-1"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-3 label-control" for="blood_ast">AST (U/L)</label>
                                                                                    <div class="col-md-9">
                                                                                    <div class="position-relative has-icon-left controls">
                                                                                        <input type="text" id="name" class="form-control" placeholder="AST (U/L)" name="blood_ast"
                                                                                        value="{{ $item->blood_ast }}"  disabled>
                                                                                        <div class="form-control-position">
                                                                                        <i class="feather icon-edit-1"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-md-3 label-control" for="blood_alt">ALT (U/L)</label>
                                                                                    <div class="col-md-9">
                                                                                    <div class="position-relative has-icon-left controls">
                                                                                        <input type="text" id="name" class="form-control" placeholder="ALT (U/L)" name="blood_alt"
                                                                                        value="{{ $item->blood_alt }}"  disabled>
                                                                                        <div class="form-control-position">
                                                                                        <i class="feather icon-edit-1"></i>
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
                                                        <div class="modal-footer">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <a class="btn btn-primary mr-1 waves-effect waves-light" href="{{ route('army.edit_year', $item->id)}}"><i class="feather icon-edit"></i> แก้ไขข้อมูลตรวจสุขภาพ</a>

                                                                        <button type="button" class="btn btn-danger mr-1 waves-effect waves-light" data-toggle="modal" data-target="#DeleteYear{{$item->id}}">
                                                                            <i class="feather icon-trash-2"></i> ลบข้อมูลตรวจสุขภาพ
                                                                        </button>
                                                                </div>
                                                            </div>
                                                        </div>

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
                                                                                    คุณต้องการลบข้อมูลตรวจสุขภาพประจำปี <b>{{ $item->year }}</b> <br><b> "{{ $item->report->title_name }}{{ $item->report->first_name }} {{ $item->report->last_name }}" </b>ใช่หรือไม่
                                                                    </div>
                                                                    <div class="modal-footer text-center">
                                                                        <form id="DeleteYear{{$item->id}}" name="DeleteYear" action="{{ route('army.destroy_year', $item->id) }}" method="POST">
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

                            <div class="modal fade" id="default1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">

                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel1"><i class="feather icon-save"></i> ข้อมูลสุขภาพ</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="store" class="form-horizontal" name="store" action="{{ route('check_up_army_2.store')}}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('POST') }}
                                                    <input type="hidden" name="report_check_up_id" value="{{ $data->id }}">
                                                    <div class="container">
                                                        <select id="filler_year" name="year" class="form-control mb-1" required placeholder="เลือกปี" required>
                                                            <option value="">เลือกปี</option>
                                                            <?php
                                                                $year_start = '2561';
                                                                $year=(date("Y")+543);

                                                                for($i = $year_start; $i <= $year; $i++){?>

                                                                    <option value="<?=$i?>"><?=$i?></option>

                                                                <?php }
                                                                ?>
                                                        </select>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-md-3 col-12 mb-1">
                                                                <label for="projectinput3">น้ำหนัก</label>
                                                                <fieldset>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="น้ำหนัก" aria-label="น้ำหนัก" value="{{ $data->weight }}"
                                                                                    name="weight" id='weight'>
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text">ก.ก.</span>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-3 col-12 mb-1">
                                                                <label for="projectinput3">ส่วนสูง</label>
                                                                <fieldset>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="ส่วนสูง" aria-label="ส่วนสูง" value="{{ $data->height }}"
                                                                                    name="height" id='height'>
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text">ซ.ม.</span>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-3 col-12 mb-1">
                                                                <label for="projectinput3">เส้นรอบเอว (วัดผ่านสะดือ)</label>
                                                                <fieldset>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="เส้นรอบเอว" aria-label="เส้นรอบเอว" value="{{ $data->waist }}"
                                                                                    name="waist" id='waist'>
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text">ซ.ม.</span>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-3 col-12 mb-1">
                                                                <label for="bmi">BMI</label>
                                                                <fieldset>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                        </div>
                                                                        <input type="text" class="form-control" placeholder="BMI" aria-label="BMI" value="{{ $data->bmi }}"
                                                                                    name="bmi" id='bmi'>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                        </div>

                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-md-3 col-12 mb-1">
                                                                <label for="projectinput3">ความดันโลหิต (วัดครั้งที่ 1)</label>
                                                                <fieldset>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                        </div>
                                                                        <input type="number" class="form-control" placeholder="ความดันโลหิต" aria-label="ความดันโลหิต" value="{{ $data->pressure_1 }}"
                                                                                    name="pressure_1" id='pressure_1'>
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
                                                                        <input type="number" class="form-control" placeholder="ความดันโลหิต" aria-label="ความดันโลหิต" value="{{ $data->pressure_2 }}"
                                                                                    name="pressure_2" id='pressure_2'>
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
                                                                        <input type="number" class="form-control" placeholder="ชีพจร" aria-label="ชีพจร" value="{{ $data->pulse_1 }}"
                                                                                    name="pulse_1" id='pulse_1'>
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
                                                                        <input type="number" class="form-control" placeholder="ชีพจร" aria-label="ชีพจร" value="{{ $data->pulse_2 }}"
                                                                                    name="pulse_2" id='pulse_2'>
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text">ครั้ง/นาที</span>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                        </div>

                                                        <p>*กรณีที่วัดความดันโลหิตครั้งแรกผิดปกติ ให้วัดครั้งที่ 2 หากค่าที่ได้ 2 ครั้งแตกต่างกันไม่เกิน 10 มม.ปรอท ให้ใช้ค่าที่ใกล้เคียงกับค่าปกติมากที่สุด แต่หากแตกต่างกันเกิน 10 มม.ปรอท ให้ใช้ค่าเฉลี่ยจากการวัดทั้ง 2 ครั้ง</p>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="form-group col-md-6 mb-2">
                                                                <label for="projectinput3"><strong>X-Ray</strong></label>
                                                                <div class="col-md-9">
                                                                        <fieldset class="ml-1">
                                                                        <input type="radio" name="x_ray" value="0"
                                                                        @if($data->x_ray == "0") checked="checked" @endif >
                                                                            <label for="input-radio-11">ไม่ได้ตรวจ</label>
                                                                        </fieldset>
                                                                        <fieldset class="ml-1">
                                                                        <input type="radio" name="x_ray" value="1"
                                                                        @if($data->x_ray == "1") checked="checked" @endif >
                                                                        <label for="input-radio-12">ปกติ</label>
                                                                        </fieldset>
                                                                        <fieldset class="ml-1">
                                                                        <input type="radio" name="x_ray" value="2"
                                                                        @if($data->x_ray == "2") checked="checked" @endif >
                                                                        <label for="input-radio-12">ผิดปกติ</label>
                                                                        </fieldset>

                                                                </div>
                                                            </div>

                                                            <div class="form-group col-md-6 mb-2">
                                                                <label for="projectinput3"><strong>Urine Examination</strong></label>
                                                                <div class="col-md-9">
                                                                        <fieldset class="ml-1">
                                                                        <input type="radio" name="urine" value="0" onclick="urine2();"
                                                                        @if($data->urine == "0") checked="checked" @endif >
                                                                            <label for="input-radio-11">ไม่ได้ตรวจ</label>
                                                                        </fieldset>
                                                                        <fieldset class="ml-1">
                                                                        <input type="radio" name="urine" value="1" onclick="urine2();"
                                                                        @if($data->urine == "1") checked="checked" @endif >
                                                                        <label for="input-radio-12">ปกติ</label>
                                                                        </fieldset>
                                                                        <fieldset class="ml-1">
                                                                        <input type="radio" name="urine" value="2" onclick="urine1();"
                                                                        @if($data->urine == "2") checked="checked" @endif >
                                                                        <label for="input-radio-12">ผิดปกติ</label>
                                                                        <div id="div2" style="display:none;margin-bottom: .5rem;">
                                                                                <div class="form-group col-12 mb-2">
                                                                                    <label for="projectinput3"><strong>Proteinurea > +1</strong></label>
                                                                                    <div class="input-group">
                                                                                    <fieldset class="ml-1">
                                                                                        <input type="radio" name="urine_d1" value="0"
                                                                                        @if($data->urine_d1 == "0") checked="checked" @endif >
                                                                                        <label for="input-radio-11">ไม่มี</label>
                                                                                    </fieldset>
                                                                                    <fieldset class="ml-1">
                                                                                        <input type="radio" name="urine_d1" value="1"
                                                                                        @if($data->urine_d1 == "1") checked="checked" @endif >
                                                                                        <label for="input-radio-12">มี</label>
                                                                                    </fieldset>
                                                                                    </div>
                                                                                    <label for="projectinput3"><strong>Hematuria > +1</strong></label>
                                                                                    <div class="input-group">
                                                                                        <fieldset class="ml-1">
                                                                                        <input type="radio" name="urine_d2" value="0"
                                                                                        @if($data->urine_d2 == "0") checked="checked" @endif >
                                                                                            <label for="input-radio-11">ไม่มี</label>
                                                                                        </fieldset>
                                                                                        <fieldset class="ml-1">
                                                                                        <input type="radio" name="urine_d2" value="1"
                                                                                        @if($data->urine_d2  == "1") checked="checked" @endif >
                                                                                        <label for="input-radio-12">มี</label>
                                                                                        </fieldset>

                                                                                    </div>
                                                                                    <label for="projectinput3"><strong>ผิดปกติอื่นๆ</strong></label>
                                                                                    <div class="input-group">
                                                                                    <fieldset>
                                                                                        <div class="input-group controls">
                                                                                        <span class="input-group-addon">(ระบุ)</span>
                                                                                        <input type="text" class="form-control" aria-label="" placeholder=""
                                                                                        name="urine_d" id='urine_d' value="{{ $data->urine_d }}">

                                                                                        </div>
                                                                                    </fieldset>
                                                                                    </div>
                                                                                </div>
                                                                                </div>
                                                                        </fieldset>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-6 mb-2">
                                                                <label for="projectinput3"><strong>CBC</strong></label>
                                                                <div class="col-md-9">
                                                                    <fieldset class="ml-1">
                                                                    <input type="radio" name="cbc" value="0" onclick="CBC2();"
                                                                    @if($data->cbc == "0") checked="checked" @endif >
                                                                    <label for="input-radio-11">ไม่ได้ตรวจ</label>
                                                                    </fieldset>
                                                                            <fieldset class="ml-1">
                                                                    <input type="radio" name="cbc" value="1" onclick="CBC2();"
                                                                    @if($data->cbc == "1") checked="checked" @endif >
                                                                    <label for="input-radio-12">ปกติ</label>
                                                                        </fieldset>
                                                                            <fieldset class="ml-1">
                                                                    <input type="radio" name="cbc" value="2" onclick="CBC2();"
                                                                    @if($data->cbc == "2") checked="checked" @endif >
                                                                    <label for="input-radio-12">ผิดปกติ Hct < 40% และ Mcv < 78%</label>
                                                                            </fieldset>
                                                                            <fieldset class="ml-1">
                                                                                    <input type="radio" name="cbc" value="3" onclick="CBC1();"
                                                                                    @if($data->cbc == "3") checked="checked" @endif >
                                                                                    <label for="input-radio-12">ผิดปกติ อื่นๆ</label>
                                                                                    <div id="div1" style="display:none;margin-bottom: .5rem;">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                        <fieldset>
                                                                                            <div class="input-group controls">
                                                                                            <span class="input-group-addon">(ระบุ)</span>
                                                                                            <input type="text" class="form-control" aria-label="" placeholder=""
                                                                                            name="cbc_d" id='cbc_d' value="{{ $data->cbc_d  }}">

                                                                                            </div>
                                                                                        </fieldset>
                                                                                        </div>
                                                                                    </div>
                                                                                    </div>
                                                                            </fieldset>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-6 mb-2">
                                                                            <label for="projectinput3"><strong>pap smear</strong></label>
                                                                            <div class="col-md-9">
                                                                                <fieldset class="ml-1">
                                                                                    <input type="radio" name="pap" value="0"  onclick="j10_2_2();"
                                                                                    @if($data->pap  == "0") checked="checked" @endif >
                                                                                    <label for="input-radio-11">ไม่ได้ตรวจ</label>
                                                                                </fieldset>
                                                                                <fieldset class="ml-1">
                                                                                    <input type="radio" name="pap" value="1"  onclick="j10_2_2();"
                                                                                    @if($data->pap == "1") checked="checked" @endif >
                                                                                    <label for="input-radio-12">ปกติ</label>
                                                                                </fieldset>
                                                                                <fieldset class="ml-1">
                                                                                    <input type="radio" name="pap" value="2" onclick="j10_2_1();"
                                                                                    @if($data->pap  == "2") checked="checked" @endif >
                                                                                    <label for="input-radio-12">ผิดปกติ</label>
                                                                                    <div id="div11" style="display:none;margin-bottom: .5rem;">
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                            <fieldset>
                                                                                                <div class="input-group controls">
                                                                                                <span class="input-group-addon">(ระบุ)</span>
                                                                                                <input type="text" class="form-control" aria-label="" placeholder=""
                                                                                                name="pap_d" id='pap_d' value="{{ $data->pap_d  }}">

                                                                                                </div>
                                                                                            </fieldset>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>

                                                                            </div>
                                                            </div>
                                                        </div>
                                                        <hr>

                                                                <label class="mb-2" for="input-radio-12"><strong>ผลตรวจเลือด (Blood Chemistry)</strong></label>
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 label-control" for="blood_glu">Glu (mg/dl)</label>
                                                                    <div class="col-md-9">
                                                                    <div class="position-relative has-icon-left controls">
                                                                        <input type="text" id="name" class="form-control" placeholder="Glu (mg/dl)" name="blood_glu"
                                                                        value="{{ $data->blood_glu }}" >
                                                                        <div class="form-control-position">
                                                                        <i class="feather icon-edit-1"></i>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 label-control" for="blood_chol">Chol (mg/dl)</label>
                                                                    <div class="col-md-9">
                                                                    <div class="position-relative has-icon-left controls">
                                                                        <input type="text" id="name" class="form-control" placeholder="Chol (mg/dl)" name="blood_chol"
                                                                        value="{{ $data->blood_chol }}" >
                                                                        <div class="form-control-position">
                                                                        <i class="feather icon-edit-1"></i>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 label-control" for="blood_tg">TG (mg/dl)</label>
                                                                    <div class="col-md-9">
                                                                    <div class="position-relative has-icon-left controls">
                                                                        <input type="text" id="name" class="form-control" placeholder="TG (mg/dl)" name="blood_tg"
                                                                        value="{{ $data->blood_tg }}" >
                                                                        <div class="form-control-position">
                                                                        <i class="feather icon-edit-1"></i>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 label-control" for="blood_hdl">HDL-C (mg/dl)</label>
                                                                    <div class="col-md-9">
                                                                    <div class="position-relative has-icon-left controls">
                                                                        <input type="text" id="name" class="form-control" placeholder="HDL-C (mg/dl)" name="blood_hdl"
                                                                        value="{{ $data->blood_hdl }}">
                                                                        <div class="form-control-position">
                                                                        <i class="feather icon-edit-1"></i>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 label-control" for="blood_ldl">LDL-C (mg/dl)</label>
                                                                    <div class="col-md-9">
                                                                    <div class="position-relative has-icon-left controls">
                                                                        <input type="text" id="name" class="form-control" placeholder="LDL-C (mg/dl)" name="blood_ldl"
                                                                        value="{{ $data->blood_ldl }}">
                                                                        <div class="form-control-position">
                                                                        <i class="feather icon-edit-1"></i>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 label-control" for="blood_bun">BUN (mg/dl)</label>
                                                                    <div class="col-md-9">
                                                                    <div class="position-relative has-icon-left controls">
                                                                        <input type="text" id="name" class="form-control" placeholder="BUN (mg/dl)" name="blood_bun"
                                                                        value="{{ $data->blood_bun }}" >
                                                                        <div class="form-control-position">
                                                                        <i class="feather icon-edit-1"></i>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 label-control" for="blood_cr">Cr (mg/dl)</label>
                                                                    <div class="col-md-9">
                                                                    <div class="position-relative has-icon-left controls">
                                                                        <input type="text" id="name" class="form-control" placeholder="Cr (mg/dl)" name="blood_cr"
                                                                        value="{{ $data->blood_cr }}" >
                                                                        <div class="form-control-position">
                                                                        <i class="feather icon-edit-1"></i>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 label-control" for="blood_uric">Uric (mg/dl)</label>
                                                                    <div class="col-md-9">
                                                                    <div class="position-relative has-icon-left controls">
                                                                        <input type="text" id="name" class="form-control" placeholder="Uric (mg/dl)" name="blood_uric"
                                                                        value="{{ $data->blood_uric }}" >
                                                                        <div class="form-control-position">
                                                                        <i class="feather icon-edit-1"></i>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 label-control" for="blood_ast">AST (U/L)</label>
                                                                    <div class="col-md-9">
                                                                    <div class="position-relative has-icon-left controls">
                                                                        <input type="text" id="name" class="form-control" placeholder="AST (U/L)" name="blood_ast"
                                                                        value="{{ $data->blood_ast }}" >
                                                                        <div class="form-control-position">
                                                                        <i class="feather icon-edit-1"></i>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 label-control" for="blood_alt">ALT (U/L)</label>
                                                                    <div class="col-md-9">
                                                                    <div class="position-relative has-icon-left controls">
                                                                        <input type="text" id="name" class="form-control" placeholder="ALT (U/L)" name="blood_alt"
                                                                        value="{{ $data->blood_alt }}" >
                                                                        <div class="form-control-position">
                                                                        <i class="feather icon-edit-1"></i>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> บันทึก</button>
                                                <button type="button" class="btn grey mr-1 btn-outline-secondary" data-dismiss="modal">ยกเลิก</button>
                                            </div>
                                    </div>
                                </div>
                            </div>

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

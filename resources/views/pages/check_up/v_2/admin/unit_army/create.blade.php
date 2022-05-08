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
                                    <li class="breadcrumb-item"><a href="{{ route('check_up.index') }}">KSVR Check Up</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('check_up.index') }}">หน่วยงานทหาร</a>
                                    </li>
                                    <li class="breadcrumb-item active"><i class="feather icon-clipboard"></i> เพิ่มข้อมูลตรวจสุขภาพปี
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">

                <section id="number-tabs">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="card-title text-center">นำเข้าข้อมูลตรวจสุขภาพ (HIS)</h1>
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="feather icon-user"></i> ข้อมูลทั่วไป</h4>
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

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form id="store" class="form-horizontal" name="store" action="{{ route('check_up_detail.store')}}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('POST') }}
                                <input type="hidden" name="report1_id" value="{{ $data->id }}">
                                <input type="hidden" name="gender" value="{{ $data->gender }}">
                                <section id="basic-horizontal-layouts">
                                    <div class="row match-height">
                                        @if($data->gender == '2')
                                        <div class="col-md-6 col-12">
                                        @else
                                        <div class="col-md-9 col-12">
                                        @endif
                                            <div class="card">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="form-body">
                                                            <h4 class="form-section"><i class="feather icon-save"></i> ข้อมูลตรวจสุขภาพปี <span class="text-danger">(HIS ข้อมูลวันที่ {{ DateThai3($report_date) }})</span></h4>
                                                            <div class="row">
                                                                <div class="col-md-9">
                                                                    <div class="form-group row">
                                                                        <label class="col-md-4 label-control" for="year"><span class="font-medium-3">ประจำปี</span></label>
                                                                        <div class="col-md-8">

                                                                            <div class="position-relative has-icon-left input-group controls">
                                                                                <select id="filler_year" name="year" class="form-control" required placeholder="เลือกปี">
                                                                                    <option value="">เลือกปี</option>

                                                                                    <?php
                                                                                        $year_start = '2561';
                                                                                        $year=(date("Y")+543);

                                                                                        for($i = $year_start; $i <= $year; $i++){?>

                                                                                            <option value="<?=$i?>"><?=$i?></option>

                                                                                        <?php }
                                                                                        ?>
                                                                                </select>
                                                                                <div class="form-control-position">
                                                                                <i class="feather icon-edit-1"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-3 col-12 mb-1">
                                                                    <label for="projectinput3">น้ำหนัก</label>
                                                                    <fieldset>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                            </div>
                                                                            <input type="text" class="form-control" placeholder="น้ำหนัก" aria-label="น้ำหนัก" value="{{ isset($opdscreen->bw) ? $opdscreen->bw : ''  }}"
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
                                                                            <input type="text" class="form-control" placeholder="ส่วนสูง" aria-label="ส่วนสูง" value="{{ isset($opdscreen->height) ? $opdscreen->height : ''  }}"
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
                                                                            <input type="text" class="form-control" placeholder="เส้นรอบเอว" aria-label="เส้นรอบเอว" value=""
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
                                                                            <input type="text" class="form-control" placeholder="BMI" aria-label="BMI" value="{{ isset($opdscreen->bmi) ? $opdscreen->bmi : ''  }}"
                                                                                        name="bmi" id='bmi'>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                            </div>

                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-md-3 col-12 mb-1">
                                                                    <label for="projectinput3">ความดันโลหิต (DPS)</label>
                                                                    <fieldset>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                            </div>
                                                                            <input type="text" class="form-control" placeholder="ความดันโลหิต" aria-label="ความดันโลหิต" value="{{ isset($opdscreen->bps) ? $opdscreen->bps : ''  }}"
                                                                                        name="pressure_1" id='pressure_1'>
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text">มม. ปรอท</span>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                                <div class="col-md-3 col-12 mb-1">
                                                                    <label for="projectinput3">ความดันโลหิต (BPD)</label>
                                                                    <fieldset>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                            </div>
                                                                            <input type="text" class="form-control" placeholder="ความดันโลหิต" aria-label="ความดันโลหิต" value="{{ isset($opdscreen->bpd) ? $opdscreen->bpd : ''  }}"
                                                                                        name="pressure_2" id='pressure_2'>
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text">มม. ปรอท</span>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                                <div class="col-md-4 col-12 mb-1">
                                                                    <label for="projectinput3">ชีพจร</label>
                                                                    <fieldset>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                            </div>
                                                                            <input type="number" class="form-control" placeholder="ชีพจร" aria-label="ชีพจร" value="{{ isset($opdscreen->pulse) ? $opdscreen->pulse : ''  }}"
                                                                                        name="pulse_1" id='pulse_1'>
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
                                                                            <input type="number" class="form-control" placeholder="ชีพจร" aria-label="ชีพจร" value=""
                                                                                        name="pulse_2" id='pulse_2'>
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text">ครั้ง/นาที</span>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                </div> --}}
                                                            </div>

                                                            <p> *กรณีที่วัดความดันโลหิตครั้งแรกผิดปกติ ให้วัดครั้งที่ 2 หากค่าที่ได้ 2 ครั้งแตกต่างกันไม่เกิน 10 มม.ปรอท ให้ใช้ค่าที่ใกล้เคียงกับค่าปกติมากที่สุด แต่หากแตกต่างกันเกิน 10 มม.ปรอท ให้ใช้ค่าเฉลี่ยจากการวัดทั้ง 2 ครั้ง</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-12">
                                            <div class="card">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="form-body">
                                                            <h4 class="form-section"><i class="feather icon-save"></i> X-Ray {{ $data->gender }}</h4>
                                                            <div class="row">

                                                                <div class="col-md-12 col-12 mb-1 mt-2">
                                                                    <div class="col-md-12 mb-1">
                                                                        <ul class="list-unstyled mb-0">
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con">
                                                                                        <input type="radio" name="x_ray" value="0" required>
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">ไม่ได้ตรวจ</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-success">
                                                                                        <input type="radio" name="x_ray" value="1" required>
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">ปกติ</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-success">
                                                                                        <input type="radio" name="x_ray" value="2" required>
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">ผิดปกติ</span>
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
                                        @if($data->gender == '2')
                                        <div class="col-md-3 col-12">
                                            <div class="card">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="form-body">
                                                            <h4 class="form-section"><i class="feather icon-save"></i> pap smear</h4>
                                                            <div class="row">

                                                                <div class="col-md-12 col-12 mb-1 mt-2">
                                                                    <div class="col-md-12 mb-1">
                                                                        <ul class="list-unstyled mb-0">
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con">
                                                                                        <input type="radio" name="pap" value="0" onclick="j10_2_2();" required>
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">ไม่ได้ตรวจ</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-success">
                                                                                        <input type="radio" name="pap" value="1" onclick="j10_2_2();" required>
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">ปกติ</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-success">
                                                                                        <input type="radio" name="pap" value="2" onclick="j10_2_1();" required>
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">ผิดปกติ</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                        </ul>
                                                                        <div id="div11" style="display:none;margin-bottom: .5rem;">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                <fieldset>
                                                                                    <div class="input-group controls">
                                                                                    <span class="input-group-addon">(ระบุ)</span>
                                                                                    <input type="text" class="form-control" aria-label="" placeholder=""
                                                                                    name="pap_d" id='pap_d' value="">

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
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </section>
                                <section id="basic-horizontal-layouts">
                                    <div class="row match-height">

                                        <div class="col-md-4 col-12">
                                            <div class="card">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="form-body">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label class="mb-2" for="input-radio-12"><strong>ผลตรวจความสมบูรณ์ของเม็ดเลือด (CBC)</strong></label>

                                                                    @include('pages.check_up.v_2.admin.unit_army.include.create.create_import_cbc')

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
                                                    <div class="card-body">
                                                        <div class="form-body">
                                                            <div class="row">

                                                                <div class="col-md-12">
                                                                    <label class="mb-2" for="input-radio-12"><strong>ผลตรวจเลือด (Blood Chemistry)</strong></label>

                                                                    @include('pages.check_up.v_2.admin.unit_army.include.create.create_import_BloodChemistry')

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
                                                    <div class="card-body">
                                                        <div class="form-body">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label class="mb-2" for="input-radio-12"><strong>ผลตรวจปัสสาวะ (Urine Examination)</strong></label>

                                                                    @include('pages.check_up.v_2.admin.unit_army.include.create.create_import_urine')

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> บันทึก</button>
                                                    {{-- <button type="button" class="btn grey mr-1 btn-outline-secondary" >ยกเลิก</button> --}}
                                                    <a class="btn grey mr-1 btn-outline-secondary" href="{{ route('check_up_army_2.show', $data->id) }}">
                                                        <i class="feather icon-monitor"></i> ยกเลิก</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </section>
                            </form>
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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script type="text/javascript">
            $(document).ready(function () {

                $('#country').on('keyup',function() {
                    var query = $(this).val();
                    $.ajax({

                        url:"{{ route('army.search') }}",
                        type:"GET",
                        data:{'country':query},

                        success:function (data) {

                            $('#country_list').html(data);
                        }
                    })
                    // end of ajax call
                });


                $(document).on('click', 'li', function(){

                    var value = $(this).text();
                    $('#country').val(value);
                    $('#country_list').html("");
                });
            });
        </script>
 <script>
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

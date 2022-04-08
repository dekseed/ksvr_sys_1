@extends('layouts.check_up')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/select/select2.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/forms/validation/form-validation.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/pickers/pickadate/pickadate.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/forms/wizard.css">
<style>
    label {
        font-size: 14px;
    }
    </style>
@endsection

@section('content')

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header text-center">
                <div class="col-md-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title mb-0">แบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก โรงพยาบาลค่ายกฤษณ์สีวะรา</h2>

                        </div>
                    </div>
                </div>

            </div>

            <div class="content-body">
                <section id="validation">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                {{-- <div class="card-header">
                                    <h2 class="card-title">แบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก โรงพยาบาลค่ายกฤษณ์สีวะรา</h2>
                                </div> --}}
                                <div class="card-content">
                                    <div class="card-body">
                                        @if(count($errors) > 0)
                                            <div class="alert alert-danger" role="alert">
                                                <strong>ขัดข้อง :</strong>
                                                <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>
                                                    {{$error}}
                                                    </li>
                                                @endforeach

                                                </ul>
                                            </div>
                                        @endif

                                        <form id="steps-validation" action="{{route('CheckUp.store')}}" class="steps-validation wizard-circle" method="POST">
                                            {{csrf_field()}}
                                            <!-- Step 1 -->
                                            <h6>ส่วนที่ 1</h6>
                                            <fieldset>
                                                <div class="container">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="card-text">
                                                                <p class="font-large-1">ส่วนที่ 1 ส่วนคำถามข้อมูลส่วนบุคคล</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="card-body">
                                                            <div class="form-body">
                                                                <h4 class="form-section"><i class="feather icon-user"></i> ข้อมูลส่วนตัว</h4>

                                                                <div class="form-group row">
                                                                    <label class="col-md-3 label-control" for="title_name">คำนำหน้า</label>
                                                                    <div class="col-md-9">

                                                                        <select class="form-control select2" name="title_name" required>
                                                                            <option value="">คำนำหน้า</option>
                                                                            @foreach ($titleName as $roles)
                                                                            <option value="{{$roles->id}}" >{{$roles->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 label-control" for="first_name">ชื่อหน้า</label>
                                                                    <div class="col-md-9">
                                                                        <div class="position-relative has-icon-left controls">
                                                                            <input type="text" id="first_name" class="form-control" placeholder="ชื่อหน้า" name="first_name"
                                                                             data-validation-required-message="กรุณากรอกข้อมูลช่องนี้" required>
                                                                            <div class="form-control-position">
                                                                                <i class="feather icon-user"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 label-control" for="last_name">นามสกุล</label>
                                                                    <div class="col-md-9">
                                                                        <div class="position-relative has-icon-left controls">
                                                                            <input type="text" id="last_name" class="form-control" placeholder="นามสกุล" name="last_name"
                                                                              data-validation-required-message="กรุณากรอกข้อมูลช่องนี้"
                                                                                aria-invalid="false" required>
                                                                            <div class="form-control-position">
                                                                                <i class="feather icon-user"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                <label class="col-md-3 label-control" for="cid">เลขที่บัตรประจำตัวประชาชน</label>
                                                                    <div class="col-md-9">
                                                                        <div class="position-relative has-icon-left controls">
                                                                            <input type="text" id="cid" class="form-control border-primary optional-cid"
                                                                                placeholder="เลขที่บัตรประชาชน" name="cid" data-validation-required-message="กรุณากรอกข้อมูลช่องนี้" required
                                                                                minlength="13" maxlength="13" aria-invalid="false">
                                                                            <div class="form-control-position">
                                                                                <i class="feather icon-user"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 label-control" for="cid">เลขที่ HN</label>
                                                                    <div class="col-md-9">
                                                                        <div class="position-relative has-icon-left controls">
                                                                            <input type="text" id="hn" class="form-control border-primary optional-hn"
                                                                                placeholder="เลขที่ HN" name="hn" data-validation-required-message="กรุณากรอกข้อมูลช่องนี้" required
                                                                                minlength="7" maxlength="7" aria-invalid="false">
                                                                            <div class="form-control-position">
                                                                                <i class="feather icon-user"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 label-control" for="gender">เพศ</label>
                                                                    <div class="col-md-9">
                                                                        <select class="select2 form-control" id="select2-array"
                                                                        name="gender" >
                                                                        <option value="1" >ชาย</option>
                                                                        <option value="2" >หญิง</option>
                                                                        </select>

                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 label-control" for="birthdate">วันเกิด</label>
                                                                    <div class="col-md-9">
                                                                        <input name="birthdate" class="form-control pickadate-months-year" data-validation-required-message="กรุณากรอกข้อมูลให้ครบถ้วน" required>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            {{-- <div class="form-group row">
                                                                <label class="col-md-3 label-control" for="age">อายุ</label>
                                                                <div class="col-md-9">
                                                                    <div class="position-relative has-icon-left controls">
                                                                        <input type="text" id="age" class="form-control" placeholder="อายุ" name="age"
                                                                    data-validation-required-message="กรุณากรอกข้อมูลช่องนี้" required
                                                                        aria-invalid="false">
                                                                        <div class="form-control-position">
                                                                            <i class="feather icon-user"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> --}}
                                                            <div class="form-group row">
                                                                <label class="col-md-3 label-control" for="kind_check_up">สังกัด</label>
                                                                <div class="col-md-9">

                                                                    <select class="form-control select2" name="kind_check_up" required>
                                                                        <option value="">สังกัด</option>
                                                                        @foreach ($kind_check_up_ as $roles)
                                                                            <option value="{{$roles->id}}" >{{$roles->name}}</option>

                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-3 label-control" for="department">ที่ทำงาน (ฝ่าย/แผนก/กอง)</label>
                                                                <div class="col-md-9">
                                                                    <div class="position-relative has-icon-left controls">
                                                                        <input type="text" id="department" class="form-control" placeholder="ที่ทำงาน" name="department"
                                                                        value="" data-validation-required-message="กรุณากรอกข้อมูลช่องนี้" required
                                                                        aria-invalid="false">

                                                                        <div class="form-control-position">
                                                                            <i class="feather icon-user"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-3 label-control" for="position">ตำแหน่ง</label>
                                                                <div class="col-md-9">
                                                                    <div class="position-relative has-icon-left controls">
                                                                        <input type="text" id="position" class="form-control" placeholder="ตำแหน่ง" name="position"

                                                                        data-validation-required-message="กรุณากรอกข้อมูลช่องนี้" required
                                                                        aria-invalid="false">
                                                                        <div class="form-control-position">
                                                                            <i class="feather icon-user"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-3 label-control" for="srg">ช่วยรักษาการ</label>
                                                                <div class="col-md-9">
                                                                    <div class="position-relative has-icon-left controls">
                                                                        <input type="text" id="srg" class="form-control" placeholder="ช่วยรักษาการ" name="srg"
                                                                         data-validation-required-message="กรุณากรอกข้อมูลช่องนี้"
                                                                        aria-invalid="false">
                                                                        <div class="form-control-position">
                                                                            <i class="feather icon-user"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-3 label-control" for="class">ประเภท</label>
                                                                <div class="col-md-9">
                                                                    <fieldset>
                                                                        <input type="radio" name="class" value="1" onclick="j10_2_2();">
                                                                        <label for="input-radio-11">ข้าราชการ</label>
                                                                    </fieldset>
                                                                    <fieldset>
                                                                        <input type="radio" name="class" value="2" onclick="j10_2_2();">
                                                                        <label for="input-radio-12">รัฐวิสาหกิจ</label>
                                                                    </fieldset>
                                                                    <fieldset>
                                                                        <input type="radio" name="class" value="3" onclick="j10_2_2();">
                                                                        <label for="input-radio-12">ประกันสังคม</label>
                                                                    </fieldset>
                                                                    <fieldset>
                                                                        <input type="radio" name="class" value="4" onclick="j10_2_2();">
                                                                        <label for="input-radio-12">สปสช.</label>
                                                                    </fieldset>
                                                                    <fieldset>
                                                                        <input type="radio" name="class" value="5" onclick="j10_2_1();">
                                                                        <label for="input-radio-12">อื่นๆ</label>
                                                                        <div id="div11" style="display:none;margin-bottom: .5rem;">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <fieldset>
                                                                                        <div class="input-group controls col-md-6">
                                                                                            <span class="input-group-text">(ระบุ)</span>
                                                                                            <input type="text" class="form-control" aria-label="" placeholder=""
                                                                                            name="class_d" id='class_d'>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-3 label-control" for="job_description">ลักษณะงานที่ทำเป็นส่วนใหญ่</label>
                                                                <div class="col-md-9">
                                                                    <fieldset>
                                                                        <input type="radio" name="job_description" value="งานเบา">
                                                                        <label for="input-radio-11">งานเบา (เคลื่อนไหวขณะทำงานเล็กน้อย เช่น งานสำนักงาน เดินเอกสารระยะสั้นในอาคาร)</label>
                                                                    </fieldset>
                                                                    <fieldset>
                                                                        <input type="radio" name="job_description" value="งานปานกลาง">
                                                                        <label for="input-radio-12">งานปานกลาง (เคลื่อนไหว/ออกแรงปานกลาง เช่น งานเดินเอกสารนอกอาคาร ขับรถโดยสารขนาดเล็ก)</label>
                                                                    </fieldset>
                                                                    <fieldset>
                                                                        <input type="radio" name="job_description" value="งานหนัก">
                                                                        <label for="input-radio-12">งานหนัก (เคลื่อนไหว/ออกแรงมาก เช่น งานกลางแจ้ง ขับรถขนาดใหญ่)</label>
                                                                    </fieldset>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-md-3 label-control" for="phonenumber">เบอร์โทรติดต่อ</label>
                                                                <div class="col-md-9">
                                                                    <div class="position-relative has-icon-left controls">
                                                                        <input type="text" id="phone-mask" class="form-control border-primary optional-tele-report" placeholder="เบอร์โทรติดต่อ" name="phonenumber"
                                                                      data-validation-required-message="กรุณากรอกข้อมูลช่องนี้"  required
                                                                        aria-invalid="false">
                                                                        <div class="form-control-position">
                                                                            <i class="feather icon-smartphone"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <hr>
                                            </fieldset>
                                            <!-- Step 2 -->
                                            <h6>ส่วนที่ 2 ข้อ 1</h6>
                                            <fieldset>
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="card-text">
                                                            <h4 class="form-section"><i class="feather icon-clipboard"></i>1. บิดา หรือ มารดา ของท่านมีประวัติการเจ็บป่วยด้วยโรคใดบ้าง</h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-body">

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group row">
                                                                <div class="col-md-12">
                                                                    <ul class="list-unstyled mb-0">
                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" name="a1[]" value="โรคเบาหวาน"
                                                                                    @if(is_array(old('a1')) && in_array('โรคเบาหวาน', old('a1'))) checked="checked" @endif
                                                                                    data-validation-required-message="กรุณาเลือกข้อมูลชุด นี้"/>
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">โรคเบาหวาน</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" name="a1[]" value="โรคความดันโลหิตสูง"
                                                                                    @if(is_array(old('a1')) && in_array('โรคความดันโลหิตสูง', old('a1'))) checked="checked" @endif
                                                                                    data-validation-required-message="กรุณาเลือกข้อมูลชุด นี้"/>
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">โรคความดันโลหิตสูง</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" name="a1[]" value="โรคหลอดเลือดหัวใจ"
                                                                                    @if(is_array(old('a1')) && in_array('โรคหลอดเลือดหัวใจ', old('a1'))) checked="checked" @endif
                                                                                    data-validation-required-message="กรุณาเลือกข้อมูลชุด นี้"/>
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">โรคหลอดเลือดหัวใจ</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" name="a1[]" value="โรคไตวายเรื้อรัง"
                                                                                    @if(is_array(old('a1')) && in_array('โรคไตวายเรื้อรัง', old('a1'))) checked="checked" @endif
                                                                                    data-validation-required-message="กรุณาเลือกข้อมูลชุด นี้"/>
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">โรคไตวายเรื้อรัง</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" name="a1[]" value="โรคหลอดเลือดสมอง"
                                                                                    @if(is_array(old('a1')) && in_array('โรคหลอดเลือดสมอง', old('a1'))) checked="checked" @endif
                                                                                    data-validation-required-message="กรุณาเลือกข้อมูลชุด นี้"/>
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">โรคหลอดเลือดสมอง(อัมพาต/อัมพฤกษ์)</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" name="a1[]" value="เสียชีวิตเฉียบพลันโดยไม่ทราบสาเหตุ"
                                                                                    @if(is_array(old('a1')) && in_array('เสียชีวิตเฉียบพลันโดยไม่ทราบสาเหตุ', old('a1'))) checked="checked" @endif
                                                                                    data-validation-required-message="กรุณาเลือกข้อมูลชุด นี้"/>
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">เสียชีวิตเฉียบพลันโดยไม่ทราบสาเหตุ</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input  type="checkbox" name="a1[]" value="อื่นๆ" id="a1" onclick="myFunctionA1()"
                                                                                    @if(is_array(old('a1')) && in_array('อื่นๆ', old('a1'))) checked="checked" @endif
                                                                                    data-validation-required-message="กรุณาเลือกข้อมูลชุด นี้"/>
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">อื่นๆ</span>

                                                                                </div>
                                                                                <div id="texta1" style="display:none" class="col-12">
                                                                                    <span class="">(โปรดระบุ)</span>
                                                                                    <input type="text" class="form-control" name="a1_d" id='a1_d' value="{{ old('a1_d') }}">
                                                                                </div>
                                                                            </fieldset>

                                                                        </li>

                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" name="a1[]" value="ไม่มี"
                                                                                    @if(is_array(old('a1')) && in_array('ไม่มี', old('a1'))) checked="checked" @endif
                                                                                    data-validation-required-message="กรุณาเลือกข้อมูลชุด นี้"/>
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">ไม่มี</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" name="a1[]" value="ไม่ทราบ"
                                                                                    @if(is_array(old('a1')) && in_array('ไม่ทราบ', old('a1'))) checked="checked" @endif
                                                                                    data-validation-required-message="กรุณาเลือกข้อมูลชุด นี้"/>
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">ไม่ทราบ</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            </fieldset>
                                            <h6>ส่วนที่ 2 ข้อ 2</h6>
                                            <fieldset>
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="card-text">
                                                            <h4 class="form-section mt-2"><i class="feather icon-clipboard"></i>2. <ins><span class="red">พี่น้อง</span></ins> (สายตรง) ของท่านมีประวัติการเจ็บป่วยด้วยโรคใดบ้าง</h4>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group row">
                                                                <div class="col-md-12">
                                                                    <ul class="list-unstyled mb-0">
                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" name="b2[]" value="โรคเบาหวาน"
                                                                                    @if(is_array(old('b2')) && in_array('โรคเบาหวาน', old('b2'))) checked="checked" @endif
                                                                                    data-validation-required-message="กรุณาเลือกข้อมูลชุด นี้"/>
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">โรคเบาหวาน</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" name="b2[]" value="โรคความดันโลหิตสูง"
                                                                                    @if(is_array(old('b2')) && in_array('โรคความดันโลหิตสูง', old('b2'))) checked="checked" @endif
                                                                                    data-validation-required-message="กรุณาเลือกข้อมูลชุด นี้"/>
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">โรคความดันโลหิตสูง</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" name="b2[]" value="โรคหลอดเลือดหัวใจ"
                                                                                    @if(is_array(old('b2')) && in_array('โรคหลอดเลือดหัวใจ', old('b2'))) checked="checked" @endif
                                                                                    data-validation-required-message="กรุณาเลือกข้อมูลชุด นี้"/>
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">โรคหลอดเลือดหัวใจ</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" name="b2[]" value="โรคไตวายเรื้อรัง"
                                                                                    @if(is_array(old('b2')) && in_array('โรคไตวายเรื้อรัง', old('b2'))) checked="checked" @endif
                                                                                    data-validation-required-message="กรุณาเลือกข้อมูลชุด นี้"/>
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">โรคไตวายเรื้อรัง</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" name="b2[]" value="โรคหลอดเลือดสมอง"
                                                                                    @if(is_array(old('b2')) && in_array('โรคหลอดเลือดสมอง', old('b2'))) checked="checked" @endif
                                                                                    data-validation-required-message="กรุณาเลือกข้อมูลชุด นี้"/>
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">โรคหลอดเลือดสมอง(อัมพาต/อัมพฤกษ์)</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" name="b2[]" value="เสียชีวิตเฉียบพลันโดยไม่ทราบสาเหตุ"
                                                                                    @if(is_array(old('b2')) && in_array('เสียชีวิตเฉียบพลันโดยไม่ทราบสาเหตุ', old('b2'))) checked="checked" @endif
                                                                                    data-validation-required-message="กรุณาเลือกข้อมูลชุด นี้"/>
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">เสียชีวิตเฉียบพลันโดยไม่ทราบสาเหตุ</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input id="b2" type="checkbox" name="b2[]" value="อื่นๆ" onclick="myFunctionB2()"
                                                                                    @if(is_array(old('b2')) && in_array('อื่นๆ', old('b2'))) checked="checked" @endif
                                                                                    data-validation-required-message="กรุณาเลือกข้อมูลชุด นี้"/>
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">อื่นๆ</span>

                                                                                </div>
                                                                                <div id="textb2" style="display:none" class="col-12">
                                                                                    <span class="">(โปรดระบุ)</span>
                                                                                    <input type="text" class="form-control" name="b2_d" id='b2_d' value="{{ old('b2_d') }}">
                                                                                </div>
                                                                            </fieldset>

                                                                        </li>

                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" name="b2[]" value="ไม่มี"
                                                                                    @if(is_array(old('b2')) && in_array('ไม่มี', old('b2'))) checked="checked" @endif
                                                                                    data-validation-required-message="กรุณาเลือกข้อมูลชุด นี้"/>
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">ไม่มี</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" name="b2[]" value="ไม่ทราบ"
                                                                                    @if(is_array(old('b2')) && in_array('ไม่ทราบ', old('b2'))) checked="checked" @endif
                                                                                    data-validation-required-message="กรุณาเลือกข้อมูลชุด นี้"/>
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">ไม่ทราบ</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            </fieldset>
                                            <h6>ส่วนที่ 2 ข้อ 3</h6>
                                            <fieldset>
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="card-text">
                                                            <h4 class="form-section mt-2"><i class="feather icon-clipboard"></i>3. ปัจจุบัน ท่านมีประวัติการเจ็บป่วยหรือต้องพบแพทย์ด้วยโรคต่อไปนี้หรือไม่</h4>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <div class="form-group row">
                                                                <label class="col-md-4 label-control text-left" for="first_name">3.1 โรคเบาหวาน(DM)</label>
                                                                    <div class="col-md-8">
                                                                        <ul class="list-unstyled mb-0">
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con">
                                                                                        <input type="radio" value="1" name="c3_1"
                                                                                        @if(old('c3_1') ==  "1") checked="checked" @endif >
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">ไม่มี</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con">
                                                                                        <input type="radio" value="2" name="c3_1"
                                                                                        @if(old('c3_1') ==  "2") checked="checked" @endif >
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">มีและรับประทานยา</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con">
                                                                                        <input type="radio" value="3" name="c3_1"
                                                                                        @if(old('c3_1') ==  "3") checked="checked" @endif >
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">มีแต่ไม่รับประทานยา</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                <label class="col-md-4 label-control text-left" for="c3_2">3.2 โรคความดันโลหิตสูง (HT)</label>
                                                                    <div class="col-md-8">
                                                                        <ul class="list-unstyled mb-0">
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con">
                                                                                        <input type="radio" value="1" name="c3_2"
                                                                                        @if(old('c3_2') ==  "1") checked="checked" @endif >
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">ไม่มี</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con">
                                                                                        <input type="radio" value="2" name="c3_2"
                                                                                        @if(old('c3_2') ==  "2") checked="checked" @endif >
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">มีและรับประทานยา</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con">
                                                                                        <input type="radio" value="3" name="c3_2"
                                                                                        @if(old('c3_2') ==  "3") checked="checked" @endif >
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">มีแต่ไม่รับประทานยา</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                <label class="col-md-4 label-control text-left" for="c3_3">2.3 โรคตับ</label>
                                                                    <div class="col-md-8">
                                                                        <ul class="list-unstyled mb-0">
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con">
                                                                                        <input type="radio" value="1" name="c3_3"
                                                                                        @if(old('c3_3') ==  "1") checked="checked" @endif >
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">ไม่มี</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con">
                                                                                        <input type="radio" value="2" name="c3_3"
                                                                                        @if(old('c3_3') ==  "2") checked="checked" @endif >
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">มีและรับประทานยา</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con">
                                                                                        <input type="radio" value="3" name="c3_3"
                                                                                        @if(old('c3_3') ==  "3") checked="checked" @endif >
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">มีแต่ไม่รับประทานยา</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                <label class="col-md-4 label-control text-left" for="c3_4">3.4 โรคอัมพาต</label>
                                                                    <div class="col-md-8">
                                                                        <ul class="list-unstyled mb-0">
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con">
                                                                                        <input type="radio" value="1" name="c3_4"
                                                                                        @if(old('c3_4') ==  "1") checked="checked" @endif >
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">ไม่มี</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con">
                                                                                        <input type="radio" value="2" name="c3_4"
                                                                                        @if(old('c3_4') ==  "2") checked="checked" @endif >
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">มีและรับประทานยา</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con">
                                                                                        <input type="radio" value="3" name="c3_4"
                                                                                        @if(old('c3_4') ==  "3") checked="checked" @endif >
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">มีแต่ไม่รับประทานยา</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                <label class="col-md-4 label-control text-left" for="c3_5">3.5 โรคหัวใจ</label>
                                                                    <div class="col-md-8">
                                                                        <ul class="list-unstyled mb-0">
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con">
                                                                                        <input type="radio" value="1" name="c3_5"
                                                                                        @if(old('c3_5') ==  "1") checked="checked" @endif >
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">ไม่มี</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con">
                                                                                        <input type="radio" value="2" name="c3_5"
                                                                                        @if(old('c3_5') ==  "2") checked="checked" @endif >
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">มีและรับประทานยา</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con">
                                                                                        <input type="radio" value="3" name="c3_5"
                                                                                        @if(old('c3_5') ==  "3") checked="checked" @endif >
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">มีแต่ไม่รับประทานยา</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                <label class="col-md-4 label-control text-left" for="c3_6">3.6  ไขมันในเลือดผิดปกติ</label>
                                                                    <div class="col-md-8">
                                                                        <ul class="list-unstyled mb-0">
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con">
                                                                                        <input type="radio" value="1" name="c3_6"
                                                                                        @if(old('c3_6') ==  "1") checked="checked" @endif >
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">ไม่มี</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con">
                                                                                        <input type="radio" value="2" name="c3_6"
                                                                                        @if(old('c3_6') ==  "2") checked="checked" @endif >
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">มีและรับประทานยา</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con">
                                                                                        <input type="radio" value="3" name="c3_6"
                                                                                        @if(old('c3_6') ==  "3") checked="checked" @endif >
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">มีแต่ไม่รับประทานยา</span>
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
                                                <hr>
                                            </fieldset>
                                            <h6>ส่วนที่ 2 ข้อ 4</h6>
                                            <fieldset>
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="card-text">
                                                            <h4 class="form-section mt-2"><i class="feather icon-clipboard"></i>4. ปัจจุบัน ท่านมีอาการผิดปกติอื่นๆ ที่ต้องพบแพทย์หรือไม่</h4>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-12 mb-1">
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="d-inline-block mr-2">
                                                                    <fieldset>
                                                                        <div class="vs-radio-con">
                                                                            <input type="radio" id="d4_1" value="1" name="d4" onclick="javascript:yesnoCheckd4();"
                                                                            @if(old('d4') ==  "1") checked="checked" @endif >
                                                                            <span class="vs-radio">
                                                                                <span class="vs-radio--border"></span>
                                                                                <span class="vs-radio--circle"></span>
                                                                            </span>
                                                                            <span class="">ไม่มี</span>
                                                                        </div>
                                                                    </fieldset>
                                                                </li>
                                                                <li class="d-inline-block mr-2">
                                                                    <fieldset>
                                                                        <div class="vs-radio-con">
                                                                            <input type="radio" id="d4_2" value="2" name="d4" onclick="javascript:yesnoCheckd4();"
                                                                            @if(old('d4') ==  "2") checked="checked" @endif >
                                                                            <span class="vs-radio">
                                                                                <span class="vs-radio--border"></span>
                                                                                <span class="vs-radio--circle"></span>
                                                                            </span>
                                                                            <span class="">มี</span>
                                                                        </div>
                                                                    </fieldset>
                                                                </li>
                                                                <div id="d4_d" style="display:none" class="col-12">
                                                                    <div class="col-md-6">
                                                                        <span class="input-group-text">โปรดระบุ</span>
                                                                        <input type="text" class="form-control"  name="d4_d" value="{{ old('d4_d') }}">
                                                                    </div>
                                                                </div>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            </fieldset>
                                            <h6>ส่วนที่ 2 ข้อ 5</h6>
                                            <fieldset>
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="card-text">
                                                            <h4 class="form-section mt-2"><i class="feather icon-clipboard"></i>5. การบริโภค ในช่วงระยะเวลา 1 เดือนที่ผ่านมา</h4>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                    <label class="col-md-6" for="5.1">5.1 ท่านรับประทานขนมหวาน/เครื่องดื่มที่มีส่วนผสมของน้ำตาล/ผลไม้รสหวานจัด</label>
                                                                        <div class="col-md-6">
                                                                            <ul class="list-unstyled mb-0">
                                                                                <li class="d-inline-block mr-2">
                                                                                    <fieldset>
                                                                                        <div class="vs-radio-con">
                                                                                            <input type="radio" value="1" name="e5_1"
                                                                                            @if(old('e5_1') ==  "1") checked="checked" @endif >
                                                                                            <span class="vs-radio">
                                                                                                <span class="vs-radio--border"></span>
                                                                                                <span class="vs-radio--circle"></span>
                                                                                            </span>
                                                                                            <span class="">ทุกวัน</span>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </li>
                                                                                <li class="d-inline-block mr-2">
                                                                                    <fieldset>
                                                                                        <div class="vs-radio-con">
                                                                                            <input type="radio" value="2" name="e5_1"
                                                                                            @if(old('e5_1') ==  "2") checked="checked" @endif >
                                                                                            <span class="vs-radio">
                                                                                                <span class="vs-radio--border"></span>
                                                                                                <span class="vs-radio--circle"></span>
                                                                                            </span>
                                                                                            <span class="">5-6 วันต่อสัปดาห์</span>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </li>
                                                                                <li class="d-inline-block mr-2">
                                                                                    <fieldset>
                                                                                        <div class="vs-radio-con">
                                                                                            <input type="radio" value="3" name="e5_1"
                                                                                            @if(old('e5_1') ==  "3") checked="checked" @endif >
                                                                                            <span class="vs-radio">
                                                                                                <span class="vs-radio--border"></span>
                                                                                                <span class="vs-radio--circle"></span>
                                                                                            </span>
                                                                                            <span class="">น้อยกว่า 5 วันต่อสัปดาห์</span>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </li>
                                                                                <li class="d-inline-block mr-2">
                                                                                    <fieldset>
                                                                                        <div class="vs-radio-con">
                                                                                            <input type="radio" value="4" name="e5_1"
                                                                                            @if(old('e5_1') ==  "4") checked="checked" @endif >
                                                                                            <span class="vs-radio">
                                                                                                <span class="vs-radio--border"></span>
                                                                                                <span class="vs-radio--circle"></span>
                                                                                            </span>
                                                                                            <span class="">ไม่เคยปฏิบัติ</span>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                    <label class="col-md-6 label-control text-left" for="5.2">5.2 ท่านรับประทานอาหารที่มีไขมันสูง เช่น ของทอด เบเกอรี่ พิซซ่า โดนัท เป็นต้น</label>
                                                                        <div class="col-md-6">
                                                                            <ul class="list-unstyled mb-0">
                                                                                <li class="d-inline-block mr-2">
                                                                                    <fieldset>
                                                                                        <div class="vs-radio-con">
                                                                                            <input type="radio" value="1" name="e5_2"
                                                                                            @if(old('e5_2') ==  "1") checked="checked" @endif >
                                                                                            <span class="vs-radio">
                                                                                                <span class="vs-radio--border"></span>
                                                                                                <span class="vs-radio--circle"></span>
                                                                                            </span>
                                                                                            <span class="">ทุกวัน</span>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </li>
                                                                                <li class="d-inline-block mr-2">
                                                                                    <fieldset>
                                                                                        <div class="vs-radio-con">
                                                                                            <input type="radio" value="2" name="e5_2"
                                                                                            @if(old('e5_2') ==  "2") checked="checked" @endif >
                                                                                            <span class="vs-radio">
                                                                                                <span class="vs-radio--border"></span>
                                                                                                <span class="vs-radio--circle"></span>
                                                                                            </span>
                                                                                            <span class="">5-6 วันต่อสัปดาห์</span>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </li>
                                                                                <li class="d-inline-block mr-2">
                                                                                    <fieldset>
                                                                                        <div class="vs-radio-con">
                                                                                            <input type="radio" value="3" name="e5_2"
                                                                                            @if(old('e5_2') ==  "3") checked="checked" @endif >
                                                                                            <span class="vs-radio">
                                                                                                <span class="vs-radio--border"></span>
                                                                                                <span class="vs-radio--circle"></span>
                                                                                            </span>
                                                                                            <span class="">น้อยกว่า 5 วันต่อสัปดาห์</span>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </li>
                                                                                <li class="d-inline-block mr-2">
                                                                                    <fieldset>
                                                                                        <div class="vs-radio-con">
                                                                                            <input type="radio" value="4" name="e5_2"
                                                                                            @if(old('e5_2') ==  "4") checked="checked" @endif >
                                                                                            <span class="vs-radio">
                                                                                                <span class="vs-radio--border"></span>
                                                                                                <span class="vs-radio--circle"></span>
                                                                                            </span>
                                                                                            <span class="">ไม่เคยปฏิบัติ</span>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                    <label class="col-md-6 label-control text-left" for="5.3">5.3 ท่านรับประทานอาหารที่มีรสเค็มจัดหรืออาหารหมักดอง</label>
                                                                        <div class="col-md-6">
                                                                            <ul class="list-unstyled mb-0">
                                                                                <li class="d-inline-block mr-2">
                                                                                    <fieldset>
                                                                                        <div class="vs-radio-con">
                                                                                            <input type="radio" value="1" name="e5_3"
                                                                                            @if(old('e5_3') ==  "1") checked="checked" @endif >
                                                                                            <span class="vs-radio">
                                                                                                <span class="vs-radio--border"></span>
                                                                                                <span class="vs-radio--circle"></span>
                                                                                            </span>
                                                                                            <span class="">ทุกวัน</span>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </li>
                                                                                <li class="d-inline-block mr-2">
                                                                                    <fieldset>
                                                                                        <div class="vs-radio-con">
                                                                                            <input type="radio" value="2" name="e5_3"
                                                                                            @if(old('e5_3') ==  "2") checked="checked" @endif >
                                                                                            <span class="vs-radio">
                                                                                                <span class="vs-radio--border"></span>
                                                                                                <span class="vs-radio--circle"></span>
                                                                                            </span>
                                                                                            <span class="">5-6 วันต่อสัปดาห์</span>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </li>
                                                                                <li class="d-inline-block mr-2">
                                                                                    <fieldset>
                                                                                        <div class="vs-radio-con">
                                                                                            <input type="radio" value="3" name="e5_3"
                                                                                            @if(old('e5_3') ==  "3") checked="checked" @endif >
                                                                                            <span class="vs-radio">
                                                                                                <span class="vs-radio--border"></span>
                                                                                                <span class="vs-radio--circle"></span>
                                                                                            </span>
                                                                                            <span class="">น้อยกว่า 5 วันต่อสัปดาห์</span>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </li>
                                                                                <li class="d-inline-block mr-2">
                                                                                    <fieldset>
                                                                                        <div class="vs-radio-con">
                                                                                            <input type="radio" value="4" name="e5_3"
                                                                                            @if(old('e5_3') ==  "4") checked="checked" @endif >
                                                                                            <span class="vs-radio">
                                                                                                <span class="vs-radio--border"></span>
                                                                                                <span class="vs-radio--circle"></span>
                                                                                            </span>
                                                                                            <span class="">ไม่เคยปฏิบัติ</span>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                    <label class="col-md-6 label-control text-left" for="5.4">5.4 ท่านรับประทานผักไม่น้อยกว่าครึ่งจานในมื้อหลัก 3 มื้อ (ปริมาณผักมากกว่าข้าวเมื่อดูด้วยสายตา)</label>
                                                                        <div class="col-md-6">
                                                                            <ul class="list-unstyled mb-0">
                                                                                <li class="d-inline-block mr-2">
                                                                                    <fieldset>
                                                                                        <div class="vs-radio-con">
                                                                                            <input type="radio" value="1" name="e5_4"
                                                                                            @if(old('e5_4') ==  "1") checked="checked" @endif >
                                                                                            <span class="vs-radio">
                                                                                                <span class="vs-radio--border"></span>
                                                                                                <span class="vs-radio--circle"></span>
                                                                                            </span>
                                                                                            <span class="">ทุกวัน</span>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </li>
                                                                                <li class="d-inline-block mr-2">
                                                                                    <fieldset>
                                                                                        <div class="vs-radio-con">
                                                                                            <input type="radio" value="2" name="e5_4"
                                                                                            @if(old('e5_4') ==  "2") checked="checked" @endif >
                                                                                            <span class="vs-radio">
                                                                                                <span class="vs-radio--border"></span>
                                                                                                <span class="vs-radio--circle"></span>
                                                                                            </span>
                                                                                            <span class="">5-6 วันต่อสัปดาห์</span>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </li>
                                                                                <li class="d-inline-block mr-2">
                                                                                    <fieldset>
                                                                                        <div class="vs-radio-con">
                                                                                            <input type="radio" value="3" name="e5_4"
                                                                                            @if(old('e5_4') ==  "3") checked="checked" @endif >
                                                                                            <span class="vs-radio">
                                                                                                <span class="vs-radio--border"></span>
                                                                                                <span class="vs-radio--circle"></span>
                                                                                            </span>
                                                                                            <span class="">น้อยกว่า 5 วันต่อสัปดาห์</span>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </li>
                                                                                <li class="d-inline-block mr-2">
                                                                                    <fieldset>
                                                                                        <div class="vs-radio-con">
                                                                                            <input type="radio" value="4" name="e5_4"
                                                                                            @if(old('e5_4') ==  "4") checked="checked" @endif >
                                                                                            <span class="vs-radio">
                                                                                                <span class="vs-radio--border"></span>
                                                                                                <span class="vs-radio--circle"></span>
                                                                                            </span>
                                                                                            <span class="">ไม่เคยปฏิบัติ</span>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                    <label class="col-md-6 label-control text-left" for="5.5">5.5 ท่านรับประทานผลไม้สดรสไม่หวานจัด ไม่น้อยกว่า 2 ส่วนต่อวัน (1 ส่วน เทียบเท่า มะละกอ ฝรั่ง 6-8 คำ หรือ กล้วยน้ำว้า 1 ผลเล็ก ส้ม 1 ผลใหญ่)</label>
                                                                        <div class="col-md-6">
                                                                            <ul class="list-unstyled mb-0">
                                                                                <li class="d-inline-block mr-2">
                                                                                    <fieldset>
                                                                                        <div class="vs-radio-con">
                                                                                            <input type="radio" value="1" name="e5_5"
                                                                                            @if(old('e5_5') ==  "1") checked="checked" @endif >
                                                                                            <span class="vs-radio">
                                                                                                <span class="vs-radio--border"></span>
                                                                                                <span class="vs-radio--circle"></span>
                                                                                            </span>
                                                                                            <span class="">ทุกวัน</span>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </li>
                                                                                <li class="d-inline-block mr-2">
                                                                                    <fieldset>
                                                                                        <div class="vs-radio-con">
                                                                                            <input type="radio" value="2" name="e5_5"
                                                                                            @if(old('e5_5') ==  "2") checked="checked" @endif >
                                                                                            <span class="vs-radio">
                                                                                                <span class="vs-radio--border"></span>
                                                                                                <span class="vs-radio--circle"></span>
                                                                                            </span>
                                                                                            <span class="">5-6 วันต่อสัปดาห์</span>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </li>
                                                                                <li class="d-inline-block mr-2">
                                                                                    <fieldset>
                                                                                        <div class="vs-radio-con">
                                                                                            <input type="radio" value="3" name="e5_5"
                                                                                            @if(old('e5_5') ==  "3") checked="checked" @endif >
                                                                                            <span class="vs-radio">
                                                                                                <span class="vs-radio--border"></span>
                                                                                                <span class="vs-radio--circle"></span>
                                                                                            </span>
                                                                                            <span class="">น้อยกว่า 5 วันต่อสัปดาห์</span>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </li>
                                                                                <li class="d-inline-block mr-2">
                                                                                    <fieldset>
                                                                                        <div class="vs-radio-con">
                                                                                            <input type="radio" value="4" name="e5_5"
                                                                                            @if(old('e5_5') ==  "4") checked="checked" @endif >
                                                                                            <span class="vs-radio">
                                                                                                <span class="vs-radio--border"></span>
                                                                                                <span class="vs-radio--circle"></span>
                                                                                            </span>
                                                                                            <span class="">ไม่เคยปฏิบัติ</span>
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
                                                <hr>
                                            </fieldset>
                                            <h6>ส่วนที่ 2 ข้อ 6</h6>
                                            <fieldset>
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="card-text">
                                                            <h4 class="form-section mt-2"><i class="feather icon-clipboard"></i>6. โดยปกติใน 1 สัปดาห์ ท่านมีกิจกรรมทางกาย รวมกันทุกกิจกรรมคิดเป็นระยะเวลานานเท่าใด (กิจกรรมทางกาย หมายถึง การเคลื่อนไหวร่างกายจากการทำกิจกรรมต่างๆ ในชีวิตประจำวัน ที่ทำให้รู้สึกเหนื่อยพอสมควร เช่น เดินเร็วๆ เวลารีบๆ เดินขึ้นบันได ล้างรถ ยกของหนัก รวมถึงการออกกำลังกาย หรือ การเล่นกีฬา</h4>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="d-inline-block mr-2">
                                                                    <fieldset>
                                                                        <div class="vs-radio-con">
                                                                            <input type="radio" value="1" name="f6"
                                                                            @if(old('f6') ==  "1") checked="checked" @endif >
                                                                            <span class="vs-radio">
                                                                                <span class="vs-radio--border"></span>
                                                                                <span class="vs-radio--circle"></span>
                                                                            </span>
                                                                            <span class="">น้อยกว่า 150 นาที (หรือ 2 ชั่วโมงครึ่ง) ต่อสัปดาห์ หรือ โดยเฉลี่ยน้อยกว่า 20 นาทีต่อวัน</span>
                                                                        </div>
                                                                    </fieldset>
                                                                </li>
                                                                <li class="d-inline-block mr-2">
                                                                    <fieldset>
                                                                        <div class="vs-radio-con">
                                                                            <input type="radio" value="2" name="f6"
                                                                            @if(old('f6') ==  "2") checked="checked" @endif >
                                                                            <span class="vs-radio">
                                                                                <span class="vs-radio--border"></span>
                                                                                <span class="vs-radio--circle"></span>
                                                                            </span>
                                                                            <span class="">ตั้งแต่ 150 นาที (หรือ 2 ชั่วโมงครึ่ง) ต่อสัปดาห์ขึ้นไป หรือ โดยเฉลี่ยมากกว่า 20 นาทีต่อวันขึ้นไป</span>
                                                                        </div>
                                                                    </fieldset>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            </fieldset>
                                            <h6>ส่วนที่ 2 ข้อ 7</h6>
                                            <fieldset>
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="card-text">
                                                            <h4 class="form-section mt-2"><i class="feather icon-clipboard"></i>7. การสูบบุหรี่ (รวมถึงไปป์/ซิการ์/ยาเส้นมวนเอง/บุหรี่ไฟฟ้า)</h4>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="d-inline-block mr-2">
                                                                    <fieldset>
                                                                        <div class="vs-radio-con">
                                                                            <input type="radio" value="1" name="g7" onclick="show3();"
                                                                            @if(old('g7') ==  "1") checked="checked" @endif >
                                                                            <span class="vs-radio">
                                                                                <span class="vs-radio--border"></span>
                                                                                <span class="vs-radio--circle"></span>
                                                                            </span>
                                                                            <span class="">ไม่เคยสูบเลย</span>
                                                                        </div>
                                                                    </fieldset>
                                                                </li>
                                                                <li class="d-inline-block mr-2">
                                                                    <fieldset>
                                                                        <div class="vs-radio-con">
                                                                            <input type="radio" value="2" name="g7" onclick="show2();"
                                                                            @if(old('g7') ==  "2") checked="checked" @endif >
                                                                            <span class="vs-radio">
                                                                                <span class="vs-radio--border"></span>
                                                                                <span class="vs-radio--circle"></span>
                                                                            </span>
                                                                            <span class="">เคยสูบแต่เลิกแล้ว</span>
                                                                        </div>
                                                                    </fieldset>
                                                                </li>
                                                                <div id="div1" style="display:none;margin-bottom: .5rem;">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <fieldset>
                                                                                <div class="input-group controls col-md-4">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text">(กรุณาระบุ)</span>
                                                                                    </div>
                                                                                    <input type="text" class="form-control" aria-label="" placeholder=""
                                                                                        data-validation-containsnumber-regex="(\d)+"
                                                                                        data-validation-containsnumber-message="กรุกรุณากรอกตัวเลขเท่านั้น"
                                                                                        name="g7_d1"  value="{{ old('g7_d1') }}">
                                                                                    <div class="input-group-append">
                                                                                        <span class="input-group-text">ปี</span>
                                                                                    </div>
                                                                                </div>
                                                                            </fieldset>

                                                                            <div class="row">
                                                                                <div class="col-md-12 mt-1" style="margin-left:15px;">

                                                                                    <ul class="list-unstyled mb-0">
                                                                                        <li class="d-inline-block mr-2">
                                                                                            <fieldset>
                                                                                                <div class="vs-radio-con">
                                                                                                    <input type="radio" value="1" name="g7_d2" onclick="show6();"
                                                                                                    @if(old('g7_d2') ==  "1") checked="checked" @endif >
                                                                                                    <span class="vs-radio">
                                                                                                        <span class="vs-radio--border"></span>
                                                                                                        <span class="vs-radio--circle"></span>
                                                                                                    </span>
                                                                                                    <span class="">ไม่เคยสูบเป็นประจำ</span>
                                                                                                </div>
                                                                                            </fieldset>
                                                                                        </li>
                                                                                        <li class="d-inline-block mr-2">
                                                                                            <fieldset>
                                                                                                <div class="vs-radio-con">
                                                                                                    <input type="radio" value="2" name="g7_d2" onclick="show5();"
                                                                                                    @if(old('g7_d2') ==  "2") checked="checked" @endif >
                                                                                                    <span class="vs-radio">
                                                                                                        <span class="vs-radio--border"></span>
                                                                                                        <span class="vs-radio--circle"></span>
                                                                                                    </span>
                                                                                                    <span class="">เคยสูบเป็นประจำ</span>
                                                                                                </div>
                                                                                            </fieldset>
                                                                                        </li>

                                                                                    </ul>

                                                                                    <div id="div6" class="input-group" style="display:none; margin-bottom: .5rem;"  >
                                                                                        <div class="row">
                                                                                            <div class="col-md-4">
                                                                                            <fieldset>
                                                                                                <div class="input-group controls">
                                                                                                    <div class="input-group-prepend">
                                                                                                        <span class="input-group-text">เริ่มสูบตั้งแต่อายุ</span>
                                                                                                    </div>
                                                                                                    <input type="text" class="form-control" data-validation-containsnumber-regex="(\d)+"
                                                                                                    data-validation-containsnumber-message="กรุกรุณากรอกตัวเลขเท่านั้น"
                                                                                                    name="g7_d3"  value="{{ old('g7_d3') }}">
                                                                                                    <div class="input-group-append">
                                                                                                        <span class="input-group-text">ปี</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                </fieldset>
                                                                                            </div>
                                                                                            <div class="col-md-4">
                                                                                            <fieldset>
                                                                                                <div class="input-group controls">
                                                                                                    <div class="input-group-prepend">
                                                                                                        <span class="input-group-text">เลิกสูบตั้งแต่อายุ</span>
                                                                                                    </div>
                                                                                                    <input type="text" class="form-control" data-validation-containsnumber-regex="(\d)+"
                                                                                                    data-validation-containsnumber-message="กรุกรุณากรอกตัวเลขเท่านั้น"
                                                                                                    name="g7_d4"  value="{{ old('g7_d4') }}">
                                                                                                    <div class="input-group-append">
                                                                                                        <span class="input-group-text">ปี</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                </fieldset>
                                                                                            </div>
                                                                                            <div class="col-md-4">
                                                                                            <fieldset>
                                                                                                <div class="input-group controls">
                                                                                                    <div class="input-group-prepend">
                                                                                                        <span class="input-group-text">ช่วงที่สูบ ท่านสูบวันละ</span>
                                                                                                    </div>
                                                                                                    <input type="text" class="form-control" data-validation-containsnumber-regex="(\d)+"
                                                                                                    data-validation-containsnumber-message="กรุกรุณากรอกตัวเลขเท่านั้น"
                                                                                                    name="g7_d5"  value="{{ old('g7_d5') }}">
                                                                                                    <div class="input-group-append">
                                                                                                        <span class="input-group-text">ม้วน</span>
                                                                                                    </div>
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

                                                                <li class="d-inline-block mr-2">
                                                                    <fieldset>
                                                                        <div class="vs-radio-con">
                                                                            <input type="radio" value="3" name="g7" onclick="show1();"
                                                                            @if(old('g7') ==  "3") checked="checked" @endif >
                                                                            <span class="vs-radio">
                                                                                <span class="vs-radio--border"></span>
                                                                                <span class="vs-radio--circle"></span>
                                                                            </span>
                                                                            <span class="">ยังสูบอยู่</span>
                                                                        </div>
                                                                    </fieldset>
                                                                </li>
                                                                <div id="div2" class="input-group" style="display:none; margin-bottom: .5rem;"  >
                                                                    <fieldset>
                                                                        <div class="input-group controls col-md-4">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text">สูบวันละ</span>
                                                                            </div>
                                                                            <input type="text" class="form-control" data-validation-containsnumber-regex="(\d)+"
                                                                                data-validation-containsnumber-message="กรุกรุณากรอกตัวเลขเท่านั้น"
                                                                                name="g7_d6"  value="{{ old('g7_d6') }}">
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text">ม้วน</span>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            </fieldset>
                                            <h6>ส่วนที่ 2 ข้อ 8</h6>
                                            <fieldset>
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="card-text">
                                                            <h4 class="form-section mt-2"><i class="feather icon-clipboard"></i>8. ในระยะเวลา 12 เดือน ที่ผ่านมา ท่านดื่มเครื่องดื่มแอลกอฮอล์อย่างน้อย 1 ดื่ม (เช่น เบียร์ 1 แก้ว/กระป๋อง, ไวน์ 1 แก้ว หรือ 5 ออนซ์, เหล้า 1 เป๊ก)</h4>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="col-md-12">
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block mr-2">
                                                                        <fieldset>
                                                                            <div class="vs-radio-con">
                                                                                <input type="radio" value="1" name="h8"
                                                                                @if(old('h8') ==  "1") checked="checked" @endif >
                                                                                <span class="vs-radio">
                                                                                    <span class="vs-radio--border"></span>
                                                                                    <span class="vs-radio--circle"></span>
                                                                                </span>
                                                                                <span class="">ทุกวัน</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                    <li class="d-inline-block mr-2">
                                                                        <fieldset>
                                                                            <div class="vs-radio-con">
                                                                                <input type="radio" value="2" name="h8"
                                                                                @if(old('h8') ==  "2") checked="checked" @endif >
                                                                                <span class="vs-radio">
                                                                                    <span class="vs-radio--border"></span>
                                                                                    <span class="vs-radio--circle"></span>
                                                                                </span>
                                                                                <span class="">3-4 ครั้งต่อสัปดาห์</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                    <li class="d-inline-block mr-2">
                                                                        <fieldset>
                                                                            <div class="vs-radio-con">
                                                                                <input type="radio" value="3" name="h8"
                                                                                @if(old('h8') ==  "3") checked="checked" @endif >
                                                                                <span class="vs-radio">
                                                                                    <span class="vs-radio--border"></span>
                                                                                    <span class="vs-radio--circle"></span>
                                                                                </span>
                                                                                <span class="">สัปดาห์ละครั้ง</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                    <li class="d-inline-block mr-2">
                                                                        <fieldset>
                                                                            <div class="vs-radio-con">
                                                                                <input type="radio" value="4" name="h8"
                                                                                @if(old('h8') ==  "4") checked="checked" @endif >
                                                                                <span class="vs-radio">
                                                                                    <span class="vs-radio--border"></span>
                                                                                    <span class="vs-radio--circle"></span>
                                                                                </span>
                                                                                <span class="">เดือนละครั้ง</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                    <li class="d-inline-block mr-2">
                                                                        <fieldset>
                                                                            <div class="vs-radio-con">
                                                                                <input type="radio" value="5" name="h8"
                                                                                @if(old('h8') ==  "5") checked="checked" @endif >
                                                                                <span class="vs-radio">
                                                                                    <span class="vs-radio--border"></span>
                                                                                    <span class="vs-radio--circle"></span>
                                                                                </span>
                                                                                <span class="">1 หรือ 2 ครั้ง ในปีที่ผ่านมา</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                    <li class="d-inline-block mr-2">
                                                                        <fieldset>
                                                                            <div class="vs-radio-con">
                                                                                <input type="radio" value="6" name="h8"
                                                                                @if(old('h8') ==  "6") checked="checked" @endif >
                                                                                <span class="vs-radio">
                                                                                    <span class="vs-radio--border"></span>
                                                                                    <span class="vs-radio--circle"></span>
                                                                                </span>
                                                                                <span class="">ไม่ดื่มเลยในชีวิต</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            </fieldset>
                                            <h6>ส่วนที่ 2 ข้อ 9</h6>
                                            <fieldset>
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="card-text">
                                                            <h4 class="form-section mt-2"><i class="feather icon-clipboard"></i>9. ท่านมีอาการหรือความรู้สึกที่เกิดในระยะ 2-4 สัปดาห์ มากน้อยเพียงใด</h4>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="table-responsive">
                                                            <div class="row skin skin-square">
                                                                <table class="table table-bordered mb-0">
                                                                    <tbody>
                                                                        <tr class="h5 text-bold-600">
                                                                            <td class="text-center">อาการหรือความรู้สึก</td>
                                                                            <td class="width-125 text-center">แทบไม่มี</td>
                                                                            <td class="width-125 text-center">เป็นบางครั้ง</td>
                                                                            <td class="width-125 text-center">บ่อยครั้ง</td>
                                                                            <td class="width-125 text-center">เป็นประจำ</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>9.1 มีปัญหาการนอน นอนไม่หลับหรือนอนมาก</td>
                                                                            <td>
                                                                                <fieldset class="text-center">
                                                                                    <input name="i9_1" value="0" type="radio"
                                                                                    @if(old('i9_1') ==  "0") checked="checked" @endif  />
                                                                                </fieldset>
                                                                            </td>
                                                                            <td>
                                                                                <fieldset class="text-center">
                                                                                    <input name="i9_1" value="1" type="radio"
                                                                                    @if(old('i9_1') ==  "1") checked="checked" @endif  />
                                                                                </fieldset>
                                                                            </td>
                                                                            <td>
                                                                                <fieldset class="text-center">
                                                                                    <input name="i9_1" value="2" type="radio"
                                                                                    @if(old('i9_1') ==  "2") checked="checked" @endif  />
                                                                                </fieldset>
                                                                            </td>
                                                                            <td>
                                                                                <fieldset class="text-center">
                                                                                    <input name="i9_1" value="3" type="radio"
                                                                                    @if(old('i9_1') ==  "3") checked="checked" @endif  />
                                                                                </fieldset>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>9.2 มีสมาธิน้อยลง</td>
                                                                            <td>
                                                                                <fieldset class="text-center">
                                                                                    <input name="i9_2" value="0" type="radio"
                                                                                    @if(old('i9_2') ==  "0") checked="checked" @endif  />
                                                                                </fieldset>
                                                                            </td>
                                                                            <td>
                                                                                <fieldset class="text-center">
                                                                                    <input name="i9_2" value="1" type="radio"
                                                                                    @if(old('i9_2') ==  "1") checked="checked" @endif  />
                                                                                </fieldset>
                                                                            </td>
                                                                            <td>
                                                                                <fieldset class="text-center">
                                                                                    <input name="i9_2" value="2" type="radio"
                                                                                    @if(old('i9_2') ==  "2") checked="checked" @endif  />
                                                                                </fieldset>
                                                                            </td>
                                                                            <td>
                                                                                <fieldset class="text-center">
                                                                                    <input name="i9_2" value="3" type="radio"
                                                                                    @if(old('i9_2') ==  "3") checked="checked" @endif  />
                                                                                </fieldset>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>9.3 หงุดหงิด/กระวนกระวาย/ว้าวุ่นใจ</td>
                                                                            <td>
                                                                                <fieldset class="text-center">
                                                                                    <input name="i9_3" value="0" type="radio"
                                                                                    @if(old('i9_3') ==  "0") checked="checked" @endif  />
                                                                                </fieldset>
                                                                            </td>
                                                                            <td>
                                                                                <fieldset class="text-center">
                                                                                    <input name="i9_3" value="1" type="radio"
                                                                                    @if(old('i9_3') ==  "1") checked="checked" @endif  />
                                                                                </fieldset>
                                                                            </td>
                                                                            <td>
                                                                                <fieldset class="text-center">
                                                                                    <input name="i9_3" value="2" type="radio"
                                                                                    @if(old('i9_3') ==  "2") checked="checked" @endif  />
                                                                                </fieldset>
                                                                            </td>
                                                                            <td>
                                                                            <fieldset class="text-center">
                                                                                <input name="i9_3" value="3" type="radio"
                                                                                @if(old('i9_3') ==  "3") checked="checked" @endif  />
                                                                            </fieldset>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>9.4 รู้สึกเบื่อ เซ็ง</td>
                                                                            <td>
                                                                                <fieldset class="text-center">
                                                                                    <input name="i9_4" value="0" type="radio"
                                                                                    @if(old('i9_4') ==  "0") checked="checked" @endif  />
                                                                                </fieldset>
                                                                            </td>
                                                                            <td>
                                                                                <fieldset class="text-center">
                                                                                    <input name="i9_4" value="1" type="radio"
                                                                                    @if(old('i9_4') ==  "1") checked="checked" @endif  />
                                                                                </fieldset>
                                                                            </td>
                                                                            <td>
                                                                                <fieldset class="text-center">
                                                                                    <input name="i9_4" value="2" type="radio"
                                                                                    @if(old('i9_4') ==  "2") checked="checked" @endif  />
                                                                                </fieldset>
                                                                            </td>
                                                                            <td>
                                                                                <fieldset class="text-center">
                                                                                    <input name="i9_4" value="3" type="radio"
                                                                                    @if(old('i9_4') ==  "3") checked="checked" @endif  />
                                                                                </fieldset>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>9.5 ไม่อยากพบปะผู้คน</td>
                                                                            <td>
                                                                                <fieldset class="text-center">
                                                                                    <input name="i9_5" value="0" type="radio"
                                                                                    @if(old('i9_5') ==  "0") checked="checked" @endif  />
                                                                                </fieldset>
                                                                            </td>
                                                                            <td>
                                                                                <fieldset class="text-center">
                                                                                    <input name="i9_5" value="1" type="radio"
                                                                                    @if(old('i9_5') ==  "1") checked="checked" @endif  />
                                                                                </fieldset>
                                                                            </td>
                                                                            <td>
                                                                                <fieldset class="text-center">
                                                                                    <input name="i9_5" value="2" type="radio"
                                                                                    @if(old('i9_5') ==  "2") checked="checked" @endif  />
                                                                                </fieldset>
                                                                            </td>
                                                                            <td>
                                                                                <fieldset class="text-center">
                                                                                    <input name="i9_5" value="3" type="radio"
                                                                                    @if(old('i9_5') ==  "3") checked="checked" @endif  />
                                                                                </fieldset>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            </fieldset>
                                            <h6>ส่วนที่ 2 ข้อ 10</h6>
                                            <fieldset>
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="card-text">
                                                            <h4 class="form-section mt-2"><i class="feather icon-clipboard"></i>10. ใน 2 สัปดาห์ที่ผ่านมา รวมวันนี้ ท่านรู้สึก หกหู่ เศร้า ท้อแท้ สิ้นหวัง หรือไม่</h4>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="d-inline-block mr-2">
                                                                    <fieldset>
                                                                        <div class="vs-radio-con">
                                                                            <input type="radio" value="1" name="j10"
                                                                            @if(old('j10') ==  "1") checked="checked" @endif >
                                                                            <span class="vs-radio">
                                                                                <span class="vs-radio--border"></span>
                                                                                <span class="vs-radio--circle"></span>
                                                                            </span>
                                                                            <span class="">ไม่มี</span>
                                                                        </div>
                                                                    </fieldset>
                                                                </li>
                                                                <li class="d-inline-block mr-2">
                                                                    <fieldset>
                                                                        <div class="vs-radio-con">
                                                                            <input type="radio" value="2" name="j10"
                                                                            @if(old('j10') ==  "2") checked="checked" @endif >
                                                                            <span class="vs-radio">
                                                                                <span class="vs-radio--border"></span>
                                                                                <span class="vs-radio--circle"></span>
                                                                            </span>
                                                                            <span class="">มี</span>
                                                                        </div>
                                                                    </fieldset>
                                                                </li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            </fieldset>
                                            <h6>ส่วนที่ 2 ข้อ 11</h6>
                                            <fieldset>
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="card-text">
                                                            <h4 class="form-section mt-2"><i class="feather icon-clipboard"></i>11. ใน 2 สัปดาห์ที่ผ่านมา รวมวันนี้ ท่านรู้สึก เบื่อ ทำอะไรก็ไม่เพลิดเพลิน หรือไม่</h4>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="d-inline-block mr-2">
                                                                    <fieldset>
                                                                        <div class="vs-radio-con">
                                                                            <input type="radio" value="1" name="k11"
                                                                            @if(old('k11') ==  "1") checked="checked" @endif >
                                                                            <span class="vs-radio">
                                                                                <span class="vs-radio--border"></span>
                                                                                <span class="vs-radio--circle"></span>
                                                                            </span>
                                                                            <span class="">ไม่มี</span>
                                                                        </div>
                                                                    </fieldset>
                                                                </li>
                                                                <li class="d-inline-block mr-2">
                                                                    <fieldset>
                                                                        <div class="vs-radio-con">
                                                                            <input type="radio" value="2" name="k11"
                                                                            @if(old('k11') ==  "2") checked="checked" @endif >
                                                                            <span class="vs-radio">
                                                                                <span class="vs-radio--border"></span>
                                                                                <span class="vs-radio--circle"></span>
                                                                            </span>
                                                                            <span class="">มี</span>
                                                                        </div>
                                                                    </fieldset>
                                                                </li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            </fieldset>
                                            <h6>ส่วนที่ 2 ข้อ 12</h6>
                                            <fieldset>
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="card-text">
                                                            <h4 class="form-section mt-2"><i class="feather icon-clipboard"></i>12. ประวัติโรคประจำตัว</h4>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group row">
                                                                <div class="col-md-12">
                                                                    <ul class="list-unstyled mb-0">
                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" name="l12[]" value="1"
                                                                                    @if(is_array(old('l12')) && in_array('1', old('l12'))) checked="checked" @endif
                                                                                    data-validation-required-message="กรุณาเลือกข้อมูลชุด นี้"/>
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">โรคความดันโลหิตสูง</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" name="l12[]" value="2"
                                                                                    @if(is_array(old('l12')) && in_array('2', old('l12'))) checked="checked" @endif
                                                                                    data-validation-required-message="กรุณาเลือกข้อมูลชุด นี้"/>
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">โรคเบาหวาน</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" name="l12[]" value="3"
                                                                                    @if(is_array(old('l12')) && in_array('3', old('l12'))) checked="checked" @endif
                                                                                    data-validation-required-message="กรุณาเลือกข้อมูลชุด นี้"/>
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">โรคหัวใจและหลอดเลือด</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" name="l12[]" value="4"
                                                                                    @if(is_array(old('l12')) && in_array('4', old('l12'))) checked="checked" @endif
                                                                                    data-validation-required-message="กรุณาเลือกข้อมูลชุด นี้"/>
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">โรคไขมันโลหิตสูง</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" name="l12[]" onclick="myFunction()" id="l12" value="5"
                                                                                    @if(is_array(old('l12')) && in_array('5', old('l12'))) checked="checked" @endif
                                                                                    data-validation-required-message="กรุณาเลือกข้อมูลชุด นี้"/>
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">โรคอื่น ๆ</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                        <div id="text12" style="display:none" >
                                                                            <label class="d-inline-block" >
                                                                                <div class="input-group" style="margin-right:35px;">
                                                                                    <span class="input-group-text">(ระบุ)</span>
                                                                                    <input type="text" class="form-control" aria-label="" placeholder=""
                                                                                            name="l12_d" id='l12_d' value="{{ old('l12_d') }}">
                                                                                </div>
                                                                            </label>
                                                                        </div>
                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" name="l12[]" onclick="myFunction()" value="0"
                                                                                    @if(is_array(old('l12')) && in_array('0', old('l12'))) checked="checked" @endif
                                                                                    data-validation-required-message="กรุณาเลือกข้อมูลชุด นี้"/>
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">ไม่มีโรคประจำตัว</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            </fieldset>
                                            <h6>ส่วนที่ 2 ข้อ 13</h6>
                                            <fieldset>
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="card-text">
                                                            <h4 class="form-section mt-2"><i class="feather icon-clipboard"></i>13. พฤติกรรมการดำเนินชีวิตที่มีผบต่อความเสี่ยงเป็นโรค</h4>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-12 mb-1">
                                                            <label><strong>การสูบบุหรี่</strong></label>
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="d-inline-block mr-2">
                                                                    <fieldset>
                                                                        <div class="vs-radio-con">
                                                                            <input type="radio" value="0" name="m13_1"
                                                                            @if(old('m13_1') ==  "0") checked="checked" @endif >
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
                                                                            <input type="radio" value="1" name="m13_1"
                                                                            @if(old('m13_1') ==  "1") checked="checked" @endif >
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
                                                                            <input type="radio" value="2" name="m13_1"
                                                                            @if(old('m13_1') ==  "2") checked="checked" @endif >
                                                                            <span class="vs-radio">
                                                                                <span class="vs-radio--border"></span>
                                                                                <span class="vs-radio--circle"></span>
                                                                            </span>
                                                                            <span class="">สูบเป็นครั้งคราว</span>
                                                                        </div>
                                                                    </fieldset>
                                                                </li>
                                                                <li class="d-inline-block mr-2">
                                                                    <fieldset>
                                                                        <div class="vs-radio-con">
                                                                            <input type="radio" value="3" name="m13_1"
                                                                            @if(old('m13_1') ==  "3") checked="checked" @endif >
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
                                                        <div class="col-md-12 mb-1">
                                                            <label><strong>การดื่มแอลกอฮอล์</strong></label>
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="d-inline-block mr-2">
                                                                    <fieldset>
                                                                        <div class="vs-radio-con">
                                                                            <input type="radio" value="0" name="m13_2"
                                                                            @if(old('m13_2') ==  "0") checked="checked" @endif >
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
                                                                            <input type="radio" value="1" name="m13_2"
                                                                            @if(old('m13_2') ==  "1") checked="checked" @endif >
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
                                                                            <input type="radio" value="2" name="m13_2"
                                                                            @if(old('m13_2') ==  "2") checked="checked" @endif >
                                                                            <span class="vs-radio">
                                                                                <span class="vs-radio--border"></span>
                                                                                <span class="vs-radio--circle"></span>
                                                                            </span>
                                                                            <span class="">ดื่มเป็นครั้งคราว</span>
                                                                        </div>
                                                                    </fieldset>
                                                                </li>
                                                                <li class="d-inline-block mr-2">
                                                                    <fieldset>
                                                                        <div class="vs-radio-con">
                                                                            <input type="radio" value="3" name="m13_2"
                                                                            @if(old('m13_2') ==  "3") checked="checked" @endif >
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
                                                        <div class="col-md-12 mb-1">
                                                            <label><strong>การออกกำลังกาย</strong></label>
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="d-inline-block mr-2">
                                                                    <fieldset>
                                                                        <div class="vs-radio-con">
                                                                            <input type="radio" value="0" name="m13_3"
                                                                            @if(old('m13_3') ==  "0") checked="checked" @endif >
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
                                                                            <input type="radio" value="1" name="m13_3"
                                                                            @if(old('m13_3') ==  "1") checked="checked" @endif >
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
                                                                            <input type="radio" value="2" name="m13_3"
                                                                            @if(old('m13_3') ==  "2") checked="checked" @endif >
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
                                                <hr>
                                            </fieldset>
                                        </form>

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

/// checkbox

function myFunctionA1() {
  // Get the checkbox
  var checkBox = document.getElementById("a1");
  // Get the output text
  var text12 = document.getElementById("texta1");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    texta1.style.display = "block";
  } else {
    texta1.style.display = "none";
  }
}

function myFunctionB2() {
  // Get the checkbox
  var checkBox = document.getElementById("b2");
  // Get the output text
  var text12 = document.getElementById("textb2");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    textb2.style.display = "block";
  } else {
    textb2.style.display = "none";
  }
}

/// radio

function yesnoCheckd4() {
    if (document.getElementById('d4_2').checked) {
        document.getElementById('d4_d').style.display = 'block';
    }
    else document.getElementById('d4_d').style.display = 'none';

}


function show1(){
  document.getElementById('div1').style.display ='none';
  document.getElementById('div2').style.display = 'block';
}
function show2(){
  document.getElementById('div1').style.display = 'block';
  document.getElementById('div2').style.display = 'none';
}
function show3(){
  document.getElementById('div1').style.display = 'none';
  document.getElementById('div2').style.display = 'none';
}
function f51(){
  document.getElementById('div5').style.display = 'block';
}
function 	f52(){
  document.getElementById('div5').style.display = 'none';
}
function 	f53(){
  document.getElementById('div5').style.display = 'none';
}
function 	j10_2_1(){
  document.getElementById('div11').style.display = 'block';
}
function 	j10_2_2(){
  document.getElementById('div11').style.display = 'none';
}
function show5(){
  document.getElementById('div6').style.display = 'block';
}
function 	show6(){
  document.getElementById('div6').style.display = 'none';
}
</script>

{{-- คำนวณ BMI --}}
<script type="text/javascript">

  function sum() {
        var t = 100;
        var txtFirstNumberValue = document.getElementById('weight').value;
        var txtSecondNumberValue = document.getElementById('height').value;
        var result1 = parseInt(txtSecondNumberValue) / t;
        var result = parseInt(txtFirstNumberValue) / ( result1 * result1 );
        if (!isNaN(result)) {
           document.getElementById('BMI').value = result;
        }
      }
</script>
<script type="text/javascript">

function myFunction() {
  // Get the checkbox
  var checkBox = document.getElementById("l12");
  // Get the output text
  var text12 = document.getElementById("text12");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text12.style.display = "block";
  } else {
    text12.style.display = "none";
  }
}

function calAge(o){
     var tmp = o.value.split("-");
     var current = new Date();
     var current_year = current.getFullYear();
     document.getElementById("age").value = current_year - tmp[0];
}

function calcscore(){
  var score = 0;
  $(".calc:checked").each(function(){
      score+=parseInt($(this).val(),10);
  });
  $("input[name=sum]").val(score)
  $("#total").text(score);
}
$().ready(function(){
  $(".calc").change(function(){
      calcscore()
  });
});
</script>
    <script src="{{ asset('app-assets') }}/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/pickers/pickadate/picker.time.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/pickers/pickadate/legacy.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/extensions/jquery.steps.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/forms/validation/jquery.validate.min.js"></script>

    <script src="{{ asset('app-assets') }}/js/scripts/forms/wizard-steps.js"></script>
    <script src="{{ asset('app-assets') }}/js/scripts/forms/select/form-select2.js"></script>
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets') }}/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>
    <!-- END: Page JS-->
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets') }}/js/scripts/forms/validation/form-validation.js"></script>
    <!-- END: Page JS-->
@endsection

@extends('layouts.covid')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/forms/wizard.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/forms/validation/form-validation.css">
@endsection
@section('content')

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header text-center">
                <div class="col-md-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title mb-0">แบบซักถามประวัติกรณีเดินทางมาจากจังหวัดที่มีรายงานการระบาดของโรคติดเชื้อไวรัสโคโรนา 2019 <br>
                                และกรณีที่ลากลับภูมิลำเนา หรือไปราชการ หรือฝึกนอกที่ตั้งข้ามจังหวัด<br>
                                โรงพยาบาลค่ายกฤษณ์สีวะรา</h2>
                            {{-- <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Forms</a>
                                    </li>
                                    <li class="breadcrumb-item active">Form Wizard
                                    </li>
                                </ol>
                            </div> --}}
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
                                    <h4 class="card-title">Validation Example</h4>
                                </div> --}}
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="{{ route('Questionnaire-History-Covid-19.store')}}" method="POST" class="steps-validation wizard-circle">
                                            {{ csrf_field() }}
                                            {{ method_field('POST') }}
                                            <!-- Step 1 -->
                                            <h6><i class="step-icon feather icon-home"></i> หน้าที่ 1</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="firstName3">
                                                                คำนำหน้า *
                                                            </label>
                                                            <select class="select2 form-control" name="title_name_id" required>
                                                                <option value="">คำนำหน้า</option>

                                                                <option value="นาย" @if (old('title_name_id') == "นาย") {{ 'selected' }} @endif>นาย</option>
                                                                <option value="นาง" @if (old('title_name_id') == "นาง") {{ 'selected' }} @endif>นาง</option>
                                                                <option value="นางสาว" @if (old('title_name_id') == "นางสาว") {{ 'selected' }} @endif>นางสาว</option>
                                                                <option value="พันเอก" @if (old('title_name_id') == "พันเอก") {{ 'selected' }} @endif>พันเอก</option>
                                                                <option value="พันเอกหญิง" @if (old('title_name_id') == "พันเอกหญิง") {{ 'selected' }} @endif>พันเอกหญิง</option>
                                                                <option value="พันโท" @if (old('title_name_id') == "พันโท") {{ 'selected' }} @endif>พันโท</option>
                                                                <option value="พันโทหญิง" @if (old('title_name_id') == "พันโทหญิง") {{ 'selected' }} @endif>พันโทหญิง</option>
                                                                <option value="พันตรี" @if (old('title_name_id') == "พันตรี") {{ 'selected' }} @endif>พันตรี</option>
                                                                <option value="พันตรีหญิง" @if (old('title_name_id') == "พันตรีหญิง") {{ 'selected' }} @endif>พันตรีหญิง</option>
                                                                <option value="ร้อยเอก" @if (old('title_name_id') == "ร้อยเอก") {{ 'selected' }} @endif>ร้อยเอก</option>
                                                                <option value="ร้อยเอกหญิง" @if (old('title_name_id') == "ร้อยเอกหญิง") {{ 'selected' }} @endif>ร้อยเอกหญิง</option>
                                                                <option value="ร้อยโท" @if (old('title_name_id') == "ร้อยโท") {{ 'selected' }} @endif>ร้อยโท</option>
                                                                <option value="ร้อยโทหญิง" @if (old('title_name_id') == "ร้อยโทหญิง") {{ 'selected' }} @endif>ร้อยโทหญิง</option>
                                                                <option value="ร้อยตรี" @if (old('title_name_id') == "ร้อยตรี") {{ 'selected' }} @endif>ร้อยตรี</option>
                                                                <option value="ร้อยตรีหญิง" @if (old('title_name_id') == "ร้อยตรีหญิง") {{ 'selected' }} @endif>ร้อยตรีหญิง</option>
                                                                <option value="จ่าสิบเอก" @if (old('title_name_id') == "จ่าสิบเอก") {{ 'selected' }} @endif>จ่าสิบเอก</option>
                                                                <option value="จ่าสิบเอกหญิง" @if (old('title_name_id') == "จ่าสิบเอกหญิง") {{ 'selected' }} @endif>จ่าสิบเอกหญิง</option>
                                                                <option value="จ่าสิบโท" @if (old('title_name_id') == "จ่าสิบโท") {{ 'selected' }} @endif>จ่าสิบโท</option>
                                                                <option value="จ่าสิบโทหญิง" @if (old('title_name_id') == "จ่าสิบโทหญิง") {{ 'selected' }} @endif>จ่าสิบโทหญิง</option>
                                                                <option value="จ่าสิบตรี" @if (old('title_name_id') == "จ่าสิบตรี") {{ 'selected' }} @endif>จ่าสิบตรี</option>
                                                                <option value="จ่าสิบตรีหญิง" @if (old('title_name_id') == "จ่าสิบตรีหญิง") {{ 'selected' }} @endif>จ่าสิบตรีหญิง</option>
                                                                <option value="สิบเอก" @if (old('title_name_id') == "สิบเอก") {{ 'selected' }} @endif>สิบเอก</option>
                                                                <option value="สิบเอกหญิง" @if (old('title_name_id') == "สิบเอกหญิง") {{ 'selected' }} @endif>สิบเอกหญิง</option>
                                                                <option value="สิบโท" @if (old('title_name_id') == "สิบโท") {{ 'selected' }} @endif>สิบโท</option>
                                                                <option value="สิบโทหญิง" @if (old('title_name_id') == "สิบโทหญิง") {{ 'selected' }} @endif>สิบโทหญิง</option>
                                                                <option value="สิบตรี" @if (old('title_name_id') == "สิบตรี") {{ 'selected' }} @endif>สิบตรี</option>
                                                                <option value="สิบตรีหญิง" @if (old('title_name_id') == "สิบตรีหญิง") {{ 'selected' }} @endif>สิบตรีหญิง</option>
                                                                <option value="พลทหาร" @if (old('title_name_id') == "พลทหาร") {{ 'selected' }} @endif>พลทหาร</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="firstName3">
                                                                ชื่อหน้า *
                                                            </label>
                                                            <input type="text" class="form-control " id="firstName3" name="firstName" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="lastName3">
                                                                นามสกุล *
                                                            </label>
                                                            <input type="text" class="form-control " id="lastName3" name="lastName" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="tel">
                                                                เบอร์โทรศัพท์ *
                                                            </label>
                                                            <div class="controls">
                                                            <input type="text" class="form-control " id="tel" name="tel"
                                                                data-validation-containsnumber-regex="^([0-9]+)$"
                                                                data-validation-containsnumber-message="กรุณากรอกเป็นตัวเลขเท่านั้น"


                                                                 required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="table-responsive border rounded px-1 mb-1">
                                                    <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-home mr-50 "></i>ที่อยู่ปัจจุบัน</h6>

                                                    <div class="row">

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="home_id">
                                                                    บ้านเลขที่ *
                                                                </label>
                                                                <input type="text" class="form-control " id="home_id" name="home_id">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="alley">
                                                                    ซอย
                                                                </label>
                                                                <input type="text" class="form-control " id="alley" name="alley">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="street">
                                                                    ถนน *
                                                                </label>
                                                                <input type="text" class="form-control " id="street" name="street">
                                                            </div>
                                                        </div>


                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="province">
                                                                    จังหวัด *
                                                                </label>
                                                                <select id="province" name="province" class="select2 form-control" onchange="showAmphoes()" required>
                                                                    <option value="">กรุณาเลือกจังหวัด</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="district">
                                                                    อำเภอ *
                                                                </label>
                                                                 <select id="amphoe" class="select2 form-control" name="district" onchange="showDistricts()" required>
                                                                    <option value="">กรุณาเลือกอำเภอ</option>
                                                                  </select>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="canton">
                                                                    ตำบล *
                                                                </label>
                                                                <select id="district" name="canton" class="form-control select2 " onchange="showZipcode()" required>
                                                                    <option value="">กรุณาเลือกตำบล</option>
                                                                  </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="table-responsive border rounded px-1 mb-1">
                                                            <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-home mr-50 "></i>หน่วยงาน</h6>

                                                            <div class="row">

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="agency">
                                                                            สังกัด
                                                                        </label>


                                                                        <select class="select2 form-control" id="select2-array" required
                                                                            name="training_unit_armies">

                                                                                @foreach ($agency as $roles)
                                                                                <option

                                                                                        value="{{$roles->id}}">{{$roles->name}} สังกัด {{$roles->agency_army->name}}</option>
                                                                                @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>
                                                                            จังหวัด
                                                                        </label>
                                                                        <input type="text" class="form-control" value="สกลนคร" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="table-responsive border rounded px-1 mb-1">
                                                            <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-home mr-50 "></i>ท่านประกอบอาชีพ</h6>

                                                                    <div class="form-group">
                                                                        <label for="occ">
                                                                            อาชีพ
                                                                        </label>
                                                                        <input type="text" class="form-control" id="occ" name="occ">
                                                                    </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </fieldset>

                                            <!-- Step 2 -->
                                            <h6><i class="step-icon feather icon-briefcase"></i> หน้าที่ 2</h6>
                                            <fieldset>
                                                <div class="table border rounded px-1 mb-1">
                                                    <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-home mr-50 "></i>เดินทางกลับมาจาก</h6>

                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="come_canton">
                                                                    วันที่เดินทาง *
                                                                </label>
                                                                <input type='text' name="travel" class="form-control pickadate" required />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="come_canton">
                                                                    วันที่เดินทางกลับ *
                                                                </label>
                                                                <input type='text' name="come_travel" class="form-control pickadate" required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label for="come_province">
                                                                    จังหวัด *
                                                                </label>
                                                                <select id="input_province" class="select2 form-control" name="come_province" onchange="showAmphoes1()" required>
                                                                    <option value="">กรุณาเลือกจังหวัด</option>
                                                                  </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label for="come_district">
                                                                    อำเภอ *
                                                                </label>
                                                                <select id="input_amphoe" class="select2 form-control" name="come_district" onchange="showDistricts1()" required>
                                                                    <option value="">กรุณาเลือกอำเภอ</option>
                                                                  </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label for="come_canton">
                                                                    ตำบล *
                                                                </label>
                                                                <select id="input_district" class="select2 form-control" name="come_canton" onchange="showZipcode1()" required>
                                                                    <option value="">กรุณาเลือกตำบล</option>
                                                                  </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table-responsive border rounded px-1 mb-1">
                                                    <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-home mr-50 "></i>กิจกรรมที่ทำก่อนเดินทางกลับเข้าจังหวัด ย้อนหลังไป 14 วัน</h6>
                                                        <h6 style="color: red" class="mb-1">** ตัวอย่าง</h6>

                                                        <label for="province">
                                                           วันที่ 1
                                                        </label>


                                                        <div class="form-label-group has-icon-left">
                                                            <textarea class="form-control  mb-1" name="activ_1" id="basicTextarea1" rows="3" placeholder="รายละเอียด.." ></textarea>
                                                                <div class="form-control-position">
                                                                    <i class="feather icon-repeat"></i>
                                                                </div>
                                                        </div>

                                                        <label for="province">
                                                            วันที่ 2
                                                         </label>
                                                        <div class="form-label-group has-icon-left">
                                                            <textarea class="form-control  mb-1" name="activ_2" id="basicTextarea2" rows="3" placeholder="รายละเอียด.." ></textarea>
                                                                <div class="form-control-position">
                                                                    <i class="feather icon-repeat"></i>
                                                                </div>
                                                        </div>

                                                        <label for="province">
                                                            วันที่ 3
                                                         </label>
                                                        <div class="form-label-group has-icon-left">
                                                            <textarea class="form-control  mb-1" name="activ_3" id="basicTextarea3" rows="3" placeholder="รายละเอียด.." ></textarea>
                                                                <div class="form-control-position">
                                                                    <i class="feather icon-repeat"></i>
                                                                </div>
                                                        </div>

                                                        <label for="province">
                                                            วันที่ 4
                                                         </label>
                                                        <div class="form-label-group has-icon-left">
                                                            <textarea class="form-control  mb-1" name="activ_4" id="basicTextarea4" rows="3" placeholder="รายละเอียด.." ></textarea>
                                                                <div class="form-control-position">
                                                                    <i class="feather icon-repeat"></i>
                                                                </div>
                                                        </div>

                                                        <label for="province">
                                                            วันที่ 5
                                                         </label>
                                                        <div class="form-label-group has-icon-left">
                                                            <textarea class="form-control  mb-1" name="activ_5" id="basicTextarea5" rows="3" placeholder="รายละเอียด.." ></textarea>
                                                                <div class="form-control-position">
                                                                    <i class="feather icon-repeat"></i>
                                                                </div>
                                                        </div>

                                                        <label for="province">
                                                            วันที่ 6
                                                         </label>
                                                        <div class="form-label-group has-icon-left">
                                                            <textarea class="form-control  mb-1" name="activ_6" id="basicTextarea6" rows="3" placeholder="รายละเอียด.." ></textarea>
                                                                <div class="form-control-position">
                                                                    <i class="feather icon-repeat"></i>
                                                                </div>
                                                        </div>

                                                        <label for="province">
                                                            วันที่ 7
                                                         </label>
                                                        <div class="form-label-group has-icon-left">
                                                            <textarea class="form-control  mb-1" name="activ_7" id="basicTextarea7" rows="3" placeholder="รายละเอียด.." ></textarea>
                                                                <div class="form-control-position">
                                                                    <i class="feather icon-repeat"></i>
                                                                </div>
                                                        </div>

                                                        <label for="province">
                                                            วันที่ 8
                                                         </label>
                                                        <div class="form-label-group has-icon-left">
                                                            <textarea class="form-control  mb-1" name="activ_8" id="basicTextarea8" rows="3" placeholder="รายละเอียด.." ></textarea>
                                                                <div class="form-control-position">
                                                                    <i class="feather icon-repeat"></i>
                                                                </div>
                                                        </div>

                                                        <label for="province">
                                                            วันที่ 9
                                                         </label>
                                                        <div class="form-label-group has-icon-left">
                                                            <textarea class="form-control  mb-1" name="activ_9" id="basicTextarea9" rows="3" placeholder="รายละเอียด.." ></textarea>
                                                                <div class="form-control-position">
                                                                    <i class="feather icon-repeat"></i>
                                                                </div>
                                                        </div>

                                                        <label for="province">
                                                            วันที่ 10
                                                         </label>
                                                        <div class="form-label-group has-icon-left">
                                                            <textarea class="form-control  mb-1" name="activ_10" id="basicTextarea10" rows="3" placeholder="รายละเอียด.." ></textarea>
                                                                <div class="form-control-position">
                                                                    <i class="feather icon-repeat"></i>
                                                                </div>
                                                        </div>

                                                        <label for="province">
                                                            วันที่ 11
                                                         </label>
                                                        <div class="form-label-group has-icon-left">
                                                            <textarea class="form-control  mb-1" name="activ_11" id="basicTextarea11" rows="3" placeholder="รายละเอียด.." ></textarea>
                                                                <div class="form-control-position">
                                                                    <i class="feather icon-repeat"></i>
                                                                </div>
                                                        </div>

                                                        <label for="province">
                                                            วันที่ 12
                                                         </label>
                                                        <div class="form-label-group has-icon-left">
                                                            <textarea class="form-control  mb-1" name="activ_12" id="basicTextarea12" rows="3" placeholder="รายละเอียด.." ></textarea>
                                                                <div class="form-control-position">
                                                                    <i class="feather icon-repeat"></i>
                                                                </div>
                                                        </div>

                                                        <label for="province">
                                                            วันที่ 13
                                                         </label>
                                                        <div class="form-label-group has-icon-left">
                                                            <textarea class="form-control  mb-1" name="activ_13" id="basicTextarea13" rows="3" placeholder="รายละเอียด.." ></textarea>
                                                                <div class="form-control-position">
                                                                    <i class="feather icon-repeat"></i>
                                                                </div>
                                                        </div>

                                                        <label for="province">
                                                            วันที่ 14
                                                         </label>
                                                        <div class="form-label-group has-icon-left">
                                                            <textarea class="form-control  mb-1" name="activ_14" id="basicTextarea14" rows="3" placeholder="รายละเอียด.." ></textarea>
                                                                <div class="form-control-position">
                                                                    <i class="feather icon-repeat"></i>
                                                                </div>
                                                        </div>

                                                </div>
                                            </fieldset>

                                            <!-- Step 3 -->
                                            <h6><i class="step-icon feather icon-eye"></i> หน้าที่ 3</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="table-responsive border rounded px-1 mb-1">
                                                            <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-home mr-50 "></i>เคยป่วยด้วยโรคโควิด 19 มาก่อนหรือไม่</h6>

                                                                <div class="col-md-12">
                                                                    <ul class="list-unstyled mb-0">
                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" class="custom-control-input" name="sick_covid" id="sick_covid1" value="1">
                                                                                    <label class="custom-control-label" for="sick_covid1">เคยป่วย</label>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" class="custom-control-input" name="sick_covid" id="sick_covid2" value="2">
                                                                                    <label class="custom-control-label" for="sick_covid2">ไม่เคยป่วย</label>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                        </div>


                                                        <div class="table-responsive border rounded px-1 mb-1">
                                                            <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-home mr-50 "></i>มีประวัติสัมผัสผู้ป่วยยืนยัน (เช่น พ่อแม่พี่น้อง ญาติ เพื่อนบ้าน) ของโรคมาก่อนในช่วง 14 วันหรือไม่</h6>

                                                                <div class="col-md-12">
                                                                    <ul class="list-unstyled mb-0">
                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="vs-radio-con">
                                                                                    <input type="radio" name="his_patient_covid" value="1" onclick="his_patient_covid1();">
                                                                                    <span class="vs-radio">
                                                                                        <span class="vs-radio--border"></span>
                                                                                        <span class="vs-radio--circle"></span>
                                                                                    </span>
                                                                                    <span class="">เคยสัมผัสใกล้ชิด</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>

                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="vs-radio-con">
                                                                                    <input type="radio" name="his_patient_covid" value="2" onclick="his_patient_covid2();">
                                                                                    <span class="vs-radio">
                                                                                        <span class="vs-radio--border"></span>
                                                                                        <span class="vs-radio--circle"></span>
                                                                                    </span>
                                                                                    <span class="">ไม่เคยสัมผัสใกล้ชิด</span>
                                                                                </div>
                                                                            </fieldset>

                                                                        </li>

                                                                    </ul>
                                                                    <div id="div1" style="display:none;margin-bottom: .5rem;">
                                                                        <label for="come_district">
                                                                            ใคร ? (โปรดระบุ)
                                                                        </label>
                                                                        <ul class="list-unstyled mb-0">
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox" name="fa" value="1">
                                                                                        <span class="vs-checkbox">
                                                                                            <span class="vs-checkbox--check">
                                                                                                <i class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>
                                                                                        <span class="">พ่อ</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox" name="ma" value="1">
                                                                                        <span class="vs-checkbox">
                                                                                            <span class="vs-checkbox--check">
                                                                                                <i class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>
                                                                                        <span class="">แม่</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox" name="bro" value="1">
                                                                                        <span class="vs-checkbox">
                                                                                            <span class="vs-checkbox--check">
                                                                                                <i class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>
                                                                                        <span class="">พี่</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox" name="bro2" value="1">
                                                                                        <span class="vs-checkbox">
                                                                                            <span class="vs-checkbox--check">
                                                                                                <i class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>
                                                                                        <span class="">น้อง</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox" name="relative" value="1">
                                                                                        <span class="vs-checkbox">
                                                                                            <span class="vs-checkbox--check">
                                                                                                <i class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>
                                                                                        <span class="">ญาติ</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block">
                                                                                <fieldset>
                                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox" name="friend" value="1">
                                                                                        <span class="vs-checkbox">
                                                                                            <span class="vs-checkbox--check">
                                                                                                <i class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>
                                                                                        <span class="">เพื่อน</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="table-responsive border rounded px-1 mb-1">
                                                            <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-home mr-50 "></i>มีประวัติไปในสถานที่เสี่ยงต่อการสัมผัสโรค (ได้แก่ สถานที่แออัดหรือมีชุมชนคับคลั่ง เช่น ห้างสรรพสินค้า ตลาดนัด วัด สนามกีฬา สถานบันเทิง เป็นต้น) ในช่วง 14 วันหรือไม่</h6>

                                                                <div class="col-md-12">

                                                                    <ul class="list-unstyled mb-0">
                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="vs-radio-con">
                                                                                    <input type="radio" name="his_place_covid" value="1" onclick="place_covid1();">
                                                                                    <span class="vs-radio">
                                                                                        <span class="vs-radio--border"></span>
                                                                                        <span class="vs-radio--circle"></span>
                                                                                    </span>
                                                                                    <span class="">มีไปสถานที่เสี่ยง</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>

                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="vs-radio-con">
                                                                                    <input type="radio" name="his_place_covid" value="2" onclick="place_covid2();">
                                                                                    <span class="vs-radio">
                                                                                        <span class="vs-radio--border"></span>
                                                                                        <span class="vs-radio--circle"></span>
                                                                                    </span>
                                                                                    <span class="">ไม่มีไปสถานที่เสี่ยง</span>
                                                                                </div>
                                                                            </fieldset>

                                                                        </li>

                                                                    </ul>
                                                                    <div id="div3" style="display:none;margin-bottom: .5rem;">
                                                                        <label for="come_district">
                                                                            ที่ใด ? (โปรดระบุ)
                                                                        </label>
                                                                        <ul class="list-unstyled mb-0">
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox" name="de_store" value="1">
                                                                                        <span class="vs-checkbox">
                                                                                            <span class="vs-checkbox--check">
                                                                                                <i class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>
                                                                                        <span class="">ห้าง</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox" name="market" value="1">
                                                                                        <span class="vs-checkbox">
                                                                                            <span class="vs-checkbox--check">
                                                                                                <i class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>
                                                                                        <span class="">ตลาด</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox" name="measure" value="1">
                                                                                        <span class="vs-checkbox">
                                                                                            <span class="vs-checkbox--check">
                                                                                                <i class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>
                                                                                        <span class="">วัด</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox" name="Stadium" value="1">
                                                                                        <span class="vs-checkbox">
                                                                                            <span class="vs-checkbox--check">
                                                                                                <i class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>
                                                                                        <span class="">สนามกีฬา</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox" name="Ent_place" value="1">
                                                                                        <span class="vs-checkbox">
                                                                                            <span class="vs-checkbox--check">
                                                                                                <i class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>
                                                                                        <span class="">สถานบันเทิง</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block">
                                                                                <fieldset>
                                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox" name="" value="อื่นๆ">
                                                                                        <span class="vs-checkbox">
                                                                                            <span class="vs-checkbox--check">
                                                                                                <i class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>
                                                                                        <span class="">อื่นๆ</span>
                                                                                    </div>
                                                                                    <input type="text" class="form-control" id="detail_where" name="detail_where" placeholder="โปรดระบุ...">
                                                                                </fieldset>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                        </div>

                                                        <div class="table-responsive border rounded px-1 mb-1">
                                                            <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-home mr-50 "></i>มีประวัติได้รับวัคซีนป้องกันไข้หวัดใหญ่ล่าสุดเมื่อใด (ในรอบ 1 ปีที่ผ่านมา)</h6>

                                                                <div class="col-md-12">
                                                                    <ul class="list-unstyled mb-0">
                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" class="custom-control-input" name="his_vaccine_flu" id="his_vaccine__flu1" value="1" onclick="his_vaccine_flu1();">
                                                                                    <label class="custom-control-label" for="his_vaccine__flu1">เคยฉีด</label>
                                                                                </div>

                                                                            </fieldset>

                                                                        </li>

                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" class="custom-control-input" name="his_vaccine_flu" id="his_vaccine__flu2" value="2" onclick="his_vaccine_flu2();">
                                                                                    <label class="custom-control-label" for="his_vaccine__flu2">ไม่เคยฉีดใน 1 ปีที่ผ่านมา</label>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>

                                                                    </ul>
                                                                    <div id="div2" style="display:none;margin-bottom: .5rem;">
                                                                        <input type="text" class="form-control" id="detail_time" name="detail_time" placeholder="ระบุช่วง...">
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
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

    <script>
        $(document).ready(function(){
        // console.log("HELLO");
        showProvinces();
        });
    </script>
    <script>
        $(document).ready(function(){
        // console.log("HELLO");
        showProvinces1();
        });
    </script>
    <script>
    function ajax(url, callback){
      $.ajax({
        "url" : url,
        "type" : "GET",
        "dataType" : "json",
      })
      .done(callback); //END AJAX
    }
    </script>

    <script>
    function showProvinces1(){
      //PARAMETERS
      var url = "{{ url('/') }}/api/province";
      var callback = function(result){
        $("#input_province").empty();
        for(var i=0; i<result.length; i++){
          $("#input_province").append(
            $('<option></option>')
              .attr("value", ""+result[i].province_code)
              .html(""+result[i].province)
          );
        }
        showAmphoes1();
      };
      //CALL AJAX
      ajax(url,callback);
    }

    function showAmphoes1(){
    //INPUT
    var province_code = $("#input_province").val();
    //PARAMETERS
    var url = "{{ url('/') }}/api/province/"+province_code+"/amphoe";
    var callback = function(result){
        //console.log(result);
        $("#input_amphoe").empty();
        for(var i=0; i<result.length; i++){
        $("#input_amphoe").append(
            $('<option></option>')
            .attr("value", ""+result[i].amphoe_code)
            .html(""+result[i].amphoe)
        );
        }
        showDistricts1();
    };
    //CALL AJAX
        ajax(url,callback);
    }
    function showDistricts1(){
        //INPUT
        var province_code = $("#input_province").val();
        var amphoe_code = $("#input_amphoe").val();
        //PARAMETERS
        var url = "{{ url('/') }}/api/province/"+province_code+"/amphoe/"+amphoe_code+"/district";
        var callback = function(result){
            //console.log(result);
            $("#input_district").empty();
            for(var i=0; i<result.length; i++){
            $("#input_district").append(
                $('<option></option>')
                .attr("value", ""+result[i].district_code)
                .html(""+result[i].district)
            );
            }
            showZipcode1();
        };
        //CALL AJAX
        ajax(url,callback);
    }
    function showZipcode1(){
        //INPUT
        var province_code = $("#input_province").val();
        var amphoe_code = $("#input_amphoe").val();
        var district_code = $("#input_district").val();
        //PARAMETERS
        var url = "{{ url('/') }}/api/province/"+province_code+"/amphoe/"+amphoe_code+"/district/"+district_code;
        var callback = function(result){
            //console.log(result);
            for(var i=0; i<result.length; i++){
            $("#input_zipcode").val(result[i].zipcode);
            }
        };
        //CALL AJAX
        ajax(url,callback);
    }
    </script>

    <script>
    function showProvinces(){
      //PARAMETERS
      var url = "{{ url('/') }}/api/province";
      var callback = function(result){
        $("#province").empty();
        for(var i=0; i<result.length; i++){
          $("#province").append(
            $('<option></option>')
              .attr("value", ""+result[i].province_code)
              .html(""+result[i].province)
          );
        }
        showAmphoes();
      };
      //CALL AJAX
      ajax(url,callback);
    }

    function showAmphoes(){
    //INPUT
    var province_code = $("#province").val();
    //PARAMETERS
    var url = "{{ url('/') }}/api/province/"+province_code+"/amphoe";
    var callback = function(result){
        //console.log(result);
        $("#amphoe").empty();
        for(var i=0; i<result.length; i++){
        $("#amphoe").append(
            $('<option></option>')
            .attr("value", ""+result[i].amphoe_code)
            .html(""+result[i].amphoe)
        );
        }
        showDistricts();
    };
    //CALL AJAX
        ajax(url,callback);
    }
    function showDistricts(){
        //INPUT
        var province_code = $("#province").val();
        var amphoe_code = $("#amphoe").val();
        //PARAMETERS
        var url = "{{ url('/') }}/api/province/"+province_code+"/amphoe/"+amphoe_code+"/district";
        var callback = function(result){
            //console.log(result);
            $("#district").empty();
            for(var i=0; i<result.length; i++){
            $("#district").append(
                $('<option></option>')
                .attr("value", ""+result[i].district_code)
                .html(""+result[i].district)
            );
            }
            showZipcode();
        };
        //CALL AJAX
        ajax(url,callback);
    }
    function showZipcode(){
        //INPUT
        var province_code = $("#province").val();
        var amphoe_code = $("#amphoe").val();
        var district_code = $("#district").val();
        //PARAMETERS
        var url = "{{ url('/') }}/api/province/"+province_code+"/amphoe/"+amphoe_code+"/district/"+district_code;
        var callback = function(result){
            //console.log(result);
            for(var i=0; i<result.length; i++){
            $("#zipcode").val(result[i].zipcode);
            }
        };
        //CALL AJAX
        ajax(url,callback);
    }
    </script>

    <script>


        function place_covid1(){
            document.getElementById('div3').style.display = 'block';
        }
        function place_covid2(){
            document.getElementById('div3').style.display = 'none';
        }

        function his_patient_covid1(){
            document.getElementById('div1').style.display = 'block';
        }
        function his_patient_covid2(){
            document.getElementById('div1').style.display = 'none';
        }

        function his_vaccine_flu1(){
            document.getElementById('div2').style.display = 'block';
        }
        function his_vaccine_flu2(){
            document.getElementById('div2').style.display = 'none';
        }

    </script>
        <script src="{{ asset('app-assets') }}/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
        <!-- BEGIN: Page Vendor JS-->
        <script src="{{ asset('app-assets') }}/vendors/js/pickers/pickadate/picker.js"></script>
        <script src="{{ asset('app-assets') }}/vendors/js/pickers/pickadate/picker.date.js"></script>
        <script src="{{ asset('app-assets') }}/vendors/js/pickers/pickadate/picker.time.js"></script>
        <script src="{{ asset('app-assets') }}/vendors/js/pickers/pickadate/legacy.js"></script>

       <script src="{{ asset('app-assets') }}/vendors/js/ui/jquery.sticky.js"></script>
       <script src="{{ asset('app-assets') }}/vendors/js/extensions/jquery.steps.min.js"></script>
       <script src="{{ asset('app-assets') }}/vendors/js/forms/validation/jquery.validate.min.js"></script>
       <script src="{{ asset('app-assets') }}/vendors/js/forms/select/select2.full.min.js"></script>
       <!-- END: Page Vendor JS-->

       <!-- BEGIN: Page JS-->
       <script src="{{ asset('app-assets') }}/js/scripts/forms/wizard-steps.js"></script>
       <script src="{{ asset('app-assets') }}/js/scripts/forms/select/form-select2.js"></script>
       <script src="{{ asset('app-assets') }}/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>
        <!-- BEGIN: Page JS-->
        <script src="{{ asset('app-assets') }}/js/scripts/forms/validation/form-validation.js"></script>
        <!-- END: Page JS-->
@endsection

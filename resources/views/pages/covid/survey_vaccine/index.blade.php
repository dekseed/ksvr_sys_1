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
                            <h2 class="content-header-title mb-0">แบบสำรวจการรับวัคซีนโควิด-19 <br>โรงพยาบาลค่ายกฤษณ์สีวะรา</h2>

                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">
                <section id="validation">
                    <div class="container">
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
                                        <form id="steps-validation" action="{{route('survey_vaccine_covid.store')}}" class="steps-validation wizard-circle" method="POST" >
                                            {{csrf_field()}}
                                            <!-- Step 1 -->
                                            <h6>ข้อที่ 1</h6>
                                            <fieldset>
                                                <h4 class="form-section">1. วัน เดือน ปี ที่รับวัคซีน</h4>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="birthdate">วัน เดือน ปี ที่รับวัคซีน</label>
                                                    <div class="col-md-9">
                                                        <input name="date" value="{{old('date')}}" class="form-control pickadate-months-year" data-validation-required-message="กรุณากรอกข้อมูลให้ครบถ้วน" required>
                                                    </div>

                                                </div>
                                                <hr>
                                            </fieldset>
                                            <!-- Step 2 -->
                                            <h6>ข้อที่ 2 </h6>
                                            <fieldset>
                                                <h4 class="form-section">2. ฉีดเข็มที่ 1 หรือฉีดเข็มที่ 2</h4>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="birthdate">ฉีดเข็มที่ 1 หรือฉีดเข็มที่ 2</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="inject" required>
                                                            <option value="" >เลือก</option>
                                                            <option {{ old('inject') == '1' ? "selected" : "" }} value="1" >เข็มที่ 1</option>
                                                            <option {{ old('inject') == '2' ? "selected" : "" }} value="2" >เข็มที่ 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <h6>ข้อที่ 3 </h6>
                                            <fieldset>
                                                <h4 class="form-section">3. กลุ่มเป้าหมายรับวัคซีน</h4>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="birthdate">กลุ่มเป้าหมายรับวัคซีน</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="target_group" onchange="showDiv(this)">

                                                            <option value="">เลือก</option>
                                                            <option value="1" >บุคลากรทางการแพทย์</option>
                                                            <option value="2" >หน่วยทหาร</option>
                                                            <option value="3" >กลุ่มอายุ 60 ปีขึ้นไป</option>
                                                            <option value="4" >กลุ่มโรคเรื้อรัง</option>
                                                            <option value="5" >ประชาชนทั่วไป</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <span id="medical_personnel" style="display:none;" >
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="medical_personnel">บุคลากรทางการแพทย์</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="medical_personnel">
                                                            <option value="">เลือก</option>
                                                            <option {{ old('medical_personnel') == '1' ? "selected" : "" }} value="1" >รพ.ค่ายกฤษณ์สีวะรา</option>
                                                            <option {{ old('medical_personnel') == '2' ? "selected" : "" }} value="2" >รพ.รัฐบาล</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                </span>
                                                <span id="military_unit" style="display:none;" >
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="military_unit1">หน่วยทหาร</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="military_unit" onchange="unit(this)">
                                                            <option value="" >เลือก</option>
                                                            <option value="1" >หน่วย มทบ.29</option>
                                                            <option value="2" >หน่วย ร.3</option>
                                                            <option value="3" >หน่วย ร.3 พัน 1</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                </span>
                                                <span id="military_unit1" style="display:none;" >
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="military_unit1">หน่วย มทบ.29</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="military_unit1" >
                                                            <option value="" >เลือก</option>
                                                            <option value="1" >นายทหาร</option>
                                                            <option value="2" >นายสิบ</option>
                                                            <option value="3" >พนักงานราชการและลูกจ้าง</option>
                                                            <option value="3" >พลทหาร</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                </span>
                                                <span id="military_unit2" style="display:none;" >
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="military_unit2">หน่วย ร.3</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="military_unit2" >
                                                            <option value="" >เลือก</option>
                                                            <option value="1" >นายทหาร</option>
                                                            <option value="2" >นายสิบ</option>
                                                            <option value="3" >พนักงานราชการและลูกจ้าง</option>
                                                            <option value="3" >พลทหาร</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                </span>
                                                <span id="military_unit3" style="display:none;" >
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="military_unit3">หน่วย ร.3 พัน 1</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="military_unit3" >
                                                            <option value="" >เลือก</option>
                                                            <option value="1" >นายทหาร</option>
                                                            <option value="2" >นายสิบ</option>
                                                            <option value="3" >พนักงานราชการและลูกจ้าง</option>
                                                            <option value="3" >พลทหาร</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                </span>
                                                <span id="60_years_old" style="display:none;" >
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="years_old">ชุมชน (กลุ่มอายุ 60 ปีขึ้นไป)</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="years_old" >
                                                            <option value="" >เลือก</option>
                                                            <option value="1" >ชุมชนแวงใหญ่</option>
                                                            <option value="2" >ชุมชนสกลเมืองทอง</option>
                                                            <option value="3" >ชุมชนบ้านธาตุ</option>
                                                            <option value="4" >ชุมชนรุ่งพัฒนา 1</option>
                                                            <option value="5" >ชุมชนรุ่งพัฒนา 2</option>
                                                            <option value="6" >ชุมชน มทบ.29</option>
                                                            <option value="7" >ชุมชน 301 พัฒนา</option>
                                                            <option value="8" >ชุมชน ร.3</option>
                                                            <option value="9" >ชุมชนหน้าค่าย</option>
                                                            <option value="10" >ชุมชนอื่น ๆ </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                </span>
                                                <span id="chronic_disease" style="display:none;" >
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="chronic_disease">ชุมชน (กลุ่มโรคเรื้อรัง)</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="chronic_disease" >
                                                            <option value="" >เลือก</option>
                                                            <option value="1" >ชุมชนแวงใหญ่</option>
                                                            <option value="2" >ชุมชนสกลเมืองทอง</option>
                                                            <option value="3" >ชุมชนบ้านธาตุ</option>
                                                            <option value="4" >ชุมชนรุ่งพัฒนา 1</option>
                                                            <option value="5" >ชุมชนรุ่งพัฒนา 2</option>
                                                            <option value="6" >ชุมชน มทบ.29</option>
                                                            <option value="7" >ชุมชน 301 พัฒนา</option>
                                                            <option value="8" >ชุมชน ร.3</option>
                                                            <option value="9" >ชุมชนหน้าค่าย</option>
                                                            <option value="10" >ชุมชนอื่น ๆ </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                </span>
                                                <span id="general_public" style="display:none;" >
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="general_public">ชุมชน (ประชาชนทั่วไป)</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="general_public" >
                                                            <option value="" >เลือก</option>
                                                            <option value="1" >รับราชการ</option>
                                                            <option value="2" >รัฐวิสาหกิจ </option>
                                                            <option value="3" >นักศึกษา</option>
                                                            <option value="4" >ค้าขาย</option>
                                                            <option value="5" >รับจ้างทั่วไป</option>
                                                            <option value="6" >อื่น ๆ</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                </span>
                                            </fieldset>
                                            {{-- <fieldset>
                                                <h4 class="form-section">3. กลุ่มเป้าหมายรับวัคซีน</h4>

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="birthdate">3. กลุ่มเป้าหมายรับวัคซีน</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="target_group" onchange="showDiv(this)">

                                                            <option value="">เลือก</option>
                                                            <option {{ old('target_group') == '1' ? "selected" : "" }} value="1" >บุคลากรทางการแพทย์</option>
                                                            <option {{ old('target_group') == '2' ? "selected" : "" }} value="2" >หน่วยทหาร</option>
                                                            <option {{ old('target_group') == '3' ? "selected" : "" }} value="3" >กลุ่มอายุ 60 ปีขึ้นไป</option>
                                                            <option {{ old('target_group') == '4' ? "selected" : "" }} value="4" >กลุ่มโรคเรื้อรัง</option>
                                                            <option {{ old('target_group') == '5' ? "selected" : "" }} value="5" >ประชาชนทั่วไป</option>
                                                        </select>
                                                    </div>
                                                </div>


                                                <span id="medical_personnel" style="display:none;" >
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="medical_personnel">บุคลากรทางการแพทย์</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="medical_personnel">
                                                            <option value="">เลือก</option>
                                                            <option {{ old('medical_personnel') == '1' ? "selected" : "" }} value="1" >รพ.ค่ายกฤษณ์สีวะรา</option>
                                                            <option {{ old('medical_personnel') == '2' ? "selected" : "" }} value="2" >รพ.รัฐบาล</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                </span>


                                                <span id="military_unit" style="display:none;" >
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="military_unit1">หน่วยทหาร</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="military_unit" onchange="unit(this)">
                                                            <option value="" >เลือก</option>
                                                            <option {{ old('military_unit') == '1' ? "selected" : "" }} value="1" >หน่วย มทบ.29</option>
                                                            <option {{ old('military_unit') == '2' ? "selected" : "" }} value="2" >หน่วย ร.3</option>
                                                            <option {{ old('military_unit') == '3' ? "selected" : "" }} value="3" >หน่วย ร.3 พัน 1</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                </span>
                                                <span id="military_unit1" style="display:none;" >
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="military_unit1">หน่วย มทบ.29</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="military_unit1" >
                                                            <option value="" >เลือก</option>
                                                            <option {{ old('military_unit1') == '1' ? "selected" : "" }} value="1" >นายทหาร</option>
                                                            <option {{ old('military_unit1') == '2' ? "selected" : "" }} value="2" >นายสิบ</option>
                                                            <option {{ old('military_unit1') == '3' ? "selected" : "" }} value="3" >พนักงานราชการและลูกจ้าง</option>
                                                            <option {{ old('military_unit1') == '4' ? "selected" : "" }} value="3" >พลทหาร</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                </span>
                                                <span id="military_unit2" style="display:none;" >
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="military_unit2">หน่วย ร.3</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="military_unit2" >
                                                            <option value="" >เลือก</option>
                                                            <option {{ old('military_unit2') == '1' ? "selected" : "" }} value="1" >นายทหาร</option>
                                                            <option {{ old('military_unit2') == '2' ? "selected" : "" }} value="2" >นายสิบ</option>
                                                            <option {{ old('military_unit2') == '3' ? "selected" : "" }} value="3" >พนักงานราชการและลูกจ้าง</option>
                                                            <option {{ old('military_unit2') == '4' ? "selected" : "" }} value="3" >พลทหาร</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                </span>
                                                <span id="military_unit3" style="display:none;" >
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="military_unit3">หน่วย ร.3 พัน 1</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="military_unit3" >
                                                            <option value="" >เลือก</option>
                                                            <option {{ old('military_unit3') == '1' ? "selected" : "" }} value="1" >นายทหาร</option>
                                                            <option {{ old('military_unit3') == '2' ? "selected" : "" }} value="2" >นายสิบ</option>
                                                            <option {{ old('military_unit3') == '3' ? "selected" : "" }} value="3" >พนักงานราชการและลูกจ้าง</option>
                                                            <option {{ old('military_unit3') == '4' ? "selected" : "" }} value="3" >พลทหาร</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                </span>
                                                <span id="60_years_old" style="display:none;" >
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="years_old">ชุมชน (กลุ่มอายุ 60 ปีขึ้นไป)</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="years_old" >
                                                            <option value="" >เลือก</option>
                                                            <option {{ old('years_old') == '1' ? "selected" : "" }} value="1" >ชุมชนแวงใหญ่</option>
                                                            <option {{ old('years_old') == '2' ? "selected" : "" }} value="2" >ชุมชนสกลเมืองทอง</option>
                                                            <option {{ old('years_old') == '3' ? "selected" : "" }} value="3" >ชุมชนบ้านธาตุ</option>
                                                            <option {{ old('years_old') == '4' ? "selected" : "" }} value="4" >ชุมชนรุ่งพัฒนา 1</option>
                                                            <option {{ old('years_old') == '5' ? "selected" : "" }} value="5" >ชุมชนรุ่งพัฒนา 2</option>
                                                            <option {{ old('years_old') == '6' ? "selected" : "" }} value="6" >ชุมชน มทบ.29</option>
                                                            <option {{ old('years_old') == '7' ? "selected" : "" }} value="7" >ชุมชน 301 พัฒนา</option>
                                                            <option {{ old('years_old') == '8' ? "selected" : "" }} value="8" >ชุมชน ร.3</option>
                                                            <option {{ old('years_old') == '9' ? "selected" : "" }} value="9" >ชุมชนหน้าค่าย</option>
                                                            <option {{ old('years_old') == '10' ? "selected" : "" }} value="10" >ชุมชนอื่น ๆ </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                </span>
                                                <span id="chronic_disease" style="display:none;" >
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="chronic_disease">ชุมชน (กลุ่มโรคเรื้อรัง)</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="chronic_disease" >
                                                            <option value="" >เลือก</option>
                                                            <option {{ old('chronic_disease') == '1' ? "selected" : "" }} value="1" >ชุมชนแวงใหญ่</option>
                                                            <option {{ old('chronic_disease') == '2' ? "selected" : "" }} value="2" >ชุมชนสกลเมืองทอง</option>
                                                            <option {{ old('chronic_disease') == '3' ? "selected" : "" }} value="3" >ชุมชนบ้านธาตุ</option>
                                                            <option {{ old('chronic_disease') == '4' ? "selected" : "" }} value="4" >ชุมชนรุ่งพัฒนา 1</option>
                                                            <option {{ old('chronic_disease') == '5' ? "selected" : "" }} value="5" >ชุมชนรุ่งพัฒนา 2</option>
                                                            <option {{ old('chronic_disease') == '6' ? "selected" : "" }} value="6" >ชุมชน มทบ.29</option>
                                                            <option {{ old('chronic_disease') == '7' ? "selected" : "" }} value="7" >ชุมชน 301 พัฒนา</option>
                                                            <option {{ old('chronic_disease') == '8' ? "selected" : "" }} value="8" >ชุมชน ร.3</option>
                                                            <option {{ old('chronic_disease') == '9' ? "selected" : "" }} value="9" >ชุมชนหน้าค่าย</option>
                                                            <option {{ old('chronic_disease') == '10' ? "selected" : "" }} value="10" >ชุมชนอื่น ๆ </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                </span>
                                                <span id="general_public" style="display:none;" >
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="general_public">ชุมชน (ประชาชนทั่วไป)</label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="general_public" >
                                                            <option value="" >เลือก</option>
                                                            <option {{ old('general_public') == '1' ? "selected" : "" }} value="1" >รับราชการ</option>
                                                            <option {{ old('general_public') == '2' ? "selected" : "" }} value="2" >รัฐวิสาหกิจ </option>
                                                            <option {{ old('general_public') == '3' ? "selected" : "" }} value="3" >นักศึกษา</option>
                                                            <option {{ old('general_public') == '4' ? "selected" : "" }} value="4" >ค้าขาย</option>
                                                            <option {{ old('general_public') == '5' ? "selected" : "" }} value="5" >รับจ้างทั่วไป</option>
                                                            <option {{ old('general_public') == '6' ? "selected" : "" }} value="6" >อื่น ๆ</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                </span>
                                            </fieldset> --}}
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </section>
                        {{-- {!! QrCode::size(400)->generate(url("http://www.ksvrhospital.go.th/ksvr/Survey-Vaccine-Covid")); !!} --}}
            </div>
        </div>
    </div>

@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript">
    function showDiv(select){
        if(select.value==1){
        document.getElementById('medical_personnel').style.display = "block";
        document.getElementById('military_unit').style.display = "none";
        document.getElementById('60_years_old').style.display = "none";
        document.getElementById('chronic_disease').style.display = "none";
        document.getElementById('general_public').style.display = "none";

        document.getElementById('military_unit1').style.display = "none";
        document.getElementById('military_unit2').style.display = "none";
        document.getElementById('military_unit3').style.display = "none";
    } else if(select.value==2){
        document.getElementById('medical_personnel').style.display = "none";
        document.getElementById('military_unit').style.display = "block";
        document.getElementById('60_years_old').style.display = "none";
        document.getElementById('chronic_disease').style.display = "none";
        document.getElementById('general_public').style.display = "none";

        document.getElementById('military_unit1').style.display = "none";
        document.getElementById('military_unit2').style.display = "none";
        document.getElementById('military_unit3').style.display = "none";
    } else if(select.value==3){
        document.getElementById('medical_personnel').style.display = "none";
        document.getElementById('military_unit').style.display = "none";
        document.getElementById('60_years_old').style.display = "block";
        document.getElementById('chronic_disease').style.display = "none";
        document.getElementById('general_public').style.display = "none";

        document.getElementById('military_unit1').style.display = "none";
        document.getElementById('military_unit2').style.display = "none";
        document.getElementById('military_unit3').style.display = "none";
    } else if(select.value==4){
        document.getElementById('medical_personnel').style.display = "none";
        document.getElementById('military_unit').style.display = "none";
        document.getElementById('60_years_old').style.display = "none";
        document.getElementById('chronic_disease').style.display = "block";
        document.getElementById('general_public').style.display = "none";

        document.getElementById('military_unit1').style.display = "none";
        document.getElementById('military_unit2').style.display = "none";
        document.getElementById('military_unit3').style.display = "none";
    } else if(select.value==5){
        document.getElementById('medical_personnel').style.display = "none";
        document.getElementById('military_unit').style.display = "none";
        document.getElementById('60_years_old').style.display = "none";
        document.getElementById('chronic_disease').style.display = "none";
        document.getElementById('general_public').style.display = "block";

        document.getElementById('military_unit1').style.display = "none";
        document.getElementById('military_unit2').style.display = "none";
        document.getElementById('military_unit3').style.display = "none";
    } else{
        document.getElementById('medical_personnel').style.display = "none";
        document.getElementById('military_unit').style.display = "none";
        document.getElementById('60_years_old').style.display = "none";
        document.getElementById('chronic_disease').style.display = "none";
        document.getElementById('general_public').style.display = "none";

        document.getElementById('military_unit1').style.display = "none";
        document.getElementById('military_unit2').style.display = "none";
        document.getElementById('military_unit3').style.display = "none";
    }
   }
   function unit(select){
        if(select.value==1){
        document.getElementById('military_unit1').style.display = "block";
        document.getElementById('military_unit2').style.display = "none";
        document.getElementById('military_unit3').style.display = "none";
    } else if(select.value==2){
        document.getElementById('military_unit1').style.display = "none";
        document.getElementById('military_unit2').style.display = "block";
        document.getElementById('military_unit3').style.display = "none";
    } else if(select.value==3){
        document.getElementById('military_unit1').style.display = "none";
        document.getElementById('military_unit2').style.display = "none";
        document.getElementById('military_unit3').style.display = "block";
    }
    else {
        document.getElementById('military_unit1').style.display = "none";
        document.getElementById('military_unit2').style.display = "none";
        document.getElementById('military_unit3').style.display = "none";
    }
}
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

@endsection

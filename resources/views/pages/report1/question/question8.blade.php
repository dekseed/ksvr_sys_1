@extends('layouts.check_up')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/select/select2.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/forms/validation/form-validation.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/pickers/pickadate/pickadate.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/forms/wizard.css">
<style>
    label {
        font-size: 14px;
    },
    h4 {
     color: #000;
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
                                <div class="container">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="card-text">
                                                    <h4 class="form-section mt-2"><i class="feather icon-clipboard"></i>แบบประเมินการฆ่าตัวตาย</h4>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-body">
                                            <form id="steps-validation" action="{{route('CheckUp3.store')}}" class="steps-validation wizard-circle" method="POST" >
                                                {{csrf_field()}}
                                                <h6>ข้อ 1</h6>
                                                <fieldset>
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="card-text">
                                                                <h4 class="form-section"><i class="feather icon-clipboard"></i>1. คิดอยากตาย หรือ คิดว่าตายไปจะดีกว่า</h4>
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
                                                                                <input type="radio" value="0" name="q8_1"
                                                                                @if(old('z1') ==  "0") checked="checked" @endif >
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
                                                                                <input type="radio" value="1" name="q8_1"
                                                                                @if(old('z1') ==  "1") checked="checked" @endif >
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
                                                <h6>ข้อ 2</h6>
                                                <fieldset>
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="card-text">
                                                                <h4 class="form-section"><i class="feather icon-clipboard"></i>2. อยากทำร้ายตัวเอง หรือ ทำให้ตัวเองบาดเจ็บ</h4>
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
                                                                                <input type="radio" value="0" name="q8_2"
                                                                                @if(old('z1') ==  "0") checked="checked" @endif >
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
                                                                                <input type="radio" value="2" name="q8_2"
                                                                                @if(old('z1') ==  "2") checked="checked" @endif >
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
                                                <h6>ข้อ 3</h6>
                                                <fieldset>
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="card-text">
                                                                <h4 class="form-section"><i class="feather icon-clipboard"></i>3. ในช่วง 1 เดือนที่ผ่านมารวมวันนี้ คิดเกี่ยวกับการฆ่าตัวตาย</h4>
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
                                                                                <input type="radio" value="0" name="q8_3" id="d4_1" onclick="javascript:yesnoCheckd4();"
                                                                                @if(old('z1') ==  "0") checked="checked" @endif >
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
                                                                                <input type="radio" value="6" name="q8_3" id="d4_2" onclick="javascript:yesnoCheckd4();"
                                                                                @if(old('z1') ==  "6") checked="checked" @endif >
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
                                                    <div id="d4_d" style="display:none">

                                                        <div class="card-content">
                                                            <div class="card-body">
                                                                <div class="card-text">
                                                                    <h4 class="form-section"><i class="feather icon-clipboard"></i>3.1 ในช่วง 1 เดือนที่ผ่านมารวมวันนี้ ท่านสามารถควบคุมความอยากฆ่าตัวตายที่ท่านคิดอยู่นั้นได้หรือไม่ หรือบอกได้ไหมว่าคงจะไม่ทำตามความคิดนั้นในขณะนั้น</h4>
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
                                                                                    <input type="radio" value="0" name="q8_3_3"
                                                                                    @if(old('z1') ==  "0") checked="checked" @endif >
                                                                                    <span class="vs-radio">
                                                                                        <span class="vs-radio--border"></span>
                                                                                        <span class="vs-radio--circle"></span>
                                                                                    </span>
                                                                                    <span class="">ได้</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                        <li class="d-inline-block mr-2">
                                                                            <fieldset>
                                                                                <div class="vs-radio-con">
                                                                                    <input type="radio" value="8" name="q8_3_3"
                                                                                    @if(old('z1') ==  "1") checked="checked" @endif >
                                                                                    <span class="vs-radio">
                                                                                        <span class="vs-radio--border"></span>
                                                                                        <span class="vs-radio--circle"></span>
                                                                                    </span>
                                                                                    <span class="">ไม่ได้</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>

                                                </fieldset>
                                                <h6>ข้อ 4</h6>
                                                <fieldset>
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="card-text">
                                                                <h4 class="form-section"><i class="feather icon-clipboard"></i>4. ในช่วง 1 เดือนที่ผ่านมารวมวันนี้ มีแผนการที่จะฆ่าตัวตาย</h4>
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
                                                                                <input type="radio" value="0" name="q8_4"
                                                                                @if(old('z1') ==  "0") checked="checked" @endif >
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
                                                                                <input type="radio" value="8" name="q8_4"
                                                                                @if(old('z1') ==  "1") checked="checked" @endif >
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
                                                <h6>ข้อ 5</h6>
                                                <fieldset>
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="card-text">
                                                                <h4 class="form-section"><i class="feather icon-clipboard"></i>5. ในช่วง 1 เดือนที่ผ่านมารวมวันนี้ ได้เตรียมการที่จะทำร้ายตนเองหรือเตรียมการจะฆ่าตัวตายโดยตั้งใจว่าจะให้ตายจริงๆ</h4>
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
                                                                                <input type="radio" value="0" name="q8_5"
                                                                                @if(old('z1') ==  "0") checked="checked" @endif >
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
                                                                                <input type="radio" value="9" name="q8_5"
                                                                                @if(old('z1') ==  "1") checked="checked" @endif >
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
                                                <h6>ข้อ 6</h6>
                                                <fieldset>
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="card-text">
                                                                <h4 class="form-section"><i class="feather icon-clipboard"></i>6. ได้ทำให้ตนเองบาดเจ็บแต่ไม่ตั้งใจที่จะทำให้เสียชีวิต</h4>
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
                                                                                <input type="radio" value="0" name="q8_6"
                                                                                @if(old('z1') ==  "0") checked="checked" @endif >
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
                                                                                <input type="radio" value="4" name="q8_6"
                                                                                @if(old('z1') ==  "1") checked="checked" @endif >
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
                                                <h6>ข้อ 7</h6>
                                                <fieldset>
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="card-text">
                                                                <h4 class="form-section"><i class="feather icon-clipboard"></i>7. ได้พยายามฆ่าตัวตายโดยคาดหวัง/ตั้งใจที่จะให้ตาย</h4>
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
                                                                                <input type="radio" value="0" name="q8_7"
                                                                                @if(old('z1') ==  "0") checked="checked" @endif >
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
                                                                                <input type="radio" value="10" name="q8_7"
                                                                                @if(old('z1') ==  "1") checked="checked" @endif >
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
                                                <h6>ข้อ 8</h6>
                                                <fieldset>
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="card-text">
                                                                <h4 class="form-section"><i class="feather icon-clipboard"></i>8. ตลอดชีวิตที่ผ่านมา ท่านเคยพยายามฆ่าตัวตาย</h4>
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
                                                                                <input type="radio" value="0" name="q8_8"
                                                                                @if(old('z1') ==  "0") checked="checked" @endif >
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
                                                                                <input type="radio" value="4" name="q8_8"
                                                                                @if(old('z1') ==  "1") checked="checked" @endif >
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
                                                <input type="hidden" name="user_id" value="{{$user_id}}">
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
function yesnoCheckd4() {
    if (document.getElementById('d4_2').checked) {
        document.getElementById('d4_d').style.display = 'block';
    }
    else document.getElementById('d4_d').style.display = 'none';

}
</script>
<script src="{{ asset('app-assets') }}/vendors/js/extensions/jquery.steps.min.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/forms/validation/jquery.validate.min.js"></script>

<script src="{{ asset('app-assets') }}/js/scripts/forms/wizard-steps.js"></script>

@endsection

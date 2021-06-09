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
                                <div class="container">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="card-text">
                                                    <h4 class="form-section mt-2"><i class="feather icon-clipboard"></i>แบบประเมินโรคซึมเศร้า</h4>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-body">
                                            <form id="steps-validation" action="{{route('CheckUp2.store')}}" class="steps-validation wizard-circle" method="POST" >
                                                {{csrf_field()}}
                                                <div class="row">
                                                    <div class="table-responsive">
                                                            <table class="table table-bordered mb-0">
                                                                <tbody>
                                                                    <tr class="h5 text-bold-600">
                                                                        <td class="text-center">ในช่วง 2 สัปดาห์ที่ผ่านมารวมทั้งวันนี้ ท่านมีอาการเหล่านี้ บ่อยแค่ไหน</td>
                                                                        <td class="width-125 text-center">ไม่มีเลย</td>
                                                                        <td class="width-125 text-center">เป็นบางวัน 1-7 วัน</td>
                                                                        <td class="width-125 text-center">เป็นบ่อย > 7 วัน</td>
                                                                        <td class="width-125 text-center">เป็นทุกวัน</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1. เบื่อ ไม่สนใจอยากทำอะไร</td>
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
                                                                        <td>2. ไม่สบายใจ ซึมเศร้า ท้อแท้</td>
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
                                                                        <td>3. หลับยากหรือหลับๆ ตื่นๆ หรือหลับมากไป</td>
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
                                                                        <td>4. เหนื่อยง่ายหรือไม่ค่อยมีแรง</td>
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
                                                                        <td>5. เบื่ออาหารหรือกินมากเกินไป</td>
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
                                                                    <tr>
                                                                        <td>6. รู้สึกไม่ดีกับตัวเอง คิดว่าตัวเองล้มเหลวหรือครอบครัวผิดหวัง</td>
                                                                        <td>
                                                                            <fieldset class="text-center">
                                                                                <input name="i9_6" value="0" type="radio"
                                                                                @if(old('i9_6') ==  "0") checked="checked" @endif  />
                                                                            </fieldset>
                                                                        </td>
                                                                        <td>
                                                                            <fieldset class="text-center">
                                                                                <input name="i9_6" value="1" type="radio"
                                                                                @if(old('i9_6') ==  "1") checked="checked" @endif  />
                                                                            </fieldset>
                                                                        </td>
                                                                        <td>
                                                                            <fieldset class="text-center">
                                                                                <input name="i9_6" value="2" type="radio"
                                                                                @if(old('i9_6') ==  "2") checked="checked" @endif  />
                                                                            </fieldset>
                                                                        </td>
                                                                        <td>
                                                                            <fieldset class="text-center">
                                                                                <input name="i9_6" value="3" type="radio"
                                                                                @if(old('i9_6') ==  "3") checked="checked" @endif  />
                                                                            </fieldset>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>7. สมาธิไม่ดี เวลาทำอะไร เช่น ดูโทรทัศน์ ฟังวิทยุ หรือทำงานที่ต้องใช้ความตั้งใจ</td>
                                                                        <td>
                                                                            <fieldset class="text-center">
                                                                                <input name="i9_7" value="0" type="radio"
                                                                                @if(old('i9_7') ==  "0") checked="checked" @endif  />
                                                                            </fieldset>
                                                                        </td>
                                                                        <td>
                                                                            <fieldset class="text-center">
                                                                                <input name="i9_7" value="1" type="radio"
                                                                                @if(old('i9_7') ==  "1") checked="checked" @endif  />
                                                                            </fieldset>
                                                                        </td>
                                                                        <td>
                                                                            <fieldset class="text-center">
                                                                                <input name="i9_7" value="2" type="radio"
                                                                                @if(old('i9_7') ==  "2") checked="checked" @endif  />
                                                                            </fieldset>
                                                                        </td>
                                                                        <td>
                                                                            <fieldset class="text-center">
                                                                                <input name="i9_7" value="3" type="radio"
                                                                                @if(old('i9_7') ==  "3") checked="checked" @endif  />
                                                                            </fieldset>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>8. พูดช้า ทำอะไรช้าลงจนคนอื่นสังเกตเห็นได้ หรือกระสับกระส่ายไม่สามารถอยู่นิ่งได้เหมือนที่เคยเป็น</td>
                                                                        <td>
                                                                            <fieldset class="text-center">
                                                                                <input name="i9_8" value="0" type="radio"
                                                                                @if(old('i9_8') ==  "0") checked="checked" @endif  />
                                                                            </fieldset>
                                                                        </td>
                                                                        <td>
                                                                            <fieldset class="text-center">
                                                                                <input name="i9_8" value="1" type="radio"
                                                                                @if(old('i9_8') ==  "1") checked="checked" @endif  />
                                                                            </fieldset>
                                                                        </td>
                                                                        <td>
                                                                            <fieldset class="text-center">
                                                                                <input name="i9_8" value="2" type="radio"
                                                                                @if(old('i9_8') ==  "2") checked="checked" @endif  />
                                                                            </fieldset>
                                                                        </td>
                                                                        <td>
                                                                            <fieldset class="text-center">
                                                                                <input name="i9_8" value="3" type="radio"
                                                                                @if(old('i9_8') ==  "3") checked="checked" @endif  />
                                                                            </fieldset>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>9. คิดทำร้ายตนเอง หรือคิดว่าถ้าตายไปคงจะดี</td>
                                                                        <td>
                                                                            <fieldset class="text-center">
                                                                                <input name="i9_9" value="0" type="radio"
                                                                                @if(old('i9_9') ==  "0") checked="checked" @endif  />
                                                                            </fieldset>
                                                                        </td>
                                                                        <td>
                                                                            <fieldset class="text-center">
                                                                                <input name="i9_9" value="1" type="radio"
                                                                                @if(old('i9_9') ==  "1") checked="checked" @endif  />
                                                                            </fieldset>
                                                                        </td>
                                                                        <td>
                                                                            <fieldset class="text-center">
                                                                                <input name="i9_9" value="2" type="radio"
                                                                                @if(old('i9_9') ==  "2") checked="checked" @endif  />
                                                                            </fieldset>
                                                                        </td>
                                                                        <td>
                                                                            <fieldset class="text-center">
                                                                                <input name="i9_9" value="3" type="radio"
                                                                                @if(old('i9_9') ==  "3") checked="checked" @endif  />
                                                                            </fieldset>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="col-md-12 text-right">
                                                            <input type="hidden" name="user_id" value="{{$user_id}}">
                                                            <button type="submit" class="btn btn-primary mb-1 mt-1">ส่งข้อมูล</button>
                                                        </div>
                                                </div>

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

</script>


@endsection

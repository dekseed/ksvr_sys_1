@extends('layouts.check_up')

@section('styles')

  <link href="{{ asset('app-assets') }}/css/plugins/forms/wizard.css" rel="stylesheet" type="text/css">

@endsection

@section('content')
     <!-- BEGIN: Content-->
     <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            {{-- <div class="content-header text-center">
                <div class="col-md-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title mb-0">โรงพยาบาลค่ายกฤษณ์สีวะรา</h2>

                        </div>
                    </div>
                </div>

            </div> --}}
            <div class="content-body">

                <!-- Form wizard with number tabs section start -->
                <section id="validation">
                    <div class="row">
                        <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            {{-- <h2 class="card-title">แบบประเมินความผูกพันของบุคลากรต่อองค์กร</h2> --}}
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                            </div>
                        <div class="card-content">
                            <div class="card-body">
                            <div class="card-text">
                                <p class="font-large-1 text-center">แบบประเมินค่ากำลังพลชั้นสัญญาบัตร</p>

                            </div>
                            </div>
                        </div>

                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            {{-- <h2 class="card-title">แบบประเมินความผูกพันของบุคลากรต่อองค์กร</h2> --}}
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                            </div>

                            <div class="card-content collapse show">
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
                                {{-- <img class="img-responsive" src="data:image/png;base64, {!! base64_encode(QrCode::format('png')
                                ->size(350)
                                ->generate('www.ksvrhospital.go.th/assessment')) !!} "> --}}
                            <form action="{{route('assessment.store')}}" id="assessment" class="steps-validation wizard-circle" method="POST">
                                {{csrf_field()}}
                                <!-- Step 1 -->
                                {{-- <h6>ส่วนที่ 1</h6>
                                <fieldset>
                                    <div class="card-content">
                                    <div class="card-body">
                                        <div class="card-text">
                                        <p class="font-large-1">ส่วนที่ 1 ส่วนคำถามข้อมูลส่วนบุคคล</p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="card-body">
                                    <div class="form-group">
                                        <label for="projectinput2">แผนก</label>
                                            <select class="select2-data-array-dep form-control-lg" id="select2-data-array-dep" name="department">
                                            @if(!is_null(old('department')))
                                                <option value="{{old('department')}}">{{old('department')}}
                                                </option>
                                            @endif
                                            </select>

                                    </div>
                                    </div>
                                </fieldset> --}}
                                <!-- Step 2 -->
                                <h6>ส่วนที่ 1</h6>
                                <fieldset>

                                    <div class="card-content">
                                    <div class="card-body">
                                        <div class="card-text">
                                        <p class="font-large-1">ส่วนที่ 1 ส่วนคำถามวัดความสุข</p>
                                        <p>
                                        <dl class="row">
                                            <dt class="col-sm-3 text-right">ไม่เลย</dt>
                                            <dd class="col-sm-9">หมายถึง  ไม่เคยมีเหตุการณ์  อาการ  ความรู้สึก  หรือไม่เห็นด้วยกับเรื่องนั้นเลยในช่วง  1  เดือน</dd>
                                        </dl>
                                        <dl class="row">
                                            <dt class="col-sm-3 text-right">เล็กน้อย</dt>
                                            <dd class="col-sm-9">หมายถึง  เคยมีอาการณ์  อาการ   ความรู้สึกนั้นๆ เพียงเล็กน้อยในช่วง  1  เดือน หรือเห็นด้วยกับเรื่องนั้นๆ เพียงเล็กน้อย</dd>
                                        </dl>
                                        <dl class="row">
                                            <dt class="col-sm-3 text-right">มาก</dt>
                                            <dd class="col-sm-9">หมายถึง  เคยมีเหตุการณ์  อาการ  ความรู้สึกนั้นๆ มากในช่วง  1  เดือน  หรือเห็นด้วยกับเรื่องนั้นๆ มาก</dd>
                                        </dl>
                                        <dl class="row">
                                            <dt class="col-sm-3 text-right">มากที่สุด</dt>
                                            <dd class="col-sm-9">หมายถึง  เคยมีเหตุการณ์  อาการ  ความรู้สึกนั้นๆ มากที่สุดในช่วง 1 เดือน  หรือเห็นด้วยกับเรื่องนั้นๆ มากที่สุด</dd>
                                        </dl>

                                        </p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                    <tbody>
                                        <tr class="h5 text-bold-600">
                                        <td class="text-center">คำถาม</td>
                                        <td class="width-125 text-center">ไม่เลย</td>
                                        <td class="width-125 text-center">เล็กน้อย</td>
                                        <td class="width-125 text-center">มาก</td>
                                        <td class="width-125 text-center">มากที่สุด</td>
                                        </tr>
                                        <tr>
                                        <td>2.1  ท่านรู้สึกพึงพอใจในชีวิต</td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_1" value="1" type="radio" @if(old('b2_1') ==  "1") checked="checked" @endif/>

                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_1" value="2" type="radio" @if(old('b2_1') == "2") checked="checked" @endif/>
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_1" value="3" type="radio" @if(old('b2_1') ==  "3") checked="checked" @endif/>
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_1" value="4" type="radio" @if(old('b2_1') ==  "4") checked="checked" @endif/>
                                            </fieldset>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>2.2  ท่านรู้สึกสบายใจ</td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_2" value="1" type="radio" @if(old('b2_2') ==  "1") checked="checked" @endif/>
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_2" value="2" type="radio" @if(old('b2_2') ==  "2") checked="checked" @endif />
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_2" value="3" type="radio" @if(old('b2_2') ==  "3") checked="checked" @endif />
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_2" value="4" type="radio" @if(old('b2_2') ==  "4") checked="checked" @endif />
                                            </fieldset>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>2.3  ท่านรู้สึกเบื่อหน่ายท้อแท้กับการดำเนินชีวิตประจำวัน</td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_3" value="1" type="radio" @if(old('b2_3') ==  "1") checked="checked" @endif  />
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_3" value="2" type="radio" @if(old('b2_3') ==  "2") checked="checked" @endif  />
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_3" value="3" type="radio" @if(old('b2_3') ==  "3") checked="checked" @endif  />
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_3" value="4" type="radio" @if(old('b2_3') ==  "4") checked="checked" @endif  />
                                            </fieldset>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>2.4  ท่านรู้สึกผิดหวังในตัวเอง</td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_4" value="1" type="radio" @if(old('b2_4') ==  "1") checked="checked" @endif />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_4" value="2" type="radio" @if(old('b2_4') ==  "2") checked="checked" @endif />
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_4" value="3" type="radio" @if(old('b2_4') ==  "3") checked="checked" @endif />
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_4" value="4" type="radio" @if(old('b2_4') ==  "4") checked="checked" @endif />
                                            </fieldset>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>2.5  ท่านรู้สึกว่าชีวิตของท่านมีแต่ความทุกข์</td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_5" value="1" type="radio" @if(old('b2_5') ==  "1") checked="checked" @endif />
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_5" value="2" type="radio" @if(old('b2_5') ==  "2") checked="checked" @endif />
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_5" value="3" type="radio" @if(old('b2_5') ==  "3") checked="checked" @endif />
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_5" value="4" type="radio" @if(old('b2_5') ==  "4") checked="checked" @endif />
                                            </fieldset>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>2.6  ท่านสามารถทำใจยอมรับได้สำหรับปัญหาที่ยากจะแก้ไข (เมื่อมีปัญหา)</td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="b2_6" value="1" type="radio" @if(old('b2_6') ==  "1") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="b2_6" value="2" type="radio" @if(old('b2_6') ==  "2") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_6" value="3" type="radio" @if(old('b2_6') ==  "3") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_6" value="4" type="radio" @if(old('b2_6') ==  "4") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2.7  ท่านมั่นใจว่าสามารถควบคุมอารมณ์ได้เมื่อมีเหตุการณ์คับขันหรือร้ายแรงเกิดขึ้น</td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="b2_7" value="1" type="radio" @if(old('b2_7') ==  "1") checked="checked" @endif />
                                                </fieldset>
                                            </td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="b2_7" value="2" type="radio" @if(old('b2_7') ==  "2") checked="checked" @endif />
                                                </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_7" value="3" type="radio" @if(old('b2_7') ==  "3") checked="checked" @endif />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_7" value="4" type="radio" @if(old('b2_7') ==  "4") checked="checked" @endif />
                                            </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2.8  ท่านมั่นใจที่จะเผชิญเหตุการณ์ร้ายแรงที่เกิดขึ้นในชีวิต</td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="b2_8" value="1" type="radio" @if(old('b2_8') ==  "1") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="b2_8" value="2" type="radio" @if(old('b2_8') ==  "2") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_8" value="3" type="radio" @if(old('b2_8') ==  "3") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_8" value="4" type="radio" @if(old('b2_8') ==  "4") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2.9  ท่านรู้สึกเห็นอกเห็นใจเมื่อผู้อื่นมีทุกข์</td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="b2_9" value="1" type="radio" @if(old('b2_9') ==  "1") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="b2_9" value="2" type="radio" @if(old('b2_9') ==  "2") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_9" value="3" type="radio" @if(old('b2_9') ==  "3") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_9" value="4" type="radio" @if(old('b2_9') ==  "4") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2.10 ท่านรู้สึกเป็นสุขในการช่วยเหลือผู้อื่นที่มีปัญหา</td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="b2_10" value="1" type="radio" @if(old('b2_10') ==  "1") checked="checked" @endif />
                                                </fieldset>
                                            </td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="b2_10" value="2" type="radio" @if(old('b2_10') ==  "2") checked="checked" @endif />
                                                </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_10" value="3" type="radio" @if(old('b2_10') ==  "3") checked="checked" @endif />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_10" value="4" type="radio" @if(old('b2_10') ==  "4") checked="checked" @endif />
                                            </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2.11 ท่านให้ความช่วยเหลือแก่ผู้อื่นเมื่อมีโอกาส</td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="b2_11" value="1" type="radio" @if(old('b2_11') ==  "1") checked="checked" @endif />
                                                </fieldset>
                                            </td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="b2_11" value="2" type="radio" @if(old('b2_11') ==  "2") checked="checked" @endif />
                                                </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_11" value="3" type="radio" @if(old('b2_11') ==  "3") checked="checked" @endif />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_11" value="4" type="radio" @if(old('b2_11') ==  "4") checked="checked" @endif />
                                            </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2.12 ท่านรู้สึกภูมิใจในตนเอง</td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="b2_12" value="1" type="radio" @if(old('b2_12') ==  "1") checked="checked" @endif />
                                                </fieldset>
                                            </td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="b2_12" value="2" type="radio" @if(old('b2_12') ==  "2") checked="checked" @endif />
                                                </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_12" value="3" type="radio" @if(old('b2_12') ==  "3") checked="checked" @endif />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_12" value="4" type="radio" @if(old('b2_12') ==  "4") checked="checked" @endif />
                                            </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2.13 ท่านรู้สึกมั่นคง  ปลอดภัยเมื่ออยู่ในครอบครัว</td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="b2_13" value="1" type="radio" @if(old('b2_13') ==  "1") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="b2_13" value="2" type="radio" @if(old('b2_13') ==  "2") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_13" value="3" type="radio" @if(old('b2_13') ==  "3") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_13" value="4" type="radio" @if(old('b2_13') ==  "4") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2.14 หากท่านป่วยหนัก  ท่านเชื่อว่าครอบครัวจะดูแลท่านเป็นอย่างดี</td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="b2_14" value="1" type="radio" @if(old('b2_14') ==  "1") checked="checked" @endif />
                                                </fieldset>
                                            </td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="b2_14" value="2" type="radio" @if(old('b2_14') ==  "2") checked="checked" @endif />
                                                </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_14" value="3" type="radio" @if(old('b2_14') ==  "3") checked="checked" @endif />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_14" value="4" type="radio" @if(old('b2_14') ==  "4") checked="checked" @endif />
                                            </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2.15 สมาชิกในครอบครัวมีความรักและผูกพันต่อกัน</td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="b2_15" value="1" type="radio" @if(old('b2_15') ==  "1") checked="checked" @endif />
                                                </fieldset>
                                            </td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="b2_15" value="2" type="radio" @if(old('b2_15') ==  "2") checked="checked" @endif />
                                                </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_15" value="3" type="radio" @if(old('b2_15') ==  "3") checked="checked" @endif />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="b2_15" value="4" type="radio" @if(old('b2_15') ==  "4") checked="checked" @endif />
                                            </fieldset>
                                            </td>
                                        </tr>
                                    </tbody>
                                    </table>
                                    </div>
                                </fieldset>
                                <!-- Step 3 -->
                                <h6>ส่วนที่ 2</h6>
                                <fieldset>
                                    <div class="card-content">
                                    <div class="card-body">
                                        <div class="card-text">
                                        <p class="font-large-1">ส่วนที่  2  ส่วนคำถามประเมินความคิดเห็นของท่านต่อแง่มุมต่างๆ ในการทำงาน</p>
                                        <p>
                                        <ul class="h5 list-inline">
                                            <li class="list-inline-item" style="margin-right: 25px;">1 = ไม่เห็นด้วยมากที่สุด</li>
                                            <li class="list-inline-item" style="margin-right: 25px;">2 = ไม่เห็นด้วย</li>
                                            <li class="list-inline-item" style="margin-right: 25px;">3 = ไม่แน่ใจ</li>
                                            <li class="list-inline-item" style="margin-right: 25px;">4 = เห็นด้วย</li>
                                            <li class="list-inline-item">5 = เห็นด้วยมากที่สุด</li>
                                        </ul>
                                        </p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                    <tbody>
                                        <tr class="h5 text-bold-600">
                                        <td class="text-center">คำถาม</td>
                                        <td class="width-125 text-center">1</td>
                                        <td class="width-125 text-center">2</td>
                                        <td class="width-125 text-center">3</td>
                                        <td class="width-125 text-center">4</td>
                                        <td class="width-125 text-center">5</td>
                                        </tr>
                                        <tr>
                                        <td  colspan="6" class="text-bold-600">3.1 ความคิดเห็นเกี่ยวกับงานในความรับผิดชอบ</td>
                                        </tr>
                                        <tr>
                                        <td>3.1.1  งานของข้าพเจ้ามีการเรียนรู้ไม่หยุดนิ่ง</td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_1_1" value="1" type="radio" @if(old('c3_1_1') ==  "1") checked="checked" @endif  />
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_1_1" value="2" type="radio" @if(old('c3_1_1') ==  "2") checked="checked" @endif  />
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_1_1" value="3" type="radio" @if(old('c3_1_1') ==  "3") checked="checked" @endif  />
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_1_1" value="4" type="radio" @if(old('c3_1_1') ==  "4") checked="checked" @endif  />
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_1_1" value="5" type="radio" @if(old('c3_1_1') ==  "5") checked="checked" @endif  />
                                            </fieldset>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>3.1.2  ข้าพเจ้ามีอิสระในการตัดสินใจเพื่อความสำเร็จ</td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_1_2" value="1" type="radio" @if(old('c3_1_2') ==  "1") checked="checked" @endif  />
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_1_2" value="2" type="radio" @if(old('c3_1_2') ==  "2") checked="checked" @endif  />
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_1_2" value="3" type="radio" @if(old('c3_1_2') ==  "3") checked="checked" @endif  />
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_1_2" value="4" type="radio" @if(old('c3_1_2') ==  "4") checked="checked" @endif  />
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_1_2" value="5" type="radio" @if(old('c3_1_2') ==  "5") checked="checked" @endif  />
                                            </fieldset>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>3.1.3  ข้าพเจ้าได้รับมอบหมายงานที่ตรงกับความสามารถ</td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_1_3" value="1" type="radio" @if(old('c3_1_3') ==  "1") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_1_3" value="2" type="radio" @if(old('c3_1_3') ==  "2") checked="checked" @endif  />
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_1_3" value="3" type="radio" @if(old('c3_1_3') ==  "3") checked="checked" @endif  />
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_1_3" value="4" type="radio" @if(old('c3_1_3') ==  "4") checked="checked" @endif  />
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_1_3" value="5" type="radio" @if(old('c3_1_3') ==  "5") checked="checked" @endif  />
                                            </fieldset>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td colspan="6" class="text-bold-600">3.2 ความคิดเห็นเกี่ยวกับสภาพแวดล้อมในการทำงาน</td>
                                        </tr>
                                        <tr>
                                        <td>3.2.1 สภาพแวดล้อมทางกายภาพในหน่วยงานของข้าพเจ้า เช่น ห้องทำงาน แสง และเสียง เอื้ออำนวยต่อการทำงาน</td>
                                        <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_2_1" value="1" type="radio" @if(old('c3_2_1') ==  "1") checked="checked" @endif  />
                                                </fieldset>
                                        </td>
                                        <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_2_1" value="2" type="radio" @if(old('c3_2_1') ==  "2") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_2_1" value="3" type="radio" @if(old('c3_2_1') ==  "3") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_2_1" value="4" type="radio" @if(old('c3_2_1') ==  "4") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_2_1" value="5" type="radio" @if(old('c3_2_1') ==  "5") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.2.2 ข้าพเจ้าได้รับความร่วมมือจากเพื่อนร่วมงานในการปฏิบัติงาน เป็นอย่างดี</td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_2_2" value="1" type="radio" @if(old('c3_2_2') ==  "1") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_2_2" value="2" type="radio" @if(old('c3_2_2') ==  "2") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_2_2" value="3" type="radio" @if(old('c3_2_2') ==  "3") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_2_2" value="4" type="radio" @if(old('c3_2_2') ==  "4") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_2_2" value="5" type="radio" @if(old('c3_2_2') ==  "5") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.2.3 เมื่อเกิดปัญหาในการปฏิบัติงาน ข้าพเจ้าได้รับทราบข้อมูลและมีการประชุมร่วมกันเพื่อหาแนวทางปฏิบัติที่เหมาะสม</td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_2_3" value="1" type="radio" @if(old('c3_2_3') ==  "1") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_2_3" value="2" type="radio" @if(old('c3_2_3') ==  "2") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_2_3" value="3" type="radio" @if(old('c3_2_3') ==  "3") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_2_3" value="4" type="radio" @if(old('c3_2_3') ==  "4") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_2_3" value="5" type="radio" @if(old('c3_2_3') ==  "5") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" class="text-bold-600">3.3 ความคิดเห็นเกี่ยวกับภาวะผู้นำ</td>
                                        </tr>
                                        <tr>
                                            <td>3.3.1 การกำหนดวิสัยทัศน์ พันธกิจ ยุทธศาสตร์ นโยบาย แผนงาน โครงสร้างสายบังคับบัญชา การมอบอำนาจมีความเหมาะสม</td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_3_1" value="1" type="radio" @if(old('c3_3_1') ==  "1") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_3_1" value="2" type="radio" @if(old('c3_3_1') ==  "2") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_3_1" value="3" type="radio" @if(old('c3_3_1') ==  "3") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_3_1" value="4" type="radio" @if(old('c3_3_1') ==  "4") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_3_1" value="5" type="radio" @if(old('c3_3_1') ==  "5") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.3.2 ผู้อำนวยการสามารถนำพาองค์กรไปสู่ความสำเร็จได้</td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_3_2" value="1" type="radio" @if(old('c3_3_2') ==  "1") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_3_2" value="2" type="radio" @if(old('c3_3_2') ==  "2") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_3_2" value="3" type="radio" @if(old('c3_3_2') ==  "3") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_3_2" value="4" type="radio" @if(old('c3_3_2') ==  "4") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_3_2" value="5" type="radio" @if(old('c3_3_2') ==  "5") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.3.3 ผู้อำนวยการมีการสื่อสารทำความเข้าใจในเรื่องยุทธศาสตร์และการแปลงยุทธศาสตร์ไปสู่การปฏิบัติ</td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_3_3" value="1" type="radio" @if(old('c3_3_3') ==  "1") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_3_3" value="2" type="radio" @if(old('c3_3_3') ==  "2") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_3_3" value="3" type="radio" @if(old('c3_3_3') ==  "3") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_3_3" value="4" type="radio" @if(old('c3_3_3') ==  "4") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_3_3" value="5" type="radio" @if(old('c3_3_3') ==  "5") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" class="text-bold-600">3.4  ความคิดเห็นเกี่ยวกับวัฒนธรรมในองค์กร  (หัวหน้างานในที่นี้หมายถึงผู้บังคับบัญชาที่เหนือขึ้นไป 1 ระดับ)</td>
                                        </tr>
                                        <tr>
                                            <td>3.4.1 หัวหน้างานมีวิธีการแก้ไขปัญหาและความขัดแย้งในหน่วยงาน ด้วยความเหมาะสมและเป็นธรรม</td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_4_1" value="1" type="radio" @if(old('c3_4_1') ==  "1") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_4_1" value="2" type="radio" @if(old('c3_4_1') ==  "2") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_4_1" value="3" type="radio" @if(old('c3_4_1') ==  "3") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_4_1" value="4" type="radio" @if(old('c3_4_1') ==  "4") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_4_1" value="5" type="radio" @if(old('c3_4_1') ==  "5") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.4.2 หน่วยงานให้ความสำคัญต่อบุคลากรภายในหน่วยงาน</td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_4_2" value="1" type="radio" @if(old('c3_4_2') ==  "1") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_4_2" value="2" type="radio" @if(old('c3_4_2') ==  "2") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_4_2" value="3" type="radio" @if(old('c3_4_2') ==  "3") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_4_2" value="4" type="radio" @if(old('c3_4_2') ==  "4") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_4_2" value="5" type="radio" @if(old('c3_4_2') ==  "5") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.4.3 มีการชื่นชมเจ้าหน้าที่ผู้นำเสนอความคิดใหม่ ๆ</td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_4_3" value="1" type="radio" @if(old('c3_4_3') ==  "1") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_4_3" value="2" type="radio" @if(old('c3_4_3') ==  "2") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_4_3" value="3" type="radio" @if(old('c3_4_3') ==  "3") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_4_3" value="4" type="radio" @if(old('c3_4_3') ==  "4") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_4_3" value="5" type="radio" @if(old('c3_4_3') ==  "5") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" class="text-bold-600">3.5 ความคิดเห็นเกี่ยวกับค่าตอบแทนและสวัสดิการ</td>
                                        </tr>
                                        <tr>
                                            <td>3.5.1 ข้าพเจ้าได้รับการประเมินเพื่อการขึ้นค่าตอบแทนอย่างเป็นธรรม</td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_5_1" value="1" type="radio" @if(old('c3_5_1') ==  "1") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_5_1" value="2" type="radio" @if(old('c3_5_1') ==  "2") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_5_1" value="3" type="radio" @if(old('c3_5_1') ==  "3") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_5_1" value="4" type="radio" @if(old('c3_5_1') ==  "4") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_5_1" value="5" type="radio" @if(old('c3_5_1') ==  "5") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.5.2 ข้าพเจ้าได้รับค่าตอบแทนเหมาะสมกับปริมาณงานที่ได้รับผิดชอบ</td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_5_2" value="1" type="radio" @if(old('c3_5_2') ==  "1") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_5_2" value="2" type="radio" @if(old('c3_5_2') ==  "2") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_5_2" value="3" type="radio" @if(old('c3_5_2') ==  "3") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_5_2" value="4" type="radio" @if(old('c3_5_2') ==  "4") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_5_2" value="5" type="radio" @if(old('c3_5_2') ==  "5") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.5.3 ในหน่วยงานจัดสวัสดิการสำหรับผู้ปฏิบัติงานได้เหมาะสมกับความต้องการ</td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_5_3" value="1" type="radio" @if(old('c3_5_3') ==  "1") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_5_3" value="2" type="radio" @if(old('c3_5_3') ==  "2") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_5_3" value="3" type="radio" @if(old('c3_5_3') ==  "3") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_5_3" value="4" type="radio" @if(old('c3_5_3') ==  "4") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_5_3" value="5" type="radio" @if(old('c3_5_3') ==  "5") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" class="text-bold-600">3.6 ความคิดเห็นเกี่ยวกับโอกาสและความก้าวหน้าทางอาชีพในองค์กร</td>
                                        </tr>
                                        <tr>
                                            <td>3.6.1 ข้าพเจ้าได้รับการพัฒนาทักษะและความสามารถเพื่อเตรียมความพร้อมในการก้าวไปสู่ตำแหน่งที่สูงขึ้นอยู่เสมอ</td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_6_1" value="1" type="radio" @if(old('c3_6_1') ==  "1") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_6_1" value="2" type="radio" @if(old('c3_6_1') ==  "2") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_6_1" value="3" type="radio" @if(old('c3_6_1') ==  "3") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_6_1" value="4" type="radio" @if(old('c3_6_1') ==  "4") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_6_1" value="5" type="radio" @if(old('c3_6_1') ==  "5") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.6.2 เส้นทางการเติบโตในการปฏิบัติงานของข้าพเจ้ามีความชัดเจน</td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_6_2" value="1" type="radio" @if(old('c3_6_2') ==  "1") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_6_2" value="2" type="radio" @if(old('c3_6_2') ==  "2") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_6_2" value="3" type="radio" @if(old('c3_6_2') ==  "3") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_6_2" value="4" type="radio" @if(old('c3_6_2') ==  "4") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_6_2" value="5" type="radio" @if(old('c3_6_2') ==  "5") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.6.3 หน่วยงานมีการวางแผนที่จะส่งเสริมให้ข้าพเจ้าก้าวขึ้นไปสู่ตำแหน่งที่สูงกว่าได้ตามลำดับ</td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_6_3" value="1" type="radio" @if(old('c3_6_3') ==  "1") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_6_3" value="2" type="radio" @if(old('c3_6_3') ==  "2") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_6_3" value="3" type="radio" @if(old('c3_6_3') ==  "3") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_6_3" value="4" type="radio" @if(old('c3_6_3') ==  "4") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_6_3" value="5" type="radio" @if(old('c3_6_3') ==  "5") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" class="text-bold-600">3.7 ความคิดเห็นเกี่ยวกับการรักษาดุลยภาพระหว่างชีวิตการทำงานและชีวิตส่วนตัว</td>
                                        </tr>
                                        <tr>
                                            <td>3.7.1 การทำงานของข้าพเจ้าไม่เป็นอุปสรรคต่อการดำเนินชีวิตครอบครัว</td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_7_1" value="1" type="radio" @if(old('c3_7_1') ==  "1") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_7_1" value="2" type="radio" @if(old('c3_7_1') ==  "2") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_7_1" value="3" type="radio" @if(old('c3_7_1') ==  "3") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_7_1" value="4" type="radio" @if(old('c3_7_1') ==  "4") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_7_1" value="5" type="radio" @if(old('c3_7_1') ==  "5") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.7.2 ข้าพเจ้าสามารถแบ่งเวลาในการทำงาน เวลาส่วนตัว เวลาครอบครัวและสังคมได้อย่างเหมาะสม</td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_7_2" value="1" type="radio" @if(old('c3_7_2') ==  "1") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                                <fieldset class="text-center">
                                                    <input  name="c3_7_2" value="2" type="radio" @if(old('c3_7_2') ==  "2") checked="checked" @endif  />
                                                </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_7_2" value="3" type="radio" @if(old('c3_7_2') ==  "3") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_7_2" value="4" type="radio" @if(old('c3_7_2') ==  "4") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                            <td>
                                            <fieldset class="text-center">
                                                <input  name="c3_7_2" value="5" type="radio" @if(old('c3_7_2') ==  "5") checked="checked" @endif  />
                                            </fieldset>
                                            </td>
                                        </tr>
                                    </tbody>
                                    </table>
                                </div>
                                <br />
                                </fieldset>
                                <!-- Step 4 -->
                                <h6>ส่วนที่ 3</h6>
                                <fieldset>
                                    <div class="card-content">
                                    <div class="card-body">
                                        <div class="card-text">
                                        <p class="font-large-1">ส่วนที่ 3 ส่วนคำถามความพึงพอใจต่อการทำงานโดยรวม</p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                    <tbody>
                                        <tr class="h5 text-bold-600">
                                        <td class="text-center">คำถาม</td>
                                        <td class="width-125 text-center">(1)<br/>ไม่พึงพอใจมากที่สุด</td>
                                        <td class="width-125 text-center">(2)<br/>ไม่พึงพอใจ</td>
                                        <td class="width-125 text-center">(3)<br/>ไม่แน่ใจ</td>
                                        <td class="width-125 text-center">(4)<br/>พึงพอใจ</td>
                                        <td class="width-125 text-center">(5)<br/>พึงพอใจมากที่สุด</td>
                                        </tr>
                                        <tr>
                                        <td class="text-bold-600">4.1 ความพึงพอใจต่อการทำงานโดยรวม</td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="d4_1" value="1" type="radio" @if(old('d4_1') ==  "1") checked="checked" @endif  />
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="d4_1" value="2" type="radio" @if(old('d4_1') ==  "2") checked="checked" @endif  />
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="d4_1" value="3" type="radio" @if(old('d4_1') ==  "3") checked="checked" @endif  />
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="d4_1" value="4" type="radio" @if(old('d4_1') ==  "4") checked="checked" @endif  />
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset class="text-center">
                                                <input  name="d4_1" value="5" type="radio" @if(old('d4_1') ==  "5") checked="checked" @endif  />
                                            </fieldset>
                                        </td>
                                        </tr>
                                    </tbody>
                                    </table>
                                </div>
                                <br />
                                </fieldset>
                                <!-- Step 5 -->
                                <h6>ส่วนที่ 4</h6>
                                <fieldset>
                                    <div class="card-content">
                                    <div class="card-body">
                                        <div class="card-text">
                                        <p class="font-large-1">ส่วนที่ 4 ส่วนคำถามปิดท้ายและข้อเสนอแนะอื่น ๆ</p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="card-body">
                                    <div class="form-group">
                                        <label for="timesheetinput7">ข้อเสนอแนะอื่น ๆ ที่ต้องการจากผู้บังคับบัญชา เพื่อปรับปรุงต่อไป</label>
                                        <div class="position-relative has-icon-left">
                                        <textarea id="timesheetinput7" rows="5" class="form-control" name="notes" placeholder="notes"></textarea>
                                        <div class="form-control-position">
                                            <i class="ft-file"></i>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <br />
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

  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->

 <script src="{{ asset('app-assets') }}/vendors/js/extensions/jquery.steps.min.js" type="text/javascript"></script>

  <script src="{{ asset('app-assets') }}/vendors/js/forms/validation/jquery.validate.min.js"
  type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN STACK JS-->
  <script src="{{ asset('app-assets') }}/js/core/app-menu.js" type="text/javascript"></script>
  <script src="{{ asset('app-assets') }}/js/core/app.js" type="text/javascript"></script>

  <script src="{{ asset('app-assets') }}/js/scripts/forms/wizard-steps.js" type="text/javascript"></script>

@endsection

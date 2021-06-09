@extends('layouts.ass')

@section('styles')
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/toggle/switchery.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/unslider.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
  <!-- END VENDOR CSS-->

  <!-- BEGIN STACK CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/app.css">
  <!-- END STACK CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/validation/form-validation.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/switch.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/selects/select2.min.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('../../../app-assets/assets/css/style.css') }}">
@endsection

@section('content')
  <h2 class="content-header-title mb-0 mt-2 text-center">แบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก โรงพยาบาลค่ายกฤษณ์สีวะรา (สำหรับเจ้าหน้าที่ตรวจสุขภาพ)</h2>
  <div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          {{-- <h3 class="content-header-title mb-0">แบบประเมินความผูกพันของบุคลากรต่อองค์กร</h3> --}}
          {{-- <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Page</a>
                </li>
                <li class="breadcrumb-item active">Form Wizard
                </li>
              </ol>
            </div>
          </div> --}}
        </div>
        {{-- <div class="content-header-right col-md-6 col-12">
          <div class="media width-250 float-right">
            <div class="media-left media-middle">
              <div id="sp-bar-total-sales"></div>
            </div>
            <div class="media-body media-right text-right">
              <h3 class="m-0">$5,668</h3>
              <span class="text-muted">Sales</span>
            </div>
          </div>
        </div> --}}
      </div>

      <div class="content-body">

        <!-- Form wizard with number tabs section start -->
        <section id="validation">

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  {{-- <h2 class="card-title">แบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก โรงพยาบาลค่ายกฤษณ์สีวะรา</h2> --}}
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
                <div class="card-content collpase show">
                  <div class="card-body">
                    <div class="card-text">
                    @if(count($errors) > 0)
                      <div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
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
                    
                    </div>
                    <form id="store" class="form-horizontal" name="store" action="{{ route('staff.update', $report1_1->id)}}" method="POST">
                                      {{ csrf_field() }}
                                      {{ method_field('PUT') }}
                                      <input type="hidden" name="report1_id" value="{{ $report1_1->report1_id }}">
                      
                      <div class="form-body">
                        <h4 class="form-section"><i class="ft-user"></i> ข้อมูลทั่วไป</h4>
                         <div class="row">
                            <div class="form-group col-md-2 mb-2">
                                <label for="projectinput1">คำนำหน้า</label>
                                <select class="select2-data-array form-control-lg" id="select2-array"
                                name="title_name" value="{{ old('title_name') }}" 
                                {{-- {{ $report1_1->report->title_name == $titleNames->id ? 'selected' : '' }} --}}
                                ></select>
                            </div>
                            <div class="form-group col-md-5 mb-2">
                                <label for="projectinput1">ชื่อหน้า</label>
                                <input type="text" id="projectinput1" class="form-control" value="{{ $report1_1->report->first_name }}"
                                              name="first_name">
                            </div>
                            <div class="form-group col-md-5 mb-2">
                                <label for="projectinput2">นามสกุล</label>
                                <input type="text" id="projectinput2" class="form-control" value="{{ $report1_1->report->last_name }}"
                                              name="last_name">
                            </div>
                         </div>
                         <div class="row">
                           <div class="form-group col-md-4 mb-2">
                                <label for="projectinput3">เลขที่บัตรประจำตัวประชาชน</label>
                                <input type="text" id="projectinput3" class="form-control" value="{{ $report1_1->report->cid }}" name="cid">
                            </div>
                            <div class="form-group col-md-4 mb-2">
                                <label for="projectinput3">เลขที่ HN</label>
                                <input type="text" id="projectinput3" class="form-control" value="{{ $report1_1->report->hn }}" name="hn">
                            </div>
                            <div class="form-group col-md-4 mb-2">
                                <label for="projectinput4">อายุ</label>
                                <input type="text" id="projectinput4" class="form-control" value="{{ $report1_1->report->age }}" name="age">
                            </div>
                         </div>
                        <h4 class="form-section"><i class="ft-user"></i> ข้อมูลทั่วไป</h4>
                         <div class="row">
                            <div class="form-group col-md-6 mb-1">
                                <label for="projectinput3">น้ำหนัก</label>
                                <div class="controls">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
                                        <input type="text" class="form-control" placeholder="น้ำหนัก" aria-label="น้ำหนัก" value="{{ $report1_1->weight }}"
                                                       name="weight" id='weight'>
                                        <span class="input-group-addon">ก.ก.</span>
                                    </div>
                                </div>
                            </div>
                                            
                            <div class="form-group col-md-6 mb-1">
                                <label for="projectinput3">ส่วนสูง</label>
                                <div class="controls">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
                                        <input type="text" class="form-control" placeholder="ส่วนสูง" aria-label="ส่วนสูง" value="{{ $report1_1->height }}"
                                                       name="height" id='height'>
                                        <span class="input-group-addon">ซ.ม.</span>
                                    </div>
                                </div>
                            </div>
                         </div>
                         <div class="row">
                            <div class="form-group col-md-6 mb-2">
                                <label for="projectinput3">เส้นรอบเอว (วัดผ่านสะดือ)</label>    
                                <div class="controls">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
                                        <input type="text" class="form-control" place0holder="เส้นรอบเอว" aria-label="เส้นรอบเอว" value="{{ $report1_1->waist }}"
                                                       name="waist" id='waist'>
                                        <span class="input-group-addon">ซ.ม.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6 mb-2">
                                <label for="bmi">BMI</label>    
                                <div class="controls">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
                                        <input type="text" class="form-control" place0holder="BMI" aria-label="BMI" value="{{ $report1_1->bmi }}"
                                                       name="bmi" id='bmi'>
                                        
                                    </div>
                                </div>
                            </div>
                         </div>
                        <hr>
                         <div class="row">
                            <div class="form-group col-md-6 mb-2">
                                <label for="projectinput3">ความดันโลหิต (วัดครั้งที่ 1)</label>
                                <div class="controls">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
                                        <input type="number" class="form-control" placeholder="ความดันโลหิต" aria-label="ความดันโลหิต" value="{{ $report1_1->pressure_1 }}"
                                                       name="pressure_1" id='pressure_1'>
                                        <span class="input-group-addon">มม. ปรอท</span>
                                    </div>
                                </div>
                            </div>
                                            
                            <div class="form-group col-md-6 mb-2">
                                <label for="projectinput3">ชีพจร ครั้งที่ 1</label>
                                <div class="controls">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
                                        <input type="number" class="form-control" placeholder="ชีพจร" aria-label="ชีพจร" value="{{ $report1_1->pulse_1 }}"
                                                       name="pulse_1" id='pulse_1'>
                                        <span class="input-group-addon">ครั้ง/นาที</span>
                                    </div>
                                </div>
                            </div>
                         </div>
                         <div class="row">
                            <div class="form-group col-md-6 mb-2">
                                <label for="projectinput3">ความดันโลหิต (วัดครั้งที่ 2)</label>
                                <div class="controls">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
                                        <input type="number" class="form-control" placeholder="ความดันโลหิต" aria-label="ความดันโลหิต" value="{{ $report1_1->pressure_2 }}"
                                                       name="pressure_2" id='pressure_2'>
                                        <span class="input-group-addon">มม. ปรอท</span>
                                    </div>
                                </div>
                            </div>
                                            
                            <div class="form-group col-md-6 mb-2">
                                <label for="projectinput3">ชีพจร ครั้งที่ 2</label>
                                <div class="controls">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
                                        <input type="number" class="form-control" placeholder="ชีพจร" aria-label="ชีพจร" value="{{ $report1_1->pulse_2 }}"
                                                       name="pulse_2" id='pulse_2'>
                                        <span class="input-group-addon">ครั้ง/นาที</span>
                                    </div>
                                </div>
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
                                          @if($report1_1->x_ray == "0") checked="checked" @endif >
                                            <label for="input-radio-11">ไม่ได้ตรวจ</label>
                                        </fieldset>
                                        <fieldset class="ml-1">
                                          <input type="radio" name="x_ray" value="1" 
                                          @if($report1_1->x_ray == "1") checked="checked" @endif >
                                          <label for="input-radio-12">ปกติ</label>
                                        </fieldset>
                                        <fieldset class="ml-1">
                                          <input type="radio" name="x_ray" value="2"
                                          @if($report1_1->x_ray == "2") checked="checked" @endif >
                                          <label for="input-radio-12">ผิดปกติ</label>
                                        </fieldset>
                                    
                                </div>
                            </div>
                                            
                            <div class="form-group col-md-6 mb-2">
                                <label for="projectinput3"><strong>Urine Examination</strong></label>
                                <div class="col-md-9">
                                        <fieldset class="ml-1">
                                          <input type="radio" name="urine" value="0" onclick="urine2();"
                                          @if($report1_1->urine == "0") checked="checked" @endif >
                                            <label for="input-radio-11">ไม่ได้ตรวจ</label>
                                        </fieldset>
                                        <fieldset class="ml-1">
                                          <input type="radio" name="urine" value="1" onclick="urine2();"
                                          @if($report1_1->urine == "1") checked="checked" @endif >
                                          <label for="input-radio-12">ปกติ</label>
                                        </fieldset>
                                        <fieldset class="ml-1">
                                          <input type="radio" name="urine" value="2" onclick="urine1();"
                                          @if($report1_1->urine == "2") checked="checked" @endif >
                                          <label for="input-radio-12">ผิดปกติ</label>
                                          <div id="div2" style="display:none;margin-bottom: .5rem;">
                                                 <div class="form-group col-12 mb-2">
                                                    <label for="projectinput3"><strong>Proteinurea > +1</strong></label>
                                                    <div class="input-group">
                                                      <fieldset class="ml-1">
                                                        <input type="radio" name="urine_d1" value="0"
                                                        @if($report1_1->urine_d1 == "0") checked="checked" @endif >
                                                          <label for="input-radio-11">ไม่มี</label>
                                                      </fieldset>
                                                      <fieldset class="ml-1">
                                                        <input type="radio" name="urine_d1" value="1"
                                                        @if($report1_1->urine_d1 == "1") checked="checked" @endif >
                                                        <label for="input-radio-12">มี</label>
                                                      </fieldset>
                                                      </div>
                                                      <label for="projectinput3"><strong>Hematuria > +1</strong></label>
                                                      <div class="input-group">
                                                        <fieldset class="ml-1">
                                                          <input type="radio" name="urine_d2" value="0"
                                                          @if($report1_1->urine_d2 == "0") checked="checked" @endif >
                                                            <label for="input-radio-11">ไม่มี</label>
                                                        </fieldset>
                                                        <fieldset class="ml-1">
                                                          <input type="radio" name="urine_d2" value="1"
                                                          @if($report1_1->urine_d2  == "1") checked="checked" @endif >
                                                          <label for="input-radio-12">มี</label>
                                                        </fieldset>
                                                        
                                                    </div>
                                                    <label for="projectinput3"><strong>ผิดปกติอื่นๆ</strong></label>
                                                    <div class="input-group">
                                                    <fieldset>
                                                        <div class="input-group controls">
                                                          <span class="input-group-addon">(ระบุ)</span>
                                                          <input type="text" class="form-control" aria-label="" placeholder=""
                                                          name="urine_d" id='urine_d' value="{{ $report1_1->urine_d }}">
                                                          
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
                                  @if($report1_1->cbc == "0") checked="checked" @endif >
                                  <label for="input-radio-11">ไม่ได้ตรวจ</label>
                                  </fieldset>
                                        <fieldset class="ml-1">           
                                  <input type="radio" name="cbc" value="1" onclick="CBC2();"
                                  @if($report1_1->cbc == "1") checked="checked" @endif >
                                  <label for="input-radio-12">ปกติ</label>
                                     </fieldset>
                                        <fieldset class="ml-1">         
                                  <input type="radio" name="cbc" value="2" onclick="CBC2();"
                                  @if($report1_1->cbc == "2") checked="checked" @endif >
                                  <label for="input-radio-12">ผิดปกติ Hct < 40% และ Mcv < 78%</label>
                                        </fieldset>
                                        <fieldset class="ml-1">  
                                                <input type="radio" name="cbc" value="3" onclick="CBC1();"
                                                @if($report1_1->cbc == "3") checked="checked" @endif >
                                                <label for="input-radio-12">ผิดปกติ อื่นๆ</label>
                                                <div id="div1" style="display:none;margin-bottom: .5rem;">
                                                  <div class="row">
                                                    <div class="col-md-12">
                                                      <fieldset>
                                                        <div class="input-group controls">
                                                          <span class="input-group-addon">(ระบุ)</span>
                                                          <input type="text" class="form-control" aria-label="" placeholder=""
                                                          name="cbc_d" id='cbc_d' value="{{ $report1_1->cbc_d  }}">
                                                          
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
                                                @if($report1_1->pap  == "0") checked="checked" @endif >
                                                  <label for="input-radio-11">ไม่ได้ตรวจ</label>
                                             </fieldset>
                                             <fieldset class="ml-1">  
                                                <input type="radio" name="pap" value="1"  onclick="j10_2_2();"
                                                @if($report1_1->pap == "1") checked="checked" @endif >
                                                <label for="input-radio-12">ปกติ</label>
                                              </fieldset>
                                              <fieldset class="ml-1">  
                                                <input type="radio" name="pap" value="2" onclick="j10_2_1();"
                                                @if($report1_1->pap  == "2") checked="checked" @endif >
                                                <label for="input-radio-12">ผิดปกติ</label>
                                                <div id="div11" style="display:none;margin-bottom: .5rem;">
                                                  <div class="row">
                                                    <div class="col-md-12">
                                                      <fieldset>
                                                        <div class="input-group controls">
                                                          <span class="input-group-addon">(ระบุ)</span>
                                                          <input type="text" class="form-control" aria-label="" placeholder=""
                                                          name="pap_d" id='pap_d' value="{{ $report1_1->pap_d  }}">
                                                          
                                                        </div>
                                                      </fieldset>
                                                    </div>
                                                  </div>
                                                </div>
                                               
  
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
                                                value="{{ $report1_1->blood_glu }}" >
                                                <div class="form-control-position">
                                                  <i class="ft-user"></i>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="blood_chol">Chol (mg/dl)</label>
                                            <div class="col-md-9">
                                              <div class="position-relative has-icon-left controls">
                                                <input type="text" id="name" class="form-control" placeholder="Chol (mg/dl)" name="blood_chol"
                                                value="{{ $report1_1->blood_chol }}" >
                                                <div class="form-control-position">
                                                  <i class="ft-user"></i>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="blood_tg">TG (mg/dl)</label>
                                            <div class="col-md-9">
                                              <div class="position-relative has-icon-left controls">
                                                <input type="text" id="name" class="form-control" placeholder="TG (mg/dl)" name="blood_tg"
                                                value="{{ $report1_1->blood_tg }}" >
                                                <div class="form-control-position">
                                                  <i class="ft-user"></i>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="blood_hdl">HDL-C (mg/dl)</label>
                                            <div class="col-md-9">
                                              <div class="position-relative has-icon-left controls">
                                                <input type="text" id="name" class="form-control" placeholder="HDL-C (mg/dl)" name="blood_hdl"
                                                value="{{ $report1_1->blood_hdl }}">
                                                <div class="form-control-position">
                                                  <i class="ft-user"></i>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="blood_ldl">LDL-C (mg/dl)</label>
                                            <div class="col-md-9">
                                              <div class="position-relative has-icon-left controls">
                                                <input type="text" id="name" class="form-control" placeholder="LDL-C (mg/dl)" name="blood_ldl"
                                                value="{{ $report1_1->blood_ldl }}">
                                                <div class="form-control-position">
                                                  <i class="ft-user"></i>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="blood_bun">BUN (mg/dl)</label>
                                            <div class="col-md-9">
                                              <div class="position-relative has-icon-left controls">
                                                <input type="text" id="name" class="form-control" placeholder="ชื่อหน้า" name="blood_bun"
                                                value="{{ $report1_1->blood_bun }}" >
                                                <div class="form-control-position">
                                                  <i class="ft-user"></i>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="blood_cr">Cr (mg/dl)</label>
                                            <div class="col-md-9">
                                              <div class="position-relative has-icon-left controls">
                                                <input type="text" id="name" class="form-control" placeholder="Cr (mg/dl)" name="blood_cr"
                                                value="{{ $report1_1->blood_cr }}" >
                                                <div class="form-control-position">
                                                  <i class="ft-user"></i>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="blood_uric">Uric (mg/dl)</label>
                                            <div class="col-md-9">
                                              <div class="position-relative has-icon-left controls">
                                                <input type="text" id="name" class="form-control" placeholder="Uric (mg/dl)" name="blood_uric"
                                                value="{{ $report1_1->blood_uric }}" >
                                                <div class="form-control-position">
                                                  <i class="ft-user"></i>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="blood_ast">AST (U/L)</label>
                                            <div class="col-md-9">
                                              <div class="position-relative has-icon-left controls">
                                                <input type="text" id="name" class="form-control" placeholder="AST (U/L)" name="blood_ast"
                                                value="{{ $report1_1->blood_ast }}" >
                                                <div class="form-control-position">
                                                  <i class="ft-user"></i>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="blood_alt">ALT (U/L)</label>
                                            <div class="col-md-9">
                                              <div class="position-relative has-icon-left controls">
                                                <input type="text" id="name" class="form-control" placeholder="ALT (U/L)" name="blood_alt"
                                                value="{{ $report1_1->blood_alt }}" >
                                                <div class="form-control-position">
                                                  <i class="ft-user"></i>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                         
                      </div>
                      <div class="modal-footer">
                        <a class="btn btn-warning" href="{{ route('staff.index')}}">
                          <i class="ft-x"></i> ยกเลิก</a>
                        <button type="submit" class="btn btn-primary">
                          <i class="fa fa-check-square-o"></i> บันทึก
                        </button>
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
@endsection
@section('scripts')
<!-- BEGIN VENDOR JS-->
  <script src="../../../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="../../../app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/extensions/unslider-min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
  <script src="../../../app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"
  type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"
  type="text/javascript"></script>

  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN STACK JS-->
  <script src="../../../app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="../../../app-assets/js/core/app.js" type="text/javascript"></script>

  <script src="../../../app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->

  <!-- BEGIN PAGE LEVEL JS-->
  <script src="../../../app-assets/js/scripts/forms/validation/form-validation.js"
  type="text/javascript"></script>
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="../../../app-assets/js/scripts/tables/datatables/datatable-basic.js"
  type="text/javascript"></script>
  <script src="../../../app-assets/js/scripts/tables/components/table-components.js" type="text/javascript"></script>
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

 <script src="{{ asset('../../../app-assets/vendors/js/forms/select/select2.full.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('../../../app-assets/js/scripts/forms/select/form-select2.js') }}" type="text/javascript"></script>
@endsection
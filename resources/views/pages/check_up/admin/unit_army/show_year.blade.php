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
                                    <li class="breadcrumb-item active"><i class="feather icon-clipboard"></i> ข้อมูลตรวจสุขภาพปี {{ $data->year }}
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
                            <h2 class="text-center mb-2"><i class="feather icon-clipboard"></i> ข้อมูลตรวจสุขภาพปี {{ $data->year }}</h2>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center"><i class="feather icon-user"></i> ข้อมูลส่วนตัว</h4>
                                </div>
                                <div class="card-content">
                                    
                                    <div class="card-body">
                                        <form class="form-horizontal">                          
                                        <div class="form-body">
                                           
                                            <div class="row">
                                                <div class="col-md-2 col-12">
                                                    <div class="form-label-group position-relative has-icon-left">
                                                        
                                                        <select class="form-control" id="select2-array"
                                                        name="title_name" disabled>
                                                        <option value="">คำนำหน้า</option>
                                                            @foreach ($titlename as $roles)
                                                            <option {{ $data->report->title_name == $roles->name ? 'selected' : '' }}
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
                                                       
                                                        <input type="text" id="projectinput1" class="form-control" value="{{ $data->report->first_name }}"
                                                            disabled name="first_name">
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                        <label for="projectinput1">ชื่อหน้า</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-5 col-12">
                                                    <div class="form-label-group position-relative has-icon-left">
                                                        
                                                        <input type="text" id="projectinput2" class="form-control" value="{{ $data->report->last_name }}"
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
                                                        <input type="text" id="projectinput3" class="form-control" value="{{ $data->report->cid }}" name="cid" disabled>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                        <label for="projectinput3">เลขที่บัตรประจำตัวประชาชน</label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-4 mb-2">
                                                    <div class="form-label-group position-relative has-icon-left">
                                                        <input type="text" id="projectinput3" class="form-control" value="{{ $data->report->hn }}" name="hn" disabled>
                                                        <div class="form-control-position">
                                                                <i class="feather icon-user"></i>
                                                            </div>
                                                        <label for="projectinput3">เลขที่ HN</label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-4 mb-2">
                                                    <div class="form-label-group position-relative has-icon-left">
                                                    <input type="text" id="projectinput4" class="form-control" value="{{ $data->report->age }}" name="age" disabled>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                        <label for="projectinput4">อายุ</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center"><i class="feather icon-save"></i> ข้อมูลสุขภาพ</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                         @if(Session::has('message'))
                                                <div class="alert alert-primary">
                                                    <span class="text-bold-700 font-medium-3 mr-1"><i class="feather icon-check mr-1"></i>{{ Session::get('message') }}</span>
                                                </div>

                                        @endif
                                        <form class="form-horizontal">                          
                                        <div class="form-body">       
                                            <div class="row">
                                                <div class="col-md-3 col-12 mb-1">
                                                    <label for="projectinput3">น้ำหนัก</label>
                                                    <fieldset>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="น้ำหนัก" aria-label="น้ำหนัก" value="{{ $data->weight }}"
                                                                        name="weight" id='weight' disabled>
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
                                                                        name="height" id='height' disabled>
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
                                                                        name="waist" id='waist' disabled>
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
                                                            <input type="number" class="form-control" placeholder="ความดันโลหิต" aria-label="ความดันโลหิต" value="{{ $data->pressure_1 }}"
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
                                                            <input type="number" class="form-control" placeholder="ความดันโลหิต" aria-label="ความดันโลหิต" value="{{ $data->pressure_2 }}"
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
                                                            <input type="number" class="form-control" placeholder="ชีพจร" aria-label="ชีพจร" value="{{ $data->pulse_1 }}"
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
                                                            <input type="number" class="form-control" placeholder="ชีพจร" aria-label="ชีพจร" value="{{ $data->pulse_2 }}"
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
                                                            @if($data->x_ray == "0") checked="checked" @endif >
                                                                <label for="input-radio-11">ไม่ได้ตรวจ</label>
                                                            </fieldset>
                                                            <fieldset class="ml-1">
                                                            <input type="radio" name="x_ray" value="1"  disabled
                                                            @if($data->x_ray == "1") checked="checked" @endif >
                                                            <label for="input-radio-12">ปกติ</label>
                                                            </fieldset>
                                                            <fieldset class="ml-1">
                                                            <input type="radio" name="x_ray" value="2" disabled
                                                            @if($data->x_ray == "2") checked="checked" @endif >
                                                            <label for="input-radio-12">ผิดปกติ</label>
                                                            </fieldset>
                                                        
                                                    </div>
                                                </div>
                                                                
                                                <div class="form-group col-md-6 mb-2">
                                                    <label for="projectinput3"><strong>Urine Examination</strong></label>
                                                    <div class="col-md-9">
                                                            <fieldset class="ml-1">
                                                            <input type="radio" name="urine" value="0" onclick="urine2();" disabled
                                                            @if($data->urine == "0") checked="checked" @endif >
                                                                <label for="input-radio-11">ไม่ได้ตรวจ</label>
                                                            </fieldset>
                                                            <fieldset class="ml-1">
                                                            <input type="radio" name="urine" value="1" onclick="urine2();" disabled
                                                            @if($data->urine == "1") checked="checked" @endif >
                                                            <label for="input-radio-12">ปกติ</label>
                                                            </fieldset>
                                                            <fieldset class="ml-1">
                                                            <input type="radio" name="urine" value="2" onclick="urine1();" disabled
                                                            @if($data->urine == "2") checked="checked" @endif >
                                                            <label for="input-radio-12">ผิดปกติ</label>
                                                            @if($data->urine == "2")
                                                            <div id="div2" style="margin-bottom: .5rem;">
                                                                    <div class="form-group col-12 mb-2">
                                                                        <label for="projectinput3"><strong>Proteinurea > +1</strong></label>
                                                                        <div class="input-group">
                                                                        <fieldset class="ml-1">
                                                                            <input type="radio" name="urine_d1" value="0" disabled
                                                                            @if($data->urine_d1 == "0") checked="checked" @endif >
                                                                            <label for="input-radio-11">ไม่มี</label>
                                                                        </fieldset>
                                                                        <fieldset class="ml-1">
                                                                            <input type="radio" name="urine_d1" value="1" disabled
                                                                            @if($data->urine_d1 == "1") checked="checked" @endif >
                                                                            <label for="input-radio-12">มี</label>
                                                                        </fieldset>
                                                                        </div>
                                                                        <label for="projectinput3"><strong>Hematuria > +1</strong></label>
                                                                        <div class="input-group">
                                                                            <fieldset class="ml-1">
                                                                            <input type="radio" name="urine_d2" value="0" disabled
                                                                            @if($data->urine_d2 == "0") checked="checked" @endif >
                                                                                <label for="input-radio-11">ไม่มี</label>
                                                                            </fieldset>
                                                                            <fieldset class="ml-1">
                                                                            <input type="radio" name="urine_d2" value="1" disabled
                                                                            @if($data->urine_d2  == "1") checked="checked" @endif >
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
                                                                                    disabled    name="urine_d" id='urine_d' value="{{ $data->urine_d }}" >
                                                                                  
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
                                                            @if($data->cbc == "0") checked="checked" @endif >
                                                            <label for="input-radio-11">ไม่ได้ตรวจ</label>
                                                        </fieldset>
                                                        <fieldset class="ml-1">           
                                                            <input type="radio" name="cbc" value="1" onclick="CBC2();" disabled
                                                            @if($data->cbc == "1") checked="checked" @endif >
                                                            <label for="input-radio-12">ปกติ</label>
                                                        </fieldset>
                                                        <fieldset class="ml-1">         
                                                            <input type="radio" name="cbc" value="2" onclick="CBC2();" disabled
                                                            @if($data->cbc == "2") checked="checked" @endif >
                                                            <label for="input-radio-12">ผิดปกติ Hct < 40% และ Mcv < 78%</label>
                                                        </fieldset>
                                                        <fieldset class="ml-1">  
                                                            <input type="radio" name="cbc" value="3" onclick="CBC1();" disabled
                                                            @if($data->cbc == "3") checked="checked" @endif >
                                                            <label for="input-radio-12">ผิดปกติ อื่นๆ</label>
                                                            @if($data->cbc == "3")
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
                                                                                        disabled    name="cbc_d" id='cbc_d' value="{{ $data->cbc_d  }}" >
                                                                                    
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
                                                            @if($data->pap  == "0") checked="checked" @endif >
                                                            <label for="input-radio-11">ไม่ได้ตรวจ</label>
                                                        </fieldset>
                                                        <fieldset class="ml-1">  
                                                            <input type="radio" name="pap" value="1"  onclick="j10_2_2();" disabled
                                                            @if($data->pap == "1") checked="checked" @endif >
                                                            <label for="input-radio-12">ปกติ</label>
                                                        </fieldset>
                                                        <fieldset class="ml-1">  
                                                            <input type="radio" name="pap" value="2" onclick="j10_2_1();" disabled
                                                            @if($data->pap  == "2") checked="checked" @endif >
                                                            <label for="input-radio-12">ผิดปกติ</label>
                                                            @if($data->pap  == "2") 
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
                                                                                disabled   name="pap_d" id='pap_d' value="{{ $data->pap_d  }}" >
                                                                            
                                                                                
                                                                            </div>
                                                                        </fieldset>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endif 
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
                                                                    value="{{ $data->blood_glu }}"  disabled>
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
                                                                    value="{{ $data->blood_chol }}"  disabled>
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
                                                                    value="{{ $data->blood_tg }}"  disabled>
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
                                                                    value="{{ $data->blood_hdl }}" disabled>
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
                                                                    value="{{ $data->blood_ldl }}" disabled>
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
                                                                    value="{{ $data->blood_bun }}"  disabled>
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
                                                                    value="{{ $data->blood_cr }}"  disabled>
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
                                                                    value="{{ $data->blood_uric }}"  disabled>
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
                                                                    value="{{ $data->blood_ast }}"  disabled>
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
                                                                    value="{{ $data->blood_alt }}"  disabled>
                                                                    <div class="form-control-position">
                                                                    <i class="feather icon-edit-1"></i>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <div class="row">
                                                <div class="col-12">
                                                    
                                                    <a class="btn btn-primary mr-1 mb-1 waves-effect waves-light" href="{{ route('army.edit_year', $data->id)}}"><i class="feather icon-edit"></i> แก้ไขข้อมูล</a>
                                                    <a class="btn btn-success mr-1 mb-1 waves-effect waves-light" href="{{ route('army.show', $data->report1_id)}}"><i class="feather icon-clipboard"></i> ดูข้อมูลทั้งหมด</a>
                                                    <a class="btn btn-warning mr-1 mb-1 waves-effect waves-light" href="{{ route('check_up.army')}}"><i class="feather icon-monitor"></i> กลับหน้าแรก</a>
                                        
                                                </div>
                                            </div>
                                            </div>
                                        </form>
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

@extends('layouts.home')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/forms/wizard.css">
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
                                    <li class="breadcrumb-item"><a href="{{ route('check_up.police') }}">หน่วยงานตำรวจ</a>
                                    </li>
                                    <li class="breadcrumb-item active">เพิ่มข้อมูล
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="content-body">
                <section id="validation">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">{{ $userPol->titlename }}{{ $userPol->first_name }} {{ $userPol->last_name }}</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="steps-validation wizard-circle" action="{{ route('police.create_checkup', $userPol->id) }}" method="POST">
                                            {{method_field('PUT')}}
                                            {{csrf_field()}}
                                            {{-- <input type="hidden" name="user_pols_id" value="{{ $userPol->id }}"> --}}
                                            <!-- Step 1 -->
                                            <h6><i class="step-icon feather icon-home"></i> ข้อมูลส่วนตัว</h6>
                                            <fieldset>
                                                <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-home mr-50 "></i> ข้อมูลส่วนตัว</h6>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="eventName3">
                                                                คำนำหน้า
                                                            </label>
                                                            <div class="position-relative has-icon-left">
                                                            <input type="text" id="fname-icon" class="form-control" name="titlename" placeholder="คำนำหน้า" value="{{ $userPol->titlename }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-user"></i>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label for="eventName3">
                                                                ชื่อ
                                                            </label>
                                                             <div class="position-relative has-icon-left">
                                                                    <input type="text" id="fname-icon" class="form-control" name="first_name" placeholder="ชื่อ" value="{{ $userPol->first_name }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-user"></i>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label for="eventName3">
                                                                นามสกุล
                                                            </label>
                                                             <div class="position-relative has-icon-left">
                                                                    <input type="text" id="fname-icon" class="form-control" name="last_name" placeholder="นามสกุล" value="{{ $userPol->last_name }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-user"></i>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="eventName3">
                                                                เพศ
                                                            </label>
                                                           <div class="position-relative has-icon-left">
                                                                     <select class="custom-select form-control" id="gender" name="gender">
                                                                         
                                                                        <option @if( $userPol->gender == 'ชาย')  selected  @endif value="ชาย">ชาย</option>
                                                                        <option @if( $userPol->gender == 'หญิง')  selected  @endif value="หญิง">หญิง</option>
                                                                        
                                                                    </select>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-user"></i>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="eventName3">
                                                                อายุ
                                                            </label>
                                                            <div class="position-relative has-icon-left">
                                                                     <div class="input-group">
                                                                        <input type="number" name="age" class="touchspin" value="{{ $userPol->age }}">
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="eventName3">
                                                                เลขที่บัตรประจำตัวประชาชน
                                                            </label>
                                                            <div class="position-relative has-icon-left">
                                                                    <input type="text" id="fname-icon" class="form-control" name="cid" placeholder="เลขที่บัตรประจำตัวประชาชน" value="{{ $userPol->cid }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-user"></i>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="eventName3">
                                                                เบอร์โทร
                                                            </label>
                                                            <div class="position-relative has-icon-left">
                                                                    <input type="number" id="contact-icon" class="form-control" name="tel" placeholder="เบอร์โทร"  value="{{ $userPol->tel }}">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-smartphone"></i>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="eventName3">
                                                                เลือกหน่วยงาน
                                                            </label>
                                                            <div class="position-relative has-icon-left">
                                                                    <select id="kinds" name="kinds" class="form-control"  placeholder="เลือกหน่วยงาน">
                                                                        <option value="">เลือกหน่วยงาน</option>
                                                    
                                                                            @foreach ($kinds as $roles)
                                                                                <option 
                                                                                 @if($userPol->kind_check_up_id == $roles->id) selected @endif
                                                                                value="{{$roles->id}}">{{$roles->name}}</option>
                                                                            @endforeach
                                                                      
                                                                    </select>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-user"></i>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="eventName3">
                                                                เลือกปี
                                                            </label>
                                                            <div class="position-relative has-icon-left">
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
                                                                        <i class="feather icon-user"></i>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <!-- Step 2 -->
                                            <h6><i class="step-icon feather icon-briefcase"></i> ข้อมูลทั่วไป</h6>
                                            <fieldset>
                                                <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-briefcase mr-50 "></i> ข้อมูลทั่วไป</h6>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="table-responsive border rounded px-1 mt-1 mb-1">
                                                            <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-repeat mr-50 "></i>ความดันโลหิต Blood (mmHg)</h6>
                                                            
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="eventName3">
                                                                                BP_S
                                                                            </label>
                                                                            <div class="position-relative has-icon-left">
                                                                            <input type="text" id="BP_S" class="form-control" name="BP_S" placeholder="BP_S">
                                                                                    <div class="form-control-position">
                                                                                        <i class="feather icon-user"></i>
                                                                                    </div>
                                                                                </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="eventName3">
                                                                                BP_D
                                                                            </label>
                                                                            <div class="position-relative has-icon-left">
                                                                                    <input type="text" id="BP_D" class="form-control" name="BP_D" placeholder="BP_D">
                                                                                    <div class="form-control-position">
                                                                                        <i class="feather icon-user"></i>
                                                                                    </div>
                                                                                </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="eventName3">
                                                                                ชีพจร Pulse (ครั้ง/นาที)
                                                                            </label>
                                                                            <div class="position-relative has-icon-left">
                                                                            <input type="text" id="Pulse" class="form-control" name="Pulse" placeholder="Pulse">
                                                                                    <div class="form-control-position">
                                                                                        <i class="feather icon-user"></i>
                                                                                    </div>
                                                                                </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div class="col-md-6 mt-1">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="eventName3">
                                                                        น้ำหนัก (kg.)
                                                                    </label>
                                                                    <div class="position-relative has-icon-left">
                                                                        <input type="text" id="Weight" class="form-control" name="Weight" placeholder="Weight">
                                                                        <div class="form-control-position">
                                                                            <i class="feather icon-user"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="eventName3">
                                                                        ส่วนสูง (cm.)
                                                                    </label>
                                                                    <div class="position-relative has-icon-left">
                                                                        <input type="text" id="Height" class="form-control" name="Height" placeholder="Height">
                                                                        <div class="form-control-position">
                                                                            <i class="feather icon-user"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="eventName3">
                                                                        ดัชนีมวลกาย BMI (kg/m2)
                                                                    </label>
                                                                    <div class="position-relative has-icon-left">
                                                                        <input type="text" id="BML" class="form-control" name="BML" placeholder="BML">
                                                                        <div class="form-control-position">
                                                                            <i class="feather icon-user"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="eventName3">
                                                                        เส้นรอบเอว (นิ้ว)
                                                                    </label>
                                                                    <div class="position-relative has-icon-left">
                                                                        <input type="text" id="WAIST" class="form-control" name="WAIST" placeholder="WAIST">
                                                                        <div class="form-control-position">
                                                                            <i class="feather icon-user"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <!-- Step 3 -->
                                            <h6><i class="step-icon feather icon-image"></i> ความสมบูรณ์ของเม็ดเลือด (CBC)</h6>
                                            <fieldset>
                                                <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-repeat mr-50 "></i> ความสมบูรณ์ของเม็ดเลือด (CBC)</h6>
                                                <div class="row">
                                                    <div class="col-md-2 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="WBC" class="form-control" placeholder="WBC" name="WBC">
                                                            <label for="WBC">WBC</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="RBC" class="form-control" placeholder="RBC" name="RBC">
                                                            <label for="RBC">RBC</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="Hb" class="form-control" placeholder="Hb" name="Hb">
                                                            <label for="city-column">Hb</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="Hct" class="form-control" name="Hct" placeholder="Hct">
                                                            <label for="Hct">Hct</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="MCV" class="form-control" name="MCV" placeholder="MCV">
                                                            <label for="MCV">MCV</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="PLT" class="form-control" name="PLT" placeholder="PLT">
                                                            <label for="PLT">PLT</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="NE" class="form-control" name="NE" placeholder="NE%">
                                                            <label for="NE">NE%</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="LY" class="form-control" name="LY" placeholder="LY%">
                                                            <label for="LY">LY%</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="MO" class="form-control" name="MO" placeholder="MO%">
                                                            <label for="MO">MO%</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="EO" class="form-control" name="EO" placeholder="EO%">
                                                            <label for="EO">EO%</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="BA" class="form-control" name="BA" placeholder="BA%">
                                                            <label for="BA">BA%</label>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </fieldset>

                                            <!-- Step 4 -->
                                            <h6><i class="step-icon feather icon-image"></i> ผลตรวจปัสสาวะ (Urine Examlnation)</h6>
                                            <fieldset>
                                                <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-repeat mr-50 "></i> ผลตรวจปัสสาวะ (Urine Examlnation)</h6>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="UBlood">
                                                                UBlood
                                                            </label>
                                                            <input type="text" class="form-control" id="UBlood" name="UBlood">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="ketone">
                                                                ketone
                                                            </label>
                                                            <input type="text" class="form-control" id="ketone" name="ketone">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="Uglu">
                                                                Uglu
                                                            </label>
                                                            <input type="text" class="form-control" id="Uglu" name="Uglu">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="Upro">
                                                                Upro
                                                            </label>
                                                            <input type="text" class="form-control" id="Upro" name="Upro">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="URBC">
                                                                URBC
                                                            </label>
                                                            <input type="text" class="form-control" id="URBC" name="URBC">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="UWBC">
                                                                UWBC
                                                            </label>
                                                            <input type="text" class="form-control" id="UWBC" name="UWBC">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="UEPI">
                                                                UEPI
                                                            </label>
                                                            <input type="text" class="form-control" id="UEPI" name="UEPI">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <!-- Step 5 -->
                                            <h6><i class="step-icon feather icon-image"></i> ผลตรวจอุจจาระ (Stool Examlnation)</h6>
                                            <fieldset>
                                                <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-repeat mr-50 "></i> ผลตรวจอุจจาระ (Stool Examlnation)</h6>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="StoolWBC">
                                                                StoolWBC
                                                            </label>
                                                            <input type="text" class="form-control" id="StoolWBC" name="StoolWBC">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="StoolRBC">
                                                                StoolRBC
                                                            </label>
                                                            <input type="text" class="form-control" id="StoolRBC" name="StoolRBC">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="Ova&Parasite">
                                                                Ova&Parasite
                                                            </label>
                                                            <input type="text" class="form-control" id="Ova" name="Ova">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="Occult Blood">
                                                                Occult Blood
                                                            </label>
                                                            <input type="text" class="form-control" id="Occult" name="Occult">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            
                                            <!-- Step 6 -->
                                            <h6><i class="step-icon feather icon-image"></i> ผลตรวจทางชีวเคมี (Biochemistry)</h6>
                                            <fieldset>
                                                <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-repeat mr-50 "></i> ผลตรวจทางชีวเคมี (Biochemistry)</h6>
                                                <div class="row">
                                                    
                                                    <div class="col-md-3 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="FBS" class="form-control" placeholder="FBS" name="FBS">
                                                            <label for="FBS">FBS</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="BUN" class="form-control" placeholder="BUN" name="BUN">
                                                            <label for="BUN">BUN</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="Cre" class="form-control" placeholder="Cre" name="Cre">
                                                            <label for="RBC">Cre</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="Cric" class="form-control" placeholder="Cric" name="Cric">
                                                            <label for="Cric">Cric</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="Chol" class="form-control" name="Chol" placeholder="Chol">
                                                            <label for="Chol">Chol</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="Tg" class="form-control" name="Tg" placeholder="Tg">
                                                            <label for="Tg">Tg</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="HDL" class="form-control" name="HDL" placeholder="HDL">
                                                            <label for="HDL">HDL</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="LDL" class="form-control" name="LDL" placeholder="LDL">
                                                            <label for="LDL">LDL</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="ALK" class="form-control" name="ALK" placeholder="ALK">
                                                            <label for="ALK">ALK</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="SGOT" class="form-control" name="SGOT" placeholder="SGOT">
                                                            <label for="SGOT">SGOT</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="SGPT" class="form-control" name="SGPT" placeholder="SGPT">
                                                            <label for="SGPT">SGPT</label>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </fieldset>

                                            <!-- Step 7 -->
                                            <h6><i class="step-icon feather icon-image"></i> อื่นๆ</h6>
                                            <fieldset>
                                                <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-repeat mr-50 "></i> อื่นๆ</h6>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="table-responsive border rounded px-1 mt-1 mb-1">
                                                            <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-repeat mr-50 "></i>ผลตรวจเอกซเรย์ทรวงอก Chest X-Ray</h6>
                                                            
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-1">
                                                                        <ul class="list-unstyled mb-0">
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con">
                                                                                        <input type="radio" name="CXR" value="ไม่ได้ตรวจ">
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
                                                                                    <div class="vs-radio-con">
                                                                                        <input type="radio" name="CXR" value="ปกติ">
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
                                                                                    <div class="vs-radio-con">
                                                                                        <input type="radio" name="CXR" value="ผิดปกติ">
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
                                                        <div class="table-responsive border rounded px-1 mt-1 mb-1">
                                                            <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-repeat mr-50 "></i> สูบบุรี่</h6>
                                                            
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-1">
                                                                        <ul class="list-unstyled mb-0">
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-success">
                                                                                        <input type="radio" name="Smoke" value="สูบ">
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">สูบ</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-success">
                                                                                        <input type="radio" name="Smoke" value="ไม่สูบ">
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">ไม่สูบ</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-success">
                                                                                        <input type="radio" name="Smoke" value="เคยสูบแต่เลิกแล้ว">
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">เคยสูบแต่เลิกแล้ว</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class="table-responsive border rounded px-1 mt-1 mb-1">
                                                            <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-repeat mr-50 "></i> ดื่มสุรา</h6>
                                                            
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-1">
                                                                        <ul class="list-unstyled mb-0">
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-info">
                                                                                        <input type="radio" name="Drink" value="ดื่ม">
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">ดื่ม</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-info">
                                                                                        <input type="radio" name="Drink" value="ไม่ดื่ม">
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">ไม่ดื่ม</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-info">
                                                                                        <input type="radio" name="Drink" value="เคยดื่มแต่เลิกแล้ว">
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">เคยดื่มแต่เลิกแล้ว</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        
                                                        <div class="table-responsive border rounded px-1 mt-1 mb-1">
                                                            <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-repeat mr-50 "></i> ประวัติการตรวจรักษา</h6>
                                                            
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-1">
                                                                        <ul class="list-unstyled mb-0">
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-danger">
                                                                                        <input type="radio" name="medical_history" id="noCheck" onclick="javascript:yesnoCheck();" value="สม่ำเสมอ">
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">สม่ำเสมอ</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-danger">
                                                                                        <input type="radio" name="medical_history" id="noCheck" onclick="javascript:yesnoCheck();" value="ไม่สม่ำเสมอ">
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">ไม่สม่ำเสมอ</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-danger">
                                                                                        <input type="radio" name="medical_history" id="noCheck" onclick="javascript:yesnoCheck();" value="ไม่รักษา">
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">ไม่รักษา</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-danger">
                                                                                        <input type="radio" name="medical_history" id="noCheck" onclick="javascript:yesnoCheck();" value="หายแล้ว">
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">หายแล้ว</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-danger">
                                                                                        <input type="radio" id="yesCheck" onclick="javascript:yesnoCheck();" name="medical_history" value="อื่นๆ">
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">อื่นๆ</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                        </ul>
                                                                        <div id="ifYes" style="display:none" class="form-group mt-1">
                                                                                <div class="position-relative has-icon-left">
                                                                                <input type="text" id="fname-icon" class="form-control" name="medical_history_other" placeholder="โปรดระบุ..">
                                                                                        <div class="form-control-position">
                                                                                            <i class="feather icon-user"></i>
                                                                                        </div>
                                                                                    </div>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="table-responsive border rounded px-1 mt-1 mb-1">
                                                            <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-repeat mr-50 "></i> โรคประจำตัว</h6>
                                                            
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-1">
                                                                        <div class="c-inputs-stacked">
                                                                            <div class="d-inline-block mr-2">
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" name="congenital_disease[]" value="ไม่มี">
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">ไม่มี</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="d-inline-block mr-2">
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" name="congenital_disease[]" value="เบาหวาน">
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">เบาหวาน</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="d-inline-block mr-2">
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" name="congenital_disease[]" value="ความดันโลหิตสูง">
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">ความดันโลหิตสูง</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="d-inline-block mr-2">
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" name="congenital_disease[]" value="เก๊าท์">
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">เก๊าท์</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="d-inline-block mr-2">
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" name="congenital_disease[]" value="ไขมันในเลือดผิดปกติ">
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">ไขมันในเลือดผิดปกติ</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="d-inline-block mr-2">
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" name="congenital_disease[]" value="ไตวายเรื้อรัง">
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">ไตวายเรื้อรัง</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="d-inline-block mr-2">
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" name="congenital_disease[]" value="เส้นเลือดสมอง">
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">เส้นเลือดสมอง</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="d-inline-block mr-2">
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" name="congenital_disease[]" value="ถุงลมโป่งพอง">
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">ถุงลมโป่งพอง</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="d-inline-block mr-2">
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" name="congenital_disease[]" value="ไม่ทราบ">
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">ไม่ทราบ</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="d-inline-block">
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" id="chkPassport" value="อื่นๆ" name="congenital_disease[]">
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">อื่นๆ</span>
                                                                                </div>
                                                                            </div>
                                                                            <div id="dvPassport" class="form-group mt-1" style="display: none">
                                                                                <div class="position-relative has-icon-left">
                                                                                <input type="text" id="fname-icon" class="form-control" name="congenital_disease_detail" placeholder="โปรดระบุ..">
                                                                                        <div class="form-control-position">
                                                                                            <i class="feather icon-user"></i>
                                                                                        </div>
                                                                                    </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class="table-responsive border rounded px-1 mt-1 mb-1">
                                                            <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-repeat mr-50 "></i> ออกกำลังกาย/เล่นกีฬา</h6>
                                                            
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-1">
                                                                        <ul class="list-unstyled mb-0">
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-info">
                                                                                        <input type="radio" name="exercise" value="ออกกำลังกายทุกวัน ครั้งละ 30 นาที">
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">ออกกำลังกายทุกวัน ครั้งละ 30 นาที</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-info">
                                                                                        <input type="radio" name="exercise" value="ออกกำลังกายสัปดาห์ละมากกว่า 3 ครั้ง ครั้งละ 30 นาที สม่ำเสมอ">
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">ออกกำลังกายสัปดาห์ละมากกว่า 3 ครั้ง ครั้งละ 30 นาที สม่ำเสมอ</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-info">
                                                                                        <input type="radio" name="exercise" value="ออกกำลังกายสัปดาห์ละ 3 ครั้ง ครั้งละ 30 นาที สม่ำเสมอ">
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">ออกกำลังกายสัปดาห์ละ 3 ครั้ง ครั้งละ 30 นาที สม่ำเสมอ</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-info">
                                                                                        <input type="radio" name="exercise" value="ออกกำลังกายน้อยกว่าสัปดาห์ละ 3 ครั้ง">
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">ออกกำลังกายน้อยกว่าสัปดาห์ละ 3 ครั้ง</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-info">
                                                                                        <input type="radio" name="exercise" value="ไม่ออกกำลังกาย">
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">ไม่ออกกำลังกาย</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                        </ul>
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
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

@endsection
@section('scripts')

<script type="text/javascript">
  $(function () {
        $("#chkPassport").click(function () {
            if ($(this).is(":checked")) {
                $("#dvPassport").show();
            } else {
                $("#dvPassport").hide();
            }
        });
        
    });
   function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.display = 'block';
    }
    else document.getElementById('ifYes').style.display = 'none';

}
</script>
        <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets') }}/vendors/js/ui/jquery.sticky.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/extensions/jquery.steps.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Page JS-->
    
    <script src="{{ asset('app-assets') }}/js/scripts/forms/wizard-steps.js"></script>
    <script src="{{ asset('app-assets') }}/js/scripts/forms/number-input.js"></script>
    <!-- END: Page JS-->
@endsection

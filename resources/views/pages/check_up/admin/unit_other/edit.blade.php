@extends('layouts.home')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/app-user.css">
@endsection

@section('content')


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
                                    <li class="breadcrumb-item active">แก้ไขข้อมูลตรวจสุขภาพ
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="content-body">
            <form  action="{{route('police.update', $userPol->id)}}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                <section class="page-users-view">
                    <div class="row">
                        <!-- account start -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">ข้อมูลส่วนตัว</div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="users-view-image">
                                            <img src="{{ asset('images') }}/default.jpg" class="users-avatar-shadow w-100 rounded mb-2 pr-2 ml-1" alt="avatar">
                                        </div>
                                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                            <table>
                                                <tr>
                                                    <td class="font-weight-bold">คำนำหน้า</td>
                                                <td>{{ $userPol->check_up_user_pol->titlename }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">ชื่อ</td>
                                                    <td>{{ $userPol->check_up_user_pol->first_name }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">นามสกุล</td>
                                                    <td>{{ $userPol->check_up_user_pol->last_name }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">เพศ</td>
                                                    <td>{{ $userPol->check_up_user_pol->gender }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-5">
                                            <table class="ml-0 ml-sm-0 ml-lg-0">
                                                <tr>
                                                    <td class="font-weight-bold">เลขที่บัตรประชาชน</td>
                                                    <td>{{ $userPol->check_up_user_pol->cid }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">อายุ</td>
                                                    <td>{{ $userPol->check_up_user_pol->age }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">เบอร์โทร</td>
                                                    <td>{{ $userPol->check_up_user_pol->tel }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">หน่วยงาน</td>
                                                    <td>{{ $userPol->check_up_user_pol->tel }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        
                            <div class="col-md-6 col-12">
                                <div class="card">
                                    <div class="card-header border-bottom mx-2 px-0">
                                        <div class="card-title mb-2">ความดันโลหิต Blood (mmHg)</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive border rounded px-1 mt-1 mb-1">
                                            <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-repeat mr-50 "></i>ความดันโลหิต Blood (mmHg)</h6>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="eventName3">
                                                            BP_S
                                                        </label>
                                                        <div class="position-relative has-icon-left">
                                                            <input type="text" id="BP_S" class="form-control" name="BP_S" placeholder="BP_S" value="{{ $userPol->BP_S }}" >
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
                                                                <input type="text" id="BP_D" class="form-control" name="BP_D" placeholder="BP_D" value="{{ $userPol->BP_D }}" >
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
                                                                    <input type="text" id="Pulse" class="form-control" name="Pulse" placeholder="Pulse" value="{{ $userPol->PULSE }}" >
                                                                        <div class="form-control-position">
                                                                            <i class="feather icon-user"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div> 
                                                </div>
                                        <table>
                                            <tr>
                                                <td class="font-weight-bold">น้ำหนัก (kg.)</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="Weight" class="form-control" name="Weight" placeholder="Weight" value="{{ $userPol->Weight }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">ส่วนสูง (cm.)</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="Height" class="form-control" name="Height" placeholder="Height" value="{{ $userPol->Height }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">ดัชนีมวลกาย BMI (kg/m2)</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="BML" class="form-control" name="BML" placeholder="BML" value="{{ $userPol->BML }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">เส้นรอบเอว (นิ้ว)</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="WAIST" class="form-control" name="WAIST" placeholder="WAIST" value="{{ $userPol->WAIST }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        
                                        </table>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="col-md-6 col-12">
                                <div class="card">
                                    <div class="card-header border-bottom mx-2 px-0">
                                        <div class="card-title mb-2">ความสมบูรณ์ของเม็ดเลือด (CBC)</div>
                                    </div>
                                    <div class="card-body">
                                        <table class="">
                                            <tr>
                                                <td class="font-weight-bold">WBC</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="WBC" class="form-control" name="WBC" placeholder="WBC" value="{{ $userPol->WBC }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">RBC</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="RBC" class="form-control" name="RBC" placeholder="RBC" value="{{ $userPol->RBC }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Hb</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="Hb" class="form-control" name="Hb" placeholder="Hb" value="{{ $userPol->Hb }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Hct</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="Hct" class="form-control" name="Hct" placeholder="Hct" value="{{ $userPol->Hct }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">MCV</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="MCV" class="form-control" name="MCV" placeholder="MCV" value="{{ $userPol->MCV }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">NE%</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="NE" class="form-control" name="NE" placeholder="NE" value="{{ $userPol->NE }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">LY%</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="LY" class="form-control" name="LY" placeholder="LY" value="{{ $userPol->LY }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">MO%</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="MO" class="form-control" name="MO" placeholder="MO" value="{{ $userPol->MO }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">EO%</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="EO" class="form-control" name="EO" placeholder="EO" value="{{ $userPol->EO }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">BA%</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="BA" class="form-control" name="BA" placeholder="BA" value="{{ $userPol->BA }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                     
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header border-bottom mx-2 px-0">
                                        <div class="card-title mb-2">ผลตรวจปัสสาวะ (Urine Examlnation)</div>
                                    </div>
                                    <div class="card-body">
                                        <table class="">
                                            <tr>
                                                <td class="font-weight-bold">UBlood</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="UBlood" class="form-control" name="UBlood" placeholder="UBlood" value="{{ $userPol->UBlood }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">ketone</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="ketone" class="form-control" name="ketone" placeholder="ketone" value="{{ $userPol->ketone }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Uglu</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="Uglu" class="form-control" name="Uglu" placeholder="Uglu" value="{{ $userPol->Uglu }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Upro</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="Upro" class="form-control" name="Upro" placeholder="Upro" value="{{ $userPol->Upro }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">URBC</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="URBC" class="form-control" name="URBC" placeholder="URBC" value="{{ $userPol->URBC }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">UWBC</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="UWBC" class="form-control" name="UWBC" placeholder="UWBC" value="{{ $userPol->UWBC }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">UEPI</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="UEPI" class="form-control" name="UEPI" placeholder="UEPI" value="{{ $userPol->UEPI }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="card-header border-bottom mx-2 px-0">
                                        <div class="card-title mb-2">ผลตรวจอุจจาระ (Stool Examlnation)</div>
                                    </div>
                                    <div class="card-body">
                                        <table class="">
                                            <tr>
                                                <td class="font-weight-bold">StoolWBC</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="StoolWBC" class="form-control" name="StoolWBC" placeholder="StoolWBC" value="{{ $userPol->StoolWBC }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">StoolRBC</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="StoolRBC" class="form-control" name="StoolRBC" placeholder="StoolRBC" value="{{ $userPol->StoolRBC }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Ova&Parasite</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="Ova" class="form-control" name="Ova" placeholder="Ova&Parasite" value="{{ $userPol->Ova }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Occult Blood</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="Occult" class="form-control" name="Occult" placeholder="Occult Blood" value="{{ $userPol->Occult }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header border-bottom mx-2 px-0">
                                        <div class="card-title mb-2">ผลตรวจทางชีวเคมี (Biochemistry)</div>
                                    </div>
                                    <div class="card-body">
                                        <table class="">
                                            <tr>
                                                <td class="font-weight-bold">FBS</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="FBS" class="form-control" name="FBS" placeholder="FBS" value="{{ $userPol->FBS }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">BUN</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="BUN" class="form-control" name="BUN" placeholder="BUN" value="{{ $userPol->BUN }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Cre</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="Cre" class="form-control" name="Cre" placeholder="Cre" value="{{ $userPol->Cre }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Cric</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="Cric" class="form-control" name="Cric" placeholder="Cric" value="{{ $userPol->Cric }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Chol</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="Chol" class="form-control" name="Chol" placeholder="Chol" value="{{ $userPol->Chol }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Tg</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="Tg" class="form-control" name="Tg" placeholder="Tg" value="{{ $userPol->Tg }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">HDL</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="HDL" class="form-control" name="HDL" placeholder="HDL" value="{{ $userPol->HDL }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">LDL</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="LDL" class="form-control" name="LDL" placeholder="LDL" value="{{ $userPol->LDL }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">ALK</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="ALK" class="form-control" name="ALK" placeholder="ALK" value="{{ $userPol->ALK }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">SGOT</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="SGOT" class="form-control" name="SGOT" placeholder="SGOT" value="{{ $userPol->SGOT }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">SGPT</td>
                                                <td>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="SGPT" class="form-control" name="SGPT" placeholder="SGPT" value="{{ $userPol->SGPT }}" >
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header border-bottom mx-2 px-0">
                                        <h6 class="py-1 mb-0 font-medium-2"><i class="feather icon-lock mr-50 "></i>อื่นๆ
                                        </h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-body">
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
                                                                                <input type="radio" name="CXR" 
                                                                                    @if($userPol->CXR ==  "ไม่ได้ตรวจ") checked="checked" @endif
                                                                                value="ไม่ได้ตรวจ">
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
                                                                                <input type="radio" name="CXR" 
                                                                                @if($userPol->CXR ==  "ปกติ") checked="checked" @endif
                                                                                value="ปกติ">
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
                                                                                <input type="radio" name="CXR" 
                                                                                @if($userPol->CXR ==  "ผิดปกติ") checked="checked" @endif
                                                                                value="ผิดปกติ">
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
                                                                                    <input type="radio" name="Smoke" 
                                                                                        @if($userPol->Smoke ==  "สูบ") checked="checked" @endif
                                                                                    value="สูบ">
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
                                                                                    <input type="radio" name="Smoke" 
                                                                                        @if($userPol->Smoke ==  "ไม่สูบ") checked="checked" @endif
                                                                                    value="ไม่สูบ">
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
                                                                                    <input type="radio" name="Smoke" 
                                                                                        @if($userPol->Smoke ==  "เคยสูบแต่เลิกแล้ว") checked="checked" @endif
                                                                                    value="เคยสูบแต่เลิกแล้ว">
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
                                                                                    <input type="radio" name="Drink" 
                                                                                        @if($userPol->Drink ==  "ดื่ม") checked="checked" @endif
                                                                                    value="ดื่ม">
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
                                                                                    <input type="radio" name="Drink" 
                                                                                        @if($userPol->Drink ==  "ไม่ดื่ม") checked="checked" @endif
                                                                                    value="ไม่ดื่ม">
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
                                                                                    <input type="radio" name="Drink" 
                                                                                        @if($userPol->Drink ==  "เคยดื่มแต่เลิกแล้ว") checked="checked" @endif
                                                                                    value="เคยดื่มแต่เลิกแล้ว">
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
                                                                                    <input type="radio" name="medical_history" id="noCheck" onclick="javascript:yesnoCheck();" 
                                                                                        @if($userPol->medical_history ==  "สม่ำเสมอ") checked="checked" @endif
                                                                                    value="สม่ำเสมอ">
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
                                                                                    <input type="radio" name="medical_history" id="noCheck" onclick="javascript:yesnoCheck();" 
                                                                                        @if($userPol->medical_history ==  "ไม่สม่ำเสมอ") checked="checked" @endif
                                                                                    value="ไม่สม่ำเสมอ">
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
                                                                                    <input type="radio" name="medical_history" id="noCheck" onclick="javascript:yesnoCheck();" 
                                                                                        @if($userPol->medical_history ==  "ไม่รักษา") checked="checked" @endif
                                                                                    value="ไม่รักษา">
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
                                                                                    <input type="radio" name="medical_history" id="noCheck" onclick="javascript:yesnoCheck();" 
                                                                                        @if($userPol->medical_history ==  "หายแล้ว") checked="checked" @endif
                                                                                    value="หายแล้ว">
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
                                                                                    <input type="radio" id="yesCheck" onclick="javascript:yesnoCheck();" name="medical_history" 
                                                                                        @if($userPol->medical_history ==  "อื่นๆ") checked="checked" @endif
                                                                                    value="อื่นๆ">
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">อื่นๆ</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                    </ul>
                                                                     @if(!empty($userPol->medical_history_other))
                                                                    <div id="ifYes" class="form-group mt-1">
                                                                        <div class="form-group mt-1">
                                                                            <div class="position-relative has-icon-left">
                                                                            <input type="text" id="fname-icon" class="form-control" name="medical_history_other" value="{{ $userPol->medical_history_other }}" >
                                                                                <div class="form-control-position">
                                                                                    <i class="feather icon-user"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                     @else
                                                                     <div id="ifYes" style="display:none" class="form-group mt-1">
                                                                        <div class="form-group mt-1">
                                                                            <div class="position-relative has-icon-left">
                                                                            <input type="text" id="fname-icon" class="form-control" name="medical_history_other" >
                                                                                <div class="form-control-position">
                                                                                    <i class="feather icon-user"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @endif
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
                                                                    @foreach ($all_fruits as $item)
                                                                        {!! $checkedStatus = ""; !!}
                                                                        <div class="d-inline-block mr-2">
                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                <input type="checkbox" name="congenital_disease[]" 
                                                                                @if($item ==  "อื่นๆ") id="chkPassport1" @endif
                                                                                @if(in_array($item,$codi))  {{$checkedStatus ="checked"}} @endif
                                                                                        value="{{$item}}">
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">{{$item}}</span>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    @endforeach
                                                                        @if(!empty($userPol->congenital_disease_detail))
                                                                        <div id="dvPassport2" class="form-group mt-1">
                                                                                    <div class="position-relative has-icon-left">
                                                                                    <input type="text" id="fname-icon" class="form-control" name="congenital_disease_detail" placeholder="โปรดระบุ.." value="{{ $userPol->congenital_disease_detail }}">
                                                                                            <div class="form-control-position">
                                                                                                <i class="feather icon-user"></i>
                                                                                            </div>
                                                                                    </div>
                                                                                </div>     
                                                                        @else
                                                                        <div id="dvPassport2" class="form-group mt-1" style="display: none">
                                                                                    <div class="position-relative has-icon-left">
                                                                                    <input type="text" id="fname-icon" class="form-control" name="congenital_disease_detail" placeholder="โปรดระบุ.." value="{{ $userPol->congenital_disease_detail }}">
                                                                                            <div class="form-control-position">
                                                                                                <i class="feather icon-user"></i>
                                                                                            </div>
                                                                                    </div>
                                                                                </div>  
                                                                        @endif
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
                                                                                    <input type="radio" name="exercise" 
                                                                                        @if($userPol->exercise ==  "ออกกำลังกายทุกวัน ครั้งละ 30 นาที") checked="checked" @endif
                                                                                    value="ออกกำลังกายทุกวัน ครั้งละ 30 นาที">
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
                                                                                    <input type="radio" name="exercise" 
                                                                                        @if($userPol->exercise ==  "ออกกำลังกายสัปดาห์ละมากกว่า 3 ครั้ง ครั้งละ 30 นาที สม่ำเสมอ") checked="checked" @endif
                                                                                    value="ออกกำลังกายสัปดาห์ละมากกว่า 3 ครั้ง ครั้งละ 30 นาที สม่ำเสมอ">
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
                                                                                    <input type="radio" name="exercise" 
                                                                                        @if($userPol->exercise ==  "ออกกำลังกายสัปดาห์ละ 3 ครั้ง ครั้งละ 30 นาที สม่ำเสมอ") checked="checked" @endif
                                                                                    value="ออกกำลังกายสัปดาห์ละ 3 ครั้ง ครั้งละ 30 นาที สม่ำเสมอ">
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
                                                                                    <input type="radio" name="exercise" 
                                                                                        @if($userPol->exercise ==  "ออกกำลังกายน้อยกว่าสัปดาห์ละ 3 ครั้ง") checked="checked" @endif
                                                                                    value="ออกกำลังกายน้อยกว่าสัปดาห์ละ 3 ครั้ง">
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
                                                                                    <input type="radio" name="exercise" 
                                                                                        @if($userPol->exercise ==  "ไม่ออกกำลังกาย") checked="checked" @endif
                                                                                    value="ไม่ออกกำลังกาย">
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
                                                <div class="col-12 text-right">
                                                    <button type="submit" class="btn btn-primary mr-1  waves-effect waves-light"><i class="feather icon-edit-1"></i> บันทึก</button>
                                                    <a href="{{ route('police.show', $userPol->id)}}" class="btn btn-info mr-1  waves-effect waves-light" onclick="goBack()"><i class="feather icon-edit-1"></i> ยกเลิก</a>
                                                   
                                                    <button type="button" class="btn btn-danger mr-1 waves-effect waves-light" data-toggle="modal" data-target="#exampleModalCenter">
                                                <i class="feather icon-trash-2"></i> ลบข้อมูล
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <form id="delete" name="delete" action="{{ route('police.destroy', $userPol->id) }}" method="POST">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">ลบข้อมูล</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body text-center">
                                                                    <b>คุณต้องการลบข้อมูลตรวจสุขภาพ</b> "{{ $userPol->check_up_user_pol->titlename }}{{ $userPol->check_up_user_pol->first_name }} {{ $userPol->check_up_user_pol->last_name }}" <b>ใช่หรือไม่</b>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                                                    <button type="button" class="btn btn-danger">ลบข้อมูล</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                    </div>
                </section>
            </form>
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
        $("#chkPassport1").click(function () {
            if ($(this).is(":checked")) {
                $("#dvPassport2").show();
            } else {
                $("#dvPassport2").hide();
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
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets') }}/js/scripts/pages/app-user.js"></script>
    <!-- END: Page JS-->

@endsection
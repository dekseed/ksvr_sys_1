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
                                    <li class="breadcrumb-item active">ดูข้อมูล
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="content-body">
                <section class="page-users-view">
                     @if(Session::has('message'))
                        <div class="alert alert-primary">
                            <span class="text-bold-700 font-medium-3 mr-1"><i class="feather icon-check mr-1"></i>{{ Session::get('message') }}</span>
                        </div>

                    @endif
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
                                                <td>{{ $userProfile->titlename }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">ชื่อ</td>
                                                    <td>{{ $userProfile->first_name }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">นามสกุล</td>
                                                    <td>{{ $userProfile->last_name }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">เพศ</td>
                                                    <td>{{ $userProfile->gender }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-5">
                                            <table class="ml-0 ml-sm-0 ml-lg-0">
                                                <tr>
                                                    <td class="font-weight-bold">เลขที่บัตรประชาชน</td>
                                                    <td>{{ $userProfile->cid }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">อายุ</td>
                                                    <td>{{ $userProfile->age }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">เบอร์โทร</td>
                                                    <td>{{ $userProfile->tel }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">หน่วยงาน</td>
                                                    <td>{{ $userProfile->kind_check_up->name }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-12 text-right">
                                            <a href="{{ route('police.add', $userProfile->id)}}" class="btn btn-info mr-1 waves-effect waves-light"><i class="feather icon-user-plus"></i> เพิ่มข้อมูลตรวจสุขภาพประจำปี</a>
                                            <a href="{{ route('police.editpro', $userProfile->id)}}" class="btn btn-primary mr-1  waves-effect waves-light"><i class="feather icon-edit-1"></i> แก้ไขข้อมูลส่วนตัว</a>
                                            {{-- <a href="{{ route('police.edit', $userProfile->id)}}" class="btn btn-info mr-1  waves-effect waves-light"><i class="feather icon-edit-1"></i> แก้ไขข้อมูลตรวจสุขภาพ</a> --}}
                                            <button type="button" class="btn btn-danger mr-1 waves-effect waves-light" data-toggle="modal" data-target="#exampleModalCenter">
                                                <i class="feather icon-trash-2"></i> ลบข้อมูล
                                            </button>
                                            <a href="{{ route('check_up.police')}}" class="btn btn-outline-light mr-1 waves-effect waves-light"><i class="feather "></i> กลับ</a>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">ลบข้อมูล</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        คุณต้องการลบข้อมูล<b> "{{ $userProfile->titlename }}{{ $userProfile->first_name }} {{ $userProfile->last_name }}" </b>ใช่หรือไม่
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                                         <form action="{{ route('user_police.destroy', $userProfile->id)}}" method="post">
                                                            {{ method_field('delete') }}
                                                             {{ csrf_field() }}
                                                            
                                                            <button type="submit" class="btn btn-danger mr-1 waves-effect waves-light"><i class="feather icon-trash-2"></i> ลบข้อมูลทั้งหมด</button>
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
                    <div class="row">    
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header border-bottom mx-2 px-0">
                                    <div class="card-title mb-2">ข้อมูลตรวจสุขภาพประจำปี </div>
                                </div>
                                <div class="card-body">
                                    
                                    <ul class="nav nav-tabs" role="tablist">
                                        @if(count($userCheckup))
                                            @foreach ($userCheckup as $item)
                                                <li class="nav-item">
                                                    <a class="nav-link" id="home{{$item->year}}-tab" data-toggle="tab" href="#home{{$item->year}}" aria-controls="home{{$item->year}}" role="tab" aria-selected="true">{{$item->year}}</a>
                                                </li>
                                            @endforeach
                                        @else
                                            <p><h3 class="text-center">ไม่มีข้อมูลตรวจสุขภาพ</h3></p>
                                        @endif 

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                        <div class="tab-content">
                          @if(count($userCheckup))
                            
                            @foreach ($userCheckup as $item)

                            <div class="tab-pane" id="home{{$item->year}}" aria-labelledby="home{{$item->year}}-tab" role="tabpanel">
                                                
                                <div class="row">        
                                    <div class="col-md-6 col-12 ">
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
                                                                    <input type="text" id="BP_S" class="form-control" name="BP_S" placeholder="BP_S" value="{{ $item->BP_S }}" disabled>
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
                                                                        <input type="text" id="BP_D" class="form-control" name="BP_D" placeholder="BP_D" value="{{ $item->BP_D }}" disabled>
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
                                                                            <input type="text" id="Pulse" class="form-control" name="Pulse" placeholder="Pulse" value="{{ $item->PULSE }}" disabled>
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
                                                                <input type="text" id="Weight" class="form-control" name="Weight" placeholder="Weight" value="{{ $item->Weight }}" disabled>
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
                                                                <input type="text" id="Height" class="form-control" name="Height" placeholder="Height" value="{{ $item->Height }}" disabled>
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
                                                                <input type="text" id="BML" class="form-control" name="BML" placeholder="BML" value="{{ $item->BML }}" disabled>
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
                                                                <input type="text" id="WAIST" class="form-control" name="WAIST" placeholder="WAIST" value="{{ $item->WAIST }}" disabled>
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

                                    <div class="col-md-6 col-12 ">
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
                                                                <input type="text" id="WBC" class="form-control" name="WBC" placeholder="WBC" value="{{ $item->WBC }}" disabled>
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
                                                                <input type="text" id="RBC" class="form-control" name="RBC" placeholder="RBC" value="{{ $item->RBC }}" disabled>
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
                                                                <input type="text" id="Hb" class="form-control" name="Hb" placeholder="Hb" value="{{ $item->Hb }}" disabled>
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
                                                                <input type="text" id="Hct" class="form-control" name="Hct" placeholder="Hct" value="{{ $item->Hct }}" disabled>
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
                                                                <input type="text" id="MCV" class="form-control" name="MCV" placeholder="MCV" value="{{ $item->MCV }}" disabled>
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
                                                                <input type="text" id="NE" class="form-control" name="NE" placeholder="NE" value="{{ $item->NE }}" disabled>
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
                                                                <input type="text" id="LY" class="form-control" name="LY" placeholder="LY" value="{{ $item->LY }}" disabled>
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
                                                                <input type="text" id="MO" class="form-control" name="MO" placeholder="MO" value="{{ $item->MO }}" disabled>
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
                                                                <input type="text" id="EO" class="form-control" name="EO" placeholder="EO" value="{{ $item->EO }}" disabled>
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
                                                                <input type="text" id="BA" class="form-control" name="BA" placeholder="BA" value="{{ $item->BA }}" disabled>
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

                                    <div class="col-md-6 col-12 ">
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
                                                                <input type="text" id="UBlood" class="form-control" name="UBlood" placeholder="UBlood" value="{{ $item->UBlood }}" disabled>
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
                                                                <input type="text" id="ketone" class="form-control" name="ketone" placeholder="ketone" value="{{ $item->ketone }}" disabled>
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
                                                                <input type="text" id="Uglu" class="form-control" name="Uglu" placeholder="Uglu" value="{{ $item->Uglu }}" disabled>
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
                                                                <input type="text" id="Upro" class="form-control" name="Upro" placeholder="Upro" value="{{ $item->Upro }}" disabled>
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
                                                                <input type="text" id="URBC" class="form-control" name="URBC" placeholder="URBC" value="{{ $item->URBC }}" disabled>
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
                                                                <input type="text" id="UWBC" class="form-control" name="UWBC" placeholder="UWBC" value="{{ $item->UWBC }}" disabled>
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
                                                                <input type="text" id="UEPI" class="form-control" name="UEPI" placeholder="UEPI" value="{{ $item->UEPI }}" disabled>
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
                                                                <input type="text" id="StoolWBC" class="form-control" name="StoolWBC" placeholder="StoolWBC" value="{{ $item->StoolWBC }}" disabled>
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
                                                                <input type="text" id="StoolRBC" class="form-control" name="StoolRBC" placeholder="StoolRBC" value="{{ $item->StoolRBC }}" disabled>
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
                                                                <input type="text" id="Ova" class="form-control" name="Ova" placeholder="Ova&Parasite" value="{{ $item->Ova }}" disabled>
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
                                                                <input type="text" id="Occult" class="form-control" name="Occult" placeholder="Occult Blood" value="{{ $item->Occult }}" disabled>
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

                                    <div class="col-md-6 col-12 ">
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
                                                                <input type="text" id="FBS" class="form-control" name="FBS" placeholder="FBS" value="{{ $item->FBS }}" disabled>
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
                                                                <input type="text" id="BUN" class="form-control" name="BUN" placeholder="BUN" value="{{ $item->BUN }}" disabled>
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
                                                                <input type="text" id="Cre" class="form-control" name="Cre" placeholder="Cre" value="{{ $item->Cre }}" disabled>
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
                                                                <input type="text" id="Cric" class="form-control" name="Cric" placeholder="Cric" value="{{ $item->Cric }}" disabled>
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
                                                                <input type="text" id="Chol" class="form-control" name="Chol" placeholder="Chol" value="{{ $item->Chol }}" disabled>
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
                                                                <input type="text" id="Tg" class="form-control" name="Tg" placeholder="Tg" value="{{ $item->Tg }}" disabled>
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
                                                                <input type="text" id="HDL" class="form-control" name="HDL" placeholder="HDL" value="{{ $item->HDL }}" disabled>
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
                                                                <input type="text" id="LDL" class="form-control" name="LDL" placeholder="LDL" value="{{ $item->LDL }}" disabled>
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
                                                                <input type="text" id="ALK" class="form-control" name="ALK" placeholder="ALK" value="{{ $item->ALK }}" disabled>
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
                                                                <input type="text" id="SGOT" class="form-control" name="SGOT" placeholder="SGOT" value="{{ $item->SGOT }}" disabled>
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
                                                                <input type="text" id="SGPT" class="form-control" name="SGPT" placeholder="SGPT" value="{{ $item->SGPT }}" disabled>
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
                                                                                        <input type="radio" name="CXR" disabled
                                                                                            @if($item->CXR ==  "ไม่ได้ตรวจ") checked="checked" @endif
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
                                                                                        <input type="radio" name="CXR" disabled
                                                                                        @if($item->CXR ==  "ปกติ") checked="checked" @endif
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
                                                                                        <input type="radio" name="CXR" disabled
                                                                                        @if($item->CXR ==  "ผิดปกติ") checked="checked" @endif
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
                                                                                            <input type="radio" name="Smoke" disabled
                                                                                                @if($item->Smoke ==  "สูบ") checked="checked" @endif
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
                                                                                            <input type="radio" name="Smoke" disabled
                                                                                                @if($item->Smoke ==  "ไม่สูบ") checked="checked" @endif
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
                                                                                            <input type="radio" name="Smoke" disabled
                                                                                                @if($item->Smoke ==  "เคยสูบแต่เลิกแล้ว") checked="checked" @endif
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
                                                                                            <input type="radio" name="Drink" disabled
                                                                                                @if($item->Drink ==  "ดื่ม") checked="checked" @endif
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
                                                                                            <input type="radio" name="Drink" disabled
                                                                                                @if($item->Drink ==  "ไม่ดื่ม") checked="checked" @endif
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
                                                                                            <input type="radio" name="Drink" disabled
                                                                                                @if($item->Drink ==  "เคยดื่มแต่เลิกแล้ว") checked="checked" @endif
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
                                                                                            <input type="radio" name="medical_history" id="noCheck" onclick="javascript:yesnoCheck();" disabled
                                                                                                @if($item->medical_history ==  "สม่ำเสมอ") checked="checked" @endif
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
                                                                                            <input type="radio" name="medical_history" id="noCheck" onclick="javascript:yesnoCheck();" disabled
                                                                                                @if($item->medical_history ==  "ไม่สม่ำเสมอ") checked="checked" @endif
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
                                                                                            <input type="radio" name="medical_history" id="noCheck" onclick="javascript:yesnoCheck();" disabled
                                                                                                @if($item->medical_history ==  "ไม่รักษา") checked="checked" @endif
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
                                                                                            <input type="radio" name="medical_history" id="noCheck" onclick="javascript:yesnoCheck();" disabled
                                                                                                @if($item->medical_history ==  "หายแล้ว") checked="checked" @endif
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
                                                                                            <input type="radio" id="yesCheck" onclick="javascript:yesnoCheck();" name="medical_history" disabled
                                                                                                @if($item->medical_history ==  "อื่นๆ") checked="checked" @endif
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
                                                                            @if($item->medical_history ==  "อื่นๆ")
                                                                                <div class="form-group mt-1">
                                                                                    <div class="position-relative has-icon-left">
                                                                                    <input type="text" id="fname-icon" class="form-control" name="medical_history_other" value="{{ $item->medical_history_other }}" disabled>
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
                                                        <div class="col-md-6">
                                                            <div class="table-responsive border rounded px-1 mt-1 mb-1">
                                                                <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-repeat mr-50 "></i> โรคประจำตัว</h6>
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-1">
                                                                        {{ $item->congenital_disease }} @if(!empty($item->congenital_disease_detail)) ({{$item->congenital_disease_detail}})  @endif
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
                                                                                            <input type="radio" name="exercise" disabled
                                                                                                @if($item->exercise ==  "ออกกำลังกายทุกวัน ครั้งละ 30 นาที") checked="checked" @endif
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
                                                                                            <input type="radio" name="exercise" disabled
                                                                                                @if($item->exercise ==  "ออกกำลังกายสัปดาห์ละมากกว่า 3 ครั้ง ครั้งละ 30 นาที สม่ำเสมอ") checked="checked" @endif
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
                                                                                            <input type="radio" name="exercise" disabled
                                                                                                @if($item->exercise ==  "ออกกำลังกายสัปดาห์ละ 3 ครั้ง ครั้งละ 30 นาที สม่ำเสมอ") checked="checked" @endif
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
                                                                                            <input type="radio" name="exercise" disabled
                                                                                                @if($item->exercise ==  "ออกกำลังกายน้อยกว่าสัปดาห์ละ 3 ครั้ง") checked="checked" @endif
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
                                                                                            <input type="radio" name="exercise" disabled
                                                                                                @if($item->exercise ==  "ไม่ออกกำลังกาย") checked="checked" @endif
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
                                                            <a href="{{ route('police.edit', $item->id)}}" class="btn btn-info mr-1  waves-effect waves-light"><i class="feather icon-edit-1"></i> แก้ไขข้อมูลตรวจสุขภาพ</a>
                                                            <button type="button" class="btn btn-danger mr-1 waves-effect waves-light" data-toggle="modal" data-target="#exampleModalCenter{{$item->id}}">
                                                                <i class="feather icon-trash-2"></i> ลบข้อมูล
                                                            </button>
                                                            <a href="{{ route('check_up.police')}}" class="btn btn-outline-light mr-1 waves-effect waves-light"><i class="feather "></i> กลับ</a>
                                                        </div>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModalCenter{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLongTitle">ลบข้อมูล</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    
                                                                    <div class="modal-body text-center">
                                                                        คุณต้องการลบข้อมูลตรวจสุขภาพประจำปี <b> "{{ $item->year }}" </b>ใช่หรือไม่

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                                                        <form action="{{ route('police.destroy', $item->id)}}" method="post">
                                                                            {{ method_field('delete') }}
                                                                            {{ csrf_field() }}
                                                                            <button type="submit"class="btn btn-primary mr-1 waves-effect waves-light"><i class="feather icon-trash-2"></i> ลบข้อมูลตรวจสุขภาพประจำปี</button>
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

                                </div>
                            </div>

                            @endforeach
                          @endif 

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
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets') }}/js/scripts/pages/app-user.js"></script>
    <!-- END: Page JS-->
@endsection
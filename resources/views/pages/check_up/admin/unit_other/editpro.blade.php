@extends('layouts.home')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/app-user.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
    
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
                                    <li class="breadcrumb-item active">แก้ไขข้อมูลส่วนตัว
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="content-body">
                <section class="page-users-view">
                    <div class="row">
                        <!-- account start -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">ข้อมูลส่วนตัว</div>
                                </div>
                                <form action="{{ route('police.updatepro', $userPol->id) }}" method="POST">
                                            {{method_field('PUT')}}
                                            {{csrf_field()}}
                                <div class="card-body">
                                    <div class="row">
                                        
                                            <div class="users-view-image">
                                                <img src="{{ asset('images') }}/default.jpg" class="users-avatar-shadow w-100 rounded mb-2 pr-2 ml-1" alt="avatar">
                                            </div>
                                            <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                                <table>
                                                    <tr>
                                                        <td class="font-weight-bold">คำนำหน้า</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="position-relative has-icon-left">
                                                                <input type="text" id="fname-icon" class="form-control" name="titlename" placeholder="คำนำหน้า" value="{{ $userPol->titlename }}" required>
                                                                        <div class="form-control-position">
                                                                            <i class="feather icon-user"></i>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">ชื่อ</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="position-relative has-icon-left">
                                                                        <input type="text" id="fname-icon" class="form-control" name="first_name" placeholder="ชื่อ" value="{{ $userPol->first_name }}" required>
                                                                        <div class="form-control-position">
                                                                            <i class="feather icon-user"></i>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">นามสกุล</td>
                                                        <td>
                                                        <div class="form-group">
                                                                <div class="position-relative has-icon-left">
                                                                        <input type="text" id="fname-icon" class="form-control" name="last_name" placeholder="นามสกุล" value="{{ $userPol->last_name }}" required>
                                                                        <div class="form-control-position">
                                                                            <i class="feather icon-user"></i>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">เพศ</td>
                                                        <td>
                                                        <div class="form-group">
                                                            <div class="position-relative has-icon-left">
                                                                        <select class="custom-select form-control" id="gender" name="gender">
                                                                            <option 
                                                                            @if($userPol->gender == 'ชาย') selected @endif
                                                                            value="ชาย">ชาย</option>
                                                                            <option 
                                                                            @if($userPol->gender == 'หญิง') selected @endif
                                                                            value="หญิง">หญิง</option>
                                                                            
                                                                        </select>
                                                                        <div class="form-control-position">
                                                                            <i class="feather icon-user"></i>
                                                                        </div>
                                                                    </div>
                                                            </div>    
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col-12 col-md-12 col-lg-5">
                                                <table class="ml-0 ml-sm-0 ml-lg-0">
                                                    <tr>
                                                        <td class="font-weight-bold">เลขที่บัตรประชาชน</td>
                                                        <td>
                                                        <div class="form-group">
                                                                <div class="position-relative has-icon-left">
                                                                        <input type="text" id="fname-icon" class="form-control" name="cid" placeholder="เลขที่บัตรประจำตัวประชาชน" value="{{ $userPol->cid }}" required>
                                                                        <div class="form-control-position">
                                                                            <i class="feather icon-user"></i>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">อายุ</td>
                                                        <td>
                                                        <div class="form-group">
                                                                <div class="position-relative has-icon-left">
                                                                    <div class="input-group">
                                                                        <input type="number" name="age" class="touchspin" value="{{ $userPol->age }}">
                                                                    </div>
                                                                </div>
                                                            </div>    
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">เบอร์โทร</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="position-relative has-icon-left">
                                                                        <input type="number" id="contact-icon" class="form-control" name="tel" placeholder="เบอร์โทร"  value="{{ $userPol->tel }}" required>
                                                                        <div class="form-control-position">
                                                                            <i class="feather icon-smartphone"></i>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-bold">หน่วยงาน</td>
                                                        <td>
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
                                                        </td>
                                                    </tr>
                                                </table>
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
                                                        <form id="delete" name="delete" action="{{ route('user_police.destroy', $userPol->id) }}" method="POST">
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
                                                                    <b>คุณต้องการลบข้อมูล</b> "{{ $userPol->titlename }}{{ $userPol->first_name }} {{ $userPol->last_name }}" <b>ใช่หรือไม่</b>
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
                                </form>
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
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets') }}/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
    <script src="{{ asset('app-assets') }}/js/scripts/forms/number-input.js"></script>
    <script src="{{ asset('app-assets') }}/js/scripts/pages/app-user.js"></script>
    <!-- END: Page JS-->
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
@endsection
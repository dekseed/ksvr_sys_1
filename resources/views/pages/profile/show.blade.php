@extends('layouts.home')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/forms/validation/form-validation.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/app-user.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/select/select2.min.css">

@endsection
@section('content')

<!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                 <div class="content-header-left col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0"><i class="feather icon-users"></i> ข้อมูลส่วนตัว</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">หน้าหลัก</a>
                                    </li>
                                    <li class="breadcrumb-item active">ข้อมูลส่วนตัว
                                    </li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- account setting page start -->
                <section id="page-account-settings">

                    <div class="row">
                        <!-- left menu section -->
                        <div class="col-md-3 mb-2 mb-md-0">
                            <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                                <li class="nav-item">
                                    <a class="nav-link d-flex py-75 active" id="account-pill-general" data-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                                        <i class="feather icon-globe mr-50 font-medium-3"></i>
                                        ข้อมูลทั่วไป
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex py-75" id="account-pill-password" data-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                                        <i class="feather icon-lock mr-50 font-medium-3"></i>
                                        เปลี่ยนรหัสผ่าน
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <!-- right content section -->
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">
                                                @if(Session::has('message'))
                                                    <div class="col-12">
                                                        <div class="alert alert-warning alert-dismissible mb-2" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                            <span class="text-bold-700 font-medium-3 mr-1"><i class="feather icon-check mr-1"></i> {{ Session::get('message') }}</span>

                                                        </div>
                                                    </div>
                                                @endif
                                                <div class="media">
                                                    <a href="javascript: void(0);">
                                                        <img src="{{ asset('images') }}/{{Auth::user()->pic}}" class="rounded mr-75" alt="profile image" height="64" width="64">
                                                    </a>
                                                    <div class="media-body mt-75">
                                                        <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                            <form action="{{ route('profile.upload', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                                                                {{ csrf_field() }}
                                                                {{ method_field('POST') }}
                                                            <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer" for="account-upload">เลือกรูป</label>
                                                            <input type="file" name="file" id="account-upload" hidden>
                                                            <button class="btn btn-sm btn-outline-warning ml-50" type="submit">อัพโหลดรูป</button>
                                                            </form>
                                                        </div>
                                                    @if(count($errors) > 0)
                                                        @foreach ($errors->all() as $error)
                                                            <p class="text-muted ml-75 mt-50"><small>{{$error}}</small></p>
                                                        @endforeach
                                                    @else
                                                        <p class="text-muted ml-75 mt-50"><small>อัพโหลดได้เฉพาะนามสกุล .jpeg, .png, .bmp เท่านั้น และขนาดไฟล์ไม่เกิน 2 MB (2048 KB)</small></p>
                                                    @endif
                                                    </div>
                                                </div>
                                                <hr>
                                                <form action="{{route('profile.update', Auth::user()->id)}}" method="POST" novalidate>
                                                    {{ csrf_field() }}
                                                    {{ method_field('PUT') }}
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-username">คำนำหน้า</label>
                                                                    <select class="select2 form-control" name="title_name">
                                                                @foreach ($titleNames as $titleNames)
                                                                    <option {{ Auth::user()->title_name_id == $titleNames->id ? 'selected' : '' }} value="{{$titleNames->id}}">{{$titleNames->name}}</option>

                                                                @endforeach
                                                                </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-name">ชื่อหน้า</label>
                                                                    <input type="text" class="form-control" name="first_name" value="{{Auth::user()->first_name}}" placeholder="Name" required data-validation-required-message="This name field is required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-name">นามสกุล</label>
                                                                    <input type="text" class="form-control" name="last_name" value="{{Auth::user()->last_name}}" placeholder="Name" required data-validation-required-message="This name field is required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-e-mail">อีเมล์</label>
                                                                    <input type="email" class="form-control" placeholder="อีเมล์" name="email" value="{{Auth::user()->email}}" required data-validation-required-message="This email field is required">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="account-company">แผนก</label>
                                                                <select class="select2 form-control" name="department">
                                                                @foreach ($department as $departments)
                                                                    <option {{ Auth::user()->department_id == $departments->id ? 'selected' : '' }} value="{{$departments->id}}">{{$departments->name}}</option>

                                                                @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="account-company">ตำแหน่ง</label>
                                                                <input type="text" id="position" class="form-control" placeholder="ตำแหน่ง" name="position" value="{{Auth::user()->position}}" required autocomplete="position" >
                                                            </div>
                                                        </div>
                                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                            {{-- <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">บันทึก</button> --}}
                                                            <button type="button" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0" data-toggle="modal" data-target="#default<?= Auth::user()->id ?>"><i class="feather icon-edit-1"></i> บันทึก</button>

                                                            <div class="modal fade text-left" id="default<?= Auth::user()->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                                                        aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title" id="myModalLabel1">ยืนยันการเปลี่ยนแปลงข้อมูล</h4>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <h5>กรุณาใส่รหัสผ่าน</h5>
                                                                                <input type="password" id="password" class="form-control"
                                                                                name="password" required>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn grey mr-1 mb-1 btn-outline-secondary" data-dismiss="modal">ยกเลิก</button>
                                                                                <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light"><i class="feather icon-edit-1"></i> เปลี่ยนแปลงข้อมูล</button>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- <button type="reset" class="btn btn-outline-warning">Cancel</button> --}}
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade " id="account-vertical-password" role="tabpanel" aria-labelledby="account-pill-password" aria-expanded="false">
                                                <form action="{{route('profile.update', Auth::user()->id)}}" method="POST" novalidate>
                                                    {{ csrf_field() }}
                                                    {{ method_field('PUT') }}
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-old-password">รหัสผ่านเดิม</label>
                                                                    <input type="password" name="oldpassword" class="form-control" id="account-old-password" required placeholder="ยืนยันรหัสผ่านเดิม" data-validation-required-message="ยืนยันรหัสผ่านเดิม">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-new-password">รหัสผ่านใหม่</label>
                                                                    <input type="password" name="password" id="account-new-password" class="form-control" placeholder="รหัสผ่านใหม่" required data-validation-required-message="รหัสผ่านใหม่" minlength="6">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-retype-new-password">ยืนยันรหัสผ่านใหม่</label>
                                                                    <input type="password" name="con-password" class="form-control" required id="account-retype-new-password" data-validation-match-match="password" placeholder="ยืนยันรหัสผ่านใหม่" data-validation-required-message="ต้องยืนยันพาสเวิร์ดใหม่" minlength="6">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                            <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0"><i class="feather icon-edit-1"></i> เปลี่ยนรหัสผ่าน</button>
                                                            {{-- <button type="reset" class="btn btn-outline-warning">Cancel</button> --}}
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
                </section>
                <!-- account setting page end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
    var app = new Vue({
      el: '#app',
      data: {
        password_options: 'keep',
        rolesSelected: {!! Auth::user()->roles->pluck('id') !!}
      }
    });
</script>
 <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets') }}/js/scripts/pages/account-setting.js"></script>
    <!-- END: Page JS-->

<!-- BEGIN: Page Vendor JS-->

    <script src="{{ asset('app-assets') }}/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/extensions/dropzone.min.js"></script>
    <!-- END: Page Vendor JS-->
    <script src="{{ asset('app-assets') }}/js/scripts/forms/validation/form-validation.js"></script>

    <script src="{{ asset('app-assets') }}/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="{{ asset('app-assets') }}/js/scripts/forms/select/form-select2.js"></script>

@endsection

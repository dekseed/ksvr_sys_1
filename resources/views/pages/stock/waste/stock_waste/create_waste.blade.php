@extends('layouts.home')

@section('styles')
<!-- BEGIN: Vendor CSS-->
      <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css">
    <!-- END: Vendor CSS-->

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/file-uploaders/dropzone.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/data-list-view.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/select/select2.min.css">
    <!-- END: Page CSS-->


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
                            <h2 class="content-header-title float-left mb-0"><i class="feather icon-inbox"></i> ระบบบันทึกข้อมูลครุภัณฑ์</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">หน้าแรก</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard_stock') }}">ระบบบันทึกข้อมูลคลังแผนกศูนย์คอมฯ</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('waste.index') }}">สป.สิ้นเปลืองคอมพิวเตอร์</a>
                                    </li>
                                    <li class="breadcrumb-item active">รายละเอียดสป.สิ้นเปลืองคอมพิวเตอร์
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="content-body">
                <!-- Data list view starts -->
                <section id="data-list-view" class="data-list-view-header">
                    <div class="row match-height">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">ตาราง สป. สิ้นเปลืองคอมพิวเตอร์</h3>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">

                                        <form method="POST" class="form form-vertical" action="{{ route('waste.store') }}" enctype="multipart/form-data">
                                            {{method_field('POST')}}
                                            {{csrf_field()}}
                                            <div class="add-new-data">
                                                <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                                                    <div>
                                                        <h4 class="text-uppercase">เพิ่มข้อมูลสป.สิ้นเปลือง</h4>
                                                    </div>
                                                    <div class="hide-data-sidebar">
                                                        <i class="feather icon-x"></i>
                                                    </div>
                                                </div>

                                                <div class="data-items pb-3">
                                                    <div class="data-fields px-2 mt-1">
                                                        <div class="row">
                                                            <div class="col-sm-12 data-field-col">
                                                                <label for="data-status"> หมวดหมู่ </label>
                                                                <select id="cate_waste" name="cate_equipments" class="form-control" onchange="showmodel1()" required>
                                                                    {{-- @foreach ($cateEquipments as $roles)
                                                                    <option value="{{$roles->id}}">{{$roles->name}}</option>
                                                                    @endforeach --}}
                                                                        <option value="">เลือกหมวดหมู่</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-12 data-field-col">
                                                                <label for="data-status"> ประเภท </label>
                                                                <select class="form-control" name="kinds" id="wastes" required>

                                                                    <option value="">เลือกประเภท</option>
                                                                </select>
                                                            </div>

                                                            {{-- <div class="col-sm-12 data-field-col">
                                                                <label for="number">หมายเลขเครื่อง / เลขทะเบียน</label>
                                                                <input type="text" class="form-control" id="number" name="number" placeholder="12345678" required>
                                                            </div> --}}
                                                            {{-- <div class="col-sm-12 data-field-col">
                                                                <label for="name">ชื่ออุปกรณ์</label>
                                                                <input type="text" class="form-control" id="name" name="name" placeholder="ชื่ออุปกรณ์" required>
                                                            </div> --}}
                                                            <div class="col-sm-12 data-field-col">
                                                                <label for="brand">ยี่ห้อ</label>
                                                                <input type="text" class="form-control" id="brand" name="brand" placeholder="ยี่ห้อ" required>
                                                            </div>

                                                            <div class="col-sm-12 data-field-col" id="model">
                                                                <label for="model">รุ่น</label>
                                                                <input type="text" class="form-control" name="model" placeholder="a123 ..">
                                                            </div>
                                                            {{-- <div class="col-sm-12 data-field-col" style="display: none;" id="model1">
                                                                <label for="model">รุ่น</label>
                                                                <select id="cate_waste" name="model1" class="form-control select2">
                                                                    <option value="">รุ่น</option>
                                                                    @foreach ($modelCartInk as $roles)
                                                                        <option value="{{$roles->id}}">{{$roles->name}}</option>
                                                                        @endforeach
                                                                </select>
                                                            </div> --}}
                                                            <div class="col-sm-12 data-field-col">
                                                                <label for="brand">จำนวน</label>
                                                                <div class="row">
                                                                    <div class="col-sm-8 col-12">
                                                                        <input type="text" class="form-control" id="number" name="number" placeholder="จำนวน" required>
                                                                    </div>
                                                                    <div class="col-sm-4 col-12">
                                                                        <select class="form-control select2" name="unit" required>
                                                                        <option value="">จำนวนนับ</option>
                                                                        <option value="อัน">อัน</option>
                                                                        <option value="ชิ้น">ชิ้น</option>
                                                                        <option value="ตลับ">ตลับ</option>
                                                                        <option value="แผ่น">แผ่น</option>
                                                                        <option value="กล่อง">กล่อง</option>
                                                                        <option value="ชุด">ชุด</option>
                                                                        <option value="ตัว">ตัว</option>
                                                                    </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-12 data-field-col">
                                                                <label for="sn">รอบเดือน</label>
                                                                    <select id="projectinput6" name="round" class="form-control" required>
                                                                        <option value="1">ตุลาคม - ธันวาคม</option>
                                                                        <option value="2">มกราคม - มีนาคม</option>
                                                                        <option value="3">เมษายน - มิถุนายน</option>
                                                                        <option value="4">กรกฎาคม - กันยายน</option>
                                                                    </select>
                                                            </div>
                                                            <div class="col-sm-12 data-field-col">
                                                                <label for="detail">หมายเหตุ</label>
                                                                <textarea class="form-control" name="detail" id="basicTextarea" rows="3" placeholder="รายละเอียด.." required></textarea>
                                                            </div>
                                                            <div class="col-sm-12 data-field-col data-list-upload">
                                                                <label for="input-file">{{ __('อัพโหลดรูปภาพ') }}</label>
                                                                {{-- <input type="file" class="form-control" name="file"> --}}
                                                                <div class="custom-file">
                                                                    <input type="file" name="file" class="custom-file-input" id="inputGroupFile01">
                                                                    <label class="custom-file-label" for="inputGroupFile01"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                                    <div class="add-data-btn">
                                                        <button type="submit" class="btn btn-primary"><i class="feather icon-edit-1"></i> บันทึก</button>
                                                    </div>
                                                    <div class="cancel-data-btn">
                                                        <button type="button" class="btn btn-outline-danger">ยกเลิก</button>
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
                <!-- Data list view end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection
@section('scripts')
  <!-- BEGIN: Page Vendor JS-->
  <script src="{{ asset('app-assets') }}/vendors/js/ui/jquery.sticky.js"></script>
  <script src="{{ asset('app-assets') }}/vendors/js/extensions/dropzone.min.js"></script>
  <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/datatables.min.js"></script>
  <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
  <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
  <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
  <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/dataTables.select.min.js"></script>
  <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
  <script src="{{ asset('app-assets') }}/vendors/js/forms/select/select2.full.min.js"></script>
  <script src="{{ asset('app-assets') }}/js/scripts/forms/select/form-select2.js"></script>
  <!-- END: Page Vendor JS-->
  <!-- BEGIN: Page JS-->
  <script src="{{ asset('app-assets') }}/js/scripts/ui/data-list-view.js"></script>
  <!-- END: Page JS-->
@endsection

@extends('layouts.home')

@section('styles')
<!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/tables/ag-grid/ag-grid.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/tables/ag-grid/ag-theme-material.css">
    <!-- END: Vendor CSS-->

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/file-uploaders/dropzone.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/data-list-view.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/app-user.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/aggrid.css">
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
                    {{-- <div class="action-btns d-none">
                        <div class="btn-dropdown mr-1 mb-1">
                            <div class="btn-group dropdown actions-dropodown">
                                <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    ตัวเลือก
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"><i class="feather icon-trash"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="feather icon-archive"></i>Archive</a>
                                    <a class="dropdown-item" href="#"><i class="feather icon-file"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="feather icon-save"></i>Another Action</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    @if(Session::has('message'))
                        <div class="alert alert-primary">
                            <span class="text-bold-700 font-medium-3 mr-1"><i class="feather icon-check mr-1"></i>{{ Session::get('message') }}</span>
                        </div>

                    @endif

                    <!-- DataTable starts -->
                    <div class="table-responsive">
                        <table class="table data-list-view">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>หมวดหมู่</th>
                                    <th>ประเภท</th>
                                    <th>จำนวน</th>
                                    <th>ตัวเลือก</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($stocksWaste as $role)
                                <tr>
                                    <td></td>
                                    <td class="product-category">{{$role->name}}</td>
                                    <td class="product-name">{{$role->name}}</td>
                                    <td>

                                       </td>

                                    <td class="product-action">
                                         <span class="edit">
                                            <a class="btn btn-icon btn-success waves-effect light" href="{{ route('waste.show', $role->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="ดูข้อมูล">
                                                    <i class="feather icon-monitor"></i></a>
                                        </span>
                                        <span class="delete">
                                            <a class="" data-href="{{ route('waste.destroy', $role->id)}}"
                                                data-toggle="modal" data-target="#default<?= $role->id ?>"><i class="feather icon-trash"></i></a>
                                        </span>


                                    </td>
                                </tr>
                                 <div class="modal fade text-left" id="default<?= $role->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <form id="delete" name="delete" action="{{ route('waste.destroy', $role->id)}}" method="POST">
                                                                    {{ csrf_field() }}
                                                                    {{ method_field('DELETE') }}
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="myModalLabel1">ลบข้อมูล</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <h5>คุณต้องการลบ " {{$role->name}} " ใช่หรือไม่?</h5>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn grey mr-1 mb-1 btn-outline-secondary" data-dismiss="modal">ยกเลิก</button>
                                                                        <button type="submit" class="btn danger mr-1 mb-1 waves-effect waves-light">ลบข้อมูล</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                              @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- DataTable ends -->

                    <!-- add new sidebar starts -->
                    <div class="add-new-data-sidebar">
                        <div class="overlay-bg"></div>
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
                    <!-- add new sidebar ends -->
                </section>
                <!-- Data list view end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection
@section('scripts')
<script>
// function showmodel1(){

//     var select_model = $('#cate_waste').val();

//     if(select_model == '4'){
//         $('#model1').show();
//         $('#model').hide();
//     }
//     else{
//         $('#model1').hide();
//         $('#model').show();
//     }


// }

</script>
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
        <script src="{{ asset('app-assets') }}/vendors/js/tables/ag-grid/ag-grid-community.min.noStyle.js"></script>
        <script src="{{ asset('app-assets') }}/js/scripts/pages/app-user.js"></script>
    <!-- END: Page JS-->
@endsection

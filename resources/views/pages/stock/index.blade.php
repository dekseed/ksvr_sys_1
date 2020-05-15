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
                                    <li class="breadcrumb-item"><a href="{{ route('schedule.index') }}">ครุภัณฑ์</a>
                                    </li>
                                    <li class="breadcrumb-item active">รายการ
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
                                    <th>หมายเลขเครื่อง</th>
                                    <th>ชื่ออุปกรณ์</th>
                                    <th>หมวดหมู่</th>
                                    <th>ปีงบประมาณ</th>
                                    <th>ตัวเลือก</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($stocks as $role)
                                <tr>
                                    <td></td>
                                    <td class="product-name">
                                        @if((($role->year) + '4') < (YearFThai(date('Y')) - '2500') || (($role->year) + '4') == (YearFThai(date('Y')) - '2500'))
                                        <span class="text-danger">{{$role->number}}</span>
                                        @else
                                            {{$role->number}}
                                        @endif
                                    </td>
                                    <td class="product-name">{{$role->name}}</td>
                                    <td class="product-category">{{$role->category_equipment->name}}</td>
                                    <td>{{$role->expenditure}} ปี {{$role->year}}</td>
                                    <td class="product-action">
                                         <span class="edit">
                                            <a class="btn btn-icon btn-success waves-effect light" href="{{ route('schedule.show', $role->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="ดูข้อมูล">
                                                    <i class="feather icon-monitor"></i></a>
                                        </span>
                                        <span class="delete">
                                            <a class="btn btn-icon btn-danger waves-effect light" data-href="{{ route('schedule.destroy', $role->id)}}"
                                                data-toggle="modal" data-target="#default<?= $role->id ?>"><i class="feather icon-trash"></i></a>
                                        </span>


                                    </td>
                                </tr>
                                 <div class="modal fade text-left" id="default<?= $role->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                                                aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form id="delete" name="delete" action="{{ route('schedule.destroy', $role->id)}}" method="POST">
                                                 {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel1">ลบข้อมูล</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5>คุณต้องการลบ " {{$role->name}} " ใช่หรือไม่?</h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn grey mr-1 mb-1 btn-outline-secondary" data-dismiss="modal"><i class="feather icon-arrow-left"></i> ยกเลิก</button>
                                                    <button type="submit" class="btn danger mr-1 mb-1 waves-effect waves-light"><i class="feather icon-trash"></i> ลบข้อมูล</button>
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
                        <form method="POST" class="form form-vertical" action="{{ route('schedule.store') }}" enctype="multipart/form-data">
                            {{method_field('POST')}}
                            {{csrf_field()}}
                            <div class="add-new-data">
                                <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                                    <div>
                                        <h4 class="text-uppercase"><i class="feather icon-plus"></i> เพิ่มข้อมูลอุปกรณ์</h4>
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
                                                <select id="cate_equipments" name="cate_equipments" class="form-control" required>
                                                    {{-- @foreach ($cateEquipments as $roles)
                                                    <option value="{{$roles->id}}">{{$roles->name}}</option>
                                                    @endforeach --}}
                                                        <option value="">เลือกหมวดหมู่</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-12 data-field-col">
                                                <label for="data-status"> ประเภท </label>
                                                <select class="form-control select2" name="kinds" id="kinds">
                                                     {{-- @foreach ($kinds as $roles)
                                                    <option value="{{$roles->id}}">{{$roles->name}}</option>
                                                    @endforeach --}}
                                                    <option value="">เลือกประเภท</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-12 data-field-col">
                                                <label for="number">หมายเลขเครื่อง / เลขทะเบียน</label>
                                                <input type="text" class="form-control" id="number" name="number" placeholder="12345678" required>
                                                <span id="error_number"></span>
                                            </div>
                                            <div class="col-sm-12 data-field-col">
                                                <label for="name">ชื่ออุปกรณ์</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="" required>
                                            </div>
                                            <div class="col-sm-12 data-field-col">
                                                <label for="brand">ยี่ห้อ</label>
                                                <div class="form-label-group">
                                                             <select class="form-control select2" name="brand_id" id="data-status">
                                                                @foreach ($brands as $roles)
                                                                <option value="{{$roles->id}}">{{$roles->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                            </div>

                                            <div class="col-sm-12 data-field-col">
                                                <label for="model">รุ่น</label>
                                                <input type="text" class="form-control" id="model" name="model" placeholder="a123 .." required>
                                            </div>
                                            <div class="col-sm-12 data-field-col">
                                                <label for="sn">S/N</label>
                                                <input type="text" class="form-control" id="sn" name="sn" placeholder="123abc.." required>
                                            </div>
                                            <div class="col-sm-12 data-field-col">
                                                <label for="expenditure">ประเภทปีงบประมาณ</label>
                                                <div class="row">
                                                    <div class="col-sm-9 col-12">
                                                        <select id="projectinput6" name="expenditure" class="form-control" required>
                                                            <option value="งบรายรับสถานพยาบาล">งบรายรับ</option>
                                                            <option value="งบค่าเสื่อม">งบค่าเสื่อม</option>
                                                            <option value="งบบริจาค">งบบริจาค</option>
                                                            <option value="งบ 30 บาท">งบ 30 บาท</option>
                                                            <option value="สสส.ทบ.">สสส.ทบ.</option>
                                                            <option value="กรมสื่อสาร">กรมสื่อสาร</option>
                                                            <option value="ทดลองใช้">ทดลองใช้</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-3 col-12">
                                                        <input type="text" class="form-control" id="year" name="year" placeholder="ปี" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 data-field-col">
                                                <label for="sn">ผู้รับผิดชอบ</label>
                                                        <div class="form-label-group">
                                                             <select class="form-control select2" name="user_kinds" id="data-status">
                                                                @foreach ($users as $roles)
                                                                <option value="{{$roles->id}}">{{$roles->title_name->name}}{{$roles->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
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
                                        <button type="button" class="btn btn-outline-danger"><i class="feather icon-x"></i> ยกเลิก</button>
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
$(document).ready(function(){

    $('#number').blur(function(){
        var error_number = '';
        var _token = $('input[name="_token"]').val();
        var number = $('#number').val();
        $.ajax({
            url:"{{ route('number_available.check') }}",
            method:"POST",
            data:{number:number, _token:_token},
            success:function(result)
            {
                if(result == 'unique')
                {
                    $('#error_number').html('<label class="text-success">เลขว่าง</label>');
                    $('#number').removeClass('has-error');
                }
                else
                {
                    $('#error_number').html('<label class="text-danger">มีเลขนี้ในระบบ</label>');
                    $('#number').addClass('has-error');
                }
            }
        })
    })

});

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
    <!-- END: Page JS-->
@endsection

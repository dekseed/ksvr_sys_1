@extends('layouts.home')
@section('styles')

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css">
    <!-- END: Vendor CSS-->

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/file-uploaders/dropzone.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/data-list-view.css">
    <!-- END: Page CSS-->

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/forms/validation/form-validation.css">
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
                            <h2 class="content-header-title float-left mb-0"><i class="feather icon-users"></i>  ข้อมูลสมาชิก</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">หน้าแรก</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('users.index') }}">จัดการข้อมูลสมาชิก</a>
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
                                    <th>ลำดับที่</th>
                                    <th>ยศ ชื่อ - นามสกุล</th>
                                    <th>ตำแหน่ง</th>
                                    <th>แผนก</th>
                                    <th>สถานะ</th>
                                    <th>ตัวเลือก</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1 ?>
                              @foreach ($users as $role)
                                <tr>
                                    <td></td>
                                    <td class="text-center">{{ $i++ }}</td>
                                    <td class="product-name">{{ $role->title_name->name }}{{$role->first_name}} {{$role->last_name}}
                                        @if($role->isOnline())
                                        <div class="chip mb-0">
                                                                <div class="chip-body">
                                                                    <span class="chip-text" data-value="Doc"><span class="bullet bullet-success bullet-xs"></span> ออนไลน์</span>
                                                                </div>
                                                            </div>
                                        @endif

                                    </td>
                                    <td class="product-category">{{$role->position}}</td>
                                    <td>{{$role->department->name}}</td>
                                    <td>
                                        @if($role->status === '1')
                                        <div class="badge badge-primary badge-md">อนุมัติแล้ว</div>
                                        @else
                                        <div class="badge badge-danger badge-md">รอการอนุมัติ</div>
                                        @endif
                                    </td>
                                    <td class="">
                                        <span class="edit">
                                            <a class="btn btn-icon btn-success waves-effect light" href="{{ route('users.show', $role->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="ดูข้อมูล">
                                                    <i class="feather icon-monitor"></i></a>
                                        </span>
                                        {{-- <span class="edit">
                                            <a class="" href="{{ route('users.edit', $role->id)}}">
                                                    <i class="feather icon-edit"></i></a>
                                        </span> --}}
                                        <span class="delete">

                                            <a class="btn btn-icon btn-danger waves-effect light" data-href="{{ route('users.destroy', $role->id)}}" data-toggle="modal" title=""
                                               data-target="#default<?= $role->id ?>"><i class="feather icon-trash"></i></a>
                                            </span>


                                    </td>

                                </tr>
                                                    <div class="modal fade text-left" id="default<?= $role->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <form id="delete" name="delete" action="{{ route('users.destroy', $role->id)}}" method="POST">
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
                                                                        <button type="submit" class="btn btn-danger mr-1 mb-1 waves-effect waves-light">ลบข้อมูล</button>
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
                        <form method="POST" class="form form-vertical" action="{{ route('users.store') }}" enctype="multipart/form-data" >
                            {{method_field('POST')}}
                            {{csrf_field()}}
                            <div class="add-new-data">
                                <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                                    <div>
                                        <h4 class="text-uppercase">เพิ่มข้อมูลกำลังพล</h4>
                                    </div>
                                    <div class="hide-data-sidebar">
                                        <i class="feather icon-x"></i>
                                    </div>
                                </div>

                                <div class="data-items pb-3">
                                    <div class="data-fields px-2 mt-1">
                                        <div class="row">
                                            <div class="col-sm-12 data-field-col">
                                                <label for="number"> คำนำหน้า </label>
                                                <select class="select2 form-control" data-validation-required-message="เลือกคำนำหน้า" name="title_name_id"  required>
                                                    <option value="">คำนำหน้า</option>
                                                    <option value="1" @if (old('title_name_id') == "1") {{ 'selected' }} @endif>นาย</option>
                                                    <option value="2" @if (old('title_name_id') == "2") {{ 'selected' }} @endif>นาง</option>
                                                    <option value="3" @if (old('title_name_id') == "3") {{ 'selected' }} @endif>นางสาว</option>
                                                    <option value="4" @if (old('title_name_id') == "4") {{ 'selected' }} @endif>พันเอก</option>
                                                    <option value="5" @if (old('title_name_id') == "5") {{ 'selected' }} @endif>พันเอกหญิง</option>
                                                    <option value="6" @if (old('title_name_id') == "6") {{ 'selected' }} @endif>พันโท</option>
                                                    <option value="7" @if (old('title_name_id') == "7") {{ 'selected' }} @endif>พันโทหญิง</option>
                                                    <option value="8" @if (old('title_name_id') == "8") {{ 'selected' }} @endif>พันตรี</option>
                                                    <option value="9" @if (old('title_name_id') == "9") {{ 'selected' }} @endif>พันตรีหญิง</option>
                                                    <option value="10" @if (old('title_name_id') == "10") {{ 'selected' }} @endif>ร้อยเอก</option>
                                                    <option value="11" @if (old('title_name_id') == "11") {{ 'selected' }} @endif>ร้อยเอกหญิง</option>
                                                    <option value="12" @if (old('title_name_id') == "12") {{ 'selected' }} @endif>ร้อยโท</option>
                                                    <option value="13" @if (old('title_name_id') == "13") {{ 'selected' }} @endif>ร้อยโทหญิง</option>
                                                    <option value="14" @if (old('title_name_id') == "14") {{ 'selected' }} @endif>ร้อยตรี</option>
                                                    <option value="15" @if (old('title_name_id') == "15") {{ 'selected' }} @endif>ร้อยตรีหญิง</option>
                                                    <option value="16" @if (old('title_name_id') == "16") {{ 'selected' }} @endif>จ่าสิบเอก</option>
                                                    <option value="17" @if (old('title_name_id') == "17") {{ 'selected' }} @endif>จ่าสิบเอกหญิง</option>
                                                    <option value="18" @if (old('title_name_id') == "18") {{ 'selected' }} @endif>จ่าสิบโท</option>
                                                    <option value="19" @if (old('title_name_id') == "19") {{ 'selected' }} @endif>จ่าสิบโทหญิง</option>
                                                    <option value="20" @if (old('title_name_id') == "20") {{ 'selected' }} @endif>จ่าสิบตรี</option>
                                                    <option value="21" @if (old('title_name_id') == "21") {{ 'selected' }} @endif>จ่าสิบตรีหญิง</option>
                                                    <option value="22" @if (old('title_name_id') == "22") {{ 'selected' }} @endif>สิบเอก</option>
                                                    <option value="23" @if (old('title_name_id') == "23") {{ 'selected' }} @endif>สิบเอกหญิง</option>
                                                    <option value="24" @if (old('title_name_id') == "24") {{ 'selected' }} @endif>สิบโท</option>
                                                    <option value="25" @if (old('title_name_id') == "25") {{ 'selected' }} @endif>สิบโทหญิง</option>
                                                    <option value="26" @if (old('title_name_id') == "26") {{ 'selected' }} @endif>สิบตรี</option>
                                                    <option value="27" @if (old('title_name_id') == "27") {{ 'selected' }} @endif>สิบตรีหญิง</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-12 data-field-col">
                                                <label for="data-status"> ชื่อหน้า </label>
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="ชื่อหน้า" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                                            </div>
                                            <div class="col-sm-12 data-field-col">
                                                <label for="data-status"> นามสกุล </label>
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="นามสกุล" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                                            </div>
                                            <div class="col-sm-12 data-field-col">
                                                <label for="name"> ตำแหน่ง </label>
                                                <input type="text" id="position" class="form-control" placeholder="ตำแหน่ง" name="position" value="{{ old('position') }}" required autocomplete="position" data-validation-required-message="ป้อนตำแหน่ง" autofocus>
                                            </div>
                                            <div class="col-sm-12 data-field-col">
                                                <label for="number"> แผนก </label>
                                                <select class="select2 form-control" id="select2-array" name="department" data-validation-required-message="เลือกแผนก" required>
                                                    <option value="">แผนก</option>
                                                    <option value="1" @if (old('department_id') == "1") {{ 'selected' }} @endif>ทันตกรรม</option>
                                                    <option value="2" @if (old('department_id') == "2") {{ 'selected' }} @endif>ฉุกเฉิน</option>
                                                    <option value="3" @if (old('department_id') == "3") {{ 'selected' }} @endif>X-Ray</option>
                                                    <option value="4" @if (old('department_id') == "4") {{ 'selected' }} @endif>ซักรีด</option>
                                                    <option value="5" @if (old('department_id') == "5") {{ 'selected' }} @endif>ทะเบียน</option>
                                                    <option value="6" @if (old('department_id') == "6") {{ 'selected' }} @endif>หอผู้ป่วยนอก</option>
                                                    <option value="7" @if (old('department_id') == "7") {{ 'selected' }} @endif>ศูนย์ผู้ป่วยใน</option>
                                                    <option value="8" @if (old('department_id') == "8") {{ 'selected' }} @endif>เภสัชกรรม</option>
                                                    <option value="9" @if (old('department_id') == "9") {{ 'selected' }} @endif>หอผู้ป่วยใน</option>
                                                    <option value="10" @if (old('department_id') == "10") {{ 'selected' }} @endif>ศูนย์คอมพิวเตอร์</option>
                                                    <option value="11" @if (old('department_id') == "11") {{ 'selected' }} @endif>องค์พยาบาล</option>
                                                    <option value="12" @if (old('department_id') == "12") {{ 'selected' }} @endif>ห้องผ่าตัด</option>
                                                    <option value="13" @if (old('department_id') == "13") {{ 'selected' }} @endif>กายภาพบำบัด</option>
                                                    <option value="14" @if (old('department_id') == "14") {{ 'selected' }} @endif>ฝังเข็ม</option>
                                                    <option value="15" @if (old('department_id') == "15") {{ 'selected' }} @endif>แพทย์แผนไทย</option>
                                                    <option value="16" @if (old('department_id') == "16") {{ 'selected' }} @endif>สปา</option>
                                                    <option value="17" @if (old('department_id') == "17") {{ 'selected' }} @endif>LAB</option>
                                                    <option value="18" @if (old('department_id') == "18") {{ 'selected' }} @endif>จ่ายกลาง</option>
                                                    <option value="19" @if (old('department_id') == "19") {{ 'selected' }} @endif>สูทกรรม</option>
                                                    <option value="20" @if (old('department_id') == "20") {{ 'selected' }} @endif>ซักรีด</option>
                                                    <option value="21" @if (old('department_id') == "21") {{ 'selected' }} @endif>ศูนย์เด็กเล็กฯ</option>
                                                    <option value="22" @if (old('department_id') == "22") {{ 'selected' }} @endif>ศูนย์ส่งเสริมสุขภาพฯ</option>
                                                    <option value="23" @if (old('department_id') == "23") {{ 'selected' }} @endif>ส่งกำลังและบริการ</option>
                                                    <option value="24" @if (old('department_id') == "24") {{ 'selected' }} @endif>หมวดพลเสนารักษ์</option>
                                                    <option value="25" @if (old('department_id') == "25") {{ 'selected' }} @endif>ธุรการ</option>
                                                    <option value="26" @if (old('department_id') == "26") {{ 'selected' }} @endif>การเงิน</option>
                                                    <option value="27" @if (old('department_id') == "27") {{ 'selected' }} @endif>พลาธิการ</option>
                                                    <option value="28" @if (old('department_id') == "28") {{ 'selected' }} @endif>จุดคัดกรองฯ</option>
                                                    <option value="29" @if (old('department_id') == "29") {{ 'selected' }} @endif>ยุทธโยธา</option>
                                                </select>
                                            </div>

                                            <div class="col-sm-12 data-field-col">
                                                <label for="brand"> อีเมล์ </label>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="อีเมล์" required autocomplete="email">
                                            </div>

                                            <div class="col-sm-12 data-field-col">
                                                <label for="model"> รหัสผ่าน </label>
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="รหัสผ่าน" required required data-validation-required-message="รหัสผ่านใหม่" minlength="6">
                                            </div>
                                            <div class="col-sm-12 data-field-col">
                                                <label for="sn"> ยืนยันรหัสผ่าน </label>
                                                <input id="password-confirm" type="password" class="form-control" placeholder="ยืนยันรหัสผ่าน" name="password_confirmation" required data-validation-match-match="password" placeholder="ยืนยันรหัสผ่านใหม่" data-validation-required-message="ต้องยืนยันพาสเวิร์ดใหม่" minlength="6">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                    <div class="add-data-btn">
                                        <button type="submit" class="btn btn-primary">บันทึก</button>
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
    // var app = new Vue({
    //     el: '#app',
    //     data: {
    //         auto_password: true
    //     }
    // });
$(document).ready(function() {
"use strict"
   var table = $('.data-list-view').DataTable({
        // 'ajax': "{{ route('stock.fetch') }}",
        responsive: false,
        columnDefs: [
        {
            orderable: true,
            targets: 0,
            checkboxes: { selectRow: true }

        }
        ],
        dom:
        '<"top"<"actions action-btns"B><"action-filters"lf>><"clear">rt<"bottom"<"actions">p>',
        oLanguage: {
        sLengthMenu: "_MENU_",
        sSearch: ""
        },
        aLengthMenu: [[4, 10, 15, 20], [4, 10, 15, 20]],
        select: {
        style: "multi"
        },
        order: [[1, "asc"]],
        bInfo: false,
        pageLength: 4,
        buttons: [
        {
            text: "<i class='feather icon-plus'></i> เพิ่มข้อมูลใหม่",
            action: function() {
            $(this).removeClass("btn-secondary")
            $(".add-new-data").addClass("show")
            $(".overlay-bg").addClass("show")
            $("#data-name, #data-price").val("")
            $("#data-category, #data-status").prop("selectedIndex", 0)
            },
            className: "btn-outline-primary"
        }
        ],
        initComplete: function(settings, json) {
        $(".dt-buttons .btn").removeClass("btn-secondary")
        }
    });

    // Handle form submission event
    $('#frm-example').on('click', '.qrcode', function (e) {
        var form = this;
        var rows_selected = table.column(0).checkboxes.selected();
        // Iterate over all selected checkboxes
        $.each(rows_selected, function (index, rowId) {
            // Create a hidden element
            $(form).append(
                $('<input>')
                .attr('type', 'hidden')
                .attr('name', 'id[]')
                .val(rowId),
                $('<input>')
                .attr('type', 'hidden')
                .attr('name', 'print')
                .attr('value', '1')
            );
        });

    });

     // Handle form submission event
    $('#frm-example').on('click', '.print', function (e) {
        var form = this;
        var rows_selected = table.column(0).checkboxes.selected();
        // Iterate over all selected checkboxes
        $.each(rows_selected, function (index, rowId) {
            // Create a hidden element
            $(form).append(
                $('<input>')
                .attr('type', 'hidden')
                .attr('name', 'id[]')
                .val(rowId),
                $('<input>')
                .attr('type', 'hidden')
                .attr('name', 'print')
                .attr('value', '2')
            );
        });

    });
    table.on('draw.dt', function(){
        setTimeout(function(){
        if (navigator.userAgent.indexOf("Mac OS X") != -1) {
            $(".dt-checkboxes-cell input, .dt-checkboxes").addClass("mac-checkbox")
        }
        }, 50);
    });
////////////////////////////////////////////////////
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
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets') }}/js/scripts/ui/data-list-view.js"></script>
    <script src="{{ asset('app-assets') }}/js/scripts/forms/select/form-select2.js"></script>
    <script src="{{ asset('app-assets') }}/js/scripts/forms/validation/form-validation.js"></script>
    <!-- END: Page JS-->

@endsection

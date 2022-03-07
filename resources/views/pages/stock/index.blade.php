@extends('layouts.home')

@section('styles')
<!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css">
    <!-- END: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
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
                            <h2 class="content-header-title float-left mb-0"><i class="feather icon-package"></i> ระบบบันทึกข้อมูลครุภัณฑ์</h2>
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
                    <div class="action-btns d-none">
                        <div class="btn-dropdown mr-1 mb-1">
                            <div class="btn-group dropdown actions-dropodown">
                                {{-- <button class="btn btn-success print">QR-CODE</button> --}}
                                <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    ตัวเลือก
                                </button>
                                <div class="dropdown-menu">
                                    <button class="dropdown-item print"><i class="feather icon-save"></i>EXCEL</button>
                                    <button class="btn btn-icon btn-danger waves-effect light qrcode" ><i class="fa fa-qrcode"></i></button>

                                    {{-- <a class="dropdown-item" href="#"><i class="feather icon-save"></i>Another Action</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(Session::has('message'))
                        <div class="alert alert-primary">
                            <span class="text-bold-700 font-medium-3 mr-1"><i class="feather icon-check mr-1"></i>{{ Session::get('message') }}</span>
                        </div>

                    @endif
                    {{-- <form id="frm-example" action="{{ route('pdf_qr_store') }}" method="POST" target="_blank">
                        @csrf --}}

                        <!-- DataTable starts -->
                        <div class="table-responsive">
                            <table  id="example" class="table data-list-view">
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
                                        <td>{{$role->id}}</td>
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
                                                <a class="btn btn-icon btn-success waves-effect light" href="{{ route('show_user.stock', $role->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="ดูข้อมูล">
                                                        <i class="feather icon-monitor"></i></a>
                                            </span>
                                            {{-- <span class="delete">
                                                <button class="btn btn-icon btn-danger waves-effect light btn-del" value="{{$role->id}}"><i class="feather icon-trash"></i></button>
                                            </span> --}}
                                            @if (Auth::user()->hasRole(['superadministrator', 'administrator']))
                                            <span class="qr-code">
                                                <a class="btn btn-icon btn-danger waves-effect light qrcode" target="_blank"  href="{{ route('pdf_qr_store', $role->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="พิมพ์ QR-CODE">
                                                        <i class="fa fa-qrcode"></i></a>
                                                {{-- <button class="btn btn-icon btn-danger waves-effect light qrcode" data-toggle="tooltip" data-placement="top" title="" data-original-title="พิมพ์ QR-CODE"><i class="fa fa-qrcode"></i></button> --}}
                                            </span>
                                            @endif
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th></th>
                                        <th>หมายเลขเครื่อง</th>
                                        <th>ชื่ออุปกรณ์</th>
                                        <th>หมวดหมู่</th>
                                        <th>ปีงบประมาณ</th>
                                        <th>ตัวเลือก</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>


                    {{-- </form> --}}
                    <!-- DataTable ends -->
                                                    <div class="modal fade" id="confirmModalDel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                                                                    aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">

                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="myModalLabel1">ลบข้อมูล</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <h5>คุณต้องการลบข้อมูล ใช่หรือไม่?</h5>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn grey mr-1 mb-1 btn-outline-secondary ok_button" data-dismiss="modal"><i class="feather icon-arrow-left"></i> ยกเลิก</button>
                                                                        <button type="burron" class="btn danger mr-1 mb-1 waves-effect waves-light" name="ok_button" id="ok_button"><i class="feather icon-trash"></i> ลบข้อมูล</button>
                                                                    </div>

                                                            </div>
                                                        </div>
                                                    </div>
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
                                                <select id="cate_equipments" name="cate_equipments" class="form-control select2" required>
                                                    {{-- @foreach ($cateEquipments as $roles)
                                                    <option value="{{$roles->id}}">{{$roles->name}}</option>
                                                    @endforeach --}}
                                                        <option value="">เลือกหมวดหมู่</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-12 data-field-col">
                                                <label for="data-status"> ประเภท </label>
                                                <select class="form-control select2" name="kinds" id="kinds" onchange="yesnoCheck(this);">
                                                     {{-- @foreach ($kinds as $roles)
                                                    <option value="{{$roles->id}}">{{$roles->name}}</option>
                                                    @endforeach --}}
                                                    <option value="">เลือกประเภท</option>
                                                </select>

                                            </div>

                                            <div id="ifYes" style="display: none;">

                                                <div class="col-sm-12 data-field-col">
                                                    <label for="data-status"> ประเภท </label>
                                                    <select class="form-control select2" name="model_cartridge" onchange="yesnoCheck1(this);">

                                                        <option value="0">เลือกประเภท</option>
                                                        <option value="1">ตลับหมึก</option>
                                                        <option value="2">น้ำหมึก</option>
                                                    </select>

                                                </div>

                                            </div>
                                            <div id="ifYes1" style="display: none;">

                                                <div class="col-sm-12 data-field-col">
                                                    <label for="data-status"> รุ่นตลับหมีก </label>
                                                    <select class="form-control select2" name="model_cartridge_inks_id">

                                                        <option value="">เลือกรุ่นตลับหมึก</option>
                                                         @foreach ($modelcartridge_ as $roles)
                                                        <option value="{{$roles->id}}">{{$roles->name}}</option>
                                                        @endforeach
                                                    </select>

                                                </div>

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
                                                             <select name="brand_id" class="form-control select2">
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
                                                        <select id="projectinput6" name="expenditure" class="form-control select2" required>
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


                                                        <input type="number" class="form-control" id="year" name="year" placeholder="ปี" required>


                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="col-sm-12 data-field-col">
                                                <label for="sn">ผู้รับผิดชอบ</label>
                                                        <div class="form-label-group">
                                                             <select class="form-control select2" name="user_kinds" id="data-status">
                                                                @foreach ($users as $roles)
                                                                <option value="{{$roles->id}}">{{$roles->title_name->name}}{{$roles->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                            </div> --}}
                                            <div class="col-sm-12 data-field-col">
                                                <label for="detail">หมายเหตุ</label>
                                                <textarea class="form-control" name="detail" id="basicTextarea" rows="3" placeholder="รายละเอียด.." ></textarea>
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
<?php
header('Access-Control-Allow-Origin: *');
?>
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
////////////////////////////////////////////////////

/// DELETE ////

    // var id;
    // $(document).on('click', '.btn-del', function(){
    //     id = $(this).val();

    //     $('#confirmModalDel').modal('show');
    // });
    // $('#ok_button').click(function(){
    //     $.ajax({
    //         method:"DELETE",
    //         url:"/stock/schedule/"+id,
    //         data:{id:id,  _token: '{{csrf_token()}}'},
    //         beforeSend:function(){
    //             $('#ok_button').text('กำลังลบข้อมูล..');
    //         },
    //         success:function(data){
    //             setTimeout(function(){
    //                 $('#confirmModalDel').modal('hide');
    //                 alert('ลบข้อมูลเรียบร้อย');
    //                 location.reload();

    //             }, 2000);

    //         }
    //     })

    // });

/////////////////////////////////////////////////////

/// table ///

    var table = $('#example').DataTable({
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
    // $('#frm-example').on('click', '.print', function (e) {
    //     var form = this;
    //     var rows_selected = table.column(0).checkboxes.selected();
    //     // Iterate over all selected checkboxes
    //     $.each(rows_selected, function (index, rowId) {
    //         // Create a hidden element
    //         $(form).append(
    //             $('<input>')
    //             .attr('type', 'hidden')
    //             .attr('name', 'id[]')
    //             .val(rowId),
    //             $('<input>')
    //             .attr('type', 'hidden')
    //             .attr('name', 'print')
    //             .attr('value', '2')
    //         );
    //     });

    // });
    table.on('draw.dt', function(){
        setTimeout(function(){
        if (navigator.userAgent.indexOf("Mac OS X") != -1) {
            $(".dt-checkboxes-cell input, .dt-checkboxes").addClass("mac-checkbox")
        }
        }, 50);
    });
////////////////////////////////////////////////////


});

function yesnoCheck(that) {
    if (that.value == "13") {

        document.getElementById("ifYes").style.display = "block";
    } else {
        document.getElementById("ifYes").style.display = "none";
    }
}

function yesnoCheck1(that) {
    if (that.value == "1") {

        document.getElementById("ifYes1").style.display = "block";
    } else {
        document.getElementById("ifYes1").style.display = "none";
    }
}

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
    <script src="{{ asset('app-assets') }}/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
    <script src="{{ asset('app-assets') }}/js/scripts/ui/data-list-view.js"></script>
    <script src="{{ asset('app-assets') }}/js/scripts/forms/number-input.js"></script>
    <!-- END: Page JS-->
<script>


</script>
    @endsection

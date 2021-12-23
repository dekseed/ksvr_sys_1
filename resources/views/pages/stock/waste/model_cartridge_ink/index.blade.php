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
                                    <li class="breadcrumb-item active">รายละเอียดสป.สิ้นเปลืองตลับหมึก
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
                                    <h3 class="card-title">ตาราง สป. สิ้นเปลืองตลับหมึก</h3>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">

                                        @if(Session::has('message'))
                                            <div class="alert alert-primary">
                                                <span class="text-bold-700 font-medium-3 mr-1"><i class="feather icon-check mr-1"></i>{{ Session::get('message') }}</span>
                                            </div>

                                        @endif
                                        <!-- DataTable starts -->
                                        <div class="table-responsive">
                                            <table  id="example" class="table data-list-view">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>รุ่น</th>
                                                        {{-- <th>ยี่ห้อ</th> --}}
                                                        <th>จำนวนคงเหลือ</th>
                                                        <th>หน่วยนับ</th>
                                                        <th>ตัวเลือก</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($swq1 as $role)
                                                    <tr>
                                                        <td></td>
                                                        <td class="product-category">
                                                            {{-- {{$role->cate_model_cartridge_inks_id}} --}}
                                                            @if(empty($role->model_cartridge_ink->name))
                                                            ไม่มีข้อมูล
                                                            @else
                                                            {{$role->model_cartridge_ink->name}}
                                                            @endif

                                                        </td>
                                                        {{-- <td class="product-name">{{$role->stock_waste->brand}}</td> --}}
                                                        <td>{{$role->balance}}
                                                        </td>
                                                        <td>{{$role->model_cartridge_ink->cateModelCartridgeInk->unit}}</td>
                                                        <td class="product-action">
                                                            <span class="edit">
                                                                <a class="btn btn-icon btn-success waves-effect light" href="{{ route('stock-wastes-Model-Cartr-Ink.show', $role->model_cartridge_inks_id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="ดูข้อมูล">
                                                                        <i class="feather icon-monitor"></i></a>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>

                                            </table>
                                        </div>
                                        <!-- DataTable ends -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- add new sidebar starts -->
                     <div class="add-new-data-sidebar">
                        <div class="overlay-bg"></div>
                        <form method="POST" class="form form-vertical" action="{{ route('stock-wastes-Model-Cartr-Ink.store') }}" enctype="multipart/form-data">
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
                                           {{-- <div class="col-sm-12 data-field-col">
                                                <label for="data-status"> หมวดหมู่ </label>
                                                <select name="cate_equipments" class="form-control" id="courseMajor"  onchange="addMajorList()">

                                                    <option value="">เลือกหมวดหมู่</option>
                                                    @foreach ($cate_model_cart_ink as $roles)
                                                    <option value="{{$roles->id}}">{{$roles->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                             <div class="col-sm-12 data-field-col">
                                                <label for="data-status"> ประเภท </label>
                                                <div id="addMajorToList" style="display: none;">
                                                    <select class="form-control" name="kinds">
                                                        <option value="">เลือกประเภท</option>
                                                        <option value="24">เทียบเท่า</option>
                                                        <option value="25">ของแท้</option>
                                                    </select>
                                                </div>
                                                <div id="addMajorToList2" style="display: none;">
                                                    <select class="form-control" name="kinds">
                                                        <option value="">เลือกประเภท</option>
                                                        <option value="23">Refill</option>
                                                        <option value="22">ตลับ</option>
                                                    </select>
                                                </div>
                                            </div> --}}
                                            <div class="col-sm-12 data-field-col" id="model1">
                                                <label for="model">เลือกรุ่น</label>
                                                <select name="model1" class="form-control select2">
                                                    <option value="">เลือกรุ่น</option>
                                                    @foreach ($modelCartInk as $roles)
                                                        <option value="{{$roles->id}}">{{$roles->name}}</option>
                                                        @endforeach
                                                </select>
                                            </div>

                                            {{-- <div class="col-sm-12 data-field-col">
                                                <label for="brand">ยี่ห้อ</label>
                                                <input type="text" class="form-control" id="brand" name="brand" placeholder="ยี่ห้อ" required>
                                            </div> --}}

                                            <div class="col-sm-12 data-field-col">
                                                <label for="brand">จำนวน</label>
                                                <div class="row">
                                                    <div class="col-sm-8 col-12">
                                                        <input type="text" class="form-control" id="number" name="number" placeholder="จำนวน" required>
                                                    </div>
                                                    {{-- <div class="col-sm-4 col-12">
                                                        <select class="form-control select2" name="unit" required>
                                                        <option value="">จำนวนนับ</option>
                                                        <option value="ตลับ">ตลับ</option>
                                                        <option value="กล่อง">กล่อง</option>
                                                    </select>
                                                    </div> --}}
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
                                                <textarea class="form-control" name="detail" id="basicTextarea" rows="3" placeholder="รายละเอียด.."></textarea>
                                            </div>
                                            <div class="col-sm-12 data-field-col data-list-upload">
                                                <label for="input-file">{{ __('อัพโหลดรูปภาพ') }}</label>

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
     function addMajorList()
    {
        if(document.getElementById('courseMajor').value == "8"){
            document.getElementById('addMajorToList').style.display = "none";
            document.getElementById('addMajorToList2').style.display = "inline";
        }else{

            document.getElementById('addMajorToList').style.display = "inline";
            document.getElementById('addMajorToList2').style.display = "none";
        }

    }

    $(document).ready(function(){
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
    // $('#frm-example').on('click', '.qrcode', function (e) {
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
    //             .attr('value', '1')
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

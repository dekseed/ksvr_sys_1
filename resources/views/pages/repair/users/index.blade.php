@extends('layouts.home')

@section('styles')
<!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/tables/datatable/datatables.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/data-list-view.css">
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
                            <h2 class="content-header-title float-left mb-0"><i class="feather icon-monitor"></i> ระบบแจ้งดำเนินงาน แผนกศูนย์คอมพิวเตอร์</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">หน้าแรก</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">ระบบงานแผนกศูนย์คอมพิวเตอร์</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('repair.index') }}">ระบบแจ้งดำเนินงาน แผนกศูนย์คอมพิวเตอร์</a>
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
               <section id="basic-datatable">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-end">
                                    <h4>Sessions By Device</h4>
                                    <div class="dropdown chart-dropdown">
                                        <button class="btn btn-sm border-0 dropdown-toggle px-50" type="button" id="dropdownItem1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Last 7 Days
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem1">
                                            <a class="dropdown-item" href="#">Last 28 Days</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body pt-50">
                                        <div id="session-chart" class="mb-1"></div>
                                        <div class="chart-info d-flex justify-content-between mb-1">
                                            <div class="series-info d-flex align-items-center">
                                                <i class="feather icon-monitor font-medium-2 text-primary"></i>
                                                <span class="text-bold-600 mx-50">Desktop</span>
                                                <span> - 58.6%</span>
                                            </div>
                                            <div class="series-result">
                                                <span>2%</span>
                                                <i class="feather icon-arrow-up text-success"></i>
                                            </div>
                                        </div>
                                        <div class="chart-info d-flex justify-content-between mb-1">
                                            <div class="series-info d-flex align-items-center">
                                                <i class="feather icon-tablet font-medium-2 text-warning"></i>
                                                <span class="text-bold-600 mx-50">Mobile</span>
                                                <span> - 34.9%</span>
                                            </div>
                                            <div class="series-result">
                                                <span>8%</span>
                                                <i class="feather icon-arrow-up text-success"></i>
                                            </div>
                                        </div>
                                        <div class="chart-info d-flex justify-content-between mb-50">
                                            <div class="series-info d-flex align-items-center">
                                                <i class="feather icon-tablet font-medium-2 text-danger"></i>
                                                <span class="text-bold-600 mx-50">Tablet</span>
                                                <span> - 6.5%</span>
                                            </div>
                                            <div class="series-result">
                                                <span>-5%</span>
                                                <i class="feather icon-arrow-down text-danger"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">รายการแจ้งดำเนินงาน (สำหรับผู้ใช้งานทั่วไป)</h4>
                                <button type="buttom" onclick="window.location.href = '{{route('repair.create')}}'" class="btn btn-primary waves-effect waves-light"><i class="feather icon-plus"></i> เพิ่มรายการแจ้งซ่อม</button>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                         @if(Session::has('message'))
                                            <div class="alert alert-primary">
                                                <span class="text-bold-700 font-medium-3 mr-1"><i class="feather icon-check mr-1"></i>{{ Session::get('message') }}</span>
                                            </div>

                                        @endif
                                        <div class="table-responsive">
                                            <table class="table table-hover-animation table-striped zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>หมายเลขอ้างอิง</th>
                                                        <th>หมายเลขเครื่อง</th>
                                                        <th>ชื่ออุปกรณ์</th>
                                                        {{-- <th>รายละเอียดการซ่อม</th> --}}
                                                        <th>ประเภทการแจ้ง</th>
                                                        <th>สถานะ</th>
                                                        <th>วันที่แจ้ง</th>
                                                        <th>ตัวเลือก</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($repairs as $repair)
                                                    <tr>
                                                        <td>{{$repair->reference_number}}</td>
                                                        <td>{{$repair->stock->number}}</td>
                                                        <td>{{$repair->stock->name}}</td>
                                                        <td>{{$repair->repair_genus->name}}</td>
                                                        @if($repair->status_id == '1')
                                                        <td><span class="text-danger">{{$repair->status_repair->name}}</span></td>
                                                        @elseif($repair->status_id == '2')
                                                        <td><span class="text-success">{{$repair->status_repair->name}}</span></td>
                                                        @elseif($repair->status_id == '3')
                                                        <td><span class="text-info">{{$repair->status_repair->name}}</span></td>
                                                        @else
                                                        <td><span class="text-warning">{{$repair->status_repair->name}}</span></td>
                                                        @endif
                                                        <td> {{DateThai2(date('d-m-Y h:i:s A', strtotime($repair->created_at)))}}</td>
                                                        <td class="product-action">
                                                            <span class="edit">
                                                                <a class="btn btn-icon btn-success waves-effect light" href="{{ route('repair.show', $repair->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="ดูข้อมูล">
                                                                        <i class="feather icon-monitor"></i></a>
                                                            </span>
                                                            @if($repair->status_repair->name == 'รอดำเนินการ')
                                                            <span class="delete">
                                                                <a class="btn btn-icon btn-danger waves-effect light" data-href="{{ route('repair.destroy', $repair->id)}}"
                                                                    data-toggle="modal" data-target="#default<?= $repair->id ?>"><i class="feather icon-trash"></i></a>
                                                            </span>

                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <div class="modal fade" id="default<?= $repair->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <form id="delete" name="delete" action="{{ route('repair.destroy', $repair->id)}}" method="POST">
                                                                    {{ csrf_field() }}
                                                                    {{ method_field('DELETE') }}
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="myModalLabel1">ลบข้อมูล</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <h5 class="text-center">คุณต้องการลบรายการแจ้งดำเนินงาน แผนกศูนย์คอมพิวเตอร์ <br>หมายเลขอ้างอิง : {{$repair->reference_number}} ใช่หรือไม่?</h5>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn grey mr-1 mb-1 btn-outline-secondary ok_button" data-dismiss="modal"><i class="feather icon-arrow-left"></i> ยกเลิก</button>
                                                                        <button type="submit" class="btn danger mr-1 mb-1 waves-effect waves-light" ><i class="feather icon-trash"></i> ลบข้อมูล</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach


                                                </tbody>
                                                {{-- <tfoot>
                                                    <tr>
                                                        <th>หมายเลขเครื่อง</th>
                                                        <th>ชื่ออุปกรณ์</th>
                                                        <th>สถานะ</th>
                                                        <th>วันที่แจ้ง</th>
                                                        <th>ตัวเลือก</th>
                                                    </tr>
                                                </tfoot> --}}
                                            </table>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row pb-50">
                                            <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2">
                                                <div>
                                                    <h2 class="text-bold-700 mb-25">2.7K</h2>
                                                    <p class="text-bold-500 mb-75">Avg Sessions</p>
                                                    <h5 class="font-medium-2">
                                                        <span class="text-success">+5.2% </span>
                                                        <span>vs last 7 days</span>
                                                    </h5>
                                                </div>
                                                <a href="#" class="btn btn-primary shadow">View Details <i class="feather icon-chevrons-right"></i></a>
                                            </div>
                                            <div class="col-lg-6 col-12 d-flex justify-content-between flex-column text-right order-lg-2 order-1">
                                                <div class="dropdown chart-dropdown">
                                                    <button class="btn btn-sm border-0 dropdown-toggle p-50" type="button" id="dropdownItem5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Last 7 Days
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem5">
                                                        <a class="dropdown-item" href="#">Last 28 Days</a>
                                                        <a class="dropdown-item" href="#">Last Month</a>
                                                        <a class="dropdown-item" href="#">Last Year</a>
                                                    </div>
                                                </div>
                                                <div id="avg-session-chart"></div>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row avg-sessions pt-50">
                                            <div class="col-6">
                                                <small>Goal: $100000</small>
                                                <div class="progress progress-bar-primary mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="50" aria-valuemax="100" style="width:50%"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <small>Users: 100K</small>
                                                <div class="progress progress-bar-warning mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="60" aria-valuemax="100" style="width:60%"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <small>Retention: 90%</small>
                                                <div class="progress progress-bar-danger mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="70" aria-valuemax="100" style="width:70%"></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <small>Duration: 1yr</small>
                                                <div class="progress progress-bar-success mt-25">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="90" aria-valuemax="100" style="width:90%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">รายการแจ้งเปลี่ยนตลับหมึก (สำหรับผู้ใช้งานทั่วไป)</h4>
                                <button type="buttom" onclick="window.location.href = '{{route('repair.create')}}'" class="btn btn-primary waves-effect waves-light"><i class="feather icon-plus"></i> เพิ่มรายการแจ้งเปลี่ยนตลับหมึก</button>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                         @if(Session::has('message-model_cartridge_ink'))
                                            <div class="alert alert-primary">
                                                <span class="text-bold-700 font-medium-3 mr-1"><i class="feather icon-check mr-1"></i>{{ Session::get('message-model_cartridge_ink') }}</span>
                                            </div>

                                        @endif
                                        <div class="table-responsive">
                                            <table class="table table-hover-animation table-striped zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>หมายเลขอ้างอิง</th>
                                                        <th>หมายเลขเครื่อง</th>
                                                        <th>ชื่ออุปกรณ์</th>
                                                        <th>สถานะ</th>
                                                        <th>วันที่แจ้ง</th>
                                                        <th>ตัวเลือก</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($model_cartridges as $item)
                                                    <tr>
                                                        <td>{{$item->reference_number}}</td>
                                                        <td>{{$item->stock->number}}</td>
                                                        <td>{{$item->stock->name}}</td>
                                                        {{-- <td>{{$item->status_repair->name}}</td> --}}
                                                        @if($item->status_id == '1')
                                                        <td><span class="text-danger">{{$item->status_repair->name}}</span></td>
                                                        @elseif($item->status_id == '2')
                                                        <td><span class="text-success">{{$item->status_repair->name}}</span></td>
                                                        @elseif($item->status_id == '3')
                                                        <td><span class="text-info">{{$item->status_repair->name}}</span></td>
                                                        @else
                                                        <td><span class="text-warning">{{$item->status_repair->name}}</span></td>
                                                        @endif
                                                        <td> {{DateThai2(date('d-m-Y h:i:s A', strtotime($item->created_at)))}}</td>
                                                        <td class="product-action">
                                                            <span class="edit">
                                                                <a class="btn btn-icon btn-success waves-effect light" href="{{ route('cartridge-user.show', $item->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="ดูข้อมูล">
                                                                        <i class="feather icon-monitor"></i></a>
                                                            </span>
                                                            @if($item->status_repair->name == 'รอดำเนินการ')
                                                            <span class="delete">
                                                                <a class="btn btn-icon btn-danger waves-effect light" data-href="{{ route('cartridge-user.destroy', $item->id)}}"
                                                                    data-toggle="modal" data-target="#default<?= $item->id ?>"><i class="feather icon-trash"></i></a>
                                                            </span>

                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <div class="modal fade" id="default<?= $item->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <form id="delete" name="delete" action="{{ route('cartridge-user.destroy', $item->id)}}" method="POST">
                                                                    {{ csrf_field() }}
                                                                    {{ method_field('DELETE') }}
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="myModalLabel1">ลบข้อมูล</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <h5 class="text-center">คุณต้องการลบรายการแจ้งดำเนินงาน แผนกศูนย์คอมพิวเตอร์ <br>หมายเลขอ้างอิง : {{$item->reference_number}} ใช่หรือไม่?</h5>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn grey mr-1 mb-1 btn-outline-secondary ok_button" data-dismiss="modal"><i class="feather icon-arrow-left"></i> ยกเลิก</button>
                                                                        <button type="submit" class="btn danger mr-1 mb-1 waves-effect waves-light" ><i class="feather icon-trash"></i> ลบข้อมูล</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach


                                                </tbody>
                                                {{-- <tfoot>
                                                    <tr>
                                                        <th>หมายเลขเครื่อง</th>
                                                        <th>ชื่ออุปกรณ์</th>
                                                        <th>สถานะ</th>
                                                        <th>วันที่แจ้ง</th>
                                                        <th>ตัวเลือก</th>
                                                    </tr>
                                                </tfoot> --}}
                                            </table>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->


@endsection
@section('scripts')
<script>


</script>
    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/charts/apexcharts.min.js"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets') }}/js/scripts/ui/data-list-view.js"></script>
    <script src="{{ asset('app-assets') }}/js/scripts/datatables/datatable.js"></script>
    <script src="{{ asset('app-assets') }}/js/scripts/cards/card-analytics.js"></script>
    <!-- END: Page JS-->
@endsection

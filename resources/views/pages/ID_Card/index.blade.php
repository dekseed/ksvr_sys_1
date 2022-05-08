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

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/data-list-view.css">

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
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">หน้าหลัก</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">ระบบงานแผนกศูนย์คอมพิวเตอร์</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('ID_Card.index') }}">ระบบแจ้งทำบัตรประจำตัว</a>
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
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">รายการแจ้งทำบัตรประจำตัว (สำหรับผู้ดูแลระบบ)</h4>

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
                                                        <th class="text-center" scope="col">ลำดับที่</th>
                                                        <th class="text-center" scope="col">ยศ ชื่อ-สกุล</th>
                                                        <th class="text-center" scope="col">หมวดหมู่</th>
                                                        <th class="text-center" scope="col">ประเภท</th>
                                                        <th class="text-center" scope="col">สถานะ</th>
                                                        <th class="text-center" scope="col">วันที่แจ้ง</th>
                                                        <th class="text-center" scope="col">ตัวเลือก</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i=1 ?>
                                                        @foreach($data_idCard as $item)
                                                            <tr>
                                                                <th scope="row" class="text-center">{{ $i++ }}</th>
                                                                <td>{{ $item->iDCard->title_name->name }}{{ $item->iDCard->first_name_thai }} {{ $item->iDCard->last_name_thai }}</td>
                                                                <td class="text-center">{{ $item->iDCard->cateIDCard->name }}</td>
                                                                <td class="text-center">{{ $item->iDCard->cateStatusIDCard->name }}</td>
                                                                <td class="text-center">{{ $item->statusIDCard->name }}</td>
                                                                <td class="text-center">{{DateThai2(date('d-m-Y h:i:s A', strtotime($item->created_at)))}}</td>
                                                                <td class="text-center">
                                                                    <span class="edit"><a class="btn btn-info btn-icon" href="{{ route('ID_Card.show', $item->id)}}"><i class="feather icon-monitor"></i></a>
                                                                    </span>
                                                                    <span class="delete">
                                                                        <a class="btn btn-icon btn-danger waves-effect light" data-href="#" data-toggle="modal" title=""
                                                                        data-target="#delete_IDCard<?= $item->id ?>"><i class="feather icon-trash"></i></a>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <div class="modal fade" id="delete_IDCard<?= $item->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <form name="delete" action="{{ route('ID_Card.destroy', $item->id)}}" method="POST">
                                                                            {{ csrf_field() }}
                                                                            {{ method_field('DELETE') }}
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title" id="myModalLabel1">ลบข้อมูล</h4>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <h5>คุณต้องการลบรายการแจ้งทำบัตรประจำตัว {{ $item->iDCard->title_name->name }}{{ $item->iDCard->first_name_thai }} {{ $item->iDCard->last_name_thai }} ใช่หรือไม่?</h5>
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
                                                <tfoot>
                                                    <tr>
                                                        <th class="text-center" scope="col">ลำดับที่</th>
                                                        <th class="text-center" scope="col">ยศ ชื่อ-สกุล</th>
                                                        <th class="text-center" scope="col">หมวดหมู่</th>
                                                        <th class="text-center" scope="col">ประเภท</th>
                                                        <th class="text-center" scope="col">สถานะ</th>
                                                        <th class="text-center" scope="col">วันที่แจ้ง</th>
                                                        <th class="text-center" scope="col">ตัวเลือก</th>
                                                    </tr>
                                                </tfoot>
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
    <script src="{{ asset('app-assets') }}/vendors/js/ui/jquery.sticky.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/extensions/dropzone.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/dataTables.select.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets') }}/js/scripts/ui/data-list-view.js"></script>
    <script src="{{ asset('app-assets') }}/js/scripts/datatables/datatable.js"></script>
    <!-- END: Page JS-->
@endsection

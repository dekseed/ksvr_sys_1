@extends('layouts.home')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/tables/datatable/datatables.min.css">
@endsection

@section('content')

 <!-- BEGIN: Content-->
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
                                    <li class="breadcrumb-item active">หน่วยงานตำรวจ
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="content-body">
                {{-- <div class="row">
                    <div class="col-12">
                        <p>Read full documnetation <a href="https://datatables.net/" target="_blank">here</a></p>
                    </div>
                </div> --}}
                <!-- Row grouping -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">หน่วยงานตำรวจ</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        {{-- <p class="card-text">Although DataTables doesn't have row grouping built-in (picking one of the many methods available would overly limit the DataTables core), it is most certainly possible to give the look and feel of row grouping.</p> --}}
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>ลำดับที่</th>
                                                        <th>ยศ ชื่อ - สกุล</th>
                                                       
                                                        <th>เลขที่บัตรประชาชน</th>
                                                        
                                                        <th>เบอร์โทร</th>
                                                        <th>อายุ</th>
                                                        
                                                        <th>ตัวเลือก</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i=1 ?>
                                                    @foreach($userPol as $item)
                                                    <tr>
                                                        <td class="text-center">{{ $i++ }}</td>
                                                        <td>{{ $item->titlename }}{{ $item->first_name }} {{ $item->last_name }}</td>
                                                        
                                                        <td>{{ $item->cid }}</td>
                                                        
                                                        <td>{{ $item->tel }}</td>
                                                        <td>{{ $item->age }}</td>
                                                        
                                                        <td>
                                                            @if($item->status_id == '1')
                                                            <span class="edit">
                                                                <a class="btn btn-icon btn-danger waves-effect light" href="{{ route('police.add', $item->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="ลงข้อมูล">
                                                                        <i class="feather icon-monitor"></i></a>
                                                            </span>
                                                            @else
                                                            <span class="edit">
                                                                <a class="btn btn-icon btn-success waves-effect light" href="{{ route('police.show', $item->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="ดูข้อมูล" target="_blank">
                                                                        <i class="feather icon-monitor"></i></a>
                                                            </span>
                                                            @endif
                                                            
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>ลำดับที่</th>
                                                        <th>ยศ ชื่อ - สกุล</th>
                                                        <th>เลขที่บัตรประชาชน</th>
                                                        
                                                        <th>เบอร์โทร</th>
                                                        <th>อายุ</th>
                                                        
                                                        <th>ตัวเลือก</th>
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
                <!-- Row grouping -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

@endsection
@section('scripts')
    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets') }}/js/scripts/datatables/datatable.js"></script>
    <!-- END: Page JS-->
@endsection


@extends('layouts.home')

@section('styles')
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/tables/datatable/datatables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css"/>


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
                                <li class="breadcrumb-item"><a href="{{ route('check_up.army_2') }}">หน่วยงานทหาร</a>
                                </li>
                                <li class="breadcrumb-item active">รายงานข้อมูลแยกตามผลตรวจสุขภาพ
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">
            <!-- Column selectors with Export Options and print table -->
            <section id="column-selectors">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">รายงานข้อมูลแยกตามผลตรวจสุขภาพ</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="display" id="example">
                                            <thead>
                                                <tr>
                                                    <th>ลำดับที่</th>
                                                    <th>ยศ ชื่อ-สกุล</th>
                                                    <th>สังกัด</th>
                                                    <th>ผลตรวจสุขภาพ</th>
                                                    <th>ตัวเลือก</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1 ?>
                                                @foreach($sum_result2 as $items)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $items->name }}{{ $items->first_name }} {{ $items->last_name }}</td>
                                                    <td>
                                                        @if($items->kind_check_up_id == "1")
                                                        มทบ. 29
                                                        @elseif($items->kind_check_up_id == "2")
                                                        รพ.ค่ายกฤษณ์สีวะรา
                                                        @elseif($items->kind_check_up_id == "3")
                                                        ร.3
                                                        @elseif($items->kind_check_up_id == "4")
                                                        ร.3 พัน.1
                                                        @elseif($items->kind_check_up_id == "15")
                                                        สัสดี
                                                        @endif

                                                    </td>
                                                    <td>
                                                        @if($items->result_1 == "1")
                                                            ผลการตรวจปกติ
                                                        @endif
                                                        @if($items->result_2 == "1")
                                                            น้ำตาลในเลือดสูง
                                                        @endif
                                                        @if($items->result_3 == "1")
                                                            กรดยูริคสูง
                                                        @endif
                                                        @if($items->result_4 == "1")
                                                            ตับผิดปกติ
                                                        @endif
                                                        @if($items->result_5 == "1")
                                                            ไขมันในเลือดสูง
                                                        @endif
                                                        @if($items->result_6 == "1")
                                                            ไตผิดปกติ
                                                        @endif
                                                        @if($items->result_7 == "1")
                                                            ปัสสาวะผิดปกติ
                                                        @endif
                                                        @if($items->result_8 == "1")
                                                            โลหิตจาง
                                                        @endif
                                                        @if($items->result_9 == "1")
                                                            อุจจาระผิดปกติ
                                                        @endif
                                                        @if($items->result_10 == "1")
                                                            ความดันโลหิตสูง
                                                        @endif

                                                    </td>
                                                    <td>
                                                        <span class="edit">
                                                            <a class="btn btn-icon btn-success waves-effect light" href="{{ route('check_up_army_2.show', $items->report_check_up_id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="ดูข้อมูล" target="_blank">
                                                                    <i class="feather icon-monitor"></i></a>
                                                        </span>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>ลำดับที่</th>
                                                    <th>ยศ ชื่อ-สกุล</th>
                                                    <th>สังกัด</th>
                                                    <th>ผลตรวจสุขภาพ</th>
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
            <!-- Column selectors with Export Options and print table -->

        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

@endsection
@section('scripts')
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>

<script>

$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'สังกัด {{ $kind_check_ups }}',
                text:'<i class="fa fa-table fainfo" aria-hidden="true" ></i>',
                titleAttr: 'Export Excel',
                "oSelectorOpts": {filter: 'applied', order: 'current'},
                exportOptions: {
                    modifier: {
                    page: 'all'
                    },
                        format: {
                            header: function ( data, columnIdx ) {
                                if(columnIdx==1){
                                return 'column_1_header';
                                }
                                else{
                                return data;
                                }
                            }
                        }
                }
            }
        ]
    } );
} );
 </script>
 <!-- END: Page JS-->
@endsection

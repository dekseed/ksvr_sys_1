@extends('layouts.home')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/card-analytics.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/extensions/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/app-ecommerce-details.css">

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
                                    <li class="breadcrumb-item"><a href="{{ route('model-cart-ink.index') }}">สป.สิ้นเปลืองคอมพิวเตอร์</a>
                                    </li>
                                    <li class="breadcrumb-item active">รายละเอียดสป. สิ้นเปลืองตลับหมึก รุ่น {{$m_c_i_name}}
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
                <!-- Analytics card section start -->
                <section id="analytics-card">
                    <div class="row">
                        <div class="col-lg-8 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-end">
                                    <h4 class="card-title">Revenue</h4>
                                    <p class="font-medium-5 mb-0"><i class="feather icon-settings text-muted cursor-pointer"></i></p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body pb-0">
                                        <div class="d-flex justify-content-start">
                                            <div class="mr-2">
                                                <p class="mb-50 text-bold-600">This Month</p>
                                                <h2 class="text-bold-400">
                                                    <sup class="font-medium-1">$</sup>
                                                    <span class="text-success">86,589</span>
                                                </h2>
                                            </div>
                                            <div>
                                                <p class="mb-50 text-bold-600">Last Month</p>
                                                <h2 class="text-bold-400">
                                                    <sup class="font-medium-1">$</sup>
                                                    <span>73,683</span>
                                                </h2>
                                            </div>

                                        </div>
                                        <div id="revenue-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-end">
                                    <h4 class="mb-0">จำนวน รับ-คงเหลือ (ตลับ)</h4>
                                    <p class="font-medium-5 mb-0"><i class="feather icon-help-circle text-muted cursor-pointer"></i></p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body px-0 pb-0">
                                        <div id="overview-chart" class="mt-75"></div>
                                        <div class="row text-center mx-0">
                                            <div class="col-6 border-top border-right d-flex align-items-between flex-column py-1">
                                                <p class="mb-50">จำนวนที่รับมาทั้งหมด</p>
                                                <p class="font-large-1 text-bold-700 mb-50">{{ $stock_sum }}</p>
                                            </div>
                                            <div class="col-6 border-top d-flex align-items-between flex-column py-1">
                                                <p class="mb-50">คงเหลือ</p>
                                                <p class="font-large-1 text-bold-700 mb-50">{{ $stock_balance }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="timeline-card">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Timeline</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="activity-timeline timeline-left list-unstyled">

                                            <li>
                                                <div class="timeline-icon bg-primary">
                                                    <i class="feather icon-plus font-medium-2"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold">Task Added</p>
                                                    <span>Bonbon macaroon jelly beans gummi bears jelly lollipop apple</span>
                                                </div>
                                                <small class="">25 days ago</small>
                                            </li>

                                            {{-- <li>
                                                <div class="timeline-icon bg-warning">
                                                    <i class="feather icon-alert-circle font-medium-2"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold">Task Updated</p>
                                                    <span>Cupcake gummi bears soufflé caramels candy</span>
                                                </div>
                                                <small class="">15 days ago</small>
                                            </li>
                                            <li>
                                                <div class="timeline-icon bg-success">
                                                    <i class="feather icon-check font-medium-2"></i>
                                                </div>
                                                <div class="timeline-info">
                                                    <p class="font-weight-bold">Task Completed</p>
                                                    <span>Candy ice cream cake. Halvah gummi bears
                                                    </span>
                                                </div>
                                                <small class="">20 minutes ago</small>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Bar Chart</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body pl-0">
                                        <div class="height-300">
                                            <canvas id="bar-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">ตารางการรับเข้าตลับหมึก รุ่น {{$m_c_i_name}}</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        {{-- <p class="card-text">DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</p> --}}
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">ลำดับที่</th>
                                                        {{-- <th>รุ่น</th> --}}

                                                        <th class="text-center">วันที่รับ</th>
                                                        <th class="text-center">รับเข้า</th>
                                                        {{-- <th class="text-center">คงเหลือ</th> --}}
                                                        <th class="text-center">ตัวเลือก</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php $i=1 ?>
                                                    @foreach ($stocks_in as $role)
                                                        <tr>
                                                        <td class="product-category text-center">{{ $i++ }}</td>
                                                            {{-- <td class="product-name">
                                                                        @if($role->model == '-')
                                                                        {{$role->model_cartridge_ink->name}}
                                                                        @else
                                                                        {{$role->model_cartridge_ink->name}}
                                                                        @endif
                                                            </td> --}}

                                                            {{-- <td class="product-name text-center">
                                                                    @if($role->round == 1)
                                                                    ตุลาคม - ธันวาคม
                                                                    @elseif($role->round == 2)
                                                                    มกราคม - มีนาคม
                                                                    @elseif($role->round == 3)
                                                                    เมษายน - มิถุนายน
                                                                    @elseif($role->round == 4)
                                                                    กรกฎาคม - กันยายน
                                                                    @endif
                                                            </td> --}}
                                                            <td class="text-center">{{DateThai2(date('d-m-Y h:i:s A', strtotime($role->updated_at)))}}</td>
                                                            <td class="text-center">{{$role->in_items}}</td>
                                                            {{-- <td class="text-center">{{$role->balance}}</td> --}}
                                                            <td class="text-center">
                                                                <span class="edit">
                                                                    <a class="btn btn-icon btn-success waves-effect light" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="ดูข้อมูล">
                                                                            <i class="feather icon-monitor"></i></a>
                                                                </span>
                                                                <span class="delete">
                                                                    <a class="btn btn-icon btn-danger waves-effect light" data-href="{{ route('stock-wastes-Model-Cartr-Ink.destroy', $role->id)}}" data-placement="top" data-original-title="ลบข้อมูล"
                                                                        data-toggle="modal" data-target="#default{{ $role->id }}"><i class="feather icon-trash"></i></a>
                                                                </span>


                                                            </td>
                                                        </tr>
                                                        <div class="modal fade text-left" id="default{{ $role->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <form id="delete" name="delete" action="{{ route('stock-wastes-Model-Cartr-Ink.destroy', $role->id)}}" method="POST">
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
                                                <tfoot>
                                                    <tr>
                                                        <th class="text-center">ลำดับที่</th>
                                                        {{-- <th>รุ่น</th> --}}

                                                        <th class="text-center">วันที่รับ</th>
                                                        <th class="text-center">รับเข้า</th>
                                                        {{-- <th class="text-center">คงเหลือ</th> --}}
                                                        <th class="text-center">ตัวเลือก</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=" col-md-8 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">ตารางการจ่ายออกตลับหมึก รุ่น {{$m_c_i_name}} (<span class="danger">คงเหลือ {{ $stock_balance }} ตลับ</span>)</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        {{-- <p class="card-text">DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</p> --}}
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">ลำดับที่</th>
                                                        <th class="text-center">แผนก</th>
                                                        <th class="text-center">จ่ายออก</th>
                                                        <th class="text-center">วันที่</th>
                                                        <th class="text-center">ตัวเลือก</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php $i=1 ?>
                                                    @foreach ($stocks_out as $role)
                                                        <tr>
                                                        <td class="product-category text-center">{{ $i++ }}</td>
                                                        <td class="text-center">{{$role->stock->department->name}}</td>
                                                            <td class="text-center">{{$role->out_items}}</td>
                                                            <td class="text-center">{{DateThai2(date('d-m-Y h:i:s A', strtotime($role->updated_at)))}}</td>
                                                            <td class="text-center">
                                                                <span class="edit">
                                                                    <a class="btn btn-icon btn-success waves-effect light" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="ดูข้อมูล">
                                                                            <i class="feather icon-monitor"></i></a>
                                                                </span>
                                                                <span class="delete">
                                                                    <a class="btn btn-icon btn-danger waves-effect light" data-href="{{ route('waste.destroy', $role->id)}}"
                                                                        data-toggle="modal" data-target="#default<?= $role->id ?>"data-original-title="ลบข้อมูล"><i class="feather icon-trash"></i></a>
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
                                                <tfoot>
                                                    <tr>
                                                        <th class="text-center">ลำดับที่</th>
                                                        <th class="text-center">แผนก</th>
                                                        <th class="text-center">จ่ายออก</th>
                                                        <th class="text-center">วันที่</th>
                                                        <th class="text-center">ตัวเลือก</th>
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
                <!--/ Zero configuration table -->
            </div>
        </div>
    </div>
    <!-- END: Content-->


@endsection
@section('scripts')

    <script>
        function goBack() {
            window.history.back();
        }
    </script>

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets') }}/vendors/js/charts/chart.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/charts/apexcharts.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/extensions/jquery.steps.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets') }}/js/scripts/forms/wizard-steps.js"></script>
    <script src="{{ asset('app-assets') }}/js/scripts/cards/card-analytics.js"></script>
    <script src="{{ asset('app-assets') }}/js/scripts/charts/chart-chartjs.js"></script>
    <!-- END: Page JS-->
    <script>
        $(window).on("load", function(){

  var $primary = '#7367F0';
  var $danger = '#EA5455';
  var $warning = '#FF9F43';
  var $info = '#00cfe8';
  var $success = '#00db89';
  var $primary_light = '#9c8cfc';
  var $warning_light = '#FFC085';
  var $danger_light = '#f29292';
  var $info_light = '#1edec5';
  var $strok_color = '#b9c3cd';
  var $label_color = '#e7eef7';
  var $purple = '#df87f2';
  var $white = '#fff';

        var itemChartoptions = {
            chart: {
            height: 250,
            type: 'radialBar',
            sparkline: {
                enabled: true,
            },
            dropShadow: {
                enabled: true,
                blur: 3,
                left: 1,
                top: 1,
                opacity: 0.1
            },
            },
            colors: [$success],
            plotOptions: {
                radialBar: {
                    size: 110,
                    startAngle: -150,
                    endAngle: 150,
                    hollow: {
                        size: '77%',
                    },
                    track: {
                        background: $strok_color,
                        strokeWidth: '50%',
                    },
                    dataLabels: {
                        name: {
                            show: false
                        },
                        value: {
                            offsetY: 18,
                            color: $strok_color,
                            fontSize: '4rem'
                        }
                    }
                }
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    type: 'horizontal',
                    shadeIntensity: 0.5,
                    gradientToColors: ['#00b5b5'],
                    inverseColors: true,
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 100]
                },
            },
            series: [{{  number_format( ($stock_balance * 100 / $stock_sum) , 2 )  }}],
            stroke: {
            lineCap: 'round'
            },

        }

        var itemChart = new ApexCharts(
            document.querySelector("#overview-chart"),
            itemChartoptions
        );

        itemChart.render();
        });
    </script>
@endsection

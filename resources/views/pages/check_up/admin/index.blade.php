@extends('layouts.home')

@section('styles')

<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/charts/apexcharts.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/knowledge-base.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/charts/apexcharts.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/extensions/tether-theme-arrows.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/extensions/tether.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/extensions/shepherd-theme-default.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/dashboard-analytics.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/dashboard-ecommerce.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/card-analytics.css">
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
                {{-- <div class="row">
                    <div class="col-12">
                        <p>Read full documnetation <a href="https://datatables.net/" target="_blank">here</a></p>
                    </div>
                </div> --}}
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="card bg-analytics text-white">
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <img src="{{ asset('app-assets') }}/images/elements/decore-left.png" class="img-left" alt="card-img-left">
                                        <img src="{{ asset('app-assets') }}/images/elements/decore-right.png" class="img-right" alt="card-img-right">
                                        <div class="avatar avatar-xl bg-primary shadow mt-0">
                                            <div class="avatar-content">
                                                <i class="feather icon-activity white font-large-1"></i>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <h1 class="mb-2 text-white">ระบบเก็บข้อมูลตรวจสุขภาพประจำปี รพ.ค่ายกฤษณ์สีวะรา<br>(KSVR Check Up V.2)</h1>
                                            {{-- <p class="m-auto w-75">You have done <strong>57.6%</strong> more sales today. Check your new badge in your profile.</p> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                    <div class="avatar bg-rgba-primary p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-users text-primary font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="text-bold-700 mt-1 mb-25">{{ $sum }}</h2>
                                    <p class="mb-0">จำนวนในระบบทั้งหมด</p>
                                </div>
                                <div class="card-content">
                                    <div id="subscribe-gain-chart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                    <div class="avatar bg-rgba-success p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-credit-card text-success font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="text-bold-700 mt-1">{{ $sum_army }}</h2>
                                    <p class="mb-0">จำนวนหน่วยทหารในระบบทั้งหมด</p>
                                </div>
                                <div class="card-content">
                                    <div id="line-area-chart-3"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                    <div class="avatar bg-rgba-warning p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-package text-warning font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="text-bold-700 mt-1 mb-25">{{ $sum_other }}</h2>
                                    <p class="mb-0">จำนวนหน่วยอื่นๆในระบบทั้งหมด</p>
                                </div>
                                <div class="card-content">
                                    <div id="orders-received-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between pb-0">
                                    <h4 class="card-title">จำแนกตามหน่วยทหาร</h4>

                                    {{-- <div class="dropdown chart-dropdown">
                                        <button class="btn btn-sm border-0 dropdown-toggle px-0" type="button" id="dropdownItem3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Last 7 Days
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem3">
                                            <a class="dropdown-item" href="#">Last 28 Days</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Last Year</a>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="card-content">
                                    <div class="card-body py-0">
                                        <div id="customer2-chart"></div>
                                    </div>
                                    <ul class="list-group list-group-flush customer-info">
                                        <li class="list-group-item d-flex justify-content-between ">
                                            <div class="series-info">
                                                <i class="fa fa-circle font-small-3 text-primary"></i>
                                                <span class="text-bold-600">รพ.ค่ายกฤษณ์สีวะรา</span>
                                            </div>
                                            <div class="product-result">
                                                <span>{{ $sum_2 }}</span>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between ">
                                            <div class="series-info">
                                                <i class="fa fa-circle font-small-3 text-warning"></i>
                                                <span class="text-bold-600">มทบ.29</span>
                                            </div>
                                            <div class="product-result">
                                                <span>{{ $sum_1 }}</span>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between ">
                                            <div class="series-info">
                                                <i class="fa fa-circle font-small-3 text-danger"></i>
                                                <span class="text-bold-600">ร.3</span>
                                            </div>
                                            <div class="product-result">
                                                <span>{{ $sum_3 }}</span>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between ">
                                            <div class="series-info">
                                                <i class="fa fa-circle font-small-3 text-info"></i>
                                                <span class="text-bold-600">ร.3 พัน 1</span>
                                            </div>
                                            <div class="product-result">
                                                <span>{{ $sum_4 }}</span>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between ">
                                            <div class="series-info">
                                                <i class="fa fa-circle font-small-3 text-success"></i>
                                                <span class="text-bold-600">สัสดี</span>
                                            </div>
                                            <div class="product-result">
                                                <span>{{ $sum_5 }}</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">จำแนกตามผลตรวจสุขภาพ <span>ปี {{  date("Y") + '543' }}</span></h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div id="column5-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row match-height">
                          <!-- Bar Chart -->
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">ผลตรวจสุขภาพสังกัด มทบ. 29 ประจำปี 2565</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body pl-0">
                                        <div class="height-300">
                                            <canvas id="horizontal-bar1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">ผลตรวจสุขภาพสังกัด รพ.ค่ายกฤษณ์สีวะรา ประจำปี 2565</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body pl-0">
                                        <div class="height-300">
                                            <canvas id="horizontal-bar2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">ผลตรวจสุขภาพสังกัด ร.3 ประจำปี 2565</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body pl-0">
                                        <div class="height-300">
                                            <canvas id="horizontal-bar3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">ผลตรวจสุขภาพสังกัด ร. 3 พัน 1 ประจำปี 2565</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body pl-0">
                                        <div class="height-300">
                                            <canvas id="horizontal-bar4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">ผลตรวจสุขภาพสังกัด สัสดี ประจำปี 2565</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body pl-0">
                                        <div class="height-300">
                                            <canvas id="horizontal-bar15"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <!-- Dashboard Analytics end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

@endsection
@section('scripts')
    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('app-assets') }}/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->
    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets') }}/vendors/js/charts/chart.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/charts/apexcharts.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/extensions/tether.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/extensions/shepherd.min.js"></script>

    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
<script>

        $(document).ready(function () {

            var $primary = '#7367F0',
            $success = '#28C76F',
            $danger = '#EA5455',
            $warning = '#FF9F43',
            $info = '#00cfe8',
            $label_color_light = '#dae1e7';

            var themeColors = [$primary, $success, $danger, $warning, $info];

            // RTL Support
            var yaxis_opposite = false;
            if($('html').data('textdirection') == 'rtl'){
            yaxis_opposite = true;
            }

                // Column Chart
            // ----------------------------------
            var columnChart2Options = {
                chart: {
                height: 450,
                type: 'bar',
                },
                colors: themeColors,
                plotOptions: {
                bar: {
                    horizontal: false,
                    endingShape: 'rounded',
                    columnWidth: '75%',
                },
                },
                dataLabels: {
                enabled: false
                },
                stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
                },
                series: [{
                name: 'ปกติ',
                data: [{{ $results_1 }}]
                }, {
                name: 'น้ำตาลในเลือดสูง',
                data: [{{ $results_2 }}]
                }, {
                name: 'กรดยูริคสูง',
                data: [{{ $results_3 }}]
                }, {
                name: 'ตับผิดปกติ',
                data: [{{ $results_4 }}]
                }, {
                name: 'ไขมันในเลือดสูง',
                data: [{{ $results_5 }}]
                }, {
                name: 'ไตผิดปกติ',
                data: [{{ $results_6 }}]
                }, {
                name: 'ปัสสาวะผิดปกติ',
                data: [{{ $results_7 }}]
                }, {
                name: 'โลหิตจาง',
                data: [{{ $results_8 }}]
                }, {
                name: 'อุจจาระผิดปกติ',
                data: [{{ $results_9 }}]
                }, {
                name: 'ความดันโลหิตสูง',
                data: [{{ $results_10 }}]
                }],
                legend: {
                offsetY: -10
                },
                xaxis: {
                categories: ['มทบ.29', 'รพ.ค่ายฯ', 'ร.3', 'ร.3/1', 'สัสดี'],
                },
                yaxis: {
                title: {
                    text: '% (ร้อยละ 100)'
                },
                opposite: yaxis_opposite
                },
                fill: {
                opacity: 1

                },
                tooltip: {
                y: {
                    formatter: function (val) {
                    return " " + val + " %"
                    }
                }
                }
            }
            var columnChart2 = new ApexCharts(
                document.querySelector("#column5-chart"),
                columnChart2Options
            );

            columnChart2.render();



        });


        $(window).on("load", function () {

            ///////////////////////////////////////////////////////
                var $primary = '#7367F0';
                var $success = '#28C76F';
                var $danger = '#EA5455';
                var $warning = '#FF9F43';
                var $info = '#00cfe8';
                var $primary_light = '#A9A2F6';
                var $danger_light = '#f29292';
                var $success_light = '#55DD92';
                var $warning_light = '#ffc085';
                var $info_light = '#1fcadb';
                var $strok_color = '#b9c3cd';
                var $label_color = '#e7e7e7';
                var $white = '#fff';

                var $label_color2 = '#1E1E1E';
                var grid_line_color = '#dae1e7';
                var scatter_grid_color = '#f3f3f3';
                var $scatter_point_light = '#D1D4DB';
                var $scatter_point_dark = '#5175E0';
                var $black = '#000';


                var themeColors = [$primary, $success, $danger, $warning, $label_color, $label_color2, $scatter_point_dark, $strok_color, $warning_light, $danger_light];


                // Customer Chart


                    var customer2Chartoptions = {
                        chart: {
                            type: 'pie',
                            height: 330,
                            dropShadow: {
                            enabled: false,
                            blur: 5,
                            left: 1,
                            top: 1,
                            opacity: 0.2
                            },
                            toolbar: {
                            show: false
                            }
                        },
                        labels: ['รพ.ค่ายกฤษณ์สีวะรา', 'มทบ.29', 'ร.3', 'ร.3 พัน 1', 'สัสดี'],
                            series: [{{ $sum_2 }}, {{ $sum_1 }}, {{ $sum_3 }}, {{ $sum_4 }}, {{ $sum_5 }}],
                            dataLabels: {
                            enabled: false
                            },
                            legend: { show: false },
                            stroke: {
                            width: 5
                            },
                            colors: [$primary, $warning, $danger, $info],
                            fill: {
                            type: 'gradient',
                            gradient: {
                                gradientToColors: [$primary_light, $warning_light, $danger_light, $info_light]
                            }
                        }
                    }

                    var customer2Chart = new ApexCharts(
                    document.querySelector("#customer2-chart"),
                    customer2Chartoptions
                    );

                    customer2Chart.render();
                // -----------------------------
                // Horizontal Chart
                // -------------------------------------

                    // Get the context of the Chart canvas element we want to select
                    var horizontalChartctx1 = $("#horizontal-bar1");

                    var horizontalchartOptions1 = {
                    // Elements options apply to all of the options unless overridden in a dataset
                    // In this case, we are setting the border of each horizontal bar to be 2px wide
                    elements: {
                        rectangle: {
                        borderWidth: 2,
                        borderSkipped: 'right',
                        borderSkipped: 'top',
                        }
                    },
                        responsive: true,
                        maintainAspectRatio: false,
                        responsiveAnimationDuration: 500,
                        legend: {
                            display: false,
                    },
                    scales: {
                        xAxes: [{
                        display: true,
                        gridLines: {
                            color: grid_line_color,
                        },
                        scaleLabel: {
                            display: true,
                        }
                        }],
                        yAxes: [{
                        display: true,
                        gridLines: {
                            color: grid_line_color,
                        },
                        scaleLabel: {
                            display: true,
                        }
                        }]
                    },
                    title: {
                        display: true,
                        text: 'ผลตรวจสุขภาพสังกัด มทบ. 29 ปี 2565'
                    }
                    };

                    // Chart Data
                    var horizontalchartData1 = {
                        labels: ["ปกติ", "น้ำตาลในเลือดสูง", "กรดยูริคสูง", "ตับผิดปกติ", "ไขมันในเลือดสูง", "ไตผิดปกติ", "ปัสสาวะผิดปกติ", "โลหิตจาง", "อุจจาระผิดปกติ", "ความดันโลหิตสูง"],
                        datasets: [{
                            label: "จำนวน (นาย)",
                            data: [{{ $query_1_one }}],
                            backgroundColor: themeColors,
                            borderColor: "transparent"
                        }]
                    };

                    var horizontalChartconfig1 = {
                        type: 'horizontalBar',

                        // Chart Options
                        options: horizontalchartOptions1,

                        data: horizontalchartData1
                    };

                    // Create the chart
                    var horizontalChart1 = new Chart(horizontalChartctx1, horizontalChartconfig1);

                // -------------------------------------
                // Horizontal Chart2


                        // Get the context of the Chart canvas element we want to select
                        var horizontalChartctx2 = $("#horizontal-bar2");

                        var horizontalchartOptions2 = {
                        // Elements options apply to all of the options unless overridden in a dataset
                        // In this case, we are setting the border of each horizontal bar to be 2px wide
                        elements: {
                            rectangle: {
                            borderWidth: 2,
                            borderSkipped: 'right',
                            borderSkipped: 'top',
                            }
                        },
                            responsive: true,
                            maintainAspectRatio: false,
                            responsiveAnimationDuration: 500,
                            legend: {
                                display: false,
                        },
                        scales: {
                            xAxes: [{
                            display: true,
                            gridLines: {
                                color: grid_line_color,
                            },
                            scaleLabel: {
                                display: true,
                            }
                            }],
                            yAxes: [{
                            display: true,
                            gridLines: {
                                color: grid_line_color,
                            },
                            scaleLabel: {
                                display: true,
                            }
                            }]
                        },
                        title: {
                            display: true,
                            text: 'ผลตรวจสุขภาพสังกัด รพ.ค่ายกฤษณ์สีวะรา ปี 2565'
                        }
                        };

                        // Chart Data
                        var horizontalchartData2 = {
                            labels: ["ปกติ", "น้ำตาลในเลือดสูง", "กรดยูริคสูง", "ตับผิดปกติ", "ไขมันในเลือดสูง", "ไตผิดปกติ", "ปัสสาวะผิดปกติ", "โลหิตจาง", "อุจจาระผิดปกติ", "ความดันโลหิตสูง"],
                            datasets: [{
                                label: "จำนวน (นาย)",
                                data: [{{ $query_2_one }}],
                                backgroundColor: themeColors,
                                borderColor: "transparent"
                            }]
                        };

                        var horizontalChartconfig2 = {
                            type: 'horizontalBar',

                            // Chart Options
                            options: horizontalchartOptions2,

                            data: horizontalchartData2
                        };

                        // Create the chart
                        var horizontalChart2 = new Chart(horizontalChartctx2, horizontalChartconfig2);

                // -------------------------------------
                // Horizontal Chart3


                        // Get the context of the Chart canvas element we want to select
                        var horizontalChartctx3= $("#horizontal-bar3");

                        var horizontalchartOptions3 = {
                        // Elements options apply to all of the options unless overridden in a dataset
                        // In this case, we are setting the border of each horizontal bar to be 2px wide
                        elements: {
                            rectangle: {
                            borderWidth: 2,
                            borderSkipped: 'right',
                            borderSkipped: 'top',
                            }
                        },
                            responsive: true,
                            maintainAspectRatio: false,
                            responsiveAnimationDuration: 500,
                            legend: {
                                display: false,
                        },
                        scales: {
                            xAxes: [{
                            display: true,
                            gridLines: {
                                color: grid_line_color,
                            },
                            scaleLabel: {
                                display: true,
                            }
                            }],
                            yAxes: [{
                            display: true,
                            gridLines: {
                                color: grid_line_color,
                            },
                            scaleLabel: {
                                display: true,
                            }
                            }]
                        },
                        title: {
                            display: true,
                            text: 'ผลตรวจสุขภาพสังกัด ร.3 ปี 2565'
                        }
                        };

                        // Chart Data
                        var horizontalchartData3 = {
                            labels: ["ปกติ", "น้ำตาลในเลือดสูง", "กรดยูริคสูง", "ตับผิดปกติ", "ไขมันในเลือดสูง", "ไตผิดปกติ", "ปัสสาวะผิดปกติ", "โลหิตจาง", "อุจจาระผิดปกติ", "ความดันโลหิตสูง"],
                            datasets: [{
                                label: "จำนวน (นาย)",
                                data: [{{ $query_3_one }}],
                                backgroundColor: themeColors,
                                borderColor: "transparent"
                            }]
                        };

                        var horizontalChartconfig3 = {
                            type: 'horizontalBar',

                            // Chart Options
                            options: horizontalchartOptions3,

                            data: horizontalchartData3
                        };

                        // Create the chart
                        var horizontalChart3 = new Chart(horizontalChartctx3, horizontalChartconfig3);
                // -------------------------------------
                // Horizontal Chart4


                        // Get the context of the Chart canvas element we want to select
                        var horizontalChartctx4 = $("#horizontal-bar4");

                        var horizontalchartOptions4 = {
                        // Elements options apply to all of the options unless overridden in a dataset
                        // In this case, we are setting the border of each horizontal bar to be 2px wide
                        elements: {
                            rectangle: {
                            borderWidth: 2,
                            borderSkipped: 'right',
                            borderSkipped: 'top',
                            }
                        },
                            responsive: true,
                            maintainAspectRatio: false,
                            responsiveAnimationDuration: 500,
                            legend: {
                                display: false,
                        },
                        scales: {
                            xAxes: [{
                            display: true,
                            gridLines: {
                                color: grid_line_color,
                            },
                            scaleLabel: {
                                display: true,
                            }
                            }],
                            yAxes: [{
                            display: true,
                            gridLines: {
                                color: grid_line_color,
                            },
                            scaleLabel: {
                                display: true,
                            }
                            }]
                        },
                        title: {
                            display: true,
                            text: 'ผลตรวจสุขภาพสังกัด ร.3 พัน 1 ปี 2565'
                        }
                        };

                        // Chart Data
                        var horizontalchartData4 = {
                            labels: ["ปกติ", "น้ำตาลในเลือดสูง", "กรดยูริคสูง", "ตับผิดปกติ", "ไขมันในเลือดสูง", "ไตผิดปกติ", "ปัสสาวะผิดปกติ", "โลหิตจาง", "อุจจาระผิดปกติ", "ความดันโลหิตสูง"],
                            datasets: [{
                                label: "จำนวน (นาย)",
                                data: [{{ $query_4_one }}],
                                backgroundColor: themeColors,
                                borderColor: "transparent"
                            }]
                        };

                        var horizontalChartconfig4 = {
                            type: 'horizontalBar',

                            // Chart Options
                            options: horizontalchartOptions4,

                            data: horizontalchartData4
                        };

                        // Create the chart
                        var horizontalChart4 = new Chart(horizontalChartctx4, horizontalChartconfig4);
                // -------------------------------------
                // Horizontal Chart15


                        // Get the context of the Chart canvas element we want to select
                        var horizontalChartctx15 = $("#horizontal-bar15");

                        var horizontalchartOptions15 = {
                        // Elements options apply to all of the options unless overridden in a dataset
                        // In this case, we are setting the border of each horizontal bar to be 2px wide
                        elements: {
                            rectangle: {
                            borderWidth: 2,
                            borderSkipped: 'right',
                            borderSkipped: 'top',
                            }
                        },
                            responsive: true,
                            maintainAspectRatio: false,
                            responsiveAnimationDuration: 500,
                            legend: {
                                display: false,
                        },
                        scales: {
                            xAxes: [{
                            display: true,
                            gridLines: {
                                color: grid_line_color,
                            },
                            scaleLabel: {
                                display: true,
                            }
                            }],
                            yAxes: [{
                            display: true,
                            gridLines: {
                                color: grid_line_color,
                            },
                            scaleLabel: {
                                display: true,
                            }
                            }]
                        },
                        title: {
                            display: true,
                            text: 'ผลตรวจสุขภาพสังกัด ร.3 พัน 1 ปี 2565'
                        }
                        };

                        // Chart Data
                        var horizontalchartData15 = {
                            labels: ["ปกติ", "น้ำตาลในเลือดสูง", "กรดยูริคสูง", "ตับผิดปกติ", "ไขมันในเลือดสูง", "ไตผิดปกติ", "ปัสสาวะผิดปกติ", "โลหิตจาง", "อุจจาระผิดปกติ", "ความดันโลหิตสูง"],
                            datasets: [{
                                label: "จำนวน (นาย)",
                                data: [{{ $query_15_one }}],
                                backgroundColor: themeColors,
                                borderColor: "transparent"
                            }]
                        };

                        var horizontalChartconfig15 = {
                            type: 'horizontalBar',

                            // Chart Options
                            options: horizontalchartOptions15,

                            data: horizontalchartData15
                        };

                        // Create the chart
                        var horizontalChart15 = new Chart(horizontalChartctx15, horizontalChartconfig15);
                // -------------------------------------

                // Subscribers Gained Chart starts //
                    var gainedChartoptions = {
                        chart: {
                        height: 100,
                        type: 'area',
                        toolbar: {
                            show: false,
                        },
                        sparkline: {
                            enabled: true
                        },
                        grid: {
                            show: false,
                            padding: {
                            left: 0,
                            right: 0
                            }
                        },
                        },
                        colors: [$primary],
                        dataLabels: {
                        enabled: false
                        },
                        stroke: {
                        curve: 'smooth',
                        width: 2.5
                        },
                        fill: {
                        type: 'gradient',
                        gradient: {
                            shadeIntensity: 0.9,
                            opacityFrom: 0.7,
                            opacityTo: 0.5,
                            stops: [0, 80, 100]
                        }
                        },
                        series: [{
                        name: 'Subscribers',
                        data: [28, 40, 36, 52, 38, 60, 55]
                        }],

                        xaxis: {
                        labels: {
                            show: false,
                        },
                        axisBorder: {
                            show: false,
                        }
                        },
                        yaxis: [{
                        y: 0,
                        offsetX: 0,
                        offsetY: 0,
                        padding: { left: 0, right: 0 },
                        }],
                        tooltip: {
                        x: { show: false }
                        },
                    }

                    var gainedChart = new ApexCharts(
                        document.querySelector("#subscribe-gain-chart"),
                        gainedChartoptions
                    );

                    gainedChart.render();
                //////////////////////////////////////////////////////
                // Orders Received Chart starts //


                    var orderChartoptions = {
                        chart: {
                        height: 100,
                        type: 'area',
                        toolbar: {
                            show: false,
                        },
                        sparkline: {
                            enabled: true
                        },
                        grid: {
                            show: false,
                            padding: {
                            left: 0,
                            right: 0
                            }
                        },
                        },
                        colors: [$warning],
                        dataLabels: {
                        enabled: false
                        },
                        stroke: {
                        curve: 'smooth',
                        width: 2.5
                        },
                        fill: {
                        type: 'gradient',
                        gradient: {
                            shadeIntensity: 0.9,
                            opacityFrom: 0.7,
                            opacityTo: 0.5,
                            stops: [0, 80, 100]
                        }
                        },
                        series: [{
                        name: 'Orders',
                        data: [10, 15, 8, 15, 7, 12, 8]
                        }],

                        xaxis: {
                        labels: {
                            show: false,
                        },
                        axisBorder: {
                            show: false,
                        }
                        },
                        yaxis: [{
                        y: 0,
                        offsetX: 0,
                        offsetY: 0,
                        padding: { left: 0, right: 0 },
                        }],
                        tooltip: {
                        x: { show: false }
                        },
                    }

                    var orderChart = new ApexCharts(
                        document.querySelector("#orders-received-chart"),
                        orderChartoptions
                    );

                    orderChart.render();
                // ----------------------------------
                // Line Area Chart - 3
                    var saleslineChartoptions = {
                        chart: {
                        height: 100,
                        type: 'area',
                        toolbar: {
                            show: false,
                        },
                        sparkline: {
                            enabled: true
                        },
                        grid: {
                            show: false,
                            padding: {
                            left: 0,
                            right: 0
                            }
                        },
                        },
                        colors: [$danger],
                        dataLabels: {
                        enabled: false
                        },
                        stroke: {
                        curve: 'smooth',
                        width: 2.5
                        },
                        fill: {
                        type: 'gradient',
                        gradient: {
                            shadeIntensity: 0.9,
                            opacityFrom: 0.7,
                            opacityTo: 0.5,
                            stops: [0, 80, 100]
                        }
                        },
                        series: [{
                        name: 'Armry',
                        data: [{{ $sum_army_separate }}]
                        }],

                        xaxis: {
                        labels: {
                            show: false,
                        },
                        axisBorder: {
                            show: false,
                        }
                        },
                        yaxis: [{
                        y: 0,
                        offsetX: 0,
                        offsetY: 0,
                        padding: { left: 0, right: 0 },
                        }],
                        tooltip: {
                        x: { show: false }
                        },
                    }

                    var saleslineChart = new ApexCharts(
                        document.querySelector("#line-area-chart-3"),
                        saleslineChartoptions
                    );

                    saleslineChart.render();
                // ----------------------------------
        });

</script>

    <!-- END: Page JS-->
@endsection

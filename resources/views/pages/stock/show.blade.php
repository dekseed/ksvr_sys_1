@extends('layouts.home')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/extensions/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/app-ecommerce-details.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/extensions/sweetalert2.min.css">
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
                                    <li class="breadcrumb-item active">รายละเอียดครุภัณฑ์
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
                <!-- app ecommerce details start -->
                <section class="app-ecommerce-details">
                    <div class="card">
                        <div class="card-body">
                            @if(Session::has('message'))
                                <div class="alert alert-primary">
                                    <span class="text-bold-700 font-medium-3 mr-1"><i class="feather icon-check mr-1"></i>{{ Session::get('message') }}</span>
                                </div>

                                @endif
                            <div class="row mb-5 mt-2">

                                <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('files') }}/{{$stocks->pic}}" class="img-fluid" alt="product image">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <h3><i class="feather icon-slack"></i> {{$stocks->name}}
                                    </h3>
                                    <p class="text-muted">{{$stocks->category_equipment->name}} >> {{$stocks->stock_kind->name}}</p>

                                    {{-- <div class="ecommerce-details-price d-flex flex-wrap">

                                        <p class="text-primary font-medium-3 mr-1 mb-0">$43.99</p>
                                        <span class="pl-1 font-medium-3 border-left">
                                            <i class="feather icon-star text-warning"></i>
                                            <i class="feather icon-star text-warning"></i>
                                            <i class="feather icon-star text-warning"></i>
                                            <i class="feather icon-star text-warning"></i>
                                            <i class="feather icon-star text-secondary"></i>
                                        </span>
                                        <span class="ml-50 text-dark font-medium-1">424 ratings</span>
                                    </div> --}}
                                    <hr>
                                    <p class="font-weight-bold mb-25 "> <i class="feather icon-truck mr-50 font-medium-2"></i>หมายเลขเครื่อง / เลขทะเบียน : <b>{{$stocks->number}}</b>
                                        <button type="button"  id="qr-code" class="btn btn-icon btn-warning ml-1 waves-effect waves-light" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-qrcode"></i> </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body text-center">
                                                        {!! QrCode::size(400)->generate(url("/stock/schedule/{$stocks->id}")); !!}
                                                        <span style="font-size:30px;"><b>{{$stocks->number}}</b></span>
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-dismiss="modal">ปิด</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></p>
                                        <div class="card-text mt-1">
                                            <dl class="row">
                                                <dt class="col-sm-3">ประเภท</dt>
                                                <dd class="col-sm-9">{{$stocks->stock_kind->name}}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-sm-3">ชื่อ</dt>
                                                <dd class="col-sm-9">{{$stocks->name}}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-sm-3">ยี่ห้อ</dt>
                                                <dd class="col-sm-9">{{$stocks->brand->name}}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-sm-3">รุ่น</dt>
                                                <dd class="col-sm-9">{{$stocks->model}}</dd>
                                            </dl>
                                            @if($stocks->model_cartridge_inks_id > '0')
                                            <dl class="row">
                                                <dt class="col-sm-3">รุ่นตลับหมีก</dt>
                                                <dd class="col-sm-9">{{$stocks->model_cartridge_ink->name}}</dd>
                                            </dl>
                                            @elseif($stocks->model_cartridge_inks_id == '0')
                                            <dl class="row">
                                                <dt class="col-sm-3">รุ่นตลับหมีก</dt>
                                                <dd class="col-sm-9">สีน้ำ</dd>
                                            </dl>

                                            @endif

                                            <dl class="row">
                                                <dt class="col-sm-3">s/n</dt>
                                                <dd class="col-sm-9">{{$stocks->sn}}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-sm-3">ปีงบประมาณ</dt>
                                                <dd class="col-sm-9">{{$stocks->expenditure}}  ปี {{$stocks->year}}
                                                </dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-sm-3">แผนก</dt>
                                                <dd class="col-sm-9">
                                                    @if (is_null($stocks->departments_id))
                                                    ยังไม่ระบุ
                                                    @else
                                                    {{$stocks->department->name}}
                                                    @endif </dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-sm-3">หมายเหตุ</dt>
                                                <dd class="col-sm-9">{{$stocks->detail}}
                                                </dd>
                                            </dl>
                                        </div>
                                    <p class="font-weight-bold"> <i class="feather icon-user mr-50 font-medium-2"></i>ผู้รับผิดชอบ : @if($stocks->stock_user_id == '0') ยังไม่ระบุ @else {{$stocks->user_stock->title_name->name}}{{$stocks->user_stock->first_name}} {{$stocks->user_stock->last_name}}@endif
                                    </p>
                                    <hr>
                                    {{-- <p>Available - <span class="text-success">In stock</span></p> --}}

                                    <div class="d-flex flex-column flex-sm-row">
                                        <a href="{{ route('repair.seach', $stocks->id)}}" class="btn btn-danger mr-0 mr-sm-1 mb-1 mb-sm-0"><i class="fa fa-sitemap"></i> แจ้งซ้อม</a>
                                        @if (Auth::user()->hasRole(['superadministrator', 'administrator']))
                                            <button class="btn btn-primary mr-0 mr-sm-1 mb-1 mb-sm-0"  onclick="location.href='{{ route('schedule.edit', $stocks->id)}}';" ><i class="feather icon-edit-1"></i> แก้ไขข้อมูล</button>
                                            <button class="btn btn-outline-danger mr-0 mr-sm-1 mb-1 mb-sm-0" data-href="{{ route('schedule.destroy', $stocks->id)}}"
                                                data-toggle="modal" data-target="#default<?= $stocks->id ?>"><i class="feather icon-trash"></i> ลบ</button>
                                        @endif

                                        <a href="{{ route('schedule.index')}}" class="btn btn-outline-warning mr-0 mr-sm-1 mb-1 mb-sm-0"><i class="feather icon-arrow-left"></i> กลับ</a>

                                    </div>
                                    <div class="modal fade text-left" id="default<?= $stocks->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <form id="delete" name="delete" action="{{ route('schedule.destroy', $stocks->id)}}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel1">ลบข้อมูล</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5>คุณต้องการลบ " {{$stocks->name}} " ใช่หรือไม่?</h5>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn grey mr-1 mb-1 btn-outline-secondary" data-dismiss="modal">ยกเลิก</button>
                                                        <button type="submit" class="btn danger mr-1 mb-1 waves-effect waves-light"><i class="feather icon-trash"></i> ลบข้อมูล</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <hr>
                                    <button type="button" class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1"><i class="feather icon-facebook"></i></button>
                                    <button type="button" class="btn btn-icon rounded-circle btn-outline-info mr-1 mb-1"><i class="feather icon-twitter"></i></button>
                                    <button type="button" class="btn btn-icon rounded-circle btn-outline-danger mr-1 mb-1"><i class="feather icon-youtube"></i></button>
                                    <button type="button" class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1"><i class="feather icon-instagram"></i></button> --}}
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- app ecommerce details end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->


@endsection
@section('scripts')

    <script>
//         $(document).ready(function () {

//   // Basic

//  $('#qr-code').on('click', function () {

//     Swal.fire({
//       title: 'Sweet!',
//       html: '{!! QrCode::size(100)->generate(Request::url()); !!}',
//       text: 'Modal with a custom image.',
//       imageUrl: "",
//       imageWidth: 400,
//       imageHeight: 200,
//       imageAlt: 'Custom image',
//       animation: false,
//       confirmButtonClass: 'btn btn-primary',
//       buttonsStyling: false,
//     })
//   });

// });

    </script>

    <!-- BEGIN: Page Vendor JS-->
        <script src="{{ asset('app-assets') }}/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/extensions/polyfill.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/extensions/jquery.steps.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets') }}/js/scripts/forms/wizard-steps.js"></script>
    <script src="{{ asset('app-assets') }}/js/scripts/extensions/sweet-alerts.js"></script>
    <!-- END: Page JS-->
@endsection

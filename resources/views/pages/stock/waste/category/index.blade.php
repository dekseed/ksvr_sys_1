@extends('layouts.home')

@section('styles')



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
                            <h2 class="content-header-title float-left mb-0">ระบบบันทึกข้อมูลครุภัณฑ์</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">หน้าแรก</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('schedule.index') }}">ระบบบันทึกข้อมูลครุภัณฑ์</a>
                                    </li>
                                    <li class="breadcrumb-item active">หมวดหมู่ / ประเภท
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
                @if(Session::has('message'))
                        <div class="alert alert-primary">
                            <span class="text-bold-700 font-medium-3 mr-1"><i class="feather icon-check mr-1"></i>{{ Session::get('message') }}</span>
                        </div>

                    @endif
                <!-- account setting page start -->
                <section id="page-account-settings">
                    <div class="row">
                        <!-- left menu section -->
                        <div class="col-md-3 mb-2 mb-md-0">
                            <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                                <li class="nav-item">
                                    <a class="nav-link d-flex py-75 active" id="account-pill-general" data-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                                        <i class="feather icon-globe mr-50 font-medium-3"></i>
                                        หมวดหมู่
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex py-75" id="account-pill-model" data-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                                        <i class="feather icon-lock mr-50 font-medium-3"></i>
                                        ประเภท
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex py-75" id="account-pill-model" data-toggle="pill" href="#account-vertical-model" aria-expanded="false">
                                        <i class="feather icon-lock mr-50 font-medium-3"></i>
                                        รุ่นตลับหมึก
                                    </a>
                                </li>
                            </ul>
                        </div>
                                                <!-- right content section -->
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">
                                                <div class="card-header mb-1">
                                                    <h4>ตารางหมวดหมู่</h4>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">รหัส</th>
                                                                <th class="text-center">ชื่อหมวดหมู่</th>
                                                                <th class="text-center">ตัวเลือก</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php $i=1 ?>
                                                            @foreach ($cates as $role)
                                                            <tr>
                                                                <th class="text-center" scope="row">{{ $i++ }}</th>
                                                                <td>{{$role->name}}</td>
                                                                <td class="product-action text-center">
                                                                    {{-- <span class="action-edit"><i class="feather icon-edit"></i></span> --}}
                                                                    <button type="button" class="btn btn-danger mr-1 mb-1 waves-effect waves-light" data-href="{{ route('category-waste.destroy', $role->id)}}" data-toggle="modal" data-target="#default1<?= $role->id ?>">
                                                                        <i class="feather icon-trash"></i></button>
                                                                    {{-- <span class="action-delete"><i class="feather icon-trash"></i></span> --}}
                                                                </td>
                                                            </tr>
                                                            <div class="modal fade text-left" id="default1<?= $role->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                        <form id="delete1<?= $role->id ?>" name="delete" action="{{ route('category-waste.destroy', $role->id)}}" method="POST">
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
                                                                        <button type="button" class="btn grey mb-1 btn-outline-secondary" data-dismiss="modal">ยกเลิก</button>
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
                                                <hr>
                                                <div class="card-header mb-1">
                                                    <h4>เพิ่มข้อมูลหมวดหมู่</h4>
                                                </div>
                                                <form method="POST" action="{{ route('category-waste.store') }}">
                                                    {{method_field('POST')}}
                                                    {{csrf_field()}}
                                                    <div class="form-group row">

                                                        <div class="col-md-8">
                                                            <div class="position-relative has-icon-left">
                                                                <input type="text" id="category-waste-name" class="form-control" name="name" placeholder="ชื่อหมวดหมู่">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-package"></i>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <button type="submit" class="btn btn-outline-primary waves-effect waves-light">บันทึก</button>
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade " id="account-vertical-password" role="tabpanel" aria-labelledby="account-pill-password" aria-expanded="false">
                                                <div class="card-header mb-1">
                                                    <h4>ตารางประเภท</h4>
                                                </div>

                                                 <div class="table-responsive">
                                                    <table class="table zero-configuration">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">รหัส</th>
                                                                <th class="text-center">ชื่อหมวดหมู่</th>
                                                                <th class="text-center">ชื่อประเภท</th>
                                                                <th class="text-center">ตัวเลือก</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $i=1 ?>
                                                        @foreach ($kinds as $role)
                                                            <tr>
                                                                <td class="text-center">{{ $i++ }}</td>
                                                                <td>{{$role->category_waste->name}}</td>
                                                                <td>{{$role->name}}</td>
                                                                <td class="product-action text-center">
                                                                    <button type="button" class="btn btn-danger mr-1 mb-1 waves-effect waves-light" data-href="{{ route('kinds-waste.destroy', $role->id)}}" data-toggle="modal" data-target="#kinds<?= $role->id ?>">
                                                                        <i class="feather icon-trash"></i></button>

                                                                </td>
                                                            </tr>
                                                            <div class="modal fade" id="kinds<?= $role->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                                                                aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                        <div class="modal-content">
                                                                            <form id="deletekinds<?= $role->id ?>" name="delete" action="{{ route('kinds-waste.destroy', $role->id)}}" method="POST">
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
                                                                                    <button type="button" class="btn grey mb-1 btn-outline-secondary" data-dismiss="modal">ยกเลิก</button>
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
                                                <hr>
                                                <div class="card-header mb-1">
                                                    <h4>เพิ่มข้อมูลประเภท</h4>
                                                </div>
                                                <form method="POST" action="{{ route('kinds-waste.store') }}">
                                                    {{method_field('POST')}}
                                                    {{csrf_field()}}
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                        <select id="cate_waste" name="cate_equipments" class="form-control"  placeholder="เลือกหมวดหมู่" required>
                                                            {{-- @foreach ($cateEquipments as $roles)
                                                            <option value="{{$roles->id}}">{{$roles->name}}</option>
                                                            @endforeach --}}
                                                            <option value="">เลือกหมวดหมู่</option>
                                                        </select>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="position-relative has-icon-left">
                                                                <input type="text" id="fname-icon" class="form-control" name="name" placeholder="ชื่อประเภท">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-package"></i>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <button type="submit" class="btn btn-outline-primary waves-effect waves-light">เพิ่มข้อมูล</button>
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade " id="account-vertical-model" role="tabpanel" aria-labelledby="account-pill-model" aria-expanded="false">
                                                <div class="card-header mb-1">
                                                    <h4>ตารางรุ่นตลับหมึก</h4>
                                                </div>

                                                 <div class="table-responsive">
                                                    <table class="table zero-configuration">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">รหัส</th>
                                                                <th >ประเภท</th>
                                                                <th >ชื่อรุ่นตลับหมึก</th>
                                                                <th class="text-center">ตัวเลือก</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $i=1 ?>
                                                        @foreach ($modelCartInk as $role)
                                                            <tr>
                                                                <td class="text-center">{{ $i++ }}</td>
                                                                <td>{{$role->cateModelCartridgeInk->name}}</td>
                                                                <td>{{$role->name}}</td>
                                                                <td class="product-action text-center">
                                                                    <button type="button" class="btn btn-danger mr-1 mb-1 waves-effect waves-light" data-href="{{ route('model-cart-ink.destroy', $role->id)}}" data-toggle="modal" data-target="#modelCartInk<?= $role->id ?>">
                                                                        <i class="feather icon-trash"></i></button>

                                                                </td>
                                                            </tr>
                                                            <div class="modal fade" id="modelCartInk<?= $role->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                                                                aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                        <div class="modal-content">
                                                                            <form id="deletemodelCartInk<?= $role->id ?>" name="delete" action="{{ route('model-cart-ink.destroy', $role->id)}}" method="POST">
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
                                                                                    <button type="button" class="btn grey mb-1 btn-outline-secondary" data-dismiss="modal">ยกเลิก</button>
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
                                                <hr>
                                                <div class="card-header mb-1">
                                                    <h4>เพิ่มข้อมูลรุ่นตลับหมึก</h4>
                                                </div>
                                                <form method="POST" action="{{ route('model-cart-ink.store') }}">
                                                    {{method_field('POST')}}
                                                    {{csrf_field()}}
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <select id="model-cart-ink-cate_waste" name="cate_model_cartridge_inks_id" class="form-control"  placeholder="เลือกหมวดหมู่" required>
                                                                <option value="">เลือกประเภท</option>
                                                                @foreach ($cate_model_cart_ink as $roles)
                                                                <option value="{{$roles->id}}">{{$roles->name}}</option>
                                                                @endforeach

                                                            </select>
                                                            </div>
                                                            <div class="col-md-5">
                                                            <div class="position-relative has-icon-left">
                                                                <input type="text" id="model-cart-ink-name" class="form-control" name="name" placeholder="ชื่อรุ่นตลับหมึก">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-package"></i>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <button type="submit" class="btn btn-outline-primary waves-effect waves-light">เพิ่มข้อมูล</button>
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- account setting page end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
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
    <script src="{{ asset('app-assets') }}/js/scripts/datatables/datatable.js"></script>
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets') }}/js/scripts/modal/components-modal.js"></script>
    <!-- END: Page JS-->
@endsection

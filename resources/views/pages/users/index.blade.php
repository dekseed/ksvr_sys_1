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

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/forms/validation/form-validation.css">
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
                            <h2 class="content-header-title float-left mb-0"><i class="feather icon-users"></i>  ข้อมูลสมาชิก</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">หน้าแรก</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('users.index') }}">จัดการข้อมูลสมาชิก</a>
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
                    {{-- <div class="action-btns d-none">
                        <div class="btn-dropdown mr-1 mb-1">
                            <div class="btn-group dropdown actions-dropodown">
                                <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    ตัวเลือก
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"><i class="feather icon-trash"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="feather icon-archive"></i>Archive</a>
                                    <a class="dropdown-item" href="#"><i class="feather icon-file"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="feather icon-save"></i>Another Action</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    @if(Session::has('message'))
                        <div class="alert alert-primary">
                            <span class="text-bold-700 font-medium-3 mr-1"><i class="feather icon-check mr-1"></i>{{ Session::get('message') }}</span>
                        </div>

                    @endif

                    <!-- DataTable starts -->
                    <div class="table-responsive">
                        <table class="table data-list-view">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>ลำดับที่</th>
                                    <th>ยศ ชื่อ - นามสกุล</th>
                                    <th>ตำแหน่ง</th>
                                    <th>แผนก</th>
                                    <th>สถานะ</th>
                                    <th>ตัวเลือก</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1 ?>
                              @foreach ($users as $role)
                                <tr>
                                    <td></td>
                                    <td class="text-center">{{ $i++ }}</td>
                                    <td class="product-name">{{$role->title_name->name}}{{$role->name}}
                                        @if($role->isOnline())
                                        <div class="chip mb-0">
                                                                <div class="chip-body">
                                                                    <span class="chip-text" data-value="Doc"><span class="bullet bullet-success bullet-xs"></span> ออนไลน์</span>
                                                                </div>
                                                            </div>
                                        @endif

                                    </td>
                                    <td class="product-category">{{$role->position}}</td>
                                    <td>{{$role->department->name}}</td>
                                    <td>
                                        @if($role->status === '1')
                                        <div class="badge badge-primary badge-md">อนุมัติแล้ว</div>
                                        @else
                                        <div class="badge badge-danger badge-md">รอการอนุมัติ</div>
                                        @endif
                                    </td>
                                    <td class="">
                                        <span class="edit">
                                            <a class="btn btn-icon btn-success waves-effect light" href="{{ route('users.show', $role->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="ดูข้อมูล">
                                                    <i class="feather icon-monitor"></i></a>
                                        </span>
                                        {{-- <span class="edit">
                                            <a class="" href="{{ route('users.edit', $role->id)}}">
                                                    <i class="feather icon-edit"></i></a>
                                        </span> --}}
                                        <span class="delete">

                                            <a class="btn btn-icon btn-danger waves-effect light" data-href="{{ route('users.destroy', $role->id)}}" data-toggle="modal" title=""
                                               data-target="#default<?= $role->id ?>"><i class="feather icon-trash"></i></a>
                                            </span>


                                    </td>

                                </tr>
                                <div class="modal fade text-left" id="default<?= $role->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <form id="delete" name="delete" action="{{ route('users.destroy', $role->id)}}" method="POST">
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
                    <!-- DataTable ends -->

                    <!-- add new sidebar starts -->
                    <div class="add-new-data-sidebar">
                        <div class="overlay-bg"></div>
                        <form method="POST" class="form form-vertical" action="{{ route('users.store') }}" enctype="multipart/form-data" >
                            {{method_field('POST')}}
                            {{csrf_field()}}
                            <div class="add-new-data">
                                <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                                    <div>
                                        <h4 class="text-uppercase">เพิ่มข้อมูลกำลังพล</h4>
                                    </div>
                                    <div class="hide-data-sidebar">
                                        <i class="feather icon-x"></i>
                                    </div>
                                </div>

                                <div class="data-items pb-3">
                                    <div class="data-fields px-2 mt-1">
                                        <div class="row">
                                            <div class="col-sm-12 data-field-col">
                                                <label for="number"> คำนำหน้า </label>
                                                <select class="select2-data-array-title_name form-control"  name="title_name"></select>
                                            </div>
                                            <div class="col-sm-12 data-field-col">
                                                <label for="data-status"> ชื่อ - นามสกุล </label>
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="ชื่อ - นามสกุล" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            </div>
                                            <div class="col-sm-12 data-field-col">
                                                <label for="name"> ตำแหน่ง </label>
                                                <input type="text" id="position" class="form-control" placeholder="ตำแหน่ง" name="position" value="{{ old('position') }}" required autocomplete="position" autofocus>
                                            </div>
                                            <div class="col-sm-12 data-field-col">
                                                <label for="number"> แผนก </label>
                                                <select class="select2-data-array-dep form-control" id="select2-array" name="department" required></select>
                                            </div>

                                            <div class="col-sm-12 data-field-col">
                                                <label for="brand"> อีเมล์ </label>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="อีเมล์" required autocomplete="email">
                                            </div>

                                            <div class="col-sm-12 data-field-col">
                                                <label for="model"> รหัสผ่าน </label>
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="รหัสผ่าน" required required data-validation-required-message="รหัสผ่านใหม่" minlength="6">
                                            </div>
                                            <div class="col-sm-12 data-field-col">
                                                <label for="sn"> ยืนยันรหัสผ่าน </label>
                                                <input id="password-confirm" type="password" class="form-control" placeholder="ยืนยันรหัสผ่าน" name="password_confirmation" required data-validation-match-match="password" placeholder="ยืนยันรหัสผ่านใหม่" data-validation-required-message="ต้องยืนยันพาสเวิร์ดใหม่" minlength="6">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                    <div class="add-data-btn">
                                        <button type="submit" class="btn btn-primary">บันทึก</button>
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
{{-- <script>
    var app = new Vue({
        el: '#app',
        data: {
            auto_password: true
        }
    });
</script> --}}
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
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets') }}/js/scripts/ui/data-list-view.js"></script>
    <script src="{{ asset('app-assets') }}/js/scripts/forms/select/form-select2.js"></script>
    <script src="{{ asset('app-assets') }}/js/scripts/forms/validation/form-validation.js"></script>
    <!-- END: Page JS-->

@endsection

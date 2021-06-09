@extends('layouts.home')

@section('styles')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/file-uploaders/dropzone.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/data-list-view.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/forms/wizard.css">
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
                                    <li class="breadcrumb-item"><a href="{{ route('schedule.index') }}">ระบบแจ้งดำเนินงาน แผนกศูนย์คอมพิวเตอร์</a>
                                    </li>
                                    <li class="breadcrumb-item active">ดูข้อมูล
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
                <!-- // Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"><i class="feather icon-file-text"></i> ดูข้อมูลการดำเนินงาน</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">

                                            <div class="form-body">
                                                <form class="form" action="{{route('repair.store')}}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id_stock" id="id_stock" value="{{ $stocks->id }}">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <div class="form-label-group has-icon-left">
                                                                <input type="text" id="search" class="form-control" value="{{ $stocks->number }}" placeholder="ค้นหา หมายเลขเครื่อง/เลขทะเบียน"
                                                                                name="search">
                                                                    <label for="email-id-column">ค้นหา หมายเลขเครื่อง/เลขทะเบียน</label>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-search"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="form-label-group has-icon-left">
                                                                    <input type="text" id="name" class="form-control" placeholder="ยี่ห้อ" name="name"  value="{{ $stocks->number }}" required autocomplete="brand" disabled>
                                                                    <label for="email-id-column">ชื่ออุปกรณ์</label>
                                                                        <div class="form-control-position">
                                                                            <i class="feather icon-repeat"></i>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="form-label-group has-icon-left">
                                                                    <input type="text" id="brand" class="form-control" placeholder="ยี่ห้อ" name="brand"  value="{{ $stocks->number }}" required autocomplete="brand" disabled>
                                                                    <label for="email-id-column">ยี่ห้อ</label>
                                                                        <div class="form-control-position">
                                                                            <i class="feather icon-repeat"></i>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="form-label-group has-icon-left">
                                                                    <input type="text" id="model" class="form-control" placeholder="รุ่น" name="model"  value="{{ $stocks->number }}" required autocomplete="model" disabled>
                                                                    <label for="email-id-column">รุ่น</label>
                                                                        <div class="form-control-position">
                                                                            <i class="feather icon-repeat"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="form-label-group has-icon-left">
                                                                    <input type="text" id="sn" class="form-control" placeholder="s/n" name="sn"  value="{{ $stocks->number }}" required autocomplete="sn" disabled>
                                                                    <label for="email-id-column">sn</label>
                                                                        <div class="form-control-position">
                                                                            <i class="feather icon-repeat"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="form-label-group has-icon-left">
                                                                    <input type="text" id="expenditure" class="form-control" placeholder="ปีงบประมาณ" name="expenditure"  value="{{ $stocks->number }}" required disabled>
                                                                    <label for="email-id-column">ปีงบประมาณ</label>
                                                                        <div class="form-control-position">
                                                                            <i class="feather icon-repeat"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 col-sm-6">

                                                            <div class="form-group">
                                                                <div class="form-label-group">
                                                                    <select class="form-control" name="genus" id="genus" required>
                                                                        <option value=""><i class="feather icon-filter"></i> ประเภทการดำเนินงาน</option>
                                                                        @foreach($genus as $list)
                                                                        <option value={{$list->id}} {{ $list == $stocks->genus_repairs_id ? 'selected' : '' }}>{{$list->name}}</option>
                                                                        @endforeach

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            {{-- <div class="form-group">
                                                                <div class="form-label-group">
                                                                    <div class="form-label-group has-icon-left">
                                                                        <input type="text" id="name" class="form-control" placeholder="รายการ" name="name"  required autocomplete="position">
                                                                        <label for="email-id-column"></label>
                                                                        <div class="form-control-position">
                                                                                <i class="feather icon-file"></i>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div> --}}
                                                            <div class="form-group">
                                                                <div class="table-responsive border rounded px-1">

                                                                        <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-repeat mr-50 "></i>รายละเอียดการซ่อม/ปัญหา</h6>
                                                                        <div class="form-label-group has-icon-left">
                                                                        <textarea class="form-control  mb-1" name="detail" id="basicTextarea" rows="3" placeholder="รายละเอียด.." required>{{$stocks->detail}}</textarea>
                                                                            <div class="form-control-position">
                                                                                <i class="feather icon-repeat"></i>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="form-label-group">
                                                                    <div class="form-label-group has-icon-left">
                                                                        <input type="text" id="note" class="form-control" placeholder="หมายเหตุ (ถ้ามี)" name="note" value="{{$stocks->note}}">
                                                                        <label for="email-id-column">หมายเหตุ <em>(ถ้ามี)</em></label>
                                                                            <div class="form-control-position">
                                                                                <i class="feather icon-hash"></i>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                        <button type="submit" class="btn btn-primary mr-1 mb-1"><i class="feather icon-plus-circle"></i> ส่งข้อมูล</button>
                                                        <a href="{{ route('repair.index')}}" class="btn btn-outline-warning mr-1 mb-1"><i class="feather icon-arrow-left"></i> ยกเลิก</a>
                                                    </div>
                                                </form>
                                            </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic Floating Label Form section end -->

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
<script>


</script>
    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets') }}/vendors/js/extensions/jquery.steps.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets') }}/js/scripts/forms/wizard-steps.js"></script>
    <!-- END: Page JS-->
@endsection

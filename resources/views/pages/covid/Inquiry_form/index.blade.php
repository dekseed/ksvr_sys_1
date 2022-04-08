<h6>ประวัติผู้ป่วยติดเชื้อ Covid 2019</h6>

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
                        <h2 class="content-header-title float-left mb-0"><i class="feather icon-clipboard"></i> ระบบแบบสอบสวนผู้ป่วยติดเชื้อ Covid 19</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">หน้าหลัก</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('InquiryFormCovid.index') }}">ระบบแบบสอบสวนผู้ป่วยติดเชื้อ Covid 19</a>
                                </li>
                                {{-- <li class="breadcrumb-item"><a href="{{ route('inquiry-form-Covid.index') }}">ระบบคลินิกผู้ป่วยติดเชื้อ Covid 19</a>
                                </li> --}}
                                <li class="breadcrumb-item active">รายการ
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="col-12"> ค้นหาหน่วยงานและปี
            <h2 class="text-center mt-2 mb-2">รายการผู้ป่วยติดเชื้อ (สำหรับผู้ดูแลระบบ)</h2>
            <div class="card">

                <div class="card-content">


                    <div class="card-body card-dashboard">
                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col col-lg-4">
                                    <div class="form-group text-center">
                                        <select id="fillter_kind" name="kinds" class="form-control" required="" placeholder="เลือกหน่วยงาน">
                                            <option value="">เลือกหน่วยงาน</option>
                                            <option value="1">มทบ. ๒๙</option>
                                            <option value="2">รพ.ค่ายกฤษณ์สีวะรา</option>
                                            <option value="3">ร.๓</option>
                                            <option value="4">ร.๓ พัน.๑</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col col-lg-4">
                                    <div class="form-group text-center">
                                        <select id="filler_year" name="year" class="form-control" required="" placeholder="เลือกปี">
                                            <option value="">เลือกปี</option>

                                            <option value="2561">2561</option>


                                            <option value="2562">2562</option>


                                            <option value="2563">2563</option>


                                            <option value="2564">2564</option>


                                            <option value="2565">2565</option>


                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-auto">
                                    <div class="form-group text-center">

                                        <button type="button" name="filter" id="filter" class="btn btn-success mr-1 waves-effect waves-light"><i class="feather icon-check"></i> ตกลง</button>

                                        <button type="button" id="reset" name="reset" class="btn btn-info mr-1 waves-effect waves-light"><i class="feather icon-info"></i> ล้าง</button>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div> -->

        <div class="content-body">
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                {{-- <h4 class="card-title">รายการผู้ป่วยติดเชื้อ (สำหรับผู้ดูแลระบบ)</h4> --}}

                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    @if(Session::has('message'))
                                    <div class="alert alert-primary">
                                        <span class="text-bold-700 font-medium-3 mr-1"><i class="feather icon-check mr-1"></i>{{ Session::get('message') }}</span>
                                    </div>
                                    @endif

                                    <div class="table-responsive">
                                        <table class="table table-hover-animation table-striped zero-configuration col-center">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>รหัสผู้ป่วย</th>
                                                    <th>เลขบัตรประชาชน</th>
                                                    <th>ชื่อ</th>
                                                    <th>นามสกุล</th>
                                                    <th>เบอร์ติดต่อ</th>
                                                    <th>นำเข้าเมื่อ</th>
                                                    <th>แก้ไขล่าสุด</th>
                                                    <th class="text-center">ตัวเลือก</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($covid_19 as $id)
                                                <tr>
                                                    <td>{{$id->id}}</td>
                                                    <td>{{$id->code}}</td>
                                                    <td class="col-center">{{$id->user->number_id}}</td>
                                                    <td class="col-center">{{$id->user->first_name}}</td>
                                                    <td class="col-center">{{$id->user->last_name}}</td>
                                                    <td class="col-center">0{{$id->user->tel}}</td>
                                                    <td>{{$id->user->created_at}}</td>
                                                    <td>{{$id->user->updated_at}}</td>
                                                    <th class="text-center">

                                                        <div class="btn-group">
                                                            {{-- <button type="button" class="btn btn-success btn-" >
                                                                        <i class="feather icon-edit "></i>
                                                                    </button> --}}
                                                            @if($id->clinic_id)
                                                                <a href="{{ route('InquiryFormCovid.show', $id->id) }}" class="btn btn-success"><i class="feather icon-search"></i></a>
                                                            @else
                                                                <a href="{{ route('InquiryFormCovid.show', $id->id) }}" class="btn btn-danger"><i class="feather icon-search"></i></a>
                                                            @endif
                                                        </div>
                                                    </th>
                                                </tr>
                                                @endforeach
                                            </tbody>

                                            <tfoot>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>รหัสผู้ป่วย</th>
                                                    <th>เลขบัตรประชาชน</th>
                                                    <th>ชื่อ</th>
                                                    <th>นามสกุล</th>
                                                    <th>เบอร์ติดต่อ</th>
                                                    <th>นำเข้าเมื่อ</th>
                                                    <th>แก้ไขล่าสุด</th>
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
        </div>
    </div>
</div>



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

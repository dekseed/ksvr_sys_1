
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
                            <h2 class="content-header-title float-left mb-0"><i class="feather icon-monitor"></i> ระบบแบบสอบสวนผู้ป่วยติดเชื้อ Covid 19</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">หน้าหลัก</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">ระบบแบบสอบสวนผู้ป่วยติดเชื้อ Covid 19</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('repair-admin.index') }}">ระบบคลินิกผู้ป่วยติดเชื้อ Covid 19</a>
                                    </li>
                                    <li class="breadcrumb-item active">รายการ
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
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
            </div>

            <div class="content-body">
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    {{-- <h4 class="card-title">รายการผู้ป่วยติดเชื้อ (สำหรับผู้ดูแลระบบ)</h4> --}}

                                </div>
                                <div class="card-content">

                                    <div class="justify-content-md-center text-right mt-2">
                                        {{-- <a class="btn btn-icon btn-primary  mr-1 waves-effect waves-light" href="#"><i class="feather icon-inbox"></i> Excel</a> --}}
                                            <button type="button" class="btn btn-icon btn-danger  mr-1 waves-effect waves-light" href="#" data-toggle="modal" data-target="#default1"><i class="feather icon-user-plus"></i> เพิ่มข้อมูลตรวจสุขภาพ</button>
                                     </div>
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
                                                            <th>เข้ารักษา</th>
                                                            <th>รหัสผู้ป่วย</th>
                                                            <th>รพ. ที่รักษา</th>
                                                            <th>รพ. ปัจจุบัน</th>
                                                            <th>อำเภอ</th>
                                                            <th>วันที่พบผู้ป่วย</th>
                                                            <th>X-Ray</th>
                                                            <th>ผลตรวจ cbc</th>
                                                            <th>ผลตรวจ test</th>
                                                            <th>ผลตรวจ pcr</th>
                                                            <th>ผลตรวจ antibody</th>
                                                            <th>ประเภทผู้ป่วย</th>
                                                            <th>ยารักษา</th>
                                                            <th>สถานะ</th>
                                                            <th>แก้ไขล่าสุด</th>
                                                            <th>แก้ไข</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    @foreach ($covid_19 as $id)
                                                    <tr>
                                                        <td class="text-center">{{$id->first}}</td>
                                                        <td>{{$id->id}}</td>
                                                        <td>{{$id->namehosbe}}</td>
                                                        <td>{{$id->namehosup}}</td>
                                                        <td>{{$id->district_id}}</td>
                                                        <td>{{$id->patientdate_id}}</td>
                                                        <td>{{$id->x_ray_id}}</td>
                                                        <td>{{$id->cbc_id}}</td>
                                                        <td>{{$id->test_id}}</td>
                                                        <td>{{$id->pcr_id}}</td>
                                                        <td>{{$id->antibody_id}}</td>
                                                        <td>{{$id->type_id}}</td>
                                                        <td>{{$id->medicine_id}}</td>
                                                        <td>{{$id->status_id}}</td>
                                                        {{-- <td>{{$id->created_at}}</td> นำเข้าระบบ --}}
                                                        <td>{{$id->updated_at}}</td>
                                                            <th>
                                                                <div class="btn-group">
                                                                    {{-- <button type="button" class="btn btn-success btn-" >
                                                                        <i class="feather icon-edit"></i>
                                                                    </button> --}}
                                                                    <a href="{{ route('inquiry-form-Covid.edit', $id->id) }}" class="btn btn-success" ><i class="feather icon-edit"></i></a>
                                                                    <button type="button" class="btn btn-danger btn-">
                                                                        <i class="feather icon-trash"></i>
                                                                    </button>
                                                                </div>
                                                            </th>
                                                    </tr>


   
                                                    @endforeach


                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>เข้ารักษา</th>
                                                        <th>รหัสผู้ป่วย</th>
                                                        <th>รพ. ที่รักษา</th>
                                                        <th>รพ. ปัจจุบัน</th>
                                                        <th>อำเภอ</th>
                                                        <th>วันที่พบผู้ป่วย</th>
                                                        <th>X-Ray</th>
                                                        <th>ผลตรวจ cbc</th>
                                                        <th>ผลตรวจ test</th>
                                                        <th>ผลตรวจ pcr</th>
                                                        <th>ผลตรวจ antibody</th>
                                                        <th>ประเภทผู้ป่วย</th>
                                                        <th>ยารักษา</th>
                                                        <th>สถานะ</th>
                                                        <th>แก้ไขล่าสุด</th>
                                                        <th>แก้ไข</th>
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

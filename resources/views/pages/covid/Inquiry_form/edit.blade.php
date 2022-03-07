
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
                                    <li class="breadcrumb-item active">แก้ไขข้อมูลรายการ
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="content-body">
                <section id="multiple-column-form">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="text-center mb-2">
                                <i class="feather icon-clipboard"></i>
                                แก้ไขข้อมูลรายการผู้ป่วยติดเชื้อ (สำหรับผู้ดูแลระบบ)</h3>
                            


                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title text-center"><i class="feather icon-user"></i> ข้อมูลส่วนตัว</h4>
                                    </div>
                                    <div class="card-content">
    
                                        <div class="card-body">
                                                
                                            <div class="form-body mt-2">
    
                                                <div class="row">
                                                    <div class="col-md-2 col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
    
                                                            <select class="form-control" id="select2-array" name="title_name" disabled="">
                                                            <option value="">คำนำหน้า</option>
                                                                                                                            <option value="1">นาย</option>
                                                                                                                            <option value="2">นาง</option>
                                                                                                                            <option selected="" value="3">นางสาว</option>
                                                                                                                            <option value="4">พันเอก</option>
                                                                                                                            <option value="5">พันเอกหญิง</option>
                                                                                                                            <option value="6">พันโท</option>
                                                                                                                            <option value="7">พันโทหญิง</option>
                                                                                                                            <option value="8">พันตรี</option>
                                                                                                                            <option value="9">พันตรีหญิง</option>
                                                                                                                            <option value="10">ร้อยเอก</option>
                                                                                                                            <option value="11">ร้อยเอกหญิง</option>
                                                                                                                            <option value="12">ร้อยโท</option>
                                                                                                                            <option value="13">ร้อยโทหญิง</option>
                                                                                                                            <option value="14">ร้อยตรี</option>
                                                                                                                            <option value="15">ร้อยตรีหญืง</option>
                                                                                                                            <option value="16">จ่าสิบเอก</option>
                                                                                                                            <option value="17">จ่าสิบเอกหญิง</option>
                                                                                                                            <option value="18">จ่าสิบโท</option>
                                                                                                                            <option value="19">จ่าสิบโทหญิง</option>
                                                                                                                            <option value="20">จ่าสิบตรี</option>
                                                                                                                            <option value="21">จ่าสิบตรีหญิง</option>
                                                                                                                            <option value="22">สิบเอก</option>
                                                                                                                            <option value="23">สิบเอกหญิง</option>
                                                                                                                            <option value="24">สิบโท</option>
                                                                                                                            <option value="25">สิบโทหญิง</option>
                                                                                                                            <option value="26">สิบตรี</option>
                                                                                                                            <option value="27">สิบตรีหญิง</option>
                                                                                                                            <option value="28">พลตรี</option>
                                                                                                                            <option value="29">พลโท</option>
                                                                                                                            <option value="30">พลเอก</option>
                                                                                                                            <option value="31">พลตรี</option>
                                                                                                                            <option value="32">พลโท</option>
                                                                                                                            <option value="33">พลเอก</option>
                                                                                                                        </select>
                                                            <div class="form-control-position">
                                                                    <i class="feather icon-user"></i>
                                                                </div>
                                                            <label for="projectinput1">คำนำหน้า</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
    
                                                            <input type="text" id="projectinput1" class="form-control" value="$id" disabled="" name="first_name">
                                                            <div class="form-control-position">
                                                                <i class="feather icon-user"></i>
                                                            </div>
                                                            <label for="projectinput1">ชื่อหน้า</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
    
                                                            <input type="text" id="projectinput2" class="form-control" value="" disabled="" name="last_name">
                                                            <div class="form-control-position">
                                                                <i class="feather icon-user"></i>
                                                            </div>
                                                            <label for="projectinput2">นามสกุล</label>
                                                        </div>
                                                    </div>
    
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-4 mb-2">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="text" id="projectinput3" class="form-control" value="1-4799-00291-03-9" name="cid" disabled="">
                                                            <div class="form-control-position">
                                                                <i class="feather icon-user"></i>
                                                            </div>
                                                            <label for="projectinput3">เลขที่บัตรประจำตัวประชาชน</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-4 mb-2">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="text" id="projectinput3" class="form-control" value="6103365" name="hn" disabled="">
                                                            <div class="form-control-position">
                                                                    <i class="feather icon-user"></i>
                                                                </div>
                                                            <label for="projectinput3">เลขที่ HN</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-4 mb-2">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                        <input type="text" id="projectinput4" class="form-control" value="23" name="age" disabled="">
                                                            <div class="form-control-position">
                                                                <i class="feather icon-user"></i>
                                                            </div>
                                                            <label for="projectinput4">อายุ</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <a class="btn btn-primary mr-1 waves-effect waves-light mt-1" href="http://127.0.0.1:8000/check_up/army/3/edit"><i class="feather icon-edit"></i> แก้ไขข้อมูลส่วนตัว</a>
                                                             <button type="button" class="btn btn-danger mr-1 mt-1 waves-effect waves-light" data-toggle="modal" data-target="#default">
                                                                    <i class="feather icon-trash-2"></i> ลบข้อมูล
                                                                </button>
    
                                                            <a class="btn btn-info waves-effect waves-light mt-1" href="http://127.0.0.1:8000/check_up/army"><i class="feather icon-monitor"></i> กลับหน้าแรก</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
    
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="myModalLabel1">ลบข้อมูล</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body text-center">
                                                                        คุณต้องการลบข้อมูล<b> "นางสาวณัฐชยาร์ จิระวัฒนาสมกุล" </b>ใช่หรือไม่
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <form action="http://127.0.0.1:8000/check_up/army/delete/3" method="POST">
                                                                            <input type="hidden" name="_token" value="K2gaNjCmBz51IzcTzZdxtQjZVtGCc1Eg2oq2t1Nk">                                                                        <input type="hidden" name="_method" value="DELETE">                                                                    <button type="button" class="btn btn-secondary waves-effect waves-light" data-dismiss="modal">ยกเลิก</button>
                                                                        <button type="submit" class="btn btn-danger waves-effect waves-light">ลบข้อมูล</button>
                                                                        </form>
                                                                    </div>
    
                                                                </div>
    
    
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <div class="card">
                                <div class="card-header">
                                    {{-- <h4 class="text-center mb-2">แก้ไขข้อมูลรายการผู้ป่วยติดเชื้อ (สำหรับผู้ดูแลระบบ)</h4> --}}

                                </div>
                                <div class="card-content">
                                    
                                    <div class="card-body card-dashboard">
                                         @if(Session::has('message'))
                                            <div class="alert alert-primary">
                                                <span class="text-bold-700 font-medium-3 mr-1"><i class="feather icon-check mr-1"></i>{{ Session::get('message') }}</span>
                                            </div>

                                        @endif
                                    

<h6>ข้อที่ 1</h6>
<fieldset>

    <div class="form-body">
        <div class="row">
            <div class="col-2">
                <div class="form-group">
                    <label for="first-name-icon">คำนำหน้า</label>
                    {{-- <div class="position-relative has-icon-left">
                                                                            <input type="text" id="first-name-icon" class="form-control" name="fname-icon" placeholder="คำนำหน้า">
                                                                            <div class="form-control-position">
                                                                                <i class="fa fa-users"></i>
                                                                            </div>
                                                                        </div> --}}
                    <select class="form-control" id="basicSelect">
                        <option value="">--- คำนำหน้า ---</option>

                        {{-- @foreach ($id?? '' as $covid_19)
                            <option value="{{ $roles->id }}">{{ $roles->name }}</option>
                        @endforeach --}}

                        
                    </select>
                </div>
            </div>



                <div class="col-12">
                    <div class="form-group">
                        <div class="controls">
                            <label for="account-username">Username</label>
                            <input type="text" class="form-control" id="account-username" placeholder="Username" value='' required="" data-validation-required-message="This username field is required">
                        </div>
                    </div>
                </div>




                                                   
            <div class="col-5">
                <div class="form-group">
                    <label for="first-name-icon">ชื่อ</label>
                    <div class="position-relative has-icon-left">
                        <input type="text" id="first-name-icon" class="form-control" name="first-name-icon"
                            placeholder="ชื่อ">
                        <div class="form-control-position">
                            <i class="fa fa-user-o"></i>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-5">
                <div class="form-group">
                    <label for="first-name-icon">นามสกุล</label>
                    <div class="position-relative has-icon-left">
                        <input type="text" id="first-name-icon" class="form-control" name="contact-icon"
                            placeholder="นามสกุล">
                        <div class="form-control-position">
                            <i class="fa fa-user-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="password-icon">เพศ</label>
                    <select class="form-control" id="basicSelect" onchange="showDiv(this)">
                        <option>เพศ</option>
                        <option value="0">ชาย</option>
                        <option value="1">หญิง</option>
                    </select>
                    <div id="hidden_div" style="display:none;">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="password-icon">กรณีเพศหญิง </label>
                                    <fieldset>
                                        <div class="vs-radio-con">
                                            <input type="radio" name="vueradio" value="false" onclick="womb0();">
                                            <span class="vs-radio">
                                                <span class="vs-radio--border"></span>
                                                <span class="vs-radio--circle"></span>
                                            </span>
                                            <span class="">ตั้งครรภ์</span>
                                        </div>
                                    </fieldset>
                                </div>
                                <br /><br />
                                <div class="col-sm-6">
                                    <fieldset>
                                        <div class="vs-radio-con">
                                            <input type="radio" name="vueradio" value="false" onclick="womb1();">
                                            <span class="vs-radio">
                                                <span class="vs-radio--border"></span>
                                                <span class="vs-radio--circle"></span>
                                            </span>
                                            <span class="">ไม่ได้ตั้งครรภ์</span>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="hidden_womb" style="display:none;">
                        <div class="col-sm-6">
                            <label for="first-name-icon">ครรภ์ที่</label>
                            <div class="position-relative has-icon-left">
                                <input type="text" id="first-name-icon" class="form-control"
                                    name="first-name-icon" placeholder="ครรภ์ที่">
                                <div class="form-control-position">
                                    <i class="fa fa-user-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="first-name-icon">อายุครรภ์</label>
                            <div class="position-relative has-icon-left">
                                <input type="text" id="first-name-icon" class="form-control"
                                    name="first-name-icon" placeholder="อายุครรภ์">
                                <div class="form-control-position">
                                    <i class="fa fa-user-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>


                    <script type="text/javascript">
                        function showDiv(select) {
                            if (select.value == 1) {
                                document.getElementById('hidden_div').style.display = "block";
                            } else {
                                document.getElementById('hidden_div').style.display = "none";
                            }
                        }
                    </script>

                    <script type="text/javascript">
                        function womb0() {
                            document.getElementById('hidden_womb').style.display = 'block';
                        }

                        function womb1() {
                            document.getElementById('hidden_womb').style.display = 'none';
                        }
                    </script>

                </div>
            </div>


            <div class="col-4">
                <div class="form-group">
                    <label for="number-icon">อายุ</label>
                    <div class="position-relative has-icon-left">
                        <input type="number" id="number-icon" class="form-control" name="number-icon"
                            placeholder="อายุ">
                        <div class="form-control-position">
                            <i class="fa fa-calendar-plus-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="text-icon">สัญชาติ</label>
                    <div class="position-relative has-icon-left">
                        <input type="text" id="text-icon" class="form-control" name="contact-icon"
                            placeholder="สัญชาติ">
                        <div class="form-control-position">
                            <i class="fa fa-font-awesome"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="text-icon">อาชีพ</label>
                    <div class="position-relative has-icon-left">
                        <input type="text" id="text-icon" class="form-control" name="contact-icon"
                            placeholder="อาชีพ">
                        <div class="form-control-position">
                            <i class="fa fa-briefcase"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="form-group">
                    <label for="text-icon">สถานที่ทำงาน/สถานศึกษา</label>
                    <div class="position-relative has-icon-left">
                        <input type="text" id="text-icon" class="form-control" name="contact-icon"
                            placeholder="สถานที่ทำงาน/สถานศึกษา">
                        <div class="form-control-position">
                            <i class="fa fa-building-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="number-icon">เบอร์โทรศัพท์ที่ติดต่อได้</label>
                    <div class="position-relative has-icon-left">
                        <input type="number" id="number-icon" class="form-control" name="contact-icon"
                            placeholder="เบอร์โทรศัพท์ที่ติดต่อได้">
                        <div class="form-control-position">
                            <i class="fa fa-mobile"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="text-icon">เบอร์โทรศัพท์ที่ใช้ลงแอปพลิเคชัน "หมอชนะ"</label>
                    <div class="position-relative has-icon-left">
                        <input type="text" id="text-icon" class="form-control" name="contact-icon"
                            placeholder="เบอร์โทรศัพท์ที่ใช้ลงแอปพลิเคชัน 'หมอชนะ'">
                        <div class="form-control-position">
                            <i class="feather icon-tablet"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="text-icon">ที่อยู่ขณะป่วยในประเทศไทย </label>
                    <div class="position-relative has-icon-left">
                        <input type="text" id="text-icon" class="form-control" name="contact-icon"
                            placeholder="ที่อยู่ขณะป่วยในประเทศไทย">
                        <div class="form-control-position">
                            <i class="feather icon-lock"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="text-icon">โรคประจำตัว </label>
                    <div class="position-relative has-icon-left">
                        <input type="text" id="text-icon" class="form-control" name="contact-icon"
                            placeholder="โรคประจำตัว">
                        <div class="form-control-position">
                            <i class="fa fa-user-md"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="password-icon">การสูบบุหรี่ </label>
                    <fieldset class="checkbox">
                        <div class="vs-checkbox-con vs-checkbox-primary">
                            <input type="checkbox">
                            <span class="vs-checkbox">
                                <span class="vs-checkbox--check">
                                    <i class="vs-icon feather icon-check"></i>
                                </span>
                            </span>
                            <span class="">ไม่เคยสูบ</span>
                        </div>
                    </fieldset>
                    <fieldset class="checkbox">
                        <div class="vs-checkbox-con vs-checkbox-primary">
                            <input type="checkbox">
                            <span class="vs-checkbox">
                                <span class="vs-checkbox--check">
                                    <i class="vs-icon feather icon-check"></i>
                                </span>
                            </span>
                            <span class="">ยังคงสูบ</span>
                        </div>
                    </fieldset>
                    <fieldset class="checkbox">
                        <div class="vs-checkbox-con vs-checkbox-primary">
                            <input type="checkbox">
                            <span class="vs-checkbox">
                                <span class="vs-checkbox--check">
                                    <i class="vs-icon feather icon-check"></i>
                                </span>
                            </span>
                            <span class="">เคยสูบแต่เลิกแล้ว</span>
                        </div>
                    </fieldset>
                </div>
            </div>

            {{-- <div class="col-2">
                                                                    <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                                                    <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                                                                </div> --}}
        </div>
    </div>

</fieldset>


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

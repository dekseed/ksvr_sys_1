@extends('layouts.home')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/jquery.datetimepicker.css">
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
                                    <li class="breadcrumb-item"><a href="{{ route('check_up.army_2') }}">KSVR Check Up V.2</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('check_up.army_2') }}">หน่วยงานทหาร</a>
                                    </li>
                                    <li class="breadcrumb-item active"><i class="feather icon-clipboard"></i> แก้ไขข้อมูลส่วนตัว
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">
                {{-- <div class="row">
                    <div class="col-12">
                        <p>Read full documnetation <a href="https://datatables.net/" target="_blank">here</a></p>
                    </div>
                </div> --}}
                <!-- Row grouping -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center mb-2"><i class="feather icon-clipboard"></i> แก้ไขข้อมูลส่วนตัว</h2>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center"><i class="feather icon-user"></i> ข้อมูลส่วนตัว</h4>
                                </div>
                                <div class="card-content">
                                    <form id="store" class="form-horizontal" name="store" action="{{ route('check_up_army_2.update_profile', $data->id)}}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                        <div class="card-body">
                                            <form class="form-horizontal">
                                            <div class="form-body">

                                                <div class="row">
                                                    <div class="col-md-2 col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-icon">คำนำหน้า</label>
                                                            <div class="position-relative has-icon-left">
                                                                <select class="form-control" id="select2-array"
                                                                name="title_name" >
                                                                <option value="">คำนำหน้า</option>
                                                                    @foreach ($titlename as $roles)
                                                                    <option {{ $data->title_name_id == $roles->id ? 'selected' : '' }}
                                                                            value="{{$roles->id}}">{{$roles->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                                <div class="form-control-position">
                                                                    <i class="feather icon-user"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-5 col-12">
                                                        <div class="form-group">
                                                            <label for="first_name">ชื่อหน้า</label>
                                                            <div class="position-relative has-icon-left">
                                                                <input type="text" id="first_name" class="form-control" value="{{ $data->first_name }}"
                                                                 name="first_name">
                                                                <div class="form-control-position">
                                                                    <i class="feather icon-user"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 col-12">
                                                        <div class="form-group">
                                                            <label for="last_name">นามสกุล</label>
                                                            <div class="position-relative has-icon-left">
                                                                <input type="text" id="last_name" class="form-control" value="{{ $data->last_name }}"
                                                                    name="last_name">
                                                                <div class="form-control-position">
                                                                    <i class="feather icon-user"></i>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="cid">เลขที่บัตรประจำตัวประชาชน</label>
                                                            <div class=" position-relative has-icon-left">
                                                                <input type="text" id="cid" class="form-control" value="{{ $data->cid }}" name="cid" >
                                                                <div class="form-control-position">
                                                                    <i class="feather icon-user"></i>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="hn">เลขที่ HN</label>
                                                            <div class=" position-relative has-icon-left">
                                                                <input type="text" id="hn" class="form-control" value="{{ $data->hn }}" name="hn" >
                                                                <div class="form-control-position">
                                                                        <i class="feather icon-user"></i>
                                                                    </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="age">อายุ</label>
                                                            <div class=" position-relative has-icon-left">
                                                            <input type="text" id="age" class="form-control" value="{{ $data->age }}" name="age" disabled>
                                                                <div class="form-control-position">
                                                                    <i class="feather icon-user"></i>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="gender">เพศ</label>
                                                            <div class="position-relative has-icon-left">
                                                                <div class="form-group">
                                                                    <select class="form-control" id="basicSelect" name="gender">
                                                                        <option {{ $data->gender == '1' ? 'selected' : '' }} value="1">ชาย</option>
                                                                        <option {{ $data->gender == '2' ? 'selected' : '' }} value="2">หญิง</option>
                                                                    </select>
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-user"></i>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="birthdate">วันเกิด</label>
                                                            <div class=" position-relative">
                                                                <input class="form-control pickadate-months-year" name="birthdate" value="{{ $data->birthdate }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">หน่วยที่สังกัด</label>
                                                                <div class="form-label-group position-relative has-icon-left">
                                                                    <select class="form-control" id="select2-array"
                                                                    name="kind_check_up_id">
                                                                    <option value="">หน่วยที่สังกัด</option>
                                                                        @foreach ($kindcheckup as $roles)
                                                                        <option {{ $data->kind_check_up_id == $roles->id ? 'selected' : '' }}
                                                                                value="{{$roles->id}}">{{$roles->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <div class="form-control-position">
                                                                            <i class="feather icon-user"></i>
                                                                        </div>
                                                                </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="department">ฝ่าย/แผนก/กอง</label>
                                                            <div class="form-label-group position-relative has-icon-left">
                                                                <input type="text" id="department" class="form-control" value="{{ $data->department }}" name="department" >
                                                                <div class="form-control-position">
                                                                    <i class="feather icon-user"></i>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="position">ตำแหน่ง</label>
                                                            <div class="form-label-group position-relative has-icon-left">
                                                                <input type="text" id="position" class="form-control" value="{{ $data->position }}" name="position" >
                                                                <div class="form-control-position">
                                                                        <i class="feather icon-user"></i>
                                                                    </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="class">ประเภท</label>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <fieldset>
                                                                    <input type="radio" name="class" value="1" onclick="j10_2_2();"
                                                                    @if($data->class == "1") checked="checked" @endif >
                                                                        <label for="input-radio-11">ข้าราชการ</label>
                                                                    </fieldset>
                                                                    <fieldset>
                                                                    <input type="radio" name="class" value="2" onclick="j10_2_2();"
                                                                    @if($data->class == "2") checked="checked" @endif >
                                                                    <label for="input-radio-12">รัฐวิสาหกิจ</label>
                                                                    </fieldset>
                                                                    <fieldset>

                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="radio" name="class" value="3" onclick="j10_2_2();"
                                                                    @if($data->class == "3") checked="checked" @endif >
                                                                    <label for="input-radio-12">ประกันสังคม</label>
                                                                    </fieldset>
                                                                    <fieldset>
                                                                    <input type="radio" name="class" value="4" onclick="j10_2_2();"
                                                                    @if($data->class == "4") checked="checked" @endif >
                                                                    <label for="input-radio-12">สปสช.</label>
                                                                    </fieldset>
                                                                    <fieldset>
                                                                    <input type="radio" name="class" value="5" onclick="j10_2_1();"
                                                                    @if($data->class == "5") checked="checked" @endif >
                                                                    <label for="input-radio-12">อื่นๆ</label>
                                                                        @if($data->class == "5")
                                                                        <div id="div11" style="margin-bottom: .5rem;">
                                                                            <div class="col-md-12">
                                                                                <fieldset>
                                                                                    <div class="input-group">
                                                                                        <div class="input-group-prepend">
                                                                                            <span class="input-group-text">(ระบุ)</span>
                                                                                        </div>
                                                                                        <input type="text" class="form-control" aria-label="" placeholder=""
                                                                                                                name="class_d" id='class_d' value="{{ $data->class_detail }}">
                                                                                    </div>
                                                                                </fieldset>

                                                                            </div>

                                                                        </div>
                                                                        @else
                                                                        <div id="div11" style="display:none;margin-bottom: .5rem;">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <fieldset>
                                                                                        <div class="input-group">
                                                                                            <span class="input-group-text">(ระบุ)</span>
                                                                                            <input type="text" class="form-control" aria-label="" placeholder=""
                                                                                            name="class_d" id='class_d' value="{{ old('class_d') }}">
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        @endif
                                                                    </fieldset>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="job_description">ลักษณะงานที่ทำเป็นส่วนใหญ่</label>
                                                            <div class="col-md-9">
                                                                <fieldset>
                                                                    <input type="radio" name="job_description" value="งานเบา"
                                                                        @if($data->job_description ==  "งานเบา") checked="checked" @endif >
                                                                    <label for="input-radio-11">งานเบา (เคลื่อนไหวขณะทำงานเล็กน้อย เช่น งานสำนักงาน เดินเอกสารระยะสั้นในอาคาร)</label>
                                                                </fieldset>
                                                                <fieldset>
                                                                    <input type="radio" name="job_description" value="งานปานกลาง"
                                                                        @if($data->job_description ==  "งานปานกลาง") checked="checked" @endif >
                                                                    <label for="input-radio-12">งานปานกลาง (เคลื่อนไหว/ออกแรงปานกลาง เช่น งานเดินเอกสารนอกอาคาร ขับรถโดยสารขนาดเล็ก)</label>
                                                                </fieldset>
                                                                <fieldset>
                                                                    <input type="radio" name="job_description" value="งานหนัก"
                                                                        @if($data->job_description ==  "งานหนัก") checked="checked" @endif >
                                                                    <label for="input-radio-12">งานหนัก (เคลื่อนไหว/ออกแรงมาก เช่น งานกลางแจ้ง ขับรถขนาดใหญ่)</label>
                                                                </fieldset>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="phonenumber">เบอร์โทรติดต่อ</label>
                                                            <div class="col-md-9">
                                                                <div class="position-relative has-icon-left controls">
                                                                    <input type="text" id="phone-mask" class="form-control border-primary optional-tele-report" placeholder="เบอร์โทรติดต่อ" name="phonenumber"
                                                                    value="{{ $data->phonenumber }}" data-validation-required-message="กรุณากรอกข้อมูลช่องนี้"
                                                                    aria-invalid="false">
                                                                    <div class="form-control-position">
                                                                        <i class="feather icon-smartphone"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light"><i class="feather icon-edit"></i> บันทึก</button>
                                                        <a class="btn btn-danger mr-1 mb-1 waves-effect waves-light" href="{{ route('check_up_army_2.show', $data->id)}}"><i class="fa fa-times"></i> ยกเลิก</a>
                                                        <a class="btn btn-warning mr-1 mb-1 waves-effect waves-light" href="{{ route('check_up.army_2')}}"><i class="feather icon-monitor"></i> กลับหน้าแรก</a>

                                                    </div>
                                                </div>
                                            </div>
                                            </form>
                                        </div>

                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </section>
                <!-- Row grouping -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

@endsection
@section('scripts')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

         <script src="{{ asset('app-assets') }}/vendors/js/pickers/pickadate/picker.js"></script>
        <script src="{{ asset('app-assets') }}/vendors/js/pickers/pickadate/picker.date.js"></script>
        <script src="{{ asset('app-assets') }}/vendors/js/pickers/pickadate/picker.time.js"></script>
        <script src="{{ asset('app-assets') }}/vendors/js/pickers/pickadate/legacy.js"></script>
        <script src="{{ asset('app-assets') }}/vendors/js/forms/select/select2.full.min.js"></script>
        <script src="{{ asset('app-assets') }}/vendors/js/extensions/jquery.steps.min.js"></script>
        <script src="{{ asset('app-assets') }}/vendors/js/forms/validation/jquery.validate.min.js"></script>

        <script src="{{ asset('app-assets') }}/js/scripts/forms/wizard-steps.js"></script>
        <script src="{{ asset('app-assets') }}/js/scripts/forms/select/form-select2.js"></script>
        <!-- BEGIN: Page JS-->
        <script src="{{ asset('app-assets') }}/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>
        <!-- END: Page JS-->
        <!-- BEGIN: Page JS-->
        <script src="{{ asset('app-assets') }}/js/scripts/forms/validation/form-validation.js"></script>
        <!-- END: Page JS-->

 <script>
function 	CBC1(){
  document.getElementById('div1').style.display = 'block';
}
function 	CBC2(){
  document.getElementById('div1').style.display = 'none';
}
function 	urine1(){
  document.getElementById('div2').style.display = 'block';
}
function 	urine2(){
  document.getElementById('div2').style.display = 'none';
}
 function 	j10_2_1(){
  document.getElementById('div11').style.display = 'block';
}
function 	j10_2_2(){
  document.getElementById('div11').style.display = 'none';
}


 </script>

<script type="text/javascript">
$(function(){

    $.datetimepicker.setLocale('th'); // ต้องกำหนดเสมอถ้าใช้ภาษาไทย และ เป็นปี พ.ศ.

    // กรณีใช้แบบ inline
    $("#testdate4").datetimepicker({
        timepicker:false,
        format:'d-m-Y',  // กำหนดรูปแบบวันที่ ที่ใช้ เป็น 00-00-0000
        lang:'th',  // ต้องกำหนดเสมอถ้าใช้ภาษาไทย และ เป็นปี พ.ศ.
        inline:true
    });


    // กรณีใช้แบบ input
    $("#testdate5").datetimepicker({
        timepicker:false,
        format:'d-m-Y',  // กำหนดรูปแบบวันที่ ที่ใช้ เป็น 00-00-0000
        lang:'th',  // ต้องกำหนดเสมอถ้าใช้ภาษาไทย และ เป็นปี พ.ศ.
        onSelectDate:function(dp,$input){
            var yearT=new Date(dp).getFullYear()-0;
            var yearTH=yearT+543;
            var fulldate=$input.val();
            var fulldateTH=fulldate.replace(yearT,yearTH);
            $input.val(fulldateTH);
        },
    });
    // กรณีใช้กับ input ต้องกำหนดส่วนนี้ด้วยเสมอ เพื่อปรับปีให้เป็น ค.ศ. ก่อนแสดงปฏิทิน
    $("#testdate5").on("mouseenter mouseleave",function(e){
        var dateValue=$(this).val();
        if(dateValue!=""){
                var arr_date=dateValue.split("-"); // ถ้าใช้ตัวแบ่งรูปแบบอื่น ให้เปลี่ยนเป็นตามรูปแบบนั้น
                // ในที่นี้อยู่ในรูปแบบ 00-00-0000 เป็น d-m-Y  แบ่งด่วย - ดังนั้น ตัวแปรที่เป็นปี จะอยู่ใน array
                //  ตัวที่สอง arr_date[2] โดยเริ่มนับจาก 0
                if(e.type=="mouseenter"){
                    var yearT=arr_date[2]-543;
                }
                if(e.type=="mouseleave"){
                    var yearT=parseInt(arr_date[2])+543;
                }
                dateValue=dateValue.replace(arr_date[2],yearT);
                $(this).val(dateValue);
        }
    });


});
</script>
@endsection

@extends('layouts.home')

@section('styles')



    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/file-uploaders/dropzone.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/data-list-view.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/forms/wizard.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/select/select2.min.css">

    {{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}


    <style>

        .autocomplete-content{margin-top:0;margin-bottom:0}
        .input-field .prefix ~ .autocomplete-content{margin-left:3rem;width:92%;width:calc(100% - 3rem)}

        .autocomplete-content li .highlight{color:#444}
        .autocomplete-content li img{height:40px;width:40px;margin:5px 15px}
        .dropdown-content{background-color:#fff;margin:0;display:none;min-width:100px;overflow-y:auto;opacity:0;position:absolute;left:0;top:0;z-index:9999;-webkit-transform-origin:0 0;transform-origin:0 0}.dropdown-content:focus{outline:0}.dropdown-content li{clear:both;color:rgba(0,0,0,0.87);cursor:pointer;min-height:50px;line-height:1.5rem;width:100%;text-align:left}.dropdown-content li:hover,.dropdown-content li.active{background-color:#eee}.dropdown-content li:focus{outline:none}.dropdown-content li.divider{min-height:0;height:1px}.dropdown-content li>a,.dropdown-content li>span{font-size:16px;color:#26a69a;display:block;line-height:22px;padding:14px 16px}.dropdown-content li>span>label{top:1px;left:0;height:18px}.dropdown-content li>a>i{height:inherit;line-height:inherit;float:left;margin:0 24px 0 0;width:24px}body.keyboard-focused .dropdown-content li:focus{background-color:#dadada}.input-field.col .dropdown-content [type="checkbox"]+label{top:1px;left:0;height:18px;-webkit-transform:none;transform:none}.dropdown-trigger{cursor:pointer}
        body.keyboard-focused .select-dropdown.dropdown-content li:focus{background-color:rgba(0,0,0,0.08)}.select-dropdown.dropdown-content li:hover{background-color:rgba(0,0,0,0.08)}.select-dropdown.dropdown-content li.selected{background-color:rgba(0,0,0,0.03)}
    </style>
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
                                    <li class="breadcrumb-item"><a href="{{ route('repair.index') }}">ระบบแจ้งดำเนินงาน แผนกศูนย์คอมพิวเตอร์</a>
                                    </li>
                                    <li class="breadcrumb-item active">เพิ่มข้อมูล
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

                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"><i class="feather icon-file-text"></i> ข้อมูลอุปกรณ์คอมพิวเตอร์</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                            <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <span>หมายเลขทะเบียน</span>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="position-relative has-icon-left">
                                                                        <div class="input-field">
                                                                        <input type="text" id="searchhere_id" class="form-control input1" placeholder="ค้นหา.."
                                                                                    name="search" required>
                                                                        <div class="form-control-position">
                                                                            <i class="feather icon-search"></i>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <span>ชื่ออุปกรณ์</span>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="position-relative has-icon-left">
                                                                    <input type="text" id="name" class="form-control input1" placeholder="ชื่ออุปกรณ์" name="name" required autocomplete="name" disabled>
                                                                        <div class="form-control-position">
                                                                            <i class="feather icon-search"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <span>ยี่ห้อ</span>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="position-relative has-icon-left">
                                                                    <input type="text" id="brand" class="form-control input1" placeholder="ยี่ห้อ" name="brand" required autocomplete="brand" disabled>
                                                                        <div class="form-control-position">
                                                                            <i class="feather icon-search"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <span>รุ่น</span>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="position-relative has-icon-left">
                                                                    <input type="text" id="model" class="form-control input1" placeholder="รุ่น" name="model" required autocomplete="model" disabled>
                                                                    <div class="form-control-position">
                                                                            <i class="feather icon-search"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <span>S/N</span>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="position-relative has-icon-left">
                                                                    <input type="text" id="sn" class="form-control input1" placeholder="s/n" name="sn"  required autocomplete="sn" disabled>
                                                                    <div class="form-control-position">
                                                                            <i class="feather icon-search"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <span>ปีงบประมาณ</span>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <div class="position-relative has-icon-left">
                                                                    <input type="text" id="expenditure" class="form-control input1" placeholder="ปีงบประมาณ" name="expenditure" required disabled>
                                                                    <div class="form-control-position">
                                                                            <i class="feather icon-search"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-1">
                                                                    <span>ปี</span></div>
                                                                <div class="col-md-2">

                                                                    <input type="text" id="year" class="form-control input1" name="year" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <span>ผู้รับผิดชอบ</span>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="position-relative has-icon-left">
                                                                    <input type="text" id="stock_user_id" class="form-control input1" placeholder="ผู้รับผิดชอบ" name="stock_user_id" required disabled>
                                                                    <div class="form-control-position">
                                                                            <i class="feather icon-search"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                        <button class="btn btn-outline-warning waves-effect waves-light" onClick="ClearP();"><i class="feather icon-rotate-cw"></i> ล้างข้อมูล</button>
                                                    </div>

                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">รายละเอียดการซ่อม/ปัญหา</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal" action="{{route('repair.store')}}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id_stock" id="id_stock">

                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <span>ประเภทการดำเนินงาน</span>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="position-relative has-icon-left">
                                                                    <select name="genus" id="genus" class="form-control select2" required>
                                                                        <option value=""><i class="feather icon-filter"></i> ประเภทการดำเนินงาน</option>
                                                                        @foreach($genus as $list)
                                                                        <option value={{$list->id}}>{{$list->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    {{-- <div class="form-control-position">
                                                                            <i class="feather icon-search"></i>
                                                                        </div>--}}
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <div class="table-responsive border rounded px-1">

                                                                        <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-repeat mr-50 "></i>รายละเอียดการซ่อม/ปัญหา</h6>
                                                                        <div class="form-label-group has-icon-left">
                                                                        <textarea class="form-control  mb-1" name="detail" id="basicTextarea" rows="3" placeholder="รายละเอียด.." required></textarea>
                                                                            <div class="form-control-position">
                                                                                <i class="feather icon-repeat"></i>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <label for="email-id-column">อัพโหลดรูป <em>(ถ้ามี)</em></label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="position-relative has-icon-left">
                                                                     <div class="custom-file">
                                                                            <input type="file" name="file" class="custom-file-input" id="inputGroupFile01">
                                                                            <label class="custom-file-label" for="inputGroupFile01"></label>
                                                                        </div>
                                                                    <div class="form-control-position">
                                                                            <i class="feather icon-search"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <label for="email-id-column">หมายเหตุ <em>(ถ้ามี)</em></label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="position-relative has-icon-left">
                                                                    <input type="text" id="note" class="form-control" placeholder="หมายเหตุ (ถ้ามี)" name="note" autocomplete="note">
                                                                    <div class="form-control-position">
                                                                            <i class="feather icon-search"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                        <button type="submit" class="btn btn-primary mr-1 mb-1"><i class="feather icon-plus-circle"></i> ส่งข้อมูล</button>
                                                        <a href="{{ route('repair.index')}}" class="btn btn-outline-warning mr-1 mb-1"><i class="feather icon-x"></i> ยกเลิก</a>
                                                    </div>

                                            </div>
                                        </form>
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
{{-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script type="text/javascript">

function ClearP(){
    var inputs = document.getElementsByClassName("input1");
    for(var i=0;i<inputs.length;i++)
        inputs[i].value = '';
}


// CSRF Token
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    // $(document).ready(function(){

    //   $( "#search" ).autocomplete({
    //     source: function( request, response ) {
    //         // Fetch data
    //         $.ajax({
    //             url: "{{ route('search.repair') }}",
    //             type: "GET",
    //             dataType: "json",
    //             data: {
    //                 _token: CSRF_TOKEN,
    //                 search: request.term
    //             },
    //             success: function( data ) {
    //             response( data );
    //             }
    //         });
    //         },
    //         select: function (event, ui) {
    //         // Set selection

    //         $('#id_stock').val(ui.item.id_stock);
    //         $('#search').val(ui.item.label);
    //         $('#brand').val(ui.item.brand);
    //         $('#category_equipment').val(ui.item.category_equipment);
    //         $('#model').val(ui.item.model);
    //         $('#name').val(ui.item.name);
    //         $('#sn').val(ui.item.sn);
    //         $('#expenditure').val(ui.item.expenditure);
    //         $('#stock_user_id').val(ui.item.stock_user_id);

    //         return false;
    //         }
    //     });

    //     });

        $(document).ready(function(){
           // console.log('test');
            $.ajax({
                type:'get',
                url: "{{ route('search.repair') }}",
                success:function(response){
                   // console.log(response);
                    //material css
                    var custArray = response;
                    var dataCust = {};
                    var dataCust2 = {};
                    for (var i = 0; i < custArray.length; i++) {
                        dataCust[custArray[i].number] = null;
                        dataCust2[custArray[i].number] = custArray[i];
                    }
                   // console.log("dataCust2");
                   // console.log(dataCust2);

                    $('input#searchhere_id').autocomplete({
                        data: dataCust,
                        minLength:2,
                        onAutocomplete:function(reqdata){
                            //console.log(reqdata);
                            $('#id_stock').val(dataCust2[reqdata]['id']);
                            $('#name').val(dataCust2[reqdata]['name']);
                            $('#brand').val(dataCust2[reqdata]['brand']['name']);
                            $('#category_equipment').val(dataCust2[reqdata]['category_equipment']['name']);
                            $('#model').val(dataCust2[reqdata]['model']);
                            $('#sn').val(dataCust2[reqdata]['sn']);
                            $('#expenditure').val(dataCust2[reqdata]['expenditure']);
                            $('#year').val(dataCust2[reqdata]['year']);
                            $('#stock_user_id').val(dataCust2[reqdata]['user_stock']['name']);


                        }
                    })
                }
            })
        });

    </script>

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets') }}/vendors/js/extensions/jquery.steps.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="{{ asset('app-assets') }}/js/scripts/forms/select/form-select2.js"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets') }}/js/scripts/forms/wizard-steps.js"></script>
    <!-- END: Page JS-->


@endsection

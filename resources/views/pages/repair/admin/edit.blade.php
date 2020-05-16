@extends('layouts.home')

@section('styles')
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/file-uploaders/dropzone.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/data-list-view.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/forms/wizard.css">


    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
    <!-- END: Page CSS-->
<style>
    /*  .wrapper {
  position: relative;
  width: 400px;
  height: 200px;
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
           .signature-pad {
                            position: absolute;
                            left: 0;
                            top: 0;
                            width:430px;
                            height:230px;
                            margin-top: 10px;
                            margin-right: 5px;
                            margin-bottom: 5px;
                            margin-left: 10px;
                            padding:10px 10px 10px 10px;
                            border-top: 1px dashed #006ED2;
                            border-bottom: 1px dashed #006ED2;
                            border-right: 1px dashed #006ED2;
                            border-left: 1px dashed #006ED2;
                            background-color: #CCCCCC;
                            } */
        .kbw-signature { width: 430px; height: 230px;}
        #sig canvas{
                            left: 0;
                            top: 0;
                            width:430px;;
                            height:230px;
                            /* margin-top: 10px;
                            margin-right: 5px;
                            margin-bottom: 5px;
                            margin-left: 10px; */
                            padding:10px 10px 10px 10px;
                            border-top: 1px dashed #006ED2;
                            border-bottom: 1px dashed #006ED2;
                            border-right: 1px dashed #006ED2;
                            border-left: 1px dashed #006ED2;
                            background-color: #CCCCCC;
        }
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
                            <h2 class="content-header-title float-left mb-0">ระบบแจ้งซ่อมอุปกรณ์</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">หน้าแรก</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('repair-admin.index') }}">ระบบแจ้งซ่อมอุปกรณ์</a>
                                    </li>
                                    <li class="breadcrumb-item active">ข้อมูลรายการแจ้งซ่อม
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"><i class="feather icon-file-text"></i> ข้อมูลรายการแจ้งซ่อม</h4>
                                </div>

                                <div class="card-content">
                                    <div class="card-body">
                                        @if(Session::has('message'))
                                            <div class="alert alert-primary">
                                                <span class="text-bold-700 font-medium-3 mr-1"><i class="feather icon-check mr-1"></i>{{ Session::get('message') }}</span>
                                            </div>

                                        @endif
                                        <ul class="nav nav-pills nav-justified">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="home-tab" data-toggle="pill" href="#home" aria-expanded="true">ข้อมูลอุปกรณ์</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="profile-tab" data-toggle="pill" href="#profile" aria-expanded="false">ปัญหาที่พบ</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="dropdown1-tab" data-toggle="pill" href="#dropdown1" aria-expanded="false">การแก้ไข</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active mt-1" id="home" aria-labelledby="home-tab" aria-expanded="true">
                                                <hr>
                                               <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <span>หมายเลขทะเบียน</span>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="position-relative has-icon-left">
                                                                    <input type="text" id="search" class="form-control" value="{{ $stocks->stock->number }}" placeholder="ค้นหา.."
                                                                                    name="search" disabled>
                                                                        <div class="form-control-position">
                                                                            <i class="feather icon-search"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <span>ชื่ออุปกรณ์</span>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="position-relative has-icon-left">
                                                                    <input type="text" id="name" class="form-control" placeholder="ยี่ห้อ" name="name"  value="{{ $stocks->stock->name }}" required autocomplete="brand" disabled>
                                                                        <div class="form-control-position">
                                                                            <i class="feather icon-search"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <span>ยี่ห้อ</span>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="position-relative has-icon-left">
                                                                    <input type="text" id="brand" class="form-control" placeholder="ยี่ห้อ" name="brand"  value="{{ $stocks->stock->brand->name }}" required autocomplete="brand" disabled>
                                                                        <div class="form-control-position">
                                                                            <i class="feather icon-search"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <span>รุ่น</span>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="position-relative has-icon-left">
                                                                    <input type="text" id="model" class="form-control" placeholder="รุ่น" name="model"  value="{{ $stocks->stock->model }}" required autocomplete="model" disabled>
                                                                    <div class="form-control-position">
                                                                            <i class="feather icon-search"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <span>S/N</span>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="position-relative has-icon-left">
                                                                    <input type="text" id="sn" class="form-control" placeholder="s/n" name="sn"  value="{{ $stocks->stock->sn }}" required autocomplete="sn" disabled>
                                                                    <div class="form-control-position">
                                                                            <i class="feather icon-search"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <span>ปีงบประมาณ</span>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="position-relative has-icon-left">
                                                                    <input type="text" id="expenditure" class="form-control" placeholder="ปีงบประมาณ" name="expenditure"  value="{{ $stocks->stock->expenditure }} ปี {{$stocks->stock->year}}" required disabled>
                                                                    <div class="form-control-position">
                                                                            <i class="feather icon-search"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <span>หมายเหตุ</span>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="position-relative has-icon-left">
                                                                    <input type="text" id="expenditure" class="form-control" placeholder="หมายเหตุ" name="หมายเหตุ"  value="{{$stocks->stock->detail}}" required disabled>
                                                                    <div class="form-control-position">
                                                                            <i class="feather icon-search"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab" aria-expanded="false">
                                                <hr>
                                               <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <span>ประเภทการซ่อม</span>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="position-relative has-icon-left">
                                                                     <select class="form-control" name="genus" id="genus" disabled>
                                                                        <option value=""><i class="feather icon-filter"></i> ประเภทการซ่อม</option>
                                                                        <option {{ '1' == $stocks->genus ? 'selected' : '' }} value="1">ซอฟต์แวร์</option>
                                                                        <option {{ '2' == $stocks->genus ? 'selected' : '' }} value="2">ฮาร์ดแวร์</option>
                                                                    </select>
                                                                    <div class="form-control-position">
                                                                            <i class="feather icon-search"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <div class="table-responsive border rounded px-1">

                                                                        <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-repeat mr-50 "></i>รายละเอียดการซ่อม/ปัญหา</h6>
                                                                        <div class="form-label-group has-icon-left">
                                                                        <textarea class="form-control  mb-1" name="detail" id="basicTextarea" rows="3" placeholder="รายละเอียด.." disabled>{{$stocks->detail}}</textarea>
                                                                            <div class="form-control-position">
                                                                                <i class="feather icon-repeat"></i>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <label for="email-id-column">หมายเหตุ</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="position-relative has-icon-left">
                                                                    <input type="text" id="note" class="form-control" placeholder="หมายเหตุ (ถ้ามี)" name="note" value="{{$stocks->note}}" required autocomplete="note" disabled>
                                                                    <div class="form-control-position">
                                                                            <i class="feather icon-search"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <span>ผู้แจ้งซ่อม</span>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="position-relative has-icon-left">
                                                                    <input type="text" id="expenditure" class="form-control" placeholder="หมายเหตุ" name="หมายเหตุ"  value="@if($stocks->user_id > 0){{$stocks->user->title_name->name}} {{$stocks->user->name}}@else ไม่มีข้อมูล @endif" required disabled>
                                                                    <div class="form-control-position">
                                                                            <i class="feather icon-search"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <label for="email-id-column">รูปภาพ</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <a href="{{ asset('files/repair/'.$stocks->pic) }}" class="success" target="_blank"><img class="img-fluid card-img-top rounded-sm mb-2" src="{{ asset('files/repair/'.$stocks->pic) }}"></a>
                                                                    {{-- <p class="font-small-3">ไฟล์เดิม {{$stocks->pic}}</p> --}}
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                               </div>
                                            </div>
                                            <div class="tab-pane" id="dropdown1" role="tabpanel" aria-labelledby="dropdown1-tab" aria-expanded="false">
                                                <hr>
                                                <form class="form" action="{{route('repair-admin.store')}}" method="POST" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="repair_id" value="{{$stocks->id}}">
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group row">
                                                                <div class="table-responsive border rounded px-1">

                                                                        <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-repeat mr-50 "></i>รายละเอียดการซ่อม/ปัญหา</h6>
                                                                        <div class="form-label-group has-icon-left">
                                                                        <textarea class="form-control  mb-1" name="detail" id="basicTextarea" rows="3" placeholder="รายละเอียด.."></textarea>
                                                                            <div class="form-control-position">
                                                                                <i class="feather icon-repeat"></i>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <span>สถานะ</span>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="position-relative has-icon-left">
                                                                    <select class="form-control select2" name="status_id" id="data-status">
                                                                        @foreach ($status as $roles)
                                                                        <option value="{{$roles->id}}">{{$roles->name}}</option>
                                                                        @endforeach
                                                                    </select>
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
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <label for="email-id-column">เซ็นต์ชื่อ</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <button type="button"  id="qr-code" class="btn btn-icon btn-warning ml-1 waves-effect waves-light" data-toggle="modal" data-target="#exampleModalCenter"><i class="feather icon-edit"></i> </button>
                                                                 <!-- Modal -->
                                                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                        <div class="modal-content">


                                                                            <div class="modal-body text-center">
                                                                                {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">×</span>
                                                                                </button> --}}
                                                                                {{-- <canvas id="signature-pad" class="signature-pad" width=430 height=230></canvas> --}}
                                                                                <div id="sig" ></div>
                                                                                <textarea id="signature64" name="signed" style="display: none"></textarea>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="buttom" class="btn btn-primary waves-effect waves-light" data-dismiss="modal">บันทึก</button>
                                                                                <button type="buttom" class="btn btn-success waves-effect waves-light" id="clear">ล้าง</button>
                                                                                <button type="button" class="btn btn-info mr-1 waves-effect waves-light" data-dismiss="modal">ปิด</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                        <button type="submit" class="btn btn-primary mr-1 mb-1"><i class="feather icon-plus-circle"></i> บันทึกข้อมูล</button>
                                                        <a href="{{ route('repair-admin.index')}}" class="btn btn-outline-warning mr-1 mb-1">ยกเลิก</a>
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
                <!-- // Basic Floating Label Form section end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->


@endsection
@section('scripts')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
    <script>
        var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
            $('#clear').click(function(e) {
                e.preventDefault();
                sig.signature('clear');
                $("#signature64").val('');
            });

        // var signaturePad = new SignaturePad(document.getElementById('signature-pad'), {
        // backgroundColor: 'rgba(255, 255, 255, 0)',
        // penColor: 'rgb(0, 0, 0)'
        // });
        // var saveButton = document.getElementById('save');
        // var cancelButton = document.getElementById('clear');

        // saveButton.addEventListener('click', function (event) {
        // var data = signaturePad.toDataURL('image/png');

        // // Send data to server instead...
        // // window.open(data);

        // });
        // $.ajax({
        //           url: "{{ url('/signature/post') }}",
        //           method: 'post',
        //           data: {
        //              signature: signaturePad.toDataURL('image/png'),
        //           },
        //           success: function(result){
        //              jQuery('.alert').show();
        //              jQuery('.alert').html(result.success);
        //           }});
        //        });
        // cancelButton.addEventListener('click', function (event) {
        // signaturePad.clear();
        // });
</script>
    <script type="text/javascript">

    $( function() {


    $( "#search" ).autocomplete({
            source: function( request, response ) {
            // Fetch data
            $.ajax({
                url: "{{ route('search.repair') }}",
                type: 'GET',
                dataType: "json",
                data: {
                search: request.term
                },
                success: function( data ) {
                response( data );
                }
            });
            },
            select: function (event, ui) {
            // Set selection

            $('#id_stock').val(ui.item.id_stock);
            $('#search').val(ui.item.label);
            $('#brand').val(ui.item.brand);
            $('#category_equipment').val(ui.item.category_equipment);
            $('#model').val(ui.item.model);
            $('#name').val(ui.item.name);
            $('#sn').val(ui.item.sn);
            $('#expenditure').val(ui.item.expenditure);

            return false;
            }
        });

        });


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

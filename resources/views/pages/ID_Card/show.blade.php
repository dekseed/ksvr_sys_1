@extends('layouts.home')

@section('styles')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/file-uploaders/dropzone.css">
   <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/data-list-view.css">
   <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/forms/wizard.css">
   <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
   <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/jquery.signature.package-1.2.1/css/jquery.signature.css">
   <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/select/select2.min.css">
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
                            <h2 class="content-header-title float-left mb-0"><i class="feather icon-monitor"></i> ระบบแจ้งทำบัตรประจำตัว</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">หน้าหลัก</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">ระบบงานแผนกศูนย์คอมพิวเตอร์</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('ID_Card.index') }}">ระบบแจ้งทำบัตรประจำตัว</a>
                                    </li>
                                    <li class="breadcrumb-item active">ข้อมูลแจ้งทำบัตรประจำตัว
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">ข้อมูลแจ้งทำบัตรประจำตัว</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <span>หมวดหมู่</span>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <select class="select2 form-control" name="cate_idCard" disabled>
                                                                <option value="">หมวดหมู่</option>
                                                                @foreach ($cate_idCard as $roles)
                                                                <option {{ $data_idCard->iDCard->cate_i_d_cards_id == $roles->id ? 'selected' : '' }}
                                                                        value="{{$roles->id}}">{{$roles->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <span>ประเภทบัตร</span>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <select class="select2 form-control" name="cate_Status" disabled>
                                                                <option value="">ประเภท</option>
                                                                @foreach ($cate_Status as $roles)
                                                                <option {{ $data_idCard->iDCard->cate_status_i_d_cards_id == $roles->id ? 'selected' : '' }}
                                                                        value="{{$roles->id}}">{{$roles->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <span>คำนำหน้า (ภาษาไทย)</span>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <select class="select2 form-control" data-validation-required-message="เลือกคำนำหน้า" name="title_name_id"  disabled>
                                                                <option value="">คำนำหน้า (ภาษาไทย)</option>
                                                                @foreach ($titleNames as $roles)
                                                                <option {{ $data_idCard->iDCard->title_name_id == $roles->id ? 'selected' : '' }}
                                                                        value="{{$roles->id}}">{{$roles->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <span>ชื่อหน้า</span>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="last_name" class="form-control" value="{{ $data_idCard->iDCard->first_name_thai }}" disabled>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <span>นามสกุล</span>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="last_name" class="form-control" value="{{ $data_idCard->iDCard->last_name_thai }}" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <span>คำนำหน้า (ภาษาอังกฤษ)</span>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <select class="select2 form-control" data-validation-required-message="เลือกคำนำหน้า" name="title_name_id"  disabled>
                                                                <option value="">คำนำหน้า (ภาษาไทย)</option>
                                                                @foreach ($titleNames as $roles)
                                                                <option {{ $data_idCard->iDCard->title_name_id == $roles->id ? 'selected' : '' }}
                                                                        value="{{$roles->id}}">{{$roles->name_eng}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <span>ชื่อหน้า (ภาษาอังกฤษ)</span>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="first_name_eng" class="form-control" value="{{ $data_idCard->iDCard->first_name_eng }}" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <span>ชื่อหน้า (ภาษาอังกฤษ)</span>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="last_name_eng" class="form-control" value="{{ $data_idCard->iDCard->last_name_eng }}" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <span>ตำแหน่ง</span>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="text" name="position" class="form-control" value="{{ $data_idCard->iDCard->position }}" disabled>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">การดำเนินงาน</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" action="{{route('ID_Card.update', $data_idCard->id)}}" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}
                                            <input type="hidden" name="receive_timeline_id_cards_id" value="{{$data_idCard->receive_timeline_id_cards_id}}">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        @if($data_idCard->iDCard->new_pic == '1')
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>ถ่ายรูปใหม่</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <fieldset class="checkbox">
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" name="new_pic" value="1" {{ $data_idCard->iDCard->new_pic == '1' ? 'checked' : ''}} disabled>
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class=""> ถ่ายรูปใหม่</span>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>สถานะ</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                <select class="form-control" name="status_id" onchange="showDiv(this)" id="data-status">
                                                                    @foreach ($status_idCard as $roles)
                                                                    <option {{ $roles->id == $data_idCard->status_i_d_cards_id ? 'selected' : '' }} value="{{$roles->id}}">{{$roles->name}}</option>
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
                                                        @if($data_idCard->receive_signed_id_cards_id == '0')
                                                        <div id="hidden_div_1" style="display:none;">
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <label for="email-id-column">ชื่อผู้รับ</label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="position-relative has-icon-left">
                                                                        <select class="form-control select2" name="user_receive_id">
                                                                            @foreach ($user as $roles)
                                                                            <option {{ $roles->id == $data_idCard->status_i_d_cards_id ? 'selected' : '' }} value="{{$roles->id}}">{{$roles->title_name->name}}{{$roles->first_name}} {{$roles->last_name}}</option>
                                                                            @endforeach
                                                                        </select>

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
                                                                                    <button type="button" class="btn btn-info waves-effect waves-light" data-dismiss="modal">ปิด</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    {{-- <button type="button"  id="qr-code" class="btn btn-icon btn-warning ml-1 waves-effect waves-light" data-toggle="modal" data-target="#exampleModalCenter"><i class="feather icon-edit"></i> </button>
                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-body text-center">
                                                                                    <img src="{{ asset('files') }}/repair/{{$repair->signed}}" class="img-fluid">
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-info mr-1 mb-1 waves-effect waves-light" data-dismiss="modal">ปิด</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div> --}}

                                                                </div>
                                                            </div>
                                                        </div>
                                                        @else
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <label for="email-id-column">ชื่อผู้รับ</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="position-relative has-icon-left">
                                                                    <select class="form-control select2" name="user_receive_id" disabled>
                                                                        @foreach ($user as $roles)
                                                                        <option {{ $roles->id == $data_idCard->receive_signed->users_id ? 'selected' : '' }} value="{{$roles->id}}">{{$roles->title_name->name}}{{$roles->first_name}} {{$roles->last_name}}</option>
                                                                        @endforeach
                                                                    </select>

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
                                                                                <img src="{{ asset('files') }}/repair/{{$data_idCard->receive_signed->signed}}" class="img-fluid">
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-info mr-1 mb-1 waves-effect waves-light" data-dismiss="modal">ปิด</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                <button class="btn btn-primary btn-print mb-1 mb-md-0"> <i class="feather icon-file-text"></i> Print</button>

                                                <button type="submit" class="btn btn-primary mr-1 mb-1"><i class="feather icon-plus-circle"></i> ส่งข้อมูล</button>
                                                <a href="{{ route('ID_Card.index')}}" class="btn btn-outline-warning mr-1 mb-1"><i class="fa fa-arrow-circle-left m-r-10"></i> กลับ</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->


@endsection
@section('scripts')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="{{ asset('app-assets') }}/jquery.signature.package-1.2.1/js/jquery.signature.js"></script>
        <script>
            var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
                $('#clear').click(function(e) {
                    e.preventDefault();
                    sig.signature('clear');
                    $("#signature64").val('');
                });

            function showDiv(select){
                if(select.value==5){
                    document.getElementById('hidden_div_1').style.display = "block";

                } else{
                    document.getElementById('hidden_div_1').style.display = "none";
                }
            }
    </script>

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets') }}/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/extensions/jquery.steps.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets') }}/js/scripts/forms/wizard-steps.js"></script>
    <!-- END: Page JS-->
    <script>
        var touchspinValue = $(".touchspin-min-max"),
        counterMin = 1,
        counterMax = 5;
        if (touchspinValue.length > 0) {
            touchspinValue.TouchSpin({
            min: counterMin,
            max: counterMax
            }).on('touchspin.on.startdownspin', function () {
            var $this = $(this);
            $('.bootstrap-touchspin-up').removeClass("disabled-max-min");
            if ($this.val() == counterMin) {
                $(this).siblings().find('.bootstrap-touchspin-down').addClass("disabled-max-min");
            }
            }).on('touchspin.on.startupspin', function () {
            var $this = $(this);
            $('.bootstrap-touchspin-down').removeClass("disabled-max-min");
            if ($this.val() == counterMax) {
                $(this).siblings().find('.bootstrap-touchspin-up').addClass("disabled-max-min");
            }
            });
        }
    </script>
         <script src="{{ asset('app-assets') }}/vendors/js/forms/select/select2.full.min.js"></script>
         <script src="{{ asset('app-assets') }}/js/scripts/forms/select/form-select2.js"></script>
@endsection

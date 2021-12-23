@extends('layouts.home')

@section('styles')
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
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
                                    <li class="breadcrumb-item"><a href="#">ระบบงานแผนกศูนย์คอมพิวเตอร์</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('repair.index') }}">ระบบแจ้งดำเนินงาน แผนกศูนย์คอมพิวเตอร์</a>
                                    </li>
                                    <li class="breadcrumb-item active">รายละเอียดข้อมูลรายการแจ้งดำเนินงาน
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
                                    @if($stocks->status_id == '1')
                                    <h4 class="card-title"><i class="feather icon-file-text"></i> แก้ไขข้อมูลรายการแจ้งดำเนินงาน</h4>
                                     @else
                                     <h4 class="card-title"><i class="feather icon-file-text"></i> ข้อมูลรายการแจ้งดำเนินงาน</h4>
                                     @endif
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        @if(Session::has('message'))
                                            <div class="alert alert-primary">
                                                <span class="text-bold-700 font-medium-3 mr-1"><i class="feather icon-check mr-1"></i>{{ Session::get('message') }}</span>
                                            </div>

                                        @endif
                                        @if($stocks->status_id == '1')
                                            @if($stocks->genus_repairs_id == '5')
                                                <div class="form-body">

                                                    <form class="form" action="{{route('repair.update', $stocks->id)}}" method="POST" enctype="multipart/form-data">
                                                        {{ method_field('PUT') }}
                                                        {{ csrf_field() }}

                                                        <input type="hidden" name="id_stock" id="id_stock">
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

                                                            </div>

                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group row">
                                                                    <div class="col-md-4">
                                                                        <span>ประเภทการดำเนินงาน</span>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative has-icon-left">
                                                                        <select class="form-control" name="genus" id="genus" onchange="showDiv(this)" required>

                                                                            {{-- <option {{ '1' == $stocks->genus ? 'selected' : '' }} value="1">ซอฟต์แวร์</option>
                                                                            <option {{ '2' == $stocks->genus ? 'selected' : '' }} value="2">ฮาร์ดแวร์</option> --}}
                                                                            @foreach($genus as $list)
                                                                            <option {{ $list->id == $stocks->genus_repairs_id ? 'selected' : '' }} value="{{$list->id}}">{{$list->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        <div class="form-control-position">
                                                                                <i class="feather icon-search"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div id="model_cartridge_ink" class="form-group row" style="display:block;">
                                                                    <div class="col-md-4">
                                                                        <span>จำนวน</span>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative has-icon-left">
                                                                            <div class="input-group">
                                                                                <input type="number" class="touchspin-min-max" name="model_cartridge_ink" value="{{ $stocks->model_cartridge_quantity }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div id="hidden_div" class="form-group row" style="display:none;">
                                                                    <div class="table-responsive border rounded px-1">

                                                                            <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-repeat mr-50 "></i>รายละเอียดการซ่อม/ปัญหา</h6>
                                                                            <div class="form-label-group has-icon-left">
                                                                            <textarea class="form-control  mb-1" name="detail" id="basicTextarea" rows="3" placeholder="รายละเอียด.." >{{ $stocks->detail }}</textarea>
                                                                                <div class="form-control-position">
                                                                                    <i class="feather icon-repeat"></i>
                                                                                </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="hidden_div_1" class="form-group row" style="display:none;">
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
                                                                                <i class="feather icon-image"></i>
                                                                            </div>

                                                                        </div>
                                                                        <p class="font-small-3"><a href="{{ asset('files/repair/'.$stocks->pic) }}" class="success" data-toggle="modal" data-target="#exampleModalCenter">ไฟล์เดิม {{$stocks->pic}}</a></p>
                                                                        <!-- Modal -->
                                                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                                                                            <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-body text-center">
                                                                                        <img class="img-fluid card-img-top rounded-sm mb-2" src="{{ asset('files/repair/'.$stocks->pic) }}">
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-info mr-1 mb-1 waves-effect waves-light" data-dismiss="modal">ปิด</button>
                                                                                    </div>
                                                                                </div>
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
                                                            <button type="submit" class="btn btn-primary mr-1 mb-1"><i class="feather icon-plus-circle"></i> แก้ไขข้อมูล</button>

                                                            <a class="btn btn-danger mr-1 mb-1 waves-effect waves-light" data-href="{{ route('repair.destroy', $stocks->id)}}"
                                                                data-toggle="modal" data-target="#default<?= $stocks->id ?>"><i class="feather icon-trash"></i> ลบข้อมูล</a>
                                                            <a href="{{ route('repair.index')}}" class="btn btn-outline-warning mr-1 mb-1"><i class="feather icon-x"></i> ยกเลิก</a>
                                                        </div>
                                                    </form>
                                                    <div class="modal fade" id="default<?= $stocks->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <form id="delete" name="delete" action="{{ route('repair.destroy', $stocks->id)}}" method="POST">
                                                                    {{ csrf_field() }}
                                                                    {{ method_field('DELETE') }}
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="myModalLabel1">ลบข้อมูล</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <h5>คุณต้องการลบรายการแจ้งเปลี่ยนตลับหมึก <br>หมายเลขเครื่อง {{$stocks->stock->number}} ใช่หรือไม่?</h5>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn grey mr-1 mb-1 btn-outline-secondary ok_button" data-dismiss="modal"><i class="feather icon-arrow-left"></i> ยกเลิก</button>
                                                                        <button type="submit" class="btn danger mr-1 mb-1 waves-effect waves-light" ><i class="feather icon-trash"></i> ลบข้อมูล</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            @else

                                                <div class="form-body">

                                                    <form class="form" action="{{route('repair.update', $stocks->id)}}" method="POST" enctype="multipart/form-data">
                                                        {{ method_field('PUT') }}
                                                        {{ csrf_field() }}

                                                        <input type="hidden" name="id_stock" id="id_stock">
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

                                                            </div>

                                                            <div class="col-12 col-sm-6">

                                                                <div class="form-group row">
                                                                    <div class="col-md-4">
                                                                        <span>ประเภทการดำเนินงาน</span>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative has-icon-left">
                                                                        <select class="form-control" name="genus" id="genus" onchange="showDiv(this)" required>

                                                                            {{-- <option {{ '1' == $stocks->genus ? 'selected' : '' }} value="1">ซอฟต์แวร์</option>
                                                                            <option {{ '2' == $stocks->genus ? 'selected' : '' }} value="2">ฮาร์ดแวร์</option> --}}
                                                                            {{-- @foreach($genus as $list)
                                                                            <option {{ $list->id == $stocks->genus_repairs_id ? 'selected' : '' }} value="{{$list->id}}">{{$list->name}}</option>
                                                                            @endforeach --}}

                                                                            <option value="1" {{ '1' == $stocks->genus_repairs_id ? 'selected' : '' }}>ฮาร์ดแวร์ (อุปกรณ์คอมฯ)</option>
                                                                            <option value="2" {{ '2' == $stocks->genus_repairs_id ? 'selected' : '' }}>ซอฟต์แวร์ (โปรแกรม)</option>
                                                                            <option value="3" {{ '3' == $stocks->genus_repairs_id ? 'selected' : '' }}>เน็ตเวิร์ค/อินเตอร์เน็ต</option>
                                                                            <option value="4" {{ '4' == $stocks->genus_repairs_id ? 'selected' : '' }}>ระบบ HosXp</option>
                                                                            @if ($stocks->stock->name == 'เครื่องปริ้นเตอร์')
                                                                            <option value="5" {{ '5' == $stocks->genus_repairs_id ? 'selected' : '' }}>เปลี่ยนตลับหมึก</option>
                                                                            @endif
                                                                        </select>
                                                                        <div class="form-control-position">
                                                                                <i class="feather icon-search"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="model_cartridge_ink" class="form-group row" style="display:none;">
                                                                    <div class="col-md-4">
                                                                        <span>จำนวน</span>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative has-icon-left">
                                                                            <div class="input-group">
                                                                                <input type="number" class="touchspin-min-max" name="model_cartridge_ink" value="{{ $stocks->model_cartridge_quantity }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div id="hidden_div" class="form-group row" style="display:block;">
                                                                    <div class="table-responsive border rounded px-1">

                                                                            <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-repeat mr-50 "></i>รายละเอียดการซ่อม/ปัญหา</h6>
                                                                            <div class="form-label-group has-icon-left">
                                                                            <textarea class="form-control  mb-1" name="detail" id="basicTextarea" rows="3" placeholder="รายละเอียด.." >{{ $stocks->detail }}</textarea>
                                                                                <div class="form-control-position">
                                                                                    <i class="feather icon-repeat"></i>
                                                                                </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="hidden_div_1" class="form-group row" style="display:block;">
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
                                                                                <i class="feather icon-image"></i>
                                                                            </div>

                                                                        </div>
                                                                        <p class="font-small-3"><a href="{{ asset('files/repair/'.$stocks->pic) }}" class="success" data-toggle="modal" data-target="#exampleModalCenter">ไฟล์เดิม {{$stocks->pic}}</a></p>
                                                                        <!-- Modal -->
                                                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                                                                            <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-body text-center">
                                                                                        <img class="img-fluid card-img-top rounded-sm mb-2" src="{{ asset('files/repair/'.$stocks->pic) }}">
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-info mr-1 mb-1 waves-effect waves-light" data-dismiss="modal">ปิด</button>
                                                                                    </div>
                                                                                </div>
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
                                                                        <input type="text" id="note" class="form-control" placeholder="หมายเหตุ (ถ้ามี)" name="note" value="{{$stocks->note}}" >
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
                                                            <button type="submit" class="btn btn-primary mr-1 mb-1"><i class="feather icon-plus-circle"></i> แก้ไขข้อมูล</button>
                                                            <a class="btn btn-danger mr-1 mb-1 waves-effect waves-light" data-href="{{ route('repair.destroy', $stocks->id)}}"
                                                                data-toggle="modal" data-target="#default<?= $stocks->id ?>"><i class="feather icon-trash"></i> ลบข้อมูล</a>
                                                            <a href="{{ route('repair.index')}}" class="btn btn-outline-warning mr-1 mb-1"><i class="feather icon-x"></i> ยกเลิก</a>

                                                        </div>
                                                    </form>
                                                    <div class="modal fade" id="default<?= $stocks->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <form id="delete" name="delete" action="{{ route('repair.destroy', $stocks->id)}}" method="POST">
                                                                    {{ csrf_field() }}
                                                                    {{ method_field('DELETE') }}
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="myModalLabel1">ลบข้อมูล</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <h5>คุณต้องการลบรายการแจ้งเปลี่ยนตลับหมึก <br>หมายเลขเครื่อง {{$stocks->stock->number}} ใช่หรือไม่?</h5>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn grey mr-1 mb-1 btn-outline-secondary ok_button" data-dismiss="modal"><i class="feather icon-arrow-left"></i> ยกเลิก</button>
                                                                        <button type="submit" class="btn danger mr-1 mb-1 waves-effect waves-light" ><i class="feather icon-trash"></i> ลบข้อมูล</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            @endif
                                        @else
                                            <div class="form-body">

                                                <form class="form" action="{{route('repair.update', $stocks->id)}}" method="POST" enctype="multipart/form-data">
                                                    {{ method_field('PUT') }}
                                                    {{ csrf_field() }}

                                                    <input type="hidden" name="id_stock" id="id_stock">
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
                                                                    <input type="text" id="expenditure" class="form-control" placeholder="ปีงบประมาณ" name="expenditure"  value="{{ $stocks->stock->expenditure }} ปี {{$stocks->stock->year}}" disabled>
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
                                                                    <span>ประเภทการซ่อม</span>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="position-relative has-icon-left">
                                                                     <select class="form-control" name="genus" id="genus" disabled>
                                                                        {{-- <option value=""><i class="feather icon-filter"></i> ประเภทการซ่อม</option>
                                                                        <option {{ '1' == $stocks->genus ? 'selected' : '' }} value="1">ซอฟต์แวร์</option>
                                                                        <option {{ '2' == $stocks->genus ? 'selected' : '' }} value="2">ฮาร์ดแวร์</option> --}}
                                                                        @foreach($genus as $list)
                                                                        <option value={{$list->id}} {{ $list == $stocks->genus ? 'selected' : '' }}>{{$list->name}}</option>
                                                                        @endforeach
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
                                                                    <label for="email-id-column">อัพโหลดรูป <em>(ถ้ามี)</em></label>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <button type="button"  id="qr-code" class="btn btn-icon btn-warning ml-1 waves-effect waves-light" data-toggle="modal" data-target="#exampleModalCenter"><i class="feather icon-image"></i> </button>

                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-body text-center">
                                                                                    <img class="img-fluid card-img-top rounded-sm mb-2" src="{{ asset('files/repair/'.$stocks->pic) }}">
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-info mr-1 mb-1 waves-effect waves-light" data-dismiss="modal">ปิด</button>
                                                                                </div>
                                                                            </div>
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
                                                                    <input type="text" id="note" class="form-control" placeholder="หมายเหตุ (ถ้ามี)" name="note" value="{{$stocks->note}}" required autocomplete="note" disabled>
                                                                    <div class="form-control-position">
                                                                            <i class="feather icon-search"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    @if(is_null($repair->detail))
                                                    <hr>
                                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                        <a href="{{ route('repair.index')}}" class="btn btn-outline-warning mr-1 mb-1"><i class="fa fa-arrow-circle-left m-r-10"></i> กลับ</a>
                                                    </div>
                                                    @endif
                                                </form>
                                            </div>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(!empty($repair->detail))
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"><i class="feather icon-file-text"></i> รายละเอียดการดำเนินงาน</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                            <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group row">
                                                                <div class="table-responsive border rounded px-1">

                                                                        <h6 class="border-bottom py-1 mx-1 mb-1 font-medium-2"><i class="feather icon-repeat mr-50 "></i>รายละเอียดการดำเนินงาน</h6>
                                                                        <div class="form-label-group has-icon-left">
                                                                        <textarea class="form-control  mb-1" name="detail" id="basicTextarea" rows="3" placeholder="รายละเอียด.." disabled>{{$repair->detail}}</textarea>
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
                                                                    <select class="form-control select2" name="status_id" id="data-status" disabled>
                                                                        @foreach ($status as $roles)
                                                                        <option {{ $roles->id == $stocks->status_id ? 'selected' : '' }} value="{{$roles->id}}">{{$roles->name}}</option>
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
                                                                        <input type="text" id="note" class="form-control" placeholder="หมายเหตุ (ถ้ามี)" name="note" value="{{$repair->note}}" autocomplete="note" disabled>
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

                                                                    @if($repair->signed == 'ยังไม่มีข้อมูล')

                                                                    <button type="button"  id="qr-code" class="btn btn-icon btn-warning ml-1 waves-effect waves-light" data-toggle="modal" data-target="#exampleModalCenter1"><i class="feather icon-edit"></i> </button>
                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
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
                                                                                    <button type="buttom" class="btn btn-primary mr-1 waves-effect waves-light" data-dismiss="modal">บันทึก</button>
                                                                                    <button type="buttom" class="btn btn-success waves-effect waves-light" id="clear">ล้าง</button>
                                                                                    {{-- <button type="button" class="btn btn-info mr-1 mb-1 waves-effect waves-light" data-dismiss="modal">ปิด</button> --}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @else

                                                                    <button type="button"  id="qr-code" class="btn btn-icon btn-warning ml-1 waves-effect waves-light" data-toggle="modal" data-target="#exampleModalCenter2"><i class="feather icon-image"></i> </button>
                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
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
                                                                    </div>
                                                                    @endif

                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <hr>
                                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                        <a href="{{ route('repair.index')}}" class="btn btn-outline-warning mr-1 mb-1"><i class="fa fa-arrow-circle-left m-r-10"></i> กลับ</a>
                                                    </div>
                                            </div>
                                    </div>
                                </div>
                        </div>
                        @endif
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

            $('#id_stock').val(ui.item.id);
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

    @if($stocks->genus_repairs_id == '5')
        <script>
            function showDiv(select){
                if(select.value!=5){
                    document.getElementById('hidden_div').style.display = "block";
                    document.getElementById('hidden_div_1').style.display = "block";
                    document.getElementById('model_cartridge_ink').style.display = "none";

                } else{
                    document.getElementById('hidden_div').style.display = "none";
                    document.getElementById('hidden_div_1').style.display = "none";
                    document.getElementById('model_cartridge_ink').style.display = "block";
                }
            }
        </script>

    @else
        <script>
            function showDiv(select){
            if(select.value==5){
                document.getElementById('hidden_div').style.display = "none";
                document.getElementById('hidden_div_1').style.display = "none";
                document.getElementById('model_cartridge_ink').style.display = "block";

            } else{
                document.getElementById('hidden_div').style.display = "block";
                document.getElementById('hidden_div_1').style.display = "block";
                document.getElementById('model_cartridge_ink').style.display = "none";
            }
        }
        </script>
    @endif

<script src="{{ asset('app-assets') }}/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
    <!-- BEGIN: Page Vendor JS-->
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

@endsection

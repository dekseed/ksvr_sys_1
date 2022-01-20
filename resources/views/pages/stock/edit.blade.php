@extends('layouts.home')

@section('styles')
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
                            <h2 class="content-header-title float-left mb-0"><i class="feather icon-inbox"></i> ระบบบันทึกข้อมูลครุภัณฑ์</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">หน้าแรก</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard_stock') }}">ระบบบันทึกข้อมูลคลังแผนกศูนย์คอมฯ</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('schedule.index') }}">ครุภัณฑ์</a>
                                    </li>
                                    <li class="breadcrumb-item active">แก้ไขรายการ
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
                                    <h4 class="card-title"><i class="feather icon-edit-1"></i> แก้ไขรายการ</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" class="form form-vertical" id="update" action="{{ route('schedule.update', $stocks->id) }}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}

                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <label for="data-category"> หมวดหมู่ </label>
                                                        <div class="form-label-group">
                                                            <select id="projectinput6" name="cate_equipments" class="form-control"  placeholder="เลือกหมวดหมู่" required>
                                                                @foreach ($cateEquipments as $roles)
                                                                <option value="{{$roles->id}}" {{ $roles->id == $stocks->category_equipments_id ? 'selected' : '' }}>{{$roles->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <label for="data-status"> ประเภท </label>
                                                        <div class="form-label-group">
                                                            <select class="form-control" name="kinds" id="data-status"  onchange="yesnoCheck(this);">
                                                                @foreach ($kinds as $roles)
                                                                <option value="{{$roles->id}}" {{ $roles->id == $stocks->stock_kinds_id ? 'selected' : '' }}>{{$roles->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    @if($stocks->model_cartridge_inks_id > '0')

                                                        <div class="col-md-6 col-12 mb-1" id="ifYes">
                                                            <label for="data-status"> ประเภท </label>
                                                            <select class="form-control select2" name="model_cartridge" onchange="yesnoCheck1(this);">

                                                                <option value="0">เลือกประเภท</option>
                                                                <option value="1" {{ '1' < $stocks->model_cartridge_inks_id ? 'selected' : '' }}>ตลับหมึก</option>
                                                                <option value="2">น้ำหมึก</option>
                                                            </select>

                                                        </div>


                                                        <div class="col-md-6 col-12 mb-1" id="ifYes1">
                                                            <label for="data-status"> รุ่นตลับหมีก </label>
                                                            <select class="form-control select2" name="model_cartridge_inks_id">

                                                                <option value="">เลือกรุ่นตลับหมึก</option>
                                                                 @foreach ($modelcartridge_ as $roles)
                                                                 <option value="{{$roles->id}}" {{ $roles->id == $stocks->model_cartridge_inks_id ? 'selected' : '' }}>{{$roles->name}}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>

                                                    @elseif($stocks->stock_kinds_id == '13')

                                                        <div class="col-md-6 col-12 mb-1" id="ifYes">
                                                            <label for="data-status"> ประเภท </label>
                                                            <select class="form-control select2" name="model_cartridge" onchange="yesnoCheck1(this);">

                                                                <option value="0">เลือกประเภท</option>
                                                                <option value="1">ตลับหมึก</option>
                                                                <option value="2">น้ำหมึก</option>
                                                            </select>

                                                        </div>


                                                        <div class="col-md-6 col-12 mb-1" id="ifYes1" style="display: none;">
                                                            <label for="data-status"> รุ่นตลับหมีก </label>
                                                            <select class="form-control select2" name="model_cartridge_inks_id">

                                                                <option value="">เลือกรุ่นตลับหมึก</option>
                                                                 @foreach ($modelcartridge_ as $roles)
                                                                 <option value="{{$roles->id}}">{{$roles->name}}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>


                                                    @else

                                                    <div id="ifYes" style="display: none;">

                                                        <div class="col-md-6 col-12">
                                                            <label for="data-status"> ประเภท </label>
                                                            <select class="form-control select2" name="model_cartridge" onchange="yesnoCheck1(this);">

                                                                <option value="0">เลือกประเภท</option>
                                                                <option value="1">ตลับหมึก</option>
                                                                <option value="2">น้ำหมึก</option>
                                                            </select>

                                                        </div>

                                                    </div>
                                                    <div id="ifYes1" style="display: none;">

                                                        <div class="col-md-6 col-12">
                                                            <label for="data-status"> รุ่นตลับหมีก </label>
                                                            <select class="form-control select2" name="model_cartridge_inks_id">

                                                                <option value="">เลือกรุ่นตลับหมึก</option>
                                                                 @foreach ($modelcartridge_ as $roles)
                                                                 <option value="{{$roles->id}}">{{$roles->name}}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>

                                                    </div>
                                                    @endif

                                                    <div class="col-md-6 col-12">
                                                        <label for="number">หมายเลขเครื่อง / เลขทะเบียน</label>
                                                        <div class="form-label-group">
                                                            <input type="text" class="form-control" id="number" name="number" placeholder="12345678" value="{{$stocks->number}}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <label for="name">ชื่ออุปกรณ์</label>
                                                        <div class="form-label-group">
                                                            <input type="text" class="form-control" id="name" name="name" placeholder="" value="{{$stocks->name}}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <label for="brand">ยี่ห้อ</label>
                                                        <div class="form-label-group">
                                                            <select class="form-control select2" name="brand_id" id="data-brand">
                                                                @foreach ($brands as $roles)
                                                                <option value="{{$roles->id}}" {{ $roles->id == $stocks->brand_id ? 'selected' : '' }}>{{$roles->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <label for="model">รุ่น</label>
                                                        <div class="form-label-group">
                                                            <input type="text" class="form-control" id="model" name="model" placeholder="a123 .." value="{{$stocks->model}}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <label for="sn">S/N</label>
                                                        <div class="form-label-group">
                                                            <input type="text" class="form-control" id="sn" name="sn" placeholder="123abc.." value="{{$stocks->sn}}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <label for="expenditure">ประเภทปีงบประมาณ</label>
                                                        <div class="form-label-group">
                                                            <div class="row">
                                                                <div class="col-sm-9 col-12">
                                                                    <select id="projectinput6" name="expenditure" class="form-control" required>
                                                                         <?php $lists = ['งบรายรับสถานพยาบาล', 'งบค่าเสื่อม', 'งบบริจาค', 'งบ 30 บาท', 'สสส.ทบ.', 'ทดลองใช้']; ?>
                                                                        @foreach($lists as $list)
                                                                        <option value={{$list}} {{ $list == $stocks->expenditure ? 'selected' : '' }}>{{$list}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="col-sm-3 col-12">
                                                                    <input type="text" class="form-control" id="year" name="year" placeholder="ปี" value="{{$stocks->year}}" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-12">
                                                        <label for="sn">แผนก</label>
                                                        <div class="form-label-group">
                                                             <select class="form-control select2" name="departments" id="data-departments">
                                                                <option value="">เลือกแผนก</option>
                                                                <option value="0">ยังไม่ระบุ</option>
                                                                @foreach ($departments as $roles)
                                                                <option value="{{$roles->id}}" {{ $roles->id == $stocks->department_id ? 'selected' : '' }}>{{$roles->name}}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <label for="sn">ผู้รับผิดชอบ</label>
                                                        <div class="form-label-group">
                                                             <select class="form-control select2" name="user_kinds">
                                                                @foreach ($users as $roles)
                                                                <option value="{{$roles->id}}" {{ $roles->id == $stocks->stock_user_id ? 'selected' : '' }}>{{$roles->title_name->name}}{{$roles->first_name}} {{$roles->last_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <label for="input-file">{{ __('อัพโหลดรูปภาพ') }}</label>
                                                        {{-- <input type="file" class="form-control" name="file"> --}}
                                                        <div class="custom-file">
                                                                <input type="file" name="file" class="custom-file-input" id="inputGroupFile01">
                                                                <label class="custom-file-label" for="inputGroupFile01"></label>
                                                            </div>
                                                            <p class="mb-0"><a href="{{ asset('files/'.$stocks->pic) }}" class="success" target="_blank">ไฟล์เดิม {{$stocks->pic}}</a></p>
                                                    </div>
                                                    <div class="form-group col-12">
                                                         <label for="detail">หมายเหตุ</label>
                                                        <textarea class="form-control" name="detail" id="basicTextarea" rows="3" placeholder="รายละเอียด.." required>{{$stocks->detail}}</textarea>
                                                    </div>

                                                    <div class="col-12 text-right">
                                                        <button type="submit" class="btn btn-primary mr-1 mt-1" ><i class="feather icon-edit-1"></i> แก้ไขรายการ</button>
                                                        <button type="reset" class="btn btn-outline-warning mr-1 mt-1" onclick="goBack()"><i class="feather icon-arrow-left"></i> ยกเลิก</button>
                                                    </div>

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
<script>
function goBack() {
  window.history.back();
}

function yesnoCheck(that) {
    if (that.value == "13") {

        document.getElementById("ifYes").style.display = "block";
    } else {
        document.getElementById("ifYes").style.display = "none";
    }
}

function yesnoCheck1(that) {
    if (that.value == "1") {

        document.getElementById("ifYes1").style.display = "block";
    } else {
        document.getElementById("ifYes1").style.display = "none";
    }
}
</script>
    <script src="{{ asset('app-assets') }}/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="{{ asset('app-assets') }}/js/scripts/forms/select/form-select2.js"></script>

@endsection

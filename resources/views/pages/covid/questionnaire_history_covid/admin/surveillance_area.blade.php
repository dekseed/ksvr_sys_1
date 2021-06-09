@extends('layouts.home')

@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/select/select2.min.css">
@endsection

@section('content')
  <div class="app-content content">
    <div class="content-wrapper">

      <div class="content-header row">

        <div class="content-header-left col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0"><i class="feather icon-inbox"></i> Covid-19 - ข้อมูลพื้นที่เสี่ยง</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">แผนควบคุม</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('report_ques_his_covid.index') }}">Covid-19</a>
                            </li>
                            <li class="breadcrumb-item active">ข้อมูลพื้นที่เสี่ยง
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
      </div>


        <div class="content-body">
            <section id="page-account-settings">
                <div class="row">
                    <!-- left menu section -->
                    <div class="col-md-2 mb-2 mb-md-0">
                        <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                            @if(Session::has('message-permission'))
                            <li class="nav-item">
                                <a class="nav-link d-flex py-75 active" id="account-pill-general" data-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                                    <i class="feather icon-globe mr-50 font-medium-3"></i>
                                    ระดับพื้นที่เสี่ยง
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex py-75" id="account-pill-password" data-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                                    <i class="feather icon-lock mr-50 font-medium-3"></i>
                                    จังหวัดที่เสี่ยง
                                </a>
                            </li>
                            @elseif(Session::has('message-psac'))
                            <li class="nav-item">
                                <a class="nav-link d-flex py-75" id="account-pill-general" data-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                                    <i class="feather icon-globe mr-50 font-medium-3"></i>
                                    ระดับพื้นที่เสี่ยง
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex py-75 active" id="account-pill-password" data-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                                    <i class="feather icon-lock mr-50 font-medium-3"></i>
                                    จังหวัดที่เสี่ยง
                                </a>
                            </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link d-flex py-75 active" id="account-pill-general" data-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                                    <i class="feather icon-globe mr-50 font-medium-3"></i>
                                    ระดับพื้นที่เสี่ยง
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex py-75" id="account-pill-password" data-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                                    <i class="feather icon-lock mr-50 font-medium-3"></i>
                                    จังหวัดที่เสี่ยง
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>

                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane @if(Session::has('message-permission'))active @elseif(Session::has('message-psac')) fade  @else active @endif"
                                        id="account-vertical-general" aria-labelledby="account-pill-general"
                                        aria-expanded="@if(is_null(Session::has('message-psac')))true @else false @endif">
                                            @if(Session::has('message-sac'))
                                                <div class="alert alert-primary">
                                                    <span class="text-bold-700 font-medium-3 mr-1"><i class="feather icon-check mr-1"></i>{{ Session::get('message-sac') }}</span>
                                                </div>
                                            @endif
                                            <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                                            </div>
                                                            <div class="card-content collapse show">
                                                                <div class="card-body">
                                                                    <div class="card-text">
                                                                        <h1 class="content-header-title mb-3 text-center">ตารางระดับพื้นที่เสี่ยง</h1>

                                                                    </div>
                                                                    <div class="text-right mb-1">
                                                                        <button type="buttom" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#addFormsac"><i class="feather icon-plus"></i> เพิ่มข้อมูล</button>
                                                                    </div>
                                                                    <!-- Modal add -->
                                                                    <div class="modal fade text-left" id="addFormsac" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title" id="myModalLabel33">เพิ่มระดับพื้นที่เสี่ยง</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <form class="form" action="{{route('Surveillance_Area_Covid.store')}}" method="POST">
                                                                                    {{csrf_field()}}
                                                                                    <div class="modal-body">


                                                                                                    <div class="row">
                                                                                                        <div class="form-group col-8">
                                                                                                            <label class="sr-only" for="name_rating">ชื่อระดับ</label>
                                                                                                                <input type="text" id="name_rating" name="name_rating" class="form-control border-primary" placeholder="ชื่อระดับ" required>
                                                                                                        </div>
                                                                                                        <div class="form-group col-4">
                                                                                                            <label class="sr-only" for="color">สี</label>
                                                                                                                <input style="min-width: 0px;" type="text" id="color" name="color" class="form-control colorpicker" placeholder="สี" required>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="row">
                                                                                                        <div class="form-label-group has-icon-left col-12">
                                                                                                            <textarea class="form-control  mb-1" name="detail" id="basicTextarea1" rows="3" placeholder="รายละเอียด.." ></textarea>
                                                                                                            <div class="form-control-position">
                                                                                                                <i class="feather icon-repeat"></i>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="submit" class="btn btn-primary">เพิ่มข้อมูล</button>
                                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-body">
                                                                        <div class="form-group col-12 mb-2">
                                                                            <div class="table-responsive">
                                                                                <table class="table table-striped table-hover table-bordered zero-configuration">
                                                                                    <thead>
                                                                                        <tr>
                                                                                        <th class="text-center" style="width: 5%;">ลำดับที่</th>
                                                                                        <th class="text-center">ชื่อระดับ</th>
                                                                                        <th class="text-center">รายละเอียด</th>
                                                                                        <th class="text-center" style="width: 12%;">สี</th>
                                                                                        <th class="text-center" style="width: 5%;">#</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        @if (count($areas) > 0)
                                                                                            @foreach ($areas as $index => $cate_tender)
                                                                                            <tr>
                                                                                                <td class="text-center">{{ $index +1 }}</td>
                                                                                                <td >{{ $cate_tender->name_rating }}</td>
                                                                                                <td >{{ $cate_tender->detail }}</td>
                                                                                                <td ><span class="badge badge-pill badge-lg" style="background-color: {{ $cate_tender->color }};"> C </span>
                                                                                                    ( {{ $cate_tender->color }} )
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                                                                        <button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#editForm{{ $index +1 }}"><i class="fa fa-btn fa-pencil"></i></button>
                                                                                                        <button type="button" class="btn btn-icon btn-danger" data-toggle="modal" data-target="#deleteForm{{ $index +1 }}"><i class="fa fa-btn fa-trash-o"></i></button>

                                                                                                    </div>
                                                                                                    <!-- Modal edit -->
                                                                                                    <div class="modal fade text-left" id="editForm{{ $index +1 }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33{{ $index +1 }}" aria-hidden="true">
                                                                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                                                            <div class="modal-content">
                                                                                                                <div class="modal-header">
                                                                                                                    <h4 class="modal-title" id="myModalLabel33">แก้ไขระดับพื้นที่เสี่ยง</h4>
                                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                        <span aria-hidden="true">&times;</span>
                                                                                                                    </button>
                                                                                                                </div>
                                                                                                                <form class="form" action="{{route('Surveillance_Area_Covid.update', $cate_tender->id)}}" method="POST">
                                                                                                                    {{csrf_field()}}
                                                                                                                    {{ method_field('PUT') }}
                                                                                                                    <div class="modal-body">
                                                                                                                        <label>ชื่อระดับ: </label>
                                                                                                                        <div class="form-group col-12">
                                                                                                                            <input type="text" id="name_ratingsac{{ $index +1 }}" name="name_rating" class="form-control border-primary" placeholder="ชื่อระดับ" value="{{ $cate_tender->name_rating }}" required>
                                                                                                                        </div>

                                                                                                                        <label>สี: </label>
                                                                                                                        <div class="form-group col-12">
                                                                                                                            <input style="min-width: 0px;" type="text" id="colorsac{{ $index +1 }}" name="color" class="form-control colorpicker" placeholder="สี" value="{{ $cate_tender->color }}" required>
                                                                                                                        </div>
                                                                                                                        <label>รายละเอียด: </label>
                                                                                                                        <div class="form-label-group has-icon-left col-12">
                                                                                                                            <textarea class="form-control  mb-1" name="detail" id="basicTextarea1sac{{ $index +1 }}" rows="3" placeholder="รายละเอียด.." >{{ $cate_tender->detail }}</textarea>
                                                                                                                            <div class="form-control-position">
                                                                                                                                <i class="feather icon-repeat"></i>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="modal-footer">
                                                                                                                        <button type="submit" class="btn btn-primary">แก้ไข</button>
                                                                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                                                                                                                    </div>
                                                                                                                </form>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- Modal delete -->
                                                                                                    <div class="modal fade text-left" id="deleteForm{{ $index +1 }}" tabindex="-1" role="dialog" aria-labelledby="deletemyModalLabel33{{ $index +1 }}" aria-hidden="true">
                                                                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                                                            <div class="modal-content">
                                                                                                                <div class="modal-header">
                                                                                                                    <h4 class="modal-title" id="myModalLabel33">ลบข้อมูลระดับพื้นที่เสี่ยง</h4>
                                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                        <span aria-hidden="true">&times;</span>
                                                                                                                    </button>
                                                                                                                </div>
                                                                                                                <form id="deleteasac{{ $index +1 }}" action="{{ route('Surveillance_Area_Covid.destroy', $cate_tender->id)}}"
                                                                                                                    method="POST" onsubmit='return ConfirmDelete()'>
                                                                                                                    {{ csrf_field() }}
                                                                                                                    {{ method_field('DELETE') }}
                                                                                                                    <div class="modal-body">
                                                                                                                        <p>คุณต้องการลบ ชื่อระดับ <span style="color: red;">{{ $cate_tender->name_rating }}</span> ใช่หรือไม่</p>
                                                                                                                    </div>
                                                                                                                    <div class="modal-footer">
                                                                                                                        <button type="submit" class="btn btn-danger">ลบ</button>
                                                                                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">ยกเลิก</button>
                                                                                                                    </div>
                                                                                                                </form>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            @endforeach
                                                                                        @else
                                                                                            <tr>
                                                                                                <td colspan="4" class="text-center">ไม่มีข้อมูล</td>
                                                                                            </tr>
                                                                                        @endif
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                            </div>
                                        </div>
                                        <div  role="tabpanel" class="tab-pane @if(Session::has('message-psac'))active @else fade @endif"
                                        id="account-vertical-password" aria-labelledby="account-pill-password"
                                        aria-expanded="@if(!is_null(Session::has('message-psac')))true @else false @endif">
                                            @if(Session::has('message-psac'))
                                            <div class="alert alert-primary">
                                                <span class="text-bold-700 font-medium-3 mr-1"><i class="feather icon-check mr-1"></i>{{ Session::get('message-psac') }}</span>

                                            </div>

                                            @endif
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                                        </div>
                                                        <div class="card-content collapse show">
                                                            <div class="card-body">
                                                                <div class="card-text">
                                                                    <h1 class="content-header-title mb-3 text-center">ตารางจังหวัดที่เสี่ยง</h1>
                                                                </div>

                                                                <div class="form-body">
                                                                    <div class="form-group col-12 mb-2">
                                                                        <div class="table-responsive">
                                                                        <table class="table table-striped table-hover table-bordered zero-configuration">
                                                                            <thead>
                                                                                <tr>
                                                                                <th class="text-center">ลำดับที่</th>
                                                                                <th class="text-center" style="width: 64%;">จังหวัด</th>
                                                                                <th class="text-center" style="width: 64%;">ระดับ</th>
                                                                                <th class="text-center" style="width: 64%;">สี</th>
                                                                                <th class="text-center">#</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @if (count($province_area) > 0)
                                                                                    @foreach ($province_area as $index => $cate_tender)
                                                                                    <tr>
                                                                                        <td style="width: 10%;" class="text-center">{{ $index +1 }}</td>
                                                                                        <td >
                                                                                            @foreach ($prov as $roles)
                                                                                                @if($cate_tender->province_code == $roles->province_code)
                                                                                                {{ $roles->province }}
                                                                                                @endif
                                                                                            @endforeach
                                                                                        </td>
                                                                                        <td >{{ $cate_tender->surveillance_area_covid->name_rating }}</td>

                                                                                        <td ><span class="badge badge-pill badge-lg" style="background-color: {{ $cate_tender->surveillance_area_covid->color }};"> C </span>

                                                                                        </td>
                                                                                        <td style="width: 10%;">
                                                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                                                                <button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#editFormsac{{ $index +1 }}"><i class="fa fa-btn fa-pencil"></i></button>
                                                                                                <button type="button" class="btn btn-icon btn-danger" data-toggle="modal" data-target="#deleteFormsac{{ $index +1 }}"><i class="fa fa-btn fa-trash-o"></i></button>

                                                                                            </div>
                                                                                            <!-- Modal edit -->
                                                                                            <div class="modal fade text-left" id="editFormsac{{ $index +1 }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33sac{{ $index +1 }}" aria-hidden="true">
                                                                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                                                    <div class="modal-content">
                                                                                                        <div class="modal-header">
                                                                                                            <h4 class="modal-title" id="myModalLabel33">แก้ไขจังหวัดที่เสี่ยง</h4>
                                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                <span aria-hidden="true">&times;</span>
                                                                                                            </button>
                                                                                                        </div>
                                                                                                        <form class="form" action="{{route('Province_surveillance_area_covid.update', $cate_tender->id)}}" method="POST">
                                                                                                            {{csrf_field()}}
                                                                                                            {{ method_field('PUT') }}
                                                                                                            <div class="modal-body">
                                                                                                                <label>เลือกจังหวัด: </label>
                                                                                                                <select id="districtedit{{ $index +1 }}" name="district" class="select2 form-control" required>
                                                                                                                    <option value="">เลือกจังหวัด</option>
                                                                                                                    @foreach ($prov as $roles)
                                                                                                                        <option value="{{$roles->province_code}}" {{ $roles->province_code == $cate_tender->province_code ? 'selected' : '' }}>{{$roles->province}}</option>
                                                                                                                    @endforeach
                                                                                                                </select>
                                                                                                                <label>ระดับ: </label>
                                                                                                                <select id="sacedit{{ $index +1 }}" name="sac" class="select2 form-control" required>
                                                                                                                    <option value="">ระดับ</option>
                                                                                                                @foreach ($areas as $roles)
                                                                                                                    <option value="{{$roles->id}}" {{ $roles->id == $cate_tender->province_surveillance_area_covid_id ? 'selected' : '' }}>{{$roles->name_rating}}</option>
                                                                                                                @endforeach

                                                                                                            </select>
                                                                                                            </div>
                                                                                                            <div class="modal-footer">
                                                                                                                <button type="submit" class="btn btn-primary">แก้ไข</button>
                                                                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                                                                                                            </div>
                                                                                                        </form>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- Modal delete -->
                                                                                            <div class="modal fade text-left" id="deleteFormsac{{ $index +1 }}" tabindex="-1" role="dialog" aria-labelledby="deletemyModalLabel33sac{{ $index +1 }}" aria-hidden="true">
                                                                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                                                    <div class="modal-content">
                                                                                                        <div class="modal-header">
                                                                                                            <h4 class="modal-title" id="myModalLabel33">ลบข้อมูลจังหวัดที่เสี่ยง</h4>
                                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                <span aria-hidden="true">&times;</span>
                                                                                                            </button>
                                                                                                        </div>
                                                                                                        <form id="deletesac{{ $index +1 }}" action="{{ route('Province_surveillance_area_covid.destroy', $cate_tender->id)}}"
                                                                                                            method="POST" onsubmit='return ConfirmDelete()'>
                                                                                                            {{ csrf_field() }}
                                                                                                            {{ method_field('DELETE') }}
                                                                                                            <div class="modal-body">
                                                                                                                <p>คุณต้องการลบ จังหวัดที่เสี่ยง จังหวัด <span style="color: red;">
                                                                                                                    @foreach ($prov as $roles)
                                                                                                                    @if($cate_tender->province_code == $roles->province_code)
                                                                                                                    {{ $roles->province }}
                                                                                                                    @endif
                                                                                                                @endforeach
                                                                                                            </span> ใช่หรือไม่</p>
                                                                                                            </div>
                                                                                                            <div class="modal-footer">
                                                                                                                <button type="submit" class="btn btn-danger">ลบ</button>
                                                                                                                <button type="button" class="btn btn-primary" data-dismiss="modal">ยกเลิก</button>
                                                                                                            </div>
                                                                                                        </form>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    @endforeach
                                                                                @else
                                                                                    <tr>
                                                                                        <td colspan="4" class="text-center">ไม่มีข้อมูล</td>
                                                                                    </tr>
                                                                                @endif
                                                                            </tbody>
                                                                        </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                                            <div class="heading-elements">
                                                                <ul class="list-inline mb-0">
                                                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="card-content collapse show">
                                                            <div class="card-body">
                                                                <form class="form" action="{{route('Province_surveillance_area_covid.store')}}" method="POST">
                                                                    {{csrf_field()}}
                                                                    <div class="form-body">
                                                                        <h4 class="form-section"><i class="ft-user"></i> เพิ่มระดับพื้นที่เสี่ยง</h4>
                                                                        <div class="row">
                                                                            <div class="form-group col-6">
                                                                                <label class="sr-only" for="name_rating">จังหวัด</label>
                                                                                    {{-- <input type="text" id="name_rating" name="name_rating" class="form-control border-primary" placeholder="ชื่อระดับ"> --}}
                                                                                    <select id="district" name="district" class="select2 form-control" required>
                                                                                            <option value="">เลือกจังหวัด</option>
                                                                                        @foreach ($prov as $roles)
                                                                                            <option value="{{$roles->province_code}}">{{$roles->province}}</option>

                                                                                        @endforeach

                                                                                    </select>
                                                                            </div>
                                                                            <div class="form-group col-6">
                                                                                <label class="sr-only" for="color">ระดับพื้นที่เสี่ยง</label>
                                                                                <select id="sac" name="sac" class="select2 form-control" required>
                                                                                        <option value="">ระดับ</option>
                                                                                    @foreach ($areas as $roles)
                                                                                        <option value="{{$roles->id}}">{{$roles->name_rating}}</option>
                                                                                    @endforeach

                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-actions right">
                                                                                    {{-- <a href="{{route('job.index')}}" class="btn btn-outline-warning mr-1"><i class="fa fa-arrow-circle-left m-r-10"></i> กลับ</a> --}}

                                                                                <button type="submit" class="btn btn-outline-warning">
                                                                                    <i class="ft-check"></i> สร้างใหม่
                                                                                </button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.min.js"></script>
<script>
    $('.colorpicker').colorpicker();
</script>
<script src="{{ asset('app-assets') }}/vendors/js/forms/select/select2.full.min.js"></script>
<script src="{{ asset('app-assets') }}/js/scripts/forms/select/form-select2.js"></script>
@endsection

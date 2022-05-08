@extends('layouts.home')

@section('styles')
<meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/tables/datatable/datatables.min.css">
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
                                    <li class="breadcrumb-item"><a href="{{ route('check_up.index') }}">KSVR Check Up</a>
                                    </li>
                                    <li class="breadcrumb-item active">หน่วยงานทหาร
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
                            <h2 class="text-center mt-2 mb-2">หน่วยงานทหาร</h2>
                            <div class="card">

                                <div class="card-content">


                                    <div class="card-body card-dashboard">
                                                    <div class="container">
                                                        <div class="row justify-content-md-center">
                                                            <div class="col col-lg-4">
                                                                <div class="form-group text-center">
                                                                <select id="fillter_kind" name="kinds" class="form-control" required placeholder="เลือกหน่วยงาน">
                                                                    <option value="">เลือกหน่วยงาน</option>
                                                                        @foreach ($kinds as $roles)
                                                                            <option value="{{$roles->id}}">{{$roles->name}}</option>
                                                                        @endforeach
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
                                                {{-- <div class="row">
                                                    <div class="text-right">
                                                        <a href="{{ route('police.create')}}" class="btn btn-primary  waves-effect waves-light">
                                                            <i class="feather feather icon-plus"></i> เพิ่มข้อมูล</a>

                                                    </div>
                                                </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <div class="card-content">
                                    {{-- <h2 class="text-center">หน่วยงานทหาร</h2> --}}
                                     <div class="justify-content-md-center text-right mt-2">
                                        <a class="btn btn-icon btn-success mr-1 mt-1 waves-effect waves-light" href="{{ route('report-1.index') }}" target="_blank"><i class="feather icon-inbox"></i> ลิ้งแบบสำรวจภาวะสุขภาพประจำปี</a>
                                        <div class="btn-group mt-1">
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    รายงานข้อมูล
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#export"><i class="feather icon-inbox"></i> รายงานข้อมูลการตรวจร่างกาย(Excel)</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#export2">รายงานข้อมูลแยกตามโรค</a>
                                                    {{-- <a class="dropdown-item" href="#">Option 3</a> --}}
                                                </div>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-icon btn-danger mt-1 mr-1 waves-effect waves-light" href="#" data-toggle="modal" data-target="#default1"><i class="feather icon-user-plus"></i> เพิ่มข้อมูลตรวจสุขภาพ</button>
                                     </div>
                                    <div class="card-body card-dashboard">

                                            @if(Session::has('message'))
                                                <div class="alert alert-primary">
                                                    <span class="text-bold-700 font-medium-3 mr-1"><i class="feather icon-check mr-1"></i>{{ Session::get('message') }}</span>
                                                </div>

                                            @endif
                                        <div class="table-responsive">
                                            <table id="army" class="table">
                                                <thead>
                                                    <tr>
                                                        {{-- <th>ลำดับที่</th> --}}
                                                        <th>เลขที่ HN</th>
                                                        <th>ยศ ชื่อ-สกุล</th>
                                                        <th>เลขที่บัตรประชาชน</th>
                                                        <th>อายุ</th>

                                                        <th>หน่วยงาน</th>
                                                        <th>สถานะ</th>
                                                        <th>ตัวเลือก</th>
                                                    </tr>
                                                </thead>

                                                {{-- <tbody>

                                                    @foreach($userPol as $item)
                                                    <tr>
                                                        <td class="text-center">{{ $i++ }}</td>
                                                        <td>{{ $item->title_name }}{{ $item->first_name }} {{ $item->last_name }}</td>

                                                        <td>{{ $item->cid }}</td>

                                                        <td>{{ $item->phonenumber }}</td>
                                                        <td>{{ $item->age }}</td>
                                                        <td>{{ $item->unit }}</td>
                                                        <td>
                                                            @if($item->status_id == '1')
                                                            <span class="edit">
                                                                <a class="btn btn-icon btn-danger waves-effect light" href="{{ route('police.add', $item->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="ลงข้อมูล">
                                                                        <i class="feather icon-monitor"></i></a>
                                                            </span>
                                                            @else
                                                            <span class="edit">
                                                                <a class="btn btn-icon btn-success waves-effect light" href="{{ route('police.show', $item->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="ดูข้อมูล">
                                                                        <i class="feather icon-monitor"></i></a>
                                                            </span>
                                                            @endif

                                                        </td>
                                                    </tr>
                                                    @endforeach

                                                </tbody> --}}
                                                <tbody>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        {{-- <th>ลำดับที่</th> --}}
                                                        <th>เลขที่ HN</th>
                                                        <th>ยศ ชื่อ-สกุล</th>
                                                        <th>เลขที่บัตรประชาชน</th>
                                                        <th>อายุ</th>

                                                        <th>หน่วยงาน</th>
                                                        <th>สถานะ</th>
                                                        <th>ตัวเลือก</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade text-left" id="default1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel1">ค้นหา..</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <div class="form-label-group position-relative has-icon-left">
                                                <input type="text" class="form-control" name="country" id="country" placeholder="เลชที่ HN, เลขบัตรประจำตัวประชาชน, ชื่อ-สกุล">
                                                <div class="form-control-position">
                                                    <i class="feather icon-user"></i>
                                                </div>
                                                    <label for="first-name-floating-icon">ค้นหา</label>
                                            </div>
                                        </div>
                                        <div id="country_list"></div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn grey mr-1 mb-1 btn-outline-secondary" data-dismiss="modal">ยกเลิก</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="modal fade text-left" id="export" tabindex="-1" role="dialog" aria-labelledby="export" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h4 class="modal-title" id="export">ดาวห์โหลดไฟล์..</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                </div>
                                <form action="{{ route('check_up_army_2.export') }}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <h4 class="modal-title text-center mb-2">ดาวห์โหลดไฟล์สำรวจภาวะสุขภาพประจำปี</h4>
                                        <div class="col col-lg-12">
                                            <div class="form-group text-center">
                                                <select id="fillter_kind" name="kinds" class="form-control" required placeholder="เลือกหน่วยงาน">
                                                    <option value="">เลือกหน่วยงาน</option>
                                                    @foreach ($kinds as $roles)
                                                        <option value="{{$roles->id}}">{{$roles->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col col-lg-12">
                                            <div class="form-group text-center">
                                                <select id="filler_year" name="year" class="form-control" required placeholder="เลือกปี">
                                                    <option value="">เลือกปี</option>
                                                    <?php
                                                        $year_start = '2565';
                                                        $year=(date("Y")+543);

                                                        for($i = $year_start; $i <= $year; $i++){?>

                                                        <option value="<?=$i?>"><?=$i?></option>

                                                    <?php }  ?>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn mr-1 mb-1 btn-danger">ดาวห์โหลดไฟล์</button>
                                        <button type="button" class="btn grey mr-1 mb-1 btn-outline-secondary" data-dismiss="modal">ยกเลิก</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade text-left" id="export2" tabindex="-1" role="dialog" aria-labelledby="export" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h4 class="modal-title" id="export">รายงานข้อมูลแยกตามโรค</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                </div>
                                <form action="{{ route('check_up_2.search_result') }}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <h4 class="modal-title text-center mb-2">รายงานข้อมูลแยกตามโรค</h4>
                                        <div class="col col-lg-12">
                                            <div class="form-group text-center">
                                                <select id="fillter_kind" name="kinds" class="form-control" required placeholder="เลือกหน่วยงาน">
                                                    <option value="">เลือกหน่วยงาน</option>
                                                    @foreach ($kinds as $roles)
                                                        <option value="{{$roles->id}}">{{$roles->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col col-lg-12">
                                            <div class="form-group text-center">
                                                <select id="filler_year" name="year" class="form-control" required placeholder="เลือกปี">
                                                    <option value="">เลือกปี</option>
                                                    <?php
                                                        $year_start = '2565';
                                                        $year=(date("Y")+543);

                                                        for($i = $year_start; $i <= $year; $i++){?>

                                                        <option value="<?=$i?>"><?=$i?></option>

                                                    <?php }  ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col col-lg-12">
                                            <h6 class="font-medium-2 mb-1"><i class="feather icon-search mr-50 "></i>เลือกผลตรวจสุขภาพ</h6>
                                            <div class="table-responsive border rounded px-1">
                                                <div class="row">
                                                    <div class="col-md-6 mt-1">
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-danger">
                                                                        <input type="checkbox" name="result_1" value="1" id="checkme">
                                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">ผลการตรวจปกติ</span>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-responsive border rounded px-1 mt-1">
                                                <div class="row">
                                                    <div class="col-md-6 mt-1">
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-danger">
                                                                        <input type="checkbox" name="result_11" value="1" id="result_1">
                                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">โรคอ้วน</span>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-danger">
                                                                        <input type="checkbox" name="result_2" value="1" id="result_2">
                                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">น้ำตาลในเลือดสูง</span>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-danger">
                                                                        <input type="checkbox" name="result_3" value="1" id="result_3">
                                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">กรดยูริคสูง</span>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-danger">
                                                                        <input type="checkbox" name="result_4" value="1" id="result_4">
                                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">ตับผิดปกติ</span>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-danger">
                                                                        <input type="checkbox" name="result_5" value="1" id="result_5">
                                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">ไขมันในเลือดสูง</span>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6 mt-1">
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-danger">
                                                                        <input type="checkbox" name="result_6" value="1" id="result_6">
                                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">ไตผิดปกติ</span>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-danger">
                                                                        <input type="checkbox" name="result_7" value="1" id="result_7">
                                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">ปัสสาวะผิดปกติ</span>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-danger">
                                                                        <input type="checkbox" name="result_8" value="1" id="result_8">
                                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">โลหิตจาง</span>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-danger">
                                                                        <input type="checkbox" name="result_9" value="1" id="result_9">
                                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">อุจจาระผิดปกติ</span>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-danger">
                                                                        <input type="checkbox" name="result_10" value="1" id="result_10">
                                                                        <span class="vs-checkbox vs-checkbox-lg">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">ความดันโลหิตสูง</span>
                                                                    </div>
                                                                </fieldset>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn mr-1 mb-1 btn-danger">ค้นหา</button>
                                        <button type="button" class="btn grey mr-1 mb-1 btn-outline-secondary" data-dismiss="modal">ยกเลิก</button>
                                    </div>
                                </form>
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
    <script>
        $(document).ready(function(){
            fill_datatable();
            function fill_datatable(filler_year = '', fillter_kind = '')
            {
                      var dataTable = $('#army').DataTable({

            processing: true,
            serverSide: true,
            ajax:{

                url: "{{ route('check_up.army_2') }}",

                                 headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                type: "get",

                data:{filler_year:filler_year, fillter_kind:fillter_kind}
            },
            columns: [
                {
                    data:'hn',
                    name:'HN'

                },
                 {
                    data:'intro',
                    name:'intro'

                },

                {
                    data:'cid',
                    name:'cid'
                },

                {
                    data:'age',
                    name:'age'
                },
                {
                    data:'kind_check_up_id',
                    name:'kind_check_up_id'
                },
                {
                    data:'status',
                    name:'status'
                },

                {
                    data:'link',
                    name:'link'
                },



            //    {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
    }

    $('#filter').click(function(){
        var filler_year = $('#filler_year').val();
        var fillter_kind = $('#fillter_kind').val();

        if(fillter_kind != '')
        {
            $('#army').DataTable().destroy();
            fill_datatable(filler_year, fillter_kind);
        }
        else if(filler_year != '')
        {
            $('#army').DataTable().destroy();
            fill_datatable(filler_year, fillter_kind);
        }
        else
        {
            alert('Select Both filter option');
        }
    });

    $('#reset').click(function(){
        $('#filler_year').val('');
        $('#fillter_kind').val('');
        $('#army').DataTable().destroy();
        fill_datatable();
    });

});
    </script>

    <script type="text/javascript">
            $(document).ready(function () {

                $('#country').on('keyup',function() {
                    var query = $(this).val();
                    $.ajax({

                        url:"{{ route('army_2.search') }}",
                                 headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                        type:"GET",
                        data:{'country':query},

                        success:function (data) {

                            $('#country_list').html(data);
                        }
                    })
                    // end of ajax call
                });


                $(document).on('click', 'li', function(){

                    var value = $(this).text();
                    $('#country').val(value);
                    $('#country_list').html("");



                });

            });

            var checker = document.getElementById('checkme');
            var sendbtn = document.getElementById('sendNewSms');
            // when unchecked or checked, run the function
            checker.onchange = function(){
                if(this.checked){
                    result_1.disabled = true;
                    result_2.disabled = true;
                    result_3.disabled = true;
                    result_4.disabled = true;
                    result_5.disabled = true;
                    result_6.disabled = true;
                    result_7.disabled = true;
                    result_8.disabled = true;
                    result_9.disabled = true;
                    result_10.disabled = true;
                } else {
                    result_1.disabled = false;
                    result_2.disabled = false;
                    result_3.disabled = false;
                    result_4.disabled = false;
                    result_5.disabled = false;
                    result_6.disabled = false;
                    result_7.disabled = false;
                    result_8.disabled = false;
                    result_9.disabled = false;
                    result_10.disabled = false;
                }

            }
        </script>

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Page JS-->
    {{-- <script src="{{ asset('app-assets') }}/js/scripts/datatables/datatable.js"></script> --}}
    <!-- END: Page JS-->
@endsection

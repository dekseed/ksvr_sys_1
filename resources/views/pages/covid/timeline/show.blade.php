@extends('layouts.covid_timeline')

@section('styles')
<meta http-equiv="x-ua-compatible" content="IE=edge">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/extensions/toastr.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/pickers/pickadate/pickadate.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/editors/quill/katex.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/editors/quill/monokai-sublime.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/editors/quill/quill.snow.css">

<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/extensions/toastr.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/select/select2.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/forms/validation/form-validation.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/pickers/pickadate/pickadate.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/app-todo.css">

<style>
    .pac-container{
        z-index:9999;
    }
    #geomap{
    width: 100%;
    height: 400px;
}


    </style>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtX0RPGP355G6ifDNxoLyTJxdqVtshDa8&libraries=places&language=th"></script>
    <script src="{{ asset('js') }}/jquery-locationpicker-plugin-master/src/locationpicker.jquery.js"></script>

@endsection
@section('content')

 <!-- BEGIN: Content-->
 <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-area-wrapper">
        <div class="sidebar-left">
            <div class="sidebar">
                <div class="sidebar-content todo-sidebar d-flex">
                    <span class="sidebar-close-icon">
                        <i class="feather icon-x"></i>
                    </span>
                    <div class="todo-app-menu">
                        <div class="form-group text-center add-task">
                            <button type="button" class="btn btn-primary btn-block my-1" data-toggle="modal" data-target="#addTaskModal"><i class="feather icon-plus font-medium-2 align-middle"></i> เพิ่มข้อมูล</button>
                            <button type="button" class="btn btn-danger btn-block my-1" data-toggle="modal" data-target="#downloadTaskModal"><i class="feather icon-download-cloud font-medium-2 mr-50"></i> ดาวห์โหลด Timeline</button>

                        </div>
                        <div class="sidebar-menu-list">
                            <div class="list-group list-group-filters font-medium-1">

                                @foreach ($timeline as $items)
                                    <a href="{{route('timeline-covid.show', $items->date)}}" class="list-group-item list-group-item-action border-0 pt-0 {{ ($items->date == $id ? ' active' : '')}} ">
                                    <i class="font-medium-5 feather icon-layers"></i> วันที่ {{DateFThai(date('d-m-Y', strtotime($items->date)))}}
                                </a>

                                @endforeach
                            </div>
                            <hr>
                            {{-- <h5 class="mt-2 mb-1 pt-25">Filters</h5>
                            <div class="list-group list-group-filters font-medium-1">
                                <a href="#" class="list-group-item list-group-item-action border-0"><i class="font-medium-5 feather icon-star mr-50"></i> Starred</a>
                                <a href="#" class="list-group-item list-group-item-action border-0"><i class="font-medium-5 feather icon-info mr-50"></i> Important</a>
                                <a href="#" class="list-group-item list-group-item-action border-0"><i class="font-medium-5 feather icon-check mr-50"></i> Completed</a>
                                <a href="#" class="list-group-item list-group-item-action border-0"><i class="font-medium-5 feather icon-trash mr-50"></i> Trashed</a>
                            </div>
                            <hr> --}}
                            <h5 class="mt-2 mb-1 pt-25">มาตรการ DMHTTA</h5>
                            <div class="list-group list-group-labels font-medium-1">
                                <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center"><span class="bullet bullet-primary mr-1"></span> เว้นระยะห่าง (D)</a>
                                <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center"><span class="bullet bullet-warning mr-1"></span> สวมแมสก์ (M)</a>
                                <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center"><span class="bullet bullet-success mr-1"></span> ล้างมือ (H)</a>
                                <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center"><span class="bullet bullet-secondary mr-1"></span> วัดอุณหภูมิ (T)</a>
                                <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center"><span class="bullet bullet-danger mr-1"></span> ตรวจหาเชื้อโควิด-19 (T)</a>
                                <a href="#" class="list-group-item list-group-item-action border-0 d-flex align-items-center"><span class="bullet bullet-info mr-1"></span> ไทยชนะ/หมอชนะ (A)</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal1 -->
                <form action="{{route('timeline-covid-detial.store')}}" method="POST">
                    {{csrf_field()}}
                    <div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">


                                <div class="modal-content">


                                        <div class="modal-header bg-success white">
                                            <h5 class="modal-title" id="exampleModalLabel"><i class="feather icon-clipboard mr-50"></i> เพิ่มข้อมูล Timeline</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-icon" class="mb-1">รายละเอียด</label>
                                                    <div class="position-relative has-icon-left">
                                                        <textarea class="form-control" name="description" rows="3" placeholder="รายละเอียดกิจกรรม" required></textarea>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-clipboard"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="col-12">
                                                <label for="first-name-icon" class="mb-1">มาตรการ DMHTTA</label>
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <fieldset class="form-group position-relative has-icon-left mb-0">
                                                            <div class="vs-checkbox-con vs-checkbox-success">
                                                                <input type="checkbox" name="D" value="1">
                                                                <span class="vs-checkbox vs-checkbox-lg">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                                <span class=""><i class="fas fa-head-side-mask"></i> อยู่ห่าง 1-2 ม. (D)</span>
                                                            </div>
                                                        </fieldset>
                                                        <fieldset class="form-group position-relative has-icon-left mb-0">
                                                            <div class="vs-checkbox-con vs-checkbox-success">
                                                                <input type="checkbox" name="M" value="1">
                                                                <span class="vs-checkbox vs-checkbox-lg">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                                <span class=""><i class="fas fa-head-side-mask"></i> ใส่แมสก์ (M)</span>
                                                            </div>
                                                        </fieldset>
                                                        <fieldset class="form-group position-relative has-icon-left mb-0">
                                                            <div class="vs-checkbox-con vs-checkbox-success">
                                                                <input type="checkbox" name="H" value="1">
                                                                <span class="vs-checkbox vs-checkbox-lg">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                                <span class=""><i class="fas fa-head-side-mask"></i> ล้างมือ (H)</span>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <fieldset class="form-group position-relative has-icon-left mb-0">
                                                            <div class="vs-checkbox-con vs-checkbox-success">
                                                                <input type="checkbox" name="A" value="1">
                                                                <span class="vs-checkbox vs-checkbox-lg">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                                <span class=""><i class="fas fa-head-side-mask"></i> ไทยชนะ/หมอชนะ (A)</span>
                                                            </div>
                                                        </fieldset>
                                                        <fieldset class="form-group position-relative has-icon-left mb-0">
                                                            <div class="vs-checkbox-con vs-checkbox-success">
                                                                <input type="checkbox" id="myCheck" name="T" value="1" onclick="myFunction()">
                                                                <span class="vs-checkbox vs-checkbox-lg">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                                <span class=""><i class="fas fa-head-side-mask"></i> วัดอุณหภูมิ (T)</span>
                                                            </div>
                                                        </fieldset>
                                                        <span id="text" style="display:none"><input type="text" name="temperature" class="form-control" placeholder="อุณหภูมิ" /></span>
                                                        <script>
                                                            function myFunction() {
                                                              var checkBox = document.getElementById("myCheck");
                                                              var text = document.getElementById("text");
                                                              if (checkBox.checked == true){
                                                                text.style.display = "block";
                                                              } else {
                                                                 text.style.display = "none";
                                                              }
                                                            }
                                                        </script>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <fieldset class="form-group position-relative has-icon-left mb-0">
                                                            <div class="vs-checkbox-con vs-checkbox-success">
                                                                <input type="checkbox" name="T2" value="1" id="myCheckT2" onclick="myFunctionT2()">
                                                                <span class="vs-checkbox vs-checkbox-lg">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                                <span class=""><i class="fas fa-head-side-mask"></i> ตรวจหาโควิด-19 (T)</span>
                                                            </div>

                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                            <span id="textT2" style="display:none">
                                                <div class="col-12">
                                                    <div class="table-responsive border rounded px-1 mt-1">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block">
                                                                        <fieldset>
                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                <input type="checkbox" id="myCheckT2_Antigen" name="T2_Antigen" value="1" onclick="myFunctionT2_Antigen()">
                                                                                <span class="vs-checkbox">
                                                                                    <span class="vs-checkbox--check">
                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                    </span>
                                                                                </span>
                                                                                <span class="">Antigen <br>repid test</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                                <span id="textT2_Antigen" style="display:none">
                                                                    <div class="table-responsive border rounded px-1 mt-1">
                                                                        <span>ผลตรวจ</span>
                                                                        <ul class="list-unstyled mb-0">
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con">
                                                                                        <input type="radio" name="T2_Antigen_Result" value="1">
                                                                                        <span class="vs-radio vs-radio-sm">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="font-small-2">ลบ</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-danger">
                                                                                        <input type="radio" name="T2_Antigen_Result" value="2">
                                                                                        <span class="vs-radio vs-radio-sm">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="font-small-2">บวก</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-success">
                                                                                        <input type="radio" name="T2_Antigen_Result" value="3">
                                                                                        <span class="vs-radio vs-radio-sm">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="font-small-2">ยังไม่ทราบผล</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <ul class="list-unstyled mt-1">
                                                                    <li class="d-inline-block">
                                                                        <fieldset>
                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                <input type="checkbox" id="myCheckT2_RT" name="T2_RT_PCR" value="1" onclick="myFunctionT2_RT()">
                                                                                <span class="vs-checkbox">
                                                                                    <span class="vs-checkbox--check">
                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                    </span>
                                                                                </span>
                                                                                <span class="">RT-PCR</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                                <span id="textT2_RT" style="display:none">
                                                                    <div class="table-responsive border rounded px-1 mt-1">
                                                                        <span>ผลตรวจ</span>
                                                                        <ul class="list-unstyled mb-0">
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con">
                                                                                        <input type="radio" name="T2_RT_PCR_Result" value="1">
                                                                                        <span class="vs-radio vs-radio-sm">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="font-small-2">ลบ</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-danger">
                                                                                        <input type="radio" name="T2_RT_PCR_Result" value="2">
                                                                                        <span class="vs-radio vs-radio-sm">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="font-small-2">บวก</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-success">
                                                                                        <input type="radio" name="T2_RT_PCR_Result" value="3">
                                                                                        <span class="vs-radio vs-radio-sm">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="font-small-2">ยังไม่ทราบผล</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block">
                                                                        <fieldset>
                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                <input type="checkbox" id="myCheckT2_Antibody" name="T2_Antibody" value="1" onclick="myFunctionT2_Antibody()">
                                                                                <span class="vs-checkbox">
                                                                                    <span class="vs-checkbox--check">
                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                    </span>
                                                                                </span>
                                                                                <span class="">Antibody <br>repid test</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                                <span id="textT2_Antibody" style="display:none">
                                                                    <div class="table-responsive border rounded px-1 mt-1">
                                                                        <span>ผลตรวจ</span>
                                                                        <ul class="list-unstyled mb-0">
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con">
                                                                                        <input type="radio" name="T2_Type_Result" value="1">
                                                                                        <span class="vs-radio vs-radio-sm">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="font-small-2">ลบ</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-danger">
                                                                                        <input type="radio" name="T2_Type_Result" value="2">
                                                                                        <span class="vs-radio vs-radio-sm">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="font-small-2">บวก</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-success">
                                                                                        <input type="radio" name="T2_Type_Result" value="3">
                                                                                        <span class="vs-radio vs-radio-sm">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="font-small-2">ยังไม่ทราบผล</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </span>
                                                            </div>

                                                                <script>
                                                                    function myFunctionT2_Antigen() {
                                                                        var checkBox = document.getElementById("myCheckT2_Antigen");
                                                                        var text = document.getElementById("textT2_Antigen");
                                                                        if (checkBox.checked == true){
                                                                            text.style.display = "block";
                                                                        } else {
                                                                            text.style.display = "none";
                                                                        }
                                                                    }
                                                                    function myFunctionT2_RT() {
                                                                        var checkBox = document.getElementById("myCheckT2_RT");
                                                                        var text = document.getElementById("textT2_RT");
                                                                        if (checkBox.checked == true){
                                                                            text.style.display = "block";
                                                                        } else {
                                                                            text.style.display = "none";
                                                                        }
                                                                    }
                                                                    function myFunctionT2_Antibody() {
                                                                        var checkBox = document.getElementById("myCheckT2_Antibody");
                                                                        var text = document.getElementById("textT2_Antibody");
                                                                        if (checkBox.checked == true){
                                                                            text.style.display = "block";
                                                                        } else {
                                                                            text.style.display = "none";
                                                                        }
                                                                    }
                                                                    function myFunctionT2() {
                                                                        var checkBox = document.getElementById("myCheckT2");
                                                                        var text = document.getElementById("textT2");
                                                                        if (checkBox.checked == true){
                                                                            text.style.display = "block";
                                                                        } else {
                                                                            text.style.display = "none";
                                                                        }
                                                                    }
                                                                </script>
                                                        </div>
                                                    </div>
                                                </div>
                                            </span>
                                            <hr>
                                                <div class="col-12">

                                                    <div class="chat-footer">
                                                        <label for="first-name-icon" class="mb-1">สถานที่</label>
                                                        <fieldset class="form-group position-relative has-icon-left">
                                                            <input type="text" name="address" id="usss0-address" class="form-control" placeholder="ค้นหาสถานที่.." required>

                                                            <div class="form-control-position">
                                                                <i class="feather icon-search"></i>
                                                            </div>
                                                        </fieldset>
                                                        <input type="hidden" name="lat" class="form-control" id="usss0-lat" />
                                                        <input type="hidden" name="long" class="form-control" id="usss0-lon" />
                                                            <!-- map -->
                                                            <div id="usss0" style="height: 300px;"></div>
                                                        </div>

                                                        <script>

                                                            $( document ).ready(function() {
                                                                navigator.geolocation.getCurrentPosition(showPosition);
                                                                function showPosition(position) {
                                                                    var lat = position.coords.latitude;
                                                                    var lng = position.coords.longitude;
                                                                    $('#usss0-lat').val(lat);
                                                                    $('#usss0-lon').val(lng);
                                                                    buildMap1(lat, lng);
                                                                }
                                                            });

                                                            function buildMap1(lat, lng) {
                                                                $('#usss0').locationpicker({
                                                                    location: {
                                                                        latitude: +lat || 17.186593,
                                                                        longitude: +lng || 104.1057998
                                                                        },
                                                                        zoom: 14,
                                                                    radius: 0,
                                                                    inputBinding: {
                                                                        latitudeInput: $('#usss0-lat'),
                                                                        longitudeInput: $('#usss0-lon'),
                                                                        radiusInput: $('#usss0-radius'),
                                                                        locationNameInput: $('#usss0-address')
                                                                    },
                                                                    enableAutocomplete: true,
                                                                    // onchanged: function (currentLocation, radius, isMarkerDropped) {
                                                                    //     // Uncomment line below to show alert on each Location Changed event
                                                                    //     //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");

                                                                    // }

                                                                });
                                                            }
                                                        </script>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                                <button type="submit" class="btn btn-success"><i class="feather icon-check d-block d-lg-none"></i>
                                                    <span class="d-none d-lg-block"><i class="feather icon-save"></i> บันทึก</span></button>
                                            </fieldset>
                                            {{-- <a href="{{ route('timeline-covid.create')}}" class="btn btn-danger" ><i class="feather icon-maximize-2 mr-50"></i> เลือกช่วงเวลา</a> --}}
                                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                                <button type="buttom" class="btn btn-danger" data-toggle="modal" data-target="#addTaskModal2" data-dismiss="modal"><i class="feather icon-maximize-2 d-block d-lg-none"></i>
                                                    <span class="d-none d-lg-block"><i class="feather icon-maximize-2 mr-50"></i> เลือกช่วงเวลา</span></button>
                                            </fieldset>
                                        </div>
                                </div>
                        </div>
                    </div>
                </form>
                <!-- Modal2 -->
                <form action="{{route('timeline-covid-detial.store')}}" method="POST">

                    {{csrf_field()}}
                    <div class="modal fade" id="addTaskModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">


                                <div class="modal-content">


                                        <div class="modal-header bg-success white">
                                            <h5 class="modal-title" id="exampleModalLabel"><i class="feather icon-clipboard mr-50"></i> เพิ่มข้อมูล Timeline (ช่วงเวลา)</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>วันที่</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="controls">
                                                            <input type='text' name="date" class="form-control pickadate" data-validation-required-message="กรุณากรอกข้อมูลให้ครบถ้วน" required />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <span>เวลา</span>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="controls">
                                                            <input type='text' name="time" class="form-control pickatime-format" data-validation-required-message="กรุณากรอกข้อมูลให้ครบถ้วน" required />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-icon" class="mb-1">รายละเอียด</label>
                                                    <div class="position-relative has-icon-left">
                                                        <textarea class="form-control" name="description" rows="3" placeholder="รายละเอียดกิจกรรม" required></textarea>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-clipboard"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="col-12">
                                                <label for="first-name-icon" class="mb-1">มาตรการ DMHTTA</label>
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <fieldset class="form-group position-relative has-icon-left mb-0">
                                                            <div class="vs-checkbox-con vs-checkbox-success">
                                                                <input type="checkbox" name="D" value="1">
                                                                <span class="vs-checkbox vs-checkbox-lg">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                                <span class=""><i class="fas fa-head-side-mask"></i> อยู่ห่าง 1-2 ม. (D)</span>
                                                            </div>
                                                        </fieldset>
                                                        <fieldset class="form-group position-relative has-icon-left mb-0">
                                                            <div class="vs-checkbox-con vs-checkbox-success">
                                                                <input type="checkbox" name="M" value="1">
                                                                <span class="vs-checkbox vs-checkbox-lg">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                                <span class=""><i class="fas fa-head-side-mask"></i> ใส่แมสก์ (M)</span>
                                                            </div>
                                                        </fieldset>
                                                        <fieldset class="form-group position-relative has-icon-left mb-0">
                                                            <div class="vs-checkbox-con vs-checkbox-success">
                                                                <input type="checkbox" name="H" value="1">
                                                                <span class="vs-checkbox vs-checkbox-lg">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                                <span class=""><i class="fas fa-head-side-mask"></i> ล้างมือ (H)</span>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <fieldset class="form-group position-relative has-icon-left mb-0">
                                                            <div class="vs-checkbox-con vs-checkbox-success">
                                                                <input type="checkbox" name="A" value="1">
                                                                <span class="vs-checkbox vs-checkbox-lg">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                                <span class=""><i class="fas fa-head-side-mask"></i> ไทยชนะ/หมอชนะ (A)</span>
                                                            </div>
                                                        </fieldset>
                                                        <fieldset class="form-group position-relative has-icon-left mb-0">
                                                            <div class="vs-checkbox-con vs-checkbox-success">
                                                                <input type="checkbox" id="myCheckT222" name="T" value="1" onclick="myFunctionT222()">
                                                                <span class="vs-checkbox vs-checkbox-lg">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                                <span class=""><i class="fas fa-head-side-mask"></i> วัดอุณหภูมิ (T)</span>
                                                            </div>
                                                        </fieldset>
                                                        <span id="textT222" style="display:none"><input type="text" name="temperature" class="form-control" placeholder="อุณหภูมิ" /></span>
                                                        <script>
                                                            function myFunctionT222() {
                                                              var checkBox = document.getElementById("myCheckT222");
                                                              var text = document.getElementById("textT222");
                                                              if (checkBox.checked == true){
                                                                text.style.display = "block";
                                                              } else {
                                                                 text.style.display = "none";
                                                              }
                                                            }
                                                        </script>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <fieldset class="form-group position-relative has-icon-left mb-0">
                                                            <div class="vs-checkbox-con vs-checkbox-success">
                                                                <input type="checkbox" name="T2" value="1" id="myCheckT2222" onclick="myFunctionT22()">
                                                                <span class="vs-checkbox vs-checkbox-lg">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                                <span class=""><i class="fas fa-head-side-mask"></i> ตรวจหาโควิด-19 (T)</span>
                                                            </div>
                                                            <script>
                                                                function myFunctionT22() {
                                                                        var checkBox = document.getElementById("myCheckT2222");
                                                                        var text = document.getElementById("textT2222");
                                                                        if (checkBox.checked == true){
                                                                            text.style.display = "block";
                                                                        } else {
                                                                            text.style.display = "none";
                                                                        }
                                                                    }
                                                            </script>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                            <span id="textT2222" style="display:none">
                                                <div class="col-12">
                                                    <div class="table-responsive border rounded px-1 mt-1">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block">
                                                                        <fieldset>
                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                <input type="checkbox" id="myCheckT2_Antigen2" name="T2_Antigen" value="1" onclick="myFunctionT2_Antigen2()">
                                                                                <span class="vs-checkbox">
                                                                                    <span class="vs-checkbox--check">
                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                    </span>
                                                                                </span>
                                                                                <span class="">Antigen <br>repid test</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                                <span id="textT2_Antigen2" style="display:none">
                                                                    <div class="table-responsive border rounded px-1 mt-1">
                                                                        <span>ผลตรวจ</span>
                                                                        <ul class="list-unstyled mb-0">
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con">
                                                                                        <input type="radio" name="T2_Antigen_Result" value="1">
                                                                                        <span class="vs-radio vs-radio-sm">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="font-small-2">ลบ</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-danger">
                                                                                        <input type="radio" name="T2_Antigen_Result" value="2">
                                                                                        <span class="vs-radio vs-radio-sm">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="font-small-2">บวก</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-success">
                                                                                        <input type="radio" name="T2_Antigen_Result" value="3">
                                                                                        <span class="vs-radio vs-radio-sm">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="font-small-2">ยังไม่ทราบผล</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <ul class="list-unstyled mt-1">
                                                                    <li class="d-inline-block">
                                                                        <fieldset>
                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                <input type="checkbox" id="myCheckT2_RT2" name="T2_RT_PCR" value="1" onclick="myFunctionT2_RT2()">
                                                                                <span class="vs-checkbox">
                                                                                    <span class="vs-checkbox--check">
                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                    </span>
                                                                                </span>
                                                                                <span class="">RT-PCR</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                                <span id="textT2_RT2" style="display:none">
                                                                    <div class="table-responsive border rounded px-1 mt-1">
                                                                        <span>ผลตรวจ</span>
                                                                        <ul class="list-unstyled mb-0">
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con">
                                                                                        <input type="radio" name="T2_RT_PCR_Result" value="1">
                                                                                        <span class="vs-radio vs-radio-sm">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="font-small-2">ลบ</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-danger">
                                                                                        <input type="radio" name="T2_RT_PCR_Result" value="2">
                                                                                        <span class="vs-radio vs-radio-sm">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="font-small-2">บวก</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-success">
                                                                                        <input type="radio" name="T2_RT_PCR_Result" value="3">
                                                                                        <span class="vs-radio vs-radio-sm">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="font-small-2">ยังไม่ทราบผล</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block">
                                                                        <fieldset>
                                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                <input type="checkbox" id="myCheckT2_Antibody2" name="T2_Antibody" value="1" onclick="myFunctionT2_Antibody2()">
                                                                                <span class="vs-checkbox">
                                                                                    <span class="vs-checkbox--check">
                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                    </span>
                                                                                </span>
                                                                                <span class="">Antibody <br>repid test</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                </ul>
                                                                <span id="textT2_Antibody2" style="display:none">
                                                                    <div class="table-responsive border rounded px-1 mt-1">
                                                                        <span>ผลตรวจ</span>
                                                                        <ul class="list-unstyled mb-0">
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con">
                                                                                        <input type="radio" name="T2_Antibody_Result" value="1">
                                                                                        <span class="vs-radio vs-radio-sm">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="font-small-2">ลบ</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-danger">
                                                                                        <input type="radio" name="T2_Antibody_Result" value="2">
                                                                                        <span class="vs-radio vs-radio-sm">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="font-small-2">บวก</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con vs-radio-success">
                                                                                        <input type="radio" name="T2_Antibody_Result" value="3">
                                                                                        <span class="vs-radio vs-radio-sm">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="font-small-2">ยังไม่ทราบผล</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </span>
                                                            </div>

                                                                <script>
                                                                    function myFunctionT2_Antigen2() {
                                                                        var checkBox = document.getElementById("myCheckT2_Antigen2");
                                                                        var text = document.getElementById("textT2_Antigen2");
                                                                        if (checkBox.checked == true){
                                                                            text.style.display = "block";
                                                                        } else {
                                                                            text.style.display = "none";
                                                                        }
                                                                    }
                                                                    function myFunctionT2_RT2() {
                                                                        var checkBox = document.getElementById("myCheckT2_RT2");
                                                                        var text = document.getElementById("textT2_RT2");
                                                                        if (checkBox.checked == true){
                                                                            text.style.display = "block";
                                                                        } else {
                                                                            text.style.display = "none";
                                                                        }
                                                                    }
                                                                    function myFunctionT2_Antibody2() {
                                                                        var checkBox = document.getElementById("myCheckT2_Antibody2");
                                                                        var text = document.getElementById("textT2_Antibody2");
                                                                        if (checkBox.checked == true){
                                                                            text.style.display = "block";
                                                                        } else {
                                                                            text.style.display = "none";
                                                                        }
                                                                    }
                                                                </script>
                                                        </div>
                                                    </div>
                                                </div>
                                            </span>
                                            <hr>
                                                <div class="col-12">
                                                    <div class="chat-footer">
                                                        <label for="first-name-icon" class="mb-1">สถานที่</label>
                                                        <fieldset class="form-group position-relative has-icon-left">
                                                            <input type="text" name="address" id="uss0-address" class="form-control" placeholder="ค้นหาสถานที่.." required>

                                                            <div class="form-control-position">
                                                                <i class="feather icon-search"></i>
                                                            </div>
                                                        </fieldset>
                                                        <input type="hidden" name="lat" class="form-control" id="uss0-lat" />
                                                        <input type="hidden" name="long" class="form-control" id="uss0-lon" />
                                                            <!-- map -->
                                                            <div id="uss0" style="height: 300px;"></div>
                                                        </div>

                                                        <script>

                                                            $( document ).ready(function() {
                                                                navigator.geolocation.getCurrentPosition(showPosition);
                                                                function showPosition(position) {
                                                                    var lat = position.coords.latitude;
                                                                    var lng = position.coords.longitude;
                                                                    $('#uss0-lat').val(lat);
                                                                    $('#uss0-lon').val(lng);
                                                                    buildMap(lat, lng);
                                                                }
                                                            });

                                                            function buildMap(lat, lng) {
                                                                $('#uss0').locationpicker({
                                                                    location: {
                                                                        latitude: +lat || 17.186593,
                                                                        longitude: +lng || 104.1057998
                                                                        },
                                                                        zoom: 14,
                                                                    radius: 0,
                                                                    inputBinding: {
                                                                        latitudeInput: $('#uss0-lat'),
                                                                        longitudeInput: $('#uss0-lon'),
                                                                        radiusInput: $('#uss0-radius'),
                                                                        locationNameInput: $('#uss0-address')
                                                                    },
                                                                    enableAutocomplete: true,
                                                                    // onchanged: function (currentLocation, radius, isMarkerDropped) {
                                                                    //     // Uncomment line below to show alert on each Location Changed event
                                                                    //     //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");

                                                                    // }

                                                                });
                                                            }
                                                        </script>
                                                </div>

                                        </div>
                                        <div class="modal-footer">


                                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                                <button type="submit" class="btn btn-success"><i class="feather icon-check d-block d-lg-none"></i>
                                                    <span class="d-none d-lg-block"><i class="feather icon-save"></i> บันทึก</span></button>
                                            </fieldset>
                                        </div>

                                </div>

                        </div>
                    </div>
                </form>
                 <!-- Modal ดาวห์โหลด Timeline -->
                 <div class="modal fade" id="downloadTaskModal" tabindex="-1" role="dialog" aria-labelledby="downloadModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">


                            <div class="modal-content">


                                    <div class="modal-header bg-success white">
                                        <h5 class="modal-title" id="exampleModalLabel"><i class="feather icon-clipboard mr-50"></i> ดาวห์โหลด Timeline</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        @foreach ($timeline as $items)
                                        <ul>
                                            <li><a href="{{route('wordExport_timeline', $items->date)}}" class=""> วันที่ {{DateFThai(date('d-m-Y', strtotime($items->date)))}}</a></li>
                                        </ul>

                                        @endforeach
                                    </div>
                                    <div class="modal-footer">
                                        <fieldset class="form-group position-relative has-icon-left mb-0">
                                            <button type="buttom" class="btn btn-success"  data-dismiss="modal">ปิด</button>
                                        </fieldset>
                                    </div>

                            </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="content-right">
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <div class="app-content-overlay"></div>
                    <div class="todo-app-area">
                        <div class="todo-app-list-wrapper">
                            <div class="todo-app-list">
                                <div class="app-fixed-search">
                                    <div class="sidebar-toggle d-block d-lg-none"><i class="feather icon-menu"></i></div>
                                    <fieldset class="form-group position-relative has-icon-left m-0">
                                        <input type="text" class="form-control" id="todo-search" placeholder="Search..">
                                        <div class="form-control-position">
                                            <i class="feather icon-search"></i>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="todo-task-list list-group">
                                    <ul class="todo-task-list-wrapper media-list">

                                            @foreach ($timeline_detail_first as $user)

                                            <li class="todo-item" data-toggle="modal" data-target="#editTaskModal{{ $user->id }}">
                                                <div class="todo-title-wrapper d-flex justify-content-between mb-50">
                                                    <div class="todo-title-area d-flex align-items-center">
                                                        <div class="title-wrapper d-flex"><i class="font-medium-5 feather icon-calendar "></i>
                                                            {{-- <div class="vs-checkbox-con">
                                                                <input type="checkbox">
                                                                <span class="vs-checkbox vs-checkbox-sm">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                            </div> --}}
                                                            <h6 class="todo-title mt-50 mx-50"> เวลา {{ $user->time }} น. </h6>
                                                        </div>
                                                        <div class="chip-wrapper">
                                                            @if($user->D == '1')
                                                            <div class="chip mb-0">
                                                                <div class="chip-body">
                                                                    <span class="chip-text" data-value="Frontend"><span class="bullet bullet-primary bullet-xs"></span> เว้นระยะห่าง (D)</span>
                                                                </div>
                                                            </div>
                                                            @endif
                                                            @if($user->M == '1')
                                                            <div class="chip mb-0">
                                                                <div class="chip-body">
                                                                    <span class="chip-text" data-value="Frontend"><span class="bullet bullet-warning bullet-xs"></span> สวมแมสก์ (M)</span>
                                                                </div>
                                                            </div>
                                                            @endif
                                                            @if($user->H == '1')
                                                            <div class="chip mb-0">
                                                                <div class="chip-body">
                                                                    <span class="chip-text" data-value="Frontend"><span class="bullet bullet-success bullet-xs"></span> ล้างมือ (H)</span>
                                                                </div>
                                                            </div>
                                                            @endif
                                                            @if($user->A == '1')
                                                            <div class="chip mb-0">
                                                                <div class="chip-body">
                                                                    <span class="chip-text" data-value="Frontend"><span class="bullet bullet-info bullet-xs"></span> ไทยชนะ/หมอชนะ (A)</span>
                                                                </div>
                                                            </div>
                                                            @endif
                                                            @if($user->T == '1')
                                                            <div class="chip mb-0">
                                                                <div class="chip-body">
                                                                    <span class="chip-text" data-value="Frontend"><span class="bullet bullet-secondary bullet-xs"></span> วัดอุณหภูมิ {{ $user->temperature }} (T)</span>
                                                                </div>
                                                            </div>
                                                            @endif

                                                            @if($user->T2 == '1')
                                                            <div class="chip mb-0">
                                                                <div class="chip-body">
                                                                    <span class="chip-text" data-value="Frontend"><span class="bullet bullet-danger bullet-xs"></span> ตรวจหาโควิด-19 (T2) |
                                                                @if($user->T2_Antigen == '1')
                                                                    Antigen rapid test (
                                                                    @if($user->T2_Antigen_Result == '1')
                                                                    ลบ
                                                                    @elseif($user->T2_Antigen_Result == '2')
                                                                    บวก
                                                                    @elseif($user->T2_Antigen_Result == '3')
                                                                    ยังไม่ทราบผล
                                                                    @endif
                                                                    )
                                                                @endif
                                                                @if($user->T2_RT_PCR == '1')
                                                                    Antigen rapid test (
                                                                    @if($user->T2_RT_PCR_Result == '1')
                                                                    ลบ
                                                                    @elseif($user->T2_RT_PCR_Result == '2')
                                                                    บวก
                                                                    @elseif($user->T2_RT_PCR_Result == '3')
                                                                    ยังไม่ทราบผล
                                                                    @endif
                                                                    )
                                                                @endif
                                                                @if($user->T2_Antibody == '1')
                                                                    Antigen rapid test (
                                                                    @if($user->T2_Antibody_Result == '1')
                                                                    ลบ
                                                                    @elseif($user->T2_Antibody_Result == '2')
                                                                    บวก
                                                                    @elseif($user->T2_Antibody_Result == '3')
                                                                    ยังไม่ทราบผล
                                                                    @endif
                                                                    )
                                                                @endif
                                                                </span>
                                                                </div>
                                                            </div>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    {{-- <div class="float-right todo-item-action">
                                                        <a class='todo-item-info'><i class="feather icon-info"></i></a>
                                                        <a class='todo-item-favorite'><i class="feather icon-star"></i></a>
                                                        <a class='#'><i class="feather icon-trash"></i></a>
                                                    </div> --}}
                                                </div>
                                                <p class="todo-desc truncate mb-0">{{ $user->description }}</p>
                                            </li>

                                            @endforeach



                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                        @foreach ($timeline_detail_first as $user)
                        <!-- Modal -->
                        <form action="{{route('timeline-covid-detial.update', $user->id)}}" method="POST" novalidate>
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="modal fade" id="editTaskModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="editTodoTask" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">


                                            <div class="modal-header bg-success white">
                                                <h5 class="modal-title" id="exampleModalLabel"><i class="feather icon-clipboard mr-50"></i> แก้ไขข้อมูล Timeline</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <span>วันที่</span>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="controls">
                                                                <input type='text' name="date" class="form-control pickadate" value="{{ DateDataEdit($user->date) }}" data-validation-required-message="กรุณากรอกข้อมูลให้ครบถ้วน" required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <span>เวลา</span>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="controls">
                                                                <input type='text' name="time" class="form-control pickatime" value="{{ TimeThai2($user->time) }}" data-validation-required-message="กรุณากรอกข้อมูลให้ครบถ้วน" required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-icon">รายละเอียด</label>
                                                        <div class="position-relative has-icon-left">
                                                            <textarea class="form-control" name="description" rows="3" placeholder="รายละเอียดกิจกรรม" required>{{ $user->description }}</textarea>
                                                            <div class="form-control-position">
                                                                <i class="feather icon-clipboard"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="col-12">
                                                    <label for="first-name-icon">มาตรการ DMHTT</label>
                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                                                <div class="vs-checkbox-con vs-checkbox-success">
                                                                    <input type="checkbox" {{ ($user->D == 1 ? ' checked' : '')}} name="D" value="1">
                                                                    <span class="vs-checkbox vs-checkbox-lg">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span class=""><i class="fas fa-head-side-mask"></i> อยู่ห่าง 1-2 ม. (D)</span>
                                                                </div>
                                                            </fieldset>
                                                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                                                <div class="vs-checkbox-con vs-checkbox-success">
                                                                    <input type="checkbox" {{ ($user->M == 1 ? ' checked' : '')}} name="M" value="1">
                                                                    <span class="vs-checkbox vs-checkbox-lg">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span class=""><i class="fas fa-head-side-mask"></i> ใส่แมสก์ (M)</span>
                                                                </div>
                                                            </fieldset>
                                                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                                                <div class="vs-checkbox-con vs-checkbox-success">
                                                                    <input type="checkbox" {{ ($user->H == 1 ? ' checked' : '')}} name="H" value="1">
                                                                    <span class="vs-checkbox vs-checkbox-lg">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span class=""><i class="fas fa-head-side-mask"></i> ล้างมือ (H)</span>
                                                                </div>
                                                            </fieldset>

                                                        </div>
                                                        <div class="col-md-6">
                                                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                                                <div class="vs-checkbox-con vs-checkbox-success">
                                                                    <input type="checkbox" {{ ($user->A == 1 ? ' checked' : '')}} name="A" value="1">
                                                                    <span class="vs-checkbox vs-checkbox-lg">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span class=""><i class="fas fa-head-side-mask"></i> ไทยชนะ/หมอชนะ (A)</span>
                                                                </div>
                                                            </fieldset>
                                                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                                                <div class="vs-checkbox-con vs-checkbox-success">
                                                                    <input type="checkbox" {{ ($user->T == 1 ? ' checked' : '')}} name="T" value="1" id="{{ $user->id }}chkPassport" >
                                                                    <span class="vs-checkbox vs-checkbox-lg">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span class=""><i class="fas fa-head-side-mask"></i> วัดอุณหภูมิ (T)</span>
                                                                </div>
                                                                @if($user->T == 1)
                                                                <span id="dvPassport{{ $user->id }}"><input type="text" name="temperature" class="form-control" value="{{ $user->temperature }}" placeholder="อุณหภูมิ" /></span>
                                                                @else
                                                                <span id="dvPassport{{ $user->id }}" style="display: none"><input type="text" name="temperature" class="form-control" placeholder="อุณหภูมิ" /></span>
                                                                @endif
                                                                <script type="text/javascript">
                                                                    $(function () {
                                                                        $("#{{ $user->id }}chkPassport").click(function () {
                                                                            if ($(this).is(":checked")) {
                                                                                $("#dvPassport{{ $user->id }}").show();
                                                                            } else {
                                                                                $("#dvPassport{{ $user->id }}").hide();
                                                                            }
                                                                        });
                                                                    });
                                                                </script>
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                                                <div class="vs-checkbox-con vs-checkbox-success">
                                                                    <input type="checkbox" name="T2" value="1" id="{{ $user->id }}myCheck22edit" {{ ($user->T2 == 1 ? ' checked' : '')}} onclick="myT22{{ $user->id }}edit()">
                                                                    <span class="vs-checkbox vs-checkbox-lg">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span class=""><i class="fas fa-head-side-mask"></i> ตรวจหาโควิด-19 (T)</span>
                                                                </div>
                                                                <script>
                                                                    function myT22{{ $user->id }}edit() {
                                                                            var checkBox = document.getElementById("{{ $user->id }}myCheck22edit");
                                                                            var text = document.getElementById("{{ $user->id }}T2edit");
                                                                            if (checkBox.checked == true){
                                                                                text.style.display = "block";
                                                                            } else {
                                                                                text.style.display = "none";
                                                                            }
                                                                        }
                                                                </script>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </div>

                                                @if($user->T2 == 1)
                                                <span id="{{ $user->id }}T2edit">
                                                @else
                                                <span id="{{ $user->id }}T2edit" style="display:none">
                                                @endif
                                                    <div class="col-12">
                                                        <div class="table-responsive border rounded px-1 mt-1">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <ul class="list-unstyled mb-0">
                                                                        <li class="d-inline-block">
                                                                            <fieldset>
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" id="{{ $user->id }}Antigen2edit" {{ ($user->T2_Antigen == 1 ? ' checked' : '')}} name="T2_Antigen" value="1" onclick="Antigen{{ $user->id }}edit()">
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">Antigen <br>repid test</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                    </ul>
                                                                    @if($user->T2_Antigen == 1)
                                                                    <span id="{{ $user->id }}Antiedit">
                                                                    @else
                                                                    <span id="{{ $user->id }}Antiedit" style="display:none">
                                                                    @endif
                                                                        <div class="table-responsive border rounded px-1 mt-1">
                                                                            <span>ผลตรวจ</span>
                                                                            <ul class="list-unstyled mb-0">
                                                                                <li class="d-inline-block mr-2">
                                                                                    <fieldset>
                                                                                        <div class="vs-radio-con">
                                                                                            <input type="radio" name="T2_Antigen_Result" value="1" {{ ($user->T2_Antigen_Result == 1 ? ' checked' : '')}}>
                                                                                            <span class="vs-radio vs-radio-sm">
                                                                                                <span class="vs-radio--border"></span>
                                                                                                <span class="vs-radio--circle"></span>
                                                                                            </span>
                                                                                            <span class="font-small-2">ลบ</span>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </li>
                                                                                <li class="d-inline-block mr-2">
                                                                                    <fieldset>
                                                                                        <div class="vs-radio-con vs-radio-danger">
                                                                                            <input type="radio" name="T2_Antigen_Result" value="2" {{ ($user->T2_Antigen_Result == 2 ? ' checked' : '')}}>
                                                                                            <span class="vs-radio vs-radio-sm">
                                                                                                <span class="vs-radio--border"></span>
                                                                                                <span class="vs-radio--circle"></span>
                                                                                            </span>
                                                                                            <span class="font-small-2">บวก</span>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </li>
                                                                                <li class="d-inline-block">
                                                                                    <fieldset>
                                                                                        <div class="vs-radio-con vs-radio-success">
                                                                                            <input type="radio" name="T2_Antigen_Result" value="3" {{ ($user->T2_Antigen_Result == 3 ? ' checked' : '')}}>
                                                                                            <span class="vs-radio vs-radio-sm">
                                                                                                <span class="vs-radio--border"></span>
                                                                                                <span class="vs-radio--circle"></span>
                                                                                            </span>
                                                                                            <span class="font-small-2">ยังไม่ทราบผล</span>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </span>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <ul class="list-unstyled mt-1">
                                                                        <li class="d-inline-block">
                                                                            <fieldset>
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" id="{{ $user->id }}RT2edit" {{ ($user->T2_RT_PCR == 1 ? ' checked' : '')}} name="T2_RT_PCR" value="1" onclick="RT{{ $user->id }}2()">
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">RT-PCR</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                    </ul>
                                                                    @if($user->T2_RT_PCR == 1)
                                                                    <span id="{{ $user->id }}RT2edit2">
                                                                    @else
                                                                    <span id="{{ $user->id }}RT2edit2" style="display:none">
                                                                    @endif
                                                                        <div class="table-responsive border rounded px-1 mt-1">
                                                                            <span>ผลตรวจ</span>
                                                                            <ul class="list-unstyled mb-0">
                                                                                <li class="d-inline-block mr-2">
                                                                                    <fieldset>
                                                                                        <div class="vs-radio-con">
                                                                                            <input type="radio" name="T2_RT_PCR_Result" {{ ($user->T2_RT_PCR_Result == 1 ? ' checked' : '')}} value="1">
                                                                                            <span class="vs-radio vs-radio-sm">
                                                                                                <span class="vs-radio--border"></span>
                                                                                                <span class="vs-radio--circle"></span>
                                                                                            </span>
                                                                                            <span class="font-small-2">ลบ</span>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </li>
                                                                                <li class="d-inline-block mr-2">
                                                                                    <fieldset>
                                                                                        <div class="vs-radio-con vs-radio-danger">
                                                                                            <input type="radio" name="T2_RT_PCR_Result" {{ ($user->T2_RT_PCR_Result == 2 ? ' checked' : '')}} value="2">
                                                                                            <span class="vs-radio vs-radio-sm">
                                                                                                <span class="vs-radio--border"></span>
                                                                                                <span class="vs-radio--circle"></span>
                                                                                            </span>
                                                                                            <span class="font-small-2">บวก</span>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </li>
                                                                                <li class="d-inline-block">
                                                                                    <fieldset>
                                                                                        <div class="vs-radio-con vs-radio-success">
                                                                                            <input type="radio" name="T2_RT_PCR_Result" {{ ($user->T2_RT_PCR_Result == 3 ? ' checked' : '')}} value="3">
                                                                                            <span class="vs-radio vs-radio-sm">
                                                                                                <span class="vs-radio--border"></span>
                                                                                                <span class="vs-radio--circle"></span>
                                                                                            </span>
                                                                                            <span class="font-small-2">ยังไม่ทราบผล</span>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </span>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <ul class="list-unstyled mb-0">
                                                                        <li class="d-inline-block">
                                                                            <fieldset>
                                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                    <input type="checkbox" id="Antibody{{ $user->id }}edit" {{ ($user->T2_Antibody == 1 ? ' checked' : '')}} name="T2_Antibody" value="1" onclick="Anti{{ $user->id }}body2()">
                                                                                    <span class="vs-checkbox">
                                                                                        <span class="vs-checkbox--check">
                                                                                            <i class="vs-icon feather icon-check"></i>
                                                                                        </span>
                                                                                    </span>
                                                                                    <span class="">Antibody <br>repid test</span>
                                                                                </div>
                                                                            </fieldset>
                                                                        </li>
                                                                    </ul>
                                                                    @if($user->T2_Antibody == 1)
                                                                    <span id="{{ $user->id }}Antibody2edit">
                                                                    @else
                                                                    <span id="{{ $user->id }}Antibody2edit" style="display:none">
                                                                    @endif

                                                                        <div class="table-responsive border rounded px-1 mt-1">
                                                                            <span>ผลตรวจ</span>
                                                                            <ul class="list-unstyled mb-0">
                                                                                <li class="d-inline-block mr-2">
                                                                                    <fieldset>
                                                                                        <div class="vs-radio-con">
                                                                                            <input type="radio" name="T2_Antibody_Result" {{ ($user->T2_Antibody_Result == 1 ? ' checked' : '')}} value="1">
                                                                                            <span class="vs-radio vs-radio-sm">
                                                                                                <span class="vs-radio--border"></span>
                                                                                                <span class="vs-radio--circle"></span>
                                                                                            </span>
                                                                                            <span class="font-small-2">ลบ</span>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </li>
                                                                                <li class="d-inline-block mr-2">
                                                                                    <fieldset>
                                                                                        <div class="vs-radio-con vs-radio-danger">
                                                                                            <input type="radio" name="T2_Antibody_Result" {{ ($user->T2_Antibody_Result == 2 ? ' checked' : '')}} value="2">
                                                                                            <span class="vs-radio vs-radio-sm">
                                                                                                <span class="vs-radio--border"></span>
                                                                                                <span class="vs-radio--circle"></span>
                                                                                            </span>
                                                                                            <span class="font-small-2">บวก</span>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </li>
                                                                                <li class="d-inline-block">
                                                                                    <fieldset>
                                                                                        <div class="vs-radio-con vs-radio-success">
                                                                                            <input type="radio" name="T2_Antibody_Result" {{ ($user->T2_Antibody_Result == 3 ? ' checked' : '')}} value="3">
                                                                                            <span class="vs-radio vs-radio-sm">
                                                                                                <span class="vs-radio--border"></span>
                                                                                                <span class="vs-radio--circle"></span>
                                                                                            </span>
                                                                                            <span class="font-small-2">ยังไม่ทราบผล</span>
                                                                                        </div>
                                                                                    </fieldset>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </span>
                                                                </div>

                                                                    <script>
                                                                        function Antigen{{ $user->id }}edit() {
                                                                            var checkBox = document.getElementById("{{ $user->id }}Antigen2edit");
                                                                            var text = document.getElementById("{{ $user->id }}Antiedit");
                                                                            if (checkBox.checked == true){
                                                                                text.style.display = "block";
                                                                            } else {
                                                                                text.style.display = "none";
                                                                            }
                                                                        }
                                                                        function RT{{ $user->id }}2() {
                                                                            var checkBox = document.getElementById("{{ $user->id }}RT2edit");
                                                                            var text = document.getElementById("{{ $user->id }}RT2edit2");
                                                                            if (checkBox.checked == true){
                                                                                text.style.display = "block";
                                                                            } else {
                                                                                text.style.display = "none";
                                                                            }
                                                                        }
                                                                        function Anti{{ $user->id }}body2() {
                                                                            var checkBox = document.getElementById("Antibody{{ $user->id }}edit");
                                                                            var text = document.getElementById("{{ $user->id }}Antibody2edit");
                                                                            if (checkBox.checked == true){
                                                                                text.style.display = "block";
                                                                            } else {
                                                                                text.style.display = "none";
                                                                            }
                                                                        }
                                                                    </script>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </span>
                                                <hr>
                                                    <div class="col-12">

                                                        <div class="chat-footer">
                                                            <label for="first-name-icon">สถานที่</label>
                                                            <fieldset class="form-group position-relative has-icon-left">
                                                                {{-- <input type="text" name="address" id="us3-address" class="form-control" placeholder="ค้นหาสถานที่.." required> --}}
                                                                <input type="text" name="address" id="us3-address{{ $user->id }}" class="form-control" value="{{$user->address}}" placeholder="ค้นหาสถานที่.." required>
                                                                <div class="form-control-position">
                                                                    <i class="feather icon-search"></i>
                                                                </div>
                                                            </fieldset>
                                                            <input type="hidden" name="lat"  class="form-control" id="us3-lat{{ $user->id }}" />
                                                            <input type="hidden" name="long" class="form-control" id="us3-lon{{ $user->id }}" />
                                                                <!-- map -->
                                                                <div id="us{{ $user->id }}" style="height: 300px;"></div>
                                                        </div>


                                                        <script>

                                                            $('#us{{ $user->id }}').locationpicker({
                                                                        location: {latitude: {{ $user->lat }}, longitude: {{ $user->long }}},
                                                                        radius: 0,
                                                                        inputBinding: {
                                                                            latitudeInput: $('#us3-lat{{ $user->id }}'),
                                                                            longitudeInput: $('#us3-lon{{ $user->id }}'),
                                                                            radiusInput: $('#us3-radius{{ $user->id }}'),
                                                                            locationNameInput: $('#us3-address{{ $user->id }}')
                                                                        },
                                                                        enableAutocomplete: true
                                                                    });

                                                        </script>
                                                    </div>

                                            </div>
                                            <div class="modal-footer">


                                                <fieldset class="form-group position-relative has-icon-left mb-0">
                                                    <button type="submit" class="btn btn-success"><i class="feather icon-check d-block d-lg-none"></i>
                                                        <span class="d-none d-lg-block"><i class="feather icon-plus-square"></i> แก้ไข</span></button>
                                                </fieldset>
                                                <fieldset class="form-group position-relative has-icon-left mb-0">
                                                    <button type="buttom" class="btn btn-outline-warning waves-effect waves-light" data-dismiss="modal"><i class="feather icon-x d-block d-lg-none"></i>
                                                        <span class="d-none d-lg-block">ยกเลิก</span></button>
                                                </fieldset>
                                                <fieldset class="form-group position-relative has-icon-left mb-0">
                                                    <button type="buttom" class="btn btn-outline-danger waves-effect waves-light" data-toggle="modal" data-target="#delTaskModal{{$user->id}}" data-dismiss="modal"><i class="feather icon-trash d-block d-lg-none"></i>
                                                        <span class="d-none d-lg-block">ลบข้อมูล</span></button>
                                                        {{-- <a data-toggle="modal" href="#delTaskModal{{$user->id}}" class="btn btn-danger waves-effect waves-light"><i class="feather icon-trash d-block d-lg-none"></i> ลบข้อมูล</a> --}}
                                                </fieldset>
                                            </div>

                                    </div>

                                </div>
                            </div>
                        </form>
                            <div class="modal fade" id="delTaskModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="delTaskModal" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <form action="{{ route('timeline-covid-detial.destroy', $user->id)}}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="delTaskModal">ลบข้อมูล</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h5>คุณต้องการลบข้อมูล Timeline วันที่ "{{ DateDataEdit($user->date) }}" เวลา "{{ TimeThai2($user->time) }}" ใช่หรือไม่?</h5>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn grey mr-1 mb-1 btn-outline-secondary" data-dismiss="modal">ยกเลิก</button>
                                                <button type="submit" class="btn btn-danger mr-1 mb-1 waves-effect waves-light">ลบข้อมูล</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Content-->

@endsection

@section('scripts')

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

{{-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places&key=AIzaSyAtX0RPGP355G6ifDNxoLyTJxdqVtshDa8&language=th"></script> --}}
<script src="{{ asset('js') }}/jquery-locationpicker-plugin-master/src/locationpicker.jquery.js"></script>


    {{-- <script
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtX0RPGP355G6ifDNxoLyTJxdqVtshDa8&callback=initMap&libraries=&v=weekly"
async
></script> --}}

<script src="{{ asset('app-assets') }}/vendors/js/pickers/pickadate/picker.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/pickers/pickadate/picker.date.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/pickers/pickadate/picker.time.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/pickers/pickadate/legacy.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/forms/select/select2.full.min.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/extensions/jquery.steps.min.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/forms/validation/jquery.validate.min.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/extensions/toastr.min.js"></script>


<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('app-assets') }}/vendors/js/ui/jquery.sticky.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/editors/quill/katex.min.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/editors/quill/highlight.min.js"></script>
<script src="{{ asset('app-assets') }}/vendors/js/editors/quill/quill.min.js"></script>
<script>
    @if(Session::has('covid-success'))
            // Success Type
        toastr.success("{{ Session::get('covid-success') }}", 'ระบบบันทึก Timeline');
    @endif

    @if(Session::has('covid-info'))
        // Info Type
        toastr.info("{{ Session::get('covid-info') }}", 'ระบบบันทึก Timeline');
    @endif

    @if(Session::has('covid-warning'))
        // Delete
        toastr.error("{{ Session::get('covid-warning') }}", 'ระบบบันทึก Timeline');
    @endif

</script>
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets') }}/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>
    <script src="{{ asset('app-assets') }}/js/scripts/extensions/toastr.js"></script>
    <script src="{{ asset('app-assets') }}/js/scripts/pages/app-todo.js"></script>
    <!-- END: Page JS-->
@endsection

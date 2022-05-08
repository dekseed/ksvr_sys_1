<section class="page-users-view">
    <div class="row">
        <!-- account start -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if(Auth::user()->report_check_up_id == '0')
                        <p><h3 class="text-center">ไม่มีข้อมูลตรวจสุขภาพ</h3></p>
                        <div class="text-center"><a href="#" class="btn btn-warning mr-1 mb-1 waves-effect waves-light" data-toggle="modal" data-target="#import_profile"><i class="feather icon-user-plus"></i> เชื่อมต่อข้อมูลตรวจสุขภาพ</a></div>
                            <div class="modal fade" id="import_profile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <form id="store" class="form-horizontal" name="store" action="{{ route('profile.connect_CheckUp', Auth::user()->id)}}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel1"><i class="feather icon-save"></i> เชื่อมต่อข้อมูลตรวจสุขภาพ</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <p><h3 class="text-center">ยืนยันตัวตน</h3></p>
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <span>เลขที่บัตรประชาชน</span>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="position-relative has-icon-left">
                                                                        <input type="number" id="contact-icon" class="form-control" name="cid" placeholder="เลขที่บัตรประชาชน" required>
                                                                        <div class="form-control-position">
                                                                            <i class="feather icon-user"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <span>หมายเลข HN</span>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="position-relative has-icon-left">
                                                                        <input type="number" id="contact-icon" class="form-control" name="hn" placeholder="หมายเลข HN" required>
                                                                        <div class="form-control-position">
                                                                            <i class="feather icon-smartphone"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <span>วันเดือนปีเกิด</span>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="position-relative has-icon-left">
                                                                        <input type="date" id="contact-icon" class="form-control" name="date" placeholder="วันเดือนปีเกิด" required>
                                                                        <div class="form-control-position">
                                                                            <i class="feather icon-smartphone"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> ตกลง</button>
                                                <button type="button" class="btn grey mr-1 btn-outline-secondary" data-dismiss="modal">ยกเลิก</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                    @else
                    <div class="col-12 text-right">
                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#disconnect_CheckUp<?= Auth::user()->id ?>">ยกเลิกเชื่อมต่อข้อมูลตรวจสุขภาพ</a>
                    </div>
                        <ul class="nav nav-pills justify-content-center">
                        @foreach ($data3 as $item)
                            <li class="nav-item">
                                <a class="nav-link" id="home{{$item->year}}-tab-fill" data-toggle="pill" href="#home{{$item->year}}-fill" aria-expanded="true">ปี {{ $item->year + 543 }}</a>
                            </li>
                        @endforeach
                        </ul>
                    @endif

                    <div class="tab-content">
                    @if(Auth::user()->report_check_up_id == '0')
                    {{-- <p><h3 class="text-center">ไม่มีข้อมูลตรวจสุขภาพ</h3></p> --}}
                    @elseif(count($data3))
                    @foreach ($data3 as $item)
                        <div role="tabpanel" class="tab-pane" id="home{{$item->year}}-fill" aria-labelledby="home{{$item->year}}-tab-fill" aria-expanded="true">

                            <div class="col-12">
                                <h2 class="text-center mb-2"><i class="feather icon-clipboard"></i> ข้อมูลตรวจสุขภาพปี {{ $item->year + 543 }}</h2>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="row">
                                        <div class="table-responsive border rounded px-1 ">
                                            <h6 class="border-bottom py-1 mx-1 mb-0 font-medium-2"><i class="feather icon-lock mr-50 "></i>สรุปผลตรวจสุขภาพ</h6>
                                            <div class="row">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block mr-2">
                                                                        <fieldset>
                                                                            <div class="vs-checkbox-con vs-checkbox-danger">
                                                                                <input type="checkbox"  value="false" {{ $item->healthCheckResult->result_1 == '1' ? 'checked' : ''}} disabled>
                                                                                <span class="vs-checkbox vs-checkbox-lg">
                                                                                    <span class="vs-checkbox--check">
                                                                                        <i class="vs-icon feather icon-check"></i>
                                                                                    </span>
                                                                                </span>
                                                                                <span class="">ผลการตรวจปกติ</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </li>
                                                                    <li class="d-inline-block mr-2">
                                                                        <fieldset>
                                                                            <div class="vs-checkbox-con vs-checkbox-danger">
                                                                                <input type="checkbox" name="result_2" {{ $item->healthCheckResult->result_2 == '1' ? 'checked' : ''}} disabled>
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
                                                                                <input type="checkbox" name="result_3" {{ $item->healthCheckResult->result_3 == '1' ? 'checked' : ''}} disabled>

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
                                                                                <input type="checkbox" name="result_4" {{ $item->healthCheckResult->result_4 == '1' ? 'checked' : ''}} disabled>
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
                                                                                <input type="checkbox" name="result_5" {{ $item->healthCheckResult->result_5 == '1' ? 'checked' : ''}} disabled>
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
                                                            <div class="col-md-6">
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-inline-block mr-2">
                                                                        <fieldset>
                                                                            <div class="vs-checkbox-con vs-checkbox-danger">
                                                                                <input type="checkbox" name="result_6" {{ $item->healthCheckResult->result_6 == '1' ? 'checked' : ''}} disabled>
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
                                                                                <input type="checkbox" name="result_7" {{ $item->healthCheckResult->result_7 == '1' ? 'checked' : ''}} disabled>
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
                                                                                <input type="checkbox" name="result_8" {{ $item->healthCheckResult->result_8 == '1' ? 'checked' : ''}} disabled>
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
                                                                                <input type="checkbox" name="result_9"

                                                                                value="0" disabled>
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
                                                                                <input type="checkbox" name="result_10" {{ $item->healthCheckResult->result_10 == '1' ? 'checked' : ''}} disabled>
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
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="table-responsive border rounded px-1 mt-2 mb-2">
                                            <h6 class="border-bottom py-1 mx-1 mb-0 font-medium-2"><i class="feather icon-lock mr-50 "></i>X-Ray</h6>

                                            <div class="row">
                                                <div class="form-group col-md-12 mb-2">
                                                    <div class="col-md-9">
                                                            <fieldset class="ml-1 mt-1">
                                                            <input type="radio" name="x_ray" value="0"  disabled
                                                            @if($item->report_check_up_main_detail_1->x_ray == "0") checked="checked" @endif >
                                                                <label for="input-radio-11">ไม่ได้ตรวจ</label>
                                                            </fieldset>
                                                            <fieldset class="ml-1">
                                                            <input type="radio" name="x_ray" value="1"  disabled
                                                            @if($item->report_check_up_main_detail_1->x_ray == "1") checked="checked" @endif >
                                                            <label for="input-radio-12">ปกติ</label>
                                                            </fieldset>
                                                            <fieldset class="ml-1">
                                                            <input type="radio" name="x_ray" value="2" disabled
                                                            @if($item->report_check_up_main_detail_1->x_ray == "2") checked="checked" @endif >
                                                            <label for="input-radio-12">ผิดปกติ</label>
                                                            </fieldset>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @if($item->report_check_up_main->gender == '2')
                                    <div class="row">
                                        <div class="table-responsive border rounded px-1 mt-2 mb-2">
                                            <h6 class="border-bottom py-1 mx-1 mb-0 font-medium-2"><i class="feather icon-lock mr-50 "></i>pap smear</h6>
                                            <div class="row">
                                                <div class="form-group col-md-6 mb-2">

                                                    <div class="col-md-9">
                                                        <fieldset class="ml-1 mt-1">
                                                            <input type="radio" name="pap" value="0"  onclick="j10_2_2create();" disabled
                                                            @if($item->report_check_up_main_detail_1->pap  == "0") checked="checked" @endif >
                                                            <label for="input-radio-11">ไม่ได้ตรวจ</label>
                                                        </fieldset>
                                                        <fieldset class="ml-1">
                                                            <input type="radio" name="pap" value="1"  onclick="j10_2_2create();" disabled
                                                            @if($item->report_check_up_main_detail_1->pap == "1") checked="checked" @endif >
                                                            <label for="input-radio-12">ปกติ</label>
                                                        </fieldset>
                                                        <fieldset class="ml-1">
                                                            <input type="radio" name="pap" value="2" onclick="j10_2_1create();" disabled
                                                            @if($item->report_check_up_main_detail_1->pap  == "2") checked="checked" @endif >
                                                            <label for="input-radio-12">ผิดปกติ</label>
                                                            @if($item->pap  == "2")
                                                            <div id="div11create" style="margin-bottom: .5rem;">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label for="projectinput3">(ระบุ)</label>
                                                                        <fieldset>
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                                </div>
                                                                                <input type="text" class="form-control" aria-label="" placeholder=""
                                                                                disabled   name="pap_d" id='pap_d' value="{{ $item->report_check_up_main_detail_1->pap_d  }}" >


                                                                            </div>
                                                                        </fieldset>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="table-responsive border rounded px-1 ">
                                                        <h6 class="border-bottom py-1 mx-1 mb-0 font-medium-2"><i class="feather icon-lock mr-50 "></i>ข้อมูลทั่วไป</h6>

                                                            <div class="row">
                                                                <div class="col-md-6 col-12 mb-1">
                                                                    <label for="projectinput3">น้ำหนัก</label>
                                                                    <fieldset>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                            </div>
                                                                            <input type="text" class="form-control" placeholder="น้ำหนัก" aria-label="น้ำหนัก" value="{{ $item->report_check_up_main_detail_1->weight }}"
                                                                                        name="weight" id='weight' disabled>
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text">ก.ก.</span>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                                <div class="col-md-6 col-12 mb-1">
                                                                    <label for="projectinput3">ส่วนสูง</label>
                                                                    <fieldset>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                            </div>
                                                                            <input type="text" class="form-control" placeholder="ส่วนสูง" aria-label="ส่วนสูง" value="{{ $item->report_check_up_main_detail_1->height }}"
                                                                                        name="height" id='height' disabled>
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text">ซ.ม.</span>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6 col-12 mb-1">
                                                                    <label for="projectinput3">เส้นรอบเอว (วัดผ่านสะดือ)</label>
                                                                    <fieldset>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                            </div>
                                                                            <input type="text" class="form-control" placeholder="เส้นรอบเอว" aria-label="เส้นรอบเอว" value="{{ $item->report_check_up_main_detail_1->waist }}"
                                                                                        name="waist" id='waist' disabled>
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text">ซ.ม.</span>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                                <div class="col-md-6 col-12 mb-1">
                                                                    <label for="bmi">BMI</label>
                                                                    <fieldset>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                            </div>
                                                                            <input type="text" class="form-control" placeholder="BMI" aria-label="BMI" value="{{ $item->report_check_up_main_detail_1->bmi }}"
                                                                                        name="bmi" id='bmi' disabled>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>

                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4 col-12 mb-1">
                                                                    <label for="projectinput3">ความดันโลหิต (BPS)</label>
                                                                    <fieldset>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                            </div>
                                                                            <input type="number" class="form-control" placeholder="ความดันโลหิต" aria-label="ความดันโลหิต" value="{{ $item->report_check_up_main_detail_1->pressure_1 }}"
                                                                                        name="pressure_1" id='pressure_1' disabled>
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text">มม. ปรอท</span>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                                <div class="col-md-4 col-12 mb-1">
                                                                    <label for="projectinput3">ความดันโลหิต (BPD)</label>
                                                                    <fieldset>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                            </div>
                                                                            <input type="number" class="form-control" placeholder="ความดันโลหิต" aria-label="ความดันโลหิต" value="{{ $item->report_check_up_main_detail_1->pressure_2 }}"
                                                                                        name="pressure_2" id='pressure_2' disabled>
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text">มม. ปรอท</span>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                                <div class="col-md-4 col-12 mb-1">
                                                                    <label for="projectinput3">ชีพจร</label>
                                                                    <fieldset>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                            </div>
                                                                            <input type="number" class="form-control" placeholder="ชีพจร" aria-label="ชีพจร" value="{{ $item->report_check_up_main_detail_1->pulse_1 }}"
                                                                                        name="pulse_1" id='pulse_1' disabled>
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text">ครั้ง/นาที</span>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>

                                                            </div>

                                                        <p>*กรณีที่วัดความดันโลหิตครั้งแรกผิดปกติ ให้วัดครั้งที่ 2 หากค่าที่ได้ 2 ครั้งแตกต่างกันไม่เกิน 10 มม.ปรอท ให้ใช้ค่าที่ใกล้เคียงกับค่าปกติมากที่สุด แต่หากแตกต่างกันเกิน 10 มม.ปรอท ให้ใช้ค่าเฉลี่ยจากการวัดทั้ง 2 ครั้ง</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>

                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <div class="card">
                                        <div class="card-content">
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="table-responsive border rounded px-1">
                                                                <h6 class="border-bottom py-1 mx-1 mb-0 font-medium-2"><i class="feather icon-lock mr-50 "></i>ผลตรวจความสมบูรณ์ของเม็ดเลือด (CBC)</h6>

                                                            {{-- <label class="mb-2" for="input-radio-12"><strong>ผลตรวจความสมบูรณ์ของเม็ดเลือด (CBC)</strong></label> --}}

                                                                @include('pages.profile.show.show_import_cbc')

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                @if($item->report_check_up_main->age >= '35')
                                <div class="col-md-4 col-12">
                                    <div class="card">
                                        <div class="card-content">
                                                <div class="form-body">
                                                    <div class="row">

                                                        <div class="col-md-12">
                                                            <div class="table-responsive border rounded px-1">
                                                                <h6 class="border-bottom py-1 mx-1 mb-0 font-medium-2"><i class="feather icon-lock mr-50 "></i>ผลตรวจเลือด (Blood Chemistry)</h6>

                                                                {{-- <label class="mb-2" for="input-radio-12"><strong>ผลตรวจเลือด (Blood Chemistry)</strong></label> --}}
                                                                @if($item->report_check_up_main_detail_1->blood_glu > '0')
                                                                @include('pages.profile.show.show_import_BloodChemistry')
                                                                @else
                                                                <div class="text-bold-600 mt-1 mb-1">ไม่มีผลตรวจ</div>
                                                                @endif
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="col-md-4 col-12">
                                    <div class="card">
                                        <div class="card-content">
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="table-responsive border rounded px-1">
                                                                <h6 class="border-bottom py-1 mb-0 font-medium-2"><i class="feather icon-lock mr-50 "></i>ผลตรวจปัสสาวะ (Urine Examination)</h6>


                                                                @if($item->report_check_up_main_urine->urine_blood == '0')
                                                                <div class="text-bold-600 mt-1 mb-1">ไม่มีผลตรวจ</div>
                                                                @else
                                                                @include('pages.profile.show.show_import_urine')

                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                    @else
                    <p><h3 class="text-center">ไม่มีข้อมูลตรวจสุขภาพ</h3></p>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade text-left" id="disconnect_CheckUp<?= Auth::user()->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33"><i class="feather icon-lock mr-50 "></i> ยกเลิกเชื่อมต่อข้อมูลตรวจสุขภาพ</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('profile.disconnect_CheckUp', Auth::user()->id)}}" method="POST" novalidate>
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="modal-body">
                        <h5>กรุณาใส่รหัสผ่าน</h5>
                        <input type="password" class="form-control"
                        name="password" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn grey mr-1 mb-1 btn-outline-secondary" data-dismiss="modal">ยกเลิก</button>
                        <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light"><i class="feather icon-edit-1"></i> เปลี่ยนแปลงข้อมูล</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

@extends('layouts.home')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/select/select2.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/invoice.css">

    <style>
        table, th, thead, tbody, td {
            border: 1px solid black;
        }
        </style>
@endsection
@section('content')

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header text-center">
                <div class="col-md-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title mb-0">แบบซักถามประวัติกรณีเดินทางมาจากจังหวัดที่มีรายงานการระบาดของโรคติดเชื้อไวรัสโคโรนา ๒๐๑๙ <br>
                                และกรณีที่ลากลับภูมิลำเนา หรือไปราชการ หรือฝึกนอกที่ตั้งข้ามจังหวัด</h2>
                            {{-- <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Forms</a>
                                    </li>
                                    <li class="breadcrumb-item active">Form Wizard
                                    </li>
                                </ol>
                            </div> --}}
                        </div>
                    </div>
                </div>

            </div>
            <!-- BEGIN: Content-->

            <div class="content-body">
                <!-- invoice functionality start -->
                <section class="invoice-print mb-1">
                    <div class="row">

                        <fieldset class="col-12 col-md-5 mb-1 mb-md-0">
                            {{-- <div class="input-group">
                                <input type="text" class="form-control" placeholder="Email" aria-describedby="button-addon2">
                                <div class="input-group-append" id="button-addon2">
                                    <button class="btn btn-outline-primary" type="button">Send Invoice</button>
                                </div>
                            </div> --}}
                        </fieldset>
                        <div class="col-12 col-md-7 d-flex flex-column flex-md-row justify-content-end">
                            <a href="https://www.ksvrhospital.go.th/ksvr/users/report_ques_his_covid" class="btn btn-outline-warning mr-1 waves-effect waves-light">
                                <i class="fa fa-arrow-circle-left m-r-10"></i> กลับ</a>
                            <button class="btn btn-primary btn-print mb-1 mb-md-0"> <i class="feather icon-file-text"></i> Print</button>

                        </div>
                    </div>
                </section>
                <!-- invoice functionality end -->
                <!-- invoice page -->
                <section class="card invoice-page">
                    <div id="invoice-template" class="card-body">

                        <!-- Invoice Company Details -->
                        <div id="invoice-company-details" class="row">

                            <div class="col-12 text-center pt-1 mb-1">
                                <h4></h4>
                                {{-- <div class="invoice-details mt-2">
                                    <h6>INVOICE NO.</h6>
                                    <p>001/2019</p>
                                    <h6 class="mt-2">INVOICE DATE</h6>
                                    <p>10 Dec 2018</p>
                                </div> --}}
                            </div>
                        </div>

                        <div id="invoice-items-details" class="pt-1 invoice-items-table">

                            <div class="row">
                                <div class="col-12 text-center pt-1">
                                    <h4>หน่วยฝึก............... <strong>{{$agency->training_unit_army->name}}</strong> ...............สังกัด............... <strong>{{$agency->training_unit_army->agency_army->name}}</strong> ...............จังหวัด............... <strong>สกลนคร</strong> ...............</h4>
                                    {{-- <div class="invoice-details mt-2">
                                        <h6>INVOICE NO.</h6>
                                        <p>001/2019</p>
                                        <h6 class="mt-2">INVOICE DATE</h6>
                                        <p>10 Dec 2018</p>
                                    </div> --}}
                                </div>
                                <div class="table-responsive col-12">
                                    <table style="border: 1px solid black;" class="table" width="100%">
                                        <thead style="border: 1px solid black;">
                                            <tr>
                                                <th style="border: 1px solid black;" colspan = "10">
                                                    <h4 class="text-center"><strong>แบบซักถามประวัติกรณีเดินทางมาจากจังหวัดที่มีรายงานการระบาดของโรคติดเชื้อไวรัสโคโรนา ๒๐๑๙ <br>
                                                    และกรณีที่ลากลับภูมิลำเนา หรือไปราชการ หรือฝึกนอกที่ตั้งข้ามจังหวัด</strong></h4>
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody >
                                            <tr>
                                                <td width="3%" class="text-center">1.</td>
                                                <td width="60%" colspan = "6">ยศ ชื่อ - นามสกุล......................................<strong>{{$agency->title_name}} {{$agency->first_name}} {{$agency->last_name}}</strong>................................................</td>
                                                <td width="40%" colspan = "3">เบอร์โทรศัพท์มือถือ......................<strong>{{$agency->tel}}</strong>.....................</td>

                                            </tr>
                                            <tr>
                                                <td width="3%"  rowspan="2" class="text-center"></td>
                                                <td width="20%" rowspan = "2">ที่อยู่ปัจจุบัน</td>
                                                <td width="20%" colspan = "3">บ้านเลขที่...........<strong>{{$agency->address_user_covid->home_id}}</strong>.........</td>
                                                <td width="17%" colspan = "2">ซอย.........<strong>{{$agency->address_user_covid->alley}}</strong>............</td>
                                                <td width="40%" colspan = "3">ถนน.........<strong>{{$agency->address_user_covid->street}}</strong>............</td>
                                            </tr>
                                            <tr>
                                                <td width="20%" colspan = "3">ตำบล <strong>
                                                    @if (is_numeric($agency->address_user_covid->canton) == 1)
                                                        @foreach ($dist as $item)
                                                            @if ($item->district_code == $agency->address_user_covid->canton)

                                                                {{$item->district}}

                                                            @endif
                                                        @endforeach
                                                    @else
                                                        {{$agency->address_user_covid->canton}}
                                                    @endif

                                                </strong></td>
                                                <td width="20%" colspan = "3">อำเภอ <strong>
                                                    @if (is_numeric($agency->address_user_covid->canton) == 1)
                                                        @foreach ($dist as $item)
                                                            @if ($item->district_code == $agency->address_user_covid->canton)

                                                                {{$item->amphoe}}

                                                            @endif
                                                        @endforeach

                                                    @else
                                                        {{$agency->address_user_covid->district}}
                                                    @endif


                                                </strong></td>
                                                <td width="30%" colspan = "2">จังหวัด <strong>

                                                    @if (is_numeric($agency->address_user_covid->canton) == 1)
                                                        @foreach ($dist as $item)
                                                        @if ($item->district_code == $agency->address_user_covid->canton)

                                                            {{$item->province}}

                                                        @endif
                                                        @endforeach
                                                    @else
                                                        {{$agency->address_user_covid->province}}
                                                    @endif
                                                </strong></td>
                                            </tr>
                                            <tr>
                                                <td width="3%" class="text-center">2.</td>
                                                <td width="27%" >เดินทางกลับมาจาก</td>
                                                <td width="25%" colspan = "3">ตำบล <strong>
                                                    @if (is_numeric($agency->come_back_add_user_covid->canton) == 1)
                                                        @foreach ($dist as $item)
                                                            @if ($item->district_code == $agency->come_back_add_user_covid->canton)
                                                                {{$item->district}}
                                                            @endif
                                                        @endforeach

                                                    @else
                                                        {{$agency->come_back_add_user_covid->canton}}
                                                    @endif
                                                    @if (!empty($agency->come_back_add_user_covid->district_id))
                                                    {{$agency->come_back_add_user_covid->dist->district }}

                                                    @endif
                                                </strong></td>
                                                <td width="25%" colspan = "3">อำเภอ <strong>
                                                    @if (is_numeric($agency->come_back_add_user_covid->canton) == 1)
                                                        @foreach ($dist as $item)
                                                            @if ($item->district_code == $agency->come_back_add_user_covid->canton)
                                                                {{$item->amphoe}}
                                                            @endif
                                                        @endforeach

                                                    @else
                                                        {{$agency->come_back_add_user_covid->district}}
                                                    @endif
                                                    @if (!empty($agency->come_back_add_user_covid->district_id))

                                                    {{$agency->come_back_add_user_covid->dist->amphoe}}

                                                    @endif
                                                </strong></td>
                                                <td width="25%" colspan = "2">จังหวัด <strong>
                                                    @if (is_numeric($agency->come_back_add_user_covid->canton) == 1)
                                                        @foreach ($dist as $item)
                                                            @if ($item->district_code == $agency->come_back_add_user_covid->canton)
                                                                {{$item->province}}
                                                            @endif
                                                        @endforeach

                                                    @else
                                                        {{$agency->come_back_add_user_covid->province}}
                                                    @endif
                                                    @if (!empty($agency->come_back_add_user_covid->district_id))
                                                    {{$agency->come_back_add_user_covid->dist->province}}
                                                    @endif
                                                </strong></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3.</td>
                                                <td class="" colspan="9">กิจกรรมที่ทำก่อนเดินทางกลับเข้าจังหวัด ย้อนกลับไป 14 วัน (ระบุ ห้วงเวลา.....วันที่ {{$agency->come_back_add_user_covid->travel}} ถึงวันที่ {{$agency->come_back_add_user_covid->come_travel}}......)</td>
                                            </tr>

                                              @foreach ($ac_day as $item)
                                              <tr>
                                                <td class=""></td>
                                                <td class="" colspan="3">1) {{$item->info1}}</td>
                                                <td class="" colspan="3">2) {{$item->info2}}</td>
                                                <td class="" colspan="3">3) {{$item->info3}}</td>
                                              </tr>
                                              <tr>
                                                <td class=""></td>
                                                <td class="" colspan="3">4) {{$item->info4}}</td>
                                                <td class="" colspan="3">5) {{$item->info5}}</td>
                                                <td class="" colspan="3">6) {{$item->info6}}</td>
                                              </tr>
                                              <tr>
                                                <td class=""></td>
                                                <td class="" colspan="3">7) {{$item->info7}}</td>
                                                <td class="" colspan="3">8) {{$item->info8}}</td>
                                                <td class="" colspan="3">9) {{$item->info9}}</td>
                                              </tr>
                                              <tr>
                                                <td class=""></td>
                                                <td class="" colspan="3">10) {{$item->info10}}</td>
                                                <td class="" colspan="3">11) {{$item->info11}}</td>
                                                <td class="" colspan="3">12) {{$item->info12}}</td>
                                              </tr>
                                              <tr>
                                                <td class=""></td>
                                                <td class="" colspan="3">13) {{$item->info13}}</td>
                                                <td class="" colspan="3">14) {{$item->info14}}</td>
                                                <td class="" colspan="3"></td>
                                              </tr>

                                              @endforeach
                                              <tr>
                                                <td class="text-center">4.</td>
                                                <td class="">ท่านประกอบอาชีพ</td>
                                                <td class="" colspan="6">..........
                                                    @if(!empty($agency->occup_soldier_covid->info))
                                                    {{$agency->occup_soldier_covid->info}}
                                                    @else
                                                    -
                                                    @endif
                                                    ..........</td>
                                                {{-- <td class="" colspan="3">2) ............................................</td> --}}
                                                <td style="background-color:#9E9A99;" colspan="2"></td>
                                              </tr>
                                              <tr>
                                                <td class="text-center">5.</td>
                                                <td class="">เคยป่วยด้วยโรคโควิด 19 มาก่อนหรือไม่</td>

                                                <td class="" colspan="3"> @if($agency->his_patient_covid->info == '1')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                    เคยป่วย</td>

                                                <td class="" colspan="3">
                                                    @if($agency->his_patient_covid->info == '2')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                    ไม่เคยป่วย</td>
                                                <td style="background-color:#9E9A99;" colspan="2"></td>
                                              </tr>
                                              <tr>
                                                <td class="text-center">6.</td>
                                                <td class="" colspan="9">มีประวัติสัมผัสผู้ป่วยยืนยัน (เช่น พ่อแม่ พี่น้อง ญาติ เพื่อนบ้าน) ของโรคมาก่อนในช่วง 14 วันหรือไม่</td>
                                              </tr>
                                              <tr>
                                                <td class="" rowspan="3"></td>
                                                <td style="background-color:#9E9A99;" rowspan="3"></td>

                                                <td class="" colspan="3">
                                                    @if($agency->his_patient_covid->info == '1')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                    เคยสัมผัสใกล้ชิด</td>

                                                <td class="" colspan="3">
                                                    @if($agency->his_patient_covid->info == '2')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                    ไม่เคยสัมผัสใกล้ชิด</td>
                                                <td style="background-color:#9E9A99;" colspan="2"></td>
                                              </tr>
                                              <tr>
                                                <td class="">ใคร? (ระบุ)</td>
                                                <td class="" colspan="2">
                                                    @if($agency->his_patient_covid->fa == '1')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                     พ่อ</td>
                                                <td class="" colspan="2">
                                                    @if($agency->his_patient_covid->ma == '1')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                    แม่</td>
                                                <td class="" colspan="2">
                                                    @if($agency->his_patient_covid->bro == '1')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                    พี่</td>
                                                <td style="background-color:#9E9A99;"  rowspan="2"></td>
                                              </tr>
                                              <tr>
                                                <td class=""></td>

                                                <td class="" colspan="2">
                                                    @if($agency->his_patient_covid->bro2 == '1')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                    น้อง</td>
                                                <td class="" colspan="2">
                                                    @if($agency->his_patient_covid->relative == '1')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                    ญาติ</td>
                                                <td class="" colspan="2">
                                                    @if($agency->his_patient_covid->friend == '1')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                    เพื่อน</td>
                                              </tr>
                                              <tr>
                                                <td class="text-center">7.</td>
                                                <td class="" colspan="9">มีประวัติไปในสถานที่เสี่ยงต่อการสัมผัสโรค (ได้แก่ สถานที่ที่แออัดหรือมีชุมชนคับคั่ง เช่น ห้างสรรพสินค้า ตลาดนัด วัด สนามกีฬา สถานบันเทิง เป็นต้น) ในช่วง 14 วันหรือไม่</td>
                                              </tr>
                                              <tr>
                                                <td class="" rowspan="3"></td>
                                                <td style="background-color:#9E9A99;" rowspan="3"></td>

                                                <td class="" colspan="3">
                                                    @if($agency->his_place_covid->info == '1')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                    ไปสถานที่เสี่ยง</td>

                                                <td class="" colspan="3">
                                                    @if($agency->his_place_covid->info == '2')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                    ไม่ไปสถานที่เสี่ยง</td>
                                                <td style="background-color:#9E9A99;" colspan="2"></td>
                                              </tr>
                                              <tr>


                                                <td width="10%">ที่ใด? (ระบุ)</td>
                                                <td class="" colspan="2">
                                                    @if($agency->his_place_covid->de_store == '1')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                     ห้าง
                                                </td>
                                                <td class="" colspan="2">
                                                    @if($agency->his_place_covid->market == '1')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                     ตลาด
                                                </td>
                                                <td class="" colspan="2">
                                                    @if($agency->his_place_covid->measure == '1')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                    วัด
                                                </td>
                                                <td style="background-color:#9E9A99;" rowspan="2"></td>
                                              </tr>
                                              <tr>
                                                <td class=""></td>
                                                <td class="" colspan="2">
                                                    @if($agency->his_place_covid->Stadium == '1')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                    สนามกีฬา
                                                </td>
                                                <td class="" colspan="2">
                                                    @if($agency->his_place_covid->Ent_place == '1')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                    สถานบันเทิง
                                                </td>
                                                <td width="25%" colspan="2">
                                                    @if(is_null($agency->his_place_covid->detail_where))
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    อื่นๆ ระบุ ..........
                                                    @else
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    อื่นๆ ระบุ ....{{$agency->his_place_covid->detail_where}}......

                                                    @endif
                                                </td>
                                              </tr>
                                              <tr>
                                                <td class="text-center">8.</td>
                                                <td class="" colspan="3">มีประวัติได้รับวัคซีนป้องกันไข้หวัดใหญ่ล่าสุดเมื่อใด (ในรอบ 1 ปีที่ผ่านมา)</td>

                                                <td class="" colspan="3">
                                                    @if($agency->his_vaccine->info == '1')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                    เคยฉีด (ระบุช่วง) ..........

                                                    @if($agency->his_vaccine->info == '1')
                                                    {{$agency->his_vaccine->time}}

                                                    @endif
                                                    ..........
                                                </td>

                                                <td class="" colspan="3">
                                                    @if($agency->his_vaccine->info == '2')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                    ไม่เคยฉีดใน 1 ปีที่ผ่านมา</td>
                                              </tr>
                                              <tr>
                                                <td class="text-center">9.</td>
                                                <td class="" colspan="3">มีประวัติได้รับวัคซีนโควิด 19 ล่าสุดเมื่อใด (เข็มแรก หรือ ครบทั้งสองเข็ม)</td>

                                                <td class="" colspan="3">
                                                    @if(!empty($agency->his_vaccine_covid_19->info))

                                                        @if($agency->his_vaccine_covid_19->info == '1')
                                                        <i class="feather icon-check-square font-medium-3"></i>
                                                        @else
                                                        <i class="feather icon-square  font-medium-3"></i>
                                                        @endif
                                                        เคยฉีด (ระบุช่วง) ..........

                                                        @if($agency->his_vaccine_covid_19->info == '1')
                                                        {{$agency->his_vaccine_covid_19->time}}

                                                        @endif
                                                    @else
                                                        <i class="feather icon-square  font-medium-3"></i>
                                                        เคยฉีด (ระบุช่วง) ..........
                                                    @endif
                                                    ..........
                                                </td>

                                                <td class="" colspan="3">
                                                    @if(!empty($agency->his_vaccine_covid_19->info))
                                                        @if($agency->his_vaccine_covid_19->info == '2')
                                                        <i class="feather icon-check-square font-medium-3"></i>
                                                        @else
                                                        <i class="feather icon-square  font-medium-3"></i>
                                                        @endif
                                                    @else
                                                        <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                    ไม่เคยฉีด
                                                </td>
                                              </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>


                        <!-- Invoice Footer -->
                        {{-- <div id="invoice-footer" class="text-right pt-3">
                            <p>Transfer the amounts to the business amount below. Please include invoice number on your check.
                                <p class="bank-details mb-0">
                                    <span class="mr-4">BANK: <strong>FTSBUS33</strong></span>
                                    <span>IBAN: <strong>G882-1111-2222-3333</strong></span>
                                </p>
                        </div> --}}
                        <!--/ Invoice Footer -->

                    </div>
                </section>
                <!-- invoice page end -->

            </div>
            {{-- {!! QrCode::size(400)->generate(url("https://ksvrhospital.go.th/ksvr/files/ksvr_army_new2.pdf")); !!} --}}

    <!-- END: Content-->
        </div>
    </div>


@endsection
@section('scripts')

       <!-- BEGIN: Page Vendor JS-->
       <script src="{{ asset('app-assets') }}/vendors/js/ui/jquery.sticky.js"></script>
       <!-- END: Page Vendor JS-->

       <!-- BEGIN: Page JS-->
       <script src="{{ asset('app-assets') }}/js/scripts/pages/invoice.js"></script>

@endsection

@extends('layouts.covid')
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
                <!-- invoice page -->
                <section class="card invoice-page">
                    <div id="invoice-template" class="card-body">

                        <!-- Invoice Company Details -->
                        <div id="invoice-company-details" class="row">

                            <div class="col-12 text-center pt-1 mb-1">
                                <h1 style="color: red;"><b>-------- กรุณาตรวจสอบความถูกต้อง --------</b></h1>

                            </div>
                        </div>

                        <div id="invoice-items-details" class="pt-1 invoice-items-table">

                            <div class="row">
                                <div class="col-12">
                                    <table style="border: 2px solid #fff;" class="table table-responsive" border:0 width="100%">
                                        <thead style="border: 1px solid black;">
                                            <tr>
                                                <th style="border: 1px solid black;" colspan = "10">
                                                    <h4 class="text-center">หน่วยฝึก...............
                                                        @foreach ($agency as $item)
                                                            @if ($item->id == $request->training_unit_armies)

                                                                <strong>{{$item->name}}</strong>...............สังกัด...............<strong>{{$item->agency_army->name}}</strong>...............จังหวัด............... <strong>สกลนคร</strong> ...............

                                                            @endif
                                                        @endforeach
                                                    </h4>
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody >
                                            <tr>
                                                <td style="border: 1px solid black;" colspan = "10">
                                                    <h4 class="text-center"><strong>แบบซักถามประวัติกรณีเดินทางมาจากจังหวัดที่มีรายงานการระบาดของโรคติดเชื้อไวรัสโคโรนา ๒๐๑๙ <br>
                                                    และกรณีที่ลากลับภูมิลำเนา หรือไปราชการ หรือฝึกนอกที่ตั้งข้ามจังหวัด</strong></h4>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td width="3%" class="text-center">1.</td>
                                                <td width="60%" colspan = "6">ยศ ชื่อ - นามสกุล......................................<strong>{{$request->title_name_id}} {{$request->firstName}} {{$request->lastName}}</strong>................................................</td>
                                                <td width="40%" colspan = "3">เบอร์โทรศัพท์มือถือ......................<strong>{{$request->tel}}</strong>.....................</td>

                                            </tr>
                                            <tr>
                                                <td width="3%"  rowspan="2" class="text-center"></td>
                                                <td width="20%" rowspan = "2">ที่อยู่ปัจจุบัน</td>
                                                <td width="20%" colspan = "3">บ้านเลขที่...........<strong>{{$request->home_id}}</strong>.........</td>
                                                <td width="17%" colspan = "2">ซอย.........<strong>{{$request->alley}}</strong>............</td>
                                                <td width="40%" colspan = "3">ถนน.........<strong>{{$request->street}}</strong>............</td>
                                            </tr>
                                            <tr>
                                                <td width="20%" colspan = "3">ตำบล <strong>

                                                        @foreach ($dist as $item)
                                                            @if ($item->district_code == $request->canton)

                                                                {{$item->district}}

                                                            @endif
                                                        @endforeach


                                                </strong></td>
                                                <td width="20%" colspan = "3">อำเภอ <strong>

                                                        @foreach ($dist as $item)
                                                            @if ($item->district_code == $request->canton)

                                                                {{$item->amphoe}}

                                                            @endif
                                                        @endforeach



                                                </strong></td>
                                                <td width="30%" colspan = "2">จังหวัด <strong>

                                                        @foreach ($dist as $item)
                                                        @if ($item->district_code == $request->canton)

                                                            {{$item->province}}

                                                        @endif
                                                        @endforeach

                                                </strong></td>
                                            </tr>
                                            <tr>
                                                <td width="3%" class="text-center">2.</td>
                                                <td width="27%" >เดินทางกลับมาจาก</td>
                                                <td width="25%" colspan = "3">ตำบล <strong>

                                                        @foreach ($dist as $item)
                                                            @if ($item->district_code == $request->come_canton)
                                                                {{$item->district}}
                                                            @endif
                                                        @endforeach

                                                </strong></td>
                                                <td width="25%" colspan = "3">อำเภอ <strong>
                                                        @foreach ($dist as $item)
                                                            @if ($item->district_code == $request->come_canton)
                                                                {{$item->amphoe}}
                                                            @endif
                                                        @endforeach


                                                </strong></td>
                                                <td width="25%" colspan = "2">จังหวัด <strong>

                                                        @foreach ($dist as $item)
                                                            @if ($item->district_code == $request->come_canton)
                                                                {{$item->province}}
                                                            @endif
                                                        @endforeach


                                                </strong></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3.</td>
                                                <td class="" colspan="9">กิจกรรมที่ทำก่อนเดินทางกลับเข้าจังหวัด ย้อนกลับไป 14 วัน (ระบุ ห้วงเวลา.....<strong>วันที่ {{$request->travel}} ถึงวันที่ {{$request->come_travel}}<strong>......)</td>
                                            </tr>


                                              <tr>
                                                <td class=""></td>
                                                <td class="" colspan="3">1) {{$request->activ_1}}</td>
                                                <td class="" colspan="3">2) {{$request->activ_2}}</td>
                                                <td class="" colspan="3">3) {{$request->activ_3}}</td>
                                              </tr>
                                              <tr>
                                                <td class=""></td>
                                                <td class="" colspan="3">4) {{$request->activ_4}}</td>
                                                <td class="" colspan="3">5) {{$request->activ_5}}</td>
                                                <td class="" colspan="3">6) {{$request->activ_6}}</td>
                                              </tr>
                                              <tr>
                                                <td class=""></td>
                                                <td class="" colspan="3">7) {{$request->activ_7}}</td>
                                                <td class="" colspan="3">8) {{$request->activ_8}}</td>
                                                <td class="" colspan="3">9) {{$request->activ_9}}</td>
                                              </tr>
                                              <tr>
                                                <td class=""></td>
                                                <td class="" colspan="3">10) {{$request->activ_10}}</td>
                                                <td class="" colspan="3">11) {{$request->activ_11}}</td>
                                                <td class="" colspan="3">12) {{$request->activ_12}}</td>
                                              </tr>
                                              <tr>
                                                <td class=""></td>
                                                <td class="" colspan="3">13) {{$request->activ_13}}</td>
                                                <td class="" colspan="3">14) {{$request->activ_14}}</td>
                                                <td class="" colspan="3"></td>
                                              </tr>


                                              <tr>
                                                <td class="text-center">4.</td>
                                                <td class="">ท่านประกอบอาชีพ</td>
                                                <td class="" colspan="6">..........
                                                    @if(!empty($request->occ))
                                                    {{$request->occ}}
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

                                                <td class="" colspan="3">
                                                    @if($request->sick_covid == '1')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                    เคยป่วย</td>

                                                <td class="" colspan="3">
                                                    @if($request->sick_covid == '2')
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
                                                    @if($request->his_patient_covid == '1')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                    เคยสัมผัสใกล้ชิด</td>

                                                <td class="" colspan="3">
                                                    @if($request->his_patient_covid == '2')
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
                                                    @if($request->fa == '1')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                     พ่อ</td>
                                                <td class="" colspan="2">
                                                    @if($request->ma == '1')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                    แม่</td>
                                                <td class="" colspan="2">
                                                    @if($request->bro == '1')
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
                                                    @if($request->bro2 == '1')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                    น้อง</td>
                                                <td class="" colspan="2">
                                                    @if($request->relative == '1')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                    ญาติ</td>
                                                <td class="" colspan="2">
                                                    @if($request->friend == '1')
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
                                                    @if($request->his_place_covid == '1')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                    ไปสถานที่เสี่ยง</td>

                                                <td class="" colspan="3">
                                                    @if($request->his_place_covid == '2')
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
                                                    @if($request->de_store == '1')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                     ห้าง
                                                </td>
                                                <td class="" colspan="2">
                                                    @if($request->market == '1')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                     ตลาด
                                                </td>
                                                <td class="" colspan="2">
                                                    @if($request->measure == '1')
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
                                                    @if($request->Stadium == '1')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                    สนามกีฬา
                                                </td>
                                                <td class="" colspan="2">
                                                    @if($request->Ent_place == '1')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                    สถานบันเทิง
                                                </td>
                                                <td width="25%" colspan="2">
                                                    @if(is_null($request->detail_where))
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    อื่นๆ ระบุ ..........
                                                    @else
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    อื่นๆ ระบุ ....{{$request->detail_where}}......

                                                    @endif
                                                </td>
                                              </tr>
                                              <tr>
                                                <td class="text-center">8.</td>
                                                <td class="" colspan="3">มีประวัติได้รับวัคซีนป้องกันไข้หวัดใหญ่ล่าสุดเมื่อใด (ในรอบ 1 ปีที่ผ่านมา)</td>

                                                <td class="" colspan="3">
                                                    @if($request->his_vaccine_flu == '1')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                    เคยฉีด (ระบุช่วง) ..........

                                                    @if($request->his_vaccine_flu == '1')
                                                    {{$request->detail_time}}

                                                    @endif
                                                    ..........
                                                </td>

                                                <td class="" colspan="3">
                                                    @if($request->his_vaccine_flu == '2')
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
                                                    @if($request->vaccine_covid__19 == '1')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                    เคยฉีด (ระบุช่วง) ..........

                                                    @if($request->vaccine_covid__19 == '1')
                                                    {{$request->vaccine_covid__19detail_time}}

                                                    @endif
                                                    ..........
                                                </td>

                                                <td class="" colspan="3">
                                                    @if($request->vaccine_covid__19 == '2')
                                                    <i class="feather icon-check-square font-medium-3"></i>
                                                    @else
                                                    <i class="feather icon-square  font-medium-3"></i>
                                                    @endif
                                                    ไม่เคยฉีด</td>
                                              </tr>
                                        </tbody>
                                    </table>

                                    <form action="{{ route('Questionnaire-History-Covid-19.store')}}" method="POST" class="steps-validation wizard-circle">
                                        {{ csrf_field() }}
                                        {{ method_field('POST') }}

                                        <input type="hidden" name="title_name_id" value="{{$request->title_name_id}}">
                                        <input type="hidden" name="firstName" value="{{$request->firstName}}">
                                        <input type="hidden" name="lastName" value="{{$request->lastName}}">
                                        <input type="hidden" name="tel" value="{{$request->tel}}">
                                        <input type="hidden" name="home_id" value="{{$request->home_id}}">
                                        <input type="hidden" name="alley" value="{{$request->alley}}">
                                        <input type="hidden" name="street" value="{{$request->street}}">
                                        <input type="hidden" name="province" value="{{$request->province}}">
                                        <input type="hidden" name="district" value="{{$request->district}}">
                                        <input type="hidden" name="canton" value="{{$request->canton}}">
                                        <input type="hidden" name="training_unit_armies" value="{{$request->training_unit_armies}}">
                                        <input type="hidden" name="occ" value="{{$request->occ}}">
                                        <input type="hidden" name="travel" value="{{$request->travel}}">
                                        <input type="hidden" name="come_travel" value="{{$request->come_travel}}">
                                        <input type="hidden" name="come_province" value="{{$request->come_province}}">
                                        <input type="hidden" name="come_district" value="{{$request->come_district}}">
                                        <input type="hidden" name="come_canton" value="{{$request->come_canton}}">
                                        <input type="hidden" name="activ_1" value="{{$request->activ_1}}">
                                        <input type="hidden" name="activ_2" value="{{$request->activ_2}}">
                                        <input type="hidden" name="activ_3" value="{{$request->activ_3}}">
                                        <input type="hidden" name="activ_4" value="{{$request->activ_4}}">
                                        <input type="hidden" name="activ_5" value="{{$request->activ_5}}">
                                        <input type="hidden" name="activ_6" value="{{$request->activ_6}}">
                                        <input type="hidden" name="activ_7" value="{{$request->activ_7}}">
                                        <input type="hidden" name="activ_8" value="{{$request->activ_8}}">
                                        <input type="hidden" name="activ_9" value="{{$request->activ_9}}">
                                        <input type="hidden" name="activ_10" value="{{$request->activ_10}}">
                                        <input type="hidden" name="activ_11" value="{{$request->activ_11}}">
                                        <input type="hidden" name="activ_12" value="{{$request->activ_12}}">
                                        <input type="hidden" name="activ_13" value="{{$request->activ_13}}">
                                        <input type="hidden" name="activ_14" value="{{$request->activ_14}}">
                                        <input type="hidden" name="sick_covid" value="{{$request->sick_covid}}">
                                        <input type="hidden" name="his_patient_covid" value="{{$request->his_patient_covid}}">
                                        <input type="hidden" name="fa" value="{{$request->fa}}">
                                        <input type="hidden" name="ma" value="{{$request->ma}}">
                                        <input type="hidden" name="bro" value="{{$request->bro}}">
                                        <input type="hidden" name="bro2" value="{{$request->bro2}}">
                                        <input type="hidden" name="relative" value="{{$request->relative}}">
                                        <input type="hidden" name="friend" value="{{$request->friend}}">
                                        <input type="hidden" name="his_place_covid" value="{{$request->his_place_covid}}">
                                        <input type="hidden" name="de_store" value="{{$request->de_store}}">
                                        <input type="hidden" name="market" value="{{$request->market}}">
                                        <input type="hidden" name="measure" value="{{$request->measure}}">
                                        <input type="hidden" name="Stadium" value="{{$request->Stadium}}">
                                        <input type="hidden" name="Ent_place" value="{{$request->Ent_place}}">
                                        <input type="hidden" name="detail_where" value="{{$request->detail_where}}">
                                        <input type="hidden" name="his_vaccine_flu" value="{{$request->his_vaccine_flu}}">
                                        <input type="hidden" name="detail_time" value="{{$request->detail_time}}">
                                        <input type="hidden" name="vaccine_covid__19" value="{{$request->vaccine_covid__19}}">
                                        <input type="hidden" name="vaccine_covid__19detail_time" value="{{$request->vaccine_covid__19detail_time}}">

                                        <div class="text-center">
                                            <button type="button" class="btn btn-primary mr-1 mb-1" onclick="goBack()">แก้ไข</button>
                                            <button type="submit" class="btn btn-success mr-1 mb-1">ยืนยัน</button>
                                            <a href="{{ route('Questionnaire-History-Covid-19.index')}}" class="btn btn-danger mb-1" >ยกเลิก</a>
                                        </div>
                                    </form>
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
       <script>
        function goBack() {
          window.history.back();
        }
        </script>
@endsection

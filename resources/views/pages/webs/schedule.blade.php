@extends('layouts.welcome')
@section('styles')

<link href="{{ asset('web') }}/medall/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css" rel="stylesheet">

@endsection
@section('content')
    {{-- quickLinks --}}
	@include('_includes.sidebar.quickLinks')
	{{-- quickLinks --}}
	<div class="page-content">

        <div class="page-content">
            <!--section-->
            <div class="section mt-0">
                <div class="breadcrumbs-wrap">
                    <div class="container">
                        <div class="breadcrumbs">
                            <a href="index.html">หน้าแรก</a>
                            <span>ตารางแพทย์ออกตรวจ</span>
                        </div>
                    </div>
                </div>
            </div>
            <!--//section-->
            <!--section-->
            <div class="section page-content-first">
                <div class="container">
                    <div class="text-center mb-2 mb-md-3">
                        <div class="h-sub theme-color">คลินิกที่ให้บริการ</div>
                        <h1>ตารางแพทย์ออกตรวจ</h1>
                        <div class="h-decor"></div>
                    </div>
                </div>
                <div class="container">
                    {{-- <div class="text-center mb-4 mb-md-5 max-900">
                        <p>Need to make a pediatric dentist appointment this week? Use our Timetable to find dentists you who take your insurance. It’s simple to check their availabilities here. </p>
                    </div> --}}

                        <div class="cd-schedule loading">
                            <div class="timeline">
                                <div class="timeline-top-info"><span>เวลา</span></div>
                                <ul>
                                    <li><span>09:00 - 10.00 น.</span></li>
                                    <li><span>10:00 - 11.00 น.</span></li>
                                    <li><span>11:00 - 12.00 น.</span></li>
                                    <li><span>12:00 - 13.00 น.</span></li>
                                    <li><span>13:00 - 14.00 น.</span></li>
                                    <li><span>14:00 - 15.00 น.</span></li>
                                    <li><span>15:00 - 16.00 น.</span></li>
                                </ul>
                            </div>
                            <div class="events">
                                <ul>
                                    <li class="events-group">
                                        <div class="schedule-top-info"><span>จันทร์</span></div>
                                        <ul>
                                            <li class="doctor-card" data-start="09:00" data-end="12:00" data-event="event-1">
                                                <a href="doctor-page.html">
                                                    <div class="doctor-photo"><img src="{{ asset('web') }}/medall/images/content/doctop-01-sm.jpg" alt=""></div>
                                                    <div class="doctor-name">นพ.สุทธิ ภัทธิสุภฤกษ์</div>
                                                    <div class="doctor-position">โรคกระดูกและข้อ</div>
                                                </a>
                                            </li>
                                            <li class="doctor-card" data-start="13:00" data-end="16:00" data-event="event-3">
                                                <a href="doctor-page.html">
                                                    {{-- <div class="doctor-name">พญ.ณัฐสุดา เบญจชินชัยกุล</div> --}}
                                                    <div class="doctor-position">ตรวจโรคทั่วไป</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="events-group">
                                        <div class="schedule-top-info"><span>อังคาร</span></div>
                                        <ul>
                                            <li class="doctor-card" data-start="09:00" data-end="12:00" data-event="event-2">
                                                <a href="doctor-page.html">
                                                    <div class="doctor-photo"><img src="{{ asset('web') }}/medall/images/content/doctop-02-sm.jpg" alt=""></div>
                                                    <div class="doctor-name">พญ.วรรณพร อึ้งสกุล</div>
                                                    <div class="doctor-position">อายุรแพทย์โรคไต</div>
                                                    <div class="doctor-position">(สัปดาห์ที่ 1 ของเดือน)</div>
                                                </a>
                                            </li>
                                            <li class="doctor-card" data-start="13:00" data-end="16:00" data-event="event-3">
                                                <a href="doctor-page.html">
                                                    {{-- <div class="doctor-name">พญ.ณัฐสุดา เบญจชินชัยกุล</div> --}}
                                                    <div class="doctor-position">ตรวจโรคทั่วไป</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="events-group">
                                        <div class="schedule-top-info"><span>พุธ</span></div>
                                        <ul>
                                            <li class="doctor-card" data-start="09:00" data-end="12:00" data-event="event-3">
                                                <a href="doctor-page.html">
                                                    <div class="doctor-photo"><img src="{{ asset('web') }}/medall/images/content/doctop-04-sm.jpg" alt=""></div>
                                                    <div class="doctor-name">พญ.ณัฐสุดา เบญจชินชัยกุล</div>
                                                    <div class="doctor-position">อายุรกรรม</div>
                                                    <div class="doctor-position">(สัปดาห์ที่ 2 ของเดือน)</div>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="events-group">
                                        <div class="schedule-top-info"><span>พฤหัสบดี</span></div>
                                        <ul>
                                            <li class="doctor-card" data-start="09:00" data-end="12:00" data-event="event-3">
                                                <a href="doctor-page.html">
                                                    <div class="doctor-photo"><img src="{{ asset('web') }}/medall/images/content/doctop-01-sm.jpg" alt=""></div>
                                                    <div class="doctor-name">ยังไม่ทราบชื่อ</div>
                                                    <div class="doctor-position">จิตเวช</div>
                                                    <div class="doctor-position">(สัปดาห์ที่ 3 ของเดือน)</div>
                                                </a>
                                            </li>
                                            <li class="doctor-card" data-start="09:00" data-end="16:00" data-event="event-3">
                                                <a href="doctor-page.html">
                                                    <div class="doctor-photo"><img src="{{ asset('web') }}/medall/images/content/doctop-01-sm.jpg" alt=""></div>
                                                    <div class="doctor-name">พญ.ณัฐสุดา เบญจชินชัยกุล</div>
                                                    <div class="doctor-position">อายุรกรรม</div>
                                                    <div class="doctor-position">(สัปดาห์ที่ 2 ของเดือน)</div>
                                                </a>
                                            </li>
                                            <li class="doctor-card" data-start="14:00" data-end="16:00" data-event="event-1">
                                                <a href="doctor-page.html">
                                                    {{-- <div class="doctor-photo"><img src="{{ asset('web') }}/medall/images/content/doctop-02-sm.jpg" alt=""></div> --}}
                                                    <div class="doctor-name">นพ.มานพ รัตนอริยเมธีกร</div>
                                                    <div class="doctor-position">สูตินรีเวช</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="events-group">
                                        <div class="schedule-top-info"><span>ศุกร์</span></div>
                                        <ul>
                                            <li class="doctor-card" data-start="09:00" data-end="12:00" data-event="event-1">
                                                <a href="doctor-page.html">
                                                    <div class="doctor-photo"><img src="{{ asset('web') }}/medall/images/content/doctop-02-sm.jpg" alt=""></div>
                                                    <div class="doctor-name">พญ.นริศรา สุนนท์</div>
                                                    <div class="doctor-position">อายุรกรรม</div>
                                                    <div class="doctor-position">(สัปดาห์ที่ 2 และ 4 ของเดือน)</div>
                                                </a>
                                            </li>
                                            <li class="doctor-card" data-start="13:00" data-end="16:00" data-event="event-3">
                                                <a href="doctor-page.html">
                                                    {{-- <div class="doctor-name">พญ.ณัฐสุดา เบญจชินชัยกุล</div> --}}
                                                    <div class="doctor-position">ตรวจโรคทั่วไป</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        {{-- {!! QrCode::size(400)->generate(url("https://ksvrhospital.go.th/ksvr/Questionnaire-History-Covid-19")); !!} --}}
                </div>
                <!--//section-->
            </div>
        </div>

	</div>
@endsection
@section('scripts')

<script src="{{ asset('web') }}/medall/vendor/schedule/schedule.js"></script>

@endsection

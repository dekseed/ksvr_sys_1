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
                            <span>KM โรงพยาบาลค่ายกฤษณ์สีวะรา</span>
                        </div>
                    </div>
                </div>
            </div>
            <!--//section-->
            <!--section-->
            <div class="section page-content-first">
                <div class="container">
                    <div class="text-center mb-2 mb-md-3">
                        {{-- <div class="h-sub theme-color">คลินิกที่ให้บริการ</div> --}}
                        <h1>KM โรงพยาบาลค่ายกฤษณ์สีวะรา</h1>
                        <div class="h-decor"></div>
                    </div>
                </div>
                <div class="container">
                    {{-- <div class="text-center mb-4 mb-md-5 max-900">
                        <p>Need to make a pediatric dentist appointment this week? Use our Timetable to find dentists you who take your insurance. It’s simple to check their availabilities here. </p>
                    </div> --}}
                    <ul class="marker-list-md-line">
                        <li><a href="{{ asset('files') }}/KM/01.pdf" target="_blank">โครงการพัฒนาคู่มือส่งเสริมและป้องกันภาวะข้อเข่าเสื่อม (ในผู้ที่มีความเสี่ยงและมีภาวะข้อเข่าเสื่อม)</a></li>
                        <li><a href="{{ asset('files') }}/KM/02.pdf" target="_blank">โครงการ KSVR Model (ลด ละ เลิกบุหรี่ สุรา ยาเสพติดและอบายมุขสู่วิถีชีวิตที่พอเพียงตามแนวทางศาสตร์พระราชา)</a></li>
                        <li><a href="{{ asset('files') }}/KM/03.pdf" target="_blank">โครงการนวัตกรรมธงลู่ลม ลดโรคลมร้อน</a></li>
                        <li><a href="#" target="_blank">โครงการ Smart LAB Smart OPD</a></li>
                        <li><a href="{{ asset('files') }}/KM/05.pdf" target="_blank">โครงการ รู้ เร็ว รอดปลอดภัย หัวใจแข็งแกร่ง</a></li>
                        <li><a href="https://docs.google.com/spreadsheets/d/1K9Bf-lWN-jN5dCsoi6r77O3a66j8Ei-yx6uQUeHgNqo/edit#gid=0" target="_blank">สารบัญเครื่องมือ รพ.ค่ายกฤษณ์สีวะรา</a></li>
                        <li><a href="https://ksvrhospital.go.th/E-BOOK/KSVR_E-book.html" target="_blank">CPG ทีม PCT  ปีงบ 2565</a> <span style="color:red;">(อัพเดต วันที่ 22 ก.พ. 65)</span></li>
                    </ul>
                </div>
                <!--//section-->
            </div>

        </div>

	</div>
@endsection
@section('scripts')

<script src="{{ asset('web') }}/medall/vendor/schedule/schedule.js"></script>

@endsection

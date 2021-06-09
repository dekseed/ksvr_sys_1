@extends('layouts.welcome')
@section('styles')


<style>

</style>
@endsection
@section('content')

 {{-- quickLinks --}}
	@include('_includes.sidebar.quickLinks')
   {{-- quickLinks --}}
   <!--//quick links-->
	<div class="page-content">
      <!--section-->
		<div class="section mt-0">
			<div class="breadcrumbs-wrap">
				<div class="container">
					<div class="breadcrumbs">
                  <a href="{{route('welcome')}}">หน้าแรก</a>
                  <a href="#">บริการของเรา</a>
                  <a href="{{route('medical.index')}}">งานเวชระเบียน</a>
                  <span>ขอสำเนาเวชระเบียน</span>
					</div>
				</div>
			</div>
		</div>
      <!--//section-->
      <!--section-->
		<div class="section page-content-first">
			<div class="container mt-6">
				<div class="row">

               <!-- sidebar -->
					@include('_includes.sidebar.department')
               <!-- sidebar -->

               <div class="col-md-8 col-lg-9 mt-4 mt-md-0">
                  <div class="container">
                     <div class="text-center mb-2  mb-md-3 mb-lg-4">
                        <div class="h-sub theme-color">บริการของเรา</div>
                        <h1>ขอสำเนาเวชระเบียน</h1>
                        <div class="h-decor"></div>
                     </div>
                  </div>

                {{-- //////////////////////////////// --}}

                    <p><h3>การขอสำเนาเวชระเบียน สามารถดำเนินการทาง Line official ได้</h3></p>
                    <p><b><h5>วิธีการดำเนินการ</h5></b></p>
                    <span style="font-family: verdana;">
                        <span style="color: #2a411f;">กรุณาเพิ่มเพื่อน งานเวชระเบียน รพ.ค่ายกฤษณ์สีวะรา @623dqxqb ที่ Line official&nbsp;</span><br>
                        <span style="color: #2a411f;">ส่งเอกสารมาในไลน์ ดังนี้&nbsp;</span><br>
                        <span style="color: #2a411f;">1. ดาวน์โหลดและเขียนแบบคำร้อง&nbsp;</span><br>
                        <span style="color: #2a411f;">2.ดาวน์โหลดแบบคำร้อง,กรอกรายละเอียดในแบบคำร้อง และส่งแบบคำร้อง</span><br>
                        <a href="https://drive.google.com/drive/folders/19wKp36crDsN8kQtaxpNj-SO50PeUcKsy?usp=sharing" rel="noopener noreferrer" style="-webkit-user-drag: none; color: #098ce0; word-break: break-all;" target="_blank">
                            https://drive.google.com/drive/folders/19wKp36crDsN8kQtaxpNj-SO50PeUcKsy?usp=sharing</a><br>
                        <span style="color: #2a411f;">3.ส่งหลักฐานในการขอ&nbsp;</span><br>
                        {{-- <a href="#" rel="noopener noreferrer" style="-webkit-user-drag: none; color: #098ce0; word-break: break-all;" target="_blank">
                            https://drive.google.com/drive/</a><br> --}}
                        <span style="color: #2a411f;">( ให้ส่งเอกสารเข้ามาที Line official :@623dqxqb )</span><br>
                        <div class="service-img">
                            <img src="{{ asset('web') }}/medall/images/QR.png" data-original-height="160" data-original-width="160" height="260"  width="260" alt="">
                        </div>
                        <p>..................................................................</p>
                    </span>

                    {{-- /////////////////////// --}}

                    <span style="font-family: verdana;">
                        <span style="color: #2a411f;">☑ระยะเวลาดำเนินการ&nbsp;</span><br>
                        <span style="color: #2a411f;">- รักษาต่อ 30 นาที&nbsp;</span><br>
                        <span style="color: #2a411f;">- ประกันชีวิต 1-2 สัปดาห์&nbsp;</span><br>
                        <span style="color: #2a411f;">- กฎหมาย 1-2 สัปดาห์&nbsp;</span><br>
                        <span style="color: #2a411f;">- การเกณฑ์ทหาร 1-2 สัปดาห์&nbsp;</span><br>
                        <p>..................................................................</p>
                    </span>

                    {{-- ///////////////////////// --}}

                    <span style="font-family: verdana;">
                        <span style="color: #2a411f;">☑วิธีการรับเอกสาร&nbsp;</span><br>
                        <span style="color: #2a411f;">- รักษาต่อ...รับเอง, ส่งไปรษณีย์, E-mail, Line&nbsp;</span><br>
                        <span style="color: #2a411f;">- ประกันชีวิต...รับเอง,ส่งไปรษณีย์&nbsp;</span><br>
                        <span style="color: #2a411f;">- กฎหมาย...รับเอง,ส่งไปรษณีย์&nbsp;</span><br>
                        <span style="color: #2a411f;">- การเกณฑ์ทหาร...รับเอง,ส่งไปรษณีย์&nbsp;</span><br>
                        <p>..................................................................</p>
                    </span>

                    {{-- /////////////////////////// --}}

                    <div class="text-center">
                        <img src="{{ asset('web') }}/medall/images/medical/medi11.jpg" data-original-height="382" data-original-width="426" height="382"  width="426" alt="">
                       </div>
                    <div class="text-center">
                        <p>-------------------------------------------------------------------------------------</p>
                    </div>
                    {{-- ///รูปภาพการขอสำเนาเวชระเบียน/// --}}

                    <div class="text-center">
                     <img src="{{ asset('web') }}/medall/images/medical/remedical.png" data-original-height="640" data-original-width="426" height="640"  width="426" alt="">
                    </div>


                    {{-- ////// --}}

                    <div class="text-center">
                        <p></p>
                        <span>งานเวชระเบียน โรงพยาบาลค่ายกฤษณ์สีวะรา</span><br style="color: #2a411f;"><a></a>
                        <span style="color: #2a411f;">@623dqxqb</span><br style="color: #2a411f;">
                        <img src="{{ asset('web') }}/medall/images/QR.png" data-original-height="260" data-original-width="260" height="260"  width="260" alt="">
                    </div>


                {{-- //////////////////////////////// --}}
					</div>
				</div>
			</div>
		</div>
      <!--//section-->

@endsection
@section('scripts')

@endsection

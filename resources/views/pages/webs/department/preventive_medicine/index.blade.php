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
						<span>แผนกเวชกรรมป้องกัน</span>
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
                        <h1>แผนกเวชกรรมป้องกัน</h1>
                        <div class="h-decor"></div>
                     </div>
                  </div>
						{{-- <div class="title-wrap">
							<h1>แผนกตรวจโรคผู้ป่วยนอก</h1></div> --}}
						<div class="service-img text-center">
							<img src="{{ asset('web') }}/medall/images/DSC_8297.jpeg" class="w-100" alt="">
						</div>
						<div class="pt-2 pt-md-4">
                            <h3>หน้าที่และเป้าหมาย</h3>
                                <p>ให้บริการป้องกันโรค โดยใช้กระบวนการเพิ่มสมรรถนะให้กับบุคลากร เสริมสร้างพลังอำนาจให้บุคคลในครอบครัวและชุมชน มีความสามารถในการควบคุมดูแลสุขภาพตนเอง ควบคุม ป้องกันโรคติดต่อและไม่ติดต่อในชุมชน สร้างเสริมสุขนิสัยที่ดีในการป้องกันโรคและภัยสุขภาพ โดยยึดผู้รับผลงานเป็นศูนย์กลาง มีเป้าหมายเพื่อให้บุคคลใน ครอบครัว ชุมชน มีสุขภาวะที่ดี ดำรงชีวิตอยู่ในสังคมได้อย่างปกติสุข</p>
                            <div class="mt-6 mt-lg-6"></div>
							    <h3>ขอบเขตการให้บริการ กลุ่มโรค / กลุ่มเป้าหมายที่สำคัญ</h3>
                            <div class="mt-3"></div>
                                <p>เวชกรรมป้องกัน ให้บริการในส่วนของการควบคุมโรคและภัยสุขภาพในชุมชน เน้นสำคัญที่กลุ่มโรคติดต่อที่อาจก่อให้เกิดการแพร่ระบาดในวงกว้าง และมีความเสี่ยงอันตราย คุกคามสภาพชีวิตของประชาชนในชุมชน รวมถึงการควบคุม ดูแลอาชีวอนามัย และ สิ่งแวดล้อม เพื่อการเอื้อต่อการทำงาน และดูแลภาวะสุขภาพของบุคลากรในสถานประกอบการต่างๆ การเฝ้าระวังและป้องกัน อุบัติภัยที่อาจเกิดขึ้น ในสถานที่ทำงาน และชุมชน</p>
                                <p>เวชกรรมป้องกัน ให้บริการในการควบคุม ดูแลสุขาภิบาล ระบบบำบัดน้ำเสีย น้ำทิ้ง ในโรงพยาบาล การจัดการขยะ และ การส่งเสริม การดูแล พิทักษ์ สภาพน้ำ สภาวะอากาศ สภาพดิน ในชุมชน เพื่อป้องกันการเกิดแหล่งเพาะพันธุ์ เชื้อโรค ซึ่งอาจก่อให้เกิดการระบาดในชุมชนได้ </p>
                            <div class="mt-6 mt-lg-6"></div>
                            <h3>ประเด็นคุณภาพที่สำคัญ</h3>
                            <div class="mt-3"></div>
                            <ul class="numbered-list-lg">
                                <li>การเฝ้าระวังโรคและภัยสุขภาพ</li>
                                <li>การดูแลด้านสุขาภิบาล</li>
                                <li>การดูแลด้านอาชีวอนามัยและความปลอดภัย สิ่งแวดล้อม</li>
                                <li>การดูแลกลุ่มประชากรเฉพาะ (ทหารใหม่)</li>
                            </ul>
                        </div>
					</div>
				</div>
			</div>
		</div>
      <!--//section-->

@endsection
@section('scripts')

@endsection

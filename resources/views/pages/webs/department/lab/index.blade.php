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
						<span>แผนกพยาธิวิทยา</span>
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
                        <h1>แผนกพยาธิวิทยา</h1>
                        <div class="h-decor"></div>
                     </div>
                  </div>
						{{-- <div class="title-wrap">
							<h1>แผนกตรวจโรคผู้ป่วยนอก</h1></div> --}}
						<div class="service-img text-center">
							<img src="{{ asset('web') }}/medall/images/lap/0002.jpg" height="405" alt="">
						</div>
						<div class="pt-2 pt-md-4">
                     <h3>หน้าที่และเป้าหมาย</h3>
							<p>แผนกพยาธิวิทยา รพ.ค่ายกฤษณ์สีวะรา มีหน้าที่ให้บริการตรวจวิเคราะห์ทางห้องปฏิบัติการเทคนิคการแพทย์ เลือกใช้วิธีวิเคราะห์ที่ทันสมัยได้มาตรฐาน รวดเร็ว ประหยัด ให้ข้อมูลเพื่อการวินิจฉัยโรคที่ถูกต้องน่าเชื่อถือ ให้บริการโลหิตที่เพียงพอและปลอดภัย ตอบสนองความต้องการของผู้ใช้บริการ
                     </p>
							<div class="mt-3 mt-lg-6"></div>
							<h3>ขอบเขตการให้บริการ</h3>
							<div class="mt-3"></div>
							<ul class="numbered-list-lg">
								<li>ให้บริการทางห้องปฏิบัติการด้านเคมีคลินิก ภูมิคุ้มกันวิทยาคลินิก โลหิตวิทยาคลินิก จุลทรรศนศาสตร์คลินิก จุลชีววิทยาคลินิก และธนาคารโลหิต</li>
                        <li>ให้บริการผู้ป่วยภายในโรงพยาบาลค่ายกฤษณ์สีวะรา ให้การสนับสนุนศูนย์สุขภาพชุมชนด้านงานเทคนิคการแพทย์รวมถึงการประกันคุณภาพกระบวนการตรวจวิเคราะห์ที่ดำเนินภายนอกห้องปฏิบัติการหรือที่จุดดูแลผู้ป่วย</li>
                        <li>ให้บริการโลหิตโดยการจัดหาโลหิตจากการขอรับการสนับสนุนจากโรงพยาบาลศูนย์สกลนครและศูนย์บริการโลหิตแห่งชาติ สภากาชาดไทย และเตรียมโลหิตสนับสนุนให้แก่หน่วยงานที่ดูแลรักษาผู้ป่วยภายในโรงพยาบาลค่ายกฤษณ์สีวะรา</li>
                        <li>เก็บสิ่งส่งตรวจ เจาะโลหิตจากหลอดโลหิตดำและหลอดโลหิตฝอยบริเวณผิวหนังและอื่นๆ ซึ่งเป็นสิ่งตัวอย่างทางการแพทย์ที่ได้จากมนุษย์ ภายใต้ พรบ.วิชาชีพเทคนิคการแพทย์</li>
                        <li>ส่งต่อสิ่งส่งตรวจไปยังห้องปฏิบัติการภายนอก กรณีตรวจเองไม่ได้หรือเพื่อตรวจยืนยันผล</li>
                        <li>ฝึกอบรมนักเรียน นักศึกษา เช่น นักเรียนบริบาล เป็นต้น</li>

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

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
						<span>หน่วยไตเทียม</span>
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
                        <h1>หน่วยไตเทียม</h1>
                        <div class="h-decor"></div>
                     </div>
                  </div>
						{{-- <div class="title-wrap">
							<h1>แผนกตรวจโรคผู้ป่วยนอก</h1></div> --}}
						<div class="service-img">
							<img src="{{ asset('images') }}/DSCF05681.JPG" class="img-fluid" alt="">
						</div>
						<div class="pt-2 pt-md-4">
                     <h3>หน่วยไตเทียม</h3>
                     <div class="h-decor"></div>
                     
							<p>ให้บริการฟอกเลือดด้วยเครื่องไตเทียมที่ทันสมัย โดยทีมแพทย์และพยาบาลที่ชำนาญเฉพาะทาง ข้าราชการและประกันสังคมสามารถเบิกได้ตามสิทธิ์ สถานที่สะอาดปลอดโปร่ง กว้างขวาง คลินิกโรคไตเปิดบริการทุกวัน</p>
							<div class="mt-3 mt-lg-6"></div>
                     {{-- <h3>การฝังเข็มรักษาโรคอะไรได้บ้าง?</h3>
                     <div class="h-decor"></div>
							
							<p>องค์กรอนามัยโลก(WHO)ได้ประกาศยอมรับรับการรักษาโรค และบรรเทาอาการด้วยการฝังเข็มได้ ดังนี้</p>
                     <div class="mt-1"></div>
                     <div class="row">
									<div class="col-sm">
							         <ul class="marker-list-md">
                                 <li>อาการปวด โรคปวดคอเรื้อรัง</li>
                                 <li>หัวไหล่</li>
                                 <li>ข้อศอก</li>
                                 <li>กระดูกสันหลัง</li>
                                 <li>เอว</li>
                                 <li>หัวเข่า</li>
                                 <li>ปวดจากการเคล็ดขัดยอก</li>
                                 <li>ปวดประจำเดือน</li>
                                 <li>ปวดศีรษะที่มีสาเหตุจากความเครียดหรือก่อนการมีประจำเดือน</li>
                                 <li>ปวดศีรษะไมเกรน</li>
                                 <li>ปวดหลังผ่าตัด</li>
                                 <li>อัมพาต</li>
                              </ul>
									</div>
									<div class="col-sm d-none d-sm-block">
										<ul class="marker-list-md">
                                 
                                 <li>อัมพฤกษ์</li>
                                 <li>ผลข้าเคียงหลังจากป่วยด้วยโรคทางสมอง</li>
                                 <li>ความดันโลหิตสูงหรือต่ำ</li>
                                 <li>สมรรถภาพทางเพศถดถอย</li>
                                 <li>ภูมิแพ้</li>
                                 <li>หอบหืด</li>
                                 <li>หวาดวิตกกังวล</li>
                                 <li>นอนไม่หลับ</li>
                                 <li>ขากรรไกรค้าง</li>
                                 <li>แพ้ท้อง</li>
                                 <li>คลื่นไส้อาเจียน</li>
                                 
                              </ul>
									</div>
							</div>
                     <div class="mt-3 mt-lg-6"></div>
                     <h3>เข็มที่ใช้ฝัง</h3>
                     <div class="h-decor"></div>
                     
                     <p>เข็มที่ใช้ฝัง เป็นเหล็กสแตนเลส ไม่เป็นสนิม มีขนาดเล็กและบางมาก ปลายเข็มไม่ตัด ไม่กลวงไม่มีรู ได้รับการทำความสะอาดจนปลอดเชื้อ และบรรจุแผงจากโรงงาน ใช้เพียงครั้งเดียวแล้วทิ้งเลยไม่นำกลับมาใช้อีก ปลอดภัยจากการติดเชื้อไวรัสตับอักเสบและโรคเอดส์</p> --}}
							{{-- <div class="mt-0 mt-lg-4"></div>
							<p>Although each procedure varies subtly, there are some basic guidelines to treat cavities, and they are followed by all dental professionals.</p> --}}
							
                     {{-- <div class="mt-3 mt-lg-6"></div>
                     <h3>ความรู้สึกขณะฝังเข็ม</h3>
                     <div class="h-decor"></div>
							<div class="mt-1"></div>
                     <p>เจ็บเล็กน้อย เมื่อเข็มผ่านผิวหนัง หายเจ็บ เมื่อถึงชั้นใต้ผิวหนัง ชา, ตื้อ, หนัก ร้าว เมื่อถึงจุดฝังเข็มไปตามทางเดินของเส้นลมปราณ</p> --}}
							
						</div>
					</div>
				</div>
			</div>
		</div>
      <!--//section-->
    

      
   </div>



@endsection
@section('scripts')

@endsection
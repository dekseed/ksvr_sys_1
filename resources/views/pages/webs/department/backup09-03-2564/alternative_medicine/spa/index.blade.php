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
                  <a href="#">แพทย์ทางเลือก</a>
						<span>แผนกสปา</span>
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
                        <h1>แผนกสปา</h1>
                        <div class="h-decor"></div>
                     </div>
                  </div>
						{{-- <div class="title-wrap">
							<h1>แผนกตรวจโรคผู้ป่วยนอก</h1></div> --}}
						<div class="service-img">
							<img src="{{ asset('web') }}/medall/images/content/service-big-01.jpg" class="img-fluid" alt="">
						</div>
						<div class="pt-2 pt-md-4">
                     {{-- <h3>การฝังเข็มคืออะไร?</h3>
                     <div class="h-decor"></div>
                     
							<p>การฝังเข็มรักษาโรคเป็นการรักษาโรคตามศาสตร์แผนจีนวิวัฒนาการและสืบทอดกันมาหลายพันปี แล้วปัจจุบันองค์การอนามัยโลก(WHO) รับรองว่าเป็นการรักษาโรคที่ได้ผลอีกทางเลือกหนึ่ง</p>
							<p>ตามทฤษฎีแพทย์แผนจีนเชื่อว่า การฝังเข็มทำให้เลือดและระบบลมปราณไหลเวียนดีขึ้น ซึ่งจะช่วยปรับสมดุลย์ของร่างกายที่เจ็บป่วย นอกจากนี้การศึกษาของแพทย์แผนปัจจุบันพบว่าการฝังเข็มทำให้เกิดการหลั่งสาร “เอนเคพฟาลีน และเอนดอร์ฟิน” ซึ่งจะไปช่วยระงับอาการปวดได้ กับสารที่เรียกว่า “ออโตคอย” ที่คอยช่วยลดอาการอักเสบได้อีกด้วย</p>
							<div class="mt-3 mt-lg-6"></div> --}}
                     <h3>ประโยชน์ของการทำสปา</h3>
                     <div class="h-decor"></div>
							
							{{-- <p>องค์กรอนามัยโลก(WHO)ได้ประกาศยอมรับรับการรักษาโรค และบรรเทาอาการด้วยการฝังเข็มได้ ดังนี้</p> --}}
                     <div class="mt-1"></div>
							   <ul class="marker-list-md">
                           <li>ช่วยกระตุ้นการไหลเวียนของโลหิต</li>
                           <li>ช่วยป้องกันริ้วรอยและผิดหย่อนคล้อย ผิวพรรณดูอ่อนเยาว์ยิ่งขึ้น</li>
                           <li>ช่วยผ่อนคลายกล้ามเนื้อจากการเมื่อยล้า</li>
                           <li>ผ่อยคลายสุขภาพและสุขภาพจิต</li>
                           <li>ช่วยให้ผิวพรรณดูสดใส เปล่งปลั่ง</li>
                           <li>เป็นการดีท็อกซ์ของเสียที่ได้รับผลกระทบจากมลภาวะออกจากร่างกาย</li>  
                        </ul>
							
						</div>
					</div>
				</div>
			</div>
		</div>
      <!--//section-->
     
      <!--section prices-->
		<div class="section page-content-first">
			<div class="container">
				<div class="text-center mb-2 mb-md-3 mb-lg-4">
					<div class="h-sub theme-color">อัตราค่าบริการ</div>
					<h1>อัตราค่าบริการ แผนกสปา</h1>
					<div class="h-decor"></div>
				</div>
			</div>
			<div class="container">
						<div class="table-scroll">
							<div class="table-wrap">
								<table class="table price-table js-fixed-table">
									<tr>
										<th class="fixed-side">รายการ</th>
										<th>ราคา</th>
										<th>หน่วย</th>
									</tr>
									<tr>
										<td class="fixed-side">สปาผิวหน้า (Facial Spa)<br>(ขัด + นวด + พอก + บำรุง)</td>
										<td>300 บาท</td>
										<td>45 นาที</td>
									</tr>
									<tr>
										<td class="fixed-side">สปาเท้า (Foot Spa)<br>(ขัด + นวด + พอก + บำรุง)</td>
										<td>250 บาท</td>
										<td>40 นาที</td>
									</tr>
									<tr>
										<td class="fixed-side">อบซาวน่า (Sauna)</td>
										<td>200 บาท</td>
										<td>30 นาที</td>
									</tr>
									
                        </table>
                        <p style="color:red;" class="mt-2 p-sm text-right">(ผู้มีสิทธิเบิกจ่ายตรงสามารถเบิกค่ารักษาพยาบาลได้)</p>
							</div>
						</div>
					
			</div>
				
		</div>
			<!--//section-->

      
   </div>


@endsection
@section('scripts')

@endsection
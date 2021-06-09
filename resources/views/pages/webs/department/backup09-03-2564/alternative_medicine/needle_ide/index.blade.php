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
						<span>แผนกฝั่งเข็ม</span>
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
                        <h1>แผนกฝั่งเข็ม</h1>
                        <div class="h-decor"></div>
                     </div>
                  </div>
						{{-- <div class="title-wrap">
							<h1>แผนกตรวจโรคผู้ป่วยนอก</h1></div> --}}
						<div class="service-img">
							<img src="{{ asset('web') }}/medall/images/content/service-big-01.jpg" class="img-fluid" alt="">
						</div>
						<div class="pt-2 pt-md-4">
                     <h3>การฝังเข็มคืออะไร?</h3>
                     <div class="h-decor"></div>
                     
							<p>การฝังเข็มรักษาโรคเป็นการรักษาโรคตามศาสตร์แผนจีนวิวัฒนาการและสืบทอดกันมาหลายพันปี แล้วปัจจุบันองค์การอนามัยโลก(WHO) รับรองว่าเป็นการรักษาโรคที่ได้ผลอีกทางเลือกหนึ่ง</p>
							<p>ตามทฤษฎีแพทย์แผนจีนเชื่อว่า การฝังเข็มทำให้เลือดและระบบลมปราณไหลเวียนดีขึ้น ซึ่งจะช่วยปรับสมดุลย์ของร่างกายที่เจ็บป่วย นอกจากนี้การศึกษาของแพทย์แผนปัจจุบันพบว่าการฝังเข็มทำให้เกิดการหลั่งสาร “เอนเคพฟาลีน และเอนดอร์ฟิน” ซึ่งจะไปช่วยระงับอาการปวดได้ กับสารที่เรียกว่า “ออโตคอย” ที่คอยช่วยลดอาการอักเสบได้อีกด้วย</p>
							<div class="mt-3 mt-lg-6"></div>
                     <h3>การฝังเข็มรักษาโรคอะไรได้บ้าง?</h3>
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
                     
                     <p>เข็มที่ใช้ฝัง เป็นเหล็กสแตนเลส ไม่เป็นสนิม มีขนาดเล็กและบางมาก ปลายเข็มไม่ตัด ไม่กลวงไม่มีรู ได้รับการทำความสะอาดจนปลอดเชื้อ และบรรจุแผงจากโรงงาน ใช้เพียงครั้งเดียวแล้วทิ้งเลยไม่นำกลับมาใช้อีก ปลอดภัยจากการติดเชื้อไวรัสตับอักเสบและโรคเอดส์</p>
							{{-- <div class="mt-0 mt-lg-4"></div>
							<p>Although each procedure varies subtly, there are some basic guidelines to treat cavities, and they are followed by all dental professionals.</p> --}}
							
                     <div class="mt-3 mt-lg-6"></div>
                     <h3>ความรู้สึกขณะฝังเข็ม</h3>
                     <div class="h-decor"></div>
							<div class="mt-1"></div>
                     <p>เจ็บเล็กน้อย เมื่อเข็มผ่านผิวหนัง หายเจ็บ เมื่อถึงชั้นใต้ผิวหนัง ชา, ตื้อ, หนัก ร้าว เมื่อถึงจุดฝังเข็มไปตามทางเดินของเส้นลมปราณ</p>
							
							
							<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
								<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
									<div class="faq-item">
										<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem1" aria-expanded="true"><span>ข้อแนะนำในการฝังเข็ม</span></a>
										<div id="faqItem1" class="collapse show faq-item-content" role="tabpanel">
											<div>
												<ul class="marker-list-md-line">
                                  
                                       <li>รับประทานอาหารตามปกติ และพักผ่อนนอนหลับอย่างเพียงพอ</li>
                                       <li>ใส่เสื้อ กางเกง ที่หลวม พับเหนือข้อศอกและเข่าได้ ไม่สวมถุงน่องในสตรี</li>
                                       <li>นั่งหรือนอนในท่าที่สบายไม่เกร็ง การฝังเข็มในแต่ละครั้ง ใช้เวลาประมาณ  20-25 นาที</li>
                                       
                                    </ul>
											</div>
										</div>
									</div>
									<div class="faq-item">
										<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem2" aria-expanded="false" class="collapsed"><span>ข้อควรระวังในการฝังเข็ม</span></a>
										<div id="faqItem2" class="collapse faq-item-content" role="tabpanel">
											<div>
												<ul class="marker-list-md-line">
                                  
                                      <li>โรคเลือดที่มีความผิดปกติของระบบแข็งตัวของเลือด(ผู้ป่วยที่ได้รับยาละลายลิ่มเลือด)</li>
                                       <li>โรคที่ต้องการรักษาด้วยการผ่าตัด</li>
                                       <li>โรคที่ยังไม่ทราบการวินิจฉัยที่แน่นอน</li>
                                       <li>ผู้ป่วยที่อยู่ในระหว่างการตั้งครรภ์</li>
                                       <li>ผู้ป่วยโรคมะเร็ง (ที่ยังไม่ได้รับการรักษาด้วยการแพทย์แผนปัจจุบัน)</li>
                                    </ul>
											</div>
										</div>
									</div>
									{{-- <div class="faq-item">
										<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem3" aria-expanded="false" class="collapsed"><span>3.</span>How do I know if my teeth are healthy?</a>
										<div id="faqItem3" class="collapse faq-item-content" role="tabpanel">
											<div>
												<p>Nulla, ab quis perferendis tempore natus soluta, saepe, ullam ducimus at dignissimos nihil maiores! Perspiciatis pariatur itaque id sunt perferendis veritatis, adipisci quam voluptatum facilis. Similique saepe aspernatur cumque esse.</p>
											</div>
										</div>
									</div> --}}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
      <!--//section-->
      <!--section special offers-->
		<div class="section" id="specialOffer">
			<div class="container">
				<div class="title-wrap text-center">
					<div class="h-sub theme-color">For Our Dear Clients</div>
					<h2 class="h1">การรักษาด้วยศาสตร์การแพทย์แผนจีน</h2>
					<div class="h-decor"></div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="special-card">
							<div class="special-card-photo">
								<img src="{{ asset('images') }}/needle_ide/01.jpg" alt="">
							</div>
							<div class="special-card-caption text-left">
								<div class="special-card-txt1">การฝังเข็ม</div>
								<div class="special-card-txt2">Offer</div>
								<div class="special-card-txt3">Full Consultation
									<br> Scale & Polish</div>
								<div><a href="schedule.html" class="btn"><i class="icon-right-arrow"></i><span>Schedule</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="special-card">
							<div class="special-card-photo">
								<img src="{{ asset('images') }}/needle_ide/02.jpg" alt="">
							</div>
							<div class="special-card-caption text-left">
								<div class="special-card-txt1">การใช้เครื่องกระตุ้นไฟฟ้า</div>
								<div class="special-card-txt2">Consultation</div>
								<div class="special-card-txt3">Contact us to find out more about this offer</div>
								<div><a href="contact.html" class="btn"><i class="icon-right-arrow"></i><span>Contact us</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="special-card">
							<div class="special-card-photo">
								<img src="{{ asset('images') }}/needle_ide/03.jpg" alt="">
							</div>
							<div class="special-card-caption text-left">
								<div class="special-card-txt1">การครอบแก้ว</div>
								<div class="special-card-txt2">Laser Teeth</div>
								<div class="special-card-txt3">
									Tooth whitening<br>and Home Bleaching</div>
								<div><a href="services.html" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="special-card">
							<div class="special-card-photo">
								<img src="{{ asset('images') }}/needle_ide/04.jpg" alt="">
							</div>
							<div class="special-card-caption text-left">
								<div class="special-card-txt1">การรมยา</div>
								<div class="special-card-txt2">Veneer</div>
								<div class="special-card-txt3">6 Teeth or more in the same
									<br>jaw, upper or lower front</div>
								<div><a href="service-page.html" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
               </div>
               <div class="col-sm-6">
						<div class="special-card">
							<div class="special-card-photo">
								<img src="{{ asset('images') }}/needle_ide/05.jpg" alt="">
							</div>
							<div class="special-card-caption text-left">
								<div class="special-card-txt1">การกัวซา</div>
								<div class="special-card-txt2">Veneer</div>
								<div class="special-card-txt3">6 Teeth or more in the same
									<br>jaw, upper or lower front</div>
								<div><a href="service-page.html" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
               </div>
               <div class="col-sm-6">
						<div class="special-card">
							<div class="special-card-photo">
                        {{-- <img src="{{ asset('images') }}/needle_ide/06.jpg" alt=""> --}}
                        <img src="{{ asset('web') }}/medall/images/content/special-photo-01.jpg" alt="">
                        
							</div>
							<div class="special-card-caption text-left">
								<div class="special-card-txt1">การนวดทุยหนา</div>
								<div class="special-card-txt2">Veneer</div>
								<div class="special-card-txt3">6 Teeth or more in the same
									<br>jaw, upper or lower front</div>
								<div><a href="service-page.html" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section special offers-->
      <!--section prices-->
		<div class="section page-content-first">
			<div class="container">
				<div class="text-center mb-2 mb-md-3 mb-lg-4">
					<div class="h-sub theme-color">อัตราค่าบริการ</div>
					<h1>อัตราค่าบริการ แผนกฝั่งเข็ม</h1>
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
										<th>เบิกได้</th>
									</tr>
									<tr>
										<td class="fixed-side">ค่าฝังเข็ม</td>
										<td>250 บาท</td>
										<td>150 บาท</td>
									</tr>
									<tr>
										<td class="fixed-side">ค่าฝังเข็มพร้อมเครื่องกระตุ้น เฉพราะกรณีการรักษาและฟื้นฟูสมรรถภาพ ผู้ป่วยอัมพฤกษ์ อัมพาต</td>
										<td>300 บาท</td>
										<td>200 บาท</td>
									</tr>
									<tr>
										<td class="fixed-side">ค่าเครื่องกระตุ้น</td>
										<td>50 บาท</td>
										<td>-</td>
									</tr>
									<tr>
										<td class="fixed-side">ค่าครอบแก้ว</td>
										<td>100 บาท</td>
										<td>-</td>
									</tr>
									<tr>
										<td class="fixed-side">ค่าโคมไฟ</td>
										<td>50 บาท</td>
										<td>-</td>
									</tr>
									<tr>
										<td class="fixed-side">ค่ากัวซา (ความงาม)</td>
										<td>350 บาท</td>
										<td>-</td>
									</tr>
									<tr>
										<td class="fixed-side">ฝังเข็มความงาม (1 ครั้ง)</td>
										<td>350 บาท</td>
										<td>-</td>
									</tr>
									<tr>
										<td class="fixed-side">ฝังเข็มความงาม (4 ครั้ง ฟรี 1)</td>
										<td>1,500  บาท</td>
										<td>-</td>
									</tr>
									
                        </table>
                        {{-- <p style="color:red;" class="mt-2 p-sm text-right">(ผู้มีสิทธิเบิกจ่ายตรงสามารถเบิกค่ารักษาพยาบาลได้)</p> --}}
							</div>
						</div>
					
			</div>
				
		</div>
			<!--//section-->

      
   </div>
            
@endsection
@section('scripts')

@endsection
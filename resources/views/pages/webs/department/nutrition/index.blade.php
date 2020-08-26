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
                  <a href="#">แผนกโภชนาการ</a>
						<span>แนะนำแผนก</span>
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
                        <h1>แผนกโภชนาการ</h1>
                        <div class="h-decor"></div>
                     </div>
                  </div>
						{{-- <div class="title-wrap">
							<h1>แผนกตรวจโรคผู้ป่วยนอก</h1></div> --}}
						<div class="service-img">
							<img src="{{ asset('images') }}/DSC_2577.jpg" class="img-fluid" alt="">
						</div>
						<div class="pt-2 pt-md-4">
                     <h3>การดำเนินงาน</h3>
                     <div class="h-decor"></div>
							<p>ให้บริการอาหารผู้ป่วยของโรงพยาบาล ตามแผนการดูแลผู้ป่วยร่วมกับทีมสหวิชาชีพ ประเมินภาวะโภชนาการและความต้องการสารอาหารของผู้ป่วยแต่ละราย เพื่อนำมาวิเคราะห์และคำนวณในการจัดเตรียมอาหารให้แก่ผู้ป่วยอย่างถูกต้อง บริการอาหารผู้ป่วยเฉพาะโรคและผู้ป่วยให้อาหารทางสาย บริการให้คำปรึกษาทางโภชนาการแก่ผู้ป่วยโรคไม่ติดต่อเรื้อรังและผู้ที่ต้องการลดน้ำหนัก ภายใต้การดูแลของนักโภชนาการวิชาชีพ</p>
							<div class="mt-3 mt-lg-6"></div>
                     <h3>ขอบเขตการให้บริการ และบริการเฉพาะทาง แผนกโภชนาการ</h3>
                     <div class="h-decor"></div>
							<p><b>บริการอาหารผู้ป่วยทั่วไป</b> บริการอาหารผู้ป่วยของโรงพยาบาล ตามแผนการดูแลผู้ป่วยของทีมแพทย์และพยาบาล ให้ตรงตามโรคที่เจ็บป่วย รวมถึงการเยี่ยม เพื่อประเมินความสามารถและความต้องการสารอาหาร ของผู้ป่วยแต่ละราย เพื่อนำมาประยุกต์ใช้ในการเตรียมอาหาร ให้ผู้ป่วยในมื้อต่อไป</p>
                     <div class="mt-3 mt-lg-6"></div>
                     <div class="row">
                        <div class="col-md">
                           <img src="{{ asset('images') }}/nutritionist-1.jpg" class="img-fluid" alt="">
                          <p style="font-size: 12px;" class="text-center mt-1">Major food category 5 (อาหารหลัก 5 หมู่)</p>
                        </div>
                        <div class="col-md mt-2 mt-md-0">
                           <p>
                              <b>บริการอาหารผู้ป่วยเฉพาะโรค</b> โดยการนำอาหารผู้ป่วยทั่วไป มาดัดแปลงให้ถูกต้อง เหมาะสมกับโรคของผู้ป่วยแต่ละราย เพื่อช่วยให้อาการของโรคดีขึ้น การดัดแปลงอาหารพิจารณาจาก รูปลักษณะ การคำนวณ ปริมาณของพลังงาน สารอาหาร เช่น ผู้ป่วยโรคเบาหวาน ผู้ป่วยโรคหัวใจ จะให้เครื่องปรุงรส ที่สามารถควบคุมแร่ธาตุบางชนิดได้ เช่น โซเดียมสำหรับผู้ป่วยโรคหัวใจ – ความดันโลหิตสูง สารให้ความหวาน สำหรับโรคเบาหวาน การควบคุมไขมัน โดยการใช้เส้นใยอาหาร ใช้กะทิธัญพืช ทดแทนกะทิจากมะพร้าว การใช้สารอาหารในการช่วยบำบัด เช่น โรคกระดูกพรุน วัยทอง นอกจากนี้ยังให้คำแนะนำด้านอาหาร พร้อมเอกสารความรู้ สำหรับบำบัดโรคต่างๆ
                           </p>
                        </div>
                     </div>
                     <div class="mt-3 mt-lg-6"></div>
                     <p><b>บริการอาหารสำหรับผู้ป่วยที่ให้อาหารทางสาย</b>
                     โดยจัดอาหารที่คำนวณพลังงาน สารอาหารให้ถูกต้องเหมาะสมกับผู้ป่วยแต่ละราย โดย คำนึงถึงความถูกต้องตามคำสั่งแพทย์ ความสะอาดของอาหาร ตรงตามมื้อที่กำหนด จัดสอนวิธีการทำอาหารให้ทางสาย พร้อมสูตรอาหาร กับผู้ดูแลผู้ป่วยก่อนกลับบ้านให้มีความเข้าใจนำไปปฏิบัติเองได้</p>
                     
                    <p><b>บริการให้คำปรึกษาทางโภชนาการ</b>
                     โดยมีการประเมินภาวะทางโภชนาการเฉพาะบุคคลและให้คำปรึกษาในเรื่องพฤติกรรมการบริโภคอาหารอย่างเจาะลึก</p>
                     <div class="mt-3 mt-lg-6"></div>
                     <div class="video-wrap embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/6XCPNhF0GSM?autoplay=0&amp;rel=0&amp;controls=0&amp;showinfo=0&amp;start=70" allowfullscreen></iframe>
                        
                     </div>
                     <p class="text-center mt-1">"Food For Health, Nutrition for life" อาหารเพื่อสุขภาพและชีวิต</p>
							{{-- <div class="mt-3"></div>
							<p>Filling placement is necessary to treat cavities and prolong the longevity of the natural teeth. With today’s technology continuously improving, new methods are developed to benefit the patients and ensure their positive oral health for a lifetime.</p> --}}
							{{-- <div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
								<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
									<div class="faq-item">
										<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem1" aria-expanded="true"><span>1.</span>Why do I need a Filling?</a>
										<div id="faqItem1" class="collapse show faq-item-content" role="tabpanel">
											<div>
												<p>If the cavity isn’t repaired, this cavity will continue to expand—eventually entering into your nerve canal. This can be excruciatingly painful. However, it can also lead to dire problems such as abscess or infection. Replacing old fillings or fixing chipped teeth can also be required. The most important reason to fix your cavity early on is to avoid a painful and costly root canal.</p>
											</div>
										</div>
									</div>
									<div class="faq-item">
										<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem2" aria-expanded="false" class="collapsed"><span>2.</span>Composite Filling</a>
										<div id="faqItem2" class="collapse faq-item-content" role="tabpanel">
											<div>
												<p>Doloremque nihil sed ratione ipsa molestiae maxime necessitatibus dolorem in, quasi delectus minima tempora! Tempora quo beatae, id temporibus est sint veritatis suscipit ullam ipsa facilis, sunt dignissimos, perferendis placeat, reiciendis quos ad officia mollitia velit explicabo? Illum nobis minus, doloremque tempore animi tenetur, harum sint quas voluptatum neque tempora dolorum laborum nisi suscipit vel nesciunt, fuga eos iusto maiores corrupti quaerat, deserunt modi culpa totam? Iure voluptates esse, laborum quos similique accusamus neque corporis reiciendis saepe.</p>
											</div>
										</div>
									</div>
									<div class="faq-item">
										<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem3" aria-expanded="false" class="collapsed"><span>3.</span>How do I know if my teeth are healthy?</a>
										<div id="faqItem3" class="collapse faq-item-content" role="tabpanel">
											<div>
												<p>Nulla, ab quis perferendis tempore natus soluta, saepe, ullam ducimus at dignissimos nihil maiores! Perspiciatis pariatur itaque id sunt perferendis veritatis, adipisci quam voluptatum facilis. Similique saepe aspernatur cumque esse.</p>
											</div>
										</div>
									</div>
								</div>
							</div> --}}
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
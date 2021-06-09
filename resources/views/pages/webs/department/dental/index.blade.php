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
						<span>แผนกทันตกรรม</span>
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
                        <h1>แผนกทันตกรรม</h1>
                        <div class="h-decor"></div>
                     </div>
                  </div>
						{{-- <div class="title-wrap">
							<h1>แผนกตรวจโรคผู้ป่วยนอก</h1></div> --}}
						<div class="service-img text-center">
                            <img src="{{ asset('web') }}/medall/images/dental/dental03.jpg" class="img-fluid" alt="">
						</div>
						<div class="pt-2 pt-md-4">
							<p>ให้บริการด้านการ อุดฟัน ถอนฟัน เคลือบฟันเด็ก ขูกหินปูน รักษาคลองรากฟัน ผ่าตัดในช่องปาก ใส่ฟันปลอม อุดฟันด้วยแสงฯ.</p>
							{{-- <p>As dentists we believe prevention is always better than cure and will always encourage and help you to look after your teeth so you don't develop tooth decay in the first place. If you do have decay and need a filling then we recommend white fillings as a good solution that is both aesthetic and functional.</p> --}}
							{{-- <div class="mt-3 mt-lg-6"></div> --}}
							{{-- <h3>Why Dental Fillings Are Important</h3>
							<div class="mt-0 mt-lg-4"></div>
							<p>Patients often experience tooth decay because of inappropriate nutritional habits, poor oral care at home or genetics leading to many cavities. Before creating a treatment plan, the dental professional will extensively review the patient’s medical history and their daily routine in efforts to detect any underlying issues such as medical ailments that may be the reason for exaggerated decay formation. According to collected information, a proper course of treatment is chosen including suitable dental materials most beneficial to the individual needs of each patient.</p>
							<div class="mt-3 mt-lg-6"></div> --}}
							{{-- <h3>มีทีมแพทย์หลากหลายสาขา อาทิเช่น</h3> --}}
							{{-- <div class="mt-0 mt-lg-4"></div>
							<p>Although each procedure varies subtly, there are some basic guidelines to treat cavities, and they are followed by all dental professionals.</p> --}}
							{{-- <div class="mt-3"></div>
							<ul class="marker-list-md">
								<li>โสต ศอ นาสิก</li>
                        <li>อายุรกรรม</li>
                        <li>ตรวจโรคทั่วไป</li>
                        <li>คลินิกความดันโลหิตสูง</li>
                        <li>คลินิกโรคไขมันในเลือดสูง</li>
                        <li>คลินิกสูตินรีเวช</li>
                        <li>คลินิกเบาหวาน ความดัน</li>
                        <li>คลินิกโรคไต</li>
                        <li>คลินิกโรคทางเดินอาหาร</li>
                        <li>คลินิกไทรอยด์</li>
                        <li>คลินิกหอบหืด</li>
                        <li>คลินิกโรคปอดอุดกั้นเรื้อรัง</li>
                        <li>คลินิกโรคกระดูกและข้อ</li>
                     </ul> --}}
							{{-- <div class="mt-3"></div>
							<p>Filling placement is necessary to treat cavities and prolong the longevity of the natural teeth. With today’s technology continuously improving, new methods are developed to benefit the patients and ensure their positive oral health for a lifetime.</p> --}}
							<div class="mt-3 mt-md-5 px-1 pt-1 pb-15 pt-md-2 px-md-4 bg-grey">
								<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
									<div class="faq-item">
										<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem1" aria-expanded="true"><span>1.</span>ด้านการให้บริการ และการดูแลดังนี้</a>
										<div id="faqItem1" class="collapse show faq-item-content" role="tabpanel">
											<div>
                                                <ul class="marker-list-md-line">
                                                    <li>อุดฟัน</li>
                                                    <li>ถอนฟัน</li>
                                                    <li>เคลือบฟันเด็ก</li>
                                                    <li>ขูกหินปูน</li>
                                                    <li>รักษาคลองรากฟัน</li>
                                                    <li>ผ่าตัดในช่องปาก</li>
                                                    <li>ใส่ฟันปลอม</li>
                                                    <li>อุดฟันด้วยแสงฯ</li>
                                                </ul>
											</div>
										</div>
									</div>
									<div class="faq-item">
										<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem2" aria-expanded="false" class="collapsed"><span>2.</span>กำหนดการรักษา</a>
										<div id="faqItem2" class="collapse faq-item-content" role="tabpanel">
											<div>
                                                <p>ในเวลาราชการ</p>
                                                <ul class="marker-list-md-line">
                                                    <li>จันทร์ - ศุกร์&emsp;&nbsp;&nbsp;&nbsp;เวลา 09.00 - 11.30 น. ตรวจวินิจฉัยโรค ถอนฟัน อุดฟัน ขูกหินปูน.</li>
                                                    <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;เวลา 13.00 - 15.30 น. เฉพาะผู้ป่วยนัด. (ผ่าตัดฟันคุด ฟันปลอม รักษารากฟัน)</p>
                                                    <li>พุธบ่าย งดตรวจโรค</li>
                                                </ul>
                                            </div>
                                            <div>
                                                <p>นอกเวลาราชการ</p>
                                                <ul class="marker-list-md-line">
                                                    <li>จันทร์ - ศุกร์&emsp;&nbsp;&nbsp;&nbsp;เวลา 16.00 - 20.00 น. ตรวจวินิจฉัยโรค ถอนฟัน อุดฟัน ขูกหินปูน. (ผู้ป่วยนัด)</li>
                                                    <li>เสาร์ - อาทิตย์&nbsp;&nbsp;&nbsp;&nbsp;เวลา 08.00 - 12.00 น. ตรวจวินิจฉัยโรค ถอนฟัน อุดฟัน ขูกหินปูน. (ผู้ป่วยนัด)</li>
                                                    <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;เวลา 13.00 - 16.00 น. รักษารากฟัน ผ่าตัดฟันคุด. (ผู้ป่วยนัด)</p>
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

@endsection
@section('scripts')

@endsection

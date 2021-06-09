@extends('layouts.welcome')
@section('styles')


<style>

</style>
@endsection
@section('content')
    {{-- quickLinks --}}
	@include('_includes.sidebar.quickLinks')
	{{-- quickLinks --}}
	<div class="page-content">
		<!--section-->
		<div class="section mt-0">
			<div class="breadcrumbs-wrap">
				<div class="container">
					<div class="breadcrumbs">
                  <a href="{{route('welcome')}}">หน้าแรก</a>
                  <a href="{{route('about')}}">เกี่ยวกับเรา</a>
						<span>ประวัติและข้อมูลทั่วไป</span>
					</div>
				</div>
			</div>
		</div>
		  <!--//section-->
		<!--section-->
		<div class="section page-content-first">
			<div class="container">
				<div class="text-center mb-2  mb-md-3 mb-lg-4">
					<div class="h-sub theme-color">เกี่ยวกับเรา</div>
					<h1>โรงพยาบาลค่ายกฤษณ์สีวะรา</h1>
					<div class="h-decor"></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-6 text-center text-lg-left pr-md-4">
						<img src="{{ asset('web') }}/medall/images/about/Story570x373.png" class="w-100" alt="">

					</div>
					<div class="col-lg-6 mt-3 mt-lg-0">
						<h3>ข้อมูล <span class="theme-color">โรงพยาบาลค่ายกฤษณ์สีวะรา</span></h3>
						<p>โรงพยาบาลค่ายกฤษณ์สีวะราเป็นโรงพยาบาลกองทัพบกขนาด 60 เตียง สังกัดมณฑลทหารบกที่ 29 เปิดดำเนินการเป็นโรงพยาบาลค่ายกฤษณ์สีวะราเมื่อปี พ.ศ.2529 ภายใต้การนำของอดีตท่านผู้บังคับบัญชา พันเอกธวัชชัย ศศิประภา, พันเอกประสงค์ ล้อมทอง, พันเอกชิตพงศ์ ขวัญประชา,
                            พันเอกปวริศร์ สุขะตุงคะ, พันเอกอนุชา ปิยสุทธิ์ จนถึงปัจจุบัน พันเอกอภิชาต สุวาส</p>
                        <p><b>โดยมีวิสัยทัศน์</b> คือ โรงพยาบาลค่ายกฤษณ์สีวะราเป็นโรงพยาบาลชั้นนำระดับ 60 เตียงของกองทัพบกที่มีคุณภาพได้มาตรฐานและเป็นที่เชื่อมั่นของประชาชน</p>
                        <p><b>พันธกิจ</b> คือ ให้บริการด้านการรักษาพยาบาล ส่งเสริมสุขภาพ ป้องกันโรคและฟื้นฟูสภาพแก่ทหาร ครอบครัว และประชาชนทั่วไปอย่างมีคุณภาพ</p>
                        <p><b>อัตลักษณ์</b> คือ มีความรับผิดชอบ พร้อมซื่อสัตย์สุจริต จิตใจงามมีน้ำใจ</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
                    {{-- <div class="col-12 mt-5 mb-5">
                        <div class="row">
                            <div class="col-6 banner-center bg-cover">
                                <img src="{{ asset('web') }}/medall/images/about/logostory2.png" width="200" class="w-100" alt="">
                            </div>
                            <div class="col-6 banner-center bg-cover">
                                <img src="{{ asset('web') }}/medall/images/about/logostory3.png" width="200" class="w-100" alt="">
                            </div>
                        </div>
                    </div> --}}
					<div class="col-12 mt-5 mb-2">
						<h3>บริการหลัก <span class="theme-color">(main service)</span></h3>
                         <div class="h-decor"></div>
                         <p><b>บริการด้านการรักษาพยาบาล</b></p>
                    </div>

                    <div class="col-6 mt-1">

						<p>- <b>เวชปฏิบัติทั่วไป</b> ตรวจวินิจฉัยและรักษาพยาบาล บริการด้านต่างๆ ดังนี้</p>
						<ul class="marker-list-md">
							<li>ทันตกรรม</li>
							<li>เภสัชกรรม</li>
							<li>รังสีวิทยา</li>
							<li>ชันสูตร</li>
							<li>คลินิกเด็กดี</li>
                        </ul>
                    </div>
                        <div class="col-6 mt-1">
                        <!--<div class="mt-3"></div>-->
						<p>- <b>สาขาเฉพาะทาง</b> ตรวจวินิจฉัยและรักษาพยาบาล บริการด้านต่างๆ ดังนี้</p>
						<ul class="marker-list-md">
							<li>อายุรกรรม</li>
							<li>โสต สอ นาสิก</li>
							<li>สูตินรีเวชกรรม</li>
							<li>กระดูกและข้อ</li>
							<li>ศัลยกรรม</li>
							<li>แพทย์แผนจีน</li>
							<li>แพทย์แผนไทย</li>
                        </ul>

						{{-- <div class="mt-3"></div>
						<p><b>2. บริการด้านส่งเสริมสุขภาพ</b> ป้องกันและควบคุมโรค</p>
						<div class="mt-3"></div>
						<p><b>3. บริการด้านฟื้นฟู</b> ฝังเข็ม กายภาพบำบัด และแพทย์แผนไทย</p>
						<div class="mt-3 mt-md-7"></div>
						<h3>Mission / Vision <span class="theme-color">Statement</span></h3>
						<div class="mt-0 mt-md-4"></div>
						<p>It is our mission to exceed expectations by providing exceptional dental care to our patients and at the same time, building relationships of trust with them.</p>
						<p>Our vision is to be one of the leading dental clinic in the area, expanding our services to reach additional community members. We work to be trusted by patients, a valued partner in the community.</p> --}}
					    </div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->
		<div class="section">
			<div class="container">
				<div class="title-wrap text-center">
					<div class="h-sub theme-color">เกี่ยวกับเรา</div>
					<h2 class="h1">เป้าหมายหลัก</h2>
					<div class="h-decor"></div>
				</div>
				<div class="row js-icn-carousel icn-carousel flex-column flex-sm-row text-center text-sm-left" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}]}'>
					<div class="col-md">
						<div class="icn-text">
							<div class="icn-text-circle"><i class="icon-innovation"></i></div>
							<div>
								<h5 class="icn-text-title">ด้านผู้ใช้บริการ</h5>
								<p>ได้รับความปลอดภัยจากการดูแลรักษา ตามมาตรฐานวิชาชีพ  กลุ่มทหารที่ได้รับบาดเจ็บจากการรบและครอบครัวได้รับการเยียวยาด้านร่างกายและจิตใจ การฟื้นฟูสุขภาพ ให้มีคุณภาพชีวิตที่ดีมีความพึงพอใจ </p>
							</div>
						</div>
					</div>
					<div class="col-md">
						<div class="icn-text">
							<div class="icn-text-circle"><i class="icon-compassion"></i></div>
							<div>
								<h5 class="icn-text-title">ด้านผู้ให้บริการ</h5>
								<p>บุคลากร เก่ง ดี มีสุข มีคุณธรรม<br>
									มีการพัฒนาตนเองอย่างต่อเนื่อง และเป็นแบบอย่างในการสร้างเสริมสุขภาพ

								</p>
							</div>
						</div>
					</div>
					<div class="col-md">
						<div class="icn-text">
							<div class="icn-text-circle"><i class="icon-integrity"></i></div>
							<div>
								<h5 class="icn-text-title">ด้านองค์กร</h5>
									<p>เป็นองค์กรหลักที่รับผิดชอบในการดูแลสุขภาพกำลังพลทหาร ได้รับความเชื่อถือไว้วางใจ/ภาพลักษณ์ที่ดี<br>
									การพัฒนาที่ยั่งยืน<br>
									เป็น รพ.ชั้นนำ
								</p>

							</div>
						</div>
					</div>
					<div class="col-md">
						<div class="icn-text">
							<div class="icn-text-circle"><i class="icon-principles"></i></div>
							<div>
								<h5 class="icn-text-title">ด้านชุมชน</h5>
								<p>ชุมชนทหารในพื้นที่ เป็นชุมชนเข้มแข็งในด้านการสร้างเสริมสุขภาพ</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		{{-- <!--section faq-->
		<div class="section bg-grey py-0">
			<div class="container-fluid px-0">
				<div class="row no-gutters">
					<div class="col-xl-6 banner-left bg-fullheight" style="background-image: url({{ asset('web') }}/medall/images/content/banner-left.jpg)"></div>
					<div class="col-xl-6">
						<div class="faq-wrap">
							<div class="title-wrap">
								<h2 class="h1">โรงพยาบาล<span class="theme-color">ค่ายกฤษณ์สีวะรา</span></h2>
								<div class="h-decor"></div>
							</div>
							<div class="nav nav-pills" role="tablist">
								<a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab">วิสัยทัศน์</a>
								<a class="nav-link" data-toggle="pill" href="#tab-B" role="tab">พันธกิจ</a>
								<a class="nav-link" data-toggle="pill" href="#tab-C" role="tab">อัตลักษณ์</a>
							</div>
							<div id="tab-content" class="tab-content mt-sm-1">
								<div id="tab-A" class="tab-pane fade show active" role="tabpanel">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										<div class="faq-item">

													<p>
														โรงพยาบาลค่ายกฤษณ์สีวะรา เป็นโรงพยาบาลชั้นนำขนาด 60 เตียงของกองทัพบก ที่ทันสมัย มีคุณภาพได้มาตรฐานเป็นที่เชื่อมั่นของกำลังพล ครอบครัวและประชาชน
													</p>

										</div>

									</div>
								</div>
								<div id="tab-B" class="tab-pane fade" role="tabpanel">
									<div id="faqAccordion2" class="faq-accordion" data-children=".faq-item">
										<div class="faq-item">

													<p>
														ให้บริการด้านการรักษาพยาบาล ส่งเสริมสุขภาพ ป้องกันโรคและฟื้นฟูสภาพแก่ทหาร ครอบครัวและ ประชาชนทั่วไปอย่างมีคุณภาพ
													</p>

										</div>

									</div>
								</div>
								<div id="tab-C" class="tab-pane fade" role="tabpanel">
									<div id="faqAccordion2" class="faq-accordion" data-children=".faq-item">
										<div class="faq-item">

													<p>
														“ มีความรับผิดชอบ พร้อมซื่อสัตย์สุจริต  จิตใจงามมีน้ำใจ ” <br><br>
													</p>

										</div>

									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section faq--> --}}


		<!--section-->
		<div class="section">
			<div class="container-fluid px-0">
				<div class="banner-center bg-cover" style="background-image: url({{ asset('web') }}/medall/images/about/Vision.png)">
					<div class="banner-center-caption text-center">
						<div class="banner-center-text1">วิสัยทัศน์</div>
						<div class="banner-center-text3">โรงพยาบาลค่ายกฤษณ์สีวะรา เป็น โรงพยาบาลชั้นนำขนาด 60 เตียงของกองทัพบก ที่ทันสมัย มีคุณภาพได้มาตรฐานเป็นที่เชื่อมั่นของกำลังพล ครอบครัวและประชาชน</div>
						<div class="mt-2 mt-sm-3 mt-lg-5"></div>
						{{-- <a href="#" class="btn btn-white btn-hover-fill mt-2 mt-sm-3 mt-lg-5" data-toggle="modal" data-target="#modalBookingForm"><i class="icon-right-arrow"></i><span>Request an appointment</span><i class="icon-right-arrow"></i></a> --}}
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--วิสัยทัศน์-->
		<!--section call us-->
		<div class="section mt-5">
			<div class="container">
				<div class="banner-call">
					<div class="row no-gutters">
						<div class="col-sm-5 col-lg-5 order-2 order-sm-1 mt-3 mt-md-0 text-center text-md-right">
							<img src="{{ asset('web') }}/medall/images/about/Mission.png" alt="" class="shift-left-1">
						</div>
						<div class="col-sm-7 col-lg-7 col-lg-7 d-flex align-items-center order-1 order-sm-2">
							<div class="text-center pt-2 pt-lg-8">
								<h2>พันธกิจ<br class="d-lg-none"> <br><span class="theme-color">โรงพยาบาลค่ายกฤษณ์สีวะรา</span></h2>
								<div class="h-decor"></div>
								<p class="mt-sm-1 mt-lg-4 text-left text-sm-center max-575">ให้บริการด้านการรักษาพยาบาล ส่งเสริมสุขภาพ ป้องกันโรคและฟื้นฟูสภาพแก่ทหาร ครอบครัว<br>และประชาชนทั่วไปอย่างมีคุณภาพ</p>
								<div class="mt-3 mt-lg-4">
									{{-- <a href="#" class="banner-call-phone"><i class="icon-telephone"></i>1-800-267-0000</a> --}}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section call us-->
		<!--อัตลักษณ์-->
		{{-- <div class="section mt-1">
			<div class="container">
				<div class="banner-call">
					<div class="row no-gutters">
						<div class="col-sm-6 col-lg-7 d-flex align-items-center justify-content-center">
							<div class="text-center">
								<h2>อัตลักษณ์<br class="d-lg-none"> <br><span class="theme-color">โรงพยาบาลค่ายกฤษณ์สีวะรา</span></h2>
								<div class="h-decor"></div>
								<p class="mt-sm-1 mt-lg-4 text-left text-sm-center">“มีความรับผิดชอบ พร้อมซื่อสัตย์สุจริต จิตใจงามมีน้ำใจ”</p>

							</div>
						</div>
						<div class="col-sm-5 col-lg-5 col-xl-4 mt-3 mt-md-0 ">
							<img src="{{ asset('web')}}/medall/images/Identity.png" class="shift-right-1" alt="">
						</div>
					</div>
				</div>
			</div>
        </div> --}}

        <div class="section">
			<div class="container-fluid px-0">
				<div class="row no-gutters">
					<div class="col-xl-6 bg-grey">
						<div class="max-670 mx-lg-auto px-15">
							<div class="text-center">
                                <h2 class="h1 text-center">อัตลักษณ์<br><span class="theme-color">โรงพยาบาลค่ายกฤษณ์สีวะรา</span></h2>
                                <div class="h-decor"></div>
							</div>
							<div class="mt-lg-12"></div>
							<div class="text-center">
								<div class="text-center">
									<p class="text-center">
										“มีความรับผิดชอบ พร้อมซื่อสัตย์สุจริต จิตใจงามมีน้ำใจ”
									</p>
								</div>

							</div>
						</div>
					</div>
					<div class="col-xl-6 banner-left bg-full" style="background-image: url({{ asset('web') }}/medall/images/about/Identity.png)"></div>
				</div>
			</div>
        </div>


        <!--//อัตลักษณ์-->
		<!--ประเด็นยุทธศาสตร์-->
		<div class="section bg-grey py-0">
			<div class="container-fluid px-0">
				<div class="row no-gutters">
					<div class="col-xl-6 banner-left bg-fullheight" style="background-image: url({{ asset('web') }}/medall/images/about/4issues.png)"></div>
					<div class="col-xl-6">
						<div class="faq-wrap px-15 px-lg-8">
							<div class="title-wrap">
								<h2 class="h1">4 ประเด็นยุทธศาสตร์</h2>
							</div>
							<div class="nav nav-pills mt-2 mt-lg-3" role="tablist">
								<a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab">ปี 2564</a>
								{{-- <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab">Urgent</a> --}}
							</div>
							<div id="tab-content" class="tab-content mt-sm-2">
								<div id="tab-A" class="tab-pane fade show active" role="tabpanel">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem1" aria-expanded="true"><span>1.</span><span>ตอบสนองนโยบาย ทบ.และพบ.5</span></a>
											<div id="faqItem1" class="collapse show faq-item-content" role="tabpanel">
												<div>
													<ul class="marker-list-md-line">
														<li>เป้าประสงค์ 1 เทิดทูนสถาบันพระมหากษัตริย์</li>
														<li>เป้าประสงค์ 2 การพัฒนาการดูแลสวัสดิการกำลังพลชั้นผู้น้อย</li>
														<li>เป้าประสงค์ 3 การพัฒนาระบบการฝึกศึกษา</li>
														<li>เป้าประสงค์ 4 การรักษาความสงบเรียบร้อยและความมั่นคงภายใน</li>
														<li>เป้าประสงค์ 5 การช่วยเหลือประชาชน</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem2" aria-expanded="false" class="collapsed"><span>2.</span><span>การพัฒนาบริการทางการแพทย์ 5</span></a>
											<div id="faqItem2" class="collapse faq-item-content" role="tabpanel">
												<div>
													<ul class="marker-list-md-line">
														<li>เป้าประสงค์ 6 มีคุณภาพมาตรฐานด้านบริการทางการแพทย์</li>
														<li>เป้าประสงค์ 7 ผู้รับบริการพึงพอใจต่อบริการที่ได้รับ</li>
														<li>เป้าประสงค์ 8 การบริการสุขภาพให้ครอบคลุมทั้งเชิงรุก / เชิงรับ</li>
														<li>เป้าประสงค์ 9 พัฒนานวัตกรรมและงานวิจัยจากงานประจำ</li>
														<li>เป้าประสงค์ 10 พัฒนาระบบสารสนเทศที่มีประสิทธิภาพ</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem3" aria-expanded="false" class="collapsed"><span>3.</span><span>การพัฒนาด้านการส่งเสริมสุขภาพ 1</span></a>
											<div id="faqItem3" class="collapse faq-item-content" role="tabpanel">
												<div>
													<ul class="marker-list-md-line">
														<li>เป้าประสงค์ 11 เป็นโรงพยาบาลส่งเสริมสุขภาพ</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem4" aria-expanded="false" class="collapsed"><span>4.</span><span>การพัฒนาระบบบริหารจัดการ การพัฒนาบุคลากร 3</span></a>
											<div id="faqItem4" class="collapse faq-item-content" role="tabpanel">
												<div>
													<ul class="marker-list-md-line">
														<li>เป้าประสงค์ 12 การบริหารทรัพยากรอย่างมีประสิทธิภาพ</li>
														<li>เป้าประสงค์ 13 พัฒนาระบบบริหารจัดการที่มีประสิทธิภาพ</li>
    													<li>เป้าประสงค์ 14 พัฒนาระบบการบริหารทรัพยากรบุคคล</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								{{-- <div id="tab-B" class="tab-pane fade" role="tabpanel">
									<div id="faqAccordion2" class="faq-accordion" data-children=".faq-item">
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#faqItem21" aria-expanded="true"><span>1.</span><span>How can I improve my oral hygiene?</span></a>
											<div id="faqItem21" class="collapse show faq-item-content" role="tabpanel">
												<div>
													<p>
														Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums. It’s recommended that children see their dentist at least once a year.
													</p>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#faqItem22" aria-expanded="false" class="collapsed"><span>2.</span><span>How do I know if my teeth are healthy?</span></a>
											<div id="faqItem22" class="collapse faq-item-content" role="tabpanel">
												<div>
													<p>
														Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums. It’s recommended that children see their dentist at least once a year.
													</p>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#faqItem23" aria-expanded="false" class="collapsed"><span>3.</span>Why are regular dental assessments so important?</a>
											<div id="faqItem23" class="collapse faq-item-content" role="tabpanel">
												<div>
													<p>
														Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums. It’s recommended that children see their dentist at least once a year.
													</p>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#faqItem24" aria-expanded="false" class="collapsed"><span>4.</span><span>How often 1 should I visit my dentist?</span></a>
											<div id="faqItem24" class="collapse faq-item-content" role="tabpanel">
												<div>
													<p>
														Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums. It’s recommended that children see their dentist at least once a year.
													</p>
												</div>
											</div>
										</div>
									</div>
								</div> --}}
							</div>
							{{-- <a href="#" class="btn mt-3" data-toggle="modal" data-target="#modalQuestionForm"><i class="icon-right-arrow"></i><span>Ask Question</span><i class="icon-right-arrow"></i></a> --}}
						</div>
					</div>
				</div>
            </div>
        </div>
		<!--//ประเด็นยุทธศาสตร์-->
		<!--ค่านิยม-->
		<div class="section">
			<div class="container-fluid px-0">
				<div class="row no-gutters">
					<div class="col-xl-6 bg-grey">
						<div class="max-670 mx-lg-auto px-15">
							<div class="title-wrap">
								<h2 class="h1 text-center">ค่านิยม<br><span class="theme-color">โรงพยาบาลค่ายกฤษณ์สีวะรา</span></h2>
							</div>
							<div class="mt-lg-12"></div>
							<div class="row">
								<div class="col-sm-7">
									<ul class="marker-list-md">
										<li>ยึดผู้รับบริการ  เป็นศูนย์กลาง (Customer Focus)</li>
										<li>ทำงานเป็นทีม (Teamwork)</li>
										<li>เป็นทหารที่ดีมีวินัย (Discipline)</li>
										<li>เป็นองค์กรแห่งการเรียนรู้ (Leaning Orgaization)</li>
										<li>รักษ์สิ่งแวดล้อม (Environment Conservation)</li>

									</ul>
								</div>

							</div>
						</div>
					</div>
					<div class="col-xl-6 banner-left bg-full" style="background-image: url({{ asset('web') }}/medall/images/about/Values.png)"></div>
				</div>
			</div>
		</div>
		<!--//ค่านิยม-->
		<!--ภาพรวมการพัฒนาคุณภาพ-->
		<div class="section">
			<div class="container-fluid px-0">
				<div class="banner-center bg-cover" style="background-image: url({{ asset('web') }}/medall/images/about/Quality.png)">
					<div class="banner-center-caption text-center">
						<div class="banner-center-text1">ภาพรวมการพัฒนาคุณภาพ</div>
                        <div class="banner-center-text2">โรงพยาบาลค่ายกฤษณ์สีวะรา</div>

					</div>
				</div>
			</div>
		</div>
		<!--section-->
		<!--section-->
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="title-wrap">
							<h2 class="h1">เส้นทางการพัฒนาคุณภาพ</h2>
							<div class="h-decor"></div>
						</div>
						<p></p>
						<div class="mt-4"></div>
						<h3>เกียรติบัตรที่ได้รับ</h3>
						<div class="mt-lg-4"></div>
						<ul class="marker-list-md">
							<li>ใบรับรองระบบบริหารงานคุณภาพ</li>
							<li>รางวัลมาตรฐานไตเทียม Re-acc 3</li>
							<li>รางวัลผลงานประดิษฐ์คิดค้นประเภทสิ่งประดิษฐ์สีเขียว</li>
							<li>ได้รับการรับรองระบบบริหารงานคุณภาพตามมาตรฐานงานเทคนิคการแพทย์ 2560 (LA)</li>
						</ul>
					</div>
					<div class="col-lg-8 mt-4 mt-lg-0">
						<div class="slider-gallery">
							<ul class="slider-gallery-main list-unstyled js-slider-gallery-main">
								<li><img src="{{ asset('web') }}/medall/images/about/Quality/1.PNG" alt=""></li>
								<li><img src="{{ asset('web') }}/medall/images/about/Quality/2.PNG" alt=""></li>
								<li><img src="{{ asset('web') }}/medall/images/about/Quality/3.PNG" alt=""></li>
								<li><img src="{{ asset('web') }}/medall/images/about/Quality/4.PNG" alt=""></li>
								<li><img src="{{ asset('web') }}/medall/images/about/Quality/5.PNG" alt=""></li>
                                <li><img src="{{ asset('web') }}/medall/images/about/Quality/6.PNG" alt=""></li>
                                <li><img src="{{ asset('web') }}/medall/images/about/Quality/7.PNG" alt=""></li>
                                <li><img src="{{ asset('web') }}/medall/images/about/Quality/8.PNG" alt=""></li>
							</ul>
							<ul class="slider-gallery-thumbs list-unstyled js-slider-gallery-thumbs">
								<li><img src="{{ asset('web') }}/medall/images/about/Quality/1.PNG" alt=""></li>
								<li><img src="{{ asset('web') }}/medall/images/about/Quality/2.PNG" alt=""></li>
								<li><img src="{{ asset('web') }}/medall/images/about/Quality/3.PNG" alt=""></li>
								<li><img src="{{ asset('web') }}/medall/images/about/Quality/4.PNG" alt=""></li>
								<li><img src="{{ asset('web') }}/medall/images/about/Quality/5.PNG" alt=""></li>
                                <li><img src="{{ asset('web') }}/medall/images/about/Quality/6.PNG" alt=""></li>
                                <li><img src="{{ asset('web') }}/medall/images/about/Quality/7.PNG" alt=""></li>
                                <li><img src="{{ asset('web') }}/medall/images/about/Quality/8.PNG" alt=""></li>
                            </ul>
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

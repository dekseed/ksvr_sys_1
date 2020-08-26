@extends('layouts.welcome')
@section('styles')


<style>

</style>
@endsection
@section('content')
	<div class="page-content">
		<div class="section mt-0">
			{{-- quickLinks --}}
			@include('_includes.sidebar.quickLinks')
			{{-- quickLinks --}}
			{{-- section slider --}}
			@include('_includes.slider.slider_welcome')
			{{-- section slider --}}
      	</div>
      	<!--section under slider-->
		<div class="section mt-0 shadow-bot pt-2 pb-0 py-sm-4 mb-2">
			<div class="container">
				<div class="row js-icn-text-alt-carousel">
					<div class="col-md-6 col-lg-4">
						<div class="icn-text-alt">
							<div class="icn-text-alt-icn"><i class="icon-first-aid-kit"></i></div>
							<div>
								<h4 class="icn-text-alt-title">ติดต่อเรา</h4>
								<p><a href="{{ route('contact') }}">ถาม-ตอบปัญหาสุขภาพ</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="icn-text-alt">
							<div class="icn-text-alt-icn"><i class="icon-flask"></i></div>
							<div>
								<h4 class="icn-text-alt-title">ข้อมูลสุขภาพ</h4>
								<p><a href="#Medical_articles">บทความทางการแพทย์</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="icn-text-alt">
							<div class="icn-text-alt-icn"><i class="icon-doctor"></i></div>
							<div>
								<h4 class="icn-text-alt-title">LINE OFFICIA</h4>
								<p><a href="https://lin.ee/LRaxooHU">รับข้อมูลข่าวสาร/สอบถาม</a></p>
							</div>
						</div>
               </div>
              
				</div>
			</div>
		</div>
		<!--section under slider-->
		<!--section welcome-->
		<div class="section">
			<div class="container pt-lg-2">
				<div class="title-wrap text-center text-md-left d-lg-none mb-lg-2">
					{{-- <div class="h-sub">25 Years of Medical Excellence</div> --}}
					<h2 class="h1">ยินดีต้อนรับเข้าสู่เว็บไซต์ <br><span class="theme-color">โรงพยาบาลค่ายกฤษณ์สีวะรา</span></h2>
				</div>
				<div class="row mt-2 mt-md-3 mt-lg-0">
					<div class="col-md-6">
						<div class="title-wrap hidden d-none d-lg-block text-center text-md-left">
							{{-- <div class="h-sub">25 Years of Medical Excellence</div> --}}
							<h2 class="h1">ยินดีต้อนรับเข้าสู่เว็บไซต์ <br>
							<span class="theme-color">โรงพยาบาลค่ายกฤษณ์สีวะรา</span></h2>
						</div>
						<div>
							<p>โรงพยาบาลค่ายกฤษณ์สีวะราเป็นโรงพยาบาลกองทัพบก ขนาด 60 เตียง ให้บริการแก่กำลังพลทหารและครอบครัวในพื้นที่ค่ายกฤษณ์สีวะรา หน่วยทหารในพื้นที่จังหวัดสกลนครและบุคคลพลเรือนทั่วไป</p>
							{{-- <p>We are a team of medical researchers and practitioners who work hard to provide effective treatments in our point-of-care facilities.</p> --}}
						</div>
						<div class="mt-2 mt-md-4"></div>
						<a href="#" class="btn-link" data-toggle="modal" data-target="#modalBookingForm">เกี่ยวกับเรา <i class="icon-right-arrow"></i></a>
					</div>
					<div class="col-md-6 mt-3 mt-md-0">
						<div class="video-wrap embed-responsive embed-responsive-16by9">
							<iframe src="https://www.youtube.com/embed/J6ThN3-K6is?autoplay=0&amp;rel=0&amp;controls=0&amp;showinfo=0&amp;start=70" allowfullscreen></iframe>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<!--//section welcome-->
		<!--section departments-->
		<div class="section" id="departmentsSection">
			<div class="container">
				<div class="title-wrap text-center">
				<h2 class="h1">แนะนำแผนก</h2>
				<div class="h-decor"></div>
				</div>
				{{-- <p class="text-center max-500">MedEra Medical Center specializes in different medical services for the convenience of community:</p> --}}
				<div class="row mt-lg-4">
				<div class="col-lg-8 col-xl-9">
					<div class="department-tabs js-department-tabs d-none d-sm-flex">
						<div class="department-tab active">
							<div class="department-tab-icon"><i class="icon-terapevt"></i></div>
							<div class="department-tab-text">ตรวจโรคผู้ป่วยนอก</div>
						</div>
						<div class="department-tab">
							<div class="department-tab-icon"><i class="icon-lab"></i></div>
							<div class="department-tab-text">พยาธิวิทยา</div>
						</div>
						<div class="department-tab">
							<div class="department-tab-icon"><i class="icon-dental"></i></div>
							<div class="department-tab-text">ทันตกรรม</div>
						</div>
						<div class="department-tab">
							<div class="department-tab-icon"><i class="icon-ambulance"></i></div>
							<div class="department-tab-text">ฉุกเฉิน</div>
						</div>
						<div class="department-tab">
							<div class="department-tab-icon"><i class="icon-gynecology"></i></div>
							<div class="department-tab-text">ศูนย์ส่งเสริมสุขภาพ</div>
						</div>
						<div class="department-tab">
							<div class="department-tab-icon"><i class="icon-medicine"></i></div>
							<div class="department-tab-text">ไตเทียม</div>
						</div>
						<div class="department-tab">
							<div class="department-tab-icon"><i class="icon-traumatology"></i></div>
							<div class="department-tab-text">แพทย์ทางเลือก</div>
						</div>
						<div class="department-tab">
							<div class="department-tab-icon"><i class="icon-pediatrics"></i></div>
							<div class="department-tab-text">โภชนาการ</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-xl-3">
					<div class="department-carousel js-department-carousel">
						<div class="department-item">
							<h3 data-title="ตรวจโรคผู้ป่วยนอก"><span>ตรวจโรคผู้ป่วยนอก</span></h3>
							
							<div class="department-tab">
							<div class="department-tab-icon"><i class="icon-terapevt"></i></div>
							<div class="department-tab-text">ตรวจโรคผู้ป่วยนอก</div>
							</div>
							<p>พร้อมให้บริการตรวจ วินิจฉัย ดูแล รักษาพยาบาลโรคทั่วไปในผู้ป่วยทุกเพศ ทุกวัย</p>
							<p>โดยทีมแพทย์หลากหลายสาขา ผู้มีความเชี่ยวชาญ รวมถึงทีมบุคลากรทางการพยาบาลที่มีประสบการณ์และความชำนาญในการดูแลผู้ป่วย</p>
							<a href="{{route('opd.index')}}" class="btn btn-xs btn-gradient"><i class="icon-right-arrow"></i><span>อ่านต่อ</span><i class="icon-right-arrow"></i></a>
						</div>
						<div class="department-item">
							<h3 data-title="พยาธิวิทยา"><span>พยาธิวิทยา</span></h3>
							<div class="department-tab">
							<div class="department-tab-icon"><i class="icon-lab"></i></div>
							<div class="department-tab-text">พยาธิวิทยา</div>
							</div>
							<p>มีหน้าที่ให้บริการตรวจวิเคราะห์ทางห้องปฏิบัติการเทคนิคการแพทย์</p>
							<p>เลือกใช้วิธีวิเคราะห์ที่ทันสมัยได้มาตรฐาน รวดเร็ว ประหยัด ให้ข้อมูลเพื่อการวินิจฉัยโรคที่ถูกต้องน่าเชื่อถือ</p>
							<a href="{{route('er.index')}}" class="btn btn-xs btn-gradient"><i class="icon-right-arrow"></i><span>อ่านต่อ</span><i class="icon-right-arrow"></i></a>
						</div>
						<div class="department-item">
							<h3 data-title="ทันตกรรม"><span>ทันตกรรม</span></h3>
							<div class="department-tab">
							<div class="department-tab-icon"><i class="icon-dental"></i></div>
							<div class="department-tab-text">ทันตกรรม</div>
							</div>
							<p>The Department of Dental Medicine offers comprehensive dental, oral surgery and oral health services in the state of the art, modern facility. </p>
							<p>Children and adults are cared for by general and pediatric dentist and Board Certified specialists from the more complex procedures. </p>
							<a href="{{route('opd.index')}}" class="btn btn-xs btn-gradient"><i class="icon-right-arrow"></i><span>อ่านต่อ</span><i class="icon-right-arrow"></i></a>
						</div>
						<div class="department-item">
							<h3 data-title="ฉุกเฉิน"><span>ฉุกเฉิน</span></h3>
							<div class="department-tab">
							<div class="department-tab-icon"><i class="icon-ambulance"></i></div>
							<div class="department-tab-text">ฉุกเฉิน</div>
							</div>
							<p>เปิดให้บริการแก่ผู้ป่วยอุบัติเหตุ-ฉุกเฉิน ตลอด 24 ชม. สำหรับกำลังพล ครอบครัวทหาร และประชาชนทั่วไป</p>
							<p>โดยเน้นความรวดเร็ว ปลอดภัย ประทับใจต่อผู้รับบริการ</p>
							<a href="{{route('er.index')}}" class="btn btn-xs btn-gradient"><i class="icon-right-arrow"></i><span>อ่านต่อ</span><i class="icon-right-arrow"></i></a>
						</div>
						<div class="department-item">
							<h3 data-title="ศูนย์ส่งเสริมสุขภาพ"><span>ศูนย์ส่งเสริมสุขภาพ</span></h3>
							<div class="department-tab">
							<div class="department-tab-icon"><i class="icon-gynecology"></i></div>
							<div class="department-tab-text">ศูนย์ส่งเสริมสุขภาพ</div>
							</div>
							<p>The Department of Gynecology provides a comprehensive array of services from adolescence through, and beyond menopause. </p>
							<p>Surgical procedures for emergency and other gynecological conditions are being provided by experienced physicians committed to the welfare of the female population.</p>
							<a href="{{route('opd.index')}}" class="btn btn-xs btn-gradient"><i class="icon-right-arrow"></i><span>อ่านต่อ</span><i class="icon-right-arrow"></i></a>
						</div>
						<div class="department-item">
							<h3 data-title="ไตเทียม"><span>ไตเทียม</span></h3>
							<div class="department-tab">
							<div class="department-tab-icon"><i class="icon-medicine"></i></div>
							<div class="department-tab-text">ไตเทียม</div>
							</div>
							<p>ให้บริการฟอกเลือดด้วยเครื่องไตเทียมที่ทันสมัย โดยทีมแพทย์และพยาบาลที่ชำนาญเฉพาะทาง ข้าราชการและประกันสังคมสามารถเบิกได้ตามสิทธิ์ สถานที่สะอาดปลอดโปร่ง กว้างขวาง คลินิกโรคไตเปิดบริการทุกวัน</p>
							<a href="{{route('hemodialysis_unit.index')}}" class="btn btn-xs btn-gradient"><i class="icon-right-arrow"></i><span>อ่านต่อ</span><i class="icon-right-arrow"></i></a>
						</div>
						<div class="department-item">
							<h3 data-title="แพทย์ทางเลือก"><span>แพทย์ทางเลือก</span></h3>
							<div class="department-tab">
							<div class="department-tab-icon"><i class="icon-traumatology"></i></div>
							<div class="department-tab-text">แพทย์ทางเลือก</div>
							</div>
							<p>Our department deals with initial treatment as well as further surgical treatment of accident victims and polytrauma patients. Every member of the team contributes to the continuum of quality trauma care.</p>
							<p>In addition to treating adults, we provide complex service in the treatment of pediatric patients.</p>
							<a href="{{route('opd.index')}}" class="btn btn-xs btn-gradient"><i class="icon-right-arrow"></i><span>อ่านต่อ</span><i class="icon-right-arrow"></i></a>
						</div>
						<div class="department-item">
							<h3 data-title="โภชนาการ"><span>โภชนาการ</span></h3>
							<div class="department-tab">
							<div class="department-tab-icon"><i class="icon-pediatrics"></i></div>
							<div class="department-tab-text">โภชนาการ</div>
							</div>
							<p>ให้บริการอาหารผู้ป่วยของโรงพยาบาล ตามแผนการดูแลผู้ป่วยร่วมกับทีมสหวิชาชีพ ประเมินภาวะโภชนาการและความต้องการสารอาหารของผู้ป่วยแต่ละราย </p>
							<p>เพื่อนำมาวิเคราะห์และคำนวณในการจัดเตรียมอาหารให้แก่ผู้ป่วยอย่างถูกต้อง</p>
							<a href="{{route('nutrition.index')}}" class="btn btn-xs btn-gradient"><i class="icon-right-arrow"></i><span>อ่านต่อ</span><i class="icon-right-arrow"></i></a>
						</div>
					</div>
				</div>
				</div>
			</div>
      	</div>
		<!--//section  departments-->
		<!--section prices-->
		<div class="section page-content-first">
			<div class="container">
				<div class="text-center mb-2 mb-md-3 mb-lg-4">
					<div class="h-sub theme-color">ประชาสัมพันธ์</div>
					<h1>ประชาสัมพันธ์ทั้งหมด</h1>
					<div class="h-decor"></div>
				</div>
			</div>
			<div class="container">
				<div class="text-center mb-3 mb-md-4 max-900">
					{{-- <p>This chart is for example comparison purposes ONLY. Fees are subject to change. Each patient’s total cost of care will vary, and your provider will advise you on the best procedures for your needs.</p> --}}
				</div>
				<div class="nav nav-pills justify-content-center" role="tablist">
					<a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab" aria-expanded="true">ประกาศเรื่องทั่วไป</a>
					<a class="nav-link" data-toggle="pill" href="#tab-B" role="tab" aria-expanded="false">ประกาศจัดซื้อจัดจ้าง</a>
					<a class="nav-link" data-toggle="pill" href="#tab-C" role="tab" aria-expanded="false">ประกาศรับสมัครงาน</a>
				</div>
				<div id="tab-content" class="tab-content mt-3 mt-md-4">
					<div id="tab-A" class="tab-pane fade show active" role="tabpanel">
						<div class="table-scroll">
							<div class="table-wrap">
								<table class="table price-table js-fixed-table">
									<tr>
										{{-- <th class="fixed-side">Treatment Types</th> --}}
										<th>วันที่ลงประกาศ</th>
										<th>หัวข้อ</th>
										<th class="text-left">หมวดหมู่</th>
										<th>ไฟล์ดาวห์โหลด</th>
									</tr>
									@foreach ($tenders as $tender)
                              	
									<tr>
										
										<td style="width:20%" class="text-left">{{DateThai3(date('d-m-Y', strtotime($tender->date)))}}</td>
										<td style="width:40%" class="text-left">{{$tender->name}}</td>
										<td style="width:20%" class="text-left">{{$tender->cate_tender->name}}</td>
										<td style="width:20%" class="text-center"><a href="{{ asset('files/tender/'.$tender->file) }}" target="_blank">รายละเอียด</a></td>
                                		
									</tr>
									@endforeach
								</table>
								{{-- <h5 class="mt-2 text-center"><a href="#">ประกาศเรื่องทั่วไปทั้งหมด</a></h5> --}}
							</div>
						</div>
					</div>
					<div id="tab-B" class="tab-pane fade" role="tabpanel">
						<div class="table-scroll">
							<div class="table-wrap">
								<table class="table table-bordered price-table js-fixed-table">
									<tr>
										{{-- <th class="fixed-side">Treatment Types</th> --}}
										<th>วันที่ลงประกาศ</th>
										<th>หัวข้อ</th>
										<th class="text-left">หมวดหมู่</th>
										<th>ไฟล์ดาวห์โหลด</th>
									</tr>
									@foreach ($tenders as $tender)
                              	
									<tr>
										
										<td style="width:20%" class="text-left">{{DateThai3(date('d-m-Y', strtotime($tender->date)))}}</td>
										<td style="width:40%" class="text-left">{{$tender->name}}</td>
										<td style="width:20%" class="text-left">{{$tender->cate_tender->name}}</td>
										<td style="width:20%" class="text-center"><a href="{{ asset('files/tender/'.$tender->file) }}" target="_blank">รายละเอียด</a></td>
                                		
									</tr>
									@endforeach
								</table>
								{{-- <h5 class="mt-2 text-center"><a href="#">ประกาศจัดซื้อจัดจ้างทั้งหมด</a></h5> --}}
								{{-- {{ $tenders->links() }} --}}
							</div>
						</div>
					</div>
					<div id="tab-C" class="tab-pane fade" role="tabpanel">
						<div class="table-scroll">
							<div class="table-wrap">
								<table class="table table-bordered price-table js-fixed-table">
									<tr>
										{{-- <th class="fixed-side">Treatment Types</th> --}}
										<th>วันที่ลงประกาศ</th>
										<th>หัวข้อ</th>
										<th>ไฟล์ดาวห์โหลด</th>
									</tr>
									@foreach ($jobs as $tender)
                              	
									<tr>
										
										<td style="width:20%" class="text-left">{{DateThai3(date('d-m-Y', strtotime($tender->date)))}}</td>
										<td style="width:60%" class="text-left">{{$tender->name}}</td>
										<td style="width:20%" class="text-center"><a href="{{ asset('files/job/'.$tender->file) }}" target="_blank">รายละเอียด</a></td>
                                		
									</tr>
									@endforeach
								</table>
								{{-- <h5 class="mt-2 text-center"><a href="#">ประกาศรับสมัครงานทั้งหมด</a></h5> --}}
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
			<!--//section-->
		</div>
		<!--//section prices-->
     	<!--section blog posts -->
		<div class="section">
			<div class="container">
				<div class="title-wrap text-center">
					<h2 class="h1">ข่าวสารและกิจกรรม</h2>
					<div class="h-decor"></div>
				</div>
				<div class="blog-grid-full blog-grid-carousel-full js-blog-grid-carousel-full mt-3 mb-0 row">
					<div class="col-md-6 col-lg-4">
						<div class="blog-post">
							<div class="post-image">
								<a href="blog-post-page.html"><img src="{{ asset('web') }}/medall/images/content/news-01.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div class="post-date">17<span>JAN</span></div>
								<div>
									<h2 class="post-title"><a href="blog-post-page.html">The Simpler Solution That Lasts</a></h2>
								</div>
							</div>
							<div class="post-teaser">When patients visit our practice from places like Saratoga Springs, NY, they often express that laser hair removal can sound daunting or excessive ...</div>
							<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post bg-grey">
							<div class="post-image">
								<a href="blog-post-page.html"><img src="{{ asset('web') }}/medall/images/content/news-02.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div class="post-date">22<span>JAN</span></div>
								<div>
									<h2 class="post-title"><a href="blog-post-page.html">Trending Now: Thighlighting</a></h2>
								</div>
							</div>
							<div class="post-teaser">No longer is liposuction just used on the abdomen. Patients who come to us from Albany and beyond appreciate the versatility of liposuction — and it can also treat...</div>
							<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post">
							<div class="post-image">
								<a href="blog-post-page.html"><img src="{{ asset('web') }}/medall/images/content/news-02.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div class="post-date">26<span>JAN</span></div>
								<div>
									<h2 class="post-title"><a href="blog-post-page.html">Our Spa One Bridal Packages</a></h2>
								</div>
							</div>
							<div class="post-teaser">There is no one more interested in looking beautiful than a bride. Photographs from a wedding day are designed to be timeless, cherished in frames in the homes of...</div>
							<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post bg-grey">
							<div class="post-image">
								<a href="blog-post-page.html"><img src="{{ asset('web') }}/medall/images/content/news-01.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div class="post-date">17<span>JAN</span></div>
								<div>
									<h2 class="post-title"><a href="blog-post-page.html">The Simpler Solution That Lasts</a></h2>
								</div>
							</div>
							<div class="post-teaser">When patients visit our practice from places like Saratoga Springs, NY, they often express that laser hair removal can sound daunting or excessive ...</div>
							<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill">Read more</a></div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post">
							<div class="post-image">
								<a href="blog-post-page.html"><img src="{{ asset('web') }}/medall/images/content/news-02.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div class="post-date">22<span>JAN</span></div>
								<div>
									<h2 class="post-title"><a href="blog-post-page.html">Trending Now: Thighlighting</a></h2>
								</div>
							</div>
							<div class="post-teaser">No longer is liposuction just used on the abdomen. Patients who come to us from Albany and beyond appreciate the versatility of liposuction — and it can also treat...</div>
							<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill">Read more</a></div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post bg-grey">
							<div class="post-image">
								<a href="blog-post-page.html"><img src="{{ asset('web') }}/medall/images/content/news-02.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div class="post-date">26<span>JAN</span></div>
								<div>
									<h2 class="post-title"><a href="blog-post-page.html">Our Spa One Bridal Packages</a></h2>
								</div>
							</div>
							<div class="post-teaser">There is no one more interested in looking beautiful than a bride. Photographs from a wedding day are designed to be timeless, cherished in frames in the homes of...</div>
							<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill">Read more</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
      	<!--//section blog posts -->
     	<!--section special offers-->
		<div class="section mb-5" id="Medical_articles">
			<div class="container">
				<div class="title-wrap text-center">
					<div class="h-sub theme-color">บทความ</div>
					<h2 class="h1">บทความทางการแพทย์</h2>
					<div class="h-decor"></div>
				</div>
				<div class="special-carousel js-special-carousel row">
					<div class="col-6">
						<div class="special-card">
							<div class="special-card-photo">
								{{-- <div class="corner-ribbon-wrap">
									<div class="corner-ribbon">
										$750<span>OFF</span>
									</div>
								</div> --}}
								<img src="{{ asset('web') }}/medall/images/content/special-photo-01.jpg" alt="">
							</div>
							<div class="special-card-caption">
								<div class="special-card-txt1">Love Yourself</div>
								<div class="special-card-txt2">Offer</div>
								<div class="special-card-txt3">Butt Lift or Tummy Tuck
									<br>or 360 Liposuction</div>
								<div><a href="schedule.html" class="btn"><i class="icon-right-arrow"></i><span>อ่านบทความ</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="special-card">
							<div class="special-card-photo">
								{{-- <div class="corner-ribbon-wrap">
									<div class="corner-ribbon">
										10%<span>OFF</span>
									</div>
								</div> --}}
								<img src="{{ asset('web') }}/medall/images/content/special-photo-02.jpg" alt="">
							</div>
							<div class="special-card-caption">
								<div class="special-card-txt1">Breast</div>
								<div class="special-card-txt2">Augmentation</div>
								<div class="special-card-txt3">All inclusive include implants
									<br>and all fees for specific dates</div>
								<div><a href="contact.html" class="btn"><i class="icon-right-arrow"></i><span>อ่านบทความ</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="special-card">
							<div class="special-card-photo">
								<img src="{{ asset('web') }}/medall/images/content/special-photo-03.jpg" alt="">
							</div>
							<div class="special-card-caption text-left">
								<div class="special-card-txt1">Whitening</div>
								<div class="special-card-txt2">Laser Teeth</div>
								<div class="special-card-txt3">
									Tooth whitening<br>and Home Bleaching</div>
								<div><a href="services.html" class="btn"><i class="icon-right-arrow"></i><span>อ่านบทความ</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="special-card">
							<div class="special-card-photo">
								<img src="{{ asset('web') }}/medall/images/content/special-photo-04.jpg" alt="">
							</div>
							<div class="special-card-caption text-left">
								<div class="special-card-txt1">Porcelain</div>
								<div class="special-card-txt2">Veneer</div>
								<div class="special-card-txt3">6 Teeth or more in the same
									<br>jaw, upper or lower front</div>
								<div><a href="service-page.html" class="btn"><i class="icon-right-arrow"></i><span>อ่านบทความ</span><i class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section special offers-->
	</div>
@endsection
@section('scripts')

@endsection
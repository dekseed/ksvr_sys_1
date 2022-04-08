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


        <div id="dialog1" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-body text-center">
                        <img src="{{ asset('images') }}/S__22365366.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="dialog-ok" class="btn btn-default">
                            ปิด</button>
                        {{-- <button type="button" id="dialog-close" class="btn btn-default" data-dismiss="modal">
                            Close</button> --}}
                    </div>
                </div>
            </div>
        </div>
        <div id="dialog2" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-body text-center">
                        <img src="{{ asset('images') }}/2_0.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="dialog1-ok" class="btn btn-default">
                            ปิด</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div id="dialog3" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-body text-center">
                        <img src="{{ asset('images') }}/2_0.png" alt="" class="img-fluid">
                    </div>
                    <div class="modal-footer">
                        <button type="button"  class="btn btn-default" data-dismiss="modal">
                            ปิด</button>

                    </div>
                </div>
            </div>
        </div> --}}
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
								<h4 class="icn-text-alt-title">LINE OFFICIAL</h4>
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
							{{-- <iframe src="https://www.youtube.com/embed/J6ThN3-K6is?autoplay=0&amp;rel=0&amp;controls=0&amp;showinfo=0&amp;start=70" allowfullscreen></iframe> --}}
                            <iframe src="https://www.youtube.com/embed/NZELatTm4rU?autoplay=0&amp;rel=0&amp;controls=0&amp;showinfo=0&amp;start=70" allowfullscreen></iframe>
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
							<div class="department-tab-icon"><i class="icon-pencil-writing"></i></div>
							<div class="department-tab-text">เวชระเบียน</div>
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
                        <div class="department-tab">
							<div class="department-tab-icon"><i class="icon-principles"></i></div>
							<div class="department-tab-text">เวชกรรมป้องกัน</div>
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
							<h3 data-title="เวชระเบียน"><span>เวชระเบียน</span></h3>
							<div class="department-tab">
							<div class="department-tab-icon"><i class="icon-lab"></i></div>
							<div class="department-tab-text">เวชระเบียน</div>
							</div>
							<p> เป็นหน่วยบริการด่านหน้า ที่ต้องให้บริการแก่ผู้รับบริการทุกระดับ เพื่อให้เกิดความพึงพอใจสูงสุด ให้บริการที่ดีและมีคุณภาพในการจัดทำประวัติเวชระเบียนของผู้รับบริการโดยมีข้อมูลประวัติส่วนบุคคลอย่างถูกต้อง ครบถ้วน การเก็บรักษาเวชระเบียนที่มีระบบการจัดเก็บที่มีประสิทธิภาพ มีระบบฐานข้อมูลที่เป็นเอกสารและฐานข้อมูลในระบบอิเลคทรอนิกส์ที่สมบูรณ์ มีระบบรักษาความปลอดภัยของข้อมูลของผู้รับบริการทั้งในส่วนของเอกสารและข้อมูลในระบบอิเลคทรอนิกส์</p>
							<p>อีกทั้งยังมีหน้าที่รับผิดชอบในการดำเนินงานเพื่อมุ่งให้เกิดบริการที่ดี มีพฤติกรรมบริการที่เหมาะสม ซึ่งจะเป็นเครื่องมือให้ผู้รับบริการเกิดความเชื่อถือ ศรัทธาและสร้างภาพลักษณ์ที่ดี ที่สามารถสร้างความประทับใจแก่ผู้รับบริการ</p>
							<a href="{{route('er.index')}}" class="btn btn-xs btn-gradient"><i class="icon-right-arrow"></i><span>อ่านต่อ</span><i class="icon-right-arrow"></i></a>
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
							<p>ให้บริการด้านการ อุดฟัน ถอนฟัน เคลือบฟันเด็ก ขูกหินปูน รักษาคลองรากฟัน ผ่าตัดในช่องปาก ใส่ฟันปลอม อุดฟันด้วยแสงฯ </p>
							<a href="{{route('dental.index')}}" class="btn btn-xs btn-gradient"><i class="icon-right-arrow"></i><span>อ่านต่อ</span><i class="icon-right-arrow"></i></a>
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
							<p>1.แผนกกายภาพบำบัด</p>
                            <p>2.แผนกแพทย์แผนไทย</p>
                            <p>3.ฝั่งเข็ม</p>
                            <p>4.นวดสปา</p>
							<a href="{{route('physical_therapy.index')}}" class="btn btn-xs btn-gradient"><i class="icon-right-arrow"></i><span>อ่านต่อ</span><i class="icon-right-arrow"></i></a>
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
                        <div class="department-item">
							<h3 data-title="ตรวจโรคผู้ป่วยนอก"><span>เวชกรรมป้องกัน</span></h3>

							<div class="department-tab">
							<div class="department-tab-icon"><i class="icon-terapevt"></i></div>
							<div class="department-tab-text">เวชกรรมป้องกัน</div>
							</div>
							<p>พร้อมให้บริการตรวจ วินิจฉัย ดูแล รักษาพยาบาลโรคทั่วไปในผู้ป่วยทุกเพศ ทุกวัย</p>
							<p>โดยทีมแพทย์หลากหลายสาขา ผู้มีความเชี่ยวชาญ รวมถึงทีมบุคลากรทางการพยาบาลที่มีประสบการณ์และความชำนาญในการดูแลผู้ป่วย</p>
							<a href="{{route('preventive_medicine.index')}}" class="btn btn-xs btn-gradient"><i class="icon-right-arrow"></i><span>อ่านต่อ</span><i class="icon-right-arrow"></i></a>
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
										<th>วันที่ลงประกาศ</th>
										<th>หัวข้อ</th>
										<th class="text-left">หมวดหมู่</th>
										<th>ไฟล์ดาวห์โหลด</th>
									</tr>

                                    @if (count($publicizes) > 0)
                                        @foreach ($publicizes as $tender)

                                            <tr>
                                                <td style="width:20%" class="text-left">{{DateThai3(date('d-m-Y', strtotime($tender->date)))}}</td>
                                                <td style="width:40%" class="text-left">{{$tender->name}}</td>
                                                <td style="width:20%" class="text-left">{{$tender->cate_tender->name}}</td>
                                                <td style="width:20%" class="text-center"><a href="{{ asset('files/tender/'.$tender->file) }}" target="_blank">รายละเอียด</a></td>
                                            </tr>

                                        @endforeach
                                    @else

                                        <tr>
                                            <td colspan="4" class="text-center">ไม่มีข้อมูล</td>
                                        </tr>

                                    @endif

                                </table>
                                @if (count($publicizes) > 0)
                                <h5 class="mt-2 text-center"><a href="#" class="btn-link">ประกาศเรื่องทั่วไปทั้งหมด <i class="icon-right-arrow"></i></a></h5>
                                @endif
							</div>
						</div>
					</div>
					<div id="tab-B" class="tab-pane fade" role="tabpanel">
						<div class="table-scroll">
							<div class="table-wrap">
								<table class="table table-bordered price-table js-fixed-table">
									<tr>
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
								<h5 class="mt-2 text-center"><a href="#" class="btn-link">ประกาศจัดซื้อจัดจ้างทั้งหมด <i class="icon-right-arrow"></i></a></h5>
							</div>
						</div>
					</div>
					<div id="tab-C" class="tab-pane fade" role="tabpanel">
						<div class="table-scroll">
							<div class="table-wrap">
								<table class="table table-bordered price-table js-fixed-table">
									<tr>
										<th>วันที่ลงประกาศ</th>
										<th>หัวข้อ</th>
										<th>ไฟล์ดาวห์โหลด</th>
                                    </tr>

                                    @if (count($jobs) > 0)
                                        @foreach ($jobs as $tender)

                                            <tr>
                                                <td style="width:20%" class="text-left">{{DateThai3(date('d-m-Y', strtotime($tender->date)))}}</td>
                                                <td style="width:60%" class="text-left">{{$tender->name}}</td>
                                                <td style="width:20%" class="text-center"><a href="{{ asset('files/job/'.$tender->file) }}" target="_blank">รายละเอียด</a></td>
                                            </tr>

                                        @endforeach
                                    @else

                                        <tr>
                                            <td colspan="4" class="text-center">ไม่มีข้อมูล</td>
                                        </tr>

                                    @endif

								</table>
								<h5 class="mt-2 text-center"><a href="#" class="btn-link">ประกาศรับสมัครงานทั้งหมด <i class="icon-right-arrow"></i></a></h5>
							</div>
						</div>
					</div>

				</div>

			</div>
			<!--//section-->
		</div>
		<!--//section prices-->
     	<!--section blog posts -->
		<div class="section mb-5">
			<div class="container">
				<div class="title-wrap text-center">
					<h2 class="h1">ข่าวสารและกิจกรรม</h2>
					<div class="h-decor"></div>
				</div>
				<div id="555"></div>


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


                    @if (!count($publicizes) > 0)
                        <div class="col-12">

                            <h5 class="mt-2 text-center">ยังไม่มีบทความ</h5>

                        </div>

                    @else
                    <div class="special-carousel js-special-carousel row">
                        @foreach ($jobs as $tender)

                        <div class="col-6">
                            <div class="special-card">
                                <div class="special-card-photo">
                                    <div class="corner-ribbon-wrap">
                                        <div class="corner-ribbon">
                                            $750<span>OFF</span>
                                        </div>
                                    </div>
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

                        @endforeach
                    </div>
                    @endif

			</div>
		</div>
		<!--//section special offers-->

	</div>
@endsection
@section('scripts')
<?php
header('Access-Control-Allow-Origin: *');
?>

<script src="{{ asset('js') }}/moment/moment.js"></script>
<script src="{{ asset('js') }}/moment/locale/th.js" charset="UTF-8"></script>
<script type="text/javascript">



moment.locale('th');

 $(document).ready(function(){
    // CSRF Token
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
    type:'get',
    url: "{{ route('facebook_feed') }}",
    success:function( result ) {

        var myObj, i, x = "";
        console.log(result);

            x += "<div class='blog-grid-full blog-grid-carousel-full js-blog-grid-carousel-full mt-3 mb-0 row'>";

        // for(var i=0; i < val.length; i++){
            for (i = 0; i < result.data.length; i++) {
            //  var item = val[i];

                x += "<div class='col-md-6 col-lg-4'>";
                x += "<div class='blog-post'>";
                x += "<div class='post-image'>";
                x += "<a href='"+ result.data[i].permalink_url +"' target='_blank'><img src='"+ result.data[i].full_picture +"' alt=''></a>";
                x += "</div>";
                x += "<div class='blog-post-info'>";

                x += "<div>";
                x += "<p class='p-sm theme-color'><b>โพสเมื่อ "+ moment(result.data[i].created_time).format('LLLL') +" น.</b></p>";
                x += "</div>";

                x += "</div>";
                x += "<div class='h-decor'></div>";
                x += "<div class='post-teaser'>"+ result.data[i].message +"</div>";
                x += "<div class='mt-2'><a href='"+ result.data[i].permalink_url +"' class='btn btn-sm btn-hover-fill' target='_blank'><i class='icon-right-arrow'></i><span>อ่านต่อ..</span><i class='icon-right-arrow'></i></a></div>";
                x += "</div>";
                x += "</div>";

            }

            x += "</div>";

    document.getElementById("555").innerHTML = x;

    }


})
});

</script>
<script type="text/javascript">
    // $(window).on('load', function() {
    //     $('#myModal1').modal('show');
    // });

    // $(window).on('load', function() {
    //     $('#myModal2').modal('show');
    // });

        function showDialog2() {
            $("#dialog1").removeClass("fade").modal("hide");
            $("#dialog2").addClass("fade").modal("show");
        }
        function showDialog3() {
            $("#dialog2").removeClass("fade").modal("hide");
            $("#dialog3").addClass("fade").modal("show");
        }
        $(function () {
            $("#dialog1").modal("show");
            $("#dialog-ok").on("click", function () {
                showDialog2();
            });
            $("#dialog1-ok").on("click", function () {
                showDialog3();
            });
        });
</script>
@endsection

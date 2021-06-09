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
						<span>แผนกแพทย์แผนไทย</span>
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
                        <h1>แผนกแพทย์แผนไทย</h1>
                        <div class="h-decor"></div>
                     </div>
                  </div>
						{{-- <div class="title-wrap">
							<h1>แผนกตรวจโรคผู้ป่วยนอก</h1></div> --}}
						<div class="service-img">
							<img src="{{ asset('web') }}/medall/images/AlternativeMedicine/thai.png" data-original-height="405" data-original-width="870" height="405"  width="870" alt="">
						</div>
						<div class="pt-2 pt-md-4">
							<p>การแพทย์แผนไทยประยุกต์ เป็นการดูแลผู้ป่วยแบบ Holistic approach (ดูแลแบบองค์รวม) ด้วยศาสตร์การแพทย์แผนไทยประยุกต์ โดยรักษาผู้ป่วยทางด้านร่างกายและจิตใจซึ้งการนวดไทย และประคบร้อนสมุนไพรเป็นศาสตร์แขนงหนึ่งที่ช่วยบำบัดรักษาผู้ป่วยที่มีอาการปวดกล้ามเนื้อ เส้นเอ็นและกระดูกตามร่างกาย ฟื้นฟูผู้ป่วยเรื้อรัง เช่น อัมพฤกษ์อัมพาต และการดูแลมารดาหลังคลอด </p>
							{{-- <p>As dentists we believe prevention is always better than cure and will always encourage and help you to look after your teeth so you don't develop tooth decay in the first place. If you do have decay and need a filling then we recommend white fillings as a good solution that is both aesthetic and functional.</p> --}}
							<div class="mt-3 mt-lg-6"></div>
							{{-- <h3>Why Dental Fillings Are Important</h3>
							<div class="mt-0 mt-lg-4"></div>
							<p>Patients often experience tooth decay because of inappropriate nutritional habits, poor oral care at home or genetics leading to many cavities. Before creating a treatment plan, the dental professional will extensively review the patient’s medical history and their daily routine in efforts to detect any underlying issues such as medical ailments that may be the reason for exaggerated decay formation. According to collected information, a proper course of treatment is chosen including suitable dental materials most beneficial to the individual needs of each patient.</p>
							<div class="mt-3 mt-lg-6"></div> --}}
                     <h3>กลุ่มอาการโรคที่รักษาด้วยการนวดไทย</h3>
                     <div class="h-decor"></div>
							{{-- <div class="mt-0 mt-lg-4"></div>
							<p>Although each procedure varies subtly, there are some basic guidelines to treat cavities, and they are followed by all dental professionals.</p> --}}
							<div class="mt-1"></div>
							   <ul class="marker-list-md">
                                 <li>ปวดกล้ามเนื้อ (Myalgia)</li>
                                 <li>ปวดศีรษะไมเกรน (Migraine)</li>
                                 <li>คอตกหมอน (Neck sprain)</li>
                                 <li>หัวไหล่ติด (Frozen shoulder)</li>
                                 <li>ปวดบ่า ปวดสะบัก (Upper back pain)</li>
                                 <li>ปวดหลัง ปวดเอว (Low back pain)</li>
                                 <li>ยอกหลัง (Musculotendinous strain)</li>
                                 <li>ปวดเข่าจากข้อเข่าเสื่อม (Osteoarthritis of knee)</li>
                                 <li>ปวดขา (Lower legs)</li>
                                 <li>ตะคริวน่อง (Calf cramp)</li>
                                 <li>ปวดเท้า ปวดส้นเท้า (Plantar fascitis)</li>
                                 <li>ข้อเท้าแพลง (Ankle sprain)</li>
                                 <li>อัมพฤกษ์ อัมพาต (Paraplegia Hemiplegia)</li>
                                 <li>กล้ามเนื้ออ่อนแรง (Muscle weakness)</li>
                                 <li>ปวดข้อศอก (Tennis elbow)</li>
                                 <li>ปวดข้อมือ (Stiffness of wrist)</li>
                                 <li>นิ้วล็อค (trigger finger)</li>
                        </ul>
                     <div class="mt-3 mt-lg-6"></div>
                     <h3>คำแนะนำหลังการทำหัตถการ</h3>
                     <div class="h-decor"></div>
							<div class="mt-1"></div>
                        <ul class="numbered-list-lg">
                           <li>ดื่นน้ำสมุนไพรหรือน้ำอุ่น เพื่อขับของเสีย ลดการกระหายน้ำ</li>

                           <li>งดการอาบน้ำเป็นเวลา 2 ชั่วโมง</li>

                           <li>งดอาหารแสลง ข้าวเหนียว หน่อไม้ เครื่องในสัตว์ เหล้าเบียร์</li>

                           <li>หลีกเลี่ยงพฤติกรรมที่ทำให้ปวด ห้ามบิดคัดสลัดคอ แขนขา</li>
                        </ul>

							<div class="mt-3 mt-lg-6"></div>
                     <h3>คำแนะนำหลังการทำหัตถการ</h3>
                     <div class="h-decor"></div>
							<div class="mt-1"></div>
                        <ul class="marker-list-md">
                           <li>ความร้อนและช่วยการะตุ้นการหดรัดตัวของมดลูก</li>
                           <li>ช่วยกระตุ้นการไหลของน้ำนม</li>
                           <li>สมุนไพรทำให้มดลูกเข้าอู่เร็วขึ้น</li>
                           <li>ช่วยให้มารดาหลังคลอดมีสุขภาพร่างกายแข็งแรง</li>
                           <li>ช่วยขับน้ำคาวปกลา</li>
                           <li>ช่วยลดอาการ ปวด บวม ของมดลูก</li>
                        </ul>

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
      <!--section-->
		<div class="section bg-grey-lg">
			<div class="container">
				<div class="title-wrap">
					<h2 class="h1">ประโยชน์เกี่ยวกับ<span class="theme-color">แพทย์แผนไทย</span></h2>
					<div class="h-decor"></div>
				</div>
				<div class="row">
					<div class="col-sm">
						<div class="icn-text-num">
							<div class="icn-text-num-number">01.</div>
							<div class="icn-text-num-title">การนวดไทย</div>
							<div class="icn-text-num-text">
								<ul class="marker-list-md-line">
									<li>ทำให้กล้ามเนื้อคลายตัว</li>
									<li>ส่งเลือดและความร้อนไปเลี้ยงส่วนต่างๆ ของร่างกาย</li>
									<li>กระตุ้นการไหลเวียนของเลือดและลม</li>
									<li>กระตุ้นการทำงานของกล้ามเนื้อและระบบประสาท</li>
									<li>บรรเทาอาการปวดกล้ามเนื้อ</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm">
						<div class="icn-text-num">
							<div class="icn-text-num-number">02.</div>
							<div class="icn-text-num-title">การประคบสมุนไพร</div>
							<div class="icn-text-num-text">
								<ul class="marker-list-md-line">
									<li>ช่วยลดอาการบวม อักเสบของกล้ามเนื้อ เส้นเอ็น ข้อมต่อ </li>
									<li>ช่วยกระตุ้นระบบการไหลเวียนเลือด</li>
									<li>ลดอาการเกร็งของกล้ามเนื้อ</li>
									<li>บรรเทาอาการปวดเมื่อยกล้ามเนื้อ</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm">
						<div class="icn-text-num">
							<div class="icn-text-num-number">03.</div>
							<div class="icn-text-num-title">การอบสมุนไพร</div>
							<div class="icn-text-num-text">
								<ul class="marker-list-md-line">
									<li>ช่วยกระตุ้นระบบการไหลเวียนเลือดให้ดีขึ้น</li>
									<li>ช่วยชำระล้างและขับของเสียออกจากร่างกายทางผิดหนัง</li>
									<li>ช่วยให้ระบบการหายใจดีขึ้น</li>
									<li>รักษาโรคภูมิแพ้ หอบหืด</li>
									<li>สมุนไพรช่วยผ่อนคลายและช่วยให้น้ำหนักร่างกายลดลง</li>
									<li>ช่วยให้มดลูกเข้าอู่เร็วในหญิงหลังคลอด</li>
								</ul>
							</div>
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
					<h1>อัตราค่ารักษาพยาบาลการให้บริการ แผนกแพทย์แผนไทย</h1>
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
										<td class="fixed-side">นวดเพื่อการรักษาบำบัดและประคบสมุนไพร</td>
										<td>250 บาท</td>
										<td>1 ชม.</td>
									</tr>
									<tr>
										<td class="fixed-side">นวดฟื้นฟูสมรรถภาพผู้ป่วยอัมพฤกษ์อัมพาด</td>
										<td>200 บาท</td>
										<td>1 ชม.</td>
									</tr>
									<tr>
										<td class="fixed-side">นวดเพื่อการส่งเสริมสุขภาพ</td>
										<td>150 บาท</td>
										<td>1 ชม.</td>
									</tr>
									<tr>
										<td class="fixed-side">ประคบสมุนไพรเพื่อบำบัดโรค</td>
										<td>200 บาท</td>
										<td>1 ชม.</td>
									</tr>
									<tr>
										<td class="fixed-side">ประคบสมุนไพรหลังคลอดกระตุ้นน้ำนม</td>
										<td>250 บาท</td>
										<td>1 ชม.</td>
									</tr>
									<tr>
										<td class="fixed-side">อบสมุนไพร</td>
										<td>120 บาท</td>
										<td>30 นาที</td>
									</tr>
									<tr>
										<td class="fixed-side">ทับหม้อเกลือ (หญิงหลังคลอด)</td>
										<td>400 บาท</td>
										<td>1 ครั้ง</td>
									</tr>
									<tr>
										<td class="fixed-side">จำหน่ายลูกประคบสมุนไพร ยาอบสมุนไพร</td>
										<td>  บาท</td>
										<td>-</td>
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

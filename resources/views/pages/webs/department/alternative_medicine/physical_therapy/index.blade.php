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
						<span>แผนกกายภาพบำบัด</span>
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
                        <h1>แผนกกายภาพบำบัด</h1>
                        <div class="h-decor"></div>
                     </div>
                  </div>
						{{-- <div class="title-wrap">
							<h1>แผนกตรวจโรคผู้ป่วยนอก</h1></div> --}}
						<div class="service-img">
							<img src="{{ asset('web') }}/medall/images/AlternativeMedicine/physical.png" data-original-height="405" data-original-width="870" height="405"  width="870" alt="">
						</div>
						<div class="pt-2 pt-md-4">
							<p>แผนกกายภาพบำบัดให้บริการ รักษา และฟื้นฟูผู้ป่วย ด้วยเครื่องมือที่ได้มาตรฐานและทันสมัย ภายใต้นักกายภาพบำบัดที่มีใบประกอบวิชาชีพ โดยใช้เวลาในการรักษาประมาณ 1.30 ชม. คิดค่าบริการตามสิทธิการรักษาผู้ป่วย เปิดให้บริการทุกวันจันทร์-ศุกร์ เวลา 08.30 น. - 16.00 น. นอกเวลาราชการ วันอังคาร และวันพฤหัสบดี เวลา 16.30 น.- 20.00 น.</p>
							{{-- <p>As dentists we believe prevention is always better than cure and will always encourage and help you to look after your teeth so you don't develop tooth decay in the first place. If you do have decay and need a filling then we recommend white fillings as a good solution that is both aesthetic and functional.</p> --}}
							<div class="mt-3 mt-lg-6"></div>
							{{-- <h3>Why Dental Fillings Are Important</h3>
							<div class="mt-0 mt-lg-4"></div>
							<p>Patients often experience tooth decay because of inappropriate nutritional habits, poor oral care at home or genetics leading to many cavities. Before creating a treatment plan, the dental professional will extensively review the patient’s medical history and their daily routine in efforts to detect any underlying issues such as medical ailments that may be the reason for exaggerated decay formation. According to collected information, a proper course of treatment is chosen including suitable dental materials most beneficial to the individual needs of each patient.</p>
							<div class="mt-3 mt-lg-6"></div> --}}
                     <h3>โดยเครื่องมือที่ใช้ในการรักษาทางกายภาพบำบัด</h3>
                     <div class="h-decor"></div>
							{{-- <div class="mt-0 mt-lg-4"></div>
							<p>Although each procedure varies subtly, there are some basic guidelines to treat cavities, and they are followed by all dental professionals.</p> --}}
							<div class="mt-1"></div>
							<ul class="marker-list-md">
								<li>Traction</li>
                                 <li>Ultrasoud / Ultrasoud combired</li>
                                 <li>Short wave diathermy / SWD</li>
                                 <li>Electrical stimulation / ES</li>
                                 <li>TENS</li>
                                 <li>Paraffin bath</li>
                                 <li>Hotpack / Coolpack</li>
                                 <li>PT Massage</li>
                                 <li>Moblilization</li>
                                 <li>อื่นๆ</li>
                     		</ul>
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

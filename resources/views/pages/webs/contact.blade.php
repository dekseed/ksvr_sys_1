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
		<div class="section mt-0">
			<div class="contact-map" id="googleMapContact"></div>
      	</div>
      	<!--section-->
		<div class="section mt-0 bg-grey">
			<div class="container">
				<div class="row">
					<div class="col-md">
						<div class="title-wrap">
							<h5>ที่อยู่</h5>
							<div class="h-decor"></div>
						</div>
						<ul class="icn-list-lg">
							<li><i class="icon-placeholder2"></i>เลขที่ 100/123
								<br>ตำบลธาตุเชิงชุม อำเภอเมือง
								<br>จังหวัดสกลนคร 47000
							</li>
						</ul>
					</div>
					<div class="col-md mt-3 mt-md-0">
						<div class="title-wrap">
							<h5>เบอร์โทรศัพท์</h5>
							<div class="h-decor"></div>
						</div>
						<ul class="icn-list-lg">
							<li><i class="icon-telephone"></i>โทรศัพท์: <span class="theme-color"><span class="text-nowrap">(042) 712867</span>
								</span>
								<br> Fax: <span class="theme-color"><span class="text-nowrap">(042) 712785</span>
								</span>
							</li>
							<li><i class="icon-black-envelope"></i><a href="mailto:info@dentco.net">info@dentco.net</a></li>
						</ul>
					</div>
					<div class="col-md mt-3 mt-md-0">
						<div class="title-wrap">
							<h5>เวลาทำการ</h5>
							<div class="h-decor"></div>
						</div>
						<ul class="icn-list-lg">
							<li><i class="icon-clock"></i>
								<div>
									<div class="d-flex"><span>วันจันทร์-ศุกร์</span><span class="theme-color">08:00 - 16:00</span></div>
									<div class="d-flex"><span>เฉพาะวันพุธ</span><span class="theme-color">08:00 - 12:00</span></div>
									<div class="d-flex"><span>นอกเวลา</span><span class="theme-color">16:00 - 20:00</span></div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
        <!--//section-->
        <!--section-->
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md col-lg-5">
						<div class="pr-0 pr-lg-8">
							<div class="title-wrap">
								<h2>ส่งข้อความถึงเรา</h2>
								<div class="h-decor"></div>
							</div>
							<div class="mt-2 mt-lg-4">
								<p>For general questions, please send us a message and we’ll get right back to you. You can also call us directly to speak with a member of our service team or insurance expert.</p>
								<p class="p-sm">Fields marked with a * are required.</p>
							</div>
							<div class="mt-2 mt-md-5"></div>
							<h5>Stay Connected</h5>
							<div class="content-social mt-15">
								<a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
								<a href="https://www.twitter.com/" target="blank" class="hovicon"><i class="icon-twitter-logo"></i></a>
								<a href="https://plus.google.com/" target="blank" class="hovicon"><i class="icon-google-logo"></i></a>
								<a href="https://www.instagram.com/" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md col-lg-6 mt-4 mt-md-0">
						<form class="contact-form" id="contactForm" method="post" novalidate="novalidate">
							<div class="successform">
								<p>Your message was sent successfully!</p>
							</div>
							<div class="errorform">
								<p>Something went wrong, try refreshing and submitting the form again.</p>
							</div>
							<div>
								<input type="text" class="form-control" name="name" placeholder="Your name*">
							</div>
							<div class="mt-15">
								<input type="text" class="form-control" name="email" placeholder="Email*">
							</div>
							<div class="mt-15">
								<input type="text" class="form-control" name="phone" placeholder="Your Phone">
							</div>
							<div class="mt-15">
								<textarea class="form-control" name="message" placeholder="Message"></textarea>
							</div>
							<div class="mt-3">
								<button type="submit" class="btn btn-hover-fill"><i class="icon-right-arrow"></i><span>Send message</span><i class="icon-right-arrow"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
	</div>
@endsection
@section('scripts')

@endsection

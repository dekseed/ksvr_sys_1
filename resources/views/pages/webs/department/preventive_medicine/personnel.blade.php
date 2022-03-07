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
						<span>แผนกเวชกรรมป้องกัน</span>
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
                                <div class="h-sub theme-color">แผนกเวชกรรมป้องกัน</div>
                                <h1>บุคลากร</h1>
                                <div class="h-decor"></div>
                            </div>
                        </div>
						<div class="gallery-specialist gallery-isotope" id="gallery-specialist">
                            <div class="gallery-item category1">
                                <div class="doctor-box text-center">
                                    <div class="doctor-box-photo">
                                        <a href="doctor-page.html"><img src="images/content/doctor-01.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <h5 class="doctor-box-name"><a href="doctor-page.html">Dr. Frank Bigham</a></h5>
                                    <div class="doctor-box-position">Associate Dentist</div>
                                    <div class="doctor-box-text">
                                        <p>Dr. Frank Bigham has been in practice for almost 20 years graduating BDS from the University of Manchester, UK in 1997</p>
                                    </div>
                                    <div class="doctor-box-bottom">
                                        <div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:+1-248-715-8767">1-248-715-8767</a></div>
                                        <div class="doctor-box-social">
                                            <a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                                            <a href="mailto:info@dentco.net" class="hovicon"><i class="icon-black-envelope"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item category2 category7">
                                <div class="doctor-box text-center">
                                    <div class="doctor-box-photo">
                                        <a href="doctor-page.html"><img src="images/content/doctor-02.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <h5 class="doctor-box-name"><a href="doctor-page.html">Dr. Pamela Knaack</a></h5>
                                    <div class="doctor-box-position">Dental Hygienist</div>
                                    <div class="doctor-box-text">
                                        <p>Having graduated in 1990 with an R.D.H, Pamela worked in and shared ownership of a very successful dental practice.</p>
                                    </div>
                                    <div class="doctor-box-bottom">
                                        <div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:+1-816-941-7259">1-816-941-7259</a></div>
                                        <div class="doctor-box-social">
                                            <a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                                            <a href="mailto:info@dentco.net" class="hovicon"><i class="icon-black-envelope"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item category3 category6">
                                <div class="doctor-box text-center">
                                    <div class="doctor-box-photo">
                                        <a href="doctor-page.html"><img src="images/content/doctor-03.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <h5 class="doctor-box-name"><a href="doctor-page.html">Dr. Gerald Gleaves</a></h5>
                                    <div class="doctor-box-position">General Dentist</div>
                                    <div class="doctor-box-text">
                                        <p>Gerald graduated from the University of Adelaide in 2004 being awarded the Dental School Dean’s Award in his final clinical year </p>
                                    </div>
                                    <div class="doctor-box-bottom">
                                        <div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:+1-262-374-3970">1-262-374-3970</a></div>
                                        <div class="doctor-box-social">
                                            <a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                                            <a href="mailto:info@dentco.net" class="hovicon"><i class="icon-black-envelope"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item category5 category7">
                                <div class="doctor-box text-center">
                                    <div class="doctor-box-photo">
                                        <a href="doctor-page.html"><img src="images/content/doctor-04.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <h5 class="doctor-box-name"><a href="doctor-page.html">Dr. Lillian Sparks</a></h5>
                                    <div class="doctor-box-position">Prosthodontist</div>
                                    <div class="doctor-box-text">
                                        <p>In 2015 Dr Sparks was accepted as a Fellow in the International Congress of Oral Implantologists (ICOI)</p>
                                    </div>
                                    <div class="doctor-box-bottom">
                                        <div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:+1-281-341-4654">1-281-341-4654</a></div>
                                        <div class="doctor-box-social">
                                            <a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                                            <a href="mailto:info@dentco.net" class="hovicon"><i class="icon-black-envelope"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item category1 category2">
                                <div class="doctor-box text-center">
                                    <div class="doctor-box-photo">
                                        <a href="doctor-page.html"><img src="images/content/doctor-05.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <h5 class="doctor-box-name"><a href="doctor-page.html">Dr. Dennis Dulaney</a></h5>
                                    <div class="doctor-box-position">Orthodontist</div>
                                    <div class="doctor-box-text">
                                        <p>Dennis completed his Bachelor of Oral Health from the University of Sydney in 2012 and was awarded in his final year.</p>
                                    </div>
                                    <div class="doctor-box-bottom">
                                        <div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:+1-608-253-2915">1-608-253-2915</a></div>
                                        <div class="doctor-box-social">
                                            <a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                                            <a href="mailto:info@dentco.net" class="hovicon"><i class="icon-black-envelope"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-item category3 category4">
                                <div class="doctor-box text-center">
                                    <div class="doctor-box-photo">
                                        <a href="doctor-page.html"><img src="images/content/doctor-06.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <h5 class="doctor-box-name"><a href="doctor-page.html">Dr. Jennifer Foster</a></h5>
                                    <div class="doctor-box-position">Oral Health Therapist</div>
                                    <div class="doctor-box-text">
                                        <p>Dr. Jennifer Foster has been in practice for almost 20 years graduating BDS from the University of Manchester, UK in 1997</p>
                                    </div>
                                    <div class="doctor-box-bottom">
                                        <div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:+1-219-756-6567">1-219-756-6567</a></div>
                                        <div class="doctor-box-social">
                                            <a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                                            <a href="mailto:info@dentco.net" class="hovicon"><i class="icon-black-envelope"></i></a>
                                        </div>
                                    </div>
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

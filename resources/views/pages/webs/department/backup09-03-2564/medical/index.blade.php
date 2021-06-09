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
						<span>งานเวชระเบียน</span>
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
                        <h1>งานเวชระเบียน</h1>
                        <div class="h-decor"></div>
                     </div>
                  </div>
						{{-- <div class="title-wrap">
							<h1>แผนกตรวจโรคผู้ป่วยนอก</h1></div> --}}
						<div class="service-img">
							<img src="{{ asset('web') }}/medall/images/medical/medical.png" class="img-fluid" alt="">
                        </div>
                        <br>
                        <div class="text-center">
                            <h3>รูปแบบฟอร์มการลงทะเบียนผู้ป่วยใหม่ โรงพยาบาลค่ายกฤษณ์สีวะรา</h3>
                        </div>
                        <div class="text-center">
							<img src="{{ asset('web') }}/medall/images/medical/registernew1.png" data-original-height="640" data-original-width="426" height="640"  width="427" alt="">
                            <p>-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
                        </div>

                        <div class="text-center">
                            <h3>รูปแบบฟอร์มหนังสือยินยอมเปิดประวัติการรักษาพยาบาล โรงพยาบาลค่ายกฤษณ์สีวะรา</h3>
                        </div>
                        <div class="text-center">
							<img src="{{ asset('web') }}/medall/images/medical/remedicalnew01.png" data-original-height="640" data-original-width="426" height="640"  width="427" alt="">
                            <p>-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
                        </div>

                        <div class="text-center">
                            <h3>รูปแบบฟอร์มหนังสือมอบอำนาจ</h3>
                        </div>
                        <div class="text-center">
							<img src="{{ asset('web') }}/medall/images/medical/remedicalnew02.png" data-original-height="640" data-original-width="426" height="640"  width="427" alt="">
                            <p>-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
                        </div>
					</div>
				</div>
			</div>
		</div>
      <!--//section-->

@endsection
@section('scripts')

@endsection

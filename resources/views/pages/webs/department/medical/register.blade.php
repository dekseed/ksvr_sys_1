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
                  <a href="{{route('medical.index')}}">งานเวชระเบียน</a>
                  <span>ลงทะเบียนผู้ป่วยนอก</span>
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
                                <h1>ลงทะเบียนผู้ป่วยนอก</h1>
                                <div class="h-decor"></div>
                                <div class="table-responsive">
                                    <iframe frameborder="0" height="3918" marginheight="0" marginwidth="0" src="https://docs.google.com/forms/d/e/1FAIpQLSdEJusZJBKCbqApehtghu7Ac_rxSi9kQwD8Se5xoyzyov6yXg/viewform" width="840">กำล&#3633;งโหลด&#8230;</iframe>
                                    <h3 class="post-title entry-title" itemprop="name" style="background-color: white; color: #333333; font-family: Arial, Tahoma, Helvetica, FreeSans, sans-serif; font-size: 18px; font-weight: normal; margin: 0px; position: relative;"><br></h3>
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

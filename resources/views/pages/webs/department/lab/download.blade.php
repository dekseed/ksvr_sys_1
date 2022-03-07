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
                        <a href="#">แผนกพยาธิวิทยา</a>
						<span>เอกสารคุณภาพ</span>
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
                        <div class="h-sub theme-color">แผนกพยาธิวิทยา</div>
                        <h1>เอกสารคุณภาพ</h1>
                        <div class="h-decor"></div>
                     </div>
                  </div>
						{{-- <div class="title-wrap">
							<h1>แผนกตรวจโรคผู้ป่วยนอก</h1></div> --}}
						<div class="service-img">
							<img src="{{ asset('web') }}/medall/images/lap/lap03.jpg" data-original-height="405" data-original-width="870"  class="w-100" alt="">
						</div>

                            @foreach ($tenders as $day => $users_list)
                            <div class="pt-2 pt-md-4">


                                <h3>{{ $day }}</h3>
                                <div class="h-decor"></div>
                                    {{-- <div class="mt-0 mt-lg-4"></div>
                                    <p>Although each procedure varies subtly, there are some basic guidelines to treat cavities, and they are followed by all dental professionals.</p> --}}
                                    <div class="mt-1"></div>
                                    <ul class="marker-list-md-line">
                                        @foreach ($users_list as $item1)
                                        <li><a class="h-sub theme-color" href="{{ asset('files/LAB/'.$item1->file) }}" target="_blank"> {{  $item1->name }}</a> <span style="font-size: 12px;"> (อัพเดทเมื่อวันที่ {{ DateFThai(date('d-m-Y', strtotime($item1->updated_at)))}}) </span></li>
                                        @endforeach
                                    </ul>

                                {{-- <li><a href="{{ asset('files/tender/'.$tender->file) }}" target="_blank">{{$tender->description}} ประกาศ ณ วันที่ {{DateThai(date('d-m-Y', strtotime($tender->date)))}} ประกาศ ณ วันที่ {{ date('j F y', strtotime($tender->updated_at))}} </a></li> --}}

                            </div>
                            @endforeach

					</div>
				</div>
			</div>
		</div>
      <!--//section-->

@endsection
@section('scripts')

@endsection

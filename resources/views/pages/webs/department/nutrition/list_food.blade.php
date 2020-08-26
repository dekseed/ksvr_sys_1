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
                        <a href="#">แผนกโภชนาการ</a>
                        <a href="#">บริการอาหารสำหรับผู้ป่วย</a>
						<span>รายการอาหารผู้ป่วย</span>
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
                                <div class="h-sub theme-color">แผนกโภชนาการ</div>
                                <h1>รายการอาหารผู้ป่วย</h1>
                                <div class="h-decor"></div>
                            </div>
                        
                            <div class="row mb-3">
                                <div class="col-12">
                                    <div class="special-card">
                                        <div class="special-card-photo">
                                            <img src="{{ asset('images') }}/dollyflash.jpg" alt="">
                                        </div>
                                        <div class="special-card-caption text-left">
                                            <div class="special-card-txt1">ข้าวต้มปลาดอลลี่</div>
                                            <div class="special-card-txt2">(Dolly fish Porridge)</div>
                                            {{-- <div class="special-card-txt3">อาหารสำหรับผู้ป่วยที่ทานอาหารได้ตามปกติ 
                                                <br>ไม่มีข้อจำกัดปริมาณสารอาหารต่างๆ</div> --}}
                                            <div><a href="{{route('detail_food.index')}}" class="btn"><i class="icon-right-arrow"></i><span>อ่านต่อ</span><i class="icon-right-arrow"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="special-card">
                                        <div class="special-card-photo">
                                            <img src="{{ asset('images') }}/KalewithPorkOyterSauce.jpg" alt="">
                                        </div>
                                        <div class="special-card-caption text-left">
                                            <div class="special-card-txt1">คะน้าหมูน้ำมันหอย </div>
                                            <div class="special-card-txt2">(Kale with Pork & Oyter Sauce)</div>
                                            {{-- <div class="special-card-txt3">อาหารสำหรับผู้ป่วยที่มีข้อจำกัดในการทานอาหาร
                                                <br>จำกัดปริมาณสารอาหารเฉพาะโรค</div> --}}
                                            <div><a href="#" class="btn"><i class="icon-right-arrow"></i><span>อ่านต่อ</span><i class="icon-right-arrow"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="special-card">
                                        <div class="special-card-photo">
                                            <img src="{{ asset('images') }}/TunaSpicySalad.jpg" alt="">
                                        </div>
                                        <div class="special-card-caption text-left">
                                            <div class="special-card-txt1">ยำปลาทูน่า</div>
                                            <div class="special-card-txt2">(Tuna Spicy Salad)</div>
                                            {{-- <div class="special-card-txt3">อาหารสำหรับผู้ป่วยที่มีข้อจำกัดในการทานอาหาร
                                                <br>จำกัดปริมาณสารอาหารเฉพาะโรค</div> --}}
                                            <div><a href="#" class="btn"><i class="icon-right-arrow"></i><span>อ่านต่อ</span><i class="icon-right-arrow"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="special-card">
                                        <div class="special-card-photo">
                                            <img src="{{ asset('images') }}/SourCurrywithShrimpMixVeggies.jpg" alt="">
                                        </div>
                                        <div class="special-card-caption text-left">
                                            <div class="special-card-txt1">แกงส้มกุ้งผักรวม</div>
                                            <div class="special-card-txt2">(Sour Curry with Shrimp & Mix Veggies)</div>
                                            {{-- <div class="special-card-txt3">อาหารสำหรับผู้ป่วยที่มีข้อจำกัดในการทานอาหาร
                                                <br>จำกัดปริมาณสารอาหารเฉพาะโรค</div> --}}
                                            <div><a href="contact.html" class="btn"><i class="icon-right-arrow"></i><span>อ่านต่อ</span><i class="icon-right-arrow"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-12">
                                    <div class="special-card">
                                        <div class="special-card-photo">
                                            <img src="{{ asset('images') }}/SteamedDollyfishwithLime.jpg" alt="">
                                        </div>
                                        <div class="special-card-caption text-left">
                                            <div class="special-card-txt1">ปลาดอลลี่นึ่งมะนาว</div>
                                            <div class="special-card-txt2">(Steamed Dolly fish with Lime)</div>
                                            {{-- <div class="special-card-txt3">อาหารสำหรับผู้ป่วยที่มีข้อจำกัดในการทานอาหาร
                                                <br>จำกัดปริมาณสารอาหารเฉพาะโรค</div> --}}
                                            <div><a href="#" class="btn"><i class="icon-right-arrow"></i><span>อ่านต่อ</span><i class="icon-right-arrow"></i></a></div>
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

   </div>

@endsection
@section('scripts')

@endsection
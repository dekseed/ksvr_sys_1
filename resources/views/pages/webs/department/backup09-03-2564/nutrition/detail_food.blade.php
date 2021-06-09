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
                        <a href="#">รายการอาหารผู้ป่วย</a>
						<span>ข้าวต้มปลาดอลลี่</span>
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
                        <h1>ข้าวต้มปลาดอลลี่</h1>
                        <div class="h-decor"></div>
                     </div>
                  </div>
						{{-- <div class="title-wrap">
							<h1>แผนกตรวจโรคผู้ป่วยนอก</h1></div> --}}
						<div class="service-img">
							<img src="{{ asset('images') }}/dollyflash-1.jpg" class="img-fluid" alt="">
						</div>
						<div class="pt-2 pt-md-4">
                     <h3>ข้าวต้มปลาดอลลี่ ( 1 ที่เสิร์ฟ)</h3>
                     <div class="h-decor"></div>
                        <h5>1. ปลาดอลลี่</h5>
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center">ปริมาณ</th>
                                <th class="text-center">กรัม</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>> 1 ที่เสิร์ฟ</td>
                                <td class="text-center">170</td>

                            </tr>
                            <tr>
                                <td>> คาร์โบไฮเดรต(CHO)</td>
                                <td class="text-center">7.31</td>

                            </tr>
                            <tr>
                                <td>> โปรตีน(Protein)</td>
                                <td class="text-center">75.82</td>

                            </tr>
                            <tr>
                                <td>> ไขมัน(FAT)</td>
                                <td class="text-center">0.85</td>

                            </tr>
                            </tbody>
                        </table>
                     
                     <div class="mt-3 mt-lg-6"></div>
                     <div class="row">
                        <div class="col-md">
                           <img src="{{ asset('images') }}/dolly.jpg" class="img-fluid" alt="">
                          <p style="font-size: 12px;" class="text-center mt-1">เนื้อปลาดอลลี่</p>
                        </div>
                        <div class="col-md mt-2 mt-md-0">
                           <p>
                              <b>คุณค่าทางโภชนาการ</b> 
                                อุดมไปด้วยกรดอะมิโนที่จำเป็น (Essential Amino Acids) ครบถ้วน และยังมีกรดไขมันจำเป็น โอเมก้า-3 วิตามินบี 2 ซึ่งร่างกายสามารถนำไปใช้ในการเผาผลาญโปรตีน ไขมัน และคาร์โบไฮเดรต มีวิตามินที่กระดูกจำเป็นต้องใช้ในการสะสมแคลเซียม นอกจากนี้ยังอุดมไปด้วย ฟอสฟอรัส แคลเซียม เหล็ก สังกะสี ไอโอดีน และแมกซีเซียม
                           </p>
                        </div>
                     </div>
                     <div class="mt-3 mt-lg-6"></div>
                     <h5>2. ข้าวหอมมะลิต้ม</h5>
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">ปริมาณ</th>
                                    <th class="text-center">กรัม</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>> 1 ที่เสิร์ฟ</td>
                                    <td class="text-center">160</td>

                                </tr>
                                <tr>
                                    <td>> คาร์โบไฮเดรต(CHO)</td>
                                    <td class="text-center">20.8</td>

                                </tr>
                                <tr>
                                    <td>> โปรตีน(Protein)</td>
                                    <td class="text-center">0</td>

                                </tr>
                                <tr>
                                    <td>> ไขมัน(FAT)</td>
                                    <td class="text-center">6.4</td>

                                </tr>
                            </tbody>
                        </table>
                     
                     <div class="mt-3 mt-lg-6"></div>
                     <div class="row">
                        <div class="col-md">
                           <img src="{{ asset('images') }}/rice.jpg" class="img-fluid" alt="">
                          <p style="font-size: 12px;" class="text-center mt-1">ข้าวหอมมะลิ</p>
                        </div>
                        <div class="col-md mt-2 mt-md-0">
                           <p>
                              <b>คุณค่าทางโภชนาการ</b> 
                                เป็นแหล่งของคาร์โบไฮเดรต มีวิตามินบี 2 วิตามินบี 3 วิตามินอี ช่วยบำรุงสุขภาพผิวหนังและลิ้น ป้องกันการอ่อนเพลีย มีฟอสฟอรัส ช่วยเสริมสร้างกระดูกและฟัน มีลูทีน เบต้าแคโรทีน แคลเซียม เหล็กและคอปเปอร์
                           </p>
                        </div>
                     </div>
                     <div class="mt-3 mt-lg-6"></div>
                     <h5>3. น้ำสต๊อกไก่</h5>
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                <th class="text-center">ปริมาณ</th>
                                <th class="text-center">กรัม</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>> 1 ที่เสิร์ฟ</td>
                                <td class="text-center">249</td>

                                </tr>
                                <tr>
                                <td>> คาร์โบไฮเดรต(CHO)</td>
                                <td class="text-center">1.5</td>

                                </tr>
                                <tr>
                                <td>> โปรตีน(Protein)</td>
                                <td class="text-center">1</td>

                                </tr>
                                <tr>
                                <td>> ไขมัน(FAT)</td>
                                <td class="text-center">0.5</td>

                                </tr>
                            </tbody>
                        </table>
                     
                     <div class="mt-3 mt-lg-6"></div>
                     <div class="row">
                        <div class="col-md">
                           <img src="{{ asset('images') }}/hqdefault.jpg" class="img-fluid" alt="">
                          <p style="font-size: 12px;" class="text-center mt-1">น้ำสต๊อกไก่</p>
                        </div>
                        <div class="col-md mt-2 mt-md-0">
                           <p>
                              <b>คุณค่าทางโภชนาการ</b> 
                                ให้พลังงานจากโปรตีน กรดอะมิโน 17 ชนิด คุณค่าต่างๆจากวิตามิน ไขมัน และเกลือแร่ต่างๆที่มีประโยชน์ และเกลือ (โซเดียมคลอไรด์)
                           </p>
                        </div>
                     </div>
                     <div class="mt-3 mt-lg-6"></div>
                     
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
@extends('layouts.welcome')
@section('styles')


<style>

</style>
@endsection
@section('content')

            <section class="page_title">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 d-flex">
                        <div class="content_box">
                           <ul class="bread_crumb text-center">
                              <li class="bread_crumb-item"><a href="{{route('welcome')}}">หน้าแรก</a></li>
                              <li class="bread_crumb-item active">บริการของเรา</li>
                           </ul>
                           <h1>แพทย์ทางเลือก</h1>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
           <!--------Checkout-------->
            <section class="prevention_all">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-3">
                        <div class="icon_box type_two wow fadeIn " data-wow-delay="00ms" data-wow-duration="1500ms">
                           <h2><a href="{{route('physical_therapy.index')}}">แผนกกายภาพบำบัด</a></h2>
                           <div class="icon_box">
                              <img src="{{ asset('web') }}/assets/image/svg/spongewash.svg" class="img-fluid svg_icon" alt="img" />
                           </div>
                           <p>ให้บริการ รักษา และฟื้นฟูผู้ป่วย ด้วยเครื่องมือที่ได้มาตรฐานและทันสมัย ภายใต้นักกายภาพบำบัดที่มีใบประกอบวิชาชีพ..</p>
                           <a href="{{route('physical_therapy.index')}}" class="read_more tp_one">อ่านต่อ <span class="flaticon-next "></span></a>
                        </div>
                     </div>
                     <div class="col-lg-3">
                        <div class="icon_box type_two wow fadeIn " data-wow-delay="100ms" data-wow-duration="1500ms">
                           <h2><a href="{{route('thai_traditional_medicine.index')}}">แผนกแพทย์แผนไทย</a></h2>
                           <div class="icon_box">
                              <img src="{{ asset('web') }}/assets/image/svg/man-touch.svg" class="img-fluid svg_icon" alt="img" />
                           </div>
                           <p>at least 20 seconds especially after you have been in a public place.</p>
                           <a href="{{route('thai_traditional_medicine.index')}}" class="read_more tp_one">อ่านต่อ <span class="flaticon-next "></span></a>
                        </div>
                     </div>
                     <div class="col-lg-3">
                        <div class="icon_box type_two wow fadeIn " data-wow-delay="200ms" data-wow-duration="1500ms">
                           <h2><a href="{{route('needle_ide_index.index')}}">แผนกฝั่งเข็ม</a></h2>
                           <div class="icon_box">
                              <img src="{{ asset('web') }}/assets/image/svg/socialspreading.svg" class="img-fluid svg_icon" alt="img" />
                           </div>
                           <p>at least 20 seconds especially after you have been in a public place.</p>
                           <a href="{{route('needle_ide_index.index')}}" class="read_more tp_one">อ่านต่อ <span class="flaticon-next "></span></a>
                        </div>
                     </div>
                     <div class="col-lg-3">
                        <div class="icon_box type_two wow fadeIn " data-wow-delay="300ms" data-wow-duration="1500ms">
                           <h2><a href="{{route('spa.index')}}">แผนกนวดสปา</a></h2>
                           <div class="icon_box">
                              <img src="{{ asset('web') }}/assets/image/svg/sorethroat.svg" class="img-fluid svg_icon" alt="img" />
                           </div>
                           <p>at least 20 seconds especially after you have been in a public place.</p>
                           <a href="{{route('spa.index')}}" class="read_more tp_one">อ่านต่อ <span class="flaticon-next "></span></a>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!--------Checkout-------->
            
            
@endsection
@section('scripts')

@endsection
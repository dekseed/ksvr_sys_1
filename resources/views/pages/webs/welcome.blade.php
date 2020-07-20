@extends('layouts.welcome')
@section('styles')


<style>

</style>
@endsection
@section('content')
            <!------main-content------>
            <!------main-slider------>
            <section class="main-slider">
               <div class="main-slider-carousel main_slider owl-carousel owl-theme">
                  <div class="slide one">
                     <div class="container text-left">
                        <div class="row">
                           <div class="col-lg-7 d-flex">
                              <div class="content">
                                 <h6>Stabilitech's COVID-19 Vaccine</h6>
                                 <h1> Protective measures against the new coronavirus</h1>
                                 <div class="text">Regularly Washing your hands is best way to protect again catching COVID - 19 than wearing gloves</div>
                                 <div class="link-box">
                                    <a href="#" class="theme_btn tp_two">Doctors</a>
                                    <a href="#" class="theme_btn tp_one two">Contact us</a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-5">
                              <div class="slider_image slide_image_right clearfix">
                                 <div class="image image_1 floating">
                                    <img src="{{ asset('web') }}/assets/image/main-slider/home-2-slider-1-1.png" class="img-fluid" alt="img" />
                                 </div>
                                 <div class="image image_2 beat">
                                    <img src="{{ asset('web') }}/assets/image/main-slider/home-2-slider-1-2.png" class="img-fluid" alt="img" />
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="slide two">
                     <div class="container text-left">
                        <div class="row">
                          
                           <div class="col-lg-6 d-flex order-last">
                              <div class="content slide_content_right">
                                 <h6>Stabilitech's COVID-19 Vaccine</h6>
                                 <h1> Stay informed <br class="md_none"/>and follow advice given by Govt</h1>
                                 <div class="text">Regularly Washing your hands is best way to protect again catching COVID - 19 than wearing gloves</div>
                                 <div class="link-box">
                                    <a href="#" class="theme_btn tp_two">Doctors</a>
                                    <a href="#" class="theme_btn tp_one two">Contact us</a>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-6 order-first">
                              <div class="slider_image slide_image_left clearfix">
                                 <div class="image image_1 floating">
                                    <img src="{{ asset('web') }}/assets/image/main-slider/home-2-slider-2-1.png" class="img-fluid" alt="img" />
                                 </div>
                                 <div class="image image_2 beat">
                                    <img src="{{ asset('web') }}/assets/image/main-slider/home-2-slider-1-2.png" class="img-fluid" alt="img" />
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="slide three">
                     <div class="container text-left">
                        <div class="row">
                           <div class="col-lg-7 d-flex">
                              <div class=" content">
                                 <h6>Stabilitech's COVID-19 Vaccine</h6>
                                 <h1>Help to prevent possible spread of COVID-19</h1>
                                 <div class="text">Regularly Washing your hands is best way to protect again catching COVID - 19 than wearing gloves</div>
                                 <div class="link-box">
                                    <a href="#" class="theme_btn tp_two">Doctors</a>
                                    <a href="#" class="theme_btn tp_one two">Contact us</a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-5">
                              <div class="slider_image slide_image_right clearfix">
                                 <div class="image image_1 floating">
                                    <img src="{{ asset('web') }}/assets/image/main-slider/home-2-slider-3-1.png" class="img-fluid" alt="img" />
                                 </div>
                                 <div class="image image_2 beat">
                                    <img src="{{ asset('web') }}/assets/image/main-slider/home-2-slider-1-2.png" class="img-fluid" alt="img" />
                                 </div>
                                 <div class="image image_3 rotate-me">
                                    <img src="{{ asset('web') }}/assets/image/main-slider/home-2-slider-3-2.png" class="img-fluid" alt="img" />
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!------main-slider------>
            <!-------------welome_box---------->
            <section class="welcome type_one">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="icon_box type_one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                           <div class="icon">
                              <img src="{{ asset('web') }}/assets/image/svg/working-at-home.svg" class="img-fluid svg_image" alt="home" /> <span class="flaticon-virus"></span>
                           </div>
                           <div class="content_box">
                              <h2><a href="#">ติดต่อเรา</a></h2>
                              <p>ถาม-ตอบปัญหาสุขภาพ</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="icon_box type_one wow slideInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                           <div class="icon">
                              <img src="{{ asset('web') }}/assets/image/svg/mask-2.svg" class="img-fluid svg_image" alt="home" /> <span class="flaticon-virus"></span>
                           </div>
                           <div class="content_box">
                              <h2><a href="#">ข้อมูลสุขภาพ</a></h2>
                              <p>บทความทางการแพทย์</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="icon_box type_one wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                           <div class="icon">
                              <img src="{{ asset('web') }}/assets/image/svg/virus.svg" class="img-fluid svg_image" alt="home" /> <span class="flaticon-virus"></span>
                           </div>
                           <div class="content_box">
                              <h2><a href="#">LINE OFFICIA</a></h2>
                              <p>รับข้อมูลข่าวสาร/สอบถาม</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="icon_box type_one last wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                           <div class="icon">
                              <img src="{{ asset('web') }}/assets/image/svg/smartphone.svg" class="img-fluid svg_image" alt="svg" /> <span class="flaticon-virus"></span>
                           </div>
                           <div class="content_box">
                              <h6>เหตุฉุกเฉิน </h6>
                              <h2><a href="#">โทร 1669</a></h2>
                              <p>โทรฟรี 24 ชม.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-------------welome_box---------->
            <!-------------abou us---------->
            {{-- <section class="about type_one">
               <div class="container">
                  <nav>
                     <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
                        <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">About</a>
                     </div>
                  </nav>
                  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                     <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                     </div>
                     <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                     </div>
                     <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                     </div>
                     <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                        Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                     </div>
                  </div>
			
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="image_box">
                           <div class="image image_3">
                              <img src="assets/image/resources/about-3.png" class="img-fluid" alt="img" />
                           </div>
                           <div class="image image_4">
                              <img src="assets/image/resources/about-4.png" class="img-fluid" alt="img" />
                           </div>
                           <div class="image image_1">
                              <img src="assets/image/resources/about-1.png" class="img-fluid" alt="img" />
                           </div>
                           <div class="image image_2">
                              <img src="assets/image/resources/about-2.png" class="img-fluid" alt="img" />
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="heading tp_one  icon_dark">
                           <h6>about Corona</h6>
                           <h1>Coronavirus Disease 2019 (COVID-19)</h1>
                           <span class="flaticon-virus icon"></span>
                        </div>
                        <div class="about_content">
                           <p class="description">It is a long established fact that a reader will be distracted . The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look
                              like readable English.
                           </p>
                           <div class="symptoms">
                              <h2>The best way to prevent illness is to avoid being exposed to this virus.</h2>
                              <div class="row">
                                 <div class="col-lg-6">
                                    <ul>
                                       <li>
                                          <span class="flaticon-check"></span>
                                          <p>Clean and disinfect frequently touched surfaces </p>
                                       </li>
                                       <li>
                                          <span class="flaticon-check"></span>
                                          <p>Avoid touching your eyes, nose, and mouth</p>
                                       </li>
                                       <li>
                                          <span class="flaticon-check"></span>
                                          <p>Clean your hands with a hand sanitizer </p>
                                       </li>
                                       <li>
                                          <span class="flaticon-check"></span>
                                          <p>Cover coughs and sneezes</p>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="col-lg-6">
                                    <ul>
                                       <li>
                                          <span class="flaticon-check"></span>
                                          <p>Stay home if you’re sick</p>
                                       </li>
                                       <li>
                                          <span class="flaticon-check"></span>
                                          <p>Wear a facemask if sick</p>
                                       </li>
                                       <li>
                                          <span class="flaticon-check"></span>
                                          <p>Cover your mouth and nose </p>
                                       </li>
                                       <li>
                                          <span class="flaticon-check"></span>
                                          <p>Throw used tissues in trash</p>
                                       </li>
                                       <li>
                                          <span class="flaticon-check"></span>
                                          <p>Ensure solution has at least 70% alcohol.</p>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <a href="#" class="theme_btn tp_two">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </section> --}}
            <section class="how_virus_spread type_one">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="heading icon_dark text-center tp_one">
                           <h6>VIRUS SPREAD</h6>
                           <h1>แนะนำแผนก</h1>
                           <span class="flaticon-virus icon"></span>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12 padding_zero">
                        <div class="owl-carousel three_items_center">
                           <div class="spreading_box type_one">
                              <div class="icon_box">
                                 <img src="assets/image/svg/meeting.svg" class="img-fluid svg_icon_image" alt="svg" />
                                 <span class="flaticon-virus icon"></span>
                              </div>
                              <div class="content_box">
                                 <h2>
                                    <a href="#">From Close Contact With an Infected Person</a>
                                 </h2>
                                 <p>Lorem ipsum dolor sit amet, adipiscing elit. Nulla neque quam, maxi ut ac cu msan ut, posuere sit Lorem ipsum qu.</p>
                                 <a href="#" class="read_more tp_one">Read More <span class="flaticon-next"></span></a>
                              </div>
                           </div>
                           <div class="spreading_box type_one">
                              <div class="icon_box">
                                 <img src="assets/image/svg/mask.svg" class="img-fluid svg_icon_image" alt="svg" />
                                 <span class="flaticon-virus icon"></span>
                              </div>
                              <div class="content_box">
                                 <h2>
                                    <a href="#">Droplets From Infected Person’s Cough or Sneeze</a>
                                 </h2>
                                 <p>Lorem ipsum dolor sit amet, adipiscing elit. Nulla neque quam, maxi ut ac cu msan ut, posuere sit Lorem ipsum qu.</p>
                                 <a href="#" class="read_more tp_one">Read More <span class="flaticon-next"></span></a>
                              </div>
                           </div>
                           <div class="spreading_box type_one">
                              <div class="icon_box">
                                 <img src="assets/image/svg/cough.svg" class="img-fluid svg_icon_image" alt="svg" />
                                 <span class="flaticon-virus icon"></span>
                              </div>
                              <div class="content_box">
                                 <h2>
                                    <a href="#">Touching Objects That Have Cough or Sneeze Droplets</a>
                                 </h2>
                                 <p>Lorem ipsum dolor sit amet, adipiscing elit. Nulla neque quam, maxi ut ac cu msan ut, posuere sit Lorem ipsum qu.</p>
                                 <a href="#" class="read_more tp_one">Read More <span class="flaticon-next"></span></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="how_virus_spread type_two" style="background: #fff;" id="spread">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="heading  text-center tp_two">
                           <h1>ตารางแพทย์ออกตรวจ</h1>
                           <span class="flaticon-virus icon"></span>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12 padding_zero">
                        <div class="owl-carousel three_items_noloop">
                           <div class="spreading_box type_two wow fadeIn" data-wow-delay="100ms" data-wow-duration="1500ms">
                              <span class="flaticon-cough icon"></span>
                              <div class="content_box">
                                 <h2>
                                    <a href="#">From Close Contact With an Infected Person</a>
                                 </h2>
                                 <p>Lorem ipsum dolor sit amet, adipiscing elit. Nulla neque quam, maxi ut ac cu msan ut, posuere sit .</p>
                              </div>
                           </div>
                           <div class="spreading_box type_two wow fadeIn" data-wow-delay="200ms" data-wow-duration="1500ms">
                              <span class="flaticon-distance icon"></span>
                              <div class="content_box">
                                 <h2>
                                    <a href="#">Droplets From Infected Person’s Cough or Sneeze</a>
                                 </h2>
                                 <p>Lorem ipsum dolor sit amet, adipiscing elit. Nulla neque quam, maxi ut ac cu msan ut, posuere sit .</p>
                              </div>
                           </div>
                           <div class="spreading_box type_two wow fadeIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                              <span class="flaticon-infected icon"></span>
                              <div class="content_box">
                                 <h2>
                                    <a href="#">Touching Objects That Have Cough or Sneeze Droplets</a>
                                 </h2>
                                 <p>Lorem ipsum dolor sit amet, adipiscing elit. Nulla neque quam, maxi ut ac cu msan ut, posuere sit .</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
             
            
            {{-- <section class="doctor type_two">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="heading  tp_one">
                           <h6>แนะนำแพทย์</h6>
                           <h1>พบกับแพทย์ที่ดีที่สุดของเรา</h1>
                           <img src="{{ asset('web') }}/assets/image/logo3.png" style="width: 5%;position: absolute;color: #f3f9fe;z-index: -1;opacity: .2;top: 0;" class="" />
                           <span class="flaticon-virus icon"></span>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12 padding_zero">
                        <div class="owl-carousel four_items">
                           <div class="doctor_box type_two">
                              <div class="image_box">
                                 <img src="{{ asset('web') }}/assets/image/resources/best-doctors1.jpg" class="img-fluid" alt="best-doctors" />
                                 <div class="overlay">
                                    <ul>
                                       <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                       <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                       <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                       <li><a href="#"><i class="fa fa fa-vimeo"></i></a></li>
                                       <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="content_box">
                                 <a href="#" class="contact_doctor"><span class="fa fa-phone"></span>+44 555 67 890</a>
                                 <div class="text_box">
                                    <h2> <a href="#">Dr. Genoveva Leannon </a> </h2>
                                    <small>Internal Medicine</small>
                                 </div>
                              </div>
                           </div>
                           <div class="doctor_box type_two">
                              <div class="image_box">
                                 <img src="{{ asset('web') }}/assets/image/resources/best-doctors2.jpg" class="img-fluid" alt="best-doctors" />
                                 <div class="overlay">
                                    <ul>
                                       <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                       <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                       <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                       <li><a href="#"><i class="fa fa fa-vimeo"></i></a></li>
                                       <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="content_box">
                                 <a href="#" class="contact_doctor"><span class="fa fa-phone"></span>+44 555 67 890</a>
                                 <div class="text_box">
                                    <h2> <a href="#">Alen Bailey </a> </h2>
                                    <small>Head Doctor</small>
                                 </div>
                              </div>
                           </div>
                           <div class="doctor_box type_two">
                              <div class="image_box">
                                 <img src="{{ asset('web') }}/assets/image/resources/best-doctors3.jpg" class="img-fluid" alt="best-doctors" />
                                 <div class="overlay">
                                    <ul>
                                       <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                       <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                       <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                       <li><a href="#"><i class="fa fa fa-vimeo"></i></a></li>
                                       <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="content_box">
                                 <a href="#" class="contact_doctor"><span class="fa fa-phone"></span>+44 555 67 890</a>
                                 <div class="text_box">
                                    <h2> <a href="#">Dr. Basil Andrew </a> </h2>
                                    <small>Chief Doctor </small>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="funfacts type_two">
               <div class="container">
                  <div class="about_fun_facts">
                     <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                           <div class="fun_facts_box type_two">
                              <h2><span class="counter-value">434595 </span>+</h2>
                              <h6>Total Confirmed</h6>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                           <div class="fun_facts_box type_two">
                              <h2><span class="counter-value">170</span>+</h2>
                              <h6>Countries / Regions</h6>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                           <div class="fun_facts_box type_two">
                              <h2><span class="counter-value">10</span>%</h2>
                              <h6>Total Recoverd</h6>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                           <div class="fun_facts_box type_two last">
                              <h2><span class="counter-value">80</span>%</h2>
                              <h6>Confirmed Deaths</h6>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            
             <section class="explore_more two">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="content_box text-center">
                           <h1> Basic protective measures against<br class="disp_none_md" />the <span>new coronavirus</span> </h1>
                           <a href="#" class="theme_btn tp_two">Explore Studies</a>
                        </div>
                     </div>
                  </div>
               </div>
            </section> --}}
            <section class="faqs type_one" id="faq">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="heading icon_dark text-center  tp_one">
                           <h6>ข่าวสารและกิจกรรม</h6>
                           <h1>ประชาสัมพันธ์</h1>
                           <span class="flaticon-virus icon"></span>
                           
                           {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p> --}}
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-7">
                        <div id="accordion">
                           <div class="card faq_box type_one">
                              <div class="card-header" id="headingOne">
                                 <h5 class="mb-0">
                                    <button class="faq_btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                   ประกาศทั่วไป<span class="flaticon-question-2 faq_icon"></span>
                                    </button>
                                 </h5>
                              </div>
                              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                 <div class="card-body">
                                    On February 11, 2020 the World Health Organization announced an official name for the disease that is causing the 2019 novel coronavirus outbreak, first identified in Wuhan China. The new name of this disease is coronavirus disease 2019, abbreviated as
                                    COVID-19. In COVID-19, ‘CO’ stands for ‘corona,’ ‘VI’ for ‘virus,’ and ‘D’ for disease. Formerly, this disease was referred to as “2019 novel coronavirus” or “2019-nCoV”. 
                                 </div>
                              </div>
                           </div>
                           <div class="card faq_box type_one">
                              <div class="card-header" id="headingTwo">
                                 <h5 class="mb-0">
                                    <button class="faq_btn collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    ประกาศจัดซื้อจัดจ้าง<span class="flaticon-question-2 faq_icon"></span>
                                    </button>
                                 </h5>
                              </div>
                              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                 <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                    occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                 </div>
                              </div>
                           </div>
                           <div class="card faq_box type_one">
                              <div class="card-header" id="headingThree">
                                 <h5 class="mb-0">
                                    <button class="faq_btn collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    ประกาศรับสมัครงาน<span class="flaticon-question-2 faq_icon"></span>
                                    </button>
                                 </h5>
                              </div>
                              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                 <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                                    on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                    occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-5">
                        <div class="faq_recent">
                           <h2 class="title">ประกาศเมื่อเร็ว ๆ นี้</h2>
                           <div class="owl-carousel one_items">
                              <div class="recent_faq_box type_one">
                                 <h2>จัดซื้อยาเวชภัณฑ์</h2>
                                 <p>It is not yet known whether weather and temperature impact the spread of COVID-19. Some other viruses, like the common cold and flu, spread more during cold weather months but that does not mean it is impossible
                                    to become sick with these viruses during other months. At this time, it is not known whether the spread of COVID-19 will decrease when weather becomes warmer. There is much more to learn about.
                                 </p>
                                 <span class="flaticon-question rec_faq_icon"></span>
                                 <a href="#" class="read_more tp_one">อ่านต่อ <span class="flaticon-next"></span></a>
                              </div>
                              <div class="recent_faq_box type_one">
                                 <h2>จัดซื้ออุปกรณ์</h2>
                                 <p>It is not yet known whether weather and temperature impact the spread of COVID-19. Some other viruses, like the common cold and flu, spread more during cold weather months but that does not mean it is impossible
                                    to become sick with these viruses during other months. At this time, it is not known whether the spread of COVID-19 will decrease when weather becomes warmer. There is much more to learn about.
                                 </p>
                                 <span class="flaticon-question rec_faq_icon"></span>
                                 <a href="#" class="read_more tp_one">อ่านต่อ <span class="flaticon-next"></span></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-------------blog---------->
            <section class="blog type_three" style="background: #fff;" id="blog">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="heading text-center tp_one">
                           <h6>ข่าวสารและกิจกรรม</h6>
                           <h1>กิจกรรมของหน่วย</h1>
                           <span class="flaticon-virus icon"></span>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12 padding_zero">
                        <div class=" owl-carousel three_items">
                           <div class="blog_box type_three wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                              <div class=" image_box">
                                 <img src="{{ asset('web') }}/assets/image/resources/home-3-blog-1.jpg" class="img-fluid" alt="img" />
                                 <div class="overlay">
                                    <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" data-fancybox="gallery" data-caption="">
                                    <span class="flaticon-video-camera"></span>
                                    </a>
                                 </div>
                              </div>
                              <div class="content_box">
                                 <div class="upper_box">
                                    <ul>
                                       <li><a href="#" class="category">Viruses</a></li>
                                       <li><a href="#" class="date"><span class="fa fa-clock-o"></span>26 Apr 2020</a></li>
                                    </ul>
                                 </div>
                                 <div class="lower_box">
                                    <h2><a href="blog-single.html">How we can tak care of our health against Virus </a></h2>
                                    <p>Masks are effective only when used in combination with frequent .</p>
                                    <a href="blog-single.html" class="read_more tp_three">Read More<span class="flaticon-arrow"></span></a>
                                 </div>
                              </div>
                           </div>
                           <div class="blog_box type_three wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                              <div class="image_box">
                                 <img src="{{ asset('web') }}/assets/image/resources/home-3-blog-3.jpg" class="img-fluid" alt="img" />
                                 <div class="overlay">
                                    <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" data-fancybox="gallery" data-caption="">
                                    <span class="flaticon-video-camera"></span>
                                    </a>
                                 </div>
                              </div>
                              <div class="content_box">
                                 <div class="upper_box">
                                    <ul>
                                       <li><a href="#" class="category">Viruses</a></li>
                                       <li><a href="#" class="date">26 Apr 2020</a></li>
                                    </ul>
                                 </div>
                                 <div class="lower_box">
                                    <h2><a href="blog-single.html">CDC has deployed multidisciplinary teams  </a></h2>
                                    <p>Masks are effective only when used in combination with frequent .</p>
                                    <a href="blog-single.html" class="read_more tp_three">Read More<span class="flaticon-arrow"></span></a>
                                 </div>
                              </div>
                           </div>
                           <div class="blog_box type_three wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                              <div class="image_box">
                                 <img src="{{ asset('web') }}/assets/image/resources/home-3-blog-2.jpg" class="img-fluid" alt="img" />
                                 <div class="overlay">
                                    <a href="assets/image/resources/home-3-blog-2.jpg" data-fancybox="gallery" data-caption="">
                                    <span class="flaticon-image zoom_icon"></span>
                                    </a>
                                 </div>
                              </div>
                              <div class="content_box">
                                 <div class="upper_box clearfix">
                                    <ul>
                                       <li><a href="#" class="category">Viruses</a></li>
                                       <li><a href="#" class="date">26 Apr 2020</a></li>
                                    </ul>
                                 </div>
                                 <div class="lower_box">
                                    <h2><a href="blog-single.html">Americans overseas  have been affected by COVID-19. </a></h2>
                                    <p>Masks are effective only when used in combination with frequent .</p>
                                    <a href="blog-single.html" class="read_more tp_three">Read More<span class="flaticon-arrow"></span></a>
                                 </div>
                              </div>
                           </div>
                           <div class="blog_box type_three wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                              <div class="image_box">
                                 <img src="{{ asset('web') }}/assets/image/resources/home-3-blog-4.jpg" class="img-fluid" alt="img" />
                                 <div class="overlay">
                                    <a href="assets/image/resources/home-3-blog-4.jpg" data-fancybox="gallery" data-caption="">
                                    <span class="flaticon-image zoom_icon"></span>
                                    </a>
                                 </div>
                              </div>
                              <div class="content_box">
                                 <div class="upper_box">
                                    <ul>
                                       <li><a href="#" class="category">Viruses</a></li>
                                       <li><a href="#" class="date">26 Apr 2020</a></li>
                                    </ul>
                                 </div>
                                 <div class="lower_box">
                                    <h2><a href="blog-single.html">People at higher risk of serious COVID-19 illness</a></h2>
                                    <p>Masks are effective only when used in combination with frequent .</p>
                                    <a href="blog-single.html" class="read_more tp_three">Read More<span class="flaticon-arrow"></span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="funfacts type_one">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="heading tp_one text-center text_white icon_dark">
                           <h6>Funfacts</h6>
                           
                           <img src="{{ asset('web') }}/assets/image/logo3.png" style="width: 5%;position: absolute;color: #f3f9fe;z-index: -1;opacity: .4;top: 0;" class="" />
                           <h1>Keep Your Headup & Be Patient</h1>
                        </div>
                     </div>
                  </div>
                  <div class="about_fun_facts">
                     <div class="row">
                        <div class="col-lg-3">
                           <div class="fun_facts_box type_one">
                              <div class="icon">
                                 <img src="{{ asset('web') }}/assets/image/svg/virus.svg" class="img-fluid svg_image" alt="home" />
                              </div>
                              <h2><span class="counter-value">434595</span>+</h2>
                              <h6>Total Confirmed</h6>
                           </div>
                        </div>
                        <div class="col-lg-3">
                           <div class="fun_facts_box type_one">
                              <div class="icon">
                                 <img src="{{ asset('web') }}/assets/image/svg/partnership.svg" class="img-fluid svg_image" alt="home" />
                              </div>
                              <h2><span class="counter-value" data-count="">170</span></h2>
                              <h6>Countries / Regions</h6>
                           </div>
                        </div>
                        <div class="col-lg-3">
                           <div class="fun_facts_box type_one">
                              <div class="icon">
                                 <img src="{{ asset('web') }}/assets/image/svg/man.svg" class="img-fluid svg_image" alt="home" />
                              </div>
                              <h2><span class="counter-value">111853</span>+</h2>
                              <h6>Total Recoverd</h6>
                           </div>
                        </div>
                        <div class="col-lg-3">
                           <div class="fun_facts_box type_one last">
                              <div class="icon">
                                 <img src="{{ asset('web') }}/assets/image/svg/tombstones.svg" class="img-fluid svg_image" alt="home" />
                              </div>
                              <h2><span class="counter-value">19603</span>+</h2>
                              <h6>Confirmed Deaths</h6>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            
            
            <section class="preventions bg_white type_two">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="heading text-center icon_dark tp_one">
                           <h6>Prevention Coronavirus</h6>
                           <h1>บทความ</h1>
                           <span class="flaticon-virus icon"></span>
                           <p>If you are healthy, you only need to wear a mask if you are taking care of a person with suspected 2019-nCoV infection.</p>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="icon_box type_three wow fadeIn" data-wow-delay="00ms" data-wow-duration="1500ms">
                           <div class="icon_box">
                              <img src="assets/image/svg/spongewash.svg" class="img-fluid svg_icon" alt="img" />
                           </div>
                           <h2><a href="prevention-single.html">Wash your hands often with soap and water</a></h2>
                           <a href="prevention-single.html" class="read_more tp_two">Read More <span class="flaticon-arrow"></span></a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="icon_box type_three wow fadeIn" data-wow-delay="100ms" data-wow-duration="1500ms">
                           <div class="icon_box">
                              <img src="assets/image/svg/man-touch.svg" class="img-fluid svg_icon" alt="img" />
                           </div>
                           <h2><a href="prevention-single.html">Avoid touching your eyes, nose, and mouth</a></h2>
                           <a href="prevention-single.html" class="read_more tp_two">Read More <span class="flaticon-arrow"></span></a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="icon_box type_three wow fadeIn" data-wow-delay="200ms" data-wow-duration="1500ms">
                           <div class="icon_box">
                              <img src="assets/image/svg/no.svg" class="img-fluid svg_icon" alt="img" />
                           </div>
                           <h2><a href="prevention-single.html">Avoid close contact with people who are sick</a></h2>
                           <a href="prevention-single.html" class="read_more tp_two">Read More <span class="flaticon-arrow"></span></a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="icon_box type_three wow fadeIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                           <div class="icon_box">
                              <img src="assets/image/svg/sorethroat.svg" class="img-fluid svg_icon" alt="img" />
                           </div>
                           <h2><a href="prevention-single.html">Stay home if you are sick,  get medical care</a></h2>
                           <a href="prevention-single.html" class="read_more tp_two">Read More <span class="flaticon-arrow"></span></a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="icon_box type_three wow fadeIn" data-wow-delay="400ms" data-wow-duration="1500ms">
                           <div class="icon_box">
                              <img src="assets/image/svg/masksick.svg" class="img-fluid svg_icon" alt="img" />
                           </div>
                           <h2><a href="prevention-single.html">Cover your mouth and nose with a tissue</a></h2>
                           <a href="prevention-single.html" class="read_more tp_two">Read More <span class="flaticon-arrow"></span></a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="icon_box type_three wow fadeIn" data-wow-delay="500ms" data-wow-duration="1500ms">
                           <div class="icon_box">
                              <img src="assets/image/svg/handwashwashing.svg" class="img-fluid svg_icon" alt="img" />
                           </div>
                           <h2><a href="prevention-single.html">Immediately wash your hands with  water</a></h2>
                           <a href="prevention-single.html" class="read_more tp_two">Read More <span class="flaticon-arrow"></span></a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="icon_box type_three wow fadeIn" data-wow-delay="600ms" data-wow-duration="1500ms">
                           <div class="icon_box">
                              <img src="assets/image/svg/maskmedical.svg" class="img-fluid svg_icon" alt="img" />
                           </div>
                           <h2><a href="prevention-single.html">If you are sick: You should wear a facemask</a></h2>
                           <a href="prevention-single.html" class="read_more tp_two">Read More <span class="flaticon-arrow"></span></a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="icon_box type_three wow fadeIn" data-wow-delay="700ms" data-wow-duration="1500ms">
                           <div class="icon_box">
                              <img src="assets/image/svg/object-hygiene.svg" class="img-fluid svg_icon" alt="img" />
                           </div>
                           <h2><a href="prevention-single.html">If surfaces are dirty, clean them</a></h2>
                           <a href="prevention-single.html" class="read_more tp_two">Read More <span class="flaticon-arrow"></span></a>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            {{-- <section class="doctor type_one bg_white">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 ">
                        <div class="heading   tp_one">
                           <h6>Doctors</h6>
                           <h1>Meet Our Best Doctors</h1>
                           <span class="flaticon-virus icon"></span>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12 padding_zero">
                        <div class="owl-carousel three_items">
                           <div class="doctor_box type_one ">
                              <div class="image_box">
                                 <img src="assets/image/resources/best-doctors1.jpg" class="img-fluid" alt="best-doctors" />
                                 <div class="overlay">
                                    <ul>
                                       <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                       <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                       <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                       <li><a href="#"><i class="fa fa fa-vimeo"></i></a></li>
                                       <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="content_box">
                                 <a href="#" class="contact_doctor"><span class="fa fa-phone"></span>+44 555 67 890</a>
                                 <h2> <a href="#">Dr. Genoveva Leannon </a> </h2>
                                 <small>Internal Medicine</small>
                                 <p>Dr. Will Marvin is an internist in Rochester, MN, and has been in practice between 5–10 years.</p>
                              </div>
                           </div>
                           <div class="doctor_box type_one ">
                              <div class="image_box">
                                 <img src="assets/image/resources/best-doctors2.jpg" class="img-fluid" alt="best-doctors" />
                                 <div class="overlay">
                                    <ul>
                                       <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                       <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                       <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                       <li><a href="#"><i class="fa fa fa-vimeo"></i></a></li>
                                       <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="content_box">
                                 <a href="#" class="contact_doctor"><span class="fa fa-phone"></span>+44 555 67 890</a>
                                 <h2> <a href="#">Alen Bailey </a> </h2>
                                 <small>Head Doctor</small>
                                 <p>Dr. Will Marvin is an internist in Rochester, MN, and has been in practice between 5–10 years.</p>
                              </div>
                           </div>
                           <div class="doctor_box type_one">
                              <div class="image_box">
                                 <img src="assets/image/resources/best-doctors3.jpg" class="img-fluid" alt="best-doctors" />
                                 <div class="overlay">
                                    <ul>
                                       <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                       <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                       <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                       <li><a href="#"><i class="fa fa fa-vimeo"></i></a></li>
                                       <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="content_box">
                                 <a href="#" class="contact_doctor"><span class="fa fa-phone"></span>+44 555 67 890</a>
                                 <h2> <a href="#">Dr. Basil Andrew </a> </h2>
                                 <small>Chief Doctor </small>
                                 <p>Dr. Will Marvin is an internist in Rochester, MN, and has been in practice between 5–10 years.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section> --}}

@endsection
@section('scripts')

@endsection
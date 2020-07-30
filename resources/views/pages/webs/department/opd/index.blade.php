@extends('layouts.welcome')
@section('styles')


<style>

</style>
@endsection
@section('content')

<main class="main-content">
            <section class="page_title">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 d-flex">
                        <div class="content_box">
                           <ul class="bread_crumb text-center">
                              <li class="bread_crumb-item"><a href="#">หน้าแรก</a></li>
                              <li class="bread_crumb-item active">บริการของเรา</li>
                           </ul>
                           <h1>แผนกตรวจโรคผู้ป่วยนอก</h1>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <div class="single_blog_box">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-4 col-md-12 col-sm-12">
                        
                        @include('_includes.sidebar.department')
       
                     </div>
                     <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <!--------list-of categories-------->
                        <div class="blog_details_content">
                           <div class="image_box">
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="owl-carousel one_items">
                                       <div class="image">
                                          <img src="{{ asset('images') }}/DSC_2552.jpg" class="img-fluid" alt="img" />
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           
                           <h2 class="heading">ตรวจโรคผู้ป่วยนอก </h2>
                           <p class="description">แผนกผู้ป่วยนอกของโรงพยาบาลค่ายกฤษณ์สีวะรา พร้อมให้บริการตรวจ วินิจฉัย ดูแล รักษาพยาบาลโรคทั่วไปในผู้ป่วยทุกเพศ ทุกวัย โดยทีมแพทย์หลากหลายสาขา ผู้มีความเชี่ยวชาญ รวมถึงทีมบุคลากรทางการพยาบาลที่มีประสบการณ์และความชำนาญในการดูแลผู้ป่วย ด้วยเครื่องมือและอุปกรณ์ทางการแพทย์ที่ใช้เทคโนโลยีทันสมัย ได้รับการรับรองมาตรฐานโรงพยาบาลระดับประเทศจาก HA
                           </p>
                           
                           <div class="content_box">
                              {{-- <p class="description">The ideological background was the emergence of a particular Scandinavian form of social democracy in the 1950s, as well as the increased availability of new low-cost materials and methods for mass production. Scandinavian
                                 design often makes use of form-pressed wood, plastics, anodized or enameled aluminum or pressed steel.
                              </p>
                              <p class="description">The ideological background was the emergence of a particular Scandinavian form of social democracy in the 1950s, as well as the increased availability of new low-cost materials and methods for mass production. Scandinavian
                                 design often makes use of form-pressed wood, plastics, anodized or enameled aluminum or pressed steel as well as the increased availability of new low-cost materials and methods for mass production. Scandinavian
                                 design often makes use of form-pressed wood, plastics, anodized or enameled aluminum or pressed steel.
                              </p>
                              <p class="description">The ideological background was the emergence of a particular Scandinavian form of social democracy in the 1950s, as well as the increased availability of new low-cost materials and methods for mass production. Scandinavian
                                 design often makes use of form-pressed wood, plastics, anodized or enameled aluminum or pressed steel.
                              </p> --}}
                              <div class="quotes clearfix">
                                 <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                       <div class="para_quotes">
                                          <span class="flaticon-quote"></span>
                                          <p>The COVID-19 virus is a new virus linked to the same family of viruses as Severe Acute Respiratory Syndrome (SARS) and some types of common cold. </p>
                                       </div>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
                                 </div>
                              </div>
                              {{-- <p>Many emphasize the democratic design ideals that were a central theme of the movement and are reflected in the rhetoric surrounding contemporary Scandinavian and international design.
                              </p> --}}
                               <div class="row">
                     <div class="col-lg-4">
                        <div class="image_box">
                           <img src="{{ asset('web') }}/assets/image/resources/prevention-single.jpg" class="img-fluid" alt="prevention" />
                        </div>
                     </div>
                     <div class="col-lg-8">
                        <div class="prevention_single_content">
                           <h1>มีทีมแพทย์หลากหลายสาขา อาทิเช่น</h1>
                           <div class="content_box">
                              <ul>
                                 {{-- <li>There is currently no vaccine to prevent coronavirus disease <span>2019 (COVID-19).</span></li> --}}
                                 <li> โสต ศอ นาสิก</li>
                                 <li> อายุรกรรม</li>
                                 <li> ตรวจโรคทั่วไป</li>
                                 <li> คลินิกความดันโลหิตสูง</li>
                                 <li> คลินิกโรคไขมันในเลือดสูง</li>
                                 <li> คลินิกสูตินรีเวช</li>
                                 <li> คลินิกเบาหวาน ความดัน</li>
                                 <li> คลินิกโรคไต</li>
                                 <li> คลินิกโรคทางเดินอาหาร</li>
                                 <li> คลินิกไทรอยด์</li>
                                 <li> คลินิกหอบหืด</li>
                                 <li> คลินิกโรคปอดอุดกั้นเรื้อรัง</li>
                                 <li> คลินิกโรคกระดูกและข้อ</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                              <div class="authour_box clearfix">
                                 <div class="authour_details">
                                    <img src="{{ asset('web') }}/assets/image/resources/review-1.png" class="img-fluid" alt="img" />
                                    <div class="content_box">
                                       <h2>Igor Ten</h2>
                                       <span>Mar 07, 2020 </span>
                                    </div>
                                 </div>
                                 <div class="media_icons">
                                    <ul>
                                       <li>เผยแพร่:</li>
                                       <li> <a><i class="fa fa-facebook"></i></a></li>
                                       <li> <a><i class="fa fa-twitter"></i></a></li>
                                       <li> <a><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                              {{-- <div class="media_tags text-center">
                                 <ul class="tags">
                                    <li>Tags:</li>
                                    <li><a>Fashion</a>,</li>
                                    <li><a>Minimalist</a>,</li>
                                    <li><a>Clean</a></li>
                                 </ul>
                                 <ul class="media_status text-center">
                                    <li>
                                       <span class="btnn one"><a href="#"><i class="fa fa-thumbs-up icn"></i>Like</a></span>
                                       <span class="one count-media">17</span>
                                    </li>
                                    <li>
                                       <span class="btnn two"><a href="#"><i class="fa fa-twitter icn"></i>Twiter</a></span>
                                       <span class="two  count-media">07</span>
                                    </li>
                                    <li>
                                       <span class="btnn three"><a href="#"><i class="fa fa-instagram icn"></i>Share</a></span>
                                       <span class="three count-media">21</span>
                                    </li>
                                 </ul>
                              </div> --}}
                           </div>

                           <div class="blog_detail_comment">
                              <div class="comment_inner">
                                 <ul class="comment_heading">
                                    <li>ความคิดเห็น</li>
                                    <li>ฝากความคิดเห็น</li>
                                 </ul>
                                 {{-- <div class="comment_content_outer">
                                    <!----comment-----one--------------->
                                    <div class="comment_content_inner">
                                       <div class="image">
                                          <img src="assets/image/resources/review-3.png" class="img-fluid" alt="img" />
                                       </div>
                                       <div class="content_text">
                                          <ul>
                                             <li class="first">Henry Little</li>
                                             <li>Jan 07, 2020 </li>
                                             <li> 07:45 </li>
                                          </ul>
                                          <h6>The idea that beautiful and functional everyday objects should not only be affordable to the wealthy</h6>
                                          <span>Reply</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="comment_content_outer two">
                                    <!----comment-----two--------------->
                                    <div class="comment_content_inner">
                                       <div class="image">
                                          <img src="assets/image/resources/review-2.png" class="img-fluid" alt="img" />
                                       </div>
                                       <div class="content_text">
                                          <ul>
                                             <li class="first">Henry Little</li>
                                             <li>Feb 07, 2020 </li>
                                             <li> 07:45 </li>
                                          </ul>
                                          <h6>The idea that beautiful and functional everyday objects should not only be affordable to the wealthy</h6>
                                          <span>Reply</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="comment_content_outer">
                                    <!----comment-----two--------------->
                                    <div class="comment_content_inner">
                                       <div class="image">
                                          <img src="assets/image/resources/review-1.png" class="img-fluid" alt="img" />
                                       </div>
                                       <div class="content_text">
                                          <ul>
                                             <li class="first">Henry Little</li>
                                             <li>Mar 07, 2020 </li>
                                             <li> 07:45 </li>
                                          </ul>
                                          <h6>The idea that beautiful and functional everyday objects should not only be affordable to the wealthy</h6>
                                          <span>Reply</span>
                                       </div>
                                    </div>
                                 </div> --}}
                              </div>
                              <div class="comment_reply">
                                 <h2 class="text-center">ความคิดเห็น</h2>
                                 <div class="form_inner">
                                    <form>
                                       <div class="row">
                                          <div class="col-lg-6">
                                             <div class="form-group ">
                                                <label>ชื่อ - นามสกุล*</label>
                                                <input type="text" name="name" placeholder="Name" value="" />
                                             </div>
                                          </div>
                                          <div class=" col-lg-6">
                                             <div class="form-group ">
                                                <label>ที่อยู่อีเมล์*  </label>
                                                <input type="text" name="email" placeholder="Email" value="" />
                                             </div>
                                          </div>
                                          {{-- <div class=" col-lg-12">
                                             <div class="form-group ">
                                                <label>Website  </label>
                                                <input type="text" name="email" placeholder="Email" value="" />
                                             </div>
                                          </div> --}}
                                          <div class=" col-lg-12">
                                             <div class="form-group texta">
                                                <label>ความคิดเห็นของคุณ</label>
                                                <textarea name="message" placeholder="message" rows="6"> </textarea>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row comment_reply-btn ">
                                          <div class=" col-lg-12">
                                             <button type="submit" class="theme_btn tp_one">ส่งความคิดเห็น</button>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>

                        </div>
                     </div>
                  </div>
                  
               </div>
            </div>
            <section class="blog type_two bg_white blog_details">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="heading icon_dark text-center  tp_one">
                           <h6>บริการของเรา</h6>
                           <h1>แนะนำแผนก</h1>
                           <span class="flaticon-virus icon"></span>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12 padding_zero">
                        <div class=" owl-carousel four_items ">
                           <div class="blog_box type_one ">
                              <div class="image_box ">
                                 <img src="assets/image/resources/blog-1.jpg " class="img-fluid " alt="img " />
                                 <div class="overlay">
                                    <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s " data-fancybox="gallery" data-caption="  ">
                                    <span class="flaticon-video-camera "></span>
                                    </a>
                                 </div>
                              </div>
                              <div class="content_box ">
                                 <div class="upper_box ">
                                    <ul>
                                       <li><a href="# " class="category ">Viruses</a></li>
                                       <li><a href="# " class="date "><span class="fa fa-clock"></span>26 Apr 2020</a></li>
                                    </ul>
                                 </div>
                                 <div class="lower_box ">
                                    <h2><a href="# ">How we can tak care of our health against Virus </a></h2>
                                    <a href="# " class="read_more tp_one ">Read More<span class="flaticon-next "></span></a>
                                 </div>
                              </div>
                           </div>
                           <div class="blog_box type_one ">
                              <div class="image_box ">
                                 <img src="assets/image/resources/blog-2.jpg " class="img-fluid " alt="img " />
                                 <div class="overlay">
                                    <a href="assets/image/resources/blog-3.jpg " data-fancybox="gallery" data-caption="  ">
                                    <span class="flaticon-image zoom_icon "></span>
                                    </a>
                                 </div>
                              </div>
                              <div class="content_box ">
                                 <div class="upper_box clearfix ">
                                    <ul>
                                       <li><a href="# " class="category ">Viruses</a></li>
                                       <li><a href="# " class="date "><span class="fa fa-clock"></span>26 Apr 2020</a></li>
                                    </ul>
                                 </div>
                                 <div class="lower_box ">
                                    <h2><a href="# ">How we can tak care of our health against Virus </a></h2>
                                    <a href="# " class="read_more tp_one ">Read More<span class="flaticon-next "></span></a>
                                 </div>
                              </div>
                           </div>
                           <div class="blog_box type_one ">
                              <div class="image_box ">
                                 <img src="assets/image/resources/blog-4.jpg " class="img-fluid " alt="img " />
                                 <div class="overlay">
                                    <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s " data-fancybox="gallery" data-caption="  ">
                                    <span class="flaticon-video-camera "></span>
                                    </a>
                                 </div>
                              </div>
                              <div class="content_box ">
                                 <div class="upper_box ">
                                    <ul>
                                       <li><a href="# " class="category ">Viruses</a></li>
                                       <li><a href="# " class="date "><span class="fa fa-clock"></span>26 Apr 2020</a></li>
                                    </ul>
                                 </div>
                                 <div class="lower_box ">
                                    <h2><a href="# ">How we can tak care of our health against Virus </a></h2>
                                    <a href="# " class="read_more tp_one ">Read More<span class="flaticon-next "></span></a>
                                 </div>
                              </div>
                           </div>
                           <div class="blog_box type_one ">
                              <div class="image_box ">
                                 <img src="assets/image/resources/blog-3.jpg " class="img-fluid " alt="img " />
                                 <div class="overlay">
                                    <a href="assets/image/resources/blog-3.jpg " data-fancybox="gallery" data-caption="  ">
                                    <span class="flaticon-image zoom_icon "></span>
                                    </a>
                                 </div>
                              </div>
                              <div class="content_box ">
                                 <div class="upper_box ">
                                    <ul>
                                       <li><a href="# " class="category ">Viruses</a></li>
                                       <li><a href="# " class="date "><span class="fa fa-clock"></span>26 Apr 2020</a></li>
                                    </ul>
                                 </div>
                                 <div class="lower_box ">
                                    <h2><a href="# ">How we can tak care of our health against Virus </a></h2>
                                    <a href="# " class="read_more tp_one ">Read More<span class="flaticon-next "></span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            

@endsection
@section('scripts')

@endsection
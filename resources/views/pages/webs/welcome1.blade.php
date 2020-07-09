@extends('layouts.welcome')
@section('styles')
<style>

</style>
@endsection
@section('content')

     <!-- ***** SLIDER ***** -->
    <section id="owl-demo" class="owl-carousel owl-theme owl-loaded owl-drag scrollme">
      <div class="full h-100 sec-bg6">
        <div class="vc-parent">
          <div class="vc-child">
            <div class="top-banner">
              <div class="container animateme" data-when="exit" data-from="0" data-to="0.75" data-opacity="0"
                data-translatey="-100">
                <img class="svg custom-element-right" src="patterns/rack.svg" alt="Dedicated Server">
                <div class="heading">Dedicated Server <div class="animatype">With <span id="typed3"></span></div>
                </div>
                <h3 class="subheading">Powerful servers with high-end resources <br>that will guarantee resource
                  exclusivity, <br>starting at just <b class="c-pink">$90.22/mo</b><br>
                </h3>
                <a href="dedicated" class="btn btn-default-yellow-fill mr-3">Get Prices</a>
                <a href="dedicated" class="btn btn-default-pink-fill">Learn more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="full h-100 sec-bg6">
        <div class="vc-parent">
          <div class="vc-child">
            <div class="top-banner">
              <div class="container animateme" data-when="exit" data-from="0" data-to="0.75" data-opacity="0"
                data-translatey="-100">
                <img class="svg custom-element-right" src="patterns/cloudvps.svg" alt="Cloud VPS Server">
                <h1 class="heading">Virtual <br>Cloud Servers</h1>
                <h3 class="subheading">
                  <i class="c-pink feat fas fa-check-circle mr-2"></i> Immediate scalability<br>
                  <i class="c-pink feat fas fa-check-circle mr-2"></i> High performance<br>
                  <i class="c-pink feat fas fa-check-circle mr-2"></i> Fast deployment
                </h3>
                <a href="vps" class="btn btn-default-yellow-fill mr-3">Get Prices</a>
                <a href="vps" class="btn btn-default-pink-fill">Learn more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** PRICING TABLES ***** -->
    <section class="pricing special sec-up-slider">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="wrapper first text-left">
              <div class="top-content">
                <img class="svg mb-3" src="fonts/svg/livechat.svg" alt="">
                <div class="title">ติดต่อเรา</div>

                <div class="price"><sup>ถาม-ตอบปัญหาสุขภาพ</sup></div>
                <a href="hosting" class="btn btn-default-yellow-fill">ถามปัญหาสุขภาพ</a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="wrapper text-left">
              <div class="plans badge feat bg-pink">recommended</div>
              <div class="top-content">
                <img class="svg mb-3" src="fonts/svg/book.svg" alt="">
                <div class="title">ข้อมูลสุขภาพ</div>

                <div class="price"><sup>บทความทางการแพทย์</sup></div>
                <a href="configurator" class="btn btn-default-yellow-fill">อ่านบทความ</a>
              </div>

            </div>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="wrapper third text-left">
              <div class="top-content">
                <img class="svg mb-3" src="fonts/svg/mobile.svg" alt="">
                <div class="title">LINE OFFICIA</div>

                <div class="price"><sup>รับข้อมูลข่าวสาร/สอบถาม</sup></div>

                <a href="https://lin.ee/LRaxooHU" class="btn btn-default-yellow-fill">เพิ่มเพื่อน</a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ***** PRICING TABLES ***** -->
    <section class="slick sec-normal sec-bg3 pt-4">
      <div class="container">
        <h2 class="section-heading text-white pt-5">บริการทางการแพทย์</h2>
      </div>
      <div id="slider">
        <div class="plan-container">
          <div class="wrapper">
            <div class="top-content">
              <div class="plans badge feat bg-pink">Managed</div>
              <div><img class="svg mb-3" src="fonts/svg/vps.svg" alt=""></div>
              <div class="title">แผนกตรวจโรคผู้ป่วยนอก</div>
              <div class="fromer">windows</div>
              <div class="price"><sup>$</sup>109.99 <span class="period">/mo</span></div>
              <a href="" class="btn btn-default-yellow-fill">อ่านต่อ..</a>
            </div>
            <ul class="list-info bg-pink">
              <li><i class="icon-cpu"></i> <span class="c-purple">CPU</span><br> <span>2 Cores</span></li>
              <li><i class="icon-ram"></i> <span class="c-purple">RAM</span><br> <span>2Gb Memory</span></li>
              <li><i class="icon-drives"></i> <span class="c-purple">DISK</span><br> <span>20GB SSD Space</span></li>
              <li><i class="icon-speed"></i> <span class="c-purple">DATA</span><br> <span>1TB Bandwidth</span></li>
            </ul>
          </div>
        </div>
        <div class="plan-container">
          <div class="wrapper">
            <div class="top-content">
              <div class="plans badge feat bg-grey">Plesk Onyx</div>
              <img class="svg mb-3" src="fonts/svg/dedicated.svg" alt="">
              <div class="title">แผนกพยาธิวิทยา</div>
              <div class="fromer">windows</div>
              <div class="price"><sup>$</sup>185.00 <span class="period">/mo</span></div>
              <a href="" class="btn btn-default-yellow-fill">อ่านต่อ..</a>
            </div>
            <ul class="list-info bg-purple">
              <li><i class="icon-cpu"></i> <span class="c-pink">CPU</span><br> <span>4x 3.20Ghz 2 Cores</span></li>
              <li><i class="icon-ram"></i> <span class="c-pink">RAM</span><br> <span>16GB (up to 32GB)</span></li>
              <li><i class="icon-drivessd"></i> <span class="c-pink">DRIVES</span><br> <span>2 x 1TB SATA 3.5</span>
              </li>
              <li><i class="icon-git"></i> <span class="c-pink">UPLINK</span><br> <span>1Gbps - 20TB</span></li>
            </ul>
          </div>
        </div>
        <div class="plan-container">
          <div class="wrapper">
            <div class="top-content">
              <img class="svg mb-3" src="fonts/svg/cloudfiber.svg" alt="">
              <div class="title">ศูนย์สงเสริมสุขภาพ</div>
              <div class="fromer"></div>
              <div class="price"><sup>$</sup>24.99 <span class="period">/mo</span></div>
              <a href="" class="btn btn-default-yellow-fill">อ่านต่อ..</a>
            </div>
            <ul class="list-info bg-pink">
              <li><i class="icon-drives"></i> <span class="c-purple">DISK</span><br> <span>250GB SSD</span></li>
              <li><i class="icon-speed"></i> <span class="c-purple">DATA</span><br> <span>1TB Bandwidth</span></li>
              <li><i class="icon-emailopen"></i> <span class="c-purple">EMAIL</span><br> <span>120 Emails</span></li>
              <li><i class="icon-domains"></i> <span class="c-purple">TLD</span><br> <span>30 Domains</span></li>
            </ul>
          </div>
        </div>
        <div class="plan-container">
          <div class="wrapper">
            <div class="top-content">
              <img class="svg mb-3" src="fonts/svg/reseller.svg" alt="">
              <div class="title">แผนกแพทย์ทางเลือก</div>
              <div class="fromer">Plesk Onyx</div>
              <div class="price"><sup>$</sup>36.90 <span class="period">/mo</span></div>
              <a href="" class="btn btn-default-yellow-fill">อ่านต่อ..</a>
            </div>
            <ul class="list-info bg-purple">
              <li><i class="icon-drives"></i> <span class="c-pink">DISK</span><br> <span>250GB SSD</span></li>
              <li><i class="icon-speed"></i> <span class="c-pink">DATA</span><br> <span>1TB Bandwidth</span></li>
              <li><i class="icon-emailopen"></i> <span class="c-pink">EMAIL</span><br> <span>120 Emails</span></li>
              <li><i class="icon-domains"></i> <span class="c-pink">TLD</span><br> <span>30 Domains</span></li>
            </ul>
          </div>
        </div>
        <div class="plan-container">
          <div class="wrapper">
            <div class="top-content">
              <img class="svg mb-3" src="fonts/svg/reseller.svg" alt="">
              <div class="title">แผนกไตเทียม</div>
              <div class="fromer">Plesk Onyx</div>
              <div class="price"><sup>$</sup>36.90 <span class="period">/mo</span></div>
              <a href="" class="btn btn-default-yellow-fill">อ่านต่อ..</a>
            </div>
            <ul class="list-info bg-purple">
              <li><i class="icon-drives"></i> <span class="c-pink">DISK</span><br> <span>250GB SSD</span></li>
              <li><i class="icon-speed"></i> <span class="c-pink">DATA</span><br> <span>1TB Bandwidth</span></li>
              <li><i class="icon-emailopen"></i> <span class="c-pink">EMAIL</span><br> <span>120 Emails</span></li>
              <li><i class="icon-domains"></i> <span class="c-pink">TLD</span><br> <span>30 Domains</span></li>
            </ul>
          </div>
        </div>
        <div class="plan-container">
          <div class="wrapper">
            <div class="top-content">
              <img class="svg mb-3" src="fonts/svg/reseller.svg" alt="">
              <div class="title">แผนกฉุกเฉิน</div>
              <div class="fromer">Plesk Onyx</div>
              <div class="price"><sup>$</sup>36.90 <span class="period">/mo</span></div>
              <a href="" class="btn btn-default-yellow-fill">อ่านต่อ..</a>
            </div>
            <ul class="list-info bg-purple">
              <li><i class="icon-drives"></i> <span class="c-pink">DISK</span><br> <span>250GB SSD</span></li>
              <li><i class="icon-speed"></i> <span class="c-pink">DATA</span><br> <span>1TB Bandwidth</span></li>
              <li><i class="icon-emailopen"></i> <span class="c-pink">EMAIL</span><br> <span>120 Emails</span></li>
              <li><i class="icon-domains"></i> <span class="c-pink">TLD</span><br> <span>30 Domains</span></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- ***** PRICING TABLES - ประชาสัมพันธ์ ***** -->
    <section id="highlights" class="sec-normal best-plans pricing sec-bg2">
      <div class="container">
        <div class="col-sm-12 mb-5">
          <h2 class="section-heading">ประชาสัมพันธ์</h2>
        </div>
        <div class="sec-main sec-bg1 wow animated fadeInUp fast">
          <div class="plans badge feat bg-pink">highlights</div>
          <div class="row">
            <div class="col-sm-12">
              <div class="tabs offers-tabs">
                <div class="tabs-header mb-5">
                  <ul>
                    <li class="col-lg-3 col-md-3 col-sm-12 active">
                      <i class="icon-preferences"></i>
                      <div class="">ประกาศจัดซื้อจัดจ้าง</div>
                    </li>
                    <li class="col-lg-3 col-md-3 col-sm-12">
                      <i class="icon-speed"></i>
                      <div class="">ประกาศรับสมัครงาน</div>
                    </li>

                  </ul>
                </div>
                <div class="tabs-content text-left">
                  <div class="tabs-item active">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="info-content text-center">
                          <h4>ประกาศจัดซื้อจัดจ้าง</h4>
                          <div class="table-responsive-lg">
                            <table class="table compare">
                              <thead>
                                <tr>
                                  <td class="bb-green title">Dedicated Processors</td>
                                  <td class="bb-green title">Memory</td>
                                  <td class="bb-green title">Storage</td>
                                  <td class="bb-green title">Monthly</td>
                                  <td class="bb-green title">Availability</td>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <div class="badge bg-pink mr-1">HOT</div> E3-1230 v3 3.3GHz Haswell | 4 Cores
                                  </td>
                                  <td>32GB</td>
                                  <td>320GB SSD</td>
                                  <td><span class="ltgh">$99.00</span> <b class="c-black">$59.00</b></td>
                                  <td><a href="" class="btn btn-default-yellow-fill">Config</a></td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="badge bg-pink mr-1">SALE</div> E3-1230 v5 3.4GHz Skylake | 4 Cores
                                  </td>
                                  <td>32GB</td>
                                  <td>520GB SSD</td>
                                  <td><span class="ltgh">$177.00</span> <b class="c-black">$120.00</b></td>
                                  <td><a href="" class="btn btn-default-yellow-fill">Config</a></td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="badge bg-grey mr-1">OUT</div> E3-1230 v5 3.4GHz Skylake | 8 Cores
                                  </td>
                                  <td>64GB</td>
                                  <td>960GB SSD</td>
                                  <td><b class="c-black">$239.00</b></td>
                                  <td><a href="" class="btn btn-default-fill disabled">Sold out</a></td>
                                </tr>
                                <tr>
                                  <td class="border-0">2x E5-2620 v4 2.1GHz Broadwell | 16 Cores</td>
                                  <td class="border-0">128GB</td>
                                  <td class="border-0">4x 960GB SSD</td>
                                  <td class="border-0"><b class="c-black">$410.00</b></td>
                                  <td class="border-0"><a href="" class="btn btn-default-yellow-fill">Config</a></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tabs-item">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="info-content text-center">
                          <h4>ประกาศรับสมัครงาน</h4>
                          <div class="table-responsive-lg">
                            <table class="table compare">
                              <thead>
                                <tr>
                                  <td class="bb-green title">Dedicated Processors</td>
                                  <td class="bb-green title">Memory</td>
                                  <td class="bb-green title">Storage</td>
                                  <td class="bb-green title">Monthly</td>
                                  <td class="bb-green title">Availability</td>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <div class="badge bg-pink mr-1">HOT</div> E3-1230 v3 3.3GHz Haswell | 4 Cores
                                  </td>
                                  <td>32GB</td>
                                  <td>320GB SSD</td>
                                  <td><span class="ltgh">$99.00</span> <b class="c-black">$59.00</b></td>
                                  <td><a href="" class="btn btn-default-yellow-fill">Config</a></td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="badge bg-pink mr-1">SALE</div> E3-1230 v5 3.4GHz Skylake | 4 Cores
                                  </td>
                                  <td>32GB</td>
                                  <td>520GB SSD</td>
                                  <td><span class="ltgh">$177.00</span> <b class="c-black">$120.00</b></td>
                                  <td><a href="" class="btn btn-default-yellow-fill">Config</a></td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="badge bg-grey mr-1">OUT</div> E3-1230 v5 3.4GHz Skylake | 8 Cores
                                  </td>
                                  <td>64GB</td>
                                  <td>960GB SSD</td>
                                  <td><b class="c-black">$239.00</b></td>
                                  <td><a href="" class="btn btn-default-fill disabled">Sold out</a></td>
                                </tr>
                                <tr>
                                  <td class="border-0">2x E5-2620 v4 2.1GHz Broadwell | 16 Cores</td>
                                  <td class="border-0">128GB</td>
                                  <td class="border-0">4x 960GB SSD</td>
                                  <td class="border-0"><b class="c-black">$410.00</b></td>
                                  <td class="border-0"><a href="" class="btn btn-default-yellow-fill">Config</a></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ***** BLOG ***** -->
    <section class="services blog sec-normal sec-bg2">
      <div class="container">
        <div class="service-wrap">
          <div class="row">
            <div class="col-sm-12 text-left">
              <h2 class="section-heading">ข่าวสารและกิจกรรม</h2>
            </div>
                <!--Carousel Wrapper-->
                <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                <!--Controls-->

                <!--/.Controls-->

                <!--Indicators-->
                {{-- <ol class="carousel-indicators">
                    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                    <li data-target="#multi-item-example" data-slide-to="1"></li>
                    <li data-target="#multi-item-example" data-slide-to="2"></li>
                </ol> --}}
                <!--/.Indicators-->

                <!--Slides-->
                <div class="carousel-inner" role="listbox">

                    <!--First slide-->
                    <div class="carousel-item active">

                    <div class="row">
                        <div class="col-md-4">
                        <img data-src="img/topbanner01.jpg" class="img-responsive lazyload" alt="photo">
                        <div class="service-section m-0">
                            <div class="title mt-0">Dedicated or VPS Server?</div>
                            <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do...</p>
                            <hr>
                            <div class="small">
                            <span class="icon-calendar text-dark"></span>
                            <span class="pl-2 pr-4"> April 11, 2018 - 08.00 am</span>
                            </div>
                            <a href="blog" class="btn btn-default-yellow-fill">Read more</a>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <img data-src="img/topbanner06.jpg" class="img-responsive lazyload" alt="photo">
                        <div class="service-section m-0">
                            <div class="plans badge feat bg-pink">Domains</div>
                            <div class="title mt-0">All about NGTLD?</div>
                            <p class="subtitle">Excepteur sint occaecat cupidatat non proident voluptate...</p>
                            <hr>
                            <div class="small">
                            <span class="icon-calendar text-dark"></span>
                            <span class="pl-2 pr-4"> August 03, 2018 - 17.35 pm</span>
                            </div>
                            <a href="blog" class="btn btn-default-yellow-fill">Read more</a>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <img data-src="img/topbanner03.jpg" class="img-responsive lazyload" alt="photo">
                        <div class="service-section m-0">
                            <div class="plans badge feat bg-pink">Premium</div>
                            <div class="title mt-0">Anti-Vírus & Anti-SPAM</div>
                            <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do...</p>
                            <hr>
                            <div class="small">
                            <span class="icon-calendar text-dark"></span>
                            <span class="pl-2 pr-4"> November 11, 2018 - 13.30 pm</span>
                            </div>
                            <a href="blog" class="btn btn-default-yellow-fill">Read more</a>
                        </div>
                        </div>
                    </div>

                    </div>
                    <!--/.First slide-->

                    <!--Second slide-->
                    <div class="carousel-item">

                    <div class="row">
                        <div class="col-md-4">
                        <img data-src="img/topbanner01.jpg" class="img-responsive lazyload" alt="photo">
                        <div class="service-section m-0">
                            <div class="title mt-0">Dedicated or VPS Server?</div>
                            <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do...</p>
                            <hr>
                            <div class="small">
                            <span class="icon-calendar text-dark"></span>
                            <span class="pl-2 pr-4"> April 11, 2018 - 08.00 am</span>
                            </div>
                            <a href="blog" class="btn btn-default-yellow-fill">Read more</a>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <img data-src="img/topbanner06.jpg" class="img-responsive lazyload" alt="photo">
                        <div class="service-section m-0">
                            <div class="plans badge feat bg-pink">Domains</div>
                            <div class="title mt-0">All about NGTLD?</div>
                            <p class="subtitle">Excepteur sint occaecat cupidatat non proident voluptate...</p>
                            <hr>
                            <div class="small">
                            <span class="icon-calendar text-dark"></span>
                            <span class="pl-2 pr-4"> August 03, 2018 - 17.35 pm</span>
                            </div>
                            <a href="blog" class="btn btn-default-yellow-fill">Read more</a>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <img data-src="img/topbanner03.jpg" class="img-responsive lazyload" alt="photo">
                        <div class="service-section m-0">
                            <div class="plans badge feat bg-pink">Premium</div>
                            <div class="title mt-0">Anti-Vírus & Anti-SPAM</div>
                            <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do...</p>
                            <hr>
                            <div class="small">
                            <span class="icon-calendar text-dark"></span>
                            <span class="pl-2 pr-4"> November 11, 2018 - 13.30 pm</span>
                            </div>
                            <a href="blog" class="btn btn-default-yellow-fill">Read more</a>
                        </div>
                        </div>
                    </div>

                    </div>
                    <!--/.Second slide-->

                    <!--Third slide-->
                    <div class="carousel-item service-wrap">

                    <div class="row">
                        <div class="col-md-4">
                        <img data-src="img/topbanner01.jpg" class="img-responsive lazyload" alt="photo">
                        <div class="service-section m-0">
                            <div class="title mt-0">Dedicated or VPS Server?</div>
                            <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do...</p>
                            <hr>
                            <div class="small">
                            <span class="icon-calendar text-dark"></span>
                            <span class="pl-2 pr-4"> April 11, 2018 - 08.00 am</span>
                            </div>
                            <a href="blog" class="btn btn-default-yellow-fill">Read more</a>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <img data-src="img/topbanner06.jpg" class="img-responsive lazyload" alt="photo">
                        <div class="service-section m-0">
                            <div class="plans badge feat bg-pink">Domains</div>
                            <div class="title mt-0">All about NGTLD?</div>
                            <p class="subtitle">Excepteur sint occaecat cupidatat non proident voluptate...</p>
                            <hr>
                            <div class="small">
                            <span class="icon-calendar text-dark"></span>
                            <span class="pl-2 pr-4"> August 03, 2018 - 17.35 pm</span>
                            </div>
                            <a href="blog" class="btn btn-default-yellow-fill">Read more</a>
                        </div>
                        </div>
                        <div class="col-md-4">
                        <img data-src="img/topbanner03.jpg" class="img-responsive lazyload" alt="photo">
                        <div class="service-section m-0">
                            <div class="plans badge feat bg-pink">Premium</div>
                            <div class="title mt-0">Anti-Vírus & Anti-SPAM</div>
                            <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do...</p>
                            <hr>
                            <div class="small">
                            <span class="icon-calendar text-dark"></span>
                            <span class="pl-2 pr-4"> November 11, 2018 - 13.30 pm</span>
                            </div>
                            <a href="blog" class="btn btn-default-yellow-fill">Read more</a>
                        </div>
                        </div>
                    </div>

                    </div>
                    <!--/.Third slide-->

                </div>
                <!--/.Slides-->
                <div style="text-align: center;margin-top: 1.88rem;">
                    <a class="btn-floating btn btn-default-yellow-fill" style="font-size: 1.25rem;line-height: 25px;display: inline-block;width: inherit;text-align: center;color: #fff;" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                    <a class="btn-floating btn btn-default-yellow-fill" style="font-size: 1.25rem;line-height: 25px;display: inline-block;width: inherit;text-align: center;color: #fff;" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                </div>
                </div>
                <!--/.Carousel Wrapper-->

          </div>
        </div>
      </div>
    </section>


@endsection
@section('scripts')

@endsection

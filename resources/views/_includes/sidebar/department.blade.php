                        <div class="blog_side_bar_left">
                           <!----search-box---->
                           <div class="search_bar">
                              <h2 class="sub_head">ค้นหา</h2>
                              <div class="srch_input">
                                 <input type="text" name="search" id="search" placeholder="ค้นหาเรื่อง ..." autocomplete="off" />
                                 <button type="submit" class="search"><span class="flaticon-search"></span></button>
                              </div>
                           </div>
                           <!----search-box---->
                           <!----Categories---->
                           <div class="categories">
                              <h2 class="sub_head">บริการของเรา</h2>
                              <ul>
                                 <li><a href="{{route('opd.index')}}">ตรวจโรคผู้ป่วยนอก</a></li>
                                 <li><a href="{{route('alternative_medicine.index')}}">แพทย์ทางเลือก</a></li>
                                 <li><a href="{{route('physical_therapy.index')}}">กายภาพบำบัด</a></li>
                                 {{-- <li><a href="{{route('opd.index')}}">คลินิคจัดฟัน</a></li> --}}
                                 <li><a href="{{route('hemodialysis_unit.index')}}">หน่วยไตเทียม</a></li>
                                 <li><a href="{{route('nutrition.index')}}">โภชนาการ</a></li>
                                 <li><a href="{{route('lab.index')}}">แผนกพยาธิวิทยา</a></li>
                              </ul>
                           </div>
                           <!----Categories---->
                           <!---Popular Posts--->
                           <div class="popular_posts">
                              <h2 class="sub_head">ข่าวสารและกิจกรรมล่าสุด</h2>
                              <div class="posts_box">
                                 <a href="#"><img src="{{ asset('web') }}/assets/image/resources/popular-post-1.jpg" class="img-fluid" alt="popular_post" /></a>
                                 <div class="post_content">
                                    <p> July 10, 2018</p>
                                    <h2><a href="#">How easily a virus spreads from person-to-person can vary.</a></h2>
                                 </div>
                              </div>
                              <div class="posts_box">
                                 <a href="#"><img src="{{ asset('web') }}/assets/image/resources/popular-post-1.jpg" class="img-fluid" alt="popular_post" /></a>
                                 <div class="post_content">
                                    <p> April 04, 2018</p>
                                    <h2><a href="#"> Another factor is whether the spread is sustained</a></h2>
                                 </div>
                              </div>
                              <div class="posts_box">
                                 <a href="#"><img src="{{ asset('web') }}/assets/image/resources/popular-post-1.jpg" class="img-fluid" alt="popular_post" /></a>
                                 <div class="post_content">
                                    <p> April 04, 2018</p>
                                    <h2><a href="#">The virus that causes COVID-19 seems to be spreading easily </a></h2>
                                 </div>
                              </div>
                           </div>
                           <!---Popular Posts--->
                           <!----TAG CLOUD----->
                           <div class="tag_cloud">
                              <h2 class="sub_head">Tag Cloud</h2>
                              <div class="tags">
                                 <a href="#">Prevention</a><a href="#">Virus</a><a href="#">Corona</a>
                                 <a href="#">Dead</a><a href="#">Cured presons</a>
                                 <a href="#">144</a><a href="#">Countries</a><a href="#">World</a>
                              </div>
                           </div>
                           <!----TAG CLOUD----->
                        </div>
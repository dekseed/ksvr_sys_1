         <section class="doctor type_three mt-5">
            <div class="container"> 
               <div class="row">
                  <div class="col-lg-12">
                     <div class="heading text-center tp_three">
                        <h6>บริการของเรา</h6>
                        <h1>แนะนำแผนก</h1>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12 padding_zero">
                     <div class="owl-carousel four_items">
                        <div class="doctor_box type_three">
                           <div class="image_box">
                              <img src="{{ asset('images') }}/DSC_2552.jpg" class="img-fluid" alt="best-doctors" />
                              <div class="overlay">
                                 <a href="{{route('opd.index')}}" class="contact_doctor"><span class="flaticon-question-2 faq_icon"></span>อ่านต่อ..</a>
                              </div>
                           </div>
                           <div class="content_box">
                              <h2> <a href="{{route('opd.index')}}">แผนกตรวจโรคผู้ป่วยนอก </a> </h2>
                              <small>แผนกผู้ป่วยนอกของโรงพยาบาลค่ายกฤษณ์สีวะรา พร้อมให้บริการตรวจ วินิจฉัย ดูแล รักษาพยาบาลโรคทั่วไปในผู้ป่วยทุกเพศ ทุกวัย </small>
                           </div>
                           
                        </div>
                        <div class="doctor_box type_three">
                           <div class="image_box">
                              <img src="{{ asset('images') }}/DSC_0305.JPG" class="img-fluid" alt="best-doctors" />
                              <div class="overlay">
                                 <a href="{{route('alternative_medicine.index')}}" class="contact_doctor"><span class="flaticon-question-2 faq_icon"></span>อ่านต่อ..</a>
                              </div>
                           </div>
                           <div class="content_box">
                              <h2> <a href="{{route('alternative_medicine.index')}}">แผนกแพทย์ทางเลือก </a> </h2>
                              <small>การฝังเข็มรักษาโรคเป็นการรักษาโรคตามศาสตร์แผนจีน วิวัฒนาการและสืบทอดกันมาหลายพันปี แล้วปัจจุบันองค์การอนามัยโลก(WHO) รับรองว่าเป็นการรักษาโรคที่ได้ผลอีกทางเลือกหนึ่ง</small>
                           </div>
                        </div>
                        <div class="doctor_box type_three">
                           <div class="image_box">
                              <img src="{{ asset('images') }}/DSC_3923.JPG" class="img-fluid" alt="best-doctors" />
                              <div class="overlay">
                                 <a href="{{route('physical_therapy.index')}}" class="contact_doctor"><span class="flaticon-question-2 faq_icon"></span>อ่านต่อ..</a>
                              </div>
                           </div>
                           <div class="content_box">
                              <h2> <a href="{{route('physical_therapy.index')}}">แผนกกายภาพบำบัด </a> </h2>
                              <small>แผนกกายภาพบำบัดให้บริการในเชิงรุกกับผู้ป่วยทั้งในชุมชน ผู้ป่วยติดเตียง ผู้พิการ และผู้สูงอายุ รวมทั้งให้บริการผู้ป่วย OPD และ IPD โดยให้การรักษาทางกายภาพบำบัด ทั้งใช้เครื่องมือที่มีมาตรฐานและมีความทันสมัยเพื่อให้การรักษาให้มีประสิทธิภาพ และได้ผล </small>
                           </div>
                        </div>
                        <div class="doctor_box type_three">
                           <div class="image_box">
                              <img src="{{ asset('images') }}/DSCF05681.jpg" class="img-fluid" alt="best-doctors" />
                              <div class="overlay">
                                 <a href="{{route('hemodialysis_unit.index')}}" class="contact_doctor"><span class="flaticon-question-2 faq_icon"></span>อ่านต่อ..</a>
                              </div>
                           </div>
                           <div class="content_box">
                              <h2> <a href="{{route('hemodialysis_unit.index')}}">หน่วยไตเทียม </a> </h2>
                              <small>ให้บริการฟอกเลือดด้วยเครื่องไตเทียมที่ทันสมัย โดยทีมแพทย์และพยาบาลที่ชำนาญเฉพาะทาง ข้าราชการและประกันสังคมสามารถเบิกได้ตามสิทธิ์ สถานที่สะอาดปลอดโปร่ง กว้างขวาง คลินิกโรคไตเปิดบริการทุกวัน </small>
                           </div>
                        </div>
                        {{-- <div class="doctor_box type_three">
                           <div class="image_box">
                              <img src="{{ asset('images') }}/S__2474024.jpg" class="img-fluid" alt="best-doctors" />
                              <div class="overlay">
                                 <a href="#" class="contact_doctor"><span class="flaticon-question-2 faq_icon"></span>อ่านต่อ..</a>
                              </div>
                           </div>
                           <div class="content_box">
                              <h2> <a href="#">แพทย์แผนไทย </a> </h2>
                              <small>อ่านต่อ.. </small>
                           </div>
                        </div> --}}
                        <div class="doctor_box type_three">
                           <div class="image_box">
                              <img src="{{ asset('images') }}/DSC_2577.JPG" class="img-fluid" alt="best-doctors" />
                              <div class="overlay">
                                 <a href="{{route('nutrition.index')}}" class="contact_doctor"><span class="flaticon-question-2 faq_icon"></span>อ่านต่อ..</a>
                              </div>
                           </div>
                           <div class="content_box">
                              <h2> <a href="{{route('nutrition.index')}}">โภชนาการ </a> </h2>
                              <small>ให้บริการอาหารผู้ป่วยของโรงพยาบาล ตามแผนการดูแลผู้ป่วยร่วมกับทีมสหวิชาชีพ ประเมินภาวะโภชนาการและความต้องการสารอาหารของผู้ป่วยแต่ละราย เพื่อนำมาวิเคราะห์และคำนวณในการจัดเตรียมอาหารให้แก่ผู้ป่วยอย่างถูกต้อง</small>
                           </div>
                        </div>
                        <div class="doctor_box type_three">
                           <div class="image_box">
                              <img src="{{ asset('images') }}/0001.jpg" class="img-fluid" alt="best-doctors" />
                              <div class="overlay">
                                 <a href="{{route('lab.index')}}" class="contact_doctor"><span class="flaticon-question-2 faq_icon"></span>อ่านต่อ..</a>
                              </div>
                           </div>
                           <div class="content_box">
                              <h2> <a href="{{route('lab.index')}}">พยาธิวิทยา </a> </h2>
                              <small>แผนกพยาธิวิทยา รพ.ค่ายกฤษณ์สีวะรา มีหน้าที่ให้บริการตรวจวิเคราะห์ทางห้องปฏิบัติการเทคนิคการแพทย์ เลือกใช้วิธีวิเคราะห์ที่ทันสมัยได้มาตรฐาน รวดเร็ว ประหยัด ให้ข้อมูลเพื่อการวินิจฉัยโรคที่ถูกต้องน่าเชื่อถือ ให้บริการโลหิตที่เพียงพอและปลอดภัย ตอบสนองความต้องการของผู้ใช้บริการ</small>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
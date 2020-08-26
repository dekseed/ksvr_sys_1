             
					<div class="col-md">
						<ul class="services-nav flex-column flex-nowrap">
                     <li class="nav-item {{ Request::is('opd') ? 'active' : '' }}"><a class="nav-link {{ Request::is('opd') ? 'active' : '' }}" href="#">ตรวจโรคผู้ป่วยนอก</a></li>
                     <li class="nav-item {{ Request::is('er') ? 'active' : '' }}"><a class="nav-link" href="{{route('er.index')}}">ห้องฉุกเฉิน</a></li>
                     @if(Request::is('alternative-medicine*'))
                        <li class="nav-item">
                           <a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu1">แพทย์ทางเลือก</a>
                           <div class="collapse show" id="submenu1">
                              <ul class="flex-column nav">
                                 <li class="nav-item"><a class="nav-link {{ Request::is('alternative-medicine/physical-therapy') ? 'active' : '' }}" href="{{route('physical_therapy.index')}}">กายภาพบำบัด</a></li>
                                 <li class="nav-item"><a class="nav-link {{ Request::is('alternative-medicine/thai-traditional-medicine') ? 'active' : '' }}" href="{{route('thai_traditional_medicine.index')}}">แพทย์แผนไทย</a></li>
                                 <li class="nav-item"><a class="nav-link {{ Request::is('alternative-medicine/needle-ide-index') ? 'active' : '' }}" href="{{route('needle_ide_index.index')}}">ฝั่งเข็ม</a></li>
                                 <li class="nav-item"><a class="nav-link {{ Request::is('alternative-medicine/spa') ? 'active' : '' }}" href="{{route('spa.index')}}">นวดสปา</a></li>
                              </ul>
                           </div>
                        </li>   
                     @else
                     <li class="nav-item"><a class="nav-link" href="#">แพทย์ทางเลือก</a></li>
                        
                     @endif
                     <li class="nav-item"><a class="nav-link {{ Request::is('dental') ? 'active' : '' }}" href="{{route('dental.index')}}">ทันตกรรม</a></li>
							<li class="nav-item"><a class="nav-link {{ Request::is('health-center') ? 'active' : '' }}" href="{{route('health_center.index')}}">ศูนย์ส่งเสริมสุขภาพ</a></li>
							<li class="nav-item"><a class="nav-link {{ Request::is('alternative-medicine/dental') ? 'active' : '' }}" href="{{route('health_center.index')}}">หน่วยไตเทียม</a></li>
                     
                     @if(Request::is('nutrition*'))
                        <li class="nav-item">
                           <a class="nav-link" href="#submenu2" data-toggle="collapse" data-target="#submenu2">โภชนาการ</a>
                           <div class="collapse show" id="submenu2">
                              <ul class="flex-column nav">
                                 <li class="nav-item"><a class="nav-link {{ Request::is('nutrition') ? 'active' : '' }}" href="{{route('nutrition.index')}}">แนะนำแผนก</a></li>
                                 <li class="nav-item"><a class="nav-link {{ Request::is('nutrition/list*') ? 'active' : '' }}" href="{{route('nutrition_list.index')}}">บริการอาหารสำหรับผู้ป่วย</a></li>
                                 <li class="nav-item"><a class="nav-link {{ Request::is('nutrition/') ? 'active' : '' }}" href="#">บริการให้คำปรึกษาด้านโภชนาการ</a></li>
                                 
                              </ul>
                           </div>
                        </li>   
                     @else
                     <li class="nav-item"><a class="nav-link" href="{{route('nutrition.index')}}">โภชนาการ</a></li>
                        
                     @endif

                     @if(Request::is('lab*'))
                        <li class="nav-item">
                           <a class="nav-link" href="{{route('lab.index')}}" data-toggle="collapse" data-target="#submenu3">พยาธิวิทยา</a>
                           <div class="collapse show" id="submenu3">
                              <ul class="flex-column nav">
                                 <li class="nav-item"><a class="nav-link {{ Request::is('lab') ? 'active' : '' }}" href="{{route('lab.index')}}">แนะนำแผนก</a></li>
                                 <li class="nav-item"><a class="nav-link" href="#">ความรู้เกี่ยวกับการตรวจทางห้องปฏิบัติการ</a></li>
                                 <li class="nav-item"><a class="nav-link {{ Request::is('lab/download') ? 'active' : '' }}" href="{{route('lab_download.index')}}">เอกสารคุณภาพ</a></li>
                                 <li class="nav-item"><a class="nav-link {{ Request::is('lab') ? 'active' : '' }}" href="{{route('physical_therapy.index')}}">ผลงานที่ภาคภูมิใจ</a></li>
                                 <li class="nav-item"><a class="nav-link {{ Request::is('lab') ? 'active' : '' }}" href="{{route('physical_therapy.index')}}">ติดต่อแผนก</a></li>
                              </ul>
                           </div>
                        </li>   
                     @else
                     <li class="nav-item"><a class="nav-link" href="{{route('lab.index')}}">พยาธิวิทยา</a></li>
                        
                     @endif
							
							
							
						</ul>
						<div class="row d-flex flex-column flex-sm-row flex-md-column mt-3">
							<div class="col-auto col-sm col-md-auto">
								<div class="contact-box contact-box-1">
									<h5 class="contact-box-title">เปิดให้บริการ</h5>
									<ul class="icn-list">
										<li>
                                 @if(Request::is('er'))
                                 เปิดทุกวันตลอด 24 ชม.
                                 @elseif(Request::is('dental') || Request::is('health-center') || Request::is('nutrition*'))
                                 <i class="icon-clock"></i>วันจันทร์ - ศุกร์ <br>เวลา 08.00 - 16.00 น.
                                 <br>เฉพาะ วันพุธ <br>เวลา 08.00 น. – 12.00 น.
                                 @elseif(Request::is('hemodialysis-unit'))
                                 <i class="icon-clock"></i>วันจันทร์ - ศุกร์ <br>เวลา 06.00 - 18.00 น.
                                 @else
                                 <i class="icon-clock"></i>วันจันทร์ - ศุกร์ <br>เวลา 08.00 - 16.00 น.
                                 <br>เฉพาะ วันพุธ <br>เวลา 08.00 น. – 12.00 น.
                                 <br>นอกเวลาวันอังคาร - พฤหัสบดี <br>เวลา 16.00 - 20.00 น.
                                 @endif
                              </li>
									</ul>
								</div>
							</div>
							<div class="col-auto col-sm col-md-auto">
								<div class="contact-box contact-box-2">
									<h5 class="contact-box-title">สอบถามรายละเอียดได้ที่</h5>
									<ul class="icn-list">
										<li><i class="icon-telephone"></i>
											<div class="d-flex flex-wrap">
                                    
                                    @if(Request::is('opd'))
                                    <span>Phone:&nbsp;&nbsp;</span>
                                    <span><a href="tel:+6642712867">+66 42 712 867</a> <br>ต่อ 128</span><br>
                                    <span>แผนกตรวจโรคผู้ป่วยนอก <br>โรงพยาบาลค่ายกฤษณ์สีวะรา</span>
                                    @elseif(Request::is('er'))
                                    <span>Phone:&nbsp;&nbsp;</span>
                                    <span><a href="tel:+6642712867">+66 42 712 867</a> <br>ต่อ 127</span><br>
                                    <span>แผนกห้องฉุกเฉิน <br>โรงพยาบาลค่ายกฤษณ์สีวะรา</span>
                                    @elseif(Request::is('alternative-medicine/physical-therapy'))
                                    <span>Phone:&nbsp;&nbsp;</span>
                                    <span><a href="tel:+6642712867">+66 42 712 867</a> <br>ต่อ 157</span><br>
                                    <span>แผนกแพทย์แผนไทย <br>โรงพยาบาลค่ายกฤษณ์สีวะรา</span>
                                    @elseif(Request::is('alternative-medicine/needle-ide-index'))
                                    <span>Phone:&nbsp;&nbsp;</span>
                                    <span><a href="tel:+6642712867">+66 42 712 867</a> <br>ต่อ 141</span><br>
                                    <span>Phone:&nbsp;&nbsp;</span>
                                    <span><a href="tel:+66658424179">+66 65 842 4179</a></span><br>
                                    <span>แผนกฝั่งเข็ม <br>โรงพยาบาลค่ายกฤษณ์สีวะรา</span>
                                    @elseif(Request::is('alternative-medicine/spa'))
                                    <span>Phone:&nbsp;&nbsp;</span>
                                    <span><a href="tel:+6642712867">+66 42 712 867</a> <br>ต่อ 124</span><br>
                                    <span>Phone:&nbsp;&nbsp;</span>
                                    <span><a href="tel:+66658424179">+66 65 842 4179</a></span><br>
                                    <span>แผนกสปา<br>โรงพยาบาลค่ายกฤษณ์สีวะรา</span>
                                    @elseif(Request::is('dental'))
                                    <span>Phone:&nbsp;&nbsp;</span>
                                    <span><a href="tel:+6642712867">+66 42 712 867</a> <br>ต่อ 119</span><br>
                                    <span>แผนกทันตกรรม<br>โรงพยาบาลค่ายกฤษณ์สีวะรา</span>
                                    @elseif(Request::is('health-center'))
                                    <span>Phone:&nbsp;&nbsp;</span>
                                    <span><a href="tel:+6642712867">+66 42 712 867</a> <br>ต่อ 130</span><br>
                                    <span>ศูนย์ส่งเสริมสุขภาพ<br>โรงพยาบาลค่ายกฤษณ์สีวะรา</span>
                                     @elseif(Request::is('hemodialysis-unit'))
                                    <span>Phone:&nbsp;&nbsp;</span>
                                    <span><a href="tel:+6642712867">+66 42 712 867</a> <br>ต่อ ..</span><br>
                                    <span>หน่วยไตเทียม<br>โรงพยาบาลค่ายกฤษณ์สีวะรา</span>
                                    @elseif(Request::is('nutrition*'))
                                    <span>Phone:&nbsp;&nbsp;</span>
                                    <span><a href="tel:+6642712867">+66 42 712 867</a> <br>ต่อ ..</span><br>
                                    <span>แผนกโภชนาการ<br>โรงพยาบาลค่ายกฤษณ์สีวะรา</span>
                                    @elseif(Request::is('lab*'))
                                    <span>Phone:&nbsp;&nbsp;</span>
                                    <span><a href="tel:+6642712867">+66 42 712 867</a> <br>ต่อ 141</span><br>
                                    <span>แผนกพยาธิวิทยา<br>โรงพยาบาลค่ายกฤษณ์สีวะรา</span>
                                    @endif
                                    {{-- <br><span>1-800-267-0001</span> --}}
                                 </div>
										</li>
										<li><i class="icon-black-envelope"></i><a href="mailto:ksvrhospital@hotmail.com">ksvrhospital@hotmail.com</a></li>
									</ul>
								</div>
							</div>
						</div>
						{{-- <div class="question-box mt-3">
							<h5 class="question-box-title">Ask the Experts</h5>
							<form id="questionForm" method="post" novalidate>
								<div class="successform">
									<p>Your message was sent successfully!</p>
								</div>
								<div class="errorform">
									<p>Something went wrong, try refreshing and submitting the form again.</p>
								</div>
								<input type="text" class="form-control" name="name" placeholder="Your name*">
								<input type="text" class="form-control" name="email" placeholder="E-mail*">
								<input type="text" class="form-control" name="phone" placeholder="Phone">
								<textarea class="form-control" name="message" placeholder="Question*"></textarea>
								<button type="submit" class="btn btn-sm btn-hover-fill mt-15"><i class="icon-right-arrow"></i><span>Ask Now</span><i class="icon-right-arrow"></i></button>
							</form>
						</div> --}}
               </div>
               
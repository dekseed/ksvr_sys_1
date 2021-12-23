   <header class="header">
		<div class="header-quickLinks js-header-quickLinks d-lg-none">
			<div class="quickLinks-top js-quickLinks-top"></div>
			<div class="js-quickLinks-wrap-m">
			</div>
		</div>
		<div class="header-topline d-none d-lg-flex">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-auto d-flex align-items-center">
						<div class="header-phone"><i class="icon-telephone"></i><a href="tel:+6642712867">+66 42 712 867</a></div>
						<div class="header-info"><i class="icon-placeholder2"></i>เลขที่ 100/548 หมู่ 11 ตำบลธาตุนาเวง อำเภอเมือง จังหวัดสกลนคร 47000</div>
						<div class="header-info"><i class="icon-black-envelope"></i><a href="mailto:ksvrhospital@hotmail.com">ksvrhospital@hotmail.com</a></div>
					</div>
					<div class="col-auto ml-auto d-flex align-items-center">
						<span class="header-social">
							<a href="https://www.facebook.com/ksvrhospital" class="hovicon"><i class="icon-facebook-logo-circle"></i></a>
							<a href="#" class="hovicon"><i class="icon-twitter-logo-circle"></i></a>
							<a href="#" class="hovicon"><i class="icon-google-plus-circle"></i></a>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="header-content">
			<div class="container">
				<div class="row align-items-lg-center">
					<button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNavDropdown">
						<span class="icon-menu"></span>
					</button>
					<div class="col-lg-auto col-lg-2 d-flex align-items-lg-center">
						<a href="{{route('welcome')}}" class="header-logo"><img src="{{ asset('web') }}/medall/images/logo1.png" alt="" class="img-fluid"></a>
					</div>
					<div class="col-lg ml-auto header-nav-wrap">
						<div class="header-nav js-header-nav">
							<nav class="navbar navbar-expand-lg btco-hover-menu">
								<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
									<ul class="navbar-nav">
										{{-- <li class="nav-item">
											<a class="nav-link {{ Request::is('welcome') ? 'active' : '' }}" href="{{route('welcome')}}">หน้าแรก</a>
										</li> --}}
										<li class="nav-item">
											<a href="{{route('about')}}" class="nav-link dropdown-toggle" data-toggle="dropdown">เกี่ยวกับเรา</a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="{{route('about')}}">ประวัติและข้อมูลทั่วไป</a></li>
												<li><a class="dropdown-item" href="#">คณะผู้บริหาร</a></li>
												<li><a class="dropdown-item" href="#">เข็มมุ่ง จุดเน้นในการพัฒนา</a></li>
												<li><a class="dropdown-item" href="#">ข้อมูลตัวชี้วัด รพ.ค่ายฯ</a></li>
												<li><a class="dropdown-item" target="_blank" href="{{ asset('files') }}/THIP_Benchmark_KPI_2022.pdf">ข้อมูลตัวชี้วัด โครงการ THIP</a></li>
												<li><a class="dropdown-item" href="#">ข้อมูลสถิติ</a></li>
											</ul>
										</li>
										<li class="nav-item {{ Request::is(['opd', 'nutrition', 'dental', 'alternative-medicine/*', 'lab', 'medical/*', 'medical', 'hemodialysis-unit', 'health-center']) ? 'active' : '' }}">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">บริการของเรา</a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="{{route('opd.index')}}">ตรวจโรคผู้ป่วยนอก</a></li>
                                                <li style="padding-left: 0px;padding-right: 15px;" class="nav-item">
													<a href="{{route('medical.index')}}" class="nav-link dropdown-toggle" data-toggle="dropdown">งานเวชระเบียน</a>
													<ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="{{route('medical.index')}}">แนะนำแผนก</a></li>
														<li><a class="dropdown-item" href="{{route('register.index')}}">ลงทะเบียนผู้ป่วยนอกล่วงหน้าออนไลน์</a></li>
														<li><a class="dropdown-item" href="{{route('request.index')}}">ขอสำเนาประวัติเจ็บป่วยออนไลน์</a></li>
                                                        <li><a class="dropdown-item" href="{{route('satisfaction.index')}}">ความพึงพอใจ งานเวชระเบียนออนไลน์</a></li>
                                                        <li><a class="dropdown-item" href="{{route('updatemedical.index')}}">แก้ไขข้อมูลผู้ป่วยให้เป็นปัจจุบัน</a></li>
                                                        <li><a class="dropdown-item" href="https://eservices.nhso.go.th/eServices/mobile/login.xhtml" target="_blank">ตรวจสอบสิทธิการรักษาพยาบาล</a></li>

													</ul>
												</li>
												<li class="{{ Request::is('er') ? 'active' : '' }}"><a class="dropdown-item" href="{{route('er.index')}}">ห้องฉุกเฉิน</a></li>
												<li style="padding-left: 0px;" class="nav-item {{ Request::is('alternative-medicine') ? 'active' : '' }}">
													<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">แพทย์ทางเลือก</a>
													<ul class="dropdown-menu">
														<li><a class="dropdown-item" href="{{route('physical_therapy.index')}}">กายภาพบำบัด</a></li>
														<li><a class="dropdown-item" href="{{route('thai_traditional_medicine.index')}}">แพทย์แผนไทย</a></li>
														<li><a class="dropdown-item" href="{{route('needle_ide_index.index')}}">แพทย์แผนจีน</a></li>
														<li><a class="dropdown-item" href="{{route('spa.index')}}">นวดสปา</a></li>
													</ul>
												</li>
												<li><a class="dropdown-item" href="{{route('dental.index')}}">ทันตกรรม</a></li>
												<li><a class="dropdown-item" href="{{route('health_center.index')}}">ศูนย์ส่งเสริมสุขภาพ</a></li>
												<li><a class="dropdown-item" href="{{route('hemodialysis_unit.index')}}">หน่วยไตเทียม</a></li>
												<li style="padding-left: 0px;" class="nav-item">
													<a href="{{route('nutrition.index')}}" class="nav-link dropdown-toggle" data-toggle="dropdown">โภชนาการ</a>
													<ul class="dropdown-menu">
														<li><a class="dropdown-item" href="{{route('nutrition.index')}}">แนะนำแผนก</a></li>
														<li><a class="dropdown-item" href="{{route('nutrition_list.index')}}">บริการอาหารสำหรับผู้ป่วย</a></li>
														<li><a class="dropdown-item" href="#">บริการให้คำปรึกษาด้านโภชนาการ</a></li>
													</ul>
												</li>
												<li style="padding-left: 0px;padding-right: 15px;" class="nav-item">
													<a href="{{route('lab.index')}}" class="nav-link dropdown-toggle" data-toggle="dropdown">พยาธิวิทยา</a>
													<ul class="dropdown-menu">
														<li><a class="dropdown-item" href="{{route('lab.index')}}">แนะนำแผนก</a></li>
														<li><a class="dropdown-item" href="#">ความรู้เกี่ยวกับการตรวจทางห้องปฏิบัติการ</a></li>

														<li><a class="dropdown-item" href="{{route('lab_download.index')}}">LAB eDoc Folder</a></li>
														<li><a class="dropdown-item" href="{{route('lab.index')}}">ผลงานที่ภาคภูมิใจ</a></li>
														<li><a class="dropdown-item" href="{{route('lab.index')}}">ติดต่อแผนก</a></li>
													</ul>
												</li>

											</ul>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="{{route('schedule')}}">ตารางแพทย์</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">ข่าวสารและกิจกรรม</a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="blog.html">กิจกรรมของหน่วย</a></li>
												<li><a class="dropdown-item" href="blog-grid.html">กิจกรรมนอกหน่วย</a></li>
												<li><a class="dropdown-item" href="blog-post-page.html">หน่วยแพทย์เคลื่อนที่</a></li>
												<li><a class="dropdown-item" href="blog-post-page.html">ออกเยี่ยมบ้านในพื้นที่รับผิดชอบ</a></li>
												<li style="padding-left: 0px;padding-right: 15px;" class="nav-item">
													<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">ประชาสัมพันธ์</a>
													<ul class="dropdown-menu">
														<li><a class="dropdown-item" href="#">ประกาศทั่วไป</a></li>
														<li><a class="dropdown-item" href="{{route('tender.pages')}}">ประกาศจัดซื้อจัดจ้าง</a></li>
														<li><a class="dropdown-item" href="#">ประกาศรับสมัครงาน</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="nav-item">
											<a class="nav-link {{ Request::is('welcome') ? 'active' : '' }}" href="#">บทความ</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="{{route('contact')}}">ติดต่อเรา</a>
										</li>
                           			</ul>
								</div>
							</nav>
						</div>
						<div class="header-search">
							<form action="#" class="form-inline">
								<i class="icon-search"></i>
								<input type="text" placeholder="ค้นหา..">
								<button type="submit"><i class="icon-search"></i></button>
							</form>
						</div>
						{{-- <div class="header-lang lang-toggler">
							<a href="#" class="icon icon-globe1"></a>
							<div class="header-lang-dropdown">
								<ul>
									<li><a href="#"><span class="header-lang-flag"><img src="images/flag/flag_en.png" alt=""></span><span>English</span></a></li>
									<li><a href="#"><span class="header-lang-flag"><img src="images/flag/flag_fr.png" alt=""></span><span>ไทย</span></a></li>
								</ul>
							</div>
						</div> --}}
						<div class="header-cart cart-toggler">

							@auth
								<a href="#"class="icon icon-user2"></a>

								<div class="header-cart-dropdown">

                                    <a class="dropdown-item" href="{{ url('/home') }}"><i class="fas fa-laptop-house"></i> ระบบโรงพยาบาล</a>

                                </div>

							@else
								<a href="#"class="icon icon-user2"></a>
								{{-- <span class="badge">2</span> --}}
								<div class="header-cart-dropdown">
								<h5 class="link-drop-title"><i class="icon icon-user2"></i>เข้าสู่ระบบ</h5>
									<form method="POST" action="{{ url('/login') }}" novalidate>
									{{ csrf_field() }}
										<div class="input-group mt-3">
													<span>
															<i class="icon-email2"></i>
														</span>
													<input type="text" class="form-control" name="username" placeholder="ชื่อ/อีเมล์" value="{{ old('username') }}" required autofocus />
												</div>
										<div class="input-group mt-2">
													<span>
															<i class="icon-smartphone"></i>
														</span>
													<input id="password" type="password" class="form-control" placeholder="รหัสผ่าน" name="password" required />
												</div>


										<div class="text-right mt-2">
											<button type="submit" class="btn btn-sm btn-hover-fill">เข้าสู่ระบบ</button>
                                            <a class="btn btn-sm btn-success waves-effect light" href="{{ route('register')}}">สมัครสมาชิก</a>
										</div>
									</form>
								</div>
							 @endauth

						</div>

					</div>
				</div>
			</div>
		</div>
	</header>

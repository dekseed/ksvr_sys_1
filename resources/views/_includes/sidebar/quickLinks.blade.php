            <div class="quickLinks-wrap js-quickLinks-wrap-d d-none d-lg-flex">
				<div class="quickLinks js-quickLinks">
					<div class="container">
						<div class="row no-gutters">
							<div class="col">
								<a href="#" class="link">
									<i class="icon-placeholder"></i><span>แผนที่</span></a>
								<div class="link-drop p-0">
									<div id="googleMapDrop" class="google-map"></div>
								</div>
							</div>
							<div class="col">
								<a href="#" class="link">
									<i class="icon-clock"></i><span>เวลาทำการ</span>
								</a>
								<div class="link-drop">
									<h5 class="link-drop-title"><i class="icon-clock"></i>เวลาทำการ</h5>
									<table class="row-table">
										<tr>
											<td><i>วันจันทร์-ศุกร์</i></td>
											<td>08:00 - 16:00</td>
										</tr>
										<tr>
											<td><i>เฉพาะวันพุธ</i></td>
											<td> 08:00 - 12:00</td>
										</tr>
										<tr>
											<td><i>นอกเวลา</i></td>
											<td>16:00 - 20:00</td>
										</tr>
										{{-- <tr>
											<td><i>Sunday</i></td>
											<td>Closed</td>
										</tr> --}}
									</table>
								</div>
							</div>

							<div class="col">
								<a href="#" class="link">
									<i class="icon-calendar"></i><span>ตารางเวรแพทย์ออกตรวจ</span>
								</a>
								<div class="link-drop">
									<h5 class="link-drop-title"><i class="icon-calendar"></i>ตารางเวรแพทย์ออกตรวจ</h5>
									<p>สามารถตรวจสอบ วันและเวลาแพทย์ออกตรวจได้</p>
									<p class="text-right"><a href="{{route('schedule')}}" class="btn btn-sm btn-hover-fill">รายละเอียด</a></p>
								</div>
							</div>
							{{-- <div class="col">
								<a href="#" class="link">
									<i class="icon-price-tag"></i><span>อัตราค่าบริการ</span>
								</a>
								<div class="link-drop">
									<h5 class="link-drop-title"><i class="icon-price-tag"></i>Quick Pricing</h5>
									<table class="row-table">
										<tr>
											<td>Initial Consultation</td>
											<td>$10</td>
										</tr>
										<tr>
											<td>Dental check-up</td>
											<td>$15</td>
										</tr>
										<tr>
											<td>Routine Exam (no xrays)</td>
											<td>$50</td>
										</tr>
										<tr>
											<td>Simple Removal of a tooth</td>
											<td>$122</td>
										</tr>
										<tr>
											<td>Teeth cleaning</td>
											<td>$50 - $75</td>
										</tr>
										<tr>
											<td>X-ray image</td>
											<td>$10</td>
										</tr>
									</table>
									<p class="text-right mt-15"><a href="prices.html" class="btn btn-sm btn-hover-fill">Calculator</a><a href="prices.html" class="btn btn-sm btn-hover-fill">Details</a></p>
								</div>
							</div> --}}

							<div class="col">
								<a href="#" class="link">
									<i class="icon-user"></i><span>สำหรับผู้ป่วย</span>
								</a>
								<div class="link-drop">
									<h5 class="link-drop-title"><i class="icon-calendar"></i>สำหรับผู้ป่วย/ผู้มารับบริการ</h5>
									<div class="mt-1"></div>
									<div>
										<ul class="marker-list-md-line">
											 <li><a target="_blank" href="https://docs.google.com/forms/d/1_NGloHMsBy6KZ3m2VVrrRhMOM8oYiS1lhT7S2GdEh4A/viewform?edit_requested=true"> เลื่อนนัดพบแพทย์/รับยาทางไปรษณีย์ </a></li>
											<li><a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSdEJusZJBKCbqApehtghu7Ac_rxSi9kQwD8Se5xoyzyov6yXg/viewform"> ลงทะเบียนผู้ป่วยนอกออนไลน์ </a></li>
											<li><a target="_blank" href="https://lin.ee/LRaxooHU">  ติดต่อสอบถามเจ้าหน้าที่ </a></li>
                                            <li><a href="{{ route('Questionnaire-History-Covid-19.index')}}" target="_blank">แบบซักถามประวัติกรณีเดินทางมาจากจังหวัดที่มีรายงานการระบาดของโรคติดเชื้อไวรัสโคโรนา 2019
                                                และกรณีที่ลากลับภูมิลำเนา หรือไปราชการ หรือฝึกนอกที่ตั้งข้ามจังหวัด</a></li>

                                    	</ul>
									</div>
								</div>
							</div>
							<div class="col">
								<a href="#" class="link">
									<i class="icon-team"></i><span>สำหรับเจ้าหน้าที่</span>
								</a>
								<div class="link-drop">
									<h5 class="link-drop-title"><i class="icon-calendar"></i>สำหรับเจ้าหน้าที่/บุคคากรทางการแพทย์</h5>
									{{-- <p>This simply works as a guide and helps you to connect with dentists of your choice. Please confirm the doctor’s availability before leaving your premises.</p>
									<p class="text-right"><a href="schedule.html" class="btn btn-sm btn-hover-fill">รายละเอียด</a></p> --}}
									<div class="mt-1"></div>
									<div>
										<ul class="marker-list-md-line">
											{{--<li><a target="_blank" href="https://docs.google.com/forms/d/11NUdYIeGpEWefKgl7nrR2SC1GOD_GIS5ghBxj6mbQzo/edit">แบบตรวจประเมินคุณภาพการบันทึกเวชระเบียนผู้ป่วยนอก</a></li>
											<li><a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSf6SSqWMUjl6wp9QfRkNNI5v4MeRMOQi0xDMZ0wU4LvM-Q02Q/viewform">Paperless62</a></li>
											 <li><a target="_blank" href="{{route('internet-profile.index')}}"><i class="fas fa-caret-right"></i> แบบสำรวจความต้องการใช้งานระบบอินเทอร์เน็ต </a></li>
											<li><a target="_blank" href="#">แบบประเมินความผูกพันของบุคลากรต่อองค์กร </a></li>  --}}
											<li><a href="https://docs.google.com/forms/d/1LgH4SgTf4WJyd43AR6gUghdbp1qBpPwOLq1VA5cN5Z4" target="_blank">แบบฟอร์มแจ้งซ่อมศูนย์คอมฯ</a></li>
											<li><a href="https://docs.google.com/forms/d/14y_CKYWUeNv7F2PbPU8kvN2mvc3UaSld2XnTNnirTxQ/viewform?edit_requested=true" target="_blank">แบบฟอร์มแจ้งซ่อม ยย.</a></li>
											<li><a href="https://forms.gle/y5mxA2rxmBSEMrNt7" target="_blank">แบบฟอร์มขอใช้รถ</a></li>
                                            <li><a href="{{route('km_ksvr')}}" target="_blank">KM โรงพยาบาลค่ายกฤษณ์สีวะรา</a></li>
                                            <li><a href="https://ksvr.thai-nrls.org/" target="_blank">รายงานอุบัติการณ์ความเสี่ยง</a></li>

                                    	</ul>
									</div>
								</div>
							</div>
							<div class="col">
								<a href="#" class="link">
									<i class="icon-emergency-call"></i><span>เหตุฉุกเฉิน</span></a>
								<div class="link-drop">
									<h5 class="link-drop-title"><i class="icon-emergency-call"></i>เหตุฉุกเฉิน</h5>
									<p>สามารถโทรได้ตลอด 24 ชม.</p>
									<ul class="icn-list">
										<li><i class="icon-telephone"></i><span class="phone">1669</span>
										</li>
										<li><i class="icon-black-envelope"></i><a href="mailto:ksvrhospital@hotmail.com">ksvrhospital@hotmail.com</a></li>
									</ul>
									<p class="text-right mt-2"><a href="{{ route('contact') }}" class="btn btn-sm btn-hover-fill">ติดต่อเรา</a></p>
								</div>
							</div>
							<div class="col col-close"><a href="#" class="js-quickLinks-close"><i class="icon-top" data-toggle="tooltip" data-placement="top" title="Close panel"></i></a></div>
						</div>
					</div>
					<div class="quickLinks-open js-quickLinks-open"><span data-toggle="tooltip" data-placement="left" title="Open panel">+</span></div>
				</div>
			</div>

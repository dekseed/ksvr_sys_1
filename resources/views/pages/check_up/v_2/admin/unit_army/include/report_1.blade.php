<div class="row match-height">
    <div class="col-md-6 col-12">
        <div class="card">

            <div class="card-content">
                <div class="card-body">
                        <div class="form-body">

                            <div class="row text-left">
                                <div class="form-group col-md-12 mb-2">
                                    <label for="projectinput3"><strong>1. บิดา หรือ มารดา ของท่านมีประวัติการเจ็บป่วยด้วยโรคใดบ้าง</strong></label>
                                    <div class="col-md-9">
                                        <span class="text-success">{{ $item->a1 }}</span>
                                        @if(!is_null($item->a1_d))
                                        <span class="text-success">{{ $item->a1_d }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group col-md-12 mb-2">
                                    <label for="projectinput3"><strong>2. <ins><span class="red">พี่น้อง</span></ins> (สายตรง) ของท่านมีประวัติการเจ็บป่วยด้วยโรคใดบ้าง</strong></label>
                                    <div class="col-md-9">
                                        <span class="text-success">{{ $item->b2 }}</span>
                                        @if(!is_null($item->b2_d))
                                        <span class="text-success">{{ $item->b2_d }}</span>
                                        @endif

                                    </div>
                                </div>

                                <div class="form-group col-md-12 mb-2">
                                    <label for="projectinput3"><strong>3. ปัจจุบัน ท่านมีประวัติการเจ็บป่วยหรือต้องพบแพทย์ด้วยโรคต่อไปนี้หรือไม่</strong></label>
                                        <div class="col-md-9">
                                            <label class="col-md-12 label-control text-left" for="first_name"><strong>3.1 โรคเบาหวาน(DM)</strong>
                                                @if($item->c3_1 == "1")
                                                    <span class="text-success"><i class="feather icon-check-square"></i> ไม่มี</span>
                                                @elseif($item->c3_1 == "2")
                                                    <span class="text-success"><i class="feather icon-check-square"></i> มีและรับประทานยา</span>
                                                @elseif($item->c3_1 == "3")
                                                    <span class="text-success"><i class="feather icon-check-square"></i> มีแต่ไม่รับประทานยา</span>
                                                @endif
                                            </label>
                                            <label class="col-md-12 label-control text-left" for="c3_2"><strong>3.2 โรคความดันโลหิตสูง (HT)</strong>
                                                @if($item->c3_2 == "1")
                                                    <span class="text-success"><i class="feather icon-check-square"></i> ไม่มี</span>
                                                @elseif($item->c3_2 == "2")
                                                    <span class="text-success"><i class="feather icon-check-square"></i> มีและรับประทานยา</span>
                                                @elseif($item->c3_2 == "3")
                                                    <span class="text-success"><i class="feather icon-check-square"></i> มีแต่ไม่รับประทานยา</span>
                                                @endif
                                            </label>
                                            <label class="col-md-12 label-control text-left" for="c3_3"><strong>2.3 โรคตับ</strong>
                                                @if($item->c3_3 == "1")
                                                    <span class="text-success"><i class="feather icon-check-square"></i> ไม่มี</span>
                                                @elseif($item->c3_3 == "2")
                                                    <span class="text-success"><i class="feather icon-check-square"></i> มีและรับประทานยา</span>
                                                @elseif($item->c3_3 == "3")
                                                    <span class="text-success"><i class="feather icon-check-square"></i> มีแต่ไม่รับประทานยา</span>
                                                @endif
                                            </label>
                                            <label class="col-md-12 label-control text-left" for="c3_4"><strong>3.4 โรคอัมพาต</strong>
                                                @if($item->c3_4 == "1")
                                                    <span class="text-success"><i class="feather icon-check-square"></i> ไม่มี</span>
                                                @elseif($item->c3_4 == "2")
                                                    <span class="text-success"><i class="feather icon-check-square"></i> มีและรับประทานยา</span>
                                                @elseif($item->c3_4 == "3")
                                                    <span class="text-success"><i class="feather icon-check-square"></i> มีแต่ไม่รับประทานยา</span>
                                                @endif
                                            </label>
                                            <label class="col-md-12 label-control text-left" for="c3_5"><strong>3.5 โรคหัวใจ</strong>
                                                @if($item->c3_5 == "1")
                                                    <span class="text-success"><i class="feather icon-check-square"></i> ไม่มี</span>
                                                @elseif($item->c3_5 == "2")
                                                    <span class="text-success"><i class="feather icon-check-square"></i> มีและรับประทานยา</span>
                                                @elseif($item->c3_5 == "3")
                                                    <span class="text-success"><i class="feather icon-check-square"></i> มีแต่ไม่รับประทานยา</span>
                                                @endif
                                            </label>
                                            <label class="col-md-12 label-control text-left" for="c3_6"><strong>3.6 ไขมันในเลือดผิดปกติ</strong>
                                                @if($item->c3_6 == "1")
                                                    <span class="text-success"><i class="feather icon-check-square"></i> ไม่มี</span>
                                                @elseif($item->c3_6 == "2")
                                                    <span class="text-success"><i class="feather icon-check-square"></i> มีและรับประทานยา</span>
                                                @elseif($item->c3_6 == "3")
                                                    <span class="text-success"><i class="feather icon-check-square"></i> มีแต่ไม่รับประทานยา</span>
                                                @endif
                                            </label>
                                        </div>

                                </div>

                                <div class="form-group col-md-12 mb-2">
                                    <label for="projectinput3"><strong>4. ปัจจุบัน ท่านมีอาการผิดปกติอื่นๆ ที่ต้องพบแพทย์หรือไม่</strong></label>
                                        <div class="col-md-9">
                                            @if($item->d4 == '1')
                                            ไม่มี
                                            @else
                                            มี
                                                @if(!is_null($item->d4_d))
                                                {{ $item->d4_d }}
                                                @endif
                                            @endif

                                        </div>
                                </div>

                                <div class="form-group col-md-12 mb-2">
                                    <label for="projectinput3"><strong>5. การบริโภค ในช่วงระยะเวลา 1 เดือนที่ผ่านมา</strong></label>
                                        <div class="col-md-12">
                                            <label class="col-md-12 label-control text-left" for="first_name"><strong>5.1 ท่านรับประทานขนมหวาน/เครื่องดื่มที่มีส่วนผสมของน้ำตาล/ผลไม้รสหวานจัด</strong>
                                                <div class="col-md-12">
                                                    @if($item->e5_1 == "1")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> ทุกวัน</span>
                                                    @elseif($item->e5_1 == "2")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> 5-6 วันต่อสัปดาห์</span>
                                                    @elseif($item->e5_1 == "3")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> น้อยกว่า 5 วันต่อสัปดาห์</span>
                                                    @elseif($item->e5_1 == "4")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> ไม่เคยปฏิบัติ</span>
                                                    @endif
                                                </div>
                                            </label>
                                            <label class="col-md-12 label-control text-left" for="c3_2"><strong>5.2 ท่านรับประทานอาหารที่มีไขมันสูง เช่น ของทอด เบเกอรี่ พิซซ่า โดนัท เป็นต้น</strong>
                                                <div class="col-md-12">
                                                    @if($item->e5_2 == "1")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> ทุกวัน</span>
                                                    @elseif($item->e5_2 == "2")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> 5-6 วันต่อสัปดาห์</span>
                                                    @elseif($item->e5_2 == "3")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> น้อยกว่า 5 วันต่อสัปดาห์</span>
                                                    @elseif($item->e5_2 == "4")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> ไม่เคยปฏิบัติ</span>
                                                    @endif
                                                </div>
                                            </label>
                                            <label class="col-md-12 label-control text-left" for="c3_3"><strong>5.3 ท่านรับประทานอาหารที่มีรสเค็มจัดหรืออาหารหมักดอง</strong>
                                                <div class="col-md-12">
                                                    @if($item->e5_3 == "1")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> ทุกวัน</span>
                                                    @elseif($item->e5_3 == "2")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> 5-6 วันต่อสัปดาห์</span>
                                                    @elseif($item->e5_3 == "3")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> น้อยกว่า 5 วันต่อสัปดาห์</span>
                                                    @elseif($item->e5_3 == "4")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> ไม่เคยปฏิบัติ</span>
                                                    @endif
                                                </div>
                                            </label>
                                            <label class="col-md-12 label-control text-left" for="c3_4"><strong>5.4 ท่านรับประทานผักไม่น้อยกว่าครึ่งจานในมื้อหลัก 3 มื้อ (ปริมาณผักมากกว่าข้าวเมื่อดูด้วยสายตา)</strong>
                                                <div class="col-md-12">
                                                    @if($item->e5_4 == "1")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> ทุกวัน</span>
                                                    @elseif($item->e5_4 == "2")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> 5-6 วันต่อสัปดาห์</span>
                                                    @elseif($item->e5_4 == "3")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> น้อยกว่า 5 วันต่อสัปดาห์</span>
                                                    @elseif($item->e5_4 == "4")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> ไม่เคยปฏิบัติ</span>
                                                    @endif
                                                </div>
                                            </label>
                                            <label class="col-md-12 label-control text-left" for="c3_5"><strong>5.5 ท่านรับประทานผลไม้สดรสไม่หวานจัด ไม่น้อยกว่า 2 ส่วนต่อวัน (1 ส่วน เทียบเท่า มะละกอ ฝรั่ง 6-8 คำ หรือ กล้วยน้ำว้า 1 ผลเล็ก ส้ม 1 ผลใหญ่)</strong>
                                                <div class="col-md-12">
                                                    @if($item->e5_5 == "1")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> ทุกวัน</span>
                                                    @elseif($item->e5_5 == "2")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> 5-6 วันต่อสัปดาห์</span>
                                                    @elseif($item->e5_5 == "3")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> น้อยกว่า 5 วันต่อสัปดาห์</span>
                                                    @elseif($item->e5_5 == "4")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> ไม่เคยปฏิบัติ</span>
                                                    @endif
                                                </div>
                                            </label>

                                        </div>
                                </div>

                                <div class="form-group col-md-12 mb-2">
                                    <label for="projectinput3"><strong>6. โดยปกติใน 1 สัปดาห์ ท่านมีกิจกรรมทางกาย รวมกันทุกกิจกรรมคิดเป็นระยะเวลานานเท่าใด (กิจกรรมทางกาย หมายถึง การเคลื่อนไหวร่างกายจากการทำกิจกรรมต่างๆ ในชีวิตประจำวัน ที่ทำให้รู้สึกเหนื่อยพอสมควร เช่น เดินเร็วๆ เวลารีบๆ เดินขึ้นบันได ล้างรถ ยกของหนัก รวมถึงการออกกำลังกาย หรือ การเล่นกีฬา</strong></label>
                                    <div class="col-md-9">
                                        @if($item->f6 == "1")
                                        <span class="text-success">น้อยกว่า 150 นาที (หรือ 2 ชั่วโมงครึ่ง) ต่อสัปดาห์ หรือ โดยเฉลี่ยน้อยกว่า 20 นาทีต่อวัน</span>
                                        @else
                                        <span class="text-success">ตั้งแต่ 150 นาที (หรือ 2 ชั่วโมงครึ่ง) ต่อสัปดาห์ขึ้นไป หรือ โดยเฉลี่ยมากกว่า 20 นาทีต่อวันขึ้นไป</span>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="card">

            <div class="card-content">
                <div class="card-body">
                        <div class="form-body">

                            <div class="row text-left">

                                <div class="form-group col-md-12 mb-2">
                                    <label for="projectinput3"><strong>7. การสูบบุหรี่ (รวมถึงไปป์/ซิการ์/ยาเส้นมวนเอง/บุหรี่ไฟฟ้า)</strong></label>
                                        <div class="col-md-9">
                                            @if($item->g7 == "1")
                                                <span class="text-success">ไม่เคยสูบเลย</span>
                                            @elseif($item->g7 == "2")
                                                <span class="text-success">เคยสูบแต่เลิกแล้ว ({{ $item->g7_d1 }} ปี)</span>

                                                @if($item->g7_d2 = '1')
                                                    <span class="text-success">ไม่เคยสูบเป็นประจำ</span>
                                                @else
                                                    <span class="text-success">เคยสูบเป็นประจำ</span>
                                                    <span>เริ่มสูบตั้งแต่อายุ {{ $item->g7_d3 }} ปี เลิกสูบตั้งแต่อายุ {{ $item->g7_d4 }} ปี ช่วงที่สูบ สูบวันละ {{ $item->g7_d5 }} ม้วน </span>
                                                @endif
                                            @else
                                                    <span class="text-success">ยังสูบอยู่</span>
                                                    <span>สูบวันละ {{ $item->g7_d6 }} ม้วน</span>
                                            @endif
                                        </div>
                                </div>
                                <div class="form-group col-md-12 mb-2">
                                    <label for="projectinput3"><strong>8. ในระยะเวลา 12 เดือน ที่ผ่านมา ท่านดื่มเครื่องดื่มแอลกอฮอล์อย่างน้อย 1 ดื่ม (เช่น เบียร์ 1 แก้ว/กระป๋อง, ไวน์ 1 แก้ว หรือ 5 ออนซ์, เหล้า 1 เป๊ก)</strong></label>
                                        <div class="col-md-9">
                                            @if($item->h8 == "1")
                                            <span class="text-success">ทุกวัน</span>
                                            @elseif($item->h8 == "2")
                                            <span class="text-success">3-4 ครั้งต่อสัปดาห์</span>
                                            @elseif($item->h8 == "3")
                                            <span class="text-success">สัปดาห์ละครั้ง</span>
                                            @elseif($item->h8 == "4")
                                            <span class="text-success">เดือนละครั้ง</span>
                                            @elseif($item->h8 == "5")
                                            <span class="text-success">1 หรือ 2 ครั้ง ในปีที่ผ่านมา</span>
                                            @elseif($item->h8 == "6")
                                            <span class="text-success">ไม่ดื่มเลยในชีวิต</span>
                                            @endif

                                        </div>
                                </div>
                                <div class="form-group col-md-12 mb-2">
                                    <label for="projectinput3"><strong>9. ท่านมีอาการหรือความรู้สึกที่เกิดในระยะ 2-4 สัปดาห์ มากน้อยเพียงใด</strong></label>
                                        <div class="col-md-12">
                                            <label class="col-md-12 label-control text-left" for="first_name"><strong>9.1 มีปัญหาการนอน นอนไม่หลับหรือนอนมาก</strong>
                                                <div class="col-md-12">
                                                    @if($item->i9_1 == "0")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> แทบไม่มี</span>
                                                    @elseif($item->i9_1 == "1")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> เป็นบางครั้ง</span>
                                                    @elseif($item->i9_1 == "2")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> บ่อยครั้ง</span>
                                                    @elseif($item->i9_1 == "3")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> เป็นประจำ</span>
                                                    @endif
                                                </div>
                                            </label>
                                            <label class="col-md-12 label-control text-left" for="c3_2"><strong>9.2 มีสมาธิน้อยลง</strong>
                                                <div class="col-md-12">
                                                    @if($item->i9_2 == "0")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> แทบไม่มี</span>
                                                    @elseif($item->i9_2 == "1")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> เป็นบางครั้ง</span>
                                                    @elseif($item->i9_2 == "2")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> บ่อยครั้ง</span>
                                                    @elseif($item->i9_2 == "3")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> เป็นประจำ</span>
                                                    @endif
                                                </div>
                                            </label>
                                            <label class="col-md-12 label-control text-left" for="c3_3"><strong>9.3 หงุดหงิด/กระวนกระวาย/ว้าวุ่นใจ</strong>
                                                <div class="col-md-12">
                                                    @if($item->i9_3 == "0")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> แทบไม่มี</span>
                                                    @elseif($item->i9_3 == "1")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> เป็นบางครั้ง</span>
                                                    @elseif($item->i9_3 == "2")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> บ่อยครั้ง</span>
                                                    @elseif($item->i9_3 == "3")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> เป็นประจำ</span>
                                                    @endif
                                                </div>
                                            </label>
                                            <label class="col-md-12 label-control text-left" for="c3_4"><strong>9.4 รู้สึกเบื่อ เซ็ง</strong>
                                                <div class="col-md-12">
                                                    @if($item->i9_4 == "0")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> แทบไม่มี</span>
                                                    @elseif($item->i9_4 == "1")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> เป็นบางครั้ง</span>
                                                    @elseif($item->i9_4 == "2")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> บ่อยครั้ง</span>
                                                    @elseif($item->i9_4 == "3")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> เป็นประจำ</span>
                                                    @endif
                                                </div>
                                            </label>
                                            <label class="col-md-12 label-control text-left" for="c3_5"><strong>9.5 ไม่อยากพบปะผู้คน</strong>
                                                <div class="col-md-12">
                                                    @if($item->i9_5 == "0")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> แทบไม่มี</span>
                                                    @elseif($item->i9_5 == "1")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> เป็นบางครั้ง</span>
                                                    @elseif($item->i9_5 == "2")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> บ่อยครั้ง</span>
                                                    @elseif($item->i9_5 == "3")
                                                        <span class="text-success"><i class="feather icon-check-square"></i> เป็นประจำ</span>
                                                    @endif
                                                </div>
                                            </label>

                                        </div>
                                </div>
                                <div class="form-group col-md-12 mb-2">
                                    <label for="projectinput3"><strong>10. ใน 2 สัปดาห์ที่ผ่านมา รวมวันนี้ ท่านรู้สึก หกหู่ เศร้า ท้อแท้ สิ้นหวัง หรือไม่</strong></label>
                                        <div class="col-md-9">
                                            @if($item->j10 == "1")
                                            ไม่มี
                                            @else
                                            มี
                                            @endif

                                        </div>
                                </div>
                                <div class="form-group col-md-12 mb-2">
                                    <label for="projectinput3"><strong>11. ใน 2 สัปดาห์ที่ผ่านมา รวมวันนี้ ท่านรู้สึก เบื่อ ทำอะไรก็ไม่เพลิดเพลิน หรือไม่</strong></label>
                                        <div class="col-md-9">
                                            @if($item->k11 == "1")
                                            ไม่มี
                                            @else
                                            มี
                                            @endif

                                        </div>
                                </div>
                                <div class="form-group col-md-12 mb-2">
                                    <label for="projectinput3"><strong>12. ประวัติโรคประจำตัว</strong></label>
                                        <div class="col-md-9">
                                          {{ $item->l12 }}
                                          @if($item->l12_d == '6')
                                          ({{ $item->l12_d }})
                                          @endif
                                        </div>
                                </div>
                                <div class="form-group col-md-12 mb-2">
                                    <label for="projectinput3"><strong>13. พฤติกรรมการดำเนินชีวิตที่มีผบต่อความเสี่ยงเป็นโรค</strong></label>
                                        <div class="col-md-9">
                                            <span class="text-success">การสูบบุหรี่ :
                                                @if($item->m13_1 == '0')
                                                    ไม่เคยสูบบุหรี่
                                                @elseif($item->m13_1 == '1')
                                                    เคยสูบ แต่เลิกแล้ว
                                                @elseif($item->m13_1 == '2')
                                                    สูบเป็นครั้งคราว
                                                @else
                                                    สูบเป็นประจำ
                                                @endif
                                            </span>
                                            <span class="text-success">การดื่มแอลกอฮอล์ :
                                                @if($item->m13_2 == '0')
                                                    ไม่เคยดื่ม
                                                @elseif($item->m13_2 == '1')
                                                    เคยดื่ม แต่เลิกแล้ว
                                                @elseif($item->m13_2 == '2')
                                                    ดื่มเป็นครั้งคราว
                                                @else
                                                    ดื่มเป็นประจำ
                                                @endif
                                            </span>
                                            <span class="text-success">การออกกำลังกาย :
                                                @if($item->m13_3 == '0')
                                                    ไม่เคยออกกำลังกาย
                                                @elseif($item->m13_3 == '1')
                                                    ออกกำลังกายต่ำกว่าเกณฑ์
                                                @elseif($item->m13_3 == '2')
                                                    ออกกำลังกายตามเกณฑ์

                                                @endif
                                            </span>
                                        </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>

        </div>
    </div>
</div>

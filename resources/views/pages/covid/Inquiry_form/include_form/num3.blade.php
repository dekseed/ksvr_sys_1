<h6>ข้อที่ 3</h6>
<fieldset>
    <h4 class="form-section">3. ประวัติเสี่ยง</h4>

    <div class="form-group row">
        <h5 class="col-md-8 label-control">1. ช่วง 14 วันก่อนป่วยอาศัยอยู่หรือเดินทางมาจากพื้นที่
            ที่มีการระบาด</h5>
        <div class="col-md-4">
            <li class="d-inline-block mr-2">
                <fieldset>
                    <div class="vs-radio-con">
                        <input type="radio" name="num1" value="0" onclick="show1();">
                        <span class="vs-radio">
                            <span class="vs-radio--border"></span>
                            <span class="vs-radio--circle"></span>
                        </span>
                        <span class="">ไม่ใช่</span>
                    </div>
                </fieldset>
            </li>
            <li class="d-inline-block mr-2">
                <fieldset>
                    <div class="vs-radio-con">
                        <input type="radio" name="num1" value="1" onclick="show2();">
                        <span class="vs-radio">
                            <span class="vs-radio--border"></span>
                            <span class="vs-radio--circle"></span>
                        </span>
                        <span class="">ใช่</span>
                    </div>
                </fieldset>
            </li>

            <div id="hidden_num1" style="display:none;">
                <h5 class="">ระบุเมือง</h5>

                <div class="position-relative has-icon-left">
                    <input type="text" id="first-name-icon" class="form-control" name="num1_city"
                        placeholder="ระบุเมือง">
                    <div class="form-control-position">
                        <i class="fa fa-building"></i>
                    </div>
                </div>
                <br />
                <h5 class="">ประเทศ</h5>

                <div class="position-relative has-icon-left">
                    <input type="text" id="first-name-icon" class="form-control" name="num1_country"
                        placeholder="ประเทศ">
                    <div class="form-control-position">
                        <i class="fa fa-globe"></i>
                    </div>
                </div>
                <br />

                <h5 class="">เดินทางเข้าประเทศไทยวันที่</h5>

                <div class="position-relative has-icon-left">
                    <input type="date" id="first-name-icon" class="form-control" name="num1_date" placeholder="ประเทศ">
                    <div class="form-control-position">
                        <i class="fa fa-flag"></i>
                    </div>
                </div>
                <br />

                <h5 class="">โดยสายการบิน</h5>

                <div class="position-relative has-icon-left">
                    <input type="text" id="first-name-icon" class="form-control" name="num1_airline"
                        placeholder="ประเทศ">
                    <div class="form-control-position">
                        <i class="fa fa-plane"></i>
                    </div>
                </div>
                <br />

                <h5 class="">เที่ยวบินที่</h5>

                <div class="position-relative has-icon-left">
                    <input type="text" id="first-name-icon" class="form-control" name="num1_flight"
                        placeholder="ประเทศ">
                    <div class="form-control-position">
                        <i class="fa fa-plane"></i>
                    </div>
                </div>
                <br />

                <h5 class="">เลขที่นั่ง</h5>

                <div class="position-relative has-icon-left">
                    <input type="text" id="first-name-icon" class="form-control" name="num1_seat"
                        placeholder="เลขที่นั่ง">
                    <div class="form-control-position">
                        <i class="fa fa-plane"></i>
                    </div>
                </div>

            </div>

            <script type="text/javascript">
                function show1() {
                    document.getElementById('hidden_num1').style.display = 'none';
                }

                function show2() {
                    document.getElementById('hidden_num1').style.display = 'block';
                }
            </script>


            <br />
        </div>



        <h5 class="col-md-8 label-control">2. ช่วง 14
            วันก่อนป่วยได้เข้ารับการรักษาหรือเยี่ยมผู้ป่วยในโรงพยาบาลของพื้นที่ที่มีการระบาด</h5>
        <div class="col-md-4">
            <li class="d-inline-block mr-2">
                <fieldset>
                    <div class="vs-radio-con">
                        <input type="radio" name="num2" value="0">
                        <span class="vs-radio">
                            <span class="vs-radio--border"></span>
                            <span class="vs-radio--circle"></span>
                        </span>
                        <span class="">ไม่ใช่</span>
                    </div>
                </fieldset>
            </li>
            <li class="d-inline-block mr-2">
                <fieldset>
                    <div class="vs-radio-con">
                        <input type="radio" name="num2" value="1">
                        <span class="vs-radio">
                            <span class="vs-radio--border"></span>
                            <span class="vs-radio--circle"></span>
                        </span>
                        <span class="">ใช่</span>
                    </div>
                </fieldset>
            </li>
            <br />
        </div>



        <h5 class="col-md-8 label-control">3. ช่วง 14
            วันก่อนป่วยได้ดูแลหรือสัมผัสกับผู้ป่วยอาการคล้ายไข้หวัดใหญ่หรือปอดอักเสบ</h5>
        <div class="col-md-4">
            <li class="d-inline-block mr-2">
                <fieldset>
                    <div class="vs-radio-con">
                        <input type="radio" name="num3" value="0">
                        <span class="vs-radio">
                            <span class="vs-radio--border"></span>
                            <span class="vs-radio--circle"></span>
                        </span>
                        <span class="">ไม่ใช่</span>
                    </div>
                </fieldset>
            </li>
            <li class="d-inline-block mr-2">
                <fieldset>
                    <div class="vs-radio-con">
                        <input type="radio" name="num3" value="1">
                        <span class="vs-radio">
                            <span class="vs-radio--border"></span>
                            <span class="vs-radio--circle"></span>
                        </span>
                        <span class="">ใช่</span>
                    </div>
                </fieldset>
            </li>
            <br />
        </div>



        <h5 class="col-md-8 label-control">4. ช่วง 14
            วันก่อนป่วยมีประวัติสัมผัสผู้ป่วยยืนยันโรคติดเชื้อไวรัสโคโรนา 2019 </h5>
        <div class="col-md-4">
            <li class="d-inline-block mr-2">
                <fieldset>
                    <div class="vs-radio-con">
                        <input type="radio" name="num4" value="0" onclick="show3();">
                        <span class="vs-radio">
                            <span class="vs-radio--border"></span>
                            <span class="vs-radio--circle"></span>
                        </span>
                        <span class="">ไม่ใช่</span>
                    </div>
                </fieldset>
            </li>
            <li class="d-inline-block mr-2">
                <fieldset>
                    <div class="vs-radio-con">
                        <input type="radio" name="num4" value="1" onclick="show4();">
                        <span class="vs-radio">
                            <span class="vs-radio--border"></span>
                            <span class="vs-radio--circle"></span>
                        </span>
                        <span class="">ใช่</span>
                    </div>
                </fieldset>
            </li>

            <div id="hidden_num4" style="display:none;">
                <h5 class="">ระบุชื่อผู้ป่วยที่สัมผัส</h5>
                <div class="position-relative has-icon-left">
                    <input type="text" id="first-name-icon" class="form-control" name="num4_details" placeholder="ระบุ">
                    <div class="form-control-position">
                        <i class="fa fa-pencil-square-o"></i>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
                function show3() {
                    document.getElementById('hidden_num4').style.display = 'none';
                }

                function show4() {
                    document.getElementById('hidden_num4').style.display = 'block';
                }
            </script>


            <br />
        </div>


        <h5 class="col-md-8 label-control">5. ช่วง 14
            วันก่อนป่วยประกอบอาชีพที่สัมผัสใกล้ชิดกับนักท่องเที่ยวต่างชาติหรือแรงงานต่างชาติ</h5>
        <div class="col-md-4">
            <li class="d-inline-block mr-2">
                <fieldset>
                    <div class="vs-radio-con">
                        <input type="radio" name="num5" value="0">
                        <span class="vs-radio">
                            <span class="vs-radio--border"></span>
                            <span class="vs-radio--circle"></span>
                        </span>
                        <span class="">ไม่ใช่</span>
                    </div>
                </fieldset>
            </li>
            <li class="d-inline-block mr-2">
                <fieldset>
                    <div class="vs-radio-con">
                        <input type="radio" name="num5" value="1">
                        <span class="vs-radio">
                            <span class="vs-radio--border"></span>
                            <span class="vs-radio--circle"></span>
                        </span>
                        <span class="">ใช่</span>
                    </div>
                </fieldset>
            </li>
            <br />
        </div>


        <h5 class="col-md-8 label-control">6. ช่วง 14
            วันก่อนป่วยมีประวัติเดินทางไปในสถานที่ที่มีคนหนาแน่น เช่น ผับ สนามมวย</h5>
        <div class="col-md-4">

            <li class="d-inline-block mr-2">
                <fieldset>
                    <div class="vs-radio-con">
                        <input type="radio" name="num6" value="0" onclick="show5();">
                        <span class="vs-radio">
                            <span class="vs-radio--border"></span>
                            <span class="vs-radio--circle"></span>
                        </span>
                        <span class="">ไม่ใช่</span>
                    </div>
                </fieldset>
            </li>
            <li class="d-inline-block mr-2">
                <fieldset>
                    <div class="vs-radio-con">
                        <input type="radio" name="num6" value="1" onclick="show6();">
                        <span class="vs-radio">
                            <span class="vs-radio--border"></span>
                            <span class="vs-radio--circle"></span>
                        </span>
                        <span class="">ใช่</span>
                    </div>
                </fieldset>
            </li>


            <div id="hidden_num6" style="display:none;">
                <h5 class="">ระบุสถานที่</h5>

                <div class="position-relative has-icon-left">
                    <input type="text" id="first-name-icon" class="form-control" name="num6_details" placeholder="ระบุ">
                    <div class="form-control-position">
                        <i class="fa fa-pencil-square-o"></i>
                    </div>
                </div>

                <br />
            </div>

            <script type="text/javascript">
                function show5() {
                    document.getElementById('hidden_num6').style.display = 'none';
                }

                function show6() {
                    document.getElementById('hidden_num6').style.display = 'block';
                }
            </script>
        </div>


        <h5 class="col-md-8 label-control">7.
            เป็นผุ้ป่วยอาการทางเดินหายใจหรือปอดอักเสบเป็นกลุ่มก้อน</h5>
        <div class="col-md-4">
            <li class="d-inline-block mr-2">
                <fieldset>
                    <div class="vs-radio-con">
                        <input type="radio" name="num7" value="0">
                        <span class="vs-radio">
                            <span class="vs-radio--border"></span>
                            <span class="vs-radio--circle"></span>
                        </span>
                        <span class="">ไม่ใช่</span>
                    </div>
                </fieldset>
            </li>
            <li class="d-inline-block mr-2">
                <fieldset>
                    <div class="vs-radio-con">
                        <input type="radio" name="num7" value="1">
                        <span class="vs-radio">
                            <span class="vs-radio--border"></span>
                            <span class="vs-radio--circle"></span>
                        </span>
                        <span class="">ใช่</span>
                    </div>
                </fieldset>
            </li>
            <br />
        </div>


        <h5 class="col-md-8 label-control" >8.
            เป็นผู้ป่วยปอดอักเสบุนแรงหรือเสียชีวิตที่หาสาเหตุไม่ได้</h5>
        <div class="col-md-4">
            <li class="d-inline-block mr-2">
                <fieldset>
                    <div class="vs-radio-con">
                        <input type="radio" name="num8" value="0">
                        <span class="vs-radio">
                            <span class="vs-radio--border"></span>
                            <span class="vs-radio--circle"></span>
                        </span>
                        <span class="">ไม่ใช่</span>
                    </div>
                </fieldset>
            </li>
            <li class="d-inline-block mr-2">
                <fieldset>
                    <div class="vs-radio-con">
                        <input type="radio" name="num8" value="1">
                        <span class="vs-radio">
                            <span class="vs-radio--border"></span>
                            <span class="vs-radio--circle"></span>
                        </span>
                        <span class="">ใช่</span>
                    </div>
                </fieldset>
            </li>
            <br />
        </div>


        <h5 class="col-md-8 label-control" >9.
            เป็นบุคลากรทางการแพทย์และสาธารณสุขหรือเจ้าหน้าที่ห้องปฏิบัติการ</h5>
        <div class="col-md-4">
            <li class="d-inline-block mr-2">
                <fieldset>
                    <div class="vs-radio-con">
                        <input type="radio" name="num9" value="0">
                        <span class="vs-radio">
                            <span class="vs-radio--border"></span>
                            <span class="vs-radio--circle"></span>
                        </span>
                        <span class="">ไม่ใช่</span>
                    </div>
                </fieldset>
            </li>
            <li class="d-inline-block mr-2">
                <fieldset>
                    <div class="vs-radio-con">
                        <input type="radio" name="num9" value="1">
                        <span class="vs-radio">
                            <span class="vs-radio--border"></span>
                            <span class="vs-radio--circle"></span>
                        </span>
                        <span class="">ใช่</span>
                    </div>
                </fieldset>
            </li>
            <br />
        </div>


        <h5 class="col-md-1 label-control" >10. อื่นๆ</h5>
        <div class="col-md-11">
            <div class="position-relative has-icon-left">
                <input type="text" id="first-name-icon" class="form-control" name="num10" placeholder="ระบุ">
                <div class="form-control-position">
                    <i class="fa fa-pencil-square-o"></i>
                </div>
            </div>


        </div>
    </div>
</fieldset>
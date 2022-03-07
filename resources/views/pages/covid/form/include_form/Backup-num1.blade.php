  <div class="row">
            <div class="col-2">
                <div class="form-group">
                    
                    <label for="first-name-icon">คำนำหน้า</label>
                    
                    {{-- <div class="position-relative has-icon-left">
                                                                            <input type="text" id="first-name-icon" class="form-control" name="fname-icon" placeholder="คำนำหน้า">
                                                                            <div class="form-control-position">
                                                                                <i class="fa fa-users"></i>
                                                                            </div>
                                                                        </div> --}}
                    <select class="form-control select2" name="title_name_id" id="basicSelect">
                        <option value="">--- คำนำหน้า ---</option>

                        @foreach ($name_title as $roles)
                            <option value="{{ $roles->id }}">{{ $roles->name }}</option>
                        @endforeach

                    </select>
                </div>
            </div>
            <div class="col-5">
                <div class="form-group">
                    <label for="first-name-icon">ชื่อ</label>
                    <div class="position-relative has-icon-left">
                        <input type="text" id="first-name-icon" class="form-control" name="first_name"
                            placeholder="ชื่อ">
                        <div class="form-control-position">
                            <i class="fa fa-user-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="form-group">
                    <label for="first-name-icon">นามสกุล</label>
                    <div class="position-relative has-icon-left">
                        <input type="text" id="last_name" class="form-control" name="last_name"
                            placeholder="นามสกุล">
                        <div class="form-control-position">
                            <i class="fa fa-user-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="password-icon">เพศ</label>
                    <select class="form-control" id="basicSelect" name="sex" onchange="showDiv(this)">
                        <option>เพศ</option>
                        <option value="0">ชาย</option>
                        <option value="1">หญิง</option>
                    </select>
                    <div id="hidden_div" style="display:none;">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="password-icon">กรณีเพศหญิง </label>
                                    <fieldset>
                                        <div class="vs-radio-con">
                                            <input type="radio" name="vueradio" value="false" onclick="womb0();">
                                            <span class="vs-radio">
                                                <span class="vs-radio--border"></span>
                                                <span class="vs-radio--circle"></span>
                                            </span>
                                            <span class="">ตั้งครรภ์</span>
                                        </div>
                                    </fieldset>
                                </div>
                                <br /><br />
                                <div class="col-sm-6">
                                    <fieldset>
                                        <div class="vs-radio-con">
                                            <input type="radio" name="vueradio" value="false" onclick="womb1();">
                                            <span class="vs-radio">
                                                <span class="vs-radio--border"></span>
                                                <span class="vs-radio--circle"></span>
                                            </span>
                                            <span class="">ไม่ได้ตั้งครรภ์</span>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="hidden_womb" style="display:none;">
                        <div class="col-sm-6">
                            <label for="first-name-icon">ครรภ์ที่</label>
                            <div class="position-relative has-icon-left">
                                <input type="text" id="first-name-icon" class="form-control"
                                    name="first-name-icon" placeholder="ครรภ์ที่">
                                <div class="form-control-position">
                                    <i class="fa fa-user-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="first-name-icon">อายุครรภ์</label>
                            <div class="position-relative has-icon-left">
                                <input type="text" id="first-name-icon" class="form-control"
                                    name="first-name-icon" placeholder="อายุครรภ์">
                                <div class="form-control-position">
                                    <i class="fa fa-user-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>


                    <script type="text/javascript">
                        function showDiv(select) {
                            if (select.value == 1) {
                                document.getElementById('hidden_div').style.display = "block";
                            } else {
                                document.getElementById('hidden_div').style.display = "none";
                            }
                        }
                    </script>

                    <script type="text/javascript">
                        function womb0() {
                            document.getElementById('hidden_womb').style.display = 'block';
                        }

                        function womb1() {
                            document.getElementById('hidden_womb').style.display = 'none';
                        }
                    </script>

                </div>
            </div>


            <div class="col-4">
                <div class="form-group">
                    <label for="number-icon">อายุ</label>
                    <div class="position-relative has-icon-left">
                        <input type="number" id="number-icon" class="form-control" name="age"
                            placeholder="อายุ">
                        <div class="form-control-position">
                            <i class="fa fa-calendar-plus-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="text-icon">สัญชาติ</label>
                    <div class="position-relative has-icon-left">
                        <input type="text" id="text-icon" class="form-control" name="nation"
                            placeholder="สัญชาติ">
                        <div class="form-control-position">
                            <i class="fa fa-font-awesome"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="text-icon">อาชีพ</label>
                    <div class="position-relative has-icon-left">
                        <input type="text" id="text-icon" class="form-control" name="occ"
                            placeholder="อาชีพ">
                        <div class="form-control-position">
                            <i class="fa fa-briefcase"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="form-group">
                    <label for="text-icon">สถานที่ทำงาน/สถานศึกษา</label>
                    <div class="position-relative has-icon-left">
                        <input type="text" id="text-icon" class="form-control" name="location"
                            placeholder="สถานที่ทำงาน/สถานศึกษา">
                        <div class="form-control-position">
                            <i class="fa fa-building-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="number-icon">เบอร์โทรศัพท์ที่ติดต่อได้</label>
                    <div class="position-relative has-icon-left">
                        <input type="number" id="number-icon" class="form-control" name="tel"
                            placeholder="เบอร์โทรศัพท์ที่ติดต่อได้">
                        <div class="form-control-position">
                            <i class="fa fa-mobile"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="text-icon">เบอร์โทรศัพท์ที่ใช้ลงแอปพลิเคชัน "หมอชนะ"</label>
                    <div class="position-relative has-icon-left">
                        <input type="text" id="text-icon" class="form-control" name="telapp"
                            placeholder="เบอร์โทรศัพท์ที่ใช้ลงแอปพลิเคชัน 'หมอชนะ'">
                        <div class="form-control-position">
                            <i class="feather icon-tablet"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="text-icon">ที่อยู่ขณะป่วยในประเทศไทย </label>
                    <div class="position-relative has-icon-left">
                        <input type="text" id="text-icon" class="form-control" name="home_id"
                            placeholder="ที่อยู่ขณะป่วยในประเทศไทย">
                        <div class="form-control-position">
                            <i class="feather icon-lock"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="text-icon">โรคประจำตัว </label>
                    <div class="position-relative has-icon-left">
                        <input type="text" id="text-icon" class="form-control" name="disease"
                            placeholder="โรคประจำตัว">
                        <div class="form-control-position">
                            <i class="fa fa-user-md"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="password-icon">การสูบบุหรี่ </label>
                    <fieldset class="checkbox" name="smoking">
                        <div class="vs-checkbox-con vs-checkbox-primary">
                            <input type="checkbox">
                            <span class="vs-checkbox">
                                <span class="vs-checkbox--check">
                                    <i class="vs-icon feather icon-check"></i>
                                </span>
                            </span>
                            <span class="">ไม่เคยสูบ</span>
                        </div>
                    </fieldset>
                    <fieldset class="checkbox">
                        <div class="vs-checkbox-con vs-checkbox-primary">
                            <input type="checkbox">
                            <span class="vs-checkbox">
                                <span class="vs-checkbox--check">
                                    <i class="vs-icon feather icon-check"></i>
                                </span>
                            </span>
                            <span class="">ยังคงสูบ</span>
                        </div>
                    </fieldset>
                    <fieldset class="checkbox">
                        <div class="vs-checkbox-con vs-checkbox-primary">
                            <input type="checkbox">
                            <span class="vs-checkbox">
                                <span class="vs-checkbox--check">
                                    <i class="vs-icon feather icon-check"></i>
                                </span>
                            </span>
                            <span class="">เคยสูบแต่เลิกแล้ว</span>
                        </div>
                    </fieldset>
                </div>
            </div>

            {{-- <div class="col-2">
                                                                    <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                                                    <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                                                                </div> --}}
        </div>
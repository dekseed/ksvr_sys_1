<h6>ข้อที่ 1</h6>
<fieldset>

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-md-6 col-12">
                <div class="card border-success p-1">
                    <div class="card-header">
                        <h4 class="mb-2 card-title"><i class="feather icon-file-text"></i> ข้อมูลทั่วไป</h4>
                    </div>
                    <div class="table-responsive border rounded px-2 ">

                        <div class="my-1 form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>หมายเลขบัตรประชาชน</span>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="position-relative has-icon-left">
                                                <div class="input-field">
                                                    <input type="number" id="number_id" class="form-control input1"
                                                        placeholder="ค้นหาเลขบัตรประชาชน.." name="number" required>

                                                    <div class="form-control-position">
                                                        <i class="fa fa-id-card-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>คำนำหน้า</span>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="position-relative has-icon-left">
                                                <select class="form-control select2" name="title_name_id"
                                                    id="basicSelect" required>
                                                    <option value=""> --- กรุณาเลือก ---</option>

                                                    @foreach ($name_title as $roles)
                                                    <option value="{{ $roles->id }}">{{ $roles->name }}
                                                    </option>
                                                    @endforeach

                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>ชื่อ</span>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="position-relative has-icon-left">
                                                <input type="text" id="brand" class="form-control input1"
                                                    placeholder="ชื่อ" name="first_name" required>
                                                <div class="form-control-position">
                                                    <i class="fa fa-user-circle-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>นามสกุล</span>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="position-relative has-icon-left">
                                                <input type="text" id="model" class="form-control input1"
                                                    placeholder="นามสกุล" name="last_name" required>
                                                <div class="form-control-position">
                                                    <i class="fa fa-user-circle-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>เพศ</span>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="position-relative has-icon-left">
                                                <select class="form-control" id="basicSelect" name="sex_id"
                                                    onchange="showDiv(this)" required>
                                                    <option>เพศ</option>
                                                    <option value="0">ชาย</option>
                                                    <option value="1">หญิง</option>
                                                </select>

                                                <div class="form-control-position">
                                                    <i class="fa fa-venus-mars"></i>
                                                </div>
                                            </div>
                                            <div id="hidden_div" style="display:none;">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <label class="mt-1"
                                                            style="color:rgb(53, 141, 141);font-size:14px">กรณีเพศหญิง</label>
                                                        <div class="mt-1 col-sm-12">
                                                            <fieldset>
                                                                <div class="vs-radio-con">
                                                                    <input type="radio" name="womb" value="0"
                                                                        onclick="womb1();">
                                                                    <span class="vs-radio">
                                                                        <span class="vs-radio--border"></span>
                                                                        <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    <span class="">ไม่ได้ตั้งครรภ์</span>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <fieldset>
                                                                <div class="mt-1 vs-radio-con">
                                                                    <input type="radio" name="womb" value="1"
                                                                        onclick="womb0();">
                                                                    <span class="vs-radio">
                                                                        <span class="vs-radio--border"></span>
                                                                        <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    <span class="">ตั้งครรภ์</span>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        <div id="hidden_womb" style="display:none;">
                                                            <div class="mt-1 col-sm-12">
                                                                <div class="form-group row">
                                                                    <div class="col-md-4">
                                                                        <span>ครรภ์ที่</span>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative has-icon-left">
                                                                            <input type="text"
                                                                                class="form-control input1"
                                                                                placeholder="ครรภ์ที่" name="womb">
                                                                            <div class="form-control-position">
                                                                                <i class="fa fa-user-circle-o"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-1 col-sm-12">
                                                                <div class="form-group row">
                                                                    <div class="col-md-4">
                                                                        <span>อายุครรภ์</span>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative has-icon-left">
                                                                            <input type="text"
                                                                                class="form-control input1"
                                                                                placeholder="อายุครรภ์ (เดือน)" name="womb_age">
                                                                            <div class="form-control-position">
                                                                                <i class="fa fa-user-circle-o"></i>
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
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>อายุ</span>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="position-relative has-icon-left">
                                                <input type="number" class="form-control input1" placeholder="อายุ"
                                                    name="user_age" required>
                                                <div class="form-control-position">
                                                    <i class="fa fa-address-card-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>สัญชาติ</span>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="position-relative has-icon-left">

                                                <input type="text" class="form-control input1" name="user_nationnaloty"
                                                    placeholder="สัญชาติ" required>
                                                <div class="form-control-position">
                                                    <i class="fa fa-flag-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>เบอร์โทรศัพท์ที่ติดต่อได้</span>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="position-relative has-icon-left">
                                                <input type="number" id="number-icon" class="form-control"
                                                    name="user_tel" placeholder="เบอร์โทรศัพท์ที่ติดต่อได้" required>
                                                <div class="form-control-position">
                                                    <i class="fa fa-id-badge"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>เบอร์โทรศัพท์ที่ใช้ลง<br>แอปพลิเคชัน "หมอชนะ"</span>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="position-relative has-icon-left">
                                                <input type="number" class="form-control" name="user_telapp"
                                                    placeholder='เบอร์โทรศัพท์ที่ใช้ลงแอปพลิเคชัน "หมอชนะ"' required>
                                                <div class="form-control-position">
                                                    <i class="fa fa-id-badge"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>

                </div>
                <hr style="height:1px;border-width:0;color:rgb(3, 141, 26);background-color:rgb(3, 141, 26)">

            </div>

            <div class="col-md-6 col-12">
                <div class="card border-success px-1">
                    <div class="card-header">
                        <h4 class="card-title mb-1"><i class="fa fa-comments-o"></i> ข้อมูลเพิ่มเติม</h4>
                    </div>
                                                   <div class="px-1 form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div id="hidden_div" class="form-group row" style="display:block;">
                                                <div class="table-responsive border rounded px-1">
                                                    <h6 class="border-bottom py-1  mb-1 font-medium-1"><i
                                                            class="fa fa-angle-double-right mr-50 "></i>
                                                        รายละเอียดเพิ่มเติม
                                                    </h6>
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <span>อาชีพ <br><em
                                                                    style="color:red;font-size:12px">(ระบุลักษณะงานอย่างละเอียด)</em></span>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="position-relative has-icon-left">
                                                                <input type="text" id="text-icon" class="form-control"
                                                                    name="user_occ" placeholder="อาชีพ" required>
                                                                <div class="form-control-position">
                                                                    <i class="fa fa-briefcase"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-4">
                                                            <span>สถานที่ทำงาน/สถานศึกษา</span>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="position-relative has-icon-left">
                                                                <input type="text" class="form-control"
                                                                    name="user_location"
                                                                    placeholder="ชื่อสถานที่ทำงาน/สถานศึกษา" required>
                                                                <div class="form-control-position">
                                                                    <i class="fa fa-building-o"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>


                                                <div class="table-responsive border rounded px-1 my-1">
                                                    <h6 class="border-bottom py-1  mb-1 font-medium-1"><i
                                                            class="feather icon-home mr-50 "></i> ที่อยู่ปัจจุบัน</h6>

                                                    <div class="mt-2 form-group row">
                                                        <div class="col-md-4">
                                                            <span>ที่อยู่ขณะป่วยในประเทศไทย</span>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="position-relative has-icon-left">
                                                                <select class="form-control select2-l-1"
                                                                    name="home_type_id" required>
                                                                    <option value=""> --- กรุณาเลือก ---</option>

                                                                    @foreach ($home_type as $roles)
                                                                    <option value="{{ $roles->id }}">{{ $roles->name }}
                                                                    </option>
                                                                    @endforeach

                                                                </select>

                                                                <div class="form-control-position">
                                                                    <i class="fa fa-thumb-tack"></i>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">


                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="home_id">
                                                                    บ้านเลขที่ *
                                                                </label>
                                                                <input type="text" class="form-control " id="home_id"
                                                                    name="home_id" value="{{ old('home_id') }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="alley">
                                                                    ซอย
                                                                </label>
                                                                <input type="text" class="form-control " id="alley"
                                                                    name="alley" value="{{ old('alley') }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="street">
                                                                    ถนน *
                                                                </label>
                                                                <input type="text" class="form-control " id="street"
                                                                    name="street" value="{{ old('street') }}">
                                                            </div>
                                                        </div>


                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="province">
                                                                    จังหวัด *
                                                                </label>
                                                                <select id="province" name="province"
                                                                    class="select2 form-control"
                                                                    onchange="showAmphoes()" required>
                                                                    <option value="">กรุณาเลือกจังหวัด</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="district">
                                                                    อำเภอ *
                                                                </label>
                                                                <select id="amphoe" class="select2 form-control"
                                                                    name="district" onchange="showDistricts()" required>
                                                                    <option value="">กรุณาเลือกอำเภอ</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="canton">
                                                                    ตำบล *
                                                                </label>
                                                                <select id="district" name="canton"
                                                                    class="form-control select2 "
                                                                    onchange="showZipcode()" required>
                                                                    <option value="">กรุณาเลือกตำบล</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <div class=" col-12">
                                                        <div class="table-responsive border rounded px-1 ">

                                                            <div class="mt-2 form-group row">
                                                                <div class="col-md-4">
                                                                    <span>โรคประจำตัว</span>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="position-relative has-icon-left">
                                                                        <input type="text" id="text-icon"
                                                                            class="form-control" name="disease"
                                                                            placeholder="โรคประจำตัว" required>
                                                                        <div class="form-control-position">
                                                                            <i class="fa fa-stethoscope"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-2 form-group row">
                                                                <div class="col-md-4">
                                                                    <span>ประวัติการสูบบุหรี่</span>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="col-md-12">
                                                                        <ul class="list-unstyled mb-0">
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>

                                                                                    <div class="mt-1 vs-radio-con">
                                                                                        <input type="radio" name="smoking"
                                                                                            value="0">
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">ไม่เคยสูบ</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con">
                                                                                        <input type="radio" name="smoking"
                                                                                            value="1">
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">ยังคงสูบ</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                            <li class="d-inline-block mr-2">
                                                                                <fieldset>
                                                                                    <div class="vs-radio-con">
                                                                                        <input type="radio" name="smoking"
                                                                                            value="2">
                                                                                        <span class="vs-radio">
                                                                                            <span class="vs-radio--border"></span>
                                                                                            <span class="vs-radio--circle"></span>
                                                                                        </span>
                                                                                        <span class="">เคยสูบแต่เลิกแล้ว</span>
                                                                                    </div>
                                                                                </fieldset>
                                                                            </li>
                                                                        </ul>
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
                        </div>
    </section>
    <script>
        $(document).ready(function(){
            // console.log("HELLO");
            showProvinces();
            });
    </script>
    <script>
        $(document).ready(function(){
            // console.log("HELLO");
            showProvinces1();
            });
    </script>
    <script>
        function ajax(url, callback){
          $.ajax({
            "url" : url,
            "type" : "GET",
            "dataType" : "json",
          })
          .done(callback); //END AJAX
        }
    </script>

    <script>
        function showProvinces1(){
          //PARAMETERS
          var url = "{{ url('/') }}/api/province";
          var callback = function(result){
            $("#input_province").empty();
            for(var i=0; i<result.length; i++){
              $("#input_province").append(
                $('<option></option>')
                  .attr("value", ""+result[i].province_code)
                  .html(""+result[i].province)
              );
            }
            showAmphoes1();
          };
          //CALL AJAX
          ajax(url,callback);
        }

        function showAmphoes1(){
        //INPUT
        var province_code = $("#input_province").val();
        //PARAMETERS
        var url = "{{ url('/') }}/api/province/"+province_code+"/amphoe";
        var callback = function(result){
            //console.log(result);
            $("#input_amphoe").empty();
            for(var i=0; i<result.length; i++){
            $("#input_amphoe").append(
                $('<option></option>')
                .attr("value", ""+result[i].amphoe_code)
                .html(""+result[i].amphoe)
            );
            }
            showDistricts1();
        };
        //CALL AJAX
            ajax(url,callback);
        }
        function showDistricts1(){
            //INPUT
            var province_code = $("#input_province").val();
            var amphoe_code = $("#input_amphoe").val();
            //PARAMETERS
            var url = "{{ url('/') }}/api/province/"+province_code+"/amphoe/"+amphoe_code+"/district";
            var callback = function(result){
                //console.log(result);
                $("#input_district").empty();
                for(var i=0; i<result.length; i++){
                $("#input_district").append(
                    $('<option></option>')
                    .attr("value", ""+result[i].district_code)
                    .html(""+result[i].district)
                );
                }
                showZipcode1();
            };
            //CALL AJAX
            ajax(url,callback);
        }
        function showZipcode1(){
            //INPUT
            var province_code = $("#input_province").val();
            var amphoe_code = $("#input_amphoe").val();
            var district_code = $("#input_district").val();
            //PARAMETERS
            var url = "{{ url('/') }}/api/province/"+province_code+"/amphoe/"+amphoe_code+"/district/"+district_code;
            var callback = function(result){
                //console.log(result);
                for(var i=0; i<result.length; i++){
                $("#input_zipcode").val(result[i].zipcode);
                }
            };
            //CALL AJAX
            ajax(url,callback);
        }
    </script>

    <script>
        function showProvinces(){
          //PARAMETERS
          var url = "{{ url('/') }}/api/province";
          var callback = function(result){
            $("#province").empty();
            for(var i=0; i<result.length; i++){
              $("#province").append(
                $('<option></option>')
                  .attr("value", ""+result[i].province_code)
                  .html(""+result[i].province)
              );
            }
            showAmphoes();
          };
          //CALL AJAX
          ajax(url,callback);
        }

        function showAmphoes(){
        //INPUT
        var province_code = $("#province").val();
        //PARAMETERS
        var url = "{{ url('/') }}/api/province/"+province_code+"/amphoe";
        var callback = function(result){
            //console.log(result);
            $("#amphoe").empty();
            for(var i=0; i<result.length; i++){
            $("#amphoe").append(
                $('<option></option>')
                .attr("value", ""+result[i].amphoe_code)
                .html(""+result[i].amphoe)
            );
            }
            showDistricts();
        };
        //CALL AJAX
            ajax(url,callback);
        }
        function showDistricts(){
            //INPUT
            var province_code = $("#province").val();
            var amphoe_code = $("#amphoe").val();
            //PARAMETERS
            var url = "{{ url('/') }}/api/province/"+province_code+"/amphoe/"+amphoe_code+"/district";
            var callback = function(result){
                //console.log(result);
                $("#district").empty();
                for(var i=0; i<result.length; i++){
                $("#district").append(
                    $('<option></option>')
                    .attr("value", ""+result[i].district_code)
                    .html(""+result[i].district)
                );
                }
                showZipcode();
            };
            //CALL AJAX
            ajax(url,callback);
        }
        function showZipcode(){
            //INPUT
            var province_code = $("#province").val();
            var amphoe_code = $("#amphoe").val();
            var district_code = $("#district").val();
            //PARAMETERS
            var url = "{{ url('/') }}/api/province/"+province_code+"/amphoe/"+amphoe_code+"/district/"+district_code;
            var callback = function(result){
                //console.log(result);
                for(var i=0; i<result.length; i++){
                $("#zipcode").val(result[i].zipcode);
                }
            };
            //CALL AJAX
            ajax(url,callback);
        }
    </script>

</fieldset>

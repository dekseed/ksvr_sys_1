<h6>ข้อที่ 2 </h6>
<fieldset>
    <h4 class="form-section">2. ประวัติการได้รับวัคซีนป้องกันโรคติดเชื้อไวรัสโคโรนา 2019</h4>
    <div class="form-group ">
        <label style="color:mediumseagreen;font-weight:700;font-size:18px" for="birthdate"><i class="fa fa-folder-open-o"></i> การได้รับวัคซีน </label>
    </div>
    <div class="form-group">
        <div class="position-relative has-icon-left">
            <select class="form-control" id="basicSelect" onchange="showDiv2(this)" required>
                <option value="">-- ตัวเลือก --</option>
                <option value="0">ไม่เคยได้รับวัคซีน ❌</option>
                <option value="1">เคยได้รับวัคซีน ✔️</option>
            </select>
            <div class="form-control-position">
                <i class="fa fa-angle-double-right"></i>
            </div>
        </div>
        <div id="hidden_div1" class="mt-1" style="display:none;">
            <label style="color:teal;font-weight:700;font-size:15px" for="password-icon">กรณีเคยได้รับการฉีดวัคซีน</label>
            <div class="position-relative has-icon-left">
                <select class="form-control" id="basicSelect" onchange="showDiv1p(this), showDiv2p(this), showDiv3p(this), showDiv4p(this)" required>
                    <option value="">-- ตัวเลือก --</option>
                    <option value="1">วัคซีน 1 เข็ม</option>
                    <option value="2">วัคซีน 2 เข็ม</option>
                    <option value="3">วัคซีน 3 เข็ม</option>
                    <option value="4">วัคซีน 4 เข็ม</option>
                </select>
                <div class="form-control-position">
                    <i class="fa fa-list-ol"></i>
                </div>
            </div>
        </div>
        <div id="hidden_div1p" class="mt-1" style="display:none;">

                    <div class="row justify-content-around ">
                        <div class="col-12">
                            <div class="card border-success p-1">
                                <h2 style="color:rgb(53, 141, 141);font-size:16px" class="text-center mb-2"><i class="feather icon-clipboard"></i> รายละเอียดวัคซีนเข็มที่ 1</h2>
                                <div class="form-group">
                                    <div class="form-body">
                                        <div class="col-12">
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <span>ชื่อวัคซีนที่ได้รับ เข็มที่ 1</span>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="position-relative has-icon-left">
                                                                        {{-- <input type="text" id="brand" class="form-control" placeholder="ชื่อวัคซีน" name="name_vaccine_id_1" required> --}}
                                                                        <select class="form-control select2-l-1" name="name_vaccine_id_1"
                                                                                        id="basicSelect" required>
                                                                                        <option value=""> --- กรุณาเลือก ---</option>

                                                                                    @foreach ($name_vaccine as $roles)
                                                                                        <option value="{{ $roles->id }}">{{ $roles->name }}
                                                                                        </option>
                                                                                    @endforeach

                                                                                </select>
                                                                        <div class="form-control-position">
                                                                            <i class="fa fa-medkit"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <span>วันที่ได้รับวัคซีน</span>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="position-relative has-icon-left">
                                                                        <input type="date" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false"
                                                                            aria-owns="P428173107_root" placeholder="วันที่ได้รับวัคซีน" name="date_1" required>
                                                                        <div class="form-control-position">
                                                                            <i class="fa fa-calendar-check-o"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group row">
                                                                <div class="col-md-2">
                                                                    <span>สถานที่ได้รับวัคซีน</span>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <div class="position-relative has-icon-left">
                                                                        <input type="text" id="Vaccine" class="form-control" name="location_1" placeholder="สถานที่ได้รับวัคซีน"
                                                                            required>
                                                                        <div class="form-control-position">
                                                                            <i class="fa fa-building-o"></i>
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
                    </div>

                    <div id="hidden_div2p" style="display:none;">
                        <div class="card border-success p-1">
                            <h2 style="color:rgb(53, 141, 141);font-size:16px" class="text-center mb-2"><i
                                    class="feather icon-clipboard"></i> รายละเอียดวัคซีนเข็มที่ 2</h2>
                                    <div class="form-group">
                                        <div class="form-body">
                                            <div class="col-12">
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group row">
                                                                    <div class="col-md-4">
                                                                        <span>ชื่อวัคซีนที่ได้รับ เข็มที่ 2</span>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative has-icon-left">
                                                                            {{-- <input type="text" id="brand" class="form-control" placeholder="ชื่อวัคซีน" name="name_vaccine_id_2" required> --}}
                                                                            <select class="form-control select2-l-1" name="name_vaccine_id_2"
                                                                                        id="basicSelect" required>
                                                                                        <option value=""> --- กรุณาเลือก ---</option>

                                                                                    @foreach ($name_vaccine as $roles)
                                                                                        <option value="{{ $roles->id }}">{{ $roles->name }}
                                                                                        </option>
                                                                                    @endforeach

                                                                                </select>
                                                                            <div class="form-control-position">
                                                                                <i class="fa fa-medkit"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group row">
                                                                    <div class="col-md-4">
                                                                        <span>วันที่ได้รับวัคซีน</span>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative has-icon-left">
                                                                            <input type="date" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false"
                                                                                aria-owns="P428173107_root" placeholder="วันที่ได้รับวัคซีน" name="date_vaccine_2" required>
                                                                            <div class="form-control-position">
                                                                                <i class="fa fa-calendar-check-o"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group row">
                                                                    <div class="col-md-2">
                                                                        <span>สถานที่ได้รับวัคซีน</span>
                                                                    </div>
                                                                    <div class="col-md-10">
                                                                        <div class="position-relative has-icon-left">
                                                                            <input type="text" id="Vaccine" class="form-control" name="location_vaccine_2" placeholder="สถานที่ได้รับวัคซีน"
                                                                                required>
                                                                            <div class="form-control-position">
                                                                                <i class="fa fa-building-o"></i>
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

                    <div id="hidden_div3p" style="display:none;">
                        <div class="card border-success p-1">
                            <h2 style="color:rgb(53, 141, 141);font-size:16px" class="text-center mb-2"><i
                                    class="feather icon-clipboard"></i> รายละเอียดวัคซีนเข็มที่ 3</h2>
                                    <div class="form-group">
                                        <div class="form-body">
                                            <div class="col-12">
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group row">
                                                                    <div class="col-md-4">
                                                                        <span>ชื่อวัคซีนที่ได้รับ เข็มที่ 3</span>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative has-icon-left">
                                                                            {{-- <input type="text" id="brand" class="form-control" placeholder="ชื่อวัคซีน" name="name_vaccine_id_3" required> --}}
                                                                            <select class="form-control select2-l-1" name="name_vaccine_id_3"
                                                                                        id="basicSelect" required>
                                                                                        <option value=""> --- กรุณาเลือก ---</option>

                                                                                    @foreach ($name_vaccine as $roles)
                                                                                        <option value="{{ $roles->id }}">{{ $roles->name }}
                                                                                        </option>
                                                                                    @endforeach

                                                                                </select>
                                                                            <div class="form-control-position">
                                                                                <i class="fa fa-medkit"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group row">
                                                                    <div class="col-md-4">
                                                                        <span>วันที่ได้รับวัคซีน</span>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <div class="position-relative has-icon-left">
                                                                            <input type="date" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false"
                                                                                aria-owns="P428173107_root" placeholder="วันที่ได้รับวัคซีน" name="date_vaccine_3" required>
                                                                            <div class="form-control-position">
                                                                                <i class="fa fa-calendar-check-o"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group row">
                                                                    <div class="col-md-2">
                                                                        <span>สถานที่ได้รับวัคซีน</span>
                                                                    </div>
                                                                    <div class="col-md-10">
                                                                        <div class="position-relative has-icon-left">
                                                                            <input type="text" id="Vaccine" class="form-control" name="location_vaccine_3" placeholder="สถานที่ได้รับวัคซีน"
                                                                                required>
                                                                            <div class="form-control-position">
                                                                                <i class="fa fa-building-o"></i>
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

                        <div id="hidden_div4p" style="display:none;">
                            <div class="card border-success p-1">
                                <h2 style="color:rgb(53, 141, 141);font-size:16px" class="text-center mb-2"><i
                                        class="feather icon-clipboard"></i> รายละเอียดวัคซีนเข็มที่ 4</h2>
                                        <div class="form-group">
                                            <div class="form-body">
                                                <div class="col-12">
                                                        <div class="form-body">
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group row">
                                                                        <div class="col-md-4">
                                                                            <span>ชื่อวัคซีนที่ได้รับ เข็มที่ 4</span>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            <div class="position-relative has-icon-left">
                                                                                {{-- <input type="text" id="brand" class="form-control" placeholder="ชื่อวัคซีน" name="name_vaccine_id_4" required> --}}
                                                                                <select class="form-control select2-l-1" name="name_vaccine_id_4"
                                                                                        id="basicSelect" required>
                                                                                        <option value=""> --- กรุณาเลือก ---</option>

                                                                                    @foreach ($name_vaccine as $roles)
                                                                                        <option value="{{ $roles->id }}">{{ $roles->name }}
                                                                                        </option>
                                                                                    @endforeach

                                                                                </select>
                                                                                <div class="form-control-position">
                                                                                    <i class="fa fa-medkit"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group row">
                                                                        <div class="col-md-4">
                                                                            <span>วันที่ได้รับวัคซีน</span>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            <div class="position-relative has-icon-left">
                                                                                <input type="date" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false"
                                                                                    aria-owns="P428173107_root" placeholder="วันที่ได้รับวัคซีน" name="date_vaccine_4" required>
                                                                                <div class="form-control-position">
                                                                                    <i class="fa fa-calendar-check-o"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="form-group row">
                                                                        <div class="col-md-2">
                                                                            <span>สถานที่ได้รับวัคซีน</span>
                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            <div class="position-relative has-icon-left">
                                                                                <input type="text" id="Vaccine" class="form-control" name="location_vaccine_4" placeholder="สถานที่ได้รับวัคซีน"
                                                                                    required>
                                                                                <div class="form-control-position">
                                                                                    <i class="fa fa-building-o"></i>
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


                    </div>
        </div>
                <script type="text/javascript">
                    function showDiv1p(select) {
                    if (select.value == 1) {
                        document.getElementById('hidden_div1p').style.display = "block";
                    } else {
                        document.getElementById('hidden_div1p').style.display = "none";
                    }
                }

                function showDiv2p(select) {
                    if (select.value == 2) {
                        document.getElementById('hidden_div1p').style.display = "block";
                        document.getElementById('hidden_div2p').style.display = "block";
                    } else {
                        document.getElementById('hidden_div2p').style.display = "none";
                    }
                }

                function showDiv3p(select) {
                    if (select.value == 3) {
                        document.getElementById('hidden_div1p').style.display = "block";
                        document.getElementById('hidden_div2p').style.display = "block";
                        document.getElementById('hidden_div3p').style.display = "block";
                    } else {
                        document.getElementById('hidden_div3p').style.display = "none";
                    }
                }

                function showDiv4p(select) {
                    if (select.value == 4) {
                        document.getElementById('hidden_div1p').style.display = "block";
                        document.getElementById('hidden_div2p').style.display = "block";
                        document.getElementById('hidden_div3p').style.display = "block";
                        document.getElementById('hidden_div4p').style.display = "block";
                    } else {
                        document.getElementById('hidden_div4p').style.display = "none";
                    }
                }
                </script>

                <script type="text/javascript">
                    function showDiv2(select) {
                    if (select.value == 1) {
                        document.getElementById('hidden_div1').style.display = "block";
                    } else {
                        document.getElementById('hidden_div1').style.display = "none";
                    }
                }
                </script>
</fieldset>

{{-- <fieldset>
    <h4 class="form-section">2. ประวัติการได้รับวัคซีนป้องกันโรคติดเชื้อไวรัสโคโรนา 2019</h4>
    <div class="form-group ">
        <label style="color:mediumseagreen;font-weight:700;font-size:18px" for="birthdate"><i class="fa fa-folder-open-o"></i> การได้รับวัคซีน </label>
    </div>
    <div class="form-group">
        <div class="position-relative has-icon-left">
            <select class="form-control" id="basicSelect" onchange="showDiv2(this)" required>
                <option value="">-- ตัวเลือก --</option>
                <option value="0">ไม่เคยได้รับวัคซีน ❌</option>
                <option value="1">เคยได้รับวัคซีน ✔️</option>
            </select>
            <div class="form-control-position">
                <i class="fa fa-angle-double-right"></i>
            </div>
        </div>
        <div id="hidden_div1" style="display:none;">
            <div class="mt-2">
            <label style="color:teal;font-weight:700;font-size:15px">กรณีเคยได้รับการฉีดวัคซีน</label>
            </div>

            <div id="dynamicdiv">
                <div class="row justify-content-around">
                    <div class="col-12">
                        <div class="card border-success p-1">
                            <h2 style="color:rgb(53, 141, 141);font-size:16px" class="text-center mb-2"><i class="feather icon-clipboard"></i> รายละเอียดวัคซีนเข็มที่ 1</h2>
                            <div class="form-group">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>ชื่อวัคซีนที่ได้รับ เข็มที่ 1</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" class="form-control" placeholder="ชื่อวัคซีน" name="vaccine[0][name_vaccine_id]" required>
                                                        <div class="form-control-position">
                                                            <i class="fa fa-medkit"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>วันที่ได้รับวัคซีน</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="position-relative has-icon-left">
                                                        <input type="date" class="form-control pickadate picker__input" readonly="" id="P428173107"
                                                                        aria-haspopup="true" aria-readonly="false"
                                                                        aria-owns="P428173107_root"
                                                                        placeholder="วันที่ได้รับวัคซีน" name="vaccine[0][date_vaccine]"
                                                                        required>
                                                        <div class="form-control-position">
                                                            <i class="fa fa-calendar-check-o"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-2">
                                                    <span>สถานที่ได้รับวัคซีน</span>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" class="form-control" name="vaccine[0][location_vaccine]" placeholder="สถานที่ได้รับวัคซีน" required>
                                                        <div class="form-control-position">
                                                            <i class="fa fa-building-o"></i>
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

            <div class="col-12 mt-1">
                <div class="text-right">
                    <button type="button" name="addd" id="adddy_div" class="btn btn-info">เพิ่มข้อมูลวัคซ๊น</button>
                </div>
            </div>
        </div>

    </div>
                <script type="text/javascript">
                var t = 1;
                $("#adddy_div").click(function(){

                    ++t;

                    $("#dynamicdiv").append('<div id="dynamic_div1" class="row justify-content-around"><div class="col-12"><div class="card border-success p-1"><h2 style="color:rgb(53, 141, 141);font-size:16px" class="text-center mb-2"><i class="feather icon-clipboard"></i> รายละเอียดวัคซีนเข็มที่ '+t+'</h2><div class="form-group"><div class="form-body"><div class="row"><div class="col-12 col-sm-6"><div class="form-group row"><div class="col-md-4"><span>ชื่อวัคซีนที่ได้รับ เข็มที่ 1</span></div><div class="col-md-8"><div class="position-relative has-icon-left"><input type="text" class="form-control" placeholder="ชื่อวัคซีน" name="vaccine['+t+'][name_vaccine_id]" required><div class="form-control-position"><i class="fa fa-medkit"></i></div></div></div></div></div><div class="col-12 col-sm-6"><div class="form-group row"><div class="col-md-4"><span>วันที่ได้รับวัคซีน</span></div><div class="col-md-8"><div class="position-relative has-icon-left"><input type="date" class="form-control pickadate picker__input" readonly="" id="P428173107" aria-haspopup="true" aria-readonly="false" aria-owns="P428173107_root" placeholder="วันที่ได้รับวัคซีน" name="vaccine['+t+'][date_vaccine]"required><div class="form-control-position"><i class="fa fa-calendar-check-o"></i></div></div></div></div></div></div><div class="row"><div class="col-12"><div class="form-group row"><div class="col-md-2"><span>สถานที่ได้รับวัคซีน</span></div><div class="col-md-10"><div class="position-relative has-icon-left"><input type="text" class="form-control" name="vaccine['+t+'][location_vaccine]" placeholder="สถานที่ได้รับวัคซีน" required><div class="form-control-position"><i class="fa fa-building-o"></i></div></div></div></div></div></div></div></div></div></div><div class="col-12"><div class="text-right"><button type="button" class="btn btn-danger remove-div">ลบ</button></div></div></div>');

                    });

                    $(document).on('click', '.remove-div', function(){
                        --t;
                    $(this).parents('#dynamic_div1').remove();

                    });
                        function showDiv2(select) {
                            if (select.value == 1) {
                                document.getElementById('hidden_div1').style.display = "block";
                            } else {
                                document.getElementById('hidden_div1').style.display = "none";
                            }
                        }




                </script>
</fieldset> --}}

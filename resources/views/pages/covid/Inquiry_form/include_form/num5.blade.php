<h6>ข้อที่ 5</h6>
<fieldset>

    <div class="content-body">
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-md-12 col-12">
                    <div class="card ">
                        <div class="card-header">
                            <h4 class="mb-2 card-title"><i class="feather icon-file-text"></i> การค้นหาผู้สัมผัส <em
                                    style="color:red;font-size:12px">(รายชื่อผู้สัมผัสใกล้ชิดในระยะป่วย
                                    ระบุลักษณะการสัมผัส ถ้ามีอาการป่วยกรุณาระบุอาการด้วย )</em></h4>
                        </div>
                        <div id="dynamicTable">
                            <div class="table-responsive border rounded px-1">

                                <div class="my-1 form-body">
                                    <div class="row">

                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>ชื่อ-นามสกุล</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="position-relative has-icon-left">
                                                        <div class="input-field">
                                                            <input type="text" class="form-control input1"
                                                                placeholder="ชื่อ-นามสกุล" name="addmore[0][name]"
                                                                required>
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
                                                    <span>เพศ</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="position-relative has-icon-left">
                                                        <select class="form-control" name="addmore[0][sex_id]" required>
                                                            <option>เพศ</option>
                                                            <option value="0">ชาย</option>
                                                            <option value="1">หญิง</option>
                                                        </select>
                                                        <div class="form-control-position">
                                                            <i class="fa fa-venus-mars"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>อายุ</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="position-relative has-icon-left">
                                                        <input type="number" id="expenditure"
                                                            class="form-control input1" placeholder="อายุ"
                                                            name="addmore[0][age]" required>
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
                                                    <span>ที่อยู่</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="text-icon" class="form-control"
                                                            name="addmore[0][add]" placeholder="ที่อยู่">
                                                        <div class="form-control-position">
                                                            <i class="fa fa-map-pin"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>เบอร์โทรศัพท์</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="position-relative has-icon-left">
                                                        <input type="number" id="model" class="form-control input1"
                                                            placeholder="เบอร์โทรศัพท์ที่ติดต่อได้"
                                                            name="addmore[0][tel]" required>
                                                        <div class="form-control-position">
                                                            <i class="fa fa-tablet"></i>
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
                                <button type="button" name="add" id="add"
                                    class="btn btn-info">เพิ่มข้อมูลผู้สัมผัส</button>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

        </section>
    </div>
    <script type="text/javascript">
        var i = 0;

        $("#add").click(function(){

            ++i;

            $("#dynamicTable").append('<div id="test" class="table-responsive border rounded px-1 mt-1"><div class="my-1 form-body"><div class="row"><div class="col-12"><div class="form-group row"><div class="col-md-4"><span>ชื่อ-นามสกุล</span></div><div class="col-md-8"><div class="position-relative has-icon-left"><div class="input-field"><input type="text" class="form-control input1" placeholder="ชื่อ-นามสกุล" name="addmore['+i+'][name]" required><div class="form-control-position"><i class="fa fa-id-card-o"></i></div></div></div></div></div></div><div class="col-12"><div class="form-group row"><div class="col-md-4"><span>เพศ</span></div><div class="col-md-8"><div class="position-relative has-icon-left"><select class="form-control" name="addmore['+i+'][sex_id]" required><option>เพศ</option><option value="0">ชาย</option><option value="1">หญิง</option></select><div class="form-control-position"><i class="fa fa-venus-mars"></i></div></div></div></div></div><div class="col-12"><div class="form-group row"><div class="col-md-4"><span>อายุ</span></div><div class="col-md-8"><div class="position-relative has-icon-left"><input type="number" class="form-control input1" placeholder="อายุ" name="addmore['+i+'][age]" required><div class="form-control-position"><i class="fa fa-address-card-o"></i></div></div></div></div></div><div class="col-12"><div class="form-group row"><div class="col-md-4"><span>ที่อยู่</span></div><div class="col-md-8"><div class="position-relative has-icon-left"><input type="text" class="form-control" name="addmore['+i+'][add]" placeholder="ที่อยู่"><div class="form-control-position"><i class="fa fa-map-pin"></i></div></div></div></div></div><div class="col-12"><div class="form-group row"><div class="col-md-4"><span>เบอร์โทรศัพท์</span></div><div class="col-md-8"><div class="position-relative has-icon-left"><input type="number" class="form-control input1" placeholder="เบอร์โทรศัพท์ที่ติดต่อได้" name="addmore['+i+'][tel]" required><div class="form-control-position"><i class="fa fa-tablet"></i></div></div></div></div></div><div class="col-12"><div class="text-right"><button type="button" class="btn btn-danger remove-div">ลบ</button></div></div></div></div></div>');
        });

        $(document).on('click', '.remove-div', function(){
             $(this).parents('#test').remove();
        });

    </script>

</fieldset>
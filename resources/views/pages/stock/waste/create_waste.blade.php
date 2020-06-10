   <!-- add new sidebar starts -->
                    <div class="add-new-data-sidebar">
                        <div class="overlay-bg"></div>
                        <form method="POST" class="form form-vertical" action="{{ route('waste.store') }}" enctype="multipart/form-data">
                            {{method_field('POST')}}
                            {{csrf_field()}}
                            <div class="add-new-data">
                                <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                                    <div>
                                        <h4 class="text-uppercase">เพิ่มข้อมูลสป.สิ้นเปลือง</h4>
                                    </div>
                                    <div class="hide-data-sidebar">
                                        <i class="feather icon-x"></i>
                                    </div>
                                </div>

                                <div class="data-items pb-3">
                                    <div class="data-fields px-2 mt-1">
                                        <div class="row">
                                            <div class="col-sm-12 data-field-col">
                                                <label for="data-status"> หมวดหมู่ </label>
                                                <select id="cate_waste" name="cate_equipments" class="form-control" onchange="showmodel1()" required>
                                                    {{-- @foreach ($cateEquipments as $roles)
                                                    <option value="{{$roles->id}}">{{$roles->name}}</option>
                                                    @endforeach --}}
                                                        <option value="">เลือกหมวดหมู่</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-12 data-field-col">
                                                <label for="data-status"> ประเภท </label>
                                                <select class="form-control" name="kinds" id="wastes" required>

                                                    <option value="">เลือกประเภท</option>
                                                </select>
                                            </div>

                                            {{-- <div class="col-sm-12 data-field-col">
                                                <label for="number">หมายเลขเครื่อง / เลขทะเบียน</label>
                                                <input type="text" class="form-control" id="number" name="number" placeholder="12345678" required>
                                            </div> --}}
                                            {{-- <div class="col-sm-12 data-field-col">
                                                <label for="name">ชื่ออุปกรณ์</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="ชื่ออุปกรณ์" required>
                                            </div> --}}
                                            <div class="col-sm-12 data-field-col">
                                                <label for="brand">ยี่ห้อ</label>
                                                <input type="text" class="form-control" id="brand" name="brand" placeholder="ยี่ห้อ" required>
                                            </div>

                                            <div class="col-sm-12 data-field-col" id="model">
                                                <label for="model">รุ่น</label>
                                                <input type="text" class="form-control" name="model" placeholder="a123 ..">
                                            </div>
                                            {{-- <div class="col-sm-12 data-field-col" style="display: none;" id="model1">
                                                <label for="model">รุ่น</label>
                                                <select id="cate_waste" name="model1" class="form-control select2">
                                                    <option value="">รุ่น</option>
                                                    @foreach ($modelCartInk as $roles)
                                                        <option value="{{$roles->id}}">{{$roles->name}}</option>
                                                        @endforeach
                                                </select>
                                            </div> --}}
                                            <div class="col-sm-12 data-field-col">
                                                <label for="brand">จำนวน</label>
                                                <div class="row">
                                                    <div class="col-sm-8 col-12">
                                                        <input type="text" class="form-control" id="number" name="number" placeholder="จำนวน" required>
                                                    </div>
                                                    <div class="col-sm-4 col-12">
                                                        <select class="form-control select2" name="unit" required>
                                                        <option value="">จำนวนนับ</option>
                                                        <option value="อัน">อัน</option>
                                                        <option value="ชิ้น">ชิ้น</option>
                                                        <option value="ตลับ">ตลับ</option>
                                                        <option value="แผ่น">แผ่น</option>
                                                        <option value="กล่อง">กล่อง</option>
                                                        <option value="ชุด">ชุด</option>
                                                        <option value="ตัว">ตัว</option>
                                                    </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 data-field-col">
                                                <label for="sn">รอบเดือน</label>
                                                    <select id="projectinput6" name="round" class="form-control" required>
                                                        <option value="1">ตุลาคม - ธันวาคม</option>
                                                        <option value="2">มกราคม - มีนาคม</option>
                                                        <option value="3">เมษายน - มิถุนายน</option>
                                                        <option value="4">กรกฎาคม - กันยายน</option>
                                                    </select>
                                            </div>
                                            <div class="col-sm-12 data-field-col">
                                                <label for="detail">หมายเหตุ</label>
                                                <textarea class="form-control" name="detail" id="basicTextarea" rows="3" placeholder="รายละเอียด.." required></textarea>
                                            </div>
                                            <div class="col-sm-12 data-field-col data-list-upload">
                                                <label for="input-file">{{ __('อัพโหลดรูปภาพ') }}</label>
                                                {{-- <input type="file" class="form-control" name="file"> --}}
                                                <div class="custom-file">
                                                    <input type="file" name="file" class="custom-file-input" id="inputGroupFile01">
                                                    <label class="custom-file-label" for="inputGroupFile01"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                    <div class="add-data-btn">
                                        <button type="submit" class="btn btn-primary"><i class="feather icon-edit-1"></i> บันทึก</button>
                                    </div>
                                    <div class="cancel-data-btn">
                                        <button type="button" class="btn btn-outline-danger">ยกเลิก</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- add new sidebar ends -->

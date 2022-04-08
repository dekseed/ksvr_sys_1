<div class="modal fade" id="EditYear{{$item->year}}" tabindex="-1" role="dialog" aria-labelledby="EditYear{{$item->year}}" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <form id="store" class="form-horizontal" name="store" action="{{ route('check_up_detail.update', $item->id)}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">แก้ไขข้อมูลตรวจสุขภาพ ปี {{$item->year}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <div class="col-12">
                        <h2 class="text-center mb-2"><i class="feather icon-clipboard"></i> แก้ไขข้อมูลตรวจสุขภาพ ปี {{ $item->year + 543 }}</h2>
                    </div>
                    <div class="row match-height">
                        <div class="col-md-6 col-12">
                            <div class="card">

                                <div class="card-content">
                                    <div class="card-body">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-12 mb-1">
                                                        <label for="projectinput3">น้ำหนัก</label>
                                                        <fieldset>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="น้ำหนัก" aria-label="น้ำหนัก" value="{{ $item->weight }}"
                                                                            name="weight" id='weight' >
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">ก.ก.</span>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-6 col-12 mb-1">
                                                        <label for="projectinput3">ส่วนสูง</label>
                                                        <fieldset>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="ส่วนสูง" aria-label="ส่วนสูง" value="{{ $item->height }}"
                                                                            name="height" id='height' >
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">ซ.ม.</span>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-12 mb-1">
                                                        <label for="projectinput3">เส้นรอบเอว (วัดผ่านสะดือ)</label>
                                                        <fieldset>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="เส้นรอบเอว" aria-label="เส้นรอบเอว" value="{{ $item->waist }}"
                                                                            name="waist" id='waist' >
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">ซ.ม.</span>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-6 col-12 mb-1">
                                                        <label for="bmi">BMI</label>
                                                        <fieldset>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="BMI" aria-label="BMI" value="{{ $item->bmi }}"
                                                                            name="bmi" id='bmi' >
                                                            </div>
                                                        </fieldset>
                                                    </div>

                                                </div>

                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-3 col-12 mb-1">
                                                        <label for="projectinput3">ความดันโลหิต (วัดครั้งที่ 1)</label>
                                                        <fieldset>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="ความดันโลหิต" aria-label="ความดันโลหิต" value="{{ $item->pressure_1 }}"
                                                                            name="pressure_1" id='pressure_1' >
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">มม. ปรอท</span>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-3 col-12 mb-1">
                                                        <label for="projectinput3">ความดันโลหิต (วัดครั้งที่ 2)</label>
                                                        <fieldset>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="ความดันโลหิต" aria-label="ความดันโลหิต" value="{{ $item->pressure_2 }}"
                                                                            name="pressure_2" id='pressure_2' >
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">มม. ปรอท</span>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-3 col-12 mb-1">
                                                        <label for="projectinput3">ชีพจร ครั้งที่ 1</label>
                                                        <fieldset>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="ชีพจร" aria-label="ชีพจร" value="{{ $item->pulse_1 }}"
                                                                            name="pulse_1" id='pulse_1' >
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">ครั้ง/นาที</span>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-3 col-12 mb-1">
                                                        <label for="projectinput3">ชีพจร ครั้งที่ 2</label>
                                                        <fieldset>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control" placeholder="ชีพจร" aria-label="ชีพจร" value="{{ $item->pulse_2 }}"
                                                                            name="pulse_2" id='pulse_2' >
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">ครั้ง/นาที</span>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                    <p>*กรณีที่วัดความดันโลหิตครั้งแรกผิดปกติ ให้วัดครั้งที่ 2 หากค่าที่ได้ 2 ครั้งแตกต่างกันไม่เกิน 10 มม.ปรอท ให้ใช้ค่าที่ใกล้เคียงกับค่าปกติมากที่สุด แต่หากแตกต่างกันเกิน 10 มม.ปรอท ให้ใช้ค่าเฉลี่ยจากการวัดทั้ง 2 ครั้ง</p>
                                                <hr>
                                                <div class="row">
                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="projectinput3"><strong>X-Ray</strong></label>
                                                        <div class="col-md-9">
                                                                <fieldset class="ml-1">
                                                                <input type="radio" name="x_ray" value="0"
                                                                @if($item->x_ray == "0") checked="checked" @endif >
                                                                    <label for="input-radio-11">ไม่ได้ตรวจ</label>
                                                                </fieldset>
                                                                <fieldset class="ml-1">
                                                                <input type="radio" name="x_ray" value="1"
                                                                @if($item->x_ray == "1") checked="checked" @endif >
                                                                <label for="input-radio-12">ปกติ</label>
                                                                </fieldset>
                                                                <fieldset class="ml-1">
                                                                <input type="radio" name="x_ray" value="2"
                                                                @if($item->x_ray == "2") checked="checked" @endif >
                                                                <label for="input-radio-12">ผิดปกติ</label>
                                                                </fieldset>

                                                        </div>
                                                    </div>

                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="projectinput3"><strong>Urine Examination</strong></label>
                                                        <div class="col-md-9">
                                                                <fieldset class="ml-1">
                                                                <input type="radio" name="urine" value="0" onclick="urineedit2();"
                                                                @if($item->urine == "0") checked="checked" @endif >
                                                                    <label for="input-radio-11">ไม่ได้ตรวจ</label>
                                                                </fieldset>
                                                                <fieldset class="ml-1">
                                                                <input type="radio" name="urine" value="1" onclick="urineedit2();"
                                                                @if($item->urine == "1") checked="checked" @endif >
                                                                <label for="input-radio-12">ปกติ</label>
                                                                </fieldset>
                                                                <fieldset class="ml-1">
                                                                <input type="radio" name="urine" value="2" onclick="urineedit1();"
                                                                @if($item->urine == "2") checked="checked" @endif >
                                                                <label for="input-radio-12">ผิดปกติ</label>
                                                                @if($item->urine == "2")
                                                                <div id="div2_2" style="margin-bottom: .5rem;">
                                                                        <div class="form-group col-12 mb-2">
                                                                            <label for="projectinput3"><strong>Proteinurea > +1</strong></label>
                                                                            <div class="input-group">
                                                                            <fieldset class="ml-1">
                                                                                <input type="radio" name="urine_d1" value="0"
                                                                                @if($item->urine_d1 == "0") checked="checked" @endif >
                                                                                <label for="input-radio-11">ไม่มี</label>
                                                                            </fieldset>
                                                                            <fieldset class="ml-1">
                                                                                <input type="radio" name="urine_d1" value="1"
                                                                                @if($item->urine_d1 == "1") checked="checked" @endif >
                                                                                <label for="input-radio-12">มี</label>
                                                                            </fieldset>
                                                                            </div>
                                                                            <label for="projectinput3"><strong>Hematuria > +1</strong></label>
                                                                            <div class="input-group">
                                                                                <fieldset class="ml-1">
                                                                                <input type="radio" name="urine_d2" value="0"
                                                                                @if($item->urine_d2 == "0") checked="checked" @endif >
                                                                                    <label for="input-radio-11">ไม่มี</label>
                                                                                </fieldset>
                                                                                <fieldset class="ml-1">
                                                                                <input type="radio" name="urine_d2" value="1"
                                                                                @if($item->urine_d2  == "1") checked="checked" @endif >
                                                                                <label for="input-radio-12">มี</label>
                                                                                </fieldset>

                                                                            </div>
                                                                            <label for="projectinput3">ผิดปกติอื่นๆ</label>
                                                                                <fieldset>
                                                                                    <div class="input-group">
                                                                                        <div class="input-group-prepend">
                                                                                            <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                                        </div>
                                                                                        <input type="text" class="form-control" aria-label="" placeholder=""
                                                                                            name="urine_d" id='urine_d' value="{{ $item->urine_d }}" >

                                                                                    </div>
                                                                                </fieldset>

                                                                        </div>
                                                                    </div>
                                                                    @endif
                                                                </fieldset>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="projectinput3"><strong>CBC</strong></label>
                                                        <div class="col-md-9">
                                                            <fieldset class="ml-1">
                                                                <input type="radio" name="cbc" value="0" onclick="CBCEdit2();"
                                                                @if($item->cbc == "0") checked="checked" @endif >
                                                                <label for="input-radio-11">ไม่ได้ตรวจ</label>
                                                            </fieldset>
                                                            <fieldset class="ml-1">
                                                                <input type="radio" name="cbc" value="1" onclick="CBCEdit2();"
                                                                @if($item->cbc == "1") checked="checked" @endif >
                                                                <label for="input-radio-12">ปกติ</label>
                                                            </fieldset>
                                                            <fieldset class="ml-1">
                                                                <input type="radio" name="cbc" value="2" onclick="CBCEdit2();"
                                                                @if($item->cbc == "2") checked="checked" @endif >
                                                                <label for="input-radio-12">ผิดปกติ Hct < 40% และ Mcv < 78%</label>
                                                            </fieldset>
                                                            <fieldset class="ml-1">
                                                                <input type="radio" name="cbc" value="3" onclick="CBCEdit();"
                                                                @if($item->cbc == "3") checked="checked" @endif >
                                                                <label for="input-radio-12">ผิดปกติ อื่นๆ</label>
                                                                @if($item->cbc == "3")
                                                                    <div id="div1_1" style="margin-bottom: .5rem;">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <label for="projectinput3">(ระบุ)</label>
                                                                                    <fieldset>
                                                                                        <div class="input-group">
                                                                                            <div class="input-group-prepend">
                                                                                                <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                                            </div>
                                                                                            <input type="text" class="form-control" aria-label="" placeholder=""
                                                                                                name="cbc_d" id='cbc_d' value="{{ $item->cbc_d  }}" >

                                                                                        </div>
                                                                                    </fieldset>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6 mb-2">
                                                        <label for="projectinput3"><strong>pap smear</strong></label>
                                                        <div class="col-md-9">
                                                            <fieldset class="ml-1">
                                                                <input type="radio" name="pap" value="0"  onclick="j10_2_2edit();"
                                                                @if($item->pap  == "0") checked="checked" @endif >
                                                                <label for="input-radio-11">ไม่ได้ตรวจ</label>
                                                            </fieldset>
                                                            <fieldset class="ml-1">
                                                                <input type="radio" name="pap" value="1"  onclick="j10_2_2edit();"
                                                                @if($item->pap == "1") checked="checked" @endif >
                                                                <label for="input-radio-12">ปกติ</label>
                                                            </fieldset>
                                                            <fieldset class="ml-1">
                                                                <input type="radio" name="pap" value="2" onclick="j10_2_1edit();"
                                                                @if($item->pap  == "2") checked="checked" @endif >
                                                                <label for="input-radio-12">ผิดปกติ</label>
                                                                @if($item->pap  == "2")
                                                                <div id="div1_11" style="margin-bottom: .5rem;">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <label for="projectinput3">(ระบุ)</label>
                                                                            <fieldset>
                                                                                <div class="input-group">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                                                    </div>
                                                                                    <input type="text" class="form-control" aria-label="" placeholder=""
                                                                                    name="pap_d" id='pap_d' value="{{ $item->pap_d  }}" >


                                                                                </div>
                                                                            </fieldset>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
                                                <label class="mb-2" for="input-radio-12"><strong>ผลตรวจเลือด (Blood Chemistry)</strong></label>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="blood_glu">Glu (mg/dl)</label>
                                                    <div class="col-md-9">
                                                    <div class="position-relative has-icon-left controls">
                                                        <input type="text" id="name" class="form-control" placeholder="Glu (mg/dl)" name="blood_glu"
                                                        value="{{ $item->blood_glu }}"  >
                                                        <div class="form-control-position">
                                                        <i class="feather icon-edit-1"></i>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="blood_chol">Chol (mg/dl)</label>
                                                    <div class="col-md-9">
                                                    <div class="position-relative has-icon-left controls">
                                                        <input type="text" id="name" class="form-control" placeholder="Chol (mg/dl)" name="blood_chol"
                                                        value="{{ $item->blood_chol }}"  >
                                                        <div class="form-control-position">
                                                        <i class="feather icon-edit-1"></i>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="blood_tg">TG (mg/dl)</label>
                                                    <div class="col-md-9">
                                                    <div class="position-relative has-icon-left controls">
                                                        <input type="text" id="name" class="form-control" placeholder="TG (mg/dl)" name="blood_tg"
                                                        value="{{ $item->blood_tg }}"  >
                                                        <div class="form-control-position">
                                                        <i class="feather icon-edit-1"></i>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="blood_hdl">HDL-C (mg/dl)</label>
                                                    <div class="col-md-9">
                                                    <div class="position-relative has-icon-left controls">
                                                        <input type="text" id="name" class="form-control" placeholder="HDL-C (mg/dl)" name="blood_hdl"
                                                        value="{{ $item->blood_hdl }}" >
                                                        <div class="form-control-position">
                                                        <i class="feather icon-edit-1"></i>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="blood_ldl">LDL-C (mg/dl)</label>
                                                    <div class="col-md-9">
                                                    <div class="position-relative has-icon-left controls">
                                                        <input type="text" id="name" class="form-control" placeholder="LDL-C (mg/dl)" name="blood_ldl"
                                                        value="{{ $item->blood_ldl }}" >
                                                        <div class="form-control-position">
                                                        <i class="feather icon-edit-1"></i>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="blood_bun">BUN (mg/dl)</label>
                                                    <div class="col-md-9">
                                                    <div class="position-relative has-icon-left controls">
                                                        <input type="text" id="name" class="form-control" placeholder="BUN (mg/dl)" name="blood_bun"
                                                        value="{{ $item->blood_bun }}"  >
                                                        <div class="form-control-position">
                                                        <i class="feather icon-edit-1"></i>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="blood_cr">Cr (mg/dl)</label>
                                                    <div class="col-md-9">
                                                    <div class="position-relative has-icon-left controls">
                                                        <input type="text" id="name" class="form-control" placeholder="Cr (mg/dl)" name="blood_cr"
                                                        value="{{ $item->blood_cr }}"  >
                                                        <div class="form-control-position">
                                                        <i class="feather icon-edit-1"></i>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="blood_uric">Uric (mg/dl)</label>
                                                    <div class="col-md-9">
                                                    <div class="position-relative has-icon-left controls">
                                                        <input type="text" id="name" class="form-control" placeholder="Uric (mg/dl)" name="blood_uric"
                                                        value="{{ $item->blood_uric }}"  >
                                                        <div class="form-control-position">
                                                        <i class="feather icon-edit-1"></i>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="blood_ast">AST (U/L)</label>
                                                    <div class="col-md-9">
                                                    <div class="position-relative has-icon-left controls">
                                                        <input type="text" id="name" class="form-control" placeholder="AST (U/L)" name="blood_ast"
                                                        value="{{ $item->blood_ast }}"  >
                                                        <div class="form-control-position">
                                                        <i class="feather icon-edit-1"></i>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="blood_alt">ALT (U/L)</label>
                                                    <div class="col-md-9">
                                                    <div class="position-relative has-icon-left controls">
                                                        <input type="text" id="name" class="form-control" placeholder="ALT (U/L)" name="blood_alt"
                                                        value="{{ $item->blood_alt }}"  >
                                                        <div class="form-control-position">
                                                        <i class="feather icon-edit-1"></i>
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
                <div class="modal-footer text-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                        <button type="submit" class="btn btn-danger">แก้ไข</button>
                </div>
            </form>
        </div>
    </div>
</div>





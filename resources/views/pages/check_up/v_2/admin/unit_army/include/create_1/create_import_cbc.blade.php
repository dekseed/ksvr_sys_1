

<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_wbc">จำนวนเม็ดเลือดขาว (WBC)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control"
                placeholder="จำนวนเม็ดเลือดขาว(WBC)" name="blood_wbc">
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text"> (10^3/uL) (ค่าปกติ 4.5 - 10.6)</span>
                </div>
            </div>
        </div>
    </div>
</div>
@if($data->gender == '1')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_rbc">จำนวนเม็ดเลือดแดง (RBC)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control"
                placeholder="จำนวนเม็ดเลือดแดง (RBC)" name="blood_rbc">
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(4.5-6.0)</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if($data->gender == '2')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_glu">จำนวนเม็ดเลือดแดง (RBC)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control"
                placeholder="จำนวนเม็ดเลือดแดง (RBC)" name="blood_rbc">
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(4.2-5.2)</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if($data->gender == '1')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_hb">ความเข้มข้นฮีโมโกลบิน (Hb)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control"
                placeholder="ความเข้มข้นฮีโมโกลบิน (Hb)" name="blood_hb">
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text"> (g/dl) (13-18)</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if($data->gender == '2')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_hb">ความเข้มข้นฮีโมโกลบิน (Hb)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control"
                placeholder="ความเข้มข้นฮีโมโกลบิน (Hb)" name="blood_hb">
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text"> (g/dl) (12-16)</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if($data->gender == '1')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_hct">ปริมาณเม็ดเลือดแดงอัดแน่น (Hct)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control"
                placeholder="ปริมาณเม็ดเลือดแดงอัดแน่น (Hct)" name="blood_hct">
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text"> (%) (40.0-51.0)</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if($data->gender == '2')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_hct">ปริมาณเม็ดเลือดแดงอัดแน่น (Hct)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control"
                placeholder="ปริมาณเม็ดเลือดแดงอัดแน่น (Hct)" name="blood_hct">
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text"> (%) (35.2-46.4)</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if($data->gender == '1')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_mcv">ขนาดเม็ดเลือดแดง (MCV)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control"
                placeholder="จำนวนเม็ดเลือดขาว(WBC)" name="blood_mcv">
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text"> (fL) (80.0-94.5)</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if($data->gender == '2')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_mcv">ขนาดเม็ดเลือดแดง (MCV)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control"
                placeholder="ขนาดเม็ดเลือดแดง (MCV)" name="blood_mcv">
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text"> (fL) (82.2-99.5)</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_plt">จำนวนเกล็ดเลือด (PLT)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control"
                placeholder="จำนวนเกล็ดเลือด (PLT)" name="blood_plt">
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text"> (10^3/uL) (138-391)</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_ne">นิวโตรฟิล (NE)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control"
                placeholder="นิวโตรฟิล (NE)" name="blood_ne">
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text"> (%) (39.6 - 71.6)</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_ly">ลิมโฟซัยต์ (LY)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control"
                placeholder="ลิมโฟซัยต์ (LY)" name="blood_ly">
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text"> (%) (18.3 - 49)</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_mo">โมโนซัยต์ (MO)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control"
                placeholder="โมโนซัยต์ (MO)" name="blood_mo">
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text"> (%) (2.3 - 8.7)</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_eo">อิโอสิโนฟิล (EO)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control"
                placeholder="อิโอสิโนฟิล (EO)" name="blood_eo">
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text"> (%) (0 - 7.8)</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_ba">เบโซฟิล (BA)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control"
                placeholder="เบโซฟิล (BA)" name="blood_ba">
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text"> (%) (0 - 1.8)</span>
                </div>
            </div>
        </div>
    </div>
</div>

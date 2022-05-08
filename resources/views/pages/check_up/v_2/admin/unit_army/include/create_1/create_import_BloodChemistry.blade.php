

<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_glu">น้ำตาลในเลือด (FPG)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control"
                placeholder="น้ำตาลในเลือด (FPG)" name="blood_glu">
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(mg/dl) (ค่าปกติ 74-99)</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_chol">ไขมันโคเลสเตอรอล (Chol)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control"
                placeholder="ไขมันโคเลสเตอรอล (Chol)" name="blood_chol">
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(mg/dl) (ค่าปกติ < 200)</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_tg">ไขมันไตรกรีเซอไรด์ (TG)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control"
                placeholder="ไขมันไตรกรีเซอไรด์ (TG)" name="blood_tg">
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(mg/dl) (ค่าปกติ < 150)</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_bun">การทำงานของไต (BUN)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control"
                placeholder="การทำงานของไต (BUN)" name="blood_bun">
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(mg/dl) (ค่าปกติ 6 -20)</span>
                </div>
            </div>
        </div>
    </div>
</div>
@if($data->gender == '1')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_cr">การทำงานของไต (Cr)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control"
                placeholder="Cr (mg/dl)" name="blood_cr">
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(mg/dl) (ค่าปกติ 0.67-1.17)</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if($data->gender == '2')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_cr">การทำงานของไต (Cr)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control"
                placeholder="Cr (mg/dl)" name="blood_cr">
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(mg/dl) (ค่าปกติ 0.51-0.95)</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if($data->gender == '1')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_uric">ระดับกรดยูริค (Uric)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control"
                placeholder="ระดับกรดยูริค (Uric)" name="blood_uric">
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(mg/dl) (ค่าปกติ 3.4-7.0)</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if($data->gender == '2')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_uric">ระดับกรดยูริค (Uric)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control"
                placeholder="ระดับกรดยูริค (Uric)" name="blood_uric">
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(mg/dl) (ค่าปกติ 2.4-5.7)</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if($data->gender == '1')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_ast">การทำงานของตับ (AST)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-controlf"
                placeholder="การทำงานของตับ (AST)" name="blood_ast">
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(U/L) (ค่าปกติ 0-50)</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if($data->gender == '2')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_ast">การทำงานของตับ (AST)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control"
                placeholder="การทำงานของตับ (AST)" name="blood_ast">
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(U/L) (ค่าปกติ 0-35)</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if($data->gender == '1')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_alt">การทำงานของตับ (ALT)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control"
                placeholder="การทำงานของตับ (ALT)" name="blood_alt">
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(U/L) (ค่าปกติ 0-50)</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if($data->gender == '2')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_alt">การทำงานของตับ (ALT)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control"
                placeholder="การทำงานของตับ (ALT)" name="blood_alt">
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(U/L) (ค่าปกติ 0-35)</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<div class="col-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_hdl">HDL-C (mg/dl)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control" placeholder="HDL-C (mg/dl)" name="blood_hdl">
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">ค่าปกติ (M: >55, F: >65)</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_ldl">LDL-C (mg/dl)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control" placeholder="LDL-C (mg/dl)" name="blood_ldl">
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">ค่าปกติ (< 130)</span>
                </div>
            </div>
        </div>
    </div>
</div>

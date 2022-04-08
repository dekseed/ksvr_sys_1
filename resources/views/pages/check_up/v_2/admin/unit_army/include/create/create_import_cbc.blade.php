
@foreach ($lab_order as $roles)
@if($roles->lab_items_name_ref == 'WBC' && $roles->lab_items_normal_value_ref == '4.5 - 10.6')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_wbc">จำนวนเม็ดเลือดขาว (WBC)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($roles->lab_order_result >= '4.5' && $roles->lab_order_result  <= '10.6') @else is-invalid @endif"
                placeholder="จำนวนเม็ดเลือดขาว(WBC)" name="blood_wbc"
                value="{{ $roles->lab_order_result }}" >
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
@endif
@if($roles->lab_items_name_ref == 'RBC' && $roles->lab_items_normal_value_ref == 'M: 4.5-6.0,F:4.2-5.2' && $data->gender == '1')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_rbc">จำนวนเม็ดเลือดแดง (RBC)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($roles->lab_order_result >= '4.5' && $roles->lab_order_result  <= '6.0') @else is-invalid @endif"
                placeholder="จำนวนเม็ดเลือดแดง (RBC)" name="blood_rbc"
                value="{{ $roles->lab_order_result }}" >
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
@if($roles->lab_items_name_ref == 'RBC' && $roles->lab_items_normal_value_ref == 'M: 4.5-6.0,F:4.2-5.2' && $data->gender == '2')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_glu">จำนวนเม็ดเลือดแดง (RBC)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($roles->lab_order_result >= '4.2' && $roles->lab_order_result  <= '5.2') @else is-invalid @endif"
                placeholder="จำนวนเม็ดเลือดแดง (RBC)" name="blood_rbc"
                value="{{ $roles->lab_order_result }}" >
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
@if($roles->lab_items_name_ref == 'HGB' && $data->gender == '1')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_hb">ความเข้มข้นฮีโมโกลบิน (Hb)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($roles->lab_order_result >= '13' && $roles->lab_order_result  <= '18') @else is-invalid @endif"
                placeholder="ความเข้มข้นฮีโมโกลบิน (Hb)" name="blood_hb"
                value="{{ $roles->lab_order_result }}" >
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
@if($roles->lab_items_name_ref == 'HGB' && $data->gender == '2')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_hb">ความเข้มข้นฮีโมโกลบิน (Hb)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($roles->lab_order_result >= '11' && $roles->lab_order_result  <= '16') @else is-invalid @endif"
                placeholder="ความเข้มข้นฮีโมโกลบิน (Hb)" name="blood_hb"
                value="{{ $roles->lab_order_result }}" >
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
@if($roles->lab_items_name_ref == 'HCT' && $data->gender == '1')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_hct">ปริมาณเม็ดเลือดแดงอัดแน่น (Hct)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($roles->lab_order_result >= '40.0' && $roles->lab_order_result  <= '51.0') @else is-invalid @endif"
                placeholder="ปริมาณเม็ดเลือดแดงอัดแน่น (Hct)" name="blood_hct"
                value="{{ $roles->lab_order_result }}" >
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
@if($roles->lab_items_name_ref == 'HCT' && $data->gender == '2')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_hct">ปริมาณเม็ดเลือดแดงอัดแน่น (Hct)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($roles->lab_order_result >= '35.2' && $roles->lab_order_result  <= '46.4') @else is-invalid @endif"
                placeholder="ปริมาณเม็ดเลือดแดงอัดแน่น (Hct)" name="blood_hct"
                value="{{ $roles->lab_order_result }}" >
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
@if($roles->lab_items_name_ref == 'MCV' && $data->gender == '1')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_mcv">ขนาดเม็ดเลือดแดง (MCV)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($roles->lab_order_result >= '80' && $roles->lab_order_result  <= '94.5') @else is-invalid @endif"
                placeholder="จำนวนเม็ดเลือดขาว(WBC)" name="blood_mcv"
                value="{{ $roles->lab_order_result }}" >
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
@if($roles->lab_items_name_ref == 'MCV' && $data->gender == '2')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_mcv">ขนาดเม็ดเลือดแดง (MCV)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($roles->lab_order_result >= '82.2' && $roles->lab_order_result  <= '99.5') @else is-invalid @endif"
                placeholder="ขนาดเม็ดเลือดแดง (MCV)" name="blood_mcv"
                value="{{ $roles->lab_order_result }}" >
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
@if($roles->lab_items_name_ref == 'PLT.Count')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_plt">จำนวนเกล็ดเลือด (PLT)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($roles->lab_order_result >= '138' && $roles->lab_order_result  <= '391') @else is-invalid @endif"
                placeholder="จำนวนเกล็ดเลือด (PLT)" name="blood_plt"
                value="{{ $roles->lab_order_result }}" >
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
@endif
@if($roles->lab_items_name_ref == 'NE(%)')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_ne">นิวโตรฟิล (NE)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($roles->lab_order_result >= '39.6' && $roles->lab_order_result  <= '71.6') @else is-invalid @endif"
                placeholder="นิวโตรฟิล (NE)" name="blood_ne"
                value="{{ $roles->lab_order_result }}" >
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
@endif
@if($roles->lab_items_name_ref == 'LY(%)')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_ly">ลิมโฟซัยต์ (LY)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($roles->lab_order_result >= '18.3' && $roles->lab_order_result  <= '49') @else is-invalid @endif"
                placeholder="ลิมโฟซัยต์ (LY)" name="blood_ly"
                value="{{ $roles->lab_order_result }}" >
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
@endif
@if($roles->lab_items_name_ref == 'MO(%)')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_mo">โมโนซัยต์ (MO)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($roles->lab_order_result >= '2.3' && $roles->lab_order_result  <= '8.7') @else is-invalid @endif"
                placeholder="โมโนซัยต์ (MO)" name="blood_mo"
                value="{{ $roles->lab_order_result }}" >
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
@endif
@if($roles->lab_items_name_ref == 'EO(%)')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_eo">อิโอสิโนฟิล (EO)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($roles->lab_order_result >= '0' && $roles->lab_order_result  <= '7.8') @else is-invalid @endif"
                placeholder="อิโอสิโนฟิล (EO)" name="blood_eo"
                value="{{ $roles->lab_order_result }}" >
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
@endif
@if($roles->lab_items_name_ref == 'BA(%)')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_ba">เบโซฟิล (BA)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($roles->lab_order_result >= '0' && $roles->lab_order_result  <= '1.8') @else is-invalid @endif"
                placeholder="เบโซฟิล (BA)" name="blood_ba"
                value="{{ $roles->lab_order_result }}" >
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
@endif
@endforeach

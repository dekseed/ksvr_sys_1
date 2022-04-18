<div class="col-md-12 mt-1">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_wbc">จำนวนเม็ดเลือดขาว (WBC)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($item->report_check_up_cbc->blood_wbc >= '4.5' && $item->report_check_up_cbc->blood_wbc  <= '10.6') @else is-invalid @endif" disabled
                placeholder="จำนวนเม็ดเลือดขาว(WBC)" name="blood_wbc"
                value="{{ $item->report_check_up_cbc->blood_wbc }}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(4.5 - 10.6)</span>
                </div>
            </div>
        </div>
    </div>
</div>
@if( $data->gender == '1')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_rbc">จำนวนเม็ดเลือดแดง (RBC)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($item->report_check_up_cbc->blood_rbc >= '4.5' && $item->report_check_up_cbc->blood_rbc  <= '6.0') @else is-invalid @endif" disabled
                placeholder="จำนวนเม็ดเลือดแดง (RBC)" name="blood_rbc"
                value="{{ $item->report_check_up_cbc->blood_rbc }}" >
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
@else
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_rbc">จำนวนเม็ดเลือดแดง (RBC)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($item->report_check_up_cbc->blood_rbc >= '4.2' && $item->report_check_up_cbc->blood_rbc  <= '5.2') @else is-invalid @endif" disabled
                placeholder="จำนวนเม็ดเลือดแดง (RBC)" name="blood_rbc"
                value="{{ $item->report_check_up_cbc->blood_rbc }}" >
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
@if( $data->gender == '1')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_hb">ความเข้มข้นฮีโมโกลบิน (Hb)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($item->report_check_up_cbc->blood_hb >= '13' && $item->report_check_up_cbc->blood_hb  <= '18') @else is-invalid @endif" disabled
                placeholder="ความเข้มข้นฮีโมโกลบิน (Hb)" name="blood_hb"
                value="{{ $item->report_check_up_cbc->blood_hb }}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(13-18)</span>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_hb">ความเข้มข้นฮีโมโกลบิน (Hb)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($item->report_check_up_cbc->blood_hb >= '11' && $item->report_check_up_cbc->blood_hb  <= '16') @else is-invalid @endif" disabled
                placeholder="ความเข้มข้นฮีโมโกลบิน (Hb)" name="blood_hb"
                value="{{ $item->report_check_up_cbc->blood_hb }}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(11-16)</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if( $data->gender == '1')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_hct">ปริมาณเม็ดเลือดแดงอัดแน่น (Hct)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($item->report_check_up_cbc->blood_hct >= '40.0' && $item->report_check_up_cbc->blood_hct  <= '51.0') @else is-invalid @endif" disabled
                placeholder="ปริมาณเม็ดเลือดแดงอัดแน่น (Hct)" name="blood_hct"
                value="{{ $item->report_check_up_cbc->blood_hct }}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(40.0-51.0)</span>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_hct">ปริมาณเม็ดเลือดแดงอัดแน่น (Hct)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($item->report_check_up_cbc->blood_hct >= '35.2' && $item->report_check_up_cbc->blood_hct  <= '46.4') @else is-invalid @endif" disabled
                placeholder="ปริมาณเม็ดเลือดแดงอัดแน่น (Hct)" name="blood_hct"
                value="{{ $item->report_check_up_cbc->blood_hct }}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(35.2-46.4)</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if( $data->gender == '1')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_mcv">ขนาดเม็ดเลือดแดง (MCV)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($item->report_check_up_cbc->blood_mcv >= '80' && $item->report_check_up_cbc->blood_mcv  <= '94.5') @else is-invalid @endif" disabled
                placeholder="จำนวนเม็ดเลือดขาว(WBC)" name="blood_mcv"
                value="{{ $item->report_check_up_cbc->blood_mcv }}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(80.0-94.5)</span>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_mcv">ขนาดเม็ดเลือดแดง (MCV)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($item->report_check_up_cbc->blood_mcv >= '82.2' && $item->report_check_up_cbc->blood_mcv  <= '99.5') @else is-invalid @endif" disabled
                placeholder="จำนวนเม็ดเลือดขาว(WBC)" name="blood_mcv"
                value="{{ $item->report_check_up_cbc->blood_mcv }}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(82.2-99.5)</span>
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
                <input type="text" id="name" class="form-control @if($item->report_check_up_cbc->blood_plt >= '138' && $item->report_check_up_cbc->blood_plt  <= '391') @else is-invalid @endif" disabled
                placeholder="จำนวนเกล็ดเลือด (PLT)" name="blood_plt"
                value="{{ $item->report_check_up_cbc->blood_plt }}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(138-391)</span>
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
                <input type="text" id="name" class="form-control @if($item->report_check_up_cbc->blood_ne >= '39.6' && $item->report_check_up_cbc->blood_ne  <= '71.6') @else is-invalid @endif" disabled
                placeholder="นิวโตรฟิล (NE)" name="blood_ne"
                value="{{ $item->report_check_up_cbc->blood_ne }}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(39.6 - 71.6)</span>
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
                <input type="text" id="name" class="form-control @if($item->report_check_up_cbc->blood_ly >= '18.3' && $item->report_check_up_cbc->blood_ly  <= '49') @else is-invalid @endif" disabled
                placeholder="ลิมโฟซัยต์ (LY)" name="blood_ly"
                value="{{ $item->report_check_up_cbc->blood_ly }}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(18.3 - 49)</span>
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
                <input type="text" id="name" class="form-control @if($item->report_check_up_cbc->blood_mo >= '2.3' && $item->report_check_up_cbc->blood_mo  <= '8.7') @else is-invalid @endif" disabled
                placeholder="โมโนซัยต์ (MO)" name="blood_mo"
                value="{{ $item->report_check_up_cbc->blood_mo }}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(2.3 - 8.7)</span>
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
                <input type="text" id="name" class="form-control @if($item->report_check_up_cbc->blood_eo >= '0' && $item->report_check_up_cbc->blood_eo  <= '7.8') @else is-invalid @endif" disabled
                placeholder="อิโอสิโนฟิล (EO)" name="blood_eo"
                value="{{ $item->report_check_up_cbc->blood_eo }}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(0 - 7.8)</span>
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
                <input type="text" id="name" class="form-control @if($item->report_check_up_cbc->blood_ba >= '0' && $item->report_check_up_cbc->blood_ba  <= '1.8') @else is-invalid @endif" disabled
                placeholder="เบโซฟิล (BA)" name="blood_ba"
                value="{{ $item->report_check_up_cbc->blood_ba }}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(0 - 1.8)</span>
                </div>
            </div>
        </div>
    </div>
</div>

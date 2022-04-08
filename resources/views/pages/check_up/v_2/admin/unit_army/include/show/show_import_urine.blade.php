<div class="col-md-12 mt-1">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="urine_blood">เลือด (Blood)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($item->report_check_up_main_urine->urine_blood == 'Negative') @else is-invalid @endif"
                placeholder="เลือด (Blood)" name="urine_blood"
                value="{{ $item->report_check_up_main_urine->urine_blood }}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(Negative)</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="urine_ketone">คีโตน (Ketone)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($item->report_check_up_main_urine->urine_ketone == 'Negative') @else is-invalid @endif"
                placeholder="คีโตน (Ketone)" name="urine_ketone"
                value="{{ $item->report_check_up_main_urine->urine_ketone }}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(Negative)</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="urine_sugar">น้ำตาล (Sugar)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($item->report_check_up_main_urine->urine_sugar == 'Negative') @else is-invalid @endif"
                placeholder="น้ำตาล (Sugar)" name="urine_sugar"
                value="{{ $item->report_check_up_main_urine->urine_sugar }}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(Negative)</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="urine_protein">โปรตีน (Protein)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($item->report_check_up_main_urine->urine_protein == 'Negative') @else is-invalid @endif"
                placeholder="น้ำตาล (Sugar)" name="urine_protein"
                value="{{ $item->report_check_up_main_urine->urine_protein }}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(ค่าปกติ Negative)</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="urine_rbc">เม็ดเลือดแดง (RBC)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($item->report_check_up_main_urine->urine_rbc == 'Negative') @else is-invalid @endif"
                placeholder="เม็ดเลือดแดง (RBC)" name="urine_rbc"
                value="{{ $item->report_check_up_main_urine->urine_rbc }}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(ค่าปกติ Cells/HPF)</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="urine_wbc">เม็ดเลือดขาว (WBC)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($item->report_check_up_main_urine->urine_wbc == 'Negative') @else is-invalid @endif"
                placeholder="เม็ดเลือดขาว (WBC)" name="urine_wbc"
                value="{{ $item->report_check_up_main_urine->urine_wbc }}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(ค่าปกติ Cells/HPF)</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="urine_epi">เซลล์เยื่อบุ (Epi)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($item->report_check_up_main_urine->urine_epi == 'Negative') @else is-invalid @endif"
                placeholder="เซลล์เยื่อบุ (Epi)" name="urine_epi"
                value="{{ $item->report_check_up_main_urine->urine_epi }}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(ค่าปกติ Cells/HPF)</span>
                </div>
            </div>
        </div>
    </div>
</div>

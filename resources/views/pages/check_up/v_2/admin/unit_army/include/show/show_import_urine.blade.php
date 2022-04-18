<div class="col-md-12 mt-1">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="urine_blood">เลือด (Blood)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($item->report_check_up_main_urine->urine_blood == 'Negative') @else is-invalid @endif" disabled
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
                <input type="text" id="name" class="form-control @if($item->report_check_up_main_urine->urine_ketone == 'Negative') @else is-invalid @endif" disabled
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
                <input type="text" id="name" class="form-control @if($item->report_check_up_main_urine->urine_sugar == 'Negative') @else is-invalid @endif" disabled
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
                <input type="text" id="name" class="form-control @if($item->report_check_up_main_urine->urine_protein == 'Negative') @else is-invalid @endif" disabled
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
        <label class="col-md-3 label-control" for="urine_rbc_old">เม็ดเลือดแดง (RBC)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control
                @if($item->report_check_up_main_urine->urine_rbc_old == '0-1')
                @elseif($item->report_check_up_main_urine->urine_rbc_old == '1-2')
                @elseif($item->report_check_up_main_urine->urine_rbc_old == '3-5')
                @else is-invalid
                @endif" disabled
                placeholder="เม็ดเลือดแดง (RBC)" name="urine_rbc_old"
                value="{{ $item->report_check_up_main_urine->urine_rbc_old }}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">Cells/HPF (0-5)</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="urine_wbc_old">เม็ดเลือดขาว (WBC)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control
                @if($item->report_check_up_main_urine->urine_wbc_old == '0-1')
                @elseif($item->report_check_up_main_urine->urine_wbc_old == '1-2')
                @elseif($item->report_check_up_main_urine->urine_wbc_old == '3-5')
                @else is-invalid
                @endif
                disabled
                placeholder="เม็ดเลือดขาว (WBC)" name="urine_wbc_old"
                value="{{ $item->report_check_up_main_urine->urine_wbc_old }}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">Cells/HPF (0-5)</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="urine_epi_old">เซลล์เยื่อบุ (Epi)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control
                @if($item->report_check_up_main_urine->urine_epi_old == 'Sq.Epi.Cell : 0-1')
                @elseif($item->report_check_up_main_urine->urine_epi_old == 'Sq.Epi.Cell : 1-2')
                @elseif($item->report_check_up_main_urine->urine_epi_old == 'Sq.Epi.Cell : 3-5')
                @else is-invalid
                @endif
                disabled
                placeholder="เซลล์เยื่อบุ (Epi)" name="urine_epi_old"
                value="{{ $item->report_check_up_main_urine->urine_epi_old }}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">Cells/HPF (0-5)</span>
                </div>
            </div>
        </div>
    </div>
</div>

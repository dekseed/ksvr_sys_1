<div class="col-md-12 mt-1">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_glu">น้ำตาลในเลือด (FPG)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($item->report_check_up_main_detail_1->blood_glu >= '40' && $item->report_check_up_main_detail_1->blood_glu  <= '129') @else is-invalid @endif"
                placeholder="น้ำตาลในเลือด (FPG)" name="blood_glu"
                value="{{ $item->report_check_up_main_detail_1->blood_glu }}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(40-129)</span>
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
                <input type="text" id="name" class="form-control @if($item->report_check_up_main_detail_1->blood_chol <= '200') @else is-invalid @endif"
                placeholder="ไขมันโคเลสเตอรอล (Chol)" name="blood_chol"
                value="{{ $item->report_check_up_main_detail_1->blood_chol}}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(< 200)</span>
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
                <input type="text" id="name" class="form-control @if($item->report_check_up_main_detail_1->blood_tg <= '150') @else is-invalid @endif"
                placeholder="ไขมันไตรกรีเซอไรด์ (TG)" name="blood_tg"
                value="{{ $item->report_check_up_main_detail_1->blood_tg}}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(< 150)</span>
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
                <input type="text" id="name" class="form-control @if($item->report_check_up_main_detail_1->blood_bun >= '6' && $item->report_check_up_main_detail_1->blood_bun <= '20') @else is-invalid @endif"
                placeholder="การทำงานของไต (BUN)" name="blood_bun"
                value="{{ $item->report_check_up_main_detail_1->blood_bun}}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(6 -20)</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_cr">Cr (Cr)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($item->report_check_up_main_detail_1->blood_cr >= '0.67' && $item->report_check_up_main_detail_1->blood_cr <= '1.17') @else is-invalid @endif"
                placeholder="Cr (mg/dl)" name="blood_cr"
                value="{{ $item->report_check_up_main_detail_1->blood_cr}}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(0.67-1.17)</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_uric">ระดับกรดยูริค (Uric)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($item->report_check_up_main_detail_1->blood_uric >= '3.4' && $item->report_check_up_main_detail_1->blood_uric <= '7.0') @else is-invalid @endif"
                placeholder="ระดับกรดยูริค (Uric)" name="blood_uric"
                value="{{ $item->report_check_up_main_detail_1->blood_bun}}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(3.4-7.0)</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_ast">การทำงานของตับ (AST)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($item->report_check_up_main_detail_1->blood_ast >= '0' && $item->report_check_up_main_detail_1->blood_ast <= '50') @else is-invalid @endif"
                placeholder="การทำงานของตับ (AST)" name="blood_ast"
                value="{{ $item->report_check_up_main_detail_1->blood_ast}}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(0-50)</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_alt">การทำงานของตับ (ALT)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($item->report_check_up_main_detail_1->blood_alt >= '0' && $item->report_check_up_main_detail_1->blood_alt <= '50') @else is-invalid @endif"
                placeholder="การทำงานของตับ (ALT)" name="blood_alt"
                value="{{ $item->report_check_up_main_detail_1->blood_alt}}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(0-50)</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_hdl">HDL-C (mg/dl)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control" placeholder="HDL-C (mg/dl)" name="blood_hdl"
                value="{{ $item->report_check_up_main_detail_1->blood_hdl }}">
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(M: >55, F: >65)</span>
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
                <input type="text" id="name" class="form-control" placeholder="LDL-C (mg/dl)" name="blood_ldl"
                value="{{ $item->report_check_up_main_detail_1->blood_ldl }}" >
                <div class="form-control-position">
                <i class="feather icon-edit-1"></i>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">(< 130)</span>
                </div>
            </div>
        </div>
    </div>
</div>

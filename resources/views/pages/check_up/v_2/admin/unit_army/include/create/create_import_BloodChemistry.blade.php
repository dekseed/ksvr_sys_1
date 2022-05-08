
@foreach ($lab_order as $roles)
@if($roles->lab_items_name_ref == 'Plasma Glucose (FPG)')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_glu">น้ำตาลในเลือด (FPG)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($roles->lab_order_result >= '74' && $roles->lab_order_result  <= '99') @else is-invalid @endif"
                placeholder="น้ำตาลในเลือด (FPG)" name="blood_glu"
                value="{{ $roles->lab_order_result }}" >
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
@endif
@if($roles->lab_items_name_ref == 'Cholesterol')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_chol">ไขมันโคเลสเตอรอล (Chol)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($roles->lab_order_result <= '200') @else is-invalid @endif"
                placeholder="ไขมันโคเลสเตอรอล (Chol)" name="blood_chol"
                value="{{ $roles->lab_order_result}}" >
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
@endif
@if($roles->lab_items_name_ref == 'TRIG')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_tg">ไขมันไตรกรีเซอไรด์ (TG)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($roles->lab_order_result <= '150') @else is-invalid @endif"
                placeholder="ไขมันไตรกรีเซอไรด์ (TG)" name="blood_tg"
                value="{{ $roles->lab_order_result}}" >
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
@endif
@if($roles->lab_items_name_ref == 'BUN')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_bun">การทำงานของไต (BUN)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($roles->lab_order_result >= '6' && $roles->lab_order_result <= '20') @else is-invalid @endif"
                placeholder="การทำงานของไต (BUN)" name="blood_bun"
                value="{{ $roles->lab_order_result}}" >
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
@endif
@if($roles->lab_items_name_ref == 'Creatinine' && $data->gender == '1')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_cr">การทำงานของไต (Cr)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($roles->lab_order_result >= '0.67' && $roles->lab_order_result <= '1.17') @else is-invalid @endif"
                placeholder="Cr (mg/dl)" name="blood_cr"
                value="{{ $roles->lab_order_result}}" >
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
@if($roles->lab_items_name_ref == 'Creatinine' && $data->gender == '2')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_cr">การทำงานของไต (Cr)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($roles->lab_order_result >= '0.51' && $roles->lab_order_result <= '0.95') @else is-invalid @endif"
                placeholder="Cr (mg/dl)" name="blood_cr"
                value="{{ $roles->lab_order_result}}" >
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
@if($roles->lab_items_name_ref == 'URIC ACID' && $data->gender == '1')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_uric">ระดับกรดยูริค (Uric)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($roles->lab_order_result >= '3.4' && $roles->lab_order_result <= '7.0') @else is-invalid @endif"
                placeholder="ระดับกรดยูริค (Uric)" name="blood_uric"
                value="{{ $roles->lab_order_result}}" >
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
@if($roles->lab_items_name_ref == 'URIC ACID' && $data->gender == '2')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_uric">ระดับกรดยูริค (Uric)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($roles->lab_order_result >= '2.4' && $roles->lab_order_result <= '5.7') @else is-invalid @endif"
                placeholder="ระดับกรดยูริค (Uric)" name="blood_uric"
                value="{{ $roles->lab_order_result}}" >
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
@if($roles->lab_items_name_ref == 'SGOT/AST' && $data->gender == '1')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_ast">การทำงานของตับ (AST)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($roles->lab_order_result >= '0' && $roles->lab_order_result <= '50') @else is-invalid @endif"
                placeholder="การทำงานของตับ (AST)" name="blood_ast"
                value="{{ $roles->lab_order_result}}" >
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
@if($roles->lab_items_name_ref == 'SGOT/AST' && $data->gender == '2')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_ast">การทำงานของตับ (AST)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($roles->lab_order_result >= '0' && $roles->lab_order_result <= '35') @else is-invalid @endif"
                placeholder="การทำงานของตับ (AST)" name="blood_ast"
                value="{{ $roles->lab_order_result}}" >
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
@if($roles->lab_items_name_ref == 'SGPT/ALT' && $data->gender == '1')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_alt">การทำงานของตับ (ALT)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($roles->lab_order_result >= '0' && $roles->lab_order_result <= '50') @else is-invalid @endif"
                placeholder="การทำงานของตับ (ALT)" name="blood_alt"
                value="{{ $roles->lab_order_result}}" >
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
@if($roles->lab_items_name_ref == 'SGPT/ALT' && $data->gender == '2')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_alt">การทำงานของตับ (ALT)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($roles->lab_order_result >= '0' && $roles->lab_order_result <= '35') @else is-invalid @endif"
                placeholder="การทำงานของตับ (ALT)" name="blood_alt"
                value="{{ $roles->lab_order_result}}" >
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
@endforeach
@if($lab_order > '0')
<div class="col-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="blood_hdl">HDL-C (mg/dl)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control" placeholder="HDL-C (mg/dl)" name="blood_hdl"
                value="{{ $data->blood_hdl }}">
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
                <input type="text" id="name" class="form-control" placeholder="LDL-C (mg/dl)" name="blood_ldl"
                value="" >
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
@endif


@foreach ($lab_order as $roles)
@if($roles->lab_items_name_ref == 'BLOOD')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="urine_blood">เลือด (Blood)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($roles->lab_order_result == 'Negative') @else is-invalid @endif"
                placeholder="เลือด (Blood)" name="urine_blood"
                value="{{ $roles->lab_order_result }}" >
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
@endif
@if($roles->lab_items_name_ref == 'KETONE')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="urine_ketone">คีโตน (Ketone)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($roles->lab_order_result == 'Negative') @else is-invalid @endif"
                placeholder="คีโตน (Ketone)" name="urine_ketone"
                value="{{ $roles->lab_order_result }}" >
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
@endif
@if($roles->lab_items_name_ref == 'GLU')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="urine_sugar">น้ำตาล (Sugar)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($roles->lab_order_result == 'Negative') @else is-invalid @endif"
                placeholder="น้ำตาล (Sugar)" name="urine_sugar"
                value="{{ $roles->lab_order_result }}" >
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
@endif
@if($roles->lab_items_name_ref == 'PROTEIN')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="urine_protein">โปรตีน (Protein)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($roles->lab_order_result == 'Negative') @else is-invalid @endif"
                placeholder="น้ำตาล (Sugar)" name="urine_protein"
                value="{{ $roles->lab_order_result }}" >
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
@endif
@if($roles->lab_items_name_ref == 'RBC' && $roles->lab_items_normal_value_ref == '0-5')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="urine_rbc">เม็ดเลือดแดง (RBC)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($lab_stool_rbc == 'Negative') @else is-invalid @endif"
                placeholder="เม็ดเลือดแดง (RBC)" name="urine_rbc"
                value="{{ $roles->lab_order_result }}" >
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
@endif
@if($roles->lab_items_name_ref == 'WBC' && $roles->lab_items_normal_value_ref == '0-5')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="urine_wbc">เม็ดเลือดขาว (WBC)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($lab_stool_wbc == 'Negative') @else is-invalid @endif"
                placeholder="เม็ดเลือดขาว (WBC)" name="urine_wbc"
                value="{{ $roles->lab_order_result }}" >
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
@endif
@if($roles->lab_items_name_ref == 'EPITHERIAL' && $roles->lab_items_normal_value_ref == '0-5')
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-md-3 label-control" for="urine_epi">เซลล์เยื่อบุ (Epi)</label>
        <div class="col-md-9">
            <div class="position-relative has-icon-left input-group controls">
                <input type="text" id="name" class="form-control @if($lab_order_epi == 'Negative') @else is-invalid @endif"
                placeholder="เซลล์เยื่อบุ (Epi)" name="urine_epi"
                value="{{ $roles->lab_order_result }}" >
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
@endif
@endforeach

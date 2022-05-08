<div class="modal fade" id="import_his" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <form id="store" class="form-horizontal" name="store" action="{{ route('check_up.search_his')}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('POST') }}
                <input type="hidden" name="user_id" value="{{ $data->id }}">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1"><i class="feather icon-save"></i> ข้อมูลสุขภาพ</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                        <div class="container">
                            <select id="filler_year" name="year" class="form-control mb-1" placeholder="เลือกปี" required>
                                <option value="">เลือกวันที่</option>
                               @foreach ($lab_head as $item)
                               <option value='{{ $item->vn }} {{  $item->lab_order_number }} {{  $item->receive_date }}'>วันที่ {{ DateThai3($item->receive_date) }}</option>
                               @endforeach
                            </select>
                            <hr>

                        </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> ตกลง</button>
                    <button type="button" class="btn grey mr-1 btn-outline-secondary" data-dismiss="modal">ยกเลิก</button>
                </div>
            </form>
        </div>
    </div>
</div>

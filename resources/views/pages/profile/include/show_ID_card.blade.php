<div class="row" id="table-hover-animation">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">ข้อมูลการทำบัตรประจำตัว</h4>
                @if($status_card == '0')
                <div class="col-12 text-right">
                    <button type="button" class="btn btn-info mr-sm-1 mb-1 mb-sm-0" data-toggle="modal" data-target="#create_IDCard{{ Auth::user()->id }}">เพิ่มข้อมูล</button>
                </div>
                @endif
            </div>
            <div class="card-content">
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-hover-animation mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center" scope="col">ลำดับที่</th>
                                    <th class="text-center" scope="col">หมวดหมู่</th>
                                    <th class="text-center" scope="col">ประเภท</th>
                                    <th class="text-center" scope="col">สถานะ</th>
                                    <th class="text-center" scope="col">ตัวเลือก</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1 ?>
                                @if(is_null($data_idCard))
                                <tr>
                                    <th colspan="4" class="text-center">ไม่มีข้อมูล</th>
                                </tr>
                                @else
                                @foreach($data_idCard as $item)
                                <tr>
                                    <th scope="row" class="text-center">{{ $i++ }}</th>
                                    <td>{{ $item->iDCard->cateIDCard->name }}</td>
                                    <td>{{ $item->iDCard->cateStatusIDCard->name }}</td>
                                    <td  class="text-center">{{ $item->statusIDCard->name }}</td>
                                    <td class="text-center">

                                        <span class="edit">
                                            {{-- <a class="btn btn-icon btn-success waves-effect light" href="{{ route('user.show_idCard', $item->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="ดูข้อมูล"><i class="feather icon-monitor"></i></a> --}}
                                            <a class="btn btn-info btn-icon" data-toggle="modal" data-target="#show_IDCard{{  $item->id }}"><i class="feather icon-monitor"></i></a>

                                        </span>

                                        @if($item->status_i_d_cards_id == '1')
                                        <span class="delete">
                                            <a class="btn btn-icon btn-danger waves-effect light" data-href="#" data-toggle="modal" title=""
                                               data-target="#delete_IDCard<?= $item->id ?>"><i class="feather icon-trash"></i></a>
                                            </span>
                                        @elseif($item->status_i_d_cards_id == '3')
                                            <span class="delete">
                                                <a class="btn btn-icon btn-danger waves-effect light" data-href="#" data-toggle="modal" title=""
                                                   data-target="#delete_IDCard<?= $item->id ?>"><i class="feather icon-trash"></i></a>
                                            </span>
                                        @endif

                                    </td>
                                </tr>
                                <div class="modal fade text-left" id="show_IDCard{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="create_IDCard{{ Auth::user()->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="create_IDCard{{  $item->id }}"><i class="feather icon-message-square mr-50 "></i> ข้อมูลบัตรประจำตัว</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{route('user.update_idCard', $item->iDCard->id)}}" method="POST" novalidate>
                                                {{ csrf_field() }}
                                                {{ method_field('PUT') }}
                                                <input type="hidden" name="re_id" value="{{ $item->id }}">
                                                <input type="hidden" name="receive_timeline_id_cards_id" value="{{$item->receive_timeline_id_cards_id}}">

                                                <div class="modal-body">
                                                    <h3 class="modal-title text-center mb-1">ข้อมูลบัตรประจำตัว</h3>
                                                    <div class="row match-height">
                                                        <div class="col-md-6 col-12">
                                                            <div class="card-header">
                                                                <h4 class="card-title">ข้อมูลแจ้งทำบัตรประจำตัว</h4>
                                                            </div>
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    <div class="form-body">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <div class="form-group">
                                                                                    <div class="controls">
                                                                                        <label for="account-old-password">หมวดหมู่</label>
                                                                                        <select class="select2 form-control" name="cate_idCard" {{ $item->rec_timeline_IdCard->status_id_cards == '1' ? 'required' : 'disabled'}}>
                                                                                            <option value="">หมวดหมู่</option>
                                                                                            @foreach ($cate_idCard as $roles)
                                                                                            <option {{  $item->iDCard->cate_i_d_cards_id == $roles->id ? 'selected' : '' }}
                                                                                                    value="{{$roles->id}}">{{$roles->name}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <div class="form-group">
                                                                                    <div class="controls">
                                                                                        <label for="account-old-password">ประเภท</label>
                                                                                        <select class="select2 form-control" name="cate_Status" {{ $item->rec_timeline_IdCard->status_id_cards == '1' ? 'required' : 'disabled'}}>
                                                                                            <option value="">ประเภท</option>
                                                                                            @foreach ($cate_Status as $roles)
                                                                                            <option {{ $item->iDCard->cate_status_i_d_cards_id == $roles->id ? 'selected' : '' }}
                                                                                                    value="{{$roles->id}}">{{$roles->name}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <div class="form-group">
                                                                                    <div class="controls">
                                                                                        <label for="account-old-password">คำนำหน้า</label>
                                                                                        <select class="select2 form-control" data-validation-required-message="เลือกคำนำหน้า" name="title_name_id"  {{ $item->rec_timeline_IdCard->status_id_cards == '1' ? 'required' : 'disabled'}}>
                                                                                            <option value="">คำนำหน้า</option>
                                                                                            @foreach ($titleNames as $roles)
                                                                                            <option {{ $item->iDCard->title_name_id == $roles->id ? 'selected' : '' }}
                                                                                                    value="{{$roles->id}}">{{$roles->name}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <div class="form-group">
                                                                                    <div class="controls">
                                                                                        <label for="account-new-password">ชื่อหน้า</label>
                                                                                        <input type="text" name="first_name" class="form-control" placeholder="ชื่อหน้า" data-validation-required-message="ป้อนชื่อหน้า" value="{{ $item->iDCard->first_name_thai }}" {{ $item->rec_timeline_IdCard->status_id_cards == '1' ? 'required' : 'disabled'}}>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <div class="form-group">
                                                                                    <div class="controls">
                                                                                        <label for="account-retype-new-password">นามสกุล</label>
                                                                                        <input type="text" name="last_name" class="form-control" placeholder="นามสกุล" data-validation-required-message="ป้อนนามสกุล" value="{{ $item->iDCard->last_name_thai }}" {{ $item->rec_timeline_IdCard->status_id_cards == '1' ? 'required' : 'disabled'}}>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <div class="form-group">
                                                                                    <div class="controls">
                                                                                        <label for="account-retype-new-password">ชื่อหน้า (ภาษาอังกฤษ)</label>
                                                                                        <input type="text" name="first_name_eng" class="form-control" placeholder="ชื่อหน้า (ภาษาอังกฤษ)" data-validation-required-message="ป้อนชื่อหน้า (ภาษาอังกฤษ)" value="{{ $item->iDCard->first_name_eng }}" {{ $item->rec_timeline_IdCard->status_id_cards == '1' ? 'required' : 'disabled'}}>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <div class="form-group">
                                                                                    <div class="controls">
                                                                                        <label for="account-retype-new-password">นามสกุล (ภาษาอังกฤษ)</label>
                                                                                        <input type="text" name="last_name_eng" class="form-control" placeholder="นามสกุล (ภาษาอังกฤษ)" data-validation-required-message="ป้อนนามสกุล (ภาษาอังกฤษ)" value="{{ $item->iDCard->last_name_eng }}" {{ $item->rec_timeline_IdCard->status_id_cards == '1' ? 'required' : 'disabled'}}>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <div class="form-group">
                                                                                    <div class="controls">
                                                                                        <label for="account-retype-new-password">ตำแหน่ง</label>
                                                                                        <input type="text" name="position" class="form-control" placeholder="ตำแหน่ง" data-validation-required-message="ป้อนตำแหน่ง" value="{{ $item->iDCard->position }}" {{ $item->rec_timeline_IdCard->status_id_cards == '1' ? 'required' : 'disabled'}}>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <fieldset class="checkbox">
                                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox" name="new_pic" value="1" {{ $item->iDCard->new_pic == '1' ? 'checked' : ''}} {{ $item->rec_timeline_IdCard->status_id_cards == '1' ? 'required' : 'disabled'}}>
                                                                                        <span class="vs-checkbox">
                                                                                            <span class="vs-checkbox--check">
                                                                                                <i class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>
                                                                                        <span class=""> ถ่ายรูปใหม่</span>
                                                                                    </div>
                                                                                </fieldset>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-12">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h4 class="card-title">Timeline</h4>
                                                                </div>
                                                                <div class="card-content">
                                                                    <div class="card-body">
                                                                        <ul class="activity-timeline timeline-left list-unstyled">
                                                                            @if($item->rec_timeline_IdCard->status_4_id == '5')
                                                                            <li>
                                                                                <div class="timeline-icon bg-success">
                                                                                    <i class="feather icon-check font-medium-2"></i>
                                                                                </div>
                                                                                <div class="timeline-info">
                                                                                    <p class="font-weight-bold">เสร็จสิ้นกระบวนการ</p>
                                                                                    <span>ตรวจสอบข้อมูล/รับบัตรประจำตัว เรียบร้อย!</span>
                                                                                </div>
                                                                                <small class="">{{DateThai2(date('d-m-Y h:i:s A', strtotime($item->rec_timeline_IdCard->date_status_4)))}}</small>
                                                                            </li>
                                                                            {{-- @elseif($item->rec_timeline_IdCard->status_4_id == '6')
                                                                            <li>
                                                                                <div class="timeline-icon bg-danger">
                                                                                    <i class="feather icon-alert-circle font-medium-2"></i>
                                                                                </div>
                                                                                <div class="timeline-info">
                                                                                    <p class="font-weight-bold">ยกเลิกรายการ</p>
                                                                                    <span>ยกเลิกรายการเนื่องจากสาเหตุอื่นๆ</span>
                                                                                </div>
                                                                                <small class="">{{DateThai2(date('d-m-Y h:i:s A', strtotime($item->rec_timeline_IdCard->date_status_4)))}}</small>
                                                                            </li> --}}
                                                                            @endif
                                                                            @if($item->rec_timeline_IdCard->status_3_id == '4')
                                                                            <li>
                                                                                <div class="timeline-icon bg-warning">
                                                                                    <i class="feather icon-check font-medium-2"></i>
                                                                                </div>
                                                                                <div class="timeline-info">
                                                                                    <p class="font-weight-bold">ดำเนินการเรียบร้อย</p>
                                                                                    <span>รอการตรวจสอบข้อมูล</span>
                                                                                </div>
                                                                                <small class="">{{DateThai2(date('d-m-Y h:i:s A', strtotime($item->rec_timeline_IdCard->date_status_3)))}}</small>
                                                                            </li>
                                                                            {{-- @elseif($item->rec_timeline_IdCard->status_3_id == '6')
                                                                            <li>
                                                                                <div class="timeline-icon bg-danger">
                                                                                    <i class="feather icon-alert-circle font-medium-2"></i>
                                                                                </div>
                                                                                <div class="timeline-info">
                                                                                    <p class="font-weight-bold">ยกเลิกรายการ</p>
                                                                                    <span>ยกเลิกรายการเนื่องจากสาเหตุอื่นๆ</span>
                                                                                </div>
                                                                                <small class="">{{DateThai2(date('d-m-Y h:i:s A', strtotime($item->rec_timeline_IdCard->date_status_3)))}}</small>
                                                                            </li> --}}
                                                                            @endif
                                                                            @if($item->rec_timeline_IdCard->status_2_id == '2')
                                                                            <li>
                                                                                <div class="timeline-icon bg-success">
                                                                                    <i class="feather icon-cloud-rain font-medium-2"></i>
                                                                                </div>
                                                                                <div class="timeline-info">
                                                                                    <p class="font-weight-bold">กำลังดำเนินการ</p>
                                                                                    <span>เจ้าหน้าที่กำลังดำเนินการทำบัตร</span>
                                                                                </div>
                                                                                <small class="">{{DateThai2(date('d-m-Y h:i:s A', strtotime($item->rec_timeline_IdCard->date_status_2)))}}</small>
                                                                            </li>
                                                                            @elseif($item->rec_timeline_IdCard->status_2_id == '6')
                                                                            <li>
                                                                                <div class="timeline-icon bg-danger">
                                                                                    <i class="feather icon-alert-circle font-medium-2"></i>
                                                                                </div>
                                                                                <div class="timeline-info">
                                                                                    <p class="font-weight-bold">ยกเลิกรายการ</p>
                                                                                    <span>ยกเลิกรายการเนื่องจากสาเหตุ {{ $item->note }}</span>
                                                                                </div>
                                                                                <small class="">{{DateThai2(date('d-m-Y h:i:s A', strtotime($item->rec_timeline_IdCard->date_status_2)))}}</small>
                                                                            </li>
                                                                            @endif
                                                                            @if($item->rec_timeline_IdCard->status_1_id == '1' || $item->rec_timeline_IdCard->status_1_id == '3')
                                                                            <li>
                                                                                @if($item->rec_timeline_IdCard->status_1_id == '1')
                                                                                <div class="timeline-icon bg-info">
                                                                                    <i class="feather icon-check font-medium-2"></i>
                                                                                </div>
                                                                                <div class="timeline-info">
                                                                                    <p class="font-weight-bold">รอดำเนินการ</p>
                                                                                    <span>รอเจ้าหน้าที่ตอบรับ
                                                                                    </span>
                                                                                </div>
                                                                                <small class="">{{DateThai2(date('d-m-Y h:i:s A', strtotime($item->rec_timeline_IdCard->date_status_1)))}}</small>
                                                                                @else
                                                                                <div class="timeline-icon bg-info">
                                                                                    <i class="feather icon-camera font-medium-2"></i>
                                                                                </div>
                                                                                <div class="timeline-info">
                                                                                    <p class="font-weight-bold">ถ่ายรูปใหม่</p>
                                                                                    <span>ติดต่อเจ้าหน้าทีดำเนินการถ่ายรูปใหม่
                                                                                    </span>
                                                                                </div>
                                                                                <small class="">{{DateThai2(date('d-m-Y h:i:s A', strtotime($item->rec_timeline_IdCard->date_status_1)))}}</small>
                                                                                @endif
                                                                            </li>
                                                                            @endif
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    @if($item->rec_timeline_IdCard->status_id_cards == '1')
                                                    <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0"><i class="feather icon-edit-1"></i> เปลี่ยนแปลงข้อมูล</button>
                                                    @endif
                                                    <button type="button" class="btn btn-outline-warning" data-dismiss="modal">ปิด</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade text-left" id="delete_IDCard<?= $item->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form name="delete" action="{{ route('user.destroy_idCard', $item->id)}}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel1">ลบข้อมูลบัตรประจำตัว</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5>คุณต้องการลบข้อมูลบัตรประจำตัว ใช่หรือไม่?</h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn grey mr-1 mb-1 btn-outline-secondary" data-dismiss="modal">ยกเลิก</button>
                                                    <button type="submit" class="btn btn-danger mr-1 mb-1 waves-effect waves-light">ลบข้อมูล</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endforeach


                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade text-left" id="create_IDCard{{ Auth::user()->id }}" tabindex="-1" role="dialog" aria-labelledby="create_IDCard{{ Auth::user()->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="create_IDCard{{ Auth::user()->id }}"><i class="feather icon-message-square mr-50 "></i> ข้อมูลบัตรประจำตัว</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('user.store_idCard')}}" method="POST" novalidate>
                {{ csrf_field() }}
                {{ method_field('POST') }}
                {{-- <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"> --}}
                <div class="modal-body">
                    <h3 class="modal-title text-center mb-1" id="create_IDCard{{ Auth::user()->id }}">ข้อมูลบัตรประจำตัว</h3>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label for="account-old-password">หมวดหมู่</label>
                                    <select class="select2 form-control" name="cate_idCard" required>
                                        <option value="">หมวดหมู่</option>
                                        @foreach ($cate_idCard as $roles)
                                        <option {{ Auth::user()->title_name_id == $roles->id ? 'selected' : '' }}
                                                value="{{$roles->id}}">{{$roles->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label for="account-old-password">ประเภท</label>
                                    <select class="select2 form-control" name="cate_Status" required>
                                        <option value="">ประเภท</option>
                                        @foreach ($cate_Status as $roles)
                                        <option {{ Auth::user()->title_name_id == $roles->id ? 'selected' : '' }}
                                                value="{{$roles->id}}">{{$roles->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label for="account-old-password">คำนำหน้า</label>
                                    <select class="select2 form-control" data-validation-required-message="เลือกคำนำหน้า" name="title_name_id"  required>
                                        <option value="">คำนำหน้า</option>
                                        @foreach ($titleNames as $roles)
                                        <option {{ Auth::user()->title_name_id == $roles->id ? 'selected' : '' }}
                                                value="{{$roles->id}}">{{$roles->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label for="account-new-password">ชื่อหน้า</label>
                                    <input type="text" name="first_name" class="form-control" placeholder="ชื่อหน้า" data-validation-required-message="ป้อนชื่อหน้า" value="{{ Auth::user()->first_name }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label for="account-retype-new-password">นามสกุล</label>
                                    <input type="text" name="last_name" class="form-control" placeholder="นามสกุล" data-validation-required-message="ป้อนนามสกุล" value="{{ Auth::user()->last_name }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label for="account-retype-new-password">ชื่อหน้า (ภาษาอังกฤษ)</label>
                                    <input type="text" name="first_name_eng" class="form-control" placeholder="ชื่อหน้า (ภาษาอังกฤษ)" data-validation-required-message="ป้อนชื่อหน้า (ภาษาอังกฤษ)" value="{{ Auth::user()->first_name_eng }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label for="account-retype-new-password">นามสกุล (ภาษาอังกฤษ)</label>
                                    <input type="text" name="last_name_eng" class="form-control" placeholder="นามสกุล (ภาษาอังกฤษ)" data-validation-required-message="ป้อนนามสกุล (ภาษาอังกฤษ)" value="{{ Auth::user()->last_name_eng }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label for="account-retype-new-password">ตำแหน่ง</label>
                                    <input type="text" name="position" class="form-control" placeholder="ตำแหน่ง" data-validation-required-message="ป้อนตำแหน่ง" value="{{ Auth::user()->position }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <fieldset class="checkbox">
                                <div class="vs-checkbox-con vs-checkbox-primary">
                                    <input type="checkbox" name="new_pic" value="1">
                                    <span class="vs-checkbox">
                                        <span class="vs-checkbox--check">
                                            <i class="vs-icon feather icon-check"></i>
                                        </span>
                                    </span>
                                    <span class=""> ถ่ายรูปใหม่</span>
                                </div>
                            </fieldset>
                            <fieldset class="checkbox">
                                <div class="vs-checkbox-con vs-checkbox-primary">
                                    <input type="checkbox" name="update_profile" value="1">
                                    <span class="vs-checkbox">
                                        <span class="vs-checkbox--check">
                                            <i class="vs-icon feather icon-check"></i>
                                        </span>
                                    </span>
                                    <span class=""> อัพเดตข้อมูลส่วนตัว</span>
                                </div>
                            </fieldset>
                        </div>

                    </div>


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0"><i class="feather icon-edit-1"></i> ส่งข้อมูล</button>
                    <button type="button" class="btn btn-outline-warning" data-dismiss="modal">ยกเลิก</button>
                </div>
            </form>
        </div>
    </div>
</div>

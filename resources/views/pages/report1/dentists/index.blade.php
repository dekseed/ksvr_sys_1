@extends('layouts.ass')

@section('styles')
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/toggle/switchery.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/unslider.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
  <!-- END VENDOR CSS-->

  <!-- BEGIN STACK CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/app.css">
  <!-- END STACK CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/validation/form-validation.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/switch.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('../../../app-assets/assets/css/style.css') }}">
@endsection

@section('content')
  <h2 class="content-header-title mb-0 mt-2 text-center">แบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก โรงพยาบาลค่ายกฤษณ์สีวะรา (สำหรับทันตแพทย์/เจ้าหน้าที่ทันตกรรม)</h2>
  <div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          {{-- <h3 class="content-header-title mb-0">แบบประเมินความผูกพันของบุคลากรต่อองค์กร</h3> --}}
          {{-- <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Page</a>
                </li>
                <li class="breadcrumb-item active">Form Wizard
                </li>
              </ol>
            </div>
          </div> --}}
        </div>
        {{-- <div class="content-header-right col-md-6 col-12">
          <div class="media width-250 float-right">
            <div class="media-left media-middle">
              <div id="sp-bar-total-sales"></div>
            </div>
            <div class="media-body media-right text-right">
              <h3 class="m-0">$5,668</h3>
              <span class="text-muted">Sales</span>
            </div>
          </div>
        </div> --}}
      </div>

      <div class="content-body">

        <!-- Form wizard with number tabs section start -->
        <section id="validation">

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  {{-- <h2 class="card-title">แบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก โรงพยาบาลค่ายกฤษณ์สีวะรา</h2> --}}
                  <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                  </div>
                </div>

                <div class="card-content collapse show">
                  <div class="card-body">
                    @if (session('message'))
                      <div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                        <strong>{{ session('message') }}</strong>
                      </div>
                    @endif
                    @if(count($errors) > 0)
                      <div class="alert alert-danger" role="alert">
                        <strong>ขัดข้อง :</strong>
                        <ul>
                          @foreach ($errors->all() as $error)
                            <li>
                              {{$error}}
                            </li>
                          @endforeach

                        </ul>
                      </div>
                    @endif

                     <table class="table table-striped table-bordered zero-configuration">
                    <thead>
                      <tr>
                        <th class="text-center" >ลำดับที่</th>
                        <th class="text-center" style="width: 64%;">ชื่อ - นามสกุล</th>
                        <th class="text-center">อายุ</th>
                        <th class="text-center">เบอร์โทรติดต่อ</th>
                        <th class="text-center" style="width: 8%;">สถานะ</th>
                        <th class="text-center">#</th>
                      </tr>
                    </thead>
                    <tbody>

                          <?php $i=1 ?>
                    @foreach ($report1 as $tender)
                    <tr>
                      <th class="text-center">{{ $i++ }}</th>

                      <td>
                        @if(!is_null($tender->status_dentists))
                           
                              <a href="{{ route('dentists.show', $tender->id) }}" target="_blank">{{ $tender->title_name }} {{ $tender->first_name }} {{ $tender->last_name }}</a>
                            @else
                              {{ $tender->title_name }} {{ $tender->first_name }} {{ $tender->last_name }}
                        
                        @endif
                        
                      
                      </td>
                      
                      <td class="text-center">{{ $tender->age }}</td>

                      {{-- /// Web
                      <td class="text-center"><a href="{{ asset('files/'.$tender->file) }}" target="_blank">{{ $tender->filename }}</a></td>
                      --}}

                      <td class="text-center">{{ $tender->phonenumber }}</td>
                      <td class="text-center">
                        @if(!is_null($tender->status_dentists))
                           
                              <div class="badge badge-success">ข้อมูลสมบูรณ์</div>
                            @else
                              <div class="badge badge-danger">ยังไม่ลงข้อมูล</div>
                        
                        @endif
                        </td>
                      {{-- @if(($tender->user_id) == (Auth::user()->id)) --}}
                      <td class="text-center">
                          <div class="btn-group" role="group" aria-label="Basic example">
                        @if(!is_null($tender->status_dentists))  
                     
                        
                        <a class="btn btn-warning" href="{{ route('dentists.show', $tender->id)}}">
                          <i class="fa fa-user-circle"></i> ดูข้อมูล</a>
                      
                         @else
                         <button type="button" class="btn btn-success" data-href="{{ route('dentists.store', $tender->id)}}" data-toggle="modal" data-target="#store<?= $tender->id ?>">
                          <i class="fa fa-user-plus"></i> ลงข้อมูล</button>
                        
                        @endif
                 
                        </div>
                          <!-- Modal ลงข้อมูล -->
                          <div class="modal fade text-left" id="store<?= $tender->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                          aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title" id="myModalLabel1">สำหรับทันตแพทย์/เจ้าหน้าที่ทันตกรรม</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                 <form id="store" class="form-horizontal" name="store" action="{{ route('dentists.store', $tender->id)}}" method="POST" novalidate>
                                      {{ csrf_field() }}
                                      <input type="hidden" name="id" value="{{ $tender->id }}">
                                  <div class="card-body">
                                      
                                        <div class="form-body">
                                          
                                          <div class="row">
                                            <div class="form-group col-md-2 mb-2">
                                              <label for="projectinput1">คำนำหน้า</label>
                                              <input type="text" id="projectinput1" class="form-control" value="{{ $tender->title_name }}"
                                              name="fname" disabled>
                                            </div>
                                            <div class="form-group col-md-5 mb-2">
                                              <label for="projectinput1">ชื่อหน้า</label>
                                              <input type="text" id="projectinput1" class="form-control" value="{{ $tender->first_name }}"
                                              name="fname" disabled>
                                            </div>
                                            <div class="form-group col-md-5 mb-2">
                                              <label for="projectinput2">นามสกุล</label>
                                              <input type="text" id="projectinput2" class="form-control" value="{{ $tender->last_name }}"
                                              name="lname" disabled>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="form-group col-md-7 mb-2">
                                              <label for="projectinput3">เลขที่บัตรประจำตัวประชาชน</label>
                                              <input type="text" id="projectinput3" class="form-control" value="{{ $tender->cid }}" name="cid" disabled>
                                            </div>
                                            <div class="form-group col-md-5 mb-2">
                                              <label for="projectinput4">อายุ</label>
                                              <input type="text" id="projectinput4" class="form-control" value="{{ $tender->age }}" name="cid" disabled>
                                            </div>
                                          </div>
                                          
                                          <h4 class="form-section"><i class="icon-clipboard4"></i>ผลการตรวจสุภาพช่องปาก</h4>
                                          <div class="row">
                                            <div class="col-md-3 col-sm-6">
                                              <fieldset>
                                                <label class="d-inline-block custom-control custom-radio">
                                                  <input type="radio" id="a1" name="a1" value="1" class="custom-control-input"
                                                   @if(old('a1') ==  "1") checked="checked" @endif >
                                                  <span class="bg-info custom-control-indicator"></span>
                                                  <span class="custom-control-description">ระดับ 1</span>
                                                </label>
                                              </fieldset>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                              <div class="skin-states">
                                                <fieldset>
                                                  <label class="d-inline-block custom-control custom-radio">
                                                    <input type="radio" id="a1" name="a1" value="2" class="custom-control-input"
                                                    @if(old('a1') ==  "2") checked="checked" @endif >
                                                    <span class="bg-info custom-control-indicator"></span>
                                                    <span class="custom-control-description">ระดับ 2</span>
                                                  </label>
                                                </fieldset>
                                              </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                              <fieldset>
                                                <label class="d-inline-block custom-control custom-radio">
                                                  <input type="radio" id="a1" name="a1" value="3" class="custom-control-input"
                                                   @if(old('a1') ==  "3") checked="checked" @endif >
                                                  <span class="bg-info custom-control-indicator"></span>
                                                  <span class="custom-control-description">ระดับ 3</span>
                                                </label>
                                              </fieldset>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                              <div class="skin-states">
                                                <fieldset>
                                                <label class="d-inline-block custom-control custom-radio">
                                                  <input type="radio" id="a1" name="a1" value="4" class="custom-control-input"
                                                   @if(old('a1') ==  "4") checked="checked" @endif >
                                                  <span class="bg-info custom-control-indicator"></span>
                                                  <span class="custom-control-description">ระดับ 4</span>
                                                </label>
                                                </fieldset>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row mt-2">
                                            
                                            <div class="col-md-12">
                                              <fieldset class="form-group">
                                                <label for="descTextarea">บันทึกรายละเอียด (ถ้ามี)</label>
                                                <textarea class="form-control" name="a1_d" id="descTextarea" rows="3" placeholder="บันทึกรายละเอียด"></textarea>
                                              </fieldset>
                                            </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-12">
                                                  <h4 class="form-section"><i class="icon-clipboard4"></i></h4>
                                                    
                                                      <div class="input-group controls col-6">
                                                        <span class="input-group-addon">ลงชื่อ</span>
                                                          <input type="text" class="form-control"
                                                          name="name" id='name' value="{{ old('name') }}">
                                                          <span class="input-group-addon">ผู้ตรวจ</span>
                                                      </div>
                                                 
                                            </div>
                                          </div>
                                        </div>
                                      
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">ยกเลิก</button>
                                    <button type="submit" class="btn btn-outline-primary">บันทึก</button>
                                  </div>
                                 </form>
                              </div>
                            </div>
                          </div>
                        
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
function  f51(){
  document.getElementById('div5').style.display = 'block';
}
function 	f52(){
  document.getElementById('div5').style.display = 'none';
}
</script>

<!-- BEGIN VENDOR JS-->
  <script src="../../../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="../../../app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/extensions/unslider-min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
  <script src="../../../app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"
  type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"
  type="text/javascript"></script>

  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN STACK JS-->
  <script src="../../../app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="../../../app-assets/js/core/app.js" type="text/javascript"></script>

  <script src="../../../app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->

  <!-- BEGIN PAGE LEVEL JS-->
  <script src="../../../app-assets/js/scripts/forms/validation/form-validation.js"
  type="text/javascript"></script>
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="../../../app-assets/js/scripts/tables/datatables/datatable-basic.js"
  type="text/javascript"></script>
  <script src="../../../app-assets/js/scripts/tables/components/table-components.js" type="text/javascript"></script>
 
@endsection
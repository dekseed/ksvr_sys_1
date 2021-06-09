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
  <h2 class="content-header-title mb-0 mt-2 text-center">แบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก โรงพยาบาลค่ายกฤษณ์สีวะรา (สำหรับเจ้าหน้าที่ตรวจสุขภาพ)</h2>
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
                                      <form action="#" class="form">
                                        <div class="form-body">
                                           <h4 class="form-section mt-2"><i class="icon-clipboard4"></i>ข้อมูลทั่วไป</h4>
                                          <div class="row">
                                            
                                            <div class="form-group col-md-2 mb-2">
                                              <label for="projectinput1">คำนำหน้า</label>
                                              <input type="text" id="projectinput1" class="form-control" value="{{ $report1_3->report->title_name }}"
                                              name="fname" disabled>
                                            </div>
                                            <div class="form-group col-md-5 mb-2">
                                              <label for="projectinput1">ชื่อหน้า</label>
                                              <input type="text" id="projectinput1" class="form-control" value="{{ $report1_3->report->first_name }}"
                                              name="fname" disabled>
                                            </div>
                                            <div class="form-group col-md-5 mb-2">
                                              <label for="projectinput2">นามสกุล</label>
                                              <input type="text" id="projectinput2" class="form-control" value="{{ $report1_3->report->last_name }}"
                                              name="lname" disabled>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="form-group col-md-7 mb-2">
                                              <label for="projectinput3">เลขที่บัตรประจำตัวประชาชน</label>
                                              <input type="text" id="projectinput3" class="form-control" value="{{ $report1_3->report->cid }}" name="cid" disabled>
                                            </div>
                                            <div class="form-group col-md-5 mb-2">
                                              <label for="projectinput4">อายุ</label>
                                              <input type="text" id="projectinput4" class="form-control" value="{{ $report1_3->report->age }}" name="cid" disabled>
                                            </div>
                                          </div>
                                          
                                          <h4 class="form-section"><i class="icon-clipboard4"></i>ผลการตรวจร่างกายตามระบบ</h4>
                                          <div class="row">
                                            <div class="col-md-3 col-sm-6">
                                              <fieldset>
                                                <label class="d-inline-block custom-control custom-radio">
                                                  <input type="radio" id="a1" name="a1" value="1" class="custom-control-input"
                                                   @if($report1_3->a1 ==  "1") checked="checked" @endif disabled>
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
                                                    @if($report1_3->a1 ==  "2") checked="checked" @endif disabled>
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
                                                   @if($report1_3->a1 ==  "3") checked="checked" @endif disabled>
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
                                                   @if($report1_3->a1 ==  "4") checked="checked" @endif disabled>
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
                                                <textarea class="form-control" name="a1_d" id="descTextarea" rows="3" placeholder="บันทึกรายละเอียด" disabled>{{ $report1_3->a1_d }}</textarea>
                                              </fieldset>
                                            </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-12">
                                                  <h4 class="form-section"><i class="icon-clipboard4"></i></h4>
                                                    
                                                      <div class="input-group controls col-6">
                                                        <span class="input-group-addon">ลงชื่อ</span>
                                                          <input type="text" class="form-control"
                                                          name="name" id='name' value="{{ $report1_3->name }}" disabled>
                                                          <span class="input-group-addon">ผู้ตรวจ</span>
                                                      </div>
                                                 
                                            </div>
                                          </div>     
                                        </div>
                                      </form>
                                      <div class="modal-footer mt-3">
                                        <a href="{{ route('dentists.index') }}" class="btn grey btn-outline-secondary">กลับ</a>
                                      </div>
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
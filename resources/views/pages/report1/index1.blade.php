@extends('layouts.check_up')

@section('styles')

<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/forms/wizard.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/knowledge-base.css">
@endsection

@section('content')

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header text-center">
                <div class="col-md-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title mb-0">แบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก โรงพยาบาลค่ายกฤษณ์สีวะรา</h2>

                        </div>
                    </div>
                </div>
                    {{-- <img class="img-responsive" src="data:image/png;base64, {!! base64_encode(QrCode::format('png')
                      ->size(350)
                      ->generate('https://ksvrhospital.go.th/files/files/HeatStroke/03.jpg')) !!} "> --}}
            </div>

            <div class="content-body">
                <section id="knowledge-base-search">
                    <div class="row">
                        <div class="col-12">
                            <div class="card knowledge-base-bg white">
                                <div class="card-content">
                                    <div class="card-body">
                        {{-- <img class="img-responsive" src="data:image/png;base64, {!! base64_encode(QrCode::format('png')
                                            ->size(350)
                                            ->generate('https://ksvrhospital.go.th/ksvr/report-1')) !!} "> --}}
                                        <form action="{{route('report_search')}}" method="POST" >
                                            {{csrf_field()}}
                                            <div class="card-body justify-content-around pt-0">
                                                <div class="row">
                                                    <div class="col-md-4 col-12">
                                                        <h1 class="white">ค้นหาข้อมูลส่วนตัว</h1>
                                                        <p class="card-text mb-2">
                                                            กรุณากรอกข้อมูล เลขที่บัตรประจำตัวประชาชน หรือ เลขที่ HN
                                                        </p>
                                                    </div>
                                                {{-- <fieldset class="form-group position-relative has-icon-left mb-0">
                                                    <input type="text" class="form-control" id="searchbar" placeholder="เลขที่บัตรประจำตัวประชาชน หรือ เลขที่ HN เท่านั้น">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-search px-1"></i>
                                                    </div>

                                                </fieldset> --}}
                                                <div class="col-md-6 col-12">
                                                    <fieldset class="form-group position-relative has-icon-left">
                                                        <input type="text" class="form-control form-control-lg" id="searchbar" name="search" placeholder="เลขที่บัตรประจำตัวประชาชน หรือ เลขที่ HN" required>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-search px-1"></i>
                                                        </div>

                                                    </fieldset>

                                                </div>
                                                <div class="col-md-2 col-12">
                                                    <button type="submit" class="btn btn-lg btn-primary waves-effect waves-light"><i class="feather icon-navigation"></i> ค้นหา</button>
                                                </div>
                                            </div>
                                            </div>
                                        </form>
                                        {{-- {!! QrCode::size(400)->generate(url("https://www.ksvrhospital.go.th/ksvr/report-1")); !!} --}}
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
  <!-- BEGIN PAGE VENDOR JS-->

 <script src="{{ asset('app-assets') }}/vendors/js/extensions/jquery.steps.min.js" type="text/javascript"></script>

  <script src="{{ asset('app-assets') }}/vendors/js/forms/validation/jquery.validate.min.js"
  type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN STACK JS-->
  <script src="{{ asset('app-assets') }}/js/core/app-menu.js" type="text/javascript"></script>
  <script src="{{ asset('app-assets') }}/js/core/app.js" type="text/javascript"></script>

  <script src="{{ asset('app-assets') }}/js/scripts/forms/wizard-steps.js" type="text/javascript"></script>

@endsection

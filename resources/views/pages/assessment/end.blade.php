@extends('layouts.check_up')

@section('styles')

  <link href="{{ asset('app-assets') }}/css/plugins/forms/wizard.css" rel="stylesheet" type="text/css">

@endsection

@section('content')
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
                  {{-- <h2 class="card-title">แบบประเมินความผูกพันของบุคลากรต่อองค์กร</h2> --}}
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
               <div class="card-content">
                 <div class="card-body">
                   <div class="card-text">
                     <p class="font-large-2 text-center">แบบประเมินความผูกพันของบุคลากรต่อองค์กร</p>
                     <br />
                      <br />
                      <br />
                      @if(Session::has('success'))
                      <p class="font-large-1 text-bold-600 text-center">{{ Session::get('success')}}</p>
                      @endif
                       <br />
                        <br />

                     <p class="font-large-1 text-bold-600 text-center">***  ขอขอบพระคุณสำหรับความร่วมมือในการตอบแบบประเมิน ***</p>

                     <br />
                      <br />
                      <br />
                       <br />
                        <br />
                        <br />
                        <br />

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

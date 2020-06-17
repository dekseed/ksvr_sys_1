@extends('layouts.admin_manage')

@section('styles')
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/unslider.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/selects/select2.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/ui/prism.min.css">
  {{-- <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/file-uploaders/dropzone.min.css"> --}}
  <!-- END VENDOR CSS-->
  <!-- BEGIN STACK CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/app.css">
  <!-- END STACK CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/simple-line-icons/style.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
  {{-- <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/file-uploaders/dropzone.css"> --}}
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/assets/css/style.css">
  <!-- END Custom CSS-->
@endsection

@section('content')
  <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h1 class="content-header-title mb-0">เพิ่มข้อมูลกิจกรรม</h1>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('manage.dashboard')}}">แผนควบคุม</a>
                  </li>
                  <li class="breadcrumb-item"><a href="{{route('tenders-admin.index')}}">ข้อมูลกิจกรรม</a>
                  </li>
                  <li class="breadcrumb-item active">เพิ่มข้อมูลกิจกรรม
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body">
              <section id="horizontal-form-layouts">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title">เพิ่มข้อมูลกิจกรรม</h4>
                      <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                      <div class="heading-elements">
                        <ul class="list-inline mb-0">

                          <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                          <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="card-content collpase show">
                      <div class="card-body">
                        <div class="card-text">
                          {{-- <p>Add <code>.form-horizontal</code> class to the form tag to
                            have horizontal form styling. This horizontal form shows
                            the use of icons with form controls. Define the position
                            of the icon using <code>has-icon-left</code> or <code>has-icon-right</code>                        class. Use <code>icon-*</code> class to define the icon for
                            the form control. See Icons sections for the list of icons
                            you can use. </p> --}}
                        </div>

    <form class="form form-horizontal" method="post" action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data"  multiple>
      {{method_field('POST')}}
      {{csrf_field()}}

      <div class="form-body">
      <h4 class="form-section"><i class="ft-mail"></i> เพิ่มข้อมูลกิจกรรม</h4>
      <div class="form-group row">
        <label class="col-md-3 label-control" for="name">หัวเรื่อง :</label>
        <div class="col-md-9">
          <div class="position-relative has-icon-left">
            <input type="text" id="title" class="form-control" placeholder="ชื่อรายการ"
            name="title" required>
            <div class="form-control-position">
              <i class="ft-file"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 label-control" for="cate_posts_id">หมวดหมู่ :</label>
        <div class="col-md-9">
          <div class="position-relative has-icon-left">
              <select class="form-control" name="cate_posts_id">
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
              </select>
            <div class="form-control-position">
              <i class="fa fa-briefcase"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 label-control" for="content">รายละเอียด :</label>
        <div class="col-md-9">
          <div class="position-relative has-icon-left">
            <textarea id="content" rows="5" class="form-control border-primary" name="content" placeholder="รายละเอียด"></textarea>
            <div class="form-control-position">

            </div>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 label-control" for="date">ประกาศ ณ วันที่ :</label>
        <div class="col-md-9">
          <div class="position-relative has-icon-left">
            <input type="date" id="date" class="form-control" name="date" required>
            <div class="form-control-position">
              <i class="ft-message-square"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 label-control" for="date">ไฟล์อัพโหลด :</label>
        <div class="col-md-9">
          <div class="position-relative has-icon-left">

            {{-- <button id="select-files" data-toggle="modal" data-target="#default" class="btn btn-primary mb-1 dz-clickable">
              <i class="icon-file2"></i> เพิ่มไฟล์</button> --}}
              <label id="projectinput8" class="file center-block">
              <input type="file" id="files" name="files[]" multiple>
              <span class="file-custom"></span>
            </label>
            </div>
          </div>
        </div>


      <div class="form-group row">
        <label class="col-md-3 label-control" for="date">เผยแพร่ :</label>
        <div class="col-md-9">
          <div class="position-relative has-icon-left">
            <input type="checkbox" name="published" style="margin-right: 15px;">
            </div>
          </div>
        </div>

      <div class="form-actions right">
        <a href="{{route('tenders-admin.index')}}" class="btn btn-outline-warning mr-1">
          <i class="fa fa-arrow-circle-left m-r-10"></i> กลับ</a>
        <button type="submit" class="btn btn-primary">
          <i class="fa fa-check-square-o"></i> เพิ่มรายการ
        </button>
      </div>
      </div>
  </form>
      </div>

    {{-- <!-- Modal -->
    <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
    aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form action="#" class="dropzone dropzone-area" id="dpz-multiple-files" enctype="multipart/form-data" method="POST">
          {{ csrf_field() }}
            <div class="dz-message">Drop Files Here To Upload</div>
          </form>
        </div>
      </div>
    </div>
    <!-- Modal --> --}}

  </div>
</div>
</div>
</section>
</div>

</div>
</div>
</div>
@endsection

@section('scripts')
  <script src = "{{ URL::to('tinymce/js/tinymce/tinymce.min.js') }}"></script>
  <script>


    tinymce.init({


      force_br_newlines : false,
      force_p_newlines : false,
      forced_root_block : '',
  selector: 'textarea',

  height: 500,
  theme: 'modern',
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
  ],
  toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]

  });


  </script>
{{-- <script>
    var app = new Vue({
      el: '#app',
      data: {
        rolesSelected: [{!! old('roles') ? old('roles') : '' !!}]
      }
    });
  </script> --}}

    <!-- BEGIN VENDOR JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
  <script src="../../../app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
    <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN STACK JS-->
    {{-- <script src="../../../app-assets/vendors/js/extensions/dropzone.min.js" type="text/javascript"></script> --}}
      <script src="../../../app-assets/vendors/js/ui/prism.min.js" type="text/javascript"></script>
    <script src="../../../app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="../../../app-assets/js/core/app.js" type="text/javascript"></script>

    <!-- END STACK JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- BEGIN PAGE LEVEL JS-->
  <script src="../../../app-assets/js/scripts/forms/checkbox-radio.js" type="text/javascript"></script>
    <script src="../../../app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>
{{-- <script src="../../../app-assets/js/scripts/extensions/dropzone.js" type="text/javascript"></script> --}}
    <!-- END PAGE LEVEL JS-->
@endsection

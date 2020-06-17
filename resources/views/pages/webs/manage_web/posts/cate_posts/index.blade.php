@extends('layouts.admin_manage')

@section('styles')

  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/unslider.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN STACK CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/app.css">
  <!-- END STACK CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
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
        <h1 class="content-header-title mb-0">หมวดหมู่ - กิจกรรม</h1>
        <div class="row breadcrumbs-top">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('manage.dashboard')}}">แผนควบคุม</a>
              </li>
              <li class="breadcrumb-item"><a href="{{route('posts.index')}}">กิจกรรม</a>
              </li>
              <li class="breadcrumb-item active">ข้อมูลกิจกรรม
              </li>
            </ol>
          </div>
        </div>
      </div>
      </div>


      <div class="content-body">
        <section id="hidden-label-form-layouts">
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <div class="card-text">
                      <h1 class="content-header-title mb-3 text-center">ตารางหมวดหมู่</h1>
                    </div>
                    <div class="form-body">
                      <div class="form-group col-12 mb-2">
                        <table class="table table-striped table-bordered zero-configuration">
                          <thead>
                            <tr>
                              <th class="text-center">ลำดับที่</th>
                              <th class="text-center" style="width: 64%;">ชื่อหมวดหมู่</th>
                              <th class="text-center">#</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($cate_posts as $index => $cate_post)
                            <tr>
                              <th style="width: 10%;" class="text-center">{{ $index +1 }}</th>
                              <td >{{ $cate_post->name }}</td>
                              <td style="width: 10%;">
                                <form id="delete" action="{{ route('cate-posts.destroy', $cate_post->id)}}"
                                  method="POST" onsubmit='return ConfirmDelete()'>
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                  <button class="btn btn-danger"><i class="fa fa-btn fa-trash-o"></i></button>
                                </form>
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
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <div class="card-text">
                    </div>
                    <form class="form" action="{{route('cate-posts.store')}}" method="POST">
                      {{csrf_field()}}
                    <div class="form-body">
                      <h4 class="form-section"><i class="ft-user"></i> เพิ่มหมวดหมู่</h4>
                      <div class="row">
                      <div class="form-group col-12 mb-2">
                          <label class="sr-only" for="name">ชื่อหมวดหมู่</label>
                            <input type="text" id="name" name="name" class="form-control border-primary" placeholder="ชื่อหมวดหมู่"
                            name="firstname">
                        </div>
                        </div>
                          <div class="form-actions right">
                            <a href="{{route('posts.index')}}" class="btn btn-outline-warning mr-1"><i class="fa fa-arrow-circle-left m-r-10"></i> กลับ</a>

                          <button type="submit" class="btn btn-outline-primary">
                            <i class="ft-check"></i> สร้างใหม่
                          </button>
                        </div>
                      </div>
                      </form>
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
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="../../../app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/extensions/unslider-min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN STACK JS-->
  <script src="../../../app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="../../../app-assets/js/core/app.js" type="text/javascript"></script>

  <!-- END STACK JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="../../../app-assets/js/scripts/tables/datatables/datatable-basic.js"
  type="text/javascript"></script>
  <script src="../../../app-assets/js/scripts/tables/components/table-components.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->


@endsection

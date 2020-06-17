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
  <link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/simple-line-icons/style.css">
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
          <h1 class="content-header-title mb-0">ข้อมูลกิจกรรม</h1>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('manage.dashboard')}}">แผนควบคุม</a>
                </li>
                <li class="breadcrumb-item"><a href="{{route('posts.index')}}">จัดการข้อมูลกิจกรรม</a>
                </li>
                <li class="breadcrumb-item active">ข้อมูลกำลังพล
                </li>
              </ol>
            </div>
          </div>
        </div>
        {{-- <div class="content-header-right col-md-6 col-12">
          <div role="group" aria-label="Button group with nested dropdown" class="btn-group float-md-right">
            <div role="group" class="btn-group">
              <button id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false" class="btn btn-outline-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings icon-left"></i> Settings</button>
              <div aria-labelledby="btnGroupDrop1" class="dropdown-menu"><a href="card-bootstrap.html" class="dropdown-item">Bootstrap Cards</a>
                <a href="component-buttons-extended.html" class="dropdown-item">Buttons Extended</a>
              </div>
            </div>
            <a href="full-calender-basic.html" class="btn btn-outline-primary"><i class="ft-mail"></i></a>
            <a href="timeline-center.html" class="btn btn-outline-primary"><i class="ft-pie-chart"></i></a>
          </div>
        </div> --}}
      </div>
      <div class="content-body">
        <section id="configuration">
          <div class="row">
            <div class="col-12">
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
                  <div class="card-body card-dashboard text-center">
                  <h1 class="content-header-title mb-0">ข้อมูลกิจกรรม</h1>
                </div>
              </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                    <p class="card-text text-right">
                        <a href="{{route('posts.create')}}" class="btn btn-success btn-min-width mr-1 mb-1"><i class="fa fa-user-plus m-r-10"></i> เพิ่มข้อมูลกิจกรรมใหม่</a>
                    </p>
                    {{-- <p class="card-text">DataTables has most features enabled by default, so all you need
                      to do to use it with your own ables is to call the construction
                      function: $().DataTable();.</p> --}}
                    <table class="table table-striped table-bordered zero-configuration">

                  <thead>
                    <tr>
                      <th>ลำดับที่</th>
                      <th>ชื่อกิจกรรม</th>
                      <th>หมวดหมู่</th>
                      <th>สร้างเมื่อ</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1 ?>
                    @foreach ($posts as $post)
                      <tr>
                        <th>{{ $i++ }}</th>
                        {{-- <td>{{$user->id}}</td> --}}
                        <td>{{$post->title}}</td>
                        <td>{{$post->cate_posts->name}}</td>
                        {{-- <td>

                        </td> --}}
                        <td class="has-text-centered">{{$post->created_at->toFormattedDateString()}}</td>
                        <td class="text-center" width="3%">
                            <button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="ft-settings"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{route('posts.show', $post->id)}}"><i class="fa fa-btn fa-file-text"></i> แสดงข้อมูล</a>
                              <a class="dropdown-item" href="{{route('posts.edit', $post->id)}}"><i class="fa fa-btn fa-pencil"></i> แก้ไขข้อมูล</a>
                              <div class="dropdown-divider"></div>
                              <button class="dropdown-item" data-href="{{ route('posts.destroy', $post->id)}}" data-toggle="modal" data-target="#default<?= $post->id ?>">
                                <i class="fa fa-btn fa-trash-o"></i> ลบข้อมูล</button>
                            </div>
                              <!-- Modal -->
                              <div class="modal fade text-left" id="default<?= $post->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                              aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <form id="delete" name="delete" action="{{ route('posts.destroy', $post->id)}}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                    <div class="modal-header">
                                      <h4 class="modal-title" id="myModalLabel1">ลบข้อมูล</h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <h5>คุณต้องการลบ " {{$post->name}} " ใช่หรือไม่?</h5>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">ยกเลิก</button>
                                      <button type="submit" class="btn btn-outline-primary">ลบข้อมูล</button>
                                    </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                              <!-- Modal -->
                        </tr>
                    @endforeach

                  </tbody>
                  <tfoot>
                    <tr>
                      <th>ลำดับที่</th>
                      <th>ชื่อกิจกรรม</th>
                      <th>หมวดหมู่</th>
                      <th>สร้างเมื่อ</th>
                      <th></th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            {{-- {{$users->links()}} --}}
          </div>
        </div>
      </div>
    </section>
    <!--/ Zero configuration table -->
    <!-- Default ordering table -->
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
  <!-- END PAGE LEVEL JS-->
@endsection

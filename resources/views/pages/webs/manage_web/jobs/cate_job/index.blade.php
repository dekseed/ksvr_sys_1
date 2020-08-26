@extends('layouts.home')

@section('styles')


@endsection

@section('content')
  <div class="app-content content">
    <div class="content-wrapper">

      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
        <h1 class="content-header-title mb-0">หมวดหมู่ - ประกาศรับสมัครงาน</h1>
        <div class="row breadcrumbs-top">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('home')}}">แผนควบคุม</a>
              </li>
              <li class="breadcrumb-item"><a href="{{route('job.index')}}">ประกาศรับสมัครงาน</a>
              </li>
              <li class="breadcrumb-item active">หมวดหมู่ประกาศรับสมัครงาน
              </li>
            </ol>
          </div>
        </div>
      </div>
      </div>


      <div class="content-body">
        <section id="hidden-label-form-layouts">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    
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
                            
                            @foreach ($cate as $index => $cate_tender)
                            <tr>
                              <th style="width: 10%;" class="text-center">{{ $index +1 }}</th>
                              <td >{{ $cate_tender->name }}</td>
                              <td style="width: 10%;">
                                <form id="delete" action="{{ route('cat-job.destroy', $cate_tender->id)}}"
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
            <div class="col-md-4">
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
                    <form class="form" action="{{route('cat-job.store')}}" method="POST">
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
                            <a href="{{route('job.index')}}" class="btn btn-outline-warning mr-1"><i class="fa fa-arrow-circle-left m-r-10"></i> กลับ</a>

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


@endsection

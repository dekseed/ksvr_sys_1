@extends('layouts.home')

@section('styles')

@endsection

@section('content')
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h1 class="content-header-title mb-0">เพิ่มข้อมูลประกาศจัดซื้อจัดจ้าง</h1>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">แผนควบคุม</a>
                </li>
                <li class="breadcrumb-item"><a href="{{route('tender.index')}}">ข้อมูลประกาศจัดซื้อจัดจ้าง</a>
                </li>
                <li class="breadcrumb-item active">เพิ่มข้อมูลประกาศจัดซื้อจัดจ้าง
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="content-body">
            <section id="user-profile-cards" class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">เพิ่มข้อมูลประกาศจัดซื้อจัดจ้าง</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    
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
    <form class="form form-horizontal" action="{{route('tender.store')}}" method="POST" enctype="multipart/form-data"  multiple>
      {{method_field('POST')}}
      {{csrf_field()}}
      <div class="form-body">
        <h4 class="form-section"></h4>
        <div class="form-group row">
          <label class="col-md-3 label-control" for="name">ชื่อรายการ :</label>
          <div class="col-md-9">
            <div class="position-relative has-icon-left">
              <input type="text" id="name" class="form-control" placeholder="ชื่อรายการ"
              name="name" required>
              <div class="form-control-position">
                <i class="ft-file"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 label-control" for="cate_tenders">หมวดหมู่ :</label>
          <div class="col-md-9">
            <div class="position-relative has-icon-left">
              <select id="projectinput6" name="cate_tenders" class="form-control"  placeholder="เลือกหมวดหมู่" required>
                
                @foreach ($cate as $role)
               
                  <option value="{{$role->id}}">{{$role->name}}</option>
                
                @endforeach
                
              </select>
              <div class="form-control-position">
                <i class="fa fa-briefcase"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-3 label-control" for="description">รายละเอียด :</label>
          <div class="col-md-9">
            <div class="position-relative has-icon-left">
              <textarea id="description" rows="5" class="form-control border-primary" name="description" placeholder="รายละเอียด"></textarea>
              <div class="form-control-position">
                <i class="ft-message-square"></i>
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
          <label class="col-md-3 label-control" for="date_time">ไฟล์ดาวห์โหลด :</label>
          <div class="col-md-9">
            <div class="position-relative has-icon-left">
              <input type="file" class="form-control-file" id="basicInputFile" name="file" required>

            </div>
          </div>
        </div>
        <div class="form-actions right">
          <a href="{{route('tender.index')}}" class="btn btn-outline-warning mr-1">
            <i class="fa fa-arrow-circle-left m-r-10"></i> กลับ</a>
          <button type="submit" class="btn btn-primary">
            <i class="fa fa-check-square-o"></i> เพิ่มรายการ
          </button>
        </div>

        </div>
    </form>

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

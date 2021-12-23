@extends('layouts.home')

@section('styles')
<!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css">
    <!-- END: Vendor CSS-->

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/plugins/file-uploaders/dropzone.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/data-list-view.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/forms/select/select2.min.css">
    <!-- END: Page CSS-->

@endsection

@section('content')
  <div class="app-content content">
    <div class="content-wrapper">

      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h1 class="content-header-title mb-0">ระบบเอกสารคุณภาพ (LAB-eDoc-Folder)</h1>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">แผนควบคุม</a>
                </li>
                <li class="breadcrumb-item"><a href="{{route('LAB-Upload.index')}}">ระบบเอกสารคุณภาพ (LAB-eDoc-Folder)</a>
                </li>
                <li class="breadcrumb-item active">ข้อมูลระบบเอกสารคุณภาพ (LAB-eDoc-Folder)
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="content-body">
        <section id="data-list-view" class="data-list-view-header">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>

                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard text-center">
                  <h1 class="content-header-title mb-0">ระบบเอกสารคุณภาพ (LAB-eDoc-Folder)</h1>
                </div>
              </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">

                    @if(session('message'))
                      <div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                        <strong>{{ session('message') }}</strong>
                      </div>
                    @endif

                  <div class="table-responsive">
                            <table  id="example" class="table data-list-view">
                              <thead>
                                <tr>
                                  <th></th>
                                  <th >หมวดหมู่</th>
                                  <th >ชื่อเอกสาร</th>
                                  <th >รายละเอียด</th>
                                  <th >ไฟล์ดาวห์โหลด</th>
                                  <th class="text-center">ประกาศเมื่อวันที่</th>
                                  <th class="text-center">ตัวเลือก</th>
                                </tr>
                              </thead>
                              <tbody>

                                    <?php $i=1 ?>
                              @foreach ($tenders as $tender)
                              <tr>
                                <td>{{$tender->id}}</td>
                                <td>{{ $tender->cate_lab_upload_file->name }}</td>
                                <td>{{ $tender->name }}</td>
                                <td >{{ $tender->description }}</td>

                                  <td><a href="{{ asset('files/LAB/'.$tender->file) }}" target="_blank">{{ $tender->filename }}</a></td>
                                <td class="text-center">{{DateFThai(date('d-m-Y', strtotime($tender->created_at)))}}</td>
                                {{-- @if(($tender->user_id) == (Auth::user()->id)) --}}
                                <td class="text-center">
                                  <div class="btn-group" role="group" aria-label="Basic example">
                                      <a class="btn btn-primary" href="{{ route('LAB-Upload.edit', $tender->id) }}"><i class="fa fa-btn fa-pencil"></i></a>

                                      <button type="button" class="btn btn-warning" data-href="{{ route('LAB-Upload.destroy', $tender->id)}}" data-toggle="modal" data-target="#default<?= $tender->id ?>">
                                        <i class="fa fa-btn fa-trash-o"></i></button>
                                  </div>

                                </td>
                              </tr>
                               <!-- Modal -->
                                    <div class="modal fade text-left" id="default<?= $tender->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                                      aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form id="delete" name="delete" action="{{ route('LAB-Upload.destroy', $tender->id)}}" method="POST">
                                              {{ csrf_field() }}
                                              {{ method_field('DELETE') }}
                                          <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel1">ลบข้อมูล</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <h5>คุณต้องการลบ " {{$tender->name}} " ใช่หรือไม่?</h5>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">ยกเลิก</button>
                                            <button type="submit" class="btn btn-outline-primary">ลบข้อมูล</button>
                                          </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                              @endforeach
                            </tbody>
                          </table>
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
<script>

$(document).ready(function(){

    $('#number').blur(function(){
        var error_number = '';
        var _token = $('input[name="_token"]').val();
        var number = $('#number').val();
        $.ajax({
            url:"{{ route('number_available.check') }}",
            method:"POST",
            data:{number:number, _token:_token},
            success:function(result)
            {
                if(result == 'unique')
                {
                    $('#error_number').html('<label class="text-success">เลขว่าง</label>');
                    $('#number').removeClass('has-error');
                }
                else
                {
                    $('#error_number').html('<label class="text-danger">มีเลขนี้ในระบบ</label>');
                    $('#number').addClass('has-error');
                }
            }
        })
    })
////////////////////////////////////////////////////

/// DELETE ////

    // var id;
    // $(document).on('click', '.btn-del', function(){
    //     id = $(this).val();

    //     $('#confirmModalDel').modal('show');
    // });
    // $('#ok_button').click(function(){
    //     $.ajax({
    //         method:"DELETE",
    //         url:"/stock/schedule/"+id,
    //         data:{id:id,  _token: '{{csrf_token()}}'},
    //         beforeSend:function(){
    //             $('#ok_button').text('กำลังลบข้อมูล..');
    //         },
    //         success:function(data){
    //             setTimeout(function(){
    //                 $('#confirmModalDel').modal('hide');
    //                 alert('ลบข้อมูลเรียบร้อย');
    //                 location.reload();

    //             }, 2000);

    //         }
    //     })

    // });

/////////////////////////////////////////////////////

/// table ///

    var table = $('#example').DataTable({
        // 'ajax': "{{ route('stock.fetch') }}",
        responsive: false,
        columnDefs: [
        {
            orderable: true,
            targets: 0,
            checkboxes: { selectRow: true }

        }
        ],
        dom:
        '<"top"<"actions action-btns"B><"action-filters"lf>><"clear">rt<"bottom"<"actions">p>',
        oLanguage: {
        sLengthMenu: "_MENU_",
        sSearch: ""
        },
        aLengthMenu: [[4, 10, 15, 20], [4, 10, 15, 20]],
        select: {
        style: "multi"
        },
        // order: [[1, "desc"]],
        bInfo: false,
        pageLength: 4,
        buttons: [
        {
          text: "<i class='feather icon-plus'></i> เพิ่มข้อมูลใหม่",
            action: function() {
            window.location="{{route('LAB-Upload.create')}}";
            },
            className: "btn-outline-primary"
        },
        {
          text: "<i class='feather icon-eye'></i> หน้าเว็บ",
            action: function() {
            window.location="{{route('lab_download.index')}}";
            },
            className: "btn btn-warning"
        }
        ],
        initComplete: function(settings, json) {
        $(".dt-buttons .btn").removeClass("btn-secondary")
        }
    });

    // Handle form submission event
    $('#frm-example').on('click', '.qrcode', function (e) {
        var form = this;
        var rows_selected = table.column(0).checkboxes.selected();
        // Iterate over all selected checkboxes
        $.each(rows_selected, function (index, rowId) {
            // Create a hidden element
            $(form).append(
                $('<input>')
                .attr('type', 'hidden')
                .attr('name', 'id[]')
                .val(rowId),
                $('<input>')
                .attr('type', 'hidden')
                .attr('name', 'print')
                .attr('value', '1')
            );
        });

    });

     // Handle form submission event
    $('#frm-example').on('click', '.print', function (e) {
        var form = this;
        var rows_selected = table.column(0).checkboxes.selected();
        // Iterate over all selected checkboxes
        $.each(rows_selected, function (index, rowId) {
            // Create a hidden element
            $(form).append(
                $('<input>')
                .attr('type', 'hidden')
                .attr('name', 'id[]')
                .val(rowId),
                $('<input>')
                .attr('type', 'hidden')
                .attr('name', 'print')
                .attr('value', '2')
            );
        });

    });
    table.on('draw.dt', function(){
        setTimeout(function(){
        if (navigator.userAgent.indexOf("Mac OS X") != -1) {
            $(".dt-checkboxes-cell input, .dt-checkboxes").addClass("mac-checkbox")
        }
        }, 50);
    });
////////////////////////////////////////////////////
});
</script>
    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets') }}/vendors/js/ui/jquery.sticky.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/extensions/dropzone.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/dataTables.select.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <script src="{{ asset('app-assets') }}/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="{{ asset('app-assets') }}/js/scripts/forms/select/form-select2.js"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets') }}/js/scripts/ui/data-list-view.js"></script>
    <!-- END: Page JS-->
@endsection

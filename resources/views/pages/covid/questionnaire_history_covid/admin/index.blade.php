@extends('layouts.home')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/vendors/css/tables/datatable/datatables.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/data-list-view.css">
@endsection
@section('content')

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header text-center">
                <div class="col-md-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title mb-0">รายงานแบบซักถามประวัติกรณีเดินทางมาจากจังหวัดที่มีการระบาดของโรคติดเชื้อไวรัสโคโรนา 2019 <br>
                                และกรณีที่ลากลับภูมิลำเนา หรือไปราชการ หรือฝึกนอกที่ตั้งข้ามจังหวัด<br>
                            โรงพยาบาลค่ายกฤษณ์สีวะรา
                            </h2>

                        </div>
                    </div>
                </div>

            </div>
            <!-- BEGIN: Content-->

            <div class="content-body">

                <section id="data-list-view" class="data-list-view-header">
                    <div class="row">
                        <div class="col-12">

                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        @if(Session::has('message'))
                                        <div class="alert alert-primary">
                                            <span class="text-bold-700 font-medium-3 mr-1"><i class="feather icon-check mr-1"></i>{{ Session::get('message') }}</span>
                                        </div>

                                        @endif
                                        <div class="table-responsive">
                                            <table  id="example" class="table data-list-view">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center"></th>
                                                        <th>ยศ ชื่อ - นามสกุล</th>
                                                        <th>เบอร์โทรศัพท์มือถือ</th>
                                                        <th>เดินทางกลับมาจาก</th>
                                                        <th>หน่วยฝึก</th>
                                                        <th>วันที่แจ้ง</th>
                                                        <th>ตัวเลือก</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i=1 ?>
                                                    @foreach ($agency as $repair)
                                                    <tr>

                                                        <td class="text-center">{{ $repair->id }}</td>
                                                        <td>{{$repair->title_name}}{{$repair->first_name}} {{$repair->last_name}}

                                                            @foreach ($province_area as $index => $cate_tender)
                                                            @if (!empty($repair->come_back_add_user_covid->dist->province_code))

                                                                @if ($repair->come_back_add_user_covid->dist->province_code == $cate_tender->province_code)
                                                                    <span class="badge badge-pill" style="background-color:{{$cate_tender->surveillance_area_covid->color}} ;"> {{$cate_tender->surveillance_area_covid->name_rating}}</span>
                                                                @endif
                                                            @endif
                                                            @endforeach

                                                        </td>
                                                        <td>{{$repair->tel}}</td>
                                                        <td>
                                                            @if (!empty($repair->come_back_add_user_covid->district_id))
                                                            ต.{{$repair->come_back_add_user_covid->dist->district }}
                                                            อ.{{$repair->come_back_add_user_covid->dist->amphoe}}
                                                            จ.{{$repair->come_back_add_user_covid->dist->province}}
                                                            @endif
                                                        </td>

                                                        <td>{{$repair->training_unit_army->name}} สังกัด {{$repair->training_unit_army->agency_army->name}}</td>

                                                        <td> {{DateThai2(date('d-m-Y h:i:s A', strtotime($repair->updated_at)))}}</td>
                                                        <td class="product-action">

                                                            <span class="edit">
                                                                <a class="btn btn-icon btn-success waves-effect light" href="{{ route('Questionnaire-History-Covid-19.show', $repair->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="ดูข้อมูล" target="_blank">
                                                                        <i class="feather icon-monitor"></i></a>
                                                            </span>

                                                            <span class="delete">
                                                                <button type="button" class="btn btn-icon btn-danger waves-effect light" data-href="{{ route('category-waste.destroy', $repair->id)}}" data-toggle="modal" data-target="#default1<?= $repair->id ?>">
                                                                    <i class="feather icon-trash"></i></button>

                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <div class="modal fade text-left" id="default1<?= $repair->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <form action="{{ route('Questionnaire-History-Covid-19.destroy', $repair->id)}}" method="POST">
                                                                    {{ csrf_field() }}
                                                                    {{ method_field('DELETE') }}
                                                                <div class="modal-header">
                                                                <h4 class="modal-title" id="myModalLabel1">ลบข้อมูล</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                <h5>คุณต้องการลบ " {{$repair->title_name}}{{$repair->first_name}} {{$repair->last_name}} " ใช่หรือไม่?</h5>
                                                                </div>
                                                                <div class="modal-footer">
                                                                <button type="button" class="btn grey mb-1 btn-outline-secondary" data-dismiss="modal">ยกเลิก</button>
                                                                <button type="submit" class="btn btn-danger mr-1 mb-1 waves-effect waves-light">ลบข้อมูล</button>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th class="text-center"></th>
                                                        <th>ยศ ชื่อ - นามสกุล</th>
                                                        <th>เบอร์โทรศัพท์มือถือ</th>
                                                        <th>เดินทางกลับมาจาก</th>
                                                        <th>หน่วยฝึก</th>
                                                        <th>วันที่แจ้ง</th>
                                                        <th>ตัวเลือก</th>
                                                    </tr>
                                                </tfoot>
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
@push('scripts')
    <script>

        $(document).ready(function() {

            fetch_customer_data();

            function fetch_customer_data(query = '')
            {

                $.ajax({
                    url:"{{ route('profile_covid') }}",
                    method: 'GET',
                    data: {query:query},
                    dataType:'json',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success:function(data)
                    {
                        $('tbody').html(data.table_data);
                        $('#total_records').text(data.total_data);
                    }
                })

            }

        });

    </script>
@endpush
@section('scripts')
<script>

    $(document).ready(function(){


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
            // order: [[2, "desc"]],
            bInfo: false,
            pageLength: 4,
            buttons: [

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
        // $('#frm-example').on('click', '.print', function (e) {
        //     var form = this;
        //     var rows_selected = table.column(0).checkboxes.selected();
        //     // Iterate over all selected checkboxes
        //     $.each(rows_selected, function (index, rowId) {
        //         // Create a hidden element
        //         $(form).append(
        //             $('<input>')
        //             .attr('type', 'hidden')
        //             .attr('name', 'id[]')
        //             .val(rowId),
        //             $('<input>')
        //             .attr('type', 'hidden')
        //             .attr('name', 'print')
        //             .attr('value', '2')
        //         );
        //     });

        // });
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
   <!-- END: Page Vendor JS-->

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

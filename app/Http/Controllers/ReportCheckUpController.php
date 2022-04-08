<?php

namespace App\Http\Controllers;

use App\ReportCheckUp;
use App\ReportCheckUp_1;
use App\ReportCheckUp_1_1;
use App\ReportCheckUp_1_2;
use App\Report_check_up_blood;
use App\Report_check_up_detail_1;
use App\Kind_check_up;
use App\Report1_1;
use App\Title_name;
use Illuminate\Http\Request;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CoursesTemplateExport;
use App\Report_check_up_main;

class ReportCheckUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('pages.website.report1.end');
    }

    function index_admin(Request $request)
    {

        if (request()->ajax()) {

            if (!empty($request->fillter_kind) && empty($request->filler_year)) {

                $data = DB::table('report_check_ups')

                  ->select('*')
                  ->where('kind_check_up_id', '=', $request->fillter_kind)
                  ->orderBy('updated_at', 'desc')
                  ->get();



                return datatables()->of($data)
                ->addColumn('intro', function ($user) {
                    if ($user->title_name_id == '1') {
                        return 'นาย' . $user->first_name .' '. $user->last_name;
                    } else if ($user->title_name_id == '2') {
                        return 'นาง' . $user->first_name .' '. $user->last_name;
                    } else if ($user->title_name_id == '3') {
                        return 'นางสาว' . $user->first_name .' '. $user->last_name;
                    } else if ($user->title_name_id == '4') {
                        return 'พันเอก' . $user->first_name .' '. $user->last_name;
                    } else if ($user->title_name_id == '5') {
                        return 'พันเอกหญิง' . $user->first_name .' '. $user->last_name;
                    } else if ($user->title_name_id == '6') {
                        return 'พันโท' . $user->first_name .' '. $user->last_name;
                    } else if ($user->title_name_id == '7') {
                        return 'พันโทหญิง' . $user->first_name .' '. $user->last_name;
                    } else if ($user->title_name_id == '8') {
                        return 'พันตรี' . $user->first_name .' '. $user->last_name;
                    } else if ($user->title_name_id == '9') {
                        return 'พันตรีหญิง' . $user->first_name .' '. $user->last_name;
                    } else if ($user->title_name_id == '10') {
                        return 'ร้อยเอก' . $user->first_name .' '. $user->last_name;
                    } else if ($user->title_name_id == '11') {
                        return 'ร้อยเอกหญิง' . $user->first_name .' '. $user->last_name;
                    } else if ($user->title_name_id == '12') {
                        return 'ร้อยโท' . $user->first_name .' '. $user->last_name;
                    } else if ($user->title_name_id == '13') {
                        return 'ร้อยโทหญิง' . $user->first_name .' '. $user->last_name;
                    } else if ($user->title_name_id == '14') {
                        return 'ร้อยตรี' . $user->first_name .' '. $user->last_name;
                    } else if ($user->title_name_id == '15') {
                        return 'ร้อยตรีหญิง' . $user->first_name .' '. $user->last_name;
                    } else if ($user->title_name_id == '16') {
                        return 'จ่าสิบเอก' . $user->first_name .' '. $user->last_name;
                    } else if ($user->title_name_id == '17') {
                        return 'จ่าสิบเอกหญิง' . $user->first_name .' '. $user->last_name;
                    } else if ($user->title_name_id == '18') {
                        return 'จ่าสิบโท' . $user->first_name .' '. $user->last_name;
                    } else if ($user->title_name_id == '19') {
                        return 'จ่าสิบโทหญิง' . $user->first_name .' '. $user->last_name;
                    }else if ($user->title_name_id == '20') {
                        return 'จ่าสิบตรี' . $user->first_name .' '. $user->last_name;
                    }else if ($user->title_name_id == '21') {
                        return 'จ่าสิบตรีหญิง' . $user->first_name .' '. $user->last_name;
                    }else if ($user->title_name_id == '22') {
                        return 'สิบเอก' . $user->first_name .' '. $user->last_name;
                    }else if ($user->title_name_id == '23') {
                        return 'สิบเอกหญิง' . $user->first_name .' '. $user->last_name;
                    }else if ($user->title_name_id == '24') {
                        return 'สิบโท' . $user->first_name .' '. $user->last_name;
                    }else if ($user->title_name_id == '25') {
                        return 'สิบโทหญิง' . $user->first_name .' '. $user->last_name;
                    }else if ($user->title_name_id == '26') {
                        return 'สิบตรี' . $user->first_name .' '. $user->last_name;
                    }else if ($user->title_name_id == '27') {
                        return 'สิบตรีหญิง' . $user->first_name .' '. $user->last_name;
                    }
                })

                ->addColumn('kind_check_up_id', function ($user) {
                    if ($user->kind_check_up_id == '1') {
                        return 'มทบ.29';
                    } else if ($user->kind_check_up_id == '2') {
                        return 'รพ.ค่ายกฤษณ์สีวะรา';
                    } else if ($user->kind_check_up_id == '3') {
                        return 'ร.3';
                    } else if ($user->kind_check_up_id == '4') {
                        return 'ร.3 พัน 1';
                    }
                })



                ->addColumn('status', function ($user) {

                    // $year_start = '2561';
                    $year=(date("Y")+543);


                    $data3 = Report_check_up_detail_1::where('report_check_up_id', $user->id)
                                                ->Where('year', '=', date("Y"))
                                                ->first();

                    $data4 = ReportCheckUp_1::where('report_check_up_id', $user->id)
                                                    ->Where('year', '=', date("Y"))
                                                    ->first();

                    if(is_null($data3) && is_null($data4)) {
                        return '<div class="badge badge-pill badge-danger">
                                    <i class="feather icon-alert-circle"></i>
                                    <span class="text-bold-600">ข้อมูลสำรวจภาวะสุขภาพ</span>
                                </div>
                                <div class="badge badge-pill badge-danger">
                                    <i class="feather icon-alert-circle"></i>
                                    <span class="text-bold-600">ข้อมูลตรวจสุขภาพ</span>
                                </div>';
                    }else if(!is_null($data3) && is_null($data4)){
                        return '<div class="badge badge-pill badge-danger">
                                    <i class="feather icon-alert-circle"></i>
                                    <span class="text-bold-600">ข้อมูลสำรวจภาวะสุขภาพ</span>
                                </div>
                                <div class="badge badge-pill badge-success">
                                    <i class="feather icon-check"></i>
                                    <span class="text-bold-600">ข้อมูลตรวจสุขภาพ</span>
                                </div>';
                    }else if(is_null($data3) && !is_null($data4)){
                        return '<div class="badge badge-pill badge-success">
                                    <i class="feather icon-check"></i>
                                    <span class="text-bold-600">ข้อมูลสำรวจภาวะสุขภาพ</span>
                                </div>
                                <div class="badge badge-pill badge-danger">
                                    <i class="feather icon-alert-circle"></i>
                                    <span class="text-bold-600">ข้อมูลตรวจสุขภาพ</span>
                                </div>';
                    }else {
                        return '<div class="badge badge-pill badge-success">
                                    <i class="feather icon-check"></i>
                                    <span class="text-bold-600">ข้อมูลสำรวจภาวะสุขภาพ</span>
                                </div>
                                <div class="badge badge-pill badge-success">
                                    <i class="feather icon-check"></i>
                                    <span class="text-bold-600">ข้อมูลตรวจสุขภาพ</span>
                                </div>';
                    }



                })

                ->addColumn('link', function ($user) {

                        return '<span class="edit"><a data-toggle="tooltip" data-placement="top" title="" data-original-title="ดูข้อมูล"
                            class="btn btn-icon btn-success waves-effect light"
                            href="' . route('check_up_army_2.show', $user->id) . '">
                            <i class="feather icon-monitor"></i></a></span>';

                })

                ->rawColumns(['status', 'link', 'action'])
                ->toJson();


            }  else {

                $data = DB::table('report_check_ups')
                ->select('*')

                ->orderBy('updated_at', 'desc')
                ->get();
                return datatables()->of($data)
                    ->addColumn('intro', function ($user) {
                        if ($user->title_name_id == '1') {
                            return 'นาย' . $user->first_name .' '. $user->last_name;
                        } else if ($user->title_name_id == '2') {
                            return 'นาง' . $user->first_name .' '. $user->last_name;
                        } else if ($user->title_name_id == '3') {
                            return 'นางสาว' . $user->first_name .' '. $user->last_name;
                        } else if ($user->title_name_id == '4') {
                            return 'พันเอก' . $user->first_name .' '. $user->last_name;
                        } else if ($user->title_name_id == '5') {
                            return 'พันเอกหญิง' . $user->first_name .' '. $user->last_name;
                        } else if ($user->title_name_id == '6') {
                            return 'พันโท' . $user->first_name .' '. $user->last_name;
                        } else if ($user->title_name_id == '7') {
                            return 'พันโทหญิง' . $user->first_name .' '. $user->last_name;
                        } else if ($user->title_name_id == '8') {
                            return 'พันตรี' . $user->first_name .' '. $user->last_name;
                        } else if ($user->title_name_id == '9') {
                            return 'พันตรีหญิง' . $user->first_name .' '. $user->last_name;
                        } else if ($user->title_name_id == '10') {
                            return 'ร้อยเอก' . $user->first_name .' '. $user->last_name;
                        } else if ($user->title_name_id == '11') {
                            return 'ร้อยเอกหญิง' . $user->first_name .' '. $user->last_name;
                        } else if ($user->title_name_id == '12') {
                            return 'ร้อยโท' . $user->first_name .' '. $user->last_name;
                        } else if ($user->title_name_id == '13') {
                            return 'ร้อยโทหญิง' . $user->first_name .' '. $user->last_name;
                        } else if ($user->title_name_id == '14') {
                            return 'ร้อยตรี' . $user->first_name .' '. $user->last_name;
                        } else if ($user->title_name_id == '15') {
                            return 'ร้อยตรีหญิง' . $user->first_name .' '. $user->last_name;
                        } else if ($user->title_name_id == '16') {
                            return 'จ่าสิบเอก' . $user->first_name .' '. $user->last_name;
                        } else if ($user->title_name_id == '17') {
                            return 'จ่าสิบเอกหญิง' . $user->first_name .' '. $user->last_name;
                        } else if ($user->title_name_id == '18') {
                            return 'จ่าสิบโท' . $user->first_name .' '. $user->last_name;
                        } else if ($user->title_name_id == '19') {
                            return 'จ่าสิบโทหญิง' . $user->first_name .' '. $user->last_name;
                        }else if ($user->title_name_id == '20') {
                            return 'จ่าสิบตรี' . $user->first_name .' '. $user->last_name;
                        }else if ($user->title_name_id == '21') {
                            return 'จ่าสิบตรีหญิง' . $user->first_name .' '. $user->last_name;
                        }else if ($user->title_name_id == '22') {
                            return 'สิบเอก' . $user->first_name .' '. $user->last_name;
                        }else if ($user->title_name_id == '23') {
                            return 'สิบเอกหญิง' . $user->first_name .' '. $user->last_name;
                        }else if ($user->title_name_id == '24') {
                            return 'สิบโท' . $user->first_name .' '. $user->last_name;
                        }else if ($user->title_name_id == '25') {
                            return 'สิบโทหญิง' . $user->first_name .' '. $user->last_name;
                        }else if ($user->title_name_id == '26') {
                            return 'สิบตรี' . $user->first_name .' '. $user->last_name;
                        }else if ($user->title_name_id == '27') {
                            return 'สิบตรีหญิง' . $user->first_name .' '. $user->last_name;
                        }
                    })

                    ->addColumn('kind_check_up_id', function ($user) {
                        if ($user->kind_check_up_id == '1') {
                            return 'มทบ.29';
                        } else if ($user->kind_check_up_id == '2') {
                            return 'รพ.ค่ายกฤษณ์สีวะรา';
                        } else if ($user->kind_check_up_id == '3') {
                            return 'ร.3';
                        } else if ($user->kind_check_up_id == '4') {
                            return 'ร.3 พัน 1';
                        }
                    })

                    ->addColumn('status', function ($user) {

                        // $year_start = '2561';
                        $year=(date("Y")+543);


                        $data3 = Report_check_up_detail_1::where('report_check_up_id', $user->id)
                                                    ->Where('year', '=', date("Y"))
                                                    ->first();

                        $data4 = ReportCheckUp_1::where('report_check_up_id', $user->id)
                                                        ->Where('year', '=', date("Y"))
                                                        ->first();

                        if(is_null($data3) && is_null($data4)) {
                            return '<div class="badge badge-pill badge-danger">
                                        <i class="feather icon-alert-circle"></i>
                                        <span class="text-bold-600">ข้อมูลสำรวจภาวะสุขภาพ</span>
                                    </div>
                                    <div class="badge badge-pill badge-danger">
                                        <i class="feather icon-alert-circle"></i>
                                        <span class="text-bold-600">ข้อมูลตรวจสุขภาพ</span>
                                    </div>';
                        }else if(!is_null($data3) && is_null($data4)){
                            return '<div class="badge badge-pill badge-danger">
                                        <i class="feather icon-alert-circle"></i>
                                        <span class="text-bold-600">ข้อมูลสำรวจภาวะสุขภาพ</span>
                                    </div>
                                    <div class="badge badge-pill badge-success">
                                        <i class="feather icon-check"></i>
                                        <span class="text-bold-600">ข้อมูลตรวจสุขภาพ</span>
                                    </div>';
                        }else if(is_null($data3) && !is_null($data4)){
                            return '<div class="badge badge-pill badge-success">
                                        <i class="feather icon-check"></i>
                                        <span class="text-bold-600">ข้อมูลสำรวจภาวะสุขภาพ</span>
                                    </div>
                                    <div class="badge badge-pill badge-danger">
                                        <i class="feather icon-alert-circle"></i>
                                        <span class="text-bold-600">ข้อมูลตรวจสุขภาพ</span>
                                    </div>';
                        }else {
                            return '<div class="badge badge-pill badge-success">
                                        <i class="feather icon-check"></i>
                                        <span class="text-bold-600">ข้อมูลสำรวจภาวะสุขภาพ</span>
                                    </div>
                                    <div class="badge badge-pill badge-success">
                                        <i class="feather icon-check"></i>
                                        <span class="text-bold-600">ข้อมูลตรวจสุขภาพ</span>
                                    </div>';
                        }



                    })

                    ->addColumn('link', function ($user) {

                            return '<span class="edit"><a data-toggle="tooltip" data-placement="top" title="" data-original-title="ดูข้อมูล"
                                class="btn btn-icon btn-success waves-effect light"
                                href="' . route('check_up_army_2.show', $user->id) . '">
                                <i class="feather icon-monitor"></i></a></span>';

                    })

                    ->rawColumns(['status', 'link', 'action'])
                    ->toJson();


            }


        }


        $kinds = Kind_check_up::where('cate_check_up_id', '2')->get();

        return view('pages.check_up.v_2.admin.unit_army.index', compact('kinds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $data = ReportCheckUp::where('hn', 'LIKE', '%' . $request->country . "%")
                 ->orWhere('cid','LIKE','%'.$request->country."%")
                ->orWhere('first_name', 'LIKE', '%' . $request->country . "%")
                ->orWhere('last_name', 'LIKE', '%' . $request->country . "%")
                ->paginate(10);


            $output = '';

            if (count($data) > 0) {

                $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';

                foreach ($data as $row) {

                    $output .= '<li class="list-group-item"><a href="' . route('check_up_army_2.show', $row->id) . '">HN : ' . $row->hn . ' ' . $row->title_name->name . '' . $row->first_name . ' ' . $row->last_name . '</a></li>';
                }

                $output .= '</ul>';
            } else {

                $output .= '<li class="list-group-item">' . 'ไม่มีข้อมูล' . '</li>';
            }

            return $output;
        }
    }

    public function search_his(Request $request, ReportCheckUp $reportCheckUp)
    {
        //dd($request);
        $data = $reportCheckUp->find($request->user_id);
        $titlename = Title_name::all();
        $data2 = ReportCheckUp_1::where('report_check_up_id', $request->user_id)->orderByDesc('year')
        ->get();
        // $data2 = Report_check_up_blood::where('report_check_up_id', $id)->orderByDesc('created_at')
        //     ->get();
        $data3 = Report_check_up_detail_1::where('report_check_up_id', $request->user_id)->orderByDesc('year')
            ->get();

            $old_date = explode(' ', $request->year);
            $vn =  $old_date[0];
            $lab_order_number =  $old_date[1];
            $report_date =  $old_date[2];
            $lab_order = DB::connection('mysql2')->table('lab_order')
                ->select('lab_order_result', 'lab_items_name_ref', 'lab_items_normal_value_ref')
                ->where('lab_order_number', $lab_order_number)
                ->get();


            $opdscreen = DB::connection('mysql2')->table('opdscreen')
            ->select('*')
            ->where('vn', $vn)

            ->first();

            // +"bw": 75.0 น้ำหนัก

            foreach ($lab_order as $roles){
                if($roles->lab_items_name_ref == 'HCT'){
                  $lab_order_hct =  $roles->lab_order_result;
                }
                if($roles->lab_items_name_ref == 'MCV'){
                    $lab_order_mct =  $roles->lab_order_result;
                }

                if($roles->lab_items_name_ref == 'PROTEIN'){

                    if($roles->lab_order_result == 'Negative'){
                        $lab_order_protein =  'Negative';

                    }else{
                        $lab_order_protein =  $roles->lab_order_result;
                    }

                }else{
                    $lab_order_protein =  'Positive';
                }

                if($roles->lab_items_name_ref == 'RBC' && $roles->lab_items_normal_value_ref == '0-5'){

                    if($roles->lab_order_result == '0-1'){

                        $lab_order_rbc = 'Negative';

                    }elseif($roles->lab_order_result == '1-2'){

                        $lab_order_rbc = 'Negative';

                    }elseif($roles->lab_order_result == '3-5'){

                        $lab_order_rbc = 'Negative';

                    }else{
                        $lab_order_rbc = 'Positive';

                    }


                }else{
                    $lab_order_rbc =  'Positive';
                }

                if($roles->lab_items_name_ref == 'WBC' && $roles->lab_items_normal_value_ref == '0-5'){

                    if($roles->lab_order_result == '0-1'){

                        $lab_order_wbc = 'Negative';

                    }elseif($roles->lab_order_result == '1-2'){

                        $lab_order_wbc = 'Negative';

                    }elseif($roles->lab_order_result == '3-5'){

                        $lab_order_wbc = 'Negative';

                    }else{
                        $lab_order_wbc = 'Positive';

                    }


                }else{
                    $lab_order_wbc =  'Positive';
                }

                if($roles->lab_items_name_ref == 'EPITHERIAL' && $roles->lab_items_normal_value_ref == '0-5'){

                    if($roles->lab_order_result == 'Sq.Epi.Cell : 0-1'){

                        $lab_order_epi = 'Negative';

                    }elseif($roles->lab_order_result == 'Sq.Epi.Cell : 1-2'){

                        $lab_order_epi = 'Negative';

                    }elseif($roles->lab_order_result == 'Sq.Epi.Cell : 3-5'){

                        $lab_order_epi = 'Negative';

                    }else{
                        $lab_order_epi = 'Positive';

                    }


                }else{
                    $lab_order_epi =  'Positive';
                }



            }

    // dd($lab_order);



        return view('pages.check_up.v_2.admin.unit_army.create', compact('titlename', 'lab_order', 'opdscreen', 'lab_order_hct', 'lab_order_mct', 'lab_order_protein', 'lab_order_rbc', 'lab_order_wbc', 'lab_order_epi', 'report_date'))->withData($data)
          //  ->withLab_head($opdscreen)
            ->withData2($data2)
            ->withData3($data3);
    }





    public function create($id, ReportCheckUp $reportCheckUp)
    {

        $data = $reportCheckUp->find($id);


        return view('pages.check_up.v_2.admin.unit_army.create', compact('data'));

    }


    public function store(Request $request)
    {

        //dd($request);
        $this->validate(
            $request,
            [

                "first_name" => 'required',
                "last_name" => 'required',
                "cid" => 'required',
                "birthdate" => 'required',
                "department" => 'required',

                "class" => 'required',
                "job_description" => 'required',
                "phonenumber" => 'required',

            // "a1_d" => 'required',
            // "b2_d" => 'required|integer',
            "c3_1" => 'required|integer',
            "c3_2" => 'required|integer',
            "c3_3" => 'required|integer',
            "c3_4" => 'required|integer',
            "c3_5" => 'required|integer',
            "c3_6" => 'required|integer',
            "d4" => 'required|integer',
            // "d4_d" => 'required',
            "e5_1" => 'required|integer',
            "e5_2" => 'required|integer',
            "e5_3" => 'required|integer',
            "e5_4" => 'required|integer',
            "e5_5" => 'required|integer',
            "f6" => 'required|integer',
            // "g7" => 'required|integer',
            // "g7_d1" => 'required|integer',
            // "g7_d2" => 'required|integer',
            // "g7_d3" => 'required|integer',
            // "g7_d4" => 'required|integer',
            // "g7_d5" => 'required|integer',
            // "g7_d6" => 'required|integer',
            "h8" => 'required|integer',
            "i9_1" => 'required|integer',
            "i9_2" => 'required|integer',
            "i9_3" => 'required|integer',
            "i9_4" => 'required|integer',
            "i9_5" => 'required|integer',
            "j10" => 'required|integer',
            "k11" => 'required|integer',
            "l12" => 'required',
            "m13_1" => 'required|integer',
            "m13_2" => 'required|integer',
            "m13_3" => 'required|integer',
            ],
            [

                'first_name.required'    => 'กรุณากรอกชื่อหน้า',
                'last_name.required'    => 'กรุณากรอกนามสกุล',
                "cid.required" => 'กรุณากรอกเลขบัตรประจำตัวประชาชน',


                "class.required" => 'กรุณากรอกประเภท',
                "kind_check_up.required" => 'กรุณาเลือกสังกัด',

                "job_description.required" => 'กรุณากรอกลักษณะงานที่ทำส่วนใหญ่',
                "phonenumber.required" => 'กรุณากรอกเบอร์โทรศัพท์',

                "department" => 'กรุณากรอกที่ทำงาน',

                'a1.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 1',
                'b2.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 2',
                'c3_1.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 3.1',
                'c3_2.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 3.2',
                'c3_3.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 3.3',
                'c3_4.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 3.4',
                'c3_5.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 3.5',
                'c3_6.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 3.6',

                'd4.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 4',
                'e5_1.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 5.1',
                'e5_2.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 5.2',
                'e5_3.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 5.3',
                'e5_4.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 5.4',
                'e5_5.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 5.5',

                'f6.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 6',
                // 'g7.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 7',
                // 'g7_d1.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ให้ครบทุกช่อง ข้อที่ 7',
                // 'g7_d2.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ให้ครบทุกช่อง ข้อที่ 7',
                // 'g7_d3.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ให้ครบทุกช่อง ข้อที่ 7',
                // 'g7_d4.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ให้ครบทุกช่อง ข้อที่ 7',
                // 'g7_d5.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ให้ครบทุกช่อง ข้อที่ 7',
                //'g7_d6.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ให้ครบทุกช่อง ข้อที่ 7',
                'h8.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 8',
                'i9_1.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 9.1',
                'i9_2.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 9.2',
                'i9_3.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 9.3',
                'i9_4.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 9.4',
                'i9_5.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 9.5',
                'j10.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 10',
                'k11.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 11',
                'l12.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 12',
                'm13_1.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 13 สูบบุหรี่',
                'm13_2.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 13 ดื่มแอลกอฮอล์',
                'm13_3.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 13 การออกกำลังกาย',

            ]
        );

            $assessments = new ReportCheckUp;

            $assessments->title_name_id = $request->title_name;
            $assessments->first_name = $request->first_name;
            $assessments->last_name = $request->last_name;
            $assessments->cid = $request->cid;
            $assessments->hn = $request->hn;
            $assessments->position = $request->position;
            $assessments->srg = $request->srg;
            $assessments->kind_check_up_id = $request->kind_check_up;
            $assessments->department = $request->department;

            $assessments->gender = $request->gender;

            $assessments->birthdate = DateData($request->birthdate);
            $assessments->age = getAge(DateData($request->birthdate));

            $classs  = $request->class;
            $classss  = $request->class_d;
            $assessments->class = $classs.$classss;

            $assessments->job_description = $request->job_description;
            $assessments->phonenumber = $request->phonenumber;

            $assessments->save();


        $data = new ReportCheckUp_1;

        $data->report_check_up_id = $assessments->id;

        $data->year = date("Y");

        $data->total_time = "";

        $data->a1 = implode(' , ',$request->a1);
        $data->a1_d = $request->a1_d;

        $data->b2 = implode(' , ', $request->b2);
        $data->b2_d = $request->b2_d;

        $data->c3_1 = $request->c3_1;
        $data->c3_2 = $request->c3_2;
        $data->c3_3 = $request->c3_3;
        $data->c3_4 = $request->c3_4;
        $data->c3_5 = $request->c3_5;
        $data->c3_6 = $request->c3_6;

        $data->d4 = $request->d4;
        $data->d4_d = $request->d4_d;

        $data->e5_1 = $request->e5_1;
        $data->e5_2 = $request->e5_2;
        $data->e5_3 = $request->e5_3;
        $data->e5_4 = $request->e5_4;
        $data->e5_5 = $request->e5_5;

        $data->f6 = $request->f6;

        $data->g7 = $request->g7;
        $data->g7_d1 = $request->g7_d1;
        $data->g7_d2 = $request->g7_d2;
        $data->g7_d3 = $request->g7_d3;
        $data->g7_d4 = $request->g7_d4;
        $data->g7_d5 = $request->g7_d5;
        $data->g7_d6 = $request->g7_d6;

        $data->h8 = $request->h8;

        $data->i9_1 = $request->i9_1;
        $data->i9_2 = $request->i9_2;
        $data->i9_3 = $request->i9_3;
        $data->i9_4 = $request->i9_4;
        $data->i9_5 = $request->i9_5;

        $data->j10 = $request->j10;
        $data->k11 = $request->k11;


        $data->l12 = implode(' , ', $request->l12);
        if($request->l12 == '4'){
            $data->l12_d = 'โรคไขมันโลหิตสูง';
        }
        if($request->l12 == '5'){
            $data->l12_d = $request->l12_d;
        }

        $data->m13_1 = $request->m13_1;
        $data->m13_2 = $request->m13_2;
        $data->m13_3 = $request->m13_3;

       $data->save();


        if ($request->j10 == '2' || $request->k11 == '2') {

            return redirect()->route('CheckUp2.show', $assessments->id);
        } else {

            return redirect()->route('CheckUp1.index');
        }


    }

    public function export(Request $request)
    {

        $year = $request->year - 543;
        if($request->kinds == '1'){
            $kind = 'มทบ29';
        }elseif($request->kinds == '2'){
            $kind = 'รพค่ายกฤษณ์สีวะรา';
        }elseif($request->kinds == '3'){
            $kind = 'ร3';
        }elseif($request->kinds == '4'){
            $kind = 'ร3พัน1';
        }


        return Excel::download(new CoursesTemplateExport($request->kinds, $year), 'ตรวจสุขภาพประจำปี'.$request->year.'หน่วย'.$kind.'.xlsx');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ReportCheckUp  $reportCheckUp
     * @return \Illuminate\Http\Response
     */
    public function show($id, ReportCheckUp $reportCheckUp)
    {
        $data = $reportCheckUp->find($id);
        $titlename = Title_name::all();
        $data2 = ReportCheckUp_1::where('report_check_up_id', $id)->orderByDesc('year')->get();

        $data3 = Report_check_up_main::where('report_check_up_id', $id)->get();


    //    $data3 = DB::table('report_check_ups')
    //         ->leftJoin('title_names', 'report_check_ups.title_name_id', '=', 'title_names.id')
    //         ->leftJoin('report_check_up_detail_1s', 'report_check_ups.id', '=', 'report_check_up_detail_1s.report_check_up_id')
    //         ->leftJoin('report_check_up_cbcs', 'report_check_ups.id', '=', 'report_check_up_cbcs.report_check_up_id')
    //         ->leftJoin('report_check_up_urines', 'report_check_ups.id', '=', 'report_check_up_urines.report_check_up_id')
    //         ->where('report_check_up_detail_1s.id', '=', $id)
    //         ->groupBy('report_check_up_urines.year')
    //         ->get();

        //    dd($data3);

        $lab_head = DB::connection('mysql2')->table('lab_head')
                        ->select('lab_order_number', 'report_date', 'report_time', 'hn', 'vn')

                        ->where('hn', $data->hn)
                        ->where('form_name', 'ตรวจสุขภาพประจำปี')

                        ->orderByDesc('report_date')
                        ->get();


        return view('pages.check_up.v_2.admin.unit_army.show', compact('titlename', 'lab_head'))->withData($data)
       // ->withLab_head($lab_head)
            ->withData2($data2)
            ->withData3($data3);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReportCheckUp  $reportCheckUp
     * @return \Illuminate\Http\Response
     */
    public function edit(ReportCheckUp $reportCheckUp, $id)
    {
        $data = $reportCheckUp->find($id);

        //  $data = Report1::where('id', $id)->first();
        $titlename = Title_name::all();
        $kindcheckup = Kind_check_up::where('cate_check_up_id', '2')->get();
       //dd($data);
        return view('pages.check_up.v_2.admin.unit_army.edit', compact('data', 'titlename', 'kindcheckup'));
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReportCheckUp  $reportCheckUp
     * @return \Illuminate\Http\Response
     */
    public function update_profile(Request $request, ReportCheckUp $reportCheckUp, $id)
    {

        $assessments = ReportCheckUp::find($id);
        // dd($assessments);

        $assessments->title_name_id = $request->title_name;
        $assessments->first_name = $request->first_name;
        $assessments->last_name = $request->last_name;
        $assessments->cid = $request->cid;
        $assessments->hn = $request->hn;
        $assessments->position = $request->position;
        $assessments->srg = $request->srg;
        $assessments->kind_check_up_id = $request->kind_check_up_id;
        $assessments->department = $request->department;
        $assessments->gender = $request->gender;

        if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$request->birthdate)) {

            $assessments->birthdate = $request->birthdate;
            $assessments->age = getAge($request->birthdate);

        } else {

            $assessments->birthdate = DateData($request->birthdate);
            $assessments->age = getAge(DateData($request->birthdate));

        }


        $assessments->class  = $request->class;

        if($request->class == '5'){

            $assessments->class_detail = $request->class_d;

        }else{
            $assessments->class_detail = '';
        }


        $assessments->job_description = $request->job_description;
        $assessments->phonenumber = $request->phonenumber;

        $assessments->save();


        return redirect()->route('check_up_army_2.show', $assessments->id)->with(['message_profile' => 'แก้ไขข้อมูลเรียบร้อย!']);



    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReportCheckUp  $reportCheckUp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReportCheckUp $reportCheckUp, $id)
    {
        //dd($request);
        $this->validate(
            $request,
            [

                "first_name" => 'required',
                "last_name" => 'required',
                "cid" => 'required',
                "birthdate" => 'required',
                "department" => 'required',

                "class" => 'required',
                "job_description" => 'required',
                "phonenumber" => 'required',

            // "a1_d" => 'required',
            // "b2_d" => 'required|integer',
            "c3_1" => 'required|integer',
            "c3_2" => 'required|integer',
            "c3_3" => 'required|integer',
            "c3_4" => 'required|integer',
            "c3_5" => 'required|integer',
            "c3_6" => 'required|integer',
            "d4" => 'required|integer',
            // "d4_d" => 'required',
            "e5_1" => 'required|integer',
            "e5_2" => 'required|integer',
            "e5_3" => 'required|integer',
            "e5_4" => 'required|integer',
            "e5_5" => 'required|integer',
            "f6" => 'required|integer',
            // "g7" => 'required|integer',
            // "g7_d1" => 'required|integer',
            // "g7_d2" => 'required|integer',
            // "g7_d3" => 'required|integer',
            // "g7_d4" => 'required|integer',
            // "g7_d5" => 'required|integer',
            // "g7_d6" => 'required|integer',
            "h8" => 'required|integer',
            "i9_1" => 'required|integer',
            "i9_2" => 'required|integer',
            "i9_3" => 'required|integer',
            "i9_4" => 'required|integer',
            "i9_5" => 'required|integer',
            "j10" => 'required|integer',
            "k11" => 'required|integer',
            "l12" => 'required',
            "m13_1" => 'required|integer',
            "m13_2" => 'required|integer',
            "m13_3" => 'required|integer',
            ],
            [

                'first_name.required'    => 'กรุณากรอกชื่อหน้า',
                'last_name.required'    => 'กรุณากรอกนามสกุล',
                "cid.required" => 'กรุณากรอกเลขบัตรประจำตัวประชาชน',


                "class.required" => 'กรุณากรอกประเภท',
                "kind_check_up.required" => 'กรุณาเลือกสังกัด',

                "job_description.required" => 'กรุณากรอกลักษณะงานที่ทำส่วนใหญ่',
                "phonenumber.required" => 'กรุณากรอกเบอร์โทรศัพท์',

                "department" => 'กรุณากรอกที่ทำงาน',

                'a1.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 1',
                'b2.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 2',
                'c3_1.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 3.1',
                'c3_2.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 3.2',
                'c3_3.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 3.3',
                'c3_4.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 3.4',
                'c3_5.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 3.5',
                'c3_6.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 3.6',

                'd4.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 4',
                'e5_1.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 5.1',
                'e5_2.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 5.2',
                'e5_3.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 5.3',
                'e5_4.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 5.4',
                'e5_5.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 5.5',

                'f6.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 6',
                // 'g7.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 7',
                // 'g7_d1.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ให้ครบทุกช่อง ข้อที่ 7',
                // 'g7_d2.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ให้ครบทุกช่อง ข้อที่ 7',
                // 'g7_d3.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ให้ครบทุกช่อง ข้อที่ 7',
                // 'g7_d4.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ให้ครบทุกช่อง ข้อที่ 7',
                // 'g7_d5.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ให้ครบทุกช่อง ข้อที่ 7',
                //'g7_d6.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ให้ครบทุกช่อง ข้อที่ 7',
                'h8.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 8',
                'i9_1.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 9.1',
                'i9_2.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 9.2',
                'i9_3.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 9.3',
                'i9_4.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 9.4',
                'i9_5.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 9.5',
                'j10.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 10',
                'k11.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 11',
                'l12.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 12',
                'm13_1.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 13 สูบบุหรี่',
                'm13_2.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 13 ดื่มแอลกอฮอล์',
                'm13_3.required'    => 'กรุณาตอบแบบสำรวจภาวะสุขภาพประจำปีกำลังพลกองทัพบก ข้อที่ 13 การออกกำลังกาย',

            ]
        );

        $assessments = ReportCheckUp::find($id);

        $assessments->title_name_id = $request->title_name;
        $assessments->first_name = $request->first_name;
        $assessments->last_name = $request->last_name;
        $assessments->cid = $request->cid;
        $assessments->hn = $request->hn;
        $assessments->position = $request->position;
        $assessments->srg = $request->srg;
        $assessments->kind_check_up_id = $request->kind_check_up;
        $assessments->department = $request->department;
        $assessments->gender = $request->gender;

        if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$request->birthdate)) {

            $assessments->birthdate = $request->birthdate;
            $assessments->age = getAge($request->birthdate);

        } else {

            $assessments->birthdate = DateData($request->birthdate);
            $assessments->age = getAge(DateData($request->birthdate));

        }


        $classs  = $request->class;
        $classss  = $request->class_d;
        $assessments->class = $classs.$classss;

        $assessments->job_description = $request->job_description;
        $assessments->phonenumber = $request->phonenumber;

        $assessments->save();

        $data = new ReportCheckUp_1;

        $data->report_check_up_id = $assessments->id;

        $data->year = date("Y");

        $data->total_time = "";

        $data->a1 = implode(' , ',$request->a1);
        $data->a1_d = $request->a1_d;

        $data->b2 = implode(' , ', $request->b2);
        $data->b2_d = $request->b2_d;

        $data->c3_1 = $request->c3_1;
        $data->c3_2 = $request->c3_2;
        $data->c3_3 = $request->c3_3;
        $data->c3_4 = $request->c3_4;
        $data->c3_5 = $request->c3_5;
        $data->c3_6 = $request->c3_6;

        $data->d4 = $request->d4;
        $data->d4_d = $request->d4_d;

        $data->e5_1 = $request->e5_1;
        $data->e5_2 = $request->e5_2;
        $data->e5_3 = $request->e5_3;
        $data->e5_4 = $request->e5_4;
        $data->e5_5 = $request->e5_5;

        $data->f6 = $request->f6;

        $data->g7 = $request->g7;
        $data->g7_d1 = $request->g7_d1;
        $data->g7_d2 = $request->g7_d2;
        $data->g7_d3 = $request->g7_d3;
        $data->g7_d4 = $request->g7_d4;
        $data->g7_d5 = $request->g7_d5;
        $data->g7_d6 = $request->g7_d6;

        $data->h8 = $request->h8;

        $data->i9_1 = $request->i9_1;
        $data->i9_2 = $request->i9_2;
        $data->i9_3 = $request->i9_3;
        $data->i9_4 = $request->i9_4;
        $data->i9_5 = $request->i9_5;

        $data->j10 = $request->j10;
        $data->k11 = $request->k11;


        $data->l12 = implode(' , ', $request->l12);
        $data->l12_d = $request->l12_d;


        $data->m13_1 = $request->m13_1;
        $data->m13_2 = $request->m13_2;
        $data->m13_3 = $request->m13_3;

       $data->save();

        if ($request->j10 == '2' || $request->k11 == '2') {

            return redirect()->route('CheckUp2.show', $assessments->id);
        } else {

            return redirect()->route('CheckUp1.index');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReportCheckUp  $reportCheckUp
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReportCheckUp $reportCheckUp, $id)
    {
        $user = $reportCheckUp->find($id);

        $reportCheckDetail = Report_check_up_detail_1::where('report_check_up_id', '=', $user->id)->delete();

        // foreach($reportCheckDetail as $list){
        //     $list->id
        // }


        $user->delete();

        return redirect()->route('check_up.army_2')->with(['message' => 'ลบข้อมูลเรียบร้อย!']);
    }
}

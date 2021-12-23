<?php

namespace App\Http\Controllers;

use App\ReportCheckUp;
use App\ReportCheckUp_1;
use App\ReportCheckUp_1_1;
use App\ReportCheckUp_1_2;
use App\Report_check_up_blood;
use App\Report_check_up_detail_1;
use App\Kind_check_up;
use Illuminate\Http\Request;
use DB;

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


            } else if (!empty($request->filler_year) && empty($request->fillter_kind)) {


            } else if (!empty($request->filler_year) && !empty($request->fillter_kind)) {

                $data = DB::table('report_check_ups')
                ->select('*')

                ->orderBy('created_at', 'desc')
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
                    // ->addColumn('title_name_id'
                    // })

                    ->addColumn('link', function ($user) {
                        return '<span class="edit"><a data-toggle="tooltip" data-placement="top" title="" data-original-title="ดูข้อมูล"
                                class="btn btn-icon btn-success waves-effect light"
                                href="' . route('army.show', $user->id) . '">
                                <i class="feather icon-monitor"></i></a></span>';
                    })

                    ->rawColumns(['link', 'action'])
                    ->toJson();

            } else {

                $data = DB::table('report_check_ups')
                ->select('*')

                ->orderBy('created_at', 'desc')
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
                    // ->addColumn('title_name_id'
                    // })

                    ->addColumn('link', function ($user) {
                        return '<span class="edit"><a data-toggle="tooltip" data-placement="top" title="" data-original-title="ดูข้อมูล"
                                class="btn btn-icon btn-success waves-effect light"
                                href="' . route('check_up_army_2.show', $user->id) . '">
                                <i class="feather icon-monitor"></i></a></span>';
                    })

                    ->rawColumns(['link', 'action'])
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
    public function create($id, ReportCheckUp $reportCheckUp)
    {
        $data = $reportCheckUp->find($id);

        //dd($titlename);
        return view('pages.check_up.v_2.admin.unit_army.create', compact('data'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store_CheckUp(Request $request)
    {

        $assessments = new Report_check_up_detail_1;

        $assessments->report_check_up_id = $request->report_check_up_id;
        $assessments->year = $request->year;

        $assessments->weight = $request->weight;
        $assessments->height = $request->height;
        $assessments->bmi = $request->bmi;
        $assessments->waist = $request->waist;
        $assessments->pressure_1 = $request->pressure_1;
        $assessments->pulse_1 = $request->pulse_1;
        $assessments->pressure_2 = $request->pressure_2;
        $assessments->pulse_2 = $request->pulse_2;

        $assessments->x_ray = $request->x_ray;

        $assessments->urine = $request->urine;
        $assessments->urine_d1 = $request->urine_d1;
        $assessments->urine_d2 = $request->urine_d2;
        $assessments->urine_d = $request->urine_d;

        $assessments->cbc = $request->cbc;
        $assessments->cbc_d = $request->cbc_d;
        $assessments->pap = $request->pap;
        $assessments->pap_d = $request->pap_d;

        $assessments->blood_tg = $request->blood_tg;
        $assessments->blood_glu = $request->blood_glu;
        $assessments->blood_chol = $request->blood_chol;
        $assessments->blood_hdl = $request->blood_hdl;

        $assessments->blood_ldl = $request->blood_ldl;
        $assessments->blood_bun = $request->blood_bun;
        $assessments->blood_cr = $request->blood_cr;
        $assessments->blood_uric = $request->blood_uric;
        $assessments->blood_ast = $request->blood_ast;
        $assessments->blood_alt = $request->blood_alt;

        $assessments->save();

        return redirect()->route('army.show_year', $assessments->id)->with(['message' => 'บันทึกข้อมูลเรียบร้อย!']);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [

                "first_name" => 'required',
                "last_name" => 'required',
                "cid" => 'required',
                "birthdate" => 'required',
                "department" => 'required',
                "age" => 'required|integer',
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

                "age.required" => 'กรุณากรอกอายุ',
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

        $assessments->title_name_id = $request->title_name_id;
        $assessments->first_name = $request->first_name;
        $assessments->last_name = $request->last_name;
        $assessments->cid = $request->cid;
        $assessments->hn = $request->hn;
        $assessments->position = $request->position;
        $assessments->srg = $request->srg;
        $assessments->kind_check_up = $request->kind_check_up;
        $assessments->department = $request->department;
        $assessments->age = $request->age;
        $assessments->gender = $request->gender;

        // if(is_null($request->birthdate)){
        //     $ass = '';
        // } else {
          $ass = $request->birthdate;
        // }


        $assessments->birthdate = DateData($ass);
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
     * Display the specified resource.
     *
     * @param  \App\ReportCheckUp  $reportCheckUp
     * @return \Illuminate\Http\Response
     */
    public function show($id, ReportCheckUp $reportCheckUp)
    {
        $data = $reportCheckUp->find($id);

        $data2 = Report_check_up_blood::where('report_check_up_id', $id)->orderByDesc('created_at')
            ->get();
        $data3 = Report_check_up_detail_1::where('report_check_up_id', $id)->orderByDesc('created_at')
            ->get();
       // dd($data->title_name_id->name);

        return view('pages.check_up.v_2.admin.unit_army.show')->withData($data)
            ->withData2($data2)
            ->withData3($data3);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReportCheckUp  $reportCheckUp
     * @return \Illuminate\Http\Response
     */
    public function edit(ReportCheckUp $reportCheckUp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReportCheckUp  $reportCheckUp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReportCheckUp $reportCheckUp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReportCheckUp  $reportCheckUp
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReportCheckUp $reportCheckUp)
    {
        //
    }
}

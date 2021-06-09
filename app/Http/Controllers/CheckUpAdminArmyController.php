<?php

namespace App\Http\Controllers;

use App\CheckUpAdminArmy;
use App\Cate_check_up;
use App\Kind_check_up;
use App\Report1;
use App\Report1_1;
use App\Title_name;
use Illuminate\Http\Request;
use Session;
use DB;


class CheckUpAdminArmyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function index(Request $request)
    {


        // $data = DB::table('report1_1s')
        //                 ->select('*','report1_1s.id')
        //                 ->leftjoin('report1s', 'report1s.id', '=', 'report1_1s.report1_id')


        //              // ->groupBy('report1_1s.report1_id')

        //                 ->get();

        //  dd($data);
        //////1////////////////////////////
        // $data = DB::table('report1s')
        //   ->select('*')
        //  ->join('report1_1s', 'report1s.id', '=', 'report1_1s.report1_id')
        //  ->whereYear('report1_1s.created_at', '=', date($filler_year))
        //  ->where('kind_check_up_id','=', $request->fillter_kind)
        //  ->groupBy('report1s.hn')

        //  ->get();
        //////2//////////////////////
        //   $data = DB::table('report1_1s')
        //     ->select('*')
        //     ->leftjoin('report1s', 'report1s.id', '=', 'report1_1s.report1_id')
        //     ->where('report1s.kind_check_up_id', '=', $request->fillter_kind)
        //     ->whereYear('report1_1s.created_at', '=', date($filler_year))
        //     ->orderBy('report1_1s.created_at', 'desc')
        //      ->get();
        ////////////////////////////
        //
        //  ->orderBy('report1_1s.created_at', 'desc')

        if (request()->ajax()) {

            if (!empty($request->fillter_kind) && empty($request->filler_year)) {

                $data = DB::table('report1_1s')
                    ->select('*', 'report1_1s.id')
                    ->leftjoin('report1s', 'report1s.id', '=', 'report1_1s.report1_id')
                    ->where('report1s.kind_check_up_id', '=', $request->fillter_kind)
                    ->groupBy('report1_id')

                    ->get();



                return datatables()->of($data)
                    ->addColumn('intro', '{{$title_name}}{{$first_name}} {{$last_name}}')

                    ->addColumn('kind_check_up_id', function ($user) {
                        if ($user->kind_check_up_id == '1') {
                            return 'มทบ.29';
                        } else if ($user->kind_check_up_id == '3') {
                            return 'ร.3';
                        } else if ($user->kind_check_up_id == '4') {
                            return 'ร.3 พัน 1';
                        }
                    })

                    ->addColumn('link', function ($user) {
                        return '<span class="edit"><a data-toggle="tooltip" data-placement="top" title="" data-original-title="ดูข้อมูล" class="btn btn-icon btn-success waves-effect light"
                                href="' . route('army.show', $user->report1_id) . '"><i class="feather icon-monitor"></i></a></span>';
                    })

                    ->rawColumns(['link', 'action'])
                    ->toJson();
            } else if (!empty($request->filler_year) && empty($request->fillter_kind)) {

                // date('Y', strtotime($user->year)) //แปลงวันเป็นปี


                $data = DB::table('report1_1s')
                    ->select('*', 'report1_1s.id')
                    ->leftjoin('report1s', 'report1s.id', '=', 'report1_1s.report1_id')
                    ->where('report1_1s.year', '=', $request->filler_year)
                    ->orderByDesc('report1_1s.created_at')
                    ->groupBy('report1_id')
                    ->get();


                return datatables()->of($data)
                    ->addColumn('intro', '{{$title_name}}{{$first_name}} {{$last_name}}')
                    ->addColumn('kind_check_up_id', function ($user) {
                        if ($user->kind_check_up_id == '1') {
                            return 'มทบ.29';
                        } else if ($user->kind_check_up_id == '3') {
                            return 'ร.3';
                        } else if ($user->kind_check_up_id == '4') {
                            return 'ร.3 พัน 1';
                        }
                    })

                    ->addColumn('link', function ($user) use ($request) {
                        if ($user->year == $request->filler_year) {
                            return '<span class="edit"><a data-toggle="tooltip" data-placement="top" title="" data-original-title="ดูข้อมูล" class="btn btn-icon btn-success waves-effect light"
                                            href="' . route('army.show_year', $user->id) . '"><i class="feather icon-monitor"></i></a></span>';
                        } else {
                            return '<span class="edit"><a data-toggle="tooltip" data-placement="top" title="" data-original-title="ดูข้อมูล" class="btn btn-icon btn-danger waves-effect light"
                                href="' . route('army.create', [$user->report1_id, $request->filler_year]) . '"><i class="feather icon-monitor"></i></a></span>';
                        }
                    })

                    ->rawColumns(['link', 'action'])
                    ->toJson();
            } else if (!empty($request->filler_year) && !empty($request->fillter_kind)) {



                $data = DB::table('report1_1s')
                    ->select('*', 'report1_1s.id')
                    ->leftjoin('report1s', 'report1s.id', '=', 'report1_1s.report1_id')
                    //
                    ->where('report1s.kind_check_up_id', '=', $request->fillter_kind)
                    ->where('report1_1s.year', '=',  $request->filler_year)
                    ->groupBy('report1_1s.report1_id')

                    ->get();



                return datatables()->of($data)
                    ->addColumn('intro', '{{$title_name}}{{$first_name}} {{$last_name}}')
                    ->addColumn('kind_check_up_id', function ($user) {
                        if ($user->kind_check_up_id == '1') {
                            return 'มทบ.29';
                        } else if ($user->kind_check_up_id == '3') {
                            return 'ร.3';
                        } else if ($user->kind_check_up_id == '4') {
                            return 'ร.3 พัน 1';
                        }
                    })

                    ->addColumn('link', function ($user) use ($request) {
                        if ($user->year == $request->filler_year) {
                            return '<span class="edit"><a data-toggle="tooltip" data-placement="top" title="" data-original-title="ดูข้อมูล" class="btn btn-icon btn-success waves-effect light"
                                            href="' . route('army.show_year', $user->id) . '"><i class="feather icon-monitor"></i></a></span>';
                        } else {
                            return '<span class="edit"><a data-toggle="tooltip" data-placement="top" title="" data-original-title="ดูข้อมูล" class="btn btn-icon btn-danger waves-effect light"
                                    href="' . route('army.create', [$user->report1_id, $request->filler_year]) . '"><i class="feather icon-monitor"></i></a></span>';
                        }
                    })

                    ->rawColumns(['link', 'action'])
                    ->toJson();
            } else {

                //    $data = report1_1s::orderBy('created_at', 'desc')->get();
                $data = DB::table('report1_1s')
                    ->select('*', 'report1_1s.id')
                    ->leftjoin('report1s', 'report1s.id', '=', 'report1_1s.report1_id')
                    ->orderBy('report1_1s.created_at', 'desc')
                    ->get();

                return datatables()->of($data)
                    ->addColumn('intro', '{{$title_name}}{{$first_name}} {{$last_name}}')
                    ->addColumn('kind_check_up_id', function ($user) {
                        if ($user->kind_check_up_id == '1') {
                            return 'มทบ.29';
                        } else if ($user->kind_check_up_id == '3') {
                            return 'ร.3';
                        } else if ($user->kind_check_up_id == '4') {
                            return 'ร.3 พัน 1';
                        }
                    })

                    ->addColumn('link', function ($user) {
                        return '<span class="edit"><a data-toggle="tooltip" data-placement="top" title="" data-original-title="ดูข้อมูล"
                                class="btn btn-icon btn-success waves-effect light"
                                href="' . route('army.show', $user->report1_id) . '">
                                <i class="feather icon-monitor"></i></a></span>';
                    })

                    ->rawColumns(['link', 'action'])
                    ->toJson();


                // return datatables()->of($data)->make(true);
            }
        }


        $kinds = Kind_check_up::where('cate_check_up_id', '2')->get();
        //dd($kinds);
        return view('pages.check_up.admin.unit_army.index', compact('kinds'));
    }

    /**
     * Show the form for search a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        if ($request->ajax()) {
            $data = Report1::where('hn', 'LIKE', '%' . $request->country . "%")
                // ->orWhere('cid','LIKE','%'.$request->country."%")
                ->orWhere('first_name', 'LIKE', '%' . $request->country . "%")
                ->orWhere('last_name', 'LIKE', '%' . $request->country . "%")
                ->paginate(10);


            $output = '';

            if (count($data) > 0) {

                $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';

                foreach ($data as $row) {

                    $output .= '<li class="list-group-item"><a href="' . route('army.show', $row->id) . '">HN : ' . $row->hn . ' ' . $row->title_name . '' . $row->first_name . ' ' . $row->last_name . '</a></li>';
                }

                $output .= '</ul>';
            } else {

                $output .= '<li class="list-group-item">' . 'ไม่มีข้อมูล' . '</li>';
            }

            return $output;
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, $year)
    {

        $data = Report1::find($id);
        //  $data = Report1::where('id', $id)->first();
        $titlename = Title_name::all();
        //dd($titlename);
        return view('pages.check_up.admin.unit_army.create', compact('data', 'year', 'titlename'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $report1 = Report1::find($request->id);
        // $report1->status_staff = "1";

        // $report1->hn = $request->hn;
        // $report1->cid = $request->cid;
        // $report1->age = $request->age;
        // $report1->title_name = $request->title_name;
        // $report1->first_name = $request->first_name;
        // $report1->last_name = $request->last_name;
        // $report1->save();

        $assessments = new Report1_1;

        $assessments->report1_id = $request->report1_id;
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
     * Display the specified resource.
     *
     * @param  \App\CheckUpAdminArmy  $checkUpAdminArmy
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data = Report1::find($id);

        $data2 = Report1_1::where('report1_id', $id)->orderByDesc('created_at')
            ->get();
        $titlename = Title_name::all();
        // dd($data);
        return view('pages.check_up.admin.unit_army.show')->withData($data)
            ->withData2($data2)
            ->withTitlename($titlename);

        //dd($data2);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CheckUpAdminArmy  $checkUpAdminArmy
     * @return \Illuminate\Http\Response
     */

    public function show_year($id)
    {

        $data = Report1_1::find($id);
        //  $data = Report1::where('id', $id)->first();
        $titlename = Title_name::all();
        //dd($data);
        return view('pages.check_up.admin.unit_army.show_year', compact('data', 'titlename'));

        //dd($data2);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CheckUpAdminArmy  $checkUpAdminArmy
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Report1::find($id);
        //  $data = Report1::where('id', $id)->first();
        $titlename = Title_name::all();
        $kindcheckup = Kind_check_up::where('cate_check_up_id', '2')->get();
        // dd($data);
        return view('pages.check_up.admin.unit_army.edit', compact('data', 'titlename', 'kindcheckup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CheckUpAdminArmy  $checkUpAdminArmy
     * @return \Illuminate\Http\Response
     */

    public function edit_year($id)
    {
        $data = Report1_1::find($id);
        //  $data = Report1::where('id', $id)->first();
        $titlename = Title_name::all();
        //dd($data);
        return view('pages.check_up.admin.unit_army.edit_year', compact('data', 'titlename'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CheckUpAdminArmy  $checkUpAdminArmy
     * @return \Illuminate\Http\Response
     */
    public function update_year(Request $request, $id)
    {
        // dd($request);

        $assessments = Report1_1::find($id);

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

        $asse = Report1::find($assessments->report1_id);

        $asse->m13_1 = $request->m13_1;
        $asse->m13_2 = $request->m13_2;
        $asse->m13_3 = $request->m13_3;
        $asse->save();

        return redirect()->route('army.show_year', $assessments->id)->with(['message' => 'แก้ไขข้อมูลเรียบร้อย!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CheckUpAdminArmy  $checkUpAdminArmy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request);

        $report1 = Report1::find($id);


        $report1->hn = $request->hn;
        $report1->cid = $request->cid;
        $report1->age = $request->age;
        $report1->title_name = $request->title_name;
        $report1->first_name = $request->first_name;
        $report1->last_name = $request->last_name;
        $report1->gender = $request->gender;
        $report1->birthdate = $request->birthdate;
        $report1->kind_check_up_id = $request->kind_check_up_id;
        $report1->department = $request->department;
        $report1->position = $request->position;
        $report1->class = $request->class;

        $report1->save();

        return redirect()->route('army.show', $report1->id)->with(['message_profile' => 'แก้ไขข้อมูลเรียบร้อย!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CheckUpAdminArmy  $checkUpAdminArmy
     * @return \Illuminate\Http\Response
     */
    public function destroy_year($id)
    {

        $report1 = Report1_1::find($id);
        $id = $report1->report1_id;
        $year = $report1->year;

        $report1->delete();

        return redirect()->route('army.show', $id)->with(['message_profile' => 'ลบข้อมูลปี ' . $year . ' เรียบร้อย!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CheckUpAdminArmy  $checkUpAdminArmy
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $report1 = Report1::find($id)->report1s->each->delete();

        return redirect()->route('check_up.army')->with(['message' => 'ลบข้อมูลเรียบร้อย!']);
    }
}

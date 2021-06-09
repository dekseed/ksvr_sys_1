<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report1;
use App\Report1_1;
use Session;

class Report1_1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $from = date('2020-01-01');
        $to = date('Y-m-d');

        //$report1 = Report1::orderBy('created_at', 'desc')->paginate(500);
        $report1 = Report1::whereBetween('created_at', [$from, $to])
            ->orderBy('created_at', 'desc')->get();
        //$report1_1 = Report1_1::orderBy('created_at', 'desc')->first();
        

    

        $report1_1 = Report1::find('2');

        //dd($report1_1->hn);
        return view('pages.website.report1.staff.index')
                                                        ->withReport1($report1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $report1_1 = Report1::find($id);
        //dd($report1_1);
        return view('pages.website.report1.staff.create')
            ->withReport1_1($report1_1);
    }
    public function create2($id)
    {
        $report1_1 = Report1::find($id);
        //dd($report1_1);
        return view('pages.website.report1.staff.create')
            ->withReport1_1($report1_1);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request);

        $report1 = Report1::find($request->id);
        $report1->status_staff = "1";

        $report1->hn = $request->hn;
        $report1->cid = $request->cid;
        $report1->age = $request->age;
        $report1->title_name = $request->title_name;
        $report1->first_name = $request->first_name;
        $report1->last_name = $request->last_name;
        $report1->save();

        $assessments = new Report1_1;

        $assessments->report1_id = $request->id;

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
     

    
        return redirect()->route('staff.index')->with(['message' => 'บันทึกข้อมูลเรียบร้อย!']);
        


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $report1_1 = Report1_1::where('report1_id', '=', $id)->first();
//dd($report1_1);
        return view('pages.website.report1.staff.show')
            ->withReport1_1($report1_1);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $report1_1 = Report1_1::where('report1_id', '=', $id)->first();

        //$report1 = Report1::find($id);
        //dd($report1_1);
        return view('pages.website.report1.staff.edit')
            ->withReport1_1($report1_1);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //dd($request);
        $report1 = Report1::find($request->report1_id);
        //$report1->status_staff = "1";
        $report1->hn = $request->hn;
        $report1->cid = $request->cid;
        $report1->age = $request->age;
        $report1->title_name = $request->title_name;
        $report1->first_name = $request->first_name;
        $report1->last_name = $request->last_name;

        $report1->save();

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

        return redirect()->route('staff.index')->with(['message' => 'แก้ไขข้อมูลเรียบร้อย!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

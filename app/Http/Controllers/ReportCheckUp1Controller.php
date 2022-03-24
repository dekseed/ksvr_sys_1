<?php

namespace App\Http\Controllers;

use App\ReportCheckUp_1;
use App\ReportCheckUp_1_1;
use App\Report_check_up_detail_1;
use Illuminate\Http\Request;

class ReportCheckUp1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.report1.end');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
     * Display the specified resource.
     *
     * @param  \App\ReportCheckUp_1  $reportCheckUp_1
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReportCheckUp_1  $reportCheckUp_1
     * @return \Illuminate\Http\Response
     */
    public function edit(ReportCheckUp_1 $reportCheckUp_1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReportCheckUp_1  $reportCheckUp_1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReportCheckUp_1 $reportCheckUp_1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReportCheckUp_1  $reportCheckUp_1
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReportCheckUp_1 $reportCheckUp_1)
    {
        //
    }
}

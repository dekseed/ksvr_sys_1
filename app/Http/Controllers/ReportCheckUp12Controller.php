<?php

namespace App\Http\Controllers;

use App\ReportCheckUp_1_2;
use Illuminate\Http\Request;

class ReportCheckUp12Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $assessments = new ReportCheckUp_1_2;
        $assessments->report_check_up_id = $request->user_id;

        $assessments->year = date("Y");
        $assessments->total_time = "";

        $assessments->q8_1 = $request->q8_1;
        $assessments->q8_2 = $request->q8_2;
        $assessments->q8_3 = $request->q8_3;
        $assessments->q8_3_3 = $request->q8_3_3;
        $assessments->q8_4 = $request->q8_4;
        $assessments->q8_5 = $request->q8_5;
        $assessments->q8_6 = $request->q8_6;
        $assessments->q8_7 = $request->q8_7;
        $assessments->q8_8 = $request->q8_8;

        $assessments->save();

        return redirect()->route('CheckUp1.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ReportCheckUp_1_2  $reportCheckUp_1_2
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user_id = $id;
        return view('pages.report1.question.question8', compact('user_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReportCheckUp_1_2  $reportCheckUp_1_2
     * @return \Illuminate\Http\Response
     */
    public function edit(ReportCheckUp_1_2 $reportCheckUp_1_2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReportCheckUp_1_2  $reportCheckUp_1_2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReportCheckUp_1_2 $reportCheckUp_1_2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReportCheckUp_1_2  $reportCheckUp_1_2
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReportCheckUp_1_2 $reportCheckUp_1_2)
    {
        //
    }
}

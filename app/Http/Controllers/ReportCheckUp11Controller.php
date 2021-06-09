<?php

namespace App\Http\Controllers;

use App\ReportCheckUp_1_1;
use Illuminate\Http\Request;

class ReportCheckUp11Controller extends Controller
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
        $assessments = new ReportCheckUp_1_1;
        $assessments->report_check_up_id	 = $request->user_id;

        $assessments->year = date("Y");
        $assessments->total_time = "";

        $assessments->q9_1 = $request->i9_1;
        $assessments->q9_2 = $request->i9_2;
        $assessments->q9_3 = $request->i9_3;
        $assessments->q9_4 = $request->i9_4;
        $assessments->q9_5 = $request->i9_5;
        $assessments->q9_6 = $request->i9_6;
        $assessments->q9_7 = $request->i9_7;
        $assessments->q9_8 = $request->i9_8;
        $assessments->q9_9 = $request->i9_9;

        $assessments->save();

        $sum = $request->i9_1 + $request->i9_2 + $request->i9_3 + $request->i9_4 +
                $request->i9_5 + $request->i9_6 + $request->i9_7 + $request->i9_8 + $request->i9_9;

        if ($sum >= '7') {

            return redirect()->route('CheckUp3.show', $request->user_id);
        } else {
            return redirect()->route('CheckUp1.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ReportCheckUp_1_1  $reportCheckUp_1_1
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user_id = $id;
        return view('pages.report1.question.question9', compact('user_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReportCheckUp_1_1  $reportCheckUp_1_1
     * @return \Illuminate\Http\Response
     */
    public function edit(ReportCheckUp_1_1 $reportCheckUp_1_1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReportCheckUp_1_1  $reportCheckUp_1_1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReportCheckUp_1_1 $reportCheckUp_1_1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReportCheckUp_1_1  $reportCheckUp_1_1
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReportCheckUp_1_1 $reportCheckUp_1_1)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\HealthCheckResult;
use App\Report_check_up_detail_1;
use App\Report_check_up_main;
use App\ReportCheckUp;
use App\ReportCheckUp_1;
use Illuminate\Http\Request;
use DB;

class HealthCheckResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = DB::table('report_check_up_detail_1s')->select('report_check_up_id', 'blood_glu')->where('blood_glu', '>=', '99')
                                        ->orWhere('blood_glu', '<=', '74')
                                        ->get();
            return view('pages.check_up.v_2.admin.unit_army.show_1', compact('item'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HealthCheckResult  $healthCheckResult
     * @return \Illuminate\Http\Response
     */
    public function show(HealthCheckResult $healthCheckResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HealthCheckResult  $healthCheckResult
     * @return \Illuminate\Http\Response
     */
    public function edit(HealthCheckResult $healthCheckResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HealthCheckResult  $healthCheckResult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HealthCheckResult $healthCheckResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HealthCheckResult  $healthCheckResult
     * @return \Illuminate\Http\Response
     */
    public function update_old(Request $request, HealthCheckResult $healthCheckResult, $id)
    {
        //$request->report_check_up_id
        $report = Report_check_up_main::where('report_check_up_id', $request->report_check_up_id)->first();


        $reports = $healthCheckResult->find($report->health_check_results_id);
        //  dd($reports);

        $reports->result_2 = '1';
        $reports->save();

        return redirect()->route('check_up_army_2.test');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HealthCheckResult  $healthCheckResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(HealthCheckResult $healthCheckResult)
    {
        //
    }
}

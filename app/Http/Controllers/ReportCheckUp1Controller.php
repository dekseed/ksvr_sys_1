<?php

namespace App\Http\Controllers;

use App\ReportCheckUp_1;
use App\ReportCheckUp_1_1;
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

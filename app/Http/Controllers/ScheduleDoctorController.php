<?php

namespace App\Http\Controllers;

use App\Schedule_doctor;
use Illuminate\Http\Request;

class ScheduleDoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.webs.schedule');
        // ->withTenders($tenders)
        // ->withJobs($jobs);
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
     * @param  \App\Schedule_doctor  $schedule_doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule_doctor $schedule_doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Schedule_doctor  $schedule_doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule_doctor $schedule_doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Schedule_doctor  $schedule_doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule_doctor $schedule_doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Schedule_doctor  $schedule_doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule_doctor $schedule_doctor)
    {
        //
    }
}

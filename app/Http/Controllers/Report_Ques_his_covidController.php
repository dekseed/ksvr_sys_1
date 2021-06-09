<?php

namespace App\Http\Controllers;

use App\Profile_covid;
use App\District;
use App\Province_surveillance_area_covid;
use App\Surveillance_area_covid;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Report_Ques_his_covidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$agency = Profile_covid::orderBy('created_at', 'desc');
        $agency = Profile_covid::orderBy('created_at', 'desc')->get();
        $dist = District::all();
       // $agency = DB::table('profile_covids')->get();

        $province_area = Province_surveillance_area_covid::all();




        return view('pages.covid.questionnaire_history_covid.admin.index', compact('province_area'))
            ->withDist($dist)
            ->withAgency($agency);


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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // dd($id);
        return view('pages.covid.questionnaire_history_covid.admin.edit');
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
        //
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

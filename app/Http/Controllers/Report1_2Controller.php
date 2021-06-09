<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report1;
use App\Report1_2;
use Session;

class Report1_2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $report1 = Report1::orderBy('created_at', 'desc')->paginate(500);
        //$report1_1 = Report1_1::orderBy('created_at', 'desc')->first();



        //dd( $report1_1);
        return view('pages.website.report1.doctor.index')->withReport1($report1);
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
//dd($request);
        $report1 = Report1::find($request->id);
        $report1->status_doctor = "1";
        $report1->save();

        $assessments = new Report1_2;

        $assessments->report1_id = $request->id;

        $assessments->a1 = $request->a1;
        $assessments->a1_d = $request->a1_d;
        $assessments->name = $request->name;

        if ($assessments->save()) {

            Session::flash('success','ส่งข ้อมูลเรียบร้อย!');
        } else {
            Session::flash('error','Some  thing went wrong!!');
        }



        //$assessment = DB::table('assessment_2s')->select('fhf_id', 'first_name', 'last_name', 'householder')->where('householder', '1')->first();
        return redirect()->route('doctor.index')->with(['message' => 'บันทึกข้อมูลเรียบร้อย!']);
      


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $report1_2 = Report1_2::where('report1_id', $id)->first();
        //dd($report1_2);
        return view('pages.website.report1.dentists.show')
            ->withReport1_2($report1_2);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

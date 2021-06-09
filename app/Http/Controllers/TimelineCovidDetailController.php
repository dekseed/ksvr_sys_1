<?php

namespace App\Http\Controllers;

use App\Timeline_covid;
use App\Timeline_covid_detail;
use Illuminate\Http\Request;
use Session;
use Auth;

class TimelineCovidDetailController extends Controller
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

        //dd($request);
        $tcd = new Timeline_covid_detail();

        if(is_null($request->date)){

            $tcd->date = date('Y-m-d');
            $tcd->time = date('H:i:s');

        } else {

            $tcd->date = DateData($request->date);
            $tcd->time = $request->prefix__time__suffix;

        }

        $tcd->user_id = Auth::user()->id;

        $tcd->address = $request->address;
        $tcd->description = $request->description;
        $tcd->lat = $request->lat;
        $tcd->long = $request->long;
        if(is_null($request->D)){
            $tcd->D = '0';
        }else{
            $tcd->D = $request->D;
        }
        if(is_null($request->M)){
            $tcd->M = '0';
        }else{
            $tcd->M = $request->M;
        }
        if(is_null($request->H)){
            $tcd->H = '0';
        }else{
            $tcd->H = $request->H;
        }
        if(is_null($request->T)){
            $tcd->T = '0';
            $tcd->temperature = '';
        }else{
            $tcd->T = $request->T;
            $tcd->temperature = $request->temperature;
        }

        if(is_null($request->A)){
            $tcd->A = '0';
        }else{
            $tcd->A = $request->A;
        }

        if(is_null($request->T2)){
            $tcd->T2 = '0';

        }else{

            $tcd->T2 = $request->T2;

            if(!is_null($request->T2_Antigen)){

                $tcd->T2_Antigen = $request->T2_Antigen;

                if(!is_null($request->T2_Antigen_Result)){
                    $tcd->T2_Antigen_Result = $request->T2_Antigen_Result;
                }else{
                    $tcd->T2_Antigen_Result =  "3";
                }

            }else{

                $tcd->T2_Antigen = "0";
                $tcd->T2_Antigen_Result = "0";

            }

            if(!is_null($request->T2_RT_PCR)){

                $tcd->T2_RT_PCR = $request->T2_RT_PCR;

                if(!is_null($request->T2_RT_PCR_Result)){
                    $tcd->T2_RT_PCR_Result = $request->T2_RT_PCR_Result;
                }else{
                    $tcd->T2_RT_PCR_Result =  "3";
                }
            }else{

                $tcd->T2_RT_PCR = "0";
                $tcd->T2_RT_PCR_Result = "0";

            }

            if(!is_null($request->T2_Antibody)){

                $tcd->T2_Antibody = $request->T2_Antibody;

                if(!is_null($request->T2_Antibody_Result)){
                    $tcd->T2_Antibody_Result = $request->T2_Antibody_Result;
                }else{
                    $tcd->T2_Antibody_Result =  "3";
                }

            }else{

                $tcd->T2_Antibody = "0";
                $tcd->T2_Antibody_Result = "0";

            }
        }


        $tcd->save();
        Session::flash('covid-success', 'เพิ่มข้อมูลเรียบร้อย!');

              return redirect()->route('timeline-covid.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Timeline_covid_detail  $timeline_covid_detail
     * @return \Illuminate\Http\Response
     */
    public function show(Timeline_covid_detail $timeline_covid_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Timeline_covid_detail  $timeline_covid_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Timeline_covid_detail $timeline_covid_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Timeline_covid_detail  $timeline_covid_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $tcd = Timeline_covid_detail::find($id);
        $tcd->address = $request->address;
        $tcd->description = $request->description;
        $tcd->lat = $request->lat;
        $tcd->long = $request->long;

        if(!is_null($request->date)){

            $date = DateData($request->date);

            $tcd->date = $date;
            $tcd->time = $request->time;
        }else{
            $tcd->date = date('Y-m-d');
            $tcd->time = date('H:i:s');
        }



        if(is_null($request->D)){
            $tcd->D = '0';
        }else{
            $tcd->D = $request->D;
        }
        if(is_null($request->M)){
            $tcd->M = '0';
        }else{
            $tcd->M = $request->M;
        }
        if(is_null($request->H)){
            $tcd->H = '0';
        }else{
            $tcd->H = $request->H;
        }
        if(is_null($request->T)){
            $tcd->T = '0';
            $tcd->temperature = '';
        }else{
            $tcd->T = $request->T;
            $tcd->temperature = $request->temperature;
        }

         if(is_null($request->A)){
            $tcd->A = '0';
        }else{
            $tcd->A = $request->A;
        }

        if(is_null($request->T2)){
            $tcd->T2 = '0';

        }else{

            $tcd->T2 = $request->T2;

            if(!is_null($request->T2_Antigen)){

                $tcd->T2_Antigen = $request->T2_Antigen;

                if(!is_null($request->T2_Antigen_Result)){
                    $tcd->T2_Antigen_Result = $request->T2_Antigen_Result;
                }else{
                    $tcd->T2_Antigen_Result =  "3";
                }

            }else{

                $tcd->T2_Antigen = "0";
                $tcd->T2_Antigen_Result = "0";

            }

            if(!is_null($request->T2_RT_PCR)){

                $tcd->T2_RT_PCR = $request->T2_RT_PCR;

                if(!is_null($request->T2_RT_PCR_Result)){
                    $tcd->T2_RT_PCR_Result = $request->T2_RT_PCR_Result;
                }else{
                    $tcd->T2_RT_PCR_Result =  "3";
                }
            }else{

                $tcd->T2_RT_PCR = "0";
                $tcd->T2_RT_PCR_Result = "0";

            }

            if(!is_null($request->T2_Antibody)){

                $tcd->T2_Antibody = $request->T2_Antibody;

                if(!is_null($request->T2_Antibody_Result)){
                    $tcd->T2_Antibody_Result = $request->T2_Antibody_Result;
                }else{
                    $tcd->T2_Antibody_Result =  "3";
                }

            }else{

                $tcd->T2_Antibody = "0";
                $tcd->T2_Antibody_Result = "0";

            }
        }

        $tcd->save();

        $date = date('Y-m-d', strtotime($tcd->date));

       // dd($date);
       Session::flash('covid-info', 'แก้ไขข้อมูลเรียบร้อย!');
              return redirect()->route('timeline-covid.show', $date);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Timeline_covid_detail  $timeline_covid_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tenders = Timeline_covid_detail::find($id);

        $date = $tenders->date;
        $tenders->delete();

        $timeline_detail_first = Timeline_covid_detail::where('user_id', '=', Auth::user()->id)
                                                        ->whereDate('date', '=', $date)
                                                        ->orderBy('date', 'desc')
                                                        ->count();
     //

     if($timeline_detail_first === 0){
        //echo 'index';
        Session::flash('covid-warning', 'ลบข้อมูลเรียบร้อย!');
        return redirect()->route('timeline-covid.index');

     }else{
        Session::flash('covid-warning', 'ลบข้อมูลเรียบร้อย!');
        return redirect()->route('timeline-covid.show', $date);
       //echo 'show';
     }

    }
}

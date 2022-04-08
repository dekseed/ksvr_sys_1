<?php

namespace App\Http\Controllers;

use App\Test;
use App\Covid19_inquiry_form;
use App\ReportCheckUp_1;
use App\ReportCheckUp_1_1;
use App\ReportCheckUp_1_2;
use App\Report_check_up_blood;
use App\Report_check_up_detail_1;
use App\Kind_check_up;
use Illuminate\Http\Request;
use DB;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = DB::table('report_check_ups')
        // ->leftJoin('report_check_up_1s', 'report_check_ups.id', '=', 'report_check_up_1s.report_check_up_id')
        // ->select('*')
        // ->where('report_check_ups.kind_check_up_id', '=', '2')
        // ->orderBy('report_check_ups.created_at', 'desc')
        // ->get();
        // //dd($data);
        // return datatables()->of($data)
        //     ->addColumn('kind_check_up_id', function ($user) {
        //         dd($user->kind_check_up_id);
        //         if ($user->kind_check_up_id == '1') {
        //             return 'มทบ.29';
        //         } else if ($user->kind_check_up_id == '2') {
        //             return 'รพ.ค่ายกฤษณ์สีวะรา';
        //         } else if ($user->kind_check_up_id == '3') {
        //             return 'ร.3';
        //         } else if ($user->kind_check_up_id == '4') {
        //             return 'ร.3 พัน 1';
        //         }
        //     })
        //         ->addColumn('link', function ($data) {
        //                 $id = $data->id;
        //                 //dd($id);
        //                 return '<span class="edit"><a data-toggle="tooltip" data-placement="top" title="" data-original-title="ดูข้อมูล"
        //                         class="btn btn-icon btn-success waves-effect light"
        //                         href="' . route('army.show', $data->id) . '">
        //                         <i class="feather icon-monitor"></i></a></span>';
        //             })

        //             ->rawColumns(['link', 'action'])
        //             ->toJson();

        // $covid_19 = Covid19_inquiry_form::all();
        // dd($covid_19);
        //  return view('pages.covid.inquiry_form.index', compact('covid_19'));

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
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        //
    }
}

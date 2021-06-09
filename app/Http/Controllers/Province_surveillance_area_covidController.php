<?php

namespace App\Http\Controllers;

use App\Province_surveillance_area_covid;
use Session;
use DB;
use Illuminate\Http\Request;

class Province_surveillance_area_covidController extends Controller
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

       // $search = Province_surveillance_area_covid::WHERE($request->district, "=", 'province_code')->get();
        $data = DB::table('province_surveillance_area_covids')
        ->select('*')
        ->where('province_code', '=', $request->district)
        ->first();
//dd($data);
        if (is_null($data)){
            $psac = new Province_surveillance_area_covid();

            //$sac->stock_id = $request->id_stock;
            $psac->province_code = $request->district;
            $psac->province_surveillance_area_covid_id = $request->sac;

            $psac->save();
            Session::flash('message-psac', 'เพิ่มข้อมูลจังหวัดที่เสี่ยง เรียบร้อย!');
            return redirect(route('Surveillance_Area_Covid.index'));
        }
        else{
            Session::flash('message-psac', 'มีข้อมูลนี้อยู่แล้ว');
            return redirect(route('Surveillance_Area_Covid.index'));
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
            $psac = Province_surveillance_area_covid::findOrFail($id);
            $psac->province_code = $request->district;
            $psac->province_surveillance_area_covid_id = $request->sac;

            $psac->save();
            Session::flash('message-psac', 'แก้ไขข้อมูลจังหวัดที่เสี่ยง เรียบร้อย!');
            return redirect(route('Surveillance_Area_Covid.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report1 = DB::table('province_surveillance_area_covids')->where('id', '=', $id)->delete();

        // dd($report1);
        // $report1->delete();
        Session::flash('message-psac', 'ลบข้อมูลเรียบร้อย!!!');
        return redirect(route('Surveillance_Area_Covid.index'));
    }
}

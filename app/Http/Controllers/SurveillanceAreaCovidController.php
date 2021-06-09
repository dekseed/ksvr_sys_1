<?php

namespace App\Http\Controllers;

use App\District;
use App\Province_surveillance_area_covid;
use App\Surveillance_area_covid;
use Session;
use DB;
use Illuminate\Http\Request;

class SurveillanceAreaCovidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = Surveillance_area_covid::all();

        $province_area = Province_surveillance_area_covid::all();

        //$prov = District::all();

        $prov = DB::table('districts')
        ->select('*')
        ->groupBy('province_code')
        ->get();



     //dd($data);
        return view('pages.covid.questionnaire_history_covid.admin.surveillance_area', compact('areas', 'province_area'))
                ->withProv($prov);
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

        $sac = new Surveillance_area_covid();

        //$sac->stock_id = $request->id_stock;
        $sac->name_rating = $request->name_rating;
        $sac->color = $request->color;
        $sac->detail = $request->detail;

        $sac->save();

        Session::flash('message-sac', 'เพิ่มข้อมูลระดับพื้นที่เสี่ยงเรียบร้อย!');
        return redirect(route('Surveillance_Area_Covid.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Surveillance_area_covid  $surveillance_area_covid
     * @return \Illuminate\Http\Response
     */
    public function show(Surveillance_area_covid $surveillance_area_covid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Surveillance_area_covid  $surveillance_area_covid
     * @return \Illuminate\Http\Response
     */
    public function edit(Surveillance_area_covid $surveillance_area_covid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Surveillance_area_covid  $surveillance_area_covid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $permission = Surveillance_area_covid::findOrFail($id);
        $permission->name_rating = $request->name_rating;
        $permission->color = $request->color;
        $permission->detail = $request->detail;

        $permission->save();
        Session::flash('message-sac', 'แก้ไขข้อมูลระดับพื้นที่เสี่ยงเรียบร้อย!');
        return redirect(route('Surveillance_Area_Covid.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Surveillance_area_covid  $surveillance_area_covid
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report1 = DB::table('surveillance_area_covids')->where('id', '=', $id)->delete();

        // dd($report1);
        // $report1->delete();
        Session::flash('message-sac', 'ลบข้อมูลเรียบร้อย!!!');
        return redirect(route('Surveillance_Area_Covid.index'));
    }
}

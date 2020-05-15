<?php

namespace App\Http\Controllers;

use App\Model_cartridge_ink;
use Illuminate\Http\Request;
use Session;

class ModelCartridgeInkController extends Controller
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
        $this->validate($request, array(
            'name' => 'required|max:255'
        ));

        $tender = new Model_cartridge_ink;
        $tender->name = $request->name;
        $tender->save();

        Session::flash('message', 'เพิ่มข้อมูลรุ่นตลับหมึกเรียบร้อย!');
        return redirect()->route('category-waste.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model_cartridge_ink  $model_cartridge_ink
     * @return \Illuminate\Http\Response
     */
    public function show(Model_cartridge_ink $model_cartridge_ink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model_cartridge_ink  $model_cartridge_ink
     * @return \Illuminate\Http\Response
     */
    public function edit(Model_cartridge_ink $model_cartridge_ink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model_cartridge_ink  $model_cartridge_ink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Model_cartridge_ink $model_cartridge_ink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model_cartridge_ink  $model_cartridge_ink
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tenders = Model_cartridge_ink::find($id);
        $tenders->delete();

        Session::flash('message', 'ลบข้อมูลรุ่นตลับหมึกเรียบร้อย!');
        return redirect()->route('category-waste.index');
    }
}

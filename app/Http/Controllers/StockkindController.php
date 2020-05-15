<?php

namespace App\Http\Controllers;

use App\Stock_kind;
use Illuminate\Http\Request;
use Session;

class StockkindController extends Controller
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

        $tender = new Stock_kind;
        $tender->category_equipment_id = $request->cate_equipments;
        $tender->name = $request->name;
        $tender->save();

        Session::flash('message', 'เพิ่มข้อมูลประเภทเรียบร้อย!');
        return redirect()->route('category-equipment.index');
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
        $tenders = Stock_kind::find($id);
        $tenders->delete();

        Session::flash('message', 'ลบข้อมูลประเภทเรียบร้อย!');
        return redirect()->route('category-equipment.index');
    }
}

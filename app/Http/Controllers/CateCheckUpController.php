<?php

namespace App\Http\Controllers;

use App\Cate_check_up;
use Illuminate\Http\Request;

class CateCheckUpController extends Controller
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

        $tender = new Cate_check_up;

        $tender->name = $request->name;
        $tender->save();

        Session::flash('message', 'เพิ่มข้อมูลหมวดหมู่เรียบร้อย!');
        return redirect()->route('category-equipment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cate_check_up  $cate_check_up
     * @return \Illuminate\Http\Response
     */
    public function show(Cate_check_up $cate_check_up)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cate_check_up  $cate_check_up
     * @return \Illuminate\Http\Response
     */
    public function edit(Cate_check_up $cate_check_up)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cate_check_up  $cate_check_up
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cate_check_up $cate_check_up)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cate_check_up  $cate_check_up
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cate_check_up $cate_check_up)
    {
        //
    }
}

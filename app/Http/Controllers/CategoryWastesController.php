<?php

namespace App\Http\Controllers;

use App\Category_wastes;
use App\Model_cartridge_ink;
use App\Stock_waste_kind;
use Illuminate\Http\Request;
use Session;

class CategoryWastesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cates = Category_wastes::orderBy('id', 'asc')->paginate(100);
        $kinds = Stock_waste_kind::orderBy('id', 'asc')->paginate(100);
        $modelCartInk = Model_cartridge_ink::all();
//dd($kinds);
        return view('pages.stock.waste.category.index')->withCates($cates)->withKinds($kinds)->withModelCartInk($modelCartInk);
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

        $tender = new Category_wastes;

        $tender->name = $request->name;
        $tender->save();

        Session::flash('message', 'เพิ่มข้อมูลหมวดหมู่เรียบร้อย!');
        return redirect()->route('category-waste.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category_wastes  $category_wastes
     * @return \Illuminate\Http\Response
     */
    public function show(Category_wastes $category_wastes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category_wastes  $category_wastes
     * @return \Illuminate\Http\Response
     */
    public function edit(Category_wastes $category_wastes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category_wastes  $category_wastes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category_wastes $category_wastes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category_wastes  $category_wastes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tenders = Category_wastes::find($id);
        $tenders->delete();

        Session::flash('message', 'ลบข้อมูลหมวดหมู่เรียบร้อย!');
        return redirect()->route('category-waste.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category_equipment;
use App\Stock_kind;
use Illuminate\Http\Request;
use Session;

class CategoryEquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cates = Category_equipment::orderBy('id', 'asc')->paginate(10);
        $kinds = Stock_kind::orderBy('id', 'asc')->paginate(10);
        $brands = Brand::all();
        return view('pages.stock.category.index')->withCates($cates)->withKinds($kinds)->withBrands($brands);
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
        $this->validate($request, array(
            'name' => 'required|max:255'
        ));

        $tender = new Category_equipment;

        $tender->name = $request->name;
        $tender->save();

        Session::flash('message', 'เพิ่มข้อมูลหมวดหมู่เรียบร้อย!');
        return redirect()->route('category-equipment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category_equipment  $category_equipment
     * @return \Illuminate\Http\Response
     */
    public function show(Category_equipment $category_equipment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category_equipment  $category_equipment
     * @return \Illuminate\Http\Response
     */
    public function edit(Category_equipment $category_equipment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category_equipment  $category_equipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category_equipment $category_equipment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category_equipment  $category_equipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category_equipment $category_equipment)
    {
        //dd($category_equipment->id);
        $tenders = Category_equipment::find($category_equipment->id);
        $tenders->delete();

        Session::flash('message', 'ลบข้อมูลหมวดหมู่เรียบร้อย!');
        return redirect()->route('category-equipment.index');
    }
}

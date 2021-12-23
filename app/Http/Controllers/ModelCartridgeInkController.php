<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category_wastes;
use App\Model_cartridge_ink;
use App\Stock;
use App\Stock_waste;
use App\Stock_waste_kind;
use App\Stock_waste_quantity;
use App\User;
use App\CateModelCartridgeInk;
use App\Stock_wastes_ModelCartridgeInk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Session;
use Illuminate\Support\Facades\DB;

class ModelCartridgeInkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $swq = Stock_wastes_ModelCartridgeInk::select(DB::raw('t.*'))
        // ->from(DB::raw('(SELECT * FROM stock_wastes__model_cartridge_inks ORDER BY updated_at DESC) t'))
        // ->groupBy('t.model_cartridge_inks_id')


        // ->get();

        $swq1 = Stock_wastes_ModelCartridgeInk::whereIn('id', function($query) {
            $query->from('stock_wastes__model_cartridge_inks')->groupBy('model_cartridge_inks_id')->selectRaw('MAX(id)');
         })->get();


        // Message::select(DB::raw('t.*'))
        //     ->from(DB::raw('(SELECT * FROM messages ORDER BY created_at DESC) t'))
        //     ->groupBy('t.from')
        //     ->get();

        // $swq2 = Stock_wastes_ModelCartridgeInk::whereIn('cate_model_cartridge_inks_id', function($query) {
        //     $query->from('stock_wastes__model_cartridge_inks')->groupBy('cate_model_cartridge_inks_id')->selectRaw('MAX(balance)');
        //  })->get();


        // $swq1 = Stock_wastes_ModelCartridgeInk::select(DB::raw('cate_model_cartridge_inks_id.*'))
        //     ->from(DB::raw('(SELECT * FROM stock_wastes__model_cartridge_inks ORDER BY created_at DESC) cate_model_cartridge_inks_id'))
        //     ->groupBy('cate_model_cartridge_inks_id.balance')
        //     ->latest()
        //     ->get();

       //dd($swq);

        $stocksWaste = Category_wastes::orderBy('created_at', 'asc')->get();
        $modelCartInk = Model_cartridge_ink::orderBy('created_at', 'asc')->get();

        $cate_model_cart_ink = CateModelCartridgeInk::all();


        $kinds = Stock::all();
        $brands = Brand::all();



        return view('pages.stock.waste.model_cartridge_ink.index', compact('cate_model_cart_ink'))
        //->withSwq($swq)
        ->withSwq1($swq1)
            ->withKinds($kinds)
            ->withBrands($brands)
            ->withModelCartInk($modelCartInk)
            ->withStocksWaste($stocksWaste);
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
        $tender->cate_model_cartridge_inks_id = $request->cate_model_cartridge_inks_id;
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
        //dd($model_cartridge_ink);
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

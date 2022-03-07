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
use App\Stock_wastes_income_model_cartridge_ink;
use App\Stock_wastes_ModelCartridgeInk;
use App\Stock_wastes_outcome_model_cartridge_ink;
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
    public function index(Stock_wastes_income_model_cartridge_ink $stock_wastes_income_model_cartridge_ink)
    {


            $swq1 = Stock_wastes_income_model_cartridge_ink::groupBy('model_cartridge_inks_id')
                                                        ->selectRaw('sum(amount) as sum1, model_cartridge_inks_id')
                                                        //->selectRaw('sum(amount) as sum')
                                                        // ->groupBy('model_cartridge_inks_id')
                                                        ->get();


            $swq2 = Stock_wastes_outcome_model_cartridge_ink::groupBy('model_cartridge_inks_id')
                                                        ->selectRaw('sum(amount) as sum2, model_cartridge_inks_id')
                                                        // ->selectRaw('sum(amount) as sum', )

                                                        ->get();



                $result  = Stock_wastes_income_model_cartridge_ink::leftJoin('stock_wastes_outcome_model_cartridge_inks', function($join) {
                    $join->on('stock_wastes_income_model_cartridge_inks.model_cartridge_inks_id', '=', 'stock_wastes_outcome_model_cartridge_inks.model_cartridge_inks_id')->where('status_id', '=', '2');

                  })

                            ->groupBy(DB::raw('stock_wastes_income_model_cartridge_inks.model_cartridge_inks_id'))
                            ->selectRaw('stock_wastes_income_model_cartridge_inks.model_cartridge_inks_id,
                                            SUM(stock_wastes_income_model_cartridge_inks.amount) as in_sum,
                                            SUM(stock_wastes_outcome_model_cartridge_inks.amount) as out_sum')

                            ->get();

                            $stocks = $swq1->union($swq2);
     //dd($result);

        $stocksWaste = Category_wastes::orderBy('created_at', 'asc')->get();
        $modelCartInk = Model_cartridge_ink::orderBy('created_at', 'asc')->get();

        $cate_model_cart_ink = CateModelCartridgeInk::all();


        $kinds = Stock::all();
        $brands = Brand::all();



        return view('pages.stock.waste.model_cartridge_ink.index', compact('cate_model_cart_ink'))
       ->withResult($result)
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

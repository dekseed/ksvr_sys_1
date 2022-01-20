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
    public function index()
    {


        // $swq1 = Stock_wastes_ModelCartridgeInk::whereIn('id', function($query) {
        //     $query->from('stock_wastes__model_cartridge_inks')->groupBy('model_cartridge_inks_id')->selectRaw('MAX(id)');
        //  })->get();

       //$swq1 =   DB::table('stock_wastes_income_model_cartridge_inks')
            $swq1 = Stock_wastes_income_model_cartridge_ink::orderBy('model_cartridge_inks_id', 'asc')
                                                        ->selectRaw('sum(amount) as sum, model_cartridge_inks_id')
                                                        ->groupBy('model_cartridge_inks_id')
                                                        ->get();

            $swq2 = Stock_wastes_outcome_model_cartridge_ink::orderBy('model_cartridge_inks_id', 'asc')
                                                        
                                                        ->leftJoinSub($orders, 'orders', function ($join) {
                                                            $join->on('products.SKU','=','orders.SKU');
                                                        })
                                                        ->groupBy('model_cartridge_inks_id')
                                                        ->get();


               $results = DB::table('stock_wastes_income_model_cartridge_inks AS t')
                                                ->leftJoin('stock_wastes_outcome_model_cartridge_inks AS i', 'i.model_cartridge_inks_id', '=', 't.model_cartridge_inks_id' )
                                                ->select([

                                                't.model_cartridge_inks_id',
                                                't.amount',
                                                'i.model_cartridge_inks_id',
                                                'i.amount',

                                                // DB::raw('(sum(t.amount) as sum) - (sum(i.amount) as sum), t.model_cartridge_inks_id')
                                                ])

                                                ->groupBy('t.model_cartridge_inks_id')

                                                ->get();

                                            // SELECT
                                            //     Stationery_Name.Code,
                                            //     (SELECT SUM(Stationery_Stock_In.Qty_IN) FROM Stationery_Stock_IN WHERE Stationery_Stock_IN.Code = Stationery_Name.Code)-
                                            //     (SELECT SUM(Stationery_Stock_OUT.Qty_OUT) FROM Stationery_Stock_OUT  WHERE Stationery_Stock_OUT.Code = Stationery_Name.Code) AS TotalQTY
                                                
                                            // FROM Stationery_Name
                                            //     LEFT JOIN Stationery_Stock_IN AS Stationery_Stock_IN
                                            //         ON (Stationery_Name.Code =Stationery_Stock_IN.Code)
                                            //     LEFT JOIN Stationery_Stock_OUT AS Stationery_Stock_OUT
                                            //         ON (Stationery_Name.Code =Stationery_Stock_OUT.Code)
                                            
                                            // GROUP BY Stationery_Name.Code

                                            // SELECT N.CODE AS Code, N.NAME AS Name, N.DETAIL AS Detail, SUM(ISNULL(I.QTYIN, 0)) - SUM(ISNULL(O.QTYOUT, 0)) AS QTYTotal
                                            // FROM [NAME] N
                                            // LEFT JOIN [IN] I ON N.CODE = I.CODE
                                            // LEFT JOIN [OUT] O ON N.CODE = O.CODE
                                            // GROUP BY N.CODE, N.NAME, N.DETAIL
        dd($swq2);

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

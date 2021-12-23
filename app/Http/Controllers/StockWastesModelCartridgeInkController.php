<?php

namespace App\Http\Controllers;

use App\Stock_wastes_ModelCartridgeInk;
use App\User;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class StockWastesModelCartridgeInkController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('pages.stock.ModelCartInk.index');

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
       $stock_wastes = new Stock_wastes_ModelCartridgeInk();

        $stock_wastes->department_id = '';
        $stock_wastes->model_cartridge_inks_id = $request->model1;
        $stock_wastes->user_id = '';
        $stock_wastes->admin_id = Auth::user()->id;
        $stock_wastes->detail = $request->detail;
        $stock_wastes->in_items = $request->number;
        $stock_wastes->out_items = '-';
        $stock_wastes->round = $request->round;

        $search_wastes_model = Stock_wastes_ModelCartridgeInk::where('model_cartridge_inks_id', '=', $request->model1)
                                                                ->orderBy('updated_at', 'DESC')->first();

        if(is_null($search_wastes_model)){

            $stock_wastes->balance = $request->number;

        }else{

            $balance_old =  $search_wastes_model->balance;
            $balance_new =  $request->number;

            $stock_wastes->balance = $balance_old + $balance_new;

            // dd($stock_wastes->balance);



        }


       $stock_wastes->save();

        Session::flash('message', 'เพิ่มข้อมูลเรียบร้อย!');
        return redirect()->route('model-cart-ink.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stock_wastes_ModelCartridgeInk  $stock_wastes_ModelCartridgeInk
     * @return \Illuminate\Http\Response
     */
    public function show(Stock_wastes_ModelCartridgeInk $stock_wastes_ModelCartridgeInk, $id)
    {

       $stocks = $stock_wastes_ModelCartridgeInk->where('model_cartridge_inks_id', '=', $id)
                ->orderBy('updated_at', 'desc')
                ->get();

        //แจกจ่ายตลับหมึก
        $stocks_out = $stock_wastes_ModelCartridgeInk->where([
                    ['model_cartridge_inks_id', '=', $id],
                    ['out_items', '>', '0'],
                    ])

                    ->orderBy('updated_at', 'desc')
                    ->get();

        //นำเข้าตลับหมึก
        $stocks_in = $stock_wastes_ModelCartridgeInk->where([
            ['model_cartridge_inks_id', '=', $id],
            ['in_items', '>', '0'],
            ])

            ->orderBy('updated_at', 'desc')
            ->get();

        //ชื่อรุ่นตลับหมึก
        foreach($stocks as $items){
            $m_c_i_name = $items->model_cartridge_ink->name;
        }

        //จำนวนรับมาทั้งหมด
        $stock_sum = $stock_wastes_ModelCartridgeInk->where('model_cartridge_inks_id', '=', $id)
                    ->sum('in_items');
        /////////////////
        //จำนวนคงเหลือ
        $balances = $stock_wastes_ModelCartridgeInk->where('model_cartridge_inks_id', '=', $id)->whereIn('id', function($query) {
            $query->from('stock_wastes__model_cartridge_inks')->groupBy('model_cartridge_inks_id')->selectRaw('MAX(id)');
         })->first();
         $stock_balance = $balances->balance;

//dd($stocks_out);

       return view('pages.stock.waste.model_cartridge_ink.show', compact('m_c_i_name', 'stock_sum', 'stock_balance', 'stocks_in', 'stocks_out'))
      // ->withStocks_out($stocks_out)
      // ->withStocks_in($stocks_in)
       ->withStocks($stocks);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stock_wastes_ModelCartridgeInk  $stock_wastes_ModelCartridgeInk
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock_wastes_ModelCartridgeInk $stock_wastes_ModelCartridgeInk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stock_wastes_ModelCartridgeInk  $stock_wastes_ModelCartridgeInk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock_wastes_ModelCartridgeInk $stock_wastes_ModelCartridgeInk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stock_wastes_ModelCartridgeInk  $stock_wastes_ModelCartridgeInk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock_wastes_ModelCartridgeInk $stock_wastes_ModelCartridgeInk)
    {
        //
    }
}

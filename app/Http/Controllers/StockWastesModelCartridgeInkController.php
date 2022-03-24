<?php

namespace App\Http\Controllers;

use App\Stock_wastes_income_model_cartridge_ink;
use App\Stock_wastes_outcome_model_cartridge_ink;
use App\Stock_wastes_ModelCartridgeInk;
use App\Model_cartridge_ink;
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
        // dd($request);
       $stock_wastes = new Stock_wastes_income_model_cartridge_ink();


        $stock_wastes->model_cartridge_inks_id = $request->model1;
        $stock_wastes->admin_id = Auth::user()->id;
        $stock_wastes->round = $request->round;
        $stock_wastes->detail = $request->detail;
        $stock_wastes->amount = $request->number;
        $stock_wastes->status = '2';

        if ($request->hasFile('file')) {

            $file = $request->file('file');

            $picname = $file->getClientOriginalName();

            $extension = $file->getClientOriginalExtension();
            $pic = rand(11111, 99999) . '.' . $extension;
            $file->move('files', $pic);
            $stock_wastes->picname = $picname;
            $stock_wastes->pic = $pic;

        } else {

            $stock_wastes->picname = 'nopic.png';
            $stock_wastes->pic = 'nopic.png';

        }


        // $search_wastes_model = Stock_wastes_ModelCartridgeInk::where('model_cartridge_inks_id', '=', $request->model1)
        //                                                         ->orderBy('updated_at', 'DESC')->first();

        // if(is_null($search_wastes_model)){

        //     $stock_wastes->balance = $request->number;

        // }else{

        //     $balance_old =  $search_wastes_model->balance;
        //     $balance_new =  $request->number;

        //     $stock_wastes->balance = $balance_old + $balance_new;

        //     // dd($stock_wastes->balance);



        // }


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

        $stocks = Model_cartridge_ink::find($id);


        //แจกจ่ายตลับหมึก
        $stocks_out = Stock_wastes_outcome_model_cartridge_ink::where('model_cartridge_inks_id', '=', $id)
                    ->orderBy('updated_at', 'desc')
                    ->get();


        //นำเข้าตลับหมึก
        $stocks_in = Stock_wastes_income_model_cartridge_ink::where('model_cartridge_inks_id', '=', $id)
                    ->orderBy('updated_at', 'desc')
                    ->get();



        //จำนวนรับมาทั้งหมด
        // $stock_sum = Stock_wastes_income_model_cartridge_ink::where('model_cartridge_inks_id', '=', $id)
        //             ->sum('amount');
        // /////////////////
        //จำนวนคงเหลือ
        // $balances = $stock_wastes_ModelCartridgeInk->where('model_cartridge_inks_id', '=', $id)->whereIn('id', function($query) {
        //     $query->from('stock_wastes__model_cartridge_inks')->groupBy('model_cartridge_inks_id')->selectRaw('MAX(id)');
        //  })->first();

      $result  = Stock_wastes_income_model_cartridge_ink::where('stock_wastes_income_model_cartridge_inks.model_cartridge_inks_id', '=', $id)->leftJoin('stock_wastes_outcome_model_cartridge_inks', function($join) {
        $join->on('stock_wastes_income_model_cartridge_inks.model_cartridge_inks_id', '=', 'stock_wastes_outcome_model_cartridge_inks.model_cartridge_inks_id')->where('status_id', '=', '2');

      })

                ->groupBy(DB::raw('stock_wastes_income_model_cartridge_inks.model_cartridge_inks_id'))
                ->selectRaw('stock_wastes_income_model_cartridge_inks.model_cartridge_inks_id,
                                SUM(stock_wastes_income_model_cartridge_inks.amount) as in_sum,
                                SUM(stock_wastes_outcome_model_cartridge_inks.amount) as out_sum')

                ->first();

    //dd($result->in_sum);
            // if(!is_null($balances->sum)){
            //     $sum = $balances->sum;
            //     $sum_total = $balances->total_income;
            // }else{
            //     $sum = '0';
            //     $sum_total = $balances->total_income;
            // }

            // if(!is_null($balances->total_outcome)){
            //     $total_outcome = $balances->total_outcome;
            // }else{
            //     $total_outcome = '0';
            // }



    return view('pages.stock.waste.model_cartridge_ink.show', compact('result', 'stocks_in', 'stocks_out'))
      //   ->withBalances($balances)
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
    public function destroy($id)
    {
        $stocks = Stock_wastes_ModelCartridgeInk::find($id);

dd($stocks);

        $oldFile = $stocks->pic;
        if ($oldFile == 'nopic.png') {
            $filename = 'files/' . $oldFile;
            File::delete($filename);
        }

        // $stocks->delete();

        // Session::flash('message', 'ลบข้อมูลเรียบร้อย!');
        // return redirect()->route('schedule.index');
    }
}

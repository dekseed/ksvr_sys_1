<?php

namespace App\Http\Controllers;

use App\Model_cartridge_ink_status;
use App\Stock_wastes_outcome_model_cartridge_ink;
use App\Repair_status;
use App\Repair;
use App\Status_repair;
use App\Stock;
use App\Repair_genus;
use App\Water_color;
use Session;

use Illuminate\Http\Request;

class StockWastesOutcomeModelCartridgeInkController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stock_wastes_outcome_model_cartridge_ink  $stock_wastes_outcome_model_cartridge_ink
     * @return \Illuminate\Http\Response
     */
    public function show(Stock_wastes_outcome_model_cartridge_ink $stock_wastes_outcome_model_cartridge_ink, $id)
    {
        $stocks = $stock_wastes_outcome_model_cartridge_ink->find($id);
        $repair = Model_cartridge_ink_status::where('stock_wastes_outcome_model_cartridge_ink_id', '=', $id)->first();

        $status = Status_repair::all();
        $genus = Repair_genus::all();

     // dd($stocks);

       return view('pages.repair.users.show')->withStocks($stocks)
       ->withRepair($repair)
       ->withGenus($genus)
       ->withStatus($status);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stock_wastes_outcome_model_cartridge_ink  $stock_wastes_outcome_model_cartridge_ink
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock_wastes_outcome_model_cartridge_ink $stock_wastes_outcome_model_cartridge_ink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stock_wastes_outcome_model_cartridge_ink  $stock_wastes_outcome_model_cartridge_ink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock_wastes_outcome_model_cartridge_ink $stock_wastes_outcome_model_cartridge_ink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stock_wastes_outcome_model_cartridge_ink  $stock_wastes_outcome_model_cartridge_ink
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock_wastes_outcome_model_cartridge_ink $stock_wastes_outcome_model_cartridge_ink, $id)
    {

        $user = $stock_wastes_outcome_model_cartridge_ink->find($id);

        if($user->genus_repairs_id == '6'){

            $water_color_id = $user->water_color_id;

            $color = Water_color::find($water_color_id);
            $color->delete();
        }


        define(
            "MESSAGE",
            "ระบบแจ้งซ้อมอุปกรณ์ : ยกเลิกคำสั่ง \n ชื่อผู้แจ้ง " . $user->user->title_name->name . $user->user->first_name .' '. $user->user->last_name .
            "\n หมายเลขอ้างอิง : " . $user->reference_number .
            "\n หมายเลขเครื่อง : " . $user->stock->number .
            "\n ประเภทการซ่อม : " . $user->repair_genus->name
        );

        $user->delete();

        define("token", "EDjuRwSVSw6uSPaIfOzDPvsGQdF03IfFzc3AKJP8IbC");
       // define("token", "9WDHR3FtfptkS9R4SK5sRIRFQ6kqcJXZO6ArkObHcBj");
        line_notify_t(token, MESSAGE);

        Session::flash('message-model_cartridge_ink', 'ลบรายการสำเร็จ !!!');
        return redirect()->route('repair.index');
    }
}

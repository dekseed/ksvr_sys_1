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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class StockWasteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $swq = Stock_waste_quantity::join('stock_wastes', 'stock_waste_quantities.stock_waste_id', '=', 'stock_wastes.id')
            //  ->groupBy('stock_waste_quantities.stock_waste_id')
           ->where('stock_wastes.model_cartridge_inks_id', '=', '0')
           ->select('stock_waste_id', DB::raw('SUM(number) as total_sales'))

           ->groupBy('stock_waste_id')


        ->get();
        $swq1 = Stock_waste_quantity::join('stock_wastes', 'stock_waste_quantities.stock_waste_id', '=', 'stock_wastes.id')
        //  ->groupBy('stock_waste_quantities.stock_waste_id')
        ->where('stock_wastes.model_cartridge_inks_id', '>=', '1')
            ->select('stock_waste_id', DB::raw('SUM(number) as total_sales'))

            ->groupBy('stock_waste_id')


            ->get();


        //  dd($swq);
        $stocksWaste = Category_wastes::orderBy('created_at', 'asc')->get();
        $modelCartInk = Model_cartridge_ink::orderBy('created_at', 'asc')->get();
        $users = User::orderBy('updated_at', 'asc')->paginate(100);
        //dd($stocksWaste);

        $kinds = Stock::all();
        $brands = Brand::all();
        //dd($stocksWaste);


        return view('pages.stock.waste.stock_waste.index')->withUsers($users)

            ->withKinds($kinds)
            ->withBrands($brands)
            ->withModelCartInk($modelCartInk)
             ->withSwq($swq)
            ->withSwq1($swq1)
            ->withStocksWaste($stocksWaste);
            // ->with('ptsCount', $ptsCount)
            // ->with('userCount', $userCount);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.stock.waste.create_waste');
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
        $tender = new Stock_waste();

        $tender->user_id = Auth::user()->id;
        $tender->category_wastes_id = $request->cate_equipments;
        $tender->stock_waste_kinds_id = $request->kinds;
        $tender->user_id_update = Auth::user()->id;
        $tender->detail = $request->detail;
        $tender->name = '-';
        $tender->brand = $request->brand;
        $tender->model = $request->model;

        if ($request->hasFile('file')) {

            $file = $request->file('file');

            $picname = $file->getClientOriginalName();

            $extension = $file->getClientOriginalExtension();
            $pic = rand(11111, 99999) . '.' . $extension;
            $file->move('files', $pic);
            $tender->picname = $picname;
            $tender->pic = $pic;
        } else {

            $tender->picname = 'nopic.png';
            $tender->pic = 'nopic.png';
        }

        $tender->save();

        $swq = new Stock_waste_quantity();

        $swq->user_id = Auth::user()->id;
        $swq->stock_waste_id = $tender->id;
        $swq->round = $request->round;
        $swq->number = $request->number;
        $swq->unit = $request->unit;

        $swq->save();

        Session::flash('message', 'เพิ่มข้อมูลเรียบร้อย!');
        return redirect()->route('waste.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stock_waste  $stock_waste
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cat = Category_wastes::find($id);

        $stocks = Stock_waste::where('category_wastes_id', $id)
            // ->groupby('patient_id')
            ->orderBy('updated_at', 'asc')
            ->get();
       // dd ($stocks);
        // $swq = Stock_waste_quantity::where('stock_waste_id', $id)

        //     ->get();

        $users = User::orderBy('updated_at', 'asc')
            ->paginate(100);

        $cateEquipments = Category_wastes::all();

        $modelCartInk = Model_cartridge_ink::all();

        $kinds = Stock::all();

        $brands = Brand::all();


        return view('pages.stock.waste.show')
            ->withCateEquipments($cateEquipments)
            ->withStocks($stocks)
            ->withKinds($kinds)
            //->withSwq($swq)
            ->withBrands($brands);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stock_waste  $stock_waste
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock_waste $stock_waste)
    {
        $stocks = Stock::find($stock);
        $cateEquipments = Category_equipment::all();
        $kinds = Stock_kind::all();
        $brands = Brand::all();
        $users = User::orderBy('updated_at', 'asc')->paginate(100);
        //dd($brands);
        return view('pages.stock.edit')->withUsers($users)->withCateEquipments($cateEquipments)->withStocks($stocks)->withKinds($kinds)->withBrands($brands);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stock_waste  $stock_waste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock_waste $stock_waste)
    {

        $stock = Stock::find($id);

        if ($request->hasFile('file')) {

            $oldFile = $stock->pic;
            if ($oldFile == 'nopic.png') {
                $filename = 'files/' . $oldFile;
                File::delete($filename);
            }
            $file = $request->file('file');

            $picname = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $pic = rand(11111, 99999) . '.' . $extension;

            $file->move('files', $pic);

            $stock->picname = $picname;
            $stock->pic = $pic;
        }
        $stock->user_id_update = Auth::user()->id;
        $stock->stock_kinds_id = $request->kinds;
        $stock->stock_user_id = $request->user_kinds;
        $stock->category_equipments_id = $request->cate_equipments;

        // $Seq = substr("0001",-5,5);

        // $strNextSeq = date("Y").date("m").$Seq;

        $stock->number = $request->number;
        $stock->name = $request->name;
        $stock->brand_id = $request->brand_id;
        $stock->model = $request->model;
        $stock->sn = $request->sn;
        $stock->expenditure = $request->expenditure;
        $stock->year = $request->year;
        $stock->detail = $request->detail;

        $stock->save();

        Session::flash('message', 'แก้ไขข้อมูลเรียบร้อย!');
        return redirect()->route('schedule.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stock_waste  $stock_waste
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock_waste $stock_waste, $id)
    {
        $stocks = Stock::find($id);

        $oldFile = $stocks->pic;
        if ($oldFile == 'nopic.png') {
            $filename = 'files/' . $oldFile;
            File::delete($filename);
        }

        $stocks->delete();

        Session::flash('message', 'ลบข้อมูลเรียบร้อย!');
        return redirect()->route('schedule.index');
    }

}

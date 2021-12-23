<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Stock;
use App\User;
use App\Category_equipment;
use App\Model_cartridge_ink;
use App\Stock_kind;
use App\Stock_waste;
use Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = Stock::all();
        // $users = User::whereRoleIs('user')->get();
        $users = User::all();
        $cateEquipments = Category_equipment::all();
        $kinds = Stock_kind::all();
        $brands = Brand::all();
        $ptsCount = $users->count();

        $modelcartridge_ = Model_cartridge_ink::all();

//dd($users);

        return view('pages.stock.index', compact('modelcartridge_'))->withUsers($users)
            ->withCateEquipments($cateEquipments)
            ->withStocks($stocks)
            ->withKinds($kinds)
            ->withBrands($brands);
            // ->with('ptsCount', $ptsCount)
            // ->with('userCount', $userCount);

    }
    public function fetch_stock()
    {
        $stocks = Stock::all();

        foreach ($stocks as $key => $post) {

            $data['data'][$key] = [
                $post->id,

            //     if((($post->year) + '4') < (YearFThai(date('Y')) - '2500') || (($post->year) + '4') == (YearFThai(date('Y')) - '2500'))
            //                             {<span class="text-danger">{{$role->number}}</span>}
            //                            else{
            //                                 {{$role->number}}
            // }

                $post->number,
                $post->name,
                $post->category_equipment->name,
                $post->expenditure .' ปี '. $post->year,

            ];
        }

        return response()->json($data);
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

    public function check_number(Request $request)
    {
        if ($request->get('number')) {
            $num = $request->number;
            $data = Stock::where('number', $num)->count();
            if($data >0)
            {
                echo 'not_unique';
            }
            else
            {
                echo 'unique';
            }
        }
    }
    public function store(Request $request)
    {
        dd($request);

        // $this->validate($request, array(
        //     'name' => 'required|max:255',
        //     'description' => 'required|max:3000',
        //     'cate_tenders' => 'required|integer',
        //     'file' => 'required|mimes:pdf',
        // ));

        $tender = new Stock();

        $tender->user_id = Auth::user()->id;
        $tender->stock_kinds_id = $request->kinds;
        $tender->user_id_update = Auth::user()->id;
        //$tender->stock_user_id = $request->user_kinds;
        $tender->category_equipments_id = $request->cate_equipments;
        $tender->brand_id = $request->brand_id;

        // ปีเดือนวัน|รหัสประเภท|จำนวนเครื่อง|ลำดับที่
        // c = com
        // m = moniter
        // p = printer
        // u = ups
        // s = scanner
        // n = notbook
        // a = All-in-one
        // ip = IPcamera
        // sv = main server
        // h = Hub
        // b = printer bacode

        $tender->number = $request->number;
        $tender->name = $request->name;

        $tender->model = $request->model;
        $tender->sn = $request->sn;
        $tender->expenditure = $request->expenditure;
        $tender->year = $request->year;
        $tender->detail = $request->detail;
        $tender->stock_user_id = '0';
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

        if($request->model_cartridge == '2'){

            $tender->model_cartridge_inks_id = '0';

        }
        else if($request->model_cartridge == '1'){

            if ($request->model_cartridge_inks_id > 0) {
                $tender->model_cartridge_inks_id = $request->model_cartridge_inks_id;
            } else {
                $tender->model_cartridge_inks_id = '0';
            }

        } else {

            $tender->model_cartridge_inks_id = '';

        }


        $tender->save();

        Session::flash('message', 'เพิ่มข้อมูลเรียบร้อย!');
        return redirect()->route('schedule.index');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $stocks = Stock::find($id);
        $cateEquipments = Category_equipment::all();
        $brands = Brand::all();
        $kinds = Stock_kind::all();

        //dd($stocks);
        return view('pages.stock.show')->withCateEquipments($cateEquipments)->withStocks($stocks)->withKinds($kinds)->withBrands($brands);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show_user($id)
    {

        $stocks = Stock::find($id);
        $cateEquipments = Category_equipment::all();
        $brands = Brand::all();
        $kinds = Stock_kind::all();

        //dd($stocks);
        return view('pages.stock.show')->withCateEquipments($cateEquipments)->withStocks($stocks)->withKinds($kinds)->withBrands($brands);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit($stock)
    {

        $stocks = Stock::find($stock);
        $cateEquipments = Category_equipment::all();
        $kinds = Stock_kind::all();
        $brands = Brand::all();
        $users = User::orderBy('updated_at', 'asc')->paginate(100);
        $modelcartridge_ = Model_cartridge_ink::all();
        //dd($brands);
        return view('pages.stock.edit', compact('modelcartridge_'))->withUsers($users)->withCateEquipments($cateEquipments)->withStocks($stocks)->withKinds($kinds)->withBrands($brands);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $stock = Stock::find($id);

        if ($request->hasFile('file')) {

            $oldFile = $stock->pic;
            if ($oldFile != 'nopic.png') {
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


        if($request->model_cartridge == '2'){

            $stock->model_cartridge_inks_id = '0';

        }
        else if($request->model_cartridge == '1'){

            if ($request->model_cartridge_inks_id > 0) {
                $stock->model_cartridge_inks_id = $request->model_cartridge_inks_id;
            } else {
                $stock->model_cartridge_inks_id = '0';
            }
       //     dd($stock->model_cartridge_inks_id.'3');
        } else {

            $stock->model_cartridge_inks_id = '';

        }
//dd($stock->model_cartridge_inks_id.'2');
        $stock->save();

            Session::flash('message', 'แก้ไขข้อมูลเรียบร้อย!');
            return redirect()->route('show_user.stock', $stock->id);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

           $stocks = Stock::findOrFail($id);




            $oldFile = $stocks->pic;
            if ($oldFile == 'nopic.png') {

            $stocks->delete();

            }else{

            $filename = 'files/' . $oldFile;
            File::delete($filename);
            $stocks->delete();

            }


            //return response(['id' => $id]);
            // Session::flash('message', 'ลบข้อมูลเรียบร้อย!');
            // return redirect()->route('schedule.index');


    }
}

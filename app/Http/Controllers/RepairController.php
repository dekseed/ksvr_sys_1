<?php

namespace App\Http\Controllers;

use App\Category_equipment;
use App\Repair;
use App\Repair_status;
use App\Stock;
use App\Stock_kind;
use App\User;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use KS\Line\LineNotify;

class RepairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::orderBy('updated_at', 'desc')->paginate(100);
        $cateEquipments = Category_equipment::all();
        $kinds = Stock_kind::all();
        $repairs = Repair::where('user_id', '=', Auth::user()->id)->orderBy('created_at', 'asc')->paginate(100);


        //dd($cate_equipments);
        return view('pages.repair.users.index')->withUsers($users)
                                                ->withCateEquipments($cateEquipments)
                                                // ->withStocks($stocks)
                                                ->withKinds($kinds)
                                                ->withRepairs($repairs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function seach(Request $request)
    {
        $query = $request->get('number');

        $qstock = Stock::where('number', $query)->first();
        $users = User::orderBy('updated_at', 'desc')->paginate(100);
        $cateEquipments = Category_equipment::all();
        $kinds = Stock_kind::all();


        //dd($qstock);
        return view('pages.repair.users.seach_create')->withUsers($users)
            ->withCateEquipments($cateEquipments)
            ->withQstock($qstock)
            ->withKinds($kinds);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stocks = Stock::orderBy('created_at', 'asc')->paginate(100);
        $users = User::orderBy('updated_at', 'desc')->paginate(100);
        $cateEquipments = Category_equipment::all();
        $kinds = Stock_kind::all();
        $repairs = Repair::orderBy('created_at', 'asc')->paginate(100);


        //dd($cate_equipments);
        return view('pages.repair.users.create')->withUsers($users)
            ->withCateEquipments($cateEquipments)
            ->withStocks($stocks)
            ->withKinds($kinds)
            ->withRepairs($repairs);
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
        // $this->validate($request, [
        //     'stock_id' => ['required', 'string', 'max:255'],
        //     'note' => ['required', 'string', 'max:255'],
        //     'detail' => ['required', 'string', 'max:255'],
        //     // 'department' => ['required', 'string', 'max:255'],

        // ]);

        $repairr = new Repair();
        $repairr->stock_id = $request->id_stock;
        $repairr->note = $request->note;
        $repairr->detail = $request->detail;
        $repairr->genus = $request->genus;
        $repairr->status_id = '1';
        $repairr->user_id = Auth::user()->id;
        $repairr->user_id_update = Auth::user()->id;
        if ($request->hasFile('file')) {

            $file = $request->file('file');

            $picname = $file->getClientOriginalName();

            $extension = $file->getClientOriginalExtension();
            $pic = rand(11111, 99999) . '.' . $extension;
            $file->move('files/repair', $pic);
            $repairr->picname = $picname;
            $repairr->pic = $pic;
        } else {

            $repairr->picname = 'nopic.png';
            $repairr->pic = 'nopic.png';
        }

        $repairr->save();


        $stocks = Repair::find($repairr->id);

        if ($stocks->genus == 1) {
            $genus = 'ซอฟต์แวร์';
        } else {
            $genus = 'ฮาร์ดแวร์';
        }
        define(
            "MESSAGE",
            "ชื่อ " . $stocks->user->title_name->name .' '. $stocks->user->name .
                "\n ได้ส่งข้อมูล หมายเลขเครื่อง : " . $stocks->stock->number .
                "\n ประเภทการซ่อม : " . $genus .
                "\n รายละเอียดการซ่อม/ปัญหา : " . $stocks->detail .
                " รายละเอียดตามลิ้งนี้ : " . url("/admin/repair-admin/{$stocks->id}/edit")
        );
        define("token", "SJDxlhkRWGKuA2I0rmiVm0KmPbEVCSZA4QcEuOn1YPg");
        line_notify_t(token, MESSAGE);

        Session::flash('message', 'เพิ่มรายการซ่อมสำเร็จ !!!');
        return redirect()->route('repair.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stocks = Repair::find($id);
//dd($stocks);
       return view('pages.repair.users.show')->withStocks($stocks);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function edit(Repair $repair, $id)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $repairr = Repair::find($id);

        if ($request->hasFile('file')) {
            $oldFile = $repairr->pic;
            if ($oldFile != 'nopic.png') {
                $filename = 'files/repair/' . $oldFile;
                //dd($filename);
                File::delete($filename);
            }
            $file = $request->file('file');

            $picname = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $pic = rand(11111, 99999) . '.' . $extension;

            $file->move('files/repair', $pic);

            $repairr->picname = $picname;
            $repairr->pic = $pic;


        }


        if (is_null($request->id_stock)) {

        }else{
            $repairr->stock_id = $request->id_stock;
        }

        $repairr->note = $request->note;
        $repairr->detail = $request->detail;
        $repairr->genus = $request->genus;
        $repairr->user_id_update = Auth::user()->id;

        $repairr->save();

        Session::flash('message', 'แก้ไขข้อมูลเรียบร้อย!');
        return redirect()->route('repair.show', $repairr->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Repair::find($id);
        $user->delete();

        Session::flash('message', 'ลบข้อมูลเรียบร้อย!');
        return redirect()->route('repair.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Category_equipment;
use App\Repair;
use App\Repair_genus;
use App\Repair_status;
use App\Status_repair;
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
        $genus = Repair_genus::all();
        $repairs = Repair::where('user_id', '=', Auth::user()->id)->orderBy('created_at', 'asc')->paginate(100);


        //dd($cate_equipments);
        return view('pages.repair.users.index')->withUsers($users)
                                                ->withCateEquipments($cateEquipments)
                                                 ->withGenus($genus)
                                                ->withKinds($kinds)
                                                ->withRepairs($repairs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function seach($id)
    {
        $qstock = Stock::find($id);

       // $qstock = Stock::where('number', $query)->first();
        $users = User::orderBy('updated_at', 'desc')->paginate(100);
        $cateEquipments = Category_equipment::all();
        $kinds = Stock_kind::all();
        $genus = Repair_genus::all();

      //dd($qstock);
        return view('pages.repair.users.seach_create')->withUsers($users)
            ->withCateEquipments($cateEquipments)
            ->withQstock($qstock)
            ->withGenus($genus)
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
        $genus = Repair_genus::all();
        $repairs = Repair::orderBy('created_at', 'asc')->paginate(100);


        //dd($cate_equipments);
        return view('pages.repair.users.create')->withUsers($users)
            ->withCateEquipments($cateEquipments)
            ->withStocks($stocks)
            ->withGenus($genus)
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
        $repairr = new Repair();
        $repairr->stock_id = $request->id_stock;
        $repairr->note = $request->note;
        $repairr->detail = $request->detail;
        $repairr->genus = $request->genus;
        $repairr->genus_repairs_id = $request->genus;
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

        define(
            "MESSAGE",
            "ระบบแจ้งซ้อมอุปกรณ์ : มีงานเข้าค่ะ \n ชื่อผู้แจ้ง " . $stocks->user->title_name->name . $stocks->user->first_name .' '. $stocks->user->last_name .
                "\n ได้ส่งข้อมูล หมายเลขเครื่อง : " . $stocks->stock->number .
                "\n ประเภทการซ่อม : " . $stocks->repair_genus->name .
                "\n รายละเอียดการซ่อม/ปัญหา : " . $stocks->detail .
                "\n รายละเอียดตามลิ้งนี้ : " . url("/admin/repair-admin/{$stocks->id}/edit")
        );
        define("token", "9WDHR3FtfptkS9R4SK5sRIRFQ6kqcJXZO6ArkObHcBj");
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
        $repair = Repair_status::where('repair_id', '=', $id)->first();
       //dd($repair);
        $status = Status_repair::all();
        $genus = Repair_genus::all();
       return view('pages.repair.users.show')->withStocks($stocks)
       ->withRepair($repair)
       ->withGenus($genus)
       ->withStatus($status);

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
        $repairr->genus_repairs_id = $request->genus;
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

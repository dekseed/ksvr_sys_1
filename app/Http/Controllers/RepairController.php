<?php

namespace App\Http\Controllers;

use App\Category_equipment;
use App\Repair;
use App\Repair_genus;
use App\Repair_status;
use App\Status_repair;
use App\Stock;
use App\Stock_kind;
use App\Stock_wastes_ModelCartridgeInk;
use App\Stock_wastes_outcome_model_cartridge_ink;
use App\User;
use App\Water_color;
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

        $model_cartridges = Stock_wastes_outcome_model_cartridge_ink::where('user_id', '=', Auth::user()->id)->orderBy('created_at', 'asc')->get();

     // dd($model_cartridges);
        return view('pages.repair.users.index', compact('model_cartridges'))->withUsers($users)
                                                ->withCateEquipments($cateEquipments)
                                                ->withGenus($genus)
                                                ->withKinds($kinds)

                                                ->withRepairs($repairs);
                                               // ->withModel_cartridges($model_cartridges)
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

       // dd($request);
        $this->validate(
            $request,
            [
              'id_stock' => 'required',

      ],
      [
          'id_stock.required'    => 'กรุณาเลือกเครื่องที่ต้องการแจ้ง',
          ]
        );



        if ($request->genus == '5') {

            $stock_item = Stock::find($request->id_stock);
         //   dd($stock_item->model_cartridge_inks_id);
            $repairr = new Stock_wastes_outcome_model_cartridge_ink();
                $repairr->stock_id = $request->id_stock;
                $repairr->model_cartridge_inks_id = $stock_item->model_cartridge_inks_id;


                $latestOrder = Stock_wastes_outcome_model_cartridge_ink::orderBy('created_at','DESC')->first();

                if(is_null($latestOrder)){
                    $id = '1';
                } else {
                    $id = $latestOrder->id;
                }

                $repairr->reference_number = '#'.str_pad($id + 1, 8, "0", STR_PAD_LEFT);
                $repairr->genus_repairs_id = $request->genus;

                $repairr->status_id = '1';

                $repairr->user_id = Auth::user()->id;
                $repairr->admin_id = '';
                $repairr->amount = $request->model_cartridge_ink;
                $repairr->departments_id = '100';
                $repairr->save();

                $stocks = Stock_wastes_outcome_model_cartridge_ink::find($repairr->id);
           //     dd($stocks);
                            define(
                                "MESSAGE",
                                "ระบบแจ้งซ้อมอุปกรณ์ : มีงานเข้าค่ะ \n ชื่อผู้แจ้ง " . $stocks->user->title_name->name . $stocks->user->first_name .' '. $stocks->user->last_name .
                                "\n ได้ส่งข้อมูล หมายเลขอ้างอิง : " . $stocks->reference_number .
                                "\n หมายเลขเครื่อง : " . $stocks->stock->number .
                                "\n ประเภทการซ่อม : " . 'เปลี่ยนตลับหมึก' .
                                "\n รุ่นตลับหมึก : " . $stocks->stock->model_cartridge_ink->name .
                                "\n แผนก : " . $stocks->stock->department->name .
                                "\n จำนวน : " . $stocks->amount . " ตลับ" .
                                "\n รายละเอียดตามลิ้งนี้ : " . url("/admin/repair-admin/model_cartridge_ink/{$stocks->id}/edit")
                            );

                            define("token", "EDjuRwSVSw6uSPaIfOzDPvsGQdF03IfFzc3AKJP8IbC");
                           // define("token", "9WDHR3FtfptkS9R4SK5sRIRFQ6kqcJXZO6ArkObHcBj");
                            line_notify_t(token, MESSAGE);

                            Session::flash('message-model_cartridge_ink', 'เพิ่มรายการสำเร็จ !!!');
                            return redirect()->route('repair.index');

        } else if ($request->genus == '6') {


                $repairr = new Stock_wastes_outcome_model_cartridge_ink();
                $repairr->stock_id = $request->id_stock;
                $repairr->model_cartridge_inks_id = '1';
                $repairr->genus_repairs_id = $request->genus;

                $latestOrder = Stock_wastes_outcome_model_cartridge_ink::orderBy('created_at','DESC')->first();

                if(is_null($latestOrder)){
                    $id = '1';
                } else {
                    $id = $latestOrder->id;
                }

                $repairr->reference_number = '#'.str_pad($id + 1, 8, "0", STR_PAD_LEFT);

                $repairr->status_id = '1';
                $repairr->user_id = Auth::user()->id;
                $repairr->admin_id = '';
                // $repairr->amount = $request->model_cartridge_ink;

                    $color = new Water_color();
                    $color->cyan = $request->c;
                    $color->magenta = $request->m;
                    $color->yellow = $request->y;
                    $color->black = $request->k;

                    $color->save();

                $repairr->water_color_id = $color->id;

                $repairr->save();

                $stocks = Stock_wastes_outcome_model_cartridge_ink::find($repairr->id);
           //     dd($stocks);
                            define(
                                "MESSAGE",
                                "ระบบแจ้งซ้อมอุปกรณ์ : มีงานเข้าค่ะ \n ชื่อผู้แจ้ง " . $stocks->user->title_name->name . $stocks->user->first_name .' '. $stocks->user->last_name .
                                "\n ได้ส่งข้อมูล หมายเลขอ้างอิง : " . $stocks->reference_number .
                                "\n หมายเลขเครื่อง : " . $stocks->stock->number .
                                "\n ประเภทการซ่อม : " . 'เติมน้ำหมึก' .
                                "\n สี : " . $request->c .','. $request->m .','. $request->y .','. $request->k .
                                "\n แผนก : " . $stocks->stock->department->name .
                                "\n รายละเอียดตามลิ้งนี้ : " . url("/admin/repair-admin/model_cartridge_ink/{$stocks->id}/edit")
                            );

                            define("token", "EDjuRwSVSw6uSPaIfOzDPvsGQdF03IfFzc3AKJP8IbC");
                           // define("token", "9WDHR3FtfptkS9R4SK5sRIRFQ6kqcJXZO6ArkObHcBj");
                            line_notify_t(token, MESSAGE);

                            Session::flash('message-model_cartridge_ink', 'เพิ่มรายการสำเร็จ !!!');
                            return redirect()->route('repair.index');

        }
        else{

                $repairr = new Repair();
                $repairr->stock_id = $request->id_stock;
                $repairr->note = $request->note;
                $repairr->detail = $request->detail;
                $repairr->genus = $request->genus;
                $repairr->genus_repairs_id = $request->genus;
                $repairr->status_id = '1';
                $repairr->user_id = Auth::user()->id;
                $repairr->user_id_update = Auth::user()->id;
                $latestOrder = Repair::orderBy('created_at','DESC')->first();
                $repairr->reference_number = '#'.str_pad($latestOrder->id + 1, 8, "0", STR_PAD_LEFT);

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
                "\n ได้ส่งข้อมูล หมายเลขอ้างอิง : " . $stocks->reference_number .
                "\n หมายเลขเครื่อง : " . $stocks->stock->number .
                "\n แผนก : " . $stocks->stock->department->name .
                "\n ประเภทการซ่อม : " . $stocks->repair_genus->name .
                "\n รายละเอียดการซ่อม/ปัญหา : " . $stocks->detail .
                "\n รายละเอียดตามลิ้งนี้ : " . url("/admin/repair-admin/{$stocks->id}/edit")
            );

            define("token", "EDjuRwSVSw6uSPaIfOzDPvsGQdF03IfFzc3AKJP8IbC");
            // define("token", "9WDHR3FtfptkS9R4SK5sRIRFQ6kqcJXZO6ArkObHcBj");
            line_notify_t(token, MESSAGE);

            Session::flash('message', 'เพิ่มรายการสำเร็จ !!!');
            return redirect()->route('repair.index');
        }





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

        $this->validate(
                            $request,
                            [

                            'id_stock' => 'required',

                            ],
                            [

                            'id_stock.required'    => 'กรุณาเลือกเครื่องที่ต้องการแจ้ง',

                            ]

                        );


        if ($request->model_cartridge_type == '0') {


            if ($request->genus == '5') {

                //เปลี่ยนจำนวนตลับหมึก

                $repairr = Stock_wastes_outcome_model_cartridge_ink::find($id);

                $amount = $repairr->amount;

                $repairr->stock_id = $request->id_stock;
                $repairr->model_cartridge_inks_id = $request->model_cartridge_id;

                $repairr->status_id = '1';
                $repairr->user_id = Auth::user()->id;
                $repairr->admin_id = '';
                $repairr->amount = $request->model_cartridge_ink;

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

                $repairr->save();

                $stocks = Stock_wastes_outcome_model_cartridge_ink::find($repairr->id);

                            define(
                                "MESSAGE",
                                "ระบบแจ้งซ้อมอุปกรณ์ : แก้ไขคำสั่ง \n ชื่อผู้แจ้ง " . $stocks->user->title_name->name . $stocks->user->first_name .' '. $stocks->user->last_name .
                                "\n ได้ส่งข้อมูล หมายเลขอ้างอิง : " . $stocks->reference_number .
                                "\n หมายเลขเครื่อง : " . $stocks->stock->number .
                                "\n ประเภทการซ่อม : " . 'เปลี่ยนตลับหมึก' .
                                "\n รุ่นตลับหมึก : " . $stocks->stock->model_cartridge_ink->name .
                                "\n แผนก : " . $stocks->stock->department->name .
                                "\n จำนวนเดิม : " . $amount . " ตลับ" .
                                "\n เปลี่ยนเป็นจำนวน : " . $stocks->amount . " ตลับ" .
                                "\n รายละเอียดตามลิ้งนี้ : " . url("/admin/repair-admin/model_cartridge_ink/{$stocks->id}/edit")
                            );

                            define("token", "EDjuRwSVSw6uSPaIfOzDPvsGQdF03IfFzc3AKJP8IbC");
                            // define("token", "9WDHR3FtfptkS9R4SK5sRIRFQ6kqcJXZO6ArkObHcBj");
                            line_notify_t(token, MESSAGE);

                            Session::flash('message', 'แก้ไขข้อมูลเรียบร้อย!');
                            return redirect()->route('cartridge-user.show', $repairr->id);

            }
            else if ($request->genus == '6') {

                //เปลี่ยนจำนวนตลับหมึก



                $repairr = Stock_wastes_outcome_model_cartridge_ink::find($id);
                $repairr->stock_id = $request->id_stock;
                $repairr->detail = $request->detail;
                $repairr->save();

                $color = Water_color::find($request->water_color_id);
             //   dd($color);
                if($color->c == '1'){
                    $cyan_old = 'สีฟ้า';
                }else{
                    $cyan_old = '';
                }

                if($color->m == '1'){
                    $magenta_old = 'สีแดง';
                }else{
                    $magenta_old = '';
                }

                if($color->y == '1'){
                    $yellow_old = 'สีเหลือง';
                }else{
                    $yellow_old = '';
                }

                if($color->k == '1'){
                    $black_old = 'สีดำ';
                }else{
                    $black_old = '';
                }

                if($request->c == '1'){
                    $cyan = 'สีฟ้า';
                }else{
                    $cyan = '';
                }

                if($request->m == '1'){
                    $magenta = 'สีแดง';
                }else{
                    $magenta = '';
                }

                if($request->y == '1'){
                    $yellow = 'สีเหลือง';
                }else{
                    $yellow = '';
                }

                if($request->k == '1'){
                    $black = 'สีดำ';
                }else{
                    $black = '';
                }

                $color->cyan = $request->c;
                $color->magenta = $request->m;
                $color->yellow = $request->y;
                $color->black = $request->k;

                $color->save();



                $stocks = Stock_wastes_outcome_model_cartridge_ink::find($repairr->id);
                //dd($stocks);
                            define(
                                "MESSAGE",
                                "ระบบแจ้งซ้อมอุปกรณ์ : แก้ไขคำสั่ง \n ชื่อผู้แจ้ง " . $stocks->user->title_name->name . $stocks->user->first_name .' '. $stocks->user->last_name .
                                "\n ได้ส่งข้อมูล หมายเลขอ้างอิง : " . $stocks->reference_number .
                                "\n หมายเลขเครื่อง : " . $stocks->stock->number .
                                "\n แผนก : " . $stocks->stock->department->name .
                                "\n ประเภทการซ่อม : " . 'เติมน้ำหมึก' .
                                "\n สีเดิม : " . $cyan_old . " " . $magenta_old . " " . $yellow_old . " " . $black_old .
                                "\n เปลี่ยนเป็นสี : " . $cyan . " " . $magenta . " " . $yellow . " " . $black .
                                "\n รายละเอียดตามลิ้งนี้ : " . url("/admin/repair-admin/model_cartridge_ink/{$stocks->id}/edit")
                            );

                            define("token", "EDjuRwSVSw6uSPaIfOzDPvsGQdF03IfFzc3AKJP8IbC");
                            // define("token", "9WDHR3FtfptkS9R4SK5sRIRFQ6kqcJXZO6ArkObHcBj");
                            line_notify_t(token, MESSAGE);

                            Session::flash('message', 'แก้ไขข้อมูลเรียบร้อย!');
                            return redirect()->route('cartridge-user.show', $repairr->id);

            }

            else{

                //เปลี่ยนจากตลับหมึกเป็นอย่างอื่น

                //ลบข้อมูลตลับหมึก
                $user = Stock_wastes_outcome_model_cartridge_ink::find($id);

                $amount = $user->amount;
                $reference_number = $user->reference_number;
                $water_color_id = $user->water_color_id;
                $user->delete();

                $color = Water_color::find($water_color_id);
                $color->delete();

                //เพิ่มข้อมูลอย่างอื่น

                $repairr = new Repair();
                $repairr->reference_number = $reference_number;
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
                    "ระบบแจ้งซ้อมอุปกรณ์ : แก้ไขคำสั่ง \n ชื่อผู้แจ้ง " . $stocks->user->title_name->name . $stocks->user->first_name .' '. $stocks->user->last_name .
                    "\n ได้ส่งข้อมูล หมายเลขอ้างอิง : " . $stocks->reference_number .
                    "\n หมายเลขเครื่อง : " . $stocks->stock->number .
                    "\n แผนก : " . $stocks->stock->department->name .
                    "\n ประเภทการซ่อม : " . $stocks->repair_genus->name .
                    "\n รายละเอียดการซ่อม/ปัญหา : " . $stocks->detail .
                    "\n รายละเอียดตามลิ้งนี้ : " . url("/admin/repair-admin/{$stocks->id}/edit")
                );

                define("token", "EDjuRwSVSw6uSPaIfOzDPvsGQdF03IfFzc3AKJP8IbC");
                // define("token", "9WDHR3FtfptkS9R4SK5sRIRFQ6kqcJXZO6ArkObHcBj");
                line_notify_t(token, MESSAGE);

                Session::flash('message', 'แก้ไขข้อมูลเรียบร้อย!');
                return redirect()->route('repair.show', $repairr->id);
            }

        }else{

           // dd($request);

            if ($request->genus == '5') {

                //เปลี่ยนจากอื่นๆ เป็นเปลี่ยตลับหมึก

                //ลบข้อมูลเดิม
                $user = Repair::find($id);

                $reference_number = $user->reference_number;
                $model_cartridge_id = $user->stock->model_cartridge_inks_id;

                $user->delete();

                //เพิ่มข้อมูลใหม่
                $repairr = new Stock_wastes_outcome_model_cartridge_ink();
                $repairr->reference_number = $reference_number;
                $repairr->stock_id = $request->id_stock;
                $repairr->model_cartridge_inks_id = $model_cartridge_id;

                $repairr->status_id = '1';
                $repairr->user_id = Auth::user()->id;
                $repairr->admin_id = '';
                $repairr->amount = $request->model_cartridge_ink;

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

                $repairr->save();

                $stocks = Stock_wastes_outcome_model_cartridge_ink::find($repairr->id);

                            define(
                                "MESSAGE",
                                "ระบบแจ้งซ้อมอุปกรณ์ : แก้ไขคำสั่ง \n ชื่อผู้แจ้ง " . $stocks->user->title_name->name . $stocks->user->first_name .' '. $stocks->user->last_name .
                                "\n ได้ส่งข้อมูล หมายเลขอ้างอิง : " . $stocks->reference_number .
                                "\n หมายเลขเครื่อง : " . $stocks->stock->number .
                                "\n แผนก : " . $stocks->stock->department->name .
                                "\n ประเภทการซ่อม : " . 'เปลี่ยนตลับหมึก' .
                                "\n รุ่นตลับหมึก : " . $stocks->stock->model_cartridge_ink->name .
                                "\n เปลี่ยนเป็นจำนวน : " . $stocks->amount . " ตลับ" .
                                "\n รายละเอียดตามลิ้งนี้ : " . url("/admin/repair-admin/model_cartridge_ink/{$repairr->id}/edit")
                            );

                            define("token", "EDjuRwSVSw6uSPaIfOzDPvsGQdF03IfFzc3AKJP8IbC");
                            // define("token", "9WDHR3FtfptkS9R4SK5sRIRFQ6kqcJXZO6ArkObHcBj");
                            line_notify_t(token, MESSAGE);

                            Session::flash('message', 'แก้ไขข้อมูลเรียบร้อย!');
                            return redirect()->route('cartridge-user.show', $repairr->id);
            }
            else if ($request->genus == '6') {

                $user = Repair::find($id);

                $reference_number = $user->reference_number;

                $user->delete();

                $repairr = new Stock_wastes_outcome_model_cartridge_ink();
                $repairr->reference_number = $reference_number;
                $repairr->stock_id = $request->id_stock;
                $repairr->model_cartridge_inks_id = '1';
                $repairr->genus_repairs_id = $request->genus;

                $repairr->status_id = '1';
                $repairr->user_id = Auth::user()->id;
                $repairr->admin_id = '';

                    $color = new Water_color();
                    $color->cyan = $request->c;
                    $color->magenta = $request->m;
                    $color->yellow = $request->y;
                    $color->black = $request->k;

                    $color->save();

                $repairr->water_color_id = $color->id;

                $repairr->save();

                $stocks = Stock_wastes_outcome_model_cartridge_ink::find($repairr->id);
                //     dd($stocks);
                            define(
                                "MESSAGE",
                                "ระบบแจ้งซ้อมอุปกรณ์ : แก้ไขคำสั่ง \n ชื่อผู้แจ้ง " . $stocks->user->title_name->name . $stocks->user->first_name .' '. $stocks->user->last_name .
                                "\n ได้ส่งข้อมูล หมายเลขอ้างอิง : " . $stocks->reference_number .
                                "\n หมายเลขเครื่อง : " . $stocks->stock->number .
                                "\n ประเภทการซ่อม : " . 'เติมน้ำหมึก' .
                                "\n สี : " . $request->c .','. $request->m .','. $request->y .','. $request->k .
                                "\n แผนก : " . $stocks->stock->department->name .
                                "\n รายละเอียดตามลิ้งนี้ : " . url("/admin/repair-admin/model_cartridge_ink/{$stocks->id}/edit")
                            );

                            define("token", "EDjuRwSVSw6uSPaIfOzDPvsGQdF03IfFzc3AKJP8IbC");
                        // define("token", "9WDHR3FtfptkS9R4SK5sRIRFQ6kqcJXZO6ArkObHcBj");
                            line_notify_t(token, MESSAGE);

                            Session::flash('message', 'แก้ไขข้อมูลเรียบร้อย!');
                            return redirect()->route('cartridge-user.show', $repairr->id);

            }

            else{

                //เปลี่ยนอย่างอื่น
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
                    $genus = $repairr->genus;
                    $note = $repairr->note;
                    $genus_repairs_id_old = $repairr->genus_repairs_id;
                    $stock_id = $repairr->stock_id;
                    $user_id = $repairr->user_id;

                    $repairr->status_id = '1';
                    $repairr->user_id = Auth::user()->id;
                    $repairr->user_id_update = Auth::user()->id;
                    $repairr->stock_id = $request->id_stock;
                    $repairr->user_id = $request->genus;
                    $repairr->user_id = $request->genus_repairs_id;
                    $detail = $repairr->detail;


                    $repairr->save();

                    define(
                        "MESSAGE",
                        "ระบบแจ้งซ่อมอุปกรณ์ : แก้ไขคำสั่ง \n ชื่อผู้แจ้ง " . $repairr->user->title_name->name . $repairr->user->first_name .' '. $repairr->user->last_name .
                        "\n ได้ส่งข้อมูล หมายเลขอ้างอิง : " . $repairr->reference_number .
                        "\n หมายเลขเครื่อง : " . $repairr->stock->number .
                        "\n แผนก : " . $repairr->stock->department->name .
                        "\n ประเภทการซ่อม : " . $repairr->repair_genus->name .
                        "\n รายละเอียดการซ่อม/ปัญหา : " . $repairr->detail .
                        "\n รายละเอียดตามลิ้งนี้ : " . url("/admin/repair-admin/{$repairr->id}/edit")
                    );

                    define("token", "EDjuRwSVSw6uSPaIfOzDPvsGQdF03IfFzc3AKJP8IbC");
                    // define("token", "9WDHR3FtfptkS9R4SK5sRIRFQ6kqcJXZO6ArkObHcBj");
                    line_notify_t(token, MESSAGE);

                    Session::flash('message', 'แก้ไขข้อมูลเรียบร้อย!');
                    return redirect()->route('repair.show', $repairr->id);
            }

        }

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

        Session::flash('message', 'ลบข้อมูลเรียบร้อย!');
        return redirect()->route('repair.index');
    }
}

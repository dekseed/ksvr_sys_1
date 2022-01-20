<?php

namespace App\Http\Controllers;

use App\Category_equipment;
use App\Model_cartridge_ink_status;
use App\Repair_status;
use App\Repair;
use App\Status_repair;
use App\Stock;
use App\Stock_kind;
use App\Stock_wastes_outcome_model_cartridge_ink;
use App\User;
use DB;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Session;

class RepairAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $stock = Repair::orderBy('created_at', 'asc')->get();

        $model_cartridge_ink = Stock_wastes_outcome_model_cartridge_ink::orderBy('created_at', 'asc')->get();

        $stocks = $model_cartridge_ink->union($stock);

        //dd($stocks);

        return view('pages.repair.admin.index')->withStocks($stocks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
              'signed' => 'required',

      ],
      [
          'signed.required'    => 'กรุณาลงลายเซ็นต์',
          ]
        );



        if (is_null($request->amount) && is_null($request->water_color_id)){

            $repair_admin = new Repair_status();
            $repair_admin->note = $request->note;
            $repair_admin->detail = $request->detail;
            $repair_admin->repair_id = $request->repair_id;
            $repair_admin->user_id = Auth::user()->id;
            $repair_admin->user_id_update = Auth::user()->id;

            if ($request->signed) {

                $folderPath = 'repair/';

                $img = $request->signed;
                $img = str_replace('data:image/png;base64,', '', $img);
                $img = str_replace(' ', '+', $img);
                $data = base64_decode($img);
                $files = uniqid() . '.png';
                $file = $folderPath . $files;
                $success = Storage::disk('public_upload')->put($file, $data);
                //dd($success);
               // $success = file_put_contents($file, $data);
                $image = str_replace('./', '', $file);
            } else {
                $files = 'ยังไม่มีข้อมูล';
            }

            $repair_admin->signed = $files;

            $repair_admin->save();


            $repairr = Repair::find($request->repair_id);
            $repairr->status_id = $request->status_id;

            $repairr->save();



            define(
                "MESSAGE",
                "ชื่อ " . $repair_admin->user->title_name->name . $repair_admin->user->first_name .' '. $repair_admin->user->last_name .
                    "\n ได้ทำการแก้ไข หมายเลขเครื่อง : " . $repair_admin->repair->stock->number .
                    "\n รายละเอียดการซ่อม/ปัญหา : " . $repair_admin->detail .
                    "\n สถานะ : " . $repair_admin->repair->status_repair->name .
                    "\n รายละเอียดตามลิ้งนี้ : " . url("/admin/repair-admin/{$repairr->id}")
            );

            define("token", "EDjuRwSVSw6uSPaIfOzDPvsGQdF03IfFzc3AKJP8IbC");
            //define("token", "9WDHR3FtfptkS9R4SK5sRIRFQ6kqcJXZO6ArkObHcBj");
            line_notify_t(token, MESSAGE);

            Session::flash('message', 'ทำรายการสำเร็จ !');
            return redirect()->route('repair-admin.index');

        } else {

            $repair_admin = new Model_cartridge_ink_status();
            $repair_admin->note = $request->note;
            $repair_admin->stock_wastes_outcome_model_cartridge_ink_id = $request->repair_id;
            $repair_admin->user_id = Auth::user()->id;
            $repair_admin->user_id_update = Auth::user()->id;

            if ($request->signed) {

                $folderPath = 'repair/';

                $img = $request->signed;
                $img = str_replace('data:image/png;base64,', '', $img);
                $img = str_replace(' ', '+', $img);
                $data = base64_decode($img);
                $files = uniqid() . '.png';
                $file = $folderPath . $files;
                $success = Storage::disk('public_upload')->put($file, $data);
                //dd($success);
               // $success = file_put_contents($file, $data);
                $image = str_replace('./', '', $file);
            } else {
                $files = 'ยังไม่มีข้อมูล';
            }

            $repair_admin->signed = $files;
            $repair_admin->save();


            $repairr = Stock_wastes_outcome_model_cartridge_ink::find($request->repair_id);
            $repairr->status_id = $request->status_id;

            $repairr->save();

            if($request->water_color_id > 0 ){

                define(
                    "MESSAGE",
                    "ชื่อ " . $repair_admin->user->title_name->name . $repair_admin->user->first_name .' '. $repair_admin->user->last_name .
                        "\n ได้ทำการเติมน้ำหมึก หมายเลขเครื่อง : " . $repairr->stock->number .
                        "\n แผนก : " . $repairr->stock->department->name .
                        "\n สถานะ : " . $repairr->status_repair->name .
                        "\n รายละเอียดตามลิ้งนี้ : " . url("/admin/repair-admin/model_cartridge_ink/{$repairr->id}")
                );

            }else {
                define(
                "MESSAGE",
                "ชื่อ " . $repair_admin->user->title_name->name . $repair_admin->user->first_name .' '. $repair_admin->user->last_name .
                    "\n ได้ทำการเปลี่ยนตลับหมึก หมายเลขเครื่อง : " . $repairr->stock->number .
                    "\n รุ่นตลับหมึก : " . $repairr->stock->model_cartridge_ink->name .
                    "\n แผนก : " . $repairr->stock->department->name .
                    "\n จำนวน : " . $repairr->amount . " ตลับ" .
                    "\n สถานะ : " . $repairr->status_repair->name .
                    "\n รายละเอียดตามลิ้งนี้ : " . url("/admin/repair-admin/model_cartridge_ink/{$repairr->id}")
            );

            }


            define("token", "EDjuRwSVSw6uSPaIfOzDPvsGQdF03IfFzc3AKJP8IbC");
            //define("token", "9WDHR3FtfptkS9R4SK5sRIRFQ6kqcJXZO6ArkObHcBj");
            line_notify_t(token, MESSAGE);

            Session::flash('message', 'ทำรายการสำเร็จ !');
            return redirect()->route('repair-admin.index');

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Repair_status  $repair_status
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $stocks = Repair::find($id);
        $repair = Repair_status::where('repair_id', '=', $id)->first();
   //dd($stocks->stock->departments_id);
        $status = Status_repair::all();
        return view('pages.repair.admin.show')->withStocks($stocks)
                                                ->withRepair($repair)
                                                ->withStatus($status);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Repair_status  $repair_status
     * @return \Illuminate\Http\Response
     */

    public function show_model_cartridge_ink($id)
    {

        $stocks = Stock_wastes_outcome_model_cartridge_ink::find($id);


        $repair = Model_cartridge_ink_status::where('stock_wastes_outcome_model_cartridge_ink_id', '=', $id)->first();

        $status = Status_repair::all();

      //  dd($stocks);
      return view('pages.repair.admin.show')->withStocks($stocks)
                ->withRepair($repair)
                ->withStatus($status);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Repair_status  $repair_status
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $stocks = Repair::find($id);
        $status = Status_repair::all();

     //   dd($stocks);
        return view('pages.repair.admin.edit')->withStocks($stocks)
            ->withStatus($status);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Repair_status  $repair_status
     * @return \Illuminate\Http\Response
     */
    public function edit_model_cartridge_ink($id)
    {
        $stocks = Stock_wastes_outcome_model_cartridge_ink::find($id);
        $status = Status_repair::all();

     //   dd($stocks);
        return view('pages.repair.admin.edit')->withStocks($stocks)
            ->withStatus($status);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Repair_status  $repair_status
     * @return \Illuminate\Http\Response
     */



    public function update(Request $request, $id)
    {
      //  dd($request);
        if (is_null($request->amount) && is_null($request->water_color_id)) {

            $repair_admin = Repair_status::find($id);

            $repair_admin->note = $request->note;
            $repair_admin->detail = $request->detail;
            $repair_admin->user_id_update = Auth::user()->id;

            // if ($request->signed) {
            //     $folderPath = 'repair/';

            //     $img = $request->signed;
            //     $img = str_replace('data:image/png;base64,', '', $img);
            //     $img = str_replace(' ', '+', $img);
            //     $data = base64_decode($img);
            //     $files = uniqid() . '.png';
            //     $file = $folderPath . $files;
            //     $success = Storage::disk('public_upload')->put($file, $data);
            //     //dd($success);
            //     // $success = file_put_contents($file, $data);
            //     $image = str_replace('./', '', $file);

            //     $repair_admin->signed = $files;
            // }
            // else {
            //     $files = 'ยังไม่มีข้อมูล';
            // }

            $repair_admin->save();


            $repairr = Repair::find($request->stocks_id);
            $repairr->status_id = $request->status_id;

            $repairr->save();


            Session::flash('message', 'แก้ไขข้อมูลเรียบร้อย!');
            return redirect()->route('repair-admin.show', $repairr->id);

        } else{

            $repair_admin = Model_cartridge_ink_status::find($id);

            $repair_admin->note = $request->note;

            $repair_admin->user_id_update = Auth::user()->id;

            // if ($request->signed) {

            //     $folderPath = 'repair/';

            //     $img = $request->signed;
            //     $img = str_replace('data:image/png;base64,', '', $img);
            //     $img = str_replace(' ', '+', $img);
            //     $data = base64_decode($img);
            //     $files = uniqid() . '.png';
            //     $file = $folderPath . $files;
            //     $success = Storage::disk('public_upload')->put($file, $data);
            //     //dd($success);
            //    // $success = file_put_contents($file, $data);
            //     $image = str_replace('./', '', $file);
            // } else {
            //     $files = 'ยังไม่มีข้อมูล';
            // }

            $repair_admin->signed = $files;

            $repair_admin->save();


            $repairr = Stock_wastes_outcome_model_cartridge_ink::find($request->stocks_id);
            $repairr->status_id = $request->status_id;

            $repairr->save();

            Session::flash('message', 'แก้ไขข้อมูลเรียบร้อย!');
            return redirect()->route('model_cartridge_ink.show', $repairr->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Repair_status  $repair_status
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Repair::find($id);
        $user->delete();

        $report = Repair_status::where('repair_id', '=', $id)->first();
        $oldFile = $report->signed;
        //dd($oldFile);
         $filename = 'files/repair/' . $oldFile;
         File::delete($filename);

        $report1 = DB::table('repair_statuses')->where('repair_id', '=', $id)->delete();

         Session::flash('message', 'ลบข้อมูลเรียบร้อย!');
         return redirect()->route('repair-admin.index');
    }
}

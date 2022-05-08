<?php

namespace App\Http\Controllers;


use App\IDCard\CateIDCard;
use App\IDCard\IDCard;
use App\IDCard\CateStatusIDCard;
use App\IDCard\StatusIDCard;
use App\Title_name;
use App\User;
use Session;
use App\IDCard\Receive_IdCard;
use App\IDCard\ReceiveSignedIdCard;
use App\IDCard\ReceiveTimelineIdCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ReceiveIdCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_idCard = Receive_IdCard::orderBy('updated_at', 'DESC')->get();
        // dd($data_idCard);
        return view('pages.ID_Card.index', compact('data_idCard'));
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
     * @param  \App\Receive_IdCard  $receive_IdCard
     * @return \Illuminate\Http\Response
     */
    public function show(Receive_IdCard $receive_IdCard, $id)
    {

        $titleNames = Title_name::all();
        $cate_idCard = CateIDCard::all();
        $cate_Status = CateStatusIDCard::all();
        $status_idCard = StatusIDCard::all();

        $data_idCard = Receive_IdCard::find($id);
        $user = User::all();

        // dd($data_idCard);
        return view('pages.ID_Card.show', compact('cate_idCard', 'cate_Status', 'data_idCard', 'status_idCard', 'user'))->withTitleNames($titleNames);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Receive_IdCard  $receive_IdCard
     * @return \Illuminate\Http\Response
     */
    public function edit(Receive_IdCard $receive_IdCard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Receive_IdCard  $receive_IdCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receive_IdCard $receive_IdCard, $id)
    {

        if($request->status_id == '5'){

            $this->validate($request,
                            ['signed' => 'required'],
                            ['signed.required'    => 'กรุณาลงลายเซ็นต์']);

            $data_receive = new ReceiveSignedIdCard();

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

            $data_receive->signed = $files;
            $data_receive->users_id = $request->user_receive_id;
            $data_receive->date = date("Y-m-d");
            $data_receive->save();

            $data_idCard = $receive_IdCard->find($id);
            $data_idCard->status_i_d_cards_id = $request->status_id;
            $data_idCard->receive_signed_id_cards_id = $data_receive->id;
            $data_idCard->note = $request->note;
            $data_idCard->save();

            $data_time_idCard = ReceiveTimelineIdCard::find($request->receive_timeline_id_cards_id);
            $data_time_idCard->date_status_4 = date("Y-m-d h:i:sa");
            $data_time_idCard->status_4_id = $request->status_id;
            $data_time_idCard->status_id_cards = '2';
            $data_time_idCard->save();

            // define(
            //     "MESSAGE",
            //     "ชื่อ " . $repair_admin->user->title_name->name . $repair_admin->user->first_name .' '. $repair_admin->user->last_name .
            //         "\n ได้ทำการแก้ไข หมายเลขเครื่อง : " . $repair_admin->repair->stock->number .
            //         "\n รายละเอียดการซ่อม/ปัญหา : " . $repair_admin->detail .
            //         "\n สถานะ : " . $repair_admin->repair->status_repair->name .
            //         "\n รายละเอียดตามลิ้งนี้ : " . url("/admin/repair-admin/{$repairr->id}")
            // );

            // define("token", "EDjuRwSVSw6uSPaIfOzDPvsGQdF03IfFzc3AKJP8IbC");
            // //define("token", "9WDHR3FtfptkS9R4SK5sRIRFQ6kqcJXZO6ArkObHcBj");
            // line_notify_t(token, MESSAGE);

            Session::flash('message', 'ทำรายการสำเร็จ !');
            return redirect()->route('ID_Card.index');


        }else{

            if ($request->status_id == '2') {
                $data_time_idCard = ReceiveTimelineIdCard::find($request->receive_timeline_id_cards_id);
                $data_time_idCard->status_id_cards = '2';
                $data_time_idCard->date_status_2 = date("Y-m-d h:i:sa");
                $data_time_idCard->status_2_id = $request->status_id;
                $data_time_idCard->status_3_id = '0';
                $data_time_idCard->status_4_id = '0';
                $data_time_idCard->save();

                $data_idCard = $receive_IdCard->find($id);
                $data_idCard->status_i_d_cards_id = $request->status_id;
                if($data_idCard->receive_signed_id_cards_id == '0'){
                }else{
                    $data_idCard->receive_signed->delete();
                    $data_idCard->receive_signed_id_cards_id = '0';
                }

                $data_idCard->note = $request->note;
                $data_idCard->save();
            }elseif($request->status_id == '4'){
                $data_time_idCard = ReceiveTimelineIdCard::find($request->receive_timeline_id_cards_id);
                $data_time_idCard->status_id_cards = '2';
                $data_time_idCard->date_status_3 = date("Y-m-d h:i:sa");
                $data_time_idCard->status_2_id = '2';
                $data_time_idCard->status_3_id = $request->status_id;
                $data_time_idCard->status_4_id = '0';
                $data_time_idCard->save();

                $data_idCard = $receive_IdCard->find($id);
                if($data_idCard->receive_signed_id_cards_id == '0'){
                }else{
                    $data_idCard->receive_signed->delete();
                    $data_idCard->receive_signed_id_cards_id = '0';
                }
                $data_idCard->status_i_d_cards_id = $request->status_id;
                $data_idCard->note = $request->note;
                $data_idCard->save();
            }else{
                $data_time_idCard = ReceiveTimelineIdCard::find($request->receive_timeline_id_cards_id);
                if ($request->status_id == '6') {
                    $data_time_idCard->status_id_cards = '2';
                }else{
                    $data_time_idCard->status_id_cards = '1';
                }
                $data_time_idCard->date_status_2 = date("Y-m-d h:i:sa");
                $data_time_idCard->status_2_id = $request->status_id;
                $data_time_idCard->status_3_id = '0';
                $data_time_idCard->status_4_id = '0';
                $data_time_idCard->save();

                $data_idCard = $receive_IdCard->find($id);
                $data_idCard->status_i_d_cards_id = $request->status_id;
                if($data_idCard->receive_signed_id_cards_id == '0'){
                }else{
                    $data_idCard->receive_signed->delete();
                    $data_idCard->receive_signed_id_cards_id = '0';
                }
                $data_idCard->receive_signed_id_cards_id = '0';
                $data_idCard->note = $request->note;

                $data_idCard->save();

            }

            Session::flash('message', 'ทำรายการสำเร็จ !');
            return redirect()->route('ID_Card.index');
        }



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Receive_IdCard  $receive_IdCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receive_IdCard $receive_IdCard, $id)
    {

        $user = Receive_IdCard::find($id);

        if($user->receive_signed_id_cards_id == '0'){
        }else{
            $user->receive_signed->delete();
        }
        $user->iDCard->delete();
        $user->rec_timeline_IdCard->delete();

        $user->delete();

        Session::flash('message', 'ลบข้อมูลบัตรประจำตัวเรียบร้อย!');
        return redirect()->route('ID_Card.index');
    }
}

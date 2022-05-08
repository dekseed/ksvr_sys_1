<?php

namespace App\Http\Controllers;

use App\IDCard\IDCard;
use App\IDCard\Receive_IdCard;
use App\IDCard\ReceiveTimelineIdCard;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class IDCardController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_user(Request $request)
    {


        if(isset($request->update_profile)){

            $crate_IDCard = new IDCard();
            $crate_IDCard->users_id = Auth::user()->id;
            $crate_IDCard->cate_i_d_cards_id = $request->cate_idCard;
            $crate_IDCard->cate_status_i_d_cards_id = $request->cate_Status;
            $crate_IDCard->title_name_id = $request->title_name_id;
            $crate_IDCard->first_name_thai = $request->first_name;
            $crate_IDCard->last_name_thai = $request->last_name;
            $crate_IDCard->first_name_eng = $request->first_name_eng;
            $crate_IDCard->last_name_eng = $request->last_name_eng;
            $crate_IDCard->position = $request->position;


            $data_time_idCard = new ReceiveTimelineIdCard();

            if(isset($request->new_pic)){
                $data_time_idCard->status_1_id = '3';

            }else{
                $data_time_idCard->status_1_id = '1';

            }
            $data_time_idCard->status_id_cards = '1';
            $data_time_idCard->date_status_1 = date("Y-m-d h:i:sa");
            $data_time_idCard->date_status_2 = '0';
            $data_time_idCard->date_status_3 = '0';
            $data_time_idCard->date_status_4 = '0';
            $data_time_idCard->save();


            $create_receive = new Receive_IdCard();
            $create_receive->user_id = Auth::user()->id;
            $create_receive->receive_signed_id_cards_id = '0';
            if(isset($request->new_pic)){
                $create_receive->status_i_d_cards_id = '3';
                $new_pic = '1';
            }else{
                $create_receive->status_i_d_cards_id = '1';
                $new_pic = '0';
            }
            $crate_IDCard->new_pic = $new_pic;
            $crate_IDCard->save();

            $create_receive->i_d_cards_id = $crate_IDCard->id;
            $create_receive->receive_timeline_id_cards_id = $data_time_idCard->id;

            $create_receive->save();

            $user = User::findOrFail(Auth::user()->id);
            $user->title_name_id = $request->title_name_id;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->position = $request->position;
            $user->first_name_eng = $request->first_name_eng;
            $user->last_name_eng = $request->last_name_eng;

            $user->save();



        }else{

            $crate_IDCard = new IDCard();
            $crate_IDCard->users_id = Auth::user()->id;
            $crate_IDCard->cate_i_d_cards_id = $request->cate_idCard;
            $crate_IDCard->cate_status_i_d_cards_id = $request->cate_Status;
            $crate_IDCard->title_name_id = $request->title_name_id;
            $crate_IDCard->first_name_thai = $request->first_name;
            $crate_IDCard->last_name_thai = $request->last_name;
            $crate_IDCard->first_name_eng = $request->first_name_eng;
            $crate_IDCard->last_name_eng = $request->last_name_eng;
            $crate_IDCard->position = $request->position;


            $data_time_idCard = new ReceiveTimelineIdCard();

            $data_time_idCard->date_status_1 = date("Y-m-d h:i:sa");

            if(isset($request->new_pic)){
                $data_time_idCard->status_1_id = '3';

            }else{
                $data_time_idCard->status_1_id = '1';

            }
            $data_time_idCard->status_id_cards = '1';
            $data_time_idCard->date_status_2 = '0';
            $data_time_idCard->date_status_3 = '0';
            $data_time_idCard->date_status_4 = '0';
            $data_time_idCard->save();

            $create_receive = new Receive_IdCard();
            $create_receive->user_id = Auth::user()->id;
            $create_receive->receive_signed_id_cards_id = '0';
            if(isset($request->new_pic)){
                $create_receive->status_i_d_cards_id = '3';
                $new_pic = '1';
            }else{
                $create_receive->status_i_d_cards_id = '1';
                $new_pic = '0';
            }
            $crate_IDCard->new_pic = $new_pic;
            $crate_IDCard->save();


            $create_receive->i_d_cards_id = $crate_IDCard->id;
            $create_receive->receive_timeline_id_cards_id = $data_time_idCard->id;
            $create_receive->save();



        }


        Session::flash('message', 'เพิ่มข้อมูลบัตรประจำตัวเรียบร้อย!');
        return redirect()->route('profile.show1');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\IDCard\IDCard  $iDCard
     * @return \Illuminate\Http\Response
     */
    public function show(IDCard $iDCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\IDCard\IDCard  $iDCard
     * @return \Illuminate\Http\Response
     */
    public function edit(IDCard $iDCard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\IDCard\IDCard  $iDCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IDCard $iDCard, $id)
    {

        $crate_IDCard = $iDCard->find($id);
        $crate_IDCard->cate_i_d_cards_id = $request->cate_idCard;
        $crate_IDCard->cate_status_i_d_cards_id = $request->cate_Status;
        $crate_IDCard->title_name_id = $request->title_name_id;
        $crate_IDCard->first_name_thai = $request->first_name;
        $crate_IDCard->last_name_thai = $request->last_name;
        $crate_IDCard->first_name_eng = $request->first_name_eng;
        $crate_IDCard->last_name_eng = $request->last_name_eng;
        $crate_IDCard->position = $request->position;

        $re_IDCard = Receive_IdCard::find($request->re_id);

        if(isset($request->new_pic)){
            $re_IDCard->status_i_d_cards_id = '3';
            $new_pic = '1';
        }else{
            $re_IDCard->status_i_d_cards_id = '1';
            $new_pic = '0';
        }


        $crate_IDCard->new_pic = $new_pic;
        $crate_IDCard->save();

        $re_IDCard->save();

        $data_time_idCard = ReceiveTimelineIdCard::find($request->receive_timeline_id_cards_id);

        if(isset($request->new_pic)){
            $data_time_idCard->status_1_id = '3';

        }else{
            $data_time_idCard->status_1_id = '1';

        }
        $data_time_idCard->save();

        Session::flash('message', 'เปลี่ยนแปลงข้อมูลบัตรประจำตัวเรียบร้อย!');
        return redirect()->route('profile.show1');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\IDCard\IDCard  $iDCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(IDCard $iDCard, $id)
    {

        $user = Receive_IdCard::find($id);

       // dd($user);
        $user->iDCard->delete();
        $user->rec_timeline_IdCard->delete();
        $user->delete();

        Session::flash('message', 'ลบข้อมูลบัตรประจำตัวเรียบร้อย!');
        return redirect()->route('profile.show1');
    }
}

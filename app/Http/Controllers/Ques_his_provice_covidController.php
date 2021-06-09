<?php

namespace App\Http\Controllers;

use App\Activity_14_day__covid;
use App\Address_user_covid;
use App\Agency_army;
use App\Come_back_add_user_covid;
use App\District;
use App\His_patient_covid;
use App\His_place_covid;
use App\His_vaccine;
use App\His_vaccine_covid_19;
use App\Occup_soldier_covid;
use App\Profile_covid;
use App\Province_surveillance_area_covid;
use App\Training_unit_army;
use App\U_sick_covid;
use Session;
use DB;
use Illuminate\Http\Request;

class Ques_his_provice_covidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $agency = Training_unit_army::all();

        return view('pages.covid.questionnaire_history_covid.patient.home')

            ->withAgency($agency);
    }

    public function history_detail_covid()
    {

        $agency = Training_unit_army::all();

        return view('pages.covid.questionnaire_history_covid.patient.detail')
            ->withAgency($agency);
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
    public function confirm(Request $request)
    {
     //dd($request);
       $dist = District::all();

       $agency = Training_unit_army::all();

        return view('pages.covid.questionnaire_history_covid.patient.confirm')
        ->withRequest($request)
        ->withDist($dist)
        ->withAgency($agency);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $report1 = District::where('district_code', '=', $request->come_canton)->first();

        $Add_covid = new Address_user_covid();
        $Add_covid->home_id = $request->home_id;
        $Add_covid->alley = $request->alley;
        $Add_covid->street = $request->street;
        $Add_covid->canton = $request->canton;
        $Add_covid->district = $request->district;
        $Add_covid->province = $request->province;

        $Add_covid->save();

        $Come_covid = new Come_back_add_user_covid();

        $Come_covid->district_id = $report1->id;
        $Come_covid->come_travel = $request->come_travel;
        $Come_covid->travel = $request->travel;

        $Come_covid->save();


        $pro_covid = new Profile_covid();
        $pro_covid->add_covid_id = $Add_covid->id;
        $pro_covid->com_back_add_covid_id = $Come_covid->id;

        if($request->training_unit_armies == '0'){
            $pro_covid->training_unit_army_detail = $request->training_unit_armies_detail;
            $pro_covid->training_unit_army_id = $request->training_unit_armies;
        }else{
            $pro_covid->training_unit_army_id = $request->training_unit_armies;
        }

        //training_unit_armies_detail

        $pro_covid->title_name = $request->title_name_id;
        $pro_covid->first_name = $request->firstName;
        $pro_covid->last_name = $request->lastName;
        $pro_covid->tel = $request->tel;

        $pro_covid->save();

        $Activity_covid = new Activity_14_day__covid();

        $Activity_covid->profile_covid_id = $pro_covid->id;
        $Activity_covid->info1 = $request->activ_1;
        $Activity_covid->info2 = $request->activ_2;
        $Activity_covid->info3 = $request->activ_3;
        $Activity_covid->info4 = $request->activ_4;
        $Activity_covid->info5 = $request->activ_5;
        $Activity_covid->info6 = $request->activ_6;
        $Activity_covid->info7 = $request->activ_7;
        $Activity_covid->info8 = $request->activ_8;
        $Activity_covid->info9 = $request->activ_9;
        $Activity_covid->info10 = $request->activ_10;
        $Activity_covid->info11 = $request->activ_11;
        $Activity_covid->info12 = $request->activ_12;
        $Activity_covid->info13 = $request->activ_13;
        $Activity_covid->info14 = $request->activ_14;

        $Activity_covid->save();

        $sick_covid = new U_sick_covid();
        $sick_covid->profile_covid_id = $pro_covid->id;
        $sick_covid->info = $request->sick_covid;

        $sick_covid->save();



        $HP_covid = new His_patient_covid();
        $HP_covid->profile_covid_id = $pro_covid->id;
        $HP_covid->info = $request->his_patient_covid;

        $HP_covid->fa = $request->fa;
        $HP_covid->ma = $request->ma;
        $HP_covid->bro = $request->bro;
        $HP_covid->bro2 = $request->bro2;
        $HP_covid->relative = $request->relative;
        $HP_covid->friend = $request->friend;

        $HP_covid->save();



        $HPl_covid = new His_place_covid();
        $HPl_covid->profile_covid_id = $pro_covid->id;
        $HPl_covid->info = $request->his_place_covid;

        $HPl_covid->de_store = $request->de_store;
        $HPl_covid->market = $request->market;
        $HPl_covid->measure = $request->measure;
        $HPl_covid->Stadium = $request->Stadium;
        $HPl_covid->Ent_place = $request->Ent_place;
        $HPl_covid->detail_where = $request->detail_where;

        $HPl_covid->save();


        $HV_covid = new His_vaccine();
        $HV_covid->profile_covid_id = $pro_covid->id;
        $HV_covid->info = $request->his_vaccine_flu;

        if($request->his_vaccine_flu == '1'){

            $HV_covid->time = $request->detail_time;

        }

        $HV_covid->save();

        $HV_covid_19 = new His_vaccine_covid_19();
        $HV_covid_19->profile_covid_id = $pro_covid->id;
        $HV_covid_19->info = $request->vaccine_covid__19;

        if($request->vaccine_covid__19 == '1'){

            $HV_covid_19->time = $request->vaccine_covid__19detail_time;

        }

        $HV_covid_19->save();


        if($request->occ){

        $OS_covid = new Occup_soldier_covid();

        $OS_covid->profile_covid_id = $pro_covid->id;
        $OS_covid->info = $request->occ;

        $OS_covid->save();

        }

        $pro_covid2 = Profile_covid::find($pro_covid->id);

        define(
            "MESSAGE",
            "นี่เธอ !!! มีกำลังพลเดินทางมาจากต่างจังหวัดแหละ ... แวะไปดูในระบบรายงานตัวของ รพ. หน่อยน๊าาา\nชื่อ " . $pro_covid2->title_name . $pro_covid2->first_name .' '. $pro_covid2->last_name .
                "\nมาจากจังหวัด : " . $pro_covid2->come_back_add_user_covid->dist->province .
                "\nรายละเอียดตามลิ้งนี้ : " . url("/Questionnaire-History-Covid-19/{$pro_covid2->id}")
        );
        define("token", "nSEdROn7chsuOUY1CwWOKAoHAtwagqieaCiCzJpFTGf");
        line_notify_t(token, MESSAGE);

        //dd($request->come_province);

        return redirect()->route('Questionnaire-History-Covid-19.end', $request->come_province);
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function end($id)
    {

        $report1 = Province_surveillance_area_covid::where('province_code', '=', $id)->get();
       // dd($report1);
        return view('pages.covid.questionnaire_history_covid.patient.end')->withReport1($report1);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agency = Profile_covid::find($id);

        $dist = District::all();

        $ac_day = Activity_14_day__covid::where('profile_covid_id', $id)->get();

      // dd($dist);

        return view('pages.covid.questionnaire_history_covid.admin.home', compact('ac_day'))
            ->withAgency($agency)
            ->withDist($dist);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $user = Profile_covid::find($id);

        $Add_covid = Address_user_covid::find($user->add_covid_id)->delete();

        $Come_covid = Come_back_add_user_covid::find($user->com_back_add_covid_id)->delete();


        $Activity_covid = Activity_14_day__covid::where('profile_covid_id', $user->id)->delete();

        $sick = U_sick_covid::where('profile_covid_id', $user->id)->delete();


        $HP_covid = His_patient_covid::where('profile_covid_id', $user->id)->delete();


        $HPl_covid = His_place_covid::where('profile_covid_id', $user->id)->delete();


        $HV_covid = His_vaccine::where('profile_covid_id', $user->id)->delete();

        $HV_covid = His_vaccine_covid_19::where('profile_covid_id', $user->id)->delete();

        $OS_covid = Occup_soldier_covid::where('profile_covid_id', $user->id)->delete();


        $user->delete();

    Session::flash('message', 'ลบข้อมูลเรียบร้อย!');

    return redirect()->route('report_ques_his_covid.index');

    }
}

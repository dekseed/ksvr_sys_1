<?php

namespace App\Http\Controllers;

use App\Clinic_covid19_inquiry;
use App\Covid19_inquiry_form;
use App\Details_covid19_inquiry;
use App\Details_table_covid19_inquiry;
use App\Title_name;
use App\District;
use App\Home_type;
use App\Name_vaccine_covid19_inquiry;
use App\Riskhistory_covid19_inquiry;
use App\Search_covid19_inquiry;
use App\Sex;
use App\User_covid19_inquiry;
use App\Vaccine_covid19_inquiry;
use Illuminate\Http\Request;

class Covid19InquiryFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $covid_19 = Clinic_covid19_inquiry::all();
        return view('pages.covid.form.index', compact($covid_19,'covid_19'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $name_title = Title_name::all();
        $home_type = Home_type::all();
        $name_vaccine = Name_vaccine_covid19_inquiry::all();

        //dd($name_vaccine);
        return view('pages.covid.form.create', compact('name_title', 'home_type', 'name_vaccine'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        dd($request);

        /// บันทึกข้อมูลทั่วไป
        $user_co_inq = new User_covid19_inquiry;

        $user_co_inq->number_id = $request->number;
        $user_co_inq->title_name_id = $request->title_name_id;
        $user_co_inq->first_name = $request->first_name;
        $user_co_inq->last_name = $request->last_name;
        $user_co_inq->sex = $request->sex_id;
        $user_co_inq->age = $request->user_age;
        $user_co_inq->nation = $request->user_nationnaloty;
        $user_co_inq->occ = $request->user_occ;
        $user_co_inq->location = $request->user_location;
        $user_co_inq->tel = $request->user_tel;
        $user_co_inq->telapp = $request->user_telapp;
        $user_co_inq->home_type_id = $request->home_type_id;
        $user_co_inq->home_id = $request->home_id;
        $user_co_inq->alley = $request->alley;
        $user_co_inq->street = $request->street;
        $user_co_inq->district_id = '1';
        $user_co_inq->disease = $request->disease;
        $user_co_inq->smoking = $request->smoking;

        $user_co_inq->save();

        // id user
        $user_id = $user_co_inq->id;
        /////////////////////////////////////////////////////////////////////

        if($request->sex_id == '1'){

            $sexes = new Sex;

            $sexes->user_id = $user_id;
            $sexes->womb = $request->womb;
            $sexes->womb_age = $request->womb_age;

            $sexes->save();

        }

        //////////////////////////////////////////////////////////////////////

        // บันทึกข้อมูลวัคซีน
        //////////////////////////////////////////////////////////////////////
        if($request->name_vaccine_id_1 == '1'){

            $vaccine = new Vaccine_covid19_inquiry;

            $vaccine->user_id = $user_id;
            $vaccine->number = '1';
            $vaccine->name_vaccine_id = $request->name_vaccine_id_1;
            $vaccine->date = DateData($request->date_1);
            $vaccine->location = $request->location_1;

            $vaccine->save();

        }else if($request->name_vaccine_id_1 == '2'){

            $vaccine = new Vaccine_covid19_inquiry;

            $vaccine->user_id = $user_id;
            $vaccine->number = '2';
            $vaccine->name_vaccine_id = $request->name_vaccine_id_2;
            $vaccine->date = DateData($request->date_vaccine_2);
            $vaccine->location = $request->location_vaccine_2;

            $vaccine->save();

        }else if($request->name_vaccine_id_1 == '3'){

            $vaccine = new Vaccine_covid19_inquiry;

            $vaccine->user_id = $user_id;
            $vaccine->number = '3';
            $vaccine->name_vaccine_id = $request->name_vaccine_id_3;
            $vaccine->date = DateData($request->date_vaccine_3);
            $vaccine->location = $request->location_vaccine_3;

            $vaccine->save();

        }else if($request->name_vaccine_id_1 == '4'){

            $vaccine = new Vaccine_covid19_inquiry;

            $vaccine->user_id = $user_id;
            $vaccine->number = '4';
            $vaccine->name_vaccine_id = $request->name_vaccine_id_4;
            $vaccine->date = DateData($request->date_vaccine_4);
            $vaccine->location = $request->location_vaccine_4;

            $vaccine->save();

        }

       /////////////////////////////////////////////////////////////////////////

       // บันทึกข้อมูลประวัติเสี่ยง
       /////////////////////////////////////////////////////////////////////////
        $ris_co_inq = new Riskhistory_covid19_inquiry;

        $ris_co_inq->user_id = $user_id;
        $ris_co_inq->num1 = $request->num1;
        $ris_co_inq->city = $request->num1_city;
        $ris_co_inq->country = $request->num1_country;
        $ris_co_inq->date = $request->num1_date;
        $ris_co_inq->airline = $request->num1_airline;
        $ris_co_inq->flight = $request->num1_flight;
        $ris_co_inq->seat = $request->num1_seat;
        $ris_co_inq->num2 = $request->num2;
        $ris_co_inq->num3 = $request->num3;
        $ris_co_inq->num4 = $request->num4;
        $ris_co_inq->num4details = $request->num4_details;
        $ris_co_inq->num5 = $request->num5;
        $ris_co_inq->num6 = $request->num6;
        $ris_co_inq->num6details = $request->num6_details;
        $ris_co_inq->num7 = $request->num7;
        $ris_co_inq->num8 = $request->num8;
        $ris_co_inq->num9 = $request->num9;
        $ris_co_inq->num10 = $request->num10;

        $ris_co_inq->save();

        /////////////////////////////////////////////////////////////////////////

        // บันทึกข้อมูลรายละเอียดเหตุการณ์ ประวัติเสี่ยงต่อการติดเชื้อ 14 วัน
        /////////////////////////////////////////////////////////////////////////

        $de_co_inq = new Details_covid19_inquiry;

        $de_co_inq->details = $request->details_4;

        $de_co_inq->save();

        $de_ta_co_inq = new Details_table_covid19_inquiry;

        $de_ta_co_inq->user_id = $user_id;

        $de_ta_co_inq->date_1 = DateData($request->date_4_1);
        $de_ta_co_inq->location_1 = $request->location_4_1;
        $de_ta_co_inq->person_1 = $request->person_4_1;

        $de_ta_co_inq->date_2 = DateData($request->date_4_2);
        $de_ta_co_inq->location_2 = $request->location_4_2;
        $de_ta_co_inq->person_2 = $request->person_4_2;

        $de_ta_co_inq->date_3 = DateData($request->date_4_3);
        $de_ta_co_inq->location_3 = $request->location_4_3;
        $de_ta_co_inq->person_3 = $request->person_4_3;

        $de_ta_co_inq->date_4 = DateData($request->date_4_4);
        $de_ta_co_inq->location_4 = $request->location_4_4;
        $de_ta_co_inq->person_4 = $request->person_4_4;

        $de_ta_co_inq->date_5 = DateData($request->date_4_5);
        $de_ta_co_inq->location_5 = $request->location_4_5;
        $de_ta_co_inq->person_5 = $request->person_4_5;

        $de_ta_co_inq->date_6 = DateData($request->date_4_6);
        $de_ta_co_inq->location_6 = $request->location_4_6;
        $de_ta_co_inq->person_6 = $request->person_4_6;

        $de_ta_co_inq->date_7 = DateData($request->date_4_7);
        $de_ta_co_inq->location_7 = $request->location_4_7;
        $de_ta_co_inq->person_7 = $request->person_4_7;

        $de_ta_co_inq->date_8 = DateData($request->date_4_8);
        $de_ta_co_inq->location_8 = $request->location_4_8;
        $de_ta_co_inq->person_8 = $request->person_4_8;

        $de_ta_co_inq->date_9 = DateData($request->date_4_9);
        $de_ta_co_inq->location_9 = $request->location_4_9;
        $de_ta_co_inq->person_9 = $request->person_4_9;

        $de_ta_co_inq->date_10 = DateData($request->date_4_10);
        $de_ta_co_inq->location_10 = $request->location_4_10;
        $de_ta_co_inq->person_10 = $request->person_4_10;

        $de_ta_co_inq->date_11 = DateData($request->date_4_11);
        $de_ta_co_inq->location_11 = $request->location_4_11;
        $de_ta_co_inq->person_11 = $request->person_4_11;

        $de_ta_co_inq->date_12 = DateData($request->date_4_12);
        $de_ta_co_inq->location_12 = $request->location_4_12;
        $de_ta_co_inq->person_12 = $request->person_4_12;

        $de_ta_co_inq->date_13 = DateData($request->date_4_13);
        $de_ta_co_inq->location_13 = $request->location_4_13;
        $de_ta_co_inq->person_13 = $request->person_4_13;

        $de_ta_co_inq->date_14 = DateData($request->date_4_14);
        $de_ta_co_inq->location_14 = $request->location_4_14;
        $de_ta_co_inq->person_14 = $request->person_4_14;

        $de_ta_co_inq->save();

        /////////////////////////////////////////////////////////////////////////

        // บันทึกข้อมูลการค้นหาผู้สัมพัส
        /////////////////////////////////////////////////////////////////////////

        $data=$request->addmore;
        $courseData=[];

        foreach ($data as $values) {

                $courseData[] =[
                    'user_id'=>$user_id,
                    'name'=>$values['name'],
                    'sex'=>$values['sex_id'],
                    'age'=>$values['age'],
                    'add'=>$values['add'],
                    'tel'=>$values['tel'],

                ];

        }

        Search_covid19_inquiry::insert($courseData);

        /////////////////////////////////////////////////////////////////////////

        //
        /////////////////////////////////////////////////////////////////////////

        $cli_co_in = new Covid19_inquiry_form();

        $cli_co_in->user_id = $user_id;
        $cli_co_in->riskhistory_id = $ris_co_inq->id;
        $cli_co_in->details_id = $de_ta_co_inq->id;

        $cli_co_in->save();

         //dd($request);
        return route('inquiry-form-Covid.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Covid19_inquiry_form  $covid19_inquiry_form
     * @return \Illuminate\Http\Response
     */
    public function show(Covid19_inquiry_form $covid19_inquiry_form, $id)
    {
        $data = Covid19_inquiry_form::find($id);
        $name_title = Title_name::all();
        $home_type = Home_type::all();
        $name_vaccine = Name_vaccine_covid19_inquiry::all();
        // dd($data);
        // $data = Covid19_inquiry_form::find($id);
        return view('pages.covid.inquiry_form.show',compact('name_title','home_type','name_vaccine'))->withData($data);
    }

    public function print(Covid19_inquiry_form $covid19_inquiry_form, $id)
    {
        $data = Covid19_inquiry_form::find($id);
        $name_title = Title_name::all();
        $home_type = Home_type::all();
        $name_vaccine = Name_vaccine_covid19_inquiry::all();
        // dd($data);
        //$data = Covid19_inquiry_form::find($id);
        return view('pages.covid.inquiry_form.edit', compact('name_title','home_type','name_vaccine'))->withData($data);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Covid19_inquiry_form  $covid19_inquiry_form
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $covid_19 = Clinic_covid19_inquiry::all();
        return view('pages.covid.form.edit', compact($covid_19,'covid_19'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Covid19_inquiry_form  $covid19_inquiry_form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Covid19_inquiry_form $covid19_inquiry_form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Covid19_inquiry_form  $covid19_inquiry_form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Covid19_inquiry_form $covid19_inquiry_form, $id)
    {

        // $data = Covid19_inquiry_form::find($id);

        $data = Covid19_inquiry_form::find($id)->delete();

        return redirect()->route('inquiry-form-Covid.index')->with(['message' => 'ลบข้อมูลเรียบร้อย!']);
    }
}

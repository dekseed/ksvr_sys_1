<?php

namespace App\Http\Controllers;

use App\Antibody;
use App\Cbc;
use App\Clinic_covid19_inquiry;
use App\Covid19_inquiry_form;
use App\Details_covid19_inquiry;
use App\Details_table_covid19_inquiry;
use App\Title_name;
use App\District;
use App\Home_type;
use App\Medicine;
use App\Name_vaccine_covid19_inquiry;
use App\Patient;
use App\Patient_type;
use App\Riskhistory_covid19_inquiry;
use App\Search_covid19_inquiry;
use App\Sexes;
use App\User_covid19_inquiry;
use App\Vaccine_covid19_inquiry;
use App\Pcr;
use App\Status;
use App\Test;
use App\X_rey;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Tests;

class Covid19InquiryFormController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
    {

        $covid_19 = Covid19_inquiry_form::all();
        //dd($covid_19);
         return view('pages.covid.Inquiry_form.index', compact('covid_19'));
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

        return view('pages.covid.Inquiry_form.create', compact('name_title','home_type','name_vaccine'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


            // บันทึกข้อมูลรายละเอียดเหตุการณ์ ประวัติเสี่ยงต่อการติดเชื้อ 14 วัน //

            $de_ta_co_inq = new Details_table_covid19_inquiry;

            $de_ta_co_inq->user_id = '';

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

            if($request->date_4_8){
                $de_ta_co_inq->date_8 = DateData($request->date_4_8);
                $de_ta_co_inq->location_8 = $request->location_4_8;
                $de_ta_co_inq->person_8 = $request->person_4_8;
            }

            if($request->date_4_9){
            $de_ta_co_inq->date_9 = DateData($request->date_4_9);
            $de_ta_co_inq->location_9 = $request->location_4_9;
            $de_ta_co_inq->person_9 = $request->person_4_9;
            }

            if($request->date_4_10){
            $de_ta_co_inq->date_10 = DateData($request->date_4_10);
            $de_ta_co_inq->location_10 = $request->location_4_10;
            $de_ta_co_inq->person_10 = $request->person_4_10;
            }

            if($request->date_4_11){
            $de_ta_co_inq->date_11 = DateData($request->date_4_11);
            $de_ta_co_inq->location_11 = $request->location_4_11;
            $de_ta_co_inq->person_11 = $request->person_4_11;
            }

            if($request->date_4_12){
            $de_ta_co_inq->date_12 = DateData($request->date_4_12);
            $de_ta_co_inq->location_12 = $request->location_4_12;
            $de_ta_co_inq->person_12 = $request->person_4_12;
            }

            if($request->date_4_13){
            $de_ta_co_inq->date_13 = DateData($request->date_4_13);
            $de_ta_co_inq->location_13 = $request->location_4_13;
            $de_ta_co_inq->person_13 = $request->person_4_13;
            }

            if ($request->date_4_14) {
            $de_ta_co_inq->date_14 = DateData($request->date_4_14);
            $de_ta_co_inq->location_14 = $request->location_4_14;
            $de_ta_co_inq->person_14 = $request->person_4_14;
            }


            $de_ta_co_inq->save();

        // -------------------------------------------------- //
        if($request->sex_id == '1'){

            if($request->womb_c == '1'){

            $sexes = new Sexes;

            $sexes->womb = $request->womb;
            $sexes->womb_age = $request->womb_age;

            }

            // else{

            // $sexes = new Sexes;

            // $sexes->womb = '0';
            // $sexes->womb_age = '0';

            // }

            $sexes->save();
        }
        // บันทึกข้อมูลทั่วไป //
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

            $district = District::where('district_code', $request->canton)->first();
            $user_co_inq->district_id = $district->id;

            $user_co_inq->disease = $request->disease;
            $user_co_inq->smoking = $request->smoking;
            $user_co_inq->details_table_covid19_inquiry_id =  $de_ta_co_inq->id;

            if($request->womb_c == '1'){
                $user_co_inq->sex_id = $sexes->id;
            }else{
                $user_co_inq->sex_id = '0';
            }


            $user_co_inq->save();

            // id user
            $user_id = $user_co_inq->id;
            /////////////////////////////////////////////////////////////////////

            $de_co_inq = new Details_covid19_inquiry;

            $de_co_inq->user_id = $user_id;
            $de_co_inq->details = $request->details_extend;

            $de_co_inq->save();




        // --------------------------------------------------- //

        // บันทึกข้อมูลวัคซีน //

            $vaccine = new Vaccine_covid19_inquiry;

            $vaccine->user_id = $user_id;

            if ($request->num_vac == '1') {

                $vaccine->number = '1';
                $vaccine->name_vaccine_id_1 = $request->name_vaccine_id_1;
                $vaccine->date_1 = DateData($request->date_1);
                $vaccine->location_1 = $request->location_1;

            }else if($request->num_vac == '2'){

                $vaccine->number = '2';
                $vaccine->name_vaccine_id_1 = $request->name_vaccine_id_1;
                $vaccine->date_1 = DateData($request->date_1);
                $vaccine->location_1 = $request->location_1;

                $vaccine->name_vaccine_id_2 = $request->name_vaccine_id_2;
                $vaccine->date_2 = DateData($request->date_vaccine_2);
                $vaccine->location_2 = $request->location_vaccine_2;

            }else if($request->num_vac == '3'){

                $vaccine->number = '3';
                $vaccine->name_vaccine_id_1 = $request->name_vaccine_id_1;
                $vaccine->date_1 = DateData($request->date_1);
                $vaccine->location_1 = $request->location_1;

                $vaccine->name_vaccine_id_2 = $request->name_vaccine_id_2;
                $vaccine->date_2 = DateData($request->date_vaccine_2);
                $vaccine->location_2 = $request->location_vaccine_2;

                $vaccine->name_vaccine_id_3 = $request->name_vaccine_id_3;
                $vaccine->date_3 = DateData($request->date_vaccine_3);
                $vaccine->location_3 = $request->location_vaccine_3;

            }else if($request->num_vac == '4'){

                $vaccine->number = '4';
                $vaccine->name_vaccine_id_1 = $request->name_vaccine_id_1;
                $vaccine->date_1 = DateData($request->date_1);
                $vaccine->location_1 = $request->location_4;

                $vaccine->name_vaccine_id_2 = $request->name_vaccine_id_2;
                $vaccine->date_2 = DateData($request->date_vaccine_2);
                $vaccine->location_2 = $request->location_vaccine_2;

                $vaccine->name_vaccine_id_3 = $request->name_vaccine_id_3;
                $vaccine->date_3 = DateData($request->date_vaccine_3);
                $vaccine->location_3 = $request->location_vaccine_3;

                $vaccine->name_vaccine_id_4 = $request->name_vaccine_id_4;
                $vaccine->date_4 = DateData($request->date_vaccine_4);
                $vaccine->location_4 = $request->location_vaccine_4;

            }

            $vaccine->save();
        // --------------------------------------------------- //

        // บันทึกข้อมูลประวัติเสี่ยง //
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

        // -------------------------------------------------- //



        // บันทึกข้อมูลการค้นหาผู้สัมพัส

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
                        // 'tel'=>$values['tel'],
                        // 'tel'=>$values['tel'],
                        // 'tel'=>$values['tel'],
                        // 'tel'=>$values['tel'],
                        // 'tel'=>$values['tel'],
                    ];

            }

            Search_covid19_inquiry::insert($courseData);

        /////////////////////////////////////////////////////////////////////////

        $cli_co_in = new Covid19_inquiry_form();

        $cli_co_in->user_id = $user_id;
        $cli_co_in->riskhistory_id = $ris_co_inq->id;
        $cli_co_in->details_id = $de_ta_co_inq->id;

        $cli_co_in->save();


        return redirect()->route('Covid19InquiryForm.end');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Covid19_inquiry_form  $covid19_inquiry_form
     * @return \Illuminate\Http\Response
     */
    public function end()
    {

        return view('pages.covid.Inquiry_form.end');
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
        $user = $data->user_id;

        $data_vac = Vaccine_covid19_inquiry::where('user_id', '=', $user)->first();
// dd($data_vac);
        $name_title = Title_name::all();
        $home_type = Home_type::all();
        $name_vaccine = Name_vaccine_covid19_inquiry::all();

        return view('pages.covid.Inquiry_form.show',compact('name_title','home_type','name_vaccine', 'data_vac'))->withData($data);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Covid19_inquiry_form  $covid19_inquiry_form
     * @return \Illuminate\Http\Response
     */
    public function edit(Covid19_inquiry_form $covid19_inquiry_form, $id)
    {
        $data = Covid19_inquiry_form::find($id);
        $data_vac = Vaccine_covid19_inquiry::where('user_id', '=', $data->user_id)->first();
        $name_title = Title_name::all();
        $home_type = Home_type::all();
        $name_vaccine = Name_vaccine_covid19_inquiry::all();
        // dd($data);
        //$data = Covid19_inquiry_form::find($id);

        return view('pages.covid.Inquiry_form.edit', compact('data','name_title','home_type','name_vaccine', 'data_vac'))->withData($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Covid19_inquiry_form  $covid19_inquiry_form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // $data = Covid19_inquiry_form::find($id);

        // $name_title = Title_name::all();
        // $home_type = Home_type::all();
        // $name_vaccine = Name_vaccine_covid19_inquiry::all();

        // // ข้อมูลทั่วไป //

        //     $data->user_c_inquiries->number_id = $request->number_id;
        //     $data->user_c_inquiries->title_name_id = $request->title_name_id;
        //     $data->user_c_inquiries->first_name = $request->first_name;
        //     $data->user_c_inquiries->last_name = $request->last_name;
        //     $data->user_c_inquiries->sex = $request->sex;
        //     $data->user_c_inquiries->age = $request->age;
        //     $data->user_c_inquiries->nation = $request->nation;
        //     $data->user_c_inquiries->occ = $request->occ;
        //     $data->user_c_inquiries->location = $request->location;
        //     $data->user_c_inquiries->tel = $request->tel;
        //     $data->user_c_inquiries->telapp = $request->telapp;
        //     $data->user_c_inquiries->home_type_id = $request->home_type_id;
        //     $data->user_c_inquiries->home_id = $request->home_id;
        //     $data->user_c_inquiries->alley = $request->alley;
        //     $data->user_c_inquiries->street = $request->street;
        //     $data->user_c_inquiries->district_id = $request->district_id;
        //     $data->user_c_inquiries->disease = $request->disease;
        //     $data->user_c_inquiries->smoking = $request->smoking;

        //     $data->user_c_inquiries->save();

        //     if(($data->user_c_inquiries->sex) == '0'){

        //     }

        //     if(($data->user_c_inquiries->sex) == '1'){

        //         if(empty($data->sexes_inquiries->user_id)) {

        //             $cre_sex_id = new Sexes();
        //             $cre_sex_id->user_id = $id;
        //             $cre_sex_id->womb = '-';

        //             $cre_sex_id->save();
        //         }

        //         elseif(($data->sexes_inquiries->womb) == 'on') {

        //             $data->sexes_inquiries->womb = '-';
        //             $data->sexes_inquiries->womb_age = $request->womb_age;

        //             $data->sexes_inquiries->save();

        //         }

        //         elseif(!is_null($data->sexes_inquiries->womb)) {

        //             $data->sexes_inquiries->womb = $request->womb;
        //             $data->sexes_inquiries->womb_age = $request->womb_age;

        //             $data->sexes_inquiries->save();

        //         }

        //     }

        // // ------------------------------------------------------------------------------------------------------------------------ //

        // // วัคซีน //

        //     $data->vaccine_cov_inquiries->vac_id = $request->vac_id;
        //     $data->vaccine_cov_inquiries->num_vac = $request->num_vac;

        //     $data->vaccine_cov_inquiries->number_1 = '1';
        //     $data->vaccine_cov_inquiries->date_1 = $request->date_vac_1;
        //     $data->vaccine_cov_inquiries->name_vaccine_id_1 = $request->name_vaccine_id_1;
        //     $data->vaccine_cov_inquiries->location_1 = $request->location_vac_1;

        //     $data->vaccine_cov_inquiries->number_2 = '2';
        //     $data->vaccine_cov_inquiries->date_2 = $request->date_vac_2;
        //     $data->vaccine_cov_inquiries->name_vaccine_id_2 = $request->name_vaccine_id_2;
        //     $data->vaccine_cov_inquiries->location_2 = $request->location_vac_2;

        //     $data->vaccine_cov_inquiries->number_3 = '3';
        //     $data->vaccine_cov_inquiries->date_3 = $request->date_vac_3;
        //     $data->vaccine_cov_inquiries->name_vaccine_id_3 = $request->name_vaccine_id_3;
        //     $data->vaccine_cov_inquiries->location_3 = $request->location_vac_3;

        //     $data->vaccine_cov_inquiries->number_4 = '4';
        //     $data->vaccine_cov_inquiries->date_4 = $request->date_vac_4;
        //     $data->vaccine_cov_inquiries->name_vaccine_id_4 = $request->name_vaccine_id_4;
        //     $data->vaccine_cov_inquiries->location_4 = $request->location_vac_4;

        //     $data->vaccine_cov_inquiries->save();

        // // ------------------------------------------------------------------------------------------------------------------------ //

        // // รายละเอียดเหตุการณ์ //

        //     $data->detail_cov_inquiries->details = $request->details_cov;

        //     $data->detail_cov_inquiries->save();

        // // ------------------------------------------------------------------------------------------------------------------------ //

        // // รายละเอียด 14 วัน //

        //     $data->detail_his_inquiries->date_1 = $request->date_1;
        //     $data->detail_his_inquiries->location_1 = $request->location_1;
        //     $data->detail_his_inquiries->person_1 = $request->person_1;

        //     $data->detail_his_inquiries->date_2 = $request->date_2;
        //     $data->detail_his_inquiries->location_2 = $request->location_2;
        //     $data->detail_his_inquiries->person_2 = $request->person_2;

        //     $data->detail_his_inquiries->date_3 = $request->date_3;
        //     $data->detail_his_inquiries->location_3 = $request->location_3;
        //     $data->detail_his_inquiries->person_3 = $request->person_3;

        //     $data->detail_his_inquiries->date_4 = $request->date_4;
        //     $data->detail_his_inquiries->location_4 = $request->location_4;
        //     $data->detail_his_inquiries->person_4 = $request->person_4;

        //     $data->detail_his_inquiries->date_5 = $request->date_5;
        //     $data->detail_his_inquiries->location_5 = $request->location_5;
        //     $data->detail_his_inquiries->person_5 = $request->person_5;

        //     $data->detail_his_inquiries->date_6 = $request->date_6;
        //     $data->detail_his_inquiries->location_6 = $request->location_6;
        //     $data->detail_his_inquiries->person_6 = $request->person_6;

        //     $data->detail_his_inquiries->date_7 = $request->date_7;
        //     $data->detail_his_inquiries->location_7 = $request->location_7;
        //     $data->detail_his_inquiries->person_7 = $request->person_7;

        //     $data->detail_his_inquiries->date_8 = $request->date_8;
        //     $data->detail_his_inquiries->location_8 = $request->location_8;
        //     $data->detail_his_inquiries->person_8 = $request->person_8;

        //     $data->detail_his_inquiries->date_9 = $request->date_9;
        //     $data->detail_his_inquiries->location_9 = $request->location_9;
        //     $data->detail_his_inquiries->person_9 = $request->person_9;

        //     $data->detail_his_inquiries->date_10 = $request->date_10;
        //     $data->detail_his_inquiries->location_10 = $request->location_10;
        //     $data->detail_his_inquiries->person_10 = $request->person_10;

        //     $data->detail_his_inquiries->date_11 = $request->date_11;
        //     $data->detail_his_inquiries->location_11 = $request->location_11;
        //     $data->detail_his_inquiries->person_11 = $request->person_11;

        //     $data->detail_his_inquiries->date_12 = $request->date_12;
        //     $data->detail_his_inquiries->location_12 = $request->location_12;
        //     $data->detail_his_inquiries->person_12 = $request->person_12;

        //     $data->detail_his_inquiries->date_13 = $request->date_13;
        //     $data->detail_his_inquiries->location_13 = $request->location_13;
        //     $data->detail_his_inquiries->person_13 = $request->person_13;

        //     $data->detail_his_inquiries->date_14 = $request->date_14;
        //     $data->detail_his_inquiries->location_14 = $request->location_14;
        //     $data->detail_his_inquiries->person_14 = $request->person_14;

        //     $data->detail_his_inquiries->save();

        // // ------------------------------------------------------------------------------------------------------------------------ //

        // // ประวัติเสี่ยง riskhistory //
        //     // $data->histos_cov_inquiries->user_id = $request->user_id;
        //     // $data->histos_cov_inquiries->num1 = $request->num1;
        //     // $data->histos_cov_inquiries->city = $request->city;
        //     // $data->histos_cov_inquiries->country = $request->country;
        //     // $data->histos_cov_inquiries->date = $request->date;
        //     // $data->histos_cov_inquiries->airline = $request->airline;
        //     // $data->histos_cov_inquiries->flight = $request->flight;
        //     // $data->histos_cov_inquiries->seat = $request->seat;
        //     // $data->histos_cov_inquiries->num2 = $request->num2;
        //     // $data->histos_cov_inquiries->num3 = $request->num3;
        //     // $data->histos_cov_inquiries->num4 = $request->num4;
        //     // $data->histos_cov_inquiries->num4details = $request->num4details;
        //     // $data->histos_cov_inquiries->num5 = $request->num5;
        //     // $data->histos_cov_inquiries->num6 = $request->num6;
        //     // $data->histos_cov_inquiries->num6details = $request->num6details;
        //     // $data->histos_cov_inquiries->num7 = $request->num7;
        //     // $data->histos_cov_inquiries->num8 = $request->num8;
        //     // $data->histos_cov_inquiries->num9 = $request->num9;
        //     // $data->histos_cov_inquiries->num10 = $request->num10;

        //     // $data->histos_cov_inquiries->save();

        // // ------------------------------------------------------------------------------------------------------------------------ //

        // // ค้นหาผู้เสี่ยง //

        //     $data->search_id_inquiries->name = $request->name_search;
        //     $data->search_id_inquiries->sex = $request->sex_search;
        //     $data->search_id_inquiries->age = $request->age_search;
        //     $data->search_id_inquiries->add = $request->add_search;
        //     $data->search_id_inquiries->tel = $request->tel_search;
        //     $data->search_id_inquiries->datetush = $request->datetush_search;
        //     $data->search_id_inquiries->detailstuch = $request->detailstuch_search;
        //     $data->search_id_inquiries->sick = $request->sick_search;
        //     $data->search_id_inquiries->sickdate = $request->sickdate_search;
        //     $data->search_id_inquiries->equipment = $request->equipment_search;
        //     $data->search_id_inquiries->datevaccine = $request->datevaccine_search;

        //     $data->search_id_inquiries->save();

        // // ------------------------------------------------------------------------------------------------------------------------ //

        // return redirect()->route('inquiry-form-Covid.show', $data->id)->with(['message' => 'แก้ไขข้อมูลเรียบร้อย!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Covid19_inquiry_form  $covid19_inquiry_form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Covid19_inquiry_form $covid19_inquiry_form, $id)
    {

        $data = Covid19_inquiry_form::find($id);
        if ($data->user_id != null) {
            $data->user->delete();
        }
        if ($data->riskhistory_id != null) {
            $data->histos_cov->delete();
        }
        if ($data->clinic_id != null) {
            $data->clinic_cov->delete();
        }
        if ($data->details_id != null) {
            $data->detail_cov->delete();
        }

        $data->delete();

        return redirect()->route('InquiryFormCovid.index')->with(['message' => 'ลบข้อมูลเรียบร้อย!']);
    }

    public function wordExport_covid($id)
    {

        $data = Covid19_inquiry_form::findOrFail($id);
        $name_title = Title_name::all();
        $home_type = Home_type::all();
        $name_vaccine = Name_vaccine_covid19_inquiry::all();
        $template_covid = new TemplateProcessor('word-template/template_covid.docx');


        $date_mon = DateThaiNotps($data->created_at);
        $old_date = explode(' ', $date_mon);
        $template_covid->setValue('date', $old_date[0]);
        $template_covid->setValue('mon', $old_date[1]);
        $template_covid->setValue('year', $old_date[2]);

        $none_info = '';

        $checked = '<w:sym w:font="Wingdings" w:char="F0FE"/>';
        $unChecked = '<w:sym w:font="Wingdings" w:char="F0A8"/>';

        $template_covid->setValue("checked",$checked);
        $template_covid->setValue("unchecked",$unChecked);


        // -------------------------------------- HN -------------------------------------------//

            $template_covid->setValue('HN', $data->code);
            if(is_null($data->code)){
                $template_covid->setValue('HN',$none_info);
            }

        //------------------------------------------------------------------------------------ //


        //---------------------------------- ข้อมูลทั่วไป -----------------------------------------//

            $template_covid->setValue('number_id', $data->user->number_id);
            if(is_null($data->user->number_id)){
                $template_covid->setValue('number_id',$none_info);
            }

            $template_covid->setValue('title', $data->user->title_name->name );
            if(is_null($data->user->title_name_inquiries->name)){
                $template_covid->setValue('title',$none_info);
            }

            $template_covid->setValue('first', $data->user->first_name);
            if(is_null($data->user->first_name)){
                $template_covid->setValue('first',$none_info);
            }

            $template_covid->setValue('last', $data->user->last_name);
            if(is_null($data->user->last_name)){
                $template_covid->setValue('last',$none_info);
            }

            // เพศ // ----------------------------------------------------------------------------------------

            if($data->user->sex == '0'){
                $template_covid->setValue("sex",'ชาย');
            }else{
                $template_covid->setValue("sex",'หญิง');
            }

            // -----------------------------------------------------------------------------------------------


            // ข้อมูลการตั้งครรภ์ // ----------------------------------------------------------------------------------------

            if($data->user->sex == '0'){
                $template_covid->setValue('check_yes',$unChecked);
                $template_covid->setValue('check_no',$unChecked);
                $template_covid->setValue('womb', $none_info);
                $template_covid->setValue('womb_age', $none_info);
            }
            else{
                if($data->user->sex_id == '0') {
                    $template_covid->setValue('check_yes',$unChecked);
                    $template_covid->setValue('check_no',$checked);
                    $template_covid->setValue('womb', $none_info);
                    $template_covid->setValue('womb_age', $none_info);
                }
                // elseif(is_null($data->sexes_inquir->womb)) {
                //     $template_covid->setValue('check_yes',$unChecked);
                //     $template_covid->setValue('check_no',$checked);
                //     $template_covid->setValue('womb', $none_info);
                //     $template_covid->setValue('womb_age', $none_info);
                // }
                else{
                    $template_covid->setValue('check_yes',$checked);
                    $template_covid->setValue('check_no',$unChecked);
                    $template_covid->setValue('womb', $data->user->sexes_inquir->womb);
                    $template_covid->setValue('womb_age', $data->sexes_inquir->womb_age);
                }
            }

            // -----------------------------------------------------------------------------------------------

            $template_covid->setValue('age', $data->user->age);
            if(is_null($data->user->age)){
                $template_covid->setValue('age',$none_info);
            }

            $template_covid->setValue('nation', $data->user->nation);
            if(is_null($data->user->nation)){
                $template_covid->setValue('nation',$none_info);
            }

            $template_covid->setValue('occ', ($data->user->occ));
            if(is_null($data->user->occ)){
                $template_covid->setValue('occ',$none_info);
            }

            $template_covid->setValue('tel', ('0'.$data->user->tel));
            if(is_null($data->user->tel)){
                $template_covid->setValue('tel',$none_info);
            }

            $template_covid->setValue('telapp', ('0'.$data->user->telapp));
            if(is_null($data->user->telapp)){
                $template_covid->setValue('telapp',$none_info);
            }

            $template_covid->setValue('other_check_home', ($data->user->home_type->name));
            if(is_null($data->user->home_type_id)){
                $template_covid->setValue('home_type_id',$none_info);
            }

            $template_covid->setValue('home_id', ($data->user->home_id));
            if(is_null($data->user->home_id)){
                $template_covid->setValue('home_id',$none_info);
            }

            if(!is_null($data->user->home_id)){
                $template_covid->setValue('home_check',$checked,);
                $template_covid->setValue('other_check',$unChecked,);
            }
            elseif(is_null($data->user->home_id)){
                $template_covid->setValue('home_check',$unChecked,);
                $template_covid->setValue('other_check',$checked,);

            }


            $template_covid->setValue('alley', ($data->user->alley));
            if(is_null($data->user->alley)){
                $template_covid->setValue('alley',$none_info);
            }

            $template_covid->setValue('street', ($data->user->street));
            if(is_null($data->user->street)){
                $template_covid->setValue('street',$none_info);
            }

            $template_covid->setValue('district_id', ($data->user->district_id));
            if(is_null($data->user->district_id)){
                $template_covid->setValue('district_id',$none_info);
            }

            $template_covid->setValue('disease', ($data->user->disease));
            if(is_null($data->user->disease)){
                $template_covid->setValue('disease',$none_info);
            }


            // การสูบบุหรี่ // ----------------------------------------------------------------------------------------
                    if(($data->user->smoking) == '0') {
                        $template_covid->setValue('never_smoke',$checked);
                        $template_covid->setValue('smoking',$unChecked);
                        $template_covid->setValue('smoked',$unChecked);
                    }

                    elseif(($data->user->smoking) == '1') {
                        $template_covid->setValue('never_smoke',$unChecked);
                        $template_covid->setValue('smoking',$checked);
                        $template_covid->setValue('smoked',$unChecked);
                    }

                    elseif(($data->user->smoking) == '2') {
                        $template_covid->setValue('never_smoke',$unChecked);
                        $template_covid->setValue('smoking',$unChecked);
                        $template_covid->setValue('smoked',$checked);
                    }
            // -----------------------------------------------------------------------------------------------

            $template_covid->setValue('location', ($data->user->location));
            if(is_null($data->user->location)){
                $template_covid->setValue('location',$none_info);
            }

        //------------------------------------------------------------------------------------ //


        //---------------------------------- ข้อมูลทางคลินิก ------------------------------------//
            $template_covid->setValue('datesick', ($data->cli_cov_inquiries->datesick));
            if(is_null($data->cli_cov_inquiries->datesick)){
                $template_covid->setValue('datesick',$none_info);
            }

            $template_covid->setValue('firstdate', ($data->cli_cov_inquiries->first));
            if(is_null($data->cli_cov_inquiries->first)){
                $template_covid->setValue('firstdate',$none_info);
            }

            $template_covid->setValue('namehosbe', ($data->cli_cov_inquiries->namehosbe));
            if(is_null($data->cli_cov_inquiries->namehosbe)){
                $template_covid->setValue('namehosbe',$none_info);
            }

            $template_covid->setValue('namehosup', ($data->cli_cov_inquiries->namehosup));
            if(is_null($data->cli_cov_inquiries->namehosup)){
                $template_covid->setValue('namehosup',$none_info);
            }

            $template_covid->setValue('district_id', ($data->cli_cov_inquiries->district_id));
            if(is_null($data->cli_cov_inquiries->district_id)){
                $template_covid->setValue('district_id',$none_info);
            }

            $template_covid->setValue('patientdate_id', ($data->cli_cov_inquiries->patientdate_id));
            if(is_null($data->cli_cov_inquiries->patientdate_id)){
                $template_covid->setValue('patientdate_id',$none_info);
            }

            $template_covid->setValue('x_ray_id', ($data->cli_cov_inquiries->x_ray_id));
            if(is_null($data->cli_cov_inquiries->x_ray_id)){
                $template_covid->setValue('x_ray_id',$none_info);
            }

            $template_covid->setValue('cbc_id', ($data->cli_cov_inquiries->cbc_id));
            if(is_null($data->cli_cov_inquiries->cbc_id)){
                $template_covid->setValue('cbc_id',$none_info);
            }

            $template_covid->setValue('test_id', ($data->cli_cov_inquiries->test_id));
            if(is_null($data->cli_cov_inquiries->test_id)){
                $template_covid->setValue('test_id',$none_info);
            }

            $template_covid->setValue('pcr_id', ($data->cli_cov_inquiries->pcr_id));
            if(is_null($data->cli_cov_inquiries->pcr_id)){
                $template_covid->setValue('pcr_id',$none_info);
            }

            $template_covid->setValue('antibody_id', ($data->cli_cov_inquiries->antibody_id));
            if(is_null($data->cli_cov_inquiries->antibody_id)){
                $template_covid->setValue('antibody_id',$none_info);
            }

            $template_covid->setValue('type_id', ($data->cli_cov_inquiries->type_id));
            if(is_null($data->cli_cov_inquiries->type_id)){
                $template_covid->setValue('type_id',$none_info);
            }

            $template_covid->setValue('medicine_id', ($data->cli_cov_inquiries->medicine_id));
            if(is_null($data->cli_cov_inquiries->medicine_id)){
                $template_covid->setValue('medicine_id',$none_info);
            }

            $template_covid->setValue('status_id', ($data->cli_cov_inquiries->status_id));
            if(is_null($data->cli_cov_inquiries->status_id)){
                $template_covid->setValue('status_id',$none_info);
            }

        //------------------------------------------------------------------------------------ //

        //-------------------------------- ข้อมูลอาการในวันที่พบ -----------------------------------//

            if($data->patient_in_inquiries->fever == '1'){
                $template_covid->setValue('fever',$checked,);
            }
            elseif($data->patient_in_inquiries->fever == '0'){
                $template_covid->setValue('fever',$checked,);
            }
            elseif(is_null($data->patient_in_inquiries->fever)){
                $template_covid->setValue('fever',$unChecked,);
            }

            $template_covid->setValue('fever_degree', ($data->patient_in_inquiries->fever_degree));
            if(is_null($data->patient_in_inquiries->fever_degree)){
                $template_covid->setValue('fever_degree',$none_info);
            }

            $template_covid->setValue('fever_oxygen', ($data->patient_in_inquiries->fever_oxygen));
            if(is_null($data->patient_in_inquiries->fever_degree)){
                $template_covid->setValue('fever_oxygen',$none_info);
            }

            if($data->patient_in_inquiries->ventilator == '1'){
                $template_covid->setValue('venti',$checked,);
            }
            elseif($data->patient_in_inquiries->ventilator == '0'){
                $template_covid->setValue('venti',$checked,);
            }
            elseif(is_null($data->patient_in_inquiries->ventilator)){
                $template_covid->setValue('venti',$unChecked,);
            }

            if($data->patient_in_inquiries->cough == '1'){
                $template_covid->setValue('cough',$checked,);
            }
            elseif($data->patient_in_inquiries->cough == '0'){
                $template_covid->setValue('cough',$checked,);
            }
            elseif(is_null($data->patient_in_inquiries->cough)){
                $template_covid->setValue('cough',$unChecked,);
            }

            if($data->patient_in_inquiries->neck == '1'){
                $template_covid->setValue('neck',$checked,);
            }
            elseif($data->patient_in_inquiries->neck == '0'){
                $template_covid->setValue('neck',$checked,);
            }
            elseif(is_null($data->patient_in_inquiries->neck)){
                $template_covid->setValue('neck',$unChecked,);
            }

            if($data->patient_in_inquiries->mascle == '1'){
                $template_covid->setValue('mascle',$checked,);
            }
            elseif($data->patient_in_inquiries->mascle == '0'){
                $template_covid->setValue('mascle',$checked,);
            }
            elseif(is_null($data->patient_in_inquiries->mascle)){
                $template_covid->setValue('mascle',$unChecked,);
            }

            if($data->patient_in_inquiries->runny == '1'){
                $template_covid->setValue('runny',$checked,);
            }
            elseif($data->patient_in_inquiries->runny == '0'){
                $template_covid->setValue('runny',$checked,);
            }
            elseif(is_null($data->patient_in_inquiries->runny)){
                $template_covid->setValue('runny',$unChecked,);
            }

            if($data->patient_in_inquiries->phlegm == '1'){
                $template_covid->setValue('phlegm',$checked,);
            }
            elseif($data->patient_in_inquiries->phlegm == '0'){
                $template_covid->setValue('phlegm',$checked,);
            }
            elseif(is_null($data->patient_in_inquiries->phlegm)){
                $template_covid->setValue('phlegm',$unChecked,);
            }

            if($data->patient_in_inquiries->breathe == '1'){
                $template_covid->setValue('breathe',$checked,);
            }
            elseif($data->patient_in_inquiries->breathe == '0'){
                $template_covid->setValue('breathe',$checked,);
            }
            elseif(is_null($data->patient_in_inquiries->breathe)){
                $template_covid->setValue('breathe',$unChecked,);
            }

            if($data->patient_in_inquiries->headache == '1'){
                $template_covid->setValue('headache',$checked,);
            }
            elseif($data->patient_in_inquiries->headache == '0'){
                $template_covid->setValue('headache',$checked,);
            }
            elseif(is_null($data->patient_in_inquiries->headache)){
                $template_covid->setValue('headache',$unChecked,);
            }

            if($data->patient_in_inquiries->liquid == '1'){
                $template_covid->setValue('liquid',$checked,);
            }
            elseif($data->patient_in_inquiries->liquid == '0'){
                $template_covid->setValue('liquid',$checked,);
            }
            elseif(is_null($data->patient_in_inquiries->liquid)){
                $template_covid->setValue('liquid',$unChecked,);
            }

            if($data->patient_in_inquiries->nose == '1'){
                $template_covid->setValue('nose',$checked,);
            }
            elseif($data->patient_in_inquiries->nose == '0'){
                $template_covid->setValue('nose',$checked,);
            }
            elseif(is_null($data->patient_in_inquiries->nose)){
                $template_covid->setValue('nose',$unChecked,);
            }

            if($data->patient_in_inquiries->tongue == '1'){
                $template_covid->setValue('tongue',$checked,);
            }
            elseif($data->patient_in_inquiries->tongue == '0'){
                $template_covid->setValue('tongue',$checked,);
            }
            elseif(is_null($data->patient_in_inquiries->tongue)){
                $template_covid->setValue('tongue',$unChecked,);
            }

            if($data->patient_in_inquiries->eye == '1'){
                $template_covid->setValue('eye',$checked,);
            }
            elseif($data->patient_in_inquiries->eye == '0'){
                $template_covid->setValue('eye',$checked,);
            }
            elseif(is_null($data->patient_in_inquiries->eye)){
                $template_covid->setValue('eye',$unChecked,);
            }

            if($data->patient_in_inquiries->rash == '1'){
                $template_covid->setValue('rash',$checked,);
            }
            elseif($data->patient_in_inquiries->rash == '0'){
                $template_covid->setValue('rash',$checked,);
            }
            elseif(is_null($data->patient_in_inquiries->rash)){
                $template_covid->setValue('rash',$unChecked,);
            }

            if(!is_null($data->patient_in_inquiries->rash_details)){
                $template_covid->setValue('rash_details',($data->patient_in_inquiries->rash_details));
            }
            elseif(is_null($data->patient_in_inquiries->rash_details)){
                $template_covid->setValue('rash_details',$none_info,);
            }

            if($data->patient_in_inquiries->other == '1'){
                $template_covid->setValue('other_patien',$checked,);
            }
            elseif($data->patient_in_inquiries->other == '0'){
                $template_covid->setValue('other_patien',$checked,);
            }
            elseif(is_null($data->patient_in_inquiries->other)){
                $template_covid->setValue('other_patien',$unChecked,);
            }

            if(!is_null($data->patient_in_inquiries->other_details)){
                $template_covid->setValue('other_details_patien',($data->patient_in_inquiries->rash_details));
            }
            elseif(is_null($data->patient_in_inquiries->other_details)){
                $template_covid->setValue('other_details_patien',$none_info,);
            }

        //------------------------------------------------------------------------------------ //

        //--------------------------------- ข้อมูล x-rey ปอด ------------------------------------//
            if(is_null($data->cli_cov_inquiries->xray_in_inquiries->date)){
                $template_covid->setValue('xrey_yes',$unChecked,);
                $template_covid->setValue('xrey_no',$checked,);
            }
            elseif(!is_null($data->cli_cov_inquiries->xray_in_inquiries->date)){
                $template_covid->setValue('xrey_yes',$checked,);
                $template_covid->setValue('xrey_no',$unChecked,);
            }

            $template_covid->setValue('date_xrey', ($data->cli_cov_inquiries->xray_in_inquiries->date));
            if(is_null($data->cli_cov_inquiries->xray_in_inquiries->date)){
                $template_covid->setValue('date_xrey',$none_info);
            }

            $template_covid->setValue('result_xrey', ($data->cli_cov_inquiries->xray_in_inquiries->result));
            if(is_null($data->cli_cov_inquiries->xray_in_inquiries->result)){
                $template_covid->setValue('result_xrey',$none_info);
            }
        //------------------------------------------------------------------------------------ //

        // ---------------------------------- ข้อมูล CBC --------------------------------------- //
            $template_covid->setValue('date_cbc', ($data->cbc_in_inquiries->date));
            if(is_null($data->cbc_in_inquiries->date)){
                $template_covid->setValue('date_cbc',$none_info);
            }

            $template_covid->setValue('hb', ($data->cbc_in_inquiries->hb));
            if(is_null($data->cbc_in_inquiries->hb)){
                $template_covid->setValue('hb',$none_info);
            }

            $template_covid->setValue('htc', ($data->cbc_in_inquiries->htc));
            if(is_null($data->cbc_in_inquiries->htc)){
                $template_covid->setValue('htc',$none_info);
            }

            $template_covid->setValue('platelet', ($data->cbc_in_inquiries->platelet));
            if(is_null($data->cbc_in_inquiries->platelet)){
                $template_covid->setValue('platelet',$none_info);
            }

            $template_covid->setValue('wbc', ($data->cbc_in_inquiries->wbc));
            if(is_null($data->cbc_in_inquiries->wbc)){
                $template_covid->setValue('wbc',$none_info);
            }

            $template_covid->setValue('n_cbc', ($data->cbc_in_inquiries->n));
            if(is_null($data->cbc_in_inquiries->n)){
                $template_covid->setValue('n_cbc',$none_info);
            }

            $template_covid->setValue('l_cbc', ($data->cbc_in_inquiries->l));
            if(is_null($data->cbc_in_inquiries->l)){
                $template_covid->setValue('l_cbc',$none_info);
            }

            $template_covid->setValue('atyp', ($data->cbc_in_inquiries->atyp));
            if(is_null($data->cbc_in_inquiries->atyp)){
                $template_covid->setValue('atyp',$none_info);
            }

            $template_covid->setValue('mono', ($data->cbc_in_inquiries->mono));
            if(is_null($data->cbc_in_inquiries->mono)){
                $template_covid->setValue('mono',$none_info);
            }

            $template_covid->setValue('other_details_cbc', ($data->cbc_in_inquiries->other_details));
            if(is_null($data->cbc_in_inquiries->other_details)){
                $template_covid->setValue('other_details_cbc',$none_info);
            }
        //------------------------------------------------------------------------------------ //

        //----------------------------- ข้อมูล influenza test -----------------------------------//
            $template_covid->setValue('type_check_test', ($data->test_in_inquiries->type_check_covid_id));
            if(is_null($data->test_in_inquiries->type_check_covid_id)){
                $template_covid->setValue('type_check_test',$none_info);
            }

            if($data->test_in_inquiries->nagative == '1'){
                $template_covid->setValue('nagative',$checked,);
            }
            elseif($data->test_in_inquiries->nagative == '0'){
                $template_covid->setValue('nagative',$checked,);
            }
            elseif(is_null($data->test_in_inquiries->nagative)){
                $template_covid->setValue('nagative',$unChecked,);
            }

            if($data->test_in_inquiries->positive == '1'){
                $template_covid->setValue('positive',$checked,);
            }
            elseif($data->test_in_inquiries->positive == '0'){
                $template_covid->setValue('positive',$checked,);
            }
            elseif(is_null($data->test_in_inquiries->positive)){
                $template_covid->setValue('positive',$unChecked,);
            }

            if($data->test_in_inquiries->flua == '1'){
                $template_covid->setValue('flua',$checked,);
            }
            elseif($data->test_in_inquiries->flua == '0'){
                $template_covid->setValue('flua',$checked,);
            }
            elseif(is_null($data->test_in_inquiries->flua)){
                $template_covid->setValue('flua',$unChecked,);
            }

            if($data->test_in_inquiries->flub == '1'){
                $template_covid->setValue('flub',$checked,);
            }
            elseif($data->test_in_inquiries->flub == '0'){
                $template_covid->setValue('flub',$checked,);
            }
            elseif(is_null($data->test_in_inquiries->flub)){
                $template_covid->setValue('flub',$unChecked,);
            }
        //------------------------------------------------------------------------------------ //

        //------------------------------- ข้อมูลผลตรวจ PCR ------------------------------------- //
            $template_covid->setValue('number_pcr', ($data->cli_cov_inquiries->pcr_test_inquiries->number));
            if(is_null($data->cli_cov_inquiries->pcr_test_inquiries->number)){
                $template_covid->setValue('number_pcr',$none_info);
            }

            $template_covid->setValue('date_pcr', ($data->cli_cov_inquiries->pcr_test_inquiries->date));
            if(is_null($data->cli_cov_inquiries->pcr_test_inquiries->date)){
                $template_covid->setValue('date_pcr',$none_info);
            }

            $template_covid->setValue('example_pcr', ($data->cli_cov_inquiries->pcr_test_inquiries->example));
            if(is_null($data->cli_cov_inquiries->pcr_test_inquiries->example)){
                $template_covid->setValue('example_pcr',$none_info);
            }

            $template_covid->setValue('location_pcr', ($data->cli_cov_inquiries->pcr_test_inquiries->location));
            if(is_null($data->cli_cov_inquiries->pcr_test_inquiries->location)){
                $template_covid->setValue('location_pcr',$none_info);
            }

                if($data->cli_cov_inquiries->pcr_test_inquiries->detected == '1'){
                    $template_covid->setValue('detected_pcr_yes',$checked,);
                    $template_covid->setValue('detected_pcr_no',$unChecked,);

                }
                elseif($data->cli_cov_inquiries->pcr_test_inquiries->detected == '0'){
                    $template_covid->setValue('detected_pcr_yes',$unChecked,);
                    $template_covid->setValue('detected_pcr_no',$checked,);
                }
                elseif(is_null($data->cli_cov_inquiries->pcr_test_inquiries->detected)){
                    $template_covid->setValue('detected_pcr_yes',$unChecked,);
                    $template_covid->setValue('detected_pcr_no',$unChecked,);
                }
        //------------------------------------------------------------------------------------ //

        //---------------------------------- ข้อมูล antibody ------------------------------------//

            $template_covid->setValue('number_anti', ($data->cli_cov_inquiries->anti_in_inquiries->number));
            if(is_null($data->cli_cov_inquiries->anti_in_inquiries->number)){
                $template_covid->setValue('number_anti',$none_info);
            }

            $template_covid->setValue('date_anti', ($data->cli_cov_inquiries->anti_in_inquiries->date));
            if(is_null($data->cli_cov_inquiries->anti_in_inquiries->date)){
                $template_covid->setValue('date_anti',$none_info);
            }

            $template_covid->setValue('example_anti', ($data->cli_cov_inquiries->anti_in_inquiries->example));
            if(is_null($data->cli_cov_inquiries->anti_in_inquiries->example)){
                $template_covid->setValue('example_anti',$none_info);
            }

            $template_covid->setValue('location_anti', ($data->cli_cov_inquiries->anti_in_inquiries->location));
            if(is_null($data->cli_cov_inquiries->anti_in_inquiries->location)){
                $template_covid->setValue('location_anti',$none_info);
            }

            $template_covid->setValue('result_anti', ($data->cli_cov_inquiries->anti_in_inquiries->result));
            if(is_null($data->cli_cov_inquiries->anti_in_inquiries->result)){
                $template_covid->setValue('result_anti',$none_info);
            }
        //------------------------------------------------------------------------------------ //

        //--------------------------- ข้อมูลประเภทผู้ป่วย (patient type) -------------------------- //

            if($data->patient_type_inquiries->patient == '1'){
                $template_covid->setValue('patient_in',$checked,);
                $template_covid->setValue('patient_out',$unChecked,);

            }
            elseif($data->patient_type_inquiries->patient == '0'){
                $template_covid->setValue('patient_in',$unChecked,);
                $template_covid->setValue('patient_out',$checked,);

            }
            elseif(is_null($data->patient_type_inquiries->patient)){
                $template_covid->setValue('patient_in',$unChecked,);
                $template_covid->setValue('patient_out',$unChecked,);
            }

            $template_covid->setValue('date_patient', ($data->patient_type_inquiries->date));
            if(is_null($data->patient_type_inquiries->date)){
                $template_covid->setValue('date_patient',$none_info);
            }

            $template_covid->setValue('diagnoes_patient', ($data->patient_type_inquiries->diagnoes));
            if(is_null($data->patient_type_inquiries->diagnoes)){
                $template_covid->setValue('diagnoes_patient',$none_info);
            }
        //------------------------------------------------------------------------------------ //

        //------------------------------ ข้อมูลการให้ยา (medicine) -------------------------------//

            if($data->medic_in_inquiries->give == '1'){
                $template_covid->setValue('give',$checked,);
                $template_covid->setValue('not_give',$unChecked,);

            }
            elseif($data->medic_in_inquiries->give == '0'){
                $template_covid->setValue('give',$unChecked,);
                $template_covid->setValue('not_give',$checked,);

            }
            elseif(is_null($data->medic_in_inquiries->give)){
                $template_covid->setValue('give',$unChecked,);
                $template_covid->setValue('not_give',$unChecked,);

            }

            $template_covid->setValue('first_dose', ($data->medic_in_inquiries->first_dose));
            if(is_null($data->medic_in_inquiries->first_dose)){
                $template_covid->setValue('first_dose',$none_info);
            }

            if($data->medic_in_inquiries->remdesivir == '1'){
                $template_covid->setValue('remdesivir',$checked,);
            }
            elseif($data->medic_in_inquiries->remdesivir == '0'){
                $template_covid->setValue('remdesivir',$checked,);
            }
            elseif(is_null($data->medic_in_inquiries->remdesivir)){
                $template_covid->setValue('remdesivir',$unChecked,);
            }

            if($data->medic_in_inquiries->favipiravir == '1'){
                $template_covid->setValue('favipiravir',$checked,);
            }
            elseif($data->medic_in_inquiries->favipiravir == '0'){
                $template_covid->setValue('favipiravir',$checked,);
            }
            elseif(is_null($data->medic_in_inquiries->favipiravir)){
                $template_covid->setValue('favipiravir',$unChecked,);
            }

            if($data->medic_in_inquiries->lopinavir == '1'){
                $template_covid->setValue('lopinavir',$checked,);
            }
            elseif($data->medic_in_inquiries->lopinavir == '0'){
                $template_covid->setValue('lopinavir',$checked,);
            }
            elseif(is_null($data->medic_in_inquiries->lopinavir)){
                $template_covid->setValue('lopinavir',$unChecked,);
            }

            if($data->medic_in_inquiries->darunavir == '1'){
                $template_covid->setValue('darunavir',$checked,);
            }
            elseif($data->medic_in_inquiries->darunavir == '0'){
                $template_covid->setValue('darunavir',$checked,);
            }
            elseif(is_null($data->medic_in_inquiries->darunavir)){
                $template_covid->setValue('darunavir',$unChecked,);
            }

            if($data->medic_in_inquiries->ritonavir == '1'){
                $template_covid->setValue('ritonavir',$checked,);
            }
            elseif($data->medic_in_inquiries->ritonavir == '0'){
                $template_covid->setValue('ritonavir',$checked,);
            }
            elseif(is_null($data->medic_in_inquiries->ritonavir)){
                $template_covid->setValue('ritonavir',$unChecked,);
            }

            if($data->medic_in_inquiries->ch == '1'){
                $template_covid->setValue('ch',$checked,);
            }
            elseif($data->medic_in_inquiries->ch == '0'){
                $template_covid->setValue('ch',$checked,);
            }
            elseif(is_null($data->medic_in_inquiries->ch)){
                $template_covid->setValue('ch',$unChecked,);
            }

            if($data->medic_in_inquiries->other == '1'){
                $template_covid->setValue('other_medic',$checked,);
            }
            elseif($data->medic_in_inquiries->other == '0'){
                $template_covid->setValue('other_medic',$checked,);
            }
            elseif(is_null($data->medic_in_inquiries->other)){
                $template_covid->setValue('other_medic',$unChecked,);
            }

            $template_covid->setValue('other_details_medic', ($data->medic_in_inquiries->other_details));
            if(is_null($data->medic_in_inquiries->other_details)){
                $template_covid->setValue('other_details_medic',$none_info);
            }
        //------------------------------------------------------------------------------------ //


        //------------------------------- ข้อมูลสถานะ (statuses) ------------------------------- //
            if($data->status_in_inquiries->disappear == '1'){
                $template_covid->setValue('disappear',$checked,);
            }
            elseif($data->status_in_inquiries->disappear == '0'){
                $template_covid->setValue('disappear',$checked,);
            }
            elseif(is_null($data->status_in_inquiries->disappear)){
                $template_covid->setValue('disappear',$unChecked,);
            }

            if($data->status_in_inquiries->not == '1'){
                $template_covid->setValue('not',$checked,);
            }
            elseif($data->status_in_inquiries->not == '0'){
                $template_covid->setValue('not',$checked,);
            }
            elseif(is_null($data->status_in_inquiries->not)){
                $template_covid->setValue('not',$unChecked,);
            }

            if($data->status_in_inquiries->died == '1'){
                $template_covid->setValue('died',$checked,);
            }
            elseif($data->status_in_inquiries->died == '0'){
                $template_covid->setValue('died',$checked,);
            }
            elseif(is_null($data->status_in_inquiries->died)){
                $template_covid->setValue('died',$unChecked,);
            }

            if($data->status_in_inquiries->send == '1'){
                $template_covid->setValue('send',$checked,);
            }
            elseif($data->status_in_inquiries->send == '0'){
                $template_covid->setValue('send',$checked,);
            }
            elseif(is_null($data->status_in_inquiries->send)){
                $template_covid->setValue('send',$unChecked,);
            }

            $template_covid->setValue('sendhos', ($data->status_in_inquiries->sendhos));
            if(is_null($data->status_in_inquiries->sendhos)){
                $template_covid->setValue('sendhos',$none_info);
            }

            if($data->status_in_inquiries->other == '1'){
                $template_covid->setValue('other_status',$checked,);
            }
            elseif($data->status_in_inquiries->other == '0'){
                $template_covid->setValue('other_status',$checked,);
            }
            elseif(is_null($data->status_in_inquiries->other)){
                $template_covid->setValue('other_status',$unChecked,);
            }

            $template_covid->setValue('other_details_status', ($data->status_in_inquiries->other_details));
            if(is_null($data->status_in_inquiries->other_details)){
                $template_covid->setValue('other_details_status',$none_info);
            }

        //------------------------------------------------------------------------------------ //

        //------------------------------------ ข้อมูลวัคซีน ------------------------------------- //

            if($data->vaccine_cov_inquiries->vac_id == '1'){
                $template_covid->setValue('vac_yes',$checked,);
                $template_covid->setValue('vac_no',$unChecked,);
            }
            elseif($data->vaccine_cov_inquiries->vac_id == '0'){
                $template_covid->setValue('vac_yes',$unChecked,);
                $template_covid->setValue('vac_no',$checked,);
            }
            elseif(is_null($data->vaccine_cov_inquiries->vac_id)){
                $template_covid->setValue('vac_yes',$unChecked,);
                $template_covid->setValue('vac_no',$unChecked,);
            }

                //---------------------------------  เข็ม 1 --------------------------------- //
                    $template_covid->setValue('vac_date_1', ($data->vaccine_cov_inquiries->date_1));
                    if(is_null($data->vaccine_cov_inquiries->date_1)){
                        $template_covid->setValue('vac_date_1',$none_info);
                    }

                    $template_covid->setValue('vac_name_1', ($data->vaccine_cov_inquiries->name_vac1_inquiries->name));
                    if(is_null($data->vaccine_cov_inquiries->name_vac1_inquiries->name)){
                        $template_covid->setValue('vac_name_1',$none_info);
                    }

                    $template_covid->setValue('vac_locate_1', ($data->vaccine_cov_inquiries->location_1));
                    if(is_null($data->vaccine_cov_inquiries->location_1)){
                        $template_covid->setValue('vac_locate_1',$none_info);
                    }

                //---------------------------------  เข็ม 2 --------------------------------- //
                    $template_covid->setValue('vac_date_2', ($data->vaccine_cov_inquiries->date_2));
                    if(is_null($data->vaccine_cov_inquiries->date_2)){
                        $template_covid->setValue('vac_date_2',$none_info);
                    }

                    $template_covid->setValue('vac_name_2', ($data->vaccine_cov_inquiries->name_vac2_inquiries->name));
                    if(is_null($data->vaccine_cov_inquiries->name_vac2_inquiries->name)){
                        $template_covid->setValue('vac_name_2',$none_info);
                    }

                    $template_covid->setValue('vac_locate_2', ($data->vaccine_cov_inquiries->location_2));
                    if(is_null($data->vaccine_cov_inquiries->location_2)){
                        $template_covid->setValue('vac_locate_2',$none_info);
                    }

                //---------------------------------  เข็ม 3 --------------------------------- //
                    $template_covid->setValue('vac_date_3', ($data->vaccine_cov_inquiries->date_3));
                    if(is_null($data->vaccine_cov_inquiries->date_3)){
                        $template_covid->setValue('vac_date_3',$none_info);
                    }

                    $template_covid->setValue('vac_name_3', ($data->vaccine_cov_inquiries->name_vac3_inquiries->name));
                    if(is_null($data->vaccine_cov_inquiries->name_vac3_inquiries->name)){
                        $template_covid->setValue('vac_name_3',$none_info);
                    }

                    $template_covid->setValue('vac_locate_3', ($data->vaccine_cov_inquiries->location_3));
                    if(is_null($data->vaccine_cov_inquiries->location_3)){
                        $template_covid->setValue('vac_locate_3',$none_info);
                    }

        //------------------------------------------------------------------------------------ //

        //------------------------------------ ประวัติเสี่ยง ------------------------------------- //

            if($data->histos_cov_inquiries->num1 == '1'){
                $template_covid->setValue('his1_yes',$checked,);
                $template_covid->setValue('his1_no',$unChecked,);
            }
            elseif($data->histos_cov_inquiries->num1 == '0'){
                $template_covid->setValue('his1_yes',$unChecked,);
                $template_covid->setValue('his1_no',$checked,);
            }
            elseif(is_null($data->histos_cov_inquiries->num1)){
                $template_covid->setValue('his1_yes',$unChecked,);
                $template_covid->setValue('his1_no',$unChecked,);
            }
                //--------------------------------- เสริมข้อ 1 ---------------------------------//

                $template_covid->setValue('his_city', ($data->histos_cov_inquiries->city));
                if(is_null($data->histos_cov_inquiries->city)){
                    $template_covid->setValue('his_city',$none_info);
                }

                $template_covid->setValue('his_country', ($data->histos_cov_inquiries->country));
                if(is_null($data->histos_cov_inquiries->country)){
                    $template_covid->setValue('his_country',$none_info);
                }

                $template_covid->setValue('his_date', ($data->histos_cov_inquiries->date));
                if(is_null($data->histos_cov_inquiries->date)){
                    $template_covid->setValue('his_date',$none_info);
                }

                $template_covid->setValue('his_airline', ($data->histos_cov_inquiries->airline));
                if(is_null($data->histos_cov_inquiries->airline)){
                    $template_covid->setValue('his_airline',$none_info);
                }

                $template_covid->setValue('his_flight', ($data->histos_cov_inquiries->flight));
                if(is_null($data->histos_cov_inquiries->flight)){
                    $template_covid->setValue('his_flight',$none_info);
                }

                $template_covid->setValue('his_seat', ($data->histos_cov_inquiries->seat));
                if(is_null($data->histos_cov_inquiries->seat)){
                    $template_covid->setValue('his_seat',$none_info);
                }

                //---------------------------------------------------------------------------//

            if($data->histos_cov_inquiries->num2 == '1'){
                $template_covid->setValue('his2_yes',$checked,);
                $template_covid->setValue('his2_no',$unChecked,);
            }
            elseif($data->histos_cov_inquiries->num2 == '0'){
                $template_covid->setValue('his2_yes',$unChecked,);
                $template_covid->setValue('his2_no',$checked,);
            }
            elseif(is_null($data->histos_cov_inquiries->num2)){
                $template_covid->setValue('his2_yes',$unChecked,);
                $template_covid->setValue('his2_no',$unChecked,);
            }

            if($data->histos_cov_inquiries->num3 == '1'){
                $template_covid->setValue('his3_yes',$checked,);
                $template_covid->setValue('his3_no',$unChecked,);
            }
            elseif($data->histos_cov_inquiries->num3 == '0'){
                $template_covid->setValue('his3_yes',$unChecked,);
                $template_covid->setValue('his3_no',$checked,);
            }
            elseif(is_null($data->histos_cov_inquiries->num3)){
                $template_covid->setValue('his3_yes',$unChecked,);
                $template_covid->setValue('his3_no',$unChecked,);
            }

            if($data->histos_cov_inquiries->num4 == '1'){
                $template_covid->setValue('his4_yes',$checked,);
                $template_covid->setValue('his4_no',$unChecked,);
            }
            elseif($data->histos_cov_inquiries->num4 == '0'){
                $template_covid->setValue('his4_yes',$unChecked,);
                $template_covid->setValue('his4_no',$checked,);
            }
            elseif(is_null($data->histos_cov_inquiries->num4)){
                $template_covid->setValue('his4_yes',$unChecked,);
                $template_covid->setValue('his4_no',$unChecked,);
            }

                //--------------------------------- เสริมข้อ 4 ---------------------------------//

                $template_covid->setValue('his_4_details', ($data->histos_cov_inquiries->num4details));
                if(is_null($data->histos_cov_inquiries->num4details)){
                    $template_covid->setValue('his_4_details',$none_info);
                }

                //---------------------------------------------------------------------------//

            if($data->histos_cov_inquiries->num5 == '1'){
                $template_covid->setValue('his5_yes',$checked,);
                $template_covid->setValue('his5_no',$unChecked,);
            }
            elseif($data->histos_cov_inquiries->num5 == '0'){
                $template_covid->setValue('his5_yes',$unChecked,);
                $template_covid->setValue('his5_no',$checked,);
            }
            elseif(is_null($data->histos_cov_inquiries->num5)){
                $template_covid->setValue('his5_yes',$unChecked,);
                $template_covid->setValue('his5_no',$unChecked,);
            }

            if($data->histos_cov_inquiries->num6 == '1'){
                $template_covid->setValue('his6_yes',$checked,);
                $template_covid->setValue('his6_no',$unChecked,);
            }
            elseif($data->histos_cov_inquiries->num6 == '0'){
                $template_covid->setValue('his6_yes',$unChecked,);
                $template_covid->setValue('his6_no',$checked,);
            }
            elseif(is_null($data->histos_cov_inquiries->num6)){
                $template_covid->setValue('his6_yes',$unChecked,);
                $template_covid->setValue('his6_no',$unChecked,);
            }

                //--------------------------------- เสริมข้อ 6 ---------------------------------//

                $template_covid->setValue('his_6_details', ($data->histos_cov_inquiries->num6details));
                if(is_null($data->histos_cov_inquiries->num6details)){
                    $template_covid->setValue('his_6_details',$none_info);
                }

                //---------------------------------------------------------------------------//

            if($data->histos_cov_inquiries->num7 == '1'){
                $template_covid->setValue('his7_yes',$checked,);
                $template_covid->setValue('his7_no',$unChecked,);
            }
            elseif($data->histos_cov_inquiries->num7 == '0'){
                $template_covid->setValue('his7_yes',$unChecked,);
                $template_covid->setValue('his7_no',$checked,);
            }
            elseif(is_null($data->histos_cov_inquiries->num7)){
                $template_covid->setValue('his7_yes',$unChecked,);
                $template_covid->setValue('his7_no',$unChecked,);
            }

            if($data->histos_cov_inquiries->num8 == '1'){
                $template_covid->setValue('his8_yes',$checked,);
                $template_covid->setValue('his8_no',$unChecked,);
            }
            elseif($data->histos_cov_inquiries->num8 == '0'){
                $template_covid->setValue('his8_yes',$unChecked,);
                $template_covid->setValue('his8_no',$checked,);
            }
            elseif(is_null($data->histos_cov_inquiries->num8)){
                $template_covid->setValue('his8_yes',$unChecked,);
                $template_covid->setValue('his8_no',$unChecked,);
            }

            if($data->histos_cov_inquiries->num9 == '1'){
                $template_covid->setValue('his9_yes',$checked,);
                $template_covid->setValue('his9_no',$unChecked,);
            }
            elseif($data->histos_cov_inquiries->num9 == '0'){
                $template_covid->setValue('his9_yes',$unChecked,);
                $template_covid->setValue('his9_no',$checked,);
            }
            elseif(is_null($data->histos_cov_inquiries->num9)){
                $template_covid->setValue('his9_yes',$unChecked,);
                $template_covid->setValue('his9_no',$unChecked,);
            }

            $template_covid->setValue('his_10_details', ($data->histos_cov_inquiries->num10));
            if(is_null($data->histos_cov_inquiries->num10)){
                $template_covid->setValue('his_10_details',$none_info);
            }
        //------------------------------------------------------------------------------------ //


        //--------------------------------- รายละเอียดเหตุการณ์ --------------------------------- //

            $template_covid->setValue('risk_details', ($data->detail_cov_inquiries->details));
            if(is_null($data->detail_cov_inquiries->details)){
                $template_covid->setValue('risk_details',$none_info);
            }

        //------------------------------------------------------------------------------------ //

        //----------------------------------- ตาราง 14 วัน ------------------------------------ //

                //--------------------------------------- 1 ------------------------------------------- //

                $template_covid->setValue('details_date_1', ($data->detail_his_inquiries->date_1));
                if(is_null($data->detail_his_inquiries->date_1)){
                    $template_covid->setValue('details_date_1',$none_info);
                }
                $template_covid->setValue('details_location_1', ($data->detail_his_inquiries->location_1));
                if(is_null($data->detail_his_inquiries->location_1)){
                    $template_covid->setValue('details_location_1',$none_info);
                }
                $template_covid->setValue('details_person_1', ($data->detail_his_inquiries->person_1));
                if(is_null($data->detail_his_inquiries->person_1)){
                    $template_covid->setValue('details_person_1',$none_info);
                }

                //--------------------------------------- 2 ------------------------------------------- //

                $template_covid->setValue('details_date_2', ($data->detail_his_inquiries->date_2));
                if(is_null($data->detail_his_inquiries->date_2)){
                    $template_covid->setValue('details_date_2',$none_info);
                }
                $template_covid->setValue('details_location_2', ($data->detail_his_inquiries->location_2));
                if(is_null($data->detail_his_inquiries->location_2)){
                    $template_covid->setValue('details_location_2',$none_info);
                }
                $template_covid->setValue('details_person_2', ($data->detail_his_inquiries->person_2));
                if(is_null($data->detail_his_inquiries->person_2)){
                    $template_covid->setValue('details_person_2',$none_info);
                }

                //--------------------------------------- 3 ------------------------------------------- //

                $template_covid->setValue('details_date_3', ($data->detail_his_inquiries->date_3));
                if(is_null($data->detail_his_inquiries->date_3)){
                    $template_covid->setValue('details_date_3',$none_info);
                }
                $template_covid->setValue('details_location_3', ($data->detail_his_inquiries->location_3));
                if(is_null($data->detail_his_inquiries->location_3)){
                    $template_covid->setValue('details_location_3',$none_info);
                }
                $template_covid->setValue('details_person_3', ($data->detail_his_inquiries->person_3));
                if(is_null($data->detail_his_inquiries->person_3)){
                    $template_covid->setValue('details_person_3',$none_info);
                }

                //--------------------------------------- 4 ------------------------------------------- //

                $template_covid->setValue('details_date_4', ($data->detail_his_inquiries->date_4));
                if(is_null($data->detail_his_inquiries->date_4)){
                    $template_covid->setValue('details_date_4',$none_info);
                }
                $template_covid->setValue('details_location_4', ($data->detail_his_inquiries->location_4));
                if(is_null($data->detail_his_inquiries->location_4)){
                    $template_covid->setValue('details_location_4',$none_info);
                }
                $template_covid->setValue('details_person_4', ($data->detail_his_inquiries->person_4));
                if(is_null($data->detail_his_inquiries->person_4)){
                    $template_covid->setValue('details_person_4',$none_info);
                }

                //--------------------------------------- 5 ------------------------------------------- //

                $template_covid->setValue('details_date_5', ($data->detail_his_inquiries->date_5));
                if(is_null($data->detail_his_inquiries->date_5)){
                    $template_covid->setValue('details_date_5',$none_info);
                }
                $template_covid->setValue('details_location_5', ($data->detail_his_inquiries->location_5));
                if(is_null($data->detail_his_inquiries->location_5)){
                    $template_covid->setValue('details_location_5',$none_info);
                }
                $template_covid->setValue('details_person_5', ($data->detail_his_inquiries->person_5));
                if(is_null($data->detail_his_inquiries->person_5)){
                    $template_covid->setValue('details_person_5',$none_info);
                }

                //--------------------------------------- 6 ------------------------------------------- //

                $template_covid->setValue('details_date_6', ($data->detail_his_inquiries->date_6));
                if(is_null($data->detail_his_inquiries->date_6)){
                    $template_covid->setValue('details_date_6',$none_info);
                }
                $template_covid->setValue('details_location_6', ($data->detail_his_inquiries->location_6));
                if(is_null($data->detail_his_inquiries->location_6)){
                    $template_covid->setValue('details_location_6',$none_info);
                }
                $template_covid->setValue('details_person_6', ($data->detail_his_inquiries->person_6));
                if(is_null($data->detail_his_inquiries->person_6)){
                    $template_covid->setValue('details_person_6',$none_info);
                }

                //--------------------------------------- 7 ------------------------------------------- //

                $template_covid->setValue('details_date_7', ($data->detail_his_inquiries->date_7));
                if(is_null($data->detail_his_inquiries->date_7)){
                    $template_covid->setValue('details_date_7',$none_info);
                }
                $template_covid->setValue('details_location_7', ($data->detail_his_inquiries->location_7));
                if(is_null($data->detail_his_inquiries->location_7)){
                    $template_covid->setValue('details_location_7',$none_info);
                }
                $template_covid->setValue('details_person_7', ($data->detail_his_inquiries->person_7));
                if(is_null($data->detail_his_inquiries->person_7)){
                    $template_covid->setValue('details_person_7',$none_info);
                }

                //--------------------------------------- 8 ------------------------------------------- //

                $template_covid->setValue('details_date_8', ($data->detail_his_inquiries->date_8));
                if(is_null($data->detail_his_inquiries->date_8)){
                    $template_covid->setValue('details_date_8',$none_info);
                }
                $template_covid->setValue('details_location_8', ($data->detail_his_inquiries->location_8));
                if(is_null($data->detail_his_inquiries->location_8)){
                    $template_covid->setValue('details_location_8',$none_info);
                }
                $template_covid->setValue('details_person_8', ($data->detail_his_inquiries->person_8));
                if(is_null($data->detail_his_inquiries->person_8)){
                    $template_covid->setValue('details_person_8',$none_info);
                }

                //--------------------------------------- 9 ------------------------------------------- //

                $template_covid->setValue('details_date_9', ($data->detail_his_inquiries->date_9));
                if(is_null($data->detail_his_inquiries->date_9)){
                    $template_covid->setValue('details_date_9',$none_info);
                }
                $template_covid->setValue('details_location_9', ($data->detail_his_inquiries->location_9));
                if(is_null($data->detail_his_inquiries->location_9)){
                    $template_covid->setValue('details_location_9',$none_info);
                }
                $template_covid->setValue('details_person_9', ($data->detail_his_inquiries->person_9));
                if(is_null($data->detail_his_inquiries->person_9)){
                    $template_covid->setValue('details_person_9',$none_info);
                }

                //--------------------------------------- 10 ------------------------------------------- //

                $template_covid->setValue('details_date_10', ($data->detail_his_inquiries->date_10));
                if(is_null($data->detail_his_inquiries->date_10)){
                    $template_covid->setValue('details_date_10',$none_info);
                }
                $template_covid->setValue('details_location_10', ($data->detail_his_inquiries->location_10));
                if(is_null($data->detail_his_inquiries->location_10)){
                    $template_covid->setValue('details_location_10',$none_info);
                }
                $template_covid->setValue('details_person_10', ($data->detail_his_inquiries->person_10));
                if(is_null($data->detail_his_inquiries->person_10)){
                    $template_covid->setValue('details_person_10',$none_info);
                }

                //--------------------------------------- 11 ------------------------------------------- //

                $template_covid->setValue('details_date_11', ($data->detail_his_inquiries->date_11));
                if(is_null($data->detail_his_inquiries->date_11)){
                    $template_covid->setValue('details_date_11',$none_info);
                }
                $template_covid->setValue('details_location_11', ($data->detail_his_inquiries->location_11));
                if(is_null($data->detail_his_inquiries->location_11)){
                    $template_covid->setValue('details_location_11',$none_info);
                }
                $template_covid->setValue('details_person_11', ($data->detail_his_inquiries->person_11));
                if(is_null($data->detail_his_inquiries->person_11)){
                    $template_covid->setValue('details_person_11',$none_info);
                }

                //--------------------------------------- 12 ------------------------------------------- //

                $template_covid->setValue('details_date_12', ($data->detail_his_inquiries->date_12));
                if(is_null($data->detail_his_inquiries->date_12)){
                    $template_covid->setValue('details_date_12',$none_info);
                }
                $template_covid->setValue('details_location_12', ($data->detail_his_inquiries->location_12));
                if(is_null($data->detail_his_inquiries->location_12)){
                    $template_covid->setValue('details_location_12',$none_info);
                }
                $template_covid->setValue('details_person_12', ($data->detail_his_inquiries->person_12));
                if(is_null($data->detail_his_inquiries->person_12)){
                    $template_covid->setValue('details_person_12',$none_info);
                }

                //--------------------------------------- 13 ------------------------------------------- //

                $template_covid->setValue('details_date_13', ($data->detail_his_inquiries->date_13));
                if(is_null($data->detail_his_inquiries->date_13)){
                    $template_covid->setValue('details_date_13',$none_info);
                }
                $template_covid->setValue('details_location_13', ($data->detail_his_inquiries->location_13));
                if(is_null($data->detail_his_inquiries->location_13)){
                    $template_covid->setValue('details_location_13',$none_info);
                }
                $template_covid->setValue('details_person_13', ($data->detail_his_inquiries->person_13));
                if(is_null($data->detail_his_inquiries->person_13)){
                    $template_covid->setValue('details_person_13',$none_info);
                }

                //--------------------------------------- 14 ------------------------------------------- //

                $template_covid->setValue('details_date_14', ($data->detail_his_inquiries->date_14));
                if(is_null($data->detail_his_inquiries->date_14)){
                    $template_covid->setValue('details_date_14',$none_info);
                }
                $template_covid->setValue('details_location_14', ($data->detail_his_inquiries->location_14));
                if(is_null($data->detail_his_inquiries->location_14)){
                    $template_covid->setValue('details_location_14',$none_info);
                }
                $template_covid->setValue('details_person_14', ($data->detail_his_inquiries->person_14));
                if(is_null($data->detail_his_inquiries->person_14)){
                    $template_covid->setValue('details_person_14',$none_info);
                }


        //------------------------------------------------------------------------------------ //

        //------------------------------------ ค้นหาผู้สัมผัส ------------------------------------ //

            $template_covid->setValue('search_number', ($data->search_id_inquiries->id));
            if(is_null($data->search_id_inquiries->id)){
                $template_covid->setValue('search_number',$none_info);
            }

            $template_covid->setValue('search_name', ($data->search_id_inquiries->name));
            if(is_null($data->search_id_inquiries->name)){
                $template_covid->setValue('search_name',$none_info);
            }

            if($data->search_id_inquiries->sex == '0'){
                $template_covid->setValue("search_sex",'ชาย');
            }else{
                $template_covid->setValue("search_sex",'หญิง');
            }

            $template_covid->setValue('search_age', ($data->search_id_inquiries->age));
            if(is_null($data->search_id_inquiries->age)){
                $template_covid->setValue('search_age',$none_info);
            }

            $template_covid->setValue('search_add', ($data->search_id_inquiries->add));
            if(is_null($data->search_id_inquiries->add)){
                $template_covid->setValue('search_add',$none_info);
            }

            $template_covid->setValue('search_tel', ($data->search_id_inquiries->tel));
            if(is_null($data->search_id_inquiries->tel)){
                $template_covid->setValue('search_tel',$none_info);
            }

            $template_covid->setValue('search_datetush', ($data->search_id_inquiries->datetush));
            if(is_null($data->search_id_inquiries->datetush)){
                $template_covid->setValue('search_datetush',$none_info);
            }

            $template_covid->setValue('search_detailstuch', ($data->search_id_inquiries->detailstuch));
            if(is_null($data->search_id_inquiries->detailstuch)){
                $template_covid->setValue('search_detailstuch',$none_info);
            }

            $template_covid->setValue('search_sick', ($data->search_id_inquiries->sick));
            if(is_null($data->search_id_inquiries->sick)){
                $template_covid->setValue('search_sick',$none_info);
            }

            $template_covid->setValue('search_sickdate', ($data->search_id_inquiries->sickdate));
            if(is_null($data->search_id_inquiries->sickdate)){
                $template_covid->setValue('search_sickdate',$none_info);
            }

            $template_covid->setValue('search_equipment', ($data->search_id_inquiries->equipment));
            if(is_null($data->search_id_inquiries->equipment)){
                $template_covid->setValue('search_equipment',$none_info);
            }

            $template_covid->setValue('search_datevaccine', ($data->search_id_inquiries->datevaccine));
            if(is_null($data->search_id_inquiries->datevaccine)){
                $template_covid->setValue('search_datevaccine',$none_info);
            }

        //------------------------------------------------------------------------------------ //

        $fileName = $data->user->first_name. " ".$data->user->last_name." (แบบสอบสวนผู้ป่วยติดเชื้อ Covid-19 [KSVR])";
        $template_covid->saveAs($fileName . '.docx');
        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }

    public function clinic_show($id)
    {
        dd($id);
        // $data = Covid19_inquiry_form::find($id);

        //     $name_title = Title_name::all();
        //     $home_type = Home_type::all();
        //     $name_vaccine = Name_vaccine_covid19_inquiry::all();

        //     return view('pages.covid.inquiry_form.clinic_show',compact('name_title','home_type','name_vaccine'))->withData($data);

    }

    public function clinic_edit($id)
    {
        $data = Covid19_inquiry_form::find($id);

            $name_title = Title_name::all();
            $home_type = Home_type::all();
            $name_vaccine = Name_vaccine_covid19_inquiry::all();

            return view('pages.covid.Inquiry_form.clinic_edit',compact('name_title','home_type','name_vaccine'))->withData($data);

    }

    public function clinic_update(Request $request, $id)
    {
        $data = Covid19_inquiry_form::find($id);

        $name_title = Title_name::all();
        $home_type = Home_type::all();
        $name_vaccine = Name_vaccine_covid19_inquiry::all();

        // ข้อมูลคลินิกผู้ป่วย //
            $data->cli_cov_inquiries->datesick = $request->datesick;
            $data->cli_cov_inquiries->first = $request->first;
            $data->cli_cov_inquiries->namehosbe = $request->namehosbe;
            $data->cli_cov_inquiries->namehosup = $request->namehosup;
            $data->cli_cov_inquiries->district_id = $request->district_id;
            $data->cli_cov_inquiries->patientdate_id = $request->patientdate_id;
            $data->cli_cov_inquiries->x_ray_id = $request->x_ray_id;
            $data->cli_cov_inquiries->cbc_id = $request->cbc_id;
            $data->cli_cov_inquiries->test_id = $request->test_id;
            $data->cli_cov_inquiries->pcr_id = $request->pcr_id;
            $data->cli_cov_inquiries->antibody_id = $request->antibody_id;
            $data->cli_cov_inquiries->type_id = $request->type_id;
            $data->cli_cov_inquiries->medicine_id = $request->medicine_id;
            $data->cli_cov_inquiries->status_id = $request->status_id;

            $data->cli_cov_inquiries->save();

        // ------------------------------------------------------------------------------------------------------------------------ //

        // ข้อมูลอาการในวันที่พบ //
            $data->patient_in_inquiries->fever = $request->fever;
            $data->patient_in_inquiries->fever_degree = $request->fever_degree;
            $data->patient_in_inquiries->fever_oxygen = $request->fever_oxygen;
            $data->patient_in_inquiries->ventilator = $request->ventilator;
            $data->patient_in_inquiries->cough = $request->cough;
            $data->patient_in_inquiries->neck = $request->neck;
            $data->patient_in_inquiries->mascle = $request->mascle;
            $data->patient_in_inquiries->runny = $request->runny;
            $data->patient_in_inquiries->phlegm = $request->phlegm;
            $data->patient_in_inquiries->breathe = $request->breathe;
            $data->patient_in_inquiries->headache = $request->headache;
            $data->patient_in_inquiries->liquid = $request->liquid;
            $data->patient_in_inquiries->nose = $request->nose;
            $data->patient_in_inquiries->tongue = $request->tongue;
            $data->patient_in_inquiries->eye = $request->eye;
            $data->patient_in_inquiries->rash = $request->rash;
            $data->patient_in_inquiries->rash_details = $request->rash_details;
            $data->patient_in_inquiries->other = $request->other_fisrt;
            $data->patient_in_inquiries->other_details = $request->other_details_fisrt;


            $data->patient_in_inquiries->save();

        // ------------------------------------------------------------------------------------------------------------------------ //

        // ข้อมูล x-rey ปอด //
            $data->cli_cov_inquiries->xray_in_inquiries->date = $request->date_xrey;
            $data->cli_cov_inquiries->xray_in_inquiries->result = $request->result_xrey;

            $data->cli_cov_inquiries->xray_in_inquiries->save();

        // ------------------------------------------------------------------------------------------------------------------------ //

        // ข้อมูล cbcs //
            $data->cbc_in_inquiries->date = $request->date_cbc;
            $data->cbc_in_inquiries->hb = $request->hb;
            $data->cbc_in_inquiries->htc = $request->htc;
            $data->cbc_in_inquiries->platelet = $request->platelet;
            $data->cbc_in_inquiries->wbc = $request->wbc;
            $data->cbc_in_inquiries->n = $request->n;
            $data->cbc_in_inquiries->l = $request->l;
            $data->cbc_in_inquiries->atyp = $request->atyp;
            $data->cbc_in_inquiries->mono = $request->mono;
            $data->cbc_in_inquiries->other_details = $request->other_details_cbc;

            $data->cbc_in_inquiries->save();

        // ------------------------------------------------------------------------------------------------------------------------ //

        // ข้อมูล influenza test //
            $data->test_in_inquiries->type_check_covid_id = $request->type_check_covid_id;
            $data->test_in_inquiries->nagative = $request->nagative;
            $data->test_in_inquiries->positive = $request->positive;
            $data->test_in_inquiries->flua = $request->flua;
            $data->test_in_inquiries->flub = $request->flub;

            $data->test_in_inquiries->save();

        // ------------------------------------------------------------------------------------------------------------------------

        // ข้อมูล pcrs //
            $data->cli_cov_inquiries->pcr_test_inquiries->number = $request->number_pcr;
            $data->cli_cov_inquiries->pcr_test_inquiries->date = $request->date_pcr;
            $data->cli_cov_inquiries->pcr_test_inquiries->example = $request->example_pcr;
            $data->cli_cov_inquiries->pcr_test_inquiries->location = $request->location_pcr;
            $data->cli_cov_inquiries->pcr_test_inquiries->detected = $request->detected_pcr;
            $data->cli_cov_inquiries->pcr_test_inquiries->n_detected = $request->n_detected_pcr;

            $data->cli_cov_inquiries->pcr_test_inquiries->save();

        // ------------------------------------------------------------------------------------------------------------------------

        // ข้อมูล antibody //
            $data->cli_cov_inquiries->anti_in_inquiries->number = $request->number_anti;
            $data->cli_cov_inquiries->anti_in_inquiries->date = $request->date_anti;
            $data->cli_cov_inquiries->anti_in_inquiries->example = $request->example_anti;
            $data->cli_cov_inquiries->anti_in_inquiries->location = $request->location_anti;
            $data->cli_cov_inquiries->anti_in_inquiries->result = $request->result_anti;

            $data->cli_cov_inquiries->anti_in_inquiries->save();

        // ------------------------------------------------------------------------------------------------------------------------

        // ข้อมูล patient type //
            $data->patient_type_inquiries->patient = $request->patient;
            $data->patient_type_inquiries->date = $request->date_admit;
            $data->patient_type_inquiries->diagnoes = $request->diagnoes_admit;

            $data->patient_type_inquiries->save();

        // ------------------------------------------------------------------------------------------------------------------------

        // ข้อมูลการให้ยา (medicine) //
            $data->medic_in_inquiries->give = $request->give;
            $data->medic_in_inquiries->first_dose = $request->first_dose;
            $data->medic_in_inquiries->remdesivir = $request->remdesivir;
            $data->medic_in_inquiries->favipiravir = $request->favipiravir;
            $data->medic_in_inquiries->lopinavir = $request->lopinavir;
            $data->medic_in_inquiries->darunavir = $request->darunavir;
            $data->medic_in_inquiries->ritonavir = $request->ritonavir;
            $data->medic_in_inquiries->ch = $request->ch;
            $data->medic_in_inquiries->other = $request->other_medic;
            $data->medic_in_inquiries->other_details = $request->other_details_medic;

            $data->medic_in_inquiries->save();

        // ------------------------------------------------------------------------------------------------------------------------

        // ข้อมูลสถานะ (statuses) //
            $data->status_in_inquiries->disappear = $request->disappear;
            $data->status_in_inquiries->not = $request->not;
            $data->status_in_inquiries->died = $request->died;
            $data->status_in_inquiries->send = $request->send;
            $data->status_in_inquiries->sendhos = $request->sendhos;
            $data->status_in_inquiries->other = $request->other_status;
            $data->status_in_inquiries->other_details = $request->other_details_status;

            $data->status_in_inquiries->save();

        // ------------------------------------------------------------------------------------------------------------------------

        return redirect()->route('inquiry-form-Covid.clinic', $data->id)->with(['message' => 'แก้ไขข้อมูลเรียบร้อย!']);
    }

    public function print(Covid19_inquiry_form $covid19_inquiry_form, $id)
    {
        $data = Covid19_inquiry_form::find($id);
        // dd($data );
        return view('pages.covid.Inquiry_form.print')->withData($data);
    }
}

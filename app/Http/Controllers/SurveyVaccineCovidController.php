<?php

namespace App\Http\Controllers;

use App\Survey_vaccine_covid;
use Illuminate\Http\Request;

class SurveyVaccineCovidController extends Controller
{
    public function index()
    {

        return view('pages.covid.survey_vaccine.index');

    }

    public function store(Request $request)
    {


        $svc = new Survey_vaccine_covid();

        $svc->date = DateData($request->date);
        $svc->inject = $request->inject;

        if($request->target_group == '1'){
            $svc->target_group = $request->target_group;

           $request->validate([

                    "medical_personnel" => 'required',
                ],
                [

                    'medical_personnel.required'    => 'กรุณาเลือกให้ครบถ้วน ( 3. กลุ่มเป้าหมายรับวัคซีน -> บุคลากรทางการแพทย์ )',
                ]
             );

            // dd($request);

            $svc->medical_personnel = $request->medical_personnel;
            $svc->military_unit ='0';
            $svc->years_old = '0';
            $svc->chronic_disease = '0';
            $svc->general_public = '0';

            $svc->military_unit1 = '0';
            $svc->military_unit2 = '0';
            $svc->military_unit3 = '0';


        } else if($request->target_group == '2'){
            $svc->target_group = $request->target_group;

            $svc->medical_personnel = '0';

            $this->validate(
                $request,
                [
                    "military_unit" => 'required',
                ],
                [
                    'military_unit.required'    => 'กรุณาเลือกให้ครบถ้วน ( 3. กลุ่มเป้าหมายรับวัคซีน -> หน่วยทหาร )',
                ]
             );


            $svc->military_unit = $request->military_unit;
            $svc->years_old = '0';
            $svc->chronic_disease = '0';
            $svc->general_public = '0';

            if($request->military_unit == '1'){
            $svc->military_unit1 = $request->military_unit1;

            $this->validate(
                $request,
                [
                    "military_unit1" => 'required',
                ],
                [
                    'military_unit1.required'    => 'กรุณาเลือกให้ครบถ้วน ( 3. กลุ่มเป้าหมายรับวัคซีน -> หน่วยทหาร -> หน่วย มทบ.29 )',
                ]
             );

            $svc->military_unit2 = '0';
            $svc->military_unit3 = '0';
            }
            else if($request->military_unit == '2'){
                $svc->military_unit1 = '0';

                $this->validate(
                    $request,
                    [
                        "military_unit2" => 'required',
                    ],
                    [
                        'military_unit2.required'    => 'กรุณาเลือกให้ครบถ้วน ( 3. กลุ่มเป้าหมายรับวัคซีน -> หน่วยทหาร -> หน่วย ร.3 )',
                    ]
                 );

                $svc->military_unit2 = $request->military_unit2;
                $svc->military_unit3 = '0';
            }
            else {
                $svc->military_unit1 = '0';
                $svc->military_unit2 = '0';

                $this->validate(
                    $request,
                    [
                        "military_unit3" => 'required',
                    ],
                    [
                        'military_unit3.required'    => 'กรุณาเลือกให้ครบถ้วน ( 3. กลุ่มเป้าหมายรับวัคซีน -> หน่วยทหาร -> หน่วย ร.3 พัน 1 )',
                    ]
                 );

                $svc->military_unit3 = $request->military_unit3;
            }

        } else if($request->target_group == '3'){
            $svc->target_group = $request->target_group;

            $this->validate(
                $request,
                [
                    "years_old" => 'required',
                ],
                [
                    'years_old.required'    => 'กรุณาเลือกให้ครบถ้วน ( 3. กลุ่มเป้าหมายรับวัคซีน -> กลุ่มอายุ 60 ปีขึ้นไป )',
                ]
             );

            $svc->medical_personnel =  '0';
            $svc->military_unit =  '0';
            $svc->years_old = $request->years_old;
            $svc->chronic_disease = '0';
            $svc->general_public = '0';

            $svc->military_unit1 = '0';
            $svc->military_unit2 = '0';
            $svc->military_unit3 = '0';
        } else if($request->target_group == '4'){
            $svc->target_group = $request->target_group;
            $svc->medical_personnel = '0';
            $svc->military_unit = '0';
            $svc->years_old = '0';

            $this->validate(
                $request,
                [
                    "chronic_disease" => 'required',
                ],
                [
                    'chronic_disease.required'    => 'กรุณาเลือกให้ครบถ้วน ( 3. กลุ่มเป้าหมายรับวัคซีน -> กลุ่มโรคเรื้อรัง )',
                ]
             );

            $svc->chronic_disease = $request->chronic_disease;
            $svc->general_public = '0';

            $svc->military_unit1 = '0';
            $svc->military_unit2 = '0';
            $svc->military_unit3 = '0';
        } else if($request->target_group == '5'){
            $svc->target_group = $request->target_group;
            $svc->medical_personnel = '0';
            $svc->military_unit = '0';
            $svc->years_old = '0';
            $svc->chronic_disease = '0';

            $this->validate(
                $request,
                [
                    "general_public" => 'required',
                ],
                [
                    'general_public.required'    => 'กรุณาเลือกให้ครบถ้วน ( 3. กลุ่มเป้าหมายรับวัคซีน -> ประชาชนทั่วไป )',
                ]
             );

            $svc->general_public = $request->general_public;

            $svc->military_unit1 = '0';
            $svc->military_unit2 = '0';
            $svc->military_unit3 = '0';
        }
        // else{
        //     $svc->target_group = $request->target_group;
        //     $svc->medical_personnel = $request->medical_personnel;
        //     $svc->military_unit = $request->military_unit;
        //     $svc->years_old = $request->years_old;
        //     $svc->chronic_disease = $request->chronic_disease;
        //     $svc->general_public = $request->general_public;

        //     $svc->military_unit1 = $request->military_unit1;
        //     $svc->military_unit2 = $request->military_unit2;
        //     $svc->military_unit3 = $request->military_unit3;
        // }

        $svc->save();

        return redirect()->route('survey_vaccine_covid.end');
    }

    public function end()
    {

        return view('pages.covid.survey_vaccine.end');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clinic_covid19_inquiry;
use App\Antibody;
use App\Cbc;
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


class ClinicCovid19InquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
     * @param  \App\Clinic_covid19_inquiry  $clinic_covid19_inquiry
     * @return \Illuminate\Http\Response
     */
    public function show(Clinic_covid19_inquiry $clinic_covid19_inquiry, $id)
    {
        // dd($id);
        $data = Covid19_inquiry_form::find($id);

            $name_title = Title_name::all();
            $home_type = Home_type::all();
            $name_vaccine = Name_vaccine_covid19_inquiry::all();

            return view('pages.covid.inquiry_form.clinic_show',compact('name_title','home_type','name_vaccine'))->withData($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clinic_covid19_inquiry  $clinic_covid19_inquiry
     * @return \Illuminate\Http\Response
     */
    public function edit(Clinic_covid19_inquiry $clinic_covid19_inquiry, $id)
    {
        $data = Covid19_inquiry_form::find($id);

        $name_title = Title_name::all();
        $home_type = Home_type::all();
        $name_vaccine = Name_vaccine_covid19_inquiry::all();

        return view('pages.covid.inquiry_form.clinic_edit',compact('name_title','home_type','name_vaccine'))->withData($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clinic_covid19_inquiry  $clinic_covid19_inquiry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clinic_covid19_inquiry $clinic_covid19_inquiry, $id)
    {
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clinic_covid19_inquiry  $clinic_covid19_inquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clinic_covid19_inquiry $clinic_covid19_inquiry)
    {
        //
    }
}

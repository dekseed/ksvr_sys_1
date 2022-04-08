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
    public function create($id)
    {
        $data = Covid19_inquiry_form::find($id);
        //dd($data);
        $name_title = Title_name::all();
        $home_type = Home_type::all();
        $name_vaccine = Name_vaccine_covid19_inquiry::all();

        return view('pages.covid.inquiry_form.clinic_create',compact('name_title','home_type','name_vaccine'))->withData($data);
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

        // ข้อมูลการให้ยา (medicine) //

            $medic_in_inquiries = new Medicine;
            $medic_in_inquiries->give = $request->give;
            $medic_in_inquiries->first_dose = $request->first_dose;
            $medic_in_inquiries->remdesivir = $request->remdesivir;
            $medic_in_inquiries->favipiravir = $request->favipiravir;
            $medic_in_inquiries->lopinavir = $request->lopinavir;
            $medic_in_inquiries->darunavir = $request->darunavir;
            $medic_in_inquiries->ritonavir = $request->ritonavir;
            $medic_in_inquiries->ch = $request->ch;
            $medic_in_inquiries->other = $request->other_medic;
            $medic_in_inquiries->other_details = $request->other_details_medic;

            $medic_in_inquiries->save();

        // ------------------------------------------------------------------------------------------------------------------------
        // ข้อมูลอาการในวันที่พบ //

            $patient_in_inquiries = new Patient;
            $patient_in_inquiries->fever = $request->fever;
            $patient_in_inquiries->fever_degree = $request->fever_degree;
            $patient_in_inquiries->fever_oxygen = $request->fever_oxygen;
            $patient_in_inquiries->ventilator = $request->ventilator;
            $patient_in_inquiries->cough = $request->cough;
            $patient_in_inquiries->neck = $request->neck;
            $patient_in_inquiries->mascle = $request->mascle;
            $patient_in_inquiries->runny = $request->runny;
            $patient_in_inquiries->phlegm = $request->phlegm;
            $patient_in_inquiries->breathe = $request->breathe;
            $patient_in_inquiries->headache = $request->headache;
            $patient_in_inquiries->liquid = $request->liquid;
            $patient_in_inquiries->nose = $request->nose;
            $patient_in_inquiries->tongue = $request->tongue;
            $patient_in_inquiries->eye = $request->eye;
            $patient_in_inquiries->rash = $request->rash;
            $patient_in_inquiries->rash_details = $request->rash_details;
            $patient_in_inquiries->other = $request->other_fisrt;
            $patient_in_inquiries->other_details = $request->other_details_fisrt;


            $patient_in_inquiries->save();

        // ------------------------------------------------------------------------------------------------------------------------ //
        // ข้อมูล influenza test //
        $test_in_inquiries = new Test;
        $test_in_inquiries->type_check_covid_id = $request->type_check_covid_id;
        $test_in_inquiries->nagative = $request->nagative;
        $test_in_inquiries->positive = $request->positive;
        $test_in_inquiries->flua = $request->flua;
        $test_in_inquiries->flub = $request->flub;

        $test_in_inquiries->save();

        // ------------------------------------------------------------------------------------------------------------------------

        // ข้อมูล x-rey ปอด //
        $xray_in_inquiries = new X_rey;
        $xray_in_inquiries->checked = $request->x_ray;
        $xray_in_inquiries->date = $request->date_xrey;
        $xray_in_inquiries->result = $request->result_xrey;

        $xray_in_inquiries->save();

        // ------------------------------------------------------------------------------------------------------------------------ //

        // ข้อมูลสถานะ (statuses) //

        $status_in_inquiries = new Status;
        $status_in_inquiries->disappear = $request->disappear;
        $status_in_inquiries->not = $request->not;
        $status_in_inquiries->died = $request->died;
        $status_in_inquiries->send = $request->send;
        $status_in_inquiries->sendhos = $request->sendhos;
        $status_in_inquiries->other = $request->other_status;
        $status_in_inquiries->other_details = $request->other_details_status;

        $status_in_inquiries->save();

        // ------------------------------------------------------------------------------------------------------------------------

        // ข้อมูล cbcs //
        $cbc_in_inquiries = new Cbc;
        $cbc_in_inquiries->date = $request->date_cbc;
        $cbc_in_inquiries->hb = $request->hb;
        $cbc_in_inquiries->hct = $request->hct;
        $cbc_in_inquiries->platelet = $request->platelet;
        $cbc_in_inquiries->wbc = $request->wbc;
        $cbc_in_inquiries->n = $request->n;
        $cbc_in_inquiries->l = $request->l;
        $cbc_in_inquiries->atyp = $request->atyp;
        $cbc_in_inquiries->mono = $request->mono;
        $cbc_in_inquiries->other_details = $request->other_details_cbc;

        $cbc_in_inquiries->save();

        // ------------------------------------------------------------------------------------------------------------------------ //
        // ข้อมูล antibody //

        $anti_in_inquiries = new Antibody;

        // $anti_in_inquiries->number = $request->number_anti;
        $anti_in_inquiries->date = $request->date_anti;
        $anti_in_inquiries->example = $request->example_anti;
        $anti_in_inquiries->location = $request->location_anti;
        $anti_in_inquiries->result = $request->result_anti;

        $anti_in_inquiries->save();

        // ------------------------------------------------------------------------------------------------------------------------
        // ข้อมูล pcrs //
        $pcr_test_inquiries = new Pcr;
        $pcr_test_inquiries->number = $request->number_pcr;
        $pcr_test_inquiries->date = $request->date_pcr;
        $pcr_test_inquiries->example = $request->example_pcr;
        $pcr_test_inquiries->location = $request->location_pcr;
        $pcr_test_inquiries->detected = $request->detected_pcr;

        $pcr_test_inquiries->save();

        // ------------------------------------------------------------------------------------------------------------------------


        // ข้อมูล patient type //
        $patient_type_inquiries = new Patient_type;

        $patient_type_inquiries->patient = $request->patient;
        $patient_type_inquiries->date = $request->date_admit;
        $patient_type_inquiries->diagnoes = $request->diagnoes_admit;

        $patient_type_inquiries->save();

        // ------------------------------------------------------------------------------------------------------------------------

        // ข้อมูลคลินิกผู้ป่วย //

        $data_cli_cov_inquiries = new Clinic_covid19_inquiry();
        $data_cli_cov_inquiries->datesick = $request->datesick;
        $data_cli_cov_inquiries->first = $request->first;
        $data_cli_cov_inquiries->namehosbe = $request->namehosbe;
        $data_cli_cov_inquiries->namehosup = $request->namehosup;
        $data_cli_cov_inquiries->district = $request->district;
        $data_cli_cov_inquiries->district_first = $request->district_first;

        $data_cli_cov_inquiries->patient_id = $patient_in_inquiries->id;
        $data_cli_cov_inquiries->x_ray_id = $xray_in_inquiries->id;
        $data_cli_cov_inquiries->cbc_id = $cbc_in_inquiries->id;
        $data_cli_cov_inquiries->test_id = $test_in_inquiries->id;
        $data_cli_cov_inquiries->pcr_id = $pcr_test_inquiries->id;
        $data_cli_cov_inquiries->antibody_id = $anti_in_inquiries->id;
        $data_cli_cov_inquiries->type_id = $patient_type_inquiries->id;
        $data_cli_cov_inquiries->medicine_id = $medic_in_inquiries->id;
        $data_cli_cov_inquiries->status_id = $status_in_inquiries->id;
        //
        $data_cli_cov_inquiries->save();

    // ------------------------------------------------------------------------------------------------------------------------ //

        $data = Covid19_inquiry_form::find($request->inquiry_form_id);
        $data->code = $request->code;
        $data->clinic_id = $data_cli_cov_inquiries->id;
        $data->save();

        return redirect()->route('InquiryFormCovid.show', $data->id)->with(['message' => 'แก้ไขข้อมูลเรียบร้อย!']);
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

            return view('pages.covid.Inquiry_form.clinic_show',compact('name_title','home_type','name_vaccine'))->withData($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clinic_covid19_inquiry  $clinic_covid19_inquiry
     * @return \Illuminate\Http\Response
     */
    public function edit(Clinic_covid19_inquiry $clinic_covid19_inquiry, $id)
    {
        dd($id);
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

            // $data = Covid19_inquiry_form::find($id);
            // $data->code = $request->code;

            // $name_title = Title_name::all();
            // $home_type = Home_type::all();
            // $name_vaccine = Name_vaccine_covid19_inquiry::all();

            // // ข้อมูลคลินิกผู้ป่วย //
            //     $data_cli_cov_inquiries->datesick = $request->datesick;
            //     $data_cli_cov_inquiries->first = $request->first;
            //     $data_cli_cov_inquiries->namehosbe = $request->namehosbe;
            //     $data_cli_cov_inquiries->namehosup = $request->namehosup;
            //     $data_cli_cov_inquiries->district = $request->district;
            //     $data_cli_cov_inquiries->patientdate_id = $request->patientdate_id;
            //     $data_cli_cov_inquiries->x_ray_id = $request->x_ray_id;
            //     $data_cli_cov_inquiries->cbc_id = $request->cbc_id;
            //     $data_cli_cov_inquiries->test_id = $request->test_id;
            //     $data_cli_cov_inquiries->pcr_id = $request->pcr_id;
            //     $data_cli_cov_inquiries->antibody_id = $request->antibody_id;
            //     $data_cli_cov_inquiries->type_id = $request->type_id;
            //     $data_cli_cov_inquiries->medicine_id = $request->medicine_id;
            //     $data_cli_cov_inquiries->status_id = $request->status_id;

            //     $data_cli_cov_inquiries->save();

            // // ------------------------------------------------------------------------------------------------------------------------ //

            // // ข้อมูลอาการในวันที่พบ //


            //     $patient_in_inquiries->fever = $request->fever;
            //     $patient_in_inquiries->fever_degree = $request->fever_degree;
            //     $patient_in_inquiries->fever_oxygen = $request->fever_oxygen;
            //     $patient_in_inquiries->ventilator = $request->ventilator;
            //     $patient_in_inquiries->cough = $request->cough;
            //     $patient_in_inquiries->neck = $request->neck;
            //     $patient_in_inquiries->mascle = $request->mascle;
            //     $patient_in_inquiries->runny = $request->runny;
            //     $patient_in_inquiries->phlegm = $request->phlegm;
            //     $patient_in_inquiries->breathe = $request->breathe;
            //     $patient_in_inquiries->headache = $request->headache;
            //     $patient_in_inquiries->liquid = $request->liquid;
            //     $patient_in_inquiries->nose = $request->nose;
            //     $patient_in_inquiries->tongue = $request->tongue;
            //     $patient_in_inquiries->eye = $request->eye;
            //     $patient_in_inquiries->rash = $request->rash;
            //     $patient_in_inquiries->rash_details = $request->rash_details;
            //     $patient_in_inquiries->other = $request->other_fisrt;
            //     $patient_in_inquiries->other_details = $request->other_details_fisrt;


            //     $patient_in_inquiries->save();

            // // ------------------------------------------------------------------------------------------------------------------------ //

            // // ข้อมูล x-rey ปอด //
            //     $data_cli_cov_inquiries->xray_in_inquiries->date = $request->date_xrey;
            //     $data_cli_cov_inquiries->xray_in_inquiries->result = $request->result_xrey;

            //     $data_cli_cov_inquiries->xray_in_inquiries->save();

            // // ------------------------------------------------------------------------------------------------------------------------ //

            // // ข้อมูล cbcs //
            //     $cbc_in_inquiries->date = $request->date_cbc;
            //     $cbc_in_inquiries->hb = $request->hb;
            //     $cbc_in_inquiries->htc = $request->htc;
            //     $cbc_in_inquiries->platelet = $request->platelet;
            //     $cbc_in_inquiries->wbc = $request->wbc;
            //     $cbc_in_inquiries->n = $request->n;
            //     $cbc_in_inquiries->l = $request->l;
            //     $cbc_in_inquiries->atyp = $request->atyp;
            //     $cbc_in_inquiries->mono = $request->mono;
            //     $cbc_in_inquiries->other_details = $request->other_details_cbc;

            //     $cbc_in_inquiries->save();

            // // ------------------------------------------------------------------------------------------------------------------------ //

            // // ข้อมูล influenza test //
            //     $test_in_inquiries->type_check_covid_id = $request->type_check_covid_id;
            //     $test_in_inquiries->nagative = $request->nagative;
            //     $test_in_inquiries->positive = $request->positive;
            //     $test_in_inquiries->flua = $request->flua;
            //     $test_in_inquiries->flub = $request->flub;

            //     $test_in_inquiries->save();

            // // ------------------------------------------------------------------------------------------------------------------------

            // // ข้อมูล pcrs //
            //     $pcr_test_inquiries->number = $request->number_pcr;
            //     $pcr_test_inquiries->date = $request->date_pcr;
            //     $pcr_test_inquiries->example = $request->example_pcr;
            //     $pcr_test_inquiries->location = $request->location_pcr;
            //     $pcr_test_inquiries->detected = $request->detected_pcr;
            //     $pcr_test_inquiries->n_detected = $request->n_detected_pcr;

            //     $pcr_test_inquiries->save();

            // // ------------------------------------------------------------------------------------------------------------------------

            // // ข้อมูล antibody //
            //     $data_cli_cov_inquiries->anti_in_inquiries->number = $request->number_anti;
            //     $data_cli_cov_inquiries->anti_in_inquiries->date = $request->date_anti;
            //     $data_cli_cov_inquiries->anti_in_inquiries->example = $request->example_anti;
            //     $data_cli_cov_inquiries->anti_in_inquiries->location = $request->location_anti;
            //     $data_cli_cov_inquiries->anti_in_inquiries->result = $request->result_anti;

            //     $data_cli_cov_inquiries->anti_in_inquiries->save();

            // // ------------------------------------------------------------------------------------------------------------------------

            // // ข้อมูล patient type //
            //     $data->patient_type_inquiries->patient = $request->patient;
            //     $data->patient_type_inquiries->date = $request->date_admit;
            //     $data->patient_type_inquiries->diagnoes = $request->diagnoes_admit;

            //     $data->patient_type_inquiries->save();

            // // ------------------------------------------------------------------------------------------------------------------------

            // // ข้อมูลการให้ยา (medicine) //
            //     $medic_in_inquiries->give = $request->give;
            //     $medic_in_inquiries->first_dose = $request->first_dose;
            //     $medic_in_inquiries->remdesivir = $request->remdesivir;
            //     $medic_in_inquiries->favipiravir = $request->favipiravir;
            //     $medic_in_inquiries->lopinavir = $request->lopinavir;
            //     $medic_in_inquiries->darunavir = $request->darunavir;
            //     $medic_in_inquiries->ritonavir = $request->ritonavir;
            //     $medic_in_inquiries->ch = $request->ch;
            //     $medic_in_inquiries->other = $request->other_medic;
            //     $medic_in_inquiries->other_details = $request->other_details_medic;

            //     $medic_in_inquiries->save();

            // // ------------------------------------------------------------------------------------------------------------------------

            // // ข้อมูลสถานะ (statuses) //
            //     $data->status_in_inquiries->disappear = $request->disappear;
            //     $data->status_in_inquiries->not = $request->not;
            //     $data->status_in_inquiries->died = $request->died;
            //     $data->status_in_inquiries->send = $request->send;
            //     $data->status_in_inquiries->sendhos = $request->sendhos;
            //     $data->status_in_inquiries->other = $request->other_status;
            //     $data->status_in_inquiries->other_details = $request->other_details_status;

            //     $data->status_in_inquiries->save();

            // // ------------------------------------------------------------------------------------------------------------------------

            // return redirect()->route('inquiry-form-Covid.clinic', $data->id)->with(['message' => 'แก้ไขข้อมูลเรียบร้อย!']);
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

<?php

namespace App\Http\Controllers;

use App\Check_up_admin_pol;
use App\Check_up_user_pol;
use Auth;
use Illuminate\Http\Request;

class CheckUpAdminPolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userPol = Check_up_user_pol::orderBy('created_at', 'desc')->get(); 
        //dd($user_pol);
        return view('pages.check_up.admin.unit_other.police')->withUserPol($userPol);
        // return Check_up_user_pol::all();
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

    public function add($id)
    {
         $userPol = Check_up_user_pol::find($id);
         return view('pages.check_up.admin.unit_other.add')->withUserPol($userPol);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $userPol = Check_up_user_pol::find($request->user_pols_id);

        $userPol->titlename = $request->titlename;
        $userPol->first_name = $request->first_name;
        $userPol->last_name = $request->last_name;
        $userPol->cid = $request->cid;
        $userPol->gender = $request->gender;
        $userPol->age = $request->age;
        $userPol->tel = $request->tel;
        $userPol->status_id = '2';   
        $userPol->save();


        $assessments = new Check_up_admin_pol;

        $assessments->user_pols_id = $request->user_pols_id;
        $assessments->user_id = Auth::user()->id;

        $assessments->BP_S = $request->BP_S;
        $assessments->BP_D = $request->BP_D;
        $assessments->PULSE = $request->Pulse;
        $assessments->Weight = $request->Weight;
        $assessments->Height = $request->Height;
        $assessments->BML = $request->BML;
        $assessments->WAIST = $request->WAIST;
        $assessments->WBC = $request->WBC;
        $assessments->RBC = $request->RBC;
        $assessments->Hb = $request->Hb;
        $assessments->Hct = $request->Hct;
        $assessments->MCV = $request->MCV;
        $assessments->PLT = $request->PLT;
        $assessments->NE = $request->NE;
        $assessments->LY = $request->LY;
        $assessments->MO = $request->MO;
        $assessments->EO = $request->EO;
        $assessments->BA = $request->BA;

        $assessments->UBlood = $request->UBlood;
        $assessments->ketone = $request->ketone;
        $assessments->Uglu = $request->Uglu;
        $assessments->Upro = $request->Upro;
        $assessments->URBC = $request->URBC;
        $assessments->UWBC = $request->UWBC;
        $assessments->UEPI = $request->UEPI;

        $assessments->StoolWBC = $request->StoolWBC;
        $assessments->StoolRBC = $request->StoolRBC;
        $assessments->Ova = $request->Ova;
        $assessments->Occult = $request->Occult;

        $assessments->FBS = $request->FBS;
        $assessments->BUN = $request->BUN;
        $assessments->Cre = $request->Cre;
        $assessments->Cric = $request->Cric;
        $assessments->Chol = $request->Chol;
        $assessments->Tg = $request->Tg;
        $assessments->HDL = $request->HDL;
        $assessments->LDL = $request->LDL;
        $assessments->ALK = $request->ALK;
        $assessments->SGOT = $request->SGOT;
        $assessments->SGPT = $request->SGPT;

        $assessments->CXR = $request->CXR;
        $assessments->congenital_disease = implode(' , ', $request->congenital_disease);
        if($request->medical_history == 'อื่นๆ'){

            $assessments->medical_history = $request->medical_history_other;

        }else{

            $assessments->medical_history = $request->medical_history;
            
        }
        
        $assessments->Smoke = $request->Smoke;
        $assessments->Drink = $request->Drink;
        $assessments->exercise = $request->exercise;



            if ($assessments->save()) {

                // Session::flash('success','ส่งข้อมูลเรียบร้อย!');
                return redirect()->route('police.show',  $userPol->id);
            } else {

                // Session::flash('error', 'Some thing went wrong!!');
                return back();
            }

            //$assessment = DB::table('assessment_2s')->select('fhf_id', 'first_name', 'last_name', 'householder')->where('householder', '1')->first();

            

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Check_up_admin_pol  $check_up_admin_pol
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd($id);
        $userPol = Check_up_user_pol::find($id);
        
         return view('pages.check_up.admin.unit_other.show')->withUserPol($userPol);

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Check_up_admin_pol  $check_up_admin_pol
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
     * @param  \App\Check_up_admin_pol  $check_up_admin_pol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Check_up_admin_pol $check_up_admin_pol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Check_up_admin_pol  $check_up_admin_pol
     * @return \Illuminate\Http\Response
     */
    public function destroy(Check_up_admin_pol $check_up_admin_pol)
    {
        //
    }
}

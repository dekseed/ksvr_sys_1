<?php

namespace App\Http\Controllers;

use App\Check_up_admin_pol;
use App\Check_up_user_pol;
use App\Kind_check_up;
use Auth;
use Illuminate\Http\Request;
use Session;
use DB;
use App\Exports\CheckupadminpolsExport;
use Maatwebsite\Excel\Facades\Excel;

class CheckUpAdminPolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
//    $data = DB::table('check_up_user_pols')
//             ->select('*','check_up_user_pols.id')
//             ->leftjoin('check_up_admin_pols', 'check_up_admin_pols.user_pols_id', '=', 'check_up_user_pols.id')
//             ->leftjoin('kind_check_ups', 'kind_check_ups.id', '=', 'check_up_user_pols.kind_check_up_id')
//             ->where('check_up_user_pols.kind_check_up_id', '=', 11)

//             ->get();

//  dd($data);

    if(request()->ajax())
     {
      
      if(!empty($request->fillter_kind) && empty($request->filler_year))
      {
      
        $data = DB::table('check_up_user_pols')
            ->select('*','check_up_user_pols.id')
            ->leftjoin('check_up_admin_pols', 'check_up_admin_pols.user_pols_id', '=', 'check_up_user_pols.id')
            ->leftjoin('kind_check_ups', 'kind_check_ups.id', '=', 'check_up_user_pols.kind_check_up_id')
            ->where('check_up_user_pols.kind_check_up_id', '=', $request->fillter_kind)
           // ->groupBy('user_pols_id')
                    
             ->get();

                return datatables()->of($data)
                ->addColumn('name', '{{$titlename}}{{$first_name}} {{$last_name}}')
                ->addColumn('kind_check_up_id', '{{$name}}')
                ->addColumn('link', function ($user){
                         return '<span class="edit"><a data-toggle="tooltip" data-placement="top" title="" 
                         data-original-title="ดูข้อมูล" class="btn btn-icon btn-success waves-effect light" 
                        href="' . route('police.show', $user->id) .'"><i class="feather icon-monitor"></i></a></span>'; 
                
                })
               
                ->rawColumns(['link', 'action'])
                ->toJson();


      }
      else if(!empty($request->filler_year) && empty($request->fillter_kind)){

        // date('Y', strtotime($user->year)) //แปลงวันเป็นปี

         $data = DB::table('check_up_admin_pols')
            ->select('*','check_up_admin_pols.id')
            ->leftjoin('check_up_user_pols', 'check_up_user_pols.id', '=', 'check_up_admin_pols.user_pols_id')
            ->leftjoin('kind_check_ups', 'kind_check_ups.id', '=', 'check_up_user_pols.kind_check_up_id')
            ->where('check_up_admin_pols.year',  $request->filler_year)
            ->orderBy('check_up_admin_pols.created_at', 'desc')
             ->get();

                 return datatables()->of($data)
                ->addColumn('name', '{{$titlename}}{{$first_name}} {{$last_name}}')
                ->addColumn('kind_check_up_id', '{{$name}}')
                ->addColumn('link', function ($user){
                         return '<span class="edit"><a data-toggle="tooltip" data-placement="top" title="" 
                         data-original-title="ดูข้อมูล" class="btn btn-icon btn-success waves-effect light" 
                        href="' . route('police.show', $user->user_pols_id) .'"><i class="feather icon-monitor"></i></a></span>'; 
                
                })
               
                ->rawColumns(['link', 'action'])
                ->toJson();


      }
        else if(!empty($request->filler_year) && !empty($request->fillter_kind)){

        
            $data = DB::table('check_up_admin_pols')
            ->select('*','check_up_admin_pols.id')
            ->leftjoin('check_up_user_pols', 'check_up_user_pols.id', '=', 'check_up_admin_pols.user_pols_id')
            ->leftjoin('kind_check_ups', 'kind_check_ups.id', '=', 'check_up_user_pols.kind_check_up_id')
            ->where('check_up_user_pols.kind_check_up_id', '=', $request->fillter_kind)
            ->where('check_up_admin_pols.year', '=',  $request->filler_year)
            ->orderBy('check_up_admin_pols.created_at', 'desc')
            ->get();
            
            return datatables()->of($data)
                ->addColumn('name', '{{$titlename}}{{$first_name}} {{$last_name}}')
                ->addColumn('kind_check_up_id', '{{$name}}')
                ->addColumn('link', function ($user){
                         return '<span class="edit"><a data-toggle="tooltip" data-placement="top" title="" 
                         data-original-title="ดูข้อมูล" class="btn btn-icon btn-success waves-effect light" 
                        href="' . route('police.show', $user->user_pols_id) .'"><i class="feather icon-monitor"></i></a></span>'; 
                
                })
               
                ->rawColumns(['link', 'action'])
                ->toJson();


        }
      else
      {
          
    //    $data = check_up_admin_pols::orderBy('created_at', 'desc')->get();
          $data = DB::table('check_up_user_pols')
            ->select('*','check_up_user_pols.id')
            ->leftjoin('check_up_admin_pols', 'check_up_admin_pols.user_pols_id', '=', 'check_up_user_pols.id')
            ->leftjoin('kind_check_ups', 'kind_check_ups.id', '=', 'check_up_user_pols.kind_check_up_id')
            ->orderBy('check_up_admin_pols.created_at', 'desc')
             ->get();

            return datatables()->of($data)
                ->addColumn('name', '{{$titlename}}{{$first_name}} {{$last_name}}')
                ->addColumn('kind_check_up_id', '{{$name}}')
               
                ->addColumn('link', function ($user){
                         return '<span class="edit"><a data-toggle="tooltip" data-placement="top" title="" data-original-title="ดูข้อมูล" class="btn btn-icon btn-success waves-effect light" 
                        href="' . route('police.show', $user->id) .'"><i class="feather icon-monitor"></i></a></span>'; 
                
                })
               
                ->rawColumns(['link', 'action'])
                ->toJson();
   
      }

     
            

     
     // return datatables()->of($data)->make(true);
           
     }


     $kinds = Kind_check_up::where('cate_check_up_id', '3')->get();
    //dd($kinds);
        return view('pages.check_up.admin.unit_other.police', compact('kinds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kinds = Kind_check_up::where('cate_check_up_id', '3')->get();
        return view('pages.check_up.admin.unit_other.create')->withKinds($kinds);
    }

   
    public function add($id)
    {
         $userPol = Check_up_user_pol::find($id);
         $kinds = Kind_check_up::where('cate_check_up_id', '3')->get();
         return view('pages.check_up.admin.unit_other.add')->withUserPol($userPol)->withKinds($kinds);
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
        //$userPol = Check_up_user_pol::find($request->user_pols_id);
        
        $userPol = new Check_up_user_pol;

        $userPol->kind_check_up_id = $request->kinds;

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

        $assessments->user_update_id = '0';
        $assessments->user_pols_id = $userPol->id;
        //$assessments->user_pols_id = $request->user_pols_id;
        $assessments->user_id = Auth::user()->id;
        //$year =  date('Y', strtotime(now()))  + '543'; //แปลงวันเป็นปี
        $assessments->year = $request->year;
        
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


       


      
        if(in_array('อื่นๆ', $request->congenital_disease)){

            $assessments->congenital_disease = implode(' , ', $request->congenital_disease);
            $assessments->congenital_disease_detail = $request->congenital_disease_detail;

        }else{

            $assessments->congenital_disease = implode(' , ', $request->congenital_disease);
        }

        if($request->medical_history == 'อื่นๆ'){
            
            $assessments->medical_history_other = $request->medical_history_other;

        }
        $assessments->medical_history = $request->medical_history;
        
        
            
        
        
        $assessments->Smoke = $request->Smoke;
        $assessments->Drink = $request->Drink;
        $assessments->exercise = $request->exercise;



            if ($assessments->save()) {

                Session::flash('message','บันทึกข้อมูลตรวจสุขภาพเรียบร้อย!');
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

    public function create_checkup(Request $request, $id)
    {
        //dd($request);
        //$userPol = Check_up_user_pol::find($request->user_pols_id);
        
        $userPol = Check_up_user_pol::find($id);

        $userPol->kind_check_up_id = $request->kinds;

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

        $assessments->user_update_id = '0';
        $assessments->user_pols_id = $userPol->id;
        //$assessments->user_pols_id = $request->user_pols_id;
        $assessments->user_id = Auth::user()->id;
      //  $year =  date('Y', strtotime(now()))  + '543'; //แปลงวันเป็นปี
        $assessments->year = $request->year;

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


       


      
        if(in_array('อื่นๆ', $request->congenital_disease)){

            $assessments->congenital_disease = implode(' , ', $request->congenital_disease);
            $assessments->congenital_disease_detail = $request->congenital_disease_detail;

        }else{

            $assessments->congenital_disease = implode(' , ', $request->congenital_disease);
        }

        if($request->medical_history == 'อื่นๆ'){
            
            $assessments->medical_history_other = $request->medical_history_other;

        }
        $assessments->medical_history = $request->medical_history;
        
        
            
        
        
        $assessments->Smoke = $request->Smoke;
        $assessments->Drink = $request->Drink;
        $assessments->exercise = $request->exercise;



            if ($assessments->save()) {

                Session::flash('message','บันทึกข้อมูลตรวจสุขภาพเรียบร้อย!');
                return redirect()->route('police.show',  $userPol->id);
            } else {

                // Session::flash('error', 'Some thing went wrong!!');
                return back();
            }

           
            

    }

    public function show($id)
    {
        
        //check_up_user_pols = Profile
        //check_up_admin_pols = checkup
        $userProfile = Check_up_user_pol::find($id);

        $userCheckup = Check_up_admin_pol::where('user_pols_id', $id)->get();
      //dd($userProfile);

        return view('pages.check_up.admin.unit_other.show')->withUserCheckup($userCheckup)
                                                            ->withUserProfile($userProfile)
                                                                ;

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Check_up_admin_pol  $check_up_admin_pol
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userPol = Check_up_admin_pol::find($id);

        $codi = explode(' , ', $userPol->congenital_disease);

        $all_fruits = array('ไม่มี','เบาหวาน','ความดันโลหิตสูง','เก๊าท์','ไขมันในเลือดผิดปกติ','ไตวายเรื้อรัง','เส้นเลือดสมอง','ถุงลมโป่งพอง','ไม่ทราบ','อื่นๆ');
        
//dd($assessments);
        return view('pages.check_up.admin.unit_other.edit', compact($all_fruits, 'all_fruits'))->withUserPol($userPol)->withCodi($codi);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Check_up_admin_pol  $check_up_admin_pol
     * @return \Illuminate\Http\Response
     */
    public function editpro($id)
    {
        $userPol = Check_up_user_pol::find($id);
        $kinds = Kind_check_up::where('cate_check_up_id', '3')->get();
        return view('pages.check_up.admin.unit_other.editpro')->withUserPol($userPol)->withKinds($kinds);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Check_up_admin_pol  $check_up_admin_pol
     * @return \Illuminate\Http\Response
     */
    public function updatepro(Request $request, $id)
    {
        
        $tender = Check_up_user_pol::find($id);

        $tender->kind_check_up_id = $request->kinds;
        $tender->titlename = $request->titlename;
        $tender->first_name = $request->first_name;
        $tender->last_name = $request->last_name;
        $tender->cid = $request->cid;
        $tender->gender = $request->gender;
        $tender->age = $request->age;
        $tender->tel = $request->tel;
        
        $tender->save();

            Session::flash('message', 'แก้ไขข้อมูลส่วนตัวเรียบร้อย!');
            return redirect()->route('police.show',  $tender->id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Check_up_admin_pol  $check_up_admin_pol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request);
        $assessments = Check_up_admin_pol::find($id);

        $assessments->user_update_id = Auth::user()->id;
        // $assessments->year = $request->year;

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

        if(in_array('อื่นๆ', $request->congenital_disease)){
            
            $assessments->congenital_disease = implode(' , ', $request->congenital_disease);
            $assessments->congenital_disease_detail = $request->congenital_disease_detail;

        }else{
            $assessments->congenital_disease_detail = '';
            $assessments->congenital_disease = implode(' , ', $request->congenital_disease);
        }

        if($request->medical_history == 'อื่นๆ'){
            
            $assessments->medical_history_other = $request->medical_history_other;

        }
        else{
            $assessments->medical_history_other = '';
        }
        $assessments->medical_history = $request->medical_history;
        
        $assessments->Smoke = $request->Smoke;
        $assessments->Drink = $request->Drink;
        $assessments->exercise = $request->exercise;



            if ($assessments->save()) {

                Session::flash('message','ปรับปรุงข้อมูลเรียบร้อย!');
                return redirect()->route('police.show',  $assessments->id);
            } else {

                // Session::flash('error', 'Some thing went wrong!!');
                return back();
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Check_up_admin_pol  $check_up_admin_pol
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $tenders = Check_up_admin_pol::find($id);
        $user = Check_up_user_pol::find($tenders->user_pols_id);
        $user->status_id = '1';
        $user->save();
        
        $tenders->delete();

        Session::flash('message','ลบข้อมูลตรวจสุขภาพประจำปีเรียบร้อย!');
        return redirect()->route('check_up.police');

    }

    public function exportexcel()
    {
      

    return Excel::download(new CheckupadminpolsExport, 'invoices.xlsx');
    }
}

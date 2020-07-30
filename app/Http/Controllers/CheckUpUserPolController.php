<?php

namespace App\Http\Controllers;

use App\Check_up_user_pol;
use App\Check_up_admin_pol;
use App\Kind_check_up;
use Illuminate\Http\Request;
use Session;

class CheckUpUserPolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kinds = Kind_check_up::where('cate_check_up_id', '3')->get();
        return view('pages.check_up.user.index')->withKinds($kinds);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function end()
    {
        return view('pages.check_up.user.end');
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
        //dd($request);
        // $this->validate($request, array(
        //     'titlename' => 'required|max:255',
        //     'first_name' => 'required|max:255',
        //     'last_name' => 'required|max:255',
        //     'cid' => 'required|integer',
        //     'age' => 'required|integer',
        //     'tel' => 'required|integer'
        // ));

        $tender = new Check_up_user_pol;
        
        $tender->kind_check_up_id = $request->kinds;
        $tender->titlename = $request->titlename;
        $tender->first_name = $request->first_name;
        $tender->last_name = $request->last_name;
        $tender->cid = $request->cid;
        $tender->gender = $request->gender;
        $tender->age = $request->age;
        $tender->tel = $request->tel;
        
        $tender->status_id = '1';   
        $tender->save();

        return view('pages.check_up.user.end');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Check_up_user_pol  $check_up_user_pol
     * @return \Illuminate\Http\Response
     */
    public function show(Check_up_user_pol $check_up_user_pol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Check_up_user_pol  $check_up_user_pol
     * @return \Illuminate\Http\Response
     */
    public function edit(Check_up_user_pol $check_up_user_pol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Check_up_user_pol  $check_up_user_pol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Check_up_user_pol $check_up_user_pol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Check_up_user_pol  $check_up_user_pol
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
    {

        $tenders = Check_up_admin_pol::find($id);   
      //  dd($tenders);

        $tenders->check_up_user_pol->delete();

        $tenders->delete();
        Session::flash('message','ลบข้อมูลเรียบร้อย!');
        return redirect()->route('check_up.police');
    }
}

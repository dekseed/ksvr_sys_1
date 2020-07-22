<?php

namespace App\Http\Controllers;

use App\Check_up_admin;
use App\Check_up_user_pol;
use Illuminate\Http\Request;

class CheckUpAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.check_up.admin.index');
    }

  
     /**
     * Display a listing of the resource.
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
     * @param  \App\Check_up_admin  $check_up_admin
     * @return \Illuminate\Http\Response
     */
    public function show(Check_up_admin $check_up_admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Check_up_admin  $check_up_admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Check_up_admin $check_up_admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Check_up_admin  $check_up_admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Check_up_admin $check_up_admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Check_up_admin  $check_up_admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Check_up_admin $check_up_admin)
    {
        //
    }
}

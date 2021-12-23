<?php

namespace App\Http\Controllers;

use App\Cartridge_user;
use Illuminate\Http\Request;

class CartridgeUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('pages.cartridge.admin.index');
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
     * @param  \App\Cartridge_user  $cartridge_user
     * @return \Illuminate\Http\Response
     */
    public function show(Cartridge_user $cartridge_user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cartridge_user  $cartridge_user
     * @return \Illuminate\Http\Response
     */
    public function edit(Cartridge_user $cartridge_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cartridge_user  $cartridge_user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cartridge_user $cartridge_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cartridge_user  $cartridge_user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cartridge_user $cartridge_user)
    {
        //
    }
}

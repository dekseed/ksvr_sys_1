<?php

namespace App\Http\Controllers;

use App\Cate_publicize;
use Illuminate\Http\Request;

class CatePublicizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $cate = Cate_publicize::orderBy('created_at', 'desc')->get();    
       // dd($cat_tenders);

        return view('pages.webs.manage_web.posts.cate_posts.index')->withCate($cate);
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
     * @param  \App\Cate_publicize  $cate_publicize
     * @return \Illuminate\Http\Response
     */
    public function show(Cate_publicize $cate_publicize)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cate_publicize  $cate_publicize
     * @return \Illuminate\Http\Response
     */
    public function edit(Cate_publicize $cate_publicize)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cate_publicize  $cate_publicize
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cate_publicize $cate_publicize)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cate_publicize  $cate_publicize
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cate_publicize $cate_publicize)
    {
        //
    }
}

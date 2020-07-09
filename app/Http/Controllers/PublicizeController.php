<?php

namespace App\Http\Controllers;

use App\Publicize;
use App\Cate_publicize;
use Illuminate\Http\Request;

class PublicizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Publicize::all();

        return view('pages.webs.manage_web.posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Cate_publicize::all();

        return view('pages.webs.manage_web.posts.create')->withCategories($categories);
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
     * @param  \App\Publicize  $publicize
     * @return \Illuminate\Http\Response
     */
    public function show(Publicize $publicize)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publicize  $publicize
     * @return \Illuminate\Http\Response
     */
    public function edit(Publicize $publicize)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publicize  $publicize
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publicize $publicize)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publicize  $publicize
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publicize $publicize)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\CateTender;
use Illuminate\Http\Request;

class CateTenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cate = CateTender::orderBy('created_at', 'desc')->get();    
       // dd($cat_tenders);

        return view('pages.webs.manage_web.tender.cate_tender.index')->withCate($cate);
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
        $this->validate($request, array(
      'name' => 'required|max:255'
    ));

    $tender = new CateTender;

    $tender->name = $request->name;
    $tender->save();

    return redirect()->route('cate-tender.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CateTender  $cateTender
     * @return \Illuminate\Http\Response
     */
    public function show(CateTender $cateTender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CateTender  $cateTender
     * @return \Illuminate\Http\Response
     */
    public function edit(CateTender $cateTender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CateTender  $cateTender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CateTender $cateTender)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CateTender  $cateTender
     * @return \Illuminate\Http\Response
     */
    public function destroy(CateTender $cateTender)
    {
        $tenders = CateTender::find($id);
   //  $ten = CateTender::findOrFail($id);
   //CateTender::where('id', $id)->forcedelete();
     $tenders->delete();

    return redirect()->route('tender-admin.index');
    }
}

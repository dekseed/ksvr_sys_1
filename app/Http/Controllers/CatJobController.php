<?php

namespace App\Http\Controllers;

use App\CatJob;
use Illuminate\Http\Request;

class CatJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cate = CatJob::orderBy('created_at', 'desc')->get();    
        //dd($cate);

        return view('pages.webs.manage_web.jobs.cate_job.index')->withCate($cate);
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

        $tender = new CatJob;

        $tender->name = $request->name;
        $tender->save();

        return redirect()->route('cat-job.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CatJob  $catJob
     * @return \Illuminate\Http\Response
     */
    public function show(CatJob $catJob)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CatJob  $catJob
     * @return \Illuminate\Http\Response
     */
    public function edit(CatJob $catJob)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CatJob  $catJob
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CatJob $catJob)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CatJob  $catJob
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $tenders = CatJob::find($id);
    //  $ten = CateTender::findOrFail($id);
    //CateTender::where('id', $id)->forcedelete();
        $tenders->delete();

        return redirect()->route('cat-job.index');
    }
}

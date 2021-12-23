<?php

namespace App\Http\Controllers;

use App\Kind_check_up;
use Illuminate\Http\Request;

use App\Report1;
use App\ReportCheckUp;
use App\Title_name;
use Session;

class Report1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('pages.report1.index1');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    public function search(Request $request)
    {

        $result = Report1::query();
       // $result1 = ReportCheckUp::query();

            if (!empty($request->search)) {
                $result = $result->where('cid', '=', $request->search)
                                ->orWhere('hn', '=', $request->search)
                                ->first();
            }



        $titleName = Title_name::all();

        $kind_check_up_ = Kind_check_up::where('cate_check_up_id', '=', '2')->get();

    // dd($result);
                if (is_null($result)) {

                    return view('pages.report1.index', compact('result','kind_check_up_'))->withTitleName($titleName);
                }else{

                    return view('pages.report1.search', compact('result','kind_check_up_'))->withTitleName($titleName);
                }



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

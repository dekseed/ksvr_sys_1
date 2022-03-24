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

            $result1 = ReportCheckUp::query();
            $result2 = Report1::query();

            // $result1 = ReportCheckUp::query();

            if (!empty($request->search)) {


                $result1_1 = $result1->where('cid', '=', $request->search)
                                ->orWhere('hn', '=', $request->search)
                                ->first();


                $report2_2 = $result2->where('cid', '=', $request->search)
                                ->orWhere('hn', '=', $request->search)
                                ->first();


                if(!is_null($result1_1)){

                    $result = $result1_1;
                    $sql = '1';
                }
                else if(!is_null($report2_2)){

                    $result = $report2_2;
                    $sql = '2';

                }else{
                    $result = '1';

                }

            }



        $titleName = Title_name::all();

        $kind_check_up_ = Kind_check_up::where('cate_check_up_id', '=', '2')->get();

//dd($result);
                if ($result == '1') {

                    return view('pages.report1.index', compact('result','kind_check_up_'))->withTitleName($titleName);
                }else{

                    return view('pages.report1.search', compact('result','kind_check_up_', 'sql'))->withTitleName($titleName);
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

<?php

namespace App\Http\Controllers;

use App\Check_up_admin;
use App\Check_up_user_pol;
use App\HealthCheckResult;
use App\Kind_check_up;
use App\Report_check_up_main;
use App\ReportCheckUp;
use Illuminate\Http\Request;
use DB;
use Illuminate\Database\Query\Builder;


class CheckUpAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ReportCheckUp $reportCheckUp)
    {
        $sum = DB::table('report_check_ups')
                ->count();

        $sum_army = DB::table('report_check_ups')
                ->leftJoin('kind_check_ups', 'kind_check_ups.id','=', 'report_check_ups.kind_check_up_id')
                ->where('kind_check_ups.cate_check_up_id', '2')
                ->count();

        $sum_other = DB::table('report_check_ups')
                ->leftJoin('kind_check_ups', 'kind_check_ups.id','=', 'report_check_ups.kind_check_up_id')
                ->where('kind_check_ups.cate_check_up_id', '3')
                ->count();

        $sum_1 = DB::table('report_check_ups')
                ->where('kind_check_up_id', '1')
                ->count();
        $sum_2 = DB::table('report_check_ups')
                ->where('kind_check_up_id', '2')
                ->count();
        $sum_3 = DB::table('report_check_ups')
                ->where('kind_check_up_id', '3')
                ->count();
        $sum_4 = DB::table('report_check_ups')
                ->where('kind_check_up_id', '4')
                ->count();
        $sum_5 = DB::table('report_check_ups')
                ->where('kind_check_up_id', '15')
                ->count();

        $sum_army_separate = $sum_1.', '.$sum_2.', '.$sum_3.', '.$sum_4.', '.$sum_5;
        $sum_kind = DB::table('report_check_ups')
                ->select('kind_check_up_id', DB::raw('count(id) as total_sale_amount'))
                ->groupBy('kind_check_up_id')
                ->get();

        // หน่วย มทบ. 29
            $query_1 = Report_check_up_main::select('report_check_up_id')
                ->leftJoin('report_check_ups', 'report_check_up_mains.report_check_up_id', '=', 'report_check_ups.id')
                ->where('report_check_ups.kind_check_up_id', '=', '1')
                ->get();

            $query_1_main = HealthCheckResult::select(
                                DB::raw('SUM(result_1) as total_val1'),
                                DB::raw('SUM(result_2) as total_val2'),
                                DB::raw('SUM(result_3) as total_val3'),
                                DB::raw('SUM(result_4) as total_val4'),
                                DB::raw('SUM(result_5) as total_val5'),
                                DB::raw('SUM(result_6) as total_val6'),
                                DB::raw('SUM(result_7) as total_val7'),
                                DB::raw('SUM(result_8) as total_val8'),
                                DB::raw('SUM(result_9) as total_val9'),
                                DB::raw('SUM(result_10) as total_val10')
                                )
                        ->whereIn('report_check_up_id',$query_1)
                        ->get();

            foreach($query_1_main as $items){
                $reus_1_1 = $items->total_val1;
                $reus_1_2 = $items->total_val2;
                $reus_1_3 = $items->total_val3;
                $reus_1_4 = $items->total_val4;
                $reus_1_5 = $items->total_val5;
                $reus_1_6 = $items->total_val6;
                $reus_1_7 = $items->total_val7;
                $reus_1_8 = $items->total_val8;
                $reus_1_9 = $items->total_val9;
                $reus_1_10 = $items->total_val10;
            }

        /////////////////////////////////////////////////////////////
        // หน่วย รพ.ค่ายกฤษณ์สีวะรา
            $query_2 = Report_check_up_main::select('report_check_up_id')
                ->leftJoin('report_check_ups', 'report_check_up_mains.report_check_up_id', '=', 'report_check_ups.id')
                ->where('report_check_ups.kind_check_up_id', '=', '2')
                ->where('year', date("Y"))
                ->get();

            $query_2_main = HealthCheckResult::select(
                                DB::raw('SUM(result_1) as total_val1'),
                                DB::raw('SUM(result_2) as total_val2'),
                                DB::raw('SUM(result_3) as total_val3'),
                                DB::raw('SUM(result_4) as total_val4'),
                                DB::raw('SUM(result_5) as total_val5'),
                                DB::raw('SUM(result_6) as total_val6'),
                                DB::raw('SUM(result_7) as total_val7'),
                                DB::raw('SUM(result_8) as total_val8'),
                                DB::raw('SUM(result_9) as total_val9'),
                                DB::raw('SUM(result_10) as total_val10')
                                )
                        ->whereIn('report_check_up_id',$query_2)
                        ->get();

            foreach($query_2_main as $items){
                $reus_2_1 = $items->total_val1;
                $reus_2_2 = $items->total_val2;
                $reus_2_3 = $items->total_val3;
                $reus_2_4 = $items->total_val4;
                $reus_2_5 = $items->total_val5;
                $reus_2_6 = $items->total_val6;
                $reus_2_7 = $items->total_val7;
                $reus_2_8 = $items->total_val8;
                $reus_2_9 = $items->total_val9;
                $reus_2_10 = $items->total_val10;
            }
        /////////////////////////////////////////////////////////////

        // หน่วย ร.3
            $query_3 = Report_check_up_main::select('report_check_up_id')
                ->leftJoin('report_check_ups', 'report_check_up_mains.report_check_up_id', '=', 'report_check_ups.id')
                ->where('report_check_ups.kind_check_up_id', '=', '3')
                ->where('year', date("Y"))
                ->get();

            $query_3_main = HealthCheckResult::select(
                                DB::raw('SUM(result_1) as total_val1'),
                                DB::raw('SUM(result_2) as total_val2'),
                                DB::raw('SUM(result_3) as total_val3'),
                                DB::raw('SUM(result_4) as total_val4'),
                                DB::raw('SUM(result_5) as total_val5'),
                                DB::raw('SUM(result_6) as total_val6'),
                                DB::raw('SUM(result_7) as total_val7'),
                                DB::raw('SUM(result_8) as total_val8'),
                                DB::raw('SUM(result_9) as total_val9'),
                                DB::raw('SUM(result_10) as total_val10')
                                )
                        ->whereIn('report_check_up_id',$query_3)
                        ->get();

            foreach($query_3_main as $items){
                $reus_3_1 = $items->total_val1;
                $reus_3_2 = $items->total_val2;
                $reus_3_3 = $items->total_val3;
                $reus_3_4 = $items->total_val4;
                $reus_3_5 = $items->total_val5;
                $reus_3_6 = $items->total_val6;
                $reus_3_7 = $items->total_val7;
                $reus_3_8 = $items->total_val8;
                $reus_3_9 = $items->total_val9;
                $reus_3_10 = $items->total_val10;
            }
        /////////////////////////////////////////////////////////////

        // หน่วย ร.3พัน1
            $query_4 = Report_check_up_main::select('report_check_up_id')
                ->leftJoin('report_check_ups', 'report_check_up_mains.report_check_up_id', '=', 'report_check_ups.id')
                ->where('report_check_ups.kind_check_up_id', '=', '4')
                ->where('year', date("Y"))
                ->get();

            $query_4_main = HealthCheckResult::select(
                                DB::raw('SUM(result_1) as total_val1'),
                                DB::raw('SUM(result_2) as total_val2'),
                                DB::raw('SUM(result_3) as total_val3'),
                                DB::raw('SUM(result_4) as total_val4'),
                                DB::raw('SUM(result_5) as total_val5'),
                                DB::raw('SUM(result_6) as total_val6'),
                                DB::raw('SUM(result_7) as total_val7'),
                                DB::raw('SUM(result_8) as total_val8'),
                                DB::raw('SUM(result_9) as total_val9'),
                                DB::raw('SUM(result_10) as total_val10')
                                )
                        ->whereIn('report_check_up_id',$query_4)
                        ->get();

            foreach($query_4_main as $items){
                $reus_4_1 = $items->total_val1;
                $reus_4_2 = $items->total_val2;
                $reus_4_3 = $items->total_val3;
                $reus_4_4 = $items->total_val4;
                $reus_4_5 = $items->total_val5;
                $reus_4_6 = $items->total_val6;
                $reus_4_7 = $items->total_val7;
                $reus_4_8 = $items->total_val8;
                $reus_4_9 = $items->total_val9;
                $reus_4_10 = $items->total_val10;
            }
        /////////////////////////////////////////////////////////////

        // หน่วยสัสดี
            $query_15 = Report_check_up_main::select('report_check_up_id')
                ->leftJoin('report_check_ups', 'report_check_up_mains.report_check_up_id', '=', 'report_check_ups.id')
                ->where('report_check_ups.kind_check_up_id', '=', '15')
                ->where('year', date("Y"))
                ->get();

            $query_15_old = HealthCheckResult::select(
                                DB::raw('SUM(result_1) as total_val1'),
                                DB::raw('SUM(result_2) as total_val2'),
                                DB::raw('SUM(result_3) as total_val3'),
                                DB::raw('SUM(result_4) as total_val4'),
                                DB::raw('SUM(result_5) as total_val5'),
                                DB::raw('SUM(result_6) as total_val6'),
                                DB::raw('SUM(result_7) as total_val7'),
                                DB::raw('SUM(result_8) as total_val8'),
                                DB::raw('SUM(result_9) as total_val9'),
                                DB::raw('SUM(result_10) as total_val10')
                                )
                        ->whereIn('report_check_up_id',$query_15)
                        ->get();

            foreach($query_15_old as $items){

                $reus_5_1 = $items->total_val1;
                $reus_5_2 = $items->total_val2;
                $reus_5_3 = $items->total_val3;
                $reus_5_4 = $items->total_val4;
                $reus_5_5 = $items->total_val5;
                $reus_5_6 = $items->total_val6;
                $reus_5_7 = $items->total_val7;
                $reus_5_8 = $items->total_val8;
                $reus_5_9 = $items->total_val9;
                $reus_5_10 = $items->total_val10;
            }


        /////////////////////////////////////////////////////////////

            // $results_1 = $reus_1_1.', '.$reus_2_1.', '.$reus_3_1.', '.$reus_4_1.', '.$reus_5_1;
            // $results_2 = $reus_1_2.', '.$reus_2_2.', '.$reus_3_2.', '.$reus_4_2.', '.$reus_5_2;
            // $results_3 = $reus_1_3.', '.$reus_2_3.', '.$reus_3_3.', '.$reus_4_3.', '.$reus_5_3;
            // $results_4 = $reus_1_4.', '.$reus_2_4.', '.$reus_3_4.', '.$reus_4_4.', '.$reus_5_4;
            // $results_5 = $reus_1_5.', '.$reus_2_5.', '.$reus_3_5.', '.$reus_4_5.', '.$reus_5_5;
            // $results_6 = $reus_1_6.', '.$reus_2_6.', '.$reus_3_6.', '.$reus_4_6.', '.$reus_5_6;
            // $results_7 = $reus_1_7.', '.$reus_2_7.', '.$reus_3_7.', '.$reus_4_7.', '.$reus_5_7;
            // $results_8 = $reus_1_8.', '.$reus_2_8.', '.$reus_3_8.', '.$reus_4_8.', '.$reus_5_8;
            // $results_9 = $reus_1_9.', '.$reus_2_9.', '.$reus_3_9.', '.$reus_4_9.', '.$reus_5_9;
            // $results_10 = $reus_1_10.', '.$reus_2_10.', '.$reus_3_10.', '.$reus_4_10.', '.$reus_5_10;

            $results_1 = intval(($reus_1_1 / $sum_1) * '100').', '.intval(($reus_2_1 / $sum_2) * '100').', '.intval(($reus_3_1 / $sum_3) * '100').', '.intval(($reus_4_1 / $sum_4) * '100').', '.intval(($reus_5_1 / $sum_5) * '100');
            $results_2 = intval(($reus_1_2 / $sum_1) * '100').', '.intval(($reus_2_2 / $sum_2) * '100').', '.intval(($reus_3_2 / $sum_3) * '100').', '.intval(($reus_4_2 / $sum_4) * '100').', '.intval(($reus_5_2 / $sum_5) * '100');
            $results_3 = intval(($reus_1_3 / $sum_1) * '100').', '.intval(($reus_2_3 / $sum_2) * '100').', '.intval(($reus_3_3 / $sum_3) * '100').', '.intval(($reus_4_3 / $sum_4) * '100').', '.intval(($reus_5_3 / $sum_5) * '100');
            $results_4 = intval(($reus_1_4 / $sum_1) * '100').', '.intval(($reus_2_4 / $sum_2) * '100').', '.intval(($reus_3_4 / $sum_3) * '100').', '.intval(($reus_4_4 / $sum_4 )* '100').', '.intval(($reus_5_4 / $sum_5) * '100');
            $results_5 = intval(($reus_1_5 / $sum_1) * '100').', '.intval(($reus_2_5 / $sum_2) * '100').', '.intval(($reus_3_5 / $sum_3) * '100').', '.intval(($reus_4_5 / $sum_4) * '100').', '.intval(($reus_5_5 / $sum_5) * '100');
            $results_6 = intval(($reus_1_6 / $sum_1) * '100').', '.intval(($reus_2_6 / $sum_2) * '100').', '.intval(($reus_3_6 / $sum_3) * '100').', '.intval(($reus_4_6 / $sum_4) * '100').', '.intval(($reus_5_6 / $sum_5) * '100');
            $results_7 = intval(($reus_1_7 / $sum_1) * '100').', '.intval(($reus_2_7 / $sum_2) * '100').', '.intval(($reus_3_7 / $sum_3) * '100').', '.intval(($reus_4_7 / $sum_4) * '100').', '.intval(($reus_5_7 / $sum_5) * '100');
            $results_8 = intval(($reus_1_8 / $sum_1) * '100').', '.intval(($reus_2_8 / $sum_2) * '100').', '.intval(($reus_3_8 / $sum_3) * '100').', '.intval(($reus_4_8 / $sum_4) * '100').', '.intval(($reus_5_8 / $sum_5) * '100');
            $results_9 = intval(($reus_1_9 / $sum_1) * '100').', '.intval(($reus_2_9 / $sum_2) * '100').', '.intval(($reus_3_9 / $sum_3) * '100').', '.intval(($reus_4_9 / $sum_4) * '100').', '.intval(($reus_5_9 / $sum_5) * '100');
            $results_10 = intval(($reus_1_10 / $sum_1) * '100').', '.intval(($reus_2_10 / $sum_2) * '100').', '.intval(($reus_3_10 / $sum_3) * '100').', '.intval(($reus_4_10 / $sum_4) * '100').', '.intval(($reus_5_10 / $sum_5) * '100');

            // dd(($reus_5_10 / $sum_5) * '100'.' | '. $sum_5.' | '.$reus_5_10);

        /////////////////////////////////////////////////////////////
                $query_15_old = HealthCheckResult::select(
                            DB::raw('SUM(result_1) as total_val1'),
                            DB::raw('SUM(result_2) as total_val2'),
                            DB::raw('SUM(result_3) as total_val3'),
                            DB::raw('SUM(result_4) as total_val4'),
                            DB::raw('SUM(result_5) as total_val5'),
                            DB::raw('SUM(result_6) as total_val6'),
                            DB::raw('SUM(result_7) as total_val7'),
                            DB::raw('SUM(result_8) as total_val8'),
                            DB::raw('SUM(result_9) as total_val9'),
                            DB::raw('SUM(result_10) as total_val10')
                            )
                    ->whereIn('report_check_up_id',$query_15)
                    ->get()->toArray();

                    $arrayOfStrings = [];
                    foreach ($query_15_old as $key => $value) {
                        $query_15_one = implode(",", $value);
                    }

                $query_4_old = HealthCheckResult::select(
                        DB::raw('SUM(result_1) as total_val1'),
                        DB::raw('SUM(result_2) as total_val2'),
                        DB::raw('SUM(result_3) as total_val3'),
                        DB::raw('SUM(result_4) as total_val4'),
                        DB::raw('SUM(result_5) as total_val5'),
                        DB::raw('SUM(result_6) as total_val6'),
                        DB::raw('SUM(result_7) as total_val7'),
                        DB::raw('SUM(result_8) as total_val8'),
                        DB::raw('SUM(result_9) as total_val9'),
                        DB::raw('SUM(result_10) as total_val10')
                        )
                ->whereIn('report_check_up_id',$query_4)
                ->get()->toArray();

                $arrayOfStrings = [];
                foreach ($query_4_old as $key => $value) {
                    $query_4_one = implode(",", $value);
                }

                $query_3_old = HealthCheckResult::select(
                        DB::raw('SUM(result_1) as total_val1'),
                        DB::raw('SUM(result_2) as total_val2'),
                        DB::raw('SUM(result_3) as total_val3'),
                        DB::raw('SUM(result_4) as total_val4'),
                        DB::raw('SUM(result_5) as total_val5'),
                        DB::raw('SUM(result_6) as total_val6'),
                        DB::raw('SUM(result_7) as total_val7'),
                        DB::raw('SUM(result_8) as total_val8'),
                        DB::raw('SUM(result_9) as total_val9'),
                        DB::raw('SUM(result_10) as total_val10')
                        )
                ->whereIn('report_check_up_id',$query_3)
                ->get()->toArray();

                $arrayOfStrings = [];
                foreach ($query_3_old as $key => $value) {
                    $query_3_one = implode(",", $value);
                }

                $query_2_old = HealthCheckResult::select(
                        DB::raw('SUM(result_1) as total_val1'),
                        DB::raw('SUM(result_2) as total_val2'),
                        DB::raw('SUM(result_3) as total_val3'),
                        DB::raw('SUM(result_4) as total_val4'),
                        DB::raw('SUM(result_5) as total_val5'),
                        DB::raw('SUM(result_6) as total_val6'),
                        DB::raw('SUM(result_7) as total_val7'),
                        DB::raw('SUM(result_8) as total_val8'),
                        DB::raw('SUM(result_9) as total_val9'),
                        DB::raw('SUM(result_10) as total_val10')
                        )
                ->whereIn('report_check_up_id',$query_2)
                ->get()->toArray();

                $arrayOfStrings = [];
                foreach ($query_2_old as $key => $value) {
                    $query_2_one = implode(",", $value);
                }

                $query_1_old = HealthCheckResult::select(
                        DB::raw('SUM(result_1) as total_val1'),
                        DB::raw('SUM(result_2) as total_val2'),
                        DB::raw('SUM(result_3) as total_val3'),
                        DB::raw('SUM(result_4) as total_val4'),
                        DB::raw('SUM(result_5) as total_val5'),
                        DB::raw('SUM(result_6) as total_val6'),
                        DB::raw('SUM(result_7) as total_val7'),
                        DB::raw('SUM(result_8) as total_val8'),
                        DB::raw('SUM(result_9) as total_val9'),
                        DB::raw('SUM(result_10) as total_val10')
                        )
                ->whereIn('report_check_up_id',$query_1)
                ->get()->toArray();

                $arrayOfStrings = [];
                foreach ($query_1_old as $key => $value) {
                    $query_1_one = implode(",", $value);
                }

        return view('pages.check_up.admin.index', compact('sum_army', 'sum','sum_other', 'sum_5', 'sum_4', 'sum_3', 'sum_2', 'sum_1',
                    'results_1', 'results_2', 'results_3', 'results_4', 'results_5', 'results_6', 'results_7', 'results_8', 'results_9', 'results_10',
                    'query_1_one', 'query_2_one', 'query_3_one', 'query_4_one', 'query_15_one', 'sum_army_separate'
                                                            ));
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

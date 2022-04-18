<?php

namespace App\Http\Controllers;

use App\Report_check_up_cbc;
use App\Report_check_up_detail_1;
use App\Report_check_up_main;
use App\Report_check_up_stool;
use App\Report_check_up_urine;
use Illuminate\Http\Request;

class ReportCheckUpDetail1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, Report_check_up_detail_1 $report_check_up_detail_1)
    {


        $user_id = $request->report1_id;
        $year = ($request->year - 543);

        $report_c_d = Report_check_up_detail_1::where('report_check_up_id', $user_id)->first();

        if (is_null($report_c_d)) {
            $store = '2';
        }else{
            $store = '1';
        }
        // dd($store);

        if($store == '2'){

            // CBC insert db
                $data_cbc = new Report_check_up_cbc();

                $data_cbc->report_check_up_id = $user_id;
                $data_cbc->year = $year;

                $data_cbc->blood_wbc = $request->blood_wbc;
                $data_cbc->blood_rbc = $request->blood_rbc;
                $data_cbc->blood_hb = $request->blood_hb;
                $data_cbc->blood_hct = $request->blood_hct;
                $data_cbc->blood_mcv = $request->blood_mcv;
                $data_cbc->blood_plt = $request->blood_plt;
                $data_cbc->blood_ne = $request->blood_ne;
                $data_cbc->blood_ly = $request->blood_ly;
                $data_cbc->blood_mo = $request->blood_mo;
                $data_cbc->blood_eo = $request->blood_eo;
                $data_cbc->blood_ba = $request->blood_ba;

                $data_cbc->save();

            ///////////////////////////////////
            // CBC
                if($request->blood_hct){

                    if ($request->blood_hct >= '40.0' && $request->blood_hct  <= '51.0' && $request->gender == '1') {
                        $blood_hct_c = '2';
                    }else if($request->blood_hct >= '35.2' && $request->blood_hct  <= '46.4' && $request->gender == '2'){
                        $blood_hct_c = '2';
                    }else{
                        $blood_hct = 'HCT:'.$request->blood_hct.',';
                        $blood_hct_c = '1';
                    }
                    if ($request->blood_mcv >= '80' &&  $request->blood_mcv <= '94.5' && $request->gender == '1') {
                        $blood_mcv_c = '2';
                    }else if($request->blood_mcv >= '82.2' && $request->blood_mcv <= '99.5' && $request->gender == '2'){
                        $blood_mcv_c = '2';
                    }else{
                        $blood_mcv = $request->blood_mcv;
                        $blood_mcv_c = '1';
                    }

                    if($request->blood_wbc >= '4.5' && $request->blood_wbc  <= '10.6') {
                        $blood_wbc_c = '2';
                    }else {
                        $blood_wbc = $request->blood_wbc;
                        $blood_wbc_c = '1';
                    }
                    if($request->blood_rbc >= '4.5' && $request->blood_rbc  <= '6.0' && $request->gender == '1') {
                        $blood_rbc_c = '2';
                    }else if($request->lab_order_result >= '4.2' && $request->lab_order_result  <= '5.2' && $request->gender == '2'){
                        $blood_rbc_c = '2';
                    }else{
                        $blood_rbc = $request->blood_rbc;
                        $blood_rbc_c = '1';
                    }
                    if ($request->blood_hb >= '13' && $request->blood_hb  <= '18' && $request->gender == '1') {
                        $blood_hb_c = '2';
                    }else if($request->blood_hb >= '11' && $request->blood_hb <= '16' && $request->gender == '2'){
                        $blood_hb_c = '2';
                    }else{
                        $blood_hb = $request->blood_hb;
                        $blood_hb_c = '1';
                    }

                    if ($request->blood_plt >= '138' && $request->blood_plt  <= '391') {
                        $blood_plt_c = '2';
                    }else{
                        $blood_plt = $request->blood_plt;
                        $blood_plt_c = '1';
                    }
                    if ($request->blood_ne >= '39.6' && $request->blood_ne  <= '71.6') {
                        $blood_ne_c = '2';
                    }else{
                        $blood_ne = $request->blood_ne;
                        $blood_ne_c = '1';
                    }
                    if ($request->blood_ly >= '18.3' && $request->blood_ly  <= '49') {
                        $blood_ly_c = '2';
                    }else{
                        $blood_ly = $request->blood_ly;
                        $blood_ly_c = '1';
                    }
                    if ($request->blood_mo >= '2.3' && $request->blood_mo <= '8.7') {
                        $blood_mo_c = '2';
                    }else{
                        $blood_mo = $request->blood_mo;
                        $blood_mo_c = '1';
                    }
                    if ($request->blood_eo >= '0' && $request->blood_eo  <= '7.8') {
                        $blood_eo_c = '2';
                    }else{
                        $blood_eo = $request->blood_eo;
                        $blood_eo_c = '1';
                    }
                    if ($request->blood_ba >= '0' && $request->blood_ba <= '1.8') {
                        $blood_ba_c = '2';
                    }else{
                        $blood_ba = $request->blood_ba;
                        $blood_ba_c = '1';
                    }


                        if($blood_hct_c == '1' || $blood_hct_c == '1' || $blood_wbc_c  == '1' || $blood_rbc_c == '1' || $blood_hb_c == '1' || $blood_plt_c == '1' || $blood_ne_c == '1' || $blood_ly_c == '1' || $blood_mo_c  == '1' || $blood_eo_c == '1' || $blood_ba_c == '1' ){

                            if ($blood_hct_c == '1' && $blood_hct_c == '1' && $blood_wbc_c  == '2' && $blood_rbc_c == '2' && $blood_hb_c == '2' && $blood_plt_c == '2' && $blood_ne_c == '2' && $blood_ly_c == '2' && $blood_mo_c  == '2' && $blood_eo_c == '2' && $blood_ba_c == '2' ) {
                                $cbc = '2';
                                $cbc_d = '';
                            }else{
                                $cbc = '3';

                                if ($blood_wbc_c == '1') {
                                    $blood_wbc_detail = 'Wbc:'.$blood_wbc.',';
                                } else {
                                    $blood_wbc_detail = '';
                                }
                                if ($blood_rbc_c == '1') {
                                    $blood_rbc_detail = 'Wbc:'.$blood_rbc.',';
                                } else {
                                    $blood_rbc_detail = '';
                                }
                                if ($blood_hb_c == '1') {
                                    $blood_hb_detail = 'Wbc:'.$blood_hb.',';
                                } else {
                                    $blood_hb_detail = '';
                                }
                                if ($blood_plt_c == '1') {
                                    $blood_plt_detail = 'Wbc:'.$blood_plt.',';
                                } else {
                                    $blood_plt_detail = '';
                                }
                                if ($blood_ne_c == '1') {
                                    $blood_ne_detail = 'Wbc:'.$blood_ne.',';
                                } else {
                                    $blood_ne_detail = '';
                                }
                                if ($blood_ly_c == '1') {
                                    $blood_ly_detail = 'Wbc:'.$blood_ly.',';
                                } else {
                                    $blood_ly_detail = '';
                                }
                                if ($blood_mo_c == '1') {
                                    $blood_mo_detail = 'Wbc:'.$blood_mo.',';
                                } else {
                                    $blood_mo_detail = '';
                                }
                                if ($blood_eo_c == '1') {
                                    $blood_eo_detail = 'Wbc:'.$blood_eo.',';
                                } else {
                                    $blood_eo_detail = '';
                                }
                                if ($blood_ba_c == '1') {
                                    $blood_ba_detail = 'Wbc:'.$blood_ba.',';
                                } else {
                                    $blood_ba_detail = '';
                                }

                                $cbc_d = $blood_wbc_detail . $blood_rbc_detail . $blood_hb_detail . $blood_plt_detail . $blood_ly_detail . $blood_mo_detail . $blood_eo_detail . $blood_ba_detail;
                            }

                        }else  {
                                $cbc = '1';
                                $cbc_d = '';
                            }




                }else{
                    $cbc = '0';
                    $cbc_d = '';

                }
            ///////////////////////////////////
            // urine insert db
                if($request->urine_blood){

                    ///////////////////////////////////
                    // urine

                    if ($request->urine_blood == 'Negative') {
                        $lab_order_blood = 'Negative';
                    } else {
                        $lab_order_blood = 'Positive';
                    }

                    if ($request->urine_ketone == 'Negative') {
                        $lab_order_ketone = 'Negative';
                    } else {
                        $lab_order_ketone = 'Positive';
                    }

                    if ($request->urine_sugar == 'Negative') {
                        $lab_order_sugar = 'Negative';
                    } else {
                        $lab_order_sugar = 'Positive';
                    }

                    if ($request->urine_protein == 'Negative') {
                        $lab_order_protein = 'Negative';
                    } else {
                        $lab_order_protein = 'Positive';
                    }

                    if ($request->urine_rbc == '0-1') {
                        $lab_order_rbc = 'Negative';
                    } elseif ($request->urine_rbc == 'Negative') {
                        $lab_order_rbc = 'Negative';
                    } elseif ($request->urine_rbc == '1-2') {
                        $lab_order_rbc = 'Negative';
                    } elseif ($request->urine_rbc == '3-5') {
                        $lab_order_rbc = 'Negative';
                    } else {
                        $lab_order_rbc = 'Positive';
                    }


                    if ($request->urine_wbc == '0-1') {
                        $lab_order_wbc = 'Negative';
                    } elseif ($request->urine_wbc == '1-2') {
                        $lab_order_wbc = 'Negative';
                    } elseif ($request->urine_wbc == '3-5') {
                        $lab_order_wbc = 'Negative';
                    } else {
                        $lab_order_wbc = 'Positive';
                    }


                    if ($request->urine_epi == 'Sq.Epi.Cell : 0-1') {
                        $lab_order_epi = 'Negative';
                    } elseif ($request->urine_epi == 'Sq.Epi.Cell : 1-2') {
                        $lab_order_epi = 'Negative';
                    } elseif ($request->urine_epi == 'Sq.Epi.Cell : 3-5') {
                        $lab_order_epi = 'Negative';
                    } else {
                        $lab_order_epi = 'Positive';
                    }

                    $data_urine = new Report_check_up_urine();

                    $data_urine->report_check_up_id = $user_id;
                    $data_urine->year = $year;

                    $data_urine->urine_blood = $request->urine_blood;
                    $data_urine->urine_ketone = $request->urine_ketone;
                    $data_urine->urine_sugar = $request->urine_sugar;
                    $data_urine->urine_protein = $request->urine_protein;
                    $data_urine->urine_rbc = $lab_order_rbc;
                    $data_urine->urine_wbc = $lab_order_wbc;
                    $data_urine->urine_epi = $lab_order_epi;
                    $data_urine->urine_rbc_old = $request->urine_rbc;
                    $data_urine->urine_wbc_old = $request->urine_wbc;
                    $data_urine->urine_epi_old = $request->urine_epi;
                    $data_urine->save();


                    if ($lab_order_blood == 'Negative' && $lab_order_ketone == 'Negative' && $lab_order_sugar == 'Negative' && $lab_order_rbc == 'Negative' && $lab_order_wbc == 'Negative' && $lab_order_epi == 'Negative') {
                        $urine = '1';
                        $urine_d1 = '';
                        $urine_d2 = '';
                        $urine_d = '';
                    } else {
                        $urine = '2';

                            if ($lab_order_protein > 'Negative') {
                                $urine_d1 = '1';
                            } else {
                                $urine_d1 = '2';
                            }

                            if ($lab_order_blood > 'Negative') {
                                $urine_d2 = '1';
                            } else {
                                $urine_d2 = '2';
                            }



                            if ($lab_order_ketone = 'Positive') {
                                $lab_order_ketone_detail = 'Ketone:'.$request->urine_ketone.',';
                            } else {
                                $lab_order_ketone_detail = '';
                            }
                            if ($lab_order_sugar = 'Positive') {
                                $lab_order_sugar_detail = 'Sugar:'.$request->urine_sugar.',';
                            } else {
                                $lab_order_sugar_detail = '';
                            }
                            if ($lab_order_rbc = 'Positive') {
                                $lab_order_rbc_detail = 'RBC:'.$request->urine_rbc.',';
                            } else {
                                $lab_order_rbc_detail = '';
                            }
                            if ($lab_order_wbc = 'Positive') {
                                $lab_order_wbc_detail = 'WBC:'.$request->urine_rbc.',';
                            } else {
                                $lab_order_wbc_detail = '';
                            }
                            if ($lab_order_epi = 'Positive') {
                                $lab_order_epi_detail = 'Epi:'.$request->urine_epi.',';
                            } else {
                                $lab_order_epi_detail = '';
                            }

                        $urine_d = $lab_order_ketone_detail . $lab_order_sugar_detail . $lab_order_rbc_detail . $lab_order_wbc_detail . $lab_order_epi_detail;

                    }


                }else{

                    $data_urine = new Report_check_up_urine();

                    $data_urine->report_check_up_id = $user_id;
                    $data_urine->year = $year;

                    $data_urine->urine_blood = '0';

                    $data_urine->save();

                    $urine = '0';
                    $urine_d1 = '';
                    $urine_d2 = '';
                    $urine_d = '';
                }
            //

            // stool insert db
                $stool_data = new Report_check_up_stool();
                $stool_data->report_check_up_id = $user_id;
                $stool_data->year = $year;

                $stool_data->stool_RBC = '0';

                $stool_data->save();
            //

            // detail_1 insert db
                $assessments = new Report_check_up_detail_1;

                $assessments->report_check_up_id = $user_id;
                $assessments->year = $year;

                $assessments->weight = $request->weight;
                $assessments->height = $request->height;
                $assessments->bmi = $request->bmi;
                $assessments->waist = $request->waist;
                $assessments->pressure_1 = $request->pressure_1;
                $assessments->pulse_1 = $request->pulse_1;
                $assessments->pressure_2 = $request->pressure_2;
                $assessments->pulse_2 = $request->pulse_2;

                $assessments->x_ray = $request->x_ray;

                $assessments->urine = $urine;
                $assessments->urine_d1 = $urine_d1;
                $assessments->urine_d2 = $urine_d2;
                $assessments->urine_d = $urine_d;

                $assessments->cbc = $cbc;
                $assessments->cbc_d = $cbc_d;

                if($request->gender == '2'){
                    $assessments->pap = $request->pap;
                    $assessments->pap_d = $request->pap_d;
                }else{
                    $assessments->pap = '0';

                }

                $assessments->blood_tg = $request->blood_tg;
                $assessments->blood_glu = $request->blood_glu;
                $assessments->blood_chol = $request->blood_chol;
                $assessments->blood_hdl = $request->blood_hdl;

                $assessments->blood_ldl = $request->blood_ldl;
                $assessments->blood_bun = $request->blood_bun;
                $assessments->blood_cr = $request->blood_cr;
                $assessments->blood_uric = $request->blood_uric;
                $assessments->blood_ast = $request->blood_ast;
                $assessments->blood_alt = $request->blood_alt;

                $assessments->save();

            //

            // main insert db

                $create_main_ChUp = new Report_check_up_main();

                $create_main_ChUp->report_check_up_id = $user_id;
                $create_main_ChUp->year = $year;
                $create_main_ChUp->report_check_up_cbc_id = $data_cbc->id;
                $create_main_ChUp->report_check_up_urine_id = $data_urine->id;
                $create_main_ChUp->report_check_up_stool_id = $stool_data->id;
                $create_main_ChUp->report_check_up_detail_1_id = $assessments->id;

                $create_main_ChUp->save();

            //


            return redirect()->route('check_up_army_2.show', $assessments->report_check_up_id)->with(['message' => 'บันทึกข้อมูลเรียบร้อย!']);
        }else{

            return redirect()->route('check_up_army_2.show', $user_id)->with(['message_error' => 'ข้อมูลปี '.($year+543).' มีในระบบแล้ว กรุณาเลือกประจำปีอื่น!']);

        }


    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Report_check_up_detail_1  $report_check_up_detail_1
     * @return \Illuminate\Http\Response
     */
    public function show(Report_check_up_detail_1 $report_check_up_detail_1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Report_check_up_detail_1  $report_check_up_detail_1
     * @return \Illuminate\Http\Response
     */
    public function edit(Report_check_up_detail_1 $report_check_up_detail_1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Report_check_up_detail_1  $report_check_up_detail_1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report_check_up_detail_1 $report_check_up_detail_1, $id)
    {
        //dd($request);
        $assessments = $report_check_up_detail_1->find($id);


        $year = $assessments->year + 543;

        $assessments->weight = $request->weight;
        $assessments->height = $request->height;
        $assessments->bmi = $request->bmi;
        $assessments->waist = $request->waist;
        $assessments->pressure_1 = $request->pressure_1;
        $assessments->pulse_1 = $request->pulse_1;
        $assessments->pressure_2 = $request->pressure_2;
        $assessments->pulse_2 = $request->pulse_2;

        $assessments->x_ray = $request->x_ray;

        $assessments->urine = $request->urine;
        $assessments->urine_d1 = $request->urine_d1;
        $assessments->urine_d2 = $request->urine_d2;
        $assessments->urine_d = $request->urine_d;

        $assessments->cbc = $request->cbc;
        $assessments->cbc_d = $request->cbc_d;
        $assessments->pap = $request->pap;
        $assessments->pap_d = $request->pap_d;

        $assessments->blood_tg = $request->blood_tg;
        $assessments->blood_glu = $request->blood_glu;
        $assessments->blood_chol = $request->blood_chol;
        $assessments->blood_hdl = $request->blood_hdl;

        $assessments->blood_ldl = $request->blood_ldl;
        $assessments->blood_bun = $request->blood_bun;
        $assessments->blood_cr = $request->blood_cr;
        $assessments->blood_uric = $request->blood_uric;
        $assessments->blood_ast = $request->blood_ast;
        $assessments->blood_alt = $request->blood_alt;

        $assessments->save();

        return redirect()->route('check_up_army_2.show', $assessments->id)->with(['message' => 'แก้ไขข้อมูลตรวจสุขภาพปี '.$year.' เรียบร้อย!']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Report_check_up_main  $report_check_up_main
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report_check_up_main $report_check_up_main, $id)
    {
        $user = $report_check_up_main->find($id);
        $year = $user->year + 543;
        $use = $user->report_check_up_id;

        //dd($user);
        $user->report_check_up_main_detail_1->delete();
        $user->report_check_up_cbc->delete();
        $user->report_check_up_main_urine->delete();
        $user->report_check_up_stool->delete();
        // $user->delete();

        return redirect()->route('check_up_army_2.show', $use)->with(['message' => 'ลบข้อมูลตรวจสุขภาพปี '.$year.' เรียบร้อย!']);
    }
}

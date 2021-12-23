<?php

namespace App\Http\Controllers;

use App\Assessment;
use Illuminate\Http\Request;
use Session;

class AssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.assessment.index');
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
        // dd($request);
    $this->validate(
        $request,
        [
          'b2_1' => 'required|in:1,2,3,4',
          'b2_2' => 'required|in:1,2,3,4',
          'b2_3' => 'required|in:1,2,3,4',
          'b2_4' => 'required|in:1,2,3,4',
          'b2_5' => 'required|in:1,2,3,4',
          'b2_6' => 'required|in:1,2,3,4',
          'b2_7' => 'required|in:1,2,3,4',
          'b2_8' => 'required|in:1,2,3,4',
          'b2_9' => 'required|in:1,2,3,4',
          'b2_10' => 'required|in:1,2,3,4',
          'b2_11' => 'required|in:1,2,3,4',
          'b2_12' => 'required|in:1,2,3,4',
          'b2_13' => 'required|in:1,2,3,4',
          'b2_14' => 'required|in:1,2,3,4',
          'b2_15' => 'required|in:1,2,3,4',
        'c3_1_1' => 'required|in:1,2,3,4,5',
        'c3_1_2' => 'required|in:1,2,3,4,5',
        'c3_1_3' => 'required|in:1,2,3,4,5',
        'c3_1_4' => 'required|in:1,2,3,4,5',
        'c3_1_5' => 'required|in:1,2,3,4,5',
        'c3_2_1' => 'required|in:1,2,3,4,5',
        'c3_2_2' => 'required|in:1,2,3,4,5',
        'c3_2_3' => 'required|in:1,2,3,4,5',
        'c3_3_1' => 'required|in:1,2,3,4,5',
        'c3_3_2' => 'required|in:1,2,3,4,5',
        'c3_3_3' => 'required|in:1,2,3,4,5',
        'c3_4_1' => 'required|in:1,2,3,4,5',
        'c3_4_2' => 'required|in:1,2,3,4,5',
        'c3_4_3' => 'required|in:1,2,3,4,5',
        'c3_5_1' => 'required|in:1,2,3,4,5',
        'c3_5_2' => 'required|in:1,2,3,4,5',
        'c3_5_3' => 'required|in:1,2,3,4,5',
        'c3_5_4' => 'required|in:1,2,3,4,5',
        'c3_5_5' => 'required|in:1,2,3,4,5',
        'c3_5_6' => 'required|in:1,2,3,4,5',
        'c3_5_7' => 'required|in:1,2,3,4,5',
        'c3_5_8' => 'required|in:1,2,3,4,5',
        'c3_6_1' => 'required|in:1,2,3,4,5',
        'c3_6_2' => 'required|in:1,2,3,4,5',
        'c3_6_3' => 'required|in:1,2,3,4,5',
        'c3_7_1' => 'required|in:1,2,3,4,5',
        'c3_7_2' => 'required|in:1,2,3,4,5',
        'd4_1' => 'required|in:1,2,3,4,5'

      ],
             [
                 'b2_1.required'    => 'กรุณาตอบคำถามข้อที่ 2.1',
                 'b2_2.required'    => 'กรุณาตอบคำถามข้อที่ 2.2',
                 'b2_3.required'    => 'กรุณาตอบคำถามข้อที่ 2.3',
                 'b2_4.required'    => 'กรุณาตอบคำถามข้อที่ 2.4',
                 'b2_5.required'    => 'กรุณาตอบคำถามข้อที่ 2.5',
                 'b2_6.required'    => 'กรุณาตอบคำถามข้อที่ 2.6',
                 'b2_7.required'    => 'กรุณาตอบคำถามข้อที่ 2.7',
                 'b2_8.required'    => 'กรุณาตอบคำถามข้อที่ 2.8',
                 'b2_9.required'    => 'กรุณาตอบคำถามข้อที่ 2.9',
                 'b2_10.required'    => 'กรุณาตอบคำถามข้อที่ 2.10',
                 'b2_11.required'    => 'กรุณาตอบคำถามข้อที่ 2.11',
                 'b2_12.required'    => 'กรุณาตอบคำถามข้อที่ 2.12',
                 'b2_13.required'    => 'กรุณาตอบคำถามข้อที่ 2.13',
                 'b2_14.required'    => 'กรุณาตอบคำถามข้อที่ 2.14',
                 'b2_15.required'    => 'กรุณาตอบคำถามข้อที่ 2.15',
                 'c3_1_1.required'    => 'กรุณาตอบคำถามข้อที่ 3.1.1',
                 'c3_1_2.required'    => 'กรุณาตอบคำถามข้อที่ 3.1.2',
                 'c3_1_3.required'    => 'กรุณาตอบคำถามข้อที่ 3.1.3',
                 'c3_1_4.required'    => 'กรุณาตอบคำถามข้อที่ 3.1.4',
                 'c3_1_5.required'    => 'กรุณาตอบคำถามข้อที่ 3.1.5',
                 'c3_2_1.required'    => 'กรุณาตอบคำถามข้อที่ 3.2.1',
                 'c3_2_2.required'    => 'กรุณาตอบคำถามข้อที่ 3.2.2',
                 'c3_2_3.required'    => 'กรุณาตอบคำถามข้อที่ 3.2.3',
                 'c3_3_1.required'    => 'กรุณาตอบคำถามข้อที่ 3.3.1',
                 'c3_3_2.required'    => 'กรุณาตอบคำถามข้อที่ 3.3.2',
                 'c3_3_3.required'    => 'กรุณาตอบคำถามข้อที่ 3.3.3',
                 'c3_4_1.required'    => 'กรุณาตอบคำถามข้อที่ 3.4.1',
                 'c3_4_2.required'    => 'กรุณาตอบคำถามข้อที่ 3.4.2',
                 'c3_4_3.required'    => 'กรุณาตอบคำถามข้อที่ 3.4.3',
                 'c3_5_1.required'    => 'กรุณาตอบคำถามข้อที่ 3.5.1',
                 'c3_5_2.required'    => 'กรุณาตอบคำถามข้อที่ 3.5.2',
                 'c3_5_3.required'    => 'กรุณาตอบคำถามข้อที่ 3.5.3',
                 'c3_5_4.required'    => 'กรุณาตอบคำถามข้อที่ 3.5.4',
                 'c3_5_5.required'    => 'กรุณาตอบคำถามข้อที่ 3.5.5',
                 'c3_5_6.required'    => 'กรุณาตอบคำถามข้อที่ 3.5.6',
                 'c3_5_7.required'    => 'กรุณาตอบคำถามข้อที่ 3.5.7',
                 'c3_5_8.required'    => 'กรุณาตอบคำถามข้อที่ 3.5.8',
                 'c3_6_1.required'    => 'กรุณาตอบคำถามข้อที่ 3.6.1',
                 'c3_6_2.required'    => 'กรุณาตอบคำถามข้อที่ 3.6.2',
                 'c3_6_3.required'    => 'กรุณาตอบคำถามข้อที่ 3.6.3',
                 'c3_7_1.required'    => 'กรุณาตอบคำถามข้อที่ 3.7.1',
                 'c3_7_2.required'    => 'กรุณาตอบคำถามข้อที่ 3.7.2',
                 'd4_1.required'    => 'กรุณาตอบคำถามข้อที่ 4.1',
             ]
         );


          $assessments = new Assessment;
          if($request->notes == null){
          $assessments->notes = "";
            } else {
          $assessments->notes = $request->notes;
          }
          $assessments->department = $request->department_id;
          $assessments->b2_1 = $request->b2_1;
          $assessments->b2_2 = $request->b2_2;
          $assessments->b2_3 = $request->b2_3;
          $assessments->b2_4 = $request->b2_4;
          $assessments->b2_5 = $request->b2_5;
          $assessments->b2_6 = $request->b2_6;
          $assessments->b2_7 = $request->b2_7;
          $assessments->b2_8 = $request->b2_8;
          $assessments->b2_9 = $request->b2_9;
          $assessments->b2_10 = $request->b2_10;
          $assessments->b2_11 = $request->b2_11;
          $assessments->b2_12 = $request->b2_12;
          $assessments->b2_13 = $request->b2_13;
          $assessments->b2_14 = $request->b2_14;
          $assessments->b2_15 = $request->b2_15;
          $assessments->c3_1_1 = $request->c3_1_1;
          $assessments->c3_1_2 = $request->c3_1_2;
          $assessments->c3_1_3 = $request->c3_1_3;
          $assessments->c3_1_4 = $request->c3_1_4;
          $assessments->c3_1_5 = $request->c3_1_5;
          $assessments->c3_2_1 = $request->c3_2_1;
          $assessments->c3_2_2 = $request->c3_2_2;
          $assessments->c3_2_3 = $request->c3_2_3;
          $assessments->c3_3_1 = $request->c3_3_1;
          $assessments->c3_3_2 = $request->c3_3_2;
          $assessments->c3_3_3 = $request->c3_3_3;
          $assessments->c3_4_1 = $request->c3_4_1;
          $assessments->c3_4_2 = $request->c3_4_2;
          $assessments->c3_4_3 = $request->c3_4_3;
          $assessments->c3_5_1 = $request->c3_5_1;
          $assessments->c3_5_2 = $request->c3_5_2;
          $assessments->c3_5_3 = $request->c3_5_3;
          $assessments->c3_5_4 = $request->c3_5_4;
          $assessments->c3_5_5 = $request->c3_5_5;
          $assessments->c3_5_6 = $request->c3_5_6;
          $assessments->c3_5_7 = $request->c3_5_7;
          $assessments->c3_5_8 = $request->c3_5_8;
          $assessments->c3_6_1 = $request->c3_6_1;
          $assessments->c3_6_2 = $request->c3_6_2;
          $assessments->c3_6_3 = $request->c3_6_3;
          $assessments->c3_7_1 = $request->c3_7_1;
          $assessments->c3_7_2 = $request->c3_7_2;
          $assessments->d4_1 = $request->d4_1;

          //$assessments->save();
          if ($assessments->save()) {

          Session::flash('success','ส่งข้อมูลเรียบร้อย!');

      } else {
          Session::flash('error', 'Some thing went wrong!!');
      }


              return redirect()->route('assessment.show', $assessments->id);

      }

    /**
     * Display the specified resource.
     *
     * @param  \App\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function show(Assessment $assessment)
    {
        return view('pages.assessment.end');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function edit(Assessment $assessment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assessment $assessment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assessment $assessment)
    {
        //
    }
}

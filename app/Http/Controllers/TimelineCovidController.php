<?php

namespace App\Http\Controllers;

use App\Timeline_covid;
use App\Timeline_covid_detail;
use Illuminate\Http\Request;
use Xmhafiz\FbFeed\FbFeed;
use Auth;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TimelineCovidDetailsExport;

class TimelineCovidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $timeline = Timeline_covid::where('user_id', '=', Auth::user()->id)->orderBy('created_at_timeline', 'desc')->get();

        // $timeline_first = Timeline_covid::where('user_id', '=', Auth::user()->id)
        //                 ->orderBy('created_at_timeline', 'desc')
        //                 ->first();
        // $timeline_detail_first = Timeline_covid_detail::where('timeline_covid_id', '=', $timeline_first->id)
        //                 ->orderBy('time_start', 'asc')
        //                 ->get();

                        // $id = $timeline_first->id;

        // $timeline = Timeline_covid_detail::where('user_id', '=', Auth::user()->id)
        //                 ->orderBy('created_at', 'desc')
        //                 ->groupBy('created_at')
        //                 ->get();

        // แยกวันที่
        $timeline = DB::table('timeline_covid_details')->where('user_id', '=', Auth::user()->id)
                        ->select(DB::raw('DATE(date) as date'))
                        ->orderBy('time', 'asc')
                        ->groupBy('date')
                        ->get();
        // แยกตามวัน

        $timeline_detail_first = Timeline_covid_detail::where('user_id', '=', Auth::user()->id)
                                                    ->orderBy('time', 'asc')
                                                    ->get()
                                                    ->groupBy(function($item) {
                                                            return $item->date;
                                                        });


   //dd($timeline_detail_first);


        return view('pages.covid.timeline.index',compact('timeline_detail_first'))->withTimeline($timeline);
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
        dd($request);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Timeline_covid  $timeline_covid
     * @return \Illuminate\Http\Response
     */


      public function show($id)
    {

         // แยกวันที่
         $timeline = DB::table('timeline_covid_details')->where('user_id', '=', Auth::user()->id)
                                                        ->select(DB::raw('DATE(date) as date'))
                                                        ->orderBy('date', 'desc')
                                                        ->groupBy('date')
                                                        ->get();

        // แยกตามวัน
        $timeline_detail_first = Timeline_covid_detail::where('user_id', '=', Auth::user()->id)
                                                        ->whereDate('date', '=', $id)
                                                        ->orderBy('date', 'desc')

                                                        ->get();

                                                        //dd($timeline_detail_first);
       return view('pages.covid.timeline.show', compact('timeline_detail_first', 'id'))->withTimeline($timeline);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Timeline_covid  $timeline_covid
     * @return \Illuminate\Http\Response
     */
    public function edit(Timeline_covid $timeline_covid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Timeline_covid  $timeline_covid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Timeline_covid $timeline_covid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Timeline_covid  $timeline_covid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Timeline_covid $timeline_covid)
    {
        //
    }

    public function wordExport_timeline($req)
    {

       // $method = $req->method();

        if ($req)
        {
            // $from = $req->input('from');
            // $to   = $req->input('to');
            // if ($req->has('search'))
            // {
            //     // select search
            //     $search = DB::select("SELECT * FROM users WHERE email_verified_at BETWEEN '$from' AND '$to'");
            //     return view('import',['ViewsPage' => $search]);
            // }
            // elseif ($req->has('exportPDF'))
            // {
            //     // select PDF
            //     $PDFReport = DB::select("SELECT * FROM users WHERE email_verified_at BETWEEN '$from' AND '$to'");
            //     $pdf = PDF::loadView('PDF_report', ['PDFReport' => $PDFReport])->setPaper('a4', 'landscape');
            //     return $pdf->download('PDF-report.pdf');
            // }


                // elseif($req->has('exportExcel'))

                // // select Excel
                return Excel::download(new TimelineCovidDetailsExport($req), 'รายงาน Timeline วันที่ '.DateThai3($req).'.xlsx');
        //     {
        // }
        // }
        //     else
        // {
        //     //select all
            // $ViewsPage = DB::select('SELECT * FROM users');
            // return view('import',['ViewsPage' => $ViewsPage]);
        }
    }
}

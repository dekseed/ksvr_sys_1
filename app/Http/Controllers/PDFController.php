<?php

namespace App\Http\Controllers;

use App\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class PDFController extends Controller
{
    public function pdf_qr_store(Request $request)
    {
        $id = $request->id;
       // $collection = collect($array);

        //$value = $collection->get('name');


        // $stock = Stock::whereIn('id', $array)
        //     ->orderByRaw(\DB::raw("FIELD(id, " . implode(",", $array) . ")"))
        //     ->get();

        $customPaper = array(0, 0, 567.00, 283.80);

       // $match = Stock::findOrFail($array);



        $match = Stock::where('id', $id)->get();
        //dd($match);
        //  $view = view('pages.stock.pdf', compact('user_details', $user_details));

        //   $pdf = PDF::loadHTML($view);
        $pdf = PDF::loadView('pages.stock.pdf', compact('match'))->setPaper($customPaper, 'portrait');
        //  $sheet = $pdf->setPaper($customPaper, 'portrait');



      //  $pdf = \PDF::loadHTML($view)->setPaper($customPaper, 'portrait');

        return $pdf->stream('download.pdf');
    }
}

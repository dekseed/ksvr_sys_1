<?php

namespace App\Http\Controllers;

use App\Stock;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function pdf_qr_store(Request $request)
    {
        dd($request);
        $store = Stock::all();

    }
}

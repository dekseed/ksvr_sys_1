<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Report1;
use DB;

class CheckUpAdminArmyController extends Controller
{
    function filter(Request $request)

     {
      if(!empty($request->fillter_kind))
      {
       $data = DB::table('report1s')
         ->select('title_name', 'first_name', 'last_name', 'cid', 'phonenumber', 'age', 'unit')
         //->where('filler_year', $request->fillter_kind)
         ->where('unit', $request->fillter_kind)
         ->get();
      }
      else
      {
       $data = Report1::orderBy('created_at', 'desc')->get();
        // 
      }
      //dd($data);
     // return datatables()->of($data)->make(true);
       return response()->json($data);
     }

    

}

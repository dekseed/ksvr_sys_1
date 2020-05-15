<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Admin;
use App\User;
use Carbon\Carbon;

class SearchController extends Controller
{
    public function fetch(Request $request)
    {
        if($request->get('queryString'))
        {
            $query = $request->get('queryString');
            // $stocks = DB::table('stocks')->where('number', 'LIKE', '%'.$query.'%')->get();

            // $output = '<ul style="display:block;position:reletive" class="list-unstyled" >';
            // foreach($stocks as $row)
            // {
            //      $output .= '<li class="ml-3">' .$row->number. '</li>';
            //     // $output =  $row->number ;
            // }
            // $output .= '</ul>';
            // echo $output;

            // $data = [];

            //     foreach ($stocks as $key => $value) {
            //         $data [] = [
            //                         'id' => $value->number,
            //                         'value' => $value->brand_id,
            //                         'model' => $value->model
            //                     ];
            //     }
            //  return response()->json($output);

            return $stocks = DB::table('stocks')->where('number', 'LIKE', '%' . $query . '%')->get();
        }
    }

}

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

    public function facebook_feed()
    {

        $config = [
            'secret_key' => 'bb073da251e7027987c1a102825eecf2',
            'app_id' => '655439795689740',
            'page_name' => 'ksvrhospital',
            'access_token' => 'EAAJUHngxmQwBAMZAT5J88g3XxZBuAM4AypzRiMIfPOMaSg2Bv4hDpLzJ0oVBA4eiU8ZAg2VXvkONXMhzLCtV4p8YlQGOCwCNx1Nj0wN47KLXQGuz3qzAlGfb0VxeIQYHBbuJrKrVXScBruOgOWNyZAWKJvR3ktf8i7pmbEgf1xI7XitjNkp9xM3jqQuCOhIZD',
        ];


             $data = fb_feed($config)->feedLimit(12)->fetch();
            // $data = FbFeed::make($config)->fetch();


            // $data = FbFeed::make($config)
            //         ->feedLimit(12)
            //         ->fetch();

            return response()->json($data);

    }
}

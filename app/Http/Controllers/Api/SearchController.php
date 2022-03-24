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
use Xmhafiz\FbFeed\FbFeed;

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
            'access_token' => 'EAAJUHngxmQwBABG6BqQvp6EMEgpaSJ2IgPB4DC8hiZBL6gxpuSoNXgdXAsRP6Vbxj8rZCQmCv2VDTrzcB7ZBuQqoA9mF8AC5x6PZCoW9GUfyE2i3M0gqYHE5b1KuHEzZAZA9tSAeYFq2e64KkiyEXEOLXURqHKRz9wbuuwFzD1RXzakhYdLY64x50JZBtUF5DDDx5lZBurPRYAZDZD',
        ];
        // $data = fb_feed($config)->fetch();

            $data = FbFeed::make($config)
                    ->feedLimit(12)
                    ->fetch();

            return response()->json($data);

    }
}

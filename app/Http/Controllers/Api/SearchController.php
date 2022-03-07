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
            'secret_key' => 'b14662ab259eb4dc54efd2cfacd1698c',
            'app_id' => '189274632563556',
            'page_name' => 'ksvrhospital',
            'access_token' => 'EAAEuSpZAg23IBAPbxmNxLDN65RyGPF4kXUF9uELrghAtZAXgNxGR7wWk2LSYmwECOYBMC8GNQFZC991ujwtUlyEbIuEhhkhSpz1ZByAjjEWEWV78cHLItzK0kVtKAZBl4A7kX5kChud5pQtynrcE5NVB07TLJHJWTPC6dqZCf7QgO2mTZCXCd9awH31qZCqZCXYkZD',
        ];
        // $data = fb_feed($config)->fetch();
            $data = FbFeed::make($config)
                    ->feedLimit(12)
                    ->fetch();

            return response()->json($data);

    }
}

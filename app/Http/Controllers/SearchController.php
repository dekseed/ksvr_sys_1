<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Stock;

class SearchController extends Controller
{
    public function fetch(Request $request)
    {
        if ($request->ajax()) {

            $query = $request->get('search');
            $stocks = Stock::where('number', 'LIKE', '%' . $query . '%')->limit(10)->get();

            // $output = '<ul style="display:block;position:reletive" class="list-unstyled" >';
            // foreach($stocks as $row)
            // {
            //      $output .= '<li class="ml-3">' .$row->number. '</li>';
            //     // $output =  $row->number ;
            // }
            // $output .= '</ul>';
            // echo $output;+

            if(count($stocks) == 0){

                 $data[] = 'ไม่มีข้อมูล';

            }else{
                $data = array();
                foreach ($stocks as $value) {
                    // $data[] = [
                    //     'id' => $value->id,
                    //     'number' => $value->number,
                    //     'brand' => $value->brand_id,
                    //     'model' => $value->model
                    // ];
                    $data[] = array("label" => $value->number,
                                    "model" => $value->model,
                                    "category_equipment" => $value->category_equipment->name,
                                    "brand" => $value->brand->name,
                                    "sn" => $value->sn,
                                    "name" => $value->name,
                                    "expenditure" =>  $value->expenditure. " ปี " .$value->year,
                                    "id_stock" => $value->id,
                                );
                    // $data[] = $value->number;
                }

            }

            return response()->json($data);

            //return $data;
        }
    }

}

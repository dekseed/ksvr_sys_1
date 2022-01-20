<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Stock;
use App\Title_name;

class SearchController extends Controller
{
    // public function fetch(Request $request)
    public function fetch()
    {

        //$query = $request->search;

            // $stocks = Stock::where('number', 'LIKE', '%' . $query . '%')->take(5)->get();

            // if(count($stocks) == 0){

            //      $data[] = 'ไม่มีข้อมูล';

            // }else{
            //     $data = array();
            //     foreach ($stocks as $value) {
            //         // $data[] = [
            //         //     'id' => $value->id,
            //         //     'number' => $value->number,
            //         //     'brand' => $value->brand_id,
            //         //     'model' => $value->model
            //         // ];
            //         $data[] = array("label" => $value->number,
            //                         "model" => $value->model,
            //                         "category_equipment" => $value->category_equipment->name,
            //                         "brand" => $value->brand->name,
            //                         "sn" => $value->sn,
            //                         "name" => $value->name,
            //                         "expenditure" =>  $value->expenditure. " ปี " .$value->year,
            //                         "id_stock" => $value->id,
            //                         "stock_user_id" => $value->user_stock->name,
            //                     );
            //         // $data[] = $value->number;
            //     }

            // }
            // $stocks = Stock::all()->with('brand')
            // ->with('user_stock')
            // ->with('category_equipment');
            $stocks = Stock::with('brand')->with('user_stock')->with('department')->with('model_cartridge_ink')
            ->with('category_equipment')->get();
            return response()->json($stocks);

            //return $data;

    }

}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Profile_covid;
use Illuminate\Http\Request;

class CovidController extends Controller
{
    public function index()
    {

        $agency = Profile_covid::orderBy('created_at', 'desc')->get();

//
            foreach($agency as $row)
            {
                $output = '
                <tr>
                    <td>'.$row->company_name.'</td>
                    <td>'.$row->company_address.'</td>
                    <td>'.$row->immediate_contact.'</td>
                </tr>
                ';
            }

            $data = array(
                'table_data' => $output
            );

        return response()->json($data);


    }
}

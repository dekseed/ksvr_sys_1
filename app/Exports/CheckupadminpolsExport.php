<?php

namespace App\Exports;

use App\Check_up_admin_pol;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;

class CheckupadminpolsExport implements FromCollection
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
                
         $data = DB::table('check_up_admin_pols')
            ->select('*')
            ->leftjoin('check_up_user_pols', 'check_up_user_pols.id', '=', 'check_up_admin_pols.user_pols_id')
            ->where('check_up_user_pols.kind_check_up_id', '=', '5')
            ->orderBy('check_up_admin_pols.created_at', 'desc')
             ->get();
 
       
        return $data;
       // return Check_up_admin_pol::all();
    }
}

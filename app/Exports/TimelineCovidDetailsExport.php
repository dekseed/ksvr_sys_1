<?php

namespace App\Exports;

use App\Timeline_covid_detail;
use Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Contracts\Queue\ShouldQueue;

class TimelineCovidDetailsExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents, WithMapping
{
    use Exportable;

    /**
    * @return \Illuminate\Support\Collection
    */
     // varible form and to
    //  public function __construct(String $from = null , String $to = null)
    //  {
    //      $this->from = $from;
    //      $this->to   = $to;
    //  }
    public function __construct(String $req = null)
     {
         $this->req = $req;
     }
     //function select data from database
     public function collection()
     {
         return  Timeline_covid_detail::with('user')
                                                        ->where('user_id', '=', Auth::user()->id)
                                                        ->whereDate('date', '=', $this->req)
                                                        ->orderBy('date', 'desc')
                                                        //->select('users.*','users.*', 'timeline_covid_details.*')
                                                        ->get();
     }
     /**
     * @return array
     */
    public function registerEvents(): array
    {
        $fontStyle = [
            'font' => [
                'size' => 16
            ]
        ];
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A:W'; // All headers
               // $event->sheet->setFontSize(15);
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(16)->setName('TH SarabunIT๙');

            },
        ];
    }



    public function map($user): array
    {
        if($user->D == 1){
            $D = '/';
        }else{
            $D = '';
        }
        if($user->M == 1){
            $M = '/';
        }else{
            $M = '';
        }
        if($user->H == 1){
            $H = '/';
        }else{
            $H = '';
        }
        if($user->A == 1){
            $A = '/';
        }else{
            $A = '';
        }
        if($user->T == 1){
            $T = $user->temperature;
        }else{
            $T = '';
        }
        if($user->T2 == 1){

            if($user->T2_Antigen == 1){

                if($user->T2_Antigen_Result == 1){
                    $T2_Antigen_Result = 'ลบ';
                }elseif($user->T2_Antigen_Result == 2){
                    $T2_Antigen_Result = 'บวก';
                }elseif($user->T2_Antigen_Result == 3){
                    $T2_Antigen_Result = 'ยังไม่ทราบผล';
                }

                $T2_Antigen = 'Antigen repid test'.'(' . $T2_Antigen_Result. ')';
            }
            else{
                $T2_Antigen = '';
            }

            if($user->T2_RT_PCR == 1){

                if($user->T2_RT_PCR_Result == 1){
                    $T2_RT_PCR_Result = 'ลบ';
                }elseif($user->T2_RT_PCR_Result == 2){
                    $T2_RT_PCR_Result = 'บวก';
                }elseif($user->T2_RT_PCR_Result == 3){
                    $T2_RT_PCR_Result = 'ยังไม่ทราบผล';
                }

                $T2_RT_PCR = 'RT-PCR'.'(' . $T2_RT_PCR_Result. ')';
            }else{
                $T2_RT_PCR = '';
            }


            if($user->T2_Antibody == 1){

                if($user->T2_Antibody_Result == 1){
                    $T2_Antibody_Result = 'ลบ';
                }elseif($user->T2_Antibody_Result == 2){
                    $T2_Antibody_Result = 'บวก';
                }elseif($user->T2_Antibody_Result == 3){
                    $T2_Antibody_Result = 'ยังไม่ทราบผล';
                }

                $T2_Antibody = 'Antibody repid test'.'(' . $T2_Antibody_Result. ')';
            }else{
                $T2_Antibody = '';
            }


            $T2 = '/ ' . '(' . $T2_Antigen . ',' . $T2_RT_PCR . ',' . $T2_Antibody . ')';


        }else{
            $T2 = '';
        }

        return [
            '',
            $user->user->title_name->name,
            $user->user->first_name,
            $user->user->last_name,
            $user->time,
            $user->time_end,
            $user->address,
            $user->description,
            $D,
            $M,
            $H,
            $T,
            $T2,
            $A,
        ];
    }

     public function headings(): array
     {
         return [
             'ลำดับ',
             'ยศ',
             'ชื่อ',
             'สกุล',
             'เวลาเริ่ม',
             'เวลาสิ้นสุด',
             'สถานที่',
             'กิจกรรม',
             'D',
             'M',
             'H',
             'T ˚c',
             'T',
             'A',
        ];
    }
}

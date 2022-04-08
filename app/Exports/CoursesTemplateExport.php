<?php

namespace App\Exports;

use App\ReportCheckUp;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;

class CoursesTemplateExport implements FromCollection, WithColumnFormatting
{
    use Exportable;

    public function __construct(int $kinds, int $year)
    {
        $this->kinds = $kinds;
        $this->year = $year;
    }


    /**
    * @return \Illuminate\Support\Collection
    */

    public function collection()
    {
        return DB::table('report_check_ups')

        ->leftJoin('title_names', 'title_names.id', '=', 'report_check_ups.title_name_id')

        ->leftJoin('report_check_up_1s', 'report_check_up_1s.report_check_up_id', '=', 'report_check_ups.id')
        ->leftJoin('kind_check_ups', 'kind_check_ups.id', '=', 'report_check_ups.kind_check_up_id')
        ->leftJoin('report_check_up_detail_1s', 'report_check_ups.id', '=', 'report_check_up_detail_1s.report_check_up_id')
        ->select(    'title_names.name as titlename',
                     'report_check_ups.first_name',
                     'report_check_ups.last_name',
                     'report_check_ups.hn',
                     'report_check_ups.cid',
                     'kind_check_ups.name as kind_check_upsname',
                     'report_check_ups.position',
                     'report_check_ups.srg',
                     'report_check_ups.age',
                     'report_check_ups.gender',
                     'report_check_ups.class',
                     'report_check_up_detail_1s.weight',
                     'report_check_up_detail_1s.height',
                     'report_check_up_detail_1s.bmi',
                     'report_check_up_detail_1s.waist',
                     'report_check_up_detail_1s.pressure_1',
                     'report_check_up_detail_1s.pulse_1',
                     'report_check_up_detail_1s.x_ray',
                     'report_check_up_detail_1s.x_ray_d',
                     'report_check_up_detail_1s.urine',
                     'report_check_up_detail_1s.urine_d1',
                     'report_check_up_detail_1s.urine_d2',
                     'report_check_up_detail_1s.urine_d',
                     'report_check_up_detail_1s.cbc',
                     'report_check_up_detail_1s.cbc_d',
                     'report_check_up_detail_1s.blood_glu',
                     'report_check_up_detail_1s.blood_chol',
                     'report_check_up_detail_1s.blood_tg',
                     'report_check_up_detail_1s.blood_hdl',
                     'report_check_up_detail_1s.blood_ldl',
                     'report_check_up_detail_1s.blood_bun',
                     'report_check_up_detail_1s.blood_cr',
                     'report_check_up_detail_1s.blood_uric',
                     'report_check_up_detail_1s.blood_ast',
                     'report_check_up_detail_1s.blood_alt',
                     'report_check_up_detail_1s.pap',
                     'report_check_up_detail_1s.pap_d',
                     'report_check_up_1s.l12',
                     'report_check_up_1s.l12_d',
                     'report_check_up_1s.m13_1',
                     'report_check_up_1s.m13_2',
                     'report_check_up_1s.m13_3'


        )
        ->where('report_check_ups.kind_check_up_id', $this->kinds)
        ->where('report_check_up_1s.year', $this->year)
        ->where('report_check_up_detail_1s.year', $this->year)

                    ->get();
    }

    // public function headings(): array
    // {
    //     return [
    //         'Course Code',
    //         'Course Description',
    //         'Status',
    //         $this->kinds,
    //         $this->year
    //     ];
    // }

    public function columnFormats(): array
    {
        return [
            'E' => NumberFormat::FORMAT_NUMBER,

        ];
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tender;
use App\Job;

class PagesContoller extends Controller
{

    public function index()
    {
      $tenders = Tender::orderBy('created_at', 'desc')->paginate(10);
      $jobs = Job::orderBy('created_at', 'desc')->paginate(10);

      return view('pages.webs.welcome')->withTenders($tenders)->withJobs($jobs);
    }
   
    /// แผนกตรวจโรคผู้ป่วยนอก
      public function opd_index()
    {
        return view('pages.webs.department.opd.index');
    }
    ///////////////////
    /// แผนกฉุกเฉิน
     public function er_index()
    {
        return view('pages.webs.department.er.index');
    }
    ///////////////////
    /// แผนกพยาธิ
      public function lab_index()
    {
        return view('pages.webs.department.lab.index');
    }
    public function lab_download_index()
    {
        return view('pages.webs.department.lab.download');
    }
    
    ///////////////////
    /// แผนกแพทย์ทางเลือก
      public function alternative_medicine_index()
    {
        return view('pages.webs.department.alternative_medicine.index');
    }
    ///////////////////
    /// แผนกกายภาพบำบัด
      public function physical_therapy_index()
    {
        return view('pages.webs.department.alternative_medicine.physical_therapy.index');
    }
    //////////////////
    /// แพทย์แผนไทย
      public function thai_traditional_medicine_index()
    {
        return view('pages.webs.department.alternative_medicine.thai_traditional.index');
    }
    //////////////////
    /// ฝั่งเข็ม
      public function needle_ide_index()
    {
        return view('pages.webs.department.alternative_medicine.needle_ide.index');
    }
    //////////////////
    /// Spa
      public function spa_index()
    {
        return view('pages.webs.department.alternative_medicine.spa.index');
    }
    //////////////////
    /// หน่วยไตเทียม
      public function hemodialysis_unit_index()
    {
        return view('pages.webs.department.hemodialysis_unit.index');
    }
    //////////////////
    /// โภชนาการ
      public function nutrition_index()
    {
        return view('pages.webs.department.nutrition.index');
    }
    public function nutrition_list_index()
    {
        return view('pages.webs.department.nutrition.list');
    }
    public function nutrition_list_general_index()
    {
        return view('pages.webs.department.nutrition.list_food');
    }
    public function nutrition_detail_food_index()
    {
        return view('pages.webs.department.nutrition.detail_food');
    }
    
    //////////////////
    /// ทันตกรรม
      public function dental_index()
    {
        return view('pages.webs.department.dental.index');
    }
    //////////////////
    /// 30 บาท
      public function health_center_index()
    {
        return view('pages.webs.department.30.index');
    }

}

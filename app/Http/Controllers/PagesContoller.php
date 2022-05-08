<?php

namespace App\Http\Controllers;

use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;
use Illuminate\Http\Request;
use App\Tender;
use App\Job;
use App\Publicize;
use App\Category_equipment;
use App\Stock;
use App\Brand;
use App\Cate_lab_upload_file;
use App\Lab_upload_file;
use App\Stock_kind;
// use Xmhafiz\FbFeed\FbFeed;
use DB;

class PagesContoller extends Controller
{

    public function index()
    {

    //     $config = [
    //         'secret_key' => 'b14662ab259eb4dc54efd2cfacd1698c',
    //         'app_id' => '189274632563556',
    //         'page_name' => 'ksvrhospital',
    //         'access_token' => 'EAACsJO89K2QBAFJFCr6PkPlCeFQCgtzqPfEM1mZB9HZBiCRfY9ZCPvJXEZAKt8OV8lbPZBczrxYANC8Li6Nr0mk6j7RGsDPkVvnaZAMWjfz6zAvZAhBIbchzFRYdT8NoyevXZC75oweNK4VCoA71pUfaBS51zqreEjYLKqGHbunjXwZDZD',
    //     ];
    //    // $data = fb_feed($config)->fetch();
    //     $data1 = FbFeed::make($config)
    //                 ->feedLimit(12)
    //                 ->fetch();
        // $data = json_encode($data1);


        $publicizes = Publicize::orderBy('date', 'desc')->paginate(10);
        $tenders = Tender::orderBy('date', 'desc')->paginate(10);
        $jobs = Job::orderBy('date', 'desc')->paginate(10);

         //dd($data);
//dd($tenders);
      return view('pages.webs.welcome')->withTenders($tenders)
                                        ->withPublicizes($publicizes)
                                       //  ->withData($data)
                                        ->withJobs($jobs);
    }


    public function felicitate()
    {
        return view('pages.webs.blank');
    }
    /// km
    public function km_ksvr()
    {
        return view('pages.webs.km.index');
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
        $tenders = Lab_upload_file::orderBy('created_at', 'desc')->paginate(100);
        $cat_tenders = Cate_lab_upload_file::orderBy('created_at', 'desc')->paginate(100);

        $tenders = Lab_upload_file::orderBy('created_at', 'desc')
        ->get()
        ->groupBy(function($item) {

                return $item->cate_lab_upload_file->name;
            });

//dd($timeline);

        return view('pages.webs.department.lab.download')->withTenders($tenders)->withCat_tenders($cat_tenders);

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
    //////////////////
    /// 30 บาท
    public function tender()
    {
        $tenders = Tender::orderBy('date', 'desc')->paginate(100);

        return view('pages.webs.tender')->withTenders($tenders);
    }
    //////////////////
    /// งานเวชทะเบียน

    public function medical_index(){
        return view('pages.webs.department.medical.index');
    }
    public function medical_register_index(){
        return view('pages.webs.department.medical.register');
    }
    public function medical_request_index(){
        return view('pages.webs.department.medical.request');
    }
    public function medical_satisfaction_index(){
        return view('pages.webs.department.medical.satisfaction');
    }
    public function medical_updatemedical_index(){
        return view('pages.webs.department.medical.updatemedical');
    }
    //////////////////

    public function about()
    {
        return view('pages.webs.about');
    }
    public function contact()
    {
        return view('pages.webs.contact');
    }
    public function officer()
    {
        return view('pages.webs.officer');
    }
    public function patient()
    {
        return view('pages.webs.patient');
    }
    public function schedule()
    {
        return view('pages.webs.schedule');
    }


    public function show_user($id)
    {

        $stocks = Stock::find($id);
        $cateEquipments = Category_equipment::all();
        $brands = Brand::all();
        $kinds = Stock_kind::all();

        //dd($stocks);
        return view('pages.stock.show')->withCateEquipments($cateEquipments)->withStocks($stocks)->withKinds($kinds)->withBrands($brands);
    }
}

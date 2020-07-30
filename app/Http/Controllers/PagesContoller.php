<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesContoller extends Controller
{
      public function opd_index()
    {
        return view('pages.webs.department.opd.index');
    }
    
      public function lab_index()
    {
        return view('pages.webs.department.lab.index');
    }

      public function alternative_medicine_index()
    {
        return view('pages.webs.department.alternative_medicine.index');
    }
    
      public function physical_therapy_index()
    {
        return view('pages.webs.department.physical_therapy.index');
    }

      public function hemodialysis_unit()
    {
        return view('pages.webs.department.hemodialysis_unit.index');
    }
      public function nutrition()
    {
        return view('pages.webs.department.nutrition.index');
    }
}

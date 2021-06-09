<?php

namespace App\Http\Controllers;

use App\Tender;
use App\CateTender;
use Illuminate\Http\Request;
use App\User;
use DB;
use Session;
use Hash;
use Input;
use Illuminate\Support\Facades\Storage;
use File;
use Illuminate\Foundation\Http\FormRequest;

class TenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $tenders = Tender::orderBy('created_at', 'desc')->paginate(100);

        return view('pages.webs.manage_web.tender.index')->withTenders($tenders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $cate = CateTender::all();

        return view('pages.webs.manage_web.tender.create')->withCate($cate);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, array(
        'name' => 'required|max:255',
        //'description' => 'required|max:3000',
        'cate_tenders' => 'required|integer',
        'file' => 'required|mimes:pdf',
      ));
// dd($request);

      if(!$request->hasFile('file') && !$request->file('file')->isValid()) {
            return abort(404, 'ไม่สามารถอัพโหลดไฟล์นี้ได้');
      }
            $file = $request->file('file');

            $filename = $file->getClientOriginalName();

            $extension = $file->getClientOriginalExtension();
            $fileName = rand(11111, 99999) . '.' . $extension;
            $file->move('files/tender', $fileName);


      $tender = new Tender();

      $tender->name = $request->name;
      $tender->description = $request->description;
      $tender->cate_tender_id = $request->cate_tenders;
      $tender->user_id = $request->user()->id;
      $tender->user_edit_id = $request->user()->id;
      $tender->date = $request->date;
      $tender->filename = $filename;
      $tender->file = $fileName;

            $tender->save();
            return redirect()->route('tender.index')->with(['message' => 'เพิ่มข้อมูลเรียบร้อย!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function show(Tender $tender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function edit($tender)
    {
         $tenders = Tender::find($tender);
      $cate = CateTender::all();

      return view('pages.webs.manage_web.tender.edit')->withTenders($tenders)->withCate($cate);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
        'name' => 'required|max:255',
        'description' => 'required|max:3000',
        'cate_tenders' => 'required|integer'

      ));

      $tender = Tender::find($id);
  //dd($request);
      if($request->hasFile('file')) {
 //dd($request->hasFile('file'));
        $this->validate($request, array(
          'file' => 'required|mimes:pdf'
        ));

            $oldFile = $tender->pic;

            $filename = 'files/tender/' . $oldFile;
            File::delete($filename);


              $file = $request->file('file');
              $filename = $file->getClientOriginalName();
              $extension = $file->getClientOriginalExtension();
              $fileName = rand(11111, 99999) . '.' . $extension;
              /// Uploads-Web
               $file->move('files/tender', $pic);
              $tender->filename = $filename;
              $tender->file = $fileName;


      }

      $tender->name = $request->name;

      $tender->description = $request->description;
      $tender->cate_tender_id = $request->cate_tenders;
      $tender->user_edit_id = $request->user()->id;
      $tender->date = $request->date;

            $tender->save();
            return redirect()->route('tender.index')->with(['message' => 'ปรับปรุงข้อมูลเรียบร้อย!']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $tenders = Tender::find($id);
            $oldFile = $tenders->file;
           $filename = 'files/tender/' . $oldFile;
            File::delete($filename);
            $tenders->delete();

      $tenders->delete();

     return redirect()->route('tender.index')->with(['message' => 'ลบข้อมูลเรียบร้อย!']);
    }
}

<?php

namespace App\Http\Controllers;

use App\Job;
use App\CatJob;
use Illuminate\Http\Request;
use App\User;
use DB;
use Session;
use Hash;
use Input;
use Illuminate\Support\Facades\Storage;
use File;
use Illuminate\Foundation\Http\FormRequest;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenders = Job::orderBy('created_at', 'desc')->paginate(100);

        return view('pages.webs.manage_web.jobs.index')->withTenders($tenders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate = CatJob::all();

        return view('pages.webs.manage_web.jobs.create')->withCate($cate);
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
        'description' => 'required|max:3000',
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
            $file->move('files/job', $fileName);
    

      $tender = new Job();

      $tender->name = $request->name;
      $tender->description = $request->description;
      $tender->cate_job_id = $request->cate_tenders;
      $tender->user_id = $request->user()->id;
      $tender->user_edit_id = $request->user()->id;
      $tender->date = $request->date;
      $tender->filename = $filename;
      $tender->file = $fileName;

            $tender->save();
            return redirect()->route('job.index')->with(['message' => 'เพิ่มข้อมูลเรียบร้อย!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit($tender)
    {
        $tenders = Job::find($tender);
        $cate = CatJob::all();

      return view('pages.webs.manage_web.jobs.edit')->withTenders($tenders)->withCate($cate);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request, array(
        'name' => 'required|max:255',
        'description' => 'required|max:3000',
        'cate_tenders' => 'required|integer'
        
      ));

      $tender = Job::find($id);
  //dd($request);
      if($request->hasFile('file')) {
 //dd($request->hasFile('file'));
        $this->validate($request, array(
          'file' => 'required|mimes:pdf'
        ));
             
            $oldFile = $tender->pic;

            $filename = 'files/job/' . $oldFile;
            File::delete($filename);
        
     
              $file = $request->file('file');
              $filename = $file->getClientOriginalName();
              $extension = $file->getClientOriginalExtension();
              $fileName = rand(11111, 99999) . '.' . $extension;
              /// Uploads-Web
               $file->move('files/job', $pic);
              $tender->filename = $filename;
              $tender->file = $fileName;

              
      }

      $tender->name = $request->name;
      
      $tender->description = $request->description;
      $tender->cate_job_id = $request->cate_tenders;
      $tender->user_edit_id = $request->user()->id;
      $tender->date = $request->date;

            $tender->save();
            return redirect()->route('job.index')->with(['message' => 'ปรับปรุงข้อมูลเรียบร้อย!']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $tenders = Job::find($id);
            $oldFile = $tenders->file;
           $filename = 'files/job/' . $oldFile;
            File::delete($filename);
            $tenders->delete();

      $tenders->delete();

     return redirect()->route('job.index')->with(['message' => 'ลบข้อมูลเรียบร้อย!']);
    }
}

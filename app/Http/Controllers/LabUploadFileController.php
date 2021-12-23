<?php

namespace App\Http\Controllers;

use App\Lab_upload_file;
use App\Cate_lab_upload_file;
use File;
use Illuminate\Http\Request;

class LabUploadFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenders = Lab_upload_file::orderBy('created_at', 'desc')->paginate(100);
        return view('pages.LAB.upload.index')->withTenders($tenders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate = Cate_lab_upload_file::all();

        return view('pages.LAB.upload.create')->withCate($cate);
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
            'file' => 'required|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx',
          ));
   //dd($request);

          if(!$request->hasFile('file') && !$request->file('file')->isValid()) {
                return abort(404, 'ไม่สามารถอัพโหลดไฟล์นี้ได้');
          }
                $file = $request->file('file');

                $filename = $file->getClientOriginalName();

                $extension = $file->getClientOriginalExtension();
                $fileName = rand(11111, 99999) . '.' . $extension;
                $file->move('files/LAB', $fileName);


          $tender = new Lab_upload_file();

          $tender->name = $request->name;
          $tender->description = $request->description;
          $tender->cate_lab_upload_file_id = $request->cate_tenders;
          $tender->user_id = $request->user()->id;
          $tender->user_edit_id = $request->user()->id;
        //   $tender->date = $request->date;
          $tender->filename = $filename;
          $tender->file = $fileName;

                $tender->save();
                return redirect()->route('LAB-Upload.index')->with(['message' => 'เพิ่มข้อมูลเรียบร้อย!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lab_upload_file  $lab_upload_file
     * @return \Illuminate\Http\Response
     */
    public function show(Lab_upload_file $lab_upload_file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lab_upload_file  $lab_upload_file
     * @return \Illuminate\Http\Response
     */
    public function edit($tender)
    {
        $tenders = Lab_upload_file::find($tender);
        $cate = Cate_lab_upload_file::all();

      return view('pages.LAB.upload.edit')->withTenders($tenders)->withCate($cate);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lab_upload_file  $lab_upload_file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lab_upload_file $lab_upload_file, $id)
    {
        $this->validate($request,
        [
            'name' => 'required|max:255'

        ],
        [
            'name.required'  => 'กรุณากรอกชื่อรายการ'
         ]
        );

          $tender = $lab_upload_file->find($id);

          if($request->hasFile('file')) {

            $this->validate(
                $request,
                [
                    'file' => 'required|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx',

                ],
                [
                    'file'    => 'รับรองไฟล์นามสกุล pdf,doc,docx,xls,xlsx,ppt,pptx เท่านั้น',
                    ]
                );

                $oldFile = $tender->file;

                $filename = 'files/LAB/' . $oldFile;
                //dd($filename);
                File::delete($filename);


                  $file = $request->file('file');
                  $filename = $file->getClientOriginalName();
                  $extension = $file->getClientOriginalExtension();
                  $fileName = rand(11111, 99999) . '.' . $extension;
                  /// Uploads-Web
                   $file->move('files/LAB', $fileName);
                  $tender->filename = $filename;
                  $tender->file = $fileName;


          }

          $tender->name = $request->name;

          $tender->description = $request->description;
          $tender->cate_lab_upload_file_id = $request->cate_tenders;
          $tender->user_edit_id = $request->user()->id;
        //   $tender->date = $request->date;

                $tender->save();
                return redirect()->route('LAB-Upload.index')->with(['message' => 'ปรับปรุงข้อมูลเรียบร้อย!']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lab_upload_file  $lab_upload_file
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $tenders = Lab_upload_file::find($id);
            $oldFile = $tenders->file;
           $filename = 'files/LAB/' . $oldFile;
            File::delete($filename);
            $tenders->delete();

      $tenders->delete();

     return redirect()->route('LAB-Upload.index')->with(['message' => 'ลบข้อมูลเรียบร้อย!']);
    }
}

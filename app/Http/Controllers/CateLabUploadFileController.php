<?php

namespace App\Http\Controllers;

use App\Cate_lab_upload_file;
use Illuminate\Http\Request;

class CateLabUploadFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cate = Cate_lab_upload_file::orderBy('created_at', 'desc')->get();
        // dd($cat_tenders);

         return view('pages.LAB.upload.cate_LAB.index')->withCate($cate);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' => 'required|max:255'
          ));

          $tender = new Cate_lab_upload_file;

          $tender->name = $request->name;
          $tender->description = $request->description;

          $tender->save();

          return redirect()->route('cate-LAB-Upload.index')->with(['message' => 'เพิ่มข้อมูลเรียบร้อย!']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cate_lab_upload_file  $cate_lab_upload_file
     * @return \Illuminate\Http\Response
     */
    public function show(Cate_lab_upload_file $cate_lab_upload_file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cate_lab_upload_file  $cate_lab_upload_file
     * @return \Illuminate\Http\Response
     */
    public function edit(Cate_lab_upload_file $cate_lab_upload_file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cate_lab_upload_file  $cate_lab_upload_file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cate_lab_upload_file $cate_lab_upload_file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cate_lab_upload_file  $cate_lab_upload_file
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tenders = Cate_lab_upload_file::find($id);
   //  $ten = CateTender::findOrFail($id);
   //CateTender::where('id', $id)->forcedelete();
     $tenders->delete();

     return redirect()->route('cate-LAB-Upload.index')->with(['message' => 'ลบข้อมูลเรียบร้อย!']);
    }
}

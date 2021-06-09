<?php

namespace App\Http\Controllers;

use App\Department;
use App\Profile;
use App\Title_name;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Hash;
use Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * Store a newly created resource in uploadimag.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function uploadimag(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'file' => 'file|max:2048|mimetypes:image/jpeg,image/png,image/bmp',
            ],
            [

                'file.mimetypes' => "อัพโหลดได้เฉพาะนามสกุล .jpeg, .png, .bmp เท่านั้น",
                'file.max' => "ไฟล์ขนาดไม่เกิน 2MB (2048 KB)",

            ]
        );

        $stock = User::find($id);
       // dd($stock);
        if ($request->hasFile('file')) {

            $oldFile = $stock->pic;

                if($oldFile == 'default.jpg'){

                    $file = $request->file('file');

                    $picname = $file->getClientOriginalName();

                    $extension = $file->getClientOriginalExtension();
                    $pic = rand(11111, 99999) . '.' . $extension;

                    $file->move('images', $pic);

                    $stock->picname = $picname;
                    $stock->pic = $pic;

                }else{

                    $filename = 'images/' . $oldFile;
                    File::delete($filename);


                    $file = $request->file('file');

                    $picname = $file->getClientOriginalName();

                    $extension = $file->getClientOriginalExtension();
                    $pic = rand(11111, 99999) . '.' . $extension;

                    $file->move('images', $pic);

                    $stock->picname = $picname;
                    $stock->pic = $pic;
                }

           $stock->save();
        }

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    //     $user = User::findOrFail($id);
    //     $department = Department::all();
    //     $titleNames = Title_name::all();
    //   //  dd($title_name);
    //     return view('pages.profile.show')->withUser($user)->withDepartment($department)->withTitleNames($titleNames);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */

    public function show1()
    {
     //   $user = User::findOrFail($id);
        $department = Department::all();
        $titleNames = Title_name::all();
      //  dd($title_name);
        return view('pages.profile.show')->withDepartment($department)->withTitleNames($titleNames);
    }

    public function edit($id)
    {

        // $user = User::findOrFail($id);

        // return view('pages.profile.show')->withUser($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if ($request->oldpassword) {

           // dd($request->oldpassword);
            $hashedPassword = Auth::user()->password;

                if (Hash::check($request->oldpassword, $hashedPassword)) {

                    if (!Hash::check($request->password, $hashedPassword)) {

                        $user = User::findOrFail($id);
                        $user->password = Hash::make($request->password);
                        $user->save();

                        Session::flash('message', 'เปลี่ยนรหัสผ่านเรียบร้อย!');
                        return redirect()->route('profile.show', $id);

                    } else {

                        Session::flash('message', 'รหัสผ่านใหม่ไม่สามารถเป็นรหัสผ่านเดิมได้ !');
                        return redirect()->back();

                    }
                } else {

                    Session::flash('message', 'รหัสผ่านเดิมไม่ตรงกัน !');
                    return redirect()->back();

                }

        } else {

            $hashedPassword = Auth::user()->password;

            if (Hash::check($request->password, $hashedPassword)) {

                $this->validate($request, [

                    'email' => 'required|email|unique:users,email,' . $id,
                    'title_name' => ['required', 'string', 'max:255'],
                    'first_name' => ['required', 'string', 'max:255'],
                    'last_name' => ['required', 'string', 'max:255'],
                    'position' => ['required', 'string', 'max:255'],
                    'department' => ['required', 'string', 'max:255'],


                ]);
            $user = User::findOrFail($id);
            $user->title_name_id = $request->title_name;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->position = $request->position;
            $user->department_id = $request->department;
            $user->email = $request->email;

            $user->save();


            Session::flash('message', 'แก้ไขข้อมูลเรียบร้อย!');
            return redirect()->route('profile.show1');

            } else {

                Session::flash('message', 'รหัสผ่านเก่าไม่ตรงกัน !');
                return redirect()->back();

            }
        }

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}

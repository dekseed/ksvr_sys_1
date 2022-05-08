<?php

namespace App\Http\Controllers;

use App\Department;
use App\IDCard\CateIDCard;
use App\IDCard\IDCard;
use App\IDCard\Receive_IdCard;
use App\IDCard\CateStatusIDCard;
use App\IDCard\ReceiveTimelineIdCard;
use App\IDCard\StatusIDCard;

use App\Profile;
use App\ReportCheckUp;
use App\Report_check_up_main;
use App\Title_name;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Hash;
use Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use DB;

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
        $cate_idCard = CateIDCard::all();
        $cate_Status = CateStatusIDCard::all();
        $status_idCard = StatusIDCard::all();

        if(Auth::user()->report_check_up_id == '0'){

            $data3 = 'ไม่มีข้อมูล';

        }else{
            $data3 = Report_check_up_main::where('report_check_up_id', Auth::user()->report_check_up_id)->get();
        }


            $data_idCard = Receive_IdCard::where('user_id', Auth::user()->id)
            // ->select('address', 'code', DB::raw('(*) as amount'))
            ->get();

            $total_time1 = Receive_IdCard::where('user_id', '=', Auth::user()->id)->latest()->first();



            if ($total_time1 > '0') {
                if($total_time1->status_i_d_cards_id == '5'){
                    $status_card = '0';
                }elseif($total_time1->status_i_d_cards_id == '6'){
                    $status_card = '0';

                }else{
                    $status_card = '1';
                }

            }else{
                $status_card = '0';
            }
       // dd($status_card);
            // $data_time_idCard = ReceiveTimelineIdCard::with('receive_timeline_IdCards')->get();
        //

        return view('pages.profile.show', compact('cate_idCard', 'cate_Status', 'data_idCard', 'status_card', 'status_idCard'))->withDepartment($department)
                                        ->withTitleNames($titleNames)
                                       // ->withCate_idCard($cate_idCard)
                                        // ->withCate_Status($cate_Status)
                                        // ->withData($data)
                                        // ->withStatus_idCard($status_idCard)
                                        ->withData3($data3);

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
                        return redirect()->route('profile.show1');

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
                ]);

            $user = User::findOrFail($id);
            $user->title_name_id = $request->title_name;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->position = $request->position;
            $user->department_id = $request->department;
            $user->email = $request->email;
            $user->first_name_eng = $request->first_name_eng;
            $user->last_name_eng = $request->last_name_eng;

            if(isset($request->cid)){

                $user_id_o = ReportCheckUp::find($request->report_id);

                $user_id_o->cid = $request->cid;
                $user_id_o->hn = $request->hn;
                $user_id_o->birthdate = $request->date;
                $user_id_o->phonenumber = $request->tel;

                $user_id_o->save();


            }


                $user->save();

            Session::flash('message', 'แก้ไขข้อมูลเรียบร้อย!');
            return redirect()->route('profile.show1');

            } else {

                Session::flash('message', 'รหัสผ่านไม่ถูกต้อง !');
                return redirect()->back();

            }
        }

    }
      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function disconnect_CheckUp(Request $request, $id)
    {

        $hashedPassword = Auth::user()->password;

        if (Hash::check($request->password, $hashedPassword)) {

        $user = User::findOrFail($id);
        $user->report_check_up_id = '0';
        $user->save();

        Session::flash('message', 'ยกเลิกเชื่อมต่อข้อมูลตรวจสุขภาพเรียบร้อย!');
        return redirect()->route('profile.show1');

        } else {

            Session::flash('message', 'รหัสผ่านไม่ถูกต้อง !');
            return redirect()->back();

        }
    }


       /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function connect_CheckUp(Request $request, $id)
    {

            $user_id_o = ReportCheckUp::where('cid', '=', $request->cid)
                                        ->where('hn', '=', $request->hn)
                                        ->where('birthdate', '=', $request->date)
                                        ->first();

        if(isset($user_id_o)){
            $user = User::findOrFail($id);
            $user->report_check_up_id = $user_id_o->id;

            //dd($user);

            $user->save();


            Session::flash('message', 'เชื่อมต่อข้อมูลตรวจสุขภาพเรียบร้อย!');
            return redirect()->route('profile.show1');

        } else{
            Session::flash('message-error', 'ไม่สามารถเชื่อมต่อข้อมูลตรวจสุขภาพได้ กรุณาติดต่อเจ้าหน้าที่!');
            return redirect()->route('profile.show1');
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

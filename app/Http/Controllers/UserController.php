<?php

namespace App\Http\Controllers;

use App\Department;
use App\User;
use App\Role;
use App\Title_name;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Validator;
use Session;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::orderBy('updated_at', 'desc')->paginate(100);
        $roles = Role::all();

        return view('pages.users.index')->withUsers($users)->withRoles($roles);
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
        $this->validate($request, [
            'title_name_id' => ['required', 'integer', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'department' => ['required', 'integer', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = new User();

        $user->title_name_id = $request->title_name_id;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->position = $request->position;
        $user->department_id = $request->department;
        $user->status = '0';
        $user->email = $request->email;
        $user->password = Hash::make($request->password);


        if($user->save()){
            return redirect()->route('users.show', $user->id);

        }else{
            Session::flash('danger', 'ไม่สามารถลงข้อมูลได้');
            return redirect()->route('users.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id', $id)->with('roles')->first();
       // dd($user->roles);
        return view('pages.users.show')->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Role::all();
        $department = Department::all();
        $titlename = Title_name::all();
        $user = User::where('id', $id)->with('roles')->first();
        return view('pages.users.edit')->withUser($user)->withRoles($roles)->withDepartment($department)->withTitlename($titlename);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if ($request->password) {
        $this->validate($request, [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

            // $hashedPassword = Auth::user()->password;

            //     if (\Hash::check($request->oldpassword, $hashedPassword)) {

            //         if (!\Hash::check($request->password, $hashedPassword)) {

            //             $user = User::findOrFail($id);
            //             $user->password = Hash::make($request->password);

            //         } else {
            //             Session::flash('message', 'รหัสผ่านใหม่ไม่สามารถเป็นรหัสผ่านเก่าได้!');
            //             return redirect()->back();
            //         }
            //     } else {
            //         Session::flash('message', 'รหัสผ่านเก่าไม่ตรงกัน !');
            //         return redirect()->back();
            //     }

            $user = User::findOrFail($id);
            $user->password = Hash::make($request->password);
            $user->save();


            Session::flash('message', 'เปลี่ยนรหัสผ่านเรียบร้อย!');
            return redirect()->route('users.show', $id);
        }else{

//dd($request);

        $this->validate($request, [

            'email' => 'required|email|unique:users,email,'.$id,
            'title_name_id' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
            'department' => ['required', 'string', 'max:255'],
           //'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],

        ]);
            //dd($request);
            $user = User::findOrFail($id);
            $user->title_name_id = $request->title_name_id;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->position = $request->position;
            $user->department_id = $request->department;
            $user->email = $request->email;
            $user->status = $request->status;
            $user->save();

            $user->syncRoles(explode(',', $request->roles));

            Session::flash('message', 'แก้ไขข้อมูลเรียบร้อย!');
            return redirect()->route('users.show', $id);
        }



        // if ($user->save()) {
        //     return redirect()->route('users.show', $id);
        // } else {
        //     Session::flash('danger', 'ไม่สามารถเปลี่ยนแปลงข้อมูลได้');
        //     return redirect()->route('users.edit', $id);
        // }

    }

    public function edit_users_password(Request $request, $id)
    {
 //dd($request);

                        $user = User::findOrFail($request->id);
                        $user->password = Hash::make($request->password);
                        $user->save();

                        Session::flash('message', 'เปลี่ยนรหัสผ่านเรียบร้อย!');
                        return redirect()->route('users.show', $id);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        Session::flash('message', 'ลบข้อมูลเรียบร้อย!');
        return redirect()->route('users.index');
    }
}

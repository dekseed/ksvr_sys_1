<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Permission;
use Session;

class RoleController extends Controller
{
  public function __construct()
  {
    $this->middleware('role:superadministrator|administrator');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //   $roles = Role::all();
    //   return view('pages.users.roles.index')->withRoles($roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $permissions = Permission::all();
      return view('pages.users.roles.create')->withPermissions($permissions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validateWith([
        'display_name' => 'required|max:255',
        'name' => 'required|max:100|alpha_dash|unique:roles',
        'description' => 'sometimes|max:255'
      ]);

      $role = new Role();
      $role->display_name = $request->display_name;
      $role->name = $request->name;
      $role->description = $request->description;
      $role->save();

      if ($request->permissions) {
         $role->syncPermissions(explode(',', $request->permissions));
        // foreach ($request->permissions as $key => $value) {
        //     $role->attachRole($value);
        // }
      }

      Session::flash('message', 'เพิ่มบทบาทหน้าที่ ' . $role->display_name . ' สำเร็จ !!!');
      return redirect()->route('roles.show', $role->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $role = Role::where('id', $id)->with('permissions')->first();
      return view('pages.users.roles.show')->withRole($role);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $role = Role::where('id', $id)->with('permissions')->first();
      $permissions = Permission::all();
      return view('pages.users.roles.edit')->withRole($role)->withPermissions($permissions);
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
       //dd($request);
      $this->validateWith([
        'display_name' => 'required|max:255',
        'description' => 'sometimes|max:255'
      ]);

      $role = Role::findOrFail($id);
      $role->display_name = $request->display_name;
      $role->description = $request->description;
      $role->save();

      if ($request->permissions) {
        //foreach ($request->permissions as $key => $value) {
         $role->syncPermissions(explode(',', $request->permissions));
        //$role->Permissions()->sync($request->permissions);
       // }
      }
      Session::flash('message', 'แก้ไขบทบาทหน้าที่ '. $role->display_name . ' สำเร็จ !!!');
      return redirect()->route('roles.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

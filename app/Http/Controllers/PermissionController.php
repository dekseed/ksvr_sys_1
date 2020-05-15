<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;
use App\Role;
use Session;

class PermissionController extends Controller
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
      $permissions = Permission::all();
      $roles = Role::all();
      return view('pages.users.permissions.index')->withPermissions($permissions)->withRoles($roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.users.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//dd($request);

      if ($request->permission_type == 'basic') {
        $this->validateWith([
          'display_name' => 'required|max:255',
          'name' => 'required|max:255|alphadash|unique:permissions,name',
          'description' => 'sometimes|max:255'
        ]);

        $permission = new Permission();
        $permission->name = $request->name;
        $permission->display_name = $request->display_name;
        $permission->description = $request->description;
        $permission->save();

        Session::flash('message', 'Permission has been successfully added');
        return redirect()->route('permission_role');

      } elseif ($request->permission_type == 'crud') {
        $this->validateWith([
          'resource' => 'required|min:3|max:100|alpha'
        ]);

        $crud = explode(',', $request->crud_selected);
        if (count($crud) > 0) {
          foreach ($crud as $x) {
            $slug = strtolower($x) . '-' . strtolower($request->resource);
            $display_name = ucwords($x . " " . $request->resource);
            $description = "Allows a user to " . strtoupper($x) . ' a ' . ucwords($request->resource);

            $permission = new Permission();
            $permission->name = $slug;
            $permission->display_name = $display_name;
            $permission->description = $description;
            $permission->save();
          }
          Session::flash('message-permission', 'เพิ่มข้อมูลสิทธิการใช้งานเรียบร้อย !');
          return redirect()->route('permission_role');
        }
      } else {
        return redirect()->route('permission.create')->withInput();
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
      $permission = Permission::findOrFail($id);
      return view('pages.users.manage.permissions.show')->withPermission($permission);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $permission = Permission::findOrFail($id);
      return view('pages.users.manage.permissions.edit')->withPermission($permission);
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
      $this->validateWith([
        'display_name' => 'required|max:255',
        'description' => 'sometimes|max:255'
      ]);
      $permission = Permission::findOrFail($id);
      $permission->display_name = $request->display_name;
      $permission->description = $request->description;
      $permission->save();

      Session::flash('message-permission', 'Updated the '. $permission->display_name . ' permission.');
      return redirect()->route('permission_role', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permission = Permission::findOrFail($id);
        $permission->delete();
        Session::flash('message-permission', 'ลบข้อมูลเรียบร้อย !!!');
     return redirect()->route('permission_role');
    }
}

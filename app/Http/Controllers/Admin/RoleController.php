<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Redirect;
use App\User;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roles =Role::all();
        return view('admin/pages/role/roleIndex',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/pages/role/roleCreate');
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
        $role =$request->input('role');
        Role::create(['name'=>$role]);
        return redirect(route('role.index'));
    }

    public function permissionIndex()

    {

      $permissions =Permission::all();
      return view('admin/pages/role/permissionIndex',compact('permissions'));

    }

    public function permissionCreate()

    {
      return view('admin/pages/role/permissionCreate');
    }

    public function permissionStore(Request $request)

    {
      $permission =$request->input('permission');
      Permission::create(['name'=>$permission]);
      return redirect(route('permission.index'));
    }

    public function permissionAssign()

    {

      $permissions =Permission::pluck('name','id');
      $roles =Role::pluck('name','id');
      return view('admin/pages/role/permissionAssign',compact('permissions','roles'));

    }

    public function permissionAssignStore(Request $request)

    {
      $permission =$request->input('permission');
      $role =$request->input('role');
      $role=Role::findById($role);
      $role->givePermissionTo($permission);
      return Redirect::back();
    }

    public function users()

    {
      $users =User::all();
      return view('admin/pages/role/users',compact('users'));
    }

    public function userShow($id)

    {
      $user =User::find($id);
      $role=$user->getRoleNames();
      $roles=Role::pluck('name','id');

      $assignedRole =$user->getRoleNames();
      return view('admin/pages/role/userShow',compact('user','role','roles','assignedRole'));
    }

    public function roleAssign(Request $request)

    {
      $user =User::find($request->input('user_id'));
      $role=Role::find($request->input('role'));

      $user->assignRole($role);
      return Redirect::back();
    }

    public function permissionToUser()

    {
      $permissions=Permission::pluck('name','id');
      $users       =User::pluck('email','id');
      return view('admin/pages/role/permissionToUser',compact('permissions','users'));
    }

    public function permissionToUserStore(Request $request)

    {

      $user=User::findOrFail($request->input('user'));
      $permission=Permission::findById($request->input('permission'));
      $user->givePermissionTo($permission);
      return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

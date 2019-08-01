<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;
use App\Role;
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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listPermission = Permission::all();
        return view('admin.user.createRole',compact('listPermission'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataRole = $request->only('name');
        $role = Role::create($dataRole);

        $dataPermission = $request->permissionID;
        foreach($dataPermission as $permissionID ){
            \DB::table('role_permissions')->insert([
                'role_id'=>$role->id,
                'permission_id'=>$permissionID
            ]);
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
       $role = Role::find($id);
       $listPermission = Permission::all();
       $permissionID = \DB::table('role_permissions')->where('role_id',$id)->pluck('permission_id');
       $data = [
        'role'=>$role,
        'listPermission'=>$listPermission,
        'permissionID' => $permissionID
    ];
    return view('admin.user.formEditRole',$data);
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
       $role = Role::find($id);
       $dataRole = $request->only('name');
       $role->update($dataRole);

       $listPermission = $request->permissionID;
       \DB::table('role_permissions')->where('role_id',$id)->delete();
       foreach($listPermission as $permissionID){
        \DB::table('role_permissions')->insert([
            'role_id'=>$role->id,
            'permission_id' =>$permissionID
        ]);
    } 
    return redirect()->route('index-user');

}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $role = Role::find($id);
     \DB::table('role_permissions')->where('role_id',$id)->delete();
     $role->forceDelete();
     return redirect()->route('index-user');
 }
}

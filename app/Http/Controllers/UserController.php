<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use DB;
use App\UserRole;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groupUser = Role::with('users')->get();
        return view('admin.user.index',compact('groupUser'));
    }
    public function create()
    {
        $listRole= Role::all();
        return view('admin.user.formAddUser',compact('listRole'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $dataUser = $request->only('name','gender','email','phone','address');
        $dataUser['password'] = bcrypt($request->password);
        $user = User::create($dataUser);

        $roleID = $request->roleID;
        foreach($roleID as $roleID){
            \DB::table('user_roles')->insert([
                'user_id' => $user->id,
                'role_id' => $roleID
            ]);
        }
        return redirect()->route('index-user')->with('sussecc','them thanh cong');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $listUser = Role::with('users')->where('id',$id)->get()->toArray();
      /* dd($listUser);*/
       return view('admin.user.showUser',compact('listUser'));
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $listRole = Role::all();
        $listUserOfRole = \DB::table('user_roles')->where('user_id',$id)->pluck('role_id');
        return view('admin.user.formEditUser',compact('user','listRole','listUserOfRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
       $user = User::find($id);
       $dataUser = $request->only('name','gender','email','phone','address');
       if($request->password){
        $dataUser['password'] = $request->password;
    }else{
        $dataUser['password'] = $user->password;
    }

    $user->update($dataUser);

    $roleID = $request->roleID;
    \DB::table('user_roles')->where('user_id',$id)->delete();
    foreach($roleID as $roleID){
        \DB::table('user_roles')->insert([
            'user_id'=> $user->id,
            'role_id'=>$roleID
        ]);
    }
    return redirect()->route('index-user')->with('update','đã chỉnh sủa thành công'); 
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = user::find($id);
        UserRole::where('user_id',$id)->delete();
        $user->delete();
        return redirect()->back()->with('sussecc','Xóa thành công');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
	public function index(){
		return view('admin.layouts.master');
	}
    public function getLoginAdmin()
    {
        return view('admin.login');
    }
    public function postLoginAdmin(Request $request)
    {
        $this->validate($request,
            [
                'email'=>'required',
                'password'=>'required'
            ],
            [
                'email.required'=>'Bạn chưa nhập Email',
                'password.required'=>'Bạn chưa nhập password',
            ]
        );
        if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password])) {         
            // $id=Auth::id();
            // dd($id);
            $id=Auth::id();
            $user= User::find($id);
            return view('admin.layouts.master',compact('user'));
            
        }
        else{
            return redirect()->route('getlogin')->with('mess','thatbai');
        }
    }
}

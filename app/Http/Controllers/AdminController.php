<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
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

<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
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
    public function create(Request $request)
    {
        $data=[
            'name'=>$request->name,
            'email'=>$request->email,
            'title'=>$request->title,
            'content'=>$request->content,
            'rate'=>0,
            'status'=>1,
            'product_id'=>$request->product_id

            ];
            
            $comment=Comment::create($data);
            return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Comment;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    // public function getLoadFormComment(){

    //     return view('customer.product.commentProduct');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CommentRequest $request)
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

    
     public function replyComment(CommentRequest $request){
        $dataComment = $request->only('name','email','title','content');
        $dataComment['product_id']=$request->product_id;
        $dataComment['parent_id']=$request->comment_id;
        $dataComment['rate']=0;
        $dataComment['status']=1;
        $comment = Comment::create($dataComment);
        return redirect()->back();
    }

    
}

<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Product;
class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function search(Request $request)
    {
        $key=$request->key;
        $products =Product::with('productDetail')->where('name','like','%'.$key.'%')->get();
        // dd($products);
        return view('customer.search.index',compact('products','key'));
    }
    
}

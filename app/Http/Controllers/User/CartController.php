<?php

namespace App\Http\Controllers\User;
use Illuminate\Http\Request;
use App\Http\Requests;

use Illuminate\Support\Facades\Redirect;
use App\Product;
use Cart;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCart()
    {
         $cart  = \Cart::content();
         // $cart = [
         //        'products' => $products
         //        ];
         // dd($cart);
        return view('customer.cart.cart',compact('cart'));
    }
    public function addCart(Request $request,$id)
    {
        if($request->quantity){
            $qty=$request->quantity;
        }else{
            $qty=1;
        };
            $product=Product::with('productDetail')->where('id',$id)->first();
           if ($product) {
             \Cart::add($id,$product->name,$qty,$product->productDetail->price,1,['img'=>$product->image]);
             return redirect()->back();
           }
    }
    public function updateCart(Request $request)
    {
        $id=$request->rowId;
        // dd($id);
        $qty=$request->quantity;
        if ($qty>=1) {
            \Cart::update($id,$qty);
        }        
        return redirect()->back()->with('success','Update successful!');
    }
    public function removeCart(Request $request)
    {
         $id=$request->rowId;
         \Cart::remove($id);
          $cart  = \Cart::content();                  
        return redirect()->back()->with('success','Remove successful!');
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
}

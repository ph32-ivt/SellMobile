<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Query\Builder;
use App\Http\Requests\ProductDetailRequest;
use App\Http\Requests\ProductRequest;
use App\Product;
use App\Category;
use App\ProductDetail;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $products = Product::orderBy('id','DESC')->paginate(10);
    return view('admin.product.index',compact('products'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.product.formAddProduct',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductDetailRequest $request)
    {
        //thêm thông tin vào product 

        $product = New Product();
        $product->name = $request->name;
        $product->pro_slug = $request->name;
        $product->image = $request->image;
        $product->description = $request->description;
        $product->content = $request->content;
        $product->pro_hot = $request->pro_hot ? $request->pro_hot :0;
        $product->status = $request->status ? $request->status : 0;
        $product->brand_id = 1;
        $product->category_id = $request->categoryID;

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $tailFile = $file->getClientOriginalExtension();
            if($tailFile != "jpg" && $tailFile != "jpeg" && $tailFile != "png"){
                return redirect('admin.product.formAddProduct')->with('fail','Vui lòng chọn hình có đuôi *jpg,jpeg,png');
            } 

            $NameImage = $file->getClientOriginalName();
            $NameImage = str_random(4)."-".$NameImage;
            while(file_exists("/images/".$NameImage)){
                $NameImage = str_radom(4)."-".$NameImage;
            }
            $file->move("./images/",$NameImage);
            $product->image = $NameImage;
        }else{
            $product->image = "";
        }

        $product->save();

        //thêm thông tin vào product_dateil

        $product_dateil = new ProductDetail();
        $product_dateil->cpu = $request->cpu;
        $product_dateil->memory = $request->menory;
        $product_dateil->display = $request->display;
        $product_dateil->pin = $request->pin;
        $product_dateil->sim = $request->sim;
        $product_dateil->camera = $request->camera;
        $product_dateil->price = $request->price;
        $product_dateil->option = $request->option;
        $product_dateil->quantity = 1;
        $product_dateil->product_id = $product->id;
        $product_dateil->save();

        return redirect()->route('index-product');

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
        $product = Product::find($id);
        $data = $product->with('productDetails')->where('id',$id)->first();
        dd($data);
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

    }
}

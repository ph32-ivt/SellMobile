<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Query\Builder;

use App\Http\Requests\ProductRequest;
use App\Product;
use App\Category;
use App\ProductDetail;
use App\Brand;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
     $products = Product::with('category','brand')->orderBy('id','DESC')->paginate(5);
     // dd( $products);
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
      $brands = Brand::all();
      return view('admin.product.formAddProduct',compact('category','brands'));
  }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $data = $request->except('_token');
        $data['pro_slug'] = str_slug($request->name);
        $data['pro_hot'] =$request->pro_hot ? $request->pro_hot :0;
        $data['status'] =$request->status ? $request->status : 0;

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $NameImage = $file->getClientOriginalName();
            $NameImage = str_random(4)."-".$NameImage;
            while(file_exists("/images/".$NameImage)){
                $NameImage = str_radom(4)."-".$NameImage;
            }
            $file->move(public_path('/images/'),$NameImage);
            $data['image'] = $NameImage;
        }else{
            $data['image'] = "";
        }

        $data = Product::create($data);
        $dataDetail = $request->only('cpu','memory', 'display', 'pin', 'sim', 'camera', 'price');
        $dataDetail['product_id'] = $data->id;
        $dataDetail = ProductDetail::create($dataDetail);
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
        $product = Product::with('category','brand','productDetail')->where('id',$id)->first();
       
        return view('admin.product.productDeteil',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::all();
        $brands = Brand::all();
        $data = Product::with('productDetail','category','brand')->where('id',$id)->first();

        return view('admin.product.formEditProduct',compact('data','brands','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $product = Product::find($id);
        $data = $request->except('_token');
        $data['pro_slug'] = str_slug($request->name);
        $data['pro_hot'] =$request->pro_hot ? $request->pro_hot :0;
        $data['status'] =$request->status ? $request->status : 0;

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $NameImage = $file->getClientOriginalName();
            $NameImage = str_random(4)."-".$NameImage;
            while(file_exists("/images/".$NameImage)){
                $NameImage = str_radom(4)."-".$NameImage;
            }
            $file->move(public_path('/images/'),$NameImage);
            $data['image'] = $NameImage;
        }else{
            $data['image'] = $product->image;
        }

        $product->update($data);

        $dataDetail = $request->only('cpu','memory', 'display', 'pin', 'sim', 'camera', 'price');
        $dataDetail = ProductDetail::where('product_id',$id)->update($dataDetail);
        return redirect()->route('index-product');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  $product = Product::find($id);
        ProductDetail::where('product_id',$id)->delete();
        $product->destroy($id);
        return redirect()->route('index-product')->with('sussecc','Bạn đã xóa thành công');
    }

    public function action($action,$id){
        if($action){
         $product = Product::find($id);
         switch ($action) {
            case 'status':
            $product->status = $product->status ? 0 : 1;
            break;
            case 'pro_hot':
            $product->pro_hot = $product->pro_hot ? 0 : 1;
            break;
        }
        $product->save();
    }
    return redirect()->back();

}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\CategroyRequest;
use App\Product;

use DB;
class CategoryController extends Controller
{
	public function index()
	{	
		$category = Category::all();

		return view('admin.category.category',compact('category'));
	}
	public function create()
	{	
		$category = Category::all();
		return view('admin.category.formAddCategory',compact('category'));
	}

	public function show($id)
	{
		
		$data     = Category::with('products')->where('id',$id)->first();
		return view('admin.category.getByProductInCategry',compact('data'));
	}

	public function store(CategroyRequest $request)
	{
		$category            = new Category();
		$category->name      = strtoupper($request->name);
		$category->cate_slug = $request->name;
		$category->save();
		return redirect()->route('index-category')->with('success','Bạn đã thêm danh mục mới thành công');
	}
	public function edit($id)
	{
		$category = Category::find($id);
		return view('admin.category.formEditCategory',compact('category'));
	}
	public function update(CategroyRequest $request,$id)
	{
		$category            = Category::find($id);
		$category->name      = $request->name;
		$category->cate_slug = $request->name;
		$category->update();
		return redirect()->route('index-category')->with('success','Bạn đã chỉnh sửa Danh Mục thành công');
	}

	public function destroy($id)
	{
		Category::destroy($id);
		return redirect()->route('index-category')->with('success','Bạn đã Xóa Danh Mục thành công');;
	}

	public function history()
	{
		$categories = Category::onlyTrashed()->get();

		return view('admin.category.historyCategory',compact('categories'));
	}

	public function forceDelete($id)
	{
		Category::withTrashed()->find($id)->forceDelete();
		return redirect()->route('history-category');
	}
	
}

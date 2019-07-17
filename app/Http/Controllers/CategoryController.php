<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;
use App\Http\Requests\CategoryRequest;
class CategoryController extends Controller
{
	public function index()
	{
		$category = Category::all();
		return view('admin.category.category',compact('category'));
	}
	public function create()
	{	
		
		return view('admin.category.formAddCategory');
	}
	public function store(CategoryRequest $request)
	{
		$category = new Category();
		$category->name = $request->name;
		$category->parent_id = $request->parent;
		$category->cate_slug = $request->name;
		$category->save();
		return redirect()->route('index-category');
	}
	public function edit(Request $request,$id)
	{
		$category = Category::find($id);
		return view('admin.category.formEditCategory',compact('category'));
	}
}

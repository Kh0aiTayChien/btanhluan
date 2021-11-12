<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
public function index(){
    $Categories = Category::all();
    return view('admin.categories.list ', compact('Categories'));
}
public function create(){
     return view('admin.categories.create');
}
public function store(CategoryRequest $request){
    $category = new category ();
    $category ->name = $request->input('name');
    $category ->save();
    return redirect()->route('categories.index');
}
public function edit($id){
    $category = Category::findOrFail($id);
    return view('admin.categories.update',compact('category'));
}
public function update(CategoryRequest $request, $id){
    $category = Category::findOrFail($id);
    $category->name = $request->input('name');
    $category->save();

    return redirect()->route('categories.index');
}
public function delete($id){
    $category = Category::findOrFail($id);
    $category->delete();
//    Session::flash('success','Ban da xoa du lieu thanh cong');
    return redirect()->route('categories.index');
}
}

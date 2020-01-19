<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.index');
    }

    public function create(){
        return view('admin.category.create');
    }

    public function add(Request $request){
        $rules = [
            'name' => 'required|min:3'
        ];
        $this->validate($request, $rules);
        $category = new \App\Category();
        $category->name = $request->input('name');
        $category->save();
        return redirect('/admin/category');
    }

    public function edit($id){
        $category = \App\Category::find($id);
        $data = [
            'category' => $category
        ];
        return view('admin.category.edit', $data );
    }

    public function update(Request $request){
        $rules = [
            'id' => 'required',
            'name' => 'required|min:3'
        ];
        return redirect('/admin/category');
    }

    public function delete($id){
        return redirect('/admin/category');
    }
}

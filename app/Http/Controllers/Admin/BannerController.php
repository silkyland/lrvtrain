<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index(){
        return view('admin.banner.index');
    }

    public function create(){
        return view('admin.banner.create');
    }

    public function add(Request $request){
        $rules = [
            'title' => 'required',
            'path' => 'required',
            'link' => 'required',
        ];
        $this->validate($rules, $request);
    }
}

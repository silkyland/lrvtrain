<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = [
            "banners" => \App\Banner::all(),
        ];

        return view('welcome', $data);
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function help(){
        return view('help');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryPost;
use App\Models\Post;

class TracNghiemController extends Controller
{
    public function TracNghiem(){
        $category = CategoryPost::all();
        return view('pages.tracnghiem')->with(compact('category'));
    }
}

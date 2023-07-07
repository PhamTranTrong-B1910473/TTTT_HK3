<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryPost;
use App\Models\Post;

class MucTieuController extends Controller
{
    public function MucTieu(){
        $category = CategoryPost::all();
        return view('pages.muctieu')->with(compact('category'));
    }
}

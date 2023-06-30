<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MucTieuController extends Controller
{
    public function MucTieu(){
        return view('pages.muctieu');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogpageController extends Controller
{
    public function index(){
        return view('blogpage');
    }
}

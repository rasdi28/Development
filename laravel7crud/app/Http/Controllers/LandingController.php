<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
class LandingController extends Controller
{
    public function index()
    {
       
        $blog = Blog::latest()->paginate(10);
        return view('welcome')->with([
            'blogs'=>$blog
        ]);
    }
}

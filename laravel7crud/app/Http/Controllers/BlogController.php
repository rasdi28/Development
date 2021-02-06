<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $blog = Blog::orderBy('created_at', 'desc')->get();
        return view('pages.blog.index');
        // ->with([
        //     'blogs'=>$blog
        // ]);
    }

    public function create()
    {
        return view('pages.blog.create');
    }

}

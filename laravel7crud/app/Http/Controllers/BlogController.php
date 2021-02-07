<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;


use App\Blog;
class BlogController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $blog = Blog::orderBy('created_at', 'desc')->get();
        return view('pages.blog.index')->with([
            'blogs'=>$blog
        ]);
    }

    public function create()
    {
        return view('pages.blog.create');
    }

    public function store(BlogRequest $request)
    {
        $blog = $request->all();
        $blog['image'] = 'storage/'.$request->file('image')->store(
            'assets/blog', 'public'
        );
        Blog::create($blog);
        return redirect()->route('blog.index');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('pages.blog.edit')->with([
            'blog'=>$blog
        ]);
    }

    public function update(BlogRequest $request, $id)
    {
        $data = $request->all();
        $data['image'] = 'storage/'.$request->file('image')->store(
            'assets/blog', 'public'
        );

        $blog = Blog::findOrFail($id);
        $blog->update($data);
        return redirect()->route('blog.index');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('blog.index');
    }


}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {

        $blogs = Blog::all();
        return view('admin.blogs.index', ['blogs' => $blogs]);
    }
    public function create()
    {
        return view('admin.blogs.create');
    }
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image',
        ]);

        $data = $request->all();


        if (isset($request->image)) {
            $image = $request->file('image')->store('blog');
            $data['image'] = $image;
        }

        $blog = Blog::create($data);

        return redirect(route('blog.index'))->with('success', 'Blog inserted with id :' . " " . $blog->id);
    }
    public function show($id)
    {

        $blogshow = Blog::findOrfail($id);

        // dd($blogshow);
        return view('admin.blogs.show', ['blog_show' => $blogshow]);
    }
    public function destroy($id)
    {
        $delete = Blog::findOrfail($id);

        $delete->delete();

        return redirect(route('blog.index'))->with('success', 'Blog' . ' ' . $id . ' ' . 'deleted');
    }
}

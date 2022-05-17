<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogs()
    {

        $blogs = Blog::all();
        return view('admin.blogs.admin_blogs', ['blogs' => $blogs]);
    }
    public function show($id)
    {

        $blogshow = Blog::findOrfail($id);

        // dd($blogshow);
        return view('admin.blogs.show', ['blog_show' => $blogshow]);
    }
    public function delete($id)
    {
        $delete = Blog::findOrfail($id);

        $delete->delete();
        return redirect(route('blog.admin'));
    }
}

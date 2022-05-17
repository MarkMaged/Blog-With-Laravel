<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogController extends Controller
{
    public function blogs(){

        // $blogs = \ DB::table('blogs')->limit(5)->get();
        // dd($blogs);
        $blogs = Blog:: all();
        return view('blogs', ['blogs'=>$blogs]);
    }
    public function singel_blog($id){

        $blogs = Blog::findOrfail($id);

        return view('singel-blog', ['blog'=>$blogs]);
    }
}

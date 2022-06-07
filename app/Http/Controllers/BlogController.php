<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        $blog = Blogs::all();
        return view('pages.blog', compact('blog')); 
    }  
    public function blogDetail($title)
    {
        $blog = Blogs::where('title', $title)->first();
        return view('pages.blog-single', compact('blog'));
    }
}

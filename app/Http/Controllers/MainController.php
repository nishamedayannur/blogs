<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class MainController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        //dd($categories);
        //return view('home');
        return view('main.categories')->with(['categories'=>$categories]);
    }

    public function show($id)
    {
        //
        $blogs = Blog::with('category')->where('category_id',$id)->get();
        //dd($blogs);
        return view('blogs')->with(['blogs'=>$blogs]);
    }
}

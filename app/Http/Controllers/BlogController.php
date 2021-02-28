<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index() {
        $blogs = Blog::all();
        return view('blog.index', compact(['blogs']));
    }

    function create() {
        return view('blog.create');
    }

    function store(Request $request) {
        $data = $request->validate([
            'title'=>'required',
            'description'=>'min:15',
            'author'=>'required'
        ]);
        Blog::create($data);
        return redirect('/blog');
    }

    function show($id) {
        $blog = Blog::find($id);
        return view('blog.show', compact(['blog']));
    }

}

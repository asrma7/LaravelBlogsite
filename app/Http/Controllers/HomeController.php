<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('welcome');
    }
    public function about() {
        Blog::create([
            'title'=>"My title",
            'description'=>"This is my description"
        ]);
    }
}

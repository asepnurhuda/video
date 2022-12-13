<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $videos = Video::orderBy('name', 'asc')->paginate(20);
        $categories = Category::all();
        return view('front.index', compact('videos', 'categories'));
    }

    public function show($id)
    {
        $category = Category::find($id);
        $videos = Video::orderBy('name', 'asc')->get();
        return view('front.show', compact('category', 'videos'));
    }
}

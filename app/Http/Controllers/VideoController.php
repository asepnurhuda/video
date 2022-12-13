<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::paginate(10);
        return view('backend.video.index', compact('videos'));
    }

    public function add()
    {
        $categories = Category::orderBy('name', 'asc')->get();

        return view('backend.video.add', compact('categories'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'youtube' => 'required',
            'thumbnail' => 'required|image|mimes:jpg,png,jpeg,svg|max:5048',
            'categories' => 'required'
        ]);

        $thumbnail = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnail = uniqid() . str_replace(' ', '-', $request->file('thumbnail')->getClientOriginalName());
            $request->file('thumbnail')->move(public_path('assets/frontend/img/'), $thumbnail);
        }

        $categories = Category::find($request->categories);

        $video = Video::create([
            'name' => $request->name,
            'youtube' => $request->youtube,
            'thumbnail' => $thumbnail
        ]);

        $video->categories()->attach($categories);

        return redirect()->route('video.index');
    }

    public function edit($id)
    {
        $video = Video::find($id);
        $categories = Category::all();
        return view('backend.video.edit', compact('video', 'categories'));
    }

    public function delete($id)
    {
        Video::findOrFail($id)->categories()->detach();
        Video::destroy($id);
        return redirect()->route('video.index');
    }

    public function update(Request $request, $id)
    {
        $video = Video::findOrFail($id);
        $thumbnail = $video->thumbnail ?? null;

        if ($request->hasFile('thumbnail')) {
            if ($video->thumbnail) {
                $path = public_path() . '/assets/frontend/img/' . $video->thumbnail;
                // dd($path);
                unlink($path);
            }
            $thumbnail = uniqid() . str_replace(' ', '-', $request->file('thumbnail')->getClientOriginalName());
            $request->file('thumbnail')->move(public_path('assets/frontend/thumbnail'), $thumbnail);
        }

        $categories = Category::find($request->categories);

        $video->update([
            'name' => $request->name,
            'youtube' => $request->youtube,
            'thumbnail' => $thumbnail,
        ]);

        $video->categories()->attach($categories);

        return redirect()->route('video.index');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('admin.tag.list', compact('tags'));
    }

    public function create()
    {
        return view('admin.tag.create');
    }

    public function store(Request $request)
    {
        //validation

        $new_Tag = Tag::create([
            'tag_name' => $request->input('tag_name')
        ]);
        if ($new_Tag) {
            return redirect()->route('admin.tags.list');
        }
    }

    public function edit(Request $request, $tag_id)
    {

        $tagItem = Tag::find($tag_id);
        return view('admin.tag.edit', compact('tagItem'));
    }

    public function update(Request $request, $tag_id)
    {
        $tagItem = Tag::find($tag_id);
        $updateResult = $tagItem->update([
            'tag_name' => $request->input('tag_name')
        ]);
        if ($updateResult) {
            return redirect()->route('admin.tags.list');

        }
    }

    public function remove(Request $request, $tag_id)
    {
        $removeResult = Tag::destroy([$tag_id]);

        return redirect()->route('admin.tags.list');


    }
}

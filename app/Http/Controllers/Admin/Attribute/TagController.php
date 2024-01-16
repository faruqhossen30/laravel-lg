<?php

namespace App\Http\Controllers\Admin\Attribute;

use App\Http\Controllers\Controller;
use App\Models\Admin\Attribute\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::get();
        // return $tags;
        return view('admin.attribute.tag.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.attribute.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // return $request->all();
         $data = [
            'name' => $request->name,
            'description' => $request->description,
            'author_id'=>1
        ];

        Tag::create($data);

        return redirect()->route('tag.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tags = Tag::where('id', $id)->first();
        // return $tags;
        return view('admin.attribute.tag.edit', compact('tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //  return $request->all();
        Tag::where('id', $id)->update([
            'name'=>$request->name,
            'description' => $request->description
        ]);
         return redirect()->route('tag.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tag::where('id', $id)->delete();
        return redirect()->route('tag.index');
    }
}

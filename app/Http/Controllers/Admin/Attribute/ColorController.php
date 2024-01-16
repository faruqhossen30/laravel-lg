<?php

namespace App\Http\Controllers\Admin\Attribute;

use App\Http\Controllers\Controller;
use App\Models\Admin\Attribute\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colors = Color::get();
        // return $colors;
        // return $categeroies;
        return view('admin.attribute.color.index',compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.attribute.color.create');
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
            'code' => $request->code,
            'author_id'=>1
        ];

        Color::create($data);

        return redirect()->route('color.index');
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
        $colors = Color::where('id', $id)->first();
        // return $colors;
        return view('admin.attribute.color.edit', compact('colors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //  return $request->all();
        Color::where('id', $id)->update([
            'name'=>$request->name,
            'description' => $request->description,
            'code' => $request->code,
        ]);
         return redirect()->route('color.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Color::where('id', $id)->delete();
        return redirect()->route('color.index');
    }
}

<?php

namespace App\Http\Controllers\Admin\Attribute;

use App\Http\Controllers\Controller;
use App\Models\Admin\Attribute\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sizes = Size::get();
        // return $sizes;
        // return $categeroies;
        return view('admin.attribute.size.index',compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.attribute.size.create');
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

        Size::create($data);

        return redirect()->route('size.index');
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
        $sizes = Size::where('id', $id)->first();
        // return $sizes;
        return view('admin.attribute.size.edit', compact('sizes'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //  return $request->all();
         Size::where('id', $id)->update([
            'name'=>$request->name,
            'description' => $request->description
        ]);
         return redirect()->route('size.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Size::where('id', $id)->delete();
        return redirect()->route('size.index');
    }
}

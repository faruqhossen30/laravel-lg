<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\Category;
use App\Models\Product\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategorys = Subcategory::get();
        // return $subcategorys;
        // return $subcategeroies;
        return view('admin.product.subcategory.index',compact('subcategorys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.product.subcategory.create', compact('categories'));
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
            'category_id'=>$request->category_id,
            'author_id'=>1
        ];

        Subcategory::create($data);

        return redirect()->route('subcategory.index');
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
        $subcategory = Subcategory::where('id', $id)->first();
        // return $subcategory;
        return view('admin.product.subcategory.edit', compact('subcategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //  return $request->all();
        Subcategory::where('id', $id)->update([
            'name'=>$request->name,
            'description' => $request->description
        ]);
         return redirect()->route('subcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Subcategory::where('id', $id)->delete();
        return redirect()->route('subcategory.index');
    }
}

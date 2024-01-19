<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\Attribute;
use App\Models\Product\AttributeValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttributevalueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * This is $id is attribute id
     */
    public function create($id)
    {
        $attribute = Attribute::with('values')->firstWhere('id', $id);
        // return $attribute;
        return view('admin.attribute.value.create', compact('attribute'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        AttributeValue::create([
            'attribute_id'=> $id,
            'name'=> $request->name,
            'description'=> $request->name,
            'author_id'=> Auth::user()->id,
        ]);

        return redirect()->back();
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $value = AttributeValue::firstWhere('id', $id);
        $value->delete();

        return redirect()->back();
    }
}

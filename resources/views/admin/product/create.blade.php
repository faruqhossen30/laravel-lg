@extends('admin.layouts.vertical', ['title' => 'Elements', 'sub_title' => 'Forms', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    <div class="flex flex-col gap-6">
        <div class="card">
            <div class="card-header">
                <div class="flex justify-between items-center">
                    <h4 class="card-title">Product</h4>

                    <div class="flex items-center gap-2">
                        <button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="#FormInputsHtml">
                            <i class="mgc_eye_line text-lg"></i>
                            <span class="ms-2">List</span>
                        </button>

                        <button class="btn-code" data-clipboard-action="copy">
                            <i class="mgc_copy_line text-lg"></i>
                            <span class="ms-2">Copy</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="p-6">

                <form action="{{ route('product.store') }}" method="POST" class="space-y-2" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="simpleinput" class="text-gray-800 text-sm font-medium inline-block mb-2">Name</label>
                        <input type="text" name="name" id="simpleinput" class="form-input" placeholder="Product name">
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="col-span-2 md:col-span-1">
                            <label for="example-select" class="text-gray-800 text-sm font-medium inline-block mb-2">Category</label>
                            <select name="category_id" class="form-select" id="example-select" placeholder="Catagory">
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-span-2 md:col-span-1">
                            <label for="simpleinput"
                                class="text-gray-800 text-sm font-medium inline-block mb-2">Subcategory</label>
                            <select name="subcategory_id" class="form-select" id="example-select" placeholder="subcatagory">
                                @foreach ($subcategories as $subcategory)
                                <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="simpleinput" class="text-gray-800 text-sm font-medium inline-block mb-2">Price</label>
                            <input type="number" name="price" id="simpleinput" class="form-input" placeholder="Product Price">
                        </div>
                        <div>
                            <label for="simpleinput" class="text-gray-800 text-sm font-medium inline-block mb-2">Quantity</label>
                            <input type="number" name="number" id="simpleinput" class="form-input" placeholder="Product Quantity">
                        </div>
                        <div>
                            <label for="simpleinput" class="text-gray-800 text-sm font-medium inline-block mb-2">PUK_Cood</label>
                            <input type="text" name="puk_code" id="simpleinput" class="form-input" placeholder="puk_code">
                        </div>
                        <div>
                            <label for="simpleinput" class="text-gray-800 text-sm font-medium inline-block mb-2">Status</label>
                            <select name="status" class="form-select" id="example-select" placeholder="status">
                                <option value="active">Active</option>
                                <option value="draft">Draft</option>
                            </select>
                        </div>

                    </div>
                    <div class="py-2">
                        <button type="submit" class="btn bg-primary text-white">Save</button>
                    </div>
                </form>
            </div>

        </div>
    @endsection

    @section('script')
        @vite(['resources/js/pages/highlight.js'])
    @endsection

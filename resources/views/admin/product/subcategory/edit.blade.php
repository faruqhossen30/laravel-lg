@extends('admin.layouts.vertical', ['title' => 'Subcategory Edit', 'sub_title' => 'Forms', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
<div class="flex flex-col gap-6">
	<div class="card">
		<div class="card-header">
			<div class="flex justify-between items-center">
				<h4 class="card-title">Input</h4>

				<div class="flex items-center gap-2">
					<button type="button" class="btn-code" data-fc-type="collapse" data-fc-target="#FormInputsHtml">
						<i class="mgc_eye_line text-lg"></i>
						<span class="ms-2">Code</span>
					</button>

					<button class="btn-code" data-clipboard-action="copy">
						<i class="mgc_copy_line text-lg"></i>
						<span class="ms-2">Copy</span>
					</button>
				</div>
			</div>
		</div>
		<div class="p-6">

			<form action="{{route('subcategory.update', $subcategory ->id)}}" method="POST">
                @csrf
                @method('PUT')
				<div class="">
					<label for="simpleinput" class="text-gray-800 text-sm font-medium inline-block mb-2">Name</label>
					<input type="text" name="name" value="{{$subcategory->name}}" id="simpleinput" class="form-input" placeholder="Subcategory name">

                    <label for="simpleinput" class="text-gray-800 text-sm font-medium inline-block mb-2">Category_id</label>
					<input type="text" name="category_id" id="simpleinput" class="form-input" placeholder="Category_id">

                    {{-- <label for="simpleinput" class="text-gray-800 text-sm font-medium inline-block mb-2">Author_id</label>
					<input type="text" name="author_id" id="simpleinput" class="form-input" placeholder="Author_id"> --}}

                    <label for="simpleinput" class="text-gray-800 text-sm font-medium inline-block mb-2 mt-2">Desctription</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-input" placeholder="Desctription"></textarea>
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

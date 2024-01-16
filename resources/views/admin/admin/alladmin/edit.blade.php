@extends('admin.layouts.vertical', ['title' => 'Admin Edit', 'sub_title' => 'Forms', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

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

			<form action="{{route('admin.update', $admin ->id)}}" method="POST">
                @csrf
                @method('PUT')
				<div class="">
					<div>
                        <label for="simpleinput" class="text-gray-800 text-sm font-medium inline-block mb-2">Admin Name</label>
					    <input type="text" name="name" value="{{$admin->name}}" id="simpleinput" class="form-input" placeholder="Name">
                    </div>

                    <div>
                        <label for="simpleinput" class="text-gray-800 text-sm font-medium inline-block mb-2">Email Address</label>
					    <input type="text" name="email" value="{{$admin->email}}" id="simpleinput" class="form-input" placeholder="Email">
                    </div>

                    <div>
                        <label for="simpleinput" class="text-gray-800 text-sm font-medium inline-block mb-2 mt-2">Phone Number</label>
                        <input type="text" name="mobile" value="{{$admin->mobile}}" id="simpleinput" class="form-input" placeholder="Phone Number">
                    </div>
                    {{-- <div>
                        <label for="simpleinput" class="text-gray-800 text-sm font-medium inline-block mb-2 mt-2">Password</label>
                        <input type="text" name="password" id="simpleinput" class="from-imput" placeholder="Password">
                    </div> --}}
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

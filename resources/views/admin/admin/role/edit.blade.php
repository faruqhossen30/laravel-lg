@extends('admin.layouts.vertical', ['title' => 'Elements', 'sub_title' => 'Forms', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    <div class="flex flex-col gap-6">
        <div class="card">
            <div class="card-header">
                <div class="flex justify-between items-center">
                    <h4 class="card-title">Input</h4>


                </div>
            </div>
            {{-- <div class="p-6">

			<form action="{{route('role.store')}}" method="POST">
                @csrf
				<div class="">
					<div>
                        <label for="simpleinput" class="text-gray-800 text-sm font-medium inline-block mb-2">Admin Name</label>
					    <input type="text" name="name"  id="simpleinput" class="form-input" placeholder="Admin name">
                    </div>
				</div>
                <div class="py-2">
                    <button type="submit" class="btn bg-primary text-white">Save</button>
                </div>
		</form> --}}

            <div class="rounded-md overflow-hidden">
                <div class="bg-white dark:bg-slate-800 px-5 py-7 ">
                    <form method="POST" action="{{ route('role.update', $role) }}">
                        @csrf
                        @method('PUT')
                        {{-- Name input end --}}
                        <div class="input-area">
                            <label for="name"
                                class="text-gray-800 text-sm font-medium inline-block mb-2">{{ __('Name') }}</label>
                            <input name="name" type="text" id="name" class="form-input"
                                placeholder="{{ __('Enter your role name') }}" value="{{ $role->name }}" required>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>


                        <h3 class="font-semibold text-2xl text-black dark:text-white py-5 mt-8">
                            {{ __('Choose Permission') }}
                            <x-input-error :messages="$errors->get('permissions')" class="mt-2" />
                        </h3>
                        <div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-7">

                            @foreach ($permissionModules as $key => $permissionModule)
                                <div class="card border border-slate-200">
                                    <div class="card-header bg-slate-100 !p-3">
                                        <h4 class="p-0 text-lg uppercase">{{ __($key) }}</h4>
                                    </div>
                                    <!-- Card Body Start -->
                                    <div class="p-4">
                                        <ul>
                                            @foreach ($permissionModule as $permission)
                                                <li @class([
                                                    'permissionCardList',
                                                    'singlePermissionCardList' => $loop->count == 1,
                                                ])>
                                                    <div class="flex items-center justify-between gap-x-3">
                                                        <label for="{{ $permission->name }}" class="capitalize">
                                                            {{ __($permission->name) }}
                                                        </label>
                                                        <div class="flex items-center mr-2 sm:mr-4 mt-2 space-x-2">
                                                            <div class="flex items-center">
                                                                <input name="permissions[]" @checked(in_array($permission->id, $rolePermissions))
                                                                    id="{{ $permission->name }}"
                                                                    value="{{ $permission->id }}" type="checkbox"
                                                                    id="formSwitch4" class="form-switch text-success">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- Card Body End -->
                                </div>
                            @endforeach
                        </div>
                        <div class="py-2">
                            <button type="submit" class="btn bg-primary text-white">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('script')
@endsection

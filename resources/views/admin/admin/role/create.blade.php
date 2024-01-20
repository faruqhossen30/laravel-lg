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
                    <form method="POST" action="{{ route('role.store') }}">
                        @csrf

                        {{-- Name input end --}}
                        <div class="input-area">
                            <label for="name"
                                class="text-gray-800 text-sm font-medium inline-block mb-2">{{ __('Name') }}</label>
                            <input name="name" type="text" id="name" class="form-input"
                                placeholder="{{ __('Enter your role name') }}" value="{{ old('name') }}" required>
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
                                                            {{-- <label class="relative inline-flex h-6 w-[46px] items-center rounded-full transition-all duration-150 cursor-pointer">
                                                            <input name="permissions[]"
                                                                @empty(!old('permissions'))
                                                                    @checked(in_array($permission->id, old('permissions')))
                                                                @endempty
                                                                id="{{$permission->name}}"
                                                                value="{{ $permission->id }}"
                                                                type="checkbox"
                                                                class="sr-only peer">
                                                            <div class="w-14 h-6 bg-gray-200 peer-focus:outline-none ring-0 rounded-full peer dark:bg-gray-900 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:z-10 after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary-500"></div>
                                                            <span class="absolute left-1 z-20 text-xs text-white font-Inter font-normal opacity-0 peer-checked:opacity-100">On</span>
                                                            <span class="absolute right-1 z-20 text-xs text-white font-Inter font-normal opacity-100 peer-checked:opacity-0">Off</span>
                                                        </label> --}}
                                                            <div class="flex items-center">
                                                                <input name="permissions[]"
                                                                    @empty(!old('permissions'))
                                                                    @checked(in_array($permission->id, old('permissions')))
                                                                @endempty
                                                                    id="{{ $permission->name }}"
                                                                    value="{{ $permission->id }}" type="checkbox"
                                                                    id="formSwitch4" class="form-switch text-success"
                                                                    >
                                                                {{-- <label for="formSwitch4" class="ms-1.5">Success</label> --}}
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

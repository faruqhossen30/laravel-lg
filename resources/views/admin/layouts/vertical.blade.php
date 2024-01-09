<!DOCTYPE html>
<html lang="en" data-sidenav-view="{{ $sidenav ?? 'default' }}">

<head>
    @include('admin.layouts.shared/title-meta', ['title' => $title])
    @yield('css')
    @include('admin.layouts.shared/head-css')
</head>

<body>

    <div class="flex wrapper">

        @include('admin.layouts.shared/sidebar')

        <div class="page-content">

            @include('admin.layouts.shared/topbar')

            <main class="flex-grow p-6">

                @include('admin.layouts.shared/page-title', [
                    'title' => $title,
                    'sub_title' => $sub_title,
                ])

                @yield('content')

            </main>

            @include('admin.layouts.shared/footer')

        </div>

    </div>

    @include('admin.layouts.shared/customizer')

    @include('admin.layouts.shared/footer-scripts')

    @vite(['resources/js/app.js'])

</body>


</html>

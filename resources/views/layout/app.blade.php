<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/187787b45d.js" crossorigin="anonymous"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&family=Poppins&display=swap" rel="stylesheet">
    @vite(['resources/css/index.css', 'resources/js/index.js'])
    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Poppins', sans-serif !important;
        }

        p {
            font-family: 'PT Sans', sans-serif !important;
        }
        .slider {
            position: relative;
        }
        .owl-nav .owl-next {
            position: absolute;
            top: calc(50% - 20px);
            right: 0;
            width: 40px;
            height: 40px;
            opacity: .8;
            border-radius: 50% !important;
            background-color: black !important;
            color: white !important;
        }

        .owl-nav .owl-prev {
            position: absolute;
            top: calc(50% - 20px);
            left: 0;
            width: 40px;
            height: 40px;
            opacity: .8;
            border-radius: 50% !important;
            background-color: black !important;
            color: white !important;
        }
        .owl-nav .owl-prev:hover {
            background-color: #FF003A !important;
            color: white !important;
        }

        .owl-nav .owl-next:hover {
            background-color: #FF003A !important;
            color: white !important;
        }
    </style>
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">


</head>

<body>

@include('layout.header')
@include('layout.slider')


    <!--After Slider Start-->
    <div class="container grid grid-cols-12">
        <div class="p-7 col-span-3">
            <div class="mb-7">
                <img src="/img/Icons/free-shipping.png" alt="">
            </div>
            <h2 class=" hover:text-brands transition text-lg">Free Shipping</h2>
            <p class="text-sm text-gray-400">Pay With Multiple Credit Card</p>
        </div>
        <div class="p-7 col-span-3">
            <div class="mb-7">
                <img src="/img/Icons/money-guarantee.png" alt="">
            </div>
            <h2 class=" hover:text-brands text-lg transition">Money Gurantee</h2>
            <p class="text-sm text-gray-400">Within 30 day for exchange.</p>
        </div>

        <div class="p-7 col-span-3">
            <div class="mb-7">
                <img src="/img/Icons/free-shipping.png" alt="">
            </div>
            <h2 class=" hover:text-brands transition text-lg">24/7 Online Support</h2>
            <p class="text-sm text-gray-400">24 hours a day, 7 days a week</p>
        </div>

        <div class="p-7 col-span-3">
            <div class="mb-7">
                <img src="/img/Icons/flexible-payment.png" alt="">
            </div>
            <h2 class=" hover:text-brands transition text-lg">Flexible Payment</h2>
            <p class="text-sm text-gray-400">Pay With Multiple Credit Card</p>
        </div>

    </div>
    <!--After Slider End-->

    <!--Getagary Section Start-->
    <div class="container pt-8 pb-40">
        <h2 class="text-center text-2xl">Product Categories</h2>
        <div
            class="py-3 max-w-[120px] mx-auto flex items-center text-xs text-black uppercase before:flex-[1_1_0%] before:border-t before:border-black before:me-2 after:flex-[1_1_0%] after:border-t after:border-black after:ms-2 dark:text-gray-500 dark:before:border-gray-600 dark:after:border-gray-600">

            <span class="text-2xl font-semibold text-black rotate-45  ">||</span>
        </div>
        <p class="text-center mb-16 text-gray-500 italic">Using real content during design can distract designers and
            design review teams</p>
        <div class="grid grid-cols-12 gap-5 items-start">

            <div class="col-span-3 p-4 flex items-center bg-[#F3F6F9] rounded space-x-4 group">
                <div class="w-24">
                    <img class="w-full" src="/img/category-01.png" alt="">
                </div>
                <div>
                    <h2 class="text-xl font-semibold">Leather Backpacks</h2>
                    <h3 class="text-sm">Starts From <span class="text-brands text-lg">$18.00</span></h3>
                    <button
                        class="hidden group-hover:inline-block  bg-black text-white px-6 rounded-full py-2 mt-5">View
                        Products</button>
                </div>
            </div>
            <div class="col-span-3 p-4 flex items-center bg-[#F3F6F9] rounded space-x-4 group">
                <div class="w-24">
                    <img class="w-full" src="/img/category-02.png" alt="">
                </div>
                <div>
                    <h2 class="text-xl font-semibold">Leather Belts</h2>
                    <h3 class="text-sm">Starts From <span class="text-brands text-lg">$12.00</span></h3>
                    <button
                        class="hidden group-hover:inline-block  bg-black text-white px-6 rounded-full py-2 mt-5">View
                        Products</button>
                </div>
            </div>
            <div class="col-span-3 p-4 flex items-center bg-[#F3F6F9] rounded space-x-4 group">
                <div class="w-24">
                    <img class="w-full" src="/img/category-01.png" alt="">
                </div>
                <div>
                    <h2 class="text-xl font-semibold">Leather Backpacks</h2>
                    <h3 class="text-sm">Starts From <span class="text-brands text-lg">$18.00</span></h3>
                    <button
                        class="hidden group-hover:inline-block  bg-black text-white px-6 rounded-full py-2 mt-5">View
                        Products</button>
                </div>
            </div>
            <div class="col-span-3 p-4 flex items-center bg-[#F3F6F9] rounded space-x-4 group">
                <div class="w-24">
                    <img class="w-full" src="/img/category-02.png" alt="">
                </div>
                <div>
                    <h2 class="text-xl font-semibold">Leather Belts</h2>
                    <h3 class="text-sm">Starts From <span class="text-brands text-lg">$12.00</span></h3>
                    <button
                        class="hidden group-hover:inline-block  bg-black text-white px-6 rounded-full py-2 mt-5">View
                        Products</button>
                </div>
            </div>
            <div class="col-span-3 p-4 flex items-center bg-[#F3F6F9] rounded space-x-4 group">
                <div class="w-24">
                    <img class="w-full" src="/img/category-01.png" alt="">
                </div>
                <div>
                    <h2 class="text-xl font-semibold">Leather Backpacks</h2>
                    <h3 class="text-sm">Starts From <span class="text-brands text-lg">$18.00</span></h3>
                    <button
                        class="hidden group-hover:inline-block  bg-black text-white px-6 rounded-full py-2 mt-5">View
                        Products</button>
                </div>
            </div>
            <div class="col-span-3 p-4 flex items-center bg-[#F3F6F9] rounded space-x-4 group">
                <div class="w-24">
                    <img class="w-full" src="/img/category-02.png" alt="">
                </div>
                <div>
                    <h2 class="text-xl font-semibold">Leather Belts</h2>
                    <h3 class="text-sm">Starts From <span class="text-brands text-lg">$12.00</span></h3>
                    <button
                        class="hidden group-hover:inline-block  bg-black text-white px-6 rounded-full py-2 mt-5">View
                        Products</button>
                </div>
            </div>
            <div class="col-span-3 p-4 flex items-center bg-[#F3F6F9] rounded space-x-4 group">
                <div class="w-24">
                    <img class="w-full" src="/img/category-01.png" alt="">
                </div>
                <div>
                    <h2 class="text-xl font-semibold">Leather Backpacks</h2>
                    <h3 class="text-sm">Starts From <span class="text-brands text-lg">$18.00</span></h3>
                    <button
                        class="hidden group-hover:inline-block  bg-black text-white px-6 rounded-full py-2 mt-5">View
                        Products</button>
                </div>
            </div>
            <div class="col-span-3 p-4 flex items-center bg-[#F3F6F9] rounded space-x-4 group">
                <div class="w-24">
                    <img class="w-full" src="/img/category-02.png" alt="">
                </div>
                <div>
                    <h2 class="text-xl font-semibold">Leather Belts</h2>
                    <h3 class="text-sm">Starts From <span class="text-brands text-lg">$12.00</span></h3>
                    <button
                        class="hidden group-hover:inline-block  bg-black text-white px-6 rounded-full py-2 mt-5">View
                        Products</button>
                </div>
            </div>




        </div>

    </div>
    <!--Getagary Section End-->

@include('layout.blog')
@include('layout.instagram')
@include('layout.footer')


    {{-- <script src=".//node_modules/preline/dist/preline.js"></script> --}}
    <!--Preline Link End-->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            items: 1,
            loop: false,
            center: true,
            autoplay: true,
            dots: true,
            loop: true,
            margin: 10,
            nav: true,
            autoplayHoverPause: true,
        });
    </script>
</body>

</html>

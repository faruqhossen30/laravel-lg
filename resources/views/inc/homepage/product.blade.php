    <!-- shop wrapper -->
    <div class="container grid lg:grid-cols-4 gap-6 pt-4 pb-16 items-start relative">
        <!-- sidebar -->
        <div
            class="col-span-1 bg-white px-4 pt-4 pb-6 shadow rounded overflow-hidden absolute lg:static left-4 top-16 z-10 w-72 lg:w-full hidden md:block">
            <div class="divide-gray-200 divide-y space-y-5 relative">
                <!-- category filter -->
                <div class="relative">
                    <div
                        class="lg:hidden text-gray-400 hover:text-brand text-lg absolute right-0 top-0 cursor-pointer">
                        <i class="fas fa-times"></i>
                    </div>
                    <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Categories</h3>
                    <div class="space-y-2">
                        <!-- single category -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Bedroom"
                                class="text-brand focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Bedroom" class="text-gray-600 ml-3 cursor-pointer">Bedroom</label>
                            <div class="ml-auto text-gray-600 text-sm">(15)</div>
                        </div>
                        <!-- single category end -->
                        <!-- single category -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Sofa"
                                class="text-brand focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Sofa" class="text-gray-600 ml-3 cursor-pointer">Sofa</label>
                            <div class="ml-auto text-gray-600 text-sm">(05)</div>
                        </div>
                        <!-- single category end -->
                        <!-- single category -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Office"
                                class="text-brand focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Office" class="text-gray-600 ml-3 cursor-pointer">Office</label>
                            <div class="ml-auto text-gray-600 text-sm">(09)</div>
                        </div>
                        <!-- single category end -->
                        <!-- single category -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Outdoor"
                                class="text-brand focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Outdoor" class="text-gray-600 ml-3 cursor-pointer">Outdoor</label>
                            <div class="ml-auto text-gray-600 text-sm">(19)</div>
                        </div>
                        <!-- single category end -->
                    </div>
                </div>
                <!-- category filter end -->
                <!-- brand filter -->
                <div class="pt-4">
                    <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Brands</h3>
                    <div class="space-y-2">
                        <!-- single brand name -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Dominik"
                                class="text-brand focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Dominik" class="text-gray-600 ml-3 cursor-pointer">Dominik</label>
                            <div class="ml-auto text-gray-600 text-sm">(15)</div>
                        </div>
                        <!-- single brand name end -->
                        <!-- single brand name -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Karl"
                                class="text-brand focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Karl" class="text-gray-600 ml-3 cursor-pointer">Karl</label>
                            <div class="ml-auto text-gray-600 text-sm">(18)</div>
                        </div>
                        <!-- single brand name end -->
                        <!-- single brand name -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Maxing"
                                class="text-brand focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Maxing" class="text-gray-600 ml-3 cursor-pointer">Maxing</label>
                            <div class="ml-auto text-gray-600 text-sm">(09)</div>
                        </div>
                        <!-- single brand name end -->
                        <!-- single brand name -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Ernest"
                                class="text-brand focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Ernest" class="text-gray-600 ml-3 cursor-pointer">Ernest</label>
                            <div class="ml-auto text-gray-600 text-sm">(12)</div>
                        </div>
                        <!-- single brand name end -->
                    </div>
                </div>
                <!-- brand filter end -->
                <!-- price filter -->
                <div class="pt-4">
                    <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Price</h3>
                    <div class="mt-4 flex items-center">
                        <input type="text"
                            class="w-full border-gray-300 focus:ring-0 focus:border-brand px-3 py-1 text-gray-600 text-sm shadow-sm rounded"
                            placeholder="min">
                        <span class="mx-3 text-gray-500">-</span>
                        <input type="text"
                            class="w-full border-gray-300 focus:ring-0 focus:border-brand px-3 py-1 text-gray-600 text-sm shadow-sm rounded"
                            placeholder="mix">
                    </div>
                </div>
                <!-- price filter end -->
                <!-- size filter -->
                <div class="pt-4">
                    <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">size</h3>
                    <div class="flex items-center gap-2">
                        <!-- single size -->
                        <div class="size-selector">
                            <input type="radio" name="size" class="hidden" id="size-xs">
                            <label for="size-xs"
                                class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">
                                XS
                            </label>
                        </div>
                        <!-- single size end -->
                        <!-- single size -->
                        <div class="size-selector">
                            <input type="radio" name="size" class="hidden" id="size-s">
                            <label for="size-s"
                                class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">
                                S
                            </label>
                        </div>
                        <!-- single size end -->
                        <!-- single size -->
                        <div class="size-selector">
                            <input type="radio" name="size" class="hidden" id="size-m" checked>
                            <label for="size-m"
                                class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">
                                M
                            </label>
                        </div>
                        <!-- single size end -->
                        <!-- single size -->
                        <div class="size-selector">
                            <input type="radio" name="size" class="hidden" id="size-l">
                            <label for="size-l"
                                class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">
                                L
                            </label>
                        </div>
                        <!-- single size end -->
                        <!-- single size -->
                        <div class="size-selector">
                            <input type="radio" name="size" class="hidden" id="size-xl">
                            <label for="size-xl"
                                class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">
                                XL
                            </label>
                        </div>
                        <!-- single size end -->
                    </div>
                </div>
                <!-- size filter end -->

            </div>
        </div>
        <!-- sidebar end -->

        <!-- products -->
        <div class="col-span-3">
            <!-- sorting -->
            <div class="mb-4 flex items-center">
                <button ="showFilter=!showFilter"
                    class="bg-brand border border-brand text-white px-10 py-3 font-medium rounded uppercase hover:bg-transparent hover:text-brand transition lg:hidden text-sm mr-3 focus:outline-none">
                    Filter
                </button>
                <select
                    class="w-44 text-sm text-gray-600 px-4 py-3 border-gray-300 shadow-sm rounded focus:ring-brand focus:border-brand">
                    <option>Default sorting</option>
                    <option>Price low-high</option>
                    <option>Price high-low</option>
                    <option>Latest product</option>
                </select>
                <div class="flex gap-2 ml-auto">
                    <div
                        class="border border-brand w-10 h-9 flex items-center justify-center text-white bg-brand rounded cursor-pointer">
                        <i class="fas fa-th"></i>
                    </div>
                    <div
                        class="border border-gray-300 w-10 h-9 flex items-center justify-center text-gray-600 rounded cursor-pointer">
                        <i class="fas fa-list"></i>
                    </div>
                </div>
            </div>
            <!-- sorting end -->
            <!-- product wrapper -->
            <div class="grid lg:grid-cols-2 xl:grid-cols-3 sm:grid-cols-2 gap-6">
                <!-- single product -->
                <div class="group rounded bg-white shadow overflow-hidden">
                    <!-- product image -->
                    <div class="relative">
                        <img src="{{asset('img/single-products/product-1.jpg')}}" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="view.html"
                                class="text-white text-lg w-9 h-9 rounded-full bg-brand hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="far fa-heart"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-9 rounded-full bg-brand hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="fa-regular fa-eye"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-9 rounded-full bg-brand hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="fa-solid fa-bag-shopping"></i>
                            </a>
                        </div>
                    </div>
                    <!-- product image end -->
                    <!-- product content -->
                    <div class="pt-4 pb-3 px-4">
                        <a href="view.html">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-brand transition">
                                Guyer chair
                            </h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-brand font-roboto font-semibold">$45.00</p>
                            <p class="text-sm text-gray-400 font-roboto line-through">$55.00</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(150)</div>
                        </div>
                    </div>
                    <!-- product content end -->
                    <!-- product button -->
                    <a href="#"
                        class="block md:hidden w-full py-1 text-center text-white bg-brand border border-brand rounded-b hover:bg-transparent hover:text-brand transition">
                        Add to Cart
                    </a>
                    <!-- product button end -->
                </div>
                <!-- single product end -->
                <!-- single product -->
                <div class="group rounded bg-white shadow overflow-hidden">
                    <!-- product image -->
                    <div class="relative">
                        <img src="{{asset('img/single-products/product-2.jpg')}}" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="view.html"
                                class="text-white text-lg w-9 h-9 rounded-full bg-brand hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="far fa-heart"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-9 rounded-full bg-brand hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="fa-regular fa-eye"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-9 rounded-full bg-brand hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="fa-solid fa-bag-shopping"></i>
                            </a>
                        </div>
                    </div>
                    <!-- product image end -->
                    <!-- product content -->
                    <div class="pt-4 pb-3 px-4">
                        <a href="view.html">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-brand transition">
                                Guyer chair
                            </h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-brand font-roboto font-semibold">$45.00</p>
                            <p class="text-sm text-gray-400 font-roboto line-through">$55.00</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(150)</div>
                        </div>
                    </div>
                    <!-- product content end -->
                    <!-- product button -->
                    <a href="#"
                        class="block md:hidden w-full py-1 text-center text-white bg-brand border border-brand rounded-b hover:bg-transparent hover:text-brand transition">
                        Add to Cart
                    </a>
                    <!-- product button end -->
                </div>
                <!-- single product end -->
                <!-- single product -->
                <div class="group rounded bg-white shadow overflow-hidden">
                    <!-- product image -->
                    <div class="relative">
                        <img src="{{asset('img/single-products/product-3.jpg')}}" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="view.html"
                                class="text-white text-lg w-9 h-9 rounded-full bg-brand hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="far fa-heart"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-9 rounded-full bg-brand hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="fa-regular fa-eye"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-9 rounded-full bg-brand hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="fa-solid fa-bag-shopping"></i>
                            </a>
                        </div>
                    </div>
                    <!-- product image end -->
                    <!-- product content -->
                    <div class="pt-4 pb-3 px-4">
                        <a href="view.html">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-brand transition">
                                Guyer chair
                            </h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-brand font-roboto font-semibold">$45.00</p>
                            <p class="text-sm text-gray-400 font-roboto line-through">$55.00</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(150)</div>
                        </div>
                    </div>
                    <!-- product content end -->
                    <!-- product button -->
                    <a href="#"
                        class="block md:hidden w-full py-1 text-center text-white bg-brand border border-brand rounded-b hover:bg-transparent hover:text-brand transition">
                        Add to Cart
                    </a>
                    <!-- product button end -->
                </div>
                <!-- single product end -->
                <!-- single product -->
                <div class="group rounded bg-white shadow overflow-hidden">
                    <!-- product image -->
                    <div class="relative">
                        <img src="{{asset('img/single-products/product-4.jpg')}}" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="view.html"
                                class="text-white text-lg w-9 h-9 rounded-full bg-brand hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="far fa-heart"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-9 rounded-full bg-brand hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="fa-regular fa-eye"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-9 rounded-full bg-brand hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="fa-solid fa-bag-shopping"></i>
                            </a>
                        </div>
                    </div>
                    <!-- product image end -->
                    <!-- product content -->
                    <div class="pt-4 pb-3 px-4">
                        <a href="view.html">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-brand transition">
                                Guyer chair
                            </h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-brand font-roboto font-semibold">$45.00</p>
                            <p class="text-sm text-gray-400 font-roboto line-through">$55.00</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(150)</div>
                        </div>
                    </div>
                    <!-- product content end -->
                    <!-- product button -->
                    <a href="#"
                        class="block md:hidden w-full py-1 text-center text-white bg-brand border border-brand rounded-b hover:bg-transparent hover:text-brand transition">
                        Add to Cart
                    </a>
                    <!-- product button end -->
                </div>
                <!-- single product end -->
                <!-- single product -->
                <div class="group rounded bg-white shadow overflow-hidden">
                    <!-- product image -->
                    <div class="relative">
                        <img src="{{asset('img/single-products/product-5.jpg')}}" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="view.html"
                                class="text-white text-lg w-9 h-9 rounded-full bg-brand hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="far fa-heart"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-9 rounded-full bg-brand hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="fa-regular fa-eye"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-9 rounded-full bg-brand hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="fa-solid fa-bag-shopping"></i>
                            </a>
                        </div>
                    </div>
                    <!-- product image end -->
                    <!-- product content -->
                    <div class="pt-4 pb-3 px-4">
                        <a href="view.html">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-brand transition">
                                Guyer chair
                            </h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-brand font-roboto font-semibold">$45.00</p>
                            <p class="text-sm text-gray-400 font-roboto line-through">$55.00</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(150)</div>
                        </div>
                    </div>
                    <!-- product content end -->
                    <!-- product button -->
                    <a href="#"
                        class="block md:hidden w-full py-1 text-center text-white bg-brand border border-brand rounded-b hover:bg-transparent hover:text-brand transition">
                        Add to Cart
                    </a>
                    <!-- product button end -->
                </div>
                <!-- single product end -->
                <!-- single product -->
                <div class="group rounded bg-white shadow overflow-hidden">
                    <!-- product image -->
                    <div class="relative">
                        <img src="{{asset('img/single-products/product-9.jpg')}}" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="view.html"
                                class="text-white text-lg w-9 h-9 rounded-full bg-brand hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="far fa-heart"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-9 rounded-full bg-brand hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="fa-regular fa-eye"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-9 rounded-full bg-brand hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="fa-solid fa-bag-shopping"></i>
                            </a>
                        </div>
                    </div>
                    <!-- product image end -->
                    <!-- product content -->
                    <div class="pt-4 pb-3 px-4">
                        <a href="view.html">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-brand transition">
                                Guyer chair
                            </h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-brand font-roboto font-semibold">$45.00</p>
                            <p class="text-sm text-gray-400 font-roboto line-through">$55.00</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(150)</div>
                        </div>
                    </div>
                    <!-- product content end -->
                    <!-- product button -->
                    <a href="#"
                        class="block md:hidden w-full py-1 text-center text-white bg-brand border border-brand rounded-b hover:bg-transparent hover:text-brand transition">
                        Add to Cart
                    </a>
                    <!-- product button end -->
                </div>
                <!-- single product end -->
            </div>
            <!-- product wrapper end -->
        </div>
        <!-- products end -->
    </div>
    <!-- shop wrapper end -->




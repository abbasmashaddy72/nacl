<div class="container">
    @if (count($products) > 0)
        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
            <div class="lg:col-span-4 md:col-span-6">
                <div class="sticky p-6 bg-white rounded-md shadow dark:shadow-gray-800 dark:bg-slate-900 top-20">
                    <form>
                        <div class="grid grid-cols-1 gap-3">
                            <div>
                                <label for="searchname" class="hidden font-semibold"></label>
                                <div class="relative">
                                    <input type="text" wire:model.live='search'
                                        class="w-full h-10 py-2 pl-10 pr-4 bg-transparent border border-gray-200 rounded outline-none form-input dark:bg-slate-900 dark:text-slate-200 focus:border-blue-600 dark:border-gray-800 dark:focus:border-blue-600 focus:ring-0"
                                        placeholder="Search" />
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="text-gray-900 dark:text-white ri-search-line"></i>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label class="font-semibold">Categories</label>
                                @foreach ($categories as $category)
                                    <div class="block mt-2">
                                        <x-radio id="{{ $category->slug }}" label="{{ $category->name }}"
                                            wire:model.live="selectedCategories" value="{{ $category->id }}" />
                                    </div>
                                @endforeach
                            </div>

                            <div>
                                <label class="font-semibold">Featured Products</label>
                                @foreach ($featuredProducts as $featuredProduct)
                                    <div class="block mt-2">
                                        <span class="flex items-center">
                                            <x-curator-glider class="w-12 rounded shadow dark:shadow-gray-800"
                                                :media="(int) $featuredProduct->images[0]" />
                                            <span class="ms-3">
                                                <span class="block font-semibold">{{ $featuredProduct->name }}</span>
                                                <span
                                                    class="block text-sm text-slate-400">${{ $featuredProduct->price }}USD</span>
                                            </span>
                                        </span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="lg:col-span-8 md:col-span-6">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                    <div class="lg:col-span-9 md:col-span-8">
                        <h3 class="text-xl font-semibold leading-normal">
                            Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} of
                            {{ $products->total() }}
                            results
                        </h3>
                    </div>

                    <div class="lg:col-span-3 md:col-span-4 md:text-end">
                        <label class="hidden font-semibold"></label>
                        <select wire:model.live="sortBy"
                            class="w-full h-10 px-3 py-2 bg-transparent border border-gray-200 rounded outline-none form-select form-input dark:bg-slate-900 dark:text-slate-200 focus:border-blue-600 dark:border-gray-800 dark:focus:border-blue-600 focus:ring-0">
                            <option selected value="latest">Latest</option>
                            <option value="featured">Featured</option>
                            <option value="low-to-high">Low To High</option>
                            <option value="high-to-low">High To Low</option>
                        </select>
                    </div>
                </div>

                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                    @foreach ($products as $product)
                        <div class="group">
                            <div
                                class="relative overflow-hidden duration-500 rounded-md shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800">
                                <x-curator-glider :media="(int) $product->images[0]" />

                                <div class="absolute duration-500 -bottom-20 group-hover:bottom-3 start-3 end-3">
                                    <a href="shop-cart.html"
                                        class="inline-block w-full px-5 py-2 text-base font-semibold tracking-wide text-center text-white align-middle duration-500 border rounded-md bg-slate-900 border-slate-900">Add
                                        to Cart</a>
                                </div>
                                @if ($product->is_featured)
                                    <ul class="list-none absolute top-[10px] start-4">
                                        <li><a href="javascript:void(0)"
                                                class="bg-orange-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5">
                                                {{ __('Featured') }}
                                            </a>
                                        </li>
                                    </ul>
                                @endif
                            </div>

                            <div class="mt-4">
                                <a href="shop-item-detail.html"
                                    class="text-lg font-semibold hover:text-blue-600">{{ $product->name }}</a>
                                <div class="flex items-center justify-between mt-1">
                                    <p class="text-green-600">${{ $product->price }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pt-8">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    @else
        <div class="text-3xl font-bold text-center">Coming Soon</div>
    @endif
</div>

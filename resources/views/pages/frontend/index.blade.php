<x-guest-layout>

    <section class="relative flex items-center py-24 pb-0 overflow-hidden md:h-3/6" id="home">
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                @foreach ($settings->sliders as $slider)
                    <a href="{{ $slider['url'] }}" class="hidden duration-700 ease-in-out" data-carousel-item>
                        <x-curator-glider :media="(int) $slider['image']"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" />
                    </a>
                @endforeach
            </div>
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2 rtl:space-x-reverse">
                @foreach ($settings->sliders as $slider)
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                        aria-label="Slide {{ $loop->iteration }}" data-carousel-slide-to="{{ $loop->index }}"></button>
                @endforeach
            </div>
            <button type="button"
                class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer start-0 group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer end-0 group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </section>

    <section class="relative flex items-center py-6 overflow-hidden">
        <div class="container relative">
            <div class="grid md:grid-cols-12 grid-col-1 items-center gap-[30px]">
                <div class="order-2 lg:col-span-5 md:col-span-6 md:order-1">
                    <div
                        class="p-6 overflow-hidden rounded-md shadow dark:shadow-gray-800 bg-gray-50 dark:bg-slate-800 bg-opacity-90 dark:bg-opacity-90">
                        <img src="assets/images/logo-icon-64.png" class="mx-auto" alt="">
                        <h5 class="mt-3 text-2xl font-semibold text-center">NACL Launch Date</h5>
                        <div class="grid grid-col-1">
                            <div class="text-center">
                                <div id="token-sale">
                                    <div class="flex">
                                        <div id="days"
                                            class="md:w-1/4 w-1/2 count-number lg:text-[40px] md:text-[32px] text-[28px] leading-[95px] font-semibold">
                                        </div>
                                        <div id="hours"
                                            class="md:w-1/4 w-1/2 count-number lg:text-[40px] md:text-[32px] text-[28px] leading-[95px] font-semibold">
                                        </div>
                                        <div id="mins"
                                            class="md:w-1/4 w-1/2 count-number lg:text-[40px] md:text-[32px] text-[28px] leading-[95px] font-semibold">
                                        </div>
                                        <div id="secs"
                                            class="md:w-1/4 w-1/2 count-number lg:text-[40px] md:text-[32px] text-[28px] leading-[95px] font-semibold">
                                        </div>
                                        <div id="end" class="h1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href=""
                                class="inline-block w-full px-5 py-2 text-base tracking-wide text-center text-white align-middle duration-500 bg-indigo-600 border border-indigo-600 rounded-md hover:bg-indigo-700 hover:border-indigo-700">
                                Book Now
                            </a>
                        </div>
                    </div>
                </div>

                <div
                    class="order-1 py-8 rounded-md bg-gray-50 dark:bg-slate-800 bg-opacity-90 dark:bg-opacity-90 lg:col-span-7 md:col-span-6 md:order-2">
                    <div class="lg:ms-10">
                        <h4 class="my-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">
                            {{ $settings->card2Title }}</h4>
                        <p class="mx-auto mb-3 whitespace-pre-line text-slate-400 para-desc">
                            {{ $settings->card2Message }}</p>
                        <div class="mt-4">
                            <a href="{{ $settings->card2ButtonURL }}"
                                class="inline-block px-5 py-2 text-base font-semibold tracking-wide text-center text-white align-middle duration-500 bg-indigo-600 border border-indigo-600 rounded-md hover:bg-indigo-700 hover:border-indigo-700">{{ $settings->card2ButtonLabel }}</a>
                            <a href="#!" data-type="youtube" data-id="{{ $settings->card2YoutubeId }}"
                                class="inline-flex items-center justify-center m-1 text-base tracking-wide text-center text-white align-middle duration-500 bg-indigo-600 border-indigo-600 rounded-full h-9 w-9 hover:bg-indigo-700 hover:border-indigo-700 lightbox">
                                <i data-feather="video" class="w-4 h-4"></i></a><span
                                class="font-semibold align-middle ms-1">Watch Now</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if ($common_settings->enableSponsorSection)
        <section class="py-6 border-t border-b border-gray-100 dark:border-gray-700">
            <div class="container relative">
                <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
                    @foreach ($common_settings->sponsorImages as $item)
                        <div class="py-4 mx-auto">
                            <x-curator-glider class="h-6" :media="(int) $item" />
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <section class="relative py-16 mb-8 md:py-24">
        <div class="container relative">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 text-3xl font-medium leading-normal md:text-4xl md:leading-normal font-head-ebgaramond">
                    {{ $settings->welcomeTitle }}
                </h3>
                <p class="max-w-xl mx-auto text-slate-400">{{ $settings->welcomeMessage }}</p>
            </div>

            <div class="grid lg:grid-cols-12 md:grid-cols-12 grid-cols-1 mt-8 gap-[30px] items-center">
                <div class="order-2 lg:col-span-4 md:col-span-6 lg:order-1">
                    <div class="grid grid-cols-1 gap-[30px]">
                        @foreach ($sports as $sport)
                            @if ($loop->odd)
                                <div class="duration-500 group md:text-end text-start">
                                    <x-curator-glider
                                        class="w-16 h-16 rounded-full shadow-md md:ms-auto dark:shadow-gray-800"
                                        :media="(int) $sport->images[0]" />
                                    <div class="order-2 mt-2 md:order-1">
                                        <div class="text-xl font-semibold font-head-ebgaramond hover:text-indigo-600">
                                            {{ $sport->name }}
                                        </div>
                                        <p class="mt-3 text-slate-400">{{ $sport->short_description }}</p>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="order-1 lg:col-span-4 md:col-span-12 lg:order-2">
                    <x-curator-glider class="object-cover mx-auto lg:w-auto md:w-80 aspect-[2/3]" :media="$settings->welcomeImage" />
                </div>
                <div class="order-3 lg:col-span-4 md:col-span-6">
                    <div class="grid grid-cols-1 gap-[30px]">
                        @foreach ($sports as $sport)
                            @if ($loop->even)
                                <div class="duration-500 group">
                                    <x-curator-glider class="w-16 h-16 rounded-full shadow-md dark:shadow-gray-800"
                                        :media="(int) $sport->images[0]" />
                                    <div class="mt-2">
                                        <div class="text-xl font-semibold font-head-ebgaramond hover:text-indigo-600">
                                            The
                                            {{ $sport->name }}
                                        </div>
                                        <p class="mt-3 text-slate-400">{{ $sport->short_description }}</p>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container relative mt-16 md:mt-24">
        <div class="grid md:grid-cols-2 gap-[30px] items-center">
            <div class="">
                <x-curator-glider class="rounded shadow dark:shadow-gray-800 aspect-[3/4]" :media="$settings->videoRecordingImage" />
            </div>

            <div class="lg:ms-8">
                <h4
                    class="mb-4 text-3xl font-medium leading-normal md:text-4xl md:leading-normal font-head-ebgaramond">
                    {{ $settings->videoRecordingTitle }}</h4>
                <p class="max-w-xl mx-auto text-slate-400">{{ $settings->videoRecordingMessage }}</p>

                <div class="grid grid-cols-1 gap-[30px] mt-6">
                    @foreach ($settings->videoRecordingPoints as $item)
                        <div class="flex items-center duration-500 group">
                            <x-curator-glider class="w-16 h-16 rounded-full shadow-md dark:shadow-gray-800"
                                :media="(int) $item['image']" />
                            <div class="flex-1 ms-3">
                                <div class="text-xl font-semibold font-head-ebgaramond hover:text-indigo-600">
                                    {{ $item['title'] }}</div>
                                <p class="mt-3 text-slate-400">{{ $item['message'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-8">
                    <a href="{{ route('book-slot') }}"
                        class="inline-block px-5 py-2 text-base font-semibold tracking-wide text-center text-white align-middle duration-500 bg-indigo-600 border border-indigo-600 rounded-md hover:bg-indigo-700 hover:border-indigo-700">
                        {{ __('Book Slot') }}
                        <i class="uil uil-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <section class="relative py-16 lg:py-24">
        <div class="container relative mt-16 md:mt-24">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-6 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">
                    {{ $settings->shopSectionTitle }}
                </h3>
                <p class="max-w-xl mx-auto text-slate-400">{{ $settings->shopSectionMessage }}</p>
            </div>

            <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">
                @foreach ($categories as $category)
                    <div class="lg:col-span-3 md:col-span-6">
                        <a href="">
                            <div class="text-center group">
                                <div
                                    class="relative inline-block mx-auto overflow-hidden rounded-full shadow-md h-52 w-52 dark:shadow-gray-800">
                                    <x-curator-glider class="object-cover w-full h-full" :media="$category->image" />
                                    <div
                                        class="absolute inset-0 duration-500 rounded-full opacity-0 bg-gradient-to-b from-transparent to-black h-52 w-52 group-hover:opacity-100">
                                    </div>
                                </div>

                                <div class="mt-3 content">
                                    <div class="text-lg font-semibold duration-500 hover:text-indigo-600">
                                        {{ $category->name }}</div>
                                    <p class="text-slate-400">{{ $category->short_description }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-guest-layout>

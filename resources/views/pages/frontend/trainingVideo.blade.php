<x-guest-layout>
    <x-frontend.inner-top-section backgroundUrl="{{ $settings->trainingBreadcrumbImage }}" />
    <section class="relative py-16 md:py-24">
        <div class="container relative">
            <div
                class="grid md:grid-cols-3 grid-cols-1 shadow shadow-gray-300 dark:shadow-gray-500 rounded-lg md:divide-x-[1px] md:divide-y-0 divide-y-[1px] divide-gray-200 dark:divide-gray-700">
                @foreach ($settings->trainingFlow as $item)
                    <div class="relative p-6 md:p-8">
                        <h5 class="my-5 text-xl font-semibold">{{ $item['title'] }}</h5>

                        <p class="text-slate-400">{{ $item['message'] }}</p>

                        @if (!$loop->last)
                            <span
                                class="absolute flex items-center justify-center w-8 h-8 text-white bg-indigo-600 rounded-full ri-arrow-right-s-line md:top-2/4 md:-translate-y-2/4 -bottom-4 md:-end-0 end-2/4 ltr:translate-x-2/4 rtl:-translate-x-2/4 rtl:rotate-180 z-1"></span>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>

        <section class="relative py-16 md:py-24">
            <div class="container relative mt-16 md:mt-24">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                    <div class="order-1 md:col-span-6 md:order-2">
                        <div class="lg:ms-8">
                            <x-curator-glider class="" :media="$settings->descriptionSectionImage" />
                        </div>
                    </div>

                    <div class="md:col-span-6 order2 md:order-1">
                        <div class="lg:me-5">
                            <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">
                                {{ $settings->descriptionSectionTitle }}
                            </h3>

                            <div class="max-w-xl whitespace-pre-wrap text-slate-400">
                                {{ $settings->descriptionSectionMessage }}</div>

                            <ul class="my-6 list-none text-slate-400">
                                @foreach ($settings->descriptionSectionPoints as $item)
                                    <li class="flex mb-1"><i
                                            class="text-xl text-indigo-600 ri-checkbox-circle-line me-2"></i>
                                        {{ $item['point'] }}</li>
                                @endforeach
                            </ul>

                            <a href="{{ route('book-slot') }}"
                                class="inline-block px-5 py-2 text-base font-semibold tracking-wide text-center text-indigo-600 align-middle duration-500 border rounded-full bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 hover:text-white">Book
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container relative mt-16 md:mt-24">
            <div class="grid items-end grid-cols-1 pb-8">
                <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">
                    {{ $settings->trainingVideoTitle }}</h3>
                <p class="max-w-xl text-slate-400">{{ $settings->trainingVideoMessage }}</p>
            </div>
        </div>

        <div class="relative mt-8 container-fluid">
            <div class="grid grid-cols-1 mt-8">
                <div class="tiny-six-item">
                    @foreach ($settings->trainingVideoImages as $item)
                        @php
                            $image_path = '' ?? \Awcodes\Curator\Models\Media::findOrFail($item)->pluck('path');
                        @endphp
                        <div class="tiny-slide">
                            <div class="relative block mx-2 overflow-hidden duration-500 rounded-md group">
                                <a href="{{ asset('/storage/' . $image_path) }}"
                                    class="duration-500 lightbox group-hover:scale-105" title="">
                                    <x-curator-glider class="" :media="$item" />
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="container relative mt-16 md:mt-24">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">
                    {{ $settings->testimonialTitle }}
                </h3>

                <p class="max-w-xl mx-auto text-slate-400">{{ $settings->testimonialMessage }}</p>
            </div>

            <div class="grid grid-cols-1 mt-8">
                <div class="tiny-three-item">
                    <div class="text-center tiny-slide">
                        <div class="customer-testi cursor-e-resize">
                            <div
                                class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                                <i class="text-indigo-600 mdi mdi-format-quote-open mdi-48px"></i>
                                <p class="text-slate-400">" It seems that only fragments of the original text remain in
                                    the Lorem Ipsum texts used today. "</p>
                                <ul class="mt-3 mb-0 list-none text-amber-400">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>

                            <div class="mt-5 text-center">
                                <img src="assets/images/client/01.jpg" class="mx-auto rounded-full shadow-md h-14 w-14"
                                    alt="">
                                <h6 class="mt-2 font-semibold">Calvin Carlo</h6>
                                <span class="text-sm text-slate-400">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="text-center tiny-slide">
                        <div class="customer-testi cursor-e-resize">
                            <div
                                class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                                <i class="text-indigo-600 mdi mdi-format-quote-open mdi-48px"></i>
                                <p class="text-slate-400">" The most well-known dummy text is the 'Lorem Ipsum', which
                                    is said to have originated in the 16th century. "</p>
                                <ul class="mt-3 mb-0 list-none text-amber-400">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>

                            <div class="mt-5 text-center">
                                <img src="assets/images/client/02.jpg" class="mx-auto rounded-full shadow-md h-14 w-14"
                                    alt="">
                                <h6 class="mt-2 font-semibold">Christa Smith</h6>
                                <span class="text-sm text-slate-400">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="text-center tiny-slide">
                        <div class="customer-testi cursor-e-resize">
                            <div
                                class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                                <i class="text-indigo-600 mdi mdi-format-quote-open mdi-48px"></i>
                                <p class="text-slate-400">" One disadvantage of Lorum Ipsum is that in Latin certain
                                    letters appear more frequently than others. "</p>
                                <ul class="mt-3 mb-0 list-none text-amber-400">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>

                            <div class="mt-5 text-center">
                                <img src="assets/images/client/03.jpg"
                                    class="mx-auto rounded-full shadow-md h-14 w-14" alt="">
                                <h6 class="mt-2 font-semibold">Jemina CLone</h6>
                                <span class="text-sm text-slate-400">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="text-center tiny-slide">
                        <div class="customer-testi cursor-e-resize">
                            <div
                                class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                                <i class="text-indigo-600 mdi mdi-format-quote-open mdi-48px"></i>
                                <p class="text-slate-400">" Thus, Lorem Ipsum has only limited suitability as a visual
                                    filler for German texts. "</p>
                                <ul class="mt-3 mb-0 list-none text-amber-400">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>

                            <div class="mt-5 text-center">
                                <img src="assets/images/client/04.jpg"
                                    class="mx-auto rounded-full shadow-md h-14 w-14" alt="">
                                <h6 class="mt-2 font-semibold">Smith Vodka</h6>
                                <span class="text-sm text-slate-400">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="text-center tiny-slide">
                        <div class="customer-testi cursor-e-resize">
                            <div
                                class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                                <i class="text-indigo-600 mdi mdi-format-quote-open mdi-48px"></i>
                                <p class="text-slate-400">" There is now an abundance of readable dummy texts. These
                                    are usually used when a text is required. "</p>
                                <ul class="mt-3 mb-0 list-none text-amber-400">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>

                            <div class="mt-5 text-center">
                                <img src="assets/images/client/05.jpg"
                                    class="mx-auto rounded-full shadow-md h-14 w-14" alt="">
                                <h6 class="mt-2 font-semibold">Cristino Murfi</h6>
                                <span class="text-sm text-slate-400">Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="text-center tiny-slide">
                        <div class="customer-testi cursor-e-resize">
                            <div
                                class="content relative rounded shadow dark:shadow-gray-800 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                                <i class="text-indigo-600 mdi mdi-format-quote-open mdi-48px"></i>
                                <p class="text-slate-400">" According to most sources, Lorum Ipsum can be traced back
                                    to a text composed by Cicero. "</p>
                                <ul class="mt-3 mb-0 list-none text-amber-400">
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                    <li class="inline"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>

                            <div class="mt-5 text-center">
                                <img src="assets/images/client/06.jpg"
                                    class="mx-auto rounded-full shadow-md h-14 w-14" alt="">
                                <h6 class="mt-2 font-semibold">Cristino Murfi</h6>
                                <span class="text-sm text-slate-400">Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if ($settings->enableTrainingVideoCTASection)
        <x-frontend.cta />
    @endif
</x-guest-layout>

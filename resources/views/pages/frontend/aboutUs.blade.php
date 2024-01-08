<x-guest-layout>
    <x-frontend.inner-top-section backgroundUrl="{{ $settings->aboutUsBreadcrumbImage }}" />
    <section class="relative py-16 md:py-24">
        <div class="container relative">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="lg:col-span-5 md:col-span-6">
                    <div class="grid items-center grid-cols-12 gap-6">
                        <div class="col-span-12">
                            <div class="grid grid-cols-1 gap-6">
                                <x-curator-glider :media="$settings->aboutUsImage" class="rounded-md shadow" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7 md:col-span-6">
                    <div class="lg:ms-5">
                        <h3 class="mb-6 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">
                            {{ $settings->aboutUsTitle }}</h3>

                        <p class="max-w-xl text-slate-400">{{ $settings->aboutUsMessage }}</p>

                        <div class="mt-6">
                            <a href="{{ $settings->aboutUsButtonURL }}"
                                class="inline-block px-5 py-2 mt-2 text-base font-semibold tracking-wide text-center text-white align-middle duration-500 bg-blue-600 border border-blue-600 rounded-md hover:bg-blue-700 hover:border-blue-700 me-2"><i
                                    class="ri-mail-line"></i> {{ $settings->aboutUsButtonLabel }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if ($settings->enableAboutUsSponsorSection)
            <div class="container relative mt-8">
                <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
                    <div class="mx-auto mt-8">
                        <img src="assets/images/client/amazon.svg" class="h-6" alt="">
                    </div>

                    <div class="mx-auto mt-8">
                        <img src="assets/images/client/google.svg" class="h-6" alt="">
                    </div>

                    <div class="mx-auto mt-8">
                        <img src="assets/images/client/lenovo.svg" class="h-6" alt="">
                    </div>

                    <div class="mx-auto mt-8">
                        <img src="assets/images/client/paypal.svg" class="h-6" alt="">
                    </div>

                    <div class="mx-auto mt-8">
                        <img src="assets/images/client/shopify.svg" class="h-6" alt="">
                    </div>

                    <div class="mx-auto mt-8">
                        <img src="assets/images/client/spotify.svg" class="h-6" alt="">
                    </div>
                </div>
            </div>
        @endif
    </section>

    <section class="relative py-16 md:py-24 bg-gray-50 dark:bg-slate-800">
        <div class="container relative">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-6 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">
                    {{ $settings->aboutUsKeyFeatureTitle }}</h3>

                <p class="max-w-xl mx-auto text-slate-400">{{ $settings->aboutUsKeyFeatureMessage }}</p>
            </div>

            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px] mt-8">
                @foreach ($settings->aboutUsKeyFeaturePoints as $item)
                    <div
                        class="flex items-center p-3 duration-500 ease-in-out bg-white rounded-md shadow hover:scale-105 dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 dark:bg-slate-900">
                        <div
                            class="flex items-center justify-center h-[45px] min-w-[45px] bg-gradient-to-r from-transparent to-blue-600/10 text-blue-600 text-center rounded-full me-3">
                            <x-curator-glider :media="(int) $item['image']" class="w-full h-full rounded-md shadow" />
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-lg font-medium">{{ $item['title'] }}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="relative py-16 pt-0 md:py-24 bg-gray-50 dark:bg-slate-800 md:pt-0">
        <div class="container relative">
            <div class="grid justify-center grid-cols-1">
                <div class="relative z-1">
                    <div class="grid justify-center grid-cols-1 text-center lg:grid-cols-12 md:text-start">
                        <div class="lg:col-start-2 lg:col-span-10">
                            <div class="relative">
                                <x-curator-glider :media="$settings->aboutUsVideoImage" class="rounded-md shadow-lg" />
                                <div class="absolute text-center bottom-2/4 translate-y-2/4 start-0 end-0">
                                    <a href="#!" data-type="youtube" data-id="{{ $settings->aboutUsVideoURL }}"
                                        class="inline-flex items-center justify-center w-20 h-20 text-blue-600 bg-white rounded-full shadow-lg lightbox dark:shadow-gray-800 dark:bg-slate-900 dark:text-white">
                                        <i class="inline-flex items-center justify-center text-2xl ri-play-line"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 start-0 end-0 sm:h-2/3 h-4/5 bg-gradient-to-b from-blue-500 to-blue-600">
        </div>
    </section>

    @if ($settings->enableAboutUsTeamTestimonialSection)
        <section class="relative py-16 pb-0 md:py-24 bg-gray-50 dark:bg-slate-800 md:pb-0">
            <div class="container relative">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-6 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">
                        {{ $settings->aboutUsTeamSectionTitle }}</h3>

                    <p class="max-w-xl mx-auto text-slate-400">{{ $settings->aboutUsTeamSectionMessage }}</p>
                </div>

                <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">
                    <div class="lg:col-span-3 md:col-span-6">
                        <div
                            class="p-6 bg-white border border-gray-100 rounded-md team dark:border-gray-700 group dark:bg-slate-900">
                            <img src="assets/images/client/01.jpg"
                                class="w-24 h-24 rounded-full shadow-md dark:shadow-gray-800" alt="">

                            <div class="mt-4 content">
                                <a href="" class="block text-lg font-medium hover:text-blue-600">Ronny
                                    Jofra</a>
                                <span class="block text-slate-400">C.E.O.</span>

                                <p class="mt-4 text-slate-400">If the distribution of letters and 'words' is random</p>

                                <ul class="mt-4 list-none">
                                    <li class="inline"><a href=""
                                            class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-blue-600 dark:hover:border-blue-600 hover:bg-blue-600 hover:text-white"><i
                                                data-feather="facebook" class="w-4 h-4"></i></a></li>
                                    <li class="inline"><a href=""
                                            class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-blue-600 dark:hover:border-blue-600 hover:bg-blue-600 hover:text-white"><i
                                                data-feather="instagram" class="w-4 h-4"></i></a></li>
                                    <li class="inline"><a href=""
                                            class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-blue-600 dark:hover:border-blue-600 hover:bg-blue-600 hover:text-white"><i
                                                data-feather="twitter" class="w-4 h-4"></i></a></li>
                                    <li class="inline"><a href=""
                                            class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-blue-600 dark:hover:border-blue-600 hover:bg-blue-600 hover:text-white"><i
                                                data-feather="linkedin" class="w-4 h-4"></i></a></li>
                                </ul><!--end icon-->
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-3 md:col-span-6">
                        <div
                            class="p-6 bg-white border border-gray-100 rounded-md team dark:border-gray-700 group dark:bg-slate-900">
                            <img src="assets/images/client/02.jpg"
                                class="w-24 h-24 rounded-full shadow-md dark:shadow-gray-800" alt="">

                            <div class="mt-4 content">
                                <a href="" class="block text-lg font-medium hover:text-blue-600">Aliana
                                    Rosy</a>
                                <span class="block text-slate-400">HR</span>

                                <p class="mt-4 text-slate-400">If the distribution of letters and 'words' is random</p>

                                <ul class="mt-4 list-none">
                                    <li class="inline"><a href=""
                                            class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-blue-600 dark:hover:border-blue-600 hover:bg-blue-600 hover:text-white"><i
                                                data-feather="facebook" class="w-4 h-4"></i></a></li>
                                    <li class="inline"><a href=""
                                            class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-blue-600 dark:hover:border-blue-600 hover:bg-blue-600 hover:text-white"><i
                                                data-feather="instagram" class="w-4 h-4"></i></a></li>
                                    <li class="inline"><a href=""
                                            class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-blue-600 dark:hover:border-blue-600 hover:bg-blue-600 hover:text-white"><i
                                                data-feather="twitter" class="w-4 h-4"></i></a></li>
                                    <li class="inline"><a href=""
                                            class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-blue-600 dark:hover:border-blue-600 hover:bg-blue-600 hover:text-white"><i
                                                data-feather="linkedin" class="w-4 h-4"></i></a></li>
                                </ul><!--end icon-->
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-3 md:col-span-6">
                        <div
                            class="p-6 bg-white border border-gray-100 rounded-md team dark:border-gray-700 group dark:bg-slate-900">
                            <img src="assets/images/client/03.jpg"
                                class="w-24 h-24 rounded-full shadow-md dark:shadow-gray-800" alt="">

                            <div class="mt-4 content">
                                <a href="" class="block text-lg font-medium hover:text-blue-600">Sofia
                                    Razaq</a>
                                <span class="block text-slate-400">C.O.O.</span>

                                <p class="mt-4 text-slate-400">If the distribution of letters and 'words' is random</p>

                                <ul class="mt-4 list-none">
                                    <li class="inline"><a href=""
                                            class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-blue-600 dark:hover:border-blue-600 hover:bg-blue-600 hover:text-white"><i
                                                data-feather="facebook" class="w-4 h-4"></i></a></li>
                                    <li class="inline"><a href=""
                                            class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-blue-600 dark:hover:border-blue-600 hover:bg-blue-600 hover:text-white"><i
                                                data-feather="instagram" class="w-4 h-4"></i></a></li>
                                    <li class="inline"><a href=""
                                            class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-blue-600 dark:hover:border-blue-600 hover:bg-blue-600 hover:text-white"><i
                                                data-feather="twitter" class="w-4 h-4"></i></a></li>
                                    <li class="inline"><a href=""
                                            class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-blue-600 dark:hover:border-blue-600 hover:bg-blue-600 hover:text-white"><i
                                                data-feather="linkedin" class="w-4 h-4"></i></a></li>
                                </ul><!--end icon-->
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-3 md:col-span-6">
                        <div
                            class="p-6 bg-white border border-gray-100 rounded-md team dark:border-gray-700 group dark:bg-slate-900">
                            <img src="assets/images/client/04.jpg"
                                class="w-24 h-24 rounded-full shadow-md dark:shadow-gray-800" alt="">

                            <div class="mt-4 content">
                                <a href="" class="block text-lg font-medium hover:text-blue-600">Micheal
                                    Carlo</a>
                                <span class="block text-slate-400">Director</span>

                                <p class="mt-4 text-slate-400">If the distribution of letters and 'words' is random</p>

                                <ul class="mt-4 list-none">
                                    <li class="inline"><a href=""
                                            class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-blue-600 dark:hover:border-blue-600 hover:bg-blue-600 hover:text-white"><i
                                                data-feather="facebook" class="w-4 h-4"></i></a></li>
                                    <li class="inline"><a href=""
                                            class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-blue-600 dark:hover:border-blue-600 hover:bg-blue-600 hover:text-white"><i
                                                data-feather="instagram" class="w-4 h-4"></i></a></li>
                                    <li class="inline"><a href=""
                                            class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-blue-600 dark:hover:border-blue-600 hover:bg-blue-600 hover:text-white"><i
                                                data-feather="twitter" class="w-4 h-4"></i></a></li>
                                    <li class="inline"><a href=""
                                            class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-blue-600 dark:hover:border-blue-600 hover:bg-blue-600 hover:text-white"><i
                                                data-feather="linkedin" class="w-4 h-4"></i></a></li>
                                </ul><!--end icon-->
                            </div>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container relative mt-16 md:mt-24">
                <div class="grid items-center grid-cols-1 md:grid-cols-12">
                    <div class="order-2 lg:col-span-5 md:col-span-6 md:order-1">
                        <div
                            class="relative overflow-hidden after:content-[''] after:absolute after:h-40 after:w-40 after:bg-red-600/5 after:top-5 after:start-0 after:end-0 after:mx-auto after:-z-0 after:rounded-3xl after:animate-[spin_10s_linear_infinite]">
                            <img src="assets/images/hero2.png" class="relative z-1" alt="">
                        </div>
                    </div>

                    <div class="order-1 lg:col-span-7 md:col-span-6 md:order-2">
                        <div class="tiny-single-item">
                            <div class="text-center tiny-slide">
                                <img src="assets/images/client/amazon.svg" class="h-6 mx-auto" alt="">
                                <p class="mt-6 text-slate-400">" If the distribution of letters and 'words' is random,
                                    the
                                    reader will not be distracted from making a neutral judgement on the visual impact
                                    and
                                    readability of the typefaces (typography), or the distribution of text on the page
                                    consists of a more or less random series of words or syllables. "</p>
                                <h6 class="mt-3 font-semibold text-blue-600">- Thomas Israel</h6>
                            </div>

                            <div class="text-center tiny-slide">
                                <img src="assets/images/client/google.svg" class="h-6 mx-auto" alt="">
                                <p class="mt-6 text-slate-400">" If the distribution of letters and 'words' is random,
                                    the
                                    reader will not be distracted from making a neutral judgement on the visual impact
                                    and
                                    readability of the typefaces (typography), or the distribution of text on the page
                                    consists of a more or less random series of words or syllables. "</p>
                                <h6 class="mt-3 font-semibold text-blue-600">- Carl Oliver</h6>
                            </div>

                            <div class="text-center tiny-slide">
                                <img src="assets/images/client/lenovo.svg" class="h-6 mx-auto" alt="">
                                <p class="mt-6 text-slate-400">" If the distribution of letters and 'words' is random,
                                    the
                                    reader will not be distracted from making a neutral judgement on the visual impact
                                    and
                                    readability of the typefaces (typography), or the distribution of text on the page
                                    consists of a more or less random series of words or syllables. "</p>
                                <h6 class="mt-3 font-semibold text-blue-600">- Barbara McIntosh</h6>
                            </div>

                            <div class="text-center tiny-slide">
                                <img src="assets/images/client/paypal.svg" class="h-6 mx-auto" alt="">
                                <p class="mt-6 text-slate-400">" If the distribution of letters and 'words' is random,
                                    the
                                    reader will not be distracted from making a neutral judgement on the visual impact
                                    and
                                    readability of the typefaces (typography), or the distribution of text on the page
                                    consists of a more or less random series of words or syllables. "</p>
                                <h6 class="mt-3 font-semibold text-blue-600">- Jill Webb</h6>
                            </div>

                            <div class="text-center tiny-slide">
                                <img src="assets/images/client/shopify.svg" class="h-6 mx-auto" alt="">
                                <p class="mt-6 text-slate-400">" If the distribution of letters and 'words' is random,
                                    the
                                    reader will not be distracted from making a neutral judgement on the visual impact
                                    and
                                    readability of the typefaces (typography), or the distribution of text on the page
                                    consists of a more or less random series of words or syllables. "</p>
                                <h6 class="mt-3 font-semibold text-blue-600">- Dean Tolle</h6>
                            </div>

                            <div class="text-center tiny-slide">
                                <img src="assets/images/client/spotify.svg" class="h-6 mx-auto" alt="">
                                <p class="mt-6 text-slate-400">" If the distribution of letters and 'words' is random,
                                    the
                                    reader will not be distracted from making a neutral judgement on the visual impact
                                    and
                                    readability of the typefaces (typography), or the distribution of text on the page
                                    consists of a more or less random series of words or syllables. "</p>
                                <h6 class="mt-3 font-semibold text-blue-600">- Christa Smith</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if ($settings->enableAboutUsCTASection)
        <x-frontend.cta />
    @endif
</x-guest-layout>

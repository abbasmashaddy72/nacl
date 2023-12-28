<x-guest-layout>
    @include('layouts.fePartials.inner-top-section')
    <section class="relative py-16 md:py-24">
        <div class="container relative">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="lg:col-span-5 md:col-span-6">
                    <div class="grid items-center grid-cols-12 gap-6">
                        <div class="col-span-6">
                            <div class="grid grid-cols-1 gap-6">
                                <img src="assets/images/about/ab03.jpg" class="rounded-md shadow" alt="">
                                <img src="assets/images/about/ab02.jpg" class="rounded-md shadow" alt="">
                            </div>
                        </div>

                        <div class="col-span-6">
                            <div class="grid grid-cols-1 gap-6">
                                <img src="assets/images/about/ab01.jpg" class="rounded-md shadow" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7 md:col-span-6">
                    <div class="lg:ms-5">
                        <div class="flex mb-4">
                            <span class="mb-0 text-2xl font-bold text-indigo-600"><span
                                    class="text-6xl font-bold counter-value" data-target="15">1</span>+</span>
                            <span class="self-end font-medium ms-2">Years <br> Experience</span>
                        </div>

                        <h3 class="mb-6 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">Who we are
                            ?</h3>

                        <p class="max-w-xl text-slate-400">Start working with Tailwind CSS that can provide everything
                            you need to generate awareness, drive traffic, connect. Dummy text is text that is used in
                            the publishing industry or by web designers to occupy the space which will later be filled
                            with 'real' content.</p>

                        <div class="mt-6">
                            <a href="contact-one.html"
                                class="inline-block px-5 py-2 mt-2 text-base font-semibold tracking-wide text-center text-white align-middle duration-500 bg-indigo-600 border border-indigo-600 rounded-md hover:bg-indigo-700 hover:border-indigo-700 me-2"><i
                                    class="uil uil-envelope"></i> Contact us</a>
                        </div>
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->

        <!-- Business Partner -->
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
            </div><!--end grid-->
        </div><!--end container-->
        <!-- Business Partner -->
    </section><!--end section-->
    <!-- End Section-->

    <!-- Start -->
    <section class="relative py-16 md:py-24 bg-gray-50 dark:bg-slate-800">
        <div class="container relative">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-6 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">Key Features</h3>

                <p class="max-w-xl mx-auto text-slate-400">Start working with Tailwind CSS that can provide everything
                    you need to generate awareness, drive traffic, connect.</p>
            </div><!--end grid-->

            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px] mt-8">
                <div
                    class="flex items-center p-3 duration-500 ease-in-out bg-white rounded-md shadow hover:scale-105 dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 dark:bg-slate-900">
                    <div
                        class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full me-3">
                        <i data-feather="monitor" class="w-5 h-5 rotate-45"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="mb-0 text-lg font-medium">Fully Responsive</h4>
                    </div>
                </div>

                <div
                    class="flex items-center p-3 duration-500 ease-in-out bg-white rounded-md shadow hover:scale-105 dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 dark:bg-slate-900">
                    <div
                        class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full me-3">
                        <i data-feather="heart" class="w-5 h-5 rotate-45"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="mb-0 text-lg font-medium">Browser Compatibility</h4>
                    </div>
                </div>

                <div
                    class="flex items-center p-3 duration-500 ease-in-out bg-white rounded-md shadow hover:scale-105 dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 dark:bg-slate-900">
                    <div
                        class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full me-3">
                        <i data-feather="eye" class="w-5 h-5 rotate-45"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="mb-0 text-lg font-medium">Retina Ready</h4>
                    </div>
                </div>

                <div
                    class="flex items-center p-3 duration-500 ease-in-out bg-white rounded-md shadow hover:scale-105 dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 dark:bg-slate-900">
                    <div
                        class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full me-3">
                        <i data-feather="layout" class="w-5 h-5 rotate-45"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="mb-0 text-lg font-medium">Based On Tailwindcss 3</h4>
                    </div>
                </div>

                <div
                    class="flex items-center p-3 duration-500 ease-in-out bg-white rounded-md shadow hover:scale-105 dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 dark:bg-slate-900">
                    <div
                        class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full me-3">
                        <i data-feather="feather" class="w-5 h-5 rotate-45"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="mb-0 text-lg font-medium">Feather Icons</h4>
                    </div>
                </div>

                <div
                    class="flex items-center p-3 duration-500 ease-in-out bg-white rounded-md shadow hover:scale-105 dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 dark:bg-slate-900">
                    <div
                        class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full me-3">
                        <i data-feather="code" class="w-5 h-5 rotate-45"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="mb-0 text-lg font-medium">Built With SASS</h4>
                    </div>
                </div>

                <div
                    class="flex items-center p-3 duration-500 ease-in-out bg-white rounded-md shadow hover:scale-105 dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 dark:bg-slate-900">
                    <div
                        class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full me-3">
                        <i data-feather="user-check" class="w-5 h-5 rotate-45"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="mb-0 text-lg font-medium">W3c Valid Code</h4>
                    </div>
                </div>

                <div
                    class="flex items-center p-3 duration-500 ease-in-out bg-white rounded-md shadow hover:scale-105 dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 dark:bg-slate-900">
                    <div
                        class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full me-3">
                        <i data-feather="globe" class="w-5 h-5 rotate-45"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="mb-0 text-lg font-medium">Browsers Compatible</h4>
                    </div>
                </div>

                <div
                    class="flex items-center p-3 duration-500 ease-in-out bg-white rounded-md shadow hover:scale-105 dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 dark:bg-slate-900">
                    <div
                        class="flex items-center justify-center h-[45px] min-w-[45px] -rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10 text-indigo-600 text-center rounded-full me-3">
                        <i data-feather="settings" class="w-5 h-5 rotate-45"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="mb-0 text-lg font-medium">Easy to customize</h4>
                    </div>
                </div>
            </div><!--end grid-->

            <div class="grid justify-center grid-cols-1">
                <div class="mt-6 text-center">
                    <a href="page-services.html"
                        class="inline-block px-5 py-2 mt-2 text-base font-semibold tracking-wide text-center text-white align-middle duration-500 bg-indigo-600 border border-indigo-600 rounded-md hover:bg-indigo-700 hover:border-indigo-700 me-2">See
                        More <i class="uil uil-arrow-right"></i></a>
                </div>
            </div>
        </div><!--end contanier-->
    </section><!--end section-->
    <!-- End -->

    <!-- Start -->
    <section class="relative py-16 pt-0 md:py-24 bg-gray-50 dark:bg-slate-800 md:pt-0">
        <div class="container relative">
            <div class="grid justify-center grid-cols-1">
                <div class="relative z-1">
                    <div class="grid justify-center grid-cols-1 text-center lg:grid-cols-12 md:text-start">
                        <div class="lg:col-start-2 lg:col-span-10">
                            <div class="relative">
                                <img src="assets/images/cta-bg.jpg" class="rounded-md shadow-lg" alt="">
                                <div class="absolute text-center bottom-2/4 translate-y-2/4 start-0 end-0">
                                    <a href="#!" data-type="youtube" data-id="S_CGed6E610"
                                        class="inline-flex items-center justify-center w-20 h-20 text-indigo-600 bg-white rounded-full shadow-lg lightbox dark:shadow-gray-800 dark:bg-slate-900 dark:text-white">
                                        <i class="inline-flex items-center justify-center text-2xl mdi mdi-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="content md:mt-8">
                        <div class="grid justify-center grid-cols-1 text-center lg:grid-cols-12 md:text-start">
                            <div class="lg:col-start-2 lg:col-span-10">
                                <div class="grid items-center grid-cols-1 md:grid-cols-2">
                                    <div class="mt-8">
                                        <div class="section-title text-md-start">
                                            <h6 class="text-lg font-semibold text-white/50">Team</h6>
                                            <h3
                                                class="mt-2 text-2xl font-semibold leading-normal text-white md:text-3xl md:leading-normal">
                                                Meet Experience <br> Team Member</h3>
                                        </div>
                                    </div>

                                    <div class="mt-8">
                                        <div class="section-title text-md-start">
                                            <p class="max-w-xl mx-auto mb-2 text-white/50">Start working with NACL
                                                that can provide everything you need to generate awareness, drive
                                                traffic, connect.</p>
                                            <a href="" class="text-white">Read More <i
                                                    class="align-middle uil uil-angle-right-b"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div><!--end row -->
        </div><!--end container-->

        <div class="absolute bottom-0 start-0 end-0 sm:h-2/3 h-4/5 bg-gradient-to-b from-indigo-500 to-indigo-600">
        </div>
    </section><!--end section-->
    <!-- End -->

    <!-- Start -->
    <section class="relative py-16 pb-0 md:py-24 bg-gray-50 dark:bg-slate-800 md:pb-0">
        <div class="container relative">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-6 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">Our Professional
                    Team</h3>

                <p class="max-w-xl mx-auto text-slate-400">Start working with Tailwind CSS that can provide everything
                    you need to generate awareness, drive traffic, connect.</p>
            </div><!--end grid-->

            <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">
                <div class="lg:col-span-3 md:col-span-6">
                    <div
                        class="p-6 bg-white border border-gray-100 rounded-md team dark:border-gray-700 group dark:bg-slate-900">
                        <img src="assets/images/client/01.jpg"
                            class="w-24 h-24 rounded-full shadow-md dark:shadow-gray-800" alt="">

                        <div class="mt-4 content">
                            <a href="" class="block text-lg font-medium hover:text-indigo-600">Ronny Jofra</a>
                            <span class="block text-slate-400">C.E.O.</span>

                            <p class="mt-4 text-slate-400">If the distribution of letters and 'words' is random</p>

                            <ul class="mt-4 list-none">
                                <li class="inline"><a href=""
                                        class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                            data-feather="facebook" class="w-4 h-4"></i></a></li>
                                <li class="inline"><a href=""
                                        class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                            data-feather="instagram" class="w-4 h-4"></i></a></li>
                                <li class="inline"><a href=""
                                        class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                            data-feather="twitter" class="w-4 h-4"></i></a></li>
                                <li class="inline"><a href=""
                                        class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
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
                            <a href="" class="block text-lg font-medium hover:text-indigo-600">Aliana Rosy</a>
                            <span class="block text-slate-400">HR</span>

                            <p class="mt-4 text-slate-400">If the distribution of letters and 'words' is random</p>

                            <ul class="mt-4 list-none">
                                <li class="inline"><a href=""
                                        class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                            data-feather="facebook" class="w-4 h-4"></i></a></li>
                                <li class="inline"><a href=""
                                        class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                            data-feather="instagram" class="w-4 h-4"></i></a></li>
                                <li class="inline"><a href=""
                                        class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                            data-feather="twitter" class="w-4 h-4"></i></a></li>
                                <li class="inline"><a href=""
                                        class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
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
                            <a href="" class="block text-lg font-medium hover:text-indigo-600">Sofia Razaq</a>
                            <span class="block text-slate-400">C.O.O.</span>

                            <p class="mt-4 text-slate-400">If the distribution of letters and 'words' is random</p>

                            <ul class="mt-4 list-none">
                                <li class="inline"><a href=""
                                        class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                            data-feather="facebook" class="w-4 h-4"></i></a></li>
                                <li class="inline"><a href=""
                                        class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                            data-feather="instagram" class="w-4 h-4"></i></a></li>
                                <li class="inline"><a href=""
                                        class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                            data-feather="twitter" class="w-4 h-4"></i></a></li>
                                <li class="inline"><a href=""
                                        class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
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
                            <a href="" class="block text-lg font-medium hover:text-indigo-600">Micheal
                                Carlo</a>
                            <span class="block text-slate-400">Director</span>

                            <p class="mt-4 text-slate-400">If the distribution of letters and 'words' is random</p>

                            <ul class="mt-4 list-none">
                                <li class="inline"><a href=""
                                        class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                            data-feather="facebook" class="w-4 h-4"></i></a></li>
                                <li class="inline"><a href=""
                                        class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                            data-feather="instagram" class="w-4 h-4"></i></a></li>
                                <li class="inline"><a href=""
                                        class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
                                            data-feather="twitter" class="w-4 h-4"></i></a></li>
                                <li class="inline"><a href=""
                                        class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-100 rounded-md dark:border-gray-800 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white"><i
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
                            <p class="mt-6 text-slate-400">" If the distribution of letters and 'words' is random, the
                                reader will not be distracted from making a neutral judgement on the visual impact and
                                readability of the typefaces (typography), or the distribution of text on the page
                                consists of a more or less random series of words or syllables. "</p>
                            <h6 class="mt-3 font-semibold text-indigo-600">- Thomas Israel</h6>
                        </div>

                        <div class="text-center tiny-slide">
                            <img src="assets/images/client/google.svg" class="h-6 mx-auto" alt="">
                            <p class="mt-6 text-slate-400">" If the distribution of letters and 'words' is random, the
                                reader will not be distracted from making a neutral judgement on the visual impact and
                                readability of the typefaces (typography), or the distribution of text on the page
                                consists of a more or less random series of words or syllables. "</p>
                            <h6 class="mt-3 font-semibold text-indigo-600">- Carl Oliver</h6>
                        </div>

                        <div class="text-center tiny-slide">
                            <img src="assets/images/client/lenovo.svg" class="h-6 mx-auto" alt="">
                            <p class="mt-6 text-slate-400">" If the distribution of letters and 'words' is random, the
                                reader will not be distracted from making a neutral judgement on the visual impact and
                                readability of the typefaces (typography), or the distribution of text on the page
                                consists of a more or less random series of words or syllables. "</p>
                            <h6 class="mt-3 font-semibold text-indigo-600">- Barbara McIntosh</h6>
                        </div>

                        <div class="text-center tiny-slide">
                            <img src="assets/images/client/paypal.svg" class="h-6 mx-auto" alt="">
                            <p class="mt-6 text-slate-400">" If the distribution of letters and 'words' is random, the
                                reader will not be distracted from making a neutral judgement on the visual impact and
                                readability of the typefaces (typography), or the distribution of text on the page
                                consists of a more or less random series of words or syllables. "</p>
                            <h6 class="mt-3 font-semibold text-indigo-600">- Jill Webb</h6>
                        </div>

                        <div class="text-center tiny-slide">
                            <img src="assets/images/client/shopify.svg" class="h-6 mx-auto" alt="">
                            <p class="mt-6 text-slate-400">" If the distribution of letters and 'words' is random, the
                                reader will not be distracted from making a neutral judgement on the visual impact and
                                readability of the typefaces (typography), or the distribution of text on the page
                                consists of a more or less random series of words or syllables. "</p>
                            <h6 class="mt-3 font-semibold text-indigo-600">- Dean Tolle</h6>
                        </div>

                        <div class="text-center tiny-slide">
                            <img src="assets/images/client/spotify.svg" class="h-6 mx-auto" alt="">
                            <p class="mt-6 text-slate-400">" If the distribution of letters and 'words' is random, the
                                reader will not be distracted from making a neutral judgement on the visual impact and
                                readability of the typefaces (typography), or the distribution of text on the page
                                consists of a more or less random series of words or syllables. "</p>
                            <h6 class="mt-3 font-semibold text-indigo-600">- Christa Smith</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end container-->
    </section>
</x-guest-layout>

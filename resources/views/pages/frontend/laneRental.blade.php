<x-guest-layout>
    @include('layouts.fePartials.inner-top-section')
    <section class="relative py-16 bg-gray-50 dark:bg-slate-800">
        <div class="container relative">
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">
                <div class="flex">
                    <div
                        class="flex align-middle justify-center items-center min-w-[56px] h-[56px] bg-indigo-600/5 border-2 border-indigo-600/20 text-indigo-600 rounded-lg text-xl shadow-sm dark:shadow-gray-800">
                        <i class="uil uil-water"></i>
                    </div>

                    <div class="content ms-6">
                        <a href="" class="text-lg font-medium hover:text-indigo-600">24/7 Support</a>
                        <p class="mt-3 text-slate-400">The phrasal sequence of the is now so that many campaign and
                            benefit</p>
                    </div>
                </div>
                <!--end feature content-->

                <div class="flex">
                    <div
                        class="flex align-middle justify-center items-center min-w-[56px] h-[56px] bg-indigo-600/5 border-2 border-indigo-600/20 text-indigo-600 rounded-lg text-xl shadow-sm dark:shadow-gray-800">
                        <i class="uil uil-dropbox"></i>
                    </div>

                    <div class="content ms-6">
                        <a href="" class="text-lg font-medium hover:text-indigo-600">Take Ownership</a>
                        <p class="mt-3 text-slate-400">The phrasal sequence of the is now so that many campaign and
                            benefit</p>
                    </div>
                </div>
                <!--end feature content-->

                <div class="flex">
                    <div
                        class="flex align-middle justify-center items-center min-w-[56px] h-[56px] bg-indigo-600/5 border-2 border-indigo-600/20 text-indigo-600 rounded-lg text-xl shadow-sm dark:shadow-gray-800">
                        <i class="uil uil-focus-target"></i>
                    </div>

                    <div class="content ms-6">
                        <a href="" class="text-lg font-medium hover:text-indigo-600">Team Work</a>
                        <p class="mt-3 text-slate-400">The phrasal sequence of the is now so that many campaign and
                            benefit</p>
                    </div>
                </div>
                <!--end feature content-->
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

    <section class="relative py-16 md:py-24">
        <div class="container p-6 mx-auto">
            <div class="max-w-screen-md mx-auto">
                <h1 class="mb-6 text-3xl font-bold">Book an Appointment</h1>

                <!-- Service Selection -->
                <div class="mb-8">
                    <p class="mb-2 text-xl font-bold">Select a service</p>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                        <div class="p-4 border rounded-lg cursor-pointer hover:bg-gray-100">
                            <input type="radio" id="service1" name="service" value="service1">
                            <label for="service1" class="block font-medium">Financial Planning</label>
                        </div>
                        <div class="p-4 border rounded-lg cursor-pointer hover:bg-gray-100">
                            <input type="radio" id="service2" name="service" value="service2">
                            <label for="service2" class="block font-medium">Retirement Planning</label>
                        </div>
                        <div class="p-4 border rounded-lg cursor-pointer hover:bg-gray-100">
                            <input type="radio" id="service3" name="service" value="service3">
                            <label for="service3" class="block font-medium">Investment Advice</label>
                        </div>
                    </div>
                </div>

                <!-- Date Selection -->
                <div class="mb-8">
                    <p class="mb-2 text-xl font-bold">Select a date</p>
                    <input type="text" id="datepicker" class="w-full p-3 border rounded-lg"
                        placeholder="Select date">
                </div>

                <!-- Time Slot Selection -->
                <div class="mb-8">
                    <p class="mb-2 text-xl font-bold">Select a time</p>
                    <div class="grid grid-cols-2 gap-4">
                        <button class="p-3 border rounded-lg cursor-pointer hover:bg-gray-100">09:00 AM</button>
                        <button class="p-3 border rounded-lg cursor-pointer hover:bg-gray-100">11:00 AM</button>
                        <button class="p-3 border rounded-lg cursor-pointer hover:bg-gray-100">01:00 PM</button>
                        <button class="p-3 border rounded-lg cursor-pointer hover:bg-gray-100">03:00 PM</button>
                    </div>
                </div>

                <!-- Book Now Button -->
                <button class="w-full px-4 py-3 font-bold text-white bg-blue-500 rounded-lg hover:bg-blue-700">Book
                    Now</button>
            </div>
        </div>
    </section>
    <!-- Start Section-->
    <section class="relative py-16 md:py-24">
        <div class="container relative mt-16 md:mt-24">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">Frequently Asked
                    Questions</h3>

                <p class="max-w-xl mx-auto text-slate-400">Start working with Tailwind CSS that can provide everything
                    you need to generate awareness, drive traffic, connect.</p>
            </div><!--end grid-->

            <div id="accordion-collapse" data-accordion="collapse"
                class="grid md:grid-cols-2 grid-cols-1 mt-8 md:gap-[30px]">
                <div>
                    <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-800">
                        <h2 class="text-base font-semibold" id="accordion-collapse-heading-1">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-start"
                                data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                aria-controls="accordion-collapse-body-1">
                                <span>How does it work ?</span>
                                <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-1" class="hidden"
                            aria-labelledby="accordion-collapse-heading-1">
                            <div class="p-5">
                                <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of
                                    Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative mt-4 overflow-hidden rounded-md shadow dark:shadow-gray-800">
                        <h2 class="text-base font-semibold" id="accordion-collapse-heading-2">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-start"
                                data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                                aria-controls="accordion-collapse-body-2">
                                <span>Do I need a designer to use NACL ?</span>
                                <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-2" class="hidden"
                            aria-labelledby="accordion-collapse-heading-2">
                            <div class="p-5">
                                <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of
                                    Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative mt-4 overflow-hidden rounded-md shadow dark:shadow-gray-800">
                        <h2 class="text-base font-semibold" id="accordion-collapse-heading-3">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-start"
                                data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                                aria-controls="accordion-collapse-body-3">
                                <span>What do I need to do to start selling ?</span>
                                <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-3" class="hidden"
                            aria-labelledby="accordion-collapse-heading-3">
                            <div class="p-5">
                                <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of
                                    Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative mt-4 overflow-hidden rounded-md shadow dark:shadow-gray-800">
                        <h2 class="text-base font-semibold" id="accordion-collapse-heading-4">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-start"
                                data-accordion-target="#accordion-collapse-body-4" aria-expanded="false"
                                aria-controls="accordion-collapse-body-4">
                                <span>What happens when I receive an order ?</span>
                                <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-4" class="hidden"
                            aria-labelledby="accordion-collapse-heading-4">
                            <div class="p-5">
                                <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of
                                    Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="relative mt-4 overflow-hidden rounded-md shadow dark:shadow-gray-800 md:mt-0">
                        <h2 class="text-base font-semibold" id="accordion-collapse-heading-5">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-start"
                                data-accordion-target="#accordion-collapse-body-5" aria-expanded="false"
                                aria-controls="accordion-collapse-body-5">
                                <span>How does it work ?</span>
                                <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-5" class="hidden"
                            aria-labelledby="accordion-collapse-heading-5">
                            <div class="p-5">
                                <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of
                                    Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative mt-4 overflow-hidden rounded-md shadow dark:shadow-gray-800">
                        <h2 class="text-base font-semibold" id="accordion-collapse-heading-6">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-start"
                                data-accordion-target="#accordion-collapse-body-6" aria-expanded="false"
                                aria-controls="accordion-collapse-body-6">
                                <span>Do I need a designer to use NACL ?</span>
                                <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-6" class="hidden"
                            aria-labelledby="accordion-collapse-heading-6">
                            <div class="p-5">
                                <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of
                                    Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative mt-4 overflow-hidden rounded-md shadow dark:shadow-gray-800">
                        <h2 class="text-base font-semibold" id="accordion-collapse-heading-7">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-start"
                                data-accordion-target="#accordion-collapse-body-7" aria-expanded="false"
                                aria-controls="accordion-collapse-body-7">
                                <span>What do I need to do to start selling ?</span>
                                <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-7" class="hidden"
                            aria-labelledby="accordion-collapse-heading-7">
                            <div class="p-5">
                                <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of
                                    Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative mt-4 overflow-hidden rounded-md shadow dark:shadow-gray-800">
                        <h2 class="text-base font-semibold" id="accordion-collapse-heading-8">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium text-start"
                                data-accordion-target="#accordion-collapse-body-8" aria-expanded="false"
                                aria-controls="accordion-collapse-body-8">
                                <span>What happens when I receive an order ?</span>
                                <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-8" class="hidden"
                            aria-labelledby="accordion-collapse-heading-8">
                            <div class="p-5">
                                <p class="text-slate-400 dark:text-gray-400">There are many variations of passages of
                                    Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container relative mt-16 md:mt-24">
            <div class="grid grid-cols-1 text-center">
                <h6 class="mb-2 text-sm font-bold text-indigo-600 uppercase">Contact Us</h6>
                <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">Have Question ?
                    Get in touch!</h3>

                <p class="max-w-xl mx-auto text-slate-400">Start working with Tailwind CSS that can provide everything
                    you need to generate awareness, drive traffic, connect.</p>

                <div class="mt-6">
                    <a href="contact-one.html"
                        class="inline-block px-5 py-2 mt-4 text-base font-semibold tracking-wide text-center text-white align-middle duration-500 bg-indigo-600 border border-indigo-600 rounded-md hover:bg-indigo-700 hover:border-indigo-700"><i
                            class="uil uil-phone"></i> Contact us</a>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section>
</x-guest-layout>
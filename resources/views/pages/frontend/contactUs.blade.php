<x-guest-layout>
    <x-frontend.inner-top-section backgroundUrl="{{ $settings->contactUsBreadcrumbImage }}" />
    <section class="relative py-16 md:py-24">
        <div class="container relative">
            <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
                <div class="px-6 mt-6 text-center">
                    <div
                        class="flex items-center justify-center w-20 h-20 mx-auto text-3xl text-indigo-600 align-middle shadow-sm bg-indigo-600/5 rounded-xl dark:shadow-gray-800">
                        <i class="ri-phone-line"></i>
                    </div>

                    <div class="content mt-7">
                        <h5 class="text-xl font-medium title h5">Phone</h5>
                        <p class="mt-3 text-slate-400">{{ $settings->contactUsPhoneMessage }}</p>

                        <div class="mt-5">
                            <a href="tel:{{ $settings->contactUsPhoneNo }}"
                                class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">{{ $settings->contactUsPhoneNo }}</a>
                        </div>
                    </div>
                </div>

                <div class="px-6 mt-6 text-center">
                    <div
                        class="flex items-center justify-center w-20 h-20 mx-auto text-3xl text-indigo-600 align-middle shadow-sm bg-indigo-600/5 rounded-xl dark:shadow-gray-800">
                        <i class="ri-mail-line"></i>
                    </div>

                    <div class="content mt-7">
                        <h5 class="text-xl font-medium title h5">Email</h5>
                        <p class="mt-3 text-slate-400">{{ $settings->contactUsEmailMessage }}</p>

                        <div class="mt-5">
                            <a href="mailto:{{ $settings->contactUsEmail }}"
                                class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">{{ $settings->contactUsEmail }}</a>
                        </div>
                    </div>
                </div>

                <div class="px-6 mt-6 text-center">
                    <div
                        class="flex items-center justify-center w-20 h-20 mx-auto text-3xl text-indigo-600 align-middle shadow-sm bg-indigo-600/5 rounded-xl dark:shadow-gray-800">
                        <i class="ri-map-pin-line"></i>
                    </div>

                    <div class="content mt-7">
                        <h5 class="text-xl font-medium title h5">Location</h5>
                        <p class="mt-3 text-slate-400">{{ $settings->contactUsLocationMessage }}</p>

                        <div class="mt-5">
                            <a href="{{ $settings->contactUsMapLink }}" data-type="iframe"
                                class="video-play-icon read-more lightbox relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">View
                                on Google map</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container relative mt-16 md:mt-24">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="lg:col-span-7 md:col-span-6">
                    <img src="{{ asset('assets/images/contact.svg') }}" alt="">
                </div>

                @livewire('frontend.contactUsForm')
            </div>
        </div>
    </section>

    @if ($settings->enableMapSection)
        <div class="relative container-fluid">
            <div class="grid grid-cols-1">
                <div class="w-full leading-[0] border-0">
                    <iframe src="{{ $settings->contactUsMapLink }}" style="border:0" class="w-full h-[500px]"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    @endif
</x-guest-layout>

<x-guest-layout>
    <x-frontend.inner-top-section backgroundUrl="{{ $settings->shopBreadcrumbImage }}" />
    <section class="relative py-16 md:py-24">
        @livewire('frontend.filter-shop')

        @if ($settings->enableShopAppSection)
            <div class="container relative mt-16 md:mt-24">
                <div class="grid items-center grid-cols-1 md:grid-cols-12">
                    <div class="lg:col-span-5 md:col-span-6">
                        <img src="assets/images/illustrator/envelope.svg" class="mx-auto d-block" alt="">
                    </div>

                    <div class="lg:col-span-7 md:col-span-6">
                        <h4 class="my-4 text-2xl font-medium leading-normal md:text-3xl lg:leading-normal">
                            {{ $settings->shopAppTitle }}</h4>
                        <p class="max-w-xl mb-0 text-slate-400">{{ $settings->shopAppMessage }}</p>
                        <div class="my-5">
                            <a href="{{ $settings->shopAppAppStoreURL }}">
                                <img src="{{ asset('assets/images/app/app.png') }}" class="inline-block m-1"
                                    alt="">
                            </a>

                            <a href="{{ $settings->shopAppGoogleStoreURL }}">
                                <img src="{{ asset('assets/images/app/playstore.png') }}" class="inline-block m-1"
                                    alt="">
                            </a>
                        </div>

                        <div class="inline-block">
                            <div class="flex items-center pt-4 border-t border-gray-100 dark:border-gray-700">
                                <i data-feather="smartphone" class="w-10 h-10 text-blue-600 me-2"></i>
                                <div class="content">
                                    <h6 class="text-base font-medium">Install app now on your cellphones</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </section>

    @if ($settings->enableShopCTASection)
        <x-frontend.cta />
    @endif
</x-guest-layout>

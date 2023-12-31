<section class="relative py-16 md:py-24">
    <div class="container relative mt-16 md:mt-24">
        <div class="grid grid-cols-1 text-center">
            <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">
                {{ $common_settings->CTATopTitle }}</h3>

            <p class="max-w-xl mx-auto text-slate-600 dark:text-slate-400">{{ $common_settings->CTAMessage }}</p>

            <div class="mt-6">
                <a href="{{ $common_settings->CTAButtonURL }}"
                    class="inline-block px-5 py-2 mt-4 text-base font-semibold tracking-wide text-center text-white align-middle duration-500 bg-blue-600 border border-blue-600 rounded-md hover:bg-blue-700 hover:border-blue-700"><i
                        class="uil uil-phone"></i> {{ $common_settings->CTAButtonLabel }}</a>
            </div>
        </div>
    </div>
</section>

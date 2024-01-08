<x-guest-layout>
    <x-frontend.inner-top-section backgroundUrl="{{ $settings->sportBreadcrumbImage }}" />
    <section class="relative py-16 md:py-24">
        @foreach ($sports as $sport)
            <div class="container relative mt-16 md:mt-24">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                    <div class="md:col-span-6 @if ($loop->even) order-1 md:order-2 @endif">
                        <div class="lg:ms-8">
                            <x-curator-glider class="" :media="(int) $sport->images[0]" />
                        </div>
                    </div>

                    <div class="md:col-span-6">
                        <div class="lg:ms-5">
                            <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">
                                {{ $sport->name }}</h3>

                            <p class="max-w-xl mb-6 text-slate-400">{!! $sport->description !!}</p>

                            <a href="{{ route('book-slot') }}"
                                class="inline-block px-5 py-2 text-base font-semibold tracking-wide text-center text-blue-600 align-middle duration-500 border rounded-full bg-blue-600/5 hover:bg-blue-600 border-blue-600/10 hover:border-blue-600 hover:text-white">Book
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>

    @if ($settings->enableSportCTASection)
        <x-frontend.cta />
    @endif
</x-guest-layout>

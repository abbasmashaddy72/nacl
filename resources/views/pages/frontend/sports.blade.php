<x-guest-layout>
    <x-frontend.inner-top-section backgroundUrl="{{ $settings->sportBreadcrumbImage }}" />
    @foreach ($sports as $sport)
        <section class="relative py-12" id="{{ Str::slug($sport->name) }}">
            <div class="container relative mt-12">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                    <div class="md:col-span-6 @if ($loop->even) order-1 md:order-2 @endif">
                        <div class="lg:ms-8">
                            <x-curator-glider
                                class="object-cover transition duration-500 rounded-lg shadow-lg shadow-gray-800 aspect-video hover:scale-110"
                                :media="(int) $sport->images[0]" />
                        </div>
                    </div>

                    <div class="md:col-span-6">
                        <div class="lg:ms-5">
                            <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">
                                {{ $sport->name }}</h3>

                            <p class="max-w-xl mb-6 text-slate-600 dark:text-slate-400">{!! $sport->description !!}</p>

                            <a href="{{ route('book-slot') }}"
                                class="inline-block px-5 py-2 text-base font-semibold tracking-wide text-center text-blue-600 align-middle duration-500 border rounded-full bg-blue-600/5 hover:bg-blue-600 border-blue-600/10 hover:border-blue-600 hover:text-white">Book
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach

    @if ($settings->enableSportCTASection)
        <x-frontend.cta />
    @endif
</x-guest-layout>

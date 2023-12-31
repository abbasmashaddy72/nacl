<x-guest-layout>
    <x-frontend.inner-top-section backgroundUrl="{{ $settings->laneBreadcrumbImage }}" />
    @if ($settings->enableFeatureSection)
        <section class="relative py-16 bg-gray-50 dark:bg-slate-800">
            <div class="container relative">
                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">
                    @foreach ($settings->laneFeatures as $item)
                        <div class="flex">
                            <div
                                class="flex align-middle justify-center items-center min-w-[56px] h-[56px] bg-indigo-600/5 border-2 border-indigo-600/20 text-indigo-600 rounded-lg text-xl shadow-sm dark:shadow-gray-800">
                                <x-curator-glider class="object-cover w-full h-full" :media="$item['image']" />
                            </div>

                            <div class="content ms-6">
                                <div class="text-lg font-medium hover:text-indigo-600">{{ $item['title'] }}</div>
                                <p class="mt-3 text-slate-400">{{ $item['message'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <section class="relative py-16 md:py-24">
        <div class="container p-6 mx-auto">
            @livewire('frontend.booking-form')
        </div>
    </section>

    <section class="relative py-16 md:py-24">
        @if ($settings->enableFAQSection)
            <div class="container relative mt-16 md:mt-24">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">Frequently
                        Asked
                        Questions</h3>
                </div>

                <div id="accordion-collapse" data-accordion="collapse"
                    class="grid md:grid-cols-2 grid-cols-1 mt-8 md:gap-[30px]">
                    @foreach ($faqs as $faq)
                        <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-800">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-{{ $loop->index }}">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-5 font-medium text-start"
                                    data-accordion-target="#accordion-collapse-body-{{ $loop->index }}"
                                    aria-expanded="true" aria-controls="accordion-collapse-body-{{ $loop->index }}">
                                    <span>{{ $faq->question }}</span>
                                    <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-{{ $loop->index }}" class="hidden"
                                aria-labelledby="accordion-collapse-heading-{{ $loop->index }}">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">
                                        {!! $faq->question !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </section>

    @if ($settings->enableLaneCTASection)
        <x-frontend.cta />
    @endif
</x-guest-layout>

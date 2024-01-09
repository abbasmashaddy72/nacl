<x-guest-layout>
    <x-frontend.inner-top-section backgroundUrl="{{ $data->featured_image }}" />

    <section class="relative py-16 md:py-24">
        <div class="container relative mt-16 md:mt-24">
            <div class="max-w-xl mx-auto content">
                {!! $data->content !!}
            </div>
        </div>
    </section>
</x-guest-layout>

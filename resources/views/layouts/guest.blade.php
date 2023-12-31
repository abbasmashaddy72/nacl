<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark scroll-smooth" dir='ltr'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <title>
        @if (\Route::currentRouteName() != 'homepage')
            {{ $title . ' | ' ?? '' }}
        @endif
        {{ config('app.name', 'Laravel') }}
    </title>

    @wireUiScripts
    @vite('resources/js/app.js')
    @livewireStyles
    @stack('styles')
</head>

<body class="text-base text-black font-nunito dark:text-white dark:bg-slate-900">
    @include('layouts.fePartials.header')

    @if (!empty($topSection))
        {{ $topSection }}
    @endif

    {{ $slot }}

    @include('layouts.fePartials.footer')

    @livewireScripts
    @livewire('livewire-ui-modal')
    @env('production')
    <script>
        // Disable right-click
        document.addEventListener('contextmenu', (e) => e.preventDefault());

        function ctrlShiftKey(e, keyCode) {
            return e.ctrlKey && e.shiftKey && e.keyCode === keyCode.charCodeAt(0);
        }

        document.onkeydown = (e) => {
            // Disable F12, Ctrl + Shift + I, Ctrl + Shift + J, Ctrl + U
            if (
                event.keyCode === 123 ||
                ctrlShiftKey(e, 'I') ||
                ctrlShiftKey(e, 'J') ||
                ctrlShiftKey(e, 'C') ||
                (e.ctrlKey && e.keyCode === 'U'.charCodeAt(0))
            )
                return false;
        };
    </script>
    @endenv
    @stack('scripts')
    {{-- modalwidth comment for tailwind purge, used widths: sm:max-w-sm sm:max-w-md sm:max-w-lg sm:max-w-xl sm:max-w-2xl sm:max-w-3xl sm:max-w-4xl sm:max-w-5xl sm:max-w-6xl sm:max-w-7xl md:max-w-sm md:max-w-md md:max-w-lg md:max-w-xl md:max-w-2xl md:max-w-3xl md:max-w-4xl md:max-w-5xl md:max-w-6xl md:max-w-7xl lg:max-w-sm lg:max-w-md lg:max-w-lg lg:max-w-xl lg:max-w-2xl lg:max-w-3xl lg:max-w-4xl lg:max-w-5xl lg:max-w-6xl lg:max-w-7xl xl:max-w-sm xl:max-w-md xl:max-w-lg xl:max-w-xl xl:max-w-2xl xl:max-w-3xl xl:max-w-4xl xl:max-w-5xl xl:max-w-6xl xl:max-w-7xl 2xl:max-w-sm 2xl:max-w-md 2xl:max-w-lg 2xl:max-w-xl 2xl:max-w-2xl 2xl:max-w-3xl 2xl:max-w-4xl 2xl:max-w-5xl 2xl:max-w-6xl 2xl:max-w-7xl --}}
</body>

</html>

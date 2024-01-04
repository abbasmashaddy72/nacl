<x-guest-layout>
    <section class="flex items-center md:h-screen py-36">
        <div class="absolute inset-0 bg-gradient-to-t from-transparent to-black"></div>
        <div class="container relative">
            <div class="flex justify-center">
                <div
                    class="max-w-[400px] w-full m-auto p-6 bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-800 rounded-md">
                    <a href="index.html"><img src="assets/images/logo-icon-64.png" class="mx-auto" alt=""></a>
                    <h5 class="my-6 text-xl font-semibold">Confirm Password</h5>
                    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                    </div>
                    <form class="text-start" method="POST" action="{{ route('password.confirm') }}">
                        @csrf
                        <div class="grid grid-cols-1">
                            <div class="mb-4">
                                <x-inputs.password name="password" label='Password' required
                                    autocomplete="current-password" />
                            </div>

                            <div class="mb-4">
                                <button type="submit"
                                    class="inline-block w-full px-5 py-2 text-base tracking-wide text-center text-white align-middle duration-500 bg-indigo-600 border border-indigo-600 rounded-md hover:bg-indigo-700 hover:border-indigo-700">
                                    {{ __('Confirm') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>

<x-guest-layout>
    <section class="flex items-center md:h-screen py-36">
        <div class="absolute inset-0 bg-gradient-to-t from-transparent to-black"></div>
        <div class="container relative">
            <div class="flex justify-center">
                <div
                    class="max-w-[400px] w-full m-auto p-6 bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-800 rounded-md">
                    <a href="{{ route('homepage') }}">
                        <x-curator-glider :media="(int) $common_settings->lightLogo" class="w-auto h-32 mx-auto" />
                    </a>
                    <h5 class="my-6 text-xl font-semibold">Reset Your Password</h5>
                    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                    </div>
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <form class="text-start" method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="grid grid-cols-1">
                            <div class="mb-4">
                                <x-input type="email" name="email" label='Email' :value="old('email')" required
                                    autofocus autocomplete="username" />
                            </div>

                            <div class="mb-4">
                                <button type="submit"
                                    class="inline-block w-full px-5 py-2 text-base tracking-wide text-center text-white align-middle duration-500 bg-indigo-600 border border-indigo-600 rounded-md hover:bg-indigo-700 hover:border-indigo-700">
                                    {{ __('Email Password Reset Link') }}
                                </button>
                            </div>

                            <div class="text-center">
                                <span class="text-slate-400 me-2">Remember your password ? </span>
                                <a href="{{ route('login') }}"
                                    class="inline-block font-bold text-black dark:text-white">Sign in</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>

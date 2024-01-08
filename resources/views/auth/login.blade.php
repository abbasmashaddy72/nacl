<x-guest-layout>
    <section class="flex items-center md:h-screen py-36">
        <div class="absolute inset-0 bg-gradient-to-t from-transparent to-black"></div>
        <div class="container relative">
            <div class="flex justify-center">
                <div
                    class="max-w-[400px] w-full m-auto p-6 bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-800 rounded-md">
                    <a href="index.html">
                        <x-curator-glider :media="(int) $common_settings->lightLogo" class="w-auto h-32 mx-auto" />
                    </a>
                    <h5 class="my-6 text-xl font-semibold">Login</h5>
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <form class="text-start" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="grid grid-cols-1">
                            <div class="mb-4">
                                <x-input type="email" name="email" label='Email' :value="old('email')" required
                                    autofocus autocomplete="username" />
                            </div>

                            <div class="mb-4">
                                <x-inputs.password name="password" label='Password' required
                                    autocomplete="current-password" />
                            </div>

                            <div class="flex justify-between mb-4">
                                <div class="flex items-center mb-0">
                                    <x-checkbox id="RememberMe" label="Remember Me" value="" />
                                </div>
                                <p class="mb-0 text-slate-400">
                                    <a href="{{ route('password.request') }}" class="text-slate-400">
                                        Forgot password ?
                                    </a>
                                </p>
                            </div>

                            <div class="mb-4">
                                <button type="submit"
                                    class="inline-block w-full px-5 py-2 text-base tracking-wide text-center text-white align-middle duration-500 bg-indigo-600 border border-indigo-600 rounded-md hover:bg-indigo-700 hover:border-indigo-700">Login
                                    / Sign in</button>
                            </div>

                            <div class="text-center">
                                <span class="text-slate-400 me-2">Don't have an account ?</span> <a
                                    href="{{ route('register') }}"
                                    class="inline-block font-bold text-black dark:text-white">Sign Up</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>

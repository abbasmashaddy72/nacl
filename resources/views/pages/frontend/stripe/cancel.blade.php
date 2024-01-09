<x-guest-layout>
    <section class="flex items-center md:h-screen py-36">
        <div class="absolute inset-0 bg-gradient-to-t from-transparent to-black"></div>
        <div class="container relative">
            <div class="flex justify-center">
                <div
                    class="max-w-[400px] w-full m-auto p-6 bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-800 rounded-md">
                    <div class="p-6 md:mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            class="w-16 h-16 mx-auto my-6 text-red-600" fill="currentColor">
                            <path
                                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM12 10.5858L14.8284 7.75736L16.2426 9.17157L13.4142 12L16.2426 14.8284L14.8284 16.2426L12 13.4142L9.17157 16.2426L7.75736 14.8284L10.5858 12L7.75736 9.17157L9.17157 7.75736L12 10.5858Z">
                            </path>
                        </svg>
                        <h3 class="text-base font-bold text-center md:text-3xl">
                            {{ $title }}!
                        </h3>
                        <p class="my-2 text-slate-600 dark:text-slate-400">Your payment process has been cancelled.</p>
                        <p>Feel free to try again whenever you're ready. If you have any questions or need assistance,
                            please contact our support team.</p>

                        <div class="py-10 mt-4 text-center">
                            <a href="{{ route('contact-us') }}"
                                class="inline-block w-full px-5 py-2 text-base tracking-wide text-center text-white align-middle duration-500 bg-blue-600 border border-blue-600 rounded-md hover:bg-blue-700 hover:border-blue-700">
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>

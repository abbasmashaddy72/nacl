<x-guest-layout>
    <section class="flex items-center md:h-screen py-36">
        <div class="absolute inset-0 bg-gradient-to-t from-transparent to-black"></div>
        <div class="container relative">
            <div class="flex justify-center">
                <div
                    class="max-w-[400px] w-full m-auto p-6 bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-800 rounded-md">
                    <div class="p-6 md:mx-auto">
                        <svg viewBox="0 0 24 24" class="w-16 h-16 mx-auto my-6 text-green-600">
                            <path fill="currentColor"
                                d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z">
                            </path>
                        </svg>
                        <h3 class="text-base font-bold text-center md:text-3xl">
                            {{ $title }}!
                        </h3>
                        <p class="my-2 text-slate-600 dark:text-slate-400">Thank you for your payment. Your transaction
                            was successful!</p>
                        <p>Your order has been processed, and you'll receive a confirmation email shortly.</p>

                        <div class="py-10 mt-4 text-center">
                            <a href="{{ route('homepage') }}"
                                class="inline-block w-full px-5 py-2 text-base tracking-wide text-center text-white align-middle duration-500 bg-blue-600 border border-blue-600 rounded-md hover:bg-blue-700 hover:border-blue-700">
                                Home Page
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>

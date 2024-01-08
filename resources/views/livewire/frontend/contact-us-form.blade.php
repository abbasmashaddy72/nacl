<div class="lg:col-span-5 md:col-span-6">
    <div class="lg:ms-5">
        <div class="p-6 bg-white rounded-md shadow dark:bg-slate-900 dark:shadow-gray-800">
            <h3 class="mb-6 text-2xl font-medium leading-normal">Get in touch !</h3>
            @if ($successMessage)
                <div class="px-4 py-3 mb-4 text-teal-900 bg-teal-100 border-t-4 border-teal-500 rounded-b shadow-md"
                    role="alert">
                    <div class="flex">
                        <div class="py-1">
                            <svg class="w-6 h-6 mr-4 text-teal-500 fill-current" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path
                                    d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold">{{ __('Thanks for reaching out') }}</p>
                            <p class="text-sm">{{ __('We will contact you ASAP!') }}</p>
                        </div>
                    </div>
                </div>
            @endif
            <x-errors />
            <form wire:submit.prevent="submitForm">
                <p class="mb-0" id="error-msg"></p>
                <div id="simple-msg"></div>
                <div class="grid lg:grid-cols-12 lg:gap-6">
                    <div class="mb-5 lg:col-span-6">
                        <div class="text-start">
                            <label for="name" class="font-semibold">Your Name:</label>
                            <div class="relative mt-2 form-icon">
                                <i data-feather="user" class="absolute w-4 h-4 top-3 start-4"></i>
                                <input wire:model='name' name="name" id="name" type="text"
                                    class="w-full h-10 px-3 py-2 bg-transparent border border-gray-200 rounded outline-none form-input ps-11 dark:bg-slate-900 dark:text-slate-200 focus:border-blue-600 dark:border-gray-800 dark:focus:border-blue-600 focus:ring-0"
                                    placeholder="Name :">
                            </div>
                        </div>
                    </div>

                    <div class="mb-5 lg:col-span-6">
                        <div class="text-start">
                            <label for="email" class="font-semibold">Your Email:</label>
                            <div class="relative mt-2 form-icon">
                                <i data-feather="mail" class="absolute w-4 h-4 top-3 start-4"></i>
                                <input wire:model='email' name="email" id="email" type="email"
                                    class="w-full h-10 px-3 py-2 bg-transparent border border-gray-200 rounded outline-none form-input ps-11 dark:bg-slate-900 dark:text-slate-200 focus:border-blue-600 dark:border-gray-800 dark:focus:border-blue-600 focus:ring-0"
                                    placeholder="Email :">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="mb-5">
                        <div class="text-start">
                            <label for="contact_no" class="font-semibold">Your Contact No.:</label>
                            <div class="relative mt-2 form-icon">
                                <i data-feather="phone" class="absolute w-4 h-4 top-3 start-4"></i>
                                <input wire:model='contact_no' name="contact_no" id="contact_no"
                                    class="w-full h-10 px-3 py-2 bg-transparent border border-gray-200 rounded outline-none form-input ps-11 dark:bg-slate-900 dark:text-slate-200 focus:border-blue-600 dark:border-gray-800 dark:focus:border-blue-600 focus:ring-0"
                                    placeholder="Contact No :">
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <div class="text-start">
                            <label for="message" class="font-semibold">Your Message:</label>
                            <div class="relative mt-2 form-icon">
                                <i data-feather="message-circle" class="absolute w-4 h-4 top-3 start-4"></i>
                                <textarea wire:model='message' name="message" id="message"
                                    class="w-full px-3 py-2 bg-transparent border border-gray-200 rounded outline-none form-input ps-11 h-28 dark:bg-slate-900 dark:text-slate-200 focus:border-blue-600 dark:border-gray-800 dark:focus:border-blue-600 focus:ring-0"
                                    placeholder="Message :"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit"
                    class="flex items-center justify-center px-5 py-2 text-base font-semibold tracking-wide text-center text-white align-middle duration-500 bg-blue-600 border border-blue-600 rounded-md hover:bg-blue-700 hover:border-blue-700">Send
                    Message</button>
            </form>
        </div>
    </div>
</div>

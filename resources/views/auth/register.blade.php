<x-guest-layout>
    <section class="flex items-center py-36">
        <div class="absolute inset-0 bg-gradient-to-t from-transparent to-black"></div>
        <div class="container relative">
            <div class="flex justify-center">
                <div
                    class="w-full max-w-xl p-6 m-auto bg-white rounded-md shadow-md dark:bg-slate-900 dark:shadow-gray-800">
                    <a href="{{ route('homepage') }}">
                        <x-curator-glider :media="(int) $common_settings->lightLogo" class="w-auto h-32 mx-auto" />
                    </a>
                    <h5 class="my-6 text-xl font-semibold">Register</h5>
                    <form class="text-start" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="grid grid-cols-2 gap-4">
                            <div class="mb-4">
                                <x-input type="name" name="name" label='Name' :value="old('name')" required
                                    autofocus />
                            </div>

                            <div class="mb-4">
                                <x-input type="email" name="email" label='Email' :value="old('email')" required
                                    autocomplete="email" />
                            </div>

                            <div class="mb-4">
                                <x-input type="phone" name="phone" label='Phone' :value="old('phone')" required />
                            </div>

                            <div class="mb-4">
                                <x-input type="date" name="date_of_birth" label='Date of Birth' :value="old('date_of_birth')"
                                    required />
                            </div>

                            <div class="col-span-2 mb-4">
                                <x-textarea name='address' label="Address" placeholder="Your Address" required />
                            </div>

                            <div class="mb-4">
                                <x-input type="number" name="zip_code" label='Zip Code' :value="old('zip_code')" required />
                            </div>

                            <div class="mb-4">
                                <x-input type="text" name="city" label='City' :value="old('city')" required />
                            </div>

                            <div class="mb-4">
                                <x-inputs.password name="password" label='Password' required
                                    autocomplete="new-password" />
                            </div>

                            <div class="mb-4">
                                <x-inputs.password name="password_confirmation" label='Confirm Password' required
                                    autocomplete="new-password" />
                            </div>
                        </div>

                        <div class="grid grid-cols-1">
                            <div class="mb-4">
                                <div class="flex items-center w-full mb-0">
                                    <x-checkbox id="AcceptT&C" value="" />
                                    <label class="ml-2 form-check-label text-slate-400" for="AcceptT&C">I Accept <a
                                            href="" class="text-blue-600">Terms And Condition</a></label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <button type="submit"
                                    class="inline-block w-full px-5 py-2 text-base tracking-wide text-center text-white align-middle duration-500 bg-blue-600 border border-blue-600 rounded-md hover:bg-blue-700 hover:border-blue-700">Register</button>
                            </div>

                            <div class="text-center">
                                <span class="text-slate-400 me-2">Already have an account ? </span>
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

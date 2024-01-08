<footer class="relative text-gray-200 footer bg-dark-footer dark:text-gray-200">
    <div class="container relative">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="py-[60px] px-0">
                    <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                        <div class="lg:col-span-4 md:col-span-12">
                            <a href="{{ route('homepage') }}" class="text-[22px] focus:outline-none">
                                <x-curator-glider :media="(int) $common_settings->lightLogo" class="w-auto h-28" />
                            </a>
                            <p class="mt-6 text-gray-300">{{ $common_settings->companyShortDescription }}</p>
                            <ul class="mt-6 list-none">
                                <li class="inline">
                                    <a href="{{ $common_settings->facebook }}" target="_blank"
                                        class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">
                                        <i class="align-middle ri-facebook-line" title="facebook"></i>
                                    </a>
                                </li>
                                <li class="inline">
                                    <a href="{{ $common_settings->instagram }}" target="_blank"
                                        class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">
                                        <i class="align-middle ri-instagram-line" title="instagram"></i>
                                    </a>
                                </li>

                                <li class="inline">
                                    <a href="{{ $common_settings->linkedIn }}" target="_blank"
                                        class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">
                                        <i class="align-middle ri-linkedin-line" title="linkedIn"></i>
                                    </a>
                                </li>
                                <li class="inline">
                                    <a href="{{ $common_settings->twitter }}" target="_blank"
                                        class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">
                                        <i class="align-middle ri-twitter-line" title="twitter"></i>
                                    </a>
                                </li>
                                <li class="inline">
                                    <a href="{{ $common_settings->youtube }}" target="_blank"
                                        class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">
                                        <i class="align-middle ri-youtube-line" title="youtube"></i>
                                    </a>
                                </li>
                                <li class="inline">
                                    <a href="{{ $common_settings->googleMaps }}" target="_blank"
                                        class="inline-flex items-center justify-center w-8 h-8 text-base tracking-wide text-center align-middle duration-500 border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">
                                        <i class="align-middle ri-google-line" title="googleMaps"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="lg:col-span-2 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Company</h5>
                            <ul class="mt-6 list-none footer-list">
                                <li><a href="page-aboutus.html"
                                        class="text-gray-300 duration-500 ease-in-out hover:text-gray-400">
                                        <i class="uil uil-angle-right-b"></i> About us</a></li>
                                <li class="mt-[10px]">
                                    <a href="page-services.html"
                                        class="text-gray-300 duration-500 ease-in-out hover:text-gray-400">
                                        <i class="uil uil-angle-right-b"></i> Services</a>
                                </li>
                                <li class="mt-[10px]">
                                    <a href="page-team.html"
                                        class="text-gray-300 duration-500 ease-in-out hover:text-gray-400">
                                        <i class="uil uil-angle-right-b"></i> Team</a>
                                </li>
                                <li class="mt-[10px]">
                                    <a href="page-pricing.html"
                                        class="text-gray-300 duration-500 ease-in-out hover:text-gray-400">
                                        <i class="uil uil-angle-right-b"></i> Pricing</a>
                                </li>
                                <li class="mt-[10px]">
                                    <a href="portfolio-creative-four.html"
                                        class="text-gray-300 duration-500 ease-in-out hover:text-gray-400">
                                        <i class="uil uil-angle-right-b"></i> Project</a>
                                </li>
                                <li class="mt-[10px]">
                                    <a href="blog.html"
                                        class="text-gray-300 duration-500 ease-in-out hover:text-gray-400">
                                        <i class="uil uil-angle-right-b"></i> Blog</a>
                                </li>
                                <li class="mt-[10px]">
                                    <a href="auth-login.html"
                                        class="text-gray-300 duration-500 ease-in-out hover:text-gray-400">
                                        <i class="uil uil-angle-right-b"></i> Login</a>
                                </li>
                            </ul>
                        </div><!--end col-->

                        <div class="lg:col-span-3 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Usefull Links</h5>
                            <ul class="mt-6 list-none footer-list">
                                <li><a href="page-terms.html"
                                        class="text-gray-300 duration-500 ease-in-out hover:text-gray-400">
                                        <i class="uil uil-angle-right-b"></i> Terms of Services</a></li>
                                <li class="mt-[10px]">
                                    <a href="page-privacy.html"
                                        class="text-gray-300 duration-500 ease-in-out hover:text-gray-400">
                                        <i class="uil uil-angle-right-b"></i> Privacy Policy</a>
                                </li>
                                <li class="mt-[10px]">
                                    <a href="documentation.html"
                                        class="text-gray-300 duration-500 ease-in-out hover:text-gray-400">
                                        <i class="uil uil-angle-right-b"></i> Documentation</a>
                                </li>
                                <li class="mt-[10px]">
                                    <a href="changelog.html"
                                        class="text-gray-300 duration-500 ease-in-out hover:text-gray-400">
                                        <i class="uil uil-angle-right-b"></i> Changelog</a>
                                </li>
                                <li class="mt-[10px]">
                                    <a href="widget.html"
                                        class="text-gray-300 duration-500 ease-in-out hover:text-gray-400">
                                        <i class="uil uil-angle-right-b"></i> Widget</a>
                                </li>
                            </ul>
                        </div><!--end col-->

                        <div class="lg:col-span-3 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Contact Us</h5>
                            <p class="mt-6">{{ $common_settings->CTAMessage }}</p>
                            <div class="w-full mt-4">
                                <a href='{{ route('contact-us') }}'
                                    class="inline-block px-5 py-2 text-base font-semibold tracking-wide text-center text-white align-middle duration-500 bg-indigo-600 border border-indigo-600 rounded-md hover:bg-indigo-700 hover:border-indigo-700">Contact
                                    Us Now</a>
                            </div>
                        </div><!--end col-->
                    </div><!--end grid-->
                </div><!--end col-->
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="py-[30px] px-0 border-t border-slate-800">
        <div class="container relative text-center">
            <div class="grid items-center md:grid-cols-2">
                <div class="text-center md:text-start">
                    <p class="mb-0">©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> {{ config('app.name', 'Laravel') }}.
                    </p>
                </div>

                <ul class="mt-6 text-center list-none md:text-end md:mt-0">
                    <li class="inline">
                        <a href="">
                            <img src="assets/images/payments/american-ex.png" class="inline max-h-6"
                                title="American Express" alt=""></a>
                    </li>
                    <li class="inline">
                        <a href="">
                            <img src="assets/images/payments/discover.png" class="inline max-h-6" title="Discover"
                                alt=""></a>
                    </li>
                    <li class="inline">
                        <a href="">
                            <img src="assets/images/payments/master-card.png" class="inline max-h-6"
                                title="Master Card" alt=""></a>
                    </li>
                    <li class="inline">
                        <a href="">
                            <img src="assets/images/payments/paypal.png" class="inline max-h-6" title="Paypal"
                                alt=""></a>
                    </li>
                    <li class="inline">
                        <a href="">
                            <img src="assets/images/payments/visa.png" class="inline max-h-6" title="Visa"
                                alt=""></a>
                    </li>
                </ul>
            </div><!--end grid-->
        </div><!--end container-->
    </div>
</footer><!--end footer-->
<!-- Footer End -->

<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top"
    class="fixed z-10 hidden text-lg leading-9 text-center text-white bg-indigo-600 rounded-full back-to-top bottom-5 end-5 h-9 w-9">
    <i class="ri-arrow-up-line"></i>
</a>

<div class="fixed bottom-5 left-5">
    <a href="https://wa.me/{{ $common_settings->whatsAppPhoneNumber }}?text={{ urlencode($common_settings->whatsAppMessage) }}"
        target="_blank" rel="noopener noreferrer">
        <i class="text-4xl text-green-500 ri-whatsapp-line"></i>
    </a>
</div>

@include('layouts.fePartials.darkMode')

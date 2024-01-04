<x-guest-layout>
    <!-- Start Hero -->
    <section class="relative lg:pb-24 pb-16">
        <div class="container-fluid relative">
            <div class="profile-banner relative text-transparent">
                <input id="pro-banner" name="profile-banner" type="file" class="hidden" onchange="loadFile(event)" />
                <div class="relative shrink-0">
                    <img src="assets/images/blog/bg.jpg" class="h-80 w-full object-cover" id="profile-banner"
                        alt="">
                    <div class="absolute inset-0 bg-black/70"></div>
                    <label class="absolute inset-0 cursor-pointer" for="pro-banner"></label>
                </div>
            </div>
        </div><!--end container-->

        <div class="container relative md:mt-24 mt-16">
            <div class="md:flex">
                <div class="lg:w-1/4 md:w-1/3 md:px-3">
                    <div class="relative md:-mt-48 -mt-32">
                        <div class="p-6 rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900">
                            <div class="profile-pic text-center mb-5">
                                <input id="pro-img" name="profile-image" type="file" class="hidden"
                                    onchange="loadFile(event)" />
                                <div>
                                    <div class="relative h-28 w-28 mx-auto">
                                        <img src="assets/images/client/05.jpg"
                                            class="rounded-full shadow dark:shadow-gray-800 ring-4 ring-slate-50 dark:ring-slate-800"
                                            id="profile-image" alt="">
                                        <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                                    </div>

                                    <div class="mt-4">
                                        <h5 class="text-lg font-semibold">Jenny Jimenez</h5>
                                        <p class="text-slate-400">jennyhot@hotmail.com</p>
                                    </div>
                                </div>
                            </div>

                            <div class="border-t border-gray-100 dark:border-gray-700">
                                <ul class="list-none sidebar-nav mb-0 mt-3" id="navmenu-nav">
                                    <li class="navbar-item account-menu">
                                        <a href="user-profile.html"
                                            class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                            <span class="me-2 text-[18px] mb-0"><i class="uil uil-dashboard"></i></span>
                                            <h6 class="mb-0 font-semibold">Profile</h6>
                                        </a>
                                    </li>

                                    <li class="navbar-item account-menu">
                                        <a href="user-billing.html"
                                            class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                            <span class="me-2 text-[18px] mb-0"><i class="uil uil-diary-alt"></i></span>
                                            <h6 class="mb-0 font-semibold">Billing Info</h6>
                                        </a>
                                    </li>

                                    <li class="navbar-item account-menu">
                                        <a href="user-payment.html"
                                            class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                            <span class="me-2 text-[18px] mb-0"><i
                                                    class="uil uil-credit-card"></i></span>
                                            <h6 class="mb-0 font-semibold">Payment</h6>
                                        </a>
                                    </li>

                                    <li class="navbar-item account-menu">
                                        <a href="user-invoice.html"
                                            class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                            <span class="me-2 text-[18px] mb-0"><i class="uil uil-receipt"></i></span>
                                            <h6 class="mb-0 font-semibold">Invoice</h6>
                                        </a>
                                    </li>

                                    <li class="navbar-item account-menu">
                                        <a href="user-social.html"
                                            class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                            <span class="me-2 text-[18px] mb-0"><i class="uil uil-process"></i></span>
                                            <h6 class="mb-0 font-semibold">Social Profile</h6>
                                        </a>
                                    </li>

                                    <li class="navbar-item account-menu">
                                        <a href="user-notification.html"
                                            class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                            <span class="me-2 text-[18px] mb-0"><i class="uil uil-bell"></i></span>
                                            <h6 class="mb-0 font-semibold">Notifications</h6>
                                        </a>
                                    </li>

                                    <li class="navbar-item account-menu">
                                        <a href="user-setting.html"
                                            class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                            <span class="me-2 text-[18px] mb-0"><i class="uil uil-setting"></i></span>
                                            <h6 class="mb-0 font-semibold">Settings</h6>
                                        </a>
                                    </li>

                                    <li class="navbar-item account-menu">
                                        <a href="auth-lock-screen.html"
                                            class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                            <span class="me-2 text-[18px] mb-0"><i class="uil uil-power"></i></span>
                                            <h6 class="mb-0 font-semibold">Sign Out</h6>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:w-3/4 md:w-2/3 md:px-3 mt-[30px] md:mt-0">
                    <div class="pb-6 border-b border-gray-100 dark:border-gray-700">
                        <h5 class="text-xl font-semibold">Jenny Jimenez</h5>

                        <p class="text-slate-400 mt-3">I have started my career as a trainee and prove my self and
                            achieve all the milestone with good guidance and reach up to the project manager. In this
                            journey, I understand all the procedure which make me a good developer, team leader, and a
                            project manager.</p>
                    </div>

                    <div class="grid lg:grid-cols-2 grid-cols-1 gap-[30px] pt-6">
                        <div>
                            <h5 class="text-xl font-semibold">Personal Details :</h5>
                            <div class="mt-6">
                                <div class="flex items-center">
                                    <i data-feather="mail" class="fea icon-ex-md text-slate-400 me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="text-indigo-600 dark:text-white font-medium mb-0">Email :</h6>
                                        <a href="" class="text-slate-400">jennyhot@hotmail.com</a>
                                    </div>
                                </div>
                                <div class="flex items-center mt-3">
                                    <i data-feather="bookmark" class="fea icon-ex-md text-slate-400 me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="text-indigo-600 dark:text-white font-medium mb-0">Skills :</h6>
                                        <a href="" class="text-slate-400">html</a>, <a href=""
                                            class="text-slate-400">css</a>, <a href=""
                                            class="text-slate-400">js</a>, <a href=""
                                            class="text-slate-400">mysql</a>
                                    </div>
                                </div>
                                <div class="flex items-center mt-3">
                                    <i data-feather="italic" class="fea icon-ex-md text-slate-400 me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="text-indigo-600 dark:text-white font-medium mb-0">Language :</h6>
                                        <a href="" class="text-slate-400">English</a>, <a href=""
                                            class="text-slate-400">Japanese</a>, <a href=""
                                            class="text-slate-400">Chinese</a>
                                    </div>
                                </div>
                                <div class="flex items-center mt-3">
                                    <i data-feather="globe" class="fea icon-ex-md text-slate-400 me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="text-indigo-600 dark:text-white font-medium mb-0">Website :</h6>
                                        <a href="" class="text-slate-400">www.kristajoseph.com</a>
                                    </div>
                                </div>
                                <div class="flex items-center mt-3">
                                    <i data-feather="gift" class="fea icon-ex-md text-slate-400 me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="text-indigo-600 dark:text-white font-medium mb-0">Birthday :</h6>
                                        <p class="text-slate-400 mb-0">2nd March, 1996</p>
                                    </div>
                                </div>
                                <div class="flex items-center mt-3">
                                    <i data-feather="map-pin" class="fea icon-ex-md text-slate-400 me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="text-indigo-600 dark:text-white font-medium mb-0">Location :</h6>
                                        <a href="" class="text-slate-400">Beijing, China</a>
                                    </div>
                                </div>
                                <div class="flex items-center mt-3">
                                    <i data-feather="phone" class="fea icon-ex-md text-slate-400 me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="text-indigo-600 dark:text-white font-medium mb-0">Cell No :</h6>
                                        <a href="" class="text-slate-400">(+12) 1254-56-4896</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-[30px] lg:mt-0">
                            <h5 class="text-xl font-semibold">Experience :</h5>

                            <div
                                class="flex duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-4 rounded-md bg-white dark:bg-slate-900 mt-6">
                                <img src="assets/images/client/circle-logo.png"
                                    class="h-16 w-16 p-4 bg-slate-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md"
                                    alt="">
                                <div class="flex-1 content ms-4">
                                    <h4 class="text-lg text-medium">Senior Web Developer</h4>
                                    <p class="text-slate-400 mb-0">3 Years Experience</p>
                                    <p class="text-slate-400 mb-0"><a href=""
                                            class="text-indigo-600">CircleCi</a> @London, UK</p>
                                </div>
                            </div>

                            <div
                                class="flex duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-4 rounded-md bg-white dark:bg-slate-900 mt-6">
                                <img src="assets/images/client/facebook-logo-2019.png"
                                    class="h-16 w-16 p-4 bg-slate-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md"
                                    alt="">
                                <div class="flex-1 content ms-4">
                                    <h4 class="text-lg text-medium">Web Designer</h4>
                                    <p class="text-slate-400 mb-0">2 Years Experience</p>
                                    <p class="text-slate-400 mb-0"><a href=""
                                            class="text-indigo-600">Facebook</a> @Washington D.C, USA</p>
                                </div>
                            </div>

                            <div
                                class="flex duration-500 hover:scale-105 shadow dark:shadow-gray-800 hover:shadow-md dark:hover:shadow-gray-700 ease-in-out items-center p-4 rounded-md bg-white dark:bg-slate-900 mt-6">
                                <img src="assets/images/client/spotify.png"
                                    class="h-16 w-16 p-4 bg-slate-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md"
                                    alt="">
                                <div class="flex-1 content ms-4">
                                    <h4 class="text-lg text-medium">UI Designer</h4>
                                    <p class="text-slate-400 mb-0">2 Years Experience</p>
                                    <p class="text-slate-400 mb-0"><a href=""
                                            class="text-indigo-600">Spotify</a> @Perth, Australia</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h5 class="text-xl font-semibold mt-[30px]">Portfolio :</h5>

                    <div class="grid lg:grid-cols-3 md:grid-cols-2 mt-6 gap-[30px]">
                        <div class="group relative block overflow-hidden rounded-md duration-500">
                            <img src="assets/images/portfolio/1.jpg"
                                class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 duration-500"
                                alt="">
                            <div
                                class="absolute inset-2 group-hover:bg-white/90 dark:group-hover:bg-slate-900/90 duration-500 z-0 rounded-md">
                            </div>

                            <div class="content duration-500">
                                <div
                                    class="icon absolute z-10 opacity-0 group-hover:opacity-100 top-6 end-6 duration-500">
                                    <a href="assets/images/portfolio/1.jpg"
                                        class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full lightbox"><i
                                            class="uil uil-camera"></i></a>
                                </div>

                                <div
                                    class="absolute z-10 opacity-0 group-hover:opacity-100 bottom-6 start-6 duration-500">
                                    <a href="portfolio-detail-three.html"
                                        class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Mockup
                                        Collection</a>
                                    <p class="text-slate-400 mb-0">Abstract</p>
                                </div>
                            </div>
                        </div>

                        <div class="group relative block overflow-hidden rounded-md duration-500">
                            <img src="assets/images/portfolio/2.jpg"
                                class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 duration-500"
                                alt="">
                            <div
                                class="absolute inset-2 group-hover:bg-white/90 dark:group-hover:bg-slate-900/90 duration-500 z-0 rounded-md">
                            </div>

                            <div class="content duration-500">
                                <div
                                    class="icon absolute z-10 opacity-0 group-hover:opacity-100 top-6 end-6 duration-500">
                                    <a href="assets/images/portfolio/2.jpg"
                                        class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full lightbox"><i
                                            class="uil uil-camera"></i></a>
                                </div>

                                <div
                                    class="absolute z-10 opacity-0 group-hover:opacity-100 bottom-6 start-6 duration-500">
                                    <a href="portfolio-detail-three.html"
                                        class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Mockup
                                        Collection</a>
                                    <p class="text-slate-400 mb-0">Abstract</p>
                                </div>
                            </div>
                        </div>

                        <div class="group relative block overflow-hidden rounded-md duration-500">
                            <img src="assets/images/portfolio/3.jpg"
                                class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 duration-500"
                                alt="">
                            <div
                                class="absolute inset-2 group-hover:bg-white/90 dark:group-hover:bg-slate-900/90 duration-500 z-0 rounded-md">
                            </div>

                            <div class="content duration-500">
                                <div
                                    class="icon absolute z-10 opacity-0 group-hover:opacity-100 top-6 end-6 duration-500">
                                    <a href="assets/images/portfolio/3.jpg"
                                        class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full lightbox"><i
                                            class="uil uil-camera"></i></a>
                                </div>

                                <div
                                    class="absolute z-10 opacity-0 group-hover:opacity-100 bottom-6 start-6 duration-500">
                                    <a href="portfolio-detail-three.html"
                                        class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Mockup
                                        Collection</a>
                                    <p class="text-slate-400 mb-0">Abstract</p>
                                </div>
                            </div>
                        </div>

                        <div class="group relative block overflow-hidden rounded-md duration-500">
                            <img src="assets/images/portfolio/4.jpg"
                                class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 duration-500"
                                alt="">
                            <div
                                class="absolute inset-2 group-hover:bg-white/90 dark:group-hover:bg-slate-900/90 duration-500 z-0 rounded-md">
                            </div>

                            <div class="content duration-500">
                                <div
                                    class="icon absolute z-10 opacity-0 group-hover:opacity-100 top-6 end-6 duration-500">
                                    <a href="assets/images/portfolio/4.jpg"
                                        class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full lightbox"><i
                                            class="uil uil-camera"></i></a>
                                </div>

                                <div
                                    class="absolute z-10 opacity-0 group-hover:opacity-100 bottom-6 start-6 duration-500">
                                    <a href="portfolio-detail-three.html"
                                        class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Mockup
                                        Collection</a>
                                    <p class="text-slate-400 mb-0">Abstract</p>
                                </div>
                            </div>
                        </div>

                        <div class="group relative block overflow-hidden rounded-md duration-500">
                            <img src="assets/images/portfolio/5.jpg"
                                class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 duration-500"
                                alt="">
                            <div
                                class="absolute inset-2 group-hover:bg-white/90 dark:group-hover:bg-slate-900/90 duration-500 z-0 rounded-md">
                            </div>

                            <div class="content duration-500">
                                <div
                                    class="icon absolute z-10 opacity-0 group-hover:opacity-100 top-6 end-6 duration-500">
                                    <a href="assets/images/portfolio/5.jpg"
                                        class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full lightbox"><i
                                            class="uil uil-camera"></i></a>
                                </div>

                                <div
                                    class="absolute z-10 opacity-0 group-hover:opacity-100 bottom-6 start-6 duration-500">
                                    <a href="portfolio-detail-three.html"
                                        class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Mockup
                                        Collection</a>
                                    <p class="text-slate-400 mb-0">Abstract</p>
                                </div>
                            </div>
                        </div>

                        <div class="group relative block overflow-hidden rounded-md duration-500">
                            <img src="assets/images/portfolio/6.jpg"
                                class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 duration-500"
                                alt="">
                            <div
                                class="absolute inset-2 group-hover:bg-white/90 dark:group-hover:bg-slate-900/90 duration-500 z-0 rounded-md">
                            </div>

                            <div class="content duration-500">
                                <div
                                    class="icon absolute z-10 opacity-0 group-hover:opacity-100 top-6 end-6 duration-500">
                                    <a href="assets/images/portfolio/6.jpg"
                                        class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full lightbox"><i
                                            class="uil uil-camera"></i></a>
                                </div>

                                <div
                                    class="absolute z-10 opacity-0 group-hover:opacity-100 bottom-6 start-6 duration-500">
                                    <a href="portfolio-detail-three.html"
                                        class="h6 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Mockup
                                        Collection</a>
                                    <p class="text-slate-400 mb-0">Abstract</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section>
</x-guest-layout>

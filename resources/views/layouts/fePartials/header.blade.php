<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container relative">
        <a class="logo" href="{{ route('homepage') }}">
            <span class="inline-block dark:hidden">
                <x-curator-glider :media="(int) $common_settings->darkLogo" class="w-auto h-12 l-dark" />
                <x-curator-glider :media="(int) $common_settings->lightLogo" class="w-auto h-12 l-light" />
            </span>
            <x-curator-glider :media="(int) $common_settings->lightLogo" class="hidden w-auto h-12 dark:inline-block" />
        </a>

        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>

        <ul class="mb-0 list-none buy-button">
            <li class="inline mb-0">
                <a href="{{ route('login') }}"
                    class="inline-block px-5 py-2 text-base font-semibold tracking-wide text-center text-white align-middle duration-500 bg-indigo-600 border border-indigo-600 rounded-md hover:bg-indigo-700 hover:border-indigo-700">
                    Login
                </a>
            </li>
        </ul>
        <div id="navigation">
            <ul class="navigation-menu nav-light">
                @foreach ($main_menu as $menuKey => $menu)
                    <li class="has-submenu parent-menu-item">
                        <a href="{{ isset($menu['route_name']) ? route($menu['route_name'], $menu['params']) : 'javascript:;' }}"
                            class="{{ $first_level_active_index == $menuKey ? 'sub-menu-item' : 'side-menu' }}">
                            {{ $menu['title'] }}
                            @if (isset($menu['sub_menu']))
                                <span class="menu-arrow"></span>
                            @endif
                        </a>
                        @if (isset($menu['sub_menu']))
                            <ul class="{{ $first_level_active_index == $menuKey ? 'submenu' : '' }}">
                                @foreach ($menu['sub_menu'] as $subMenuKey => $subMenu)
                                    <li class="has-submenu child-menu-item">
                                        <a href="{{ isset($subMenu['route_name']) ? route($subMenu['route_name'], $subMenu['params']) : 'javascript:;' }}"
                                            class="{{ $second_level_active_index == $subMenuKey ? 'sub-menu-item' : 'side-menu' }}">
                                            {{ $subMenu['title'] }}
                                            @if (isset($subMenu['sub_menu']))
                                                <span class="submenu-arrow"></span>
                                            @endif
                                        </a>
                                        @if (isset($subMenu['sub_menu']))
                                            <ul
                                                class="{{ $second_level_active_index == $subMenuKey ? 'submenu' : '' }}">
                                                @foreach ($subMenu['sub_menu'] as $lastSubMenuKey => $lastSubMenu)
                                                    <li>
                                                        <a href="{{ isset($lastSubMenu['route_name']) ? route($lastSubMenu['route_name'], $lastSubMenu['params']) : 'javascript:;' }}"
                                                            class="{{ $third_level_active_index == $lastSubMenuKey ? 'sub-menu-item' : 'side-menu' }}">
                                                            {{ $lastSubMenu['title'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>

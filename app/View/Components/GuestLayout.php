<?php

namespace App\View\Components;

use Illuminate\View\View;
use Jenssegers\Agent\Agent;
use Illuminate\View\Component;

class GuestLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        view()->share('main_menu', $this->mainMenu());
        $pageName = request()->route()->getName();
        $activeMenu = $this->activeMenu($pageName);
        view()->share('first_level_active_index', $activeMenu['first_level_active_index']);
        view()->share('second_level_active_index', $activeMenu['second_level_active_index']);
        view()->share('third_level_active_index', $activeMenu['third_level_active_index']);

        return view('layouts.guest');
    }

    public function mainMenu()
    {
        return [
            'lane-rental' => [
                'title' => 'Lanes',
                'route_name' => 'lane-rental',
                'params' => null,
            ],
            'sports' => [
                'title' => 'Sports',
                'route_name' => 'sports',
                'params' => null,
            ],
            'shop' => [
                'title' => 'Shop',
                'route_name' => 'shop',
                'params' => null,
            ],
            'training-video' => [
                'title' => 'Training Video',
                'route_name' => 'training-video',
                'params' => null,
            ],
            'about-us' => [
                'title' => 'About Us',
                'route_name' => 'about-us',
                'params' => null,
            ],
            'contact-us' => [
                'title' => 'Contact Us',
                'route_name' => 'contact-us',
                'params' => null,
            ],
        ];
    }

    /**
     * Determine active menu & submenu.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function activeMenu($pageName)
    {
        $firstLevelActiveIndex = '';
        $secondLevelActiveIndex = '';
        $thirdLevelActiveIndex = '';

        foreach ($this->mainMenu() as $menuKey => $menu) {
            if ($menu !== 'devider' && isset($menu['route_name']) && $menu['route_name'] == $pageName && empty($firstPageName)) {
                $firstLevelActiveIndex = $menuKey;
            }

            if (!(isset($menu['sub_menu']) ?? $menu['sub_menu'] = [])) {
                continue;
            }

            foreach ($menu['sub_menu'] as $subMenuKey => $subMenu) {

                if (isset($subMenu['route_name']) && $subMenu['route_name'] == $pageName && $menuKey != 'menu-layout' && empty($secondPageName)) {
                    $firstLevelActiveIndex = $menuKey;
                    $secondLevelActiveIndex = $subMenuKey;
                }

                if (!isset($subMenu['sub_menu'])) {
                    continue;
                }

                foreach ($subMenu['sub_menu'] as $lastSubMenuKey => $lastSubMenu) {

                    if (isset($lastSubMenu['route_name']) && $lastSubMenu['route_name'] == $pageName) {
                        $firstLevelActiveIndex = $menuKey;
                        $secondLevelActiveIndex = $subMenuKey;
                        $thirdLevelActiveIndex = $lastSubMenuKey;
                    }
                }
            }
        }

        return [
            'first_level_active_index' => $firstLevelActiveIndex,
            'second_level_active_index' => $secondLevelActiveIndex,
            'third_level_active_index' => $thirdLevelActiveIndex,
        ];
    }
}

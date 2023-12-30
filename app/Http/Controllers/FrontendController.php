<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Sport;
use App\Settings\CommonSettings;
use App\Settings\HomePage;
use App\Settings\LanePage;

class FrontendController extends Controller
{
    public function __construct(CommonSettings $settings)
    {
        view()->share('common_settings', $settings);
    }

    public function index(HomePage $settings)
    {
        $sports = Sport::get()->take(6);
        $categories = Category::get()->take(4);

        return view('pages.frontend.index', compact([
            'settings',
            'sports',
            'categories',
        ]));
    }

    public function sports()
    {
        view()->share('title', 'Sports');
        return view('pages.frontend.sports');
    }

    public function shop()
    {
        view()->share('title', 'Shop');
        return view('pages.frontend.shop');
    }

    public function laneRental(LanePage $settings)
    {
        view()->share('title', 'Lane Rental');
        $faqs = Faq::get();

        return view('pages.frontend.laneRental', compact([
            'settings',
            'faqs',
        ]));
    }

    public function trainingVideo()
    {
        view()->share('title', 'Training Video');
        return view('pages.frontend.trainingVideo');
    }

    public function aboutUs()
    {
        view()->share('title', 'About Us');
        return view('pages.frontend.aboutUs');
    }

    public function contactUs()
    {
        view()->share('title', 'Contact Us');
        return view('pages.frontend.contactUs');
    }

    public function bookSlot()
    {
        view()->share('title', 'Book Slot');
        return view('pages.frontend.bookSlot');
    }

    public function termsAndConditions()
    {
        view()->share('title', 'Terms And Conditions');
        return view('pages.frontend.termsAndConditions');
    }

    public function privacyPolicies()
    {
        view()->share('title', 'Privacy Policies');
        return view('pages.frontend.privacyPolicies');
    }

    public function returnAndRefunds()
    {
        view()->share('title', 'Return And Refunds');
        return view('pages.frontend.returnAndRefunds');
    }
}

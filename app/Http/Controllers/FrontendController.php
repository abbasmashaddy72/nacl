<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Sport;
use App\Settings\AboutPage;
use App\Settings\CommonSettings;
use App\Settings\ContactUsPage;
use App\Settings\HomePage;
use App\Settings\LanePage;
use App\Settings\ShopPage;
use App\Settings\SportPage;
use App\Settings\TrainingVideoPage;

class FrontendController extends Controller
{
    public function __construct(CommonSettings $settings)
    {
        view()->share('common_settings', $settings);
    }

    public function index(HomePage $settings)
    {
        $sports = Sport::get()->take(6);
        $categories = Category::where('is_visible', true)->get()->take(4);

        return view('pages.frontend.index', compact([
            'settings',
            'sports',
            'categories',
        ]));
    }

    public function laneRental(LanePage $settings)
    {
        view()->share('title', 'Cricket Lane Rental');
        $faqs = Faq::limit(10)->get();

        return view('pages.frontend.laneRental', compact([
            'settings',
            'faqs',
        ]));
    }


    public function sports(SportPage $settings)
    {
        view()->share('title', 'Sports');
        $sports = Sport::limit(6)->get();

        return view('pages.frontend.sports', compact([
            'settings',
            'sports',
        ]));
    }

    public function shop(ShopPage $settings)
    {
        view()->share('title', 'Shop');

        return view('pages.frontend.shop', compact([
            'settings',
        ]));
    }

    public function trainingVideo(TrainingVideoPage $settings)
    {
        view()->share('title', 'Training Video');

        return view('pages.frontend.trainingVideo', compact([
            'settings',
        ]));
    }

    public function aboutUs(AboutPage $settings)
    {
        view()->share('title', 'About Us');

        return view('pages.frontend.aboutUs', compact([
            'settings',
        ]));
    }

    public function contactUs(ContactUsPage $settings)
    {
        view()->share('title', 'Contact Us');

        return view('pages.frontend.contactUs', compact([
            'settings',
        ]));
    }

    public function bookSlot()
    {
        return redirect('lane-rental');
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

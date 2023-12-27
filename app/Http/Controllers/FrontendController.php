<?php

namespace App\Http\Controllers;

class FrontendController extends Controller
{
    public function index()
    {
        return view('pages.frontend.index');
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

    public function laneRental()
    {
        view()->share('title', 'Lane Rental');
        return view('pages.frontend.laneRental');
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

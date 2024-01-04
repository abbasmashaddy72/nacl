<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Settings\CommonSettings;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __construct(CommonSettings $settings)
    {
        view()->share('title', 'Dashboard');
        view()->share('common_settings', $settings);
    }

    /**
     * Display the user's profile form.
     */
    public function index(): View
    {
        return view('pages.dashboard');
    }
}

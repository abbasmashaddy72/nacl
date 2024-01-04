<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Settings\CommonSettings;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;

class EmailVerificationPromptController extends Controller
{
    public function __construct(CommonSettings $settings)
    {
        view()->share('title', 'Verify Email');
        view()->share('common_settings', $settings);
    }

    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request): RedirectResponse|View
    {
        return $request->user()->hasVerifiedEmail()
            ? redirect()->intended(RouteServiceProvider::HOME)
            : view('auth.verify-email');
    }
}

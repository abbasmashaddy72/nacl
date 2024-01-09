<?php

namespace App\Http\Controllers;

use App\Settings\CommonSettings;
use App\Traits\StripePaymentTrait;

class StripePaymentController extends Controller
{
    use StripePaymentTrait;

    public function __construct(CommonSettings $settings)
    {
        view()->share('common_settings', $settings);
    }
}

<?php

namespace App\Http\Controllers;

use Exception;
use Stripe\Stripe;
use Stripe\StripeClient;
use App\Traits\Processor;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use App\Models\PaymentRequest;
use Stripe\Exception\CardException;
use Illuminate\Support\Facades\Validator;

class StripePaymentController extends Controller
{
    public function success()
    {
        dd('Success');
    }

    public function cancel()
    {
        dd('Cancelled');
    }
}

<?php

namespace App\Http\Controllers;

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

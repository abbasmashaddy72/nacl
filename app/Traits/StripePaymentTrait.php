<?php

namespace App\Traits;

use Exception;
use Stripe\Charge;
use Stripe\Stripe;
use Stripe\StripeClient;
use Illuminate\Http\Request;
use Stripe\Exception\CardException;
use Illuminate\Support\Facades\Validator;

trait StripePaymentTrait
{
    private $stripe;

    public function __construct()
    {
        Stripe::setApiKey(config('stripe.stripe_secret_key'));
        $this->stripe = new StripeClient(config('stripe.stripe_publish_key'));
    }

    private function createToken($cardData)
    {
        $token = null;
        try {
            $token = $this->stripe->tokens->create([
                'card' => [
                    'number' => $cardData['cardNumber'],
                    'exp_month' => $cardData['month'],
                    'exp_year' => $cardData['year'],
                    'cvc' => $cardData['cvv']
                ]
            ]);
        } catch (CardException $e) {
            $token['error'] = $e->getError()->message;
        } catch (Exception $e) {
            $token['error'] = $e->getMessage();
        }
        return $token;
    }

    private function createCharge($tokenId, $amount)
    {
        $charge = null;
        try {
            $charge = Charge::create([
                'amount' => $amount,
                'currency' => 'usd',
                'source' => $tokenId,
                'description' => 'My first payment'
            ]);
        } catch (Exception $e) {
            $charge['error'] = $e->getMessage();
        }
        return $charge;
    }
}

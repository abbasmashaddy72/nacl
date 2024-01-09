<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

trait StripePaymentTrait
{
    public function checkout($lineItems, $modelName, $statusType, $bookingId)
    {
        \Stripe\Stripe::setApiKey(config('stripe.stripe_secret_key'));

        $session = \Stripe\Checkout\Session::create([
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => route('stripe.success', ['model' => $modelName, 'statusType' => $statusType], true) . "&session_id={CHECKOUT_SESSION_ID}",
            'cancel_url' => route('stripe.cancel', [], true),
        ]);

        $model = '\\App\\Models\\' . $modelName;

        $order = $model::findOrFail($bookingId);
        $order->{$statusType} = 'unPaid';
        $order->session_id = $session->id;
        $order->save();

        return redirect()->away($session->url);
    }

    public function success(Request $request)
    {
        view()->share('title', 'Payment Success');

        \Stripe\Stripe::setApiKey(config('stripe.stripe_secret_key'));

        $sessionId = $request->query('session_id');

        try {
            $session = \Stripe\Checkout\Session::retrieve($sessionId);
            if (!$session) {
                dd($session);
                throw new NotFoundHttpException;
            }

            $model = '\\App\\Models\\' . $request->query('model');

            $order = $model::where('session_id', $session->id)->first();

            if (!$order) {
                dd($order);
                throw new NotFoundHttpException();
            }
            if ($order->{$request->query('statusType')} === 'unPaid') {
                $order->{$request->query('statusType')} = 'paid';
                $order->save();
            }

            return view('pages.frontend.stripe.success');
        } catch (\Exception $e) {
            dd($e);
            throw new NotFoundHttpException();
        }
    }

    public function cancel()
    {
        view()->share('title', 'Payment Cancelled');

        return view('pages.frontend.stripe.cancel');
    }

    public function webhook()
    {
        $endpoint_secret = config('stripe.stripe_webhook_secret');

        $payload = @file_get_contents('php://input');
        $sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
        $event = null;

        try {
            $event = \Stripe\Webhook::constructEvent(
                $payload,
                $sig_header,
                $endpoint_secret
            );
        } catch (\UnexpectedValueException $e) {
            // Invalid payload
            return response('', 400);
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            // Invalid signature
            return response('', 400);
        }

        // Handle the event
        switch ($event->type) {
            case 'checkout.session.completed':
                $session = $event->data->object;
                $urlComponents = parse_url($session->success_url);

                if (!$urlComponents || !isset($urlComponents['query'])) {
                    return response('Invalid success URL', 400);
                }

                parse_str($urlComponents['query'], $queryParams);
                $statusType = $queryParams['statusType'] ?? null;
                $model = $queryParams['model'] ?? null;

                $model = '\\App\\Models\\' . $model;
                $order = $model::where('session_id', $session->id)->first();
                if ($order && $order->{$statusType} === 'unPaid') {
                    $order->{$statusType} = 'paid';
                    $order->save();
                    // Send email to customer
                }

                // ... handle other event types
            default:
                echo 'Received unknown event type ' . $event->type;
        }

        return response('', 200);
    }
}

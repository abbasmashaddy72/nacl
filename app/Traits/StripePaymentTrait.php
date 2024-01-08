<?php

namespace App\Traits;

use Stripe\Stripe;

trait StripePaymentTrait
{
    // private $stripe;
    // private $endpoint_secret;

    public function __construct()
    {
        Stripe::setApiKey(config('stripe.stripe_secret_key'));
        // new StripeClient(config('stripe.stripe_publish_key'));
        // $this->endpoint_secret = config('stripe.stripe_webhook_secret');
    }

    // public function web_go_hooks()
    // {
    //     // Log::info("11211-------");
    //     $payload = @file_get_contents('php://input');
    //     $sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
    //     $event = null;
    //     //  Log::info("payload----" . $payload);

    //     try {
    //         $event = \Stripe\Webhook::constructEvent(
    //             $payload,
    //             $sig_header,
    //             $this->endpoint_secret
    //         );
    //     } catch (\UnexpectedValueException $e) {
    //         // Invalid payload
    //         //  Log::info("UnexpectedValueException" . $e);
    //         http_response_code(400);
    //         exit();
    //     } catch (\Stripe\Exception\SignatureVerificationException $e) {
    //         // Invalid signature
    //         //    Log::info("SignatureVerificationException" . $e);
    //         http_response_code(400);
    //         exit();
    //     }
    //     //   Log::info("event---->" . $event);
    //     // Handle the checkout.session.completed event
    //     if ($event->type == 'checkout.session.completed') {
    //         $session = $event->data->object;
    //         // Log::info("event->data->object---->" . $session);
    //         $metadata = $session["metadata"];
    //         $order_num = $metadata->order_num;
    //         $user_token = $metadata->user_token;
    //         //  Log::info("order_id---->" . $order_num);
    //         $map = [];
    //         $map["status"] = 1;
    //         $map["updated_at"] = Carbon::now();
    //         $whereMap = [];
    //         $whereMap["user_token"] = $user_token;
    //         $whereMap["id"] = $order_num;
    //         // Order::where($whereMap)->update($map);
    //     }


    //     http_response_code(200);
    // }
}

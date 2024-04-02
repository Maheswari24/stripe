<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function index() {
        return view("payment");
    }

    public function checkout(Request $request) {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        $session = \Stripe\Checkout\Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'INR',
                        'product_data' => [
                            'name' => $request->input('name'),
                        ],
                        'unit_amount' => intval($request->input('price')*100)
                    ],
                    'quantity' => 1,
                ]
                ],
                'mode' => 'payment',
                'success_url' => route('payment-success'),
                'cancel_url' => route('cancel'),
        ]);

        return redirect()->away($session->url);
    }

    public function success() {
        return "Payment Processed Successfully!";
    }

    public function cancel() {
        return "Payment Failed!";
    }
}

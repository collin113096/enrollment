<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Stripe\Stripe;

class ChargeController extends Controller
{
    public function charge()
    {
		\Stripe\Stripe::setApiKey(config('services.stripe.secret'));

		$token = request('stripeToken');
		$amount = request('total_fee');

		\Stripe\Charge::create([
		    'amount' => $amount * 100,
		    'currency' => 'php',
		    'description' => 'Example charge',
		    'source' => $token
		]);

		return "Successfully Paid ".$amount*100;
    }
}

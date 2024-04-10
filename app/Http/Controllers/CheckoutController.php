<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $plan = 'price_1P3DSuAWgNaQX7iRE11NfQf0')
    {

        // One off payment
        if ($plan == 'price_1P3DSuAWgNaQX7iRvNyUKIia') {
            return $request->user()->checkout([$plan => 1], [
                'success_url' => route('success'),
                'cancel_url' => route('dashboard'),
            ]);
        }
        return $request->user()
            ->newSubscription('prod_PszRI3l8j5z1hz', $plan)
            ->checkout([
                'success_url' => route('success'),
                'cancel_url' => route('dashboard'),
            ]);
    }

}

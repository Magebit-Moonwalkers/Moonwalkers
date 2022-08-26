<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function saveBillingAddress(Request $request)
    {
        $checkoutDetails = new Checkout();
        $checkoutDetails->name = $request->name;
        $checkoutDetails->email = $request->email;
        $checkoutDetails->billing_address = $request->billing_address;
        $checkoutDetails->billing_city = $request->billing_city;
        $checkoutDetails->billing_state = $request->billing_state;
        $checkoutDetails->billing_zip = $request->billing_zip;
        $checkoutDetails->if_shipping_same = $request->if_shipping_same ? 1 : 0 ;

        $checkoutDetails->save();

        $checkoutId = $this->getLastCheckoutId();

        if ($request->if_shipping_same) {
            return view("order")->with(compact('checkoutId'));
        } else {
            return view("shippingAddress")->with(compact('checkoutId'));
        }
    }

    public function getLastCheckoutId() { 
        $lastProduct = DB::table('user_checkout_details')->latest('id')->first();
        return $lastProduct ? $lastProduct->product_id : 0;
    }
}

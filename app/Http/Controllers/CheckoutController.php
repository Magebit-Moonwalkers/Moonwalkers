<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function saveBillingAddress(Request $request)
    {
        $rules = array (
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'billing_address' => 'required',
            'billing_city' => 'required',
            'billing_state' => 'required',
            'billing_zip' => 'required',
        );

        $this->validate($request, $rules);

        $checkoutDetails = new Checkout();
        $checkoutDetails->name = (string)$request->name;
        $checkoutDetails->email = (string)$request->email;
        $checkoutDetails->billing_address = (string)$request->billing_address;
        $checkoutDetails->billing_city = (string)$request->billing_city;
        $checkoutDetails->billing_state = (string)$request->billing_state;
        $checkoutDetails->billing_zip = (string)$request->billing_zip;
        $checkoutDetails->if_shipping_same = $request->if_shipping_same ? 1 : 0 ;

        $checkoutDetails->save();

        $checkoutId = $this->getLastCheckoutId();

        if ($request->if_shipping_same) {
            return view("payment")->with(compact('checkoutId'));
        } else {
            return view("shippingAddress")->with(compact('checkoutId'));
        }
    }

    public function saveShippingAddress(Request $request)
    {
        $rules = array (
            'shipping_city' => 'required',
            'shipping_city' => 'required',
            'shipping_state' => 'required',
            'shipping_zip' => 'required',
        );

        $this->validate($request, $rules);

        $checkoutId = $request->checkoutId;
        DB::table('user_checkout_details')->where('id',$request->checkoutId)->update([
            'shipping_address'=> $request->shipping_address,
            'shipping_city'=> $request->shipping_address,
            'shipping_state'=> $request->shipping_address,
            'shipping_zip'=> $request->shipping_address,
        ]);

        return view("payment")->with(compact('checkoutId'));
    }

    public function saveOrder(Request $request)
    {
        $checkoutId = $request->checkoutId;
        DB::table('user_checkout_details')->where('id',$request->checkoutId)->update([
            'payment_method'=> $request->payment_method
        ]);

        if(auth()->user())
        {
            $orderedItems = DB::table('cart')->where('user_id',auth()->user()->id)->get();
            foreach ($orderedItems as $item) {
                $order = new Order();
                $order->order_id = $checkoutId;
                $order->product_id = $item->product_id;
                $order->product_quantity = $item->item_quantity;
                $order->user_id = auth()->user()->id;
                $order->save();
            }
            DB::table('cart')->where('user_id',auth()->user()->id)->delete();
            return view("home");
        }
        
        return redirect("/");
    }

    public function getLastCheckoutId() { 
        $last = DB::table('user_checkout_details')->latest('id')->first();
        return $last ? $last->id : 0;
    }
}

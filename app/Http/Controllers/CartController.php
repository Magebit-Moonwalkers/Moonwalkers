<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = DB::table('cart')->join('products', 'products.product_id', 'cart.product_id')->where('user_id', auth()->user()->id)->get();

        return view('cart')->with(compact('cartItems'));
    }

    public function addToCart(Request $request)
    {
        $cart = new Cart();
        $cart->product_id = $request->product_id;
        $cart->user_id = auth()->user()->id;
        $cart->item_quantity = $request->quantity;
        $cart->save();
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
        DB::table('cart')->where('cart_id',$request->cart_id)
        ->where('product_id',$request->product_id)->update(['item_quantity'=> $request->item_quantity]);

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        DB::table('cart')->where('cart_id',$request->cart_id)->where('product_id',$request->product_id)->delete();

        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    static function getTotal() {
        $total = 0;
        $items = DB::table('cart')->join('products', 'products.product_id', 'cart.product_id')->where('user_id',auth()->user()->id)->get();

        foreach ($items as $item) {
            $total += $item->price;
        }
        return $total;
    }
}
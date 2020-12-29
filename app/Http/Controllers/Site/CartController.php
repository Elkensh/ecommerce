<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\User;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index()
    {
        if (auth()->user()) {
            $product_cart = auth()->user()->cart;
            return view('front.cart', compact('product_cart'));
        }
    }

    public function addToCart($product_id)
    {

        if (auth()->user()) {

            $user_id = auth()->user()->id;
            //$user = User::find($user_id);
            $test = Cart::where('user_id', $user_id)
                ->where('product_id', $product_id)
                ->first();

            if (!$test) {
                $cart = new Cart;
                $cart->user_id = $user_id;
                $cart->product_id = $product_id;
                $cart->save();

                return redirect()->back()->with(['done' => 'The product has been added to your Cart']);
            } else {
                return redirect()->back()->with(['done' => 'you have this product before']);
            }
        } else {
            return "error";
        }
    }
}

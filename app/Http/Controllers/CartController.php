<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // public function index()
    // {
    //     return view('pages.cart');
    // }

    public function index()
    {
        $carts = Cart::with(['product.galleries', 'user'])->where('users_id', Auth::user()->id)->get();
        $user = Auth::user();
        return view('pages.cart',[
            'carts' => $carts,
            'user' => $user
        ]);
    }

    public function delete(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);

        $cart->delete();

        return back();
    }

    public function success()
    {
        return view('pages.success');
    }
}

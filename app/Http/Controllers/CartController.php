<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Cart;
class CartController extends Controller
{
    public function deleteCart(Request $request)
    {
        $idProductDelete = $request->id;
        Cart::remove($idProductDelete);
        return redirect()->back();
    }
    public function updateCart(Request $request)
    {
        if($request->get('product_id') && $request->get('increment') == 1) {
            $product_id = $request->get('product_id');
            $item = Cart::search(function ($cartItem) use ($product_id) {
                return $cartItem->id == $product_id;
            })->first();
            Cart::update($item->rowId, $item->qty + 1);
        }
        if($request->get('product_id') && $request->get('decrease') == 1) {
            $product_id = $request->get('product_id');
            $item = Cart::search(function ($cartItem) use ($product_id) {
                return $cartItem->id == $product_id;
            })->first();
            Cart::update($item->rowId, $item->qty - 1);
        }
        return redirect()->back();
    }
}

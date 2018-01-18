<?php

namespace App\Http\Controllers;


use App\Products;
use Illuminate\Http\Request;
use View;
use Cart;

class HomeController extends Controller
{
    public function  getIndex(Request $request)
    {
        $perPage = isset($request->select_product_by_limit) ? $request->select_product_by_limit : 8;

        $sortType = isset($request->select_sort) ? $request->select_sort : 'default';

        if($sortType == 'default') {
            $products = Products::paginate($perPage)->appends(['select_product_by_limit'=>$perPage]);
        }
        if($perPage == '8' ) {
            $products = Products::orderBy('price',$sortType)->paginate($perPage)->appends([
                'select_sort'=>$sortType
            ]);
        }
        if($perPage != '8' && $sortType != 'default') {
            $products = Products::orderBy('price',$sortType)->paginate($perPage)->appends([
                'select_product_by_limit'=>$perPage,
                'select_sort'=>$sortType
            ]);
        }
        if($request->ajax()) {
            return response()->view('pages.presult', array('products'=>$products));
        }

        return view('pages.index',compact('products'));
    }
    public function detaiProduct(Request $request)
    {
        $product = Products::where('id',$request->id)->first();
        $photos = Products::find($request->id)->photos;

        return view('pages.product-detail',compact('product','photos'));
    }
    public function showCart()
    {
        $cart = Cart::content();
        $totalPrice = Cart::total(0,'.',',');

        return view('pages.cart',compact('cart','totalPrice'));
    }
    public function addCart(Request $request)
    {
        switch ($request->input('action')) {
            case 'btnAddCart' :
                $product = Products::find($request->product_id);
                $quantity = $request->quantity;
                $cartInfo = [
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->price*(100-$product->discount)/100,
                    'qty' => $quantity
                ];
                Cart::add($cartInfo);
                break;
            case 'btnAddBuy' :
                $product = Products::find($request->product_id);
                $quantity = $request->quantity;
                $cartInfo = [
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->price*(100-$product->discount)/100,
                    'qty' => $quantity
                ];
                Cart::add($cartInfo);
                $cart = Cart::content();
                $total = Cart::total(0,'.',',');
                return view('pages.payment',compact('cart','total'));
                break;
        }
        $cart = Cart::content();
        $totalPrice = Cart::total(0,'.',',');
        return view('pages.cart',compact('cart','totalPrice'));
    }
}

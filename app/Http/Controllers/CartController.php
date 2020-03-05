<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Product;

class CartController extends Controller
{
    // show list cart
	
	public function addcart($id, cart $cart)
	{
		$Product = Product::where('product_id',$id)->get()->toArray();
		$cart->add($Product);
		return redirect()->route('home.cart');
		/*dd($data);*/
		/*echo "<pre>";
		print_r($data);*/
	}
	public function cart(cart $cart)
	{
		/*dd($cart);*/
		return view('home.cart',['cart'=>$cart]);
	}
	//update_cart
	public function update_cart(cart $cart, Request $Request)
	{
		// dd($Request->quantity);
		$cart->update_carts($Request->id, $Request->quantity);
		return redirect()->route('home.cart');
	}
	//delete_cart
	public function delete_cart(cart $cart, Request $Request)
	{
		$cart->delete_cart($Request->id);
		return redirect()->route('home.cart');
	}
	//delete-all-cart
	public function delete_all_cart(cart $cart)
	{
		$cart->clear_cart();
		return redirect()->route('home.cart');
	}
}

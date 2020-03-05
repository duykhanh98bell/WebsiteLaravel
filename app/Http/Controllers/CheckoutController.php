<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Orders;
use App\Orderdetails;
use App\cart;


class CheckoutController extends Controller
{
    public function checkout(Cart $Cart)
	{
		// dd($Cart);

		return view('home/checkout',['Cart'=>$Cart]);
	}
	public function post_checkout(Cart $Cart, Request $Request)
	{
		$Request->validate([
		    'name' => 'required',
		    'email'=>'required',
			'address'=>'required',
			'phone'=>'required'
		],[
			'name.required'=>'Miền tên không được trống',
			'email.required'=>'email không được trống',
			'address.required'=>'Địa chỉ không được trống',
			'phone.required'=>'Số điện thoại không được trống',
		]);

		$Customer = Customer::create([
			'name'=>$Request->name,
			'email'=>$Request->email,
			'address'=>$Request->address,
			'phone'=>$Request->phone,
			'note'=>$Request->note
		]);
		// dd($Customer);
		// return redirect()->route('home.checkout');
		$Orders = Orders::create([
			'customer_id'=>$Customer->id,
			'total'=>$Cart->total(),
			'status'=>$Request->status,
			'note'=>$Request->note
		]);
		foreach($Cart->items as $item)
			// dd($Orders);
		{
			Orderdetails::create([
				'order_id'=>$Orders->id,
				'product_id'=> $item[0]['product_id'],
				'quantity'=> $item['quantity'],
				'price'=> $item[0]['price'],
				'sale_off'=> $item[0]['sale_off'],
			]);
		}
		$Cart->clear_cart();
		return redirect()->route('home.total')->with('success','Đặt hàng thành công');
	}
}

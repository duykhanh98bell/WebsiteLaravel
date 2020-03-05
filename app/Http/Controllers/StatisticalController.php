<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Orders;
use App\Orderdetails;
use App\Customer;

class StatisticalController extends Controller
{
    public function Statistical()
    {
    	$soLuong = Orderdetails::all();
    	$doanhThu = Orders::all();
    	$khach = Customer::DISTINCT()->count('email');;
    	
    	return view('backend.statistical',[
    		'soLuong'=>$soLuong,
    		'doanhThu'=>$doanhThu,
    		'khach'=>$khach
    	]);
    }
}

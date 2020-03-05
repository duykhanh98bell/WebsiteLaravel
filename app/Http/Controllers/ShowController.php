<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Product;
use App\Category;
use App\Style;
use App\Size;
use App\Colors;
use App\Brand;


class ShowController extends Controller
{
	// slideproduct
	public function welcome(){
		$ViewProduct = Product::all();
		return view('welcome',['ViewProduct'=>$ViewProduct]);
	}
    // Show in Shopcategory
    public function product()
		{	
			$ViewCategory = Category::all();
	    	$ViewColors = Colors::all();
	    	$ViewBrand = Brand::all();
	    	$ViewProduct = Product::paginate(12);
			return view('home.product',[
				'category'=>$ViewCategory,
	    		'ViewColors'=>$ViewColors,
	    		'ViewBrand'=>$ViewBrand,
	    		'ViewProduct'=>$ViewProduct
			]);
		}
	public function filterCategory($cateid)
	{
		$ViewCategory = Category::all();
		$ViewColors = Colors::all();
	    $ViewBrand = Brand::all();
		$ViewProduct = Product::where('cat_id',$cateid)->paginate(12);
		return view('home.product',[
			'ViewProduct'=>$ViewProduct,
			'category'=>$ViewCategory,
	    	'ViewColors'=>$ViewColors,
	    	'ViewBrand'=>$ViewBrand
		]);
	}
	public function filterBrand($brand_id)
	{
		$ViewCategory = Category::all();
		$ViewColors = Colors::all();
	    $ViewBrand = Brand::all();
		$ViewProduct = Product::where('brand_id',$brand_id)->paginate(12);
		return view('home.brand',[
			'ViewProduct'=>$ViewProduct,
			'category'=>$ViewCategory,
	    	'ViewColors'=>$ViewColors,
	    	'ViewBrand'=>$ViewBrand
		]);
	}
	public function filterColors($colors_id)
	{
		$ViewCategory = Category::all();
		$ViewColors = Colors::all();
	    $ViewBrand = Brand::all();
		$ViewProduct = Product::where('colors_id',$colors_id)->paginate(12);
		return view('home.colors',[
			'ViewProduct'=>$ViewProduct,
			'category'=>$ViewCategory,
	    	'ViewColors'=>$ViewColors,
	    	'ViewBrand'=>$ViewBrand
		]);
	}
	// Show in productdetail
	function productdetail($proid)
	{
		
		$ViewProduct = Product::join('category','category.cat_id','=','product.cat_id')->where('product_id',$proid)->get();
		return view('home/productdetail',[
			'ViewProduct'=>$ViewProduct
		]);
	}
	

}

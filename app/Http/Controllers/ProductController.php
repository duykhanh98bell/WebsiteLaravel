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
use Carbon\Carbon;

class ProductController extends Controller
{
    //AddProduct
    public function AddProduct()
    {
    	$ViewCategory = Category::all();
    	$ViewStyle = Style::all();
    	$ViewSize = Size::all();
    	$ViewColors = Colors::all();
    	$ViewBrand = Brand::all();
    	return view('backend.AddProduct',[
    		'ViewCategory'=>$ViewCategory,
    		'ViewStyle'=>$ViewStyle,
    		'ViewSize'=>$ViewSize,
    		'ViewColors'=>$ViewColors,
    		'ViewBrand'=>$ViewBrand
    	]);
    }
    public function SaveProduct(Request $Request)
    {
    	$this->validate($Request,[
    		'pro_name'=>'required|min:2',
    		'price'=>'required'
    	],[
    		'pro_name.required'=>"không được để trống tên",
    		'pro_name.min'=>"Tên không được ngắn hơn 2 kí tự",
    		'price.required'=>"Không được để trống giá sản phẩm"
    	]);

    	$images='';
    	if ($Request->has('images')) {
    		$file = $Request->images;
    		$file->move(base_path('/uploads'),$file->getClientOriginalName());
    		$images = $file->getClientOriginalName();
    	}

    	Product::create([
    		'pro_name'=>$Request->pro_name,
    		'cat_id'=>$Request->cat_id,
    		'style_id'=>$Request->style_id,
    		'size_id'=>$Request->size_id,
    		'colors_id'=>$Request->colors_id,
    		'brand_id'=>$Request->brand_id,
    		'price'=>$Request->price,
    		'sale_off'=>$Request->sale_off,
    		'images'=>$images,
    		'description'=>$Request->description,
    		'status'=>$Request->status,
    		'created_at'=>Carbon::now('Asia/Ho_Chi_Minh')
    	]);
    	return redirect()->route('ListProduct');
    }
    //ListProduct
    public function ListProduct()
    {
    	$ViewProduct = Product::all();
    	return view('backend.ListProduct',['ViewProduct'=>$ViewProduct]);
    }
    //EditProduct
    public function EditProduct($product_id)
    {
    	$ViewCategory = Category::all();
    	$ViewStyle = Style::all();
    	$ViewSize = Size::all();
    	$ViewColors = Colors::all();
    	$ViewBrand = Brand::all();
    	$ViewProduct = Product::where(['product_id'=>$product_id])->first();
    	return view('backend.EditProduct',[
    		'ViewProduct'=>$ViewProduct,
    		'ViewCategory'=>$ViewCategory,
    		'ViewStyle'=>$ViewStyle,
    		'ViewSize'=>$ViewSize,
    		'ViewColors'=>$ViewColors,
    		'ViewBrand'=>$ViewBrand
    	]);
    }
    public function UpdateProduct($product_id, Request $Request)
    {
    	$images ='';
    	if ($Request->has('images')) {
    		$file = $Request->images;
    		$file->move(base_path('/uploads'),$file->getClientOriginalName());
    		$images = $file->getClientOriginalName();
    	}
    	Product::where(['product_id'=>$product_id])->Update([
    		'pro_name'=>$Request->pro_name,
    		'cat_id'=>$Request->cat_id,
    		'style_id'=>$Request->style_id,
    		'size_id'=>$Request->size_id,
    		'colors_id'=>$Request->colors_id,
    		'brand_id'=>$Request->brand_id,
    		'price'=>$Request->price,
    		'sale_off'=>$Request->sale_off,
    		'images'=>$images,
    		'description'=>$Request->description,
    		'status'=>$Request->status,
    		'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')
    	]);
    	return redirect()->route('ListProduct');
    }
    //DeleteProduct
    public function DeleteProduct($product_id)
    {
    	Product::where(['product_id'=>$product_id])->delete();
    	return redirect()->route('ListProduct');
    }

}

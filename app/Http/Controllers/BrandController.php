<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Http\Controllers;
use DB;
use Carbon\Carbon;

class BrandController extends Controller
{
	//thêm thương hiệu
    public function AddBrand()
    {
    	return view('backend.AddBrand');
    }
    public function SaveBrand(Request $Request)
    {
    	$this->validate($Request,[
    		'brand_name'=>"required|min:2"
    	],
    	[
    		'brand_name.required'=>'không được trống tên thương hiệu',
    		'brand_name.min'=>'Tên nhiều hơn 2 kí tự'
    	]);
    	Brand::create([
    		'brand_name'=>$Request->brand_name,
            'created_at'=>Carbon::now('Asia/Ho_Chi_Minh')
    	]);
    	return redirect()->route('ListBrand');
    }
    // list brand
    public function ListBrand()
    {
    	$ViewBrand = Brand::all();
    	return view('backend.ListBrand',[
    		'ViewBrand' => $ViewBrand
    	]);
    }
    // edit brand
    public function EditBrand($brand_id)
    {
    	$br = Brand::where('brand_id',$brand_id)->first();
    	return view('backend.EditBrand',['EditBrand'=>$br]);
    }
    public function UpdateBrand($brand_id,Request $Request)
    {
    	Brand::where(['brand_id'=>$brand_id])->update([
    		'brand_name'=>$Request->brand_name,
            'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')
    	]);
    	return redirect()->route('ListBrand');
    }
    // DeleteBrand
    public function DeleteBrand($brand_id)
    {
    	Brand::where(['brand_id'=>$brand_id])->delete();
    	return redirect()->route('ListBrand');
    }

    //showbrand
    /*public function Brand()
    {
        $Brand = Brand::all();
        return view('home.category',['Brand'=>$Brand]);
    }*/

}

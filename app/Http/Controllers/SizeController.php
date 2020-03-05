<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Size;
use Carbon\Carbon;

class SizeController extends Controller
{
    //AddSize
    public function AddSize()
    {
    	return view('backend.AddSize');
    }
    public function SaveSize(Request $Request)
    {
    	$this->validate($Request,[
    		'size_numbers'=>'required'
    	],
    	[
    		'size_numbers.required'=>'Không được để trống'
    	]);
    	Size::create([
    		'size_numbers'=>$Request->size_numbers,
            'created_at'=>Carbon::now('Asia/Ho_Chi_Minh')
    	]);
    	return redirect()->route('ListSize');
    }
    //ListSize
    public function ListSize()
    {
    	$ViewSize = Size::all();
    	return view('backend.ListSize',['ViewSize'=>$ViewSize]);
    }
    //EditSize
    public function EditSize($size_id)
    {
    	$ViewSize = Size::where(['size_id'=>$size_id])->first();
    	return view('backend.EditSize',['ViewSize'=>$ViewSize]);
    }
    public function UpdateSize($size_id, Request $Request)
    {
    	Size::where(['size_id'=>$size_id])->update([
    		'size_numbers'=>$Request->size_numbers,
            'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')
    	]);
    	return redirect()->route('ListSize');
    }
    //DeleteSize
    public function DeleteSize($size_id)
    {
    	Size::where(['size_id'=>$size_id])->delete();
    	return redirect()->route('ListSize');
    }
}

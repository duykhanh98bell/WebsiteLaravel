<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Style;
use App\Http\Controllers;
use Carbon\Carbon;

class StyleController extends Controller
{
    //AddStyle
    public function AddStyle()
    {
    	return view('backend.AddStyle');
    }
    public function SaveStyle(Request $Request)
    {
    	$this->validate($Request,[
    		'style_name'=>'required|min:2',
    	],
    	[
    		'style_name.required'=>'không được để trống',
    		'style_name.min'=>'không được ít hơn 2 kí tự'
    	]);
    	Style::create([
    		'style_name'=>$Request->style_name,
            'created_at'=>Carbon::now('Asia/Ho_Chi_Minh')
    	]);
    	return redirect()->route('ListStyle');
    }
    //ListStyle
    public function ListStyle()
    {
    	$ViewStyle = Style::all();
    	return view('backend.ListStyle',['ViewStyle'=>$ViewStyle]);
    }
    //EditStyle
    public function EditStyle($style_id)
    {
    	$ViewStyle = Style::where(['style_id'=>$style_id])->first();
    	return view('backend.EditStyle',['ViewStyle'=>$ViewStyle]);
    }
    public function UpdateStyle($style_id, Request $Request)
    {
    	Style::where(['style_id'=>$style_id])->update([
    		'style_name'=>$Request->style_name,
            'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')
    	]);
    	return redirect()->route('ListStyle');
    }
    //DeleteStyle
    public function DeleteStyle($style_id)
    {
    	Style::where(['style_id'=>$style_id])->delete();
    	return redirect()->route('ListStyle');
    }
}

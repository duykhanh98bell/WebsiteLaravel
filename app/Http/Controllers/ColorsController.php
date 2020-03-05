<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Colors;
use App\Http\Controllers;
use Carbon\Carbon;

class ColorsController extends Controller
{

	// AddColors
    public function AddColors()
    {
    	return view('backend.AddColors');
    }
    public function SaveColors(Request $Request)
    {
    	Colors::create([
    		'colors_name'=>$Request->colors_name,
            'created_at'=>Carbon::now('Asia/Ho_Chi_Minh')
    	]);
    	return redirect()->route('ListColors');
    }
    //ListColors
    public function ListColors()
    {
    	$ViewColors = Colors::all();
    	return view('backend.ListColors',['ViewColors'=> $ViewColors]);
    }
    //EditColors
    public function EditColors($colors_id)
    {
    	$ViewColors = Colors::where(['colors_id'=>$colors_id])->first();
    	return view('backend.EditColors',['ViewColors'=>$ViewColors]);
    }
    public function UpdateColors($colors_id, Request $Request)
    {
    	Colors::where(['colors_id'=>$colors_id])->update([
    		'colors_name'=>$Request->colors_name,
            'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')
    	]);
    	return redirect()->route('ListColors');
    }
    //DeleteColors
    public function DeleteColors($colors_id)
    {
    	Colors::where(['colors_id'=>$colors_id])->delete();
    	return redirect()->route('ListColors');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Controllers;
use App\User;
use Auth;

class AccountController extends Controller
{
	//LoginAd
    public function LoginAd()
    {
    	return view('backend.Login');
    }
    public function PostLoginAd(Request $Request)
    {
    	
    	if (Auth::attempt($Request->only('email','password'),$Request->remember)) {
    		return redirect()->route('admin')->with('success','Đăng nhập thành công');
    	}else{
    		return redirect()->back()->with('error','Đăng nhập thất bại');
    	}
    }
    public function LogoutAd()
    {
        Auth::logout();
        return redirect('LoginAd');
    }
    /*public function setCookie(Request $Request)
    {
        if (isset($Request->remember)) {
           Cookie::queue(Cookie::make($Request->name, $Request->password, 10));
        }
    }
    public function getCookie(Request $Request)
    {
        $name = Cookie::get($Request->name);
        $password = Cookie::get($Request->password);
        return view('LoginAd',['name'=>$name,'password'=>$password]);
    }
    public function getCookie(Request $Request)
    {
        Cookie::queue(Cookie::forget($Request->name));
    }*/
    // RegisterAd
    public function RegisterAd()
    {
    	return view('backend.Register');
    }
    public function PostRegisterAd(Request $Request)
    {
    	$this->validate($Request,[
    		'acc_name'=> 'required|min:2',
    		'email'=>'required',
    		'password'=>'required|min:6'
    	],
    	[
    		'acc_name.required'=>'Không được trống Tên tài khoản',
    		'acc_name.min'=>'Tên không ngắn hơn 2 kí tự',
    		'email.required'=>'Email không đc rỗng',
    		'password.required'=>'Không đc rỗng password',
    		'password.min'=>'password không được ngắn hơn 6 kí tự'
    	]);
    	User::create([
    		'name'=>$Request->acc_name,
    		'email'=>$Request->email,
    		'password'=>bcrypt($Request->password),
    		'created_at'=>now()
    	]);
    	return redirect()->route('LoginAd')->with('success','Đăng kí thành công');
    }
}

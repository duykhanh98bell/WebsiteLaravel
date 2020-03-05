<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;


class MailController extends Controller
{
    public function get_contact()
    {
    	return view('home.contact');
    }
    public function post_contact(Request $Request)
    {
    	$data = [
    		'email'=>$Request->email,
    		'name'=>$Request->name,
    		'message'=>$Request->message
    	];
        /*dd($data);*/
    	$email = ['duykhanh98bell@gmail.com',$data['email']];
        // dd($email[1]);
    	/*dd($email);*/
    	Mail::send('home.mail',$data, function($message) use ($data, $email)
    	{
    		$message->from('duykhanh98bell@gmail.com');
    		$message->to($email[1],'cam on')->subject('cam on quy khach');
    	});
		
		return redirect()->route('get-contact')->with('success','thanksyou');
    }
}

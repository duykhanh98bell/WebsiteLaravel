<?php  
	namespace App\Http\Controllers;
	/**
	 * 
	 */
	class HomeController extends Controller
	{
		function index()
		{
			echo "Hello laravel framework";
		}
		function about()
		{
			$data = 'about here';
			return view('home/about',['data'=>$data]);
		}
		function main()
		{
			return view('layouts/main');
		}
		/*function product()
		{
			return view('home/product');
		}*/
		/*function productdetail ()
		{
			return view('home/productdetail');
		}*/
		/*function checkout()
		{
			return view('home/checkout');
		}*/
		/*function cart()
		{
			return view('home/cart');
		}*/
		function login()
		{
			return view('home/login');
		}
		function total()
		{
			return view('home/total');
		}
		function blog()
		{
			return view('home/blog');
		}
		function blogdetail()
		{
			return view('home/blogdetail');
		}
		function tracking()
		{
			return view('home/tracking');
		}
		function elements()
		{
			return view('home/elements');
		}
		/*function contact()
		{
			return view('home/contact');
		}*/

		public function admin()
			{
				return view('layouts/admin');
			}

	}
?>
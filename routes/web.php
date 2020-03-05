<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[
	'uses'=>'ShowController@welcome',
	'as'=>'home'
]);
/*route::get('/test',function(){
	return "Đây là laravel";
});*/
route::get('/hello',[
	'uses'=> 'HomeController@index',
	'as'=> 'home.index'
]);
route::get('/about',[
	'uses' => 'HomeController@about',
	'as' => 'home.about'
]);
route::get('/main',[
	'uses' => 'HomeController@main',
	'as' => 'home.main'
]);




route::get('/login',[
	'uses' => 'HomeController@login',
	'as' => 'home.login'
]);
route::get('/total',[
	'uses' => 'HomeController@total',
	'as' => 'home.total'
]);
route::get('/blog',[
	'uses' => 'HomeController@blog',
	'as' => 'home.blog'
]);
route::get('/blogdetail',[
	'uses' => 'HomeController@blogdetail',
	'as' => 'home.blogdetail'
]);
route::get('/tracking',[
	'uses' => 'HomeController@tracking',
	'as' => 'home.tracking'
]);
route::get('/elements',[
	'uses' => 'HomeController@elements',
	'as' => 'home.elements'
]);
/*route::get('/contact',[
	'uses' => 'HomeController@contact',
	'as' => 'home.contact'
]);*/


//-----------------------------------------------------------------------------
//admin

route::get('/admin',[
	'uses' => 'HomeController@admin',
	'as' => 'admin'
]);

//thêm danh mục
route::get('addCategory',[
	'uses'=>'CategoryController@addCategory',
	'as'=>'addCategory'
]);
route::post('addCategory',[
	'uses'=>'CategoryController@saveCategory',
	'as'=>'saveCategory'
]);
// hiển thị danh mục
route::get('listCategory',[
	'uses'=>'CategoryController@listCategory',
	'as'=>'listCategory'
]);
//sửa danh mục
route::get('editCategory/{cat_id}',[
	'uses'=>'CategoryController@editCategory',
	'as'=>'editCategory'
]);
route::post('editCategory/{cat_id}',[
	'uses'=>'CategoryController@updateCategory',
	'as'=>'updateCategory'
]);
// xóa danh mục
route::get('deleteCategory/{cat_id}',[
	'uses'=>'CategoryController@deleteCategory',
	'as'=>'deleteCategory'
]);
//---------------------------------------------------------------------------------

// Thêm Thương Brand
route::get('AddBrand',[
	'uses'=>'BrandController@AddBrand',
	'as'=>'AddBrand'
]);
route::post('AddBrand',[
	'uses'=>'BrandController@SaveBrand',
	'as'=>'SaveBrand'
]);
// Hiển thị danh sách thương hiệu
route::get('ListBrand',[
	'uses'=>'BrandController@ListBrand',
	'as'=>'ListBrand'
]);
//sửa thương hiệu
route::get('EditBrand/{brand_id}',[
	'uses'=>'BrandController@EditBrand',
	'as'=>'EditBrand'
]);
route::post('EditBrand/{brand_id}',[
	'uses'=>'BrandController@UpdateBrand',
	'as'=>'UpdateBrand'
]);
// xóa thương hiệu
route::get('DeleteBrand/{brand_id}',[
	'uses'=>'BrandController@DeleteBrand',
	'as'=>'DeleteBrand'
]);

//-----------------------------------------------------------------
//Thêm colors
route::get('AddColors',[
	'uses'=>'ColorsController@AddColors',
	'as'=>'AddColors'
]);
route::post('AddColors',[
	'uses'=>'ColorsController@SaveColors',
	'as'=>'SaveColors'
]);
//ListColors
route::get('ListColors',[
	'uses'=>'ColorsController@ListColors',
	'as'=>'ListColors'
]);
//EditColors
route::get('EditColors/{colors_id}',[
	'uses'=>'ColorsController@EditColors',
	'as'=>'EditColors'
]);
route::post('EditColors/{colors_id}',[
	'uses'=>'ColorsController@UpdateColors',
	'as'=>'UpdateColors'
]);
//DeleteColors
route::get('DeleteColors/{colors_id}',[
	'uses'=>'ColorsController@DeleteColors',
	'as'=>'DeleteColors'
]);

//----------------------------------------------------------------------
//AddSize
route::get('AddSize',[
	'uses'=>'SizeController@AddSize',
	'as'=>'AddSize'
]);
route::post('AddSize',[
	'uses'=>'SizeController@SaveSize',
	'as'=>'SaveSize'
]);
//ListSize
route::get('ListSize',[
	'uses'=>'SizeController@ListSize',
	'as'=>'ListSize'
]);
//EditSize
route::get('EditSize/{size_id}',[
	'uses'=>'SizeController@EditSize',
	'as'=>'EditSize'
]);
route::post('EditSize/{size_id}',[
	'uses'=>'SizeController@UpdateSize',
	'as'=>'UpdateSize'
]);
//DeleteSize
route::get('DeleteSize/{size_id}',[
	'uses'=>'SizeController@DeleteSize',
	'as'=>'DeleteSize'
]);

//-------------------------------------------------------------------
//AddStyle
route::get('AddStyle',[
	'uses'=>'StyleController@AddStyle',
	'as'=>'AddStyle'
]);
route::post('AddStyle',[
	'uses'=>'StyleController@SaveStyle',
	'as'=>'SaveStyle'
]);
//ListStyle
route::get('ListStyle',[
	'uses'=>'StyleController@ListStyle',
	'as'=>'ListStyle'
]);
//EditStyle
route::get('EditStyle/{style_id}',[
	'uses'=>'StyleController@EditStyle',
	'as'=>'EditStyle'
]);
route::post('EditStyle/{style_id}',[
	'uses'=>'StyleController@UpdateStyle',
	'as'=>'UpdateStyle'
]);
//DeleteStyle
route::get('DeleteStyle/{style_id}',[
	'uses'=>'StyleController@DeleteStyle',
	'as'=>'DeleteStyle'
]);
//------------------------------------------------------------------
//AddProduct
route::get('AddProduct',[
	'uses'=>'ProductController@AddProduct',
	'as'=>'AddProduct'
]);
route::post('AddProduct',[
	'uses'=>'ProductController@SaveProduct',
	'as'=>'SaveProduct'
]);
//ListProduct
route::get('ListProduct',[
	'uses'=>'ProductController@ListProduct',
	'as'=>'ListProduct'
]);
//EditProduct
route::get('EditProduct/{product_id}',[
	'uses'=>'ProductController@EditProduct',
	'as'=>'EditProduct'
]);
route::post('EditProduct/{product_id}',[
	'uses'=>'ProductController@UpdateProduct',
	'as'=>'UpdateProduct'
]);
//DeleteProduct
route::get('DeleteProduct/{product_id}',[
	'uses'=>'ProductController@DeleteProduct',
	'as'=>'DeleteProduct'
]);
//--------------------------------------------------------------
// Statistical
route::get('thongKe','StatisticalController@Statistical')->name('Statistical');
//--------------------------------------------------------------
// Login
route::get('LoginAd',[
	'uses' => 'AccountController@LoginAd',
	'as' => 'LoginAd'
]);
route::post('LoginAd',[
	'uses' => 'AccountController@PostLoginAd',
	'as' => 'PostLoginAd'
]);
route::get('LogoutAd',[
	'uses' => 'AccountController@LogoutAd',
	'as' => 'LogoutAd'
]);
// Register
route::get('RegisterAd',[
	'uses'=>'AccountController@RegisterAd',
	'as'=>'RegisterAd'
]);
route::post('RegisterAd',[
	'uses'=>'AccountController@PostRegisterAd',
	'as'=>'PostRegisterAd'
]);
/*route::get('setCookie',[
	'uses'=>'AccountController@setCookie',
	'as'=>'setCookie'
]);
route::get('getCookie',[
	'uses'=>'AccountController@getCookie',
	'as'=>'getCookie'
]);*/
//-------------------------------------------------------------------------
// show in frontend
// Show in shopcategory
route::get('/product', [
	'uses' => 'ShowController@product',
	'as' => 'home.product'
]);
route::get('product/{cateid}',[
	'uses'=>'ShowController@filterCategory',
	'as'=>'filterCategory'
]);
route::get('brand/{brand_id}',[
	'uses'=>'ShowController@filterBrand',
	'as'=>'filterBrand'
]);
route::get('colors/{colors_id}',[
	'uses'=>'ShowController@filterColors',
	'as'=>'filterColors'
]);
// show in productdetail
route::get('/productdetail/{proid}',[
	'uses' => 'ShowController@productdetail',
	'as' => 'home.productdetail'
]);
//--------------------------------------------------------------------------
// show list cart

route::get('addcart/{id}',[
	'uses'=>'CartController@addcart',
	'as'=>'addcart'
]);
route::get('cart',[
	'uses' => 'CartController@cart',
	'as' => 'home.cart'
]);
// update-cart
route::get('update-cart/{id?}/{quantity?}',[
	'uses' => 'CartController@update_cart',
	'as'=>'update-cart'
]);
//delete-cart
route::get('delete-cart/{id?}',[
	'uses'=>'CartController@delete_cart',
	'as'=>'delete-cart'
]);
//delete-all-cart
route::get('delete-all-cart',[
	'uses'=>'CartController@delete_all_cart',
	'as'=>'delete-all-cart'
]);
// checkout
route::get('/checkout',[
	'uses' => 'CheckoutController@checkout',
	'as' => 'home.checkout'
]);
route::post('/post-checkout',[
	'uses' => 'CheckoutController@post_checkout',
	'as' => 'post_checkout'
]);
//------------------------------------------------------
//mail
route::get('contact',[
	'uses'=>'MailController@get_contact',
	'as'=>'get-contact'
]);
route::post('contact',[
	'uses'=>'MailController@post_contact',
	'as'=>'post-contact'
]);
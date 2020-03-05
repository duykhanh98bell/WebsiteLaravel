<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdetails extends Model
{
    protected $table = "orderdetails";
    public $timestamp = false; // loại bỏ giờ
    protected $fillable = ['orderdetail_id','order_id','product_id','quantity','price','sale_off'];
    public function pro()
    {
    	return $this->hasOne('App\Product','orderdetail_id','product_id');
    }
}

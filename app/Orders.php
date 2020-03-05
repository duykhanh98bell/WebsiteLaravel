<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';
    protected $fillable = ['order_id','customer_id','total','status','note','created_at','updated_at'];
    public function detail()
    {
    	return $this->hasMany('App\Orderdetails','order_id','orderdetail_id');
    }
}

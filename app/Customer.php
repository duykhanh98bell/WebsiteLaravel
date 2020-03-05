<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = ['customer_id','name','email','address','phone','note','created_at','updated_at'];
    public function order()
    {
    	return $this->hasMany('App\Orders','customer_id', 'order_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = ['product_id','pro_name','cat_id','style_id','size_id','colors_id','brand_id','price','sale_off','images','description','status','created_at','updated_at'];
}

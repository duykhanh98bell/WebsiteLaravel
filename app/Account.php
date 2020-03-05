<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'account';
    protected $fillable = ['acc_id','acc_name','password','phone','email','address','created_at','updated_at'];
}

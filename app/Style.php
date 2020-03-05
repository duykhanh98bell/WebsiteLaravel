<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    protected $table = 'style';
    protected $fillable = ['style_id','style_name','created_at','updated_at'];
}

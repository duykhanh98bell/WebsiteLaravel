<?php

namespace App;


class Log 
{
    public $admin;
    public function __construct()
    {
    	$this->admin = session('acc');
    }
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class Post extends Model
{

	//use softDeletes;
	//protected $dates = ['deleted_at'];


    protected $fillable = ['title','body'];
    //do not Put Your ID because anybody can go to form and put the data into your id . so laravel protect your app from hacking.

    
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopUser extends Model
{
    //
    public $fillable=['name','password','email','shop_id','status'];
}

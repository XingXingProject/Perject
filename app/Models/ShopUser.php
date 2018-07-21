<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShopUser extends Model
{
    //
    public $fillable=['name','password','email','shop_id','status'];


    //连表shop_info
    ////通过商家人找商家 -对-
    public function shopInfo(){
        return $this->hasOne(ShopInfo::class,"id");
    }

//    //连表shopCate
//    public function shopCategory(){
//        return $this->belongsTo(ShopCategory::class,"shop_category_id");
//
//
//    }


}

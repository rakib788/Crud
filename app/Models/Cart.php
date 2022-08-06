<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function userInfo(){
        return $this->hasOne(User::class,'id','user_id');
    }
    public function users(){
        return $this->belongsTo(User::class);
    }
    public function productInfo(){
        return $this->hasOne(Product::class,'id','product_id');
    }
}

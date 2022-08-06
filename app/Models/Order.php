<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function users(){
        return $this->hasOne(User::class,'id','user_id');
    }
    public function products(){
        return $this->hasOne(Product::class,'id','product_id');
    }
}


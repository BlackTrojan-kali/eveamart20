<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Mart;
use App\Models\User;

class offer extends Model
{
    use HasFactory;
    public function Product(){
        return $this->hasOne(Product::class,"id_product");
    }
    public function Mart (){
        return $this->belongsTo(Mart::class,"id_mart");
    }
    public function User(){
        return $this->hasMany(User::class,"id_user");
    }
}

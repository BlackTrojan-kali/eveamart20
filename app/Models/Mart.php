<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;
use App\Models\offer;
class Mart extends Model
{
    use HasFactory;
    public function User(){
        return   $this->belongsToMany(User::class);
    }
    public function Product(){
        return $this->hasMany(Product::class,"id_mart");
    }
    public function Mart(){

        return $this->hasMany(offer::class,"id_mart");
    }
    
}

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
   
    public function idruledByUser(){
        return $this->belongsToMany(Mart::class,"assignations","id_user","id_mart")->withPivot("value")->withTimestamps();
    }
    public function Product(){
        return $this->hasMany(Product::class,"id_mart");
    }
    public function isFollowed(){
        return $this->belongsToMany(User::class,"followers","id_mart","id_user")->withPivot("value")->withTimestamps();
    }
    
}

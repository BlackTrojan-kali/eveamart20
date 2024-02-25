<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;
use App\Models\Product;
use App\Models\User;
use App\Models\Offer;
class Mart extends Model
{
    use HasFactory;
    public function isManagedBy(){
        return $this->belongsToMany(Admin::class,"admins_marts","id_users","id_mart");
    }    
    public function hasProducts(){
        return $this->hasMany(Product::class,"id_mart");
    }
    public function isFollowedBy(){
        return $this->belongsToMany(User::class,"followers","id_user","id_mart")->withPivot("value")->withTimestamps();
    }
    public function generatedOffers(){
        return $this->hasMany(Offer::class,"id_mart");
    }
 }

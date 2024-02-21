<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use APP\Models\Mart;
use APP\Models\Category;
use App\Models\offer;
use App\Models\User;

class Product extends Model
{
    use HasFactory;
    public function isFromMart(){
        return $this->belongsTo(Mart::class,"id_mart");
    }
    public function isFromCategory(){
        return $this->belongsTo(Category::class,"id_category");
    }
    public function isInOffer(){
        return $this->belongsToMany(offer::class,"offers","id_product","id_mart");
    }
    public function isLiked(){
        return $this->belongsToMany(User::class,"likes","id_user","id_product")->withPivot("value")->withTimestamps();
    }
    public function idCommented(){
        return $this->belongsToMany(User::class,"comments","id_user","id_product")->withPivot("message")->withTimestamps();
    }
}

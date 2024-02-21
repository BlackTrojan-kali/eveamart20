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
    public function Mart(){
        return $this->belongsTo(Mart::class,"id_mart");
    }
    public function Category(){
        return $this->belongsTo(Category::class,"id_category");
    }
    public function Offer(){
        return $this->belongsToMany(offer::class,"id_product");
    }
    public function User(){
        return $this->belongsToMany(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mart;
use App\Models\Blog;

class Admin extends Model
{
    use HasFactory;
    
    protected $fillable = ['username','email','password'];
    protected $hidden = ['password','remember_token'];
    public function postedBlogs(){
        return $this->hasMany(Blog::class,"id_admin");
    }
    public function isRulingMart(){
        return $this->belongsToMany(Mart::class,"id_mart","id_admin");
    }
}

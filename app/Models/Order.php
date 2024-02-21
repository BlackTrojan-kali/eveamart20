<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Order extends Model
{
    use HasFactory;

    public function User(){
       return $this->belongsTo(User::class,"id_admin");
    }
}

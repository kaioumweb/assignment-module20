<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
        'description',
        'price',
        'stock',
        'image',
    ];
    
    //hidden
    //protected $hidden=['description', 'created_at', 'updated_at'];
   // protected $visible=['name', 'price'];
   //protected $fillable=['name', 'price'];
   //protected $attributes=['otp'=>'0'];
}

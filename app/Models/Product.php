<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'detail',
        'price',
        'stock',
        'discount'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}

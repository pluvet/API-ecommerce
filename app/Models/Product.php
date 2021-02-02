<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'detail',
        'price',
        'stock',
        'discount'
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function reviews(){

        return $this->hasMany(Review::class);
    }


}

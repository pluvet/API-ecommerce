<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'product_id',
        'customer',
        'review',
        'star'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function product(){

        return $this->belongsTo(Product::class);
    }

}

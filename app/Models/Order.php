<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'preference_response' => 'array'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity', 'price')->withTimestamps();
    }

    public function getTotalAttribute()
    {
        return $this->products->pluck('pivot')->sum(function($product) {
            return $product->quantity * $product->price;
        });
    }
}

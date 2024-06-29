<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getPriceAttribute($value)
    {
        return number_format($value, 2);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}

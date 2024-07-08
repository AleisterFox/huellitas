<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LadingPageConfig extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function getInstance(): LadingPageConfig
    {
        return self::first();
    }

    public function getAdoptionCount()
    {
        return $this->adopted_pets_count;
    }
}

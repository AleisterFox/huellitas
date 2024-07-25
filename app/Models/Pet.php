<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function raza()
    {
        return $this->belongsTo(PetCategory::class, 'breed');
    }

    public function status()
    {
        return $this->status == 1 ? 'Disponible' : 'Adoptado';
    }

    public static function getSizes()
    {
        return collect([
            'Pequeño',
            'Mediano',
            'Grande'
        ]);
    }
}

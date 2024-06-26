<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetAdoptionForm extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function hasPet()
    {
        return $this->has_pet ? 'Sí' : 'No';
    }

    public function oldParents()
    {
        return $this->old_parents ? 'Sí' : 'No';
    }

    public function kids()
    {
        return $this->kids ? 'Sí' : 'No';
    }

    public function hasAnyOtherPet()
    {
        return $this->has_any_other_pet ? 'Sí' : 'No';
    }

    public function hasVet()
    {
        return $this->has_vet ? 'Sí' : 'No';
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetAdoptionForm;

class PetAdoptionFormController extends Controller
{
    public function index()
    {
        return view('admin.pet-adoption-form.index', [
            'forms' => PetAdoptionForm::all()
        ]);
    }

    public function show(PetAdoptionForm $petAdoptionForm)
    {
        return view('admin.pet-adoption-form.show', [
            'form' => $petAdoptionForm
        ]);
    }
    public function destroy(PetAdoptionForm $petAdoptionForm)
    {
        $petAdoptionForm->delete();
        return redirect()->route('pet-adoption-form.index');
    }
}

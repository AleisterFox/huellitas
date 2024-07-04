<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function index()
    {
        return view('admin.contacts.index', [
            'contacts' => ContactForm::all()
        ]);
    }

    public function store(Request $request)
    {
        ContactForm::create($request->all());

        return redirect()->back()->with('message', 'Formulario enviado correctamente');
    }

    public function destroy($contact)
    {
        $contact = ContactForm::find($contact);

        $contact->delete();

        return redirect()->back()->with('message', 'Formulario eliminado correctamente');
    }
}

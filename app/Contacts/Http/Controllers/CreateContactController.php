<?php

namespace App\Contacts\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class CreateContactController extends Controller {

    public function get() {
        return view('contacts.create');
    }

    public function createContact(Request $request) {
        $payload = $request->validate([
            'name' => ['required', 'string', 'min:5', 'max:255'],
            'contact' => ['required', 'string', 'size:9', 'unique:contacts,contact'],
            'email' => ['required', 'email', 'unique:contacts,email']
        ]);

        $contact = Contact::create([
            'name' => $payload['name'],
            'contact' => $payload['contact'],
            'email' => $payload['email']
        ]);

        if ($contact) {
            return redirect()->route('contacts.view', [ 'contact' => $contact->contact ]);
        }

        return back()->withErrors([
            'create' => 'Houve um erro inesperado ao atualizar o contato.'
        ]);
    }
}

?>

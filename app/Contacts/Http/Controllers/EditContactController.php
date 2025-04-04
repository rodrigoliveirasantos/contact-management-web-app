<?php

namespace App\Contacts\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EditContactController extends Controller {

    public function get(string $contact) {
        $contact = $this->assertContact($contact);
        return view('contacts.edit', [
            'contact' => $contact
        ]);
    }

    public function updateContact(string $contact, Request $request) {
        $contact = $this->assertContact($contact);

        $payload = $request->validate([
            'name' => ['required', 'string', 'min:5', 'max:255'],
            'contact' => ['required', 'string', 'size:9', Rule::unique('contacts', 'contact')->ignore($contact)],
            'email' => ['required', 'email', Rule::unique('contacts', 'email')->ignore($contact)]
        ]);

        $success = $contact->update([
            'name' => $payload['name'],
            'contact' => $payload['contact'],
            'email' => $payload['email']
        ]);

        if ($success) {
            return redirect()->route('contacts.view', [ 'contact' => $contact->contact ]);
        }

        return back()->withErrors([
            'update' => 'Houve um erro inesperado ao atualizar o contato.'
        ]);
    }

    /**
     * Retorna o contato ou aborta com um erro 404.
     */
    public function assertContact(string $contact): Contact {
        $contact = $this->getContact($contact);
        if (!$contact) {
            abort(404);
        }
        return $contact;
    }

    public function getContact(string $contact): Contact|null {
        return Contact::withContact($contact)->first();
    }


}

?>

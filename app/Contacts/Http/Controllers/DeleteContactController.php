<?php

namespace App\Contacts\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class DeleteContactController extends Controller {

    public function __invoke(string $contact, Request $request) {
        $contact = $this->assertContact($contact);

        if ($contact->delete()) {
            return redirect()->route('contacts.list');
        }

        return back()->withErrors([
            'delete' => 'Houve um erro inesperado ao apagar o contato.'
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

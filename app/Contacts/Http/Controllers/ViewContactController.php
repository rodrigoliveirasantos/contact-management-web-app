<?php

namespace App\Contacts\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ViewContactController extends Controller {

    public function __invoke(string $contact) {
        $contact = $this->getContact($contact);

        if (!$contact) {
            return abort(404);
        }

        return view('contacts.view', [
            'contact' => $contact
        ]);
    }

    public function getContact(string $contact): Contact|null {
        return Contact::withContact($contact)->first();
    }

}

?>

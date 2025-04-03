<?php

namespace App\Contacts\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ListContactsController extends Controller {

    public function __invoke() {
        return view('contacts.list', [
            'contacts' => $this->getContacts()->sortBy('name')
        ]);
    }

    public function getContacts() {
        return Contact::all()->setHidden([ 'id' ]);
    }

}

?>

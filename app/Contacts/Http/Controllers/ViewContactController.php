<?php

namespace App\Contacts\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ViewContactController extends Controller {

    public function __invoke() {
        return view('index', [
            'contacts' => $this->getContacts()
        ]);
    }

    public function getContacts() {
        return Contact::all()->setHidden([ 'id' ]);
    }

}

?>

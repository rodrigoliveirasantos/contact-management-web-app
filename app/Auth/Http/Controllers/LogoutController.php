<?php

namespace App\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller {

    public function __invoke(Request $request) {
        $user = $request->user();
        abort_if(is_null($user), 400);
        auth()->logout();
        session()->flush();
        return redirect()->route('contacts.list');
    }

}

?>

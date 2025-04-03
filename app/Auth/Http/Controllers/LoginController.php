<?php

namespace App\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {

    public function get() {
        return view('auth.login');
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            'remember' => ['nullable']
        ]);

        $email = $credentials['email'];
        $password = $credentials['password'];
        $remember = (bool) ($credentials['remember'] ?? false);

        if (Auth::attempt([
            'email' => $email,
            'password' => $password
        ], $remember)) {
            $request->session()->regenerate();
            return redirect()->intended(route('contacts.list'));
        }
        return back()->withErrors([
            'email' => 'As credenciais não pertencem a um usuário do sistema.',
        ])->onlyInput('email');
    }

}

?>

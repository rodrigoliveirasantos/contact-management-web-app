<?php

use App\Auth\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('auth/login', [ LoginController::class, 'get' ])->name('login');
Route::post('auth/login', [ LoginController::class, 'authenticate' ]);

?>

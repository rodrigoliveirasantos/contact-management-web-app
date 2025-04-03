<?php

use App\Contacts\Http\Controllers\ListContactsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
include __DIR__ . '/../app/Auth/routes.php';

Route::get('/', ListContactsController::class)->name('contacts.list');

Route::middleware('auth')->group(function () {
    Route::get('');
});

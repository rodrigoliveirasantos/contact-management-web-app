<?php

use App\Contacts\Http\Controllers\CreateContactController;
use App\Contacts\Http\Controllers\DeleteContactController;
use App\Contacts\Http\Controllers\EditContactController;
use App\Contacts\Http\Controllers\ListContactsController;
use App\Contacts\Http\Controllers\ViewContactController;
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

Route::name('contacts.list')->get('/', ListContactsController::class);

Route::middleware('auth')->group(function () {
    Route::name('contacts.create')->get('/create', [CreateContactController::class, 'get']);
    Route::post('/create', [CreateContactController::class, 'createContact']);

    Route::name('contacts.view')->get('/{contact}', ViewContactController::class);

    Route::name('contacts.edit')->get('/{contact}/edit', [EditContactController::class, 'get']);
    Route::post('/{contact}/edit', [EditContactController::class, 'updateContact']);

    /* Usar POST permite chamar o delete em um formulário, sem a necessidade de fetch */
    Route::name('contacts.delete')->post('/{contact}', DeleteContactController::class);
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [MessageController::class, 'showAll']);

Route::get('/message/{message}', [MessageController::class, 'show']);

Route::get('/create-message', [MessageController::class, 'create']);

Route::post('/message', [MessageController::class, 'store'])->name('message.store');

Route::get('/edit-message/{message}', [MessageController::class, 'edit']);

Route::put('/message/{id}', [MessageController::class, 'update'])->name('message.update');

Route::delete('/delete-message', [MessageController::class, 'delete'])->name('message.delete');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/users/create', function () {
    return view('users.create');
})->name('users.create');

Route::post('/users/store', [UserController::class, 'store'])->name('users.store');

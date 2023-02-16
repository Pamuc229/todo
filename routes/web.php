<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return redirect('/todo');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/registration', function () {
    if (Auth::check()) {
        return redirect('todo');
    }
    return view('registration');
})->name('registration');

Route::post('/registration', [RegisterController::class, 'save']);

Route::post('/login', [LoginController::class, 'login']);

Route::get('/todo', [PostController::class, 'index'])->name('index');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::post('/todo', [PostController::class, 'store'])->name('store');

Route::get('destroy/{id}', [PostController::class, 'destroy'])->name('destroy');

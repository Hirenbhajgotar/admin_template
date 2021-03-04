<?php

use Illuminate\Support\Facades\Route;

// home route
Route::get('/', function () {
    return view('welcome');
});
// logout route
Route::get('/logout', function() {
    auth()->logout();
    return redirect("/login");
});
// admin dashboard route
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard2');
})->name('dashboard');

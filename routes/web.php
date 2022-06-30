<?php

use App\Http\Livewire\HomeComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeComponent::class)->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

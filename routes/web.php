<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/home', fn() => Inertia::render('Home'))
    ->middleware(['auth', 'verified'])
    ->name('home'); // This name is what Ziggy uses

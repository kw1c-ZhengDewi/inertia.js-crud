<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

// Website Pages
Route::get('/', fn() => Inertia::render('Home'))->name('home');
Route::get('/about', fn() => Inertia::render('About'))->name('about');
Route::get('/contact', fn() => Inertia::render('Contact'))->name('contact');
Route::get('/blog', fn() => Inertia::render('Blog'))->name('blog');
Route::get('/resume', fn() => Inertia::render('Resume'))->name('resume');

// Admin (in Admin folder)
Route::prefix('admin')->group(function () {
    // Default Navigation
    Route::get('/dashboard', fn() => Inertia::render('Admin/Dashboard'))->name(name: 'admin.dashboard');
    Route::get('/users', fn() => Inertia::render('Admin/Users'))->name('admin.users');
    Route::get('/settings', fn() => Inertia::render('Admin/Settings'))->name('admin.settings');

    // Blog Functions
    Route::get('/show-blog', fn() => Inertia::render('Admin/Blogs/ShowBlog'))->name('admin.show-blog');
    Route::get('/create-blog', fn() => Inertia::render('Admin/Blogs/CreateBlog'))->name('admin.create-blog');
    Route::get('/edit-blog', fn() => Inertia::render('Admin/Blogs/EditBlog'))->name('admin.edit-blog');
});

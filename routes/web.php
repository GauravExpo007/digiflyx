<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function () {
    return view('components.about.about-us');
})->name('about-us');

Route::get('/blogs', function () {
    return view('components.blogs.blog');
})->name('blogs');

Route::get('/contact-us', function () {
    return view('components.contact-us.contact');
})->name('contact-us');

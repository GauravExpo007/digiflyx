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

Route::get('/important-5-recent-google-updates-for-2024', function () {
    return view('components.blog-inside-page.inside-page');
})->name('blogs-inside');

Route::get('/contact-us', function () {
    return view('components.contact-us.contact');
})->name('contact-us');

Route::get('/work', function () {
    return view('components.works.work');
})->name('work');

// services-routes 

// digital-marketing-section
Route::get('/digital-marketing', function () {
    return view('components.services.digital-marketing.digital-marketing');
})->name('digital-marketing');

Route::get('/search-engine-optimization', function () {
    return view('components.services.seo.seo');
})->name('seo');

Route::get('/pay-per-click-ppc', function () {
    return view('components.services.ppc.ppc');
})->name('ppc');

Route::get('/content-creation', function () {
    return view('components.services.content-creation.content-creation');
})->name('content-creation');

Route::get('/email-marketing', function () {
    return view('components.services.email-marketing.email-marketing');
})->name('email-marketing');


// web-design-section
Route::get('/web-design', function () {
    return view('components.services.web-design.web-design');
})->name('web-design');

Route::get('/custom-website-design', function () {
    return view('components.services.custom-website-design.custom-website-design');
})->name('custom-website-design');

Route::get('/wordpress-website-design', function () {
    return view('components.services.wordpress-website-design.wordpress-website-design');
})->name('wordpress-website-design');

Route::get('/website-maintenance', function () {
    return view('components.services.website-maintenance.website-maintenance');
})->name('website-maintenance');

Route::get('/website-hosting', function () {
    return view('components.services.hosting-service.website-hosting');
})->name('website-hosting');


// social-media-section
Route::get('/social-media', function () {
    return view('components.services.social-media.social-media');
})->name('social-media');

Route::get('/social-media-management', function () {
    return view('components.services.social-media-management.social-media-management');
})->name('social-media-management');

Route::get('/social-media-advertising', function () {
    return view('components.services.social-media-advertising.social-media-advertising');
})->name('social-media-advertising');

Route::get('/social-media-brand-management', function () {
    return view('components.services.brand-management.brand-management');
})->name('brand-management');

//Other-services-section
Route::get('/e-commerce', function () {
    return view('components.services.e-commerce.e-commerce');
})->name('e-commerce');

Route::get('/google-analytics-service', function () {
    return view('components.services.google-analytics-service.google-analytics-service');
})->name('analytics-service');

Route::get('/mobile-app-development', function () {
    return view('components.services.mobile-app-development.mobile-app-development');
})->name('app-development');

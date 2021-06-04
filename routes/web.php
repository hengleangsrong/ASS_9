<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
   
});

Route::get('', function () {
    return view('dashboard.home');
})->name('dashboard.home');

Route::get('/about', function () {
    return view('auth.about');
})->name('auth.about');

Route::get('/contact', function () {
    return view('contact.contact');
})->name('contact.contact');

Route::get('/pricing', function () {
    return view('pricing.pricing');
})->name('pricing.pricing');

Route::get('/services', function () {
    return view('services.services');
})->name('services.services');

Route::get('/portfolio', function () {
    return view('portfolio.portfolio');
})->name('portfolio.portfolio');

Route::get('/blog', function () {
    return view('blog.blog');
})->name('blog.blog');

Route::get('/team', function () {
    return view('team.team');
})->name('team.team');

Route::get('/testimonials', function () {
    return view('testimonials.testimonials');
})->name('testimonials.testimonials');
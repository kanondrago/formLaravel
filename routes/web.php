<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;




Route::view('/', 'welcome') -> name('home');
Route::view('/contact', 'contact') -> name('contact');
Route::get('/blog', [PostController::class, 'index']) -> name('posts.index');
Route::get('/blog/create', [PostController::class, 'create']) -> name('posts.create');
Route::post('/blog',[PostController::class, 'store']) -> name('posts.store');
Route::get('/blog/{post}', [PostController::class, 'show']) -> name('posts.show');
Route::view('/about', 'about') -> name('about');

// Route::post('');
// Route::patch('');
// Route::put('');
// Route::delete('');
// Route::options('');

// Route::match('put', 'patch', '/', function(){
//     //
// });

// Route::options('/', function() {
//     //
// });


// Route::get('/', function () {
//     return view('welcome');
// });

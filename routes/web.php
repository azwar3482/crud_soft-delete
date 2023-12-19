<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});




Route::resource('posts', PostController::class);


Route::get('posts/{id}/restore', [PostController::class, 'restore'])->name('posts.restore');
// untuk mengembalikan file
Route::get('/post/restore/{id}', 'PostController@restore');

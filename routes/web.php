<?php

use Illuminate\Support\Facades\Route;
use App\Models\Author;
use App\Models\Book;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('book',BookController::class);
Route::resource('author',AuthorController::class);
Route::resource('posts',PostController::class);
Route::get('/authors/{author}/books/{book:book_name}',function (Author $author, Book $book){
    return$book;
})->scopeBindings();

<?php

use GuzzleHttp\Psr7\Uri;
use  App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//      return view('welcome');
//      });
Route::get('/welcome', [BookController::class, 'welcome']);
 
Route::get('/books', [BookController::class, 'index'])->name(name:'books.index');
Route::get('/books/{bookid}/show',[BookController::class,'show'])->name(name:'books.show');
Route::get('/books/create',[BookController::class,'create'])->name(name:'books.create');
Route::post('/books',[BookController::class,'store'])->name(name:'books.store');
Route::get('books/{bookId}/edit',[BookController::class,'edit'])->name(name:'books.edit');
Route::post('books/update',[BookController::class,'update'])->name(name:'books.update');
Route::post('books/delete',[BookController::class,'destroy'])->name(name:'books.destroy');
 







<?php

use App\Models\Book;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;

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

Route::get('/', [AccueilController::class ,'index']);

Route::get('create_bokk/', [AccueilController::class ,'create'])->middleware(['auth'])->name('book.create');
Route::post('create_book/', [AccueilController::class ,'store'])->middleware(['auth'])->name('book.store');

Route::get('/dashboard', function () {
    $books= Book::all();
    return view('dashboard',compact('books'));
})->middleware(['auth'])->name('dashboard');
Route::get('/test', function () {
    return view('test');
 });
require __DIR__.'/auth.php';

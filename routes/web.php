<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PenulisController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/siswa', [SiswaController::class, 'siswa']);

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');

Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');


Route::get('/penuliss', [PenulisController::class, 'index'])->name('penuliss.index');
Route::get('/penuliss/create', [PenulisController::class, 'create'])->name('penuliss.create');
Route::post('/penuliss', [PenulisController::class, 'store'])->name('penuliss.store');
Route::get('/penuliss/{penulis}', [PenulisController::class, 'show'])->name('penuliss.show');

Route::get('/penuliss/{penulis}/edit', [PenulisController::class, 'edit'])->name('penuliss.edit');
Route::put('/penuliss/{penulis}', [PenulisController::class, 'update'])->name('penuliss.update');
Route::delete('/penuliss/{penulis}', [PenulisController::class, 'destroy'])->name('penuliss.destroy');

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryCreateController;
use App\Http\Controllers\CategoryDeleteController;
use App\Http\Controllers\CategoryEditController;
use App\Http\Controllers\CategoryIndexController;
use App\Http\Controllers\CategoryShowController;
use App\Http\Controllers\CategoryStoreController;
use App\Http\Controllers\CategoryUpdateController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemDeleteController;
use App\Http\Controllers\ItemEditController;
use App\Http\Controllers\ItemShowController;
use App\Http\Controllers\ItemStoreController;
use App\Http\Controllers\ItemUpdateController;
use App\Http\Controllers\ItemIndexController;
use App\Http\Controllers\ItemCreateController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Route::resource('items', ItemController::class);

Route::get('/items', ItemIndexController::class)->name('items.index');
Route::get('/items/create', ItemCreateController::class)->name('items.create');
Route::post('/items/store', ItemStoreController::class)->name('items.store');
Route::get('/items/{item}/show', ItemShowController::class)->name('items.shows');
Route::get('/items/{item}/edit', ItemEditController::class)->name('items.edits');
Route::put('/items/{item}/update', ItemUpdateController::class)->name('items.updates');
Route::delete('/items/{item}/delete', ItemDeleteController::class)->name('items.destroys');


//Route::resource('category', CategoryController::class);

Route::get('/category', categoryIndexController::class)->name('category.index');
Route::get('/category/create', categoryCreateController::class)->name('category.create');
Route::post('/category/store', categoryStoreController::class)->name('category.store');
Route::get('/category/{category}/show', categoryShowController::class)->name('category.show');
Route::get('/category/{category}/edit', categoryEditController::class)->name('category.edit');
Route::put('/category/{category}/update', CategoryUpdateController::class)->name('category.update');
Route::delete('/category/{category}/delete', categoryDeleteController::class)->name('category.destroy');

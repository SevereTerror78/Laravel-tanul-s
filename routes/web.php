<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TagsController;
use Illuminate\Support\Facades\Route;

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

    Route::post('/aitools', [\App\Http\Controllers\AitoolsController::class, 'store'])->name('aitools.store');
    Route::get('/aitools/create', [\App\Http\Controllers\AitoolsController::class, 'create'])->name('aitools.create');
    Route::get('/aitools/{aitools}/edit', [\App\Http\Controllers\AitoolsController::class, 'edit'])->name('aitools.edit');
    Route::patch('/aitools/{aitools}', [\App\Http\Controllers\AitoolsController::class, 'update'])->name('aitools.update');
    Route::delete('/aitools/{aitools}', [\App\Http\Controllers\AitoolsController::class, 'destroy'])->name('aitools.destroy');

    Route::post('/categories', [\App\Http\Controllers\CategoriesController::class, 'store'])->name('categories.store');
    Route::get('/categories/create', [\App\Http\Controllers\CategoriesController::class, 'create'])->name('categories.create');
    Route::get('/categories/{aitools}/edit', [\App\Http\Controllers\CategoriesController::class, 'edit'])->name('categories.edit');
    Route::patch('/categories/{aitools}', [\App\Http\Controllers\AitoolsController::class, 'update'])->name('aitools.update');
    Route::delete('/categories/{aitools}', [\App\Http\Controllers\CategoriesController::class, 'destroy'])->name('categories.destroy');

    Route::post('/tags', [\App\Http\Controllers\TagsController::class, 'store'])->name('tags.store');
    Route::get('/tags/create', [\App\Http\Controllers\TagsController::class, 'create'])->name('tags.create');
    Route::get('/tags/{aitools}/edit', [\App\Http\Controllers\TagsController::class, 'edit'])->name('tags.edit');
    Route::patch('/tags/{aitools}', [\App\Http\Controllers\AitoolsController::class, 'update'])->name('aitools.update');
    Route::delete('/tags/{aitools}', [\App\Http\Controllers\TagsController::class, 'destroy'])->name('tags.destroy');
});


require __DIR__.'/auth.php';

Route::get('/aitools', [\App\Http\Controllers\AitoolsController::class, 'index'])->name('aitools.index');
Route::get('/aitools/{id}', [\App\Http\Controllers\AitoolsController::class, 'index'])->name('aitools.show');

Route::get('/categories', [\App\Http\Controllers\CategoriesController::class, 'index'])->name('categories.index');
Route::get('/categories/{id}', [\App\Http\Controllers\CategoriesController::class, 'index'])->name('categories.show');

Route::get('/tags', [\App\Http\Controllers\TagsController::class, 'index'])->name('tags.index');
Route::get('/tags/{id}', [\App\Http\Controllers\TagsController::class, 'index'])->name('tags.show');

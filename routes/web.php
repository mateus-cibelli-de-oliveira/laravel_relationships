<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OneToOneController;
use App\Http\Controllers\OneToManyController;

/**
 * One tho one
 */

Route::get('/one-to-one', [OneToOneController::class, 'OneToOne'])->name('one-to-one');
Route::get('/one-to-one-inverse', [OneToOneController::class, 'OneToOneInverse'])->name('one-to-one-inverse');
Route::get('/one-to-one-insert', [OneToOneController::class, 'OneToOneInsert'])->name('one-to-one-insert');

/**
 * One tho many and many tho one
 */

Route::get('/one-to-many', [OneToManyController::class, 'OneToMany'])->name('one-to-many');
Route::get('/many-to-one', [OneToManyController::class, 'ManyToOne'])->name('many-to-one');

Route::get('/one-to-many-two', [OneToManyController::class, 'OneToManyTwo'])->name('one-to-many-two');

/**
 * One tho many insert
 */

Route::get('/one-to-many-insert', [OneToManyController::class, 'OneToManyInsert'])->name('one-to-many-insert');

// Outra forma de fazer esse INSERT
Route::get('/one-to-many-insert-two', [OneToManyController::class, 'OneToManyInsertTwo'])->name('one-to-many-insert-two');

/**
 * Has many through
 * Você pode criar outro controller. 
 * Nesta aula irá ser usado o mesmo controller da aula 11.
 */

Route::get('/has-many-through', [OneToManyController::class, 'HasManyThrough'])->name('has-many-through');


// Route::get('/', function () {
//     return view('welcome');
// });

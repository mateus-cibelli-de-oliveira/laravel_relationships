<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OneToOneController;
use App\Http\Controllers\OneToManyController;
use App\Http\Controllers\ManyToManyController;
use App\Http\Controllers\PolymorphicController;

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

/**
 * Many to Many
 */

Route::get('/many-to-many', [ManyToManyController::class, 'ManyToMany'])->name('many-to-many');
Route::get('/many-to-many-inverse', [ManyToManyController::class, 'ManyToManyInverse'])->name('many-to-many-inverse');

/**
 * Many to Many Insert
 */

Route::get('/many-to-many-insert', [ManyToManyController::class, 'ManyToManyInsert'])->name('many-to-many-insert');

/**
 * Relaction Polymorphic
 */

Route::get('/polymorphics', [PolymorphicController::class, 'Polymorphic'])->name('polymorphics');
Route::get('/polymorphics-insert', [PolymorphicController::class, 'PolymorphicInsert'])->name('polymorphics-insert');


// Route::get('/', function () {
//     return view('welcome');
// });

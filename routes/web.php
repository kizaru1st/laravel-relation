<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
Route::controller(StudentController::class)->group(function() {
    // Main Functions ----------------------------------
    Route::get('/students', 'index')->name('students.index');
    Route::get('/students/create', 'create')->name('students.create');
    Route::post('/students', 'store')->name('students.store');
    Route::get('/students/{student}/edit', 'edit')->name('students.edit');
    Route::put('/students/{student}', 'update');
    Route::delete('/students/{student}', 'destroy');
    // Custom Functions --------------------------------
    Route::get('students/{student}/details', 'addDetails');
    Route::put('/students/{student}/updateDetails', 'storeOrUpdateDetails');
});

Route::prefix('admin')->group(function() {
   Route::resource('category', CategoryController::class);
   Route::resource('product', ProductController::class);
});
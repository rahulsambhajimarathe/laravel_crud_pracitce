<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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


    Route::get('/home', [StudentController::class, "student"]);
    Route::post('/home', [StudentController::class, "student_save"]);
    Route::get('/student_show', [StudentController::class, 'student_show']);
    Route::get('/student_show/delete/{id}', [StudentController::class, 'student_delete']);
    Route::get('/student_show/edit/{id}', [StudentController::class, 'student_edit']);
    Route::post('/student_show/edit/{id}', [StudentController::class, 'student_edit_update']);
});

require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudController;
use App\Http\Controllers\EnseiController;
use App\Http\Controllers\ProfileController;

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

Route::controller(App\Http\Controllers\StudentController::class)->group(function () {
    
    Route::get('etudiant', 'index');
    Route::get('/add-etudiant', 'create');
    Route::post('/add-etudiant', 'store');
    Route::get('/modifier-etudiant/{students_id}', 'edit');
    Route::put('/update-etudiant/{students_id}', 'update');
    Route::delete('/delete-etudiant/{students_id}', 'destroy');
}); 

Route::controller(EnseiController::class)->group(function () {
    Route::get('/add-enseignant','create');
    Route::post('/add-enseignant','store');
    // add-enseignant
    Route::get('enseignants', 'index');
    Route::get('/modifier-enseignant/{enseignants_id}', 'edit');
    Route::put('/update-enseignant/{enseignants_id}', 'update');
    Route::delete('/delete-enseignant/{enseignants_id}', 'destroy');
   
});
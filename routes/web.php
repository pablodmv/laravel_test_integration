<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ImgLocationController;
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

Route::get('/', [indexController::class, 'index'])->name('index');

// Ruta para mostrar el formulario de creación
Route::get('/img_location/create', [ImgLocationController::class, 'create'])->name('img_location.create');

// Ruta para almacenar el registro enviado desde el formulario
Route::post('/img_location', [ImgLocationController::class, 'store'])->name('img_location.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth')->group(function () {
   // Ruta para mostrar el formulario de creación
Route::get('/img_location/create', [ImgLocationController::class, 'create'])->name('img_location.create');

// Ruta para almacenar el registro enviado desde el formulario
Route::post('/img_location', [ImgLocationController::class, 'store'])->name('img_location.store');

});

require __DIR__.'/auth.php';

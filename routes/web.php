<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompartirController;
use App\Http\Controllers\DiagnosticoController;
use App\Http\Controllers\EjecucionController;
use App\Http\Controllers\EntendimientoController;
use App\Http\Controllers\PlaneacionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/inicio', [AdminController::class, 'index'])->name('admin.index');
Route::get('/compartir', [CompartirController::class, 'compartir'])->name('admin.compartir');
Route::get('/diagnostico', [DiagnosticoController::class, 'diagnostico'])->name('admin.diagnostico');
Route::get('/ejecucion', [EjecucionController::class, 'ejecucion'])->name('admin.ejecucion');
Route::get('/entendimiento', [EntendimientoController::class, 'entendimiento'])->name('admin.entendimiento');
Route::get('/planeacion', [PlaneacionController::class, 'planeacion'])->name('admin.planeacion');

require __DIR__.'/auth.php';

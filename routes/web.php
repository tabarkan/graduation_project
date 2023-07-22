<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\HospitalsController;
use App\Http\Controllers\DiseasesController;

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


Route::get('/admin/dashboard', function () {
    return view('admin.doctors');
});

Route::get('/admin/add/doctor', [DoctorsController::class, 'index']);
Route::post('/admin/add/doctor', [DoctorsController::class, 'create'])->name('add.doctor');

Route::get('/admin/add/hospital',[HospitalsController::class, 'index']);
Route::post('/admin/add/hospital', [HospitalsController::class, 'create'])->name('add.hospital');

Route::get('/admin/add/diseases',[DiseasesController::class, 'index']);
Route::post('/admin/add/diseases', [DiseasesController::class, 'create'])->name('add.diseases');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\HospitalsController;
use App\Http\Controllers\DiseasesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;

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

Route::get('/doctors', [PagesController::class, 'doctorsPage'])->name('user.doctors');
Route::get('/hospitals', [PagesController::class, 'hospitalsPage'])->name('user.hospitals');
Route::get('/diseases', [PagesController::class, 'diseasesPage'])->name('user.diseases');
Route::get('/suggest', [PagesController::class, 'suggestsPage'])->name('user.suggest');


Route::get('/admin', [PagesController::class, 'admin'])->name('admin.main');
Route::get('/admin/doctors', [AdminController::class, 'doctors'])->name('doctors.list');
Route::get('/admin/hospitals', [AdminController::class, 'hospitals'])->name('hospitals.list');
Route::get('/admin/diseases', [AdminController::class, 'diseases'])->name('diseases.list');

Route::get('/admin/add/doctor', [DoctorsController::class, 'index']);
Route::get('/user/add/doctor', [PagesController::class, 'addDoctor'])->name('user.add.doctor');
Route::get('/admin/edit/doctor/{id}', [DoctorsController::class, 'editPage'])->name('edit.doctor.form');
Route::get('/doctor/show/{id}', [DoctorsController::class, 'show'])->name('user.show.doctor');
Route::post('/admin/add/doctor', [DoctorsController::class, 'create'])->name('add.doctor');
Route::post('/doctor/add/comment/{id}', [DoctorsController::class, 'commentAdd'])->name('doctor.comment');
Route::post('/admin/accept/doctor/{id}', [DoctorsController::class, 'accept'])->name('accept.doctor');
Route::put('/admin/edit/doctor/{id}', [DoctorsController::class, 'edit'])->name('edit.doctor');
Route::delete('/admin/delete/doctor/{id}', [DoctorsController::class, 'delete'])->name('delete.doctor');

Route::get('/admin/add/hospital',[HospitalsController::class, 'index']);
Route::get('/admin/edit/hospital/{id}', [HospitalsController::class, 'editPage'])->name('edit.hospital.form');
Route::get('/hospital/show/{id}', [HospitalsController::class, 'show'])->name('user.show.hospital');
Route::post('/admin/add/hospital', [HospitalsController::class, 'create'])->name('add.hospital');
Route::post('/hospital/add/comment/{id}', [HospitalsController::class, 'commentAdd'])->name('hospital.comment');
Route::post('/admin/accept/hospital/{id}', [HospitalsController::class, 'accept'])->name('accept.hospital');
Route::put('/admin/edit/hospital/{id}', [HospitalsController::class, 'edit'])->name('edit.hospital');
Route::delete('/admin/delete/hospital/{id}', [HospitalsController::class, 'delete'])->name('delete.hospital');



Route::get('/admin/add/diseases',[DiseasesController::class, 'index']);
Route::get('/admin/edit/diseases/{id}', [DiseasesController::class, 'editPage'])->name('edit.diseases.form');
Route::post('/admin/add/diseases', [DiseasesController::class, 'create'])->name('add.diseases');
Route::post('/admin/accept/disease/{id}', [DiseasesController::class, 'accept'])->name('accept.disease');
Route::put('/admin/edit/diseases/{id}', [DiseasesController::class, 'edit'])->name('edit.diseases');
Route::delete('/admin/delete/diseases/{id}', [DiseasesController::class, 'delete'])->name('delete.disease');


Route::get('/', function () {
    return view('user.index');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\HospitalsController;
use App\Http\Controllers\DiseasesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\NotificationController;

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
Route::get('/admin/notifications', [AdminController::class, 'notifications'])->name('notifications.list');
Route::get('/admin/notifications/archive', [AdminController::class, 'deletedNotifications'])->name('notifications.list.archive');

Route::get('/admin/add/doctor', [DoctorsController::class, 'index']);
Route::get('/admin/edit/doctor/{id}', [DoctorsController::class, 'editPage'])->name('edit.doctor.form');
Route::get('/user/add/doctor', [pagesController::class, 'addDoctor'])->name('user.add.doctor');
Route::get('/doctor/show/{id}', [DoctorsController::class, 'show'])->name('user.show.doctor');
Route::post('/doctor/specialization/filterd', [DoctorsController::class, 'specializationFilter'])->name('doctor.specialization');
Route::post('/doctor/search', [DoctorsController::class, 'search'])->name('doctor.search');
Route::post('/admin/add/doctor', [DoctorsController::class, 'create'])->name('add.doctor');
Route::post('/user/add/doctor', [DoctorsController::class, 'create'])->name('user.add.doctor');
Route::post('/doctor/add/comment/{id}', [DoctorsController::class, 'commentAdd'])->name('doctor.comment');
Route::post('/doctor/like/{id}', [DoctorsController::class, 'like'])->name('doctor.like');
Route::post('/admin/accept/doctor/{id}', [DoctorsController::class, 'accept'])->name('accept.doctor');
Route::put('/admin/edit/doctor/{id}', [DoctorsController::class, 'edit'])->name('edit.doctor');
Route::delete('/admin/delete/doctor/{id}', [DoctorsController::class, 'delete'])->name('delete.doctor');
Route::delete('/like/delete/doctor/{id}', [DoctorsController::class, 'LikeDelete'])->name('doctor.like.delete');

Route::get('/admin/add/hospital',[HospitalsController::class, 'index']);
Route::get('/admin/edit/hospital/{id}', [HospitalsController::class, 'editPage'])->name('edit.hospital.form');
Route::get('/user/add/hospital', [pagesController::class, 'addHospital'])->name('user.add.hospital');
Route::get('/hospital/show/{id}', [HospitalsController::class, 'show'])->name('user.show.hospital');
Route::post('/hospital/search', [HospitalsController::class, 'search'])->name('hospital.search');
Route::post('/admin/add/hospital', [HospitalsController::class, 'create'])->name('add.hospital');
Route::post('/user/add/hospital', [HospitalsController::class, 'create'])->name('user.add.hospital');
Route::post('/hospital/add/comment/{id}', [HospitalsController::class, 'commentAdd'])->name('hospital.comment');
Route::post('/hospital/like/{id}', [HospitalsController::class, 'like'])->name('hospital.like');
Route::post('/admin/accept/hospital/{id}', [HospitalsController::class, 'accept'])->name('accept.hospital');
Route::put('/admin/edit/hospital/{id}', [HospitalsController::class, 'edit'])->name('edit.hospital');
Route::delete('/admin/delete/hospital/{id}', [HospitalsController::class, 'delete'])->name('delete.hospital');
Route::delete('/like/delete/hospital/{id}', [HospitalsController::class, 'likeDelete'])->name('hospital.like.delete');
Route::post('/doctor/governorate/filterd', [HospitalsController::class, 'governorateFilter'])->name('hospital.governorate');




Route::get('/admin/add/diseases',[DiseasesController::class, 'index']);
Route::get('/admin/edit/diseases/{id}', [DiseasesController::class, 'editPage'])->name('edit.diseases.form');
Route::get('/user/add/disease', [pagesController::class, 'addDisease'])->name('user.add.disease');
Route::post('/admin/add/diseases', [DiseasesController::class, 'create'])->name('add.diseases');
Route::post('/user/add/disease', [DiseasesController::class, 'create'])->name('user.add.disease');
Route::post('/admin/accept/disease/{id}', [DiseasesController::class, 'accept'])->name('accept.disease');
Route::put('/admin/edit/diseases/{id}', [DiseasesController::class, 'edit'])->name('edit.diseases');
Route::delete('/admin/delete/diseases/{id}', [DiseasesController::class, 'delete'])->name('delete.disease');

Route::get('/issue/show/{id}', [NotificationController::class, 'show'])->name('issue.show');
Route::get('/issue/show/deleted/{id}', [NotificationController::class, 'showDeleted'])->name('deleted.issue.show');
Route::post('/user/add/notification', [NotificationController::class, 'create'])->name('user.add.notification');
Route::delete('/admin/delete/notification/{id}', [notificationController::class, 'delete'])->name('delete.notification');
Route::delete('/admin/forcedelete/notification/{id}', [notificationController::class, 'forceDelete'])->name('force.delete.notification');



Route::get('/', function () {
    return view('user.index');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\ClinicController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Dashboard Route:------------------------------------------------

Route::get('/', [AdminController::class, 'index'])
      ->name('admin.index');

// User Route:------------------------------------------------

Route::get('/user', [UserController::class, 'UserIndex'])
      ->name('user.index');

Route::get('/user/edit/{id}', [UserController::class, 'edit'])
      ->name('users.edit');

Route::put("/user/update/{id}", [UserController::class, 'update'])
      ->name("user.update");

Route::get('/user/delete/{id}', [UserController::class, 'delete'])
      ->name('user.delete');

// Doctor Route:------------------------------------------------

Route::get('/doctor', [DoctorController::class, 'DoctorIndex'])
      ->name('doctor.index');

Route::get('/doctor/edit/{id}', [DoctorController::class, 'edit'])
      ->name('doctor.edit');

Route::put("/doctor/update/{id}", [DoctorController::class, 'update'])
      ->name("doctor.update");

Route::get('/doctor/delete/{id}', [DoctorController::class, 'delete'])
      ->name('doctor.delete');
      
Route::get('/major', [MajorController::class, 'MajorIndex'])
      ->name('major.index');

// Clinic InterFace Route:------------------------------------------------

Route::get('/clinic', [ClinicController::class, 'clinicIndex'])
    ->name('clinic.index');

Route::get('/clinic/login', [ClinicController::class, 'ClinicLogIn'])
    ->name('clinic.login');

Route::get('/clinic/major', [ClinicController::class, 'ClinicMajors'])
    ->name('clinic.major');

Route::get('/clinic/contact', [ClinicController::class, 'ClinicContact'])
    ->name('clinic.contact');


Route::get('/clinic/register', [ClinicController::class, 'ClinicRegister'])
    ->name('clinic.register');

Route::get('/clinic/doctors/doctor', [ClinicController::class, 'ClinicDoctors'])
    ->name('clinic.doctor');

Route::get('/clinic/doctors/index', [ClinicController::class, 'ClinicDoctor'])
    ->name('clinic.doctors');

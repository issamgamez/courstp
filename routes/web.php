// routes/web.php
<?php

use App\Http\Controllers\CoursController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ObjectifsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::resources([
    'cours' => CoursController::class,
    'objectifs'=>ObjectifsController::class
]);


Route::get('/', [CoursController::class, 'index'])->name('cours');

// Route for the register method
Route::get('/user/register', [UserController::class, 'register'])->name('user.register');
Route::get('/user/login', [UserController::class, 'login'])->name('user.login');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store'); 

Route::post('/login', [UserController::class, 'loginUser'])->name('login');
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

Route::get('/cours/{id}/objectifs', [CoursController::class, 'objectifs'])->name('cours.objectifs');
Route::get('/objectifs/create/{numero}', [ObjectifsController::class, 'create'])->name('objectifs.create');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\AdminController;



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

Route::get("/", function () {
    return view("welcome");
});

Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');

});

Route::group(['middleware' => 'auth'], function () {
    //admin pages
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('dashboard.index');
    Route::get('/admin/informatique', [AdminController::class,'informatique'])->name('admin.informatique');
    Route::get('/admin/infographie', [AdminController::class,'infographie'])->name('admin.infographie');
    Route::get('/admin/gestion', [AdminController::class,'gestion'])->name('admin.gestion');
    //logout 
        Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
    // home etudiants
    Route::get('/etudiant', [EtudiantController::class, 'etudiant'])->name('etu.userHome');
    // page inscription
    Route::get('/inscription', [EtudiantController::class, 'inscription'])->name('etu.inscription');
    Route::post('/inscription', [EtudiantController::class, 'store'])->name('etu.inscription');

});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
/*route de base debut de l'application direction ins.blade.php*/
Route::get('/', function () {
    return view('conn');
});

Route::get('/ins', function () {
    return view('ins');
});
Route::view('/etudiant', 'etudiant')->name('etudiant');
Route::view('/enseignant', 'enseignant')->name('enseignant');
Route::view('/admin', 'admin')->name('admin');
Route::view('/conn', 'conn')->name('conn');




Route::middleware('auth')->get('/profile', [AuthController::class, 'profile'])->name('profile');
Route::middleware('auth')->get('/etudiants', [AuthController::class, 'listEtudiants'])->name('listEtudiants');



/*route direction la page d'inscription  t connection*/
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


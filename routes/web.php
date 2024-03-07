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

/*route direction la page d'inscription  t connection*/
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
route::get('/logout',[AuthController::class,'logout']);


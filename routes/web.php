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
    return view('index');
});

Route::get('/ins', function () {
    return view('ins');
});
Route::view('/etudiant', 'etudiant')->name('etudiant');
Route::view('/enseignant', 'enseignant')->name('enseignant');
Route::view('/admin', 'admin')->name('admin');
Route::view('/conn', 'conn')->name('conn');
Route::view('/ajouterclasse', 'ajouterclasse')->name('ajouterclasse');
Route::view('/index', 'index')->name('index');
Route::view('/yoo', 'yoo')->name('yoo');






Route::middleware('auth')->get('/profile', [AuthController::class, 'profile'])->name('profile');
Route::middleware('auth')->get('/etudiants', [AuthController::class, 'listEtudiants'])->name('listEtudiants');
Route::middleware('auth')->get('/note', [AuthController::class, 'noteEtudiants'])->name('noteEtudiants');
Route::middleware('auth')->get('/voirnote', [AuthController::class, 'voirmesnotes'])->name('voirmesnotes');
Route::middleware('auth')->get('/voire', [AuthController::class, 'voirenotess'])->name('voirenotess');





/*route direction la page d'inscription  t connection*/
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/create-classe', [AuthController::class, 'createClasse'])->name('createClasse');
Route::get('/Listeclasse', [AuthController::class, 'Listeclasse'])->name('Listeclasse');
Route::get('/Listenote', [AuthController::class, 'Listenotes'])->name('Listenote');
Route::get('/Ajouteruser', [AuthController::class, 'Ajouteruser'])->name('Ajouteruser');
Route::post('/save-notes', [AuthController::class, 'saveNotes'])->name('save.notes');
Route::delete('/delete/{student}', [AuthController::class, 'delete'])->name('delete');
Route::get('/edit/{user}', [AuthController::class, 'edit'])->name('edit');






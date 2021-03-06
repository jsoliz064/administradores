<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\MateriaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('grupos.index');
})->name('inicio');

Route::get('maestro-oferta', function () {
    return view('grupos.index');
})->name('maestro.index');

Auth::routes();

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('grupos.index');
})->name('dashboard');

Route::get('salir', function () {
    auth()->logout();
    return redirect()->route('inicio');
})->name('user.logout');

Route::get('materias', function () {
    return view('materia.index');
})->name('materias.index');


Route::get('materias-estudiantes/{materia_id}', [MateriaController::class, 'show2'])->name('materia.estudiantes.show');
Route::get('estudiantes', [EstudianteController::class, 'index2'])->name('estudiantes.index');

Route::get('user/profile/', [UserController::class, 'show2'])->name('user.show');
Route::patch('user/update/', [UserController::class, 'update2'])->name('user.update');
Route::resource('users', UserController::class)->names('admin.users');
// Contact Us Route
Route::get('/contact-us', function () {
    return view('contact');
})->name('contact-us');

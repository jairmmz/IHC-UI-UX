<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::get('/services', [UserController::class, 'services'])->name('services');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/perfil', [UserController::class, 'perfil'])->name('perfil');

Route::patch('/perfil/{contact}', [UserController::class, 'perfilSave'])->name('perfil.update');



Route::post('contact/store', [UserController::class, 'store'])->name('contact.store');


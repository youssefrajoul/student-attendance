<?php

use App\Http\Controllers\StudentsCtrl;
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

Route::get('/', [StudentsCtrl::class, 'home']);

Route::get('/form', [StudentsCtrl::class, 'showForm'])->name('form.show');

Route::post('/form', [StudentsCtrl::class, 'processForm'])->name('form.process');

Route::get('/delete', [StudentsCtrl::class, 'showDelete'])->name('delete.show');

Route::post('/delete', [StudentsCtrl::class, 'processDelete'])->name('delete.process');


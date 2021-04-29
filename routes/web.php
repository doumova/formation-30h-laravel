<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerEtudiants;
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
Route::get('/','ControllerEtudiants@index');
Route::get('/etudiants/create','ControllerEtudiants@create')->name('etudiant.create');
Route::post('/etudiants/store','ControllerEtudiants@store')->name('etudiant.store');
Route::post('/etudiants','ControllerEtudiants@update')->name('etudiant.update');
Route::get('/etudiants/{id}','ControllerEtudiants@edit')->name('etudiant.edit');
Route::get('/destroy/{id}','ControllerEtudiants@destroy')->name('etudiant.destroy');
Route::get('/detail/{id}','ControllerEtudiants@show')->name('etudiant.show');


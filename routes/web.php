<?php

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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/accueil', function () {
    return view('accueil');
});
Route::get('/', [App\Http\Controllers\ClientController::class, 'form_welcome']);

Route::get('/register', [App\Http\Controllers\ClientController::class, 'form_register']);
Route::post('/register/traitement', [App\Http\Controllers\ClientController::class, 'traitement_register']);
Route::get('/login', [App\Http\Controllers\ClientController::class, 'form_login']);
Route::post('/login/traitement', [App\Http\Controllers\ClientController::class, 'traitement_login']);
Route::get('/reserver', [App\Http\Controllers\ClientController::class, 'reserver']);
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'form_admin']);
Route::post('/admin/traitement', [App\Http\Controllers\AdminController::class, 'traitement_admin']);
Route::get('/management', [App\Http\Controllers\AdminController::class, 'form_management']);
Route::get('/gestionClient', [App\Http\Controllers\ClientController::class, 'form_gestionClient']);
Route::delete('/delete_user/{id}', 'App\Http\Controllers\ClientController@destroy')->name('delete_user');
Route::get('/gestionTrajet', [App\Http\Controllers\DestinationController::class, 'form_gestionTrajet']);
Route::post('/trajet/traitement', [App\Http\Controllers\DestinationController::class, 'traitement_trajet']);
Route::post('/logout', 'App\Http\Controllers\AdminController@logout')->name('logout');
Route::delete('/delete_destination/{id}', 'App\Http\Controllers\DestinationController@destroy')->name('delete_destination');